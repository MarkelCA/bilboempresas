!function(t){function e(o){if(a[o])return a[o].exports;var n=a[o]={i:o,l:!1,exports:{}};return t[o].call(n.exports,n,n.exports,e),n.l=!0,n.exports}var a={};e.m=t,e.c=a,e.d=function(t,a,o){e.o(t,a)||Object.defineProperty(t,a,{enumerable:!0,get:o})},e.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},e.t=function(t,a){if(1&a&&(t=e(t)),8&a)return t;if(4&a&&"object"==typeof t&&t&&t.__esModule)return t;var o=Object.create(null);if(e.r(o),Object.defineProperty(o,"default",{enumerable:!0,value:t}),2&a&&"string"!=typeof t)for(var n in t)e.d(o,n,function(e){return t[e]}.bind(null,n));return o},e.n=function(t){var a=t&&t.__esModule?function(){return t.default}:function(){return t};return e.d(a,"a",a),a},e.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},e.p="../",e(e.s=43)}({43:function(t,e,a){a(44),t.exports=a(45)},44:function(){"use strict";var t,e,a;t=jQuery,e=Drupal,a=drupalSettings,e.behaviors.ginToolbarActiveItem={attach:function(){var e=a.path.currentPath;-1<e.indexOf("admin/content")||-1<e.indexOf("/edit")?t(".toolbar-icon-system-admin-content").addClass("is-active"):-1<e.indexOf("admin/structure")?t(".toolbar-icon-system-admin-structure").addClass("is-active"):-1<e.indexOf("admin/appearance")||-1<e.indexOf("admin/theme")?t(".toolbar-icon-system-themes-page").addClass("is-active"):-1<e.indexOf("admin/modules")?t(".toolbar-icon-system-modules-list").addClass("is-active"):-1<e.indexOf("admin/config")?t(".toolbar-icon-system-admin-config").addClass("is-active"):-1<e.indexOf("admin/people")?t(".toolbar-icon-entity-user-collection").addClass("is-active"):-1<e.indexOf("admin/reports")?t(".toolbar-icon-system-admin-reports").addClass("is-active"):-1<e.indexOf("admin/help")?t(".toolbar-icon-help-main").addClass("is-active"):-1<e.indexOf("admin/commerce")&&t(".toolbar-icon-commerce-admin-commerce").addClass("is-active")}},e.behaviors.ginToolbarToggle={attach:function(e){"true"===localStorage.getItem("GinSidebarOpen")?(t("body").attr("data-toolbar-menu","open"),t(".toolbar-menu__trigger").addClass("is-active")):(t("body").attr("data-toolbar-menu",""),t(".toolbar-menu__trigger").removeClass("is-active")),t(".toolbar-menu__trigger",e).on("click",(function(e){e.preventDefault(),t(this).toggleClass("is-active"),t(this).hasClass("is-active")?(t("body").attr("data-toolbar-menu","open"),localStorage.setItem("GinSidebarOpen","true")):(t("body").attr("data-toolbar-menu",""),localStorage.setItem("GinSidebarOpen","false"),t(".gin-toolbar-inline-styles").remove())})),t("#toolbar-bar .toolbar-item",e).on("click",(function(){t("body").attr("data-toolbar-tray",t(this).data("toolbar-tray")),t(document).ready((function(){t(".sticky-header").each((function(){t(this).width(t(".sticky-table").width())}))}))}))}}},45:function(){}});