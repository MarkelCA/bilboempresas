/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/
var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

(function ($, Drupal, drupalSettings) {
  var showWeight = JSON.parse(localStorage.getItem('Drupal.tableDrag.showWeight'));

  Drupal.behaviors.tableDrag = {
    attach: function attach(context, settings) {
      function initTableDrag(table, base) {
        if (table.length) {
          Drupal.tableDrag[base] = new Drupal.tableDrag(table[0], settings.tableDrag[base]);
        }
      }

      Object.keys(settings.tableDrag || {}).forEach(function (base) {
        initTableDrag($(context).find('#' + base).once('tabledrag'), base);
      });
    }
  };

  Drupal.tableDrag = function init(table, tableSettings) {
    var _this = this;

    var self = this;
    var $table = $(table);

    this.$table = $(table);

    this.table = table;

    this.tableSettings = tableSettings;

    this.dragObject = null;

    this.rowObject = null;

    this.oldRowElement = null;

    this.oldY = null;

    this.changed = false;

    this.maxDepth = 0;

    this.rtl = $(this.table).css('direction') === 'rtl' ? -1 : 1;

    this.striping = $(this.table).data('striping') === 1;

    this.scrollSettings = { amount: 4, interval: 50, trigger: 70 };

    this.scrollInterval = null;

    this.scrollY = 0;

    this.windowHeight = 0;

    this.indentEnabled = false;
    Object.keys(tableSettings || {}).forEach(function (group) {
      Object.keys(tableSettings[group] || {}).forEach(function (n) {
        if (tableSettings[group][n].relationship === 'parent') {
          _this.indentEnabled = true;
        }
        if (tableSettings[group][n].limit > 0) {
          _this.maxDepth = tableSettings[group][n].limit;
        }
      });
    });
    if (this.indentEnabled) {
      this.indentCount = 1;

      var indent = Drupal.theme('tableDragIndentation');
      var testRow = $('<tr></tr>').addClass('draggable').appendTo(table);
      var testCell = $('<td></td>').appendTo(testRow).prepend(indent).prepend(indent);
      var $indentation = testCell.find('.js-indentation');

      this.indentAmount = $indentation.get(1).offsetLeft - $indentation.get(0).offsetLeft;
      testRow.remove();
    }

    $table.find('> tr.draggable, > tbody > tr.draggable').each(function initDraggable() {
      self.makeDraggable(this);
    });

    $table.before($(Drupal.theme('tableDragToggleWrapper')).addClass('js-tabledrag-toggle-weight-wrapper').on('click', '.js-tabledrag-toggle-weight', $.proxy(function toggleColumns(event) {
      event.preventDefault();
      this.toggleColumns();
    }, this)));

    self.initColumns();

    $(document).on('touchmove', function (event) {
      return self.dragRow(event.originalEvent.touches[0], self);
    });
    $(document).on('touchend', function (event) {
      return self.dropRow(event.originalEvent.touches[0], self);
    });
    $(document).on('mousemove pointermove', function (event) {
      return self.dragRow(event, self);
    });
    $(document).on('mouseup pointerup', function (event) {
      return self.dropRow(event, self);
    });

    $(window).on('storage', $.proxy(function weightColumnDisplayChange(event) {
      if (event.originalEvent.key === 'Drupal.tableDrag.showWeight') {
        showWeight = JSON.parse(event.originalEvent.newValue);
        this.displayColumns(showWeight);
      }
    }, this));
  };

  $.extend(Drupal.tableDrag.prototype, {
    initColumns: function initColumns() {
      var _this2 = this;

      var $table = this.$table;

      var hidden = void 0;
      var cell = void 0;
      var columnIndex = void 0;
      Object.keys(this.tableSettings || {}).forEach(function (group) {
        Object.keys(_this2.tableSettings[group]).some(function (tableSetting) {
          var field = $table.find('.' + _this2.tableSettings[group][tableSetting].target).eq(0);
          if (field.length && _this2.tableSettings[group][tableSetting].hidden) {
            hidden = _this2.tableSettings[group][tableSetting].hidden;
            cell = field.closest('td');
            return true;
          }
          return false;
        });

        if (hidden && cell[0]) {
          columnIndex = cell.parent().find('> td').index(cell.get(0)) + 1;
          $table.find('> thead > tr, > tbody > tr, > tr').each(_this2.addColspanClass(columnIndex));
        }
      });
      this.displayColumns(showWeight);
    },
    addColspanClass: function addColspanClass(columnIndex) {
      return function addColspanClass() {
        var $row = $(this);
        var index = columnIndex;
        var cells = $row.children();
        var cell = void 0;
        cells.each(function checkColspan(n) {
          if (n < index && this.colSpan && this.colSpan > 1) {
            index -= this.colSpan - 1;
          }
        });
        if (index > 0) {
          cell = cells.filter(':nth-child(' + index + ')');
          if (cell[0].colSpan && cell[0].colSpan > 1) {
            cell.addClass('tabledrag-has-colspan');
          } else {
            cell.addClass('tabledrag-hide');
          }
        }
      };
    },
    displayColumns: function displayColumns(displayWeight) {
      if (displayWeight) {
        this.showColumns();
      } else {
          this.hideColumns();
        }

      $('table').findOnce('tabledrag').trigger('columnschange', !!displayWeight);
    },
    toggleColumns: function toggleColumns() {
      showWeight = !showWeight;
      this.displayColumns(showWeight);
      if (showWeight) {
        localStorage.setItem('Drupal.tableDrag.showWeight', showWeight);
      } else {
        localStorage.removeItem('Drupal.tableDrag.showWeight');
      }
    },
    hideColumns: function hideColumns() {
      var $tables = $('table').findOnce('tabledrag');

      $tables.find('.tabledrag-hide').css('display', 'none');

      $tables.find('.js-tabledrag-handle').css('display', '');

      $tables.find('.tabledrag-has-colspan').each(function decreaseColspan() {
        this.colSpan = this.colSpan - 1;
      });

      $('.js-tabledrag-toggle-weight-wrapper').each(function addShowWeightToggle() {
        var $wrapper = $(this);
        var toggleWasFocused = $wrapper.find('.js-tabledrag-toggle-weight:focus').length;
        $wrapper.empty().append($(Drupal.theme('tableDragToggle', 'show', Drupal.t('Show row weights'))).addClass('js-tabledrag-toggle-weight'));
        if (toggleWasFocused) {
          $wrapper.find('.js-tabledrag-toggle-weight').trigger('focus');
        }
      });
    },
    showColumns: function showColumns() {
      var $tables = $('table').findOnce('tabledrag');

      $tables.find('.tabledrag-hide').css('display', '');

      $tables.find('.js-tabledrag-handle').css('display', 'none');

      $tables.find('.tabledrag-has-colspan').each(function increaseColspan() {
        this.colSpan = this.colSpan + 1;
      });

      $('.js-tabledrag-toggle-weight-wrapper').each(function addHideWeightToggle() {
        var $wrapper = $(this);
        var toggleWasFocused = $wrapper.find('.js-tabledrag-toggle-weight:focus').length;
        $wrapper.empty().append($(Drupal.theme('tableDragToggle', 'hide', Drupal.t('Hide row weights'))).addClass('js-tabledrag-toggle-weight'));
        if (toggleWasFocused) {
          $wrapper.find('.js-tabledrag-toggle-weight').trigger('focus');
        }
      });
    },
    rowSettings: function rowSettings(group, row) {
      var field = $(row).find('.' + group);
      var tableSettingsGroup = this.tableSettings[group];
      return Object.keys(tableSettingsGroup).map(function (delta) {
        var targetClass = tableSettingsGroup[delta].target;
        var rowSettings = void 0;
        if (field.is('.' + targetClass)) {
          rowSettings = {};
          Object.keys(tableSettingsGroup[delta]).forEach(function (n) {
            rowSettings[n] = tableSettingsGroup[delta][n];
          });
        }
        return rowSettings;
      }).filter(function (rowSetting) {
        return rowSetting;
      })[0];
    },
    makeDraggable: function makeDraggable(item) {
      var self = this;
      var $item = $(item);
      var $firstCell = $item.find('td:first-of-type').wrapInner(Drupal.theme.tableDragCellContentWrapper()).wrapInner($(Drupal.theme('tableDragCellItemsWrapper')).addClass('js-tabledrag-cell-content'));
      var $targetElem = $firstCell.find('.js-tabledrag-cell-content').length ? $firstCell.find('.js-tabledrag-cell-content') : $firstCell.addClass('js-tabledrag-cell-content');

      $targetElem.find('.js-indentation').detach().prependTo($targetElem);

      $targetElem.find('a').addClass('menu-item__link');

      var handle = $(Drupal.theme.tableDragHandle()).addClass('js-tabledrag-handle').attr('title', Drupal.t('Drag to re-order'));

      var $indentationLast = $targetElem.find('.js-indentation').eq(-1);
      if ($indentationLast.length) {
        $indentationLast.after(handle);

        self.indentCount = Math.max($item.find('.js-indentation').length, self.indentCount);
      } else {
        $targetElem.prepend(handle);
      }

      handle.on('click', function (event) {
        event.preventDefault();
      });

      if (handle.closest('.js-tabledrag-disabled').length) {
        return;
      }

      handle.on('mousedown touchstart pointerdown', function (event) {
        event.preventDefault();
        if (event.originalEvent.type === 'touchstart') {
          event = event.originalEvent.touches[0];
        }
        self.dragStart(event, self, item);
      });

      handle.on('focus', function () {
        self.safeBlur = true;
      });

      handle.on('blur', function (event) {
        if (self.rowObject && self.safeBlur) {
          self.dropRow(event, self);
        }
      });

      handle.on('keydown', function (event) {
        if (event.keyCode !== 9 && !self.rowObject) {
          self.rowObject = new self.row(item, 'keyboard', self.indentEnabled, self.maxDepth, true);
        }

        var keyChange = false;
        var groupHeight = void 0;

        switch (event.keyCode) {
          case 37:
          case 63234:
            keyChange = true;
            self.rowObject.indent(-1 * self.rtl);
            break;

          case 38:
          case 63232:
            {
              var $previousRow = $(self.rowObject.element).prev('tr').eq(0);
              var previousRow = $previousRow.get(0);
              while (previousRow && $previousRow.is(':hidden')) {
                $previousRow = $(previousRow).prev('tr').eq(0);
                previousRow = $previousRow.get(0);
              }
              if (previousRow) {
                self.safeBlur = false;
                self.rowObject.direction = 'up';
                keyChange = true;

                if ($(item).is('.tabledrag-root')) {
                  groupHeight = 0;
                  while (previousRow && $previousRow.find('.js-indentation').length) {
                    $previousRow = $(previousRow).prev('tr').eq(0);
                    previousRow = $previousRow.get(0);
                    groupHeight += $previousRow.is(':hidden') ? 0 : previousRow.offsetHeight;
                  }
                  if (previousRow) {
                    self.rowObject.swap('before', previousRow);

                    window.scrollBy(0, -groupHeight);
                  }
                } else if (self.table.tBodies[0].rows[0] !== previousRow || $previousRow.is('.draggable')) {
                  self.rowObject.swap('before', previousRow);
                  self.rowObject.interval = null;
                  self.rowObject.indent(0);
                  window.scrollBy(0, -parseInt(item.offsetHeight, 10));
                }

                handle.trigger('focus');
              }
              break;
            }

          case 39:
          case 63235:
            keyChange = true;
            self.rowObject.indent(self.rtl);
            break;

          case 40:
          case 63233:
            {
              var $nextRow = $(self.rowObject.group).eq(-1).next('tr').eq(0);
              var nextRow = $nextRow.get(0);
              while (nextRow && $nextRow.is(':hidden')) {
                $nextRow = $(nextRow).next('tr').eq(0);
                nextRow = $nextRow.get(0);
              }
              if (nextRow) {
                self.safeBlur = false;
                self.rowObject.direction = 'down';
                keyChange = true;

                if ($(item).is('.tabledrag-root')) {
                  groupHeight = 0;
                  var nextGroup = new self.row(nextRow, 'keyboard', self.indentEnabled, self.maxDepth, false);
                  if (nextGroup) {
                    $(nextGroup.group).each(function groupIterator() {
                      groupHeight += $(this).is(':hidden') ? 0 : this.offsetHeight;
                    });
                    var nextGroupRow = $(nextGroup.group).eq(-1).get(0);
                    self.rowObject.swap('after', nextGroupRow);

                    window.scrollBy(0, parseInt(groupHeight, 10));
                  }
                } else {
                  self.rowObject.swap('after', nextRow);
                  self.rowObject.interval = null;
                  self.rowObject.indent(0);
                  window.scrollBy(0, parseInt(item.offsetHeight, 10));
                }

                handle.trigger('focus');
              }
              break;
            }
        }

        if (self.rowObject && self.rowObject.changed === true) {
          $(item).addClass('drag');
          if (self.oldRowElement) {
            $(self.oldRowElement).removeClass('drag-previous');
          }
          self.oldRowElement = item;
          if (self.striping === true) {
            self.restripeTable();
          }
          self.onDrag();
        }

        if (keyChange) {
          return false;
        }
      });

      handle.on('keypress', function (event) {

        switch (event.keyCode) {
          case 37:
          case 38:
          case 39:
          case 40:
            return false;
        }
      });
    },
    dragStart: function dragStart(event, self, item) {
      self.dragObject = {};
      self.dragObject.initOffset = self.getPointerOffset(item, event);
      self.dragObject.initPointerCoords = self.pointerCoords(event);
      if (self.indentEnabled) {
        self.dragObject.indentPointerPos = self.dragObject.initPointerCoords;
      }

      if (self.rowObject) {
        $(self.rowObject.element).find('.js-tabledrag-handle').trigger('blur');
      }

      self.rowObject = new self.row(item, 'pointer', self.indentEnabled, self.maxDepth, true);

      self.table.topY = $(self.table).offset().top;
      self.table.bottomY = self.table.topY + self.table.offsetHeight;

      $(item).addClass('drag');

      $('body').addClass('drag');
      if (self.oldRowElement) {
        $(self.oldRowElement).removeClass('drag-previous');
      }

      self.oldY = self.pointerCoords(event).y;
    },
    dragRow: function dragRow(event, self) {
      if (self.dragObject) {
        self.currentPointerCoords = self.pointerCoords(event);
        var y = self.currentPointerCoords.y - self.dragObject.initOffset.y;
        var x = self.currentPointerCoords.x - self.dragObject.initOffset.x;

        if (y !== self.oldY) {
          self.rowObject.direction = y > self.oldY ? 'down' : 'up';

          self.oldY = y;

          var scrollAmount = self.checkScroll(self.currentPointerCoords.y);

          clearInterval(self.scrollInterval);

          if (scrollAmount > 0 && self.rowObject.direction === 'down' || scrollAmount < 0 && self.rowObject.direction === 'up') {
            self.setScroll(scrollAmount);
          }

          var currentRow = self.findDropTargetRow(x, y);
          if (currentRow) {
            if (self.rowObject.direction === 'down') {
              self.rowObject.swap('after', currentRow, self);
            } else {
              self.rowObject.swap('before', currentRow, self);
            }
            if (self.striping === true) {
              self.restripeTable();
            }
          }
        }

        if (self.indentEnabled) {
          var xDiff = self.currentPointerCoords.x - self.dragObject.indentPointerPos.x;

          var indentDiff = Math.round(xDiff / self.indentAmount);

          var indentChange = self.rowObject.indent(indentDiff);

          self.dragObject.indentPointerPos.x += self.indentAmount * indentChange;
          self.indentCount = Math.max(self.indentCount, self.rowObject.indents);
        }

        return false;
      }
    },
    dropRow: function dropRow(event, self) {
      var droppedRow = void 0;
      var $droppedRow = void 0;

      if (self.rowObject !== null) {
        droppedRow = self.rowObject.element;
        $droppedRow = $(droppedRow);

        if (self.rowObject.changed === true) {
          self.updateFields(droppedRow);

          Object.keys(self.tableSettings || {}).forEach(function (group) {
            var rowSettings = self.rowSettings(group, droppedRow);
            if (rowSettings.relationship === 'group') {
              Object.keys(self.rowObject.children || {}).forEach(function (n) {
                self.updateField(self.rowObject.children[n], group);
              });
            }
          });

          self.rowObject.markChanged();
          if (self.changed === false) {
            var $messageTarget = $(self.table).prevAll('.js-tabledrag-toggle-weight-wrapper').length ? $(self.table).prevAll('.js-tabledrag-toggle-weight-wrapper').last() : self.table;
            $(Drupal.theme('tableDragChangedWarning')).insertBefore($messageTarget).hide().fadeIn('slow');
            self.changed = true;
          }
        }

        if (self.indentEnabled) {
          self.rowObject.removeIndentClasses();
        }
        if (self.oldRowElement) {
          $(self.oldRowElement).removeClass('drag-previous');
        }
        $droppedRow.removeClass('drag').addClass('drag-previous');
        self.oldRowElement = droppedRow;
        self.onDrop();
        self.rowObject = null;
      }

      if (self.dragObject !== null) {
        self.dragObject = null;
        $('body').removeClass('drag');
        clearInterval(self.scrollInterval);
      }
    },
    pointerCoords: function pointerCoords(event) {
      if (event.pageX || event.pageY) {
        return { x: event.pageX, y: event.pageY };
      }
      return {
        x: event.clientX + (document.body.scrollLeft - document.body.clientLeft),
        y: event.clientY + (document.body.scrollTop - document.body.clientTop)
      };
    },
    getPointerOffset: function getPointerOffset(target, event) {
      var docPos = $(target).offset();
      var pointerPos = this.pointerCoords(event);
      return { x: pointerPos.x - docPos.left, y: pointerPos.y - docPos.top };
    },
    findDropTargetRow: function findDropTargetRow(x, y) {
      var _this3 = this;

      var rows = $(this.table.tBodies[0].rows).not(':hidden');

      var _loop = function _loop(n) {
        var row = rows[n];
        var $row = $(row);
        var rowY = $row.offset().top;
        var rowHeight = void 0;

        if (row.offsetHeight === 0) {
          rowHeight = parseInt(row.firstChild.offsetHeight, 10) / 2;
        } else {
            rowHeight = parseInt(row.offsetHeight, 10) / 2;
          }

        if (y > rowY - rowHeight && y < rowY + rowHeight) {
          if (_this3.indentEnabled) {
            if (Object.keys(_this3.rowObject.group).some(function (o) {
              return _this3.rowObject.group[o] === row;
            })) {
              return {
                v: null
              };
            }
          } else if (row === _this3.rowObject.element) {
              return {
                v: null
              };
            }

          if (!_this3.rowObject.isValidSwap(row)) {
            return {
              v: null
            };
          }

          while ($row.is(':hidden') && $row.prev('tr').is(':hidden')) {
            $row = $row.prev('tr:first-of-type');
            row = $row.get(0);
          }
          return {
            v: row
          };
        }
      };

      for (var n = 0; n < rows.length; n++) {
        var _ret = _loop(n);

        if ((typeof _ret === 'undefined' ? 'undefined' : _typeof(_ret)) === "object") return _ret.v;
      }
      return null;
    },
    updateFields: function updateFields(changedRow) {
      var _this4 = this;

      Object.keys(this.tableSettings || {}).forEach(function (group) {
        _this4.updateField(changedRow, group);
      });
    },
    updateField: function updateField(changedRow, group) {
      var rowSettings = this.rowSettings(group, changedRow);
      var $changedRow = $(changedRow);
      var sourceRow = void 0;
      var $previousRow = void 0;
      var previousRow = void 0;
      var useSibling = void 0;

      if (rowSettings.relationship === 'self' || rowSettings.relationship === 'group') {
        sourceRow = changedRow;
      } else if (rowSettings.relationship === 'sibling') {
          $previousRow = $changedRow.prev('tr:first-of-type');
          previousRow = $previousRow.get(0);
          var $nextRow = $changedRow.next('tr:first-of-type');
          var nextRow = $nextRow.get(0);
          sourceRow = changedRow;
          if ($previousRow.is('.draggable') && $previousRow.find('.' + group).length) {
            if (this.indentEnabled) {
              if ($previousRow.find('.js-indentations').length === $changedRow.find('.js-indentations').length) {
                sourceRow = previousRow;
              }
            } else {
              sourceRow = previousRow;
            }
          } else if ($nextRow.is('.draggable') && $nextRow.find('.' + group).length) {
            if (this.indentEnabled) {
              if ($nextRow.find('.js-indentations').length === $changedRow.find('.js-indentations').length) {
                sourceRow = nextRow;
              }
            } else {
              sourceRow = nextRow;
            }
          }
        } else if (rowSettings.relationship === 'parent') {
            $previousRow = $changedRow.prev('tr');
            previousRow = $previousRow;
            while ($previousRow.length && $previousRow.find('.js-indentation').length >= this.rowObject.indents) {
              $previousRow = $previousRow.prev('tr');
              previousRow = $previousRow;
            }

            if ($previousRow.length) {
              sourceRow = $previousRow.get(0);
            } else {
                sourceRow = $(this.table).find('tr.draggable:first-of-type').get(0);
                if (sourceRow === this.rowObject.element) {
                  sourceRow = $(this.rowObject.group[this.rowObject.group.length - 1]).next('tr.draggable').get(0);
                }
                useSibling = true;
              }
          }

      this.copyDragClasses(sourceRow, changedRow, group);
      rowSettings = this.rowSettings(group, changedRow);

      if (useSibling) {
        rowSettings.relationship = 'sibling';
        rowSettings.source = rowSettings.target;
      }

      var targetClass = '.' + rowSettings.target;
      var targetElement = $changedRow.find(targetClass).get(0);

      if (targetElement) {
        var sourceClass = '.' + rowSettings.source;
        var sourceElement = $(sourceClass, sourceRow).get(0);
        switch (rowSettings.action) {
          case 'depth':
            targetElement.value = $(sourceElement).closest('tr').find('.js-indentation').length;
            break;

          case 'match':
            targetElement.value = sourceElement.value;
            break;

          case 'order':
            {
              var siblings = this.rowObject.findSiblings(rowSettings);
              if ($(targetElement).is('select')) {
                var values = [];
                $(targetElement).find('option').each(function collectValues() {
                  values.push(this.value);
                });
                var maxVal = values[values.length - 1];

                $(siblings).find(targetClass).each(function assignValues() {
                  if (values.length > 0) {
                    this.value = values.shift();
                  } else {
                    this.value = maxVal;
                  }
                });
              } else {
                var weight = parseInt($(siblings[0]).find(targetClass).val(), 10) || 0;
                $(siblings).find(targetClass).each(function assignWeight() {
                  this.value = weight;
                  weight += 1;
                });
              }
              break;
            }
        }
      }
    },
    copyDragClasses: function copyDragClasses(sourceRow, targetRow, group) {
      var sourceElement = $(sourceRow).find('.' + group);
      var targetElement = $(targetRow).find('.' + group);
      if (sourceElement.length && targetElement.length) {
        targetElement[0].className = sourceElement[0].className;
      }
    },
    checkScroll: function checkScroll(cursorY) {
      var de = document.documentElement;
      var b = document.body;
      var windowHeight = window.innerHeight || (de.clientHeight && de.clientWidth !== 0 ? de.clientHeight : b.offsetHeight);
      this.windowHeight = windowHeight;
      var scrollY = void 0;
      if (document.all) {
        scrollY = !de.scrollTop ? b.scrollTop : de.scrollTop;
      } else {
        scrollY = window.pageYOffset ? window.pageYOffset : window.scrollY;
      }
      this.scrollY = scrollY;
      var trigger = this.scrollSettings.trigger;

      var delta = 0;

      if (cursorY - scrollY > windowHeight - trigger) {
        delta = trigger / (windowHeight + (scrollY - cursorY));
        delta = delta > 0 && delta < trigger ? delta : trigger;
        return delta * this.scrollSettings.amount;
      }
      if (cursorY - scrollY < trigger) {
        delta = trigger / (cursorY - scrollY);
        delta = delta > 0 && delta < trigger ? delta : trigger;
        return -delta * this.scrollSettings.amount;
      }
    },
    setScroll: function setScroll(scrollAmount) {
      var self = this;

      this.scrollInterval = setInterval(function () {
        self.checkScroll(self.currentPointerCoords.y);
        var aboveTable = self.scrollY > self.table.topY;
        var belowTable = self.scrollY + self.windowHeight < self.table.bottomY;
        if (scrollAmount > 0 && belowTable || scrollAmount < 0 && aboveTable) {
          window.scrollBy(0, scrollAmount);
        }
      }, this.scrollSettings.interval);
    },
    restripeTable: function restripeTable() {
      $(this.table).find('> tbody > tr.draggable, > tr.draggable').filter(':visible').filter(':odd').removeClass('odd').addClass('even').end().filter(':even').removeClass('even').addClass('odd');
    },
    onDrag: function onDrag() {
      return null;
    },
    onDrop: function onDrop() {
      return null;
    },
    row: function row(tableRow, method, indentEnabled, maxDepth, addClasses) {
      var $tableRow = $(tableRow);

      this.element = tableRow;
      this.method = method;
      this.group = [tableRow];
      this.groupDepth = $tableRow.find('.js-indentation').length;
      this.changed = false;
      this.table = $tableRow.closest('table')[0];
      this.indentEnabled = indentEnabled;
      this.maxDepth = maxDepth;

      this.direction = '';
      if (this.indentEnabled) {
        this.indents = $tableRow.find('.js-indentation').length;
        this.children = this.findChildren(addClasses);
        this.group = $.merge(this.group, this.children);

        for (var n = 0; n < this.group.length; n++) {
          this.groupDepth = Math.max($(this.group[n]).find('.js-indentation').length, this.groupDepth);
        }
      }
    }
  });

  $.extend(Drupal.tableDrag.prototype.row.prototype, {
    findChildren: function findChildren(addClasses) {
      var parentIndentation = this.indents;
      var currentRow = $(this.element, this.table).next('tr.draggable');
      var rows = [];
      var child = 0;

      function rowIndentation(indentNum, el) {
        var self = $(el);
        if (child === 1 && indentNum === parentIndentation) {
          self.addClass('tree-child-first');
        }
        if (indentNum === parentIndentation) {
          self.addClass('tree-child');
        } else if (indentNum > parentIndentation) {
          self.addClass('tree-child-horizontal');
        }
      }

      while (currentRow.length) {
        if (currentRow.find('.js-indentation').length > parentIndentation) {
          child += 1;
          rows.push(currentRow[0]);
          if (addClasses) {
            currentRow.find('.js-indentation').each(rowIndentation);
          }
        } else {
          break;
        }
        currentRow = currentRow.next('tr.draggable');
      }
      if (addClasses && rows.length) {
        $(rows[rows.length - 1]).find('.js-indentation:nth-child(' + (parentIndentation + 1) + ')').addClass('tree-child-last');
      }
      return rows;
    },
    isValidSwap: function isValidSwap(row) {
      var $row = $(row);
      if (this.indentEnabled) {
        var prevRow = void 0;
        var nextRow = void 0;
        if (this.direction === 'down') {
          prevRow = row;
          nextRow = $row.next('tr').get(0);
        } else {
          prevRow = $row.prev('tr').get(0);
          nextRow = row;
        }
        this.interval = this.validIndentInterval(prevRow, nextRow);

        if (this.interval.min > this.interval.max) {
          return false;
        }
      }

      if (this.table.tBodies[0].rows[0] === row && $row.is(':not(.draggable)')) {
        return false;
      }

      return true;
    },
    swap: function swap(position, row) {
      this.group.forEach(function (detachedRow) {
        Drupal.detachBehaviors(detachedRow, drupalSettings, 'move');
      });
      $(row)[position](this.group);

      this.group.forEach(function (attachedRow) {
        Drupal.attachBehaviors(attachedRow, drupalSettings);
      });
      this.changed = true;
      this.onSwap(row);
    },
    validIndentInterval: function validIndentInterval(prevRow, nextRow) {
      var $prevRow = $(prevRow);
      var maxIndent = void 0;

      var minIndent = nextRow ? $(nextRow).find('.js-indentation').length : 0;

      if (!prevRow || $prevRow.is(':not(.draggable)') || $(this.element).is('.tabledrag-root')) {
        maxIndent = 0;
      } else {
        maxIndent = $prevRow.find('.js-indentation').length + ($prevRow.is('.tabledrag-leaf') ? 0 : 1);

        if (this.maxDepth) {
          maxIndent = Math.min(maxIndent, this.maxDepth - (this.groupDepth - this.indents));
        }
      }

      return { min: minIndent, max: maxIndent };
    },
    indent: function indent(indentDiff) {
      var $group = $(this.group);

      if (!this.interval) {
        var prevRow = $(this.element).prev('tr').get(0);
        var nextRow = $group.eq(-1).next('tr').get(0);
        this.interval = this.validIndentInterval(prevRow, nextRow);
      }

      var indent = this.indents + indentDiff;
      indent = Math.max(indent, this.interval.min);
      indent = Math.min(indent, this.interval.max);
      indentDiff = indent - this.indents;

      for (var n = 1; n <= Math.abs(indentDiff); n++) {
        if (indentDiff < 0) {
          $group.find('.js-indentation:first-of-type').remove();
          this.indents -= 1;
        } else {
          $group.find('.js-tabledrag-cell-content').prepend(Drupal.theme('tableDragIndentation'));
          this.indents += 1;
        }
      }
      if (indentDiff) {
        this.changed = true;
        this.groupDepth += indentDiff;
        this.onIndent();
      }

      return indentDiff;
    },
    findSiblings: function findSiblings(rowSettings) {
      var siblings = [];
      var directions = ['prev', 'next'];
      var rowIndentation = this.indents;
      var checkRowIndentation = void 0;
      for (var d = 0; d < directions.length; d++) {
        var checkRow = $(this.element)[directions[d]]();
        while (checkRow.length) {
          if (checkRow.find('.' + rowSettings.target)) {
            if (this.indentEnabled) {
              checkRowIndentation = checkRow.find('.js-indentation').length;
            }

            if (!this.indentEnabled || checkRowIndentation === rowIndentation) {
              siblings.push(checkRow[0]);
            } else if (checkRowIndentation < rowIndentation) {
              break;
            }
          } else {
            break;
          }
          checkRow = checkRow[directions[d]]();
        }

        if (directions[d] === 'prev') {
          siblings.reverse();
          siblings.push(this.element);
        }
      }
      return siblings;
    },
    removeIndentClasses: function removeIndentClasses() {
      var _this5 = this;

      Object.keys(this.children || {}).forEach(function (n) {
        $(_this5.children[n]).find('.js-indentation').removeClass('tree-child').removeClass('tree-child-first').removeClass('tree-child-last').removeClass('tree-child-horizontal');
      });
    },
    markChanged: function markChanged() {
      var marker = $(Drupal.theme('tableDragChangedMarker')).addClass('js-tabledrag-changed-marker');
      var cell = $(this.element).find('td:first-of-type');
      if (cell.find('.js-tabledrag-changed-marker').length === 0) {
        cell.find('.js-tabledrag-handle').after(marker);
      }
    },
    onIndent: function onIndent() {
      return null;
    },
    onSwap: function onSwap(swappedRow) {
      return null;
    }
  });

  $.extend(Drupal.theme, {
    tableDragChangedMarker: function tableDragChangedMarker() {
      return '<abbr class="warning tabledrag-changed" title="' + Drupal.t('Changed') + '">*</abbr>';
    },
    tableDragIndentation: function tableDragIndentation() {
      return '<div class="js-indentation indentation"><svg xmlns="http://www.w3.org/2000/svg" class="tree" width="25" height="25" viewBox="0 0 25 25"><path class="tree__item tree__item-child-ltr tree__item-child-last-ltr tree__item-horizontal tree__item-horizontal-right" d="M12,12.5 H25" stroke="#888"/><path class="tree__item tree__item-child-rtl tree__item-child-last-rtl tree__item-horizontal tree__horizontal-left" d="M0,12.5 H13" stroke="#888"/><path class="tree__item tree__item-child-ltr tree__item-child-rtl tree__item-child-last-ltr tree__item-child-last-rtl tree__vertical tree__vertical-top" d="M12.5,12 v-99" stroke="#888"/><path class="tree__item tree__item-child-ltr tree__item-child-rtl tree__vertical tree__vertical-bottom" d="M12.5,12 v99" stroke="#888"/></svg></div>';
    },
    tableDragChangedWarning: function tableDragChangedWarning() {
      return '<div class="tabledrag-changed-warning messages messages--warning" role="alert">' + Drupal.theme('tableDragChangedMarker') + ' ' + Drupal.t('You have unsaved changes.') + '</div>';
    },
    tableDragHandle: function tableDragHandle() {
      return '<a href="#" class="tabledrag-handle"></a>';
    },
    tableDragCellItemsWrapper: function tableDragCellItemsWrapper() {
      return '<div class="tabledrag-cell-content"></div>';
    },
    tableDragCellContentWrapper: function tableDragCellContentWrapper() {
      return '<div class="tabledrag-cell-content__item"></div>';
    },
    tableDragToggle: function tableDragToggle(action, text) {
      var classes = ['action-link', 'action-link--extrasmall', 'tabledrag-toggle-weight'];
      switch (action) {
        case 'show':
          classes.push('action-link--icon-show');
          break;

        default:
          classes.push('action-link--icon-hide');
          break;
      }

      return '<a href="#" class="' + classes.join(' ') + '">' + text + '</a>';
    },
    tableDragToggleWrapper: function tableDragToggleWrapper() {
      return '<div class="tabledrag-toggle-weight-wrapper"></div>';
    }
  });
})(jQuery, Drupal, drupalSettings);;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function ($, Drupal, window) {
  function TableResponsive(table) {
    this.table = table;
    this.$table = $(table);
    this.showText = Drupal.t('Show all columns');
    this.hideText = Drupal.t('Hide lower priority columns');

    this.$headers = this.$table.find('th');

    this.$link = $('<button type="button" class="link tableresponsive-toggle"></button>').attr('title', Drupal.t('Show table cells that were hidden to make the table fit within a small screen.')).on('click', $.proxy(this, 'eventhandlerToggleColumns'));

    this.$table.before($('<div class="tableresponsive-toggle-columns"></div>').append(this.$link));

    $(window).on('resize.tableresponsive', $.proxy(this, 'eventhandlerEvaluateColumnVisibility')).trigger('resize.tableresponsive');
  }

  Drupal.behaviors.tableResponsive = {
    attach: function attach(context, settings) {
      var $tables = $(context).find('table.responsive-enabled').once('tableresponsive');
      if ($tables.length) {
        var il = $tables.length;
        for (var i = 0; i < il; i++) {
          TableResponsive.tables.push(new TableResponsive($tables[i]));
        }
      }
    }
  };

  $.extend(TableResponsive, {
    tables: []
  });

  $.extend(TableResponsive.prototype, {
    eventhandlerEvaluateColumnVisibility: function eventhandlerEvaluateColumnVisibility(e) {
      var pegged = parseInt(this.$link.data('pegged'), 10);
      var hiddenLength = this.$headers.filter('.priority-medium:hidden, .priority-low:hidden').length;

      if (hiddenLength > 0) {
        this.$link.show().text(this.showText);
      }

      if (!pegged && hiddenLength === 0) {
        this.$link.hide().text(this.hideText);
      }
    },
    eventhandlerToggleColumns: function eventhandlerToggleColumns(e) {
      e.preventDefault();
      var self = this;
      var $hiddenHeaders = this.$headers.filter('.priority-medium:hidden, .priority-low:hidden');
      this.$revealedCells = this.$revealedCells || $();

      if ($hiddenHeaders.length > 0) {
        $hiddenHeaders.each(function (index, element) {
          var $header = $(this);
          var position = $header.prevAll('th').length;
          self.$table.find('tbody tr').each(function () {
            var $cells = $(this).find('td').eq(position);
            $cells.show();

            self.$revealedCells = $().add(self.$revealedCells).add($cells);
          });
          $header.show();

          self.$revealedCells = $().add(self.$revealedCells).add($header);
        });
        this.$link.text(this.hideText).data('pegged', 1);
      } else {
          this.$revealedCells.hide();

          this.$revealedCells.each(function (index, element) {
            var $cell = $(this);
            var properties = $cell.attr('style').split(';');
            var newProps = [];

            var match = /^display\s*:\s*none$/;
            for (var i = 0; i < properties.length; i++) {
              var prop = properties[i];
              prop.trim();

              var isDisplayNone = match.exec(prop);
              if (isDisplayNone) {
                continue;
              }
              newProps.push(prop);
            }

            $cell.attr('style', newProps.join(';'));
          });
          this.$link.text(this.showText).data('pegged', 0);

          $(window).trigger('resize.tableresponsive');
        }
    }
  });

  Drupal.TableResponsive = TableResponsive;
})(jQuery, Drupal, window);;
