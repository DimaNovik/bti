(function(e){function t(t){for(var r,o,s=t[0],c=t[1],l=t[2],i=0,d=[];i<s.length;i++)o=s[i],Object.prototype.hasOwnProperty.call(a,o)&&a[o]&&d.push(a[o][0]),a[o]=0;for(r in c)Object.prototype.hasOwnProperty.call(c,r)&&(e[r]=c[r]);p&&p(t);while(d.length)d.shift()();return u.push.apply(u,l||[]),n()}function n(){for(var e,t=0;t<u.length;t++){for(var n=u[t],r=!0,o=1;o<n.length;o++){var s=n[o];0!==a[s]&&(r=!1)}r&&(u.splice(t--,1),e=c(c.s=n[0]))}return e}var r={},o={app:0},a={app:0},u=[];function s(e){return c.p+"js/"+({about:"about"}[e]||e)+"."+{about:"669cfc14"}[e]+".js"}function c(t){if(r[t])return r[t].exports;var n=r[t]={i:t,l:!1,exports:{}};return e[t].call(n.exports,n,n.exports,c),n.l=!0,n.exports}c.e=function(e){var t=[],n={about:1};o[e]?t.push(o[e]):0!==o[e]&&n[e]&&t.push(o[e]=new Promise((function(t,n){for(var r="css/"+({about:"about"}[e]||e)+"."+{about:"d44f6606"}[e]+".css",a=c.p+r,u=document.getElementsByTagName("link"),s=0;s<u.length;s++){var l=u[s],i=l.getAttribute("data-href")||l.getAttribute("href");if("stylesheet"===l.rel&&(i===r||i===a))return t()}var d=document.getElementsByTagName("style");for(s=0;s<d.length;s++){l=d[s],i=l.getAttribute("data-href");if(i===r||i===a)return t()}var p=document.createElement("link");p.rel="stylesheet",p.type="text/css",p.onload=t,p.onerror=function(t){var r=t&&t.target&&t.target.src||a,u=new Error("Loading CSS chunk "+e+" failed.\n("+r+")");u.code="CSS_CHUNK_LOAD_FAILED",u.request=r,delete o[e],p.parentNode.removeChild(p),n(u)},p.href=a;var f=document.getElementsByTagName("head")[0];f.appendChild(p)})).then((function(){o[e]=0})));var r=a[e];if(0!==r)if(r)t.push(r[2]);else{var u=new Promise((function(t,n){r=a[e]=[t,n]}));t.push(r[2]=u);var l,i=document.createElement("script");i.charset="utf-8",i.timeout=120,c.nc&&i.setAttribute("nonce",c.nc),i.src=s(e);var d=new Error;l=function(t){i.onerror=i.onload=null,clearTimeout(p);var n=a[e];if(0!==n){if(n){var r=t&&("load"===t.type?"missing":t.type),o=t&&t.target&&t.target.src;d.message="Loading chunk "+e+" failed.\n("+r+": "+o+")",d.name="ChunkLoadError",d.type=r,d.request=o,n[1](d)}a[e]=void 0}};var p=setTimeout((function(){l({type:"timeout",target:i})}),12e4);i.onerror=i.onload=l,document.head.appendChild(i)}return Promise.all(t)},c.m=e,c.c=r,c.d=function(e,t,n){c.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:n})},c.r=function(e){"undefined"!==typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},c.t=function(e,t){if(1&t&&(e=c(e)),8&t)return e;if(4&t&&"object"===typeof e&&e&&e.__esModule)return e;var n=Object.create(null);if(c.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var r in e)c.d(n,r,function(t){return e[t]}.bind(null,r));return n},c.n=function(e){var t=e&&e.__esModule?function(){return e["default"]}:function(){return e};return c.d(t,"a",t),t},c.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},c.p="/",c.oe=function(e){throw console.error(e),e};var l=window["webpackJsonp"]=window["webpackJsonp"]||[],i=l.push.bind(l);l.push=t,l=l.slice();for(var d=0;d<l.length;d++)t(l[d]);var p=i;u.push([0,"chunk-vendors"]),n()})({0:function(e,t,n){e.exports=n("56d7")},5452:function(e,t,n){"use strict";n("af35")},"56d7":function(e,t,n){"use strict";n.r(t);n("e260"),n("e6cf"),n("cca6"),n("a79d");var r=n("2b0e"),o=function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("div",{attrs:{id:"app"}},[n("app-header"),n("router-view")],1)},a=[],u=function(){var e=this,t=e.$createElement;e._self._c;return e._m(0)},s=[function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("header",{staticClass:"header"},[n("h1",{staticClass:"header__text"},[e._v("КП «БЮРО ТЕХНІЧНОЇ ІНВЕНТАРИЗАЦІЇ» м.Одеса")])])}],c={name:"Header"},l=c,i=(n("5452"),n("2877")),d=Object(i["a"])(l,u,s,!1,null,null,null),p=d.exports,f={components:{"app-header":p}},m=f,b=(n("5c0b"),Object(i["a"])(m,o,a,!1,null,null,null)),v=b.exports,h=(n("d3b7"),n("3ca3"),n("ddb0"),n("8c4f")),g=function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("div",{staticClass:"home"},[n("b-container",[n("b-row",{staticClass:"mb-5 mt-5"},[n("b-col",{attrs:{cols:"auto",md:"3"}}),n("b-col",{attrs:{cols:"12",md:"6"}},[n("b-form",{on:{submit:e.onSubmit}},[n("b-form-group",{attrs:{id:"input-group-1","label-for":"input-1",label:"Номер інвентаризаціїної справи"}},[n("b-form-input",{staticClass:"text-center",attrs:{id:"input-1",type:"number",placeholder:"000000000",size:"lg",required:""},model:{value:e.number,callback:function(t){e.number=t},expression:"number"}})],1),n("b-button",{attrs:{type:"submit",variant:"primary",size:"lg"}},[e._v("Пошук")])],1)],1),n("b-col",{attrs:{cols:"auto",md:"3"}})],1),n("b-row",[n("b-col",{attrs:{cols:"auto",md:"3"}}),n("b-col",{attrs:{cols:"12",md:"6"}},[n("b-card",{staticClass:"mt-3",attrs:{header:"Інвентаризаціїна справа передана до КП «БТІ» (зберігання)"}},[n("p",[n("span",{staticClass:"underlined"},[n("b",[e._v("12.02.2021")])]),e._v(" за об'єктом нерухомого майна за адресою: ")]),n("p",[n("span",{staticClass:"underlined"},[n("b",[e._v("м. Одеса вул. Дальницька буд. 39, кв. 11")])])]),n("p",[e._v("Площа загальна: "),n("b",[e._v("34м"),n("sup",[e._v("2")])])]),n("p",[e._v("Площа житлова: "),n("b",[e._v("34м"),n("sup",[e._v("2")])])]),n("p",[e._v("Площа земельної ділянки: "),n("b",[e._v("34м"),n("sup",[e._v("2")])])]),n("p",[e._v("Поверхи: "),n("b",[e._v("2")])])])],1),n("b-col",{attrs:{cols:"auto",md:"3"}})],1)],1)],1)},_=[],y={name:"Home",data:function(){return{number:null}},methods:{onSubmit:function(){}}},w=y,C=Object(i["a"])(w,g,_,!1,null,null,null),O=C.exports;r["default"].use(h["a"]);var j=[{path:"/",name:"Home",component:O},{path:"/admin",name:"Admin",component:function(){return n.e("about").then(n.bind(null,"3530"))}},{path:"/form",name:"Form",component:function(){return n.e("about").then(n.bind(null,"c109"))}}],x=new h["a"]({mode:"history",base:"/",routes:j}),E=x,S=n("2f62");r["default"].use(S["a"]);var P=new S["a"].Store({state:{},mutations:{},actions:{},modules:{}}),k=n("5f5b");n("f9e3"),n("2dd8");r["default"].config.productionTip=!1,r["default"].use(k["a"]),new r["default"]({router:E,store:P,render:function(e){return e(v)}}).$mount("#app")},"5c0b":function(e,t,n){"use strict";n("9c0c")},"9c0c":function(e,t,n){},af35:function(e,t,n){}});
//# sourceMappingURL=app.66428408.js.map