/*!
 * @project        SEOmatic
 * @name           twig-editor.js
 * @author         Andrew Welch
 * @build          Thu, Jun 13, 2019 6:16 PM ET
 * @release        23b7de5f3c9b585eb06b41f0421807d3836f74e4 [develop]
 * @copyright      Copyright (c) 2019 nystudio107
 *
 */!function(e){function t(t){for(var r,s,u=t[0],a=t[1],l=t[2],f=0,p=[];f<u.length;f++)s=u[f],o[s]&&p.push(o[s][0]),o[s]=0;for(r in a)Object.prototype.hasOwnProperty.call(a,r)&&(e[r]=a[r]);for(c&&c(t);p.length;)p.shift()();return i.push.apply(i,l||[]),n()}function n(){for(var e,t=0;t<i.length;t++){for(var n=i[t],r=!0,u=1;u<n.length;u++){var a=n[u];0!==o[a]&&(r=!1)}r&&(i.splice(t--,1),e=s(s.s=n[0]))}return e}var r={},o={6:0},i=[];function s(t){if(r[t])return r[t].exports;var n=r[t]={i:t,l:!1,exports:{}};return e[t].call(n.exports,n,n.exports,s),n.l=!0,n.exports}s.m=e,s.c=r,s.d=function(e,t,n){s.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:n})},s.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},s.t=function(e,t){if(1&t&&(e=s(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var n=Object.create(null);if(s.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var r in e)s.d(n,r,function(t){return e[t]}.bind(null,r));return n},s.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return s.d(t,"a",t),t},s.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},s.p="";var u=window.webpackJsonp=window.webpackJsonp||[],a=u.push.bind(u);u.push=t,u=u.slice();for(var l=0;l<u.length;l++)t(u[l]);var c=a;i.push([23,0,10]),n()}({23:function(e,t,n){var r=n(5);n(24),n(8),$(function(){$("textarea.seomatic-twig-editor").each(function(){var e=$(this),t=$("<div>",{position:"absolute",width:"98%",height:700,class:e.attr("class")}).insertBefore(e);e.css("display","none");var n=r.edit(t[0]);n.renderer.setShowGutter(e.data("gutter")),n.getSession().setValue(e.val()),n.getSession().setMode("ace/mode/twig"),n.setTheme("ace/theme/github"),n.setFontSize(14),n.setShowPrintMargin(!1),n.setDisplayIndentGuides(!0),n.renderer.setShowGutter(!0),n.setHighlightActiveLine(!1),n.setOptions({minLines:10,maxLines:1/0}),e.closest("form").submit(function(){e.val(n.getSession().getValue())})})})}});
//# sourceMappingURL=twig-editor.js.map