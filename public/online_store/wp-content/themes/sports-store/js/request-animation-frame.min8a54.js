/**
 * @package 	WordPress
 * @subpackage 	Sports Store
 * @version		1.0.0
 */


/**!
 * requestAnimationFrame polyfill by Erik Moller
 * fixes from Paul Irish and Tino Zijdel
 **/
(function(e,t,n){var r=0,i,s=function(e){if(i){t.requestAnimationFrame(s,e);jQuery.fx.tick()}},o=["ms","moz","webkit","o"];for(var u=0;u<o.length&&!t.requestAnimationFrame;++u){t.requestAnimationFrame=t[o[u]+"RequestAnimationFrame"];t.cancelAnimationFrame=t[o[u]+"CancelAnimationFrame"]||t[o[u]+"CancelRequestAnimationFrame"]}if(!t.requestAnimationFrame)t.requestAnimationFrame=function(e,n){var i=(new Date).getTime(),s=i-r,o=Math.max(0,16-s);var u=t.setTimeout(function(){e(i+o)},o);r=i+o;return u};if(!t.cancelAnimationFrame){t.cancelAnimationFrame=function(e){clearTimeout(e)}}jQuery.fx.timer=function(e){if(e()&&jQuery.timers.push(e)&&!i){i=true;s(e.elem)}};jQuery.fx.stop=function(){i=false}})(jQuery,this);

