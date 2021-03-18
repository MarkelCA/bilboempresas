<?php

namespace Drupal\vardumper\VarDumper\Dumper;

use Symfony\Component\VarDumper\Cloner\Cursor;
use Symfony\Component\VarDumper\Dumper\HtmlDumper;

/**
 * HtmlDrupalDumper dumps variables as HTML.
 *
 * @author Pol Dellaiera <pol.dellaiera@protonmail.com>
 */
class HtmlDrupalDumper extends HtmlDumper {
  protected $styles = [
    'default' => 'background-color:#18171B; color:#FF8400; line-height:1.2em; font:12px Menlo, Monaco, Consolas, monospace; word-wrap: break-word; white-space: pre-wrap; position:relative;',
    'num' => 'font-weight:bold; color:#1299DA',
    'const' => 'font-weight:bold',
    'str' => 'font-weight:bold; color:#56DB3A',
    'cchr' => 'color:#FF8400',
    'note' => 'color:#1299DA',
    'ref' => 'color:#A0A0A0',
    'public' => 'color:#FFFFFF',
    'protected' => 'color:#FFFFFF',
    'private' => 'color:#FFFFFF',
    'meta' => 'color:#B729D9',
    'key' => 'color:#56DB3A',
    'index' => 'color:#1299DA',
  ];

  /**
   * {@inheritdoc}
   */
  public function dumpString(Cursor $cursor, $str, $bin, $cut) {
    $this->dumpKey($cursor);

    if ($bin) {
      $str = $this->utf8Encode($str);
    }

    if ($str === '') {
      $this->line .= '""';
      $this->dumpLine($cursor->depth, TRUE);
    }
    else {
      $attr = [
        'length' => $cut >= 0 && \function_exists('iconv_strlen') ? iconv_strlen(
          $str,
          'UTF-8'
        ) + $cut : 0,
        'binary' => $bin,
      ];
      $str = explode("\n", $str);

      if (isset($str[1]) && !isset($str[2]) && !isset($str[1][0])) {
        unset($str[1]);
        $str[0] .= "\n";
      }
      $m = \count($str) - 1;
      $i = $lineCut = 0;

      if ($bin) {
        $this->line .= 'b';
      }

      if ($m) {
        $this->line .= '"""';
        $this->dumpLine($cursor->depth);
      }
      else {
        $this->line .= '"';
      }

      foreach ($str as $str) {
        if ($i < $m) {
          $str .= "\n";
        }

        if ($this->maxStringWidth > 0 && $this->maxStringWidth < $len = iconv_strlen(
          $str,
          'UTF-8'
        )
        ) {
          $str = iconv_substr($str, 0, $this->maxStringWidth, 'UTF-8');
          $lineCut = $len - $this->maxStringWidth;
        }

        if ($m && $cursor->depth > 0) {
          $this->line .= $this->indentPad;
        }

        if ($str !== '') {
          if (mb_substr($str, 0, 5) === 'link:') {
            $this->line .= $this->style('link', $str, $attr);
          }
          else {
            $this->line .= $this->style('str', $str, $attr);
          }
        }

        if ($i++ === $m) {
          if ($m) {
            if ($str !== '') {
              $this->dumpLine($cursor->depth);

              if ($cursor->depth > 0) {
                $this->line .= $this->indentPad;
              }
            }
            $this->line .= '"""';
          }
          else {
            $this->line .= '"';
          }

          if ($cut < 0) {
            $this->line .= '…';
            $lineCut = 0;
          }
          elseif ($cut) {
            $lineCut += $cut;
          }
        }

        if ($lineCut) {
          $this->line .= '…' . $lineCut;
          $lineCut = 0;
        }

        $this->dumpLine($cursor->depth, $i > $m);
      }
    }
  }

  /**
   * @param $style
   * @param $v
   * @param $c
   *
   * @return string
   */
  protected function getClassStyle($style, $v, $c) {
    if (\Drupal::hasService('webprofiler.ide_link_generator') && \Drupal::hasService('webprofiler.class_shortener')) {
      $ideLinkGenerator = \Drupal::service('webprofiler.ide_link_generator');
      $classShortener = \Drupal::service('webprofiler.class_shortener');

      $reflectedClass = new \ReflectionClass($v);
      $file = $reflectedClass->getFileName();

      $ideLink = $ideLinkGenerator->generateLink($file, 0);
      $abbr = $classShortener->shortenClass($v, 'sf-dump-' . $style);

      return sprintf('<a href=%s>%s</a>', $ideLink, $abbr);
    }

    return sprintf(
      '<abbr title="%s" class=sf-dump-%s>%s</abbr>',
      $v,
      $style,
      mb_substr($v, $c + 1)
    );
  }

  /**
   * Dumps the HTML header.
   *
   * This has been overridden to replace the class sf-dump-expanded by
   * sf-dump-compact so arrays are collapsed by default.
   */
  protected function getDumpHeader() {
    $this->headerIsDumped = TRUE;

    if ($this->dumpHeader !== NULL) {
      return $this->dumpHeader;
    }

    $line = <<<'EOHTML'
<script>
Sfdump = window.Sfdump || (function (doc) {

var refStyle = doc.createElement('style'),
    rxEsc = /([.*+?^${}()|\[\]\/\\])/g,
    idRx = /\bsf-dump-\d+-ref[012]\w+\b/,
    keyHint = 0 <= navigator.platform.toUpperCase().indexOf('MAC') ? 'Cmd' : 'Ctrl',
    addEventListener = function (e, n, cb) {
        e.addEventListener(n, cb, false);
    };

doc.documentElement.firstChild.appendChild(refStyle);

if (!doc.addEventListener) {
    addEventListener = function (element, eventName, callback) {
        element.attachEvent('on' + eventName, function (e) {
            e.preventDefault = function () {e.returnValue = false;};
            e.target = e.srcElement;
            callback(e);
        });
    };
}

function toggle(a, recursive) {
    var s = a.nextSibling || {}, oldClass = s.className, arrow, newClass;

    if ('sf-dump-compact' == oldClass) {
        arrow = '▼';
        newClass = 'sf-dump-expanded';
    } else if ('sf-dump-expanded' == oldClass) {
        arrow = '▶';
        newClass = 'sf-dump-compact';
    } else {
        return false;
    }

    a.lastChild.innerHTML = arrow;
    s.className = newClass;

    if (recursive) {
        try {
            a = s.querySelectorAll('.'+oldClass);
            for (s = 0; s < a.length; ++s) {
                if (a[s].className !== newClass) {
                    a[s].className = newClass;
                    a[s].previousSibling.lastChild.innerHTML = arrow;
                }
            }
        } catch (e) {
        }
    }

    return true;
};

return function (root) {
    root = doc.getElementById(root);

    function a(e, f) {
        addEventListener(root, e, function (e) {
            if ('A' == e.target.tagName) {
                f(e.target, e);
            } else if ('A' == e.target.parentNode.tagName) {
                f(e.target.parentNode, e);
            }
        });
    };
    function isCtrlKey(e) {
        return e.ctrlKey || e.metaKey;
    }
    addEventListener(root, 'mouseover', function (e) {
        if ('' != refStyle.innerHTML) {
            refStyle.innerHTML = '';
        }
    });
    a('mouseover', function (a) {
        if (a = idRx.exec(a.className)) {
            try {
                refStyle.innerHTML = 'pre.sf-dump .'+a[0]+'{background-color: #B729D9; color: #FFF !important; border-radius: 2px}';
            } catch (e) {
            }
        }
    });
    a('click', function (a, e) {
        if (/\bsf-dump-toggle\b/.test(a.className)) {
            e.preventDefault();
            if (!toggle(a, isCtrlKey(e))) {
                var r = doc.getElementById(a.getAttribute('href').substr(1)),
                    s = r.previousSibling,
                    f = r.parentNode,
                    t = a.parentNode;
                t.replaceChild(r, a);
                f.replaceChild(a, s);
                t.insertBefore(s, r);
                f = f.firstChild.nodeValue.match(indentRx);
                t = t.firstChild.nodeValue.match(indentRx);
                if (f && t && f[0] !== t[0]) {
                    r.innerHTML = r.innerHTML.replace(new RegExp('^'+f[0].replace(rxEsc, '\\$1'), 'mg'), t[0]);
                }
                if ('sf-dump-compact' == r.className) {
                    toggle(s, isCtrlKey(e));
                }
            }

            if (doc.getSelection) {
                try {
                    doc.getSelection().removeAllRanges();
                } catch (e) {
                    doc.getSelection().empty();
                }
            } else {
                doc.selection.empty();
            }
        }
    });

    var indentRx = new RegExp('^('+(root.getAttribute('data-indent-pad') || '  ').replace(rxEsc, '\\$1')+')+', 'm'),
        elt = root.getElementsByTagName('A'),
        len = elt.length,
        i = 0,
        t = [];

    while (i < len) t.push(elt[i++]);

    elt = root.getElementsByTagName('SAMP');
    len = elt.length;
    i = 0;

    while (i < len) t.push(elt[i++]);

    root = t;
    len = t.length;
    i = t = 0;

    while (i < len) {
        elt = root[i];
        if ("SAMP" == elt.tagName) {
            elt.className = "sf-dump-expanded";
            a = elt.previousSibling || {};
            if ('A' != a.tagName) {
                a = doc.createElement('A');
                a.className = 'sf-dump-ref';
                elt.parentNode.insertBefore(a, elt);
            } else {
                a.innerHTML += ' ';
            }
            a.title = (a.title ? a.title+'\n[' : '[')+keyHint+'+click] Expand all children';
            a.innerHTML += '<span>▼</span>';
            a.className += ' sf-dump-toggle';
            toggle(a);
        } else if ("sf-dump-ref" == elt.className && (a = elt.getAttribute('href'))) {
            a = a.substr(1);
            elt.className += ' '+a;

            if (/[\[{]$/.test(elt.previousSibling.nodeValue)) {
                a = a != elt.nextSibling.id && doc.getElementById(a);
                try {
                    t = a.nextSibling;
                    elt.appendChild(a);
                    t.parentNode.insertBefore(a, t);
                    if (/^[@#]/.test(elt.innerHTML)) {
                        elt.innerHTML += ' <span>▶</span>';
                    } else {
                        elt.innerHTML = '<span>▶</span>';
                        elt.className = 'sf-dump-ref';
                    }
                    elt.className += ' sf-dump-toggle';
                } catch (e) {
                    if ('&' == elt.innerHTML.charAt(0)) {
                        elt.innerHTML = '…';
                        elt.className = 'sf-dump-ref';
                    }
                }
            }
        }
        ++i;
    }
};

})(document);
</script>
<style>
pre.sf-dump {
    display: block;
    white-space: pre;
    padding: 5px;
}
pre.sf-dump span {
    display: inline;
}
pre.sf-dump .sf-dump-compact {
    display: none;
}
pre.sf-dump abbr {
    text-decoration: none;
    border: none;
    cursor: help;
}
pre.sf-dump a {
    text-decoration: none;
    cursor: pointer;
    border: 0;
    outline: none;
}
EOHTML;

    foreach ($this->styles as $class => $style) {
      $line .= 'pre.sf-dump' . ($class !== 'default' ? ' .sf-dump-' . $class : '') . '{' . $style . '}';
    }

    return $this->dumpHeader = preg_replace('/\s+/', ' ', $line) . '</style>' . $this->dumpHeader;
  }

  /**
   * {@inheritdoc}
   */
  protected function style($style, $value, $attr = []) {
    if ($value === '') {
      return '';
    }

    $v = htmlspecialchars($value, \ENT_QUOTES, 'UTF-8');

    if ($style === 'note' && FALSE !== $c = mb_strrpos($v, '\\')) {
      return $this->getClassStyle($style, $v, $c);
    }

    if ($style === 'link') {
      $parts = explode('|', $value);

      return sprintf('<a href=%s>%s</a>', mb_substr($parts[0], 6), $parts[1]);
    }

    return parent::style($style, $value, $attr);
  }

}
