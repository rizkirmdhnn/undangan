window.wp=window.wp||{},window.wp.menu=function(e){var t={};function n(i){if(t[i])return t[i].exports;var r=t[i]={i:i,l:!1,exports:{}};return e[i].call(r.exports,r,r.exports,n),r.l=!0,r.exports}return n.m=e,n.c=t,n.d=function(e,t,i){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:i})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var i=Object.create(null);if(n.r(i),Object.defineProperty(i,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var r in e)n.d(i,r,function(t){return e[t]}.bind(null,r));return i},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="",n(n.s=80)}({11:function(e,t,n){"use strict";n.d(t,"c",(function(){return a})),n.d(t,"b",(function(){return u})),n.d(t,"a",(function(){return c}));var i=n(2),r=n.n(i),o=n(4);function a(){r()(o.a.subMenu).remove()}function u(){r()(o.a.subMenuLinks).addClass("visible")}function c(){r()(o.a.subMenuLinks).removeClass("visible")}},2:function(e,t){e.exports=window.jQuery},24:function(e,t,n){"use strict";n.d(t,"a",(function(){return i}));var i=function(){return new Promise((function(e){try{var t=document.createElement("iframe");t.id="integrations-third-party-cookies-iframe",t.src="https://static.hsappstatic.net/integrations-third-party-cookies/static-1.1/html/start.html",t.style.display="none";window.addEventListener("message",(function n(i){"integrations-third-party-cookies-message"===i.data.source&&(e(i.data.enabled),t.parentNode.removeChild(t),window.removeEventListener("message",n,!1))}),!1),document.body.appendChild(t)}catch(t){e(!1)}}))}},4:function(e,t,n){"use strict";n.d(t,"a",(function(){return i}));var i={iframe:"#leadin-iframe",subMenu:".toplevel_page_leadin > ul",subMenuLinks:".toplevel_page_leadin > ul a",subMenuButtons:".toplevel_page_leadin > ul > li",deactivatePluginButton:'[data-slug="leadin"] .deactivate a',deactivateFeedbackForm:"form.leadin-deactivate-form",deactivateFeedbackSubmit:"button#leadin-feedback-submit",deactivateFeedbackSkip:"button#leadin-feedback-skip",thickboxModalClose:".leadin-modal-close",thickboxModalWindow:"div#TB_window.thickbox-loading",thickboxModalContent:"div#TB_ajaxContent.TB_modal",reviewBannerLeaveReviewLink:"a#leave-review-button",reviewBannerDismissButton:"a#dismiss-review-banner-button"}},80:function(e,t,n){"use strict";n.r(t);var i=n(2),r=n.n(i);var o=n(11),a=n(24);r()((function(){(function(e){try{return sessionStorage.getItem(e)}catch(e){return null}})("leadin_third_party_cookies")&&Object(o.b)(),Object(a.a)().then((function(e){e?(!function(e,t){try{sessionStorage.setItem(e,t)}catch(e){}}("leadin_third_party_cookies",!0),Object(o.b)()):(!function(e){try{sessionStorage.removeItem(e)}catch(e){}}("leadin_third_party_cookies"),Object(o.a)())}))}))}});
//# sourceMappingURL=menu.js.map