!function(t){function d(e){var i=t(this);i.scrollTop()>parseInt(cnArgs.onScrollOffset)&&(i.setCookieNotice("accept"),i.off("scroll",d))}t(document).ready(function(){var s=t("#cookie-notice"),c=t.fn.getCookieNotice();t(document).on("click",".cn-set-cookie",function(e){e.preventDefault(),t(this).setCookieNotice(t(this).data("cookie-set"))}),t(document).on("click",".cn-revoke-cookie",function(e){if(e.preventDefault(),"yes"===cnArgs.refuse){var i=t(this);if("yes"===cnArgs.onScroll&&t(window).on("scroll",d),"1"===cnArgs.revoke_cookies){if(i.hasClass("cn-revoke-inline")){var o=t("body");o.hasClass("cookies-revoke")||o.hasClass("cookies-not-set")||("automatic"===cnArgs.revoke_cookies_opt?s.showCookieNotice(3):s.showCookieNotice(2))}else s.showCookieNotice(1);c=t.fn.getCookieNotice(),t.fn.setCookieNoticeBodyClass("cookies-set cookies-revoke "+("true"===c?"cookies-accepted":"cookies-refused"))}}}),void 0===c?("yes"===cnArgs.onScroll&&t(window).on("scroll",d),s.showCookieNotice(0),t.fn.setCookieNoticeBodyClass("cookies-not-set")):"yes"===cnArgs.refuse?"1"===cnArgs.revoke_cookies&&("automatic"===cnArgs.revoke_cookies_opt&&s.hideCookieNotice(1),t.fn.setCookieNoticeBodyClass("cookies-set "+("true"===c?"cookies-accepted":"cookies-refused"))):t.fn.setCookieNoticeBodyClass("cookies-set "+("true"===c?"cookies-accepted":"cookies-refused"))}),t.fn.setCookieNotice=function(e){"yes"===cnArgs.onScroll&&t(window).off("scroll",d);var i=new Date,o=new Date,s=t("#cookie-notice");if(o.setTime(parseInt(i.getTime())+1e3*parseInt(cnArgs.cookieTime)),e="accept"===e?"true":"false",document.cookie=cnArgs.cookieName+"="+e+";expires="+o.toUTCString()+";"+(void 0!==cnArgs.cookieDomain&&""!==cnArgs.cookieDomain?"domain="+cnArgs.cookieDomain+";":"")+(void 0!==cnArgs.cookiePath&&""!==cnArgs.cookiePath?"path="+cnArgs.cookiePath+";":"")+("1"===cnArgs.secure?"secure;":""),t.event.trigger({type:"setCookieNotice",value:e,time:i,expires:o}),t.fn.setCookieNoticeBodyClass("cookies-set "+("true"===e?"cookies-accepted":"cookies-refused")),"yes"===cnArgs.refuse&&"1"===cnArgs.revoke_cookies&&"automatic"===cnArgs.revoke_cookies_opt?s.hideCookieNotice(2):s.hideCookieNotice(0),e&&"1"===cnArgs.redirection){var c=window.location.protocol+"//",n=window.location.host+"/"+window.location.pathname;"1"===cnArgs.cache?(c=c+n.replace("//","/")+(""===window.location.search?"?":window.location.search+"&")+"cn-reloaded=1"+window.location.hash,window.location.href=c):(c=c+n.replace("//","/")+window.location.search+window.location.hash,window.location.reload(!0))}else;},t.fn.setCookieNoticeBodyClass=function(e){t("body").removeClass("cookies-revoke cookies-accepted cookies-refused cookies-set cookies-not-set").addClass(e)},t.fn.getCookieNotice=function(){var e=("; "+document.cookie).split("; cookie_notice_accepted=");return 2===e.length?e.pop().split(";").shift():void 0},t.fn.showCookieNotice=function(e){t.event.trigger({type:"showCookieNotice",value:e,data:cnArgs});var i=this;switch(e){case 0:"fade"===cnArgs.hideEffect?i.css({visibility:"visible",display:"none"}).fadeIn(400):"slide"===cnArgs.hideEffect?i.css({visibility:"visible",display:"none"}).slideDown(400):i.css({visibility:"visible"}).show();break;case 1:"fade"===cnArgs.hideEffect?i.find(".cookie-notice-revoke-container").fadeOut(400,function(){i.css({visibility:"visible",display:"none"}).fadeIn(400)}):"slide"===cnArgs.hideEffect?i.find(".cookie-notice-revoke-container").slideUp(400,function(){i.css({visibility:"visible",display:"none"}).slideDown(400)}):i.css({visibility:"visible"}).find(".cookie-notice-revoke-container").hide();break;case 2:"fade"===cnArgs.hideEffect?i.css({visibility:"visible",display:"none"}).fadeIn(400):"slide"===cnArgs.hideEffect?i.css({visibility:"visible",display:"none"}).slideDown(400):i.css({visibility:"visible"});break;case 3:"fade"===cnArgs.hideEffect?i.find(".cookie-notice-revoke-container").fadeOut(400,function(){i.css({visibility:"visible",display:"none"}).fadeIn(400)}):"slide"===cnArgs.hideEffect?i.find(".cookie-notice-revoke-container").slideUp(400,function(){i.css({visibility:"visible",display:"none"}).slideDown(400)}):i.css({visibility:"visible"}).find(".cookie-notice-revoke-container").hide()}},t.fn.hideCookieNotice=function(e){t.event.trigger({type:"hideCookieNotice",value:e,data:cnArgs});var i=this,o=this.css("display");switch(e){case 0:"fade"===cnArgs.hideEffect?i.fadeOut(400):"slide"===cnArgs.hideEffect?i.slideUp(400):i.css({visibility:"hidden"});break;case 1:"fade"===cnArgs.hideEffect?i.find(".cookie-notice-revoke-container").hide().fadeIn(400).css({visibility:"visible",display:"block"}):"slide"===cnArgs.hideEffect?i.find(".cookie-notice-revoke-container").hide().slideDown(400).css({visibility:"visible",display:"block"}):i.find(".cookie-notice-revoke-container").css({visibility:"visible",display:"block"});break;case 2:"fade"===cnArgs.hideEffect?i.fadeOut(400,function(){i.css({visibility:"hidden",display:o}).find(".cookie-notice-revoke-container").hide().fadeIn(400).css({visibility:"visible",display:"block"})}):"slide"===cnArgs.hideEffect?i.slideUp(400,function(){i.css({visibility:"hidden",display:o}).find(".cookie-notice-revoke-container").hide().slideDown(400).css({visibility:"visible",display:"block"})}):i.css({visibility:"hidden"}).find(".cookie-notice-revoke-container").css({visibility:"visible",display:"block"})}}}(jQuery);