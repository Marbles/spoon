<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <link rel="preload" href="css/app.css" as="style" onload="this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="css/app.css"></noscript>
        <script>
            !function(e){"use strict";var n=function(n,t,o){var i,r=e.document,d=r.createElement("link");if(t)i=t;else{var a=(r.body||r.getElementsByTagName("head")[0]).childNodes;i=a[a.length-1]}var l=r.styleSheets;d.rel="stylesheet",d.href=n,d.media="only x",function e(n){if(r.body)return n();setTimeout(function(){e(n)})}(function(){i.parentNode.insertBefore(d,t?i:i.nextSibling)});var f=function(e){for(var n=d.href,t=l.length;t--;)if(l[t].href===n)return e();setTimeout(function(){f(e)})};function s(){d.addEventListener&&d.removeEventListener("load",s),d.media=o||"all"}return d.addEventListener&&d.addEventListener("load",s),d.onloadcssdefined=f,f(s),d};"undefined"!=typeof exports?exports.loadCSS=n:e.loadCSS=n}("undefined"!=typeof global?global:this);
            !function(t){"use strict";t.loadCSS||(t.loadCSS=function(){});var e=loadCSS.relpreload={};if(e.support=function(){var e;try{e=t.document.createElement("link").relList.supports("preload")}catch(t){e=!1}return function(){return e}}(),e.bindMediaToggle=function(t){var e=t.media||"all";function a(){t.media=e}t.addEventListener?t.addEventListener("load",a):t.attachEvent&&t.attachEvent("onload",a),setTimeout(function(){t.rel="stylesheet",t.media="only x"}),setTimeout(a,3e3)},e.poly=function(){if(!e.support())for(var a=t.document.getElementsByTagName("link"),n=0;n<a.length;n++){var o=a[n];"preload"!==o.rel||"style"!==o.getAttribute("as")||o.getAttribute("data-loadcss")||(o.setAttribute("data-loadcss",!0),e.bindMediaToggle(o))}},!e.support()){e.poly();var a=t.setInterval(e.poly,500);t.addEventListener?t.addEventListener("load",function(){e.poly(),t.clearInterval(a)}):t.attachEvent&&t.attachEvent("onload",function(){e.poly(),t.clearInterval(a)})}"undefined"!=typeof exports?exports.loadCSS=loadCSS:t.loadCSS=loadCSS}("undefined"!=typeof global?global:this);
        </script>

    </head>
    <body>
        <div id="app">
            {{ $slot }}
        </div>
    </body>
    <script src="{{ mix('js/manifest.js') }}"></script>
    <script src="{{ mix('js/vendor.js') }}"></script>
    <script src="{{ mix('js/app.js') }}"></script>
</html>
