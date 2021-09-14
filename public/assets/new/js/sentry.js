
/*[PATH @digikala/supernova/node_modules/jquery/dist/jquery.min.js]*/
/*! jQuery v3.4.1 | (c) JS Foundation and other contributors | jquery.org/license */
!function(e,t){"use strict";"object"==typeof module&&"object"==typeof module.exports?module.exports=e.document?t(e,!0):function(e){if(!e.document)throw new Error("jQuery requires a window with a document");return t(e)}:t(e)}("undefined"!=typeof window?window:this,function(C,e){"use strict";var t=[],E=C.document,r=Object.getPrototypeOf,s=t.slice,g=t.concat,u=t.push,i=t.indexOf,n={},o=n.toString,v=n.hasOwnProperty,a=v.toString,l=a.call(Object),y={},m=function(e){return"function"==typeof e&&"number"!=typeof e.nodeType},x=function(e){return null!=e&&e===e.window},c={type:!0,src:!0,nonce:!0,noModule:!0};function b(e,t,n){var r,i,o=(n=n||E).createElement("script");if(o.text=e,t)for(r in c)(i=t[r]||t.getAttribute&&t.getAttribute(r))&&o.setAttribute(r,i);n.head.appendChild(o).parentNode.removeChild(o)}function w(e){return null==e?e+"":"object"==typeof e||"function"==typeof e?n[o.call(e)]||"object":typeof e}var f="3.4.1",k=function(e,t){return new k.fn.init(e,t)},p=/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;function d(e){var t=!!e&&"length"in e&&e.length,n=w(e);return!m(e)&&!x(e)&&("array"===n||0===t||"number"==typeof t&&0<t&&t-1 in e)}k.fn=k.prototype={jquery:f,constructor:k,length:0,toArray:function(){return s.call(this)},get:function(e){return null==e?s.call(this):e<0?this[e+this.length]:this[e]},pushStack:function(e){var t=k.merge(this.constructor(),e);return t.prevObject=this,t},each:function(e){return k.each(this,e)},map:function(n){return this.pushStack(k.map(this,function(e,t){return n.call(e,t,e)}))},slice:function(){return this.pushStack(s.apply(this,arguments))},first:function(){return this.eq(0)},last:function(){return this.eq(-1)},eq:function(e){var t=this.length,n=+e+(e<0?t:0);return this.pushStack(0<=n&&n<t?[this[n]]:[])},end:function(){return this.prevObject||this.constructor()},push:u,sort:t.sort,splice:t.splice},k.extend=k.fn.extend=function(){var e,t,n,r,i,o,a=arguments[0]||{},s=1,u=arguments.length,l=!1;for("boolean"==typeof a&&(l=a,a=arguments[s]||{},s++),"object"==typeof a||m(a)||(a={}),s===u&&(a=this,s--);s<u;s++)if(null!=(e=arguments[s]))for(t in e)r=e[t],"__proto__"!==t&&a!==r&&(l&&r&&(k.isPlainObject(r)||(i=Array.isArray(r)))?(n=a[t],o=i&&!Array.isArray(n)?[]:i||k.isPlainObject(n)?n:{},i=!1,a[t]=k.extend(l,o,r)):void 0!==r&&(a[t]=r));return a},k.extend({expando:"jQuery"+(f+Math.random()).replace(/\D/g,""),isReady:!0,error:function(e){throw new Error(e)},noop:function(){},isPlainObject:function(e){var t,n;return!(!e||"[object Object]"!==o.call(e))&&(!(t=r(e))||"function"==typeof(n=v.call(t,"constructor")&&t.constructor)&&a.call(n)===l)},isEmptyObject:function(e){var t;for(t in e)return!1;return!0},globalEval:function(e,t){b(e,{nonce:t&&t.nonce})},each:function(e,t){var n,r=0;if(d(e)){for(n=e.length;r<n;r++)if(!1===t.call(e[r],r,e[r]))break}else for(r in e)if(!1===t.call(e[r],r,e[r]))break;return e},trim:function(e){return null==e?"":(e+"").replace(p,"")},makeArray:function(e,t){var n=t||[];return null!=e&&(d(Object(e))?k.merge(n,"string"==typeof e?[e]:e):u.call(n,e)),n},inArray:function(e,t,n){return null==t?-1:i.call(t,e,n)},merge:function(e,t){for(var n=+t.length,r=0,i=e.length;r<n;r++)e[i++]=t[r];return e.length=i,e},grep:function(e,t,n){for(var r=[],i=0,o=e.length,a=!n;i<o;i++)!t(e[i],i)!==a&&r.push(e[i]);return r},map:function(e,t,n){var r,i,o=0,a=[];if(d(e))for(r=e.length;o<r;o++)null!=(i=t(e[o],o,n))&&a.push(i);else for(o in e)null!=(i=t(e[o],o,n))&&a.push(i);return g.apply([],a)},guid:1,support:y}),"function"==typeof Symbol&&(k.fn[Symbol.iterator]=t[Symbol.iterator]),k.each("Boolean Number String Function Array Date RegExp Object Error Symbol".split(" "),function(e,t){n["[object "+t+"]"]=t.toLowerCase()});var h=function(n){var e,d,b,o,i,h,f,g,w,u,l,T,C,a,E,v,s,c,y,k="sizzle"+1*new Date,m=n.document,S=0,r=0,p=ue(),x=ue(),N=ue(),A=ue(),D=function(e,t){return e===t&&(l=!0),0},j={}.hasOwnProperty,t=[],q=t.pop,L=t.push,H=t.push,O=t.slice,P=function(e,t){for(var n=0,r=e.length;n<r;n++)if(e[n]===t)return n;return-1},R="checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",M="[\\x20\\t\\r\\n\\f]",I="(?:\\\\.|[\\w-]|[^\0-\\xa0])+",W="\\["+M+"*("+I+")(?:"+M+"*([*^$|!~]?=)"+M+"*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|("+I+"))|)"+M+"*\\]",$=":("+I+")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|"+W+")*)|.*)\\)|)",F=new RegExp(M+"+","g"),B=new RegExp("^"+M+"+|((?:^|[^\\\\])(?:\\\\.)*)"+M+"+$","g"),_=new RegExp("^"+M+"*,"+M+"*"),z=new RegExp("^"+M+"*([>+~]|"+M+")"+M+"*"),U=new RegExp(M+"|>"),X=new RegExp($),V=new RegExp("^"+I+"$"),G={ID:new RegExp("^#("+I+")"),CLASS:new RegExp("^\\.("+I+")"),TAG:new RegExp("^("+I+"|[*])"),ATTR:new RegExp("^"+W),PSEUDO:new RegExp("^"+$),CHILD:new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\("+M+"*(even|odd|(([+-]|)(\\d*)n|)"+M+"*(?:([+-]|)"+M+"*(\\d+)|))"+M+"*\\)|)","i"),bool:new RegExp("^(?:"+R+")$","i"),needsContext:new RegExp("^"+M+"*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\("+M+"*((?:-\\d)?\\d*)"+M+"*\\)|)(?=[^-]|$)","i")},Y=/HTML$/i,Q=/^(?:input|select|textarea|button)$/i,J=/^h\d$/i,K=/^[^{]+\{\s*\[native \w/,Z=/^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,ee=/[+~]/,te=new RegExp("\\\\([\\da-f]{1,6}"+M+"?|("+M+")|.)","ig"),ne=function(e,t,n){var r="0x"+t-65536;return r!=r||n?t:r<0?String.fromCharCode(r+65536):String.fromCharCode(r>>10|55296,1023&r|56320)},re=/([\0-\x1f\x7f]|^-?\d)|^-$|[^\0-\x1f\x7f-\uFFFF\w-]/g,ie=function(e,t){return t?"\0"===e?"\ufffd":e.slice(0,-1)+"\\"+e.charCodeAt(e.length-1).toString(16)+" ":"\\"+e},oe=function(){T()},ae=be(function(e){return!0===e.disabled&&"fieldset"===e.nodeName.toLowerCase()},{dir:"parentNode",next:"legend"});try{H.apply(t=O.call(m.childNodes),m.childNodes),t[m.childNodes.length].nodeType}catch(e){H={apply:t.length?function(e,t){L.apply(e,O.call(t))}:function(e,t){var n=e.length,r=0;while(e[n++]=t[r++]);e.length=n-1}}}function se(t,e,n,r){var i,o,a,s,u,l,c,f=e&&e.ownerDocument,p=e?e.nodeType:9;if(n=n||[],"string"!=typeof t||!t||1!==p&&9!==p&&11!==p)return n;if(!r&&((e?e.ownerDocument||e:m)!==C&&T(e),e=e||C,E)){if(11!==p&&(u=Z.exec(t)))if(i=u[1]){if(9===p){if(!(a=e.getElementById(i)))return n;if(a.id===i)return n.push(a),n}else if(f&&(a=f.getElementById(i))&&y(e,a)&&a.id===i)return n.push(a),n}else{if(u[2])return H.apply(n,e.getElementsByTagName(t)),n;if((i=u[3])&&d.getElementsByClassName&&e.getElementsByClassName)return H.apply(n,e.getElementsByClassName(i)),n}if(d.qsa&&!A[t+" "]&&(!v||!v.test(t))&&(1!==p||"object"!==e.nodeName.toLowerCase())){if(c=t,f=e,1===p&&U.test(t)){(s=e.getAttribute("id"))?s=s.replace(re,ie):e.setAttribute("id",s=k),o=(l=h(t)).length;while(o--)l[o]="#"+s+" "+xe(l[o]);c=l.join(","),f=ee.test(t)&&ye(e.parentNode)||e}try{return H.apply(n,f.querySelectorAll(c)),n}catch(e){A(t,!0)}finally{s===k&&e.removeAttribute("id")}}}return g(t.replace(B,"$1"),e,n,r)}function ue(){var r=[];return function e(t,n){return r.push(t+" ")>b.cacheLength&&delete e[r.shift()],e[t+" "]=n}}function le(e){return e[k]=!0,e}function ce(e){var t=C.createElement("fieldset");try{return!!e(t)}catch(e){return!1}finally{t.parentNode&&t.parentNode.removeChild(t),t=null}}function fe(e,t){var n=e.split("|"),r=n.length;while(r--)b.attrHandle[n[r]]=t}function pe(e,t){var n=t&&e,r=n&&1===e.nodeType&&1===t.nodeType&&e.sourceIndex-t.sourceIndex;if(r)return r;if(n)while(n=n.nextSibling)if(n===t)return-1;return e?1:-1}function de(t){return function(e){return"input"===e.nodeName.toLowerCase()&&e.type===t}}function he(n){return function(e){var t=e.nodeName.toLowerCase();return("input"===t||"button"===t)&&e.type===n}}function ge(t){return function(e){return"form"in e?e.parentNode&&!1===e.disabled?"label"in e?"label"in e.parentNode?e.parentNode.disabled===t:e.disabled===t:e.isDisabled===t||e.isDisabled!==!t&&ae(e)===t:e.disabled===t:"label"in e&&e.disabled===t}}function ve(a){return le(function(o){return o=+o,le(function(e,t){var n,r=a([],e.length,o),i=r.length;while(i--)e[n=r[i]]&&(e[n]=!(t[n]=e[n]))})})}function ye(e){return e&&"undefined"!=typeof e.getElementsByTagName&&e}for(e in d=se.support={},i=se.isXML=function(e){var t=e.namespaceURI,n=(e.ownerDocument||e).documentElement;return!Y.test(t||n&&n.nodeName||"HTML")},T=se.setDocument=function(e){var t,n,r=e?e.ownerDocument||e:m;return r!==C&&9===r.nodeType&&r.documentElement&&(a=(C=r).documentElement,E=!i(C),m!==C&&(n=C.defaultView)&&n.top!==n&&(n.addEventListener?n.addEventListener("unload",oe,!1):n.attachEvent&&n.attachEvent("onunload",oe)),d.attributes=ce(function(e){return e.className="i",!e.getAttribute("className")}),d.getElementsByTagName=ce(function(e){return e.appendChild(C.createComment("")),!e.getElementsByTagName("*").length}),d.getElementsByClassName=K.test(C.getElementsByClassName),d.getById=ce(function(e){return a.appendChild(e).id=k,!C.getElementsByName||!C.getElementsByName(k).length}),d.getById?(b.filter.ID=function(e){var t=e.replace(te,ne);return function(e){return e.getAttribute("id")===t}},b.find.ID=function(e,t){if("undefined"!=typeof t.getElementById&&E){var n=t.getElementById(e);return n?[n]:[]}}):(b.filter.ID=function(e){var n=e.replace(te,ne);return function(e){var t="undefined"!=typeof e.getAttributeNode&&e.getAttributeNode("id");return t&&t.value===n}},b.find.ID=function(e,t){if("undefined"!=typeof t.getElementById&&E){var n,r,i,o=t.getElementById(e);if(o){if((n=o.getAttributeNode("id"))&&n.value===e)return[o];i=t.getElementsByName(e),r=0;while(o=i[r++])if((n=o.getAttributeNode("id"))&&n.value===e)return[o]}return[]}}),b.find.TAG=d.getElementsByTagName?function(e,t){return"undefined"!=typeof t.getElementsByTagName?t.getElementsByTagName(e):d.qsa?t.querySelectorAll(e):void 0}:function(e,t){var n,r=[],i=0,o=t.getElementsByTagName(e);if("*"===e){while(n=o[i++])1===n.nodeType&&r.push(n);return r}return o},b.find.CLASS=d.getElementsByClassName&&function(e,t){if("undefined"!=typeof t.getElementsByClassName&&E)return t.getElementsByClassName(e)},s=[],v=[],(d.qsa=K.test(C.querySelectorAll))&&(ce(function(e){a.appendChild(e).innerHTML="<a id='"+k+"'></a><select id='"+k+"-\r\\' msallowcapture=''><option selected=''></option></select>",e.querySelectorAll("[msallowcapture^='']").length&&v.push("[*^$]="+M+"*(?:''|\"\")"),e.querySelectorAll("[selected]").length||v.push("\\["+M+"*(?:value|"+R+")"),e.querySelectorAll("[id~="+k+"-]").length||v.push("~="),e.querySelectorAll(":checked").length||v.push(":checked"),e.querySelectorAll("a#"+k+"+*").length||v.push(".#.+[+~]")}),ce(function(e){e.innerHTML="<a href='' disabled='disabled'></a><select disabled='disabled'><option/></select>";var t=C.createElement("input");t.setAttribute("type","hidden"),e.appendChild(t).setAttribute("name","D"),e.querySelectorAll("[name=d]").length&&v.push("name"+M+"*[*^$|!~]?="),2!==e.querySelectorAll(":enabled").length&&v.push(":enabled",":disabled"),a.appendChild(e).disabled=!0,2!==e.querySelectorAll(":disabled").length&&v.push(":enabled",":disabled"),e.querySelectorAll("*,:x"),v.push(",.*:")})),(d.matchesSelector=K.test(c=a.matches||a.webkitMatchesSelector||a.mozMatchesSelector||a.oMatchesSelector||a.msMatchesSelector))&&ce(function(e){d.disconnectedMatch=c.call(e,"*"),c.call(e,"[s!='']:x"),s.push("!=",$)}),v=v.length&&new RegExp(v.join("|")),s=s.length&&new RegExp(s.join("|")),t=K.test(a.compareDocumentPosition),y=t||K.test(a.contains)?function(e,t){var n=9===e.nodeType?e.documentElement:e,r=t&&t.parentNode;return e===r||!(!r||1!==r.nodeType||!(n.contains?n.contains(r):e.compareDocumentPosition&&16&e.compareDocumentPosition(r)))}:function(e,t){if(t)while(t=t.parentNode)if(t===e)return!0;return!1},D=t?function(e,t){if(e===t)return l=!0,0;var n=!e.compareDocumentPosition-!t.compareDocumentPosition;return n||(1&(n=(e.ownerDocument||e)===(t.ownerDocument||t)?e.compareDocumentPosition(t):1)||!d.sortDetached&&t.compareDocumentPosition(e)===n?e===C||e.ownerDocument===m&&y(m,e)?-1:t===C||t.ownerDocument===m&&y(m,t)?1:u?P(u,e)-P(u,t):0:4&n?-1:1)}:function(e,t){if(e===t)return l=!0,0;var n,r=0,i=e.parentNode,o=t.parentNode,a=[e],s=[t];if(!i||!o)return e===C?-1:t===C?1:i?-1:o?1:u?P(u,e)-P(u,t):0;if(i===o)return pe(e,t);n=e;while(n=n.parentNode)a.unshift(n);n=t;while(n=n.parentNode)s.unshift(n);while(a[r]===s[r])r++;return r?pe(a[r],s[r]):a[r]===m?-1:s[r]===m?1:0}),C},se.matches=function(e,t){return se(e,null,null,t)},se.matchesSelector=function(e,t){if((e.ownerDocument||e)!==C&&T(e),d.matchesSelector&&E&&!A[t+" "]&&(!s||!s.test(t))&&(!v||!v.test(t)))try{var n=c.call(e,t);if(n||d.disconnectedMatch||e.document&&11!==e.document.nodeType)return n}catch(e){A(t,!0)}return 0<se(t,C,null,[e]).length},se.contains=function(e,t){return(e.ownerDocument||e)!==C&&T(e),y(e,t)},se.attr=function(e,t){(e.ownerDocument||e)!==C&&T(e);var n=b.attrHandle[t.toLowerCase()],r=n&&j.call(b.attrHandle,t.toLowerCase())?n(e,t,!E):void 0;return void 0!==r?r:d.attributes||!E?e.getAttribute(t):(r=e.getAttributeNode(t))&&r.specified?r.value:null},se.escape=function(e){return(e+"").replace(re,ie)},se.error=function(e){throw new Error("Syntax error, unrecognized expression: "+e)},se.uniqueSort=function(e){var t,n=[],r=0,i=0;if(l=!d.detectDuplicates,u=!d.sortStable&&e.slice(0),e.sort(D),l){while(t=e[i++])t===e[i]&&(r=n.push(i));while(r--)e.splice(n[r],1)}return u=null,e},o=se.getText=function(e){var t,n="",r=0,i=e.nodeType;if(i){if(1===i||9===i||11===i){if("string"==typeof e.textContent)return e.textContent;for(e=e.firstChild;e;e=e.nextSibling)n+=o(e)}else if(3===i||4===i)return e.nodeValue}else while(t=e[r++])n+=o(t);return n},(b=se.selectors={cacheLength:50,createPseudo:le,match:G,attrHandle:{},find:{},relative:{">":{dir:"parentNode",first:!0}," ":{dir:"parentNode"},"+":{dir:"previousSibling",first:!0},"~":{dir:"previousSibling"}},preFilter:{ATTR:function(e){return e[1]=e[1].replace(te,ne),e[3]=(e[3]||e[4]||e[5]||"").replace(te,ne),"~="===e[2]&&(e[3]=" "+e[3]+" "),e.slice(0,4)},CHILD:function(e){return e[1]=e[1].toLowerCase(),"nth"===e[1].slice(0,3)?(e[3]||se.error(e[0]),e[4]=+(e[4]?e[5]+(e[6]||1):2*("even"===e[3]||"odd"===e[3])),e[5]=+(e[7]+e[8]||"odd"===e[3])):e[3]&&se.error(e[0]),e},PSEUDO:function(e){var t,n=!e[6]&&e[2];return G.CHILD.test(e[0])?null:(e[3]?e[2]=e[4]||e[5]||"":n&&X.test(n)&&(t=h(n,!0))&&(t=n.indexOf(")",n.length-t)-n.length)&&(e[0]=e[0].slice(0,t),e[2]=n.slice(0,t)),e.slice(0,3))}},filter:{TAG:function(e){var t=e.replace(te,ne).toLowerCase();return"*"===e?function(){return!0}:function(e){return e.nodeName&&e.nodeName.toLowerCase()===t}},CLASS:function(e){var t=p[e+" "];return t||(t=new RegExp("(^|"+M+")"+e+"("+M+"|$)"))&&p(e,function(e){return t.test("string"==typeof e.className&&e.className||"undefined"!=typeof e.getAttribute&&e.getAttribute("class")||"")})},ATTR:function(n,r,i){return function(e){var t=se.attr(e,n);return null==t?"!="===r:!r||(t+="","="===r?t===i:"!="===r?t!==i:"^="===r?i&&0===t.indexOf(i):"*="===r?i&&-1<t.indexOf(i):"$="===r?i&&t.slice(-i.length)===i:"~="===r?-1<(" "+t.replace(F," ")+" ").indexOf(i):"|="===r&&(t===i||t.slice(0,i.length+1)===i+"-"))}},CHILD:function(h,e,t,g,v){var y="nth"!==h.slice(0,3),m="last"!==h.slice(-4),x="of-type"===e;return 1===g&&0===v?function(e){return!!e.parentNode}:function(e,t,n){var r,i,o,a,s,u,l=y!==m?"nextSibling":"previousSibling",c=e.parentNode,f=x&&e.nodeName.toLowerCase(),p=!n&&!x,d=!1;if(c){if(y){while(l){a=e;while(a=a[l])if(x?a.nodeName.toLowerCase()===f:1===a.nodeType)return!1;u=l="only"===h&&!u&&"nextSibling"}return!0}if(u=[m?c.firstChild:c.lastChild],m&&p){d=(s=(r=(i=(o=(a=c)[k]||(a[k]={}))[a.uniqueID]||(o[a.uniqueID]={}))[h]||[])[0]===S&&r[1])&&r[2],a=s&&c.childNodes[s];while(a=++s&&a&&a[l]||(d=s=0)||u.pop())if(1===a.nodeType&&++d&&a===e){i[h]=[S,s,d];break}}else if(p&&(d=s=(r=(i=(o=(a=e)[k]||(a[k]={}))[a.uniqueID]||(o[a.uniqueID]={}))[h]||[])[0]===S&&r[1]),!1===d)while(a=++s&&a&&a[l]||(d=s=0)||u.pop())if((x?a.nodeName.toLowerCase()===f:1===a.nodeType)&&++d&&(p&&((i=(o=a[k]||(a[k]={}))[a.uniqueID]||(o[a.uniqueID]={}))[h]=[S,d]),a===e))break;return(d-=v)===g||d%g==0&&0<=d/g}}},PSEUDO:function(e,o){var t,a=b.pseudos[e]||b.setFilters[e.toLowerCase()]||se.error("unsupported pseudo: "+e);return a[k]?a(o):1<a.length?(t=[e,e,"",o],b.setFilters.hasOwnProperty(e.toLowerCase())?le(function(e,t){var n,r=a(e,o),i=r.length;while(i--)e[n=P(e,r[i])]=!(t[n]=r[i])}):function(e){return a(e,0,t)}):a}},pseudos:{not:le(function(e){var r=[],i=[],s=f(e.replace(B,"$1"));return s[k]?le(function(e,t,n,r){var i,o=s(e,null,r,[]),a=e.length;while(a--)(i=o[a])&&(e[a]=!(t[a]=i))}):function(e,t,n){return r[0]=e,s(r,null,n,i),r[0]=null,!i.pop()}}),has:le(function(t){return function(e){return 0<se(t,e).length}}),contains:le(function(t){return t=t.replace(te,ne),function(e){return-1<(e.textContent||o(e)).indexOf(t)}}),lang:le(function(n){return V.test(n||"")||se.error("unsupported lang: "+n),n=n.replace(te,ne).toLowerCase(),function(e){var t;do{if(t=E?e.lang:e.getAttribute("xml:lang")||e.getAttribute("lang"))return(t=t.toLowerCase())===n||0===t.indexOf(n+"-")}while((e=e.parentNode)&&1===e.nodeType);return!1}}),target:function(e){var t=n.location&&n.location.hash;return t&&t.slice(1)===e.id},root:function(e){return e===a},focus:function(e){return e===C.activeElement&&(!C.hasFocus||C.hasFocus())&&!!(e.type||e.href||~e.tabIndex)},enabled:ge(!1),disabled:ge(!0),checked:function(e){var t=e.nodeName.toLowerCase();return"input"===t&&!!e.checked||"option"===t&&!!e.selected},selected:function(e){return e.parentNode&&e.parentNode.selectedIndex,!0===e.selected},empty:function(e){for(e=e.firstChild;e;e=e.nextSibling)if(e.nodeType<6)return!1;return!0},parent:function(e){return!b.pseudos.empty(e)},header:function(e){return J.test(e.nodeName)},input:function(e){return Q.test(e.nodeName)},button:function(e){var t=e.nodeName.toLowerCase();return"input"===t&&"button"===e.type||"button"===t},text:function(e){var t;return"input"===e.nodeName.toLowerCase()&&"text"===e.type&&(null==(t=e.getAttribute("type"))||"text"===t.toLowerCase())},first:ve(function(){return[0]}),last:ve(function(e,t){return[t-1]}),eq:ve(function(e,t,n){return[n<0?n+t:n]}),even:ve(function(e,t){for(var n=0;n<t;n+=2)e.push(n);return e}),odd:ve(function(e,t){for(var n=1;n<t;n+=2)e.push(n);return e}),lt:ve(function(e,t,n){for(var r=n<0?n+t:t<n?t:n;0<=--r;)e.push(r);return e}),gt:ve(function(e,t,n){for(var r=n<0?n+t:n;++r<t;)e.push(r);return e})}}).pseudos.nth=b.pseudos.eq,{radio:!0,checkbox:!0,file:!0,password:!0,image:!0})b.pseudos[e]=de(e);for(e in{submit:!0,reset:!0})b.pseudos[e]=he(e);function me(){}function xe(e){for(var t=0,n=e.length,r="";t<n;t++)r+=e[t].value;return r}function be(s,e,t){var u=e.dir,l=e.next,c=l||u,f=t&&"parentNode"===c,p=r++;return e.first?function(e,t,n){while(e=e[u])if(1===e.nodeType||f)return s(e,t,n);return!1}:function(e,t,n){var r,i,o,a=[S,p];if(n){while(e=e[u])if((1===e.nodeType||f)&&s(e,t,n))return!0}else while(e=e[u])if(1===e.nodeType||f)if(i=(o=e[k]||(e[k]={}))[e.uniqueID]||(o[e.uniqueID]={}),l&&l===e.nodeName.toLowerCase())e=e[u]||e;else{if((r=i[c])&&r[0]===S&&r[1]===p)return a[2]=r[2];if((i[c]=a)[2]=s(e,t,n))return!0}return!1}}function we(i){return 1<i.length?function(e,t,n){var r=i.length;while(r--)if(!i[r](e,t,n))return!1;return!0}:i[0]}function Te(e,t,n,r,i){for(var o,a=[],s=0,u=e.length,l=null!=t;s<u;s++)(o=e[s])&&(n&&!n(o,r,i)||(a.push(o),l&&t.push(s)));return a}function Ce(d,h,g,v,y,e){return v&&!v[k]&&(v=Ce(v)),y&&!y[k]&&(y=Ce(y,e)),le(function(e,t,n,r){var i,o,a,s=[],u=[],l=t.length,c=e||function(e,t,n){for(var r=0,i=t.length;r<i;r++)se(e,t[r],n);return n}(h||"*",n.nodeType?[n]:n,[]),f=!d||!e&&h?c:Te(c,s,d,n,r),p=g?y||(e?d:l||v)?[]:t:f;if(g&&g(f,p,n,r),v){i=Te(p,u),v(i,[],n,r),o=i.length;while(o--)(a=i[o])&&(p[u[o]]=!(f[u[o]]=a))}if(e){if(y||d){if(y){i=[],o=p.length;while(o--)(a=p[o])&&i.push(f[o]=a);y(null,p=[],i,r)}o=p.length;while(o--)(a=p[o])&&-1<(i=y?P(e,a):s[o])&&(e[i]=!(t[i]=a))}}else p=Te(p===t?p.splice(l,p.length):p),y?y(null,t,p,r):H.apply(t,p)})}function Ee(e){for(var i,t,n,r=e.length,o=b.relative[e[0].type],a=o||b.relative[" "],s=o?1:0,u=be(function(e){return e===i},a,!0),l=be(function(e){return-1<P(i,e)},a,!0),c=[function(e,t,n){var r=!o&&(n||t!==w)||((i=t).nodeType?u(e,t,n):l(e,t,n));return i=null,r}];s<r;s++)if(t=b.relative[e[s].type])c=[be(we(c),t)];else{if((t=b.filter[e[s].type].apply(null,e[s].matches))[k]){for(n=++s;n<r;n++)if(b.relative[e[n].type])break;return Ce(1<s&&we(c),1<s&&xe(e.slice(0,s-1).concat({value:" "===e[s-2].type?"*":""})).replace(B,"$1"),t,s<n&&Ee(e.slice(s,n)),n<r&&Ee(e=e.slice(n)),n<r&&xe(e))}c.push(t)}return we(c)}return me.prototype=b.filters=b.pseudos,b.setFilters=new me,h=se.tokenize=function(e,t){var n,r,i,o,a,s,u,l=x[e+" "];if(l)return t?0:l.slice(0);a=e,s=[],u=b.preFilter;while(a){for(o in n&&!(r=_.exec(a))||(r&&(a=a.slice(r[0].length)||a),s.push(i=[])),n=!1,(r=z.exec(a))&&(n=r.shift(),i.push({value:n,type:r[0].replace(B," ")}),a=a.slice(n.length)),b.filter)!(r=G[o].exec(a))||u[o]&&!(r=u[o](r))||(n=r.shift(),i.push({value:n,type:o,matches:r}),a=a.slice(n.length));if(!n)break}return t?a.length:a?se.error(e):x(e,s).slice(0)},f=se.compile=function(e,t){var n,v,y,m,x,r,i=[],o=[],a=N[e+" "];if(!a){t||(t=h(e)),n=t.length;while(n--)(a=Ee(t[n]))[k]?i.push(a):o.push(a);(a=N(e,(v=o,m=0<(y=i).length,x=0<v.length,r=function(e,t,n,r,i){var o,a,s,u=0,l="0",c=e&&[],f=[],p=w,d=e||x&&b.find.TAG("*",i),h=S+=null==p?1:Math.random()||.1,g=d.length;for(i&&(w=t===C||t||i);l!==g&&null!=(o=d[l]);l++){if(x&&o){a=0,t||o.ownerDocument===C||(T(o),n=!E);while(s=v[a++])if(s(o,t||C,n)){r.push(o);break}i&&(S=h)}m&&((o=!s&&o)&&u--,e&&c.push(o))}if(u+=l,m&&l!==u){a=0;while(s=y[a++])s(c,f,t,n);if(e){if(0<u)while(l--)c[l]||f[l]||(f[l]=q.call(r));f=Te(f)}H.apply(r,f),i&&!e&&0<f.length&&1<u+y.length&&se.uniqueSort(r)}return i&&(S=h,w=p),c},m?le(r):r))).selector=e}return a},g=se.select=function(e,t,n,r){var i,o,a,s,u,l="function"==typeof e&&e,c=!r&&h(e=l.selector||e);if(n=n||[],1===c.length){if(2<(o=c[0]=c[0].slice(0)).length&&"ID"===(a=o[0]).type&&9===t.nodeType&&E&&b.relative[o[1].type]){if(!(t=(b.find.ID(a.matches[0].replace(te,ne),t)||[])[0]))return n;l&&(t=t.parentNode),e=e.slice(o.shift().value.length)}i=G.needsContext.test(e)?0:o.length;while(i--){if(a=o[i],b.relative[s=a.type])break;if((u=b.find[s])&&(r=u(a.matches[0].replace(te,ne),ee.test(o[0].type)&&ye(t.parentNode)||t))){if(o.splice(i,1),!(e=r.length&&xe(o)))return H.apply(n,r),n;break}}}return(l||f(e,c))(r,t,!E,n,!t||ee.test(e)&&ye(t.parentNode)||t),n},d.sortStable=k.split("").sort(D).join("")===k,d.detectDuplicates=!!l,T(),d.sortDetached=ce(function(e){return 1&e.compareDocumentPosition(C.createElement("fieldset"))}),ce(function(e){return e.innerHTML="<a href='#'></a>","#"===e.firstChild.getAttribute("href")})||fe("type|href|height|width",function(e,t,n){if(!n)return e.getAttribute(t,"type"===t.toLowerCase()?1:2)}),d.attributes&&ce(function(e){return e.innerHTML="<input/>",e.firstChild.setAttribute("value",""),""===e.firstChild.getAttribute("value")})||fe("value",function(e,t,n){if(!n&&"input"===e.nodeName.toLowerCase())return e.defaultValue}),ce(function(e){return null==e.getAttribute("disabled")})||fe(R,function(e,t,n){var r;if(!n)return!0===e[t]?t.toLowerCase():(r=e.getAttributeNode(t))&&r.specified?r.value:null}),se}(C);k.find=h,k.expr=h.selectors,k.expr[":"]=k.expr.pseudos,k.uniqueSort=k.unique=h.uniqueSort,k.text=h.getText,k.isXMLDoc=h.isXML,k.contains=h.contains,k.escapeSelector=h.escape;var T=function(e,t,n){var r=[],i=void 0!==n;while((e=e[t])&&9!==e.nodeType)if(1===e.nodeType){if(i&&k(e).is(n))break;r.push(e)}return r},S=function(e,t){for(var n=[];e;e=e.nextSibling)1===e.nodeType&&e!==t&&n.push(e);return n},N=k.expr.match.needsContext;function A(e,t){return e.nodeName&&e.nodeName.toLowerCase()===t.toLowerCase()}var D=/^<([a-z][^\/\0>:\x20\t\r\n\f]*)[\x20\t\r\n\f]*\/?>(?:<\/\1>|)$/i;function j(e,n,r){return m(n)?k.grep(e,function(e,t){return!!n.call(e,t,e)!==r}):n.nodeType?k.grep(e,function(e){return e===n!==r}):"string"!=typeof n?k.grep(e,function(e){return-1<i.call(n,e)!==r}):k.filter(n,e,r)}k.filter=function(e,t,n){var r=t[0];return n&&(e=":not("+e+")"),1===t.length&&1===r.nodeType?k.find.matchesSelector(r,e)?[r]:[]:k.find.matches(e,k.grep(t,function(e){return 1===e.nodeType}))},k.fn.extend({find:function(e){var t,n,r=this.length,i=this;if("string"!=typeof e)return this.pushStack(k(e).filter(function(){for(t=0;t<r;t++)if(k.contains(i[t],this))return!0}));for(n=this.pushStack([]),t=0;t<r;t++)k.find(e,i[t],n);return 1<r?k.uniqueSort(n):n},filter:function(e){return this.pushStack(j(this,e||[],!1))},not:function(e){return this.pushStack(j(this,e||[],!0))},is:function(e){return!!j(this,"string"==typeof e&&N.test(e)?k(e):e||[],!1).length}});var q,L=/^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]+))$/;(k.fn.init=function(e,t,n){var r,i;if(!e)return this;if(n=n||q,"string"==typeof e){if(!(r="<"===e[0]&&">"===e[e.length-1]&&3<=e.length?[null,e,null]:L.exec(e))||!r[1]&&t)return!t||t.jquery?(t||n).find(e):this.constructor(t).find(e);if(r[1]){if(t=t instanceof k?t[0]:t,k.merge(this,k.parseHTML(r[1],t&&t.nodeType?t.ownerDocument||t:E,!0)),D.test(r[1])&&k.isPlainObject(t))for(r in t)m(this[r])?this[r](t[r]):this.attr(r,t[r]);return this}return(i=E.getElementById(r[2]))&&(this[0]=i,this.length=1),this}return e.nodeType?(this[0]=e,this.length=1,this):m(e)?void 0!==n.ready?n.ready(e):e(k):k.makeArray(e,this)}).prototype=k.fn,q=k(E);var H=/^(?:parents|prev(?:Until|All))/,O={children:!0,contents:!0,next:!0,prev:!0};function P(e,t){while((e=e[t])&&1!==e.nodeType);return e}k.fn.extend({has:function(e){var t=k(e,this),n=t.length;return this.filter(function(){for(var e=0;e<n;e++)if(k.contains(this,t[e]))return!0})},closest:function(e,t){var n,r=0,i=this.length,o=[],a="string"!=typeof e&&k(e);if(!N.test(e))for(;r<i;r++)for(n=this[r];n&&n!==t;n=n.parentNode)if(n.nodeType<11&&(a?-1<a.index(n):1===n.nodeType&&k.find.matchesSelector(n,e))){o.push(n);break}return this.pushStack(1<o.length?k.uniqueSort(o):o)},index:function(e){return e?"string"==typeof e?i.call(k(e),this[0]):i.call(this,e.jquery?e[0]:e):this[0]&&this[0].parentNode?this.first().prevAll().length:-1},add:function(e,t){return this.pushStack(k.uniqueSort(k.merge(this.get(),k(e,t))))},addBack:function(e){return this.add(null==e?this.prevObject:this.prevObject.filter(e))}}),k.each({parent:function(e){var t=e.parentNode;return t&&11!==t.nodeType?t:null},parents:function(e){return T(e,"parentNode")},parentsUntil:function(e,t,n){return T(e,"parentNode",n)},next:function(e){return P(e,"nextSibling")},prev:function(e){return P(e,"previousSibling")},nextAll:function(e){return T(e,"nextSibling")},prevAll:function(e){return T(e,"previousSibling")},nextUntil:function(e,t,n){return T(e,"nextSibling",n)},prevUntil:function(e,t,n){return T(e,"previousSibling",n)},siblings:function(e){return S((e.parentNode||{}).firstChild,e)},children:function(e){return S(e.firstChild)},contents:function(e){return"undefined"!=typeof e.contentDocument?e.contentDocument:(A(e,"template")&&(e=e.content||e),k.merge([],e.childNodes))}},function(r,i){k.fn[r]=function(e,t){var n=k.map(this,i,e);return"Until"!==r.slice(-5)&&(t=e),t&&"string"==typeof t&&(n=k.filter(t,n)),1<this.length&&(O[r]||k.uniqueSort(n),H.test(r)&&n.reverse()),this.pushStack(n)}});var R=/[^\x20\t\r\n\f]+/g;function M(e){return e}function I(e){throw e}function W(e,t,n,r){var i;try{e&&m(i=e.promise)?i.call(e).done(t).fail(n):e&&m(i=e.then)?i.call(e,t,n):t.apply(void 0,[e].slice(r))}catch(e){n.apply(void 0,[e])}}k.Callbacks=function(r){var e,n;r="string"==typeof r?(e=r,n={},k.each(e.match(R)||[],function(e,t){n[t]=!0}),n):k.extend({},r);var i,t,o,a,s=[],u=[],l=-1,c=function(){for(a=a||r.once,o=i=!0;u.length;l=-1){t=u.shift();while(++l<s.length)!1===s[l].apply(t[0],t[1])&&r.stopOnFalse&&(l=s.length,t=!1)}r.memory||(t=!1),i=!1,a&&(s=t?[]:"")},f={add:function(){return s&&(t&&!i&&(l=s.length-1,u.push(t)),function n(e){k.each(e,function(e,t){m(t)?r.unique&&f.has(t)||s.push(t):t&&t.length&&"string"!==w(t)&&n(t)})}(arguments),t&&!i&&c()),this},remove:function(){return k.each(arguments,function(e,t){var n;while(-1<(n=k.inArray(t,s,n)))s.splice(n,1),n<=l&&l--}),this},has:function(e){return e?-1<k.inArray(e,s):0<s.length},empty:function(){return s&&(s=[]),this},disable:function(){return a=u=[],s=t="",this},disabled:function(){return!s},lock:function(){return a=u=[],t||i||(s=t=""),this},locked:function(){return!!a},fireWith:function(e,t){return a||(t=[e,(t=t||[]).slice?t.slice():t],u.push(t),i||c()),this},fire:function(){return f.fireWith(this,arguments),this},fired:function(){return!!o}};return f},k.extend({Deferred:function(e){var o=[["notify","progress",k.Callbacks("memory"),k.Callbacks("memory"),2],["resolve","done",k.Callbacks("once memory"),k.Callbacks("once memory"),0,"resolved"],["reject","fail",k.Callbacks("once memory"),k.Callbacks("once memory"),1,"rejected"]],i="pending",a={state:function(){return i},always:function(){return s.done(arguments).fail(arguments),this},"catch":function(e){return a.then(null,e)},pipe:function(){var i=arguments;return k.Deferred(function(r){k.each(o,function(e,t){var n=m(i[t[4]])&&i[t[4]];s[t[1]](function(){var e=n&&n.apply(this,arguments);e&&m(e.promise)?e.promise().progress(r.notify).done(r.resolve).fail(r.reject):r[t[0]+"With"](this,n?[e]:arguments)})}),i=null}).promise()},then:function(t,n,r){var u=0;function l(i,o,a,s){return function(){var n=this,r=arguments,e=function(){var e,t;if(!(i<u)){if((e=a.apply(n,r))===o.promise())throw new TypeError("Thenable self-resolution");t=e&&("object"==typeof e||"function"==typeof e)&&e.then,m(t)?s?t.call(e,l(u,o,M,s),l(u,o,I,s)):(u++,t.call(e,l(u,o,M,s),l(u,o,I,s),l(u,o,M,o.notifyWith))):(a!==M&&(n=void 0,r=[e]),(s||o.resolveWith)(n,r))}},t=s?e:function(){try{e()}catch(e){k.Deferred.exceptionHook&&k.Deferred.exceptionHook(e,t.stackTrace),u<=i+1&&(a!==I&&(n=void 0,r=[e]),o.rejectWith(n,r))}};i?t():(k.Deferred.getStackHook&&(t.stackTrace=k.Deferred.getStackHook()),C.setTimeout(t))}}return k.Deferred(function(e){o[0][3].add(l(0,e,m(r)?r:M,e.notifyWith)),o[1][3].add(l(0,e,m(t)?t:M)),o[2][3].add(l(0,e,m(n)?n:I))}).promise()},promise:function(e){return null!=e?k.extend(e,a):a}},s={};return k.each(o,function(e,t){var n=t[2],r=t[5];a[t[1]]=n.add,r&&n.add(function(){i=r},o[3-e][2].disable,o[3-e][3].disable,o[0][2].lock,o[0][3].lock),n.add(t[3].fire),s[t[0]]=function(){return s[t[0]+"With"](this===s?void 0:this,arguments),this},s[t[0]+"With"]=n.fireWith}),a.promise(s),e&&e.call(s,s),s},when:function(e){var n=arguments.length,t=n,r=Array(t),i=s.call(arguments),o=k.Deferred(),a=function(t){return function(e){r[t]=this,i[t]=1<arguments.length?s.call(arguments):e,--n||o.resolveWith(r,i)}};if(n<=1&&(W(e,o.done(a(t)).resolve,o.reject,!n),"pending"===o.state()||m(i[t]&&i[t].then)))return o.then();while(t--)W(i[t],a(t),o.reject);return o.promise()}});var $=/^(Eval|Internal|Range|Reference|Syntax|Type|URI)Error$/;k.Deferred.exceptionHook=function(e,t){C.console&&C.console.warn&&e&&$.test(e.name)&&C.console.warn("jQuery.Deferred exception: "+e.message,e.stack,t)},k.readyException=function(e){C.setTimeout(function(){throw e})};var F=k.Deferred();function B(){E.removeEventListener("DOMContentLoaded",B),C.removeEventListener("load",B),k.ready()}k.fn.ready=function(e){return F.then(e)["catch"](function(e){k.readyException(e)}),this},k.extend({isReady:!1,readyWait:1,ready:function(e){(!0===e?--k.readyWait:k.isReady)||(k.isReady=!0)!==e&&0<--k.readyWait||F.resolveWith(E,[k])}}),k.ready.then=F.then,"complete"===E.readyState||"loading"!==E.readyState&&!E.documentElement.doScroll?C.setTimeout(k.ready):(E.addEventListener("DOMContentLoaded",B),C.addEventListener("load",B));var _=function(e,t,n,r,i,o,a){var s=0,u=e.length,l=null==n;if("object"===w(n))for(s in i=!0,n)_(e,t,s,n[s],!0,o,a);else if(void 0!==r&&(i=!0,m(r)||(a=!0),l&&(a?(t.call(e,r),t=null):(l=t,t=function(e,t,n){return l.call(k(e),n)})),t))for(;s<u;s++)t(e[s],n,a?r:r.call(e[s],s,t(e[s],n)));return i?e:l?t.call(e):u?t(e[0],n):o},z=/^-ms-/,U=/-([a-z])/g;function X(e,t){return t.toUpperCase()}function V(e){return e.replace(z,"ms-").replace(U,X)}var G=function(e){return 1===e.nodeType||9===e.nodeType||!+e.nodeType};function Y(){this.expando=k.expando+Y.uid++}Y.uid=1,Y.prototype={cache:function(e){var t=e[this.expando];return t||(t={},G(e)&&(e.nodeType?e[this.expando]=t:Object.defineProperty(e,this.expando,{value:t,configurable:!0}))),t},set:function(e,t,n){var r,i=this.cache(e);if("string"==typeof t)i[V(t)]=n;else for(r in t)i[V(r)]=t[r];return i},get:function(e,t){return void 0===t?this.cache(e):e[this.expando]&&e[this.expando][V(t)]},access:function(e,t,n){return void 0===t||t&&"string"==typeof t&&void 0===n?this.get(e,t):(this.set(e,t,n),void 0!==n?n:t)},remove:function(e,t){var n,r=e[this.expando];if(void 0!==r){if(void 0!==t){n=(t=Array.isArray(t)?t.map(V):(t=V(t))in r?[t]:t.match(R)||[]).length;while(n--)delete r[t[n]]}(void 0===t||k.isEmptyObject(r))&&(e.nodeType?e[this.expando]=void 0:delete e[this.expando])}},hasData:function(e){var t=e[this.expando];return void 0!==t&&!k.isEmptyObject(t)}};var Q=new Y,J=new Y,K=/^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,Z=/[A-Z]/g;function ee(e,t,n){var r,i;if(void 0===n&&1===e.nodeType)if(r="data-"+t.replace(Z,"-$&").toLowerCase(),"string"==typeof(n=e.getAttribute(r))){try{n="true"===(i=n)||"false"!==i&&("null"===i?null:i===+i+""?+i:K.test(i)?JSON.parse(i):i)}catch(e){}J.set(e,t,n)}else n=void 0;return n}k.extend({hasData:function(e){return J.hasData(e)||Q.hasData(e)},data:function(e,t,n){return J.access(e,t,n)},removeData:function(e,t){J.remove(e,t)},_data:function(e,t,n){return Q.access(e,t,n)},_removeData:function(e,t){Q.remove(e,t)}}),k.fn.extend({data:function(n,e){var t,r,i,o=this[0],a=o&&o.attributes;if(void 0===n){if(this.length&&(i=J.get(o),1===o.nodeType&&!Q.get(o,"hasDataAttrs"))){t=a.length;while(t--)a[t]&&0===(r=a[t].name).indexOf("data-")&&(r=V(r.slice(5)),ee(o,r,i[r]));Q.set(o,"hasDataAttrs",!0)}return i}return"object"==typeof n?this.each(function(){J.set(this,n)}):_(this,function(e){var t;if(o&&void 0===e)return void 0!==(t=J.get(o,n))?t:void 0!==(t=ee(o,n))?t:void 0;this.each(function(){J.set(this,n,e)})},null,e,1<arguments.length,null,!0)},removeData:function(e){return this.each(function(){J.remove(this,e)})}}),k.extend({queue:function(e,t,n){var r;if(e)return t=(t||"fx")+"queue",r=Q.get(e,t),n&&(!r||Array.isArray(n)?r=Q.access(e,t,k.makeArray(n)):r.push(n)),r||[]},dequeue:function(e,t){t=t||"fx";var n=k.queue(e,t),r=n.length,i=n.shift(),o=k._queueHooks(e,t);"inprogress"===i&&(i=n.shift(),r--),i&&("fx"===t&&n.unshift("inprogress"),delete o.stop,i.call(e,function(){k.dequeue(e,t)},o)),!r&&o&&o.empty.fire()},_queueHooks:function(e,t){var n=t+"queueHooks";return Q.get(e,n)||Q.access(e,n,{empty:k.Callbacks("once memory").add(function(){Q.remove(e,[t+"queue",n])})})}}),k.fn.extend({queue:function(t,n){var e=2;return"string"!=typeof t&&(n=t,t="fx",e--),arguments.length<e?k.queue(this[0],t):void 0===n?this:this.each(function(){var e=k.queue(this,t,n);k._queueHooks(this,t),"fx"===t&&"inprogress"!==e[0]&&k.dequeue(this,t)})},dequeue:function(e){return this.each(function(){k.dequeue(this,e)})},clearQueue:function(e){return this.queue(e||"fx",[])},promise:function(e,t){var n,r=1,i=k.Deferred(),o=this,a=this.length,s=function(){--r||i.resolveWith(o,[o])};"string"!=typeof e&&(t=e,e=void 0),e=e||"fx";while(a--)(n=Q.get(o[a],e+"queueHooks"))&&n.empty&&(r++,n.empty.add(s));return s(),i.promise(t)}});var te=/[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,ne=new RegExp("^(?:([+-])=|)("+te+")([a-z%]*)$","i"),re=["Top","Right","Bottom","Left"],ie=E.documentElement,oe=function(e){return k.contains(e.ownerDocument,e)},ae={composed:!0};ie.getRootNode&&(oe=function(e){return k.contains(e.ownerDocument,e)||e.getRootNode(ae)===e.ownerDocument});var se=function(e,t){return"none"===(e=t||e).style.display||""===e.style.display&&oe(e)&&"none"===k.css(e,"display")},ue=function(e,t,n,r){var i,o,a={};for(o in t)a[o]=e.style[o],e.style[o]=t[o];for(o in i=n.apply(e,r||[]),t)e.style[o]=a[o];return i};function le(e,t,n,r){var i,o,a=20,s=r?function(){return r.cur()}:function(){return k.css(e,t,"")},u=s(),l=n&&n[3]||(k.cssNumber[t]?"":"px"),c=e.nodeType&&(k.cssNumber[t]||"px"!==l&&+u)&&ne.exec(k.css(e,t));if(c&&c[3]!==l){u/=2,l=l||c[3],c=+u||1;while(a--)k.style(e,t,c+l),(1-o)*(1-(o=s()/u||.5))<=0&&(a=0),c/=o;c*=2,k.style(e,t,c+l),n=n||[]}return n&&(c=+c||+u||0,i=n[1]?c+(n[1]+1)*n[2]:+n[2],r&&(r.unit=l,r.start=c,r.end=i)),i}var ce={};function fe(e,t){for(var n,r,i,o,a,s,u,l=[],c=0,f=e.length;c<f;c++)(r=e[c]).style&&(n=r.style.display,t?("none"===n&&(l[c]=Q.get(r,"display")||null,l[c]||(r.style.display="")),""===r.style.display&&se(r)&&(l[c]=(u=a=o=void 0,a=(i=r).ownerDocument,s=i.nodeName,(u=ce[s])||(o=a.body.appendChild(a.createElement(s)),u=k.css(o,"display"),o.parentNode.removeChild(o),"none"===u&&(u="block"),ce[s]=u)))):"none"!==n&&(l[c]="none",Q.set(r,"display",n)));for(c=0;c<f;c++)null!=l[c]&&(e[c].style.display=l[c]);return e}k.fn.extend({show:function(){return fe(this,!0)},hide:function(){return fe(this)},toggle:function(e){return"boolean"==typeof e?e?this.show():this.hide():this.each(function(){se(this)?k(this).show():k(this).hide()})}});var pe=/^(?:checkbox|radio)$/i,de=/<([a-z][^\/\0>\x20\t\r\n\f]*)/i,he=/^$|^module$|\/(?:java|ecma)script/i,ge={option:[1,"<select multiple='multiple'>","</select>"],thead:[1,"<table>","</table>"],col:[2,"<table><colgroup>","</colgroup></table>"],tr:[2,"<table><tbody>","</tbody></table>"],td:[3,"<table><tbody><tr>","</tr></tbody></table>"],_default:[0,"",""]};function ve(e,t){var n;return n="undefined"!=typeof e.getElementsByTagName?e.getElementsByTagName(t||"*"):"undefined"!=typeof e.querySelectorAll?e.querySelectorAll(t||"*"):[],void 0===t||t&&A(e,t)?k.merge([e],n):n}function ye(e,t){for(var n=0,r=e.length;n<r;n++)Q.set(e[n],"globalEval",!t||Q.get(t[n],"globalEval"))}ge.optgroup=ge.option,ge.tbody=ge.tfoot=ge.colgroup=ge.caption=ge.thead,ge.th=ge.td;var me,xe,be=/<|&#?\w+;/;function we(e,t,n,r,i){for(var o,a,s,u,l,c,f=t.createDocumentFragment(),p=[],d=0,h=e.length;d<h;d++)if((o=e[d])||0===o)if("object"===w(o))k.merge(p,o.nodeType?[o]:o);else if(be.test(o)){a=a||f.appendChild(t.createElement("div")),s=(de.exec(o)||["",""])[1].toLowerCase(),u=ge[s]||ge._default,a.innerHTML=u[1]+k.htmlPrefilter(o)+u[2],c=u[0];while(c--)a=a.lastChild;k.merge(p,a.childNodes),(a=f.firstChild).textContent=""}else p.push(t.createTextNode(o));f.textContent="",d=0;while(o=p[d++])if(r&&-1<k.inArray(o,r))i&&i.push(o);else if(l=oe(o),a=ve(f.appendChild(o),"script"),l&&ye(a),n){c=0;while(o=a[c++])he.test(o.type||"")&&n.push(o)}return f}me=E.createDocumentFragment().appendChild(E.createElement("div")),(xe=E.createElement("input")).setAttribute("type","radio"),xe.setAttribute("checked","checked"),xe.setAttribute("name","t"),me.appendChild(xe),y.checkClone=me.cloneNode(!0).cloneNode(!0).lastChild.checked,me.innerHTML="<textarea>x</textarea>",y.noCloneChecked=!!me.cloneNode(!0).lastChild.defaultValue;var Te=/^key/,Ce=/^(?:mouse|pointer|contextmenu|drag|drop)|click/,Ee=/^([^.]*)(?:\.(.+)|)/;function ke(){return!0}function Se(){return!1}function Ne(e,t){return e===function(){try{return E.activeElement}catch(e){}}()==("focus"===t)}function Ae(e,t,n,r,i,o){var a,s;if("object"==typeof t){for(s in"string"!=typeof n&&(r=r||n,n=void 0),t)Ae(e,s,n,r,t[s],o);return e}if(null==r&&null==i?(i=n,r=n=void 0):null==i&&("string"==typeof n?(i=r,r=void 0):(i=r,r=n,n=void 0)),!1===i)i=Se;else if(!i)return e;return 1===o&&(a=i,(i=function(e){return k().off(e),a.apply(this,arguments)}).guid=a.guid||(a.guid=k.guid++)),e.each(function(){k.event.add(this,t,i,r,n)})}function De(e,i,o){o?(Q.set(e,i,!1),k.event.add(e,i,{namespace:!1,handler:function(e){var t,n,r=Q.get(this,i);if(1&e.isTrigger&&this[i]){if(r.length)(k.event.special[i]||{}).delegateType&&e.stopPropagation();else if(r=s.call(arguments),Q.set(this,i,r),t=o(this,i),this[i](),r!==(n=Q.get(this,i))||t?Q.set(this,i,!1):n={},r!==n)return e.stopImmediatePropagation(),e.preventDefault(),n.value}else r.length&&(Q.set(this,i,{value:k.event.trigger(k.extend(r[0],k.Event.prototype),r.slice(1),this)}),e.stopImmediatePropagation())}})):void 0===Q.get(e,i)&&k.event.add(e,i,ke)}k.event={global:{},add:function(t,e,n,r,i){var o,a,s,u,l,c,f,p,d,h,g,v=Q.get(t);if(v){n.handler&&(n=(o=n).handler,i=o.selector),i&&k.find.matchesSelector(ie,i),n.guid||(n.guid=k.guid++),(u=v.events)||(u=v.events={}),(a=v.handle)||(a=v.handle=function(e){return"undefined"!=typeof k&&k.event.triggered!==e.type?k.event.dispatch.apply(t,arguments):void 0}),l=(e=(e||"").match(R)||[""]).length;while(l--)d=g=(s=Ee.exec(e[l])||[])[1],h=(s[2]||"").split(".").sort(),d&&(f=k.event.special[d]||{},d=(i?f.delegateType:f.bindType)||d,f=k.event.special[d]||{},c=k.extend({type:d,origType:g,data:r,handler:n,guid:n.guid,selector:i,needsContext:i&&k.expr.match.needsContext.test(i),namespace:h.join(".")},o),(p=u[d])||((p=u[d]=[]).delegateCount=0,f.setup&&!1!==f.setup.call(t,r,h,a)||t.addEventListener&&t.addEventListener(d,a)),f.add&&(f.add.call(t,c),c.handler.guid||(c.handler.guid=n.guid)),i?p.splice(p.delegateCount++,0,c):p.push(c),k.event.global[d]=!0)}},remove:function(e,t,n,r,i){var o,a,s,u,l,c,f,p,d,h,g,v=Q.hasData(e)&&Q.get(e);if(v&&(u=v.events)){l=(t=(t||"").match(R)||[""]).length;while(l--)if(d=g=(s=Ee.exec(t[l])||[])[1],h=(s[2]||"").split(".").sort(),d){f=k.event.special[d]||{},p=u[d=(r?f.delegateType:f.bindType)||d]||[],s=s[2]&&new RegExp("(^|\\.)"+h.join("\\.(?:.*\\.|)")+"(\\.|$)"),a=o=p.length;while(o--)c=p[o],!i&&g!==c.origType||n&&n.guid!==c.guid||s&&!s.test(c.namespace)||r&&r!==c.selector&&("**"!==r||!c.selector)||(p.splice(o,1),c.selector&&p.delegateCount--,f.remove&&f.remove.call(e,c));a&&!p.length&&(f.teardown&&!1!==f.teardown.call(e,h,v.handle)||k.removeEvent(e,d,v.handle),delete u[d])}else for(d in u)k.event.remove(e,d+t[l],n,r,!0);k.isEmptyObject(u)&&Q.remove(e,"handle events")}},dispatch:function(e){var t,n,r,i,o,a,s=k.event.fix(e),u=new Array(arguments.length),l=(Q.get(this,"events")||{})[s.type]||[],c=k.event.special[s.type]||{};for(u[0]=s,t=1;t<arguments.length;t++)u[t]=arguments[t];if(s.delegateTarget=this,!c.preDispatch||!1!==c.preDispatch.call(this,s)){a=k.event.handlers.call(this,s,l),t=0;while((i=a[t++])&&!s.isPropagationStopped()){s.currentTarget=i.elem,n=0;while((o=i.handlers[n++])&&!s.isImmediatePropagationStopped())s.rnamespace&&!1!==o.namespace&&!s.rnamespace.test(o.namespace)||(s.handleObj=o,s.data=o.data,void 0!==(r=((k.event.special[o.origType]||{}).handle||o.handler).apply(i.elem,u))&&!1===(s.result=r)&&(s.preventDefault(),s.stopPropagation()))}return c.postDispatch&&c.postDispatch.call(this,s),s.result}},handlers:function(e,t){var n,r,i,o,a,s=[],u=t.delegateCount,l=e.target;if(u&&l.nodeType&&!("click"===e.type&&1<=e.button))for(;l!==this;l=l.parentNode||this)if(1===l.nodeType&&("click"!==e.type||!0!==l.disabled)){for(o=[],a={},n=0;n<u;n++)void 0===a[i=(r=t[n]).selector+" "]&&(a[i]=r.needsContext?-1<k(i,this).index(l):k.find(i,this,null,[l]).length),a[i]&&o.push(r);o.length&&s.push({elem:l,handlers:o})}return l=this,u<t.length&&s.push({elem:l,handlers:t.slice(u)}),s},addProp:function(t,e){Object.defineProperty(k.Event.prototype,t,{enumerable:!0,configurable:!0,get:m(e)?function(){if(this.originalEvent)return e(this.originalEvent)}:function(){if(this.originalEvent)return this.originalEvent[t]},set:function(e){Object.defineProperty(this,t,{enumerable:!0,configurable:!0,writable:!0,value:e})}})},fix:function(e){return e[k.expando]?e:new k.Event(e)},special:{load:{noBubble:!0},click:{setup:function(e){var t=this||e;return pe.test(t.type)&&t.click&&A(t,"input")&&De(t,"click",ke),!1},trigger:function(e){var t=this||e;return pe.test(t.type)&&t.click&&A(t,"input")&&De(t,"click"),!0},_default:function(e){var t=e.target;return pe.test(t.type)&&t.click&&A(t,"input")&&Q.get(t,"click")||A(t,"a")}},beforeunload:{postDispatch:function(e){void 0!==e.result&&e.originalEvent&&(e.originalEvent.returnValue=e.result)}}}},k.removeEvent=function(e,t,n){e.removeEventListener&&e.removeEventListener(t,n)},k.Event=function(e,t){if(!(this instanceof k.Event))return new k.Event(e,t);e&&e.type?(this.originalEvent=e,this.type=e.type,this.isDefaultPrevented=e.defaultPrevented||void 0===e.defaultPrevented&&!1===e.returnValue?ke:Se,this.target=e.target&&3===e.target.nodeType?e.target.parentNode:e.target,this.currentTarget=e.currentTarget,this.relatedTarget=e.relatedTarget):this.type=e,t&&k.extend(this,t),this.timeStamp=e&&e.timeStamp||Date.now(),this[k.expando]=!0},k.Event.prototype={constructor:k.Event,isDefaultPrevented:Se,isPropagationStopped:Se,isImmediatePropagationStopped:Se,isSimulated:!1,preventDefault:function(){var e=this.originalEvent;this.isDefaultPrevented=ke,e&&!this.isSimulated&&e.preventDefault()},stopPropagation:function(){var e=this.originalEvent;this.isPropagationStopped=ke,e&&!this.isSimulated&&e.stopPropagation()},stopImmediatePropagation:function(){var e=this.originalEvent;this.isImmediatePropagationStopped=ke,e&&!this.isSimulated&&e.stopImmediatePropagation(),this.stopPropagation()}},k.each({altKey:!0,bubbles:!0,cancelable:!0,changedTouches:!0,ctrlKey:!0,detail:!0,eventPhase:!0,metaKey:!0,pageX:!0,pageY:!0,shiftKey:!0,view:!0,"char":!0,code:!0,charCode:!0,key:!0,keyCode:!0,button:!0,buttons:!0,clientX:!0,clientY:!0,offsetX:!0,offsetY:!0,pointerId:!0,pointerType:!0,screenX:!0,screenY:!0,targetTouches:!0,toElement:!0,touches:!0,which:function(e){var t=e.button;return null==e.which&&Te.test(e.type)?null!=e.charCode?e.charCode:e.keyCode:!e.which&&void 0!==t&&Ce.test(e.type)?1&t?1:2&t?3:4&t?2:0:e.which}},k.event.addProp),k.each({focus:"focusin",blur:"focusout"},function(e,t){k.event.special[e]={setup:function(){return De(this,e,Ne),!1},trigger:function(){return De(this,e),!0},delegateType:t}}),k.each({mouseenter:"mouseover",mouseleave:"mouseout",pointerenter:"pointerover",pointerleave:"pointerout"},function(e,i){k.event.special[e]={delegateType:i,bindType:i,handle:function(e){var t,n=e.relatedTarget,r=e.handleObj;return n&&(n===this||k.contains(this,n))||(e.type=r.origType,t=r.handler.apply(this,arguments),e.type=i),t}}}),k.fn.extend({on:function(e,t,n,r){return Ae(this,e,t,n,r)},one:function(e,t,n,r){return Ae(this,e,t,n,r,1)},off:function(e,t,n){var r,i;if(e&&e.preventDefault&&e.handleObj)return r=e.handleObj,k(e.delegateTarget).off(r.namespace?r.origType+"."+r.namespace:r.origType,r.selector,r.handler),this;if("object"==typeof e){for(i in e)this.off(i,t,e[i]);return this}return!1!==t&&"function"!=typeof t||(n=t,t=void 0),!1===n&&(n=Se),this.each(function(){k.event.remove(this,e,n,t)})}});var je=/<(?!area|br|col|embed|hr|img|input|link|meta|param)(([a-z][^\/\0>\x20\t\r\n\f]*)[^>]*)\/>/gi,qe=/<script|<style|<link/i,Le=/checked\s*(?:[^=]|=\s*.checked.)/i,He=/^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g;function Oe(e,t){return A(e,"table")&&A(11!==t.nodeType?t:t.firstChild,"tr")&&k(e).children("tbody")[0]||e}function Pe(e){return e.type=(null!==e.getAttribute("type"))+"/"+e.type,e}function Re(e){return"true/"===(e.type||"").slice(0,5)?e.type=e.type.slice(5):e.removeAttribute("type"),e}function Me(e,t){var n,r,i,o,a,s,u,l;if(1===t.nodeType){if(Q.hasData(e)&&(o=Q.access(e),a=Q.set(t,o),l=o.events))for(i in delete a.handle,a.events={},l)for(n=0,r=l[i].length;n<r;n++)k.event.add(t,i,l[i][n]);J.hasData(e)&&(s=J.access(e),u=k.extend({},s),J.set(t,u))}}function Ie(n,r,i,o){r=g.apply([],r);var e,t,a,s,u,l,c=0,f=n.length,p=f-1,d=r[0],h=m(d);if(h||1<f&&"string"==typeof d&&!y.checkClone&&Le.test(d))return n.each(function(e){var t=n.eq(e);h&&(r[0]=d.call(this,e,t.html())),Ie(t,r,i,o)});if(f&&(t=(e=we(r,n[0].ownerDocument,!1,n,o)).firstChild,1===e.childNodes.length&&(e=t),t||o)){for(s=(a=k.map(ve(e,"script"),Pe)).length;c<f;c++)u=e,c!==p&&(u=k.clone(u,!0,!0),s&&k.merge(a,ve(u,"script"))),i.call(n[c],u,c);if(s)for(l=a[a.length-1].ownerDocument,k.map(a,Re),c=0;c<s;c++)u=a[c],he.test(u.type||"")&&!Q.access(u,"globalEval")&&k.contains(l,u)&&(u.src&&"module"!==(u.type||"").toLowerCase()?k._evalUrl&&!u.noModule&&k._evalUrl(u.src,{nonce:u.nonce||u.getAttribute("nonce")}):b(u.textContent.replace(He,""),u,l))}return n}function We(e,t,n){for(var r,i=t?k.filter(t,e):e,o=0;null!=(r=i[o]);o++)n||1!==r.nodeType||k.cleanData(ve(r)),r.parentNode&&(n&&oe(r)&&ye(ve(r,"script")),r.parentNode.removeChild(r));return e}k.extend({htmlPrefilter:function(e){return e.replace(je,"<$1></$2>")},clone:function(e,t,n){var r,i,o,a,s,u,l,c=e.cloneNode(!0),f=oe(e);if(!(y.noCloneChecked||1!==e.nodeType&&11!==e.nodeType||k.isXMLDoc(e)))for(a=ve(c),r=0,i=(o=ve(e)).length;r<i;r++)s=o[r],u=a[r],void 0,"input"===(l=u.nodeName.toLowerCase())&&pe.test(s.type)?u.checked=s.checked:"input"!==l&&"textarea"!==l||(u.defaultValue=s.defaultValue);if(t)if(n)for(o=o||ve(e),a=a||ve(c),r=0,i=o.length;r<i;r++)Me(o[r],a[r]);else Me(e,c);return 0<(a=ve(c,"script")).length&&ye(a,!f&&ve(e,"script")),c},cleanData:function(e){for(var t,n,r,i=k.event.special,o=0;void 0!==(n=e[o]);o++)if(G(n)){if(t=n[Q.expando]){if(t.events)for(r in t.events)i[r]?k.event.remove(n,r):k.removeEvent(n,r,t.handle);n[Q.expando]=void 0}n[J.expando]&&(n[J.expando]=void 0)}}}),k.fn.extend({detach:function(e){return We(this,e,!0)},remove:function(e){return We(this,e)},text:function(e){return _(this,function(e){return void 0===e?k.text(this):this.empty().each(function(){1!==this.nodeType&&11!==this.nodeType&&9!==this.nodeType||(this.textContent=e)})},null,e,arguments.length)},append:function(){return Ie(this,arguments,function(e){1!==this.nodeType&&11!==this.nodeType&&9!==this.nodeType||Oe(this,e).appendChild(e)})},prepend:function(){return Ie(this,arguments,function(e){if(1===this.nodeType||11===this.nodeType||9===this.nodeType){var t=Oe(this,e);t.insertBefore(e,t.firstChild)}})},before:function(){return Ie(this,arguments,function(e){this.parentNode&&this.parentNode.insertBefore(e,this)})},after:function(){return Ie(this,arguments,function(e){this.parentNode&&this.parentNode.insertBefore(e,this.nextSibling)})},empty:function(){for(var e,t=0;null!=(e=this[t]);t++)1===e.nodeType&&(k.cleanData(ve(e,!1)),e.textContent="");return this},clone:function(e,t){return e=null!=e&&e,t=null==t?e:t,this.map(function(){return k.clone(this,e,t)})},html:function(e){return _(this,function(e){var t=this[0]||{},n=0,r=this.length;if(void 0===e&&1===t.nodeType)return t.innerHTML;if("string"==typeof e&&!qe.test(e)&&!ge[(de.exec(e)||["",""])[1].toLowerCase()]){e=k.htmlPrefilter(e);try{for(;n<r;n++)1===(t=this[n]||{}).nodeType&&(k.cleanData(ve(t,!1)),t.innerHTML=e);t=0}catch(e){}}t&&this.empty().append(e)},null,e,arguments.length)},replaceWith:function(){var n=[];return Ie(this,arguments,function(e){var t=this.parentNode;k.inArray(this,n)<0&&(k.cleanData(ve(this)),t&&t.replaceChild(e,this))},n)}}),k.each({appendTo:"append",prependTo:"prepend",insertBefore:"before",insertAfter:"after",replaceAll:"replaceWith"},function(e,a){k.fn[e]=function(e){for(var t,n=[],r=k(e),i=r.length-1,o=0;o<=i;o++)t=o===i?this:this.clone(!0),k(r[o])[a](t),u.apply(n,t.get());return this.pushStack(n)}});var $e=new RegExp("^("+te+")(?!px)[a-z%]+$","i"),Fe=function(e){var t=e.ownerDocument.defaultView;return t&&t.opener||(t=C),t.getComputedStyle(e)},Be=new RegExp(re.join("|"),"i");function _e(e,t,n){var r,i,o,a,s=e.style;return(n=n||Fe(e))&&(""!==(a=n.getPropertyValue(t)||n[t])||oe(e)||(a=k.style(e,t)),!y.pixelBoxStyles()&&$e.test(a)&&Be.test(t)&&(r=s.width,i=s.minWidth,o=s.maxWidth,s.minWidth=s.maxWidth=s.width=a,a=n.width,s.width=r,s.minWidth=i,s.maxWidth=o)),void 0!==a?a+"":a}function ze(e,t){return{get:function(){if(!e())return(this.get=t).apply(this,arguments);delete this.get}}}!function(){function e(){if(u){s.style.cssText="position:absolute;left:-11111px;width:60px;margin-top:1px;padding:0;border:0",u.style.cssText="position:relative;display:block;box-sizing:border-box;overflow:scroll;margin:auto;border:1px;padding:1px;width:60%;top:1%",ie.appendChild(s).appendChild(u);var e=C.getComputedStyle(u);n="1%"!==e.top,a=12===t(e.marginLeft),u.style.right="60%",o=36===t(e.right),r=36===t(e.width),u.style.position="absolute",i=12===t(u.offsetWidth/3),ie.removeChild(s),u=null}}function t(e){return Math.round(parseFloat(e))}var n,r,i,o,a,s=E.createElement("div"),u=E.createElement("div");u.style&&(u.style.backgroundClip="content-box",u.cloneNode(!0).style.backgroundClip="",y.clearCloneStyle="content-box"===u.style.backgroundClip,k.extend(y,{boxSizingReliable:function(){return e(),r},pixelBoxStyles:function(){return e(),o},pixelPosition:function(){return e(),n},reliableMarginLeft:function(){return e(),a},scrollboxSize:function(){return e(),i}}))}();var Ue=["Webkit","Moz","ms"],Xe=E.createElement("div").style,Ve={};function Ge(e){var t=k.cssProps[e]||Ve[e];return t||(e in Xe?e:Ve[e]=function(e){var t=e[0].toUpperCase()+e.slice(1),n=Ue.length;while(n--)if((e=Ue[n]+t)in Xe)return e}(e)||e)}var Ye=/^(none|table(?!-c[ea]).+)/,Qe=/^--/,Je={position:"absolute",visibility:"hidden",display:"block"},Ke={letterSpacing:"0",fontWeight:"400"};function Ze(e,t,n){var r=ne.exec(t);return r?Math.max(0,r[2]-(n||0))+(r[3]||"px"):t}function et(e,t,n,r,i,o){var a="width"===t?1:0,s=0,u=0;if(n===(r?"border":"content"))return 0;for(;a<4;a+=2)"margin"===n&&(u+=k.css(e,n+re[a],!0,i)),r?("content"===n&&(u-=k.css(e,"padding"+re[a],!0,i)),"margin"!==n&&(u-=k.css(e,"border"+re[a]+"Width",!0,i))):(u+=k.css(e,"padding"+re[a],!0,i),"padding"!==n?u+=k.css(e,"border"+re[a]+"Width",!0,i):s+=k.css(e,"border"+re[a]+"Width",!0,i));return!r&&0<=o&&(u+=Math.max(0,Math.ceil(e["offset"+t[0].toUpperCase()+t.slice(1)]-o-u-s-.5))||0),u}function tt(e,t,n){var r=Fe(e),i=(!y.boxSizingReliable()||n)&&"border-box"===k.css(e,"boxSizing",!1,r),o=i,a=_e(e,t,r),s="offset"+t[0].toUpperCase()+t.slice(1);if($e.test(a)){if(!n)return a;a="auto"}return(!y.boxSizingReliable()&&i||"auto"===a||!parseFloat(a)&&"inline"===k.css(e,"display",!1,r))&&e.getClientRects().length&&(i="border-box"===k.css(e,"boxSizing",!1,r),(o=s in e)&&(a=e[s])),(a=parseFloat(a)||0)+et(e,t,n||(i?"border":"content"),o,r,a)+"px"}function nt(e,t,n,r,i){return new nt.prototype.init(e,t,n,r,i)}k.extend({cssHooks:{opacity:{get:function(e,t){if(t){var n=_e(e,"opacity");return""===n?"1":n}}}},cssNumber:{animationIterationCount:!0,columnCount:!0,fillOpacity:!0,flexGrow:!0,flexShrink:!0,fontWeight:!0,gridArea:!0,gridColumn:!0,gridColumnEnd:!0,gridColumnStart:!0,gridRow:!0,gridRowEnd:!0,gridRowStart:!0,lineHeight:!0,opacity:!0,order:!0,orphans:!0,widows:!0,zIndex:!0,zoom:!0},cssProps:{},style:function(e,t,n,r){if(e&&3!==e.nodeType&&8!==e.nodeType&&e.style){var i,o,a,s=V(t),u=Qe.test(t),l=e.style;if(u||(t=Ge(s)),a=k.cssHooks[t]||k.cssHooks[s],void 0===n)return a&&"get"in a&&void 0!==(i=a.get(e,!1,r))?i:l[t];"string"===(o=typeof n)&&(i=ne.exec(n))&&i[1]&&(n=le(e,t,i),o="number"),null!=n&&n==n&&("number"!==o||u||(n+=i&&i[3]||(k.cssNumber[s]?"":"px")),y.clearCloneStyle||""!==n||0!==t.indexOf("background")||(l[t]="inherit"),a&&"set"in a&&void 0===(n=a.set(e,n,r))||(u?l.setProperty(t,n):l[t]=n))}},css:function(e,t,n,r){var i,o,a,s=V(t);return Qe.test(t)||(t=Ge(s)),(a=k.cssHooks[t]||k.cssHooks[s])&&"get"in a&&(i=a.get(e,!0,n)),void 0===i&&(i=_e(e,t,r)),"normal"===i&&t in Ke&&(i=Ke[t]),""===n||n?(o=parseFloat(i),!0===n||isFinite(o)?o||0:i):i}}),k.each(["height","width"],function(e,u){k.cssHooks[u]={get:function(e,t,n){if(t)return!Ye.test(k.css(e,"display"))||e.getClientRects().length&&e.getBoundingClientRect().width?tt(e,u,n):ue(e,Je,function(){return tt(e,u,n)})},set:function(e,t,n){var r,i=Fe(e),o=!y.scrollboxSize()&&"absolute"===i.position,a=(o||n)&&"border-box"===k.css(e,"boxSizing",!1,i),s=n?et(e,u,n,a,i):0;return a&&o&&(s-=Math.ceil(e["offset"+u[0].toUpperCase()+u.slice(1)]-parseFloat(i[u])-et(e,u,"border",!1,i)-.5)),s&&(r=ne.exec(t))&&"px"!==(r[3]||"px")&&(e.style[u]=t,t=k.css(e,u)),Ze(0,t,s)}}}),k.cssHooks.marginLeft=ze(y.reliableMarginLeft,function(e,t){if(t)return(parseFloat(_e(e,"marginLeft"))||e.getBoundingClientRect().left-ue(e,{marginLeft:0},function(){return e.getBoundingClientRect().left}))+"px"}),k.each({margin:"",padding:"",border:"Width"},function(i,o){k.cssHooks[i+o]={expand:function(e){for(var t=0,n={},r="string"==typeof e?e.split(" "):[e];t<4;t++)n[i+re[t]+o]=r[t]||r[t-2]||r[0];return n}},"margin"!==i&&(k.cssHooks[i+o].set=Ze)}),k.fn.extend({css:function(e,t){return _(this,function(e,t,n){var r,i,o={},a=0;if(Array.isArray(t)){for(r=Fe(e),i=t.length;a<i;a++)o[t[a]]=k.css(e,t[a],!1,r);return o}return void 0!==n?k.style(e,t,n):k.css(e,t)},e,t,1<arguments.length)}}),((k.Tween=nt).prototype={constructor:nt,init:function(e,t,n,r,i,o){this.elem=e,this.prop=n,this.easing=i||k.easing._default,this.options=t,this.start=this.now=this.cur(),this.end=r,this.unit=o||(k.cssNumber[n]?"":"px")},cur:function(){var e=nt.propHooks[this.prop];return e&&e.get?e.get(this):nt.propHooks._default.get(this)},run:function(e){var t,n=nt.propHooks[this.prop];return this.options.duration?this.pos=t=k.easing[this.easing](e,this.options.duration*e,0,1,this.options.duration):this.pos=t=e,this.now=(this.end-this.start)*t+this.start,this.options.step&&this.options.step.call(this.elem,this.now,this),n&&n.set?n.set(this):nt.propHooks._default.set(this),this}}).init.prototype=nt.prototype,(nt.propHooks={_default:{get:function(e){var t;return 1!==e.elem.nodeType||null!=e.elem[e.prop]&&null==e.elem.style[e.prop]?e.elem[e.prop]:(t=k.css(e.elem,e.prop,""))&&"auto"!==t?t:0},set:function(e){k.fx.step[e.prop]?k.fx.step[e.prop](e):1!==e.elem.nodeType||!k.cssHooks[e.prop]&&null==e.elem.style[Ge(e.prop)]?e.elem[e.prop]=e.now:k.style(e.elem,e.prop,e.now+e.unit)}}}).scrollTop=nt.propHooks.scrollLeft={set:function(e){e.elem.nodeType&&e.elem.parentNode&&(e.elem[e.prop]=e.now)}},k.easing={linear:function(e){return e},swing:function(e){return.5-Math.cos(e*Math.PI)/2},_default:"swing"},k.fx=nt.prototype.init,k.fx.step={};var rt,it,ot,at,st=/^(?:toggle|show|hide)$/,ut=/queueHooks$/;function lt(){it&&(!1===E.hidden&&C.requestAnimationFrame?C.requestAnimationFrame(lt):C.setTimeout(lt,k.fx.interval),k.fx.tick())}function ct(){return C.setTimeout(function(){rt=void 0}),rt=Date.now()}function ft(e,t){var n,r=0,i={height:e};for(t=t?1:0;r<4;r+=2-t)i["margin"+(n=re[r])]=i["padding"+n]=e;return t&&(i.opacity=i.width=e),i}function pt(e,t,n){for(var r,i=(dt.tweeners[t]||[]).concat(dt.tweeners["*"]),o=0,a=i.length;o<a;o++)if(r=i[o].call(n,t,e))return r}function dt(o,e,t){var n,a,r=0,i=dt.prefilters.length,s=k.Deferred().always(function(){delete u.elem}),u=function(){if(a)return!1;for(var e=rt||ct(),t=Math.max(0,l.startTime+l.duration-e),n=1-(t/l.duration||0),r=0,i=l.tweens.length;r<i;r++)l.tweens[r].run(n);return s.notifyWith(o,[l,n,t]),n<1&&i?t:(i||s.notifyWith(o,[l,1,0]),s.resolveWith(o,[l]),!1)},l=s.promise({elem:o,props:k.extend({},e),opts:k.extend(!0,{specialEasing:{},easing:k.easing._default},t),originalProperties:e,originalOptions:t,startTime:rt||ct(),duration:t.duration,tweens:[],createTween:function(e,t){var n=k.Tween(o,l.opts,e,t,l.opts.specialEasing[e]||l.opts.easing);return l.tweens.push(n),n},stop:function(e){var t=0,n=e?l.tweens.length:0;if(a)return this;for(a=!0;t<n;t++)l.tweens[t].run(1);return e?(s.notifyWith(o,[l,1,0]),s.resolveWith(o,[l,e])):s.rejectWith(o,[l,e]),this}}),c=l.props;for(!function(e,t){var n,r,i,o,a;for(n in e)if(i=t[r=V(n)],o=e[n],Array.isArray(o)&&(i=o[1],o=e[n]=o[0]),n!==r&&(e[r]=o,delete e[n]),(a=k.cssHooks[r])&&"expand"in a)for(n in o=a.expand(o),delete e[r],o)n in e||(e[n]=o[n],t[n]=i);else t[r]=i}(c,l.opts.specialEasing);r<i;r++)if(n=dt.prefilters[r].call(l,o,c,l.opts))return m(n.stop)&&(k._queueHooks(l.elem,l.opts.queue).stop=n.stop.bind(n)),n;return k.map(c,pt,l),m(l.opts.start)&&l.opts.start.call(o,l),l.progress(l.opts.progress).done(l.opts.done,l.opts.complete).fail(l.opts.fail).always(l.opts.always),k.fx.timer(k.extend(u,{elem:o,anim:l,queue:l.opts.queue})),l}k.Animation=k.extend(dt,{tweeners:{"*":[function(e,t){var n=this.createTween(e,t);return le(n.elem,e,ne.exec(t),n),n}]},tweener:function(e,t){m(e)?(t=e,e=["*"]):e=e.match(R);for(var n,r=0,i=e.length;r<i;r++)n=e[r],dt.tweeners[n]=dt.tweeners[n]||[],dt.tweeners[n].unshift(t)},prefilters:[function(e,t,n){var r,i,o,a,s,u,l,c,f="width"in t||"height"in t,p=this,d={},h=e.style,g=e.nodeType&&se(e),v=Q.get(e,"fxshow");for(r in n.queue||(null==(a=k._queueHooks(e,"fx")).unqueued&&(a.unqueued=0,s=a.empty.fire,a.empty.fire=function(){a.unqueued||s()}),a.unqueued++,p.always(function(){p.always(function(){a.unqueued--,k.queue(e,"fx").length||a.empty.fire()})})),t)if(i=t[r],st.test(i)){if(delete t[r],o=o||"toggle"===i,i===(g?"hide":"show")){if("show"!==i||!v||void 0===v[r])continue;g=!0}d[r]=v&&v[r]||k.style(e,r)}if((u=!k.isEmptyObject(t))||!k.isEmptyObject(d))for(r in f&&1===e.nodeType&&(n.overflow=[h.overflow,h.overflowX,h.overflowY],null==(l=v&&v.display)&&(l=Q.get(e,"display")),"none"===(c=k.css(e,"display"))&&(l?c=l:(fe([e],!0),l=e.style.display||l,c=k.css(e,"display"),fe([e]))),("inline"===c||"inline-block"===c&&null!=l)&&"none"===k.css(e,"float")&&(u||(p.done(function(){h.display=l}),null==l&&(c=h.display,l="none"===c?"":c)),h.display="inline-block")),n.overflow&&(h.overflow="hidden",p.always(function(){h.overflow=n.overflow[0],h.overflowX=n.overflow[1],h.overflowY=n.overflow[2]})),u=!1,d)u||(v?"hidden"in v&&(g=v.hidden):v=Q.access(e,"fxshow",{display:l}),o&&(v.hidden=!g),g&&fe([e],!0),p.done(function(){for(r in g||fe([e]),Q.remove(e,"fxshow"),d)k.style(e,r,d[r])})),u=pt(g?v[r]:0,r,p),r in v||(v[r]=u.start,g&&(u.end=u.start,u.start=0))}],prefilter:function(e,t){t?dt.prefilters.unshift(e):dt.prefilters.push(e)}}),k.speed=function(e,t,n){var r=e&&"object"==typeof e?k.extend({},e):{complete:n||!n&&t||m(e)&&e,duration:e,easing:n&&t||t&&!m(t)&&t};return k.fx.off?r.duration=0:"number"!=typeof r.duration&&(r.duration in k.fx.speeds?r.duration=k.fx.speeds[r.duration]:r.duration=k.fx.speeds._default),null!=r.queue&&!0!==r.queue||(r.queue="fx"),r.old=r.complete,r.complete=function(){m(r.old)&&r.old.call(this),r.queue&&k.dequeue(this,r.queue)},r},k.fn.extend({fadeTo:function(e,t,n,r){return this.filter(se).css("opacity",0).show().end().animate({opacity:t},e,n,r)},animate:function(t,e,n,r){var i=k.isEmptyObject(t),o=k.speed(e,n,r),a=function(){var e=dt(this,k.extend({},t),o);(i||Q.get(this,"finish"))&&e.stop(!0)};return a.finish=a,i||!1===o.queue?this.each(a):this.queue(o.queue,a)},stop:function(i,e,o){var a=function(e){var t=e.stop;delete e.stop,t(o)};return"string"!=typeof i&&(o=e,e=i,i=void 0),e&&!1!==i&&this.queue(i||"fx",[]),this.each(function(){var e=!0,t=null!=i&&i+"queueHooks",n=k.timers,r=Q.get(this);if(t)r[t]&&r[t].stop&&a(r[t]);else for(t in r)r[t]&&r[t].stop&&ut.test(t)&&a(r[t]);for(t=n.length;t--;)n[t].elem!==this||null!=i&&n[t].queue!==i||(n[t].anim.stop(o),e=!1,n.splice(t,1));!e&&o||k.dequeue(this,i)})},finish:function(a){return!1!==a&&(a=a||"fx"),this.each(function(){var e,t=Q.get(this),n=t[a+"queue"],r=t[a+"queueHooks"],i=k.timers,o=n?n.length:0;for(t.finish=!0,k.queue(this,a,[]),r&&r.stop&&r.stop.call(this,!0),e=i.length;e--;)i[e].elem===this&&i[e].queue===a&&(i[e].anim.stop(!0),i.splice(e,1));for(e=0;e<o;e++)n[e]&&n[e].finish&&n[e].finish.call(this);delete t.finish})}}),k.each(["toggle","show","hide"],function(e,r){var i=k.fn[r];k.fn[r]=function(e,t,n){return null==e||"boolean"==typeof e?i.apply(this,arguments):this.animate(ft(r,!0),e,t,n)}}),k.each({slideDown:ft("show"),slideUp:ft("hide"),slideToggle:ft("toggle"),fadeIn:{opacity:"show"},fadeOut:{opacity:"hide"},fadeToggle:{opacity:"toggle"}},function(e,r){k.fn[e]=function(e,t,n){return this.animate(r,e,t,n)}}),k.timers=[],k.fx.tick=function(){var e,t=0,n=k.timers;for(rt=Date.now();t<n.length;t++)(e=n[t])()||n[t]!==e||n.splice(t--,1);n.length||k.fx.stop(),rt=void 0},k.fx.timer=function(e){k.timers.push(e),k.fx.start()},k.fx.interval=13,k.fx.start=function(){it||(it=!0,lt())},k.fx.stop=function(){it=null},k.fx.speeds={slow:600,fast:200,_default:400},k.fn.delay=function(r,e){return r=k.fx&&k.fx.speeds[r]||r,e=e||"fx",this.queue(e,function(e,t){var n=C.setTimeout(e,r);t.stop=function(){C.clearTimeout(n)}})},ot=E.createElement("input"),at=E.createElement("select").appendChild(E.createElement("option")),ot.type="checkbox",y.checkOn=""!==ot.value,y.optSelected=at.selected,(ot=E.createElement("input")).value="t",ot.type="radio",y.radioValue="t"===ot.value;var ht,gt=k.expr.attrHandle;k.fn.extend({attr:function(e,t){return _(this,k.attr,e,t,1<arguments.length)},removeAttr:function(e){return this.each(function(){k.removeAttr(this,e)})}}),k.extend({attr:function(e,t,n){var r,i,o=e.nodeType;if(3!==o&&8!==o&&2!==o)return"undefined"==typeof e.getAttribute?k.prop(e,t,n):(1===o&&k.isXMLDoc(e)||(i=k.attrHooks[t.toLowerCase()]||(k.expr.match.bool.test(t)?ht:void 0)),void 0!==n?null===n?void k.removeAttr(e,t):i&&"set"in i&&void 0!==(r=i.set(e,n,t))?r:(e.setAttribute(t,n+""),n):i&&"get"in i&&null!==(r=i.get(e,t))?r:null==(r=k.find.attr(e,t))?void 0:r)},attrHooks:{type:{set:function(e,t){if(!y.radioValue&&"radio"===t&&A(e,"input")){var n=e.value;return e.setAttribute("type",t),n&&(e.value=n),t}}}},removeAttr:function(e,t){var n,r=0,i=t&&t.match(R);if(i&&1===e.nodeType)while(n=i[r++])e.removeAttribute(n)}}),ht={set:function(e,t,n){return!1===t?k.removeAttr(e,n):e.setAttribute(n,n),n}},k.each(k.expr.match.bool.source.match(/\w+/g),function(e,t){var a=gt[t]||k.find.attr;gt[t]=function(e,t,n){var r,i,o=t.toLowerCase();return n||(i=gt[o],gt[o]=r,r=null!=a(e,t,n)?o:null,gt[o]=i),r}});var vt=/^(?:input|select|textarea|button)$/i,yt=/^(?:a|area)$/i;function mt(e){return(e.match(R)||[]).join(" ")}function xt(e){return e.getAttribute&&e.getAttribute("class")||""}function bt(e){return Array.isArray(e)?e:"string"==typeof e&&e.match(R)||[]}k.fn.extend({prop:function(e,t){return _(this,k.prop,e,t,1<arguments.length)},removeProp:function(e){return this.each(function(){delete this[k.propFix[e]||e]})}}),k.extend({prop:function(e,t,n){var r,i,o=e.nodeType;if(3!==o&&8!==o&&2!==o)return 1===o&&k.isXMLDoc(e)||(t=k.propFix[t]||t,i=k.propHooks[t]),void 0!==n?i&&"set"in i&&void 0!==(r=i.set(e,n,t))?r:e[t]=n:i&&"get"in i&&null!==(r=i.get(e,t))?r:e[t]},propHooks:{tabIndex:{get:function(e){var t=k.find.attr(e,"tabindex");return t?parseInt(t,10):vt.test(e.nodeName)||yt.test(e.nodeName)&&e.href?0:-1}}},propFix:{"for":"htmlFor","class":"className"}}),y.optSelected||(k.propHooks.selected={get:function(e){var t=e.parentNode;return t&&t.parentNode&&t.parentNode.selectedIndex,null},set:function(e){var t=e.parentNode;t&&(t.selectedIndex,t.parentNode&&t.parentNode.selectedIndex)}}),k.each(["tabIndex","readOnly","maxLength","cellSpacing","cellPadding","rowSpan","colSpan","useMap","frameBorder","contentEditable"],function(){k.propFix[this.toLowerCase()]=this}),k.fn.extend({addClass:function(t){var e,n,r,i,o,a,s,u=0;if(m(t))return this.each(function(e){k(this).addClass(t.call(this,e,xt(this)))});if((e=bt(t)).length)while(n=this[u++])if(i=xt(n),r=1===n.nodeType&&" "+mt(i)+" "){a=0;while(o=e[a++])r.indexOf(" "+o+" ")<0&&(r+=o+" ");i!==(s=mt(r))&&n.setAttribute("class",s)}return this},removeClass:function(t){var e,n,r,i,o,a,s,u=0;if(m(t))return this.each(function(e){k(this).removeClass(t.call(this,e,xt(this)))});if(!arguments.length)return this.attr("class","");if((e=bt(t)).length)while(n=this[u++])if(i=xt(n),r=1===n.nodeType&&" "+mt(i)+" "){a=0;while(o=e[a++])while(-1<r.indexOf(" "+o+" "))r=r.replace(" "+o+" "," ");i!==(s=mt(r))&&n.setAttribute("class",s)}return this},toggleClass:function(i,t){var o=typeof i,a="string"===o||Array.isArray(i);return"boolean"==typeof t&&a?t?this.addClass(i):this.removeClass(i):m(i)?this.each(function(e){k(this).toggleClass(i.call(this,e,xt(this),t),t)}):this.each(function(){var e,t,n,r;if(a){t=0,n=k(this),r=bt(i);while(e=r[t++])n.hasClass(e)?n.removeClass(e):n.addClass(e)}else void 0!==i&&"boolean"!==o||((e=xt(this))&&Q.set(this,"__className__",e),this.setAttribute&&this.setAttribute("class",e||!1===i?"":Q.get(this,"__className__")||""))})},hasClass:function(e){var t,n,r=0;t=" "+e+" ";while(n=this[r++])if(1===n.nodeType&&-1<(" "+mt(xt(n))+" ").indexOf(t))return!0;return!1}});var wt=/\r/g;k.fn.extend({val:function(n){var r,e,i,t=this[0];return arguments.length?(i=m(n),this.each(function(e){var t;1===this.nodeType&&(null==(t=i?n.call(this,e,k(this).val()):n)?t="":"number"==typeof t?t+="":Array.isArray(t)&&(t=k.map(t,function(e){return null==e?"":e+""})),(r=k.valHooks[this.type]||k.valHooks[this.nodeName.toLowerCase()])&&"set"in r&&void 0!==r.set(this,t,"value")||(this.value=t))})):t?(r=k.valHooks[t.type]||k.valHooks[t.nodeName.toLowerCase()])&&"get"in r&&void 0!==(e=r.get(t,"value"))?e:"string"==typeof(e=t.value)?e.replace(wt,""):null==e?"":e:void 0}}),k.extend({valHooks:{option:{get:function(e){var t=k.find.attr(e,"value");return null!=t?t:mt(k.text(e))}},select:{get:function(e){var t,n,r,i=e.options,o=e.selectedIndex,a="select-one"===e.type,s=a?null:[],u=a?o+1:i.length;for(r=o<0?u:a?o:0;r<u;r++)if(((n=i[r]).selected||r===o)&&!n.disabled&&(!n.parentNode.disabled||!A(n.parentNode,"optgroup"))){if(t=k(n).val(),a)return t;s.push(t)}return s},set:function(e,t){var n,r,i=e.options,o=k.makeArray(t),a=i.length;while(a--)((r=i[a]).selected=-1<k.inArray(k.valHooks.option.get(r),o))&&(n=!0);return n||(e.selectedIndex=-1),o}}}}),k.each(["radio","checkbox"],function(){k.valHooks[this]={set:function(e,t){if(Array.isArray(t))return e.checked=-1<k.inArray(k(e).val(),t)}},y.checkOn||(k.valHooks[this].get=function(e){return null===e.getAttribute("value")?"on":e.value})}),y.focusin="onfocusin"in C;var Tt=/^(?:focusinfocus|focusoutblur)$/,Ct=function(e){e.stopPropagation()};k.extend(k.event,{trigger:function(e,t,n,r){var i,o,a,s,u,l,c,f,p=[n||E],d=v.call(e,"type")?e.type:e,h=v.call(e,"namespace")?e.namespace.split("."):[];if(o=f=a=n=n||E,3!==n.nodeType&&8!==n.nodeType&&!Tt.test(d+k.event.triggered)&&(-1<d.indexOf(".")&&(d=(h=d.split(".")).shift(),h.sort()),u=d.indexOf(":")<0&&"on"+d,(e=e[k.expando]?e:new k.Event(d,"object"==typeof e&&e)).isTrigger=r?2:3,e.namespace=h.join("."),e.rnamespace=e.namespace?new RegExp("(^|\\.)"+h.join("\\.(?:.*\\.|)")+"(\\.|$)"):null,e.result=void 0,e.target||(e.target=n),t=null==t?[e]:k.makeArray(t,[e]),c=k.event.special[d]||{},r||!c.trigger||!1!==c.trigger.apply(n,t))){if(!r&&!c.noBubble&&!x(n)){for(s=c.delegateType||d,Tt.test(s+d)||(o=o.parentNode);o;o=o.parentNode)p.push(o),a=o;a===(n.ownerDocument||E)&&p.push(a.defaultView||a.parentWindow||C)}i=0;while((o=p[i++])&&!e.isPropagationStopped())f=o,e.type=1<i?s:c.bindType||d,(l=(Q.get(o,"events")||{})[e.type]&&Q.get(o,"handle"))&&l.apply(o,t),(l=u&&o[u])&&l.apply&&G(o)&&(e.result=l.apply(o,t),!1===e.result&&e.preventDefault());return e.type=d,r||e.isDefaultPrevented()||c._default&&!1!==c._default.apply(p.pop(),t)||!G(n)||u&&m(n[d])&&!x(n)&&((a=n[u])&&(n[u]=null),k.event.triggered=d,e.isPropagationStopped()&&f.addEventListener(d,Ct),n[d](),e.isPropagationStopped()&&f.removeEventListener(d,Ct),k.event.triggered=void 0,a&&(n[u]=a)),e.result}},simulate:function(e,t,n){var r=k.extend(new k.Event,n,{type:e,isSimulated:!0});k.event.trigger(r,null,t)}}),k.fn.extend({trigger:function(e,t){return this.each(function(){k.event.trigger(e,t,this)})},triggerHandler:function(e,t){var n=this[0];if(n)return k.event.trigger(e,t,n,!0)}}),y.focusin||k.each({focus:"focusin",blur:"focusout"},function(n,r){var i=function(e){k.event.simulate(r,e.target,k.event.fix(e))};k.event.special[r]={setup:function(){var e=this.ownerDocument||this,t=Q.access(e,r);t||e.addEventListener(n,i,!0),Q.access(e,r,(t||0)+1)},teardown:function(){var e=this.ownerDocument||this,t=Q.access(e,r)-1;t?Q.access(e,r,t):(e.removeEventListener(n,i,!0),Q.remove(e,r))}}});var Et=C.location,kt=Date.now(),St=/\?/;k.parseXML=function(e){var t;if(!e||"string"!=typeof e)return null;try{t=(new C.DOMParser).parseFromString(e,"text/xml")}catch(e){t=void 0}return t&&!t.getElementsByTagName("parsererror").length||k.error("Invalid XML: "+e),t};var Nt=/\[\]$/,At=/\r?\n/g,Dt=/^(?:submit|button|image|reset|file)$/i,jt=/^(?:input|select|textarea|keygen)/i;function qt(n,e,r,i){var t;if(Array.isArray(e))k.each(e,function(e,t){r||Nt.test(n)?i(n,t):qt(n+"["+("object"==typeof t&&null!=t?e:"")+"]",t,r,i)});else if(r||"object"!==w(e))i(n,e);else for(t in e)qt(n+"["+t+"]",e[t],r,i)}k.param=function(e,t){var n,r=[],i=function(e,t){var n=m(t)?t():t;r[r.length]=encodeURIComponent(e)+"="+encodeURIComponent(null==n?"":n)};if(null==e)return"";if(Array.isArray(e)||e.jquery&&!k.isPlainObject(e))k.each(e,function(){i(this.name,this.value)});else for(n in e)qt(n,e[n],t,i);return r.join("&")},k.fn.extend({serialize:function(){return k.param(this.serializeArray())},serializeArray:function(){return this.map(function(){var e=k.prop(this,"elements");return e?k.makeArray(e):this}).filter(function(){var e=this.type;return this.name&&!k(this).is(":disabled")&&jt.test(this.nodeName)&&!Dt.test(e)&&(this.checked||!pe.test(e))}).map(function(e,t){var n=k(this).val();return null==n?null:Array.isArray(n)?k.map(n,function(e){return{name:t.name,value:e.replace(At,"\r\n")}}):{name:t.name,value:n.replace(At,"\r\n")}}).get()}});var Lt=/%20/g,Ht=/#.*$/,Ot=/([?&])_=[^&]*/,Pt=/^(.*?):[ \t]*([^\r\n]*)$/gm,Rt=/^(?:GET|HEAD)$/,Mt=/^\/\//,It={},Wt={},$t="*/".concat("*"),Ft=E.createElement("a");function Bt(o){return function(e,t){"string"!=typeof e&&(t=e,e="*");var n,r=0,i=e.toLowerCase().match(R)||[];if(m(t))while(n=i[r++])"+"===n[0]?(n=n.slice(1)||"*",(o[n]=o[n]||[]).unshift(t)):(o[n]=o[n]||[]).push(t)}}function _t(t,i,o,a){var s={},u=t===Wt;function l(e){var r;return s[e]=!0,k.each(t[e]||[],function(e,t){var n=t(i,o,a);return"string"!=typeof n||u||s[n]?u?!(r=n):void 0:(i.dataTypes.unshift(n),l(n),!1)}),r}return l(i.dataTypes[0])||!s["*"]&&l("*")}function zt(e,t){var n,r,i=k.ajaxSettings.flatOptions||{};for(n in t)void 0!==t[n]&&((i[n]?e:r||(r={}))[n]=t[n]);return r&&k.extend(!0,e,r),e}Ft.href=Et.href,k.extend({active:0,lastModified:{},etag:{},ajaxSettings:{url:Et.href,type:"GET",isLocal:/^(?:about|app|app-storage|.+-extension|file|res|widget):$/.test(Et.protocol),global:!0,processData:!0,async:!0,contentType:"application/x-www-form-urlencoded; charset=UTF-8",accepts:{"*":$t,text:"text/plain",html:"text/html",xml:"application/xml, text/xml",json:"application/json, text/javascript"},contents:{xml:/\bxml\b/,html:/\bhtml/,json:/\bjson\b/},responseFields:{xml:"responseXML",text:"responseText",json:"responseJSON"},converters:{"* text":String,"text html":!0,"text json":JSON.parse,"text xml":k.parseXML},flatOptions:{url:!0,context:!0}},ajaxSetup:function(e,t){return t?zt(zt(e,k.ajaxSettings),t):zt(k.ajaxSettings,e)},ajaxPrefilter:Bt(It),ajaxTransport:Bt(Wt),ajax:function(e,t){"object"==typeof e&&(t=e,e=void 0),t=t||{};var c,f,p,n,d,r,h,g,i,o,v=k.ajaxSetup({},t),y=v.context||v,m=v.context&&(y.nodeType||y.jquery)?k(y):k.event,x=k.Deferred(),b=k.Callbacks("once memory"),w=v.statusCode||{},a={},s={},u="canceled",T={readyState:0,getResponseHeader:function(e){var t;if(h){if(!n){n={};while(t=Pt.exec(p))n[t[1].toLowerCase()+" "]=(n[t[1].toLowerCase()+" "]||[]).concat(t[2])}t=n[e.toLowerCase()+" "]}return null==t?null:t.join(", ")},getAllResponseHeaders:function(){return h?p:null},setRequestHeader:function(e,t){return null==h&&(e=s[e.toLowerCase()]=s[e.toLowerCase()]||e,a[e]=t),this},overrideMimeType:function(e){return null==h&&(v.mimeType=e),this},statusCode:function(e){var t;if(e)if(h)T.always(e[T.status]);else for(t in e)w[t]=[w[t],e[t]];return this},abort:function(e){var t=e||u;return c&&c.abort(t),l(0,t),this}};if(x.promise(T),v.url=((e||v.url||Et.href)+"").replace(Mt,Et.protocol+"//"),v.type=t.method||t.type||v.method||v.type,v.dataTypes=(v.dataType||"*").toLowerCase().match(R)||[""],null==v.crossDomain){r=E.createElement("a");try{r.href=v.url,r.href=r.href,v.crossDomain=Ft.protocol+"//"+Ft.host!=r.protocol+"//"+r.host}catch(e){v.crossDomain=!0}}if(v.data&&v.processData&&"string"!=typeof v.data&&(v.data=k.param(v.data,v.traditional)),_t(It,v,t,T),h)return T;for(i in(g=k.event&&v.global)&&0==k.active++&&k.event.trigger("ajaxStart"),v.type=v.type.toUpperCase(),v.hasContent=!Rt.test(v.type),f=v.url.replace(Ht,""),v.hasContent?v.data&&v.processData&&0===(v.contentType||"").indexOf("application/x-www-form-urlencoded")&&(v.data=v.data.replace(Lt,"+")):(o=v.url.slice(f.length),v.data&&(v.processData||"string"==typeof v.data)&&(f+=(St.test(f)?"&":"?")+v.data,delete v.data),!1===v.cache&&(f=f.replace(Ot,"$1"),o=(St.test(f)?"&":"?")+"_="+kt+++o),v.url=f+o),v.ifModified&&(k.lastModified[f]&&T.setRequestHeader("If-Modified-Since",k.lastModified[f]),k.etag[f]&&T.setRequestHeader("If-None-Match",k.etag[f])),(v.data&&v.hasContent&&!1!==v.contentType||t.contentType)&&T.setRequestHeader("Content-Type",v.contentType),T.setRequestHeader("Accept",v.dataTypes[0]&&v.accepts[v.dataTypes[0]]?v.accepts[v.dataTypes[0]]+("*"!==v.dataTypes[0]?", "+$t+"; q=0.01":""):v.accepts["*"]),v.headers)T.setRequestHeader(i,v.headers[i]);if(v.beforeSend&&(!1===v.beforeSend.call(y,T,v)||h))return T.abort();if(u="abort",b.add(v.complete),T.done(v.success),T.fail(v.error),c=_t(Wt,v,t,T)){if(T.readyState=1,g&&m.trigger("ajaxSend",[T,v]),h)return T;v.async&&0<v.timeout&&(d=C.setTimeout(function(){T.abort("timeout")},v.timeout));try{h=!1,c.send(a,l)}catch(e){if(h)throw e;l(-1,e)}}else l(-1,"No Transport");function l(e,t,n,r){var i,o,a,s,u,l=t;h||(h=!0,d&&C.clearTimeout(d),c=void 0,p=r||"",T.readyState=0<e?4:0,i=200<=e&&e<300||304===e,n&&(s=function(e,t,n){var r,i,o,a,s=e.contents,u=e.dataTypes;while("*"===u[0])u.shift(),void 0===r&&(r=e.mimeType||t.getResponseHeader("Content-Type"));if(r)for(i in s)if(s[i]&&s[i].test(r)){u.unshift(i);break}if(u[0]in n)o=u[0];else{for(i in n){if(!u[0]||e.converters[i+" "+u[0]]){o=i;break}a||(a=i)}o=o||a}if(o)return o!==u[0]&&u.unshift(o),n[o]}(v,T,n)),s=function(e,t,n,r){var i,o,a,s,u,l={},c=e.dataTypes.slice();if(c[1])for(a in e.converters)l[a.toLowerCase()]=e.converters[a];o=c.shift();while(o)if(e.responseFields[o]&&(n[e.responseFields[o]]=t),!u&&r&&e.dataFilter&&(t=e.dataFilter(t,e.dataType)),u=o,o=c.shift())if("*"===o)o=u;else if("*"!==u&&u!==o){if(!(a=l[u+" "+o]||l["* "+o]))for(i in l)if((s=i.split(" "))[1]===o&&(a=l[u+" "+s[0]]||l["* "+s[0]])){!0===a?a=l[i]:!0!==l[i]&&(o=s[0],c.unshift(s[1]));break}if(!0!==a)if(a&&e["throws"])t=a(t);else try{t=a(t)}catch(e){return{state:"parsererror",error:a?e:"No conversion from "+u+" to "+o}}}return{state:"success",data:t}}(v,s,T,i),i?(v.ifModified&&((u=T.getResponseHeader("Last-Modified"))&&(k.lastModified[f]=u),(u=T.getResponseHeader("etag"))&&(k.etag[f]=u)),204===e||"HEAD"===v.type?l="nocontent":304===e?l="notmodified":(l=s.state,o=s.data,i=!(a=s.error))):(a=l,!e&&l||(l="error",e<0&&(e=0))),T.status=e,T.statusText=(t||l)+"",i?x.resolveWith(y,[o,l,T]):x.rejectWith(y,[T,l,a]),T.statusCode(w),w=void 0,g&&m.trigger(i?"ajaxSuccess":"ajaxError",[T,v,i?o:a]),b.fireWith(y,[T,l]),g&&(m.trigger("ajaxComplete",[T,v]),--k.active||k.event.trigger("ajaxStop")))}return T},getJSON:function(e,t,n){return k.get(e,t,n,"json")},getScript:function(e,t){return k.get(e,void 0,t,"script")}}),k.each(["get","post"],function(e,i){k[i]=function(e,t,n,r){return m(t)&&(r=r||n,n=t,t=void 0),k.ajax(k.extend({url:e,type:i,dataType:r,data:t,success:n},k.isPlainObject(e)&&e))}}),k._evalUrl=function(e,t){return k.ajax({url:e,type:"GET",dataType:"script",cache:!0,async:!1,global:!1,converters:{"text script":function(){}},dataFilter:function(e){k.globalEval(e,t)}})},k.fn.extend({wrapAll:function(e){var t;return this[0]&&(m(e)&&(e=e.call(this[0])),t=k(e,this[0].ownerDocument).eq(0).clone(!0),this[0].parentNode&&t.insertBefore(this[0]),t.map(function(){var e=this;while(e.firstElementChild)e=e.firstElementChild;return e}).append(this)),this},wrapInner:function(n){return m(n)?this.each(function(e){k(this).wrapInner(n.call(this,e))}):this.each(function(){var e=k(this),t=e.contents();t.length?t.wrapAll(n):e.append(n)})},wrap:function(t){var n=m(t);return this.each(function(e){k(this).wrapAll(n?t.call(this,e):t)})},unwrap:function(e){return this.parent(e).not("body").each(function(){k(this).replaceWith(this.childNodes)}),this}}),k.expr.pseudos.hidden=function(e){return!k.expr.pseudos.visible(e)},k.expr.pseudos.visible=function(e){return!!(e.offsetWidth||e.offsetHeight||e.getClientRects().length)},k.ajaxSettings.xhr=function(){try{return new C.XMLHttpRequest}catch(e){}};var Ut={0:200,1223:204},Xt=k.ajaxSettings.xhr();y.cors=!!Xt&&"withCredentials"in Xt,y.ajax=Xt=!!Xt,k.ajaxTransport(function(i){var o,a;if(y.cors||Xt&&!i.crossDomain)return{send:function(e,t){var n,r=i.xhr();if(r.open(i.type,i.url,i.async,i.username,i.password),i.xhrFields)for(n in i.xhrFields)r[n]=i.xhrFields[n];for(n in i.mimeType&&r.overrideMimeType&&r.overrideMimeType(i.mimeType),i.crossDomain||e["X-Requested-With"]||(e["X-Requested-With"]="XMLHttpRequest"),e)r.setRequestHeader(n,e[n]);o=function(e){return function(){o&&(o=a=r.onload=r.onerror=r.onabort=r.ontimeout=r.onreadystatechange=null,"abort"===e?r.abort():"error"===e?"number"!=typeof r.status?t(0,"error"):t(r.status,r.statusText):t(Ut[r.status]||r.status,r.statusText,"text"!==(r.responseType||"text")||"string"!=typeof r.responseText?{binary:r.response}:{text:r.responseText},r.getAllResponseHeaders()))}},r.onload=o(),a=r.onerror=r.ontimeout=o("error"),void 0!==r.onabort?r.onabort=a:r.onreadystatechange=function(){4===r.readyState&&C.setTimeout(function(){o&&a()})},o=o("abort");try{r.send(i.hasContent&&i.data||null)}catch(e){if(o)throw e}},abort:function(){o&&o()}}}),k.ajaxPrefilter(function(e){e.crossDomain&&(e.contents.script=!1)}),k.ajaxSetup({accepts:{script:"text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"},contents:{script:/\b(?:java|ecma)script\b/},converters:{"text script":function(e){return k.globalEval(e),e}}}),k.ajaxPrefilter("script",function(e){void 0===e.cache&&(e.cache=!1),e.crossDomain&&(e.type="GET")}),k.ajaxTransport("script",function(n){var r,i;if(n.crossDomain||n.scriptAttrs)return{send:function(e,t){r=k("<script>").attr(n.scriptAttrs||{}).prop({charset:n.scriptCharset,src:n.url}).on("load error",i=function(e){r.remove(),i=null,e&&t("error"===e.type?404:200,e.type)}),E.head.appendChild(r[0])},abort:function(){i&&i()}}});var Vt,Gt=[],Yt=/(=)\?(?=&|$)|\?\?/;k.ajaxSetup({jsonp:"callback",jsonpCallback:function(){var e=Gt.pop()||k.expando+"_"+kt++;return this[e]=!0,e}}),k.ajaxPrefilter("json jsonp",function(e,t,n){var r,i,o,a=!1!==e.jsonp&&(Yt.test(e.url)?"url":"string"==typeof e.data&&0===(e.contentType||"").indexOf("application/x-www-form-urlencoded")&&Yt.test(e.data)&&"data");if(a||"jsonp"===e.dataTypes[0])return r=e.jsonpCallback=m(e.jsonpCallback)?e.jsonpCallback():e.jsonpCallback,a?e[a]=e[a].replace(Yt,"$1"+r):!1!==e.jsonp&&(e.url+=(St.test(e.url)?"&":"?")+e.jsonp+"="+r),e.converters["script json"]=function(){return o||k.error(r+" was not called"),o[0]},e.dataTypes[0]="json",i=C[r],C[r]=function(){o=arguments},n.always(function(){void 0===i?k(C).removeProp(r):C[r]=i,e[r]&&(e.jsonpCallback=t.jsonpCallback,Gt.push(r)),o&&m(i)&&i(o[0]),o=i=void 0}),"script"}),y.createHTMLDocument=((Vt=E.implementation.createHTMLDocument("").body).innerHTML="<form></form><form></form>",2===Vt.childNodes.length),k.parseHTML=function(e,t,n){return"string"!=typeof e?[]:("boolean"==typeof t&&(n=t,t=!1),t||(y.createHTMLDocument?((r=(t=E.implementation.createHTMLDocument("")).createElement("base")).href=E.location.href,t.head.appendChild(r)):t=E),o=!n&&[],(i=D.exec(e))?[t.createElement(i[1])]:(i=we([e],t,o),o&&o.length&&k(o).remove(),k.merge([],i.childNodes)));var r,i,o},k.fn.load=function(e,t,n){var r,i,o,a=this,s=e.indexOf(" ");return-1<s&&(r=mt(e.slice(s)),e=e.slice(0,s)),m(t)?(n=t,t=void 0):t&&"object"==typeof t&&(i="POST"),0<a.length&&k.ajax({url:e,type:i||"GET",dataType:"html",data:t}).done(function(e){o=arguments,a.html(r?k("<div>").append(k.parseHTML(e)).find(r):e)}).always(n&&function(e,t){a.each(function(){n.apply(this,o||[e.responseText,t,e])})}),this},k.each(["ajaxStart","ajaxStop","ajaxComplete","ajaxError","ajaxSuccess","ajaxSend"],function(e,t){k.fn[t]=function(e){return this.on(t,e)}}),k.expr.pseudos.animated=function(t){return k.grep(k.timers,function(e){return t===e.elem}).length},k.offset={setOffset:function(e,t,n){var r,i,o,a,s,u,l=k.css(e,"position"),c=k(e),f={};"static"===l&&(e.style.position="relative"),s=c.offset(),o=k.css(e,"top"),u=k.css(e,"left"),("absolute"===l||"fixed"===l)&&-1<(o+u).indexOf("auto")?(a=(r=c.position()).top,i=r.left):(a=parseFloat(o)||0,i=parseFloat(u)||0),m(t)&&(t=t.call(e,n,k.extend({},s))),null!=t.top&&(f.top=t.top-s.top+a),null!=t.left&&(f.left=t.left-s.left+i),"using"in t?t.using.call(e,f):c.css(f)}},k.fn.extend({offset:function(t){if(arguments.length)return void 0===t?this:this.each(function(e){k.offset.setOffset(this,t,e)});var e,n,r=this[0];return r?r.getClientRects().length?(e=r.getBoundingClientRect(),n=r.ownerDocument.defaultView,{top:e.top+n.pageYOffset,left:e.left+n.pageXOffset}):{top:0,left:0}:void 0},position:function(){if(this[0]){var e,t,n,r=this[0],i={top:0,left:0};if("fixed"===k.css(r,"position"))t=r.getBoundingClientRect();else{t=this.offset(),n=r.ownerDocument,e=r.offsetParent||n.documentElement;while(e&&(e===n.body||e===n.documentElement)&&"static"===k.css(e,"position"))e=e.parentNode;e&&e!==r&&1===e.nodeType&&((i=k(e).offset()).top+=k.css(e,"borderTopWidth",!0),i.left+=k.css(e,"borderLeftWidth",!0))}return{top:t.top-i.top-k.css(r,"marginTop",!0),left:t.left-i.left-k.css(r,"marginLeft",!0)}}},offsetParent:function(){return this.map(function(){var e=this.offsetParent;while(e&&"static"===k.css(e,"position"))e=e.offsetParent;return e||ie})}}),k.each({scrollLeft:"pageXOffset",scrollTop:"pageYOffset"},function(t,i){var o="pageYOffset"===i;k.fn[t]=function(e){return _(this,function(e,t,n){var r;if(x(e)?r=e:9===e.nodeType&&(r=e.defaultView),void 0===n)return r?r[i]:e[t];r?r.scrollTo(o?r.pageXOffset:n,o?n:r.pageYOffset):e[t]=n},t,e,arguments.length)}}),k.each(["top","left"],function(e,n){k.cssHooks[n]=ze(y.pixelPosition,function(e,t){if(t)return t=_e(e,n),$e.test(t)?k(e).position()[n]+"px":t})}),k.each({Height:"height",Width:"width"},function(a,s){k.each({padding:"inner"+a,content:s,"":"outer"+a},function(r,o){k.fn[o]=function(e,t){var n=arguments.length&&(r||"boolean"!=typeof e),i=r||(!0===e||!0===t?"margin":"border");return _(this,function(e,t,n){var r;return x(e)?0===o.indexOf("outer")?e["inner"+a]:e.document.documentElement["client"+a]:9===e.nodeType?(r=e.documentElement,Math.max(e.body["scroll"+a],r["scroll"+a],e.body["offset"+a],r["offset"+a],r["client"+a])):void 0===n?k.css(e,t,i):k.style(e,t,n,i)},s,n?e:void 0,n)}})}),k.each("blur focus focusin focusout resize scroll click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup contextmenu".split(" "),function(e,n){k.fn[n]=function(e,t){return 0<arguments.length?this.on(n,null,e,t):this.trigger(n)}}),k.fn.extend({hover:function(e,t){return this.mouseenter(e).mouseleave(t||e)}}),k.fn.extend({bind:function(e,t,n){return this.on(e,null,t,n)},unbind:function(e,t){return this.off(e,null,t)},delegate:function(e,t,n,r){return this.on(t,e,n,r)},undelegate:function(e,t,n){return 1===arguments.length?this.off(e,"**"):this.off(t,e||"**",n)}}),k.proxy=function(e,t){var n,r,i;if("string"==typeof t&&(n=e[t],t=e,e=n),m(e))return r=s.call(arguments,2),(i=function(){return e.apply(t||this,r.concat(s.call(arguments)))}).guid=e.guid=e.guid||k.guid++,i},k.holdReady=function(e){e?k.readyWait++:k.ready(!0)},k.isArray=Array.isArray,k.parseJSON=JSON.parse,k.nodeName=A,k.isFunction=m,k.isWindow=x,k.camelCase=V,k.type=w,k.now=Date.now,k.isNumeric=function(e){var t=k.type(e);return("number"===t||"string"===t)&&!isNaN(e-parseFloat(e))},"function"==typeof define&&define.amd&&define("jquery",[],function(){return k});var Qt=C.jQuery,Jt=C.$;return k.noConflict=function(e){return C.$===k&&(C.$=Jt),e&&C.jQuery===k&&(C.jQuery=Qt),k},e||(C.jQuery=C.$=k),k});



/*[PATH @digikala/supernova-digikala-desktop/assets/local/js/libs/jquery.easing.1.3.min.js]*/
jQuery.easing.jswing=jQuery.easing.swing,jQuery.extend(jQuery.easing,{def:"easeOutQuad",swing:function(n,e,t,u,a){return jQuery.easing[jQuery.easing.def](n,e,t,u,a)},easeInQuad:function(n,e,t,u,a){return u*(e/=a)*e+t},easeOutQuad:function(n,e,t,u,a){return-u*(e/=a)*(e-2)+t},easeInOutQuad:function(n,e,t,u,a){return(e/=a/2)<1?u/2*e*e+t:-u/2*(--e*(e-2)-1)+t},easeInCubic:function(n,e,t,u,a){return u*(e/=a)*e*e+t},easeOutCubic:function(n,e,t,u,a){return u*((e=e/a-1)*e*e+1)+t},easeInOutCubic:function(n,e,t,u,a){return(e/=a/2)<1?u/2*e*e*e+t:u/2*((e-=2)*e*e+2)+t},easeInQuart:function(n,e,t,u,a){return u*(e/=a)*e*e*e+t},easeOutQuart:function(n,e,t,u,a){return-u*((e=e/a-1)*e*e*e-1)+t},easeInOutQuart:function(n,e,t,u,a){return(e/=a/2)<1?u/2*e*e*e*e+t:-u/2*((e-=2)*e*e*e-2)+t},easeInQuint:function(n,e,t,u,a){return u*(e/=a)*e*e*e*e+t},easeOutQuint:function(n,e,t,u,a){return u*((e=e/a-1)*e*e*e*e+1)+t},easeInOutQuint:function(n,e,t,u,a){return(e/=a/2)<1?u/2*e*e*e*e*e+t:u/2*((e-=2)*e*e*e*e+2)+t},easeInSine:function(n,e,t,u,a){return-u*Math.cos(e/a*(Math.PI/2))+u+t},easeOutSine:function(n,e,t,u,a){return u*Math.sin(e/a*(Math.PI/2))+t},easeInOutSine:function(n,e,t,u,a){return-u/2*(Math.cos(Math.PI*e/a)-1)+t},easeInExpo:function(n,e,t,u,a){return 0==e?t:u*Math.pow(2,10*(e/a-1))+t},easeOutExpo:function(n,e,t,u,a){return e==a?t+u:u*(1-Math.pow(2,-10*e/a))+t},easeInOutExpo:function(n,e,t,u,a){return 0==e?t:e==a?t+u:(e/=a/2)<1?u/2*Math.pow(2,10*(e-1))+t:u/2*(2-Math.pow(2,-10*--e))+t},easeInCirc:function(n,e,t,u,a){return-u*(Math.sqrt(1-(e/=a)*e)-1)+t},easeOutCirc:function(n,e,t,u,a){return u*Math.sqrt(1-(e=e/a-1)*e)+t},easeInOutCirc:function(n,e,t,u,a){return(e/=a/2)<1?-u/2*(Math.sqrt(1-e*e)-1)+t:u/2*(Math.sqrt(1-(e-=2)*e)+1)+t},easeInElastic:function(n,e,t,u,a){var r=1.70158,i=0,s=u;if(0==e)return t;if(1==(e/=a))return t+u;if(i||(i=.3*a),s<Math.abs(u)){s=u;r=i/4}else r=i/(2*Math.PI)*Math.asin(u/s);return-s*Math.pow(2,10*(e-=1))*Math.sin((e*a-r)*(2*Math.PI)/i)+t},easeOutElastic:function(n,e,t,u,a){var r=1.70158,i=0,s=u;if(0==e)return t;if(1==(e/=a))return t+u;if(i||(i=.3*a),s<Math.abs(u)){s=u;r=i/4}else r=i/(2*Math.PI)*Math.asin(u/s);return s*Math.pow(2,-10*e)*Math.sin((e*a-r)*(2*Math.PI)/i)+u+t},easeInOutElastic:function(n,e,t,u,a){var r=1.70158,i=0,s=u;if(0==e)return t;if(2==(e/=a/2))return t+u;if(i||(i=a*(.3*1.5)),s<Math.abs(u)){s=u;r=i/4}else r=i/(2*Math.PI)*Math.asin(u/s);return e<1?s*Math.pow(2,10*(e-=1))*Math.sin((e*a-r)*(2*Math.PI)/i)*-.5+t:s*Math.pow(2,-10*(e-=1))*Math.sin((e*a-r)*(2*Math.PI)/i)*.5+u+t},easeInBack:function(n,e,t,u,a,r){return null==r&&(r=1.70158),u*(e/=a)*e*((r+1)*e-r)+t},easeOutBack:function(n,e,t,u,a,r){return null==r&&(r=1.70158),u*((e=e/a-1)*e*((r+1)*e+r)+1)+t},easeInOutBack:function(n,e,t,u,a,r){return null==r&&(r=1.70158),(e/=a/2)<1?u/2*(e*e*((1+(r*=1.525))*e-r))+t:u/2*((e-=2)*e*((1+(r*=1.525))*e+r)+2)+t},easeInBounce:function(n,e,t,u,a){return u-jQuery.easing.easeOutBounce(n,a-e,0,u,a)+t},easeOutBounce:function(n,e,t,u,a){return(e/=a)<1/2.75?u*(7.5625*e*e)+t:e<2/2.75?u*(7.5625*(e-=1.5/2.75)*e+.75)+t:e<2.5/2.75?u*(7.5625*(e-=2.25/2.75)*e+.9375)+t:u*(7.5625*(e-=2.625/2.75)*e+.984375)+t},easeInOutBounce:function(n,e,t,u,a){return e<a/2?.5*jQuery.easing.easeInBounce(n,2*e,0,u,a)+t:.5*jQuery.easing.easeOutBounce(n,2*e-a,0,u,a)+.5*u+t}});



/*[PATH @digikala/supernova/node_modules/jquery-validation/dist/jquery.validate.min.js]*/
/*! jQuery Validation Plugin - v1.19.1 - 6/15/2019
 * https://jqueryvalidation.org/
 * Copyright (c) 2019 Jörn Zaefferer; Licensed MIT */
!function(a){"function"==typeof define&&define.amd?define(["jquery"],a):"object"==typeof module&&module.exports?module.exports=a(require("jquery")):a(jQuery)}(function(a){a.extend(a.fn,{validate:function(b){if(!this.length)return void(b&&b.debug&&window.console&&console.warn("Nothing selected, can't validate, returning nothing."));var c=a.data(this[0],"validator");return c?c:(this.attr("novalidate","novalidate"),c=new a.validator(b,this[0]),a.data(this[0],"validator",c),c.settings.onsubmit&&(this.on("click.validate",":submit",function(b){c.submitButton=b.currentTarget,a(this).hasClass("cancel")&&(c.cancelSubmit=!0),void 0!==a(this).attr("formnovalidate")&&(c.cancelSubmit=!0)}),this.on("submit.validate",function(b){function d(){var d,e;return c.submitButton&&(c.settings.submitHandler||c.formSubmitted)&&(d=a("<input type='hidden'/>").attr("name",c.submitButton.name).val(a(c.submitButton).val()).appendTo(c.currentForm)),!(c.settings.submitHandler&&!c.settings.debug)||(e=c.settings.submitHandler.call(c,c.currentForm,b),d&&d.remove(),void 0!==e&&e)}return c.settings.debug&&b.preventDefault(),c.cancelSubmit?(c.cancelSubmit=!1,d()):c.form()?c.pendingRequest?(c.formSubmitted=!0,!1):d():(c.focusInvalid(),!1)})),c)},valid:function(){var b,c,d;return a(this[0]).is("form")?b=this.validate().form():(d=[],b=!0,c=a(this[0].form).validate(),this.each(function(){b=c.element(this)&&b,b||(d=d.concat(c.errorList))}),c.errorList=d),b},rules:function(b,c){var d,e,f,g,h,i,j=this[0],k="undefined"!=typeof this.attr("contenteditable")&&"false"!==this.attr("contenteditable");if(null!=j&&(!j.form&&k&&(j.form=this.closest("form")[0],j.name=this.attr("name")),null!=j.form)){if(b)switch(d=a.data(j.form,"validator").settings,e=d.rules,f=a.validator.staticRules(j),b){case"add":a.extend(f,a.validator.normalizeRule(c)),delete f.messages,e[j.name]=f,c.messages&&(d.messages[j.name]=a.extend(d.messages[j.name],c.messages));break;case"remove":return c?(i={},a.each(c.split(/\s/),function(a,b){i[b]=f[b],delete f[b]}),i):(delete e[j.name],f)}return g=a.validator.normalizeRules(a.extend({},a.validator.classRules(j),a.validator.attributeRules(j),a.validator.dataRules(j),a.validator.staticRules(j)),j),g.required&&(h=g.required,delete g.required,g=a.extend({required:h},g)),g.remote&&(h=g.remote,delete g.remote,g=a.extend(g,{remote:h})),g}}}),a.extend(a.expr.pseudos||a.expr[":"],{blank:function(b){return!a.trim(""+a(b).val())},filled:function(b){var c=a(b).val();return null!==c&&!!a.trim(""+c)},unchecked:function(b){return!a(b).prop("checked")}}),a.validator=function(b,c){this.settings=a.extend(!0,{},a.validator.defaults,b),this.currentForm=c,this.init()},a.validator.format=function(b,c){return 1===arguments.length?function(){var c=a.makeArray(arguments);return c.unshift(b),a.validator.format.apply(this,c)}:void 0===c?b:(arguments.length>2&&c.constructor!==Array&&(c=a.makeArray(arguments).slice(1)),c.constructor!==Array&&(c=[c]),a.each(c,function(a,c){b=b.replace(new RegExp("\\{"+a+"\\}","g"),function(){return c})}),b)},a.extend(a.validator,{defaults:{messages:{},groups:{},rules:{},errorClass:"error",pendingClass:"pending",validClass:"valid",errorElement:"label",focusCleanup:!1,focusInvalid:!0,errorContainer:a([]),errorLabelContainer:a([]),onsubmit:!0,ignore:":hidden",ignoreTitle:!1,onfocusin:function(a){this.lastActive=a,this.settings.focusCleanup&&(this.settings.unhighlight&&this.settings.unhighlight.call(this,a,this.settings.errorClass,this.settings.validClass),this.hideThese(this.errorsFor(a)))},onfocusout:function(a){this.checkable(a)||!(a.name in this.submitted)&&this.optional(a)||this.element(a)},onkeyup:function(b,c){var d=[16,17,18,20,35,36,37,38,39,40,45,144,225];9===c.which&&""===this.elementValue(b)||a.inArray(c.keyCode,d)!==-1||(b.name in this.submitted||b.name in this.invalid)&&this.element(b)},onclick:function(a){a.name in this.submitted?this.element(a):a.parentNode.name in this.submitted&&this.element(a.parentNode)},highlight:function(b,c,d){"radio"===b.type?this.findByName(b.name).addClass(c).removeClass(d):a(b).addClass(c).removeClass(d)},unhighlight:function(b,c,d){"radio"===b.type?this.findByName(b.name).removeClass(c).addClass(d):a(b).removeClass(c).addClass(d)}},setDefaults:function(b){a.extend(a.validator.defaults,b)},messages:{required:"This field is required.",remote:"Please fix this field.",email:"Please enter a valid email address.",url:"Please enter a valid URL.",date:"Please enter a valid date.",dateISO:"Please enter a valid date (ISO).",number:"Please enter a valid number.",digits:"Please enter only digits.",equalTo:"Please enter the same value again.",maxlength:a.validator.format("Please enter no more than {0} characters."),minlength:a.validator.format("Please enter at least {0} characters."),rangelength:a.validator.format("Please enter a value between {0} and {1} characters long."),range:a.validator.format("Please enter a value between {0} and {1}."),max:a.validator.format("Please enter a value less than or equal to {0}."),min:a.validator.format("Please enter a value greater than or equal to {0}."),step:a.validator.format("Please enter a multiple of {0}.")},autoCreateRanges:!1,prototype:{init:function(){function b(b){var c="undefined"!=typeof a(this).attr("contenteditable")&&"false"!==a(this).attr("contenteditable");if(!this.form&&c&&(this.form=a(this).closest("form")[0],this.name=a(this).attr("name")),d===this.form){var e=a.data(this.form,"validator"),f="on"+b.type.replace(/^validate/,""),g=e.settings;g[f]&&!a(this).is(g.ignore)&&g[f].call(e,this,b)}}this.labelContainer=a(this.settings.errorLabelContainer),this.errorContext=this.labelContainer.length&&this.labelContainer||a(this.currentForm),this.containers=a(this.settings.errorContainer).add(this.settings.errorLabelContainer),this.submitted={},this.valueCache={},this.pendingRequest=0,this.pending={},this.invalid={},this.reset();var c,d=this.currentForm,e=this.groups={};a.each(this.settings.groups,function(b,c){"string"==typeof c&&(c=c.split(/\s/)),a.each(c,function(a,c){e[c]=b})}),c=this.settings.rules,a.each(c,function(b,d){c[b]=a.validator.normalizeRule(d)}),a(this.currentForm).on("focusin.validate focusout.validate keyup.validate",":text, [type='password'], [type='file'], select, textarea, [type='number'], [type='search'], [type='tel'], [type='url'], [type='email'], [type='datetime'], [type='date'], [type='month'], [type='week'], [type='time'], [type='datetime-local'], [type='range'], [type='color'], [type='radio'], [type='checkbox'], [contenteditable], [type='button']",b).on("click.validate","select, option, [type='radio'], [type='checkbox']",b),this.settings.invalidHandler&&a(this.currentForm).on("invalid-form.validate",this.settings.invalidHandler)},form:function(){return this.checkForm(),a.extend(this.submitted,this.errorMap),this.invalid=a.extend({},this.errorMap),this.valid()||a(this.currentForm).triggerHandler("invalid-form",[this]),this.showErrors(),this.valid()},checkForm:function(){this.prepareForm();for(var a=0,b=this.currentElements=this.elements();b[a];a++)this.check(b[a]);return this.valid()},element:function(b){var c,d,e=this.clean(b),f=this.validationTargetFor(e),g=this,h=!0;return void 0===f?delete this.invalid[e.name]:(this.prepareElement(f),this.currentElements=a(f),d=this.groups[f.name],d&&a.each(this.groups,function(a,b){b===d&&a!==f.name&&(e=g.validationTargetFor(g.clean(g.findByName(a))),e&&e.name in g.invalid&&(g.currentElements.push(e),h=g.check(e)&&h))}),c=this.check(f)!==!1,h=h&&c,c?this.invalid[f.name]=!1:this.invalid[f.name]=!0,this.numberOfInvalids()||(this.toHide=this.toHide.add(this.containers)),this.showErrors(),a(b).attr("aria-invalid",!c)),h},showErrors:function(b){if(b){var c=this;a.extend(this.errorMap,b),this.errorList=a.map(this.errorMap,function(a,b){return{message:a,element:c.findByName(b)[0]}}),this.successList=a.grep(this.successList,function(a){return!(a.name in b)})}this.settings.showErrors?this.settings.showErrors.call(this,this.errorMap,this.errorList):this.defaultShowErrors()},resetForm:function(){a.fn.resetForm&&a(this.currentForm).resetForm(),this.invalid={},this.submitted={},this.prepareForm(),this.hideErrors();var b=this.elements().removeData("previousValue").removeAttr("aria-invalid");this.resetElements(b)},resetElements:function(a){var b;if(this.settings.unhighlight)for(b=0;a[b];b++)this.settings.unhighlight.call(this,a[b],this.settings.errorClass,""),this.findByName(a[b].name).removeClass(this.settings.validClass);else a.removeClass(this.settings.errorClass).removeClass(this.settings.validClass)},numberOfInvalids:function(){return this.objectLength(this.invalid)},objectLength:function(a){var b,c=0;for(b in a)void 0!==a[b]&&null!==a[b]&&a[b]!==!1&&c++;return c},hideErrors:function(){this.hideThese(this.toHide)},hideThese:function(a){a.not(this.containers).text(""),this.addWrapper(a).hide()},valid:function(){return 0===this.size()},size:function(){return this.errorList.length},focusInvalid:function(){if(this.settings.focusInvalid)try{a(this.findLastActive()||this.errorList.length&&this.errorList[0].element||[]).filter(":visible").trigger("focus").trigger("focusin")}catch(b){}},findLastActive:function(){var b=this.lastActive;return b&&1===a.grep(this.errorList,function(a){return a.element.name===b.name}).length&&b},elements:function(){var b=this,c={};return a(this.currentForm).find("input, select, textarea, [contenteditable]").not(":submit, :reset, :image, :disabled").not(this.settings.ignore).filter(function(){var d=this.name||a(this).attr("name"),e="undefined"!=typeof a(this).attr("contenteditable")&&"false"!==a(this).attr("contenteditable");return!d&&b.settings.debug&&window.console&&console.error("%o has no name assigned",this),e&&(this.form=a(this).closest("form")[0],this.name=d),this.form===b.currentForm&&(!(d in c||!b.objectLength(a(this).rules()))&&(c[d]=!0,!0))})},clean:function(b){return a(b)[0]},errors:function(){var b=this.settings.errorClass.split(" ").join(".");return a(this.settings.errorElement+"."+b,this.errorContext)},resetInternals:function(){this.successList=[],this.errorList=[],this.errorMap={},this.toShow=a([]),this.toHide=a([])},reset:function(){this.resetInternals(),this.currentElements=a([])},prepareForm:function(){this.reset(),this.toHide=this.errors().add(this.containers)},prepareElement:function(a){this.reset(),this.toHide=this.errorsFor(a)},elementValue:function(b){var c,d,e=a(b),f=b.type,g="undefined"!=typeof e.attr("contenteditable")&&"false"!==e.attr("contenteditable");return"radio"===f||"checkbox"===f?this.findByName(b.name).filter(":checked").val():"number"===f&&"undefined"!=typeof b.validity?b.validity.badInput?"NaN":e.val():(c=g?e.text():e.val(),"file"===f?"C:\\fakepath\\"===c.substr(0,12)?c.substr(12):(d=c.lastIndexOf("/"),d>=0?c.substr(d+1):(d=c.lastIndexOf("\\"),d>=0?c.substr(d+1):c)):"string"==typeof c?c.replace(/\r/g,""):c)},check:function(b){b=this.validationTargetFor(this.clean(b));var c,d,e,f,g=a(b).rules(),h=a.map(g,function(a,b){return b}).length,i=!1,j=this.elementValue(b);"function"==typeof g.normalizer?f=g.normalizer:"function"==typeof this.settings.normalizer&&(f=this.settings.normalizer),f&&(j=f.call(b,j),delete g.normalizer);for(d in g){e={method:d,parameters:g[d]};try{if(c=a.validator.methods[d].call(this,j,b,e.parameters),"dependency-mismatch"===c&&1===h){i=!0;continue}if(i=!1,"pending"===c)return void(this.toHide=this.toHide.not(this.errorsFor(b)));if(!c)return this.formatAndAdd(b,e),!1}catch(k){throw this.settings.debug&&window.console&&console.log("Exception occurred when checking element "+b.id+", check the '"+e.method+"' method.",k),k instanceof TypeError&&(k.message+=".  Exception occurred when checking element "+b.id+", check the '"+e.method+"' method."),k}}if(!i)return this.objectLength(g)&&this.successList.push(b),!0},customDataMessage:function(b,c){return a(b).data("msg"+c.charAt(0).toUpperCase()+c.substring(1).toLowerCase())||a(b).data("msg")},customMessage:function(a,b){var c=this.settings.messages[a];return c&&(c.constructor===String?c:c[b])},findDefined:function(){for(var a=0;a<arguments.length;a++)if(void 0!==arguments[a])return arguments[a]},defaultMessage:function(b,c){"string"==typeof c&&(c={method:c});var d=this.findDefined(this.customMessage(b.name,c.method),this.customDataMessage(b,c.method),!this.settings.ignoreTitle&&b.title||void 0,a.validator.messages[c.method],"<strong>Warning: No message defined for "+b.name+"</strong>"),e=/\$?\{(\d+)\}/g;return"function"==typeof d?d=d.call(this,c.parameters,b):e.test(d)&&(d=a.validator.format(d.replace(e,"{$1}"),c.parameters)),d},formatAndAdd:function(a,b){var c=this.defaultMessage(a,b);this.errorList.push({message:c,element:a,method:b.method}),this.errorMap[a.name]=c,this.submitted[a.name]=c},addWrapper:function(a){return this.settings.wrapper&&(a=a.add(a.parent(this.settings.wrapper))),a},defaultShowErrors:function(){var a,b,c;for(a=0;this.errorList[a];a++)c=this.errorList[a],this.settings.highlight&&this.settings.highlight.call(this,c.element,this.settings.errorClass,this.settings.validClass),this.showLabel(c.element,c.message);if(this.errorList.length&&(this.toShow=this.toShow.add(this.containers)),this.settings.success)for(a=0;this.successList[a];a++)this.showLabel(this.successList[a]);if(this.settings.unhighlight)for(a=0,b=this.validElements();b[a];a++)this.settings.unhighlight.call(this,b[a],this.settings.errorClass,this.settings.validClass);this.toHide=this.toHide.not(this.toShow),this.hideErrors(),this.addWrapper(this.toShow).show()},validElements:function(){return this.currentElements.not(this.invalidElements())},invalidElements:function(){return a(this.errorList).map(function(){return this.element})},showLabel:function(b,c){var d,e,f,g,h=this.errorsFor(b),i=this.idOrName(b),j=a(b).attr("aria-describedby");h.length?(h.removeClass(this.settings.validClass).addClass(this.settings.errorClass),h.html(c)):(h=a("<"+this.settings.errorElement+">").attr("id",i+"-error").addClass(this.settings.errorClass).html(c||""),d=h,this.settings.wrapper&&(d=h.hide().show().wrap("<"+this.settings.wrapper+"/>").parent()),this.labelContainer.length?this.labelContainer.append(d):this.settings.errorPlacement?this.settings.errorPlacement.call(this,d,a(b)):d.insertAfter(b),h.is("label")?h.attr("for",i):0===h.parents("label[for='"+this.escapeCssMeta(i)+"']").length&&(f=h.attr("id"),j?j.match(new RegExp("\\b"+this.escapeCssMeta(f)+"\\b"))||(j+=" "+f):j=f,a(b).attr("aria-describedby",j),e=this.groups[b.name],e&&(g=this,a.each(g.groups,function(b,c){c===e&&a("[name='"+g.escapeCssMeta(b)+"']",g.currentForm).attr("aria-describedby",h.attr("id"))})))),!c&&this.settings.success&&(h.text(""),"string"==typeof this.settings.success?h.addClass(this.settings.success):this.settings.success(h,b)),this.toShow=this.toShow.add(h)},errorsFor:function(b){var c=this.escapeCssMeta(this.idOrName(b)),d=a(b).attr("aria-describedby"),e="label[for='"+c+"'], label[for='"+c+"'] *";return d&&(e=e+", #"+this.escapeCssMeta(d).replace(/\s+/g,", #")),this.errors().filter(e)},escapeCssMeta:function(a){return a.replace(/([\\!"#$%&'()*+,.\/:;<=>?@\[\]^`{|}~])/g,"\\$1")},idOrName:function(a){return this.groups[a.name]||(this.checkable(a)?a.name:a.id||a.name)},validationTargetFor:function(b){return this.checkable(b)&&(b=this.findByName(b.name)),a(b).not(this.settings.ignore)[0]},checkable:function(a){return/radio|checkbox/i.test(a.type)},findByName:function(b){return a(this.currentForm).find("[name='"+this.escapeCssMeta(b)+"']")},getLength:function(b,c){switch(c.nodeName.toLowerCase()){case"select":return a("option:selected",c).length;case"input":if(this.checkable(c))return this.findByName(c.name).filter(":checked").length}return b.length},depend:function(a,b){return!this.dependTypes[typeof a]||this.dependTypes[typeof a](a,b)},dependTypes:{"boolean":function(a){return a},string:function(b,c){return!!a(b,c.form).length},"function":function(a,b){return a(b)}},optional:function(b){var c=this.elementValue(b);return!a.validator.methods.required.call(this,c,b)&&"dependency-mismatch"},startRequest:function(b){this.pending[b.name]||(this.pendingRequest++,a(b).addClass(this.settings.pendingClass),this.pending[b.name]=!0)},stopRequest:function(b,c){this.pendingRequest--,this.pendingRequest<0&&(this.pendingRequest=0),delete this.pending[b.name],a(b).removeClass(this.settings.pendingClass),c&&0===this.pendingRequest&&this.formSubmitted&&this.form()?(a(this.currentForm).submit(),this.submitButton&&a("input:hidden[name='"+this.submitButton.name+"']",this.currentForm).remove(),this.formSubmitted=!1):!c&&0===this.pendingRequest&&this.formSubmitted&&(a(this.currentForm).triggerHandler("invalid-form",[this]),this.formSubmitted=!1)},previousValue:function(b,c){return c="string"==typeof c&&c||"remote",a.data(b,"previousValue")||a.data(b,"previousValue",{old:null,valid:!0,message:this.defaultMessage(b,{method:c})})},destroy:function(){this.resetForm(),a(this.currentForm).off(".validate").removeData("validator").find(".validate-equalTo-blur").off(".validate-equalTo").removeClass("validate-equalTo-blur").find(".validate-lessThan-blur").off(".validate-lessThan").removeClass("validate-lessThan-blur").find(".validate-lessThanEqual-blur").off(".validate-lessThanEqual").removeClass("validate-lessThanEqual-blur").find(".validate-greaterThanEqual-blur").off(".validate-greaterThanEqual").removeClass("validate-greaterThanEqual-blur").find(".validate-greaterThan-blur").off(".validate-greaterThan").removeClass("validate-greaterThan-blur")}},classRuleSettings:{required:{required:!0},email:{email:!0},url:{url:!0},date:{date:!0},dateISO:{dateISO:!0},number:{number:!0},digits:{digits:!0},creditcard:{creditcard:!0}},addClassRules:function(b,c){b.constructor===String?this.classRuleSettings[b]=c:a.extend(this.classRuleSettings,b)},classRules:function(b){var c={},d=a(b).attr("class");return d&&a.each(d.split(" "),function(){this in a.validator.classRuleSettings&&a.extend(c,a.validator.classRuleSettings[this])}),c},normalizeAttributeRule:function(a,b,c,d){/min|max|step/.test(c)&&(null===b||/number|range|text/.test(b))&&(d=Number(d),isNaN(d)&&(d=void 0)),d||0===d?a[c]=d:b===c&&"range"!==b&&(a[c]=!0)},attributeRules:function(b){var c,d,e={},f=a(b),g=b.getAttribute("type");for(c in a.validator.methods)"required"===c?(d=b.getAttribute(c),""===d&&(d=!0),d=!!d):d=f.attr(c),this.normalizeAttributeRule(e,g,c,d);return e.maxlength&&/-1|2147483647|524288/.test(e.maxlength)&&delete e.maxlength,e},dataRules:function(b){var c,d,e={},f=a(b),g=b.getAttribute("type");for(c in a.validator.methods)d=f.data("rule"+c.charAt(0).toUpperCase()+c.substring(1).toLowerCase()),""===d&&(d=!0),this.normalizeAttributeRule(e,g,c,d);return e},staticRules:function(b){var c={},d=a.data(b.form,"validator");return d.settings.rules&&(c=a.validator.normalizeRule(d.settings.rules[b.name])||{}),c},normalizeRules:function(b,c){return a.each(b,function(d,e){if(e===!1)return void delete b[d];if(e.param||e.depends){var f=!0;switch(typeof e.depends){case"string":f=!!a(e.depends,c.form).length;break;case"function":f=e.depends.call(c,c)}f?b[d]=void 0===e.param||e.param:(a.data(c.form,"validator").resetElements(a(c)),delete b[d])}}),a.each(b,function(d,e){b[d]=a.isFunction(e)&&"normalizer"!==d?e(c):e}),a.each(["minlength","maxlength"],function(){b[this]&&(b[this]=Number(b[this]))}),a.each(["rangelength","range"],function(){var c;b[this]&&(a.isArray(b[this])?b[this]=[Number(b[this][0]),Number(b[this][1])]:"string"==typeof b[this]&&(c=b[this].replace(/[\[\]]/g,"").split(/[\s,]+/),b[this]=[Number(c[0]),Number(c[1])]))}),a.validator.autoCreateRanges&&(null!=b.min&&null!=b.max&&(b.range=[b.min,b.max],delete b.min,delete b.max),null!=b.minlength&&null!=b.maxlength&&(b.rangelength=[b.minlength,b.maxlength],delete b.minlength,delete b.maxlength)),b},normalizeRule:function(b){if("string"==typeof b){var c={};a.each(b.split(/\s/),function(){c[this]=!0}),b=c}return b},addMethod:function(b,c,d){a.validator.methods[b]=c,a.validator.messages[b]=void 0!==d?d:a.validator.messages[b],c.length<3&&a.validator.addClassRules(b,a.validator.normalizeRule(b))},methods:{required:function(b,c,d){if(!this.depend(d,c))return"dependency-mismatch";if("select"===c.nodeName.toLowerCase()){var e=a(c).val();return e&&e.length>0}return this.checkable(c)?this.getLength(b,c)>0:void 0!==b&&null!==b&&b.length>0},email:function(a,b){return this.optional(b)||/^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/.test(a)},url:function(a,b){return this.optional(b)||/^(?:(?:(?:https?|ftp):)?\/\/)(?:\S+(?::\S*)?@)?(?:(?!(?:10|127)(?:\.\d{1,3}){3})(?!(?:169\.254|192\.168)(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)(?:\.(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)*(?:\.(?:[a-z\u00a1-\uffff]{2,})).?)(?::\d{2,5})?(?:[\/?#]\S*)?$/i.test(a)},date:function(){var a=!1;return function(b,c){return a||(a=!0,this.settings.debug&&window.console&&console.warn("The `date` method is deprecated and will be removed in version '2.0.0'.\nPlease don't use it, since it relies on the Date constructor, which\nbehaves very differently across browsers and locales. Use `dateISO`\ninstead or one of the locale specific methods in `localizations/`\nand `additional-methods.js`.")),this.optional(c)||!/Invalid|NaN/.test(new Date(b).toString())}}(),dateISO:function(a,b){return this.optional(b)||/^\d{4}[\/\-](0?[1-9]|1[012])[\/\-](0?[1-9]|[12][0-9]|3[01])$/.test(a)},number:function(a,b){return this.optional(b)||/^(?:-?\d+|-?\d{1,3}(?:,\d{3})+)?(?:\.\d+)?$/.test(a)},digits:function(a,b){return this.optional(b)||/^\d+$/.test(a)},minlength:function(b,c,d){var e=a.isArray(b)?b.length:this.getLength(b,c);return this.optional(c)||e>=d},maxlength:function(b,c,d){var e=a.isArray(b)?b.length:this.getLength(b,c);return this.optional(c)||e<=d},rangelength:function(b,c,d){var e=a.isArray(b)?b.length:this.getLength(b,c);return this.optional(c)||e>=d[0]&&e<=d[1]},min:function(a,b,c){return this.optional(b)||a>=c},max:function(a,b,c){return this.optional(b)||a<=c},range:function(a,b,c){return this.optional(b)||a>=c[0]&&a<=c[1]},step:function(b,c,d){var e,f=a(c).attr("type"),g="Step attribute on input type "+f+" is not supported.",h=["text","number","range"],i=new RegExp("\\b"+f+"\\b"),j=f&&!i.test(h.join()),k=function(a){var b=(""+a).match(/(?:\.(\d+))?$/);return b&&b[1]?b[1].length:0},l=function(a){return Math.round(a*Math.pow(10,e))},m=!0;if(j)throw new Error(g);return e=k(d),(k(b)>e||l(b)%l(d)!==0)&&(m=!1),this.optional(c)||m},equalTo:function(b,c,d){var e=a(d);return this.settings.onfocusout&&e.not(".validate-equalTo-blur").length&&e.addClass("validate-equalTo-blur").on("blur.validate-equalTo",function(){a(c).valid()}),b===e.val()},remote:function(b,c,d,e){if(this.optional(c))return"dependency-mismatch";e="string"==typeof e&&e||"remote";var f,g,h,i=this.previousValue(c,e);return this.settings.messages[c.name]||(this.settings.messages[c.name]={}),i.originalMessage=i.originalMessage||this.settings.messages[c.name][e],this.settings.messages[c.name][e]=i.message,d="string"==typeof d&&{url:d}||d,h=a.param(a.extend({data:b},d.data)),i.old===h?i.valid:(i.old=h,f=this,this.startRequest(c),g={},g[c.name]=b,a.ajax(a.extend(!0,{mode:"abort",port:"validate"+c.name,dataType:"json",data:g,context:f.currentForm,success:function(a){var d,g,h,j=a===!0||"true"===a;f.settings.messages[c.name][e]=i.originalMessage,j?(h=f.formSubmitted,f.resetInternals(),f.toHide=f.errorsFor(c),f.formSubmitted=h,f.successList.push(c),f.invalid[c.name]=!1,f.showErrors()):(d={},g=a||f.defaultMessage(c,{method:e,parameters:b}),d[c.name]=i.message=g,f.invalid[c.name]=!0,f.showErrors(d)),i.valid=j,f.stopRequest(c,j)}},d)),"pending")}}});var b,c={};return a.ajaxPrefilter?a.ajaxPrefilter(function(a,b,d){var e=a.port;"abort"===a.mode&&(c[e]&&c[e].abort(),c[e]=d)}):(b=a.ajax,a.ajax=function(d){var e=("mode"in d?d:a.ajaxSettings).mode,f=("port"in d?d:a.ajaxSettings).port;return"abort"===e?(c[f]&&c[f].abort(),c[f]=b.apply(this,arguments),c[f]):b.apply(this,arguments)}),a});


/*[PATH @digikala/supernova/node_modules/jquery-validation/dist/additional-methods.js]*/
/*!
 * jQuery Validation Plugin v1.19.1
 *
 * https://jqueryvalidation.org/
 *
 * Copyright (c) 2019 Jörn Zaefferer
 * Released under the MIT license
 */
(function( factory ) {
	if ( typeof define === "function" && define.amd ) {
		define( ["jquery", "./jquery.validate"], factory );
	} else if (typeof module === "object" && module.exports) {
		module.exports = factory( require( "jquery" ) );
	} else {
		factory( jQuery );
	}
}(function( $ ) {

( function() {

	function stripHtml( value ) {

		// Remove html tags and space chars
		return value.replace( /<.[^<>]*?>/g, " " ).replace( /&nbsp;|&#160;/gi, " " )

		// Remove punctuation
		.replace( /[.(),;:!?%#$'\"_+=\/\-“”’]*/g, "" );
	}

	$.validator.addMethod( "maxWords", function( value, element, params ) {
		return this.optional( element ) || stripHtml( value ).match( /\b\w+\b/g ).length <= params;
	}, $.validator.format( "Please enter {0} words or less." ) );

	$.validator.addMethod( "minWords", function( value, element, params ) {
		return this.optional( element ) || stripHtml( value ).match( /\b\w+\b/g ).length >= params;
	}, $.validator.format( "Please enter at least {0} words." ) );

	$.validator.addMethod( "rangeWords", function( value, element, params ) {
		var valueStripped = stripHtml( value ),
			regex = /\b\w+\b/g;
		return this.optional( element ) || valueStripped.match( regex ).length >= params[ 0 ] && valueStripped.match( regex ).length <= params[ 1 ];
	}, $.validator.format( "Please enter between {0} and {1} words." ) );

}() );

/**
 * This is used in the United States to process payments, deposits,
 * or transfers using the Automated Clearing House (ACH) or Fedwire
 * systems. A very common use case would be to validate a form for
 * an ACH bill payment.
 */
$.validator.addMethod( "abaRoutingNumber", function( value ) {
	var checksum = 0;
	var tokens = value.split( "" );
	var length = tokens.length;

	// Length Check
	if ( length !== 9 ) {
		return false;
	}

	// Calc the checksum
	// https://en.wikipedia.org/wiki/ABA_routing_transit_number
	for ( var i = 0; i < length; i += 3 ) {
		checksum +=	parseInt( tokens[ i ], 10 )     * 3 +
					parseInt( tokens[ i + 1 ], 10 ) * 7 +
					parseInt( tokens[ i + 2 ], 10 );
	}

	// If not zero and divisible by 10 then valid
	if ( checksum !== 0 && checksum % 10 === 0 ) {
		return true;
	}

	return false;
}, "Please enter a valid routing number." );

// Accept a value from a file input based on a required mimetype
$.validator.addMethod( "accept", function( value, element, param ) {

	// Split mime on commas in case we have multiple types we can accept
	var typeParam = typeof param === "string" ? param.replace( /\s/g, "" ) : "image/*",
		optionalValue = this.optional( element ),
		i, file, regex;

	// Element is optional
	if ( optionalValue ) {
		return optionalValue;
	}

	if ( $( element ).attr( "type" ) === "file" ) {

		// Escape string to be used in the regex
		// see: https://stackoverflow.com/questions/3446170/escape-string-for-use-in-javascript-regex
		// Escape also "/*" as "/.*" as a wildcard
		typeParam = typeParam
				.replace( /[\-\[\]\/\{\}\(\)\+\?\.\\\^\$\|]/g, "\\$&" )
				.replace( /,/g, "|" )
				.replace( /\/\*/g, "/.*" );

		// Check if the element has a FileList before checking each file
		if ( element.files && element.files.length ) {
			regex = new RegExp( ".?(" + typeParam + ")$", "i" );
			for ( i = 0; i < element.files.length; i++ ) {
				file = element.files[ i ];

				// Grab the mimetype from the loaded file, verify it matches
				if ( !file.type.match( regex ) ) {
					return false;
				}
			}
		}
	}

	// Either return true because we've validated each file, or because the
	// browser does not support element.files and the FileList feature
	return true;
}, $.validator.format( "Please enter a value with a valid mimetype." ) );

$.validator.addMethod( "alphanumeric", function( value, element ) {
	return this.optional( element ) || /^\w+$/i.test( value );
}, "Letters, numbers, and underscores only please" );

/*
 * Dutch bank account numbers (not 'giro' numbers) have 9 digits
 * and pass the '11 check'.
 * We accept the notation with spaces, as that is common.
 * acceptable: 123456789 or 12 34 56 789
 */
$.validator.addMethod( "bankaccountNL", function( value, element ) {
	if ( this.optional( element ) ) {
		return true;
	}
	if ( !( /^[0-9]{9}|([0-9]{2} ){3}[0-9]{3}$/.test( value ) ) ) {
		return false;
	}

	// Now '11 check'
	var account = value.replace( / /g, "" ), // Remove spaces
		sum = 0,
		len = account.length,
		pos, factor, digit;
	for ( pos = 0; pos < len; pos++ ) {
		factor = len - pos;
		digit = account.substring( pos, pos + 1 );
		sum = sum + factor * digit;
	}
	return sum % 11 === 0;
}, "Please specify a valid bank account number" );

$.validator.addMethod( "bankorgiroaccountNL", function( value, element ) {
	return this.optional( element ) ||
			( $.validator.methods.bankaccountNL.call( this, value, element ) ) ||
			( $.validator.methods.giroaccountNL.call( this, value, element ) );
}, "Please specify a valid bank or giro account number" );

/**
 * BIC is the business identifier code (ISO 9362). This BIC check is not a guarantee for authenticity.
 *
 * BIC pattern: BBBBCCLLbbb (8 or 11 characters long; bbb is optional)
 *
 * Validation is case-insensitive. Please make sure to normalize input yourself.
 *
 * BIC definition in detail:
 * - First 4 characters - bank code (only letters)
 * - Next 2 characters - ISO 3166-1 alpha-2 country code (only letters)
 * - Next 2 characters - location code (letters and digits)
 *   a. shall not start with '0' or '1'
 *   b. second character must be a letter ('O' is not allowed) or digit ('0' for test (therefore not allowed), '1' denoting passive participant, '2' typically reverse-billing)
 * - Last 3 characters - branch code, optional (shall not start with 'X' except in case of 'XXX' for primary office) (letters and digits)
 */
$.validator.addMethod( "bic", function( value, element ) {
    return this.optional( element ) || /^([A-Z]{6}[A-Z2-9][A-NP-Z1-9])(X{3}|[A-WY-Z0-9][A-Z0-9]{2})?$/.test( value.toUpperCase() );
}, "Please specify a valid BIC code" );

/*
 * Código de identificación fiscal ( CIF ) is the tax identification code for Spanish legal entities
 * Further rules can be found in Spanish on http://es.wikipedia.org/wiki/C%C3%B3digo_de_identificaci%C3%B3n_fiscal
 *
 * Spanish CIF structure:
 *
 * [ T ][ P ][ P ][ N ][ N ][ N ][ N ][ N ][ C ]
 *
 * Where:
 *
 * T: 1 character. Kind of Organization Letter: [ABCDEFGHJKLMNPQRSUVW]
 * P: 2 characters. Province.
 * N: 5 characters. Secuencial Number within the province.
 * C: 1 character. Control Digit: [0-9A-J].
 *
 * [ T ]: Kind of Organizations. Possible values:
 *
 *   A. Corporations
 *   B. LLCs
 *   C. General partnerships
 *   D. Companies limited partnerships
 *   E. Communities of goods
 *   F. Cooperative Societies
 *   G. Associations
 *   H. Communities of homeowners in horizontal property regime
 *   J. Civil Societies
 *   K. Old format
 *   L. Old format
 *   M. Old format
 *   N. Nonresident entities
 *   P. Local authorities
 *   Q. Autonomous bodies, state or not, and the like, and congregations and religious institutions
 *   R. Congregations and religious institutions (since 2008 ORDER EHA/451/2008)
 *   S. Organs of State Administration and regions
 *   V. Agrarian Transformation
 *   W. Permanent establishments of non-resident in Spain
 *
 * [ C ]: Control Digit. It can be a number or a letter depending on T value:
 * [ T ]  -->  [ C ]
 * ------    ----------
 *   A         Number
 *   B         Number
 *   E         Number
 *   H         Number
 *   K         Letter
 *   P         Letter
 *   Q         Letter
 *   S         Letter
 *
 */
$.validator.addMethod( "cifES", function( value, element ) {
	"use strict";

	if ( this.optional( element ) ) {
		return true;
	}

	var cifRegEx = new RegExp( /^([ABCDEFGHJKLMNPQRSUVW])(\d{7})([0-9A-J])$/gi );
	var letter  = value.substring( 0, 1 ), // [ T ]
		number  = value.substring( 1, 8 ), // [ P ][ P ][ N ][ N ][ N ][ N ][ N ]
		control = value.substring( 8, 9 ), // [ C ]
		all_sum = 0,
		even_sum = 0,
		odd_sum = 0,
		i, n,
		control_digit,
		control_letter;

	function isOdd( n ) {
		return n % 2 === 0;
	}

	// Quick format test
	if ( value.length !== 9 || !cifRegEx.test( value ) ) {
		return false;
	}

	for ( i = 0; i < number.length; i++ ) {
		n = parseInt( number[ i ], 10 );

		// Odd positions
		if ( isOdd( i ) ) {

			// Odd positions are multiplied first.
			n *= 2;

			// If the multiplication is bigger than 10 we need to adjust
			odd_sum += n < 10 ? n : n - 9;

		// Even positions
		// Just sum them
		} else {
			even_sum += n;
		}
	}

	all_sum = even_sum + odd_sum;
	control_digit = ( 10 - ( all_sum ).toString().substr( -1 ) ).toString();
	control_digit = parseInt( control_digit, 10 ) > 9 ? "0" : control_digit;
	control_letter = "JABCDEFGHI".substr( control_digit, 1 ).toString();

	// Control must be a digit
	if ( letter.match( /[ABEH]/ ) ) {
		return control === control_digit;

	// Control must be a letter
	} else if ( letter.match( /[KPQS]/ ) ) {
		return control === control_letter;
	}

	// Can be either
	return control === control_digit || control === control_letter;

}, "Please specify a valid CIF number." );

/*
 * Brazillian CNH number (Carteira Nacional de Habilitacao) is the License Driver number.
 * CNH numbers have 11 digits in total: 9 numbers followed by 2 check numbers that are being used for validation.
 */
$.validator.addMethod( "cnhBR", function( value ) {

  // Removing special characters from value
  value = value.replace( /([~!@#$%^&*()_+=`{}\[\]\-|\\:;'<>,.\/? ])+/g, "" );

  // Checking value to have 11 digits only
  if ( value.length !== 11 ) {
    return false;
  }

  var sum = 0, dsc = 0, firstChar,
		firstCN, secondCN, i, j, v;

  firstChar = value.charAt( 0 );

  if ( new Array( 12 ).join( firstChar ) === value ) {
    return false;
  }

  // Step 1 - using first Check Number:
  for ( i = 0, j = 9, v = 0; i < 9; ++i, --j ) {
    sum += +( value.charAt( i ) * j );
  }

  firstCN = sum % 11;
  if ( firstCN >= 10 ) {
    firstCN = 0;
    dsc = 2;
  }

  sum = 0;
  for ( i = 0, j = 1, v = 0; i < 9; ++i, ++j ) {
    sum += +( value.charAt( i ) * j );
  }

  secondCN = sum % 11;
  if ( secondCN >= 10 ) {
    secondCN = 0;
  } else {
    secondCN = secondCN - dsc;
  }

  return ( String( firstCN ).concat( secondCN ) === value.substr( -2 ) );

}, "Please specify a valid CNH number" );

/*
 * Brazillian value number (Cadastrado de Pessoas Juridica).
 * value numbers have 14 digits in total: 12 numbers followed by 2 check numbers that are being used for validation.
 */
$.validator.addMethod( "cnpjBR", function( value, element ) {
	"use strict";

	if ( this.optional( element ) ) {
		return true;
	}

	// Removing no number
	value = value.replace( /[^\d]+/g, "" );

	// Checking value to have 14 digits only
	if ( value.length !== 14 ) {
		return false;
	}

	// Elimina values invalidos conhecidos
	if ( value === "00000000000000" ||
		value === "11111111111111" ||
		value === "22222222222222" ||
		value === "33333333333333" ||
		value === "44444444444444" ||
		value === "55555555555555" ||
		value === "66666666666666" ||
		value === "77777777777777" ||
		value === "88888888888888" ||
		value === "99999999999999" ) {
		return false;
	}

	// Valida DVs
	var tamanho = ( value.length - 2 );
	var numeros = value.substring( 0, tamanho );
	var digitos = value.substring( tamanho );
	var soma = 0;
	var pos = tamanho - 7;

	for ( var i = tamanho; i >= 1; i-- ) {
		soma += numeros.charAt( tamanho - i ) * pos--;
		if ( pos < 2 ) {
			pos = 9;
		}
	}

	var resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;

	if ( resultado !== parseInt( digitos.charAt( 0 ), 10 ) ) {
		return false;
	}

	tamanho = tamanho + 1;
	numeros = value.substring( 0, tamanho );
	soma = 0;
	pos = tamanho - 7;

	for ( var il = tamanho; il >= 1; il-- ) {
		soma += numeros.charAt( tamanho - il ) * pos--;
		if ( pos < 2 ) {
			pos = 9;
		}
	}

	resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;

	if ( resultado !== parseInt( digitos.charAt( 1 ), 10 ) ) {
		return false;
	}

	return true;

}, "Please specify a CNPJ value number" );

/*
 * Brazillian CPF number (Cadastrado de Pessoas Físicas) is the equivalent of a Brazilian tax registration number.
 * CPF numbers have 11 digits in total: 9 numbers followed by 2 check numbers that are being used for validation.
 */
$.validator.addMethod( "cpfBR", function( value, element ) {
	"use strict";

	if ( this.optional( element ) ) {
		return true;
	}

	// Removing special characters from value
	value = value.replace( /([~!@#$%^&*()_+=`{}\[\]\-|\\:;'<>,.\/? ])+/g, "" );

	// Checking value to have 11 digits only
	if ( value.length !== 11 ) {
		return false;
	}

	var sum = 0,
		firstCN, secondCN, checkResult, i;

	firstCN = parseInt( value.substring( 9, 10 ), 10 );
	secondCN = parseInt( value.substring( 10, 11 ), 10 );

	checkResult = function( sum, cn ) {
		var result = ( sum * 10 ) % 11;
		if ( ( result === 10 ) || ( result === 11 ) ) {
			result = 0;
		}
		return ( result === cn );
	};

	// Checking for dump data
	if ( value === "" ||
		value === "00000000000" ||
		value === "11111111111" ||
		value === "22222222222" ||
		value === "33333333333" ||
		value === "44444444444" ||
		value === "55555555555" ||
		value === "66666666666" ||
		value === "77777777777" ||
		value === "88888888888" ||
		value === "99999999999"
	) {
		return false;
	}

	// Step 1 - using first Check Number:
	for ( i = 1; i <= 9; i++ ) {
		sum = sum + parseInt( value.substring( i - 1, i ), 10 ) * ( 11 - i );
	}

	// If first Check Number (CN) is valid, move to Step 2 - using second Check Number:
	if ( checkResult( sum, firstCN ) ) {
		sum = 0;
		for ( i = 1; i <= 10; i++ ) {
			sum = sum + parseInt( value.substring( i - 1, i ), 10 ) * ( 12 - i );
		}
		return checkResult( sum, secondCN );
	}
	return false;

}, "Please specify a valid CPF number" );

// https://jqueryvalidation.org/creditcard-method/
// based on https://en.wikipedia.org/wiki/Luhn_algorithm
$.validator.addMethod( "creditcard", function( value, element ) {
	if ( this.optional( element ) ) {
		return "dependency-mismatch";
	}

	// Accept only spaces, digits and dashes
	if ( /[^0-9 \-]+/.test( value ) ) {
		return false;
	}

	var nCheck = 0,
		nDigit = 0,
		bEven = false,
		n, cDigit;

	value = value.replace( /\D/g, "" );

	// Basing min and max length on
	// https://dev.ean.com/general-info/valid-card-types/
	if ( value.length < 13 || value.length > 19 ) {
		return false;
	}

	for ( n = value.length - 1; n >= 0; n-- ) {
		cDigit = value.charAt( n );
		nDigit = parseInt( cDigit, 10 );
		if ( bEven ) {
			if ( ( nDigit *= 2 ) > 9 ) {
				nDigit -= 9;
			}
		}

		nCheck += nDigit;
		bEven = !bEven;
	}

	return ( nCheck % 10 ) === 0;
}, "Please enter a valid credit card number." );

/* NOTICE: Modified version of Castle.Components.Validator.CreditCardValidator
 * Redistributed under the Apache License 2.0 at http://www.apache.org/licenses/LICENSE-2.0
 * Valid Types: mastercard, visa, amex, dinersclub, enroute, discover, jcb, unknown, all (overrides all other settings)
 */
$.validator.addMethod( "creditcardtypes", function( value, element, param ) {
	if ( /[^0-9\-]+/.test( value ) ) {
		return false;
	}

	value = value.replace( /\D/g, "" );

	var validTypes = 0x0000;

	if ( param.mastercard ) {
		validTypes |= 0x0001;
	}
	if ( param.visa ) {
		validTypes |= 0x0002;
	}
	if ( param.amex ) {
		validTypes |= 0x0004;
	}
	if ( param.dinersclub ) {
		validTypes |= 0x0008;
	}
	if ( param.enroute ) {
		validTypes |= 0x0010;
	}
	if ( param.discover ) {
		validTypes |= 0x0020;
	}
	if ( param.jcb ) {
		validTypes |= 0x0040;
	}
	if ( param.unknown ) {
		validTypes |= 0x0080;
	}
	if ( param.all ) {
		validTypes = 0x0001 | 0x0002 | 0x0004 | 0x0008 | 0x0010 | 0x0020 | 0x0040 | 0x0080;
	}
	if ( validTypes & 0x0001 && ( /^(5[12345])/.test( value ) || /^(2[234567])/.test( value ) ) ) { // Mastercard
		return value.length === 16;
	}
	if ( validTypes & 0x0002 && /^(4)/.test( value ) ) { // Visa
		return value.length === 16;
	}
	if ( validTypes & 0x0004 && /^(3[47])/.test( value ) ) { // Amex
		return value.length === 15;
	}
	if ( validTypes & 0x0008 && /^(3(0[012345]|[68]))/.test( value ) ) { // Dinersclub
		return value.length === 14;
	}
	if ( validTypes & 0x0010 && /^(2(014|149))/.test( value ) ) { // Enroute
		return value.length === 15;
	}
	if ( validTypes & 0x0020 && /^(6011)/.test( value ) ) { // Discover
		return value.length === 16;
	}
	if ( validTypes & 0x0040 && /^(3)/.test( value ) ) { // Jcb
		return value.length === 16;
	}
	if ( validTypes & 0x0040 && /^(2131|1800)/.test( value ) ) { // Jcb
		return value.length === 15;
	}
	if ( validTypes & 0x0080 ) { // Unknown
		return true;
	}
	return false;
}, "Please enter a valid credit card number." );

/**
 * Validates currencies with any given symbols by @jameslouiz
 * Symbols can be optional or required. Symbols required by default
 *
 * Usage examples:
 *  currency: ["£", false] - Use false for soft currency validation
 *  currency: ["$", false]
 *  currency: ["RM", false] - also works with text based symbols such as "RM" - Malaysia Ringgit etc
 *
 *  <input class="currencyInput" name="currencyInput">
 *
 * Soft symbol checking
 *  currencyInput: {
 *     currency: ["$", false]
 *  }
 *
 * Strict symbol checking (default)
 *  currencyInput: {
 *     currency: "$"
 *     //OR
 *     currency: ["$", true]
 *  }
 *
 * Multiple Symbols
 *  currencyInput: {
 *     currency: "$,£,¢"
 *  }
 */
$.validator.addMethod( "currency", function( value, element, param ) {
    var isParamString = typeof param === "string",
        symbol = isParamString ? param : param[ 0 ],
        soft = isParamString ? true : param[ 1 ],
        regex;

    symbol = symbol.replace( /,/g, "" );
    symbol = soft ? symbol + "]" : symbol + "]?";
    regex = "^[" + symbol + "([1-9]{1}[0-9]{0,2}(\\,[0-9]{3})*(\\.[0-9]{0,2})?|[1-9]{1}[0-9]{0,}(\\.[0-9]{0,2})?|0(\\.[0-9]{0,2})?|(\\.[0-9]{1,2})?)$";
    regex = new RegExp( regex );
    return this.optional( element ) || regex.test( value );

}, "Please specify a valid currency" );

$.validator.addMethod( "dateFA", function( value, element ) {
	return this.optional( element ) || /^[1-4]\d{3}\/((0?[1-6]\/((3[0-1])|([1-2][0-9])|(0?[1-9])))|((1[0-2]|(0?[7-9]))\/(30|([1-2][0-9])|(0?[1-9]))))$/.test( value );
}, $.validator.messages.date );

/**
 * Return true, if the value is a valid date, also making this formal check dd/mm/yyyy.
 *
 * @example $.validator.methods.date("01/01/1900")
 * @result true
 *
 * @example $.validator.methods.date("01/13/1990")
 * @result false
 *
 * @example $.validator.methods.date("01.01.1900")
 * @result false
 *
 * @example <input name="pippo" class="{dateITA:true}" />
 * @desc Declares an optional input element whose value must be a valid date.
 *
 * @name $.validator.methods.dateITA
 * @type Boolean
 * @cat Plugins/Validate/Methods
 */
$.validator.addMethod( "dateITA", function( value, element ) {
	var check = false,
		re = /^\d{1,2}\/\d{1,2}\/\d{4}$/,
		adata, gg, mm, aaaa, xdata;
	if ( re.test( value ) ) {
		adata = value.split( "/" );
		gg = parseInt( adata[ 0 ], 10 );
		mm = parseInt( adata[ 1 ], 10 );
		aaaa = parseInt( adata[ 2 ], 10 );
		xdata = new Date( Date.UTC( aaaa, mm - 1, gg, 12, 0, 0, 0 ) );
		if ( ( xdata.getUTCFullYear() === aaaa ) && ( xdata.getUTCMonth() === mm - 1 ) && ( xdata.getUTCDate() === gg ) ) {
			check = true;
		} else {
			check = false;
		}
	} else {
		check = false;
	}
	return this.optional( element ) || check;
}, $.validator.messages.date );

$.validator.addMethod( "dateNL", function( value, element ) {
	return this.optional( element ) || /^(0?[1-9]|[12]\d|3[01])[\.\/\-](0?[1-9]|1[012])[\.\/\-]([12]\d)?(\d\d)$/.test( value );
}, $.validator.messages.date );

// Older "accept" file extension method. Old docs: http://docs.jquery.com/Plugins/Validation/Methods/accept
$.validator.addMethod( "extension", function( value, element, param ) {
	param = typeof param === "string" ? param.replace( /,/g, "|" ) : "png|jpe?g|gif";
	return this.optional( element ) || value.match( new RegExp( "\\.(" + param + ")$", "i" ) );
}, $.validator.format( "Please enter a value with a valid extension." ) );

/**
 * Dutch giro account numbers (not bank numbers) have max 7 digits
 */
$.validator.addMethod( "giroaccountNL", function( value, element ) {
	return this.optional( element ) || /^[0-9]{1,7}$/.test( value );
}, "Please specify a valid giro account number" );

$.validator.addMethod( "greaterThan", function( value, element, param ) {
    var target = $( param );

    if ( this.settings.onfocusout && target.not( ".validate-greaterThan-blur" ).length ) {
        target.addClass( "validate-greaterThan-blur" ).on( "blur.validate-greaterThan", function() {
            $( element ).valid();
        } );
    }

    return value > target.val();
}, "Please enter a greater value." );

$.validator.addMethod( "greaterThanEqual", function( value, element, param ) {
    var target = $( param );

    if ( this.settings.onfocusout && target.not( ".validate-greaterThanEqual-blur" ).length ) {
        target.addClass( "validate-greaterThanEqual-blur" ).on( "blur.validate-greaterThanEqual", function() {
            $( element ).valid();
        } );
    }

    return value >= target.val();
}, "Please enter a greater value." );

/**
 * IBAN is the international bank account number.
 * It has a country - specific format, that is checked here too
 *
 * Validation is case-insensitive. Please make sure to normalize input yourself.
 */
$.validator.addMethod( "iban", function( value, element ) {

	// Some quick simple tests to prevent needless work
	if ( this.optional( element ) ) {
		return true;
	}

	// Remove spaces and to upper case
	var iban = value.replace( / /g, "" ).toUpperCase(),
		ibancheckdigits = "",
		leadingZeroes = true,
		cRest = "",
		cOperator = "",
		countrycode, ibancheck, charAt, cChar, bbanpattern, bbancountrypatterns, ibanregexp, i, p;

	// Check for IBAN code length.
	// It contains:
	// country code ISO 3166-1 - two letters,
	// two check digits,
	// Basic Bank Account Number (BBAN) - up to 30 chars
	var minimalIBANlength = 5;
	if ( iban.length < minimalIBANlength ) {
		return false;
	}

	// Check the country code and find the country specific format
	countrycode = iban.substring( 0, 2 );
	bbancountrypatterns = {
		"AL": "\\d{8}[\\dA-Z]{16}",
		"AD": "\\d{8}[\\dA-Z]{12}",
		"AT": "\\d{16}",
		"AZ": "[\\dA-Z]{4}\\d{20}",
		"BE": "\\d{12}",
		"BH": "[A-Z]{4}[\\dA-Z]{14}",
		"BA": "\\d{16}",
		"BR": "\\d{23}[A-Z][\\dA-Z]",
		"BG": "[A-Z]{4}\\d{6}[\\dA-Z]{8}",
		"CR": "\\d{17}",
		"HR": "\\d{17}",
		"CY": "\\d{8}[\\dA-Z]{16}",
		"CZ": "\\d{20}",
		"DK": "\\d{14}",
		"DO": "[A-Z]{4}\\d{20}",
		"EE": "\\d{16}",
		"FO": "\\d{14}",
		"FI": "\\d{14}",
		"FR": "\\d{10}[\\dA-Z]{11}\\d{2}",
		"GE": "[\\dA-Z]{2}\\d{16}",
		"DE": "\\d{18}",
		"GI": "[A-Z]{4}[\\dA-Z]{15}",
		"GR": "\\d{7}[\\dA-Z]{16}",
		"GL": "\\d{14}",
		"GT": "[\\dA-Z]{4}[\\dA-Z]{20}",
		"HU": "\\d{24}",
		"IS": "\\d{22}",
		"IE": "[\\dA-Z]{4}\\d{14}",
		"IL": "\\d{19}",
		"IT": "[A-Z]\\d{10}[\\dA-Z]{12}",
		"KZ": "\\d{3}[\\dA-Z]{13}",
		"KW": "[A-Z]{4}[\\dA-Z]{22}",
		"LV": "[A-Z]{4}[\\dA-Z]{13}",
		"LB": "\\d{4}[\\dA-Z]{20}",
		"LI": "\\d{5}[\\dA-Z]{12}",
		"LT": "\\d{16}",
		"LU": "\\d{3}[\\dA-Z]{13}",
		"MK": "\\d{3}[\\dA-Z]{10}\\d{2}",
		"MT": "[A-Z]{4}\\d{5}[\\dA-Z]{18}",
		"MR": "\\d{23}",
		"MU": "[A-Z]{4}\\d{19}[A-Z]{3}",
		"MC": "\\d{10}[\\dA-Z]{11}\\d{2}",
		"MD": "[\\dA-Z]{2}\\d{18}",
		"ME": "\\d{18}",
		"NL": "[A-Z]{4}\\d{10}",
		"NO": "\\d{11}",
		"PK": "[\\dA-Z]{4}\\d{16}",
		"PS": "[\\dA-Z]{4}\\d{21}",
		"PL": "\\d{24}",
		"PT": "\\d{21}",
		"RO": "[A-Z]{4}[\\dA-Z]{16}",
		"SM": "[A-Z]\\d{10}[\\dA-Z]{12}",
		"SA": "\\d{2}[\\dA-Z]{18}",
		"RS": "\\d{18}",
		"SK": "\\d{20}",
		"SI": "\\d{15}",
		"ES": "\\d{20}",
		"SE": "\\d{20}",
		"CH": "\\d{5}[\\dA-Z]{12}",
		"TN": "\\d{20}",
		"TR": "\\d{5}[\\dA-Z]{17}",
		"AE": "\\d{3}\\d{16}",
		"GB": "[A-Z]{4}\\d{14}",
		"VG": "[\\dA-Z]{4}\\d{16}"
	};

	bbanpattern = bbancountrypatterns[ countrycode ];

	// As new countries will start using IBAN in the
	// future, we only check if the countrycode is known.
	// This prevents false negatives, while almost all
	// false positives introduced by this, will be caught
	// by the checksum validation below anyway.
	// Strict checking should return FALSE for unknown
	// countries.
	if ( typeof bbanpattern !== "undefined" ) {
		ibanregexp = new RegExp( "^[A-Z]{2}\\d{2}" + bbanpattern + "$", "" );
		if ( !( ibanregexp.test( iban ) ) ) {
			return false; // Invalid country specific format
		}
	}

	// Now check the checksum, first convert to digits
	ibancheck = iban.substring( 4, iban.length ) + iban.substring( 0, 4 );
	for ( i = 0; i < ibancheck.length; i++ ) {
		charAt = ibancheck.charAt( i );
		if ( charAt !== "0" ) {
			leadingZeroes = false;
		}
		if ( !leadingZeroes ) {
			ibancheckdigits += "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ".indexOf( charAt );
		}
	}

	// Calculate the result of: ibancheckdigits % 97
	for ( p = 0; p < ibancheckdigits.length; p++ ) {
		cChar = ibancheckdigits.charAt( p );
		cOperator = "" + cRest + "" + cChar;
		cRest = cOperator % 97;
	}
	return cRest === 1;
}, "Please specify a valid IBAN" );

$.validator.addMethod( "integer", function( value, element ) {
	return this.optional( element ) || /^-?\d+$/.test( value );
}, "A positive or negative non-decimal number please" );

$.validator.addMethod( "ipv4", function( value, element ) {
	return this.optional( element ) || /^(25[0-5]|2[0-4]\d|[01]?\d\d?)\.(25[0-5]|2[0-4]\d|[01]?\d\d?)\.(25[0-5]|2[0-4]\d|[01]?\d\d?)\.(25[0-5]|2[0-4]\d|[01]?\d\d?)$/i.test( value );
}, "Please enter a valid IP v4 address." );

$.validator.addMethod( "ipv6", function( value, element ) {
	return this.optional( element ) || /^((([0-9A-Fa-f]{1,4}:){7}[0-9A-Fa-f]{1,4})|(([0-9A-Fa-f]{1,4}:){6}:[0-9A-Fa-f]{1,4})|(([0-9A-Fa-f]{1,4}:){5}:([0-9A-Fa-f]{1,4}:)?[0-9A-Fa-f]{1,4})|(([0-9A-Fa-f]{1,4}:){4}:([0-9A-Fa-f]{1,4}:){0,2}[0-9A-Fa-f]{1,4})|(([0-9A-Fa-f]{1,4}:){3}:([0-9A-Fa-f]{1,4}:){0,3}[0-9A-Fa-f]{1,4})|(([0-9A-Fa-f]{1,4}:){2}:([0-9A-Fa-f]{1,4}:){0,4}[0-9A-Fa-f]{1,4})|(([0-9A-Fa-f]{1,4}:){6}((\b((25[0-5])|(1\d{2})|(2[0-4]\d)|(\d{1,2}))\b)\.){3}(\b((25[0-5])|(1\d{2})|(2[0-4]\d)|(\d{1,2}))\b))|(([0-9A-Fa-f]{1,4}:){0,5}:((\b((25[0-5])|(1\d{2})|(2[0-4]\d)|(\d{1,2}))\b)\.){3}(\b((25[0-5])|(1\d{2})|(2[0-4]\d)|(\d{1,2}))\b))|(::([0-9A-Fa-f]{1,4}:){0,5}((\b((25[0-5])|(1\d{2})|(2[0-4]\d)|(\d{1,2}))\b)\.){3}(\b((25[0-5])|(1\d{2})|(2[0-4]\d)|(\d{1,2}))\b))|([0-9A-Fa-f]{1,4}::([0-9A-Fa-f]{1,4}:){0,5}[0-9A-Fa-f]{1,4})|(::([0-9A-Fa-f]{1,4}:){0,6}[0-9A-Fa-f]{1,4})|(([0-9A-Fa-f]{1,4}:){1,7}:))$/i.test( value );
}, "Please enter a valid IP v6 address." );

$.validator.addMethod( "lessThan", function( value, element, param ) {
    var target = $( param );

    if ( this.settings.onfocusout && target.not( ".validate-lessThan-blur" ).length ) {
        target.addClass( "validate-lessThan-blur" ).on( "blur.validate-lessThan", function() {
            $( element ).valid();
        } );
    }

    return value < target.val();
}, "Please enter a lesser value." );

$.validator.addMethod( "lessThanEqual", function( value, element, param ) {
    var target = $( param );

    if ( this.settings.onfocusout && target.not( ".validate-lessThanEqual-blur" ).length ) {
        target.addClass( "validate-lessThanEqual-blur" ).on( "blur.validate-lessThanEqual", function() {
            $( element ).valid();
        } );
    }

    return value <= target.val();
}, "Please enter a lesser value." );

$.validator.addMethod( "lettersonly", function( value, element ) {
	return this.optional( element ) || /^[a-z]+$/i.test( value );
}, "Letters only please" );

$.validator.addMethod( "letterswithbasicpunc", function( value, element ) {
	return this.optional( element ) || /^[a-z\-.,()'"\s]+$/i.test( value );
}, "Letters or punctuation only please" );

// Limit the number of files in a FileList.
$.validator.addMethod( "maxfiles", function( value, element, param ) {
	if ( this.optional( element ) ) {
		return true;
	}

	if ( $( element ).attr( "type" ) === "file" ) {
		if ( element.files && element.files.length > param ) {
			return false;
		}
	}

	return true;
}, $.validator.format( "Please select no more than {0} files." ) );

// Limit the size of each individual file in a FileList.
$.validator.addMethod( "maxsize", function( value, element, param ) {
	if ( this.optional( element ) ) {
		return true;
	}

	if ( $( element ).attr( "type" ) === "file" ) {
		if ( element.files && element.files.length ) {
			for ( var i = 0; i < element.files.length; i++ ) {
				if ( element.files[ i ].size > param ) {
					return false;
				}
			}
		}
	}

	return true;
}, $.validator.format( "File size must not exceed {0} bytes each." ) );

// Limit the size of all files in a FileList.
$.validator.addMethod( "maxsizetotal", function( value, element, param ) {
	if ( this.optional( element ) ) {
		return true;
	}

	if ( $( element ).attr( "type" ) === "file" ) {
		if ( element.files && element.files.length ) {
			var totalSize = 0;

			for ( var i = 0; i < element.files.length; i++ ) {
				totalSize += element.files[ i ].size;
				if ( totalSize > param ) {
					return false;
				}
			}
		}
	}

	return true;
}, $.validator.format( "Total size of all files must not exceed {0} bytes." ) );


$.validator.addMethod( "mobileNL", function( value, element ) {
	return this.optional( element ) || /^((\+|00(\s|\s?\-\s?)?)31(\s|\s?\-\s?)?(\(0\)[\-\s]?)?|0)6((\s|\s?\-\s?)?[0-9]){8}$/.test( value );
}, "Please specify a valid mobile number" );

$.validator.addMethod( "mobileRU", function( phone_number, element ) {
	var ruPhone_number = phone_number.replace( /\(|\)|\s+|-/g, "" );
	return this.optional( element ) || ruPhone_number.length > 9 && /^((\+7|7|8)+([0-9]){10})$/.test( ruPhone_number );
}, "Please specify a valid mobile number" );

/* For UK phone functions, do the following server side processing:
 * Compare original input with this RegEx pattern:
 * ^\(?(?:(?:00\)?[\s\-]?\(?|\+)(44)\)?[\s\-]?\(?(?:0\)?[\s\-]?\(?)?|0)([1-9]\d{1,4}\)?[\s\d\-]+)$
 * Extract $1 and set $prefix to '+44<space>' if $1 is '44', otherwise set $prefix to '0'
 * Extract $2 and remove hyphens, spaces and parentheses. Phone number is combined $prefix and $2.
 * A number of very detailed GB telephone number RegEx patterns can also be found at:
 * http://www.aa-asterisk.org.uk/index.php/Regular_Expressions_for_Validating_and_Formatting_GB_Telephone_Numbers
 */
$.validator.addMethod( "mobileUK", function( phone_number, element ) {
	phone_number = phone_number.replace( /\(|\)|\s+|-/g, "" );
	return this.optional( element ) || phone_number.length > 9 &&
		phone_number.match( /^(?:(?:(?:00\s?|\+)44\s?|0)7(?:[1345789]\d{2}|624)\s?\d{3}\s?\d{3})$/ );
}, "Please specify a valid mobile number" );

$.validator.addMethod( "netmask", function( value, element ) {
    return this.optional( element ) || /^(254|252|248|240|224|192|128)\.0\.0\.0|255\.(254|252|248|240|224|192|128|0)\.0\.0|255\.255\.(254|252|248|240|224|192|128|0)\.0|255\.255\.255\.(254|252|248|240|224|192|128|0)/i.test( value );
}, "Please enter a valid netmask." );

/*
 * The NIE (Número de Identificación de Extranjero) is a Spanish tax identification number assigned by the Spanish
 * authorities to any foreigner.
 *
 * The NIE is the equivalent of a Spaniards Número de Identificación Fiscal (NIF) which serves as a fiscal
 * identification number. The CIF number (Certificado de Identificación Fiscal) is equivalent to the NIF, but applies to
 * companies rather than individuals. The NIE consists of an 'X' or 'Y' followed by 7 or 8 digits then another letter.
 */
$.validator.addMethod( "nieES", function( value, element ) {
	"use strict";

	if ( this.optional( element ) ) {
		return true;
	}

	var nieRegEx = new RegExp( /^[MXYZ]{1}[0-9]{7,8}[TRWAGMYFPDXBNJZSQVHLCKET]{1}$/gi );
	var validChars = "TRWAGMYFPDXBNJZSQVHLCKET",
		letter = value.substr( value.length - 1 ).toUpperCase(),
		number;

	value = value.toString().toUpperCase();

	// Quick format test
	if ( value.length > 10 || value.length < 9 || !nieRegEx.test( value ) ) {
		return false;
	}

	// X means same number
	// Y means number + 10000000
	// Z means number + 20000000
	value = value.replace( /^[X]/, "0" )
		.replace( /^[Y]/, "1" )
		.replace( /^[Z]/, "2" );

	number = value.length === 9 ? value.substr( 0, 8 ) : value.substr( 0, 9 );

	return validChars.charAt( parseInt( number, 10 ) % 23 ) === letter;

}, "Please specify a valid NIE number." );

/*
 * The Número de Identificación Fiscal ( NIF ) is the way tax identification used in Spain for individuals
 */
$.validator.addMethod( "nifES", function( value, element ) {
	"use strict";

	if ( this.optional( element ) ) {
		return true;
	}

	value = value.toUpperCase();

	// Basic format test
	if ( !value.match( "((^[A-Z]{1}[0-9]{7}[A-Z0-9]{1}$|^[T]{1}[A-Z0-9]{8}$)|^[0-9]{8}[A-Z]{1}$)" ) ) {
		return false;
	}

	// Test NIF
	if ( /^[0-9]{8}[A-Z]{1}$/.test( value ) ) {
		return ( "TRWAGMYFPDXBNJZSQVHLCKE".charAt( value.substring( 8, 0 ) % 23 ) === value.charAt( 8 ) );
	}

	// Test specials NIF (starts with K, L or M)
	if ( /^[KLM]{1}/.test( value ) ) {
		return ( value[ 8 ] === "TRWAGMYFPDXBNJZSQVHLCKE".charAt( value.substring( 8, 1 ) % 23 ) );
	}

	return false;

}, "Please specify a valid NIF number." );

/*
 * Numer identyfikacji podatkowej ( NIP ) is the way tax identification used in Poland for companies
 */
$.validator.addMethod( "nipPL", function( value ) {
	"use strict";

	value = value.replace( /[^0-9]/g, "" );

	if ( value.length !== 10 ) {
		return false;
	}

	var arrSteps = [ 6, 5, 7, 2, 3, 4, 5, 6, 7 ];
	var intSum = 0;
	for ( var i = 0; i < 9; i++ ) {
		intSum += arrSteps[ i ] * value[ i ];
	}
	var int2 = intSum % 11;
	var intControlNr = ( int2 === 10 ) ? 0 : int2;

	return ( intControlNr === parseInt( value[ 9 ], 10 ) );
}, "Please specify a valid NIP number." );

/**
 * Created for project jquery-validation.
 * @Description Brazillian PIS or NIS number (Número de Identificação Social Pis ou Pasep) is the equivalent of a
 * Brazilian tax registration number NIS of PIS numbers have 11 digits in total: 10 numbers followed by 1 check numbers
 * that are being used for validation.
 * @copyright (c) 21/08/2018 13:14, Cleiton da Silva Mendonça
 * @author Cleiton da Silva Mendonça <cleiton.mendonca@gmail.com>
 * @link http://gitlab.com/csmendonca Gitlab of Cleiton da Silva Mendonça
 * @link http://github.com/csmendonca Github of Cleiton da Silva Mendonça
 */
$.validator.addMethod( "nisBR", function( value ) {
	var number;
	var cn;
	var sum = 0;
	var dv;
	var count;
	var multiplier;

	// Removing special characters from value
	value = value.replace( /([~!@#$%^&*()_+=`{}\[\]\-|\\:;'<>,.\/? ])+/g, "" );

	// Checking value to have 11 digits only
	if ( value.length !== 11 ) {
		return false;
	}

	//Get check number of value
	cn = parseInt( value.substring( 10, 11 ), 10 );

	//Get number with 10 digits of the value
	number = parseInt( value.substring( 0, 10 ), 10 );

	for ( count = 2; count < 12; count++ ) {
		multiplier = count;
		if ( count === 10 ) {
			multiplier = 2;
		}
		if ( count === 11 ) {
			multiplier = 3;
		}
		sum += ( ( number % 10 ) * multiplier );
		number = parseInt( number / 10, 10 );
	}
	dv = ( sum % 11 );

	if ( dv > 1 ) {
		dv = ( 11 - dv );
	} else {
		dv = 0;
	}

	if ( cn === dv ) {
		return true;
	} else {
		return false;
	}
}, "Please specify a valid NIS/PIS number" );

$.validator.addMethod( "notEqualTo", function( value, element, param ) {
	return this.optional( element ) || !$.validator.methods.equalTo.call( this, value, element, param );
}, "Please enter a different value, values must not be the same." );

$.validator.addMethod( "nowhitespace", function( value, element ) {
	return this.optional( element ) || /^\S+$/i.test( value );
}, "No white space please" );

/**
* Return true if the field value matches the given format RegExp
*
* @example $.validator.methods.pattern("AR1004",element,/^AR\d{4}$/)
* @result true
*
* @example $.validator.methods.pattern("BR1004",element,/^AR\d{4}$/)
* @result false
*
* @name $.validator.methods.pattern
* @type Boolean
* @cat Plugins/Validate/Methods
*/
$.validator.addMethod( "pattern", function( value, element, param ) {
	if ( this.optional( element ) ) {
		return true;
	}
	if ( typeof param === "string" ) {
		param = new RegExp( "^(?:" + param + ")$" );
	}
	return param.test( value );
}, "Invalid format." );

/**
 * Dutch phone numbers have 10 digits (or 11 and start with +31).
 */
$.validator.addMethod( "phoneNL", function( value, element ) {
	return this.optional( element ) || /^((\+|00(\s|\s?\-\s?)?)31(\s|\s?\-\s?)?(\(0\)[\-\s]?)?|0)[1-9]((\s|\s?\-\s?)?[0-9]){8}$/.test( value );
}, "Please specify a valid phone number." );

/**
 * Polish telephone numbers have 9 digits.
 *
 * Mobile phone numbers starts with following digits:
 * 45, 50, 51, 53, 57, 60, 66, 69, 72, 73, 78, 79, 88.
 *
 * Fixed-line numbers starts with area codes:
 * 12, 13, 14, 15, 16, 17, 18, 22, 23, 24, 25, 29, 32, 33,
 * 34, 41, 42, 43, 44, 46, 48, 52, 54, 55, 56, 58, 59, 61,
 * 62, 63, 65, 67, 68, 71, 74, 75, 76, 77, 81, 82, 83, 84,
 * 85, 86, 87, 89, 91, 94, 95.
 *
 * Ministry of National Defence numbers and VoIP numbers starts with 26 and 39.
 *
 * Excludes intelligent networks (premium rate, shared cost, free phone numbers).
 *
 * Poland National Numbering Plan http://www.itu.int/oth/T02020000A8/en
 */
$.validator.addMethod( "phonePL", function( phone_number, element ) {
	phone_number = phone_number.replace( /\s+/g, "" );
	var regexp = /^(?:(?:(?:\+|00)?48)|(?:\(\+?48\)))?(?:1[2-8]|2[2-69]|3[2-49]|4[1-68]|5[0-9]|6[0-35-9]|[7-8][1-9]|9[145])\d{7}$/;
	return this.optional( element ) || regexp.test( phone_number );
}, "Please specify a valid phone number" );

/* For UK phone functions, do the following server side processing:
 * Compare original input with this RegEx pattern:
 * ^\(?(?:(?:00\)?[\s\-]?\(?|\+)(44)\)?[\s\-]?\(?(?:0\)?[\s\-]?\(?)?|0)([1-9]\d{1,4}\)?[\s\d\-]+)$
 * Extract $1 and set $prefix to '+44<space>' if $1 is '44', otherwise set $prefix to '0'
 * Extract $2 and remove hyphens, spaces and parentheses. Phone number is combined $prefix and $2.
 * A number of very detailed GB telephone number RegEx patterns can also be found at:
 * http://www.aa-asterisk.org.uk/index.php/Regular_Expressions_for_Validating_and_Formatting_GB_Telephone_Numbers
 */

// Matches UK landline + mobile, accepting only 01-3 for landline or 07 for mobile to exclude many premium numbers
$.validator.addMethod( "phonesUK", function( phone_number, element ) {
	phone_number = phone_number.replace( /\(|\)|\s+|-/g, "" );
	return this.optional( element ) || phone_number.length > 9 &&
		phone_number.match( /^(?:(?:(?:00\s?|\+)44\s?|0)(?:1\d{8,9}|[23]\d{9}|7(?:[1345789]\d{8}|624\d{6})))$/ );
}, "Please specify a valid uk phone number" );

/* For UK phone functions, do the following server side processing:
 * Compare original input with this RegEx pattern:
 * ^\(?(?:(?:00\)?[\s\-]?\(?|\+)(44)\)?[\s\-]?\(?(?:0\)?[\s\-]?\(?)?|0)([1-9]\d{1,4}\)?[\s\d\-]+)$
 * Extract $1 and set $prefix to '+44<space>' if $1 is '44', otherwise set $prefix to '0'
 * Extract $2 and remove hyphens, spaces and parentheses. Phone number is combined $prefix and $2.
 * A number of very detailed GB telephone number RegEx patterns can also be found at:
 * http://www.aa-asterisk.org.uk/index.php/Regular_Expressions_for_Validating_and_Formatting_GB_Telephone_Numbers
 */
$.validator.addMethod( "phoneUK", function( phone_number, element ) {
	phone_number = phone_number.replace( /\(|\)|\s+|-/g, "" );
	return this.optional( element ) || phone_number.length > 9 &&
		phone_number.match( /^(?:(?:(?:00\s?|\+)44\s?)|(?:\(?0))(?:\d{2}\)?\s?\d{4}\s?\d{4}|\d{3}\)?\s?\d{3}\s?\d{3,4}|\d{4}\)?\s?(?:\d{5}|\d{3}\s?\d{3})|\d{5}\)?\s?\d{4,5})$/ );
}, "Please specify a valid phone number" );

/**
 * Matches US phone number format
 *
 * where the area code may not start with 1 and the prefix may not start with 1
 * allows '-' or ' ' as a separator and allows parens around area code
 * some people may want to put a '1' in front of their number
 *
 * 1(212)-999-2345 or
 * 212 999 2344 or
 * 212-999-0983
 *
 * but not
 * 111-123-5434
 * and not
 * 212 123 4567
 */
$.validator.addMethod( "phoneUS", function( phone_number, element ) {
	phone_number = phone_number.replace( /\s+/g, "" );
	return this.optional( element ) || phone_number.length > 9 &&
		phone_number.match( /^(\+?1-?)?(\([2-9]([02-9]\d|1[02-9])\)|[2-9]([02-9]\d|1[02-9]))-?[2-9]\d{2}-?\d{4}$/ );
}, "Please specify a valid phone number" );

/*
* Valida CEPs do brasileiros:
*
* Formatos aceitos:
* 99999-999
* 99.999-999
* 99999999
*/
$.validator.addMethod( "postalcodeBR", function( cep_value, element ) {
	return this.optional( element ) || /^\d{2}.\d{3}-\d{3}?$|^\d{5}-?\d{3}?$/.test( cep_value );
}, "Informe um CEP válido." );

/**
 * Matches a valid Canadian Postal Code
 *
 * @example jQuery.validator.methods.postalCodeCA( "H0H 0H0", element )
 * @result true
 *
 * @example jQuery.validator.methods.postalCodeCA( "H0H0H0", element )
 * @result false
 *
 * @name jQuery.validator.methods.postalCodeCA
 * @type Boolean
 * @cat Plugins/Validate/Methods
 */
$.validator.addMethod( "postalCodeCA", function( value, element ) {
	return this.optional( element ) || /^[ABCEGHJKLMNPRSTVXY]\d[ABCEGHJKLMNPRSTVWXYZ] *\d[ABCEGHJKLMNPRSTVWXYZ]\d$/i.test( value );
}, "Please specify a valid postal code" );

/* Matches Italian postcode (CAP) */
$.validator.addMethod( "postalcodeIT", function( value, element ) {
	return this.optional( element ) || /^\d{5}$/.test( value );
}, "Please specify a valid postal code" );

$.validator.addMethod( "postalcodeNL", function( value, element ) {
	return this.optional( element ) || /^[1-9][0-9]{3}\s?[a-zA-Z]{2}$/.test( value );
}, "Please specify a valid postal code" );

// Matches UK postcode. Does not match to UK Channel Islands that have their own postcodes (non standard UK)
$.validator.addMethod( "postcodeUK", function( value, element ) {
	return this.optional( element ) || /^((([A-PR-UWYZ][0-9])|([A-PR-UWYZ][0-9][0-9])|([A-PR-UWYZ][A-HK-Y][0-9])|([A-PR-UWYZ][A-HK-Y][0-9][0-9])|([A-PR-UWYZ][0-9][A-HJKSTUW])|([A-PR-UWYZ][A-HK-Y][0-9][ABEHMNPRVWXY]))\s?([0-9][ABD-HJLNP-UW-Z]{2})|(GIR)\s?(0AA))$/i.test( value );
}, "Please specify a valid UK postcode" );

/*
 * Lets you say "at least X inputs that match selector Y must be filled."
 *
 * The end result is that neither of these inputs:
 *
 *	<input class="productinfo" name="partnumber">
 *	<input class="productinfo" name="description">
 *
 *	...will validate unless at least one of them is filled.
 *
 * partnumber:	{require_from_group: [1,".productinfo"]},
 * description: {require_from_group: [1,".productinfo"]}
 *
 * options[0]: number of fields that must be filled in the group
 * options[1]: CSS selector that defines the group of conditionally required fields
 */
$.validator.addMethod( "require_from_group", function( value, element, options ) {
	var $fields = $( options[ 1 ], element.form ),
		$fieldsFirst = $fields.eq( 0 ),
		validator = $fieldsFirst.data( "valid_req_grp" ) ? $fieldsFirst.data( "valid_req_grp" ) : $.extend( {}, this ),
		isValid = $fields.filter( function() {
			return validator.elementValue( this );
		} ).length >= options[ 0 ];

	// Store the cloned validator for future validation
	$fieldsFirst.data( "valid_req_grp", validator );

	// If element isn't being validated, run each require_from_group field's validation rules
	if ( !$( element ).data( "being_validated" ) ) {
		$fields.data( "being_validated", true );
		$fields.each( function() {
			validator.element( this );
		} );
		$fields.data( "being_validated", false );
	}
	return isValid;
}, $.validator.format( "Please fill at least {0} of these fields." ) );

/*
 * Lets you say "either at least X inputs that match selector Y must be filled,
 * OR they must all be skipped (left blank)."
 *
 * The end result, is that none of these inputs:
 *
 *	<input class="productinfo" name="partnumber">
 *	<input class="productinfo" name="description">
 *	<input class="productinfo" name="color">
 *
 *	...will validate unless either at least two of them are filled,
 *	OR none of them are.
 *
 * partnumber:	{skip_or_fill_minimum: [2,".productinfo"]},
 * description: {skip_or_fill_minimum: [2,".productinfo"]},
 * color:		{skip_or_fill_minimum: [2,".productinfo"]}
 *
 * options[0]: number of fields that must be filled in the group
 * options[1]: CSS selector that defines the group of conditionally required fields
 *
 */
$.validator.addMethod( "skip_or_fill_minimum", function( value, element, options ) {
	var $fields = $( options[ 1 ], element.form ),
		$fieldsFirst = $fields.eq( 0 ),
		validator = $fieldsFirst.data( "valid_skip" ) ? $fieldsFirst.data( "valid_skip" ) : $.extend( {}, this ),
		numberFilled = $fields.filter( function() {
			return validator.elementValue( this );
		} ).length,
		isValid = numberFilled === 0 || numberFilled >= options[ 0 ];

	// Store the cloned validator for future validation
	$fieldsFirst.data( "valid_skip", validator );

	// If element isn't being validated, run each skip_or_fill_minimum field's validation rules
	if ( !$( element ).data( "being_validated" ) ) {
		$fields.data( "being_validated", true );
		$fields.each( function() {
			validator.element( this );
		} );
		$fields.data( "being_validated", false );
	}
	return isValid;
}, $.validator.format( "Please either skip these fields or fill at least {0} of them." ) );

/* Validates US States and/or Territories by @jdforsythe
 * Can be case insensitive or require capitalization - default is case insensitive
 * Can include US Territories or not - default does not
 * Can include US Military postal abbreviations (AA, AE, AP) - default does not
 *
 * Note: "States" always includes DC (District of Colombia)
 *
 * Usage examples:
 *
 *  This is the default - case insensitive, no territories, no military zones
 *  stateInput: {
 *     caseSensitive: false,
 *     includeTerritories: false,
 *     includeMilitary: false
 *  }
 *
 *  Only allow capital letters, no territories, no military zones
 *  stateInput: {
 *     caseSensitive: false
 *  }
 *
 *  Case insensitive, include territories but not military zones
 *  stateInput: {
 *     includeTerritories: true
 *  }
 *
 *  Only allow capital letters, include territories and military zones
 *  stateInput: {
 *     caseSensitive: true,
 *     includeTerritories: true,
 *     includeMilitary: true
 *  }
 *
 */
$.validator.addMethod( "stateUS", function( value, element, options ) {
	var isDefault = typeof options === "undefined",
		caseSensitive = ( isDefault || typeof options.caseSensitive === "undefined" ) ? false : options.caseSensitive,
		includeTerritories = ( isDefault || typeof options.includeTerritories === "undefined" ) ? false : options.includeTerritories,
		includeMilitary = ( isDefault || typeof options.includeMilitary === "undefined" ) ? false : options.includeMilitary,
		regex;

	if ( !includeTerritories && !includeMilitary ) {
		regex = "^(A[KLRZ]|C[AOT]|D[CE]|FL|GA|HI|I[ADLN]|K[SY]|LA|M[ADEINOST]|N[CDEHJMVY]|O[HKR]|PA|RI|S[CD]|T[NX]|UT|V[AT]|W[AIVY])$";
	} else if ( includeTerritories && includeMilitary ) {
		regex = "^(A[AEKLPRSZ]|C[AOT]|D[CE]|FL|G[AU]|HI|I[ADLN]|K[SY]|LA|M[ADEINOPST]|N[CDEHJMVY]|O[HKR]|P[AR]|RI|S[CD]|T[NX]|UT|V[AIT]|W[AIVY])$";
	} else if ( includeTerritories ) {
		regex = "^(A[KLRSZ]|C[AOT]|D[CE]|FL|G[AU]|HI|I[ADLN]|K[SY]|LA|M[ADEINOPST]|N[CDEHJMVY]|O[HKR]|P[AR]|RI|S[CD]|T[NX]|UT|V[AIT]|W[AIVY])$";
	} else {
		regex = "^(A[AEKLPRZ]|C[AOT]|D[CE]|FL|GA|HI|I[ADLN]|K[SY]|LA|M[ADEINOST]|N[CDEHJMVY]|O[HKR]|PA|RI|S[CD]|T[NX]|UT|V[AT]|W[AIVY])$";
	}

	regex = caseSensitive ? new RegExp( regex ) : new RegExp( regex, "i" );
	return this.optional( element ) || regex.test( value );
}, "Please specify a valid state" );

// TODO check if value starts with <, otherwise don't try stripping anything
$.validator.addMethod( "strippedminlength", function( value, element, param ) {
	return $( value ).text().length >= param;
}, $.validator.format( "Please enter at least {0} characters" ) );

$.validator.addMethod( "time", function( value, element ) {
	return this.optional( element ) || /^([01]\d|2[0-3]|[0-9])(:[0-5]\d){1,2}$/.test( value );
}, "Please enter a valid time, between 00:00 and 23:59" );

$.validator.addMethod( "time12h", function( value, element ) {
	return this.optional( element ) || /^((0?[1-9]|1[012])(:[0-5]\d){1,2}(\ ?[AP]M))$/i.test( value );
}, "Please enter a valid time in 12-hour am/pm format" );

// Same as url, but TLD is optional
$.validator.addMethod( "url2", function( value, element ) {
	return this.optional( element ) || /^(https?|ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)*(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i.test( value );
}, $.validator.messages.url );

/**
 * Return true, if the value is a valid vehicle identification number (VIN).
 *
 * Works with all kind of text inputs.
 *
 * @example <input type="text" size="20" name="VehicleID" class="{required:true,vinUS:true}" />
 * @desc Declares a required input element whose value must be a valid vehicle identification number.
 *
 * @name $.validator.methods.vinUS
 * @type Boolean
 * @cat Plugins/Validate/Methods
 */
$.validator.addMethod( "vinUS", function( v ) {
	if ( v.length !== 17 ) {
		return false;
	}

	var LL = [ "A", "B", "C", "D", "E", "F", "G", "H", "J", "K", "L", "M", "N", "P", "R", "S", "T", "U", "V", "W", "X", "Y", "Z" ],
		VL = [ 1, 2, 3, 4, 5, 6, 7, 8, 1, 2, 3, 4, 5, 7, 9, 2, 3, 4, 5, 6, 7, 8, 9 ],
		FL = [ 8, 7, 6, 5, 4, 3, 2, 10, 0, 9, 8, 7, 6, 5, 4, 3, 2 ],
		rs = 0,
		i, n, d, f, cd, cdv;

	for ( i = 0; i < 17; i++ ) {
		f = FL[ i ];
		d = v.slice( i, i + 1 );
		if ( i === 8 ) {
			cdv = d;
		}
		if ( !isNaN( d ) ) {
			d *= f;
		} else {
			for ( n = 0; n < LL.length; n++ ) {
				if ( d.toUpperCase() === LL[ n ] ) {
					d = VL[ n ];
					d *= f;
					if ( isNaN( cdv ) && n === 8 ) {
						cdv = LL[ n ];
					}
					break;
				}
			}
		}
		rs += d;
	}
	cd = rs % 11;
	if ( cd === 10 ) {
		cd = "X";
	}
	if ( cd === cdv ) {
		return true;
	}
	return false;
}, "The specified vehicle identification number (VIN) is invalid." );

$.validator.addMethod( "zipcodeUS", function( value, element ) {
	return this.optional( element ) || /^\d{5}(-\d{4})?$/.test( value );
}, "The specified US ZIP Code is invalid" );

$.validator.addMethod( "ziprange", function( value, element ) {
	return this.optional( element ) || /^90[2-5]\d\{2\}-\d{4}$/.test( value );
}, "Your ZIP-code must be in the range 902xx-xxxx to 905xx-xxxx" );
return $;
}));


/*[PATH @digikala/supernova-digikala-desktop/node_modules/js-cookie/src/js.cookie.js]*/
/*!
 * JavaScript Cookie v2.2.1
 * https://github.com/js-cookie/js-cookie
 *
 * Copyright 2006, 2015 Klaus Hartl & Fagner Brack
 * Released under the MIT license
 */
;(function (factory) {
	var registeredInModuleLoader;
	if (typeof define === 'function' && define.amd) {
		define(factory);
		registeredInModuleLoader = true;
	}
	if (typeof exports === 'object') {
		module.exports = factory();
		registeredInModuleLoader = true;
	}
	if (!registeredInModuleLoader) {
		var OldCookies = window.Cookies;
		var api = window.Cookies = factory();
		api.noConflict = function () {
			window.Cookies = OldCookies;
			return api;
		};
	}
}(function () {
	function extend () {
		var i = 0;
		var result = {};
		for (; i < arguments.length; i++) {
			var attributes = arguments[ i ];
			for (var key in attributes) {
				result[key] = attributes[key];
			}
		}
		return result;
	}

	function decode (s) {
		return s.replace(/(%[0-9A-Z]{2})+/g, decodeURIComponent);
	}

	function init (converter) {
		function api() {}

		function set (key, value, attributes) {
			if (typeof document === 'undefined') {
				return;
			}

			attributes = extend({
				path: '/'
			}, api.defaults, attributes);

			if (typeof attributes.expires === 'number') {
				attributes.expires = new Date(new Date() * 1 + attributes.expires * 864e+5);
			}

			// We're using "expires" because "max-age" is not supported by IE
			attributes.expires = attributes.expires ? attributes.expires.toUTCString() : '';

			try {
				var result = JSON.stringify(value);
				if (/^[\{\[]/.test(result)) {
					value = result;
				}
			} catch (e) {}

			value = converter.write ?
				converter.write(value, key) :
				encodeURIComponent(String(value))
					.replace(/%(23|24|26|2B|3A|3C|3E|3D|2F|3F|40|5B|5D|5E|60|7B|7D|7C)/g, decodeURIComponent);

			key = encodeURIComponent(String(key))
				.replace(/%(23|24|26|2B|5E|60|7C)/g, decodeURIComponent)
				.replace(/[\(\)]/g, escape);

			var stringifiedAttributes = '';
			for (var attributeName in attributes) {
				if (!attributes[attributeName]) {
					continue;
				}
				stringifiedAttributes += '; ' + attributeName;
				if (attributes[attributeName] === true) {
					continue;
				}

				// Considers RFC 6265 section 5.2:
				// ...
				// 3.  If the remaining unparsed-attributes contains a %x3B (";")
				//     character:
				// Consume the characters of the unparsed-attributes up to,
				// not including, the first %x3B (";") character.
				// ...
				stringifiedAttributes += '=' + attributes[attributeName].split(';')[0];
			}

			return (document.cookie = key + '=' + value + stringifiedAttributes);
		}

		function get (key, json) {
			if (typeof document === 'undefined') {
				return;
			}

			var jar = {};
			// To prevent the for loop in the first place assign an empty array
			// in case there are no cookies at all.
			var cookies = document.cookie ? document.cookie.split('; ') : [];
			var i = 0;

			for (; i < cookies.length; i++) {
				var parts = cookies[i].split('=');
				var cookie = parts.slice(1).join('=');

				if (!json && cookie.charAt(0) === '"') {
					cookie = cookie.slice(1, -1);
				}

				try {
					var name = decode(parts[0]);
					cookie = (converter.read || converter)(cookie, name) ||
						decode(cookie);

					if (json) {
						try {
							cookie = JSON.parse(cookie);
						} catch (e) {}
					}

					jar[name] = cookie;

					if (key === name) {
						break;
					}
				} catch (e) {}
			}

			return key ? jar[key] : jar;
		}

		api.set = set;
		api.get = function (key) {
			return get(key, false /* read as raw */);
		};
		api.getJSON = function (key) {
			return get(key, true /* read as json */);
		};
		api.remove = function (key, attributes) {
			set(key, '', extend(attributes, {
				expires: -1
			}));
		};

		api.defaults = {};

		api.withConverter = init;

		return api;
	}

	return init(function () {});
}));



/*[PATH @digikala/supernova-digikala-desktop/assets/local/js/libs/jquery.swiper.min.js]*/
!function(e,t){"object"==typeof exports&&"undefined"!=typeof module?module.exports=t():"function"==typeof define&&define.amd?define(t):e.Swiper=t()}(this,function(){"use strict";var f="undefined"==typeof window?{navigator:{userAgent:""},location:{},history:{},addEventListener:function(){},removeEventListener:function(){},getComputedStyle:function(){return{}},Image:function(){},Date:function(){}}:window,l=function(e){for(var t=0;t<e.length;t+=1)this[t]=e[t];return this.length=e.length,this};function I(e,t){var a=[],i=0;if(e&&!t&&e instanceof l)return e;if(e)if("string"==typeof e){var s,r,n=e.trim();if(0<=n.indexOf("<")&&0<=n.indexOf(">")){var o="div";for(0===n.indexOf("<li")&&(o="ul"),0===n.indexOf("<tr")&&(o="tbody"),0!==n.indexOf("<td")&&0!==n.indexOf("<th")||(o="tr"),0===n.indexOf("<tbody")&&(o="table"),0===n.indexOf("<option")&&(o="select"),(r=document.createElement(o)).innerHTML=n,i=0;i<r.childNodes.length;i+=1)a.push(r.childNodes[i])}else for(s=t||"#"!==e[0]||e.match(/[ .<>:~]/)?(t||document).querySelectorAll(e.trim()):[document.getElementById(e.trim().split("#")[1])],i=0;i<s.length;i+=1)s[i]&&a.push(s[i])}else if(e.nodeType||e===window||e===document)a.push(e);else if(0<e.length&&e[0].nodeType)for(i=0;i<e.length;i+=1)a.push(e[i]);return new l(a)}function r(e){for(var t=[],a=0;a<e.length;a+=1)-1===t.indexOf(e[a])&&t.push(e[a]);return t}I.fn=l.prototype,I.Class=l,I.Dom7=l;"resize scroll".split(" ");var t={addClass:function(e){if(void 0===e)return this;for(var t=e.split(" "),a=0;a<t.length;a+=1)for(var i=0;i<this.length;i+=1)void 0!==this[i].classList&&this[i].classList.add(t[a]);return this},removeClass:function(e){for(var t=e.split(" "),a=0;a<t.length;a+=1)for(var i=0;i<this.length;i+=1)void 0!==this[i].classList&&this[i].classList.remove(t[a]);return this},hasClass:function(e){return!!this[0]&&this[0].classList.contains(e)},toggleClass:function(e){for(var t=e.split(" "),a=0;a<t.length;a+=1)for(var i=0;i<this.length;i+=1)void 0!==this[i].classList&&this[i].classList.toggle(t[a]);return this},attr:function(e,t){var a=arguments;if(1===arguments.length&&"string"==typeof e)return this[0]?this[0].getAttribute(e):void 0;for(var i=0;i<this.length;i+=1)if(2===a.length)this[i].setAttribute(e,t);else for(var s in e)this[i][s]=e[s],this[i].setAttribute(s,e[s]);return this},removeAttr:function(e){for(var t=0;t<this.length;t+=1)this[t].removeAttribute(e);return this},data:function(e,t){var a;if(void 0!==t){for(var i=0;i<this.length;i+=1)(a=this[i]).dom7ElementDataStorage||(a.dom7ElementDataStorage={}),a.dom7ElementDataStorage[e]=t;return this}if(a=this[0]){if(a.dom7ElementDataStorage&&e in a.dom7ElementDataStorage)return a.dom7ElementDataStorage[e];var s=a.getAttribute("data-"+e);return s||void 0}},transform:function(e){for(var t=0;t<this.length;t+=1){var a=this[t].style;a.webkitTransform=e,a.transform=e}return this},transition:function(e){"string"!=typeof e&&(e+="ms");for(var t=0;t<this.length;t+=1){var a=this[t].style;a.webkitTransitionDuration=e,a.transitionDuration=e}return this},on:function(){for(var e=[],t=arguments.length;t--;)e[t]=arguments[t];var a,i=e[0],r=e[1],n=e[2],s=e[3];function o(e){var t=e.target;if(t){var a=e.target.dom7EventData||[];if(a.unshift(e),I(t).is(r))n.apply(t,a);else for(var i=I(t).parents(),s=0;s<i.length;s+=1)I(i[s]).is(r)&&n.apply(i[s],a)}}function l(e){var t=e&&e.target&&e.target.dom7EventData||[];t.unshift(e),n.apply(this,t)}"function"==typeof e[1]&&(i=(a=e)[0],n=a[1],s=a[2],r=void 0),s||(s=!1);for(var d,p=i.split(" "),c=0;c<this.length;c+=1){var u=this[c];if(r)for(d=0;d<p.length;d+=1)u.dom7LiveListeners||(u.dom7LiveListeners=[]),u.dom7LiveListeners.push({type:i,listener:n,proxyListener:o}),u.addEventListener(p[d],o,s);else for(d=0;d<p.length;d+=1)u.dom7Listeners||(u.dom7Listeners=[]),u.dom7Listeners.push({type:i,listener:n,proxyListener:l}),u.addEventListener(p[d],l,s)}return this},off:function(){for(var e=[],t=arguments.length;t--;)e[t]=arguments[t];var a,i=e[0],s=e[1],r=e[2],n=e[3];"function"==typeof e[1]&&(i=(a=e)[0],r=a[1],n=a[2],s=void 0),n||(n=!1);for(var o=i.split(" "),l=0;l<o.length;l+=1)for(var d=0;d<this.length;d+=1){var p=this[d];if(s){if(p.dom7LiveListeners)for(var c=0;c<p.dom7LiveListeners.length;c+=1)r?p.dom7LiveListeners[c].listener===r&&p.removeEventListener(o[l],p.dom7LiveListeners[c].proxyListener,n):p.dom7LiveListeners[c].type===o[l]&&p.removeEventListener(o[l],p.dom7LiveListeners[c].proxyListener,n)}else if(p.dom7Listeners)for(var u=0;u<p.dom7Listeners.length;u+=1)r?p.dom7Listeners[u].listener===r&&p.removeEventListener(o[l],p.dom7Listeners[u].proxyListener,n):p.dom7Listeners[u].type===o[l]&&p.removeEventListener(o[l],p.dom7Listeners[u].proxyListener,n)}return this},trigger:function(){for(var e=[],t=arguments.length;t--;)e[t]=arguments[t];for(var a=e[0].split(" "),i=e[1],s=0;s<a.length;s+=1)for(var r=0;r<this.length;r+=1){var n=void 0;try{n=new window.CustomEvent(a[s],{detail:i,bubbles:!0,cancelable:!0})}catch(e){(n=document.createEvent("Event")).initEvent(a[s],!0,!0),n.detail=i}this[r].dom7EventData=e.filter(function(e,t){return 0<t}),this[r].dispatchEvent(n),this[r].dom7EventData=[],delete this[r].dom7EventData}return this},transitionEnd:function(t){var a,i=["webkitTransitionEnd","transitionend"],s=this;function r(e){if(e.target===this)for(t.call(this,e),a=0;a<i.length;a+=1)s.off(i[a],r)}if(t)for(a=0;a<i.length;a+=1)s.on(i[a],r);return this},outerWidth:function(e){if(0<this.length){if(e){var t=this.styles();return this[0].offsetWidth+parseFloat(t.getPropertyValue("margin-right"))+parseFloat(t.getPropertyValue("margin-left"))}return this[0].offsetWidth}return null},outerHeight:function(e){if(0<this.length){if(e){var t=this.styles();return this[0].offsetHeight+parseFloat(t.getPropertyValue("margin-top"))+parseFloat(t.getPropertyValue("margin-bottom"))}return this[0].offsetHeight}return null},offset:function(){if(0<this.length){var e=this[0],t=e.getBoundingClientRect(),a=document.body,i=e.clientTop||a.clientTop||0,s=e.clientLeft||a.clientLeft||0,r=e===window?window.scrollY:e.scrollTop,n=e===window?window.scrollX:e.scrollLeft;return{top:t.top+r-i,left:t.left+n-s}}return null},css:function(e,t){var a;if(1===arguments.length){if("string"!=typeof e){for(a=0;a<this.length;a+=1)for(var i in e)this[a].style[i]=e[i];return this}if(this[0])return window.getComputedStyle(this[0],null).getPropertyValue(e)}if(2===arguments.length&&"string"==typeof e){for(a=0;a<this.length;a+=1)this[a].style[e]=t;return this}return this},each:function(e){if(!e)return this;for(var t=0;t<this.length;t+=1)if(!1===e.call(this[t],t,this[t]))return this;return this},html:function(e){if(void 0===e)return this[0]?this[0].innerHTML:void 0;for(var t=0;t<this.length;t+=1)this[t].innerHTML=e;return this},text:function(e){if(void 0===e)return this[0]?this[0].textContent.trim():null;for(var t=0;t<this.length;t+=1)this[t].textContent=e;return this},is:function(e){var t,a,i=this[0];if(!i||void 0===e)return!1;if("string"==typeof e){if(i.matches)return i.matches(e);if(i.webkitMatchesSelector)return i.webkitMatchesSelector(e);if(i.msMatchesSelector)return i.msMatchesSelector(e);for(t=I(e),a=0;a<t.length;a+=1)if(t[a]===i)return!0;return!1}if(e===document)return i===document;if(e===window)return i===window;if(e.nodeType||e instanceof l){for(t=e.nodeType?[e]:e,a=0;a<t.length;a+=1)if(t[a]===i)return!0;return!1}return!1},index:function(){var e,t=this[0];if(t){for(e=0;null!==(t=t.previousSibling);)1===t.nodeType&&(e+=1);return e}},eq:function(e){if(void 0===e)return this;var t,a=this.length;return new l(a-1<e?[]:e<0?(t=a+e)<0?[]:[this[t]]:[this[e]])},append:function(){for(var e,t=[],a=arguments.length;a--;)t[a]=arguments[a];for(var i=0;i<t.length;i+=1){e=t[i];for(var s=0;s<this.length;s+=1)if("string"==typeof e){var r=document.createElement("div");for(r.innerHTML=e;r.firstChild;)this[s].appendChild(r.firstChild)}else if(e instanceof l)for(var n=0;n<e.length;n+=1)this[s].appendChild(e[n]);else this[s].appendChild(e)}return this},prepend:function(e){var t,a,i=this;for(t=0;t<this.length;t+=1)if("string"==typeof e){var s=document.createElement("div");for(s.innerHTML=e,a=s.childNodes.length-1;0<=a;a-=1)i[t].insertBefore(s.childNodes[a],i[t].childNodes[0])}else if(e instanceof l)for(a=0;a<e.length;a+=1)i[t].insertBefore(e[a],i[t].childNodes[0]);else i[t].insertBefore(e,i[t].childNodes[0]);return this},next:function(e){return 0<this.length?e?this[0].nextElementSibling&&I(this[0].nextElementSibling).is(e)?new l([this[0].nextElementSibling]):new l([]):this[0].nextElementSibling?new l([this[0].nextElementSibling]):new l([]):new l([])},nextAll:function(e){var t=[],a=this[0];if(!a)return new l([]);for(;a.nextElementSibling;){var i=a.nextElementSibling;e?I(i).is(e)&&t.push(i):t.push(i),a=i}return new l(t)},prev:function(e){if(0<this.length){var t=this[0];return e?t.previousElementSibling&&I(t.previousElementSibling).is(e)?new l([t.previousElementSibling]):new l([]):t.previousElementSibling?new l([t.previousElementSibling]):new l([])}return new l([])},prevAll:function(e){var t=[],a=this[0];if(!a)return new l([]);for(;a.previousElementSibling;){var i=a.previousElementSibling;e?I(i).is(e)&&t.push(i):t.push(i),a=i}return new l(t)},parent:function(e){for(var t=[],a=0;a<this.length;a+=1)null!==this[a].parentNode&&(e?I(this[a].parentNode).is(e)&&t.push(this[a].parentNode):t.push(this[a].parentNode));return I(r(t))},parents:function(e){for(var t=[],a=0;a<this.length;a+=1)for(var i=this[a].parentNode;i;)e?I(i).is(e)&&t.push(i):t.push(i),i=i.parentNode;return I(r(t))},closest:function(e){var t=this;return void 0===e?new l([]):(t.is(e)||(t=t.parents(e).eq(0)),t)},find:function(e){for(var t=[],a=0;a<this.length;a+=1)for(var i=this[a].querySelectorAll(e),s=0;s<i.length;s+=1)t.push(i[s]);return new l(t)},children:function(e){for(var t=[],a=0;a<this.length;a+=1)for(var i=this[a].childNodes,s=0;s<i.length;s+=1)e?1===i[s].nodeType&&I(i[s]).is(e)&&t.push(i[s]):1===i[s].nodeType&&t.push(i[s]);return new l(r(t))},remove:function(){for(var e=0;e<this.length;e+=1)this[e].parentNode&&this[e].parentNode.removeChild(this[e]);return this},add:function(){for(var e=[],t=arguments.length;t--;)e[t]=arguments[t];var a,i;for(a=0;a<e.length;a+=1){var s=I(e[a]);for(i=0;i<s.length;i+=1)this[this.length]=s[i],this.length+=1}return this},styles:function(){return this[0]?window.getComputedStyle(this[0],null):{}}};Object.keys(t).forEach(function(e){I.fn[e]=t[e]});var e,D={deleteProps:function(e){var t=e;Object.keys(t).forEach(function(e){try{t[e]=null}catch(e){}try{delete t[e]}catch(e){}})},nextTick:function(e,t){return void 0===t&&(t=0),setTimeout(e,t)},now:function(){return Date.now()},getTranslate:function(e,t){var a,i,s;void 0===t&&(t="x");var r=f.getComputedStyle(e,null);return f.WebKitCSSMatrix?(6<(i=r.transform||r.webkitTransform).split(",").length&&(i=i.split(", ").map(function(e){return e.replace(",",".")}).join(", ")),s=new f.WebKitCSSMatrix("none"===i?"":i)):a=(s=r.MozTransform||r.OTransform||r.MsTransform||r.msTransform||r.transform||r.getPropertyValue("transform").replace("translate(","matrix(1, 0, 0, 1,")).toString().split(","),"x"===t&&(i=f.WebKitCSSMatrix?s.m41:16===a.length?parseFloat(a[12]):parseFloat(a[4])),"y"===t&&(i=f.WebKitCSSMatrix?s.m42:16===a.length?parseFloat(a[13]):parseFloat(a[5])),i||0},parseUrlQuery:function(e){var t,a,i,s,r={},n=e||f.location.href;if("string"==typeof n&&n.length)for(s=(a=(n=-1<n.indexOf("?")?n.replace(/\S*\?/,""):"").split("&").filter(function(e){return""!==e})).length,t=0;t<s;t+=1)i=a[t].replace(/#\S+/g,"").split("="),r[decodeURIComponent(i[0])]=void 0===i[1]?void 0:decodeURIComponent(i[1])||"";return r},isObject:function(e){return"object"==typeof e&&null!==e&&e.constructor&&e.constructor===Object},extend:function(){for(var e=[],t=arguments.length;t--;)e[t]=arguments[t];for(var a=Object(e[0]),i=1;i<e.length;i+=1){var s=e[i];if(null!=s)for(var r=Object.keys(Object(s)),n=0,o=r.length;n<o;n+=1){var l=r[n],d=Object.getOwnPropertyDescriptor(s,l);void 0!==d&&d.enumerable&&(D.isObject(a[l])&&D.isObject(s[l])?D.extend(a[l],s[l]):!D.isObject(a[l])&&D.isObject(s[l])?(a[l]={},D.extend(a[l],s[l])):a[l]=s[l])}}return a}},h="undefined"==typeof document?{addEventListener:function(){},removeEventListener:function(){},activeElement:{blur:function(){},nodeName:""},querySelector:function(){return{}},querySelectorAll:function(){return[]},createElement:function(){return{style:{},setAttribute:function(){},getElementsByTagName:function(){return[]}}},location:{hash:""}}:document,O={touch:f.Modernizr&&!0===f.Modernizr.touch||!!("ontouchstart"in f||f.DocumentTouch&&h instanceof f.DocumentTouch),transforms3d:f.Modernizr&&!0===f.Modernizr.csstransforms3d||(e=h.createElement("div").style,"webkitPerspective"in e||"MozPerspective"in e||"OPerspective"in e||"MsPerspective"in e||"perspective"in e),flexbox:function(){for(var e=h.createElement("div").style,t="alignItems webkitAlignItems webkitBoxAlign msFlexAlign mozBoxAlign webkitFlexDirection msFlexDirection mozBoxDirection mozBoxOrient webkitBoxDirection webkitBoxOrient".split(" "),a=0;a<t.length;a+=1)if(t[a]in e)return!0;return!1}(),observer:"MutationObserver"in f||"WebkitMutationObserver"in f,passiveListener:function(){var e=!1;try{var t=Object.defineProperty({},"passive",{get:function(){e=!0}});f.addEventListener("testPassiveListener",null,t)}catch(e){}return e}(),gestures:"ongesturestart"in f},a=function(e){void 0===e&&(e={});var t=this;t.params=e,t.eventsListeners={},t.params&&t.params.on&&Object.keys(t.params.on).forEach(function(e){t.on(e,t.params.on[e])})},i={components:{}};a.prototype.on=function(e,t){var a=this;return"function"!=typeof t||e.split(" ").forEach(function(e){a.eventsListeners[e]||(a.eventsListeners[e]=[]),a.eventsListeners[e].push(t)}),a},a.prototype.once=function(i,s){var r=this;if("function"!=typeof s)return r;return r.on(i,function e(){for(var t=[],a=arguments.length;a--;)t[a]=arguments[a];s.apply(r,t),r.off(i,e)})},a.prototype.off=function(e,i){var s=this;return e.split(" ").forEach(function(a){void 0===i?s.eventsListeners[a]=[]:s.eventsListeners[a].forEach(function(e,t){e===i&&s.eventsListeners[a].splice(t,1)})}),s},a.prototype.emit=function(){for(var e=[],t=arguments.length;t--;)e[t]=arguments[t];var a,i,s,r=this;return r.eventsListeners&&("string"==typeof e[0]||Array.isArray(e[0])?(a=e[0],i=e.slice(1,e.length),s=r):(a=e[0].events,i=e[0].data,s=e[0].context||r),(Array.isArray(a)?a:a.split(" ")).forEach(function(e){if(r.eventsListeners[e]){var t=[];r.eventsListeners[e].forEach(function(e){t.push(e)}),t.forEach(function(e){e.apply(s,i)})}})),r},a.prototype.useModulesParams=function(a){var i=this;i.modules&&Object.keys(i.modules).forEach(function(e){var t=i.modules[e];t.params&&D.extend(a,t.params)})},a.prototype.useModules=function(i){void 0===i&&(i={});var s=this;s.modules&&Object.keys(s.modules).forEach(function(e){var a=s.modules[e],t=i[e]||{};a.instance&&Object.keys(a.instance).forEach(function(e){var t=a.instance[e];s[e]="function"==typeof t?t.bind(s):t}),a.on&&s.on&&Object.keys(a.on).forEach(function(e){s.on(e,a.on[e])}),a.create&&a.create.bind(s)(t)})},i.components.set=function(e){this.use&&this.use(e)},a.installModule=function(t){for(var e=[],a=arguments.length-1;0<a--;)e[a]=arguments[a+1];var i=this;i.prototype.modules||(i.prototype.modules={});var s=t.name||Object.keys(i.prototype.modules).length+"_"+D.now();return(i.prototype.modules[s]=t).proto&&Object.keys(t.proto).forEach(function(e){i.prototype[e]=t.proto[e]}),t.static&&Object.keys(t.static).forEach(function(e){i[e]=t.static[e]}),t.install&&t.install.apply(i,e),i},a.use=function(e){for(var t=[],a=arguments.length-1;0<a--;)t[a]=arguments[a+1];var i=this;return Array.isArray(e)?(e.forEach(function(e){return i.installModule(e)}),i):i.installModule.apply(i,[e].concat(t))},Object.defineProperties(a,i);var s,n,o={updateSize:function(){var e,t,a=this,i=a.$el;e=void 0!==a.params.width?a.params.width:i[0].clientWidth,t=void 0!==a.params.height?a.params.height:i[0].clientHeight,0===e&&a.isHorizontal()||0===t&&a.isVertical()||(e=e-parseInt(i.css("padding-left"),10)-parseInt(i.css("padding-right"),10),t=t-parseInt(i.css("padding-top"),10)-parseInt(i.css("padding-bottom"),10),D.extend(a,{width:e,height:t,size:a.isHorizontal()?e:t}))},updateSlides:function(){var e=this,t=e.params,a=e.$wrapperEl,i=e.size,s=e.rtl,r=e.wrongRTL,n=a.children("."+e.params.slideClass),o=e.virtual&&t.virtual.enabled?e.virtual.slides.length:n.length,l=[],d=[],p=[],c=t.slidesOffsetBefore;"function"==typeof c&&(c=t.slidesOffsetBefore.call(e));var u=t.slidesOffsetAfter;"function"==typeof u&&(u=t.slidesOffsetAfter.call(e));var h=o,f=e.snapGrid.length,v=e.snapGrid.length,m=t.spaceBetween,g=-c,b=0,w=0;if(void 0!==i){var y,x;"string"==typeof m&&0<=m.indexOf("%")&&(m=parseFloat(m.replace("%",""))/100*i),e.virtualSize=-m,s?n.css({marginLeft:"",marginTop:""}):n.css({marginRight:"",marginBottom:""}),1<t.slidesPerColumn&&(y=Math.floor(o/t.slidesPerColumn)===o/e.params.slidesPerColumn?o:Math.ceil(o/t.slidesPerColumn)*t.slidesPerColumn,"auto"!==t.slidesPerView&&"row"===t.slidesPerColumnFill&&(y=Math.max(y,t.slidesPerView*t.slidesPerColumn)));for(var T,E=t.slidesPerColumn,S=y/E,C=S-(t.slidesPerColumn*S-o),M=0;M<o;M+=1){x=0;var z=n.eq(M);if(1<t.slidesPerColumn){var P=void 0,k=void 0,$=void 0;"column"===t.slidesPerColumnFill?($=M-(k=Math.floor(M/E))*E,(C<k||k===C&&$===E-1)&&E<=($+=1)&&($=0,k+=1),P=k+$*y/E,z.css({"-webkit-box-ordinal-group":P,"-moz-box-ordinal-group":P,"-ms-flex-order":P,"-webkit-order":P,order:P})):k=M-($=Math.floor(M/S))*S,z.css("margin-"+(e.isHorizontal()?"top":"left"),0!==$&&t.spaceBetween&&t.spaceBetween+"px").attr("data-swiper-column",k).attr("data-swiper-row",$)}"none"!==z.css("display")&&("auto"===t.slidesPerView?(x=e.isHorizontal()?z.outerWidth(!0):z.outerHeight(!0),t.roundLengths&&(x=Math.floor(x))):(x=(i-(t.slidesPerView-1)*m)/t.slidesPerView,t.roundLengths&&(x=Math.floor(x)),n[M]&&(e.isHorizontal()?n[M].style.width=x+"px":n[M].style.height=x+"px")),n[M]&&(n[M].swiperSlideSize=x),p.push(x),t.centeredSlides?(g=g+x/2+b/2+m,0===b&&0!==M&&(g=g-i/2-m),0===M&&(g=g-i/2-m),Math.abs(g)<.001&&(g=0),w%t.slidesPerGroup==0&&l.push(g),d.push(g)):(w%t.slidesPerGroup==0&&l.push(g),d.push(g),g=g+x+m),e.virtualSize+=x+m,b=x,w+=1)}if(e.virtualSize=Math.max(e.virtualSize,i)+u,s&&r&&("slide"===t.effect||"coverflow"===t.effect)&&a.css({width:e.virtualSize+t.spaceBetween+"px"}),O.flexbox&&!t.setWrapperSize||(e.isHorizontal()?a.css({width:e.virtualSize+t.spaceBetween+"px"}):a.css({height:e.virtualSize+t.spaceBetween+"px"})),1<t.slidesPerColumn&&(e.virtualSize=(x+t.spaceBetween)*y,e.virtualSize=Math.ceil(e.virtualSize/t.slidesPerColumn)-t.spaceBetween,e.isHorizontal()?a.css({width:e.virtualSize+t.spaceBetween+"px"}):a.css({height:e.virtualSize+t.spaceBetween+"px"}),t.centeredSlides)){T=[];for(var I=0;I<l.length;I+=1)l[I]<e.virtualSize+l[0]&&T.push(l[I]);l=T}if(!t.centeredSlides){T=[];for(var L=0;L<l.length;L+=1)l[L]<=e.virtualSize-i&&T.push(l[L]);l=T,1<Math.floor(e.virtualSize-i)-Math.floor(l[l.length-1])&&l.push(e.virtualSize-i)}0===l.length&&(l=[0]),0!==t.spaceBetween&&(e.isHorizontal()?s?n.css({marginLeft:m+"px"}):n.css({marginRight:m+"px"}):n.css({marginBottom:m+"px"})),D.extend(e,{slides:n,snapGrid:l,slidesGrid:d,slidesSizesGrid:p}),o!==h&&e.emit("slidesLengthChange"),l.length!==f&&e.emit("snapGridLengthChange"),d.length!==v&&e.emit("slidesGridLengthChange"),(t.watchSlidesProgress||t.watchSlidesVisibility)&&e.updateSlidesOffset()}},updateAutoHeight:function(){var e,t=this,a=[],i=0;if("auto"!==t.params.slidesPerView&&1<t.params.slidesPerView)for(e=0;e<Math.ceil(t.params.slidesPerView);e+=1){var s=t.activeIndex+e;if(s>t.slides.length)break;a.push(t.slides.eq(s)[0])}else a.push(t.slides.eq(t.activeIndex)[0]);for(e=0;e<a.length;e+=1)if(void 0!==a[e]){var r=a[e].offsetHeight;i=i<r?r:i}i&&t.$wrapperEl.css("height",i+"px")},updateSlidesOffset:function(){for(var e=this.slides,t=0;t<e.length;t+=1)e[t].swiperSlideOffset=this.isHorizontal()?e[t].offsetLeft:e[t].offsetTop},updateSlidesProgress:function(e){void 0===e&&(e=this.translate||0);var t=this,a=t.params,i=t.slides,s=t.rtl;if(0!==i.length){void 0===i[0].swiperSlideOffset&&t.updateSlidesOffset();var r=-e;s&&(r=e),i.removeClass(a.slideVisibleClass);for(var n=0;n<i.length;n+=1){var o=i[n],l=(r+(a.centeredSlides?t.minTranslate():0)-o.swiperSlideOffset)/(o.swiperSlideSize+a.spaceBetween);if(a.watchSlidesVisibility){var d=-(r-o.swiperSlideOffset),p=d+t.slidesSizesGrid[n];(0<=d&&d<t.size||0<p&&p<=t.size||d<=0&&p>=t.size)&&i.eq(n).addClass(a.slideVisibleClass)}o.progress=s?-l:l}}},updateProgress:function(e){void 0===e&&(e=this.translate||0);var t=this,a=t.params,i=t.maxTranslate()-t.minTranslate(),s=t.progress,r=t.isBeginning,n=t.isEnd,o=r,l=n;0===i?n=r=!(s=0):(r=(s=(e-t.minTranslate())/i)<=0,n=1<=s),D.extend(t,{progress:s,isBeginning:r,isEnd:n}),(a.watchSlidesProgress||a.watchSlidesVisibility)&&t.updateSlidesProgress(e),r&&!o&&t.emit("reachBeginning toEdge"),n&&!l&&t.emit("reachEnd toEdge"),(o&&!r||l&&!n)&&t.emit("fromEdge"),t.emit("progress",s)},updateSlidesClasses:function(){var e,t=this,a=t.slides,i=t.params,s=t.$wrapperEl,r=t.activeIndex,n=t.realIndex,o=t.virtual&&i.virtual.enabled;a.removeClass(i.slideActiveClass+" "+i.slideNextClass+" "+i.slidePrevClass+" "+i.slideDuplicateActiveClass+" "+i.slideDuplicateNextClass+" "+i.slideDuplicatePrevClass),(e=o?t.$wrapperEl.find("."+i.slideClass+'[data-swiper-slide-index="'+r+'"]'):a.eq(r)).addClass(i.slideActiveClass),i.loop&&(e.hasClass(i.slideDuplicateClass)?s.children("."+i.slideClass+":not(."+i.slideDuplicateClass+')[data-swiper-slide-index="'+n+'"]').addClass(i.slideDuplicateActiveClass):s.children("."+i.slideClass+"."+i.slideDuplicateClass+'[data-swiper-slide-index="'+n+'"]').addClass(i.slideDuplicateActiveClass));var l=e.nextAll("."+i.slideClass).eq(0).addClass(i.slideNextClass);i.loop&&0===l.length&&(l=a.eq(0)).addClass(i.slideNextClass);var d=e.prevAll("."+i.slideClass).eq(0).addClass(i.slidePrevClass);i.loop&&0===d.length&&(d=a.eq(-1)).addClass(i.slidePrevClass),i.loop&&(l.hasClass(i.slideDuplicateClass)?s.children("."+i.slideClass+":not(."+i.slideDuplicateClass+')[data-swiper-slide-index="'+l.attr("data-swiper-slide-index")+'"]').addClass(i.slideDuplicateNextClass):s.children("."+i.slideClass+"."+i.slideDuplicateClass+'[data-swiper-slide-index="'+l.attr("data-swiper-slide-index")+'"]').addClass(i.slideDuplicateNextClass),d.hasClass(i.slideDuplicateClass)?s.children("."+i.slideClass+":not(."+i.slideDuplicateClass+')[data-swiper-slide-index="'+d.attr("data-swiper-slide-index")+'"]').addClass(i.slideDuplicatePrevClass):s.children("."+i.slideClass+"."+i.slideDuplicateClass+'[data-swiper-slide-index="'+d.attr("data-swiper-slide-index")+'"]').addClass(i.slideDuplicatePrevClass))},updateActiveIndex:function(e){var t,a=this,i=a.rtl?a.translate:-a.translate,s=a.slidesGrid,r=a.snapGrid,n=a.params,o=a.activeIndex,l=a.realIndex,d=a.snapIndex,p=e;if(void 0===p){for(var c=0;c<s.length;c+=1)void 0!==s[c+1]?i>=s[c]&&i<s[c+1]-(s[c+1]-s[c])/2?p=c:i>=s[c]&&i<s[c+1]&&(p=c+1):i>=s[c]&&(p=c);n.normalizeSlideIndex&&(p<0||void 0===p)&&(p=0)}if((t=0<=r.indexOf(i)?r.indexOf(i):Math.floor(p/n.slidesPerGroup))>=r.length&&(t=r.length-1),p!==o){var u=parseInt(a.slides.eq(p).attr("data-swiper-slide-index")||p,10);D.extend(a,{snapIndex:t,realIndex:u,previousIndex:o,activeIndex:p}),a.emit("activeIndexChange"),a.emit("snapIndexChange"),l!==u&&a.emit("realIndexChange"),a.emit("slideChange")}else t!==d&&(a.snapIndex=t,a.emit("snapIndexChange"))},updateClickedSlide:function(e){var t=this,a=t.params,i=I(e.target).closest("."+a.slideClass)[0],s=!1;if(i)for(var r=0;r<t.slides.length;r+=1)t.slides[r]===i&&(s=!0);if(!i||!s)return t.clickedSlide=void 0,void(t.clickedIndex=void 0);t.clickedSlide=i,t.virtual&&t.params.virtual.enabled?t.clickedIndex=parseInt(I(i).attr("data-swiper-slide-index"),10):t.clickedIndex=I(i).index(),a.slideToClickedSlide&&void 0!==t.clickedIndex&&t.clickedIndex!==t.activeIndex&&t.slideToClickedSlide()}},d={getTranslate:function(e){void 0===e&&(e=this.isHorizontal()?"x":"y");var t=this.params,a=this.rtl,i=this.translate,s=this.$wrapperEl;if(t.virtualTranslate)return a?-i:i;var r=D.getTranslate(s[0],e);return a&&(r=-r),r||0},setTranslate:function(e,t){var a=this,i=a.rtl,s=a.params,r=a.$wrapperEl,n=a.progress,o=0,l=0;a.isHorizontal()?o=i?-e:e:l=e,s.roundLengths&&(o=Math.floor(o),l=Math.floor(l)),s.virtualTranslate||(O.transforms3d?r.transform("translate3d("+o+"px, "+l+"px, 0px)"):r.transform("translate("+o+"px, "+l+"px)")),a.translate=a.isHorizontal()?o:l;var d=a.maxTranslate()-a.minTranslate();(0===d?0:(e-a.minTranslate())/d)!==n&&a.updateProgress(e),a.emit("setTranslate",a.translate,t)},minTranslate:function(){return-this.snapGrid[0]},maxTranslate:function(){return-this.snapGrid[this.snapGrid.length-1]}},p={setTransition:function(e,t){this.$wrapperEl.transition(e),this.emit("setTransition",e,t)},transitionStart:function(e){void 0===e&&(e=!0);var t=this,a=t.activeIndex,i=t.params,s=t.previousIndex;i.autoHeight&&t.updateAutoHeight(),t.emit("transitionStart"),e&&a!==s&&(t.emit("slideChangeTransitionStart"),s<a?t.emit("slideNextTransitionStart"):t.emit("slidePrevTransitionStart"))},transitionEnd:function(e){void 0===e&&(e=!0);var t=this,a=t.activeIndex,i=t.previousIndex;t.animating=!1,t.setTransition(0),t.emit("transitionEnd"),e&&a!==i&&(t.emit("slideChangeTransitionEnd"),i<a?t.emit("slideNextTransitionEnd"):t.emit("slidePrevTransitionEnd"))}},L={isSafari:(n=f.navigator.userAgent.toLowerCase(),0<=n.indexOf("safari")&&n.indexOf("chrome")<0&&n.indexOf("android")<0),isUiWebView:/(iPhone|iPod|iPad).*AppleWebKit(?!.*Safari)/i.test(f.navigator.userAgent),ie:f.navigator.pointerEnabled||f.navigator.msPointerEnabled,ieTouch:f.navigator.msPointerEnabled&&1<f.navigator.msMaxTouchPoints||f.navigator.pointerEnabled&&1<f.navigator.maxTouchPoints,lteIE9:(s=h.createElement("div"),s.innerHTML="\x3c!--[if lte IE 9]><i></i><![endif]--\x3e",1===s.getElementsByTagName("i").length)},c={slideTo:function(e,t,a,i){void 0===e&&(e=0),void 0===t&&(t=this.params.speed),void 0===a&&(a=!0);var s=this,r=e;r<0&&(r=0);var n=s.params,o=s.snapGrid,l=s.slidesGrid,d=s.previousIndex,p=s.activeIndex,c=s.rtl,u=s.$wrapperEl,h=Math.floor(r/n.slidesPerGroup);h>=o.length&&(h=o.length-1),(p||n.initialSlide||0)===(d||0)&&a&&s.emit("beforeSlideChangeStart");var f=-o[h];if(s.updateProgress(f),n.normalizeSlideIndex)for(var v=0;v<l.length;v+=1)-Math.floor(100*f)>=Math.floor(100*l[v])&&(r=v);return!(!s.allowSlideNext&&f<s.translate&&f<s.minTranslate()||!s.allowSlidePrev&&f>s.translate&&f>s.maxTranslate()&&(p||0)!==r||(c&&-f===s.translate||!c&&f===s.translate?(s.updateActiveIndex(r),n.autoHeight&&s.updateAutoHeight(),s.updateSlidesClasses(),"slide"!==n.effect&&s.setTranslate(f),1):(0===t||L.lteIE9?(s.setTransition(0),s.setTranslate(f),s.updateActiveIndex(r),s.updateSlidesClasses(),s.emit("beforeTransitionStart",t,i),s.transitionStart(a),s.transitionEnd(a)):(s.setTransition(t),s.setTranslate(f),s.updateActiveIndex(r),s.updateSlidesClasses(),s.emit("beforeTransitionStart",t,i),s.transitionStart(a),s.animating||(s.animating=!0,u.transitionEnd(function(){s&&!s.destroyed&&s.transitionEnd(a)}))),0)))},slideNext:function(e,t,a){void 0===e&&(e=this.params.speed),void 0===t&&(t=!0);var i=this,s=i.params,r=i.animating;return s.loop?!r&&(i.loopFix(),i._clientLeft=i.$wrapperEl[0].clientLeft,i.slideTo(i.activeIndex+s.slidesPerGroup,e,t,a)):i.slideTo(i.activeIndex+s.slidesPerGroup,e,t,a)},slidePrev:function(e,t,a){void 0===e&&(e=this.params.speed),void 0===t&&(t=!0);var i=this,s=i.params,r=i.animating;return s.loop?!r&&(i.loopFix(),i._clientLeft=i.$wrapperEl[0].clientLeft,i.slideTo(i.activeIndex-1,e,t,a)):i.slideTo(i.activeIndex-1,e,t,a)},slideReset:function(e,t,a){void 0===e&&(e=this.params.speed),void 0===t&&(t=!0);return this.slideTo(this.activeIndex,e,t,a)},slideToClickedSlide:function(){var e,t=this,a=t.params,i=t.$wrapperEl,s="auto"===a.slidesPerView?t.slidesPerViewDynamic():a.slidesPerView,r=t.clickedIndex;if(a.loop){if(t.animating)return;e=parseInt(I(t.clickedSlide).attr("data-swiper-slide-index"),10),a.centeredSlides?r<t.loopedSlides-s/2||r>t.slides.length-t.loopedSlides+s/2?(t.loopFix(),r=i.children("."+a.slideClass+'[data-swiper-slide-index="'+e+'"]:not(.'+a.slideDuplicateClass+")").eq(0).index(),D.nextTick(function(){t.slideTo(r)})):t.slideTo(r):r>t.slides.length-s?(t.loopFix(),r=i.children("."+a.slideClass+'[data-swiper-slide-index="'+e+'"]:not(.'+a.slideDuplicateClass+")").eq(0).index(),D.nextTick(function(){t.slideTo(r)})):t.slideTo(r)}else t.slideTo(r)}},u={loopCreate:function(){var i=this,e=i.params,t=i.$wrapperEl;t.children("."+e.slideClass+"."+e.slideDuplicateClass).remove();var s=t.children("."+e.slideClass);if(e.loopFillGroupWithBlank){var a=e.slidesPerGroup-s.length%e.slidesPerGroup;if(a!==e.slidesPerGroup){for(var r=0;r<a;r+=1){var n=I(h.createElement("div")).addClass(e.slideClass+" "+e.slideBlankClass);t.append(n)}s=t.children("."+e.slideClass)}}"auto"!==e.slidesPerView||e.loopedSlides||(e.loopedSlides=s.length),i.loopedSlides=parseInt(e.loopedSlides||e.slidesPerView,10),i.loopedSlides+=e.loopAdditionalSlides,i.loopedSlides>s.length&&(i.loopedSlides=s.length);var o=[],l=[];s.each(function(e,t){var a=I(t);e<i.loopedSlides&&l.push(t),e<s.length&&e>=s.length-i.loopedSlides&&o.push(t),a.attr("data-swiper-slide-index",e)});for(var d=0;d<l.length;d+=1)t.append(I(l[d].cloneNode(!0)).addClass(e.slideDuplicateClass));for(var p=o.length-1;0<=p;p-=1)t.prepend(I(o[p].cloneNode(!0)).addClass(e.slideDuplicateClass))},loopFix:function(){var e,t=this,a=t.params,i=t.activeIndex,s=t.slides,r=t.loopedSlides,n=t.allowSlidePrev,o=t.allowSlideNext;t.allowSlidePrev=!0,t.allowSlideNext=!0,i<r?(e=s.length-3*r+i,e+=r,t.slideTo(e,0,!1,!0)):("auto"===a.slidesPerView&&2*r<=i||i>s.length-2*a.slidesPerView)&&(e=-s.length+i+r,e+=r,t.slideTo(e,0,!1,!0)),t.allowSlidePrev=n,t.allowSlideNext=o},loopDestroy:function(){var e=this.$wrapperEl,t=this.params,a=this.slides;e.children("."+t.slideClass+"."+t.slideDuplicateClass).remove(),a.removeAttr("data-swiper-slide-index")}},v={setGrabCursor:function(e){if(!O.touch&&this.params.simulateTouch){var t=this.el;t.style.cursor="move",t.style.cursor=e?"-webkit-grabbing":"-webkit-grab",t.style.cursor=e?"-moz-grabbin":"-moz-grab",t.style.cursor=e?"grabbing":"grab"}},unsetGrabCursor:function(){O.touch||(this.el.style.cursor="")}},m={appendSlide:function(e){var t=this,a=t.$wrapperEl,i=t.params;if(i.loop&&t.loopDestroy(),"object"==typeof e&&"length"in e)for(var s=0;s<e.length;s+=1)e[s]&&a.append(e[s]);else a.append(e);i.loop&&t.loopCreate(),i.observer&&O.observer||t.update()},prependSlide:function(e){var t=this,a=t.params,i=t.$wrapperEl,s=t.activeIndex;a.loop&&t.loopDestroy();var r=s+1;if("object"==typeof e&&"length"in e){for(var n=0;n<e.length;n+=1)e[n]&&i.prepend(e[n]);r=s+e.length}else i.prepend(e);a.loop&&t.loopCreate(),a.observer&&O.observer||t.update(),t.slideTo(r,0,!1)},removeSlide:function(e){var t=this,a=t.params,i=t.$wrapperEl,s=t.activeIndex;a.loop&&(t.loopDestroy(),t.slides=i.children("."+a.slideClass));var r,n=s;if("object"==typeof e&&"length"in e){for(var o=0;o<e.length;o+=1)r=e[o],t.slides[r]&&t.slides.eq(r).remove(),r<n&&(n-=1);n=Math.max(n,0)}else r=e,t.slides[r]&&t.slides.eq(r).remove(),r<n&&(n-=1),n=Math.max(n,0);a.loop&&t.loopCreate(),a.observer&&O.observer||t.update(),a.loop?t.slideTo(n+t.loopedSlides,0,!1):t.slideTo(n,0,!1)},removeAllSlides:function(){for(var e=[],t=0;t<this.slides.length;t+=1)e.push(t);this.removeSlide(e)}},g=function(){var e=f.navigator.userAgent,t={ios:!1,android:!1,androidChrome:!1,desktop:!1,windows:!1,iphone:!1,ipod:!1,ipad:!1,cordova:f.cordova||f.phonegap,phonegap:f.cordova||f.phonegap},a=e.match(/(Windows Phone);?[\s\/]+([\d.]+)?/),i=e.match(/(Android);?[\s\/]+([\d.]+)?/),s=e.match(/(iPad).*OS\s([\d_]+)/),r=e.match(/(iPod)(.*OS\s([\d_]+))?/),n=!s&&e.match(/(iPhone\sOS|iOS)\s([\d_]+)/);if(a&&(t.os="windows",t.osVersion=a[2],t.windows=!0),i&&!a&&(t.os="android",t.osVersion=i[2],t.android=!0,t.androidChrome=0<=e.toLowerCase().indexOf("chrome")),(s||n||r)&&(t.os="ios",t.ios=!0),n&&!r&&(t.osVersion=n[2].replace(/_/g,"."),t.iphone=!0),s&&(t.osVersion=s[2].replace(/_/g,"."),t.ipad=!0),r&&(t.osVersion=r[3]?r[3].replace(/_/g,"."):null,t.iphone=!0),t.ios&&t.osVersion&&0<=e.indexOf("Version/")&&"10"===t.osVersion.split(".")[0]&&(t.osVersion=e.toLowerCase().split("version/")[1].split(" ")[0]),t.desktop=!(t.os||t.android||t.webView),t.webView=(n||s||r)&&e.match(/.*AppleWebKit(?!.*Safari)/i),t.os&&"ios"===t.os){var o=t.osVersion.split("."),l=h.querySelector('meta[name="viewport"]');t.minimalUi=!t.webView&&(r||n)&&(1*o[0]==7?1<=1*o[1]:7<1*o[0])&&l&&0<=l.getAttribute("content").indexOf("minimal-ui")}return t.pixelRatio=f.devicePixelRatio||1,t}(),b=function(){var e=this,t=e.params,a=e.el,i=e.allowSlideNext,s=e.allowSlidePrev;if(!a||0!==a.offsetWidth){if(t.breakpoints&&e.setBreakpoint(),e.allowSlideNext=!0,e.allowSlidePrev=!0,e.updateSize(),e.updateSlides(),t.freeMode){var r=Math.min(Math.max(e.translate,e.maxTranslate()),e.minTranslate());e.setTranslate(r),e.updateActiveIndex(),e.updateSlidesClasses(),t.autoHeight&&e.updateAutoHeight()}else e.updateSlidesClasses(),("auto"===t.slidesPerView||1<t.slidesPerView)&&e.isEnd&&!e.params.centeredSlides?e.slideTo(e.slides.length-1,0,!1,!0):e.slideTo(e.activeIndex,0,!1,!0);e.allowSlidePrev=s,e.allowSlideNext=i}};var w={init:!0,direction:"horizontal",touchEventsTarget:"container",initialSlide:0,speed:300,iOSEdgeSwipeDetection:!1,iOSEdgeSwipeThreshold:20,freeMode:!1,freeModeMomentum:!0,freeModeMomentumRatio:1,freeModeMomentumBounce:!0,freeModeMomentumBounceRatio:1,freeModeMomentumVelocityRatio:1,freeModeSticky:!1,freeModeMinimumVelocity:.02,autoHeight:!1,setWrapperSize:!1,virtualTranslate:!1,effect:"slide",breakpoints:void 0,spaceBetween:0,slidesPerView:1,slidesPerColumn:1,slidesPerColumnFill:"column",slidesPerGroup:1,centeredSlides:!1,slidesOffsetBefore:0,slidesOffsetAfter:0,normalizeSlideIndex:!0,roundLengths:!1,touchRatio:1,touchAngle:45,simulateTouch:!0,shortSwipes:!0,longSwipes:!0,longSwipesRatio:.5,longSwipesMs:300,followFinger:!0,allowTouchMove:!0,threshold:0,touchMoveStopPropagation:!0,touchReleaseOnEdges:!1,uniqueNavElements:!0,resistance:!0,resistanceRatio:.85,watchSlidesProgress:!1,watchSlidesVisibility:!1,grabCursor:!1,preventClicks:!0,preventClicksPropagation:!0,slideToClickedSlide:!1,preloadImages:!0,updateOnImagesReady:!0,loop:!1,loopAdditionalSlides:0,loopedSlides:null,loopFillGroupWithBlank:!1,allowSlidePrev:!0,allowSlideNext:!0,swipeHandler:null,noSwiping:!0,noSwipingClass:"swiper-no-swiping",passiveListeners:!0,containerModifierClass:"swiper-container-",slideClass:"swiper-slide",slideBlankClass:"swiper-slide-invisible-blank",slideActiveClass:"swiper-slide-active",slideDuplicateActiveClass:"swiper-slide-duplicate-active",slideVisibleClass:"swiper-slide-visible",slideDuplicateClass:"swiper-slide-duplicate",slideNextClass:"swiper-slide-next",slideDuplicateNextClass:"swiper-slide-duplicate-next",slidePrevClass:"swiper-slide-prev",slideDuplicatePrevClass:"swiper-slide-duplicate-prev",wrapperClass:"swiper-wrapper",runCallbacksOnInit:!0},y={update:o,translate:d,transition:p,slide:c,loop:u,grabCursor:v,manipulation:m,events:{attachEvents:function(){var e=this,t=e.params,a=e.touchEvents,i=e.el,s=e.wrapperEl;e.onTouchStart=function(e){var t=this,a=t.touchEventsData,i=t.params,s=t.touches,r=e;if(r.originalEvent&&(r=r.originalEvent),a.isTouchEvent="touchstart"===r.type,(a.isTouchEvent||!("which"in r)||3!==r.which)&&(!a.isTouched||!a.isMoved))if(i.noSwiping&&I(r.target).closest("."+i.noSwipingClass)[0])t.allowClick=!0;else if(!i.swipeHandler||I(r).closest(i.swipeHandler)[0]){s.currentX="touchstart"===r.type?r.targetTouches[0].pageX:r.pageX,s.currentY="touchstart"===r.type?r.targetTouches[0].pageY:r.pageY;var n=s.currentX,o=s.currentY;if(!(g.ios&&i.iOSEdgeSwipeDetection&&n<=i.iOSEdgeSwipeThreshold)){if(D.extend(a,{isTouched:!0,isMoved:!1,allowTouchCallbacks:!0,isScrolling:void 0,startMoving:void 0}),s.startX=n,s.startY=o,a.touchStartTime=D.now(),t.allowClick=!0,t.updateSize(),t.swipeDirection=void 0,0<i.threshold&&(a.allowThresholdMove=!1),"touchstart"!==r.type){var l=!0;I(r.target).is(a.formElements)&&(l=!1),h.activeElement&&I(h.activeElement).is(a.formElements)&&h.activeElement.blur(),l&&r.preventDefault()}t.emit("touchStart",r)}}}.bind(e),e.onTouchMove=function(e){var t=this,a=t.touchEventsData,i=t.params,s=t.touches,r=t.rtl,n=e;if(n.originalEvent&&(n=n.originalEvent),!a.isTouchEvent||"mousemove"!==n.type){var o,l="touchmove"===n.type?n.targetTouches[0].pageX:n.pageX,d="touchmove"===n.type?n.targetTouches[0].pageY:n.pageY;if(n.preventedByNestedSwiper)return s.startX=l,void(s.startY=d);if(!t.allowTouchMove)return t.allowClick=!1,void(a.isTouched&&(D.extend(s,{startX:l,startY:d,currentX:l,currentY:d}),a.touchStartTime=D.now()));if(a.isTouchEvent&&i.touchReleaseOnEdges&&!i.loop)if(t.isVertical()){if(s.currentY<s.startY&&t.translate<=t.maxTranslate()||s.currentY>s.startY&&t.translate>=t.minTranslate())return}else if(s.currentX<s.startX&&t.translate<=t.maxTranslate()||s.currentX>s.startX&&t.translate>=t.minTranslate())return;if(a.isTouchEvent&&h.activeElement&&n.target===h.activeElement&&I(n.target).is(a.formElements))return a.isMoved=!0,void(t.allowClick=!1);if(a.allowTouchCallbacks&&t.emit("touchMove",n),!(n.targetTouches&&1<n.targetTouches.length)&&(s.currentX="touchmove"===n.type?n.targetTouches[0].pageX:n.pageX,s.currentY="touchmove"===n.type?n.targetTouches[0].pageY:n.pageY,void 0===a.isScrolling&&(t.isHorizontal()&&s.currentY===s.startY||t.isVertical()&&s.currentX===s.startX?a.isScrolling=!1:(o=180*Math.atan2(Math.abs(s.currentY-s.startY),Math.abs(s.currentX-s.startX))/Math.PI,a.isScrolling=t.isHorizontal()?o>i.touchAngle:90-o>i.touchAngle)),a.isScrolling&&t.emit("touchMoveOpposite",n),"undefined"==typeof startMoving&&(s.currentX===s.startX&&s.currentY===s.startY||(a.startMoving=!0)),a.isTouched))if(a.isScrolling)a.isTouched=!1;else if(a.startMoving){t.allowClick=!1,n.preventDefault(),i.touchMoveStopPropagation&&!i.nested&&n.stopPropagation(),a.isMoved||(i.loop&&t.loopFix(),a.startTranslate=t.getTranslate(),t.setTransition(0),t.animating&&t.$wrapperEl.trigger("webkitTransitionEnd transitionend"),a.allowMomentumBounce=!1,!i.grabCursor||!0!==t.allowSlideNext&&!0!==t.allowSlidePrev||t.setGrabCursor(!0),t.emit("sliderFirstMove",n)),t.emit("sliderMove",n),a.isMoved=!0;var p=t.isHorizontal()?s.currentX-s.startX:s.currentY-s.startY;s.diff=p,p*=i.touchRatio,r&&(p=-p),t.swipeDirection=0<p?"prev":"next",a.currentTranslate=p+a.startTranslate;var c=!0,u=i.resistanceRatio;if(i.touchReleaseOnEdges&&(u=0),0<p&&a.currentTranslate>t.minTranslate()?(c=!1,i.resistance&&(a.currentTranslate=t.minTranslate()-1+Math.pow(-t.minTranslate()+a.startTranslate+p,u))):p<0&&a.currentTranslate<t.maxTranslate()&&(c=!1,i.resistance&&(a.currentTranslate=t.maxTranslate()+1-Math.pow(t.maxTranslate()-a.startTranslate-p,u))),c&&(n.preventedByNestedSwiper=!0),!t.allowSlideNext&&"next"===t.swipeDirection&&a.currentTranslate<a.startTranslate&&(a.currentTranslate=a.startTranslate),!t.allowSlidePrev&&"prev"===t.swipeDirection&&a.currentTranslate>a.startTranslate&&(a.currentTranslate=a.startTranslate),0<i.threshold){if(!(Math.abs(p)>i.threshold||a.allowThresholdMove))return void(a.currentTranslate=a.startTranslate);if(!a.allowThresholdMove)return a.allowThresholdMove=!0,s.startX=s.currentX,s.startY=s.currentY,a.currentTranslate=a.startTranslate,void(s.diff=t.isHorizontal()?s.currentX-s.startX:s.currentY-s.startY)}i.followFinger&&((i.freeMode||i.watchSlidesProgress||i.watchSlidesVisibility)&&(t.updateActiveIndex(),t.updateSlidesClasses()),i.freeMode&&(0===a.velocities.length&&a.velocities.push({position:s[t.isHorizontal()?"startX":"startY"],time:a.touchStartTime}),a.velocities.push({position:s[t.isHorizontal()?"currentX":"currentY"],time:D.now()})),t.updateProgress(a.currentTranslate),t.setTranslate(a.currentTranslate))}}}.bind(e),e.onTouchEnd=function(e){var t=this,a=t.touchEventsData,i=t.params,s=t.touches,r=t.rtl,n=t.$wrapperEl,o=t.slidesGrid,l=t.snapGrid,d=e;if(d.originalEvent&&(d=d.originalEvent),a.allowTouchCallbacks&&t.emit("touchEnd",d),a.allowTouchCallbacks=!1,a.isTouched){i.grabCursor&&a.isMoved&&a.isTouched&&(!0===t.allowSlideNext||!0===t.allowSlidePrev)&&t.setGrabCursor(!1);var p,c=D.now(),u=c-a.touchStartTime;if(t.allowClick&&(t.updateClickedSlide(d),t.emit("tap",d),u<300&&300<c-a.lastClickTime&&(a.clickTimeout&&clearTimeout(a.clickTimeout),a.clickTimeout=D.nextTick(function(){t&&!t.destroyed&&t.emit("click",d)},300)),u<300&&c-a.lastClickTime<300&&(a.clickTimeout&&clearTimeout(a.clickTimeout),t.emit("doubleTap",d))),a.lastClickTime=D.now(),D.nextTick(function(){t.destroyed||(t.allowClick=!0)}),!a.isTouched||!a.isMoved||!t.swipeDirection||0===s.diff||a.currentTranslate===a.startTranslate)return a.isTouched=!1,void(a.isMoved=!1);if(a.isTouched=!1,a.isMoved=!1,p=i.followFinger?r?t.translate:-t.translate:-a.currentTranslate,i.freeMode){if(p<-t.minTranslate())return void t.slideTo(t.activeIndex);if(p>-t.maxTranslate())return void(t.slides.length<l.length?t.slideTo(l.length-1):t.slideTo(t.slides.length-1));if(i.freeModeMomentum){if(1<a.velocities.length){var h=a.velocities.pop(),f=a.velocities.pop(),v=h.position-f.position,m=h.time-f.time;t.velocity=v/m,t.velocity/=2,Math.abs(t.velocity)<i.freeModeMinimumVelocity&&(t.velocity=0),(150<m||300<D.now()-h.time)&&(t.velocity=0)}else t.velocity=0;t.velocity*=i.freeModeMomentumVelocityRatio,a.velocities.length=0;var g=1e3*i.freeModeMomentumRatio,b=t.velocity*g,w=t.translate+b;r&&(w=-w);var y,x=!1,T=20*Math.abs(t.velocity)*i.freeModeMomentumBounceRatio;if(w<t.maxTranslate())i.freeModeMomentumBounce?(w+t.maxTranslate()<-T&&(w=t.maxTranslate()-T),y=t.maxTranslate(),x=!0,a.allowMomentumBounce=!0):w=t.maxTranslate();else if(w>t.minTranslate())i.freeModeMomentumBounce?(w-t.minTranslate()>T&&(w=t.minTranslate()+T),y=t.minTranslate(),x=!0,a.allowMomentumBounce=!0):w=t.minTranslate();else if(i.freeModeSticky){for(var E,S=0;S<l.length;S+=1)if(l[S]>-w){E=S;break}w=Math.abs(l[E]-w)<Math.abs(l[E-1]-w)||"next"===t.swipeDirection?l[E]:l[E-1],r||(w=-w)}if(0!==t.velocity)g=r?Math.abs((-w-t.translate)/t.velocity):Math.abs((w-t.translate)/t.velocity);else if(i.freeModeSticky)return void t.slideReset();i.freeModeMomentumBounce&&x?(t.updateProgress(y),t.setTransition(g),t.setTranslate(w),t.transitionStart(),t.animating=!0,n.transitionEnd(function(){t&&!t.destroyed&&a.allowMomentumBounce&&(t.emit("momentumBounce"),t.setTransition(i.speed),t.setTranslate(y),n.transitionEnd(function(){t&&!t.destroyed&&t.transitionEnd()}))})):t.velocity?(t.updateProgress(w),t.setTransition(g),t.setTranslate(w),t.transitionStart(),t.animating||(t.animating=!0,n.transitionEnd(function(){t&&!t.destroyed&&t.transitionEnd()}))):t.updateProgress(w),t.updateActiveIndex(),t.updateSlidesClasses()}(!i.freeModeMomentum||u>=i.longSwipesMs)&&(t.updateProgress(),t.updateActiveIndex(),t.updateSlidesClasses())}else{for(var C=0,M=t.slidesSizesGrid[0],z=0;z<o.length;z+=i.slidesPerGroup)void 0!==o[z+i.slidesPerGroup]?p>=o[z]&&p<o[z+i.slidesPerGroup]&&(M=o[(C=z)+i.slidesPerGroup]-o[z]):p>=o[z]&&(C=z,M=o[o.length-1]-o[o.length-2]);var P=(p-o[C])/M;if(u>i.longSwipesMs){if(!i.longSwipes)return void t.slideTo(t.activeIndex);"next"===t.swipeDirection&&(P>=i.longSwipesRatio?t.slideTo(C+i.slidesPerGroup):t.slideTo(C)),"prev"===t.swipeDirection&&(P>1-i.longSwipesRatio?t.slideTo(C+i.slidesPerGroup):t.slideTo(C))}else{if(!i.shortSwipes)return void t.slideTo(t.activeIndex);"next"===t.swipeDirection&&t.slideTo(C+i.slidesPerGroup),"prev"===t.swipeDirection&&t.slideTo(C)}}}}.bind(e),e.onClick=function(e){this.allowClick||(this.params.preventClicks&&e.preventDefault(),this.params.preventClicksPropagation&&this.animating&&(e.stopPropagation(),e.stopImmediatePropagation()))}.bind(e);var r="container"===t.touchEventsTarget?i:s,n=!!t.nested;if(L.ie)r.addEventListener(a.start,e.onTouchStart,!1),(O.touch?r:h).addEventListener(a.move,e.onTouchMove,n),(O.touch?r:h).addEventListener(a.end,e.onTouchEnd,!1);else{if(O.touch){var o=!("onTouchStart"!==a.start||!O.passiveListener||!t.passiveListeners)&&{passive:!0,capture:!1};r.addEventListener(a.start,e.onTouchStart,o),r.addEventListener(a.move,e.onTouchMove,n),r.addEventListener(a.end,e.onTouchEnd,o)}(t.simulateTouch&&!g.ios&&!g.android||t.simulateTouch&&!O.touch&&g.ios)&&(r.addEventListener("mousedown",e.onTouchStart,!1),h.addEventListener("mousemove",e.onTouchMove,n),h.addEventListener("mouseup",e.onTouchEnd,!1))}(t.preventClicks||t.preventClicksPropagation)&&r.addEventListener("click",e.onClick,!0),e.on("resize observerUpdate",b)},detachEvents:function(){var e=this,t=e.params,a=e.touchEvents,i=e.el,s=e.wrapperEl,r="container"===t.touchEventsTarget?i:s,n=!!t.nested;if(L.ie)r.removeEventListener(a.start,e.onTouchStart,!1),(O.touch?r:h).removeEventListener(a.move,e.onTouchMove,n),(O.touch?r:h).removeEventListener(a.end,e.onTouchEnd,!1);else{if(O.touch){var o=!("onTouchStart"!==a.start||!O.passiveListener||!t.passiveListeners)&&{passive:!0,capture:!1};r.removeEventListener(a.start,e.onTouchStart,o),r.removeEventListener(a.move,e.onTouchMove,n),r.removeEventListener(a.end,e.onTouchEnd,o)}(t.simulateTouch&&!g.ios&&!g.android||t.simulateTouch&&!O.touch&&g.ios)&&(r.removeEventListener("mousedown",e.onTouchStart,!1),h.removeEventListener("mousemove",e.onTouchMove,n),h.removeEventListener("mouseup",e.onTouchEnd,!1))}(t.preventClicks||t.preventClicksPropagation)&&r.removeEventListener("click",e.onClick,!0),e.off("resize observerUpdate",b)}},breakpoints:{setBreakpoint:function(){var e=this,t=e.activeIndex,a=e.loopedSlides;void 0===a&&(a=0);var i=e.params,s=i.breakpoints;if(s&&(!s||0!==Object.keys(s).length)){var r=e.getBreakpoint(s);if(r&&e.currentBreakpoint!==r){var n=r in s?s[r]:e.originalParams,o=i.loop&&n.slidesPerView!==i.slidesPerView;if(D.extend(e.params,n),D.extend(e,{allowTouchMove:e.params.allowTouchMove,allowSlideNext:e.params.allowSlideNext,allowSlidePrev:e.params.allowSlidePrev}),e.currentBreakpoint=r,o){var l=t-a;e.loopDestroy(),e.loopCreate(),e.updateSlides(),e.slideTo(l+a,0,!1)}}}},getBreakpoint:function(e){if(e){var t=!1,a=[];Object.keys(e).forEach(function(e){a.push(e)}),a.sort(function(e,t){return parseInt(e,10)>parseInt(t,10)});for(var i=0;i<a.length;i+=1){var s=a[i];s>=f.innerWidth&&!t&&(t=s)}return t||"max"}}},classes:{addClasses:function(){var t=this.classNames,a=this.params,e=this.rtl,i=this.$el,s=[];s.push(a.direction),a.freeMode&&s.push("free-mode"),O.flexbox||s.push("no-flexbox"),a.autoHeight&&s.push("autoheight"),e&&s.push("rtl"),1<a.slidesPerColumn&&s.push("multirow"),g.android&&s.push("android"),g.ios&&s.push("ios"),(f.navigator.pointerEnabled||f.navigator.msPointerEnabled)&&s.push("wp8-"+a.direction),s.forEach(function(e){t.push(a.containerModifierClass+e)}),i.addClass(t.join(" "))},removeClasses:function(){var e=this.$el,t=this.classNames;e.removeClass(t.join(" "))}},images:{loadImage:function(e,t,a,i,s,r){var n;function o(){r&&r()}e.complete&&s?o():t?((n=new f.Image).onload=o,n.onerror=o,i&&(n.sizes=i),a&&(n.srcset=a),t&&(n.src=t)):o()},preloadImages:function(){var e=this;function t(){null!=e&&e&&!e.destroyed&&(void 0!==e.imagesLoaded&&(e.imagesLoaded+=1),e.imagesLoaded===e.imagesToLoad.length&&(e.params.updateOnImagesReady&&e.update(),e.emit("imagesReady")))}e.imagesToLoad=e.$el.find("img");for(var a=0;a<e.imagesToLoad.length;a+=1){var i=e.imagesToLoad[a];e.loadImage(i,i.currentSrc||i.getAttribute("src"),i.srcset||i.getAttribute("srcset"),i.sizes||i.getAttribute("sizes"),!0,t)}}}},x={},T=function(u){function h(){for(var e,s,t,a=[],i=arguments.length;i--;)a[i]=arguments[i];1===a.length&&a[0].constructor&&a[0].constructor===Object?s=a[0]:(e=(t=a)[0],s=t[1]);s||(s={}),s=D.extend({},s),e&&!s.el&&(s.el=e),u.call(this,s),Object.keys(y).forEach(function(t){Object.keys(y[t]).forEach(function(e){h.prototype[e]||(h.prototype[e]=y[t][e])})});var r=this;Object.keys(r.modules).forEach(function(e){var t=r.modules[e];if(t.params){var a=Object.keys(t.params)[0],i=t.params[a];if("object"!=typeof i)return;if(!(a in s&&"enabled"in i))return;!0===s[a]&&(s[a]={enabled:!0}),"object"!=typeof s[a]||"enabled"in s[a]||(s[a].enabled=!0),s[a]||(s[a]={enabled:!1})}});var n=D.extend({},w);r.useModulesParams(n),r.params=D.extend({},n,x,s),r.originalParams=D.extend({},r.params),r.passedParams=D.extend({},s);var o=I(r.params.el);if(e=o[0]){if(1<o.length){var l=[];return o.each(function(e,t){var a=D.extend({},s,{el:t});l.push(new h(a))}),l}e.swiper=r,o.data("swiper",r);var d,p,c=o.children("."+r.params.wrapperClass);return D.extend(r,{$el:o,el:e,$wrapperEl:c,wrapperEl:c[0],classNames:[],slides:I(),slidesGrid:[],snapGrid:[],slidesSizesGrid:[],isHorizontal:function(){return"horizontal"===r.params.direction},isVertical:function(){return"vertical"===r.params.direction},rtl:"horizontal"===r.params.direction&&("rtl"===e.dir.toLowerCase()||"rtl"===o.css("direction")),wrongRTL:"-webkit-box"===c.css("display"),activeIndex:0,realIndex:0,isBeginning:!0,isEnd:!1,translate:0,progress:0,velocity:0,animating:!1,allowSlideNext:r.params.allowSlideNext,allowSlidePrev:r.params.allowSlidePrev,touchEvents:(d=["touchstart","touchmove","touchend"],p=["mousedown","mousemove","mouseup"],f.navigator.pointerEnabled?p=["pointerdown","pointermove","pointerup"]:f.navigator.msPointerEnabled&&(p=["MSPointerDown","MsPointerMove","MsPointerUp"]),{start:O.touch||!r.params.simulateTouch?d[0]:p[0],move:O.touch||!r.params.simulateTouch?d[1]:p[1],end:O.touch||!r.params.simulateTouch?d[2]:p[2]}),touchEventsData:{isTouched:void 0,isMoved:void 0,allowTouchCallbacks:void 0,touchStartTime:void 0,isScrolling:void 0,currentTranslate:void 0,startTranslate:void 0,allowThresholdMove:void 0,formElements:"input, select, option, textarea, button, video",lastClickTime:D.now(),clickTimeout:void 0,velocities:[],allowMomentumBounce:void 0,isTouchEvent:void 0,startMoving:void 0},allowClick:!0,allowTouchMove:r.params.allowTouchMove,touches:{startX:0,startY:0,currentX:0,currentY:0,diff:0},imagesToLoad:[],imagesLoaded:0}),r.useModules(),r.params.init&&r.init(),r}}u&&(h.__proto__=u);var e={extendedDefaults:{},defaults:{},Class:{},$:{}};return((h.prototype=Object.create(u&&u.prototype)).constructor=h).prototype.slidesPerViewDynamic=function(){var e=this,t=e.params,a=e.slides,i=e.slidesGrid,s=e.size,r=e.activeIndex,n=1;if(t.centeredSlides){for(var o,l=a[r].swiperSlideSize,d=r+1;d<a.length;d+=1)a[d]&&!o&&(n+=1,s<(l+=a[d].swiperSlideSize)&&(o=!0));for(var p=r-1;0<=p;p-=1)a[p]&&!o&&(n+=1,s<(l+=a[p].swiperSlideSize)&&(o=!0))}else for(var c=r+1;c<a.length;c+=1)i[c]-i[r]<s&&(n+=1);return n},h.prototype.update=function(){var e,t=this;t&&!t.destroyed&&(t.updateSize(),t.updateSlides(),t.updateProgress(),t.updateSlidesClasses(),t.params.freeMode?(a(),t.params.autoHeight&&t.updateAutoHeight()):(("auto"===t.params.slidesPerView||1<t.params.slidesPerView)&&t.isEnd&&!t.params.centeredSlides?t.slideTo(t.slides.length-1,0,!1,!0):t.slideTo(t.activeIndex,0,!1,!0))||a(),t.emit("update"));function a(){e=Math.min(Math.max(t.translate,t.maxTranslate()),t.minTranslate()),t.setTranslate(e),t.updateActiveIndex(),t.updateSlidesClasses()}},h.prototype.init=function(){var e=this;e.initialized||(e.emit("beforeInit"),e.params.breakpoints&&e.setBreakpoint(),e.addClasses(),e.params.loop&&e.loopCreate(),e.updateSize(),e.updateSlides(),e.params.grabCursor&&e.setGrabCursor(),e.params.preloadImages&&e.preloadImages(),e.params.loop?e.slideTo(e.params.initialSlide+e.loopedSlides,0,e.params.runCallbacksOnInit):e.slideTo(e.params.initialSlide,0,e.params.runCallbacksOnInit),e.attachEvents(),e.initialized=!0,e.emit("init"))},h.prototype.destroy=function(e,t){void 0===e&&(e=!0),void 0===t&&(t=!0);var a=this,i=a.params,s=a.$el,r=a.$wrapperEl,n=a.slides;a.emit("beforeDestroy"),a.initialized=!1,a.detachEvents(),i.loop&&a.loopDestroy(),t&&(a.removeClasses(),s.removeAttr("style"),r.removeAttr("style"),n&&n.length&&n.removeClass([i.slideVisibleClass,i.slideActiveClass,i.slideNextClass,i.slidePrevClass].join(" ")).removeAttr("style").removeAttr("data-swiper-slide-index").removeAttr("data-swiper-column").removeAttr("data-swiper-row")),a.emit("destroy"),Object.keys(a.eventsListeners).forEach(function(e){a.off(e)}),!1!==e&&(a.$el[0].swiper=null,a.$el.data("swiper",null),D.deleteProps(a)),a.destroyed=!0},h.extendDefaults=function(e){D.extend(x,e)},e.extendedDefaults.get=function(){return x},e.defaults.get=function(){return w},e.Class.get=function(){return u},e.$.get=function(){return I},Object.defineProperties(h,e),h}(a),E={name:"device",proto:{device:g},static:{device:g}},S={name:"support",proto:{support:O},static:{support:O}},C={name:"browser",proto:{browser:L},static:{browser:L}},M={name:"resize",create:function(){var e=this;D.extend(e,{resize:{resizeHandler:function(){e&&!e.destroyed&&e.initialized&&(e.emit("beforeResize"),e.emit("resize"))},orientationChangeHandler:function(){e&&!e.destroyed&&e.initialized&&e.emit("orientationchange")}}})},on:{init:function(){f.addEventListener("resize",this.resize.resizeHandler),f.addEventListener("orientationchange",this.resize.orientationChangeHandler)},destroy:function(){f.removeEventListener("resize",this.resize.resizeHandler),f.removeEventListener("orientationchange",this.resize.orientationChangeHandler)}}},z={func:f.MutationObserver||f.WebkitMutationObserver,attach:function(e,t){void 0===t&&(t={});var a=this,i=new z.func(function(e){e.forEach(function(e){a.emit("observerUpdate",e)})});i.observe(e,{attributes:void 0===t.attributes||t.attributes,childList:void 0===t.childList||t.childList,characterData:void 0===t.characterData||t.characterData}),a.observer.observers.push(i)},init:function(){var e=this;if(O.observer&&e.params.observer){if(e.params.observeParents)for(var t=e.$el.parents(),a=0;a<t.length;a+=1)e.observer.attach(t[a]);e.observer.attach(e.$el[0],{childList:!1}),e.observer.attach(e.$wrapperEl[0],{attributes:!1})}},destroy:function(){this.observer.observers.forEach(function(e){e.disconnect()}),this.observer.observers=[]}},P={name:"observer",params:{observer:!1,observeParents:!1},create:function(){D.extend(this,{observer:{init:z.init.bind(this),attach:z.attach.bind(this),destroy:z.destroy.bind(this),observers:[]}})},on:{init:function(){this.observer.init()},destroy:function(){this.observer.destroy()}}},k={update:function(e){var t=this,a=t.params,i=a.slidesPerView,s=a.slidesPerGroup,r=a.centeredSlides,n=t.virtual,o=n.from,l=n.to,d=n.slides,p=n.slidesGrid,c=n.renderSlide,u=n.offset;t.updateActiveIndex();var h,f,v,m=t.activeIndex||0;h=t.rtl&&t.isHorizontal()?"right":t.isHorizontal()?"left":"top",r?(f=Math.floor(i/2)+s,v=Math.floor(i/2)+s):(f=i+(s-1),v=s);var g=Math.max((m||0)-v,0),b=Math.min((m||0)+f,d.length-1),w=(t.slidesGrid[g]||0)-(t.slidesGrid[0]||0);function y(){t.updateSlides(),t.updateProgress(),t.updateSlidesClasses(),t.lazy&&t.params.lazy.enabled&&t.lazy.load()}if(D.extend(t.virtual,{from:g,to:b,offset:w,slidesGrid:t.slidesGrid}),o===g&&l===b&&!e)return t.slidesGrid!==p&&w!==u&&t.slides.css(h,w+"px"),void t.updateProgress();if(t.params.virtual.renderExternal)return t.params.virtual.renderExternal.call(t,{offset:w,from:g,to:b,slides:function(){for(var e=[],t=g;t<=b;t+=1)e.push(d[t]);return e}()}),void y();var x=[],T=[];if(e)t.$wrapperEl.find("."+t.params.slideClass).remove();else for(var E=o;E<=l;E+=1)(E<g||b<E)&&t.$wrapperEl.find("."+t.params.slideClass+'[data-swiper-slide-index="'+E+'"]').remove();for(var S=0;S<d.length;S+=1)g<=S&&S<=b&&(void 0===l||e?T.push(S):(l<S&&T.push(S),S<o&&x.push(S)));T.forEach(function(e){t.$wrapperEl.append(c(d[e],e))}),x.sort(function(e,t){return e<t}).forEach(function(e){t.$wrapperEl.prepend(c(d[e],e))}),t.$wrapperEl.children(".swiper-slide").css(h,w+"px"),y()},renderSlide:function(e,t){var a=this,i=a.params.virtual;if(i.cache&&a.virtual.cache[t])return a.virtual.cache[t];var s=i.renderSlide?I(i.renderSlide.call(a,e,t)):I('<div class="'+a.params.slideClass+'" data-swiper-slide-index="'+t+'">'+e+"</div>");return s.attr("data-swiper-slide-index")||s.attr("data-swiper-slide-index",t),i.cache&&(a.virtual.cache[t]=s),s},appendSlide:function(e){this.virtual.slides.push(e),this.virtual.update(!0)},prependSlide:function(e){var t=this;if(t.virtual.slides.unshift(e),t.params.virtual.cache){var a=t.virtual.cache,i={};Object.keys(a).forEach(function(e){i[e+1]=a[e]}),t.virtual.cache=i}t.virtual.update(!0),t.slideNext(0)}},A={name:"virtual",params:{virtual:{enabled:!1,slides:[],cache:!0,renderSlide:null,renderExternal:null}},create:function(){var e=this;D.extend(e,{virtual:{update:k.update.bind(e),appendSlide:k.appendSlide.bind(e),prependSlide:k.prependSlide.bind(e),renderSlide:k.renderSlide.bind(e),slides:e.params.virtual.slides,cache:{}}})},on:{beforeInit:function(){var e=this;if(e.params.virtual.enabled){e.classNames.push(e.params.containerModifierClass+"virtual");var t={watchSlidesProgress:!0};D.extend(e.params,t),D.extend(e.originalParams,t),e.virtual.update()}},setTranslate:function(){this.params.virtual.enabled&&this.virtual.update()}}},H={handle:function(e){var t=this,a=e;a.originalEvent&&(a=a.originalEvent);var i=a.keyCode||a.charCode;if(!t.allowSlideNext&&(t.isHorizontal()&&39===i||t.isVertical()&&40===i))return!1;if(!t.allowSlidePrev&&(t.isHorizontal()&&37===i||t.isVertical()&&38===i))return!1;if(!(a.shiftKey||a.altKey||a.ctrlKey||a.metaKey||h.activeElement&&h.activeElement.nodeName&&("input"===h.activeElement.nodeName.toLowerCase()||"textarea"===h.activeElement.nodeName.toLowerCase()))){if(37===i||39===i||38===i||40===i){var s=!1;if(0<t.$el.parents("."+t.params.slideClass).length&&0===t.$el.parents("."+t.params.slideActiveClass).length)return;var r=f.pageXOffset,n=f.pageYOffset,o=f.innerWidth,l=f.innerHeight,d=t.$el.offset();t.rtl&&(d.left-=t.$el[0].scrollLeft);for(var p=[[d.left,d.top],[d.left+t.width,d.top],[d.left,d.top+t.height],[d.left+t.width,d.top+t.height]],c=0;c<p.length;c+=1){var u=p[c];u[0]>=r&&u[0]<=r+o&&u[1]>=n&&u[1]<=n+l&&(s=!0)}if(!s)return}t.isHorizontal()?(37!==i&&39!==i||(a.preventDefault?a.preventDefault():a.returnValue=!1),(39===i&&!t.rtl||37===i&&t.rtl)&&t.slideNext(),(37===i&&!t.rtl||39===i&&t.rtl)&&t.slidePrev()):(38!==i&&40!==i||(a.preventDefault?a.preventDefault():a.returnValue=!1),40===i&&t.slideNext(),38===i&&t.slidePrev()),t.emit("keyPress",i)}},enable:function(){this.keyboard.enabled||(I(h).on("keydown",this.keyboard.handle),this.keyboard.enabled=!0)},disable:function(){this.keyboard.enabled&&(I(h).off("keydown",this.keyboard.handle),this.keyboard.enabled=!1)}},X={name:"keyboard",params:{keyboard:{enabled:!1}},create:function(){D.extend(this,{keyboard:{enabled:!1,enable:H.enable.bind(this),disable:H.disable.bind(this),handle:H.handle.bind(this)}})},on:{init:function(){this.params.keyboard.enabled&&this.keyboard.enable()},destroy:function(){this.keyboard.enabled&&this.keyboard.disable()}}};var N={lastScrollTime:D.now(),event:-1<f.navigator.userAgent.indexOf("firefox")?"DOMMouseScroll":function(){var e="onwheel",t=e in h;if(!t){var a=h.createElement("div");a.setAttribute(e,"return;"),t="function"==typeof a[e]}return!t&&h.implementation&&h.implementation.hasFeature&&!0!==h.implementation.hasFeature("","")&&(t=h.implementation.hasFeature("Events.wheel","3.0")),t}()?"wheel":"mousewheel",normalize:function(e){var t=0,a=0,i=0,s=0;return"detail"in e&&(a=e.detail),"wheelDelta"in e&&(a=-e.wheelDelta/120),"wheelDeltaY"in e&&(a=-e.wheelDeltaY/120),"wheelDeltaX"in e&&(t=-e.wheelDeltaX/120),"axis"in e&&e.axis===e.HORIZONTAL_AXIS&&(t=a,a=0),i=10*t,s=10*a,"deltaY"in e&&(s=e.deltaY),"deltaX"in e&&(i=e.deltaX),(i||s)&&e.deltaMode&&(1===e.deltaMode?(i*=40,s*=40):(i*=800,s*=800)),i&&!t&&(t=i<1?-1:1),s&&!a&&(a=s<1?-1:1),{spinX:t,spinY:a,pixelX:i,pixelY:s}},handle:function(e){var t=e,a=this,i=a.params.mousewheel;t.originalEvent&&(t=t.originalEvent);var s=0,r=a.rtl?-1:1,n=N.normalize(t);if(i.forceToAxis)if(a.isHorizontal()){if(!(Math.abs(n.pixelX)>Math.abs(n.pixelY)))return!0;s=n.pixelX*r}else{if(!(Math.abs(n.pixelY)>Math.abs(n.pixelX)))return!0;s=n.pixelY}else s=Math.abs(n.pixelX)>Math.abs(n.pixelY)?-n.pixelX*r:-n.pixelY;if(0===s)return!0;if(i.invert&&(s=-s),a.params.freeMode){var o=a.getTranslate()+s*i.sensitivity,l=a.isBeginning,d=a.isEnd;if(o>=a.minTranslate()&&(o=a.minTranslate()),o<=a.maxTranslate()&&(o=a.maxTranslate()),a.setTransition(0),a.setTranslate(o),a.updateProgress(),a.updateActiveIndex(),a.updateSlidesClasses(),(!l&&a.isBeginning||!d&&a.isEnd)&&a.updateSlidesClasses(),a.params.freeModeSticky&&(clearTimeout(a.mousewheel.timeout),a.mousewheel.timeout=D.nextTick(function(){a.slideReset()},300)),a.emit("scroll",t),a.params.autoplay&&a.params.autoplayDisableOnInteraction&&a.stopAutoplay(),0===o||o===a.maxTranslate())return!0}else{if(60<D.now()-a.mousewheel.lastScrollTime)if(s<0)if(a.isEnd&&!a.params.loop||a.animating){if(i.releaseOnEdges)return!0}else a.slideNext(),a.emit("scroll",t);else if(a.isBeginning&&!a.params.loop||a.animating){if(i.releaseOnEdges)return!0}else a.slidePrev(),a.emit("scroll",t);a.mousewheel.lastScrollTime=(new f.Date).getTime()}return t.preventDefault?t.preventDefault():t.returnValue=!1,!1},enable:function(){var e=this;if(!N.event)return!1;if(e.mousewheel.enabled)return!1;var t=e.$el;return"container"!==e.params.mousewheel.eventsTarged&&(t=I(e.params.mousewheel.eventsTarged)),t.on(N.event,e.mousewheel.handle),e.mousewheel.enabled=!0},disable:function(){var e=this;if(!N.event)return!1;if(!e.mousewheel.enabled)return!1;var t=e.$el;return"container"!==e.params.mousewheel.eventsTarged&&(t=I(e.params.mousewheel.eventsTarged)),t.off(N.event,e.mousewheel.handle),!(e.mousewheel.enabled=!1)}},Y={name:"mousewheel",params:{mousewheel:{enabled:!1,releaseOnEdges:!1,invert:!1,forceToAxis:!1,sensitivity:1,eventsTarged:"container"}},create:function(){D.extend(this,{mousewheel:{enabled:!1,enable:N.enable.bind(this),disable:N.disable.bind(this),handle:N.handle.bind(this),lastScrollTime:D.now()}})},on:{init:function(){this.params.mousewheel.enabled&&this.mousewheel.enable()},destroy:function(){this.mousewheel.enabled&&this.mousewheel.disable()}}},G={update:function(){var e=this,t=e.params.navigation;if(!e.params.loop){var a=e.navigation,i=a.$nextEl,s=a.$prevEl;s&&0<s.length&&(e.isBeginning?s.addClass(t.disabledClass):s.removeClass(t.disabledClass)),i&&0<i.length&&(e.isEnd?i.addClass(t.disabledClass):i.removeClass(t.disabledClass))}},init:function(){var e,t,a=this,i=a.params.navigation;(i.nextEl||i.prevEl)&&(i.nextEl&&(e=I(i.nextEl),a.params.uniqueNavElements&&"string"==typeof i.nextEl&&1<e.length&&1===a.$el.find(i.nextEl).length&&(e=a.$el.find(i.nextEl))),i.prevEl&&(t=I(i.prevEl),a.params.uniqueNavElements&&"string"==typeof i.prevEl&&1<t.length&&1===a.$el.find(i.prevEl).length&&(t=a.$el.find(i.prevEl))),e&&0<e.length&&e.on("click",function(e){e.preventDefault(),a.isEnd&&!a.params.loop||a.slideNext()}),t&&0<t.length&&t.on("click",function(e){e.preventDefault(),a.isBeginning&&!a.params.loop||a.slidePrev()}),D.extend(a.navigation,{$nextEl:e,nextEl:e&&e[0],$prevEl:t,prevEl:t&&t[0]}))},destroy:function(){var e=this.navigation,t=e.$nextEl,a=e.$prevEl;t&&t.length&&(t.off("click"),t.removeClass(this.params.navigation.disabledClass)),a&&a.length&&(a.off("click"),a.removeClass(this.params.navigation.disabledClass))}},B={name:"navigation",params:{navigation:{nextEl:null,prevEl:null,hideOnClick:!1,disabledClass:"swiper-button-disabled",hiddenClass:"swiper-button-hidden"}},create:function(){D.extend(this,{navigation:{init:G.init.bind(this),update:G.update.bind(this),destroy:G.destroy.bind(this)}})},on:{init:function(){this.navigation.init(),this.navigation.update()},toEdge:function(){this.navigation.update()},fromEdge:function(){this.navigation.update()},destroy:function(){this.navigation.destroy()},click:function(e){var t=this.navigation,a=t.$nextEl,i=t.$prevEl;!this.params.navigation.hideOnClick||I(e.target).is(i)||I(e.target).is(a)||(a&&a.toggleClass(this.params.navigation.hiddenClass),i&&i.toggleClass(this.params.navigation.hiddenClass))}}},V={update:function(){var e=this,t=e.rtl,i=e.params.pagination;if(i.el&&e.pagination.el&&e.pagination.$el&&0!==e.pagination.$el.length){var s,a=e.virtual&&e.params.virtual.enabled?e.virtual.slides.length:e.slides.length,r=e.pagination.$el,n=e.params.loop?Math.ceil((a-2*e.loopedSlides)/e.params.slidesPerGroup):e.snapGrid.length;if(e.params.loop?((s=Math.ceil((e.activeIndex-e.loopedSlides)/e.params.slidesPerGroup))>a-1-2*e.loopedSlides&&(s-=a-2*e.loopedSlides),n-1<s&&(s-=n),s<0&&"bullets"!==e.params.paginationType&&(s=n+s)):s=void 0!==e.snapIndex?e.snapIndex:e.activeIndex||0,"bullets"===i.type&&e.pagination.bullets&&0<e.pagination.bullets.length){var o=e.pagination.bullets;if(i.dynamicBullets&&(e.pagination.bulletSize=o.eq(0)[e.isHorizontal()?"outerWidth":"outerHeight"](!0),r.css(e.isHorizontal()?"width":"height",5*e.pagination.bulletSize+"px")),o.removeClass(i.bulletActiveClass+" "+i.bulletActiveClass+"-next "+i.bulletActiveClass+"-next-next "+i.bulletActiveClass+"-prev "+i.bulletActiveClass+"-prev-prev"),1<r.length)o.each(function(e,t){var a=I(t);a.index()===s&&(a.addClass(i.bulletActiveClass),i.dynamicBullets&&(a.prev().addClass(i.bulletActiveClass+"-prev").prev().addClass(i.bulletActiveClass+"-prev-prev"),a.next().addClass(i.bulletActiveClass+"-next").next().addClass(i.bulletActiveClass+"-next-next")))});else{var l=o.eq(s);l.addClass(i.bulletActiveClass),i.dynamicBullets&&(l.prev().addClass(i.bulletActiveClass+"-prev").prev().addClass(i.bulletActiveClass+"-prev-prev"),l.next().addClass(i.bulletActiveClass+"-next").next().addClass(i.bulletActiveClass+"-next-next"))}if(i.dynamicBullets){var d=Math.min(o.length,5),p=(e.pagination.bulletSize*d-e.pagination.bulletSize)/2-s*e.pagination.bulletSize,c=t?"right":"left";o.css(e.isHorizontal()?c:"top",p+"px")}}if("fraction"===i.type&&(r.find("."+i.currentClass).text(s+1),r.find("."+i.totalClass).text(n)),"progressbar"===i.type){var u=(s+1)/n,h=u,f=1;e.isHorizontal()||(f=u,h=1),r.find("."+i.progressbarFillClass).transform("translate3d(0,0,0) scaleX("+h+") scaleY("+f+")").transition(e.params.speed)}"custom"===i.type&&i.renderCustom?(r.html(i.renderCustom(e,s+1,n)),e.emit("paginationRender",e,r[0])):e.emit("paginationUpdate",e,r[0])}},render:function(){var e=this,t=e.params.pagination;if(t.el&&e.pagination.el&&e.pagination.$el&&0!==e.pagination.$el.length){var a=e.virtual&&e.params.virtual.enabled?e.virtual.slides.length:e.slides.length,i=e.pagination.$el,s="";if("bullets"===t.type){for(var r=e.params.loop?Math.ceil((a-2*e.loopedSlides)/e.params.slidesPerGroup):e.snapGrid.length,n=0;n<r;n+=1)t.renderBullet?s+=t.renderBullet.call(e,n,t.bulletClass):s+="<"+t.bulletElement+' class="'+t.bulletClass+'"></'+t.bulletElement+">";i.html(s),e.pagination.bullets=i.find("."+t.bulletClass)}"fraction"===t.type&&(s=t.renderFraction?t.renderFraction.call(e,t.currentClass,t.totalClass):'<span class="'+t.currentClass+'"></span> / <span class="'+t.totalClass+'"></span>',i.html(s)),"progressbar"===t.type&&(s=t.renderProgressbar?t.renderProgressbar.call(e,t.progressbarFillClass):'<span class="'+t.progressbarFillClass+'"></span>',i.html(s)),"custom"!==t.type&&e.emit("paginationRender",e.pagination.$el[0])}},init:function(){var a=this,e=a.params.pagination;if(e.el){var t=I(e.el);0!==t.length&&(a.params.uniqueNavElements&&"string"==typeof e.el&&1<t.length&&1===a.$el.find(e.el).length&&(t=a.$el.find(e.el)),"bullets"===e.type&&e.clickable&&t.addClass(e.clickableClass),t.addClass(e.modifierClass+e.type),"bullets"===e.type&&e.dynamicBullets&&t.addClass(""+e.modifierClass+e.type+"-dynamic"),e.clickable&&t.on("click","."+e.bulletClass,function(e){e.preventDefault();var t=I(this).index()*a.params.slidesPerGroup;a.params.loop&&(t+=a.loopedSlides),a.slideTo(t)}),D.extend(a.pagination,{$el:t,el:t[0]}))}},destroy:function(){var e=this,t=e.params.pagination;if(t.el&&e.pagination.el&&e.pagination.$el&&0!==e.pagination.$el.length){var a=e.pagination.$el;a.removeClass(t.hiddenClass),a.removeClass(t.modifierClass+t.type),e.pagination.bullets&&e.pagination.bullets.removeClass(t.bulletActiveClass),t.clickable&&a.off("click","."+t.bulletClass)}}},R={name:"pagination",params:{pagination:{el:null,bulletElement:"span",clickable:!1,hideOnClick:!1,renderBullet:null,renderProgressbar:null,renderFraction:null,renderCustom:null,type:"bullets",dynamicBullets:!1,bulletClass:"swiper-pagination-bullet",bulletActiveClass:"swiper-pagination-bullet-active",modifierClass:"swiper-pagination-",currentClass:"swiper-pagination-current",totalClass:"swiper-pagination-total",hiddenClass:"swiper-pagination-hidden",progressbarFillClass:"swiper-pagination-progressbar-fill",clickableClass:"swiper-pagination-clickable"}},create:function(){var e=this;D.extend(e,{pagination:{init:V.init.bind(e),render:V.render.bind(e),update:V.update.bind(e),destroy:V.destroy.bind(e)}})},on:{init:function(){this.pagination.init(),this.pagination.render(),this.pagination.update()},activeIndexChange:function(){this.params.loop?this.pagination.update():void 0===this.snapIndex&&this.pagination.update()},snapIndexChange:function(){this.params.loop||this.pagination.update()},slidesLengthChange:function(){this.params.loop&&(this.pagination.render(),this.pagination.update())},snapGridLengthChange:function(){this.params.loop||(this.pagination.render(),this.pagination.update())},destroy:function(){this.pagination.destroy()},click:function(e){var t=this;t.params.pagination.el&&t.params.pagination.hideOnClick&&0<t.pagination.$el.length&&!I(e.target).hasClass(t.params.pagination.bulletClass)&&t.pagination.$el.toggleClass(t.params.pagination.hiddenClass)}}},W={setTranslate:function(){var e=this;if(e.params.scrollbar.el&&e.scrollbar.el){var t=e.scrollbar,a=e.rtl,i=e.progress,s=t.dragSize,r=t.trackSize,n=t.$dragEl,o=t.$el,l=e.params.scrollbar,d=s,p=(r-s)*i;a&&e.isHorizontal()?0<(p=-p)?(d=s-p,p=0):r<-p+s&&(d=r+p):p<0?(d=s+p,p=0):r<p+s&&(d=r-p),e.isHorizontal()?(O.transforms3d?n.transform("translate3d("+p+"px, 0, 0)"):n.transform("translateX("+p+"px)"),n[0].style.width=d+"px"):(O.transforms3d?n.transform("translate3d(0px, "+p+"px, 0)"):n.transform("translateY("+p+"px)"),n[0].style.height=d+"px"),l.hide&&(clearTimeout(e.scrollbar.timeout),o[0].style.opacity=1,e.scrollbar.timeout=setTimeout(function(){o[0].style.opacity=0,o.transition(400)},1e3))}},setTransition:function(e){this.params.scrollbar.el&&this.scrollbar.el&&this.scrollbar.$dragEl.transition(e)},updateSize:function(){var e=this;if(e.params.scrollbar.el&&e.scrollbar.el){var t=e.scrollbar,a=t.$dragEl,i=t.$el;a[0].style.width="",a[0].style.height="";var s,r=e.isHorizontal()?i[0].offsetWidth:i[0].offsetHeight,n=e.size/e.virtualSize,o=n*(r/e.size);s="auto"===e.params.scrollbar.dragSize?r*n:parseInt(e.params.scrollbar.dragSize,10),e.isHorizontal()?a[0].style.width=s+"px":a[0].style.height=s+"px",i[0].style.display=1<=n?"none":"",e.params.scrollbarHide&&(i[0].style.opacity=0),D.extend(t,{trackSize:r,divider:n,moveDivider:o,dragSize:s})}},setDragPosition:function(e){var t=this,a=t.scrollbar,i=a.$el,s=a.dragSize,r=a.moveDivider,n=(t.isHorizontal()?"touchstart"===e.type||"touchmove"===e.type?e.targetTouches[0].pageX:e.pageX||e.clientX:"touchstart"===e.type||"touchmove"===e.type?e.targetTouches[0].pageY:e.pageY||e.clientY)-i.offset()[t.isHorizontal()?"left":"top"]-s/2,o=-t.minTranslate()*r,l=-t.maxTranslate()*r;n<o?n=o:l<n&&(n=l),t.rtl&&(n=l-n),n=-n/r,t.updateProgress(n),t.setTranslate(n),t.updateActiveIndex(),t.updateSlidesClasses()},onDragStart:function(e){var t=this,a=t.params.scrollbar,i=t.scrollbar,s=t.$wrapperEl,r=i.$el,n=i.$dragEl;t.scrollbar.isTouched=!0,e.preventDefault(),e.stopPropagation(),s.transition(100),n.transition(100),i.setDragPosition(e),clearTimeout(t.scrollbar.dragTimeout),r.transition(0),a.hide&&r.css("opacity",1),t.emit("scrollbarDragStart",e)},onDragMove:function(e){var t=this.scrollbar,a=this.$wrapperEl,i=t.$el,s=t.$dragEl;this.scrollbar.isTouched&&(e.preventDefault?e.preventDefault():e.returnValue=!1,t.setDragPosition(e),a.transition(0),i.transition(0),s.transition(0),this.emit("scrollbarDragMove",e))},onDragEnd:function(e){var t=this,a=t.params.scrollbar,i=t.scrollbar.$el;t.scrollbar.isTouched&&(t.scrollbar.isTouched=!1,a.hide&&(clearTimeout(t.scrollbar.dragTimeout),t.scrollbar.dragTimeout=D.nextTick(function(){i.css("opacity",0),i.transition(400)},1e3)),t.emit("scrollbarDragEnd",e),a.snapOnRelease&&t.slideReset())},enableDraggable:function(){var e=this;if(e.params.scrollbar.el){var t=e.scrollbar.$el,a=O.touch?t[0]:document;t.on(e.scrollbar.dragEvents.start,e.scrollbar.onDragStart),I(a).on(e.scrollbar.dragEvents.move,e.scrollbar.onDragMove),I(a).on(e.scrollbar.dragEvents.end,e.scrollbar.onDragEnd)}},disableDraggable:function(){var e=this;if(e.params.scrollbar.el){var t=e.scrollbar.$el,a=O.touch?t[0]:document;t.off(e.scrollbar.dragEvents.start),I(a).off(e.scrollbar.dragEvents.move),I(a).off(e.scrollbar.dragEvents.end)}},init:function(){var e=this;if(e.params.scrollbar.el){var t=e.scrollbar,a=e.$el,i=e.touchEvents,s=e.params.scrollbar,r=I(s.el);e.params.uniqueNavElements&&"string"==typeof s.el&&1<r.length&&1===a.find(s.el).length&&(r=a.find(s.el));var n=r.find(".swiper-scrollbar-drag");0===n.length&&(n=I('<div class="swiper-scrollbar-drag"></div>'),r.append(n)),e.scrollbar.dragEvents=!1!==e.params.simulateTouch||O.touch?i:{start:"mousedown",move:"mousemove",end:"mouseup"},D.extend(t,{$el:r,el:r[0],$dragEl:n,dragEl:n[0]}),s.draggable&&t.enableDraggable()}},destroy:function(){this.scrollbar.disableDraggable()}},F={name:"scrollbar",params:{scrollbar:{el:null,dragSize:"auto",hide:!1,draggable:!1,snapOnRelease:!0}},create:function(){var e=this;D.extend(e,{scrollbar:{init:W.init.bind(e),destroy:W.destroy.bind(e),updateSize:W.updateSize.bind(e),setTranslate:W.setTranslate.bind(e),setTransition:W.setTransition.bind(e),enableDraggable:W.enableDraggable.bind(e),disableDraggable:W.disableDraggable.bind(e),setDragPosition:W.setDragPosition.bind(e),onDragStart:W.onDragStart.bind(e),onDragMove:W.onDragMove.bind(e),onDragEnd:W.onDragEnd.bind(e),isTouched:!1,timeout:null,dragTimeout:null}})},on:{init:function(){this.scrollbar.init(),this.scrollbar.updateSize(),this.scrollbar.setTranslate()},update:function(){this.scrollbar.updateSize()},resize:function(){this.scrollbar.updateSize()},observerUpdate:function(){this.scrollbar.updateSize()},setTranslate:function(){this.scrollbar.setTranslate()},setTransition:function(e){this.scrollbar.setTransition(e)},destroy:function(){this.scrollbar.destroy()}}},j={setTransform:function(e,t){var a=this.rtl,i=I(e),s=a?-1:1,r=i.attr("data-swiper-parallax")||"0",n=i.attr("data-swiper-parallax-x"),o=i.attr("data-swiper-parallax-y"),l=i.attr("data-swiper-parallax-scale"),d=i.attr("data-swiper-parallax-opacity");if(n||o?(n=n||"0",o=o||"0"):this.isHorizontal()?(n=r,o="0"):(o=r,n="0"),n=0<=n.indexOf("%")?parseInt(n,10)*t*s+"%":n*t*s+"px",o=0<=o.indexOf("%")?parseInt(o,10)*t+"%":o*t+"px",null!=d){var p=d-(d-1)*(1-Math.abs(t));i[0].style.opacity=p}if(null==l)i.transform("translate3d("+n+", "+o+", 0px)");else{var c=l-(l-1)*(1-Math.abs(t));i.transform("translate3d("+n+", "+o+", 0px) scale("+c+")")}},setTranslate:function(){var i=this,e=i.$el,t=i.slides,s=i.progress,r=i.snapGrid;e.children("[data-swiper-parallax], [data-swiper-parallax-x], [data-swiper-parallax-y]").each(function(e,t){i.parallax.setTransform(t,s)}),t.each(function(e,t){var a=t.progress;1<i.params.slidesPerGroup&&"auto"!==i.params.slidesPerView&&(a+=Math.ceil(e/2)-s*(r.length-1)),a=Math.min(Math.max(a,-1),1),I(t).find("[data-swiper-parallax], [data-swiper-parallax-x], [data-swiper-parallax-y]").each(function(e,t){i.parallax.setTransform(t,a)})})},setTransition:function(s){void 0===s&&(s=this.params.speed);this.$el.find("[data-swiper-parallax], [data-swiper-parallax-x], [data-swiper-parallax-y]").each(function(e,t){var a=I(t),i=parseInt(a.attr("data-swiper-parallax-duration"),10)||s;0===s&&(i=0),a.transition(i)})}},q={name:"parallax",params:{parallax:{enabled:!1}},create:function(){D.extend(this,{parallax:{setTransform:j.setTransform.bind(this),setTranslate:j.setTranslate.bind(this),setTransition:j.setTransition.bind(this)}})},on:{beforeInit:function(){this.params.watchSlidesProgress=!0},init:function(){this.params.parallax&&this.parallax.setTranslate()},setTranslate:function(){this.params.parallax&&this.parallax.setTranslate()},setTransition:function(e){this.params.parallax&&this.parallax.setTransition(e)}}},K={getDistanceBetweenTouches:function(e){if(e.targetTouches.length<2)return 1;var t=e.targetTouches[0].pageX,a=e.targetTouches[0].pageY,i=e.targetTouches[1].pageX,s=e.targetTouches[1].pageY;return Math.sqrt(Math.pow(i-t,2)+Math.pow(s-a,2))},onGestureStart:function(e){var t=this,a=t.params.zoom,i=t.zoom,s=i.gesture;if(i.fakeGestureTouched=!1,i.fakeGestureMoved=!1,!O.gestures){if("touchstart"!==e.type||"touchstart"===e.type&&e.targetTouches.length<2)return;i.fakeGestureTouched=!0,s.scaleStart=K.getDistanceBetweenTouches(e)}s.$slideEl&&s.$slideEl.length||(s.$slideEl=I(this),0===s.$slideEl.length&&(s.$slideEl=t.slides.eq(t.activeIndex)),s.$imageEl=s.$slideEl.find("img, svg, canvas"),s.$imageWrapEl=s.$imageEl.parent("."+a.containerClass),s.maxRatio=s.$imageWrapEl.attr("data-swiper-zoom")||a.maxRatio,0!==s.$imageWrapEl.length)?(s.$imageEl.transition(0),t.zoom.isScaling=!0):s.$imageEl=void 0},onGestureChange:function(e){var t=this.params.zoom,a=this.zoom,i=a.gesture;if(!O.gestures){if("touchmove"!==e.type||"touchmove"===e.type&&e.targetTouches.length<2)return;a.fakeGestureMoved=!0,i.scaleMove=K.getDistanceBetweenTouches(e)}i.$imageEl&&0!==i.$imageEl.length&&(O.gestures?this.zoom.scale=e.scale*a.currentScale:a.scale=i.scaleMove/i.scaleStart*a.currentScale,a.scale>i.maxRatio&&(a.scale=i.maxRatio-1+Math.pow(a.scale-i.maxRatio+1,.5)),a.scale<t.minRatio&&(a.scale=t.minRatio+1-Math.pow(t.minRatio-a.scale+1,.5)),i.$imageEl.transform("translate3d(0,0,0) scale("+a.scale+")"))},onGestureEnd:function(e){var t=this.params.zoom,a=this.zoom,i=a.gesture;if(!O.gestures){if(!a.fakeGestureTouched||!a.fakeGestureMoved)return;if("touchend"!==e.type||"touchend"===e.type&&e.changedTouches.length<2&&!g.android)return;a.fakeGestureTouched=!1,a.fakeGestureMoved=!1}i.$imageEl&&0!==i.$imageEl.length&&(a.scale=Math.max(Math.min(a.scale,i.maxRatio),t.minRatio),i.$imageEl.transition(this.params.speed).transform("translate3d(0,0,0) scale("+a.scale+")"),a.currentScale=a.scale,a.isScaling=!1,1===a.scale&&(i.$slideEl=void 0))},onTouchStart:function(e){var t=this.zoom,a=t.gesture,i=t.image;a.$imageEl&&0!==a.$imageEl.length&&(i.isTouched||(g.android&&e.preventDefault(),i.isTouched=!0,i.touchesStart.x="touchstart"===e.type?e.targetTouches[0].pageX:e.pageX,i.touchesStart.y="touchstart"===e.type?e.targetTouches[0].pageY:e.pageY))},onTouchMove:function(e){var t=this,a=t.zoom,i=a.gesture,s=a.image,r=a.velocity;if(i.$imageEl&&0!==i.$imageEl.length&&(t.allowClick=!1,s.isTouched&&i.$slideEl)){s.isMoved||(s.width=i.$imageEl[0].offsetWidth,s.height=i.$imageEl[0].offsetHeight,s.startX=D.getTranslate(i.$imageWrapEl[0],"x")||0,s.startY=D.getTranslate(i.$imageWrapEl[0],"y")||0,i.slideWidth=i.$slideEl[0].offsetWidth,i.slideHeight=i.$slideEl[0].offsetHeight,i.$imageWrapEl.transition(0),t.rtl&&(s.startX=-s.startX),t.rtl&&(s.startY=-s.startY));var n=s.width*a.scale,o=s.height*a.scale;if(!(n<i.slideWidth&&o<i.slideHeight)){if(s.minX=Math.min(i.slideWidth/2-n/2,0),s.maxX=-s.minX,s.minY=Math.min(i.slideHeight/2-o/2,0),s.maxY=-s.minY,s.touchesCurrent.x="touchmove"===e.type?e.targetTouches[0].pageX:e.pageX,s.touchesCurrent.y="touchmove"===e.type?e.targetTouches[0].pageY:e.pageY,!s.isMoved&&!a.isScaling){if(t.isHorizontal()&&(Math.floor(s.minX)===Math.floor(s.startX)&&s.touchesCurrent.x<s.touchesStart.x||Math.floor(s.maxX)===Math.floor(s.startX)&&s.touchesCurrent.x>s.touchesStart.x))return void(s.isTouched=!1);if(!t.isHorizontal()&&(Math.floor(s.minY)===Math.floor(s.startY)&&s.touchesCurrent.y<s.touchesStart.y||Math.floor(s.maxY)===Math.floor(s.startY)&&s.touchesCurrent.y>s.touchesStart.y))return void(s.isTouched=!1)}e.preventDefault(),e.stopPropagation(),s.isMoved=!0,s.currentX=s.touchesCurrent.x-s.touchesStart.x+s.startX,s.currentY=s.touchesCurrent.y-s.touchesStart.y+s.startY,s.currentX<s.minX&&(s.currentX=s.minX+1-Math.pow(s.minX-s.currentX+1,.8)),s.currentX>s.maxX&&(s.currentX=s.maxX-1+Math.pow(s.currentX-s.maxX+1,.8)),s.currentY<s.minY&&(s.currentY=s.minY+1-Math.pow(s.minY-s.currentY+1,.8)),s.currentY>s.maxY&&(s.currentY=s.maxY-1+Math.pow(s.currentY-s.maxY+1,.8)),r.prevPositionX||(r.prevPositionX=s.touchesCurrent.x),r.prevPositionY||(r.prevPositionY=s.touchesCurrent.y),r.prevTime||(r.prevTime=Date.now()),r.x=(s.touchesCurrent.x-r.prevPositionX)/(Date.now()-r.prevTime)/2,r.y=(s.touchesCurrent.y-r.prevPositionY)/(Date.now()-r.prevTime)/2,Math.abs(s.touchesCurrent.x-r.prevPositionX)<2&&(r.x=0),Math.abs(s.touchesCurrent.y-r.prevPositionY)<2&&(r.y=0),r.prevPositionX=s.touchesCurrent.x,r.prevPositionY=s.touchesCurrent.y,r.prevTime=Date.now(),i.$imageWrapEl.transform("translate3d("+s.currentX+"px, "+s.currentY+"px,0)")}}},onTouchEnd:function(){var e=this.zoom,t=e.gesture,a=e.image,i=e.velocity;if(t.$imageEl&&0!==t.$imageEl.length){if(!a.isTouched||!a.isMoved)return a.isTouched=!1,void(a.isMoved=!1);a.isTouched=!1,a.isMoved=!1;var s=300,r=300,n=i.x*s,o=a.currentX+n,l=i.y*r,d=a.currentY+l;0!==i.x&&(s=Math.abs((o-a.currentX)/i.x)),0!==i.y&&(r=Math.abs((d-a.currentY)/i.y));var p=Math.max(s,r);a.currentX=o,a.currentY=d;var c=a.width*e.scale,u=a.height*e.scale;a.minX=Math.min(t.slideWidth/2-c/2,0),a.maxX=-a.minX,a.minY=Math.min(t.slideHeight/2-u/2,0),a.maxY=-a.minY,a.currentX=Math.max(Math.min(a.currentX,a.maxX),a.minX),a.currentY=Math.max(Math.min(a.currentY,a.maxY),a.minY),t.$imageWrapEl.transition(p).transform("translate3d("+a.currentX+"px, "+a.currentY+"px,0)")}},onTransitionEnd:function(){var e=this.zoom,t=e.gesture;t.$slideEl&&this.previousIndex!==this.activeIndex&&(t.$imageEl.transform("translate3d(0,0,0) scale(1)"),t.$imageWrapEl.transform("translate3d(0,0,0)"),t.$slideEl=void 0,t.$imageEl=void 0,t.$imageWrapEl=void 0,e.scale=1,e.currentScale=1)},toggle:function(e){var t=this.zoom;t.scale&&1!==t.scale?t.out():t.in(e)},in:function(e){var t,a,i,s,r,n,o,l,d,p,c,u,h,f,v,m,g=this,b=g.zoom,w=g.params.zoom,y=b.gesture,x=b.image;(y.$slideEl||(y.$slideEl=g.clickedSlide?I(g.clickedSlide):g.slides.eq(g.activeIndex),y.$imageEl=y.$slideEl.find("img, svg, canvas"),y.$imageWrapEl=y.$imageEl.parent("."+w.containerClass)),y.$imageEl&&0!==y.$imageEl.length)&&(y.$slideEl.addClass(""+w.zoomedSlideClass),void 0===x.touchesStart.x&&e?(t="touchend"===e.type?e.changedTouches[0].pageX:e.pageX,a="touchend"===e.type?e.changedTouches[0].pageY:e.pageY):(t=x.touchesStart.x,a=x.touchesStart.y),b.scale=y.$imageWrapEl.attr("data-swiper-zoom")||w.maxRatio,b.currentScale=y.$imageWrapEl.attr("data-swiper-zoom")||w.maxRatio,e?(v=y.$slideEl[0].offsetWidth,m=y.$slideEl[0].offsetHeight,i=y.$slideEl.offset().left+v/2-t,s=y.$slideEl.offset().top+m/2-a,o=y.$imageEl[0].offsetWidth,l=y.$imageEl[0].offsetHeight,d=o*b.scale,p=l*b.scale,h=-(c=Math.min(v/2-d/2,0)),f=-(u=Math.min(m/2-p/2,0)),(r=i*b.scale)<c&&(r=c),h<r&&(r=h),(n=s*b.scale)<u&&(n=u),f<n&&(n=f)):n=r=0,y.$imageWrapEl.transition(300).transform("translate3d("+r+"px, "+n+"px,0)"),y.$imageEl.transition(300).transform("translate3d(0,0,0) scale("+b.scale+")"))},out:function(){var e=this,t=e.zoom,a=e.params.zoom,i=t.gesture;i.$slideEl||(i.$slideEl=e.clickedSlide?I(e.clickedSlide):e.slides.eq(e.activeIndex),i.$imageEl=i.$slideEl.find("img, svg, canvas"),i.$imageWrapEl=i.$imageEl.parent("."+a.containerClass)),i.$imageEl&&0!==i.$imageEl.length&&(t.scale=1,t.currentScale=1,i.$imageWrapEl.transition(300).transform("translate3d(0,0,0)"),i.$imageEl.transition(300).transform("translate3d(0,0,0) scale(1)"),i.$slideEl.removeClass(""+a.zoomedSlideClass),i.$slideEl=void 0)},enable:function(){var i=this,s=i.zoom;if(!s.enabled){s.enabled=!0;var e=i.slides,t=!("touchstart"!==i.touchEvents.start||!O.passiveListener||!i.params.passiveListeners)&&{passive:!0,capture:!1};O.gestures?(e.on("gesturestart",s.onGestureStart,t),e.on("gesturechange",s.onGestureChange,t),e.on("gestureend",s.onGestureEnd,t)):"touchstart"===i.touchEvents.start&&(e.on(i.touchEvents.start,s.onGestureStart,t),e.on(i.touchEvents.move,s.onGestureChange,t),e.on(i.touchEvents.end,s.onGestureEnd,t)),i.slides.each(function(e,t){var a=I(t);0<a.find("."+i.params.zoom.containerClass).length&&a.on(i.touchEvents.move,s.onTouchMove)})}},disable:function(){var i=this,s=i.zoom;if(s.enabled){i.zoom.enabled=!1;var e=i.slides,t=!("touchstart"!==i.touchEvents.start||!O.passiveListener||!i.params.passiveListeners)&&{passive:!0,capture:!1};O.gestures?(e.off("gesturestart",s.onGestureStart,t),e.off("gesturechange",s.onGestureChange,t),e.off("gestureend",s.onGestureEnd,t)):"touchstart"===i.touchEvents.start&&(e.off(i.touchEvents.start,s.onGestureStart,t),e.off(i.touchEvents.move,s.onGestureChange,t),e.off(i.touchEvents.end,s.onGestureEnd,t)),i.slides.each(function(e,t){var a=I(t);0<a.find("."+i.params.zoom.containerClass).length&&a.off(i.touchEvents.move,s.onTouchMove)})}}},U={name:"zoom",params:{zoom:{enabled:!1,maxRatio:3,minRatio:1,toggle:!0,containerClass:"swiper-zoom-container",zoomedSlideClass:"swiper-slide-zoomed"}},create:function(){var t=this,a={enabled:!1,scale:1,currentScale:1,isScaling:!1,gesture:{$slideEl:void 0,slideWidth:void 0,slideHeight:void 0,$imageEl:void 0,$imageWrapEl:void 0,maxRatio:3},image:{isTouched:void 0,isMoved:void 0,currentX:void 0,currentY:void 0,minX:void 0,minY:void 0,maxX:void 0,maxY:void 0,width:void 0,height:void 0,startX:void 0,startY:void 0,touchesStart:{},touchesCurrent:{}},velocity:{x:void 0,y:void 0,prevPositionX:void 0,prevPositionY:void 0,prevTime:void 0}};"onGestureStart onGestureChange onGestureEnd onTouchStart onTouchMove onTouchEnd onTransitionEnd toggle enable disable in out".split(" ").forEach(function(e){a[e]=K[e].bind(t)}),D.extend(t,{zoom:a})},on:{init:function(){this.params.zoom.enabled&&this.zoom.enable()},destroy:function(){this.zoom.disable()},touchStart:function(e){this.zoom.enabled&&this.zoom.onTouchStart(e)},touchEnd:function(e){this.zoom.enabled&&this.zoom.onTouchEnd(e)},doubleTap:function(e){this.params.zoom.enabled&&this.zoom.enabled&&this.params.zoom.toggle&&this.zoom.toggle(e)},transitionEnd:function(){this.zoom.enabled&&this.params.zoom.enabled&&this.zoom.onTransitionEnd()}}},_={loadInSlide:function(e,l){void 0===l&&(l=!0);var d=this,p=d.params.lazy;if(void 0!==e&&0!==d.slides.length){var i=$(window),s=$(d.$el),c=function(){if(!s.is(":hidden")){var e=i.scrollTop(),t=e+i.height(),a=s.offset().top;return a+s.height()>=e-i.height()/2&&a<=t+i.height()/2}}(),u=d.virtual&&d.params.virtual.enabled?d.$wrapperEl.children("."+d.params.slideClass+'[data-swiper-slide-index="'+e+'"]'):d.slides.eq(e),t=u.find("."+p.elementClass+":not(."+p.loadedClass+"):not(."+p.loadingClass+")");!u.hasClass(p.elementClass)||u.hasClass(p.loadedClass)||u.hasClass(p.loadingClass)||(t=t.add(u[0])),0!==t.length&&t.each(function(e,t){var i=I(t);i.addClass(p.loadingClass);var s=i.attr("data-background"),r=i.attr("data-src-swiper"),n=i.attr("data-srcset"),o=i.attr("data-sizes");d.loadImage(i[0],r||s,n,o,!1,function(){if(null!=d&&d&&(!d||d.params)&&!d.destroyed){if(s?(i.css("background-image",'url("'+s+'")'),i.removeAttr("data-background")):(n&&(i.attr("srcset",n),i.removeAttr("data-srcset")),o&&(i.attr("sizes",o),i.removeAttr("data-sizes")),r&&(i.attr(c?"src":"data-src",r),i.removeAttr("data-src-swiper"))),i.addClass(p.loadedClass).removeClass(p.loadingClass),u.find("."+p.preloaderClass).remove(),d.params.loop&&l){var e=u.attr("data-swiper-slide-index");if(u.hasClass(d.params.slideDuplicateClass)){var t=d.$wrapperEl.children('[data-swiper-slide-index="'+e+'"]:not(.'+d.params.slideDuplicateClass+")");d.lazy.loadInSlide(t.index(),!1)}else{var a=d.$wrapperEl.children("."+d.params.slideDuplicateClass+'[data-swiper-slide-index="'+e+'"]');d.lazy.loadInSlide(a.index(),!1)}}d.emit("lazyImageReady",u[0],i[0])}}),d.emit("lazyImageLoad",u[0],i[0])})}},load:function(){var i=this,t=i.$wrapperEl,a=i.params,s=i.slides,e=i.activeIndex,r=i.virtual&&a.virtual.enabled,n=a.lazy,o=a.slidesPerView;function l(e){if(r){if(t.children("."+a.slideClass+'[data-swiper-slide-index="'+e+'"]').length)return!0}else if(s[e])return!0;return!1}function d(e){return r?I(e).attr("data-swiper-slide-index"):I(e).index()}if("auto"===o&&(o=0),i.lazy.initialImageLoaded||(i.lazy.initialImageLoaded=!0),i.params.watchSlidesVisibility)t.children("."+a.slideVisibleClass).each(function(e,t){var a=r?I(t).attr("data-swiper-slide-index"):I(t).index();i.lazy.loadInSlide(a)});else if(1<o)for(var p=e;p<e+o;p+=1)l(p)&&i.lazy.loadInSlide(p);else i.lazy.loadInSlide(e);if(n.loadPrevNext)if(1<o||n.loadPrevNextAmount&&1<n.loadPrevNextAmount){for(var c=n.loadPrevNextAmount,u=o,h=Math.min(e+u+Math.max(c,u),s.length),f=Math.max(e-Math.max(u,c),0),v=e+o;v<h;v+=1)l(v)&&i.lazy.loadInSlide(v);for(var m=f;m<e;m+=1)l(m)&&i.lazy.loadInSlide(m)}else{var g=t.children("."+a.slideNextClass);0<g.length&&i.lazy.loadInSlide(d(g));var b=t.children("."+a.slidePrevClass);0<b.length&&i.lazy.loadInSlide(d(b))}}},Z={name:"lazy",params:{lazy:{enabled:!0,loadPrevNext:!0,loadPrevNextAmount:1,loadOnTransitionStart:!1,elementClass:"swiper-lazy",loadingClass:"swiper-lazy-loading",loadedClass:"swiper-lazy-loaded",preloaderClass:"swiper-lazy-preloader"}},create:function(){D.extend(this,{lazy:{initialImageLoaded:!1,load:_.load.bind(this),loadInSlide:_.loadInSlide.bind(this)}})},on:{beforeInit:function(){this.params.preloadImages&&(this.params.preloadImages=!1)},init:function(){this.params.lazy.enabled&&!this.params.loop&&0===this.params.initialSlide&&this.lazy.load()},scroll:function(){this.params.freeMode&&!this.params.freeModeSticky&&this.lazy.load()},resize:function(){this.params.lazy.enabled&&this.lazy.load()},scrollbarDragMove:function(){this.params.lazy.enabled&&this.lazy.load()},transitionStart:function(){var e=this;e.params.lazy.enabled&&(e.params.lazy.loadOnTransitionStart||!e.params.lazy.loadOnTransitionStart&&!e.lazy.initialImageLoaded)&&e.lazy.load()},transitionEnd:function(){this.params.lazy.enabled&&!this.params.lazy.loadOnTransitionStart&&this.lazy.load()}}},Q={LinearSpline:function(e,t){var a,i,s,r,n,o=function(e,t){for(i=-1,a=e.length;1<a-i;)e[s=a+i>>1]<=t?i=s:a=s;return a};return this.x=e,this.y=t,this.lastIndex=e.length-1,this.interpolate=function(e){return e?(n=o(this.x,e),r=n-1,(e-this.x[r])*(this.y[n]-this.y[r])/(this.x[n]-this.x[r])+this.y[r]):0},this},getInterpolateFunction:function(e){var t=this;t.controller.spline||(t.controller.spline=t.params.loop?new Q.LinearSpline(t.slidesGrid,e.slidesGrid):new Q.LinearSpline(t.snapGrid,e.snapGrid))},setTranslate:function(e,t){var a,i,s=this,r=s.controller.control;function n(e){var t=e.rtl&&"horizontal"===e.params.direction?-s.translate:s.translate;"slide"===s.params.controller.by&&(s.controller.getInterpolateFunction(e),i=-s.controller.spline.interpolate(-t)),i&&"container"!==s.params.controller.by||(a=(e.maxTranslate()-e.minTranslate())/(s.maxTranslate()-s.minTranslate()),i=(t-s.minTranslate())*a+e.minTranslate()),s.params.controller.inverse&&(i=e.maxTranslate()-i),e.updateProgress(i),e.setTranslate(i,s),e.updateActiveIndex(),e.updateSlidesClasses()}if(Array.isArray(r))for(var o=0;o<r.length;o+=1)r[o]!==t&&r[o]instanceof T&&n(r[o]);else r instanceof T&&t!==r&&n(r)},setTransition:function(t,e){var a,i=this,s=i.controller.control;function r(e){e.setTransition(t,i),0!==t&&(e.transitionStart(),e.$wrapperEl.transitionEnd(function(){s&&(e.params.loop&&"slide"===i.params.controller.by&&e.loopFix(),e.transitionEnd())}))}if(Array.isArray(s))for(a=0;a<s.length;a+=1)s[a]!==e&&s[a]instanceof T&&r(s[a]);else s instanceof T&&e!==s&&r(s)}},J={name:"controller",params:{controller:{control:void 0,inverse:!1,by:"slide"}},create:function(){var e=this;D.extend(e,{controller:{control:e.params.controller.control,getInterpolateFunction:Q.getInterpolateFunction.bind(e),setTranslate:Q.setTranslate.bind(e),setTransition:Q.setTransition.bind(e)}})},on:{update:function(){this.controller.control&&this.controller.spline&&(this.controller.spline=void 0,delete this.controller.spline)},resize:function(){this.controller.control&&this.controller.spline&&(this.controller.spline=void 0,delete this.controller.spline)},observerUpdate:function(){this.controller.control&&this.controller.spline&&(this.controller.spline=void 0,delete this.controller.spline)},setTranslate:function(e,t){this.controller.control&&this.controller.setTranslate(e,t)},setTransition:function(e,t){this.controller.control&&this.controller.setTransition(e,t)}}},ee={makeElFocusable:function(e){return e.attr("tabIndex","0"),e},addElRole:function(e,t){return e.attr("role",t),e},addElLabel:function(e,t){return e.attr("aria-label",t),e},disableEl:function(e){return e.attr("aria-disabled",!0),e},enableEl:function(e){return e.attr("aria-disabled",!1),e},onEnterKey:function(e){var t=this,a=t.params.a11y;if(13===e.keyCode){var i=I(e.target);t.navigation&&t.navigation.$nextEl&&i.is(t.navigation.$nextEl)&&(t.isEnd&&!t.params.loop||t.slideNext(),t.isEnd?t.a11y.notify(a.lastSlideMessage):t.a11y.notify(a.nextSlideMessage)),t.navigation&&t.navigation.$prevEl&&i.is(t.navigation.$prevEl)&&(t.isBeginning&&!t.params.loop||t.slidePrev(),t.isBeginning?t.a11y.notify(a.firstSlideMessage):t.a11y.notify(a.prevSlideMessage)),t.pagination&&i.is("."+t.params.pagination.bulletClass)&&i[0].click()}},notify:function(e){var t=this.a11y.liveRegion;0!==t.length&&(t.html(""),t.html(e))},updateNavigation:function(){var e=this;if(!e.params.loop){var t=e.navigation,a=t.$nextEl,i=t.$prevEl;i&&0<i.length&&(e.isBeginning?e.a11y.disableEl(i):e.a11y.enableEl(i)),a&&0<a.length&&(e.isEnd?e.a11y.disableEl(a):e.a11y.enableEl(a))}},updatePagination:function(){var i=this,s=i.params.a11y;i.pagination&&i.params.pagination.clickable&&i.pagination.bullets&&i.pagination.bullets.length&&i.pagination.bullets.each(function(e,t){var a=I(t);i.a11y.makeElFocusable(a),i.a11y.addElRole(a,"button"),i.a11y.addElLabel(a,s.paginationBulletMessage.replace(/{{index}}/,a.index()+1))})},init:function(){var e=this;e.$el.append(e.a11y.liveRegion);var t,a,i=e.params.a11y;e.navigation&&e.navigation.$nextEl&&(t=e.navigation.$nextEl),e.navigation&&e.navigation.$prevEl&&(a=e.navigation.$prevEl),t&&(e.a11y.makeElFocusable(t),e.a11y.addElRole(t,"button"),e.a11y.addElLabel(t,i.nextSlideMessage),t.on("keydown",e.a11y.onEnterKey)),a&&(e.a11y.makeElFocusable(a),e.a11y.addElRole(a,"button"),e.a11y.addElLabel(a,i.prevSlideMessage),a.on("keydown",e.a11y.onEnterKey)),e.pagination&&e.params.pagination.clickable&&e.pagination.bullets&&e.pagination.bullets.length&&e.pagination.$el.on("keydown","."+e.params.pagination.bulletClass,e.a11y.onEnterKey)},destroy:function(){var e,t,a=this;a.a11y.liveRegion&&0<a.a11y.liveRegion.length&&a.a11y.liveRegion.remove(),a.navigation&&a.navigation.$nextEl&&(e=a.navigation.$nextEl),a.navigation&&a.navigation.$prevEl&&(t=a.navigation.$prevEl),e&&e.off("keydown",a.a11y.onEnterKey),t&&t.off("keydown",a.a11y.onEnterKey),a.pagination&&a.params.pagination.clickable&&a.pagination.bullets&&a.pagination.bullets.length&&a.pagination.$el.off("keydown","."+a.params.pagination.bulletClass,a.a11y.onEnterKey)}},te={name:"a11y",params:{a11y:{enabled:!1,notificationClass:"swiper-notification",prevSlideMessage:"Previous slide",nextSlideMessage:"Next slide",firstSlideMessage:"This is the first slide",lastSlideMessage:"This is the last slide",paginationBulletMessage:"Go to slide {{index}}"}},create:function(){var t=this;D.extend(t,{a11y:{liveRegion:I('<span class="'+t.params.a11y.notificationClass+'" aria-live="assertive" aria-atomic="true"></span>')}}),Object.keys(ee).forEach(function(e){t.a11y[e]=ee[e].bind(t)})},on:{init:function(){this.params.a11y.enabled&&(this.a11y.init(),this.a11y.updateNavigation())},toEdge:function(){this.params.a11y.enabled&&this.a11y.updateNavigation()},fromEdge:function(){this.params.a11y.enabled&&this.a11y.updateNavigation()},paginationUpdate:function(){this.params.a11y.enabled&&this.a11y.updatePagination()},destroy:function(){this.params.a11y.enabled&&this.a11y.destroy()}}},ae={init:function(){var e=this;if(e.params.history){if(!f.history||!f.history.pushState)return e.params.history.enabled=!1,void(e.params.hashNavigation.enabled=!0);var t=e.history;t.initialized=!0,t.paths=ae.getPathValues(),(t.paths.key||t.paths.value)&&(t.scrollToSlide(0,t.paths.value,e.params.runCallbacksOnInit),e.params.history.replaceState||f.addEventListener("popstate",e.history.setHistoryPopState))}},destroy:function(){this.params.history.replaceState||f.removeEventListener("popstate",this.history.setHistoryPopState)},setHistoryPopState:function(){this.history.paths=ae.getPathValues(),this.history.scrollToSlide(this.params.speed,this.history.paths.value,!1)},getPathValues:function(){var e=f.location.pathname.slice(1).split("/"),t=e.length;return{key:e[t-2],value:e[t-1]}},setHistory:function(e,t){if(this.history.initialized&&this.params.history.enabled){var a=this.slides.eq(t),i=ae.slugify(a.attr("data-history"));f.location.pathname.includes(e)||(i=e+"/"+i);var s=f.history.state;s&&s.value===i||(this.params.history.replaceState?f.history.replaceState({value:i},null,i):f.history.pushState({value:i},null,i))}},slugify:function(e){return e.toString().toLowerCase().replace(/\s+/g,"-").replace(/[^\w-]+/g,"").replace(/--+/g,"-").replace(/^-+/,"").replace(/-+$/,"")},scrollToSlide:function(e,t,a){var i=this;if(t)for(var s=0,r=i.slides.length;s<r;s+=1){var n=i.slides.eq(s);if(ae.slugify(n.attr("data-history"))===t&&!n.hasClass(i.params.slideDuplicateClass)){var o=n.index();i.slideTo(o,e,a)}}else i.slideTo(0,e,a)}},ie={name:"history",params:{history:{enabled:!1,replaceState:!1,key:"slides"}},create:function(){var e=this;D.extend(e,{history:{init:ae.init.bind(e),setHistory:ae.setHistory.bind(e),setHistoryPopState:ae.setHistoryPopState.bind(e),scrollToSlide:ae.scrollToSlide.bind(e)}})},on:{init:function(){this.params.history.enabled&&this.history.init()},destroy:function(){this.params.history.enabled&&this.history.destroy()},transitionEnd:function(){this.history.initialized&&this.history.setHistory(this.params.history.key,this.activeIndex)}}},se={onHashCange:function(){var e=this,t=h.location.hash.replace("#","");t!==e.slides.eq(e.activeIndex).attr("data-hash")&&e.slideTo(e.$wrapperEl.children("."+e.params.slideClass+'[data-hash="'+t+'"]').index())},setHash:function(){var e=this;if(e.hashNavigation.initialized&&e.params.hashNavigation.enabled)if(e.params.hashNavigation.replaceState&&f.history&&f.history.replaceState)f.history.replaceState(null,null,"#"+e.slides.eq(e.activeIndex).attr("data-hash")||"");else{var t=e.slides.eq(e.activeIndex),a=t.attr("data-hash")||t.attr("data-history");h.location.hash=a||""}},init:function(){var e=this;if(!(!e.params.hashNavigation.enabled||e.params.history&&e.params.history.enabled)){e.hashNavigation.initialized=!0;var t=h.location.hash.replace("#","");if(t)for(var a=0,i=e.slides.length;a<i;a+=1){var s=e.slides.eq(a);if((s.attr("data-hash")||s.attr("data-history"))===t&&!s.hasClass(e.params.slideDuplicateClass)){var r=s.index();e.slideTo(r,0,e.params.runCallbacksOnInit,!0)}}e.params.hashNavigation.watchState&&I(f).on("hashchange",e.hashNavigation.onHashCange)}},destroy:function(){this.params.hashNavigation.watchState&&I(f).off("hashchange",this.hashNavigation.onHashCange)}},re={name:"hash-navigation",params:{hashNavigation:{enabled:!1,replaceState:!1,watchState:!1}},create:function(){var e=this;D.extend(e,{hashNavigation:{initialized:!1,init:se.init.bind(e),destroy:se.destroy.bind(e),setHash:se.setHash.bind(e),onHashCange:se.onHashCange.bind(e)}})},on:{init:function(){this.params.hashNavigation.enabled&&this.hashNavigation.init()},destroy:function(){this.params.hashNavigation.enabled&&this.hashNavigation.destroy()},transitionEnd:function(){this.hashNavigation.initialized&&this.hashNavigation.setHash()}}},ne={run:function(){var e=this,t=e.slides.eq(e.activeIndex),a=e.params.autoplay.delay;t.attr("data-swiper-autoplay")&&(a=t.attr("data-swiper-autoplay")||e.params.autoplay.delay);var i=e.lastSwipeTime,s=e.pauseTime||e.lastSwipeTime,r=Math.abs(s-i);r=r<=a?r:0,e.pauseTime=0,e.autoplay.timeout=D.nextTick(function(){e.params.loop?(e.loopFix(),e.slideNext(e.params.speed,!0,!0),e.emit("autoplay")):e.isEnd?e.params.autoplay.stopOnLastSlide?e.autoplay.stop():(e.slideTo(0,e.params.speed,!0,!0),e.emit("autoplay")):(e.slideNext(e.params.speed,!0,!0),e.emit("autoplay"))},a-r%a)},start:function(){var e=this;return void 0===e.autoplay.timeout&&(!e.autoplay.running&&(e.autoplay.running=!0,e.emit("autoplayStart"),e.autoplay.run(),!0))},stop:function(){var e=this;return!!e.autoplay.running&&(void 0!==e.autoplay.timeout&&(e.autoplay.timeout&&(clearTimeout(e.autoplay.timeout),e.autoplay.timeout=void 0),e.autoplay.running=!1,e.emit("autoplayStop"),!0))},pause:function(e){var t=this;t.autoplay.running&&(t.autoplay.paused||(t.autoplay.timeout&&clearTimeout(t.autoplay.timeout),t.autoplay.paused=!0,0===e?(t.autoplay.paused=!1,t.autoplay.run()):t.$wrapperEl.transitionEnd(function(){t&&!t.destroyed&&(t.autoplay.paused=!1,t.autoplay.running?t.autoplay.run():t.autoplay.stop())})))}},oe={name:"autoplay",params:{autoplay:{enabled:!1,delay:3e3,disableOnInteraction:!0,stopOnLastSlide:!1}},create:function(){var e=this;D.extend(e,{autoplay:{running:!1,paused:!1,run:ne.run.bind(e),start:ne.start.bind(e),stop:ne.stop.bind(e),pause:ne.pause.bind(e)}})},on:{init:function(){this.params.autoplay.enabled&&this.autoplay.start()},beforeTransitionStart:function(e,t){this.autoplay.running&&(t||!this.params.autoplay.disableOnInteraction?this.autoplay.pause(e):this.autoplay.stop())},sliderFirstMove:function(){this.autoplay.running&&(this.params.autoplay.disableOnInteraction?this.autoplay.stop():this.autoplay.pause())},destroy:function(){this.autoplay.running&&this.autoplay.stop()}}},le={setTranslate:function(){for(var e=this,t=e.slides,a=0;a<t.length;a+=1){var i=e.slides.eq(a),s=-i[0].swiperSlideOffset;e.params.virtualTranslate||(s-=e.translate);var r=0;e.isHorizontal()||(r=s,s=0);var n=e.params.fadeEffect.crossFade?Math.max(1-Math.abs(i[0].progress),0):1+Math.min(Math.max(i[0].progress,-1),0);i.css({opacity:n}).transform("translate3d("+s+"px, "+r+"px, 0px)")}},setTransition:function(e){var a=this,t=a.slides,i=a.$wrapperEl;if(t.transition(e),a.params.virtualTranslate&&0!==e){var s=!1;t.transitionEnd(function(){if(!s&&a&&!a.destroyed){s=!0,a.animating=!1;for(var e=["webkitTransitionEnd","transitionend"],t=0;t<e.length;t+=1)i.trigger(e[t])}})}}},de={name:"effect-fade",params:{fadeEffect:{crossFade:!1}},create:function(){D.extend(this,{fadeEffect:{setTranslate:le.setTranslate.bind(this),setTransition:le.setTransition.bind(this)}})},on:{beforeInit:function(){var e=this;if("fade"===e.params.effect){e.classNames.push(e.params.containerModifierClass+"fade");var t={slidesPerView:1,slidesPerColumn:1,slidesPerGroup:1,watchSlidesProgress:!0,spaceBetween:0,virtualTranslate:!0};D.extend(e.params,t),D.extend(e.originalParams,t)}},setTranslate:function(){"fade"===this.params.effect&&this.fadeEffect.setTranslate()},setTransition:function(e){"fade"===this.params.effect&&this.fadeEffect.setTransition(e)}}},pe={setTranslate:function(){var e,t=this,a=t.$el,i=t.$wrapperEl,s=t.slides,r=t.width,n=t.height,o=t.rtl,l=t.size,d=t.params.cubeEffect,p=t.isHorizontal(),c=t.virtual&&t.params.virtual.enabled,u=0;d.shadow&&(p?(0===(e=i.find(".swiper-cube-shadow")).length&&(e=I('<div class="swiper-cube-shadow"></div>'),i.append(e)),e.css({height:r+"px"})):0===(e=a.find(".swiper-cube-shadow")).length&&(e=I('<div class="swiper-cube-shadow"></div>'),a.append(e)));for(var h=0;h<s.length;h+=1){var f=s.eq(h),v=h;c&&(v=parseInt(f.attr("data-swiper-slide-index"),10));var m=90*v,g=Math.floor(m/360);o&&(m=-m,g=Math.floor(-m/360));var b=Math.max(Math.min(f[0].progress,1),-1),w=0,y=0,x=0;v%4==0?(w=4*-g*l,x=0):(v-1)%4==0?(w=0,x=4*-g*l):(v-2)%4==0?(w=l+4*g*l,x=l):(v-3)%4==0&&(w=-l,x=3*l+4*l*g),o&&(w=-w),p||(y=w,w=0);var T="rotateX("+(p?0:-m)+"deg) rotateY("+(p?m:0)+"deg) translate3d("+w+"px, "+y+"px, "+x+"px)";if(b<=1&&-1<b&&(u=90*v+90*b,o&&(u=90*-v-90*b)),f.transform(T),d.slideShadows){var E=p?f.find(".swiper-slide-shadow-left"):f.find(".swiper-slide-shadow-top"),S=p?f.find(".swiper-slide-shadow-right"):f.find(".swiper-slide-shadow-bottom");0===E.length&&(E=I('<div class="swiper-slide-shadow-'+(p?"left":"top")+'"></div>'),f.append(E)),0===S.length&&(S=I('<div class="swiper-slide-shadow-'+(p?"right":"bottom")+'"></div>'),f.append(S)),E.length&&(E[0].style.opacity=Math.max(-b,0)),S.length&&(S[0].style.opacity=Math.max(b,0))}}if(i.css({"-webkit-transform-origin":"50% 50% -"+l/2+"px","-moz-transform-origin":"50% 50% -"+l/2+"px","-ms-transform-origin":"50% 50% -"+l/2+"px","transform-origin":"50% 50% -"+l/2+"px"}),d.shadow)if(p)e.transform("translate3d(0px, "+(r/2+d.shadowOffset)+"px, "+-r/2+"px) rotateX(90deg) rotateZ(0deg) scale("+d.shadowScale+")");else{var C=Math.abs(u)-90*Math.floor(Math.abs(u)/90),M=1.5-(Math.sin(2*C*Math.PI/360)/2+Math.cos(2*C*Math.PI/360)/2),z=d.shadowScale,P=d.shadowScale/M,k=d.shadowOffset;e.transform("scale3d("+z+", 1, "+P+") translate3d(0px, "+(n/2+k)+"px, "+-n/2/P+"px) rotateX(-90deg)")}var $=L.isSafari||L.isUiWebView?-l/2:0;i.transform("translate3d(0px,0,"+$+"px) rotateX("+(t.isHorizontal()?0:u)+"deg) rotateY("+(t.isHorizontal()?-u:0)+"deg)")},setTransition:function(e){var t=this.$el;this.slides.transition(e).find(".swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left").transition(e),this.params.cubeEffect.shadow&&!this.isHorizontal()&&t.find(".swiper-cube-shadow").transition(e)}},ce={name:"effect-cube",params:{cubeEffect:{slideShadows:!0,shadow:!0,shadowOffset:20,shadowScale:.94}},create:function(){D.extend(this,{cubeEffect:{setTranslate:pe.setTranslate.bind(this),setTransition:pe.setTransition.bind(this)}})},on:{beforeInit:function(){var e=this;if("cube"===e.params.effect){e.classNames.push(e.params.containerModifierClass+"cube"),e.classNames.push(e.params.containerModifierClass+"3d");var t={slidesPerView:1,slidesPerColumn:1,slidesPerGroup:1,watchSlidesProgress:!0,resistanceRatio:0,spaceBetween:0,centeredSlides:!1,virtualTranslate:!0};D.extend(e.params,t),D.extend(e.originalParams,t)}},setTranslate:function(){"cube"===this.params.effect&&this.cubeEffect.setTranslate()},setTransition:function(e){"cube"===this.params.effect&&this.cubeEffect.setTransition(e)}}},ue={setTranslate:function(){for(var e=this,t=e.slides,a=0;a<t.length;a+=1){var i=t.eq(a),s=i[0].progress;e.params.flipEffect.limitRotation&&(s=Math.max(Math.min(i[0].progress,1),-1));var r=-180*s,n=0,o=-i[0].swiperSlideOffset,l=0;if(e.isHorizontal()?e.rtl&&(r=-r):(l=o,n=-r,r=o=0),i[0].style.zIndex=-Math.abs(Math.round(s))+t.length,e.params.flipEffect.slideShadows){var d=e.isHorizontal()?i.find(".swiper-slide-shadow-left"):i.find(".swiper-slide-shadow-top"),p=e.isHorizontal()?i.find(".swiper-slide-shadow-right"):i.find(".swiper-slide-shadow-bottom");0===d.length&&(d=I('<div class="swiper-slide-shadow-'+(e.isHorizontal()?"left":"top")+'"></div>'),i.append(d)),0===p.length&&(p=I('<div class="swiper-slide-shadow-'+(e.isHorizontal()?"right":"bottom")+'"></div>'),i.append(p)),d.length&&(d[0].style.opacity=Math.max(-s,0)),p.length&&(p[0].style.opacity=Math.max(s,0))}i.transform("translate3d("+o+"px, "+l+"px, 0px) rotateX("+n+"deg) rotateY("+r+"deg)")}},setTransition:function(e){var a=this,t=a.slides,i=a.activeIndex,s=a.$wrapperEl;if(t.transition(e).find(".swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left").transition(e),a.params.virtualTranslate&&0!==e){var r=!1;t.eq(i).transitionEnd(function(){if(!r&&a&&!a.destroyed){r=!0,a.animating=!1;for(var e=["webkitTransitionEnd","transitionend"],t=0;t<e.length;t+=1)s.trigger(e[t])}})}}},he={name:"effect-flip",params:{flipEffect:{slideShadows:!0,limitRotation:!0}},create:function(){D.extend(this,{flipEffect:{setTranslate:ue.setTranslate.bind(this),setTransition:ue.setTransition.bind(this)}})},on:{beforeInit:function(){var e=this;if("flip"===e.params.effect){e.classNames.push(e.params.containerModifierClass+"flip"),e.classNames.push(e.params.containerModifierClass+"3d");var t={slidesPerView:1,slidesPerColumn:1,slidesPerGroup:1,watchSlidesProgress:!0,spaceBetween:0,virtualTranslate:!0};D.extend(e.params,t),D.extend(e.originalParams,t)}},setTranslate:function(){"flip"===this.params.effect&&this.flipEffect.setTranslate()},setTransition:function(e){"flip"===this.params.effect&&this.flipEffect.setTransition(e)}}},fe={setTranslate:function(){for(var e=this,t=e.width,a=e.height,i=e.slides,s=e.$wrapperEl,r=e.slidesSizesGrid,n=e.params.coverflowEffect,o=e.isHorizontal(),l=e.translate,d=o?t/2-l:a/2-l,p=o?n.rotate:-n.rotate,c=n.depth,u=0,h=i.length;u<h;u+=1){var f=i.eq(u),v=r[u],m=(d-f[0].swiperSlideOffset-v/2)/v*n.modifier,g=o?p*m:0,b=o?0:p*m,w=-c*Math.abs(m),y=o?0:n.stretch*m,x=o?n.stretch*m:0;Math.abs(x)<.001&&(x=0),Math.abs(y)<.001&&(y=0),Math.abs(w)<.001&&(w=0),Math.abs(g)<.001&&(g=0),Math.abs(b)<.001&&(b=0);var T="translate3d("+x+"px,"+y+"px,"+w+"px)  rotateX("+b+"deg) rotateY("+g+"deg)";if(f.transform(T),f[0].style.zIndex=1-Math.abs(Math.round(m)),n.slideShadows){var E=o?f.find(".swiper-slide-shadow-left"):f.find(".swiper-slide-shadow-top"),S=o?f.find(".swiper-slide-shadow-right"):f.find(".swiper-slide-shadow-bottom");0===E.length&&(E=I('<div class="swiper-slide-shadow-'+(o?"left":"top")+'"></div>'),f.append(E)),0===S.length&&(S=I('<div class="swiper-slide-shadow-'+(o?"right":"bottom")+'"></div>'),f.append(S)),E.length&&(E[0].style.opacity=0<m?m:0),S.length&&(S[0].style.opacity=0<-m?-m:0)}}L.ie&&(s[0].style.perspectiveOrigin=d+"px 50%")},setTransition:function(e){this.slides.transition(e).find(".swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left").transition(e)}},ve={name:"effect-coverflow",params:{coverflowEffect:{rotate:50,stretch:0,depth:100,modifier:1,slideShadows:!0}},create:function(){D.extend(this,{coverflowEffect:{setTranslate:fe.setTranslate.bind(this),setTransition:fe.setTransition.bind(this)}})},on:{beforeInit:function(){var e=this;"coverflow"===e.params.effect&&(e.classNames.push(e.params.containerModifierClass+"coverflow"),e.classNames.push(e.params.containerModifierClass+"3d"),e.params.watchSlidesProgress=!0)},setTranslate:function(){"coverflow"===this.params.effect&&this.coverflowEffect.setTranslate()},setTransition:function(e){"coverflow"===this.params.effect&&this.coverflowEffect.setTransition(e)}}};return T.components=[E,S,C,M,P,A,X,Y,B,R,F,q,U,Z,J,te,ie,re,oe,de,ce,he,ve],T});



/*[PATH @digikala/supernova-digikala-desktop/assets/local/js/libs/nouislider.min.js]*/
/*! nouislider - 10.0.0 - 2017-05-28 14:52:49 */

!function(a){"function"==typeof define&&define.amd?define([],a):"object"==typeof exports?module.exports=a():window.noUiSlider=a()}(function(){"use strict";function a(a){return"object"==typeof a&&"function"==typeof a.to&&"function"==typeof a.from}function b(a){a.parentElement.removeChild(a)}function c(a){a.preventDefault()}function d(a){return a.filter(function(a){return this[a]?!1:this[a]=!0},{})}function e(a,b){return Math.round(a/b)*b}function f(a,b){var c=a.getBoundingClientRect(),d=a.ownerDocument,e=d.documentElement,f=o(d);return/webkit.*Chrome.*Mobile/i.test(navigator.userAgent)&&(f.x=0),b?c.top+f.y-e.clientTop:c.left+f.x-e.clientLeft}function g(a){return"number"==typeof a&&!isNaN(a)&&isFinite(a)}function h(a,b,c){c>0&&(l(a,b),setTimeout(function(){m(a,b)},c))}function i(a){return Math.max(Math.min(a,100),0)}function j(a){return Array.isArray(a)?a:[a]}function k(a){a=String(a);var b=a.split(".");return b.length>1?b[1].length:0}function l(a,b){a.classList?a.classList.add(b):a.className+=" "+b}function m(a,b){a.classList?a.classList.remove(b):a.className=a.className.replace(new RegExp("(^|\\b)"+b.split(" ").join("|")+"(\\b|$)","gi")," ")}function n(a,b){return a.classList?a.classList.contains(b):new RegExp("\\b"+b+"\\b").test(a.className)}function o(a){var b=void 0!==window.pageXOffset,c="CSS1Compat"===(a.compatMode||""),d=b?window.pageXOffset:c?a.documentElement.scrollLeft:a.body.scrollLeft,e=b?window.pageYOffset:c?a.documentElement.scrollTop:a.body.scrollTop;return{x:d,y:e}}function p(){return window.navigator.pointerEnabled?{start:"pointerdown",move:"pointermove",end:"pointerup"}:window.navigator.msPointerEnabled?{start:"MSPointerDown",move:"MSPointerMove",end:"MSPointerUp"}:{start:"mousedown touchstart",move:"mousemove touchmove",end:"mouseup touchend"}}function q(){var a=!1;try{var b=Object.defineProperty({},"passive",{get:function(){a=!0}});window.addEventListener("test",null,b)}catch(c){}return a}function r(){return window.CSS&&CSS.supports&&CSS.supports("touch-action","none")}function s(a,b){return 100/(b-a)}function t(a,b){return 100*b/(a[1]-a[0])}function u(a,b){return t(a,a[0]<0?b+Math.abs(a[0]):b-a[0])}function v(a,b){return b*(a[1]-a[0])/100+a[0]}function w(a,b){for(var c=1;a>=b[c];)c+=1;return c}function x(a,b,c){if(c>=a.slice(-1)[0])return 100;var d,e,f,g,h=w(c,a);return d=a[h-1],e=a[h],f=b[h-1],g=b[h],f+u([d,e],c)/s(f,g)}function y(a,b,c){if(c>=100)return a.slice(-1)[0];var d,e,f,g,h=w(c,b);return d=a[h-1],e=a[h],f=b[h-1],g=b[h],v([d,e],(c-f)*s(f,g))}function z(a,b,c,d){if(100===d)return d;var f,g,h=w(d,a);return c?(f=a[h-1],g=a[h],d-f>(g-f)/2?g:f):b[h-1]?a[h-1]+e(d-a[h-1],b[h-1]):d}function A(a,b,c){var d;if("number"==typeof b&&(b=[b]),"[object Array]"!==Object.prototype.toString.call(b))throw new Error("noUiSlider ("+$+"): 'range' contains invalid value.");if(d="min"===a?0:"max"===a?100:parseFloat(a),!g(d)||!g(b[0]))throw new Error("noUiSlider ("+$+"): 'range' value isn't numeric.");c.xPct.push(d),c.xVal.push(b[0]),d?c.xSteps.push(isNaN(b[1])?!1:b[1]):isNaN(b[1])||(c.xSteps[0]=b[1]),c.xHighestCompleteStep.push(0)}function B(a,b,c){if(!b)return!0;c.xSteps[a]=t([c.xVal[a],c.xVal[a+1]],b)/s(c.xPct[a],c.xPct[a+1]);var d=(c.xVal[a+1]-c.xVal[a])/c.xNumSteps[a],e=Math.ceil(Number(d.toFixed(3))-1),f=c.xVal[a]+c.xNumSteps[a]*e;c.xHighestCompleteStep[a]=f}function C(a,b,c){this.xPct=[],this.xVal=[],this.xSteps=[c||!1],this.xNumSteps=[!1],this.xHighestCompleteStep=[],this.snap=b;var d,e=[];for(d in a)a.hasOwnProperty(d)&&e.push([a[d],d]);for(e.sort(e.length&&"object"==typeof e[0][0]?function(a,b){return a[0][0]-b[0][0]}:function(a,b){return a[0]-b[0]}),d=0;d<e.length;d++)A(e[d][1],e[d][0],this);for(this.xNumSteps=this.xSteps.slice(0),d=0;d<this.xNumSteps.length;d++)B(d,this.xNumSteps[d],this)}function D(b){if(a(b))return!0;throw new Error("noUiSlider ("+$+"): 'format' requires 'to' and 'from' methods.")}function E(a,b){if(!g(b))throw new Error("noUiSlider ("+$+"): 'step' is not numeric.");a.singleStep=b}function F(a,b){if("object"!=typeof b||Array.isArray(b))throw new Error("noUiSlider ("+$+"): 'range' is not an object.");if(void 0===b.min||void 0===b.max)throw new Error("noUiSlider ("+$+"): Missing 'min' or 'max' in 'range'.");if(b.min===b.max)throw new Error("noUiSlider ("+$+"): 'range' 'min' and 'max' cannot be equal.");a.spectrum=new C(b,a.snap,a.singleStep)}function G(a,b){if(b=j(b),!Array.isArray(b)||!b.length)throw new Error("noUiSlider ("+$+"): 'start' option is incorrect.");a.handles=b.length,a.start=b}function H(a,b){if(a.snap=b,"boolean"!=typeof b)throw new Error("noUiSlider ("+$+"): 'snap' option must be a boolean.")}function I(a,b){if(a.animate=b,"boolean"!=typeof b)throw new Error("noUiSlider ("+$+"): 'animate' option must be a boolean.")}function J(a,b){if(a.animationDuration=b,"number"!=typeof b)throw new Error("noUiSlider ("+$+"): 'animationDuration' option must be a number.")}function K(a,b){var c,d=[!1];if("lower"===b?b=[!0,!1]:"upper"===b&&(b=[!1,!0]),b===!0||b===!1){for(c=1;c<a.handles;c++)d.push(b);d.push(!1)}else{if(!Array.isArray(b)||!b.length||b.length!==a.handles+1)throw new Error("noUiSlider ("+$+"): 'connect' option doesn't match handle count.");d=b}a.connect=d}function L(a,b){switch(b){case"horizontal":a.ort=0;break;case"vertical":a.ort=1;break;default:throw new Error("noUiSlider ("+$+"): 'orientation' option is invalid.")}}function M(a,b){if(!g(b))throw new Error("noUiSlider ("+$+"): 'margin' option must be numeric.");if(0!==b&&(a.margin=a.spectrum.getMargin(b),!a.margin))throw new Error("noUiSlider ("+$+"): 'margin' option is only supported on linear sliders.")}function N(a,b){if(!g(b))throw new Error("noUiSlider ("+$+"): 'limit' option must be numeric.");if(a.limit=a.spectrum.getMargin(b),!a.limit||a.handles<2)throw new Error("noUiSlider ("+$+"): 'limit' option is only supported on linear sliders with 2 or more handles.")}function O(a,b){if(!g(b))throw new Error("noUiSlider ("+$+"): 'padding' option must be numeric.");if(0!==b){if(a.padding=a.spectrum.getMargin(b),!a.padding)throw new Error("noUiSlider ("+$+"): 'padding' option is only supported on linear sliders.");if(a.padding<0)throw new Error("noUiSlider ("+$+"): 'padding' option must be a positive number.");if(a.padding>=50)throw new Error("noUiSlider ("+$+"): 'padding' option must be less than half the range.")}}function P(a,b){switch(b){case"ltr":a.dir=0;break;case"rtl":a.dir=1;break;default:throw new Error("noUiSlider ("+$+"): 'direction' option was not recognized.")}}function Q(a,b){if("string"!=typeof b)throw new Error("noUiSlider ("+$+"): 'behaviour' must be a string containing options.");var c=b.indexOf("tap")>=0,d=b.indexOf("drag")>=0,e=b.indexOf("fixed")>=0,f=b.indexOf("snap")>=0,g=b.indexOf("hover")>=0;if(e){if(2!==a.handles)throw new Error("noUiSlider ("+$+"): 'fixed' behaviour must be used with 2 handles");M(a,a.start[1]-a.start[0])}a.events={tap:c||f,drag:d,fixed:e,snap:f,hover:g}}function R(a,b){if(b!==!1)if(b===!0){a.tooltips=[];for(var c=0;c<a.handles;c++)a.tooltips.push(!0)}else{if(a.tooltips=j(b),a.tooltips.length!==a.handles)throw new Error("noUiSlider ("+$+"): must pass a formatter for all handles.");a.tooltips.forEach(function(a){if("boolean"!=typeof a&&("object"!=typeof a||"function"!=typeof a.to))throw new Error("noUiSlider ("+$+"): 'tooltips' must be passed a formatter or 'false'.")})}}function S(a,b){a.ariaFormat=b,D(b)}function T(a,b){a.format=b,D(b)}function U(a,b){if(void 0!==b&&"string"!=typeof b&&b!==!1)throw new Error("noUiSlider ("+$+"): 'cssPrefix' must be a string or `false`.");a.cssPrefix=b}function V(a,b){if(void 0!==b&&"object"!=typeof b)throw new Error("noUiSlider ("+$+"): 'cssClasses' must be an object.");if("string"==typeof a.cssPrefix){a.cssClasses={};for(var c in b)b.hasOwnProperty(c)&&(a.cssClasses[c]=a.cssPrefix+b[c])}else a.cssClasses=b}function W(a,b){if(b!==!0&&b!==!1)throw new Error("noUiSlider ("+$+"): 'useRequestAnimationFrame' option should be true (default) or false.");a.useRequestAnimationFrame=b}function X(a){var b={margin:0,limit:0,padding:0,animate:!0,animationDuration:300,ariaFormat:_,format:_},c={step:{r:!1,t:E},start:{r:!0,t:G},connect:{r:!0,t:K},direction:{r:!0,t:P},snap:{r:!1,t:H},animate:{r:!1,t:I},animationDuration:{r:!1,t:J},range:{r:!0,t:F},orientation:{r:!1,t:L},margin:{r:!1,t:M},limit:{r:!1,t:N},padding:{r:!1,t:O},behaviour:{r:!0,t:Q},ariaFormat:{r:!1,t:S},format:{r:!1,t:T},tooltips:{r:!1,t:R},cssPrefix:{r:!1,t:U},cssClasses:{r:!1,t:V},useRequestAnimationFrame:{r:!1,t:W}},d={connect:!1,direction:"ltr",behaviour:"tap",orientation:"horizontal",cssPrefix:"noUi-",cssClasses:{target:"target",base:"base",origin:"origin",handle:"handle",handleLower:"handle-lower",handleUpper:"handle-upper",horizontal:"horizontal",vertical:"vertical",background:"background",connect:"connect",ltr:"ltr",rtl:"rtl",draggable:"draggable",drag:"state-drag",tap:"state-tap",active:"active",tooltip:"tooltip",pips:"pips",pipsHorizontal:"pips-horizontal",pipsVertical:"pips-vertical",marker:"marker",markerHorizontal:"marker-horizontal",markerVertical:"marker-vertical",markerNormal:"marker-normal",markerLarge:"marker-large",markerSub:"marker-sub",value:"value",valueHorizontal:"value-horizontal",valueVertical:"value-vertical",valueNormal:"value-normal",valueLarge:"value-large",valueSub:"value-sub"},useRequestAnimationFrame:!0};a.format&&!a.ariaFormat&&(a.ariaFormat=a.format),Object.keys(c).forEach(function(e){if(void 0===a[e]&&void 0===d[e]){if(c[e].r)throw new Error("noUiSlider ("+$+"): '"+e+"' is required.");return!0}c[e].t(b,void 0===a[e]?d[e]:a[e])}),b.pips=a.pips;var e=[["left","top"],["right","bottom"]];return b.style=e[b.dir][b.ort],b.styleOposite=e[b.dir?0:1][b.ort],b}function Y(a,e,g){function k(a,b){var c=xa.createElement("div");return b&&l(c,b),a.appendChild(c),c}function s(a,b){var c=k(a,e.cssClasses.origin),d=k(c,e.cssClasses.handle);return d.setAttribute("data-handle",b),d.setAttribute("tabindex","0"),d.setAttribute("role","slider"),d.setAttribute("aria-orientation",e.ort?"vertical":"horizontal"),0===b?l(d,e.cssClasses.handleLower):b===e.handles-1&&l(d,e.cssClasses.handleUpper),c}function t(a,b){return b?k(a,e.cssClasses.connect):!1}function u(a,b){ia=[],ja=[],ja.push(t(b,a[0]));for(var c=0;c<e.handles;c++)ia.push(s(b,c)),ra[c]=c,ja.push(t(b,a[c+1]))}function v(a){l(a,e.cssClasses.target),0===e.dir?l(a,e.cssClasses.ltr):l(a,e.cssClasses.rtl),0===e.ort?l(a,e.cssClasses.horizontal):l(a,e.cssClasses.vertical),ha=k(a,e.cssClasses.base)}function w(a,b){return e.tooltips[b]?k(a.firstChild,e.cssClasses.tooltip):!1}function x(){var a=ia.map(w);ea("update",function(b,c,d){if(a[c]){var f=b[c];e.tooltips[c]!==!0&&(f=e.tooltips[c].to(d[c])),a[c].innerHTML=f}})}function y(){ea("update",function(a,b,c,d,f){ra.forEach(function(a){var b=ia[a],d=S(qa,a,0,!0,!0,!0),g=S(qa,a,100,!0,!0,!0),h=f[a],i=e.ariaFormat.to(c[a]);b.children[0].setAttribute("aria-valuemin",d.toFixed(1)),b.children[0].setAttribute("aria-valuemax",g.toFixed(1)),b.children[0].setAttribute("aria-valuenow",h.toFixed(1)),b.children[0].setAttribute("aria-valuetext",i)})})}function z(a,b,c){if("range"===a||"steps"===a)return ta.xVal;if("count"===a){if(!b)throw new Error("noUiSlider ("+$+"): 'values' required for mode 'count'.");var d,e=100/(b-1),f=0;for(b=[];(d=f++*e)<=100;)b.push(d);a="positions"}return"positions"===a?b.map(function(a){return ta.fromStepping(c?ta.getStep(a):a)}):"values"===a?c?b.map(function(a){return ta.fromStepping(ta.getStep(ta.toStepping(a)))}):b:void 0}function A(a,b,c){function e(a,b){return(a+b).toFixed(7)/1}var f={},g=ta.xVal[0],h=ta.xVal[ta.xVal.length-1],i=!1,j=!1,k=0;return c=d(c.slice().sort(function(a,b){return a-b})),c[0]!==g&&(c.unshift(g),i=!0),c[c.length-1]!==h&&(c.push(h),j=!0),c.forEach(function(d,g){var h,l,m,n,o,p,q,r,s,t,u=d,v=c[g+1];if("steps"===b&&(h=ta.xNumSteps[g]),h||(h=v-u),u!==!1&&void 0!==v)for(h=Math.max(h,1e-7),l=u;v>=l;l=e(l,h)){for(n=ta.toStepping(l),o=n-k,r=o/a,s=Math.round(r),t=o/s,m=1;s>=m;m+=1)p=k+m*t,f[p.toFixed(5)]=["x",0];q=c.indexOf(l)>-1?1:"steps"===b?2:0,!g&&i&&(q=0),l===v&&j||(f[n.toFixed(5)]=[l,q]),k=n}}),f}function B(a,b,c){function d(a,b){var c=b===e.cssClasses.value,d=c?j:m,f=c?h:i;return b+" "+d[e.ort]+" "+f[a]}function f(a,f){f[1]=f[1]&&b?b(f[0],f[1]):f[1];var h=k(g,!1);h.className=d(f[1],e.cssClasses.marker),h.style[e.style]=a+"%",f[1]&&(h=k(g,!1),h.className=d(f[1],e.cssClasses.value),h.style[e.style]=a+"%",h.innerText=c.to(f[0]))}var g=xa.createElement("div"),h=[e.cssClasses.valueNormal,e.cssClasses.valueLarge,e.cssClasses.valueSub],i=[e.cssClasses.markerNormal,e.cssClasses.markerLarge,e.cssClasses.markerSub],j=[e.cssClasses.valueHorizontal,e.cssClasses.valueVertical],m=[e.cssClasses.markerHorizontal,e.cssClasses.markerVertical];return l(g,e.cssClasses.pips),l(g,0===e.ort?e.cssClasses.pipsHorizontal:e.cssClasses.pipsVertical),Object.keys(a).forEach(function(b){f(b,a[b])}),g}function C(){la&&(b(la),la=null)}function D(a){C();var b=a.mode,c=a.density||1,d=a.filter||!1,e=a.values||!1,f=a.stepped||!1,g=z(b,e,f),h=A(c,b,g),i=a.format||{to:Math.round};return la=pa.appendChild(B(h,d,i))}function E(){var a=ha.getBoundingClientRect(),b="offset"+["Width","Height"][e.ort];return 0===e.ort?a.width||ha[b]:a.height||ha[b]}function F(a,b,c,d){var f=function(b){return pa.hasAttribute("disabled")?!1:n(pa,e.cssClasses.tap)?!1:(b=G(b,d.pageOffset))?a===ma.start&&void 0!==b.buttons&&b.buttons>1?!1:d.hover&&b.buttons?!1:(oa||b.preventDefault(),b.calcPoint=b.points[e.ort],void c(b,d)):!1},g=[];return a.split(" ").forEach(function(a){b.addEventListener(a,f,oa?{passive:!0}:!1),g.push([a,f])}),g}function G(a,b){var c,d,e=0===a.type.indexOf("touch"),f=0===a.type.indexOf("mouse"),g=0===a.type.indexOf("pointer");if(0===a.type.indexOf("MSPointer")&&(g=!0),e){if(a.touches.length>1)return!1;c=a.changedTouches[0].pageX,d=a.changedTouches[0].pageY}return b=b||o(xa),(f||g)&&(c=a.clientX+b.x,d=a.clientY+b.y),a.pageOffset=b,a.points=[c,d],a.cursor=f||g,a}function H(a){var b=a-f(ha,e.ort),c=100*b/E();return e.dir?100-c:c}function I(a){var b=100,c=!1;return ia.forEach(function(d,e){if(!d.hasAttribute("disabled")){var f=Math.abs(qa[e]-a);b>f&&(c=e,b=f)}}),c}function J(a,b,c,d){var e=c.slice(),f=[!a,a],g=[a,!a];d=d.slice(),a&&d.reverse(),d.length>1?d.forEach(function(a,c){var d=S(e,a,e[a]+b,f[c],g[c],!1);d===!1?b=0:(b=d-e[a],e[a]=d)}):f=g=[!0];var h=!1;d.forEach(function(a,d){h=W(a,c[a]+b,f[d],g[d])||h}),h&&d.forEach(function(a){K("update",a),K("slide",a)})}function K(a,b,c){Object.keys(va).forEach(function(d){var f=d.split(".")[0];a===f&&va[d].forEach(function(a){a.call(ka,ua.map(e.format.to),b,ua.slice(),c||!1,qa.slice())})})}function L(a,b){"mouseout"===a.type&&"HTML"===a.target.nodeName&&null===a.relatedTarget&&N(a,b)}function M(a,b){if(-1===navigator.appVersion.indexOf("MSIE 9")&&0===a.buttons&&0!==b.buttonsProperty)return N(a,b);var c=(e.dir?-1:1)*(a.calcPoint-b.startCalcPoint),d=100*c/b.baseSize;J(c>0,d,b.locations,b.handleNumbers)}function N(a,b){sa&&(m(sa,e.cssClasses.active),sa=!1),a.cursor&&(za.style.cursor="",za.removeEventListener("selectstart",c)),wa.forEach(function(a){ya.removeEventListener(a[0],a[1])}),m(pa,e.cssClasses.drag),V(),b.handleNumbers.forEach(function(a){K("change",a),K("set",a),K("end",a)})}function O(a,b){if(1===b.handleNumbers.length){var d=ia[b.handleNumbers[0]];if(d.hasAttribute("disabled"))return!1;sa=d.children[0],l(sa,e.cssClasses.active)}a.stopPropagation();var f=F(ma.move,ya,M,{startCalcPoint:a.calcPoint,baseSize:E(),pageOffset:a.pageOffset,handleNumbers:b.handleNumbers,buttonsProperty:a.buttons,locations:qa.slice()}),g=F(ma.end,ya,N,{handleNumbers:b.handleNumbers}),h=F("mouseout",ya,L,{handleNumbers:b.handleNumbers});wa=f.concat(g,h),a.cursor&&(za.style.cursor=getComputedStyle(a.target).cursor,ia.length>1&&l(pa,e.cssClasses.drag),za.addEventListener("selectstart",c,!1)),b.handleNumbers.forEach(function(a){K("start",a)})}function P(a){a.stopPropagation();var b=H(a.calcPoint),c=I(b);return c===!1?!1:(e.events.snap||h(pa,e.cssClasses.tap,e.animationDuration),W(c,b,!0,!0),V(),K("slide",c,!0),K("update",c,!0),K("change",c,!0),K("set",c,!0),void(e.events.snap&&O(a,{handleNumbers:[c]})))}function Q(a){var b=H(a.calcPoint),c=ta.getStep(b),d=ta.fromStepping(c);Object.keys(va).forEach(function(a){"hover"===a.split(".")[0]&&va[a].forEach(function(a){a.call(ka,d)})})}function R(a){a.fixed||ia.forEach(function(a,b){F(ma.start,a.children[0],O,{handleNumbers:[b]})}),a.tap&&F(ma.start,ha,P,{}),a.hover&&F(ma.move,ha,Q,{hover:!0}),a.drag&&ja.forEach(function(b,c){if(b!==!1&&0!==c&&c!==ja.length-1){var d=ia[c-1],f=ia[c],g=[b];l(b,e.cssClasses.draggable),a.fixed&&(g.push(d.children[0]),g.push(f.children[0])),g.forEach(function(a){F(ma.start,a,O,{handles:[d,f],handleNumbers:[c-1,c]})})}})}function S(a,b,c,d,f,g){return ia.length>1&&(d&&b>0&&(c=Math.max(c,a[b-1]+e.margin)),f&&b<ia.length-1&&(c=Math.min(c,a[b+1]-e.margin))),ia.length>1&&e.limit&&(d&&b>0&&(c=Math.min(c,a[b-1]+e.limit)),f&&b<ia.length-1&&(c=Math.max(c,a[b+1]-e.limit))),e.padding&&(0===b&&(c=Math.max(c,e.padding)),b===ia.length-1&&(c=Math.min(c,100-e.padding))),c=ta.getStep(c),c=i(c),c!==a[b]||g?c:!1}function T(a){return a+"%"}function U(a,b){qa[a]=b,ua[a]=ta.fromStepping(b);var c=function(){ia[a].style[e.style]=T(b),Y(a),Y(a+1)};window.requestAnimationFrame&&e.useRequestAnimationFrame?window.requestAnimationFrame(c):c()}function V(){ra.forEach(function(a){var b=qa[a]>50?-1:1,c=3+(ia.length+b*a);ia[a].childNodes[0].style.zIndex=c})}function W(a,b,c,d){return b=S(qa,a,b,c,d,!1),b===!1?!1:(U(a,b),!0)}function Y(a){if(ja[a]){var b=0,c=100;0!==a&&(b=qa[a-1]),a!==ja.length-1&&(c=qa[a]),ja[a].style[e.style]=T(b),ja[a].style[e.styleOposite]=T(100-c)}}function Z(a,b){null!==a&&a!==!1&&("number"==typeof a&&(a=String(a)),a=e.format.from(a),a===!1||isNaN(a)||W(b,ta.toStepping(a),!1,!1))}function _(a,b){var c=j(a),d=void 0===qa[0];b=void 0===b?!0:!!b,c.forEach(Z),e.animate&&!d&&h(pa,e.cssClasses.tap,e.animationDuration),ra.forEach(function(a){W(a,qa[a],!0,!1)}),V(),ra.forEach(function(a){K("update",a),null!==c[a]&&b&&K("set",a)})}function aa(a){_(e.start,a)}function ba(){var a=ua.map(e.format.to);return 1===a.length?a[0]:a}function ca(){for(var a in e.cssClasses)e.cssClasses.hasOwnProperty(a)&&m(pa,e.cssClasses[a]);for(;pa.firstChild;)pa.removeChild(pa.firstChild);delete pa.noUiSlider}function da(){return qa.map(function(a,b){var c=ta.getNearbySteps(a),d=ua[b],e=c.thisStep.step,f=null;e!==!1&&d+e>c.stepAfter.startValue&&(e=c.stepAfter.startValue-d),f=d>c.thisStep.startValue?c.thisStep.step:c.stepBefore.step===!1?!1:d-c.stepBefore.highestStep,100===a?e=null:0===a&&(f=null);var g=ta.countStepDecimals();return null!==e&&e!==!1&&(e=Number(e.toFixed(g))),null!==f&&f!==!1&&(f=Number(f.toFixed(g))),[f,e]})}function ea(a,b){va[a]=va[a]||[],va[a].push(b),"update"===a.split(".")[0]&&ia.forEach(function(a,b){K("update",b)})}function fa(a){var b=a&&a.split(".")[0],c=b&&a.substring(b.length);Object.keys(va).forEach(function(a){var d=a.split(".")[0],e=a.substring(d.length);b&&b!==d||c&&c!==e||delete va[a]})}function ga(a,b){var c=ba(),d=["margin","limit","padding","range","animate","snap","step","format"];d.forEach(function(b){void 0!==a[b]&&(g[b]=a[b])});var f=X(g);d.forEach(function(b){void 0!==a[b]&&(e[b]=f[b])}),ta=f.spectrum,e.margin=f.margin,e.limit=f.limit,e.padding=f.padding,e.pips&&D(e.pips),qa=[],_(a.start||c,b)}var ha,ia,ja,ka,la,ma=p(),na=r(),oa=na&&q(),pa=a,qa=[],ra=[],sa=!1,ta=e.spectrum,ua=[],va={},wa=null,xa=a.ownerDocument,ya=xa.documentElement,za=xa.body;if(pa.noUiSlider)throw new Error("noUiSlider ("+$+"): Slider was already initialized.");return v(pa),u(e.connect,ha),ka={destroy:ca,steps:da,on:ea,off:fa,get:ba,set:_,reset:aa,__moveHandles:function(a,b,c){J(a,b,qa,c)},options:g,updateOptions:ga,target:pa,removePips:C,pips:D},R(e.events),_(e.start),e.pips&&D(e.pips),e.tooltips&&x(),y(),ka}function Z(a,b){if(!a||!a.nodeName)throw new Error("noUiSlider ("+$+"): create requires a single element, got: "+a);var c=X(b,a),d=Y(a,c,b);return a.noUiSlider=d,d}var $="10.0.0";C.prototype.getMargin=function(a){var b=this.xNumSteps[0];if(b&&a/b%1!==0)throw new Error("noUiSlider ("+$+"): 'limit', 'margin' and 'padding' must be divisible by step.");return 2===this.xPct.length?t(this.xVal,a):!1},C.prototype.toStepping=function(a){return a=x(this.xVal,this.xPct,a)},C.prototype.fromStepping=function(a){return y(this.xVal,this.xPct,a)},C.prototype.getStep=function(a){return a=z(this.xPct,this.xSteps,this.snap,a)},C.prototype.getNearbySteps=function(a){var b=w(a,this.xPct);return{stepBefore:{startValue:this.xVal[b-2],step:this.xNumSteps[b-2],highestStep:this.xHighestCompleteStep[b-2]},thisStep:{startValue:this.xVal[b-1],step:this.xNumSteps[b-1],highestStep:this.xHighestCompleteStep[b-1]},stepAfter:{startValue:this.xVal[b-0],step:this.xNumSteps[b-0],highestStep:this.xHighestCompleteStep[b-0]}}},C.prototype.countStepDecimals=function(){var a=this.xNumSteps.map(k);return Math.max.apply(null,a)},C.prototype.convert=function(a){return this.getStep(this.toStepping(a))};var _={to:function(a){return void 0!==a&&a.toFixed(2)},from:Number};return{version:$,create:Z}});


/*[PATH @digikala/supernova-digikala-desktop/assets/local/js/libs/wNumb.min.js]*/
!function(e){"function"==typeof define&&define.amd?define([],e):"object"==typeof exports?module.exports=e():window.wNumb=e()}(function(){"use strict";var o=["decimals","thousand","mark","prefix","suffix","encoder","decoder","negativeBefore","negative","edit","undo"];function y(e){return e.split("").reverse().join("")}function g(e,t){return e.substring(0,t.length)===t}function f(e,t,n){if((e[t]||e[n])&&e[t]===e[n])throw new Error(t)}function b(e){return"number"==typeof e&&isFinite(e)}function n(e,t,n,r,i,o,f,u,s,a,c,p){var d,l,h,g,v,m=p,w="",x="";return o&&(p=o(p)),!!b(p)&&(!1!==e&&0===parseFloat(p.toFixed(e))&&(p=0),p<0&&(d=!0,p=Math.abs(p)),!1!==e&&(v=e,g=(g=p).toString().split("e"),p=(+((g=(g=Math.round(+(g[0]+"e"+(g[1]?+g[1]+v:v)))).toString().split("e"))[0]+"e"+(g[1]?+g[1]-v:-v))).toFixed(v)),-1!==(p=p.toString()).indexOf(".")?(h=(l=p.split("."))[0],n&&(w=n+l[1])):h=p,t&&(h=y((h=y(h).match(/.{1,3}/g)).join(y(t)))),d&&u&&(x+=u),r&&(x+=r),d&&s&&(x+=s),x+=h,x+=w,i&&(x+=i),a&&(x=a(x,m)),x)}function r(e,t,n,r,i,o,f,u,s,a,c,p){var d,l,h="";return c&&(p=c(p)),!(!p||"string"!=typeof p)&&(u&&g(p,u)&&(p=p.replace(u,""),d=!0),r&&g(p,r)&&(p=p.replace(r,"")),s&&g(p,s)&&(p=p.replace(s,""),d=!0),i&&(l=i,p.slice(-1*l.length)===l)&&(p=p.slice(0,-1*i.length)),t&&(p=p.split(t).join("")),n&&(p=p.replace(n,".")),d&&(h+="-"),""!==(h=(h+=p).replace(/[^0-9\.\-.]/g,""))&&(h=Number(h),f&&(h=f(h)),!!b(h)&&h))}function i(e,t,n){var r,i=[];for(r=0;r<o.length;r+=1)i.push(e[o[r]]);return i.push(n),t.apply("",i)}return function e(t){if(!(this instanceof e))return new e(t);"object"==typeof t&&(t=function(e){var t,n,r,i={};for(void 0===e.suffix&&(e.suffix=e.postfix),t=0;t<o.length;t+=1)if(void 0===(r=e[n=o[t]]))"negative"!==n||i.negativeBefore?"mark"===n&&"."!==i.thousand?i[n]=".":i[n]=!1:i[n]="-";else if("decimals"===n){if(!(0<=r&&r<8))throw new Error(n);i[n]=r}else if("encoder"===n||"decoder"===n||"edit"===n||"undo"===n){if("function"!=typeof r)throw new Error(n);i[n]=r}else{if("string"!=typeof r)throw new Error(n);i[n]=r}return f(i,"mark","thousand"),f(i,"prefix","negative"),f(i,"prefix","negativeBefore"),i}(t),this.to=function(e){return i(t,n,e)},this.from=function(e){return i(t,r,e)})}});



/*[PATH @digikala/supernova-digikala-desktop/assets/local/js/libs/jquery.countdown.min.js]*/
!function(l){l.fn.countdown=function(e){var g=31557600,T=2629800,p=604800,x=86400,y=3600,w=/%y|%m|%w|%d|%h|%i|%s|%ty|%tm|%tw|%td|%th|%ti|%ts/g,r=/\d/g,v=function(e,a){var t=e.toString().match(r),n="";return l.each(t,function(e,t){t=Number(t),n+=""+a.digits[t]||""+t}),n},j=function(e){var t=new Date,a=e.data("jcdData");return a?(null!==a.offset&&(t=n(a.offset)),t.setMilliseconds(0),t):new Date},n=function(e){var t,a,n,r=new Date;return null!==e&&(t=36e5*e,n=r.getTime()- -r.getTimezoneOffset()/60*36e5+t,a=r.setTime(n)),new Date(a)},i=function(e,t){t.onStart&&e.on("start.jcdevt",t.onStart),t.onChange&&e.on("change.jcdevt",t.onChange),t.onComplete&&e.on("complete.jcdevt",t.onComplete),t.onPause&&e.on("pause.jcdevt",t.onPause),t.onResume&&e.on("resume.jcdevt",t.onResume),t.onLocaleChange&&e.on("locale.jcdevt",t.onLocaleChange)},L=function(e){var t=e.template,a=e.yearsLeft,n=e.monthsLeft,r=e.weeksLeft,o=e.daysLeft,i=e.hrsLeft,s=e.minsLeft,l=e.secLeft,d=!1,u=!1,c=!1,m=!1,h=!1,f=!1;return e.isRTL&&(t=e.rtlTemplate),e.omitZero&&(e.yearsAndMonths&&(e.yearsLeft||(d=!0),e.monthsLeft||(u=!0)),e.weeks&&(e.yearsAndMonths&&u&&!e.weeksLeft||!e.yearsAndMonths&&!e.weeksLeft)&&(c=!0),c&&!o&&(m=!0),m&&!i&&(h=!0),h&&!s&&(f=!0)),e.leadingZero&&(a<10&&(a="0"+a),n<10&&(n="0"+n),r<10&&(r="0"+r),o<10&&(o="0"+o),i<10&&(i="0"+i),s<10&&(s="0"+s),l<10&&(l="0"+l)),a=v(a,e),n=v(n,e),r=v(r,e),o=v(o,e),i=v(i,e),s=v(s,e),l=v(l,e),e.yearsAndMonths&&(e.omitZero&&d||(t=(t=t.replace("%y",a)).replace("%ty",1==a&&e.yearSingularText?e.yearSingularText:e.yearText)),(!e.omitZero||!d&&n||!d&&!u)&&(t=(t=t.replace("%m",n)).replace("%tm",1==n&&e.monthSingularText?e.monthSingularText:e.monthText))),e.weeks&&!c&&(t=(t=t.replace("%w",r)).replace("%tw",1==r&&e.weekSingularText?e.weekSingularText:e.weekText)),m||(t=(t=t.replace("%d",o)).replace("%td",1==o&&e.daySingularText?e.daySingularText:e.dayText)),h||(t=(t=t.replace("%h",i)).replace("%th",1==i&&e.hourSingularText?e.hourSingularText:e.hourText)),f||(t=(t=t.replace("%i",s)).replace("%ti",1==s&&e.minSingularText?e.minSingularText:e.minText)),t=(t=(t=t.replace("%s",l)).replace("%ts",1==l&&e.secSingularText?e.secSingularText:e.secText)).replace(w,"")},s=function(){var e,t,a,n,r,o,i,s,l=this,d=0,u=0,c=0,m="",h=function(e){var t;return t=Math.floor(s/e),s-=t*e,t},f=l.data("jcdData");if(!f)return!1;e=j(l),(t=null!==f.serverDiff?new Date(f.serverDiff+f.clientdateNow.getTime()):f.dateObj).setMilliseconds(0),a="down"===f.direction?t.getTime()-e.getTime():e.getTime()-t.getTime(),s=Math.round(a/1e3),n=h(x),r=h(y),o=h(60),i=h(1),f.yearsAndMonths&&(s+=n*x,d=h(g),u=h(T),n=h(x)),f.weeks&&(s+=n*x,c=h(p),n=h(x)),(f.hoursOnly||f.minsOnly||f.secsOnly)&&(f.yearsAndMonths&&(s+=d*g,s+=u*T,d=u=0),f.weeks&&(s+=c*p,c=0)),f.hoursOnly&&(s+=n*x,s+=r*y,r=h(y)),f.minsOnly&&(s+=n*x,s+=r*y,r=n=0,s+=60*o,o=h(60)),f.secsOnly&&(s+=n*x,s+=r*y,s+=60*o,o=r=n=0,s+=i,i=h(1)),f.yearsLeft=d,f.monthsLeft=u,f.weeksLeft=c,f.daysLeft=n,f.hrsLeft=r,f.minsLeft=o,f.secLeft=i,l.data("jcdData",f),"down"===f.direction&&(e<t||f.minus)||"up"===f.direction&&(t<e||f.minus)?m=L(f):(f.yearsLeft=f.monthsLeft=f.weeksLeft=f.daysLeft=f.hrsLeft=f.minsLeft=f.secLeft=0,m=L(f),f.hasCompleted=!0),l.html(m).triggerMulti("change.jcdevt,countChange",[f]),f.hasCompleted&&(l.triggerMulti("complete.jcdevt,countComplete"),clearInterval(f.timer))},t={init:function(a){var n,r=l.extend({},l.fn.countdown.defaults,a),o={};return this.each(function(){var e,t=l(this);if(t.data("jcdData")&&(t.countdown("changeSettings",a,!0),r=t.data("jcdData")),null===r.date&&null===r.dataAttr)return l.error("No Date passed to jCountdown. date option is required."),!0;n=r.date?r.date:t.attr("data-"+r.dataAttr),"Invalid Date"===new Date(n).toString()&&l.error("Invalid Date passed to jCountdown: "+n),i(t,a),(o=l.extend({},r)).dom={},o.dom.$time=l("<"+o.timeWrapElement+">").addClass(o.timeWrapClass),o.dom.$text=l("<"+o.textWrapElement+">").addClass(o.textWrapClass),o.clientdateNow=new Date,o.clientdateNow.setMilliseconds(0),o.originalHTML=t.html(),o.dateObj=new Date(n),o.dateObj.setMilliseconds(0),o.hasCompleted=!1,o.timer=0,o.yearsLeft=o.monthsLeft=o.weeksLeft=o.daysLeft=o.hrsLeft=o.minsLeft=o.secLeft=0,o.difference=null,e=l.proxy(s,t),o.timer=setInterval(e,o.updateTime),t.data("jcdData",o).triggerMulti("start.jcdevt,countStart",[o]),e()})},changeSettings:function(n,r){return this.each(function(){var e,t=l(this),a=l.proxy(s,t);if(!t.data("jcdData"))return!0;e=l.extend({},t.data("jcdData"),n),n.hasOwnProperty("date")&&"Invalid Date"===new Date(n.date).toString()&&l.error("Invalid Date passed to jCountdown: "+n.date),e.completed=!1,e.dateObj=new Date(n.date),clearInterval(e.timer),t.off(".jcdevt").data("jcdData",e),r||(i(t,e),e.timer=setInterval(a,e.updateTime),t.data("jcdData",e),a()),e=null})},resume:function(){return this.each(function(){var e=l(this),t=e.data("jcdData"),a=l.proxy(s,e);if(!t)return!0;if(e.data("jcdData",t).triggerMulti("resume.jcdevt,countResume",[t]),!t.hasCompleted){if(t.timer=setInterval(a,t.updateTime),t.stopwatch&&"up"===t.direction){var n=j(e).getTime()-t.pausedAt.getTime(),r=new Date;r.setTime(t.dateObj.getTime()+n),t.dateObj=r}a()}})},pause:function(){return this.each(function(){var e=l(this),t=e.data("jcdData");if(!t)return!0;t.stopwatch&&(t.pausedAt=j(e)),clearInterval(t.timer),e.data("jcdData",t).triggerMulti("pause.jcdevt,countPause",[t])})},complete:function(){return this.each(function(){var e=l(this),t=e.data("jcdData");if(!t)return!0;clearInterval(t.timer),t.hasCompleted=!0,e.data("jcdData",t).triggerMulti("complete.jcdevt,countComplete",[t])})},destroy:function(){return this.each(function(){var e=l(this),t=e.data("jcdData");if(!t)return!0;clearInterval(t.timer),e.off(".jcdevt").removeData("jcdData").html(t.originalHTML)})},getSettings:function(e){var t=l(this).data("jcdData");return e&&t?t.hasOwnProperty(e)?t[e]:void 0:t},changeLocale:function(e){var t=l(this),a=t.data("jcdData");return l.fn.countdown.locale[e]?(l.extend(a,l.fn.countdown.locale[e]),t.data("jcdData",a).triggerMulti("locale.jcdevt,localeChange",[a]),!0):(l.error("Locale '"+e+"' does not exist"),!1)}};return t[e]?t[e].apply(this,Array.prototype.slice.call(arguments,1)):"object"!=typeof e&&e?void l.error("Method "+e+" does not exist in the jCountdown Plugin"):t.init.apply(this,arguments)},l.fn.countdown.defaults={date:null,dataAttr:null,updateTime:1e3,yearText:"years",monthText:"months",weekText:"weeks",dayText:"days",hourText:"hours",minText:"mins",secText:"sec",yearSingularText:"year",monthSingularText:"month",weekSingularText:"week",daySingularText:"day",hourSingularText:"hour",minSingularText:"min",secSingularText:"sec",digits:[0,1,2,3,4,5,6,7,8,9],isRTL:!1,minus:!1,onStart:null,onChange:null,onComplete:null,onResume:null,onPause:null,onLocaleChange:null,leadingZero:!1,offset:null,serverDiff:null,hoursOnly:!1,minsOnly:!1,secsOnly:!1,weeks:!1,hours:!1,yearsAndMonths:!1,direction:"down",stopwatch:!1,omitZero:!1,rtlTemplate:"%ts %s : %ti %i : %th %h : %tm %m : %ty %y",template:"%y %ty : %m %tm : %h %th : %i %ti : %s %ts"},l.fn.countdown.locale=[],l.fn.countdown.locale.en={yearText:"years",monthText:"months",weekText:"weeks",dayText:"days",hourText:"hours",minText:"mins",secText:"sec",yearSingularText:"year",monthSingularText:"month",weekSingularText:"week",daySingularText:"day",hourSingularText:"hour",minSingularText:"min",secSingularText:"sec",isRTL:!1},l.fn.triggerMulti=function(e,a){var n=e.split(",");return this.each(function(){for(var e=l(this),t=0;t<n.length;t++)e.trigger(n[t],a)})}}(jQuery),$.fn.countdown.locale.ar={yearText:"سال",monthText:"ماه",weekText:"هفته",dayText:"روز",hourText:"ساعت",digits:["۰","۱","۲","۳","۴","۵","۶","۷","۸","۹"],minText:"دقیقه",secText:"ثانیه",isRTL:!0},$.extend($.fn.countdown.defaults,$.fn.countdown.locale.ar);



/*[PATH @digikala/supernova-digikala-desktop/assets/local/js/libs/jquery.animate.min.js]*/
$.fn.extend({animateCss:function(n,i){return this.addClass("animated "+n).one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",function(){$(this).removeClass("animated "+n),i&&i()}),this}});



/*[PATH @digikala/supernova-digikala-desktop/assets/local/js/libs/jquery.selectric.js]*/
(function (factory) {
    /* global define */
    /* istanbul ignore next */
    if (typeof define === 'function' && define.amd) {
        define(['jquery'], factory);
    } else if (typeof module === 'object' && module.exports) {
        // Node/CommonJS
        module.exports = function (root, jQuery) {
            if (jQuery === undefined) {
                if (typeof window !== 'undefined') {
                    jQuery = require('jquery');
                } else {
                    jQuery = require('jquery')(root);
                }
            }
            factory(jQuery);
            return jQuery;
        };
    } else {
        // Browser globals
        factory(jQuery);
    }
}(function ($) {
    'use strict';

    var $doc = $(document);
    var $win = $(window);

    var pluginName = 'selectric';
    var classList = 'Input Items Open Disabled TempShow HideSelect Wrapper Focus Hover Responsive Above Below Scroll Group GroupLabel';
    var eventNamespaceSuffix = '.sl';

    var chars = ['a', 'e', 'i', 'o', 'u', 'n', 'c', 'y'];
    var diacritics = [
        /[\xE0-\xE5]/g, // a
        /[\xE8-\xEB]/g, // e
        /[\xEC-\xEF]/g, // i
        /[\xF2-\xF6]/g, // o
        /[\xF9-\xFC]/g, // u
        /[\xF1]/g,      // n
        /[\xE7]/g,      // c
        /[\xFD-\xFF]/g  // y
    ];

    /**
     * Create an instance of Selectric
     *
     * @constructor
     * @param {Node} element - The &lt;select&gt; element
     * @param {object}  opts - Options
     */
    var Selectric = function (element, opts) {
        var _this = this;

        _this.element = element;
        _this.$element = $(element);

        _this.state = {
            multiple: !!_this.$element.attr('multiple'),
            enabled: false,
            opened: false,
            currValue: -1,
            selectedIdx: -1,
            highlightedIdx: -1
        };

        _this.eventTriggers = {
            open: _this.open,
            close: _this.close,
            destroy: _this.destroy,
            refresh: _this.refresh,
            init: _this.init
        };

        _this.init(opts);
    };

    Selectric.prototype = {
        utils: {
            /**
             * Detect mobile browser
             *
             * @return {boolean}
             */
            isMobile: function () {
                return /android|ip(hone|od|ad)/i.test(navigator.userAgent);
            },

            /**
             * Escape especial characters in string (https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Regular_Expressions)
             *
             * @param  {string} str - The string to be escaped
             * @return {string}       The string with the special characters escaped
             */
            escapeRegExp: function (str) {
                return str.replace(/[.*+?^${}()|[\]\\]/g, '\\$&'); // $& means the whole matched string
            },

            /**
             * Replace diacritics
             *
             * @param  {string} str - The string to replace the diacritics
             * @return {string}       The string with diacritics replaced with ascii characters
             */
            replaceDiacritics: function (str) {
                var k = diacritics.length;

                while (k--) {
                    str = str.toLowerCase().replace(diacritics[k], chars[k]);
                }

                return str;
            },

            /**
             * Format string
             * https://gist.github.com/atesgoral/984375
             *
             * @param  {string} f - String to be formated
             * @return {string}     String formated
             */
            format: function (f) {
                var a = arguments; // store outer arguments
                return ('' + f) // force format specifier to String
                    .replace( // replace tokens in format specifier
                        /\{(?:(\d+)|(\w+))\}/g, // match {token} references
                        function (
                            s, // the matched string (ignored)
                            i, // an argument index
                            p // a property name
                        ) {
                            return p && a[1] // if property name and first argument exist
                                ? a[1][p] // return property from first argument
                                : a[i]; // assume argument index and return i-th argument
                        });
            },

            /**
             * Get the next enabled item in the options list.
             *
             * @param  {object} selectItems - The options object.
             * @param  {number}    selected - Index of the currently selected option.
             * @return {object}               The next enabled item.
             */
            nextEnabledItem: function (selectItems, selected) {
                while (selectItems[selected = (selected + 1) % selectItems.length].hidden) {
                    // empty
                }
                return selected;
            },

            /**
             * Get the previous enabled item in the options list.
             *
             * @param  {object} selectItems - The options object.
             * @param  {number}    selected - Index of the currently selected option.
             * @return {object}               The previous enabled item.
             */
            previousEnabledItem: function (selectItems, selected) {
                while (selectItems[selected = (selected > 0 ? selected : selectItems.length) - 1].hidden) {
                    // empty
                }
                return selected;
            },

            /**
             * Transform camelCase string to dash-case.
             *
             * @param  {string} str - The camelCased string.
             * @return {string}       The string transformed to dash-case.
             */
            toDash: function (str) {
                return str.replace(/([a-z0-9])([A-Z])/g, '$1-$2').toLowerCase();
            },

            /**
             * Calls the events registered with function name.
             *
             * @param {string}    fn - The name of the function.
             * @param {number} scope - Scope that should be set on the function.
             */
            triggerCallback: function (fn, scope) {
                var elm = scope.element;
                var func = scope.options['on' + fn];
                var args = [elm].concat([].slice.call(arguments).slice(1));

                if ($.isFunction(func)) {
                    func.apply(elm, args);
                }

                $(elm).trigger(pluginName + '-' + this.toDash(fn), args);
            },

            /**
             * Transform array list to concatenated string and remove empty values
             * @param  {array} arr - Class list
             * @return {string}      Concatenated string
             */
            arrayToClassname: function (arr) {
                var newArr = $.grep(arr, function (item) {
                    return !!item;
                });

                return $.trim(newArr.join(' '));
            }
        },

        /** Initializes */
        init: function (opts) {
            var _this = this;

            // Set options
            _this.options = $.extend(true, {}, $.fn[pluginName].defaults, _this.options, opts);

            _this.utils.triggerCallback('BeforeInit', _this);

            // Preserve data
            _this.destroy(true);

            // Disable on mobile browsers
            if (_this.options.disableOnMobile && _this.utils.isMobile()) {
                _this.disableOnMobile = true;
                return;
            }

            // Get classes
            _this.classes = _this.getClassNames();

            // Create elements
            var input = $('<input/>', {
                'class': _this.options.hasSearch ? 'dk-selectric-input' : 'u-hidden',
                'readonly': _this.utils.isMobile()
            });
            var items = $('<div/>', {'class': _this.classes.items, 'tabindex': -1});
            var itemsScroll = $('<div/>', {'class': _this.classes.scroll});
            var wrapper = $('<div/>', {'class': _this.classes.prefix, 'html': _this.options.arrowButtonMarkup});
            var label = $('<span/>', {'class': 'label'});
            var outerWrapper = _this.$element.wrap('<div/>').parent().append(wrapper.prepend(label), items, input);
            var hideSelectWrapper = $('<div/>', {'class': _this.classes.hideselect});

            _this.elements = {
                input: input,
                items: items,
                itemsScroll: itemsScroll,
                wrapper: wrapper,
                label: label,
                outerWrapper: outerWrapper
            };

            if (_this.options.nativeOnMobile && _this.utils.isMobile()) {
                _this.elements.input = undefined;
                hideSelectWrapper.addClass(_this.classes.prefix + '-is-native');

                _this.$element.on('change', function () {
                    _this.refresh();
                });
            }

            _this.$element
                .on(_this.eventTriggers)
                .wrap(hideSelectWrapper);

            _this.originalTabindex = _this.$element.prop('tabindex');
            _this.$element.prop('tabindex', -1);

            _this.populate();
            _this.activate();

            _this.utils.triggerCallback('Init', _this);
        },

        /** Activates the plugin */
        activate: function () {
            var _this = this;
            var hiddenChildren = _this.elements.items.closest(':visible').children(':hidden').addClass(_this.classes.tempshow);
            var originalWidth = _this.$element.width();

            hiddenChildren.removeClass(_this.classes.tempshow);

            _this.utils.triggerCallback('BeforeActivate', _this);

            _this.elements.outerWrapper.prop('class',
                _this.utils.arrayToClassname([
                    _this.classes.wrapper,
                    _this.$element.prop('class').replace(/\S+/g, _this.classes.prefix + '-$&'),
                    _this.options.responsive ? _this.classes.responsive : ''
                ])
            );

            if (_this.options.inheritOriginalWidth && originalWidth > 0) {
                _this.elements.outerWrapper.width(originalWidth);
            }

            _this.unbindEvents();

            if (!_this.$element.prop('disabled')) {
                _this.state.enabled = true;

                // Not disabled, so... Removing disabled class
                _this.elements.outerWrapper.removeClass(_this.classes.disabled);

                // Remove styles from items box
                // Fix incorrect height when refreshed is triggered with fewer options
                _this.$li = _this.elements.items.removeAttr('style').find('li');

                _this.bindEvents();
            } else {
                _this.elements.outerWrapper.addClass(_this.classes.disabled);

                if (_this.elements.input) {
                    _this.elements.input.prop('disabled', true);
                }
            }

            _this.utils.triggerCallback('Activate', _this);
        },

        /**
         * Generate classNames for elements
         *
         * @return {object} Classes object
         */
        getClassNames: function () {
            var _this = this;
            var customClass = _this.options.customClass;
            var classesObj = {};

            $.each(classList.split(' '), function (i, currClass) {
                var c = customClass.prefix + currClass;
                classesObj[currClass.toLowerCase()] = customClass.camelCase ? c : _this.utils.toDash(c);
            });

            classesObj.prefix = customClass.prefix;

            return classesObj;
        },

        /** Set the label text */
        setLabel: function () {
            var _this = this;
            var labelBuilder = _this.options.labelBuilder;

            if (_this.state.multiple) {
                // Make sure currentValues is an array
                var currentValues = $.isArray(_this.state.currValue) ? _this.state.currValue : [_this.state.currValue];
                // I'm not happy with this, but currentValues can be an empty
                // array and we need to fallback to the default option.
                currentValues = currentValues.length === 0 ? [0] : currentValues;

                var labelMarkup = $.map(currentValues, function (value) {
                    return $.grep(_this.lookupItems, function (item) {
                        return item.index === value;
                    })[0]; // we don't want nested arrays here
                });

                labelMarkup = $.grep(labelMarkup, function (item) {
                    // Hide default (please choose) if more then one element were selected.
                    // If no option value were given value is set to option text by default
                    if (labelMarkup.length > 1 || labelMarkup.length === 0) {
                        return $.trim(item.value) !== '';
                    }
                    return item;
                });

                labelMarkup = $.map(labelMarkup, function (item) {
                    return $.isFunction(labelBuilder)
                        ? labelBuilder(item)
                        : _this.utils.format(labelBuilder, item);
                });

                // Limit the amount of selected values shown in label
                if (_this.options.multiple.maxLabelEntries) {
                    if (labelMarkup.length >= _this.options.multiple.maxLabelEntries + 1) {
                        labelMarkup = labelMarkup.slice(0, _this.options.multiple.maxLabelEntries);
                        labelMarkup.push(
                            $.isFunction(labelBuilder)
                                ? labelBuilder({text: '...'})
                                : _this.utils.format(labelBuilder, {text: '...'}));
                    } else {
                        labelMarkup.slice(labelMarkup.length - 1);
                    }
                }
                _this.elements.label.html(labelMarkup.join(_this.options.multiple.separator));

            } else {
                var currItem = _this.lookupItems[_this.state.currValue];

                if (currItem.element.hasClass('placeholder')) {
                    _this.elements.label.addClass('placeholder')
                } else {
                    _this.elements.label.removeClass('placeholder');
                }
                _this.elements.label.html(
                    $.isFunction(labelBuilder)
                        ? labelBuilder(currItem)
                        : _this.utils.format(labelBuilder, currItem)
                );
            }
        },

        /** Get and save the available options */
        populate: function () {
            var _this = this;
            var $options = _this.$element.children();
            var $justOptions = _this.$element.find('option');
            var $selected = $justOptions.filter(':selected');
            var selectedIndex = $justOptions.index($selected);
            var currIndex = 0;
            var emptyValue = (_this.state.multiple ? [] : 0);

            if ($selected.length > 1 && _this.state.multiple) {
                selectedIndex = [];
                $selected.each(function () {
                    selectedIndex.push($(this).index());
                });
            }

            _this.state.currValue = (~selectedIndex ? selectedIndex : emptyValue);
            _this.state.selectedIdx = _this.state.currValue;
            _this.state.highlightedIdx = _this.state.currValue;
            _this.items = [];
            _this.lookupItems = [];

            if ($options.length) {
                // Build options markup
                $options.each(function (i) {
                    var $elm = $(this);

                    if ($elm.is('optgroup')) {

                        var optionsGroup = {
                            element: $elm,
                            label: $elm.prop('label'),
                            groupDisabled: $elm.prop('disabled'),
                            items: []
                        };

                        $elm.children().each(function (i) {
                            var $elm = $(this);

                            optionsGroup.items[i] = _this.getItemData(currIndex, $elm, optionsGroup.groupDisabled || $elm.prop('disabled'));

                            _this.lookupItems[currIndex] = optionsGroup.items[i];

                            currIndex++;
                        });

                        _this.items[i] = optionsGroup;

                    } else {

                        _this.items[i] = _this.getItemData(currIndex, $elm, $elm.prop('disabled'));

                        _this.lookupItems[currIndex] = _this.items[i];

                        currIndex++;

                    }
                });

                _this.setLabel();
                if (_this.options.hasSearch)
                    _this.elements.items.append(_this.elements.input).addClass('selectric-has-search');
                _this.elements.items.append(_this.elements.itemsScroll.html(_this.getItemsMarkup(_this.items)));
            }
        },

        /**
         * Generate items object data
         * @param  {integer} index      - Current item index
         * @param  {node}    $elm       - Current element node
         * @param  {boolean} isDisabled - Current element disabled state
         * @return {object}               Item object
         */
        getItemData: function (index, $elm, isDisabled) {
            var _this = this;

            return {
                index: index,
                element: $elm,
                value: $elm.val(),
                className: $elm.prop('class'),
                text: $elm.html(),
                slug: $.trim(_this.utils.replaceDiacritics($elm.html())),
                alt: $elm.attr('data-alt'),
                selected: $elm.prop('selected'),
                disabled: isDisabled
            };
        },

        /**
         * Generate options markup
         *
         * @param  {object} items - Object containing all available options
         * @return {string}         HTML for the options box
         */
        getItemsMarkup: function (items) {
            var _this = this;
            var markup = '<ul>';

            if ($.isFunction(_this.options.listBuilder) && _this.options.listBuilder) {
                items = _this.options.listBuilder(items);
            }

            $.each(items, function (i, elm) {
                if (elm.label !== undefined) {
                    markup += _this.utils.format('<ul class="{1}"><li class="{2}">{3}</li>',
                        _this.utils.arrayToClassname([
                            _this.classes.group,
                            elm.groupDisabled ? 'disabled' : '',
                            elm.element.prop('class')
                        ]),
                        _this.classes.grouplabel,
                        elm.element.prop('label')
                    );

                    $.each(elm.items, function (i, elm) {
                        markup += _this.getItemMarkup(elm.index, elm);
                    });

                    markup += '</ul>';

                } else {

                    markup += _this.getItemMarkup(elm.index, elm);

                }
            });

            return markup + '</ul>';
        },

        /**
         * Generate every option markup
         *
         * @param  {number} index    - Index of current item
         * @param  {object} itemData - Current item
         * @return {string}            HTML for the option
         */
        getItemMarkup: function (index, itemData) {
            var _this = this;
            var itemBuilder = _this.options.optionsItemBuilder;
            // limit access to item data to provide a simple interface
            // to most relevant options.
            var filteredItemData = {
                value: itemData.value,
                text: itemData.text,
                slug: itemData.slug,
                index: itemData.index
            };

            return _this.utils.format('<li data-index="{1}" class="{2}">{3}</li>',
                index,
                _this.utils.arrayToClassname([
                    itemData.className,
                    index === _this.items.length - 1 ? 'last' : '',
                    itemData.disabled ? 'disabled' : '',
                    itemData.selected ? 'selected' : ''
                ]),
                $.isFunction(itemBuilder)
                    ? _this.utils.format(itemBuilder(itemData, this.$element, index), itemData)
                    : _this.utils.format(itemBuilder, filteredItemData)
            );
        },

        /** Remove events on the elements */
        unbindEvents: function () {
            var _this = this;
            if (!!_this.elements.input)
                _this.elements.input.off();

            _this.elements.wrapper
                .add(_this.$element)
                .add(_this.elements.outerWrapper)
                .off(eventNamespaceSuffix);
        },

        /** Bind events on the elements */
        bindEvents: function () {
            var _this = this;

            _this.elements.outerWrapper.on('mouseenter' + eventNamespaceSuffix + ' mouseleave' + eventNamespaceSuffix, function (e) {
                $(this).toggleClass(_this.classes.hover, e.type === 'mouseenter');

                // Delay close effect when openOnHover is true
                if (_this.options.openOnHover) {
                    clearTimeout(_this.closeTimer);

                    if (e.type === 'mouseleave') {
                        _this.closeTimer = setTimeout($.proxy(_this.close, _this), _this.options.hoverIntentTimeout);
                    } else {
                        _this.open();
                    }
                }
            });

            // Toggle open/close
            _this.elements.wrapper.on('click' + eventNamespaceSuffix, function (e) {
                _this.state.opened ? _this.close() : _this.open(e);
            });

            // Translate original element focus event to dummy input.
            // Disabled on mobile devices because the default option list isn't
            // shown due the fact that hidden input gets focused
            if (!(_this.options.nativeOnMobile && _this.utils.isMobile())) {
                _this.$element.on('focus' + eventNamespaceSuffix, function () {
                    _this.elements.input.focus();
                });

                _this.elements.input
                    .prop({tabindex: _this.originalTabindex, disabled: false})
                    .on('click' + eventNamespaceSuffix, function (e) {
                        e.stopPropagation();
                    })
                    .on('keydown' + eventNamespaceSuffix, $.proxy(_this.handleKeys, _this))
                    .on('focusin' + eventNamespaceSuffix, function (e) {
                        _this.elements.outerWrapper.addClass(_this.classes.focus);

                        // Prevent the flicker when focusing out and back again in the browser window
                        _this.elements.input.one('blur', function () {
                            _this.elements.input.blur();
                        });

                        if (_this.options.openOnFocus && !_this.state.opened) {
                            _this.open(e);
                        }
                    })
                    .on('focusout' + eventNamespaceSuffix, function () {
                        _this.elements.outerWrapper.removeClass(_this.classes.focus);
                        _this.$li.removeClass('u-hidden');
                        _this.elements.itemsScroll.scrollTop(0);
                        _this.highlight(0);
                    })
                    .on('input propertychange change', function () {
                        var val = _this.elements.input.val() || '';
                        if (val.length > 0) {
                            $.each(_this.items, function (i, elm) {
                                if (elm.disabled) return;
                                if (elm.text.indexOf(val.trim()) === -1) {
                                    _this.$li.filter('[data-index=' + elm.index + ']').addClass('u-hidden');
                                    elm.hidden = true;
                                } else {
                                    _this.$li.filter('[data-index=' + elm.index + ']').removeClass('u-hidden');
                                    elm.hidden = false;
                                    _this.highlight(elm.index);
                                }
                            });
                        } else {
                            _this.$li.removeClass('u-hidden');
                            _this.elements.itemsScroll.scrollTop(0);
                        }
                    });
            }

            _this.$li.on({
                // Prevent <input> blur on Chrome
                mousedown: function (e) {
                    e.preventDefault();
                    e.stopPropagation();
                },
                click: function () {
                    _this.select($(this).data('index'));

                    // Chrome doesn't close options box if select is wrapped with a label
                    // We need to 'return false' to avoid that
                    return false;
                }
            });
        },

        /**
         * Behavior when keyboard keys is pressed
         *
         * @param {object} e - Event object
         */
        handleKeys: function (e) {
            var _this = this;
            var key = e.which;
            var keys = _this.options.keys;

            var isPrevKey = $.inArray(key, keys.previous) > -1;
            var isNextKey = $.inArray(key, keys.next) > -1;
            var isSelectKey = $.inArray(key, keys.select) > -1;
            var isOpenKey = $.inArray(key, keys.open) > -1;
            var idx = _this.state.highlightedIdx;
            var isFirstOrLastItem = (isPrevKey && idx === 0) || (isNextKey && (idx + 1) === _this.items.length);
            var goToItem = 0;

            // Enter / Space
            if (key === 13) {
                e.preventDefault();
            }

            // If it's a directional key
            if (isPrevKey || isNextKey) {
                if (!_this.options.allowWrap && isFirstOrLastItem) {
                    return;
                }

                if (isPrevKey) {
                    goToItem = _this.utils.previousEnabledItem(_this.lookupItems, idx);
                    e.preventDefault();
                }

                if (isNextKey) {
                    goToItem = _this.utils.nextEnabledItem(_this.lookupItems, idx);
                    e.preventDefault();
                }

                _this.highlight(goToItem);
            }

            // Tab / Enter / ESC
            if (isSelectKey && _this.state.opened) {
                _this.select(idx);

                if (!_this.state.multiple || !_this.options.multiple.keepMenuOpen) {
                    _this.close();
                }

                return;
            }

            // Space / Enter / Left / Up / Right / Down
            if (isOpenKey && !_this.state.opened) {
                _this.open();
            }
        },

        /** Update the items object */
        refresh: function () {
            var _this = this;

            _this.populate();
            _this.activate();
            _this.utils.triggerCallback('Refresh', _this);
        },

        /** Set options box width/height */
        setOptionsDimensions: function () {
            var _this = this;

            // Calculate options box height
            // Set a temporary class on the hidden parent of the element
            var hiddenChildren = _this.elements.items.closest(':visible').children(':hidden').addClass(_this.classes.tempshow);
            var maxHeight = _this.options.maxHeight;
            var itemsWidth = _this.elements.items.outerWidth();
            var wrapperWidth = _this.elements.wrapper.outerWidth() - (itemsWidth - _this.elements.items.width());

            // Set the dimensions, minimum is wrapper width, expand for long items if option is true
            if (!_this.options.expandToItemText || wrapperWidth > itemsWidth) {
                _this.finalWidth = wrapperWidth;
            } else {
                // Make sure the scrollbar width is included
                _this.elements.items.css('overflow', 'scroll');

                // Set a really long width for _this.elements.outerWrapper
                _this.elements.outerWrapper.width(9e4);
                _this.finalWidth = _this.elements.items.width();
                // Set scroll bar to auto
                _this.elements.items.css('overflow', '');
                _this.elements.outerWrapper.width('');
            }

            _this.elements.items.width(_this.finalWidth).height() > maxHeight && _this.elements.items.height(maxHeight);

            // Remove the temporary class
            hiddenChildren.removeClass(_this.classes.tempshow);
        },

        /** Detect if the options box is inside the window */
        isInViewport: function () {
            var _this = this;

            if (_this.options.forceRenderAbove === true) {
                _this.elements.outerWrapper.addClass(_this.classes.above);
            } else if (_this.options.forceRenderBelow === true) {
                _this.elements.outerWrapper.addClass(_this.classes.below);
            } else {
                var scrollTop = $win.scrollTop();
                var winHeight = $win.height();
                var uiPosX = _this.elements.outerWrapper.offset().top;
                var uiHeight = _this.elements.outerWrapper.outerHeight();

                var fitsDown = (uiPosX + uiHeight + _this.itemsHeight) <= (scrollTop + winHeight);
                var fitsAbove = (uiPosX - _this.itemsHeight) > scrollTop;

                // If it does not fit below, only render it
                // above it fit's there.
                // It's acceptable that the user needs to
                // scroll the viewport to see the cut off UI
                var renderAbove = !fitsDown && fitsAbove;
                var renderBelow = !renderAbove;

                _this.elements.outerWrapper.toggleClass(_this.classes.above, renderAbove);
                _this.elements.outerWrapper.toggleClass(_this.classes.below, renderBelow);
            }
        },

        /**
         * Detect if currently selected option is visible and scroll the options box to show it
         *
         * @param {Number|Array} index - Index of the selected items
         */
        detectItemVisibility: function (index) {
            var _this = this;
            var $filteredLi = _this.$li.filter('[data-index]');

            if (_this.state.multiple) {
                // If index is an array, we can assume a multiple select and we
                // want to scroll to the uppermost selected item!
                // Math.min.apply(Math, index) returns the lowest entry in an Array.
                index = ($.isArray(index) && index.length === 0) ? 0 : index;
                index = $.isArray(index) ? Math.min.apply(Math, index) : index;
            }

            var liHeight = $filteredLi.eq(index).outerHeight();
            var liTop = $filteredLi[index].offsetTop;
            var itemsScrollTop = _this.elements.itemsScroll.scrollTop();
            var scrollT = liTop + liHeight * 2;

            _this.elements.itemsScroll.scrollTop(
                scrollT > itemsScrollTop + _this.itemsHeight ? scrollT - _this.itemsHeight :
                    liTop - liHeight < itemsScrollTop ? liTop - liHeight :
                        itemsScrollTop
            );
        },

        /**
         * Open the select options box
         *
         * @param {Event} e - Event
         */
        open: function (e) {
            var _this = this;

            if (_this.options.nativeOnMobile && _this.utils.isMobile()) {
                return false;
            }

            _this.utils.triggerCallback('BeforeOpen', _this);

            if (e) {
                e.preventDefault();
                if (_this.options.stopPropagation) {
                    e.stopPropagation();
                }
            }

            if (_this.state.enabled) {
                _this.setOptionsDimensions();

                // Find any other opened instances of select and close it
                $('.' + _this.classes.hideselect, '.' + _this.classes.open).children()[pluginName]('close');

                _this.state.opened = true;
                _this.itemsHeight = _this.elements.items.outerHeight();
                _this.itemsInnerHeight = _this.elements.items.height();

                // Toggle options box visibility
                _this.elements.outerWrapper.addClass(_this.classes.open);

                // Give dummy input focus
                _this.elements.input.val('');
                if (e && e.type !== 'focusin') {
                    _this.elements.input.focus();
                }

                // Delayed binds events on Document to make label clicks work
                setTimeout(function () {
                    if (_this.options.scrollMove)
                        $doc.on('click' + eventNamespaceSuffix, $.proxy(_this.close, _this)).on('scroll' + eventNamespaceSuffix, $.proxy(_this.isInViewport, _this));
                    else
                        $doc.on('click' + eventNamespaceSuffix, $.proxy(_this.close, _this));
                }, 1);

                if (_this.options.scrollMove)
                    _this.isInViewport();

                // Prevent window scroll when using mouse wheel inside items box
                if (_this.options.preventWindowScroll) {
                    /* istanbul ignore next */
                    $doc.on('mousewheel' + eventNamespaceSuffix + ' DOMMouseScroll' + eventNamespaceSuffix, '.' + _this.classes.scroll, function (e) {
                        var orgEvent = e.originalEvent;
                        var scrollTop = $(this).scrollTop();
                        var deltaY = 0;

                        if ('detail' in orgEvent) {
                            deltaY = orgEvent.detail * -1;
                        }
                        if ('wheelDelta' in orgEvent) {
                            deltaY = orgEvent.wheelDelta;
                        }
                        if ('wheelDeltaY' in orgEvent) {
                            deltaY = orgEvent.wheelDeltaY;
                        }
                        if ('deltaY' in orgEvent) {
                            deltaY = orgEvent.deltaY * -1;
                        }

                        if (scrollTop === (this.scrollHeight - _this.itemsInnerHeight) && deltaY < 0 || scrollTop === 0 && deltaY > 0) {
                            e.preventDefault();
                        }
                    });
                }

                _this.detectItemVisibility(_this.state.selectedIdx);

                _this.highlight(_this.state.multiple ? -1 : _this.state.selectedIdx);

                _this.utils.triggerCallback('Open', _this);
            }
        },

        /** Close the select options box */
        close: function () {
            var _this = this;

            _this.utils.triggerCallback('BeforeClose', _this);

            // Remove custom events on document
            $doc.off(eventNamespaceSuffix);

            // Remove visible class to hide options box
            _this.elements.outerWrapper.removeClass(_this.classes.open);

            _this.state.opened = false;

            _this.utils.triggerCallback('Close', _this);
        },

        /** Select current option and change the label */
        change: function () {
            var _this = this;

            _this.utils.triggerCallback('BeforeChange', _this);

            if (_this.state.multiple) {
                // Reset old selected
                $.each(_this.lookupItems, function (idx) {
                    _this.lookupItems[idx].selected = false;
                    _this.$element.find('option').prop('selected', false);
                });

                // Set new selected
                $.each(_this.state.selectedIdx, function (idx, value) {
                    _this.lookupItems[value].selected = true;
                    _this.$element.find('option').eq(value).prop('selected', true);
                });

                _this.state.currValue = _this.state.selectedIdx;

                _this.setLabel();

                _this.utils.triggerCallback('Change', _this);
            } else if (_this.state.currValue !== _this.state.selectedIdx) {
                // Apply changed value to original select
                _this.$element
                    .prop('selectedIndex', _this.state.currValue = _this.state.selectedIdx)
                    .data('value', _this.lookupItems[_this.state.selectedIdx].text);

                // Change label text
                _this.setLabel();

                _this.utils.triggerCallback('Change', _this);
            }
        },

        /**
         * Highlight option
         * @param {number} index - Index of the options that will be highlighted
         */
        highlight: function (index) {
            var _this = this;
            var $filteredLi = _this.$li.filter('[data-index]').removeClass('highlighted');

            _this.utils.triggerCallback('BeforeHighlight', _this);

            // Parameter index is required and should not be a disabled item
            if (index === undefined || index === -1 || _this.lookupItems[index].disabled) {
                return;
            }

            $filteredLi
                .eq(_this.state.highlightedIdx = index)
                .addClass('highlighted');

            _this.detectItemVisibility(index);

            _this.utils.triggerCallback('Highlight', _this);
        },

        /**
         * Select option
         *
         * @param {number} index - Index of the option that will be selected
         */
        select: function (index) {
            var _this = this;
            var $filteredLi = _this.$li.filter('[data-index]');

            _this.utils.triggerCallback('BeforeSelect', _this, index);

            // Parameter index is required and should not be a disabled item
            if (index === undefined || index === -1 || _this.lookupItems[index].disabled) {
                return;
            }

            if (_this.state.multiple) {
                // Make sure selectedIdx is an array
                _this.state.selectedIdx = $.isArray(_this.state.selectedIdx) ? _this.state.selectedIdx : [_this.state.selectedIdx];

                var hasSelectedIndex = $.inArray(index, _this.state.selectedIdx);
                if (hasSelectedIndex !== -1) {
                    _this.state.selectedIdx.splice(hasSelectedIndex, 1);
                } else {
                    _this.state.selectedIdx.push(index);
                }

                $filteredLi
                    .removeClass('selected')
                    .filter(function (index) {
                        return $.inArray(index, _this.state.selectedIdx) !== -1;
                    })
                    .addClass('selected');
            } else {
                $filteredLi
                    .removeClass('selected')
                    .eq(_this.state.selectedIdx = index)
                    .addClass('selected');
            }

            if (!_this.state.multiple || !_this.options.multiple.keepMenuOpen) {
                _this.close();
            }

            _this.change();

            _this.close();
            _this.utils.triggerCallback('Select', _this, index);
        },

        /**
         * Unbind and remove
         *
         * @param {boolean} preserveData - Check if the data on the element should be removed too
         */
        destroy: function (preserveData) {
            var _this = this;

            if (_this.state && _this.state.enabled) {
                _this.elements.items.add(_this.elements.wrapper).add(_this.elements.input).remove();

                if (!preserveData) {
                    _this.$element.removeData(pluginName).removeData('value');
                }

                _this.$element.prop('tabindex', _this.originalTabindex).off(eventNamespaceSuffix).off(_this.eventTriggers).unwrap().unwrap();

                _this.state.enabled = false;
            }
        }
    };

    // A really lightweight plugin wrapper around the constructor,
    // preventing against multiple instantiations
    $.fn[pluginName] = function (args) {
        return this.each(function () {
            var data = $.data(this, pluginName);

            if (data && !data.disableOnMobile) {
                (typeof args === 'string' && data[args]) ? data[args]() : data.init(args);
            } else {
                $.data(this, pluginName, new Selectric(this, args));
            }
        });
    };

    /**
     * Default plugin options
     *
     * @type {object}
     */
    $.fn[pluginName].defaults = {
        onChange: function (elm) {
            $(elm).change();
        },
        maxHeight: 300,
        keySearchTimeout: 500,
        arrowButtonMarkup: '<b class="button">&#x25be;</b>',
        disableOnMobile: false,
        nativeOnMobile: true,
        openOnFocus: true,
        openOnHover: false,
        hoverIntentTimeout: 500,
        expandToItemText: false,
        responsive: false,
        preventWindowScroll: true,
        inheritOriginalWidth: false,
        allowWrap: true,
        forceRenderAbove: false,
        forceRenderBelow: false,
        stopPropagation: true,
        optionsItemBuilder: '{text}', // function(itemData, element, index)
        labelBuilder: '{text}', // function(currItem)
        listBuilder: false,    // function(items),
        hasSearch: false,
        scrollMove: true,
        keys: {
            previous: [/*37,*/ 38],                 // Left / Up
            next: [/*39, */40],                 // Right / Down
            select: [9, 13, 27],              // Tab / Enter / Escape
            open: [13, 32, 37, 38, 39, 40], // Enter / Space / Left / Up / Right / Down
            close: [9, 27]                   // Tab / Escape
        },
        customClass: {
            prefix: pluginName,
            camelCase: false
        },
        multiple: {
            separator: ', ',
            keepMenuOpen: true,
            maxLabelEntries: false
        }
    };
}));



/*[PATH @digikala/supernova-digikala-desktop/assets/local/js/libs/jquery.remodal.min.js]*/
!function(n,e){"function"==typeof define&&define.amd?define(["jquery"],function(t){return e(n,t)}):"object"==typeof exports?e(n,require("jquery")):e(n,n.jQuery||n.Zepto)}(this,function(t,s){"use strict";var n,a,e,o="remodal",i=t.REMODAL_GLOBALS&&t.REMODAL_GLOBALS.NAMESPACE||o,r=s.map(["animationstart","webkitAnimationStart","MSAnimationStart","oAnimationStart"],function(t){return t+"."+i}).join(" "),d=s.map(["animationend","webkitAnimationEnd","MSAnimationEnd","oAnimationEnd"],function(t){return t+"."+i}).join(" "),c=s.extend({hashTracking:!1,closeOnConfirm:!0,closeOnCancel:!0,closeOnEscape:!0,closeOnOutsideClick:!0,modifier:"",appendTo:null},t.REMODAL_GLOBALS&&t.REMODAL_GLOBALS.DEFAULTS),l={CLOSING:"closing",CLOSED:"closed",OPENING:"opening",OPENED:"opened"},p="confirmation",m="cancellation",u=void 0!==(n=document.createElement("div").style).animationName||void 0!==n.WebkitAnimationName||void 0!==n.MozAnimationName||void 0!==n.msAnimationName||void 0!==n.OAnimationName,f=/iPad|iPhone|iPod/.test(navigator.platform);function g(t){if(u&&"none"===t.css("animation-name")&&"none"===t.css("-webkit-animation-name")&&"none"===t.css("-moz-animation-name")&&"none"===t.css("-o-animation-name")&&"none"===t.css("-ms-animation-name"))return 0;var n,e,a,i,o=t.css("animation-duration")||t.css("-webkit-animation-duration")||t.css("-moz-animation-duration")||t.css("-o-animation-duration")||t.css("-ms-animation-duration")||"0s",s=t.css("animation-delay")||t.css("-webkit-animation-delay")||t.css("-moz-animation-delay")||t.css("-o-animation-delay")||t.css("-ms-animation-delay")||"0s",r=t.css("animation-iteration-count")||t.css("-webkit-animation-iteration-count")||t.css("-moz-animation-iteration-count")||t.css("-o-animation-iteration-count")||t.css("-ms-animation-iteration-count")||"1";for(o=o.split(", "),s=s.split(", "),r=r.split(", "),i=0,e=o.length,n=Number.NEGATIVE_INFINITY;i<e;i++)n<(a=parseFloat(o[i])*parseInt(r[i],10)+parseFloat(s[i]))&&(n=a);return n}function h(){if(s(document).height()<=s(window).height())return 0;var t,n,e=document.createElement("div"),a=document.createElement("div");return e.style.visibility="hidden",e.style.width="100px",document.body.appendChild(e),t=e.offsetWidth,e.style.overflow="scroll",a.style.width="100%",e.appendChild(a),n=a.offsetWidth,e.parentNode.removeChild(e),t-n}function v(){if(!f){var t,n,e=s("html"),a=O("is-locked");e.hasClass(a)&&(n=s(document.body),t=parseInt(n.css("padding-right"),10)-h(),n.css("padding-right",t+"px"),e.removeClass(a))}}function $(t,n,e,a){var i=O("is",n),o=[O("is",l.CLOSING),O("is",l.OPENING),O("is",l.CLOSED),O("is",l.OPENED)].join(" ");t.$bg.removeClass(o).addClass(i),t.$overlay.removeClass(o).addClass(i),t.$wrapper.removeClass(o).addClass(i),t.$modal.removeClass(o).addClass(i),t.state=n,!e&&t.$modal.trigger({type:n,reason:a},[{reason:a}])}function C(t,n,e){var a=0,i=function(t){t.target===this&&a++},o=function(t){t.target===this&&0==--a&&(s.each(["$bg","$overlay","$wrapper","$modal"],function(t,n){e[n].off(r+" "+d)}),n())};s.each(["$bg","$overlay","$wrapper","$modal"],function(t,n){e[n].on(r,i).on(d,o)}),t(),0===g(e.$bg)&&0===g(e.$overlay)&&0===g(e.$wrapper)&&0===g(e.$modal)&&(s.each(["$bg","$overlay","$wrapper","$modal"],function(t,n){e[n].off(r+" "+d)}),n())}function y(e){e.state!==l.CLOSED&&(s.each(["$bg","$overlay","$wrapper","$modal"],function(t,n){e[n].off(r+" "+d)}),e.$bg.removeClass(e.settings.modifier),e.$overlay.removeClass(e.settings.modifier).hide(),e.$wrapper.hide(),v(),$(e,l.CLOSED,!0))}function O(){for(var t=i,n=0;n<arguments.length;++n)t+="-"+arguments[n];return t}function E(){var t,n,e=location.hash.replace("#","");if(e){try{n=s("[data-"+o+'-id="'+e+'"]')}catch(t){}n&&n.length&&(t=s[o].lookup[n.data(o)])&&t.settings.hashTracking&&t.open()}else a&&a.state===l.OPENED&&a.settings.hashTracking&&a.close()}function w(t,n){var e=s(document.body),a=this;a.settings=s.extend({},c,n),a.index=s[o].lookup.push(a)-1,a.state=l.CLOSED,a.$overlay=s("."+O("overlay")),null!==a.settings.appendTo&&a.settings.appendTo.length&&(e=s(a.settings.appendTo)),a.$overlay.length||(a.$overlay=s("<div>").addClass(O("overlay")+" "+O("is",l.CLOSED)).hide(),e.append(a.$overlay)),a.$bg=s("."+O("bg")).addClass(O("is",l.CLOSED)),a.$modal=t.addClass(i+" "+O("is-initialized")+" "+a.settings.modifier+" "+O("is",l.CLOSED)).attr("tabindex","-1"),a.$wrapper=s("<div>").addClass(O("wrapper")+" "+a.settings.modifier+" "+O("is",l.CLOSED)).hide().append(a.$modal),e.append(a.$wrapper),a.$wrapper.on("click."+i,"[data-"+o+'-action="close"]',function(t){t.preventDefault(),a.close()}),a.$wrapper.on("click."+i,"[data-"+o+'-action="cancel"]',function(t){t.preventDefault(),a.$modal.trigger(m),a.settings.closeOnCancel&&a.close(m)}),a.$wrapper.on("click."+i,"[data-"+o+'-action="confirm"]',function(t){t.preventDefault(),a.$modal.trigger(p),a.settings.closeOnConfirm&&a.close(p)}),a.$wrapper.on("click."+i,function(t){s(t.target).hasClass(O("wrapper"))&&a.settings.closeOnOutsideClick&&a.close()})}w.prototype.open=function(){var t,n=this;n.state!==l.OPENING&&n.state!==l.CLOSING&&((t=n.$modal.attr("data-"+o+"-id"))&&n.settings.hashTracking&&(e=s(window).scrollTop(),location.hash=t),a&&a!==n&&y(a),a=n,function(){if(!f){var t,n,e=s("html"),a=O("is-locked");e.hasClass(a)||(n=s(document.body),t=parseInt(n.css("padding-right"),10)+h(),n.css("padding-right",t+"px"),e.addClass(a))}}(),n.$bg.addClass(n.settings.modifier),n.$overlay.addClass(n.settings.modifier).show(),n.$wrapper.show().scrollTop(0),n.$modal.focus(),C(function(){$(n,l.OPENING)},function(){$(n,l.OPENED)},n))},w.prototype.close=function(t){var n=this;n.state!==l.OPENING&&n.state!==l.CLOSING&&n.state!==l.CLOSED&&(n.settings.hashTracking&&n.$modal.attr("data-"+o+"-id")===location.hash.substr(1)&&(location.hash="",s(window).scrollTop(e)),C(function(){$(n,l.CLOSING,!1,t)},function(){n.$bg.removeClass(n.settings.modifier),n.$overlay.removeClass(n.settings.modifier).hide(),n.$wrapper.hide(),v(),$(n,l.CLOSED,!1,t)},n))},w.prototype.getState=function(){return this.state},w.prototype.destroy=function(){var t=s[o].lookup;y(this),this.$wrapper.remove(),delete t[this.index],0===s.grep(t,function(t){return!!t}).length&&(this.$overlay.remove(),this.$bg.removeClass(O("is",l.CLOSING)+" "+O("is",l.OPENING)+" "+O("is",l.CLOSED)+" "+O("is",l.OPENED)))},s[o]={lookup:[]},s.fn[o]=function(e){var a,i;return this.each(function(t,n){null==(i=s(n)).data(o)?(a=new w(i,e),i.data(o,a.index),a.settings.hashTracking&&i.attr("data-"+o+"-id")===location.hash.substr(1)&&a.open()):a=s[o].lookup[i.data(o)]}),a},s(document).ready(function(){s(document).on("click","[data-"+o+"-target]",function(t){t.preventDefault();var n=t.currentTarget.getAttribute("data-"+o+"-target"),e=s("[data-"+o+'-id="'+n+'"]');s[o].lookup[e.data(o)].open()}),s(document).find("."+i).each(function(t,n){var e=s(n),a=e.data(o+"-options");a?("string"==typeof a||a instanceof String)&&(a=function(t){var n,e,a,i,o={};for(i=0,e=(n=(t=t.replace(/\s*:\s*/g,":").replace(/\s*,\s*/g,",")).split(",")).length;i<e;i++)n[i]=n[i].split(":"),("string"==typeof(a=n[i][1])||a instanceof String)&&(a="true"===a||"false"!==a&&a),("string"==typeof a||a instanceof String)&&(a=isNaN(a)?a:+a),o[n[i][0]]=a;return o}(a)):a={},e[o](a)}),s(document).on("keydown."+i,function(t){a&&a.settings.closeOnEscape&&a.state===l.OPENED&&27===t.keyCode&&a.close()}),s(window).on("hashchange."+i,E)})});



/*[PATH @digikala/supernova-digikala-desktop/assets/local/js/libs/jquery.menu-aim.min.js]*/
!function(b,t,i,s){var n="menuAim",o={triggerEvent:"hover",rowSelector:"> li",handle:"> a",submenuSelector:"*",submenuDirection:"right",openClassName:"open",tolerance:75,activationDelay:300,mouseLocsTracked:3,defaultDelay:300,enterCallback:b.noop,activateCallback:b.noop,deactivateCallback:b.noop,exitCallback:b.noop,exitMenuCallback:b.noop};function a(t,i){this.el=t,this.options=b.extend({},o,i),this._defaults=o,this._name=n,this.init()}a.prototype={init:function(){this.activeRow=null,this.mouseLocs=[],this.lastDelayLoc=null,this.timeoutId=null,this.openDelayId=null,this.isOnClick=-1<b.inArray(this.options.triggerEvent,["both","click"]),this.isOnHover=-1<b.inArray(this.options.triggerEvent,["both","hover"]),this.isOnHover&&this._hoverTriggerOn(),this.isOnClick&&this._clickTriggerOn()},_mouseMoveDocument:function(t){obj=t.data.obj,obj.mouseLocs.push({x:t.pageX,y:t.pageY}),obj.mouseLocs.length>obj.options.mouseLocsTracked&&obj.mouseLocs.shift()},_mouseLeaveMenu:function(t){obj=t.data.obj,obj.timeoutId&&clearTimeout(obj.timeoutId),obj.openDelayId&&clearTimeout(obj.openDelayId),obj._possiblyDeactivate(obj.activeRow),obj.options.exitMenuCallback(this)},_mouseEnterRow:function(t){obj=t.data.obj,obj.timeoutId&&clearTimeout(obj.timeoutId),obj.options.enterCallback(this),obj._possiblyActivate(this)},_mouseLeaveRow:function(t){t.data.obj.options.exitCallback(this)},_clickRow:function(t){obj=t.data.obj,obj._activate(this),b(obj.el).find(obj.options.rowSelector).find(obj.options.handle).on("click",{obj:obj},obj._clickRowHandle)},_clickRowHandle:function(t){obj=t.data.obj,b(this).closest("li").hasClass(obj.options.openClassName)&&(obj._deactivate(),t.stopPropagation())},_activate:function(t){var i=this;t!=this.activeRow&&(this.openDelayId&&clearTimeout(this.openDelayId),0<parseInt(i.options.activationDelay,0)&&i.isOnHover?i.activeRow?i._activateWithoutDelay(t):this.openDelayId=setTimeout(function(){i._activateWithoutDelay(t)},i.options.activationDelay):i._activateWithoutDelay(t))},_activateWithoutDelay:function(t){this.activeRow&&this.options.deactivateCallback(this.activeRow),this.options.activateCallback(t),this.activeRow=t},_deactivate:function(){this.openDelayId&&clearTimeout(this.openDelayId),this.activeRow&&(this.options.deactivateCallback(this.activeRow),this.activeRow=null)},_possiblyActivate:function(t){var i=this._activationDelay(),o=this;i?this.timeoutId=setTimeout(function(){o._possiblyActivate(t)},i):this._activate(t)},_possiblyDeactivate:function(t){var i=this._activationDelay(),o=this;i?this.timeoutId=setTimeout(function(){o._possiblyDeactivate(t)},i):(this.options.deactivateCallback(t),this.activeRow=null)},_activationDelay:function(){if(!this.activeRow||!b(this.activeRow).is(this.options.submenuSelector))return 0;var t=b(this.el).offset(),i={x:t.left,y:t.top-this.options.tolerance},o={x:t.left+b(this.el).outerWidth(),y:i.y},e={x:t.left,y:t.top+b(this.el).outerHeight()+this.options.tolerance},s={x:t.left+b(this.el).outerWidth(),y:e.y},n=this.mouseLocs[this.mouseLocs.length-1],a=this.mouseLocs[0];if(!n)return 0;if(a||(a=n),a.x<t.left||a.x>s.x||a.y<t.top||a.y>s.y)return 0;if(this.lastDelayLoc&&n.x==this.lastDelayLoc.x&&n.y==this.lastDelayLoc.y)return 0;function c(t,i){return(i.y-t.y)/(i.x-t.x)}var l=o,h=s;"left"==this.options.submenuDirection?(l=e,h=i):"below"==this.options.submenuDirection?(l=s,h=e):"above"==this.options.submenuDirection&&(l=i,h=o);var u=c(n,l),r=c(n,h),v=c(a,l),f=c(a,h);return u<v&&f<r?(this.lastDelayLoc=n,this.options.defaultDelay):(this.lastDelayLoc=null,0)},_outsideMenuClick:function(t){var i=t.data.obj;b(i.el).not(t.target)&&0===b(i.el).has(t.target).length&&(i.options.deactivateCallback(i.activeRow),i.activeRow=null)},_hoverTriggerOn:function(){b(this.el).on("mouseleave",{obj:this},this._mouseLeaveMenu).find(this.options.rowSelector).on("mouseenter",{obj:this},this._mouseEnterRow).on("mouseleave",{obj:this},this._mouseLeaveRow),b(t).on("blur",{obj:this},this._mouseLeaveMenu),b(i).on("mousemove",{obj:this},this._mouseMoveDocument)},_hoverTriggerOff:function(){b(this.el).off("mouseleave",this._mouseLeaveMenu).find(this.options.rowSelector).off("mouseenter",this._mouseEnterRow).off("mouseleave",this._mouseLeaveRow),b(t).off("blur",this._mouseLeaveMenu),b(i).off("mousemove",{obj:this},this._mouseMoveDocument)},_clickTriggerOn:function(){b(this.el).find(this.options.rowSelector).on("click",{obj:this},this._clickRow),b(i).on("click",{obj:this},this._outsideMenuClick)},_clickTriggerOff:function(){b(this.el).find(this.options.rowSelector).off("click",this._clickRow),b(i).off("click",this._outsideMenuClick)},switchToHover:function(){this._clickTriggerOff(),this._hoverTriggerOn(),this.isOnHover=!0,this.isOnClick=!1},switchToClick:function(){this._hoverTriggerOff(),this._clickTriggerOn(),this.isOnHover=!1,this.isOnClick=!0}},b.fn[n]=function(i){var o,e=arguments;return i===s||"object"==typeof i?this.each(function(){b.data(this,"plugin_"+n)||b.data(this,"plugin_"+n,new a(this,i))}):"string"==typeof i&&"_"!==i[0]&&"init"!==i?(this.each(function(){var t=b.data(this,"plugin_"+n);t instanceof a&&"function"==typeof t[i]&&(o=t[i].apply(t,Array.prototype.slice.call(e,1))),"destroy"===i&&b.data(this,"plugin_"+n,null)}),o!==s?o:this):void 0}}(jQuery,window,document);



/*[PATH @digikala/supernova-digikala-desktop/assets/local/js/libs/enquire.min.js]*/
/*!
 * enquire.js v2.1.6 - Awesome Media Queries in JavaScript
 * Copyright (c) 2017 Nick Williams - http://wicky.nillia.ms/enquire.js
 * License: MIT */

!function(a){if("object"==typeof exports&&"undefined"!=typeof module)module.exports=a();else if("function"==typeof define&&define.amd)define([],a);else{var b;b="undefined"!=typeof window?window:"undefined"!=typeof global?global:"undefined"!=typeof self?self:this,b.enquire=a()}}(function(){return function a(b,c,d){function e(g,h){if(!c[g]){if(!b[g]){var i="function"==typeof require&&require;if(!h&&i)return i(g,!0);if(f)return f(g,!0);var j=new Error("Cannot find module '"+g+"'");throw j.code="MODULE_NOT_FOUND",j}var k=c[g]={exports:{}};b[g][0].call(k.exports,function(a){var c=b[g][1][a];return e(c?c:a)},k,k.exports,a,b,c,d)}return c[g].exports}for(var f="function"==typeof require&&require,g=0;g<d.length;g++)e(d[g]);return e}({1:[function(a,b,c){function d(a,b){this.query=a,this.isUnconditional=b,this.handlers=[],this.mql=window.matchMedia(a);var c=this;this.listener=function(a){c.mql=a.currentTarget||a,c.assess()},this.mql.addListener(this.listener)}var e=a(3),f=a(4).each;d.prototype={constuctor:d,addHandler:function(a){var b=new e(a);this.handlers.push(b),this.matches()&&b.on()},removeHandler:function(a){var b=this.handlers;f(b,function(c,d){if(c.equals(a))return c.destroy(),!b.splice(d,1)})},matches:function(){return this.mql.matches||this.isUnconditional},clear:function(){f(this.handlers,function(a){a.destroy()}),this.mql.removeListener(this.listener),this.handlers.length=0},assess:function(){var a=this.matches()?"on":"off";f(this.handlers,function(b){b[a]()})}},b.exports=d},{3:3,4:4}],2:[function(a,b,c){function d(){if(!window.matchMedia)throw new Error("matchMedia not present, legacy browsers require a polyfill");this.queries={},this.browserIsIncapable=!window.matchMedia("only all").matches}var e=a(1),f=a(4),g=f.each,h=f.isFunction,i=f.isArray;d.prototype={constructor:d,register:function(a,b,c){var d=this.queries,f=c&&this.browserIsIncapable;return d[a]||(d[a]=new e(a,f)),h(b)&&(b={match:b}),i(b)||(b=[b]),g(b,function(b){h(b)&&(b={match:b}),d[a].addHandler(b)}),this},unregister:function(a,b){var c=this.queries[a];return c&&(b?c.removeHandler(b):(c.clear(),delete this.queries[a])),this}},b.exports=d},{1:1,4:4}],3:[function(a,b,c){function d(a){this.options=a,!a.deferSetup&&this.setup()}d.prototype={constructor:d,setup:function(){this.options.setup&&this.options.setup(),this.initialised=!0},on:function(){!this.initialised&&this.setup(),this.options.match&&this.options.match()},off:function(){this.options.unmatch&&this.options.unmatch()},destroy:function(){this.options.destroy?this.options.destroy():this.off()},equals:function(a){return this.options===a||this.options.match===a}},b.exports=d},{}],4:[function(a,b,c){function d(a,b){var c=0,d=a.length;for(c;c<d&&b(a[c],c)!==!1;c++);}function e(a){return"[object Array]"===Object.prototype.toString.apply(a)}function f(a){return"function"==typeof a}b.exports={isFunction:f,isArray:e,each:d}},{}],5:[function(a,b,c){var d=a(2);b.exports=new d},{2:2}]},{},[5])(5)});


/*[PATH @digikala/supernova/assets/local/package/framework.js]*/
function __(variable) {
    return variable;
}

function __digits(variable) {
    return variable;
}

var Framework = {
    xhrPool: [],
    xhrPoolSame: [],
    localStorageBinds: [],
    isInitialized:false,

    ajaxGETRequestHTML: function (url, params, callbackStatusTrue, loggedOnly, showLoader, duplicateMode, duplicateUrl, async) {
        return this.ajaxRequest('GET', url, params, callbackStatusTrue, null, loggedOnly, showLoader, duplicateMode, duplicateUrl, 'HTML', async, false);
    },

    ajaxPOSTRequestHTML: function (url, params, callbackStatusTrue, loggedOnly, showLoader, duplicateMode, duplicateUrl, async) {
        return this.ajaxRequest('POST', url, params, callbackStatusTrue, null, loggedOnly, showLoader, duplicateMode, duplicateUrl, 'HTML', async, false);
    },

    ajaxGETRequestJSON: function (url, params, callbackStatusTrue, callbackStatusFalse, loggedOnly, showLoader, duplicateMode, duplicateUrl, async) {
        return this.ajaxRequest('GET', url, params, callbackStatusTrue, callbackStatusFalse, loggedOnly, showLoader, duplicateMode, duplicateUrl, 'JSON', async, false);
    },

    ajaxPOSTRequestJSON: function (url, params, callbackStatusTrue, callbackStatusFalse, loggedOnly, showLoader, duplicateMode, duplicateUrl, async) {
        return this.ajaxRequest('POST', url, params, callbackStatusTrue, callbackStatusFalse, loggedOnly, showLoader, duplicateMode, duplicateUrl, 'JSON', async, false);
    },

    ajaxUploadJSON: function (url, params, callbackStatusTrue, callbackStatusFalse, loggedOnly, showLoader, duplicateMode, duplicateUrl, async) {
        return this.ajaxRequest('POST', url, params, callbackStatusTrue, callbackStatusFalse, loggedOnly, showLoader, duplicateMode, duplicateUrl, 'JSON', async, true);
    },

    ajaxRequest: function (method, url, params, callbackStatusTrue, callbackStatusFalse, loggedOnly, showLoader, duplicateMode, duplicateUrl, responseType, async, isFileUpload) {
        var thiz = this;
        if (method === 'undefined' || (method !== 'POST' && method !== 'GET') || url === 'undefined') {
            return;
        }

        if (loggedOnly !== 'undefined' && loggedOnly === true && !thiz.checkUserLogged()) {
            return;
        }

        //none, stop, execute
        duplicateMode = duplicateMode || 'none';
        duplicateUrl = duplicateUrl || url;
        async = typeof async !== 'undefined' ? async : true;
        return $.ajax({
            duplicateMode: duplicateMode,
            duplicateUrl: duplicateUrl,
            type: method,
            url: url,
            data: params,
            async: async,
            contentType: !isFileUpload ? 'application/x-www-form-urlencoded; charset=UTF-8' : false,
            processData: !isFileUpload,
            beforeSend: function (jqXHR, settings) {
                thiz.ajaxBeforeSendCallback(jqXHR, settings);
                thiz.ajaxBeforeSendCallbackFramework(jqXHR, settings);
                if (showLoader) {
                    thiz.showLoader();
                }
            },
            success: function (response) {
                if (showLoader) {
                    thiz.hideLoader();
                }

                if (responseType === 'HTML') {
                    if (response.length === 0) {
                        console.log(response, 'Please use AjaxHTMLResponse response!');
                        return;
                    }

                    callbackStatusTrue(response);
                    return;
                }

                if (response.status === 'undefined' && response.data === 'undefined') {
                    console.log(response, 'Please use AjaxJsonResponse response!');
                    return;
                }
                if (response.status === true) {
                    if (typeof callbackStatusTrue !== 'undefined' && callbackStatusTrue !== null) {
                        callbackStatusTrue(response.data);
                    } else {
                        console.log('Please define default true callback');
                    }
                } else if (response.status === false) {
                    if (typeof callbackStatusFalse !== 'undefined' && callbackStatusFalse !== null) {
                        callbackStatusFalse(response.data);
                    } else {
                        thiz.ajaxCallbackStatusFalse(response.data);
                    }
                } else {
                    console.log('Please use AjaxJsonResponse response!');
                }


            },
            error: function (jqXHR) {
                if (showLoader) {
                    thiz.hideLoader();
                }

                switch (jqXHR.status) {
                    case 0:
                        break;
                    case 400:
                        thiz.ajaxErrorBadRequestResponse(jqXHR);
                        break;
                    case 401:
                        thiz.ajaxError401Response(jqXHR);
                        break;
                    case 403:
                    case 404:
                    case 422:
                    case 500:
                        thiz.ajaxErrorDefaultResponse(jqXHR);
                        break;
                    case 503:
                        thiz.ajaxError503Response(jqXHR);
                        break;
                    default:
                        thiz.ajaxErrorDefaultResponse(jqXHR);
                        break;
                }

            },
            complete: function () {
                if (showLoader) {
                    thiz.hideLoader();
                }
            }
        });
    },
    checkUserLogged: function () {
        return true;
    },
    ajaxError401Response: function (jqXHR) {
        this.logToConsole('User not logged in');
    },
    ajaxError503Response: function (jqXHR) {
        alert('We are deploying new version of the platform. Please try again in a minutes');
    },
    ajaxErrorDefaultResponse: function (jqXHR) {
        this.logToConsole('Please define default error callback. Code #' + jqXHR.status);
        alert('Error!');
    },
    ajaxErrorBadRequestResponse: function (jqXHR) {
        $(".c-card__loading").removeClass("is-active");
        alert('Error!');
    },
    ajaxBeforeSendCallback: function (jqXHR, settings) {

    },
    ajaxBeforeSendCallbackFramework: function (jqXHR, settings) {
        var thiz = this;
        if (settings.duplicateMode === 'execute') {
            jqXHR.url = settings.duplicateUrl || settings.url;
            $.each(thiz.xhrPool, function (k, v) {
                if (v.url === jqXHR.url) {
                    v.abort();
                }
            });
            thiz.xhrPool = $.grep(thiz.xhrPool, function (v) {
                return (v.url === jqXHR.url) || (v.readyState === 4);
            }, true);
            thiz.xhrPool.push(jqXHR);
        } else if (settings.duplicateMode === 'stop') {
            jqXHR.url = settings.duplicateUrl || settings.url;
            thiz.xhrPoolSame = $.grep(thiz.xhrPool, function (v) {
                return v.url === jqXHR.url && v.readyState !== 4;
            });
            if (thiz.xhrPoolSame.length) {
                jqXHR.abort();
            } else {
                thiz.xhrPool.push(jqXHR);
            }
        }
    },
    ajaxCallbackStatusFalse: function (data) {

    },
    showLoader: function () {
        if ($('[data-remodal-id="loader"]').length) {
            $('[data-remodal-id="loader"]').remodal().open();
        }
    },
    hideLoader: function () {
        setTimeout(function () {
            if ($('[data-remodal-id="loader"]').length) {
                var $modal = $('[data-remodal-id="loader"]').remodal();

                if($modal.getState() === 'opening') {
                    $(document).on('opened', '[data-remodal-id="loader"]', function () {
                        $modal.close();
                        $(document).off('opened', '[data-remodal-id="loader"]');
                    });
                } else {
                    $modal.close();
                }
            }
        }, 500);
    },
    initLazyLocalStorage: function () {
        var thiz = this;
        var $divs = $('div.sn-local-storage');

        function clearCached(md5, code) {
            localStorage.removeItem(code + '_' + md5);
            localStorage.removeItem(code + '_' + md5 + '_expire');
        }

        function saveCache(md5, data, code) {
            localStorage.setItem(code + '_' + md5, data);
        }

        function clearTrashCaches(code, currentMd5) {
            var keys = Object.keys(localStorage);
            for (var i = 0; i < keys.length; ++i) {
                var item = keys[i];
                if ((new RegExp(code + '.*', 'g').test(item) || new RegExp(code + '_.*_expire$').test(item))
                    && item.replace('_expire', '').replace(code + '_', '') !== currentMd5)
                    localStorage.removeItem(item);
            }
        }

        $divs.each(function () {
            var $this = $(this);
            var md5 = $this.data('md5');
            var path = $this.data('path');
            var code = $this.data('code');
            var content = localStorage.getItem(code + '_' + md5);
            var contentExpire = localStorage.getItem(code + '_' + md5 + '_expire'),
                contentExpireTime = new Date(parseInt(contentExpire) || contentExpire) || null;
            clearTrashCaches(code, md5);
            if (!content || !contentExpireTime || new Date() > contentExpireTime) {
                $this.parent().load('/local/storage/' + md5 + '/' + path + '/', function (data, status) {
                    if (status === 'success') {
                        saveCache(md5, data, code);
                        if (thiz.localStorageBinds[code] !== undefined) {
                            thiz.localStorageBinds[code]();
                        }
                    } else {
                        clearCached(md5, code);
                        if (window.location.origin.indexOf('demo') === -1)
                            window.location.reload(true);
                    }
                });
            } else {
                $this.parent().html(content);
                if (thiz.localStorageBinds[code] !== undefined) {
                    thiz.localStorageBinds[code]();
                }
            }
        });
    },
    registerLazyLocalStorageBinder: function (code, func) {
        this.localStorageBinds[code] = func;
    },

    getUrlSearchParams: function () {
        return new URLSearchParams(window.location.search);
    },

    replaceUrlParam: function(url, paramName, paramValue) {
        if (paramValue == null) {
            paramValue = '';
        }

        var pattern = new RegExp('\\b('+paramName+'=).*?(&|#|$)');

        if (url.search(pattern)>=0) {
            return url.replace(pattern,'$1' + paramValue + '$2');
        }

        url = url.replace(/[?#]$/,'');
        return url + (url.indexOf('?')>0 ? '&' : '?') + paramName + '=' + paramValue;
    },

    isModuleActive: function (moduleName) {
        return !!window['module_' + moduleName];
    },
    isWaitingForApproval: function (featureCode) {
        return window['supernova_mode'] !== 'production';
    },
    initGlobalModuleChecker: function () {
        window.isModuleActive = Framework.isModuleActive
    },
    initAjaxAnchor: function () {
        if (Framework.isInitialized) {
            return;
        }

        $('.js-ajax-anchor').click(function (e) {
            let thiz = $(this)
            let url = thiz.data('ajax-url');
            let defaultSuccessMessage = thiz.data('success-message');
            let defaultErrorMessage = thiz.data('error-message');
            if (!thiz.hasClass('disable-auto-hide')) {
                thiz.fadeOut();
            }

            if (url) {
                Framework.ajaxGETRequestJSON(
                    url,
                    {},
                    function (e) {
                        debugger
                        let message = e.message || defaultSuccessMessage;
                        if (typeof DKToast !== "undefined") {
                            DKToast(message, 'success');
                        } else {
                            UIkit.notification({
                                message: message,
                                status: 'success',
                                pos: 'bottom-right',
                                timeout: 3000
                            });
                        }

                        thiz.fadeIn();
                    },
                    function (e) {
                        let message = e.message || defaultErrorMessage;
                        if (typeof DKToast !== "undefined") {
                            DKToast(message, 'error');
                        } else {
                            UIkit.notification({
                                message: message,
                                status: 'danger',
                                pos: 'bottom-right',
                                timeout: 3000
                            });
                        }

                        thiz.fadeIn();
                    }
                )
            }
        });
    },
    initJsErrorLog: function () {
        window.onerror = function (msg, url, lineNo, columnNo, error) {
            let data = {msg: msg, url: window.location.href, file: url, line: lineNo, column: columnNo};
            if (error && error.stack) {
                data.errorStack = error.stack;
            }
            if (navigation) {
                data.userAgent = navigator.userAgent;
            }
            $.ajax({
                type: 'post',
                url: '/ajax/save-js-error/',
                data: data,
                success: function () {
                },
                error: function () {

                }
            });
        }
    },
    logToConsole: function (data) {
        console.log(data);
    },

    initLocalStorageService: function() {
        window.localStorageService = {
            inMemoryStorage: {},

            isSupported: function() {
                try {
                    const testKey = "__test-string-key-for-digikala-local-storage-service__";
                    window.localStorage.setItem(testKey, testKey);
                    window.localStorage.removeItem(testKey);
                    return true;
                } catch (e) {
                    return false;
                }
            },

            clear: function () {
                try {
                    window.localStorage.clear();
                } catch(e) {
                }

                this.inMemoryStorage = {};
            },

            getItem: function (name) {
                if (this.isSupported()) {
                    return window.localStorage.getItem(name);
                }
                if (this.inMemoryStorage.hasOwnProperty(name)) {
                    return this.inMemoryStorage[name];
                }
                return null;
            },

            key: function (index) {
                if (this.isSupported()) {
                    return window.localStorage.key(index);
                } else {
                    return Object.keys(this.inMemoryStorage)[index] || null;
                }
            },

            removeItem: function (name) {
                if (this.isSupported()) {
                    window.localStorage.removeItem(name);
                } else {
                    delete this.inMemoryStorage[name];
                }
            },

            setItem: function (name, value) {
                if (this.isSupported()) {
                    window.localStorage.setItem(name, value);
                } else {
                    this.inMemoryStorage[name] = value + "";
                }
            }
        };
    },

    copyClipboard: function (text) {
        var aux = document.createElement("input");
        aux.setAttribute("value", text);
        aux.setAttribute("contenteditable", true); //IOS compatibility
        document.body.appendChild(aux);
        aux.select();
        document.execCommand("copy");
        document.body.removeChild(aux);
    }
};


$(function () {
    Framework.initLocalStorageService();
    Framework.initLazyLocalStorage();
    Framework.initGlobalModuleChecker();
    Framework.initAjaxAnchor();
    Framework.isInitialized = true;
});


/*[PATH @digikala/supernova-digikala-desktop/assets/local/js/shared/platform.js]*/
/*!
 * Platform.js
 * Copyright 2014-2018 Benjamin Tan
 * Copyright 2011-2013 John-David Dalton
 * Available under MIT license
 */
;(function () {
    'use strict';

    /** Used to determine if values are of the language type `Object`. */
    var objectTypes = {
        'function': true,
        'object': true
    };

    /** Used as a reference to the global object. */
    var root = (objectTypes[typeof window] && window) || this;

    /** Backup possible global object. */
    var oldRoot = root;

    /** Detect free variable `exports`. */
    var freeExports = objectTypes[typeof exports] && exports;

    /** Detect free variable `module`. */
    var freeModule = objectTypes[typeof module] && module && !module.nodeType && module;

    /** Detect free variable `global` from Node.js or Browserified code and use it as `root`. */
    var freeGlobal = freeExports && freeModule && typeof global == 'object' && global;
    if (freeGlobal && (freeGlobal.global === freeGlobal || freeGlobal.window === freeGlobal || freeGlobal.self === freeGlobal)) {
        root = freeGlobal;
    }

    /**
     * Used as the maximum length of an array-like object.
     * See the [ES6 spec](http://people.mozilla.org/~jorendorff/es6-draft.html#sec-tolength)
     * for more details.
     */
    var maxSafeInteger = Math.pow(2, 53) - 1;

    /** Regular expression to detect Opera. */
    var reOpera = /\bOpera/;

    /** Possible global object. */
    var thisBinding = this;

    /** Used for native method references. */
    var objectProto = Object.prototype;

    /** Used to check for own properties of an object. */
    var hasOwnProperty = objectProto.hasOwnProperty;

    /** Used to resolve the internal `[[Class]]` of values. */
    var toString = objectProto.toString;

    /*--------------------------------------------------------------------------*/

    /**
     * Capitalizes a string value.
     *
     * @private
     * @param {string} string The string to capitalize.
     * @returns {string} The capitalized string.
     */
    function capitalize(string) {
        string = String(string);
        return string.charAt(0).toUpperCase() + string.slice(1);
    }

    /**
     * A utility function to clean up the OS name.
     *
     * @private
     * @param {string} os The OS name to clean up.
     * @param {string} [pattern] A `RegExp` pattern matching the OS name.
     * @param {string} [label] A label for the OS.
     */
    function cleanupOS(os, pattern, label) {
        // Platform tokens are defined at:
        // http://msdn.microsoft.com/en-us/library/ms537503(VS.85).aspx
        // http://web.archive.org/web/20081122053950/http://msdn.microsoft.com/en-us/library/ms537503(VS.85).aspx
        var data = {
            '10.0': '10',
            '6.4': '10 Technical Preview',
            '6.3': '8.1',
            '6.2': '8',
            '6.1': 'Server 2008 R2 / 7',
            '6.0': 'Server 2008 / Vista',
            '5.2': 'Server 2003 / XP 64-bit',
            '5.1': 'XP',
            '5.01': '2000 SP1',
            '5.0': '2000',
            '4.0': 'NT',
            '4.90': 'ME'
        };
        // Detect Windows version from platform tokens.
        if (pattern && label && /^Win/i.test(os) && !/^Windows Phone /i.test(os) &&
            (data = data[/[\d.]+$/.exec(os)])) {
            os = 'Windows ' + data;
        }
        // Correct character case and cleanup string.
        os = String(os);

        if (pattern && label) {
            os = os.replace(RegExp(pattern, 'i'), label);
        }

        os = format(
            os.replace(/ ce$/i, ' CE')
                .replace(/\bhpw/i, 'web')
                .replace(/\bMacintosh\b/, 'Mac OS')
                .replace(/_PowerPC\b/i, ' OS')
                .replace(/\b(OS X) [^ \d]+/i, '$1')
                .replace(/\bMac (OS X)\b/, '$1')
                .replace(/\/(\d)/, ' $1')
                .replace(/_/g, '.')
                .replace(/(?: BePC|[ .]*fc[ \d.]+)$/i, '')
                .replace(/\bx86\.64\b/gi, 'x86_64')
                .replace(/\b(Windows Phone) OS\b/, '$1')
                .replace(/\b(Chrome OS \w+) [\d.]+\b/, '$1')
                .split(' on ')[0]
        );

        return os;
    }

    /**
     * An iteration utility for arrays and objects.
     *
     * @private
     * @param {Array|Object} object The object to iterate over.
     * @param {Function} callback The function called per iteration.
     */
    function each(object, callback) {
        var index = -1,
            length = object ? object.length : 0;

        if (typeof length == 'number' && length > -1 && length <= maxSafeInteger) {
            while (++index < length) {
                callback(object[index], index, object);
            }
        } else {
            forOwn(object, callback);
        }
    }

    /**
     * Trim and conditionally capitalize string values.
     *
     * @private
     * @param {string} string The string to format.
     * @returns {string} The formatted string.
     */
    function format(string) {
        string = trim(string);
        return /^(?:webOS|i(?:OS|P))/.test(string)
            ? string
            : capitalize(string);
    }

    /**
     * Iterates over an object's own properties, executing the `callback` for each.
     *
     * @private
     * @param {Object} object The object to iterate over.
     * @param {Function} callback The function executed per own property.
     */
    function forOwn(object, callback) {
        for (var key in object) {
            if (hasOwnProperty.call(object, key)) {
                callback(object[key], key, object);
            }
        }
    }

    /**
     * Gets the internal `[[Class]]` of a value.
     *
     * @private
     * @param {*} value The value.
     * @returns {string} The `[[Class]]`.
     */
    function getClassOf(value) {
        return value == null
            ? capitalize(value)
            : toString.call(value).slice(8, -1);
    }

    /**
     * Host objects can return type values that are different from their actual
     * data type. The objects we are concerned with usually return non-primitive
     * types of "object", "function", or "unknown".
     *
     * @private
     * @param {*} object The owner of the property.
     * @param {string} property The property to check.
     * @returns {boolean} Returns `true` if the property value is a non-primitive, else `false`.
     */
    function isHostType(object, property) {
        var type = object != null ? typeof object[property] : 'number';
        return !/^(?:boolean|number|string|undefined)$/.test(type) &&
            (type == 'object' ? !!object[property] : true);
    }

    /**
     * Prepares a string for use in a `RegExp` by making hyphens and spaces optional.
     *
     * @private
     * @param {string} string The string to qualify.
     * @returns {string} The qualified string.
     */
    function qualify(string) {
        return String(string).replace(/([ -])(?!$)/g, '$1?');
    }

    /**
     * A bare-bones `Array#reduce` like utility function.
     *
     * @private
     * @param {Array} array The array to iterate over.
     * @param {Function} callback The function called per iteration.
     * @returns {*} The accumulated result.
     */
    function reduce(array, callback) {
        var accumulator = null;
        each(array, function (value, index) {
            accumulator = callback(accumulator, value, index, array);
        });
        return accumulator;
    }

    /**
     * Removes leading and trailing whitespace from a string.
     *
     * @private
     * @param {string} string The string to trim.
     * @returns {string} The trimmed string.
     */
    function trim(string) {
        return String(string).replace(/^ +| +$/g, '');
    }

    /*--------------------------------------------------------------------------*/

    /**
     * Creates a new platform object.
     *
     * @memberOf platform
     * @param {Object|string} [ua=navigator.userAgent] The user agent string or
     *  context object.
     * @returns {Object} A platform object.
     */
    function parse(ua) {

        /** The environment context object. */
        var context = root;

        /** Used to flag when a custom context is provided. */
        var isCustomContext = ua && typeof ua == 'object' && getClassOf(ua) != 'String';

        // Juggle arguments.
        if (isCustomContext) {
            context = ua;
            ua = null;
        }

        /** Browser navigator object. */
        var nav = context.navigator || {};

        /** Browser user agent string. */
        var userAgent = nav.userAgent || '';

        ua || (ua = userAgent);

        /** Used to flag when `thisBinding` is the [ModuleScope]. */
        var isModuleScope = isCustomContext || thisBinding == oldRoot;

        /** Used to detect if browser is like Chrome. */
        var likeChrome = isCustomContext
            ? !!nav.likeChrome
            : /\bChrome\b/.test(ua) && !/internal|\n/i.test(toString.toString());

        /** Internal `[[Class]]` value shortcuts. */
        var objectClass = 'Object',
            airRuntimeClass = isCustomContext ? objectClass : 'ScriptBridgingProxyObject',
            enviroClass = isCustomContext ? objectClass : 'Environment',
            javaClass = (isCustomContext && context.java) ? 'JavaPackage' : getClassOf(context.java),
            phantomClass = isCustomContext ? objectClass : 'RuntimeObject';

        /** Detect Java environments. */
        var java = /\bJava/.test(javaClass) && context.java;

        /** Detect Rhino. */
        var rhino = java && getClassOf(context.environment) == enviroClass;

        /** A character to represent alpha. */
        var alpha = java ? 'a' : '\u03b1';

        /** A character to represent beta. */
        var beta = java ? 'b' : '\u03b2';

        /** Browser document object. */
        var doc = context.document || {};

        /**
         * Detect Opera browser (Presto-based).
         * http://www.howtocreate.co.uk/operaStuff/operaObject.html
         * http://dev.opera.com/articles/view/opera-mini-web-content-authoring-guidelines/#operamini
         */
        var opera = context.operamini || context.opera;

        /** Opera `[[Class]]`. */
        var operaClass = reOpera.test(operaClass = (isCustomContext && opera) ? opera['[[Class]]'] : getClassOf(opera))
            ? operaClass
            : (opera = null);

        /*------------------------------------------------------------------------*/

        /** Temporary variable used over the script's lifetime. */
        var data;

        /** The CPU architecture. */
        var arch = ua;

        /** Platform description array. */
        var description = [];

        /** Platform alpha/beta indicator. */
        var prerelease = null;

        /** A flag to indicate that environment features should be used to resolve the platform. */
        var useFeatures = ua == userAgent;

        /** The browser/environment version. */
        var version = useFeatures && opera && typeof opera.version == 'function' && opera.version();

        /** A flag to indicate if the OS ends with "/ Version" */
        var isSpecialCasedOS;

        /* Detectable layout engines (order is important). */
        var layout = getLayout([
            {'label': 'EdgeHTML', 'pattern': '(?:Edge|EdgA|EdgiOS)'},
            'Trident',
            {'label': 'WebKit', 'pattern': 'AppleWebKit'},
            'iCab',
            'Presto',
            'NetFront',
            'Tasman',
            'KHTML',
            'Gecko'
        ]);

        /* Detectable browser names (order is important). */
        var name = getName([
            'Adobe AIR',
            'Arora',
            'Avant Browser',
            'Breach',
            'Camino',
            'Electron',
            'Epiphany',
            'Fennec',
            'Flock',
            'Galeon',
            'GreenBrowser',
            'iCab',
            'Iceweasel',
            'K-Meleon',
            'Konqueror',
            'Lunascape',
            'Maxthon',
            {'label': 'Microsoft Edge', 'pattern': '(?:Edge|Edg|EdgA|EdgiOS)'},
            'Midori',
            'Nook Browser',
            'PaleMoon',
            'PhantomJS',
            'Raven',
            'Rekonq',
            'RockMelt',
            {'label': 'Samsung Internet', 'pattern': 'SamsungBrowser'},
            'SeaMonkey',
            {'label': 'Silk', 'pattern': '(?:Cloud9|Silk-Accelerated)'},
            'Sleipnir',
            'SlimBrowser',
            {'label': 'SRWare Iron', 'pattern': 'Iron'},
            'Sunrise',
            'Swiftfox',
            'Waterfox',
            'WebPositive',
            'Opera Mini',
            {'label': 'Opera Mini', 'pattern': 'OPiOS'},
            'Opera',
            {'label': 'Opera', 'pattern': 'OPR'},
            'Chrome',
            {'label': 'Chrome Mobile', 'pattern': '(?:CriOS|CrMo)'},
            {'label': 'Firefox', 'pattern': '(?:Firefox|Minefield)'},
            {'label': 'Firefox for iOS', 'pattern': 'FxiOS'},
            {'label': 'IE', 'pattern': 'IEMobile'},
            {'label': 'IE', 'pattern': 'MSIE'},
            'Safari'
        ]);

        /* Detectable products (order is important). */
        var product = getProduct([
            {'label': 'BlackBerry', 'pattern': 'BB10'},
            'BlackBerry',
            {'label': 'Galaxy S', 'pattern': 'GT-I9000'},
            {'label': 'Galaxy S2', 'pattern': 'GT-I9100'},
            {'label': 'Galaxy S3', 'pattern': 'GT-I9300'},
            {'label': 'Galaxy S4', 'pattern': 'GT-I9500'},
            {'label': 'Galaxy S5', 'pattern': 'SM-G900'},
            {'label': 'Galaxy S6', 'pattern': 'SM-G920'},
            {'label': 'Galaxy S6 Edge', 'pattern': 'SM-G925'},
            {'label': 'Galaxy S7', 'pattern': 'SM-G930'},
            {'label': 'Galaxy S7 Edge', 'pattern': 'SM-G935'},
            'Google TV',
            'Lumia',
            'iPad',
            'iPod',
            'iPhone',
            'Kindle',
            {'label': 'Kindle Fire', 'pattern': '(?:Cloud9|Silk-Accelerated)'},
            'Nexus',
            'Nook',
            'PlayBook',
            'PlayStation Vita',
            'PlayStation',
            'TouchPad',
            'Transformer',
            {'label': 'Wii U', 'pattern': 'WiiU'},
            'Wii',
            'Xbox One',
            {'label': 'Xbox 360', 'pattern': 'Xbox'},
            'Xoom'
        ]);

        /* Detectable manufacturers. */
        var manufacturer = getManufacturer({
            'Apple': {'iPad': 1, 'iPhone': 1, 'iPod': 1},
            'Archos': {},
            'Amazon': {'Kindle': 1, 'Kindle Fire': 1},
            'Asus': {'Transformer': 1},
            'Barnes & Noble': {'Nook': 1},
            'BlackBerry': {'PlayBook': 1},
            'Google': {'Google TV': 1, 'Nexus': 1},
            'HP': {'TouchPad': 1},
            'HTC': {},
            'LG': {},
            'Microsoft': {'Xbox': 1, 'Xbox One': 1},
            'Motorola': {'Xoom': 1},
            'Nintendo': {'Wii U': 1, 'Wii': 1},
            'Nokia': {'Lumia': 1},
            'Samsung': {'Galaxy S': 1, 'Galaxy S2': 1, 'Galaxy S3': 1, 'Galaxy S4': 1},
            'Sony': {'PlayStation': 1, 'PlayStation Vita': 1}
        });

        /* Detectable operating systems (order is important). */
        var os = getOS([
            'Windows Phone',
            'Android',
            'CentOS',
            {'label': 'Chrome OS', 'pattern': 'CrOS'},
            'Debian',
            'Fedora',
            'FreeBSD',
            'Gentoo',
            'Haiku',
            'Kubuntu',
            'Linux Mint',
            'OpenBSD',
            'Red Hat',
            'SuSE',
            'Ubuntu',
            'Xubuntu',
            'Cygwin',
            'Symbian OS',
            'hpwOS',
            'webOS ',
            'webOS',
            'Tablet OS',
            'Tizen',
            'Linux',
            'Mac OS X',
            'Macintosh',
            'Mac',
            'Windows 98;',
            'Windows '
        ]);

        /*------------------------------------------------------------------------*/

        /**
         * Picks the layout engine from an array of guesses.
         *
         * @private
         * @param {Array} guesses An array of guesses.
         * @returns {null|string} The detected layout engine.
         */
        function getLayout(guesses) {
            return reduce(guesses, function (result, guess) {
                return result || RegExp('\\b' + (
                    guess.pattern || qualify(guess)
                ) + '\\b', 'i').exec(ua) && (guess.label || guess);
            });
        }

        /**
         * Picks the manufacturer from an array of guesses.
         *
         * @private
         * @param {Array} guesses An object of guesses.
         * @returns {null|string} The detected manufacturer.
         */
        function getManufacturer(guesses) {
            return reduce(guesses, function (result, value, key) {
                // Lookup the manufacturer by product or scan the UA for the manufacturer.
                return result || (
                    value[product] ||
                    value[/^[a-z]+(?: +[a-z]+\b)*/i.exec(product)] ||
                    RegExp('\\b' + qualify(key) + '(?:\\b|\\w*\\d)', 'i').exec(ua)
                ) && key;
            });
        }

        /**
         * Picks the browser name from an array of guesses.
         *
         * @private
         * @param {Array} guesses An array of guesses.
         * @returns {null|string} The detected browser name.
         */
        function getName(guesses) {
            return reduce(guesses, function (result, guess) {
                return result || RegExp('\\b' + (
                    guess.pattern || qualify(guess)
                ) + '\\b', 'i').exec(ua) && (guess.label || guess);
            });
        }

        /**
         * Picks the OS name from an array of guesses.
         *
         * @private
         * @param {Array} guesses An array of guesses.
         * @returns {null|string} The detected OS name.
         */
        function getOS(guesses) {
            return reduce(guesses, function (result, guess) {
                var pattern = guess.pattern || qualify(guess);
                if (!result && (result =
                        RegExp('\\b' + pattern + '(?:/[\\d.]+|[ \\w.]*)', 'i').exec(ua)
                )) {
                    result = cleanupOS(result, pattern, guess.label || guess);
                }
                return result;
            });
        }

        /**
         * Picks the product name from an array of guesses.
         *
         * @private
         * @param {Array} guesses An array of guesses.
         * @returns {null|string} The detected product name.
         */
        function getProduct(guesses) {
            return reduce(guesses, function (result, guess) {
                var pattern = guess.pattern || qualify(guess);
                if (!result && (result =
                        RegExp('\\b' + pattern + ' *\\d+[.\\w_]*', 'i').exec(ua) ||
                        RegExp('\\b' + pattern + ' *\\w+-[\\w]*', 'i').exec(ua) ||
                        RegExp('\\b' + pattern + '(?:; *(?:[a-z]+[_-])?[a-z]+\\d+|[^ ();-]*)', 'i').exec(ua)
                )) {
                    // Split by forward slash and append product version if needed.
                    if ((result = String((guess.label && !RegExp(pattern, 'i').test(guess.label)) ? guess.label : result).split('/'))[1] && !/[\d.]+/.test(result[0])) {
                        result[0] += ' ' + result[1];
                    }
                    // Correct character case and cleanup string.
                    guess = guess.label || guess;
                    result = format(result[0]
                        .replace(RegExp(pattern, 'i'), guess)
                        .replace(RegExp('; *(?:' + guess + '[_-])?', 'i'), ' ')
                        .replace(RegExp('(' + guess + ')[-_.]?(\\w)', 'i'), '$1 $2'));
                }
                return result;
            });
        }

        /**
         * Resolves the version using an array of UA patterns.
         *
         * @private
         * @param {Array} patterns An array of UA patterns.
         * @returns {null|string} The detected version.
         */
        function getVersion(patterns) {
            return reduce(patterns, function (result, pattern) {
                return result || (RegExp(pattern +
                    '(?:-[\\d.]+/|(?: for [\\w-]+)?[ /-])([\\d.]+[^ ();/_-]*)', 'i').exec(ua) || 0)[1] || null;
            });
        }

        /**
         * Returns `platform.description` when the platform object is coerced to a string.
         *
         * @name toString
         * @memberOf platform
         * @returns {string} Returns `platform.description` if available, else an empty string.
         */
        function toStringPlatform() {
            return this.description || '';
        }

        /*------------------------------------------------------------------------*/

        // Convert layout to an array so we can add extra details.
        layout && (layout = [layout]);

        // Detect product names that contain their manufacturer's name.
        if (manufacturer && !product) {
            product = getProduct([manufacturer]);
        }
        // Clean up Google TV.
        if ((data = /\bGoogle TV\b/.exec(product))) {
            product = data[0];
        }
        // Detect simulators.
        if (/\bSimulator\b/i.test(ua)) {
            product = (product ? product + ' ' : '') + 'Simulator';
        }
        // Detect Opera Mini 8+ running in Turbo/Uncompressed mode on iOS.
        if (name == 'Opera Mini' && /\bOPiOS\b/.test(ua)) {
            description.push('running in Turbo/Uncompressed mode');
        }
        // Detect IE Mobile 11.
        if (name == 'IE' && /\blike iPhone OS\b/.test(ua)) {
            data = parse(ua.replace(/like iPhone OS/, ''));
            manufacturer = data.manufacturer;
            product = data.product;
        }
        // Detect iOS.
        else if (/^iP/.test(product)) {
            name || (name = 'Safari');
            os = 'iOS' + ((data = / OS ([\d_]+)/i.exec(ua))
                ? ' ' + data[1].replace(/_/g, '.')
                : '');
        }
        // Detect Kubuntu.
        else if (name == 'Konqueror' && !/buntu/i.test(os)) {
            os = 'Kubuntu';
        }
        // Detect Android browsers.
        else if ((manufacturer && manufacturer != 'Google' &&
            ((/Chrome/.test(name) && !/\bMobile Safari\b/i.test(ua)) || /\bVita\b/.test(product))) ||
            (/\bAndroid\b/.test(os) && /^Chrome/.test(name) && /\bVersion\//i.test(ua))) {
            name = 'Android Browser';
            os = /\bAndroid\b/.test(os) ? os : 'Android';
        }
        // Detect Silk desktop/accelerated modes.
        else if (name == 'Silk') {
            if (!/\bMobi/i.test(ua)) {
                os = 'Android';
                description.unshift('desktop mode');
            }
            if (/Accelerated *= *true/i.test(ua)) {
                description.unshift('accelerated');
            }
        }
        // Detect PaleMoon identifying as Firefox.
        else if (name == 'PaleMoon' && (data = /\bFirefox\/([\d.]+)\b/.exec(ua))) {
            description.push('identifying as Firefox ' + data[1]);
        }
        // Detect Firefox OS and products running Firefox.
        else if (name == 'Firefox' && (data = /\b(Mobile|Tablet|TV)\b/i.exec(ua))) {
            os || (os = 'Firefox OS');
            product || (product = data[1]);
        }
        // Detect false positives for Firefox/Safari.
        else if (!name || (data = !/\bMinefield\b/i.test(ua) && /\b(?:Firefox|Safari)\b/.exec(name))) {
            // Escape the `/` for Firefox 1.
            if (name && !product && /[\/,]|^[^(]+?\)/.test(ua.slice(ua.indexOf(data + '/') + 8))) {
                // Clear name of false positives.
                name = null;
            }
            // Reassign a generic name.
            if ((data = product || manufacturer || os) &&
                (product || manufacturer || /\b(?:Android|Symbian OS|Tablet OS|webOS)\b/.test(os))) {
                name = /[a-z]+(?: Hat)?/i.exec(/\bAndroid\b/.test(os) ? os : data) + ' Browser';
            }
        }
        // Add Chrome version to description for Electron.
        else if (name == 'Electron' && (data = (/\bChrome\/([\d.]+)\b/.exec(ua) || 0)[1])) {
            description.push('Chromium ' + data);
        }
        // Detect non-Opera (Presto-based) versions (order is important).
        if (!version) {
            version = getVersion([
                '(?:Cloud9|CriOS|CrMo|Edge|Edg|EdgA|EdgiOS|FxiOS|IEMobile|Iron|Opera ?Mini|OPiOS|OPR|Raven|SamsungBrowser|Silk(?!/[\\d.]+$))',
                'Version',
                qualify(name),
                '(?:Firefox|Minefield|NetFront)'
            ]);
        }
        // Detect stubborn layout engines.
        if ((data =
                layout == 'iCab' && parseFloat(version) > 3 && 'WebKit' ||
                /\bOpera\b/.test(name) && (/\bOPR\b/.test(ua) ? 'Blink' : 'Presto') ||
                /\b(?:Midori|Nook|Safari)\b/i.test(ua) && !/^(?:Trident|EdgeHTML)$/.test(layout) && 'WebKit' ||
                !layout && /\bMSIE\b/i.test(ua) && (os == 'Mac OS' ? 'Tasman' : 'Trident') ||
                layout == 'WebKit' && /\bPlayStation\b(?! Vita\b)/i.test(name) && 'NetFront'
        )) {
            layout = [data];
        }
        // Detect Windows Phone 7 desktop mode.
        if (name == 'IE' && (data = (/; *(?:XBLWP|ZuneWP)(\d+)/i.exec(ua) || 0)[1])) {
            name += ' Mobile';
            os = 'Windows Phone ' + (/\+$/.test(data) ? data : data + '.x');
            description.unshift('desktop mode');
        }
        // Detect Windows Phone 8.x desktop mode.
        else if (/\bWPDesktop\b/i.test(ua)) {
            name = 'IE Mobile';
            os = 'Windows Phone 8.x';
            description.unshift('desktop mode');
            version || (version = (/\brv:([\d.]+)/.exec(ua) || 0)[1]);
        }
        // Detect IE 11 identifying as other browsers.
        else if (name != 'IE' && layout == 'Trident' && (data = /\brv:([\d.]+)/.exec(ua))) {
            if (name) {
                description.push('identifying as ' + name + (version ? ' ' + version : ''));
            }
            name = 'IE';
            version = data[1];
        }
        // Leverage environment features.
        if (useFeatures) {
            // Detect server-side environments.
            // Rhino has a global function while others have a global object.
            if (isHostType(context, 'global')) {
                if (java) {
                    data = java.lang.System;
                    arch = data.getProperty('os.arch');
                    os = os || data.getProperty('os.name') + ' ' + data.getProperty('os.version');
                }
                if (rhino) {
                    try {
                        version = context.require('ringo/engine').version.join('.');
                        name = 'RingoJS';
                    } catch (e) {
                        if ((data = context.system) && data.global.system == context.system) {
                            name = 'Narwhal';
                            os || (os = data[0].os || null);
                        }
                    }
                    if (!name) {
                        name = 'Rhino';
                    }
                } else if (
                    typeof context.process == 'object' && !context.process.browser &&
                    (data = context.process)
                ) {
                    if (typeof data.versions == 'object') {
                        if (typeof data.versions.electron == 'string') {
                            description.push('Node ' + data.versions.node);
                            name = 'Electron';
                            version = data.versions.electron;
                        } else if (typeof data.versions.nw == 'string') {
                            description.push('Chromium ' + version, 'Node ' + data.versions.node);
                            name = 'NW.js';
                            version = data.versions.nw;
                        }
                    }
                    if (!name) {
                        name = 'Node.js';
                        arch = data.arch;
                        os = data.platform;
                        version = /[\d.]+/.exec(data.version);
                        version = version ? version[0] : null;
                    }
                }
            }
            // Detect Adobe AIR.
            else if (getClassOf((data = context.runtime)) == airRuntimeClass) {
                name = 'Adobe AIR';
                os = data.flash.system.Capabilities.os;
            }
            // Detect PhantomJS.
            else if (getClassOf((data = context.phantom)) == phantomClass) {
                name = 'PhantomJS';
                version = (data = data.version || null) && (data.major + '.' + data.minor + '.' + data.patch);
            }
            // Detect IE compatibility modes.
            else if (typeof doc.documentMode == 'number' && (data = /\bTrident\/(\d+)/i.exec(ua))) {
                // We're in compatibility mode when the Trident version + 4 doesn't
                // equal the document mode.
                version = [version, doc.documentMode];
                if ((data = +data[1] + 4) != version[1]) {
                    description.push('IE ' + version[1] + ' mode');
                    layout && (layout[1] = '');
                    version[1] = data;
                }
                version = name == 'IE' ? String(version[1].toFixed(1)) : version[0];
            }
            // Detect IE 11 masking as other browsers.
            else if (typeof doc.documentMode == 'number' && /^(?:Chrome|Firefox)\b/.test(name)) {
                description.push('masking as ' + name + ' ' + version);
                name = 'IE';
                version = '11.0';
                layout = ['Trident'];
                os = 'Windows';
            }
            os = os && format(os);
        }
        // Detect prerelease phases.
        if (version && (data =
                /(?:[ab]|dp|pre|[ab]\d+pre)(?:\d+\+?)?$/i.exec(version) ||
                /(?:alpha|beta)(?: ?\d)?/i.exec(ua + ';' + (useFeatures && nav.appMinorVersion)) ||
                /\bMinefield\b/i.test(ua) && 'a'
        )) {
            prerelease = /b/i.test(data) ? 'beta' : 'alpha';
            version = version.replace(RegExp(data + '\\+?$'), '') +
                (prerelease == 'beta' ? beta : alpha) + (/\d+\+?/.exec(data) || '');
        }
        // Detect Firefox Mobile.
        if (name == 'Fennec' || name == 'Firefox' && /\b(?:Android|Firefox OS)\b/.test(os)) {
            name = 'Firefox Mobile';
        }
        // Obscure Maxthon's unreliable version.
        else if (name == 'Maxthon' && version) {
            version = version.replace(/\.[\d.]+/, '.x');
        }
        // Detect Xbox 360 and Xbox One.
        else if (/\bXbox\b/i.test(product)) {
            if (product == 'Xbox 360') {
                os = null;
            }
            if (product == 'Xbox 360' && /\bIEMobile\b/.test(ua)) {
                description.unshift('mobile mode');
            }
        }
        // Add mobile postfix.
        else if ((/^(?:Chrome|IE|Opera)$/.test(name) || name && !product && !/Browser|Mobi/.test(name)) &&
            (os == 'Windows CE' || /Mobi/i.test(ua))) {
            name += ' Mobile';
        }
        // Detect IE platform preview.
        else if (name == 'IE' && useFeatures) {
            try {
                if (context.external === null) {
                    description.unshift('platform preview');
                }
            } catch (e) {
                description.unshift('embedded');
            }
        }
        // Detect BlackBerry OS version.
        // http://docs.blackberry.com/en/developers/deliverables/18169/HTTP_headers_sent_by_BB_Browser_1234911_11.jsp
        else if ((/\bBlackBerry\b/.test(product) || /\bBB10\b/.test(ua)) && (data =
                (RegExp(product.replace(/ +/g, ' *') + '/([.\\d]+)', 'i').exec(ua) || 0)[1] ||
                version
        )) {
            data = [data, /BB10/.test(ua)];
            os = (data[1] ? (product = null, manufacturer = 'BlackBerry') : 'Device Software') + ' ' + data[0];
            version = null;
        }
        // Detect Opera identifying/masking itself as another browser.
        // http://www.opera.com/support/kb/view/843/
        else if (this != forOwn && product != 'Wii' && (
            (useFeatures && opera) ||
            (/Opera/.test(name) && /\b(?:MSIE|Firefox)\b/i.test(ua)) ||
            (name == 'Firefox' && /\bOS X (?:\d+\.){2,}/.test(os)) ||
            (name == 'IE' && (
                (os && !/^Win/.test(os) && version > 5.5) ||
                /\bWindows XP\b/.test(os) && version > 8 ||
                version == 8 && !/\bTrident\b/.test(ua)
            ))
        ) && !reOpera.test((data = parse.call(forOwn, ua.replace(reOpera, '') + ';'))) && data.name) {
            // When "identifying", the UA contains both Opera and the other browser's name.
            data = 'ing as ' + data.name + ((data = data.version) ? ' ' + data : '');
            if (reOpera.test(name)) {
                if (/\bIE\b/.test(data) && os == 'Mac OS') {
                    os = null;
                }
                data = 'identify' + data;
            }
            // When "masking", the UA contains only the other browser's name.
            else {
                data = 'mask' + data;
                if (operaClass) {
                    name = format(operaClass.replace(/([a-z])([A-Z])/g, '$1 $2'));
                } else {
                    name = 'Opera';
                }
                if (/\bIE\b/.test(data)) {
                    os = null;
                }
                if (!useFeatures) {
                    version = null;
                }
            }
            layout = ['Presto'];
            description.push(data);
        }
        // Detect WebKit Nightly and approximate Chrome/Safari versions.
        if ((data = (/\bAppleWebKit\/([\d.]+\+?)/i.exec(ua) || 0)[1])) {
            // Correct build number for numeric comparison.
            // (e.g. "532.5" becomes "532.05")
            data = [parseFloat(data.replace(/\.(\d)$/, '.0$1')), data];
            // Nightly builds are postfixed with a "+".
            if (name == 'Safari' && data[1].slice(-1) == '+') {
                name = 'WebKit Nightly';
                prerelease = 'alpha';
                version = data[1].slice(0, -1);
            }
            // Clear incorrect browser versions.
            else if (version == data[1] ||
                version == (data[2] = (/\bSafari\/([\d.]+\+?)/i.exec(ua) || 0)[1])) {
                version = null;
            }
            // Use the full Chrome version when available.
            data[1] = (/\bChrome\/([\d.]+)/i.exec(ua) || 0)[1];
            // Detect Blink layout engine.
            if (data[0] == 537.36 && data[2] == 537.36 && parseFloat(data[1]) >= 28 && layout == 'WebKit') {
                layout = ['Blink'];
            }
            // Detect JavaScriptCore.
            // http://stackoverflow.com/questions/6768474/how-can-i-detect-which-javascript-engine-v8-or-jsc-is-used-at-runtime-in-androi
            if (!useFeatures || (!likeChrome && !data[1])) {
                layout && (layout[1] = 'like Safari');
                data = (data = data[0], data < 400 ? 1 : data < 500 ? 2 : data < 526 ? 3 : data < 533 ? 4 : data < 534 ? '4+' : data < 535 ? 5 : data < 537 ? 6 : data < 538 ? 7 : data < 601 ? 8 : '8');
            } else {
                layout && (layout[1] = 'like Chrome');
                data = data[1] || (data = data[0], data < 530 ? 1 : data < 532 ? 2 : data < 532.05 ? 3 : data < 533 ? 4 : data < 534.03 ? 5 : data < 534.07 ? 6 : data < 534.10 ? 7 : data < 534.13 ? 8 : data < 534.16 ? 9 : data < 534.24 ? 10 : data < 534.30 ? 11 : data < 535.01 ? 12 : data < 535.02 ? '13+' : data < 535.07 ? 15 : data < 535.11 ? 16 : data < 535.19 ? 17 : data < 536.05 ? 18 : data < 536.10 ? 19 : data < 537.01 ? 20 : data < 537.11 ? '21+' : data < 537.13 ? 23 : data < 537.18 ? 24 : data < 537.24 ? 25 : data < 537.36 ? 26 : layout != 'Blink' ? '27' : '28');
            }
            // Add the postfix of ".x" or "+" for approximate versions.
            layout && (layout[1] += ' ' + (data += typeof data == 'number' ? '.x' : /[.+]/.test(data) ? '' : '+'));
            // Obscure version for some Safari 1-2 releases.
            if (name == 'Safari' && (!version || parseInt(version) > 45)) {
                version = data;
            }
        }
        // Detect Opera desktop modes.
        if (name == 'Opera' && (data = /\bzbov|zvav$/.exec(os))) {
            name += ' ';
            description.unshift('desktop mode');
            if (data == 'zvav') {
                name += 'Mini';
                version = null;
            } else {
                name += 'Mobile';
            }
            os = os.replace(RegExp(' *' + data + '$'), '');
        }
        // Detect Chrome desktop mode.
        else if (name == 'Safari' && /\bChrome\b/.exec(layout && layout[1])) {
            description.unshift('desktop mode');
            name = 'Chrome Mobile';
            version = null;

            if (/\bOS X\b/.test(os)) {
                manufacturer = 'Apple';
                os = 'iOS 4.3+';
            } else {
                os = null;
            }
        }
        // Strip incorrect OS versions.
        if (version && version.indexOf((data = /[\d.]+$/.exec(os))) == 0 &&
            ua.indexOf('/' + data + '-') > -1) {
            os = trim(os.replace(data, ''));
        }
        // Add layout engine.
        if (layout && !/\b(?:Avant|Nook)\b/.test(name) && (
            /Browser|Lunascape|Maxthon/.test(name) ||
            name != 'Safari' && /^iOS/.test(os) && /\bSafari\b/.test(layout[1]) ||
            /^(?:Adobe|Arora|Breach|Midori|Opera|Phantom|Rekonq|Rock|Samsung Internet|Sleipnir|Web)/.test(name) && layout[1])) {
            // Don't add layout details to description if they are falsey.
            (data = layout[layout.length - 1]) && description.push(data);
        }
        // Combine contextual information.
        if (description.length) {
            description = ['(' + description.join('; ') + ')'];
        }
        // Append manufacturer to description.
        if (manufacturer && product && product.indexOf(manufacturer) < 0) {
            description.push('on ' + manufacturer);
        }
        // Append product to description.
        if (product) {
            description.push((/^on /.test(description[description.length - 1]) ? '' : 'on ') + product);
        }
        // Parse the OS into an object.
        if (os) {
            data = / ([\d.+]+)$/.exec(os);
            isSpecialCasedOS = data && os.charAt(os.length - data[0].length - 1) == '/';
            os = {
                'architecture': 32,
                'family': (data && !isSpecialCasedOS) ? os.replace(data[0], '') : os,
                'version': data ? data[1] : null,
                'toString': function () {
                    var version = this.version;
                    return this.family + ((version && !isSpecialCasedOS) ? ' ' + version : '') + (this.architecture == 64 ? ' 64-bit' : '');
                }
            };
        }
        // Add browser/OS architecture.
        if ((data = /\b(?:AMD|IA|Win|WOW|x86_|x)64\b/i.exec(arch)) && !/\bi686\b/i.test(arch)) {
            if (os) {
                os.architecture = 64;
                os.family = os.family.replace(RegExp(' *' + data), '');
            }
            if (
                name && (/\bWOW64\b/i.test(ua) ||
                (useFeatures && /\w(?:86|32)$/.test(nav.cpuClass || nav.platform) && !/\bWin64; x64\b/i.test(ua)))
            ) {
                description.unshift('32-bit');
            }
        }
        // Chrome 39 and above on OS X is always 64-bit.
        else if (
            os && /^OS X/.test(os.family) &&
            name == 'Chrome' && parseFloat(version) >= 39
        ) {
            os.architecture = 64;
        }

        ua || (ua = null);

        /*------------------------------------------------------------------------*/

        /**
         * The platform object.
         *
         * @name platform
         * @type Object
         */
        var platform = {};

        /**
         * The platform description.
         *
         * @memberOf platform
         * @type string|null
         */
        platform.description = ua;

        /**
         * The name of the browser's layout engine.
         *
         * The list of common layout engines include:
         * "Blink", "EdgeHTML", "Gecko", "Trident" and "WebKit"
         *
         * @memberOf platform
         * @type string|null
         */
        platform.layout = layout && layout[0];

        /**
         * The name of the product's manufacturer.
         *
         * The list of manufacturers include:
         * "Apple", "Archos", "Amazon", "Asus", "Barnes & Noble", "BlackBerry",
         * "Google", "HP", "HTC", "LG", "Microsoft", "Motorola", "Nintendo",
         * "Nokia", "Samsung" and "Sony"
         *
         * @memberOf platform
         * @type string|null
         */
        platform.manufacturer = manufacturer;

        /**
         * The name of the browser/environment.
         *
         * The list of common browser names include:
         * "Chrome", "Electron", "Firefox", "Firefox for iOS", "IE",
         * "Microsoft Edge", "PhantomJS", "Safari", "SeaMonkey", "Silk",
         * "Opera Mini" and "Opera"
         *
         * Mobile versions of some browsers have "Mobile" appended to their name:
         * eg. "Chrome Mobile", "Firefox Mobile", "IE Mobile" and "Opera Mobile"
         *
         * @memberOf platform
         * @type string|null
         */
        platform.name = name;

        /**
         * The alpha/beta release indicator.
         *
         * @memberOf platform
         * @type string|null
         */
        platform.prerelease = prerelease;

        /**
         * The name of the product hosting the browser.
         *
         * The list of common products include:
         *
         * "BlackBerry", "Galaxy S4", "Lumia", "iPad", "iPod", "iPhone", "Kindle",
         * "Kindle Fire", "Nexus", "Nook", "PlayBook", "TouchPad" and "Transformer"
         *
         * @memberOf platform
         * @type string|null
         */
        platform.product = product;

        /**
         * The browser's user agent string.
         *
         * @memberOf platform
         * @type string|null
         */
        platform.ua = ua;

        /**
         * The browser/environment version.
         *
         * @memberOf platform
         * @type string|null
         */
        platform.version = name && version;

        /**
         * The name of the operating system.
         *
         * @memberOf platform
         * @type Object
         */
        platform.os = os || {

            /**
             * The CPU architecture the OS is built for.
             *
             * @memberOf platform.os
             * @type number|null
             */
            'architecture': null,

            /**
             * The family of the OS.
             *
             * Common values include:
             * "Windows", "Windows Server 2008 R2 / 7", "Windows Server 2008 / Vista",
             * "Windows XP", "OS X", "Ubuntu", "Debian", "Fedora", "Red Hat", "SuSE",
             * "Android", "iOS" and "Windows Phone"
             *
             * @memberOf platform.os
             * @type string|null
             */
            'family': null,

            /**
             * The version of the OS.
             *
             * @memberOf platform.os
             * @type string|null
             */
            'version': null,

            /**
             * Returns the OS string.
             *
             * @memberOf platform.os
             * @returns {string} The OS string.
             */
            'toString': function () {
                return 'null';
            }
        };

        platform.parse = parse;
        platform.toString = toStringPlatform;

        if (platform.version) {
            description.unshift(version);
        }
        if (platform.name) {
            description.unshift(name);
        }
        if (os && name && !(os == String(os).split(' ')[0] && (os == name.split(' ')[0] || product))) {
            description.push(product ? '(' + os + ')' : 'on ' + os);
        }
        if (description.length) {
            platform.description = description.join(' ');
        }
        return platform;
    }

    /*--------------------------------------------------------------------------*/

    // Export platform.
    var platform = parse();

    // Some AMD build optimizers, like r.js, check for condition patterns like the following:
    if (typeof define == 'function' && typeof define.amd == 'object' && define.amd) {
        // Expose platform on the global object to prevent errors when platform is
        // loaded by a script tag in the presence of an AMD loader.
        // See http://requirejs.org/docs/errors.html#mismatch for more details.
        root.platform = platform;

        // Define as an anonymous module so platform can be aliased through path mapping.
        define(function () {
            return platform;
        });
    }
    // Check for `exports` after `define` in case a build optimizer adds an `exports` object.
    else if (freeExports && freeModule) {
        // Export for CommonJS support.
        forOwn(platform, function (value, key) {
            freeExports[key] = value;
        });
    } else {
        // Export to the global object.
        root.platform = platform;
    }
}.call(this));


/*[PATH @digikala/supernova/assets/local/package/sntracker.js]*/
var SnTracker = {
        sendCount: 5,
        isSending: false,
        isLocalStorageAvailable: function () {
            var checkKey = 'localStorageIsAvailable';
            if (!localStorage) return false;
            try {
                localStorage.setItem(checkKey, checkKey);
                localStorage.removeItem(checkKey);
                return true;
            } catch (e) {
                return false;
            }
        },
        lock: function () {
            this.isLocalStorageAvailable() ? localStorage.setItem('isSnTrackerSendingEvents', 1) : true;
        },
        unlock: function () {
            this.isLocalStorageAvailable() ? localStorage.removeItem('isSnTrackerSendingEvents') : true;
        },
        isLocked: function () {
            return this.isLocalStorageAvailable() ? !!localStorage.getItem('isSnTrackerSendingEvents') : false;
        },
        storage: {
            data: {},
            save: function () {
                var storage = SnTracker.storage;
                if (localStorage) {
                    try {
                        localStorage.setItem('snevents', JSON.stringify(storage.data));
                    } catch (e) {
                        // TODO
                    }
                }
                return storage;
            },
            clear: function (list) {
                var storage = SnTracker.storage;
                if (list) {
                    if (!storage.data.hasOwnProperty(list)) {
                        return;
                    } else {
                        storage.data[list] = [];
                    }
                } else {
                    storage.data = {};
                }
                storage.save();
                return storage;
            },
            set: function (name, value) {
                var storage = SnTracker.storage;
                storage.data[name] = value;
                storage.save();

                return storage;
            },
            add: function (list, object) {
                var storage = SnTracker.storage;
                if (!storage.get(list)) {
                    storage.data[list] = [];
                }
                storage.data[list].push(object);
                storage.save();

                return storage;
            },
            get: function (name) {
                var storage = SnTracker.storage;
                if (!storage.data.hasOwnProperty(name) || !storage.data[name]) {
                    return null;
                }
                return storage.data[name];
            }
        },

        utils: {
            getCookieById: function (cookieKey, type) {
                var cookies = (document.cookie || '').split(';'), result = {};
                for (var i = 0; i < cookies.length; ++i) {
                    var t = cookies[i].split('=');
                    result[t[0].trim()] = t[1].trim();
                }
                if (result[cookieKey]) {
                    switch (type) {
                        case 'string':
                            return result[cookieKey];
                        case 'json' :
                            return JSON.parse(result[cookieKey]);
                        default :
                            return null;
                    }
                }
            },

            Cookie: {
                // Create cookie
                set: function (name, value, seconds) {
                    var expires;
                    if (seconds) {
                        var date = new Date();
                        date.setTime(date.getTime() + (seconds * 1000));
                        expires = "; expires=" + date.toGMTString();
                    } else {
                        expires = "";
                    }
                    document.cookie = name + "=" + value + expires + ";domain=.digikala.com;path=/";
                },

                // Read cookie
                get: function (name) {
                    var nameEQ = name + "=";
                    var ca = document.cookie.split(';');
                    for (var i = 0; i < ca.length; i++) {
                        var c = ca[i];
                        while (c.charAt(0) === ' ') {
                            c = c.substring(1, c.length);
                        }
                        if (c.indexOf(nameEQ) === 0) {
                            return c.substring(nameEQ.length, c.length);
                        }
                    }
                    return null;
                },

                // Erase cookie
                remove: function (name) {
                    SnTracker.utils.Cookie.set(name, "", -1);
                }
            },

            setCookieById: function (cookieKey, cookieValue, type) {
                switch (type) {
                    case 'string':
                        document.cookie = cookieKey + "=" + cookieValue + "; path=/;sameSite=Lax;Secure=true";
                        break;
                    case 'json' :
                        document.cookie = cookieKey + "=" + JSON.stringify(cookieValue) + "; path=/;sameSite=Lax;Secure=true";
                        break;
                    default :
                        return;
                }
            },

            getUrlQuerylVars: function (urlAddress) {
                var queryString = {};
                try {
                    var vars = urlAddress.slice(urlAddress.indexOf('?') + 1).split('&');
                    for (var i = 0; i < vars.length; i++) {
                        var pair = vars[i].split('=');
                        if (pair[0]) {
                            queryString[pair[0]] = pair[1];
                        }
                    }
                    return queryString;
                } catch (e) {
                    return [];
                }
            },

            getUrlPathParts: function (urlAddress) {
                if (urlAddress) {
                    var parts = urlAddress.split('://')[1].split('/');
                    parts[0].includes("digikala.com") ? parts[0] = "digikala" : parts = ["referrer"];
                    if (parts[parts.length - 1][0] === "?") {
                        parts.splice(-1, 1);
                    }
                    return parts;
                } else {
                    return [];
                }
            },

            getProductViewChannel: function (type) {
                var pageSource = {};
                var pageAddress = '';
                switch (type) {
                    case 'quick': {
                        pageAddress = decodeURIComponent(document.URL.toLowerCase());
                        if (pageAddress === "") {
                            pageSource["type"] = "Direct";
                            return pageSource;
                        }
                        break;
                    }
                    case 'page': {
                        pageAddress = decodeURIComponent(document.referrer.toLowerCase());
                        if (pageAddress === "") {
                            pageSource["type"] = "Direct";
                            return pageSource;
                        }
                        break;
                    }
                    default: {
                        return pageSource;
                    }
                }

                var pagePath = this.getUrlPathParts(pageAddress);
                var pageQueryString = this.getUrlQuerylVars(pageAddress);
                if (!pageAddress) {
                    pageSource["type"] = "Direct";
                    return pageSource;
                } else if (pagePath[0] !== "digikala") {
                    pageSource["type"] = "Referrer";
                    return pageSource;
                } else if (pagePath.length === 1) {
                    pageSource["type"] = "HomePage";
                    return pageSource;
                } else if (pageQueryString["bcode"]) {
                    pageSource["type"] = "Banner";
                    pageSource["bannerId"] = pageQueryString["bcode"];
                    if (pagePath[2].substring(0, 3) === "cmp") {
                        pageSource["campaignId"] = pagePath[2].slice(4);
                    }
                    return pageSource;
                } else if (pageQueryString["promotion_types[0]"] === "incredible_offer") {
                    if (pageQueryString["promotion_types[1]"] === "promotion") {
                        pageSource["type"] = "Amazing";
                        return pageSource;
                    } else {
                        pageSource["type"] = "IncredibleOffer";
                        return pageSource;
                    }
                }
                switch (pagePath[1]) {
                    case 'promotion-page': {
                        pageSource["type"] = "Promotion";
                        if (pagePath[2].substring(0, 3) === "cmp") {
                            pageSource["campaignId"] = pagePath[2].slice(4);
                        }
                        if (pagePath[2].substring(0, 3) === "plp") {
                            pageSource["plp"] = pagePath[2].slice(4);
                        }
                        if (pagePath[2].substring(0, 3) === "rcm") {
                            pageSource["rcm"] = pagePath[2].slice(4);
                        }
                        return pageSource;
                    }
                    case "product-list": {
                        pageSource["type"] = "ProductList";
                        if (pagePath[2].substring(0, 3) === "plp") {
                            pageSource["plp"] = pagePath[2].slice(4);
                        }
                        if (pagePath[2].substring(0, 3) === "rcm") {
                            pageSource["rcm"] = pagePath[2].slice(4);
                        }
                        return pageSource;
                    }
                    case "landing-page": {
                        pageSource["type"] = "LandingPage";
                        return pageSource;
                    }
                    case "search": {
                        if (pagePath[2]) {
                            if (pagePath[2].substring(0, 8) === "category") {
                                pageSource["type"] = "Navigation";
                                return pageSource;
                            }
                        } else if (pageQueryString["q"]) {
                            pageSource["type"] = "Search";
                            pageSource["keyword"] = pageQueryString["q"];
                            return pageSource;
                        }
                        pageSource["type"] = "Search";
                        return pageSource;
                    }
                    case "main": {
                        pageSource["type"] = "Main";
                        return pageSource;
                    }
                    case "product": {
                        pageSource["type"] = "ProductPage";
                        return pageSource;
                    }
                    case "seller": {
                        pageSource["type"] = "SellerPage";
                        return pageSource;
                    }
                    default: {
                        pageSource["type"] = "NotDetected";
                        pageSource["referrer"] = pageAddress;
                        return pageSource;
                    }
                }
            },

            UTMParser: function () {
                var pageAddress = decodeURIComponent(document.URL.toLowerCase());
                var referrerAddress = decodeURIComponent(document.referrer.toLowerCase());
                var utm = {
                    u_medium: null,
                    u_source: null,
                    u_campaign: null,
                    u_term: null,
                    u_content: null
                };
                var referrerQueryString = this.getUrlQuerylVars(pageAddress);
                if (typeof referrerQueryString['utm_source'] !== 'undefined') {
                    utm.u_medium = (referrerQueryString['utm_medium']) ? referrerQueryString['utm_medium'] : null;
                    utm.u_source = (referrerQueryString['utm_source']) ? referrerQueryString['utm_source'] : null;
                    utm.u_campaign = (referrerQueryString['utm_campaign']) ? referrerQueryString['utm_campaign'] : null;
                    utm.u_term = (referrerQueryString['utm_term']) ? referrerQueryString['utm_term'] : null;
                    utm.u_content = (referrerQueryString['utm_content']) ? referrerQueryString['utm_content'] : null;
                    return utm;
                }
                if (typeof referrerQueryString['gclid'] !== 'undefined') {
                    utm.u_medium = "SEA";
                    utm.u_source = utm.u_campaign = utm.u_content = utm.u_term = "AdWords";
                    return utm;
                }
                // eslint-disable-next-line no-useless-escape
                var patt = new RegExp("(\.google\.)|(\.yahoo\.)|(\.ask\.)|(\.bing\.)|(\.aol\.)|(\.msn\.)|(\.baidu\.)|(\.so\.com)|(\.sogou\.)|(\.yandex\.)|(\.duckduckgo\.)|(\.babylon\.)|(\.naver\.)|(\.search\.smt\.docomo\.)|(\.avg\.)|(\.rakuten\.)|(\.startsiden\.)|(\.go\.mail\.ru\.)|(\.onet\.)|(\.rambler\.)");
                if (patt.test(referrerAddress)) {
                    utm.u_medium = "SEO";
                    utm.u_source = referrerAddress;
                    utm.u_campaign = utm.u_content = utm.u_term = "Organic";
                    return utm;
                }
                if (referrerAddress) {
                    utm.u_medium = utm.u_campaign = utm.u_content = utm.u_term = "Referral";
                    utm.u_source = referrerAddress;
                    return utm;
                } else {
                    utm.u_medium = utm.u_source = utm.u_campaign = utm.u_content = utm.u_term = "Direct";
                    return utm;
                }
            }

        },

        trackers: {
            UTMTracking: function () {
                var referrerAddress = decodeURIComponent(document.referrer.toLowerCase());
                var refPaths = SnTracker.utils.getUrlPathParts(referrerAddress);
                if (refPaths[0] === "digikala" || refPaths[0] === "digistyle") {
                    return;
                }
                var utms = SnTracker.utils.UTMParser();
                if (utms.u_medium == null && utms.u_source == null) {
                    return;
                }
                SnTracker.utils.setCookieById("sn_tracker_campaign", utms, 'json');
                snt('dkUTMTracking', utms, true);
            },

            PageViewTracking: function () {
                if (!window.sntrackerActivation) {
                    return;
                }
                var pageAddress = decodeURIComponent(document.URL.toLowerCase());
                var pagePaths = SnTracker.utils.getUrlPathParts(pageAddress);
                var pageViewParams = {
                    pv_referrer: decodeURIComponent(document.referrer.toLowerCase()),
                    pv_page_address: decodeURIComponent(document.location.pathname),
                    pv_page_type: (pagePaths[1] !== "") ? pagePaths[1] : 'home',
                    pv_bot: /bot|googlebot|crawler|spider|robot|crawling/i.test(navigator.userAgent),
                    pv_user_agent: navigator.userAgent,
                    pv_query: SnTracker.utils.getUrlQuerylVars(pageAddress)
                    // ga_client_id : (typeof (ga.getAll()[0].get('clientId')) !== "undefined") ? ga.getAll()[0].get('clientId') : ''
                };
                if (/api\.sabavision\.ir/.test(document.referrer.toLowerCase())) {
                    pageViewParams.pv_referrer = "sabavision";
                }
                snt('dkPageView', pageViewParams, true);
            },

            GoogleClientTracking: function () {
                try {
                    if (typeof (ga.getAll()[0].get('clientId')) !== "undefined") {
                        var googleParams = {
                            clientId: ga.getAll()[0].get('clientId')
                        };
                        snt('dkGAClient', googleParams, true);
                    } else {
                        return this;
                    }
                } catch (e) {
                    return this;
                }

            },

            ClientSideErrorTracking: function () {
                window.onerror = function (errorMsg, url, lineNumber) {
                    var errorparams = {
                        error_message: errorMsg,
                        error_url: url,
                        error_line: lineNumber,
                        error_page: document.URL
                    };
                    snt('dkErrorLogClient', errorparams, true);
                }
            },

            CarouselItemClickEvent: function () {
                $(document).on('click', ".js-sntracker-carousel-item", function(){
                    var item = $(this);
                    var productId = item.data("id");
                    if(!productId) return;
                    var recommendationId = item.closest(".js-sntracker-carousel").attr("id");
                    if(!recommendationId) return;
                    var t = window.carouselData || [];
                    var tempCarouselData = null;
                    for (var i = 0; i < t.length; ++i) {
                        if (t[i].id === recommendationId) {
                            tempCarouselData = t[i];
                            tempCarouselData["page"] = window.dataGTM;
                            tempCarouselData["recomm"] = tempCarouselData["recomm"] === true;
                            break;
                        }
                    }

                    var position = item.data('position');
                    if(!tempCarouselData) return;
                    var trackerData = {
                        'productId' : productId,
                        'position' : position,
                        'carouselData' : tempCarouselData
                    };
                    snt('dkCarouselItemClick', trackerData, true);
                });
            }
        },

        eventsTackingSwitch: {
            dkAddToCart: true,
            dkCloseCart: true,
            dkSearch: true,
            dkProductClicked: true,
            dkProductViewed: true,
            dkSessionStarted: true,
            dkBannerClicked: false,
            dkBannerViewed: false,
            dkUTMTracking: false,
            dkQuickProductViewed: true,
            dkRecommendationCarousel: true,
            dkPageView: true,
            dkErrorLogClient: false,
            dkGAClient: false,
            dkTrendsClick: false,
            dkMegaMenuClick: false,
            dkNavBarClick: false,
            dkHeaderClick: false,
            dkFooterClick: false,
            dkIncredibleClick: false,
            dkDownloadAppButton: false,
            dkLoginClick: false,
            dkProductPageClick: false,
            dkShippingPageClick: false,
            dkPaymentPageClick: false,
            dkThankYouPageClick: false,
            dkCartPageClick: false,
            dkSearchPageClick: false,
            dkRecommendationClick: false,
            dkDeliveryOptions: false,
            dkCarouselItemClick:true,
            dkCarouselImpression: true,
            dkCarouselNotInterestedClick: true,
        },

        init: function () {
            var fns = [
                this.initStorage,
                this.globalDefine,
                this.initTimer,
                this.initHandler,
                this.initDOMAttributeListeners,
                this.sendAllEvents,
                this.trackers.ClientSideErrorTracking,
                this.trackers.PageViewTracking,
                this.trackers.CarouselItemClickEvent
            ], self = this;
            for (var i = 0; i < fns.length; ++i) {
                try {
                    fns[i].bind(self)();
                } catch (e) {
                    // eslint-disable-next-line no-console
                    console.warn('Tracker', e);
                }
            }
        },
        sendAllEvents: function () {
            if (SnTracker.isLocalStorageAvailable()) {
                var snevents = localStorage && localStorage.getItem('snevents') || null;
                if (!snevents) return;
                var events = snevents.events || [];

                SnTracker.sendEvents(events, true);
            }
        },
        initHandler: function () {
            window.onbeforeunload = function () {
                SnTracker.unlock();
            };
            window.onunload = function () {
                if (SnTracker.isLocked) {
                    SnTracker.unlock();
                }
            };
        },
        initStorage: function () {
            this.storage.data = localStorage ? JSON.parse(localStorage.getItem('snevents')) || {} : {};
        },
        globalDefine: function () {
            window.tracker = window.tracker || this;
            window.snt = window.snt || this.sendEvent.bind(this);

        },
        createEventObject: function (eventName, eventParams) {
            var globalParams = !!window.snTrackerGlobals ? window.snTrackerGlobals || {} : {};
            return {
                name: eventName,
                params: Object.assign({}, globalParams, eventParams || {}) || {},
                time: Date.now(),
                url: window.location.href
            }
        },
        sendEvent: function (eventName, eventParams/*, immediate */) {
            if (!eventName) {
                return;
            }

            if (this.eventsTackingSwitch[eventName]) {
                var event = this.createEventObject(eventName, eventParams);
                return this.sendEvents([event]);

                //  Disabled
                if (this.isLocalStorageAvailable())
                    this.storage.add('events', event);
                var events = this.storage.get('events') || [];
                if (events.length >= SnTracker.sendCount || !this.isLocalStorageAvailable) {
                    this.sendEvents();
                }
            }
        },
        sendRequest: function (data, onSuccess, onFailed) {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("POST", '/tracker/events/');
            xmlhttp.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
            xmlhttp.onload = function () {
                if (xmlhttp.readyState === 4 && xmlhttp.status == "200") {
                    onSuccess && onSuccess();
                } else {
                    onFailed && onFailed();
                }
            };
            xmlhttp.send(JSON.stringify(data));
        },
        sendEvents: function (events, clear) {
            // if (SnTracker.isSending) return;
            // if (SnTracker.isLocked()) return;
            try {
                var self = this;
                events = events || this.storage.get('events');
                if (!events || !events.length) {
                    if (clear)
                        localStorage && localStorage.removeItem('snevents');
                    return;
                }
                // SnTracker.lock();
                // SnTracker.isSending = true;
                this.sendRequest({
                    events: events,
                    version: 1
                }, function () {
                    self.storage.clear('events');
                    if (clear) {
                        localStorage && localStorage.removeItem('snevents');
                    }
                    // SnTracker.isSending = false;
                    // SnTracker.unlock();
                }, function () {
                    // eslint-disable-next-line no-console
                    console.warn('Tracker Send Failed');
                    // SnTracker.isSending = false;
                    // SnTracker.unlock();
                });
            } catch (e) {
              //
            }

        },

        initTimer: function () {
            var self = this;
            setInterval(function () {
                if (!self.storage.get('events') || !self.storage.get('events').length) {
                    return;
                }
                self.sendEvents(self.storage.get('events') || []);
            }, 1000);
        }
        ,
        initDOMAttributeListeners: function () {
            $(document).on('click', '[data-snt-event][data-snt-trigger="click"], [data-snt-event]:not([data-snt-trigger])', function () {
                snt($(this).data('snt-event'), $(this).data('snt-params'), $(this).closest('a').attr('target') === "_blank");
            });
            $('[data-snt-event="dkMegaMenuClick"]').click(function () {
                snt($(this).data('snt-event'), $(this).data('snt-params'), $(this).closest('a').attr('target') === "_blank");
            });
            // var impressionComponents = $('[data-snt-event][data-snt-impression]');
            // var $w = $(window);
            // $w.scroll(function () {
            //     (function ($w) {
            //         var inview = impressionComponents.filter(function () {
            //             var $e = $(this);
            //             if ($e.is(":hidden")) return;
            //             var wt = $w.scrollTop(),
            //                 wb = wt + $w.height(),
            //                 et = $e.offset().top,
            //                 eb = et + $e.height();
            //             return eb >= wt - 5 && et <= wb + 5;
            //         });
            //         inview.each(function () {
            //             snt($(this).data('snt-event'), $(this).data('snt-params'));
            //         });
            //         impressionComponents = impressionComponents.not(inview);
            //     }).bind(this, $w)();
            // }).scroll();
        }
    }
;

$(function () {
    SnTracker.init();
});



/*[PATH @digikala/supernova-digikala-desktop/assets/local/js/shared/DKCookie.js]*/
window.DKCookie = {
    // Create cookie
    set: function (name, value, seconds) {
        var expires;
        if (seconds) {
            var date = new Date();
            date.setTime(date.getTime() + (seconds * 1000));
            expires = "; expires=" + date.toGMTString();
        } else {
            expires = "";
        }
        document.cookie = name + "=" + value + expires + ";path=/";
    },

    // Read cookie
    get: function (name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) === ' ') { // Trim ?
                c = c.substring(1, c.length);
            }
            if (c.indexOf(nameEQ) === 0) {
                return c.substring(nameEQ.length, c.length);
            }
        }
        return null;
    },

    // Erase cookie
    remove: function (name) {
        window.DKCookie.set(name, "", -1);
    }
};


/*[PATH @digikala/supernova-digikala-desktop/assets/local/js/shared/user.js]*/
window.UserClass = function() {
  var $addressFormInited = false;
  this.loggedUserMetaData = null;

  this.getLoggedUserMetaData = function() {
    if (this.loggedUserMetaData !== null) {
      return this.loggedUserMetaData;
    }
    var $metaData = $("#ESILogged");

    if (!$metaData.length) {
      return null;
    }

    this.loggedUserMetaData = $metaData;

    return this.loggedUserMetaData;
  };

  this.checkLogged = function() {
    var $loggedUserMetaData = this.getLoggedUserMetaData();

    if ($loggedUserMetaData === null) {
      return false;
    }

    return $loggedUserMetaData.data("logged") === 1;
  };

  this.getEmail = function() {
    var $loggedUserMetaData = this.getLoggedUserMetaData();

    if ($loggedUserMetaData === null) {
      return false;
    }

    return $loggedUserMetaData.data("email");
  };

  this.getMobilePhone = function() {
    var $loggedUserMetaData = this.getLoggedUserMetaData();

    if ($loggedUserMetaData === null) {
      return "";
    }

    return $loggedUserMetaData.data("mobile_phone");
  };

  this.getLoginPhone = function() {
    var $loggedUserMetaData = this.getLoggedUserMetaData();

    if ($loggedUserMetaData === null) {
      return "";
    }

    return $loggedUserMetaData.data("login_phone");
  };

  this.getDefaultPhone = function() {
    var $loggedUserMetaData = this.getLoggedUserMetaData();

    if ($loggedUserMetaData === null) {
      return "";
    }

    return $loggedUserMetaData.data("default_phone");
  };

  this.displayLoginForm = function(msg) {

    if(isModuleActive('new_login')) {
      window.location.href = window.location.origin + window.loginRegisterUrlWithBack;
      return
    }

    $("#login-form-msg").hide();

    var modal = $("[data-remodal-id=login]").remodal();
    $("#loginFormModal")
      .validate()
      .resetForm();
    $("#loginFormError").hide();
    modal.open();

    $(document).on("opened", "[data-remodal-id=login]", function() {
      if (msg !== undefined && msg.length > 0) {
        var loginFormMsg = $("#login-form-msg");
        loginFormMsg.text(msg);
        loginFormMsg.show();
      }
    });

    $(document).on("closed", "[data-remodal-id=login]", function() {
      $("#login-form-msg").hide();
    });
  };

  this.ObservedForm = {
    display: function() {
      var modal = $("[data-remodal-id=observed]").remodal();
      modal.open();
      return this;
    },
    clean: function() {
      $(".js-observe-modal-errors").addClass("u-hidden-visually");
      $(".js-observe-modal-errors .js-form-error-items").empty();
      return this;
    },
    addError: function(errorMsg) {
      var $errorItems = $(".js-observe-modal-errors");
      $errorItems.removeClass("u-hidden-visually");
      $errorItems
        .find(".js-form-error-items")
        .append("<p>" + __(errorMsg) + "</p>");
      return this;
    }
  };

  this.IncredibleObservedForm = {
    display: function() {
      var modal = $("[data-remodal-id=incredible-observed]").remodal();
      modal.open();
      return this;
    },
    clean: function() {
      $(".js-observe-modal-errors").addClass("u-hidden-visually");
      $(".js-observe-modal-errors .js-form-error-items").empty();
      return this;
    },
    addError: function(errorMsg) {
      var $errorItems = $(".js-observe-modal-errors");
      $errorItems.removeClass("u-hidden-visually");
      $errorItems
          .find(".js-form-error-items")
          .append("<p>" + __(errorMsg) + "</p>");
      return this;
    }
  };

  this.displayAddressForm = function($addressId) {
    if (!this.isLogged()) {
      return;
    }

    if (!$addressFormInited) {
      var $form = $("#addressForm");

      if (!$form.length) {
        return;
      }

      //TODO move to user class or make it smarter
      $("#manage-address").on("beforeshow", function() {
        $form.validate().resetForm();
      });

      $("#lbSave").click(function() {
        if (!$form.valid()) {
          return false;
        }

        $.ajax({
          type: "POST",
          url: "/profile/address/save",
          success: function(response) {
            if (response.status == "error") {
              $.each(response.errors, function(key, value) {
                $("#" + key).html(value);
              });
            }
          },
          data: $form.serialize()
        });
      });

      $form
        .find("input")
        .first()
        .focus();

      $form.validate({
        rules: {
          "address[full_name]": {
            required: true,
            maxlength: 10
          },
          "address[mobile_phone]": {
            required: true,
            digits: true,
            minlength: 11,
            maxlength: 11,
            mobile_phone: true
          },
          "address[phone_code]": {
            required: true,
            digits: true,
            minlength: 4,
            maxlength: 4
          },
          "address[phone]": {
            required: true,
            digits: true,
            minlength: 8,
            maxlength: 11
          },
          "address[address]": {
            required: true,
            minlength: 4,
            maxlength: 350
          },
          "address[post_code]": {
            required: true,
            digits: true,
            minlength: 4,
            maxlength: 10
          }
        },
        messages: {
          "address[full_name]": {
            required: 'نام و نام خانوادگی تکمیل نشده است',
            maxlength: 'نام و نام خانوادگی طولانی است'
          },
          "address[mobile_phone]": {
            required: 'شماره موبایل وارد نشده است',
            digits: 'شماره موبایل را درست وارد نمایید',
            minlength: 'شماره موبایل را کامل وارد نمایید',
            maxlength: 'شماره موبایل را درست وارد نمایید',
            mobile_phone: 'شماره موبایل نامعتبر است'
          },
          "address[phone_code]": {
            required: 'کد تلفن را وارد نمایید',
            digits: 'کد را درست وارد نمایید',
            minlength: 'کد تلفن را کامل وارد نمایید',
            maxlength: 'کد تلفن را درست وارد نمایید'
          },
          "address[phone]": {
            required: 'شماره تلفن را وارد نمایید',
            digits: 'شماره تلفن را درست وارد نمایید',
            minlength: 'شماره تلفن را درست وارد نمایید',
            maxlength: 'شماره تلفن را درست وارد نمایید'
          },
          "address[address]": {
            required: 'آدرس را وارد نمایید',
            minlength: 'آدرس وارد شده کوتاه است',
            maxlength: 'لطفا آدرس را کوتاه‌تر وارد نمایید'
          }
        }
      });

      $addressFormInited = true;
    }

    if ($addressId) {
      $.ajax({
        type: "POST",
        url: "/profile/address/get",
        success: function() {
          //prefill
        },
        data: {
          "address[id]": $addressId
        }
      });
    }

    var $modal = $("#manage-address");

    if ($modal.length) {
      UIkit.modal($modal).show();
    }
  };
};

window.UserClass.prototype.isLogged = function() {
  return this.checkLogged();
};
window.UserClass.prototype.getEmail = function() {
  return this.getEmail();
};
window.UserClass.prototype.getDefaultPhone = function() {
  return this.getDefaultPhone();
};
window.UserClass.prototype.getMobilePhone = function() {
  return this.getMobilePhone();
};
window.UserClass.prototype.getLoginPhone = function() {
  return this.getLoginPhone();
};
window.UserClass.prototype.showLoginForm = function(msg) {
  return this.displayLoginForm(msg);
};
window.UserClass.prototype.showObservedForm = function() {
  return this.ObservedForm.clean().display();
};
window.UserClass.prototype.showIncredibleObservedForm = function() {
  return this.IncredibleObservedForm.clean().display();
};
window.UserClass.prototype.showAddressForm = function() {
  return this.displayAddressForm();
};



/*[PATH @digikala/supernova-digikala-desktop/assets/local/js/shared/services.js]*/
var Services =  $.extend(Framework, {
    ajaxError401Response: function () {
        this.user = new UserClass();
        this.getUser().showLoginForm();
    },

    checkUserLogged : function () {
        var $userClass = new UserClass();
        if (!$userClass.isLogged()) {
            $userClass.showLoginForm();
            return false;
        }

        return true;
    },

    /**
     * convert En number to Fa number
     *
     * @method convertToFaDigit
     * @return {String}
     */
    convertToFaDigit: function (a) {
        var b = '' + a;
        for (var c = 48; c <= 57; c++) {
            var d = String.fromCharCode(c);
            var e = String.fromCharCode(c + 1728);
            b = b.replace(new RegExp(d.toString(), "g"), e.toString())
        }
        return b;
    },

    /**
     * Seprate numbers
     *
     * @method AutoSeparateValue
     * @return {String}
     */
    autoSeparateValue: function (a) {
        var b, c, d, g;
        var e, f;
        b = a;
        b = b.replace(/,/g, "");
        if (b != "") c = b.charAt(0);
        if (c != "-") c = "";
        else b = b.replace(/-/g, "");
        if (b.indexOf(".") == -1) {
            if (b.length > 3) {
                d = "";
                while (b.length > 3) {
                    g = b.substr(0, b.length - 3);
                    var h = b.substr(b.length - 3);
                    var i = "," + h;
                    d = i + d;
                    b = b.substr(0, b.length - 3)
                }
                d = c + g + d
            } else d = c + b
        } else {
            e = b.substring(0, b.indexOf("."));
            f = b.substring(b.indexOf("."));
            if (e.length > 3) {
                d = "";
                while (e.length > 3) {
                    g = e.substr(0, e.length - 3);
                    h = e.substr(e.length - 3);
                    i = "," + h;
                    d = i + d;
                    e = e.substr(0, e.length - 3)
                }
                if (f != ".00") {
                    d = c + g + d + f
                } else d = c + g + d
            } else if (f != ".00") {
                d = c + e + f
            } else d = c + e
        }
        return d
    },

    /**
     * Format Currency
     *
     * @method formatCurrency
     * @return {String}
     */
    formatCurrency: function (num, isRial, symbol) {
        num = num.toString().replace(/\$|\,/g, "");
        if (isNaN(num)) num = "0";
        var sign = (num == (num = Math.abs(num)));
        num = Math.round(num * 100 + 0.50000000001);
        num = Math.round(num / (isRial ? 1000 : 100)).toString();
        for (var i = 0; i < Math.floor((num.length - (1 + i)) / 3) ; i++)
            num = num.substring(0, num.length - (4 * i + 3)) + ',' + num.substring(num.length - (4 * i + 3));
        return (((sign) ? "" : "-") + num + " " + symbol);
    },

    /**
     * Convert Persion Number to English Number
     *
     * @method convertToEnDigit
     * @return {String}
     */
    convertToEnDigit: function (str) {
        return str
            .replace(/۰/g, '0')
            .replace(/۱/g, '1')
            .replace(/۲/g, '2')
            .replace(/۳/g, '3')
            .replace(/۴/g, '4')
            .replace(/۵/g, '5')
            .replace(/۶/g, '6')
            .replace(/۷/g, '7')
            .replace(/۸/g, '8')
            .replace(/۹/g, '9')
            .replace(/٠/g, '0')
            .replace(/١/g, '1')
            .replace(/٢/g, '2')
            .replace(/٣/g, '3')
            .replace(/٤/g, '4')
            .replace(/٥/g, '5')
            .replace(/٦/g, '6')
            .replace(/٧/g, '7')
            .replace(/٨/g, '8')
            .replace(/٩/g, '9');

    },

    setCookie: function (cookieName, cookieValue, expireDays) {
        var d = new Date();
        d.setTime(d.getTime() + (expireDays * 24 * 60 * 60 * 1000));
        var expires = "expires="+d.toUTCString();
        document.cookie = cookieName + "=" + cookieValue + ";" + expires + ";path=/";
    },

    getCookie: function getCookie(cookieName) {
        var name = cookieName + "=";
        var ca = document.cookie.split(';');
        for(var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) === ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) === 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    },

    checkCookie: function (cookieName) {
        var name = this.getCookie(cookieName);
        if (name !== "") {
            return true;
        } else {
            return false;
        }
    },

    nl2br: function (str) {
        if (typeof str === 'undefined' || str === null) {
            return '';
        }
        var breakTag = '<br>';
        return (str + '').replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, '$1' + breakTag + '$2');
    },

    callListInTryCatch: function (methodArray, obj) {
        methodArray.forEach(function(method) {
            try {
                method.call(obj)
            } catch (e) {
                //
                // eslint-disable-next-line no-console
                console.warn(e);
            }
        })
    },

    arrayToObjectKey: function(array) {
        var output = {};

        array.reduce(function(object, value) {
            return Object.assign(object, {[value]: 1})
        }, output);

        return output;
    },

    getQueryString: function(url) {
        if(typeof url !== 'string' || url.indexOf('?') < 0) return '';
        return url.substring(url.indexOf('?'));
    },

    parseQueryString: function(query) {
        if(!query || typeof query !== 'string') return {};

        query = query.substring(1);
        var queryString = {};
        var vars = query.split("&");
        for (var i = 0; i < vars.length; i++) {
            if (vars[i] === "") {
                continue;
            }
            var pair = vars[i].split("=");
            var key = pair[0];
            var value = pair.length > 1 ? pair[1] : "";
            try {
                var paramValue = decodeURIComponent(value.replace(/\+/g, "%20"));
                if (typeof queryString[key] === "undefined") {
                    queryString[key] = paramValue;
                } else {
                    if (typeof queryString[key] === "string") {
                        var arr = [queryString[key], paramValue];
                        queryString[key] = arr;
                    } else {
                        queryString[key].push(paramValue);
                    }
                }
            } catch (err) {}
        }
        return queryString;
    },

    retrieveProductFromDataLayer: function(paramsObject, filterCallback) {
        var productId = paramsObject.productId,
            eventName = paramsObject.eventName,
            pathArray = paramsObject.pathArray;

        if(!filterCallback) filterCallback = function() { return true };

        return window.dataLayer
            .filter(function(eventItem) {
                return eventItem.event === eventName
            })
            .map(function(eventItem) {
                return getToList(eventItem, pathArray)
                    .filter(function(product) {
                        return product.id == productId;
                    })
            })
            .reduce(function(base, item) {
                return base.concat(item);
            })
            .filter(filterCallback)
            .reduce(function(firstProduct) {
                return firstProduct;
            })

        function getToList(object, pathArray) {
            if(pathArray.length === 1) {
                return object[pathArray[0]];
            } else {
                return getToList(
                    object[pathArray[0]],
                    pathArray.slice(1)
                )
            }
        }
    },

    debounce: function(func, wait) {
        var timeout;
        return function() {
            var context = this
            var later = function() {
                timeout = null;
                func.apply(context);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    },

    throttle: function (callback, limit) {
        var waiting = false;
        return function () {
            if (!waiting) {
                callback.apply(this, arguments);
                waiting = true;
                setTimeout(function () {
                    waiting = false;
                }, limit);
            }
        }
    },

    isScrolledIntoView: function(elem) {
        var docViewTop = $(window).scrollTop();
        var docViewBottom = docViewTop + $(window).height();

        var elemTop = $(elem).offset().top;
        var elemBottom = elemTop + $(elem).height();

        return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
    },

    scrollToEl: function (selector) {
        var headerHeight = $('.js-header-sticky').outerHeight() || 0;
        var el = $(selector);
        if (el.length) {
            var newPosition = el.offset();
            $('html, body').stop().animate({ scrollTop: newPosition.top - headerHeight }, 500);
        }
    },

    isFunction: function(variable) {
        return variable && Object.prototype.toString.call(variable) === '[object Function]';
    },

    isObject: function(variable) {
        return variable && Object.prototype.toString.call(variable) === '[object Object]';
    },

    isArray: function(variable) {
        return Object.prototype.toString.call(variable) === '[object Array]';
    },

    mutateProperty: function (data, property, value) {
        if (!data ||
            !property ||
            typeof property !== 'string' ||
            !value) return false;

        var i, currentNode, keys, key, item;
        var stack = [data];

        while (stack.length) {
            currentNode = stack.pop();
            if (Services.isObject(currentNode)) {
                keys = Object.keys(currentNode);
                for (i = 0; i < keys.length; i++) {
                    key = keys[i];
                    item = currentNode[key];

                    if (Services.isArray(item) || Services.isObject(item)) stack.push(item);
                    else if (key === property) currentNode[key] = value;
                }
            } else if (Services.isArray(currentNode)) {
                for (i = 0; i < currentNode.length; i++) {
                    item = currentNode[i];

                    if (Services.isArray(item) || Services.isObject(item)) stack.push(item);
                }
            }
        }
    },

    setPromoClickImpressionEvent: function (promoId, listName) {
        try {
            var productObject = this.retrieveProductFromDataLayer({
                productId: promoId,
                eventName: "eec.promoView",
                pathArray: ['ecommerce','promoView','promotions']
            });
            var productData = removeListNameFromProductObject(productObject);
            var impressionObject = createImpressionObj(productData, listName);
            window.dataLayer.push(impressionObject);
        } catch (e) {
            //
            console.warn(e);
        }
        function removeListNameFromProductObject(productObject) {
            var productObjectCopy = Object.assign({}, productObject);
            delete productObjectCopy.list;
            return productObjectCopy;
        }
        function createImpressionObj(productData, listName) {
            return {
                'event': "eec.promoClick",
                'ecommerce': {
                    'click': {
                        'actionField': {
                            'list': listName
                        },
                        'products': [productData]
                    }
                }
            }
        }
    }
});


/*[PATH @digikala/supernova-digikala-desktop/assets/local/js/libs/lottie.js]*/
var a,b;"undefined"!=typeof navigator&&(a=window||{},b=function(window){"use strict";var svgNS="http://www.w3.org/2000/svg",locationHref="",initialDefaultFrame=-999999,subframeEnabled=!0,expressionsPlugin,isSafari=/^((?!chrome|android).)*safari/i.test(navigator.userAgent),cachedColors={},bm_rounder=Math.round,bm_rnd,bm_pow=Math.pow,bm_sqrt=Math.sqrt,bm_abs=Math.abs,bm_floor=Math.floor,bm_max=Math.max,bm_min=Math.min,blitter=10,BMMath={};function ProjectInterface(){return{}}!function(){var t,e=["abs","acos","acosh","asin","asinh","atan","atanh","atan2","ceil","cbrt","expm1","clz32","cos","cosh","exp","floor","fround","hypot","imul","log","log1p","log2","log10","max","min","pow","random","round","sign","sin","sinh","sqrt","tan","tanh","trunc","E","LN10","LN2","LOG10E","LOG2E","PI","SQRT1_2","SQRT2"],r=e.length;for(t=0;t<r;t+=1)BMMath[e[t]]=Math[e[t]]}(),BMMath.random=Math.random,BMMath.abs=function(t){if("object"===typeof t&&t.length){var e,r=createSizedArray(t.length),i=t.length;for(e=0;e<i;e+=1)r[e]=Math.abs(t[e]);return r}return Math.abs(t)};var defaultCurveSegments=150,degToRads=Math.PI/180,roundCorner=.5519;function roundValues(t){bm_rnd=t?Math.round:function(t){return t}}function styleDiv(t){t.style.position="absolute",t.style.top=0,t.style.left=0,t.style.display="block",t.style.transformOrigin=t.style.webkitTransformOrigin="0 0",t.style.backfaceVisibility=t.style.webkitBackfaceVisibility="visible",t.style.transformStyle=t.style.webkitTransformStyle=t.style.mozTransformStyle="preserve-3d"}function BMEnterFrameEvent(t,e,r,i){this.type=t,this.currentTime=e,this.totalTime=r,this.direction=i<0?-1:1}function BMCompleteEvent(t,e){this.type=t,this.direction=e<0?-1:1}function BMCompleteLoopEvent(t,e,r,i){this.type=t,this.currentLoop=r,this.totalLoops=e,this.direction=i<0?-1:1}function BMSegmentStartEvent(t,e,r){this.type=t,this.firstFrame=e,this.totalFrames=r}function BMDestroyEvent(t,e){this.type=t,this.target=e}function BMRenderFrameErrorEvent(t,e){this.type="renderFrameError",this.nativeError=t,this.currentTime=e}function BMConfigErrorEvent(t){this.type="configError",this.nativeError=t}function BMAnimationConfigErrorEvent(t,e){this.type=t,this.nativeError=e,this.currentTime=currentTime}roundValues(!1);var createElementID=(I=0,function(){return"__lottie_element_"+ ++I}),I;function HSVtoRGB(t,e,r){var i,s,a,n,o,h,l,p;switch(h=r*(1-e),l=r*(1-(o=6*t-(n=Math.floor(6*t)))*e),p=r*(1-(1-o)*e),n%6){case 0:i=r,s=p,a=h;break;case 1:i=l,s=r,a=h;break;case 2:i=h,s=r,a=p;break;case 3:i=h,s=l,a=r;break;case 4:i=p,s=h,a=r;break;case 5:i=r,s=h,a=l}return[i,s,a]}function RGBtoHSV(t,e,r){var i,s=Math.max(t,e,r),a=Math.min(t,e,r),n=s-a,o=0===s?0:n/s,h=s/255;switch(s){case a:i=0;break;case t:i=e-r+n*(e<r?6:0),i/=6*n;break;case e:i=r-t+2*n,i/=6*n;break;case r:i=t-e+4*n,i/=6*n}return[i,o,h]}function addSaturationToRGB(t,e){var r=RGBtoHSV(255*t[0],255*t[1],255*t[2]);return r[1]+=e,1<r[1]?r[1]=1:r[1]<=0&&(r[1]=0),HSVtoRGB(r[0],r[1],r[2])}function addBrightnessToRGB(t,e){var r=RGBtoHSV(255*t[0],255*t[1],255*t[2]);return r[2]+=e,1<r[2]?r[2]=1:r[2]<0&&(r[2]=0),HSVtoRGB(r[0],r[1],r[2])}function addHueToRGB(t,e){var r=RGBtoHSV(255*t[0],255*t[1],255*t[2]);return r[0]+=e/360,1<r[0]?r[0]-=1:r[0]<0&&(r[0]+=1),HSVtoRGB(r[0],r[1],r[2])}var rgbToHex=function(){var t,e,i=[];for(t=0;t<256;t+=1)e=t.toString(16),i[t]=1==e.length?"0"+e:e;return function(t,e,r){return t<0&&(t=0),e<0&&(e=0),r<0&&(r=0),"#"+i[t]+i[e]+i[r]}}();function BaseEvent(){}BaseEvent.prototype={triggerEvent:function(t,e){if(this._cbs[t])for(var r=this._cbs[t].length,i=0;i<r;i++)this._cbs[t][i](e)},addEventListener:function(t,e){return this._cbs[t]||(this._cbs[t]=[]),this._cbs[t].push(e),function(){this.removeEventListener(t,e)}.bind(this)},removeEventListener:function(t,e){if(e){if(this._cbs[t]){for(var r=0,i=this._cbs[t].length;r<i;)this._cbs[t][r]===e&&(this._cbs[t].splice(r,1),r-=1,i-=1),r+=1;this._cbs[t].length||(this._cbs[t]=null)}}else this._cbs[t]=null}};var createTypedArray="function"==typeof Uint8ClampedArray&&"function"==typeof Float32Array?function(t,e){return"float32"===t?new Float32Array(e):"int16"===t?new Int16Array(e):"uint8c"===t?new Uint8ClampedArray(e):void 0}:function(t,e){var r,i=0,s=[];switch(t){case"int16":case"uint8c":r=1;break;default:r=1.1}for(i=0;i<e;i+=1)s.push(r);return s};function createSizedArray(t){return Array.apply(null,{length:t})}function createNS(t){return document.createElementNS(svgNS,t)}function createTag(t){return document.createElement(t)}function DynamicPropertyContainer(){}DynamicPropertyContainer.prototype={addDynamicProperty:function(t){-1===this.dynamicProperties.indexOf(t)&&(this.dynamicProperties.push(t),this.container.addDynamicProperty(this),this._isAnimated=!0)},iterateDynamicProperties:function(){this._mdf=!1;var t,e=this.dynamicProperties.length;for(t=0;t<e;t+=1)this.dynamicProperties[t].getValue(),this.dynamicProperties[t]._mdf&&(this._mdf=!0)},initDynamicPropertyContainer:function(t){this.container=t,this.dynamicProperties=[],this._mdf=!1,this._isAnimated=!1}};var getBlendMode=(Ra={0:"source-over",1:"multiply",2:"screen",3:"overlay",4:"darken",5:"lighten",6:"color-dodge",7:"color-burn",8:"hard-light",9:"soft-light",10:"difference",11:"exclusion",12:"hue",13:"saturation",14:"color",15:"luminosity"},function(t){return Ra[t]||""}),Ra,Matrix=function(){var s=Math.cos,a=Math.sin,n=Math.tan,i=Math.round;function t(){return this.props[0]=1,this.props[1]=0,this.props[2]=0,this.props[3]=0,this.props[4]=0,this.props[5]=1,this.props[6]=0,this.props[7]=0,this.props[8]=0,this.props[9]=0,this.props[10]=1,this.props[11]=0,this.props[12]=0,this.props[13]=0,this.props[14]=0,this.props[15]=1,this}function e(t){if(0===t)return this;var e=s(t),r=a(t);return this._t(e,-r,0,0,r,e,0,0,0,0,1,0,0,0,0,1)}function r(t){if(0===t)return this;var e=s(t),r=a(t);return this._t(1,0,0,0,0,e,-r,0,0,r,e,0,0,0,0,1)}function o(t){if(0===t)return this;var e=s(t),r=a(t);return this._t(e,0,r,0,0,1,0,0,-r,0,e,0,0,0,0,1)}function h(t){if(0===t)return this;var e=s(t),r=a(t);return this._t(e,-r,0,0,r,e,0,0,0,0,1,0,0,0,0,1)}function l(t,e){return this._t(1,e,t,1,0,0)}function p(t,e){return this.shear(n(t),n(e))}function m(t,e){var r=s(e),i=a(e);return this._t(r,i,0,0,-i,r,0,0,0,0,1,0,0,0,0,1)._t(1,0,0,0,n(t),1,0,0,0,0,1,0,0,0,0,1)._t(r,-i,0,0,i,r,0,0,0,0,1,0,0,0,0,1)}function f(t,e,r){return r||0===r||(r=1),1===t&&1===e&&1===r?this:this._t(t,0,0,0,0,e,0,0,0,0,r,0,0,0,0,1)}function c(t,e,r,i,s,a,n,o,h,l,p,m,f,c,d,u){return this.props[0]=t,this.props[1]=e,this.props[2]=r,this.props[3]=i,this.props[4]=s,this.props[5]=a,this.props[6]=n,this.props[7]=o,this.props[8]=h,this.props[9]=l,this.props[10]=p,this.props[11]=m,this.props[12]=f,this.props[13]=c,this.props[14]=d,this.props[15]=u,this}function d(t,e,r){return r=r||0,0!==t||0!==e||0!==r?this._t(1,0,0,0,0,1,0,0,0,0,1,0,t,e,r,1):this}function u(t,e,r,i,s,a,n,o,h,l,p,m,f,c,d,u){var y=this.props;if(1===t&&0===e&&0===r&&0===i&&0===s&&1===a&&0===n&&0===o&&0===h&&0===l&&1===p&&0===m)return y[12]=y[12]*t+y[15]*f,y[13]=y[13]*a+y[15]*c,y[14]=y[14]*p+y[15]*d,y[15]=y[15]*u,this._identityCalculated=!1,this;var g=y[0],v=y[1],b=y[2],E=y[3],x=y[4],P=y[5],S=y[6],_=y[7],A=y[8],C=y[9],T=y[10],k=y[11],M=y[12],D=y[13],w=y[14],F=y[15];return y[0]=g*t+v*s+b*h+E*f,y[1]=g*e+v*a+b*l+E*c,y[2]=g*r+v*n+b*p+E*d,y[3]=g*i+v*o+b*m+E*u,y[4]=x*t+P*s+S*h+_*f,y[5]=x*e+P*a+S*l+_*c,y[6]=x*r+P*n+S*p+_*d,y[7]=x*i+P*o+S*m+_*u,y[8]=A*t+C*s+T*h+k*f,y[9]=A*e+C*a+T*l+k*c,y[10]=A*r+C*n+T*p+k*d,y[11]=A*i+C*o+T*m+k*u,y[12]=M*t+D*s+w*h+F*f,y[13]=M*e+D*a+w*l+F*c,y[14]=M*r+D*n+w*p+F*d,y[15]=M*i+D*o+w*m+F*u,this._identityCalculated=!1,this}function y(){return this._identityCalculated||(this._identity=!(1!==this.props[0]||0!==this.props[1]||0!==this.props[2]||0!==this.props[3]||0!==this.props[4]||1!==this.props[5]||0!==this.props[6]||0!==this.props[7]||0!==this.props[8]||0!==this.props[9]||1!==this.props[10]||0!==this.props[11]||0!==this.props[12]||0!==this.props[13]||0!==this.props[14]||1!==this.props[15]),this._identityCalculated=!0),this._identity}function g(t){for(var e=0;e<16;){if(t.props[e]!==this.props[e])return!1;e+=1}return!0}function v(t){var e;for(e=0;e<16;e+=1)t.props[e]=this.props[e]}function b(t){var e;for(e=0;e<16;e+=1)this.props[e]=t[e]}function E(t,e,r){return{x:t*this.props[0]+e*this.props[4]+r*this.props[8]+this.props[12],y:t*this.props[1]+e*this.props[5]+r*this.props[9]+this.props[13],z:t*this.props[2]+e*this.props[6]+r*this.props[10]+this.props[14]}}function x(t,e,r){return t*this.props[0]+e*this.props[4]+r*this.props[8]+this.props[12]}function P(t,e,r){return t*this.props[1]+e*this.props[5]+r*this.props[9]+this.props[13]}function S(t,e,r){return t*this.props[2]+e*this.props[6]+r*this.props[10]+this.props[14]}function _(t){var e=this.props[0]*this.props[5]-this.props[1]*this.props[4],r=this.props[5]/e,i=-this.props[1]/e,s=-this.props[4]/e,a=this.props[0]/e,n=(this.props[4]*this.props[13]-this.props[5]*this.props[12])/e,o=-(this.props[0]*this.props[13]-this.props[1]*this.props[12])/e;return[t[0]*r+t[1]*s+n,t[0]*i+t[1]*a+o,0]}function A(t){var e,r=t.length,i=[];for(e=0;e<r;e+=1)i[e]=_(t[e]);return i}function C(t,e,r){var i=createTypedArray("float32",6);if(this.isIdentity())i[0]=t[0],i[1]=t[1],i[2]=e[0],i[3]=e[1],i[4]=r[0],i[5]=r[1];else{var s=this.props[0],a=this.props[1],n=this.props[4],o=this.props[5],h=this.props[12],l=this.props[13];i[0]=t[0]*s+t[1]*n+h,i[1]=t[0]*a+t[1]*o+l,i[2]=e[0]*s+e[1]*n+h,i[3]=e[0]*a+e[1]*o+l,i[4]=r[0]*s+r[1]*n+h,i[5]=r[0]*a+r[1]*o+l}return i}function T(t,e,r){return this.isIdentity()?[t,e,r]:[t*this.props[0]+e*this.props[4]+r*this.props[8]+this.props[12],t*this.props[1]+e*this.props[5]+r*this.props[9]+this.props[13],t*this.props[2]+e*this.props[6]+r*this.props[10]+this.props[14]]}function k(t,e){if(this.isIdentity())return t+","+e;var r=this.props;return Math.round(100*(t*r[0]+e*r[4]+r[12]))/100+","+Math.round(100*(t*r[1]+e*r[5]+r[13]))/100}function M(){for(var t=0,e=this.props,r="matrix3d(";t<16;)r+=i(1e4*e[t])/1e4,r+=15===t?")":",",t+=1;return r}function D(t){return t<1e-6&&0<t||-1e-6<t&&t<0?i(1e4*t)/1e4:t}function w(){var t=this.props;return"matrix("+D(t[0])+","+D(t[1])+","+D(t[4])+","+D(t[5])+","+D(t[12])+","+D(t[13])+")"}return function(){this.reset=t,this.rotate=e,this.rotateX=r,this.rotateY=o,this.rotateZ=h,this.skew=p,this.skewFromAxis=m,this.shear=l,this.scale=f,this.setTransform=c,this.translate=d,this.transform=u,this.applyToPoint=E,this.applyToX=x,this.applyToY=P,this.applyToZ=S,this.applyToPointArray=T,this.applyToTriplePoints=C,this.applyToPointStringified=k,this.toCSS=M,this.to2dCSS=w,this.clone=v,this.cloneFromProps=b,this.equals=g,this.inversePoints=A,this.inversePoint=_,this._t=this.transform,this.isIdentity=y,this._identity=!0,this._identityCalculated=!1,this.props=createTypedArray("float32",16),this.reset()}}();!function(o,h){var l,p=this,m=256,f=6,c="random",d=h.pow(m,f),u=h.pow(2,52),y=2*u,g=m-1;function v(t){var e,r=t.length,n=this,i=0,s=n.i=n.j=0,a=n.S=[];for(r||(t=[r++]);i<m;)a[i]=i++;for(i=0;i<m;i++)a[i]=a[s=g&s+t[i%r]+(e=a[i])],a[s]=e;n.g=function(t){for(var e,r=0,i=n.i,s=n.j,a=n.S;t--;)e=a[i=g&i+1],r=r*m+a[g&(a[i]=a[s=g&s+e])+(a[s]=e)];return n.i=i,n.j=s,r}}function b(t,e){return e.i=t.i,e.j=t.j,e.S=t.S.slice(),e}function E(t,e){for(var r,i=t+"",s=0;s<i.length;)e[g&s]=g&(r^=19*e[g&s])+i.charCodeAt(s++);return x(e)}function x(t){return String.fromCharCode.apply(0,t)}h["seed"+c]=function(t,e,r){var i=[],s=E(function t(e,r){var i,s=[],a=typeof e;if(r&&"object"==a)for(i in e)try{s.push(t(e[i],r-1))}catch(t){}return s.length?s:"string"==a?e:e+"\0"}((e=!0===e?{entropy:!0}:e||{}).entropy?[t,x(o)]:null===t?function(){try{if(l)return x(l.randomBytes(m));var t=new Uint8Array(m);return(p.crypto||p.msCrypto).getRandomValues(t),x(t)}catch(t){var e=p.navigator,r=e&&e.plugins;return[+new Date,p,r,p.screen,x(o)]}}():t,3),i),a=new v(i),n=function(){for(var t=a.g(f),e=d,r=0;t<u;)t=(t+r)*m,e*=m,r=a.g(1);for(;y<=t;)t/=2,e/=2,r>>>=1;return(t+r)/e};return n.int32=function(){return 0|a.g(4)},n.quick=function(){return a.g(4)/4294967296},n.double=n,E(x(a.S),o),(e.pass||r||function(t,e,r,i){return i&&(i.S&&b(i,a),t.state=function(){return b(a,{})}),r?(h[c]=t,e):t})(n,s,"global"in e?e.global:this==h,e.state)},E(h.random(),o)}([],BMMath);var BezierFactory=function(){var t={getBezierEasing:function(t,e,r,i,s){var a=s||("bez_"+t+"_"+e+"_"+r+"_"+i).replace(/\./g,"p");if(o[a])return o[a];var n=new h([t,e,r,i]);return o[a]=n}},o={};var l=11,p=1/(l-1),e="function"==typeof Float32Array;function i(t,e){return 1-3*e+3*t}function s(t,e){return 3*e-6*t}function a(t){return 3*t}function m(t,e,r){return((i(e,r)*t+s(e,r))*t+a(e))*t}function f(t,e,r){return 3*i(e,r)*t*t+2*s(e,r)*t+a(e)}function h(t){this._p=t,this._mSampleValues=e?new Float32Array(l):new Array(l),this._precomputed=!1,this.get=this.get.bind(this)}return h.prototype={get:function(t){var e=this._p[0],r=this._p[1],i=this._p[2],s=this._p[3];return this._precomputed||this._precompute(),e===r&&i===s?t:0===t?0:1===t?1:m(this._getTForX(t),r,s)},_precompute:function(){var t=this._p[0],e=this._p[1],r=this._p[2],i=this._p[3];this._precomputed=!0,t===e&&r===i||this._calcSampleValues()},_calcSampleValues:function(){for(var t=this._p[0],e=this._p[2],r=0;r<l;++r)this._mSampleValues[r]=m(r*p,t,e)},_getTForX:function(t){for(var e=this._p[0],r=this._p[2],i=this._mSampleValues,s=0,a=1,n=l-1;a!==n&&i[a]<=t;++a)s+=p;var o=s+(t-i[--a])/(i[a+1]-i[a])*p,h=f(o,e,r);return.001<=h?function(t,e,r,i){for(var s=0;s<4;++s){var a=f(e,r,i);if(0===a)return e;e-=(m(e,r,i)-t)/a}return e}(t,o,e,r):0===h?o:function(t,e,r,i,s){for(var a,n,o=0;0<(a=m(n=e+(r-e)/2,i,s)-t)?r=n:e=n,1e-7<Math.abs(a)&&++o<10;);return n}(t,s,s+p,e,r)}},t}();function extendPrototype(t,e){var r,i,s=t.length;for(r=0;r<s;r+=1)for(var a in i=t[r].prototype)i.hasOwnProperty(a)&&(e.prototype[a]=i[a])}function getDescriptor(t,e){return Object.getOwnPropertyDescriptor(t,e)}function createProxyFunction(t){function e(){}return e.prototype=t,e}function bezFunction(){Math;function y(t,e,r,i,s,a){var n=t*i+e*s+r*a-s*i-a*t-r*e;return-.001<n&&n<.001}var p=function(t,e,r,i){var s,a,n,o,h,l,p=defaultCurveSegments,m=0,f=[],c=[],d=bezier_length_pool.newElement();for(n=r.length,s=0;s<p;s+=1){for(h=s/(p-1),a=l=0;a<n;a+=1)o=bm_pow(1-h,3)*t[a]+3*bm_pow(1-h,2)*h*r[a]+3*(1-h)*bm_pow(h,2)*i[a]+bm_pow(h,3)*e[a],f[a]=o,null!==c[a]&&(l+=bm_pow(f[a]-c[a],2)),c[a]=f[a];l&&(m+=l=bm_sqrt(l)),d.percents[s]=h,d.lengths[s]=m}return d.addedLength=m,d};function g(t){this.segmentLength=0,this.points=new Array(t)}function v(t,e){this.partialLength=t,this.point=e}var b,t=(b={},function(t,e,r,i){var s=(t[0]+"_"+t[1]+"_"+e[0]+"_"+e[1]+"_"+r[0]+"_"+r[1]+"_"+i[0]+"_"+i[1]).replace(/\./g,"p");if(!b[s]){var a,n,o,h,l,p,m,f=defaultCurveSegments,c=0,d=null;2===t.length&&(t[0]!=e[0]||t[1]!=e[1])&&y(t[0],t[1],e[0],e[1],t[0]+r[0],t[1]+r[1])&&y(t[0],t[1],e[0],e[1],e[0]+i[0],e[1]+i[1])&&(f=2);var u=new g(f);for(o=r.length,a=0;a<f;a+=1){for(m=createSizedArray(o),l=a/(f-1),n=p=0;n<o;n+=1)h=bm_pow(1-l,3)*t[n]+3*bm_pow(1-l,2)*l*(t[n]+r[n])+3*(1-l)*bm_pow(l,2)*(e[n]+i[n])+bm_pow(l,3)*e[n],m[n]=h,null!==d&&(p+=bm_pow(m[n]-d[n],2));c+=p=bm_sqrt(p),u.points[a]=new v(p,m),d=m}u.segmentLength=c,b[s]=u}return b[s]});function M(t,e){var r=e.percents,i=e.lengths,s=r.length,a=bm_floor((s-1)*t),n=t*e.addedLength,o=0;if(a===s-1||0===a||n===i[a])return r[a];for(var h=i[a]>n?-1:1,l=!0;l;)if(i[a]<=n&&i[a+1]>n?(o=(n-i[a])/(i[a+1]-i[a]),l=!1):a+=h,a<0||s-1<=a){if(a===s-1)return r[a];l=!1}return r[a]+(r[a+1]-r[a])*o}var D=createTypedArray("float32",8);return{getSegmentsLength:function(t){var e,r=segments_length_pool.newElement(),i=t.c,s=t.v,a=t.o,n=t.i,o=t._length,h=r.lengths,l=0;for(e=0;e<o-1;e+=1)h[e]=p(s[e],s[e+1],a[e],n[e+1]),l+=h[e].addedLength;return i&&o&&(h[e]=p(s[e],s[0],a[e],n[0]),l+=h[e].addedLength),r.totalLength=l,r},getNewSegment:function(t,e,r,i,s,a,n){var o,h=M(s=s<0?0:1<s?1:s,n),l=M(a=1<a?1:a,n),p=t.length,m=1-h,f=1-l,c=m*m*m,d=h*m*m*3,u=h*h*m*3,y=h*h*h,g=m*m*f,v=h*m*f+m*h*f+m*m*l,b=h*h*f+m*h*l+h*m*l,E=h*h*l,x=m*f*f,P=h*f*f+m*l*f+m*f*l,S=h*l*f+m*l*l+h*f*l,_=h*l*l,A=f*f*f,C=l*f*f+f*l*f+f*f*l,T=l*l*f+f*l*l+l*f*l,k=l*l*l;for(o=0;o<p;o+=1)D[4*o]=Math.round(1e3*(c*t[o]+d*r[o]+u*i[o]+y*e[o]))/1e3,D[4*o+1]=Math.round(1e3*(g*t[o]+v*r[o]+b*i[o]+E*e[o]))/1e3,D[4*o+2]=Math.round(1e3*(x*t[o]+P*r[o]+S*i[o]+_*e[o]))/1e3,D[4*o+3]=Math.round(1e3*(A*t[o]+C*r[o]+T*i[o]+k*e[o]))/1e3;return D},getPointInSegment:function(t,e,r,i,s,a){var n=M(s,a),o=1-n;return[Math.round(1e3*(o*o*o*t[0]+(n*o*o+o*n*o+o*o*n)*r[0]+(n*n*o+o*n*n+n*o*n)*i[0]+n*n*n*e[0]))/1e3,Math.round(1e3*(o*o*o*t[1]+(n*o*o+o*n*o+o*o*n)*r[1]+(n*n*o+o*n*n+n*o*n)*i[1]+n*n*n*e[1]))/1e3]},buildBezierData:t,pointOnLine2D:y,pointOnLine3D:function(t,e,r,i,s,a,n,o,h){if(0===r&&0===a&&0===h)return y(t,e,i,s,n,o);var l,p=Math.sqrt(Math.pow(i-t,2)+Math.pow(s-e,2)+Math.pow(a-r,2)),m=Math.sqrt(Math.pow(n-t,2)+Math.pow(o-e,2)+Math.pow(h-r,2)),f=Math.sqrt(Math.pow(n-i,2)+Math.pow(o-s,2)+Math.pow(h-a,2));return-1e-4<(l=m<p?f<p?p-m-f:f-m-p:m<f?f-m-p:m-p-f)&&l<1e-4}}}!function(){for(var a=0,t=["ms","moz","webkit","o"],e=0;e<t.length&&!window.requestAnimationFrame;++e)window.requestAnimationFrame=window[t[e]+"RequestAnimationFrame"],window.cancelAnimationFrame=window[t[e]+"CancelAnimationFrame"]||window[t[e]+"CancelRequestAnimationFrame"];window.requestAnimationFrame||(window.requestAnimationFrame=function(t,e){var r=(new Date).getTime(),i=Math.max(0,16-(r-a)),s=setTimeout(function(){t(r+i)},i);return a=r+i,s}),window.cancelAnimationFrame||(window.cancelAnimationFrame=function(t){clearTimeout(t)})}();var bez=bezFunction();function dataFunctionManager(){function c(t,e){for(var r=0,i=e.length;r<i;){if(e[r].id===t)return e[r].layers.__used?JSON.parse(JSON.stringify(e[r].layers)):(e[r].layers.__used=!0,e[r].layers);r+=1}}function d(t){var e,r,i;for(e=t.length-1;0<=e;e-=1)if("sh"==t[e].ty){if(t[e].ks.k.i)u(t[e].ks.k);else for(i=t[e].ks.k.length,r=0;r<i;r+=1)t[e].ks.k[r].s&&u(t[e].ks.k[r].s[0]),t[e].ks.k[r].e&&u(t[e].ks.k[r].e[0]);!0}else"gr"==t[e].ty&&d(t[e].it)}function u(t){var e,r=t.i.length;for(e=0;e<r;e+=1)t.i[e][0]+=t.v[e][0],t.i[e][1]+=t.v[e][1],t.o[e][0]+=t.v[e][0],t.o[e][1]+=t.v[e][1]}function o(t,e){var r=e?e.split("."):[100,100,100];return t[0]>r[0]||!(r[0]>t[0])&&(t[1]>r[1]||!(r[1]>t[1])&&(t[2]>r[2]||!(r[2]>t[2])&&void 0))}var h,r=function(){var i=[4,4,14];function s(t){var e,r,i,s=t.length;for(e=0;e<s;e+=1)5===t[e].ty&&(r=t[e],void 0,i=r.t.d,r.t.d={k:[{s:i,t:0}]})}return function(t){if(o(i,t.v)&&(s(t.layers),t.assets)){var e,r=t.assets.length;for(e=0;e<r;e+=1)t.assets[e].layers&&s(t.assets[e].layers)}}}(),i=(h=[4,7,99],function(t){if(t.chars&&!o(h,t.v)){var e,r,i,s,a,n=t.chars.length;for(e=0;e<n;e+=1)if(t.chars[e].data&&t.chars[e].data.shapes)for(i=(a=t.chars[e].data.shapes[0].it).length,r=0;r<i;r+=1)(s=a[r].ks.k).__converted||(u(a[r].ks.k),s.__converted=!0)}}),s=function(){var i=[4,1,9];function a(t){var e,r,i,s=t.length;for(e=0;e<s;e+=1)if("gr"===t[e].ty)a(t[e].it);else if("fl"===t[e].ty||"st"===t[e].ty)if(t[e].c.k&&t[e].c.k[0].i)for(i=t[e].c.k.length,r=0;r<i;r+=1)t[e].c.k[r].s&&(t[e].c.k[r].s[0]/=255,t[e].c.k[r].s[1]/=255,t[e].c.k[r].s[2]/=255,t[e].c.k[r].s[3]/=255),t[e].c.k[r].e&&(t[e].c.k[r].e[0]/=255,t[e].c.k[r].e[1]/=255,t[e].c.k[r].e[2]/=255,t[e].c.k[r].e[3]/=255);else t[e].c.k[0]/=255,t[e].c.k[1]/=255,t[e].c.k[2]/=255,t[e].c.k[3]/=255}function s(t){var e,r=t.length;for(e=0;e<r;e+=1)4===t[e].ty&&a(t[e].shapes)}return function(t){if(o(i,t.v)&&(s(t.layers),t.assets)){var e,r=t.assets.length;for(e=0;e<r;e+=1)t.assets[e].layers&&s(t.assets[e].layers)}}}(),a=function(){var i=[4,4,18];function l(t){var e,r,i;for(e=t.length-1;0<=e;e-=1)if("sh"==t[e].ty){if(t[e].ks.k.i)t[e].ks.k.c=t[e].closed;else for(i=t[e].ks.k.length,r=0;r<i;r+=1)t[e].ks.k[r].s&&(t[e].ks.k[r].s[0].c=t[e].closed),t[e].ks.k[r].e&&(t[e].ks.k[r].e[0].c=t[e].closed);!0}else"gr"==t[e].ty&&l(t[e].it)}function s(t){var e,r,i,s,a,n,o=t.length;for(r=0;r<o;r+=1){if((e=t[r]).hasMask){var h=e.masksProperties;for(s=h.length,i=0;i<s;i+=1)if(h[i].pt.k.i)h[i].pt.k.c=h[i].cl;else for(n=h[i].pt.k.length,a=0;a<n;a+=1)h[i].pt.k[a].s&&(h[i].pt.k[a].s[0].c=h[i].cl),h[i].pt.k[a].e&&(h[i].pt.k[a].e[0].c=h[i].cl)}4===e.ty&&l(e.shapes)}}return function(t){if(o(i,t.v)&&(s(t.layers),t.assets)){var e,r=t.assets.length;for(e=0;e<r;e+=1)t.assets[e].layers&&s(t.assets[e].layers)}}}();var t={};return t.completeData=function(t,e){t.__complete||(s(t),r(t),i(t),a(t),function t(e,r,i){var s,a,n,o,h,l,p,m=e.length;for(a=0;a<m;a+=1)if("ks"in(s=e[a])&&!s.completed){if(s.completed=!0,s.tt&&(e[a-1].td=s.tt),s.hasMask){var f=s.masksProperties;for(o=f.length,n=0;n<o;n+=1)if(f[n].pt.k.i)u(f[n].pt.k);else for(l=f[n].pt.k.length,h=0;h<l;h+=1)f[n].pt.k[h].s&&u(f[n].pt.k[h].s[0]),f[n].pt.k[h].e&&u(f[n].pt.k[h].e[0])}0===s.ty?(s.layers=c(s.refId,r),t(s.layers,r,i)):4===s.ty?d(s.shapes):5==s.ty&&(0!==(p=s).t.a.length||"m"in p.t.p||(p.singleShape=!0))}}(t.layers,t.assets,e),t.__complete=!0)},t}var dataManager=dataFunctionManager(),FontManager=function(){var a={w:0,size:0,shapes:[]},t=[];function u(t,e){var r=createTag("span");r.style.fontFamily=e;var i=createTag("span");i.innerHTML="giItT1WQy@!-/#",r.style.position="absolute",r.style.left="-10000px",r.style.top="-10000px",r.style.fontSize="300px",r.style.fontVariant="normal",r.style.fontStyle="normal",r.style.fontWeight="normal",r.style.letterSpacing="0",r.appendChild(i),document.body.appendChild(r);var s=i.offsetWidth;return i.style.fontFamily=t+", "+e,{node:i,w:s,parent:r}}t=t.concat([2304,2305,2306,2307,2362,2363,2364,2364,2366,2367,2368,2369,2370,2371,2372,2373,2374,2375,2376,2377,2378,2379,2380,2381,2382,2383,2387,2388,2389,2390,2391,2402,2403]);var e=function(){this.fonts=[],this.chars=null,this.typekitLoaded=0,this.isLoaded=!1,this.initTime=Date.now()};return e.getCombinedCharacterCodes=function(){return t},e.prototype.addChars=function(t){if(t){this.chars||(this.chars=[]);var e,r,i,s=t.length,a=this.chars.length;for(e=0;e<s;e+=1){for(r=0,i=!1;r<a;)this.chars[r].style===t[e].style&&this.chars[r].fFamily===t[e].fFamily&&this.chars[r].ch===t[e].ch&&(i=!0),r+=1;i||(this.chars.push(t[e]),a+=1)}}},e.prototype.addFonts=function(t,e){if(t){if(this.chars)return this.isLoaded=!0,void(this.fonts=t.list);var r,i,s,a,n=t.list,o=n.length,h=o;for(r=0;r<o;r+=1){var l,p,m=!0;if(n[r].loaded=!1,n[r].monoCase=u(n[r].fFamily,"monospace"),n[r].sansCase=u(n[r].fFamily,"sans-serif"),n[r].fPath){if("p"===n[r].fOrigin||3===n[r].origin){if(0<(l=document.querySelectorAll('style[f-forigin="p"][f-family="'+n[r].fFamily+'"], style[f-origin="3"][f-family="'+n[r].fFamily+'"]')).length&&(m=!1),m){var f=createTag("style");f.setAttribute("f-forigin",n[r].fOrigin),f.setAttribute("f-origin",n[r].origin),f.setAttribute("f-family",n[r].fFamily),f.type="text/css",f.innerHTML="@font-face {font-family: "+n[r].fFamily+"; font-style: normal; src: url('"+n[r].fPath+"');}",e.appendChild(f)}}else if("g"===n[r].fOrigin||1===n[r].origin){for(l=document.querySelectorAll('link[f-forigin="g"], link[f-origin="1"]'),p=0;p<l.length;p++)-1!==l[p].href.indexOf(n[r].fPath)&&(m=!1);if(m){var c=createTag("link");c.setAttribute("f-forigin",n[r].fOrigin),c.setAttribute("f-origin",n[r].origin),c.type="text/css",c.rel="stylesheet",c.href=n[r].fPath,document.body.appendChild(c)}}else if("t"===n[r].fOrigin||2===n[r].origin){for(l=document.querySelectorAll('script[f-forigin="t"], script[f-origin="2"]'),p=0;p<l.length;p++)n[r].fPath===l[p].src&&(m=!1);if(m){var d=createTag("link");d.setAttribute("f-forigin",n[r].fOrigin),d.setAttribute("f-origin",n[r].origin),d.setAttribute("rel","stylesheet"),d.setAttribute("href",n[r].fPath),e.appendChild(d)}}}else n[r].loaded=!0,h-=1;n[r].helper=(i=e,s=n[r],a=void 0,(a=createNS("text")).style.fontSize="100px",a.setAttribute("font-family",s.fFamily),a.setAttribute("font-style",s.fStyle),a.setAttribute("font-weight",s.fWeight),a.textContent="1",s.fClass?(a.style.fontFamily="inherit",a.setAttribute("class",s.fClass)):a.style.fontFamily=s.fFamily,i.appendChild(a),createTag("canvas").getContext("2d").font=s.fWeight+" "+s.fStyle+" 100px "+s.fFamily,a),n[r].cache={},this.fonts.push(n[r])}0===h?this.isLoaded=!0:setTimeout(this.checkLoadedFonts.bind(this),100)}else this.isLoaded=!0},e.prototype.getCharData=function(t,e,r){for(var i=0,s=this.chars.length;i<s;){if(this.chars[i].ch===t&&this.chars[i].style===e&&this.chars[i].fFamily===r)return this.chars[i];i+=1}return("string"==typeof t&&13!==t.charCodeAt(0)||!t)&&console&&console.warn&&console.warn("Missing character from exported characters list: ",t,e,r),a},e.prototype.getFontByName=function(t){for(var e=0,r=this.fonts.length;e<r;){if(this.fonts[e].fName===t)return this.fonts[e];e+=1}return this.fonts[0]},e.prototype.measureText=function(t,e,r){var i=this.getFontByName(e),s=t.charCodeAt(0);if(!i.cache[s+1]){var a=i.helper;if(" "===t){a.textContent="|"+t+"|";var n=a.getComputedTextLength();a.textContent="||";var o=a.getComputedTextLength();i.cache[s+1]=(n-o)/100}else a.textContent=t,i.cache[s+1]=a.getComputedTextLength()/100}return i.cache[s+1]*r},e.prototype.checkLoadedFonts=function(){var t,e,r,i=this.fonts.length,s=i;for(t=0;t<i;t+=1)this.fonts[t].loaded?s-=1:"n"===this.fonts[t].fOrigin||0===this.fonts[t].origin?this.fonts[t].loaded=!0:(e=this.fonts[t].monoCase.node,r=this.fonts[t].monoCase.w,e.offsetWidth!==r?(s-=1,this.fonts[t].loaded=!0):(e=this.fonts[t].sansCase.node,r=this.fonts[t].sansCase.w,e.offsetWidth!==r&&(s-=1,this.fonts[t].loaded=!0)),this.fonts[t].loaded&&(this.fonts[t].sansCase.parent.parentNode.removeChild(this.fonts[t].sansCase.parent),this.fonts[t].monoCase.parent.parentNode.removeChild(this.fonts[t].monoCase.parent)));0!==s&&Date.now()-this.initTime<5e3?setTimeout(this.checkLoadedFonts.bind(this),20):setTimeout(function(){this.isLoaded=!0}.bind(this),0)},e.prototype.loaded=function(){return this.isLoaded},e}(),PropertyFactory=function(){var m=initialDefaultFrame,s=Math.abs;function f(t,e){var r,i=this.offsetTime;"multidimensional"===this.propType&&(r=createTypedArray("float32",this.pv.length));for(var s,a,n,o,h,l,p,m,f=e.lastIndex,c=f,d=this.keyframes.length-1,u=!0;u;){if(s=this.keyframes[c],a=this.keyframes[c+1],c===d-1&&t>=a.t-i){s.h&&(s=a),f=0;break}if(a.t-i>t){f=c;break}c<d-1?c+=1:(f=0,u=!1)}var y,g,v,b,E,x,P,S,_,A,C=a.t-i,T=s.t-i;if(s.to){s.bezierData||(s.bezierData=bez.buildBezierData(s.s,a.s||s.e,s.to,s.ti));var k=s.bezierData;if(C<=t||t<T){var M=C<=t?k.points.length-1:0;for(o=k.points[M].point.length,n=0;n<o;n+=1)r[n]=k.points[M].point[n]}else{s.__fnct?m=s.__fnct:(m=BezierFactory.getBezierEasing(s.o.x,s.o.y,s.i.x,s.i.y,s.n).get,s.__fnct=m),h=m((t-T)/(C-T));var D,w=k.segmentLength*h,F=e.lastFrame<t&&e._lastKeyframeIndex===c?e._lastAddedLength:0;for(p=e.lastFrame<t&&e._lastKeyframeIndex===c?e._lastPoint:0,u=!0,l=k.points.length;u;){if(F+=k.points[p].partialLength,0===w||0===h||p===k.points.length-1){for(o=k.points[p].point.length,n=0;n<o;n+=1)r[n]=k.points[p].point[n];break}if(F<=w&&w<F+k.points[p+1].partialLength){for(D=(w-F)/k.points[p+1].partialLength,o=k.points[p].point.length,n=0;n<o;n+=1)r[n]=k.points[p].point[n]+(k.points[p+1].point[n]-k.points[p].point[n])*D;break}p<l-1?p+=1:u=!1}e._lastPoint=p,e._lastAddedLength=F-k.points[p].partialLength,e._lastKeyframeIndex=c}}else{var I,V,R,B,L;if(d=s.s.length,y=a.s||s.e,this.sh&&1!==s.h)if(C<=t)r[0]=y[0],r[1]=y[1],r[2]=y[2];else if(t<=T)r[0]=s.s[0],r[1]=s.s[1],r[2]=s.s[2];else{var G=N(s.s),z=N(y);g=r,v=function(t,e,r){var i,s,a,n,o,h=[],l=t[0],p=t[1],m=t[2],f=t[3],c=e[0],d=e[1],u=e[2],y=e[3];(s=l*c+p*d+m*u+f*y)<0&&(s=-s,c=-c,d=-d,u=-u,y=-y);o=1e-6<1-s?(i=Math.acos(s),a=Math.sin(i),n=Math.sin((1-r)*i)/a,Math.sin(r*i)/a):(n=1-r,r);return h[0]=n*l+o*c,h[1]=n*p+o*d,h[2]=n*m+o*u,h[3]=n*f+o*y,h}(G,z,(t-T)/(C-T)),b=v[0],E=v[1],x=v[2],P=v[3],S=Math.atan2(2*E*P-2*b*x,1-2*E*E-2*x*x),_=Math.asin(2*b*E+2*x*P),A=Math.atan2(2*b*P-2*E*x,1-2*b*b-2*x*x),g[0]=S/degToRads,g[1]=_/degToRads,g[2]=A/degToRads}else for(c=0;c<d;c+=1)1!==s.h&&(h=C<=t?1:t<T?0:(s.o.x.constructor===Array?(s.__fnct||(s.__fnct=[]),s.__fnct[c]?m=s.__fnct[c]:(I=void 0===s.o.x[c]?s.o.x[0]:s.o.x[c],V=void 0===s.o.y[c]?s.o.y[0]:s.o.y[c],R=void 0===s.i.x[c]?s.i.x[0]:s.i.x[c],B=void 0===s.i.y[c]?s.i.y[0]:s.i.y[c],m=BezierFactory.getBezierEasing(I,V,R,B).get,s.__fnct[c]=m)):s.__fnct?m=s.__fnct:(I=s.o.x,V=s.o.y,R=s.i.x,B=s.i.y,m=BezierFactory.getBezierEasing(I,V,R,B).get,s.__fnct=m),m((t-T)/(C-T)))),y=a.s||s.e,L=1===s.h?s.s[c]:s.s[c]+(y[c]-s.s[c])*h,"multidimensional"===this.propType?r[c]=L:r=L}return e.lastIndex=f,r}function N(t){var e=t[0]*degToRads,r=t[1]*degToRads,i=t[2]*degToRads,s=Math.cos(e/2),a=Math.cos(r/2),n=Math.cos(i/2),o=Math.sin(e/2),h=Math.sin(r/2),l=Math.sin(i/2);return[o*h*n+s*a*l,o*a*n+s*h*l,s*h*n-o*a*l,s*a*n-o*h*l]}function c(){var t=this.comp.renderedFrame-this.offsetTime,e=this.keyframes[0].t-this.offsetTime,r=this.keyframes[this.keyframes.length-1].t-this.offsetTime;if(!(t===this._caching.lastFrame||this._caching.lastFrame!==m&&(this._caching.lastFrame>=r&&r<=t||this._caching.lastFrame<e&&t<e))){this._caching.lastFrame>=t&&(this._caching._lastKeyframeIndex=-1,this._caching.lastIndex=0);var i=this.interpolateValue(t,this._caching);this.pv=i}return this._caching.lastFrame=t,this.pv}function d(t){var e;if("unidimensional"===this.propType)e=t*this.mult,1e-5<s(this.v-e)&&(this.v=e,this._mdf=!0);else for(var r=0,i=this.v.length;r<i;)e=t[r]*this.mult,1e-5<s(this.v[r]-e)&&(this.v[r]=e,this._mdf=!0),r+=1}function u(){if(this.elem.globalData.frameId!==this.frameId&&this.effectsSequence.length)if(this.lock)this.setVValue(this.pv);else{this.lock=!0,this._mdf=this._isFirstFrame;var t,e=this.effectsSequence.length,r=this.kf?this.pv:this.data.k;for(t=0;t<e;t+=1)r=this.effectsSequence[t](r);this.setVValue(r),this._isFirstFrame=!1,this.lock=!1,this.frameId=this.elem.globalData.frameId}}function y(t){this.effectsSequence.push(t),this.container.addDynamicProperty(this)}function n(t,e,r,i){this.propType="unidimensional",this.mult=r||1,this.data=e,this.v=r?e.k*r:e.k,this.pv=e.k,this._mdf=!1,this.elem=t,this.container=i,this.comp=t.comp,this.k=!1,this.kf=!1,this.vel=0,this.effectsSequence=[],this._isFirstFrame=!0,this.getValue=u,this.setVValue=d,this.addEffect=y}function o(t,e,r,i){this.propType="multidimensional",this.mult=r||1,this.data=e,this._mdf=!1,this.elem=t,this.container=i,this.comp=t.comp,this.k=!1,this.kf=!1,this.frameId=-1;var s,a=e.k.length;this.v=createTypedArray("float32",a),this.pv=createTypedArray("float32",a);createTypedArray("float32",a);for(this.vel=createTypedArray("float32",a),s=0;s<a;s+=1)this.v[s]=e.k[s]*this.mult,this.pv[s]=e.k[s];this._isFirstFrame=!0,this.effectsSequence=[],this.getValue=u,this.setVValue=d,this.addEffect=y}function h(t,e,r,i){this.propType="unidimensional",this.keyframes=e.k,this.offsetTime=t.data.st,this.frameId=-1,this._caching={lastFrame:m,lastIndex:0,value:0,_lastKeyframeIndex:-1},this.k=!0,this.kf=!0,this.data=e,this.mult=r||1,this.elem=t,this.container=i,this.comp=t.comp,this.v=m,this.pv=m,this._isFirstFrame=!0,this.getValue=u,this.setVValue=d,this.interpolateValue=f,this.effectsSequence=[c.bind(this)],this.addEffect=y}function l(t,e,r,i){this.propType="multidimensional";var s,a,n,o,h,l=e.k.length;for(s=0;s<l-1;s+=1)e.k[s].to&&e.k[s].s&&e.k[s].e&&(a=e.k[s].s,n=e.k[s].e,o=e.k[s].to,h=e.k[s].ti,(2===a.length&&(a[0]!==n[0]||a[1]!==n[1])&&bez.pointOnLine2D(a[0],a[1],n[0],n[1],a[0]+o[0],a[1]+o[1])&&bez.pointOnLine2D(a[0],a[1],n[0],n[1],n[0]+h[0],n[1]+h[1])||3===a.length&&(a[0]!==n[0]||a[1]!==n[1]||a[2]!==n[2])&&bez.pointOnLine3D(a[0],a[1],a[2],n[0],n[1],n[2],a[0]+o[0],a[1]+o[1],a[2]+o[2])&&bez.pointOnLine3D(a[0],a[1],a[2],n[0],n[1],n[2],n[0]+h[0],n[1]+h[1],n[2]+h[2]))&&(e.k[s].to=null,e.k[s].ti=null),a[0]===n[0]&&a[1]===n[1]&&0===o[0]&&0===o[1]&&0===h[0]&&0===h[1]&&(2===a.length||a[2]===n[2]&&0===o[2]&&0===h[2])&&(e.k[s].to=null,e.k[s].ti=null));this.effectsSequence=[c.bind(this)],this.keyframes=e.k,this.offsetTime=t.data.st,this.k=!0,this.kf=!0,this._isFirstFrame=!0,this.mult=r||1,this.elem=t,this.container=i,this.comp=t.comp,this.getValue=u,this.setVValue=d,this.interpolateValue=f,this.frameId=-1;var p=e.k[0].s.length;for(this.v=createTypedArray("float32",p),this.pv=createTypedArray("float32",p),s=0;s<p;s+=1)this.v[s]=m,this.pv[s]=m;this._caching={lastFrame:m,lastIndex:0,value:createTypedArray("float32",p)},this.addEffect=y}return{getProp:function(t,e,r,i,s){var a;if(e.k.length)if("number"==typeof e.k[0])a=new o(t,e,i,s);else switch(r){case 0:a=new h(t,e,i,s);break;case 1:a=new l(t,e,i,s)}else a=new n(t,e,i,s);return a.effectsSequence.length&&s.addDynamicProperty(a),a}}}(),TransformPropertyFactory=function(){function i(t,e,r){if(this.elem=t,this.frameId=-1,this.propType="transform",this.data=e,this.v=new Matrix,this.pre=new Matrix,this.appliedTransformations=0,this.initDynamicPropertyContainer(r||t),e.p&&e.p.s?(this.px=PropertyFactory.getProp(t,e.p.x,0,0,this),this.py=PropertyFactory.getProp(t,e.p.y,0,0,this),e.p.z&&(this.pz=PropertyFactory.getProp(t,e.p.z,0,0,this))):this.p=PropertyFactory.getProp(t,e.p||{k:[0,0,0]},1,0,this),e.rx){if(this.rx=PropertyFactory.getProp(t,e.rx,0,degToRads,this),this.ry=PropertyFactory.getProp(t,e.ry,0,degToRads,this),this.rz=PropertyFactory.getProp(t,e.rz,0,degToRads,this),e.or.k[0].ti){var i,s=e.or.k.length;for(i=0;i<s;i+=1)e.or.k[i].to=e.or.k[i].ti=null}this.or=PropertyFactory.getProp(t,e.or,1,degToRads,this),this.or.sh=!0}else this.r=PropertyFactory.getProp(t,e.r||{k:0},0,degToRads,this);e.sk&&(this.sk=PropertyFactory.getProp(t,e.sk,0,degToRads,this),this.sa=PropertyFactory.getProp(t,e.sa,0,degToRads,this)),this.a=PropertyFactory.getProp(t,e.a||{k:[0,0,0]},1,0,this),this.s=PropertyFactory.getProp(t,e.s||{k:[100,100,100]},1,.01,this),e.o?this.o=PropertyFactory.getProp(t,e.o,0,.01,t):this.o={_mdf:!1,v:1},this._isDirty=!0,this.dynamicProperties.length||this.getValue(!0)}return i.prototype={applyToMatrix:function(t){var e=this._mdf;this.iterateDynamicProperties(),this._mdf=this._mdf||e,this.a&&t.translate(-this.a.v[0],-this.a.v[1],this.a.v[2]),this.s&&t.scale(this.s.v[0],this.s.v[1],this.s.v[2]),this.sk&&t.skewFromAxis(-this.sk.v,this.sa.v),this.r?t.rotate(-this.r.v):t.rotateZ(-this.rz.v).rotateY(this.ry.v).rotateX(this.rx.v).rotateZ(-this.or.v[2]).rotateY(this.or.v[1]).rotateX(this.or.v[0]),this.data.p.s?this.data.p.z?t.translate(this.px.v,this.py.v,-this.pz.v):t.translate(this.px.v,this.py.v,0):t.translate(this.p.v[0],this.p.v[1],-this.p.v[2])},getValue:function(t){if(this.elem.globalData.frameId!==this.frameId){if(this._isDirty&&(this.precalculateMatrix(),this._isDirty=!1),this.iterateDynamicProperties(),this._mdf||t){if(this.v.cloneFromProps(this.pre.props),this.appliedTransformations<1&&this.v.translate(-this.a.v[0],-this.a.v[1],this.a.v[2]),this.appliedTransformations<2&&this.v.scale(this.s.v[0],this.s.v[1],this.s.v[2]),this.sk&&this.appliedTransformations<3&&this.v.skewFromAxis(-this.sk.v,this.sa.v),this.r&&this.appliedTransformations<4?this.v.rotate(-this.r.v):!this.r&&this.appliedTransformations<4&&this.v.rotateZ(-this.rz.v).rotateY(this.ry.v).rotateX(this.rx.v).rotateZ(-this.or.v[2]).rotateY(this.or.v[1]).rotateX(this.or.v[0]),this.autoOriented){var e,r,i=this.elem.globalData.frameRate;if(this.p&&this.p.keyframes&&this.p.getValueAtTime)r=this.p._caching.lastFrame+this.p.offsetTime<=this.p.keyframes[0].t?(e=this.p.getValueAtTime((this.p.keyframes[0].t+.01)/i,0),this.p.getValueAtTime(this.p.keyframes[0].t/i,0)):this.p._caching.lastFrame+this.p.offsetTime>=this.p.keyframes[this.p.keyframes.length-1].t?(e=this.p.getValueAtTime(this.p.keyframes[this.p.keyframes.length-1].t/i,0),this.p.getValueAtTime((this.p.keyframes[this.p.keyframes.length-1].t-.05)/i,0)):(e=this.p.pv,this.p.getValueAtTime((this.p._caching.lastFrame+this.p.offsetTime-.01)/i,this.p.offsetTime));else if(this.px&&this.px.keyframes&&this.py.keyframes&&this.px.getValueAtTime&&this.py.getValueAtTime){e=[],r=[];var s=this.px,a=this.py;s._caching.lastFrame+s.offsetTime<=s.keyframes[0].t?(e[0]=s.getValueAtTime((s.keyframes[0].t+.01)/i,0),e[1]=a.getValueAtTime((a.keyframes[0].t+.01)/i,0),r[0]=s.getValueAtTime(s.keyframes[0].t/i,0),r[1]=a.getValueAtTime(a.keyframes[0].t/i,0)):s._caching.lastFrame+s.offsetTime>=s.keyframes[s.keyframes.length-1].t?(e[0]=s.getValueAtTime(s.keyframes[s.keyframes.length-1].t/i,0),e[1]=a.getValueAtTime(a.keyframes[a.keyframes.length-1].t/i,0),r[0]=s.getValueAtTime((s.keyframes[s.keyframes.length-1].t-.01)/i,0),r[1]=a.getValueAtTime((a.keyframes[a.keyframes.length-1].t-.01)/i,0)):(e=[s.pv,a.pv],r[0]=s.getValueAtTime((s._caching.lastFrame+s.offsetTime-.01)/i,s.offsetTime),r[1]=a.getValueAtTime((a._caching.lastFrame+a.offsetTime-.01)/i,a.offsetTime))}this.v.rotate(-Math.atan2(e[1]-r[1],e[0]-r[0]))}this.data.p&&this.data.p.s?this.data.p.z?this.v.translate(this.px.v,this.py.v,-this.pz.v):this.v.translate(this.px.v,this.py.v,0):this.v.translate(this.p.v[0],this.p.v[1],-this.p.v[2])}this.frameId=this.elem.globalData.frameId}},precalculateMatrix:function(){if(!this.a.k&&(this.pre.translate(-this.a.v[0],-this.a.v[1],this.a.v[2]),this.appliedTransformations=1,!this.s.effectsSequence.length)){if(this.pre.scale(this.s.v[0],this.s.v[1],this.s.v[2]),this.appliedTransformations=2,this.sk){if(this.sk.effectsSequence.length||this.sa.effectsSequence.length)return;this.pre.skewFromAxis(-this.sk.v,this.sa.v),this.appliedTransformations=3}if(this.r){if(this.r.effectsSequence.length)return;this.pre.rotate(-this.r.v),this.appliedTransformations=4}else this.rz.effectsSequence.length||this.ry.effectsSequence.length||this.rx.effectsSequence.length||this.or.effectsSequence.length||(this.pre.rotateZ(-this.rz.v).rotateY(this.ry.v).rotateX(this.rx.v).rotateZ(-this.or.v[2]).rotateY(this.or.v[1]).rotateX(this.or.v[0]),this.appliedTransformations=4)}},autoOrient:function(){}},extendPrototype([DynamicPropertyContainer],i),i.prototype.addDynamicProperty=function(t){this._addDynamicProperty(t),this.elem.addDynamicProperty(t),this._isDirty=!0},i.prototype._addDynamicProperty=DynamicPropertyContainer.prototype.addDynamicProperty,{getTransformProperty:function(t,e,r){return new i(t,e,r)}}}();function ShapePath(){this.c=!1,this._length=0,this._maxLength=8,this.v=createSizedArray(this._maxLength),this.o=createSizedArray(this._maxLength),this.i=createSizedArray(this._maxLength)}ShapePath.prototype.setPathData=function(t,e){this.c=t,this.setLength(e);for(var r=0;r<e;)this.v[r]=point_pool.newElement(),this.o[r]=point_pool.newElement(),this.i[r]=point_pool.newElement(),r+=1},ShapePath.prototype.setLength=function(t){for(;this._maxLength<t;)this.doubleArrayLength();this._length=t},ShapePath.prototype.doubleArrayLength=function(){this.v=this.v.concat(createSizedArray(this._maxLength)),this.i=this.i.concat(createSizedArray(this._maxLength)),this.o=this.o.concat(createSizedArray(this._maxLength)),this._maxLength*=2},ShapePath.prototype.setXYAt=function(t,e,r,i,s){var a;switch(this._length=Math.max(this._length,i+1),this._length>=this._maxLength&&this.doubleArrayLength(),r){case"v":a=this.v;break;case"i":a=this.i;break;case"o":a=this.o}(!a[i]||a[i]&&!s)&&(a[i]=point_pool.newElement()),a[i][0]=t,a[i][1]=e},ShapePath.prototype.setTripleAt=function(t,e,r,i,s,a,n,o){this.setXYAt(t,e,"v",n,o),this.setXYAt(r,i,"o",n,o),this.setXYAt(s,a,"i",n,o)},ShapePath.prototype.reverse=function(){var t=new ShapePath;t.setPathData(this.c,this._length);var e=this.v,r=this.o,i=this.i,s=0;this.c&&(t.setTripleAt(e[0][0],e[0][1],i[0][0],i[0][1],r[0][0],r[0][1],0,!1),s=1);var a,n=this._length-1,o=this._length;for(a=s;a<o;a+=1)t.setTripleAt(e[n][0],e[n][1],i[n][0],i[n][1],r[n][0],r[n][1],a,!1),n-=1;return t};var ShapePropertyFactory=function(){var s=-999999;function t(t,e,r){var i,s,a,n,o,h,l,p,m,f=r.lastIndex,c=this.keyframes;if(t<c[0].t-this.offsetTime)i=c[0].s[0],a=!0,f=0;else if(t>=c[c.length-1].t-this.offsetTime)i=c[c.length-1].s?c[c.length-1].s[0]:c[c.length-2].e[0],a=!0;else{for(var d,u,y=f,g=c.length-1,v=!0;v&&(d=c[y],!((u=c[y+1]).t-this.offsetTime>t));)y<g-1?y+=1:v=!1;if(f=y,!(a=1===d.h)){if(t>=u.t-this.offsetTime)p=1;else if(t<d.t-this.offsetTime)p=0;else{var b;d.__fnct?b=d.__fnct:(b=BezierFactory.getBezierEasing(d.o.x,d.o.y,d.i.x,d.i.y).get,d.__fnct=b),p=b((t-(d.t-this.offsetTime))/(u.t-this.offsetTime-(d.t-this.offsetTime)))}s=u.s?u.s[0]:d.e[0]}i=d.s[0]}for(h=e._length,l=i.i[0].length,r.lastIndex=f,n=0;n<h;n+=1)for(o=0;o<l;o+=1)m=a?i.i[n][o]:i.i[n][o]+(s.i[n][o]-i.i[n][o])*p,e.i[n][o]=m,m=a?i.o[n][o]:i.o[n][o]+(s.o[n][o]-i.o[n][o])*p,e.o[n][o]=m,m=a?i.v[n][o]:i.v[n][o]+(s.v[n][o]-i.v[n][o])*p,e.v[n][o]=m}function a(){this.paths=this.localShapeCollection}function e(t){(function(t,e){if(t._length!==e._length||t.c!==e.c)return!1;var r,i=t._length;for(r=0;r<i;r+=1)if(t.v[r][0]!==e.v[r][0]||t.v[r][1]!==e.v[r][1]||t.o[r][0]!==e.o[r][0]||t.o[r][1]!==e.o[r][1]||t.i[r][0]!==e.i[r][0]||t.i[r][1]!==e.i[r][1])return!1;return!0})(this.v,t)||(this.v=shape_pool.clone(t),this.localShapeCollection.releaseShapes(),this.localShapeCollection.addShape(this.v),this._mdf=!0,this.paths=this.localShapeCollection)}function r(){if(this.elem.globalData.frameId!==this.frameId)if(this.effectsSequence.length)if(this.lock)this.setVValue(this.pv);else{this.lock=!0,this._mdf=!1;var t,e=this.kf?this.pv:this.data.ks?this.data.ks.k:this.data.pt.k,r=this.effectsSequence.length;for(t=0;t<r;t+=1)e=this.effectsSequence[t](e);this.setVValue(e),this.lock=!1,this.frameId=this.elem.globalData.frameId}else this._mdf=!1}function n(t,e,r){this.propType="shape",this.comp=t.comp,this.container=t,this.elem=t,this.data=e,this.k=!1,this.kf=!1,this._mdf=!1;var i=3===r?e.pt.k:e.ks.k;this.v=shape_pool.clone(i),this.pv=shape_pool.clone(this.v),this.localShapeCollection=shapeCollection_pool.newShapeCollection(),this.paths=this.localShapeCollection,this.paths.addShape(this.v),this.reset=a,this.effectsSequence=[]}function i(t){this.effectsSequence.push(t),this.container.addDynamicProperty(this)}function o(t,e,r){this.propType="shape",this.comp=t.comp,this.elem=t,this.container=t,this.offsetTime=t.data.st,this.keyframes=3===r?e.pt.k:e.ks.k,this.k=!0,this.kf=!0;var i=this.keyframes[0].s[0].i.length;this.keyframes[0].s[0].i[0].length;this.v=shape_pool.newElement(),this.v.setPathData(this.keyframes[0].s[0].c,i),this.pv=shape_pool.clone(this.v),this.localShapeCollection=shapeCollection_pool.newShapeCollection(),this.paths=this.localShapeCollection,this.paths.addShape(this.v),this.lastFrame=s,this.reset=a,this._caching={lastFrame:s,lastIndex:0},this.effectsSequence=[function(){var t=this.comp.renderedFrame-this.offsetTime,e=this.keyframes[0].t-this.offsetTime,r=this.keyframes[this.keyframes.length-1].t-this.offsetTime,i=this._caching.lastFrame;return i!==s&&(i<e&&t<e||r<i&&r<t)||(this._caching.lastIndex=i<t?this._caching.lastIndex:0,this.interpolateShape(t,this.pv,this._caching)),this._caching.lastFrame=t,this.pv}.bind(this)]}n.prototype.interpolateShape=t,n.prototype.getValue=r,n.prototype.setVValue=e,n.prototype.addEffect=i,o.prototype.getValue=r,o.prototype.interpolateShape=t,o.prototype.setVValue=e,o.prototype.addEffect=i;var h=function(){var n=roundCorner;function t(t,e){this.v=shape_pool.newElement(),this.v.setPathData(!0,4),this.localShapeCollection=shapeCollection_pool.newShapeCollection(),this.paths=this.localShapeCollection,this.localShapeCollection.addShape(this.v),this.d=e.d,this.elem=t,this.comp=t.comp,this.frameId=-1,this.initDynamicPropertyContainer(t),this.p=PropertyFactory.getProp(t,e.p,1,0,this),this.s=PropertyFactory.getProp(t,e.s,1,0,this),this.dynamicProperties.length?this.k=!0:(this.k=!1,this.convertEllToPath())}return t.prototype={reset:a,getValue:function(){this.elem.globalData.frameId!==this.frameId&&(this.frameId=this.elem.globalData.frameId,this.iterateDynamicProperties(),this._mdf&&this.convertEllToPath())},convertEllToPath:function(){var t=this.p.v[0],e=this.p.v[1],r=this.s.v[0]/2,i=this.s.v[1]/2,s=3!==this.d,a=this.v;a.v[0][0]=t,a.v[0][1]=e-i,a.v[1][0]=s?t+r:t-r,a.v[1][1]=e,a.v[2][0]=t,a.v[2][1]=e+i,a.v[3][0]=s?t-r:t+r,a.v[3][1]=e,a.i[0][0]=s?t-r*n:t+r*n,a.i[0][1]=e-i,a.i[1][0]=s?t+r:t-r,a.i[1][1]=e-i*n,a.i[2][0]=s?t+r*n:t-r*n,a.i[2][1]=e+i,a.i[3][0]=s?t-r:t+r,a.i[3][1]=e+i*n,a.o[0][0]=s?t+r*n:t-r*n,a.o[0][1]=e-i,a.o[1][0]=s?t+r:t-r,a.o[1][1]=e+i*n,a.o[2][0]=s?t-r*n:t+r*n,a.o[2][1]=e+i,a.o[3][0]=s?t-r:t+r,a.o[3][1]=e-i*n}},extendPrototype([DynamicPropertyContainer],t),t}(),l=function(){function t(t,e){this.v=shape_pool.newElement(),this.v.setPathData(!0,0),this.elem=t,this.comp=t.comp,this.data=e,this.frameId=-1,this.d=e.d,this.initDynamicPropertyContainer(t),1===e.sy?(this.ir=PropertyFactory.getProp(t,e.ir,0,0,this),this.is=PropertyFactory.getProp(t,e.is,0,.01,this),this.convertToPath=this.convertStarToPath):this.convertToPath=this.convertPolygonToPath,this.pt=PropertyFactory.getProp(t,e.pt,0,0,this),this.p=PropertyFactory.getProp(t,e.p,1,0,this),this.r=PropertyFactory.getProp(t,e.r,0,degToRads,this),this.or=PropertyFactory.getProp(t,e.or,0,0,this),this.os=PropertyFactory.getProp(t,e.os,0,.01,this),this.localShapeCollection=shapeCollection_pool.newShapeCollection(),this.localShapeCollection.addShape(this.v),this.paths=this.localShapeCollection,this.dynamicProperties.length?this.k=!0:(this.k=!1,this.convertToPath())}return t.prototype={reset:a,getValue:function(){this.elem.globalData.frameId!==this.frameId&&(this.frameId=this.elem.globalData.frameId,this.iterateDynamicProperties(),this._mdf&&this.convertToPath())},convertStarToPath:function(){var t,e,r,i,s=2*Math.floor(this.pt.v),a=2*Math.PI/s,n=!0,o=this.or.v,h=this.ir.v,l=this.os.v,p=this.is.v,m=2*Math.PI*o/(2*s),f=2*Math.PI*h/(2*s),c=-Math.PI/2;c+=this.r.v;var d=3===this.data.d?-1:1;for(t=this.v._length=0;t<s;t+=1){r=n?l:p,i=n?m:f;var u=(e=n?o:h)*Math.cos(c),y=e*Math.sin(c),g=0===u&&0===y?0:y/Math.sqrt(u*u+y*y),v=0===u&&0===y?0:-u/Math.sqrt(u*u+y*y);u+=+this.p.v[0],y+=+this.p.v[1],this.v.setTripleAt(u,y,u-g*i*r*d,y-v*i*r*d,u+g*i*r*d,y+v*i*r*d,t,!0),n=!n,c+=a*d}},convertPolygonToPath:function(){var t,e=Math.floor(this.pt.v),r=2*Math.PI/e,i=this.or.v,s=this.os.v,a=2*Math.PI*i/(4*e),n=-Math.PI/2,o=3===this.data.d?-1:1;for(n+=this.r.v,t=this.v._length=0;t<e;t+=1){var h=i*Math.cos(n),l=i*Math.sin(n),p=0===h&&0===l?0:l/Math.sqrt(h*h+l*l),m=0===h&&0===l?0:-h/Math.sqrt(h*h+l*l);h+=+this.p.v[0],l+=+this.p.v[1],this.v.setTripleAt(h,l,h-p*a*s*o,l-m*a*s*o,h+p*a*s*o,l+m*a*s*o,t,!0),n+=r*o}this.paths.length=0,this.paths[0]=this.v}},extendPrototype([DynamicPropertyContainer],t),t}(),p=function(){function t(t,e){this.v=shape_pool.newElement(),this.v.c=!0,this.localShapeCollection=shapeCollection_pool.newShapeCollection(),this.localShapeCollection.addShape(this.v),this.paths=this.localShapeCollection,this.elem=t,this.comp=t.comp,this.frameId=-1,this.d=e.d,this.initDynamicPropertyContainer(t),this.p=PropertyFactory.getProp(t,e.p,1,0,this),this.s=PropertyFactory.getProp(t,e.s,1,0,this),this.r=PropertyFactory.getProp(t,e.r,0,0,this),this.dynamicProperties.length?this.k=!0:(this.k=!1,this.convertRectToPath())}return t.prototype={convertRectToPath:function(){var t=this.p.v[0],e=this.p.v[1],r=this.s.v[0]/2,i=this.s.v[1]/2,s=bm_min(r,i,this.r.v),a=s*(1-roundCorner);this.v._length=0,2===this.d||1===this.d?(this.v.setTripleAt(t+r,e-i+s,t+r,e-i+s,t+r,e-i+a,0,!0),this.v.setTripleAt(t+r,e+i-s,t+r,e+i-a,t+r,e+i-s,1,!0),0!==s?(this.v.setTripleAt(t+r-s,e+i,t+r-s,e+i,t+r-a,e+i,2,!0),this.v.setTripleAt(t-r+s,e+i,t-r+a,e+i,t-r+s,e+i,3,!0),this.v.setTripleAt(t-r,e+i-s,t-r,e+i-s,t-r,e+i-a,4,!0),this.v.setTripleAt(t-r,e-i+s,t-r,e-i+a,t-r,e-i+s,5,!0),this.v.setTripleAt(t-r+s,e-i,t-r+s,e-i,t-r+a,e-i,6,!0),this.v.setTripleAt(t+r-s,e-i,t+r-a,e-i,t+r-s,e-i,7,!0)):(this.v.setTripleAt(t-r,e+i,t-r+a,e+i,t-r,e+i,2),this.v.setTripleAt(t-r,e-i,t-r,e-i+a,t-r,e-i,3))):(this.v.setTripleAt(t+r,e-i+s,t+r,e-i+a,t+r,e-i+s,0,!0),0!==s?(this.v.setTripleAt(t+r-s,e-i,t+r-s,e-i,t+r-a,e-i,1,!0),this.v.setTripleAt(t-r+s,e-i,t-r+a,e-i,t-r+s,e-i,2,!0),this.v.setTripleAt(t-r,e-i+s,t-r,e-i+s,t-r,e-i+a,3,!0),this.v.setTripleAt(t-r,e+i-s,t-r,e+i-a,t-r,e+i-s,4,!0),this.v.setTripleAt(t-r+s,e+i,t-r+s,e+i,t-r+a,e+i,5,!0),this.v.setTripleAt(t+r-s,e+i,t+r-a,e+i,t+r-s,e+i,6,!0),this.v.setTripleAt(t+r,e+i-s,t+r,e+i-s,t+r,e+i-a,7,!0)):(this.v.setTripleAt(t-r,e-i,t-r+a,e-i,t-r,e-i,1,!0),this.v.setTripleAt(t-r,e+i,t-r,e+i-a,t-r,e+i,2,!0),this.v.setTripleAt(t+r,e+i,t+r-a,e+i,t+r,e+i,3,!0)))},getValue:function(t){this.elem.globalData.frameId!==this.frameId&&(this.frameId=this.elem.globalData.frameId,this.iterateDynamicProperties(),this._mdf&&this.convertRectToPath())},reset:a},extendPrototype([DynamicPropertyContainer],t),t}();var m={getShapeProp:function(t,e,r){var i;return 3===r||4===r?i=(3===r?e.pt:e.ks).k.length?new o(t,e,r):new n(t,e,r):5===r?i=new p(t,e):6===r?i=new h(t,e):7===r&&(i=new l(t,e)),i.k&&t.addDynamicProperty(i),i},getConstructorFunction:function(){return n},getKeyframedConstructorFunction:function(){return o}};return m}(),ShapeModifiers=(Yr={},Zr={},Yr.registerModifier=function(t,e){Zr[t]||(Zr[t]=e)},Yr.getModifier=function(t,e,r){return new Zr[t](e,r)},Yr),Yr,Zr;function ShapeModifier(){}function TrimModifier(){}function RoundCornersModifier(){}function RepeaterModifier(){}function ShapeCollection(){this._length=0,this._maxLength=4,this.shapes=createSizedArray(this._maxLength)}function DashProperty(t,e,r,i){this.elem=t,this.frameId=-1,this.dataProps=createSizedArray(e.length),this.renderer=r,this.k=!1,this.dashStr="",this.dashArray=createTypedArray("float32",e.length?e.length-1:0),this.dashoffset=createTypedArray("float32",1),this.initDynamicPropertyContainer(i);var s,a,n=e.length||0;for(s=0;s<n;s+=1)a=PropertyFactory.getProp(t,e[s].v,0,0,this),this.k=a.k||this.k,this.dataProps[s]={n:e[s].n,p:a};this.k||this.getValue(!0),this._isAnimated=this.k}function GradientProperty(t,e,r){this.data=e,this.c=createTypedArray("uint8c",4*e.p);var i=e.k.k[0].s?e.k.k[0].s.length-4*e.p:e.k.k.length-4*e.p;this.o=createTypedArray("float32",i),this._cmdf=!1,this._omdf=!1,this._collapsable=this.checkCollapsable(),this._hasOpacity=i,this.initDynamicPropertyContainer(r),this.prop=PropertyFactory.getProp(t,e.k,1,null,this),this.k=this.prop.k,this.getValue(!0)}ShapeModifier.prototype.initModifierProperties=function(){},ShapeModifier.prototype.addShapeToModifier=function(){},ShapeModifier.prototype.addShape=function(t){if(!this.closed){t.sh.container.addDynamicProperty(t.sh);var e={shape:t.sh,data:t,localShapeCollection:shapeCollection_pool.newShapeCollection()};this.shapes.push(e),this.addShapeToModifier(e),this._isAnimated&&t.setAsAnimated()}},ShapeModifier.prototype.init=function(t,e){this.shapes=[],this.elem=t,this.initDynamicPropertyContainer(t),this.initModifierProperties(t,e),this.frameId=initialDefaultFrame,this.closed=!1,this.k=!1,this.dynamicProperties.length?this.k=!0:this.getValue(!0)},ShapeModifier.prototype.processKeys=function(){this.elem.globalData.frameId!==this.frameId&&(this.frameId=this.elem.globalData.frameId,this.iterateDynamicProperties())},extendPrototype([DynamicPropertyContainer],ShapeModifier),extendPrototype([ShapeModifier],TrimModifier),TrimModifier.prototype.initModifierProperties=function(t,e){this.s=PropertyFactory.getProp(t,e.s,0,.01,this),this.e=PropertyFactory.getProp(t,e.e,0,.01,this),this.o=PropertyFactory.getProp(t,e.o,0,0,this),this.sValue=0,this.eValue=0,this.getValue=this.processKeys,this.m=e.m,this._isAnimated=!!this.s.effectsSequence.length||!!this.e.effectsSequence.length||!!this.o.effectsSequence.length},TrimModifier.prototype.addShapeToModifier=function(t){t.pathsData=[]},TrimModifier.prototype.calculateShapeEdges=function(t,e,r,i,s){var a=[];e<=1?a.push({s:t,e:e}):1<=t?a.push({s:t-1,e:e-1}):(a.push({s:t,e:1}),a.push({s:0,e:e-1}));var n,o,h=[],l=a.length;for(n=0;n<l;n+=1){var p,m;if((o=a[n]).e*s<i||o.s*s>i+r);else p=o.s*s<=i?0:(o.s*s-i)/r,m=o.e*s>=i+r?1:(o.e*s-i)/r,h.push([p,m])}return h.length||h.push([0,0]),h},TrimModifier.prototype.releasePathsData=function(t){var e,r=t.length;for(e=0;e<r;e+=1)segments_length_pool.release(t[e]);return t.length=0,t},TrimModifier.prototype.processShapes=function(t){var e,r,i;if(this._mdf||t){var s=this.o.v%360/360;if(s<0&&(s+=1),e=(1<this.s.v?1:this.s.v<0?0:this.s.v)+s,(r=(1<this.e.v?1:this.e.v<0?0:this.e.v)+s)<e){var a=e;e=r,r=a}e=1e-4*Math.round(1e4*e),r=1e-4*Math.round(1e4*r),this.sValue=e,this.eValue=r}else e=this.sValue,r=this.eValue;var n,o,h,l,p,m,f=this.shapes.length,c=0;if(r===e)for(n=0;n<f;n+=1)this.shapes[n].localShapeCollection.releaseShapes(),this.shapes[n].shape._mdf=!0,this.shapes[n].shape.paths=this.shapes[n].localShapeCollection;else if(1===r&&0===e||0===r&&1===e){if(this._mdf)for(n=0;n<f;n+=1)this.shapes[n].pathsData.length=0,this.shapes[n].shape._mdf=!0}else{var d,u,y=[];for(n=0;n<f;n+=1)if((d=this.shapes[n]).shape._mdf||this._mdf||t||2===this.m){if(h=(i=d.shape.paths)._length,m=0,!d.shape._mdf&&d.pathsData.length)m=d.totalShapeLength;else{for(l=this.releasePathsData(d.pathsData),o=0;o<h;o+=1)p=bez.getSegmentsLength(i.shapes[o]),l.push(p),m+=p.totalLength;d.totalShapeLength=m,d.pathsData=l}c+=m,d.shape._mdf=!0}else d.shape.paths=d.localShapeCollection;var g,v=e,b=r,E=0;for(n=f-1;0<=n;n-=1)if((d=this.shapes[n]).shape._mdf){for((u=d.localShapeCollection).releaseShapes(),2===this.m&&1<f?(g=this.calculateShapeEdges(e,r,d.totalShapeLength,E,c),E+=d.totalShapeLength):g=[[v,b]],h=g.length,o=0;o<h;o+=1){v=g[o][0],b=g[o][1],y.length=0,b<=1?y.push({s:d.totalShapeLength*v,e:d.totalShapeLength*b}):1<=v?y.push({s:d.totalShapeLength*(v-1),e:d.totalShapeLength*(b-1)}):(y.push({s:d.totalShapeLength*v,e:d.totalShapeLength}),y.push({s:0,e:d.totalShapeLength*(b-1)}));var x=this.addShapes(d,y[0]);if(y[0].s!==y[0].e){if(1<y.length)if(d.shape.paths.shapes[d.shape.paths._length-1].c){var P=x.pop();this.addPaths(x,u),x=this.addShapes(d,y[1],P)}else this.addPaths(x,u),x=this.addShapes(d,y[1]);this.addPaths(x,u)}}d.shape.paths=u}}},TrimModifier.prototype.addPaths=function(t,e){var r,i=t.length;for(r=0;r<i;r+=1)e.addShape(t[r])},TrimModifier.prototype.addSegment=function(t,e,r,i,s,a,n){s.setXYAt(e[0],e[1],"o",a),s.setXYAt(r[0],r[1],"i",a+1),n&&s.setXYAt(t[0],t[1],"v",a),s.setXYAt(i[0],i[1],"v",a+1)},TrimModifier.prototype.addSegmentFromArray=function(t,e,r,i){e.setXYAt(t[1],t[5],"o",r),e.setXYAt(t[2],t[6],"i",r+1),i&&e.setXYAt(t[0],t[4],"v",r),e.setXYAt(t[3],t[7],"v",r+1)},TrimModifier.prototype.addShapes=function(t,e,r){var i,s,a,n,o,h,l,p,m=t.pathsData,f=t.shape.paths.shapes,c=t.shape.paths._length,d=0,u=[],y=!0;for(p=r?(o=r._length,r._length):(r=shape_pool.newElement(),o=0),u.push(r),i=0;i<c;i+=1){for(h=m[i].lengths,r.c=f[i].c,a=f[i].c?h.length:h.length+1,s=1;s<a;s+=1)if(d+(n=h[s-1]).addedLength<e.s)d+=n.addedLength,r.c=!1;else{if(d>e.e){r.c=!1;break}e.s<=d&&e.e>=d+n.addedLength?(this.addSegment(f[i].v[s-1],f[i].o[s-1],f[i].i[s],f[i].v[s],r,o,y),y=!1):(l=bez.getNewSegment(f[i].v[s-1],f[i].v[s],f[i].o[s-1],f[i].i[s],(e.s-d)/n.addedLength,(e.e-d)/n.addedLength,h[s-1]),this.addSegmentFromArray(l,r,o,y),y=!1,r.c=!1),d+=n.addedLength,o+=1}if(f[i].c&&h.length){if(n=h[s-1],d<=e.e){var g=h[s-1].addedLength;e.s<=d&&e.e>=d+g?(this.addSegment(f[i].v[s-1],f[i].o[s-1],f[i].i[0],f[i].v[0],r,o,y),y=!1):(l=bez.getNewSegment(f[i].v[s-1],f[i].v[0],f[i].o[s-1],f[i].i[0],(e.s-d)/g,(e.e-d)/g,h[s-1]),this.addSegmentFromArray(l,r,o,y),y=!1,r.c=!1)}else r.c=!1;d+=n.addedLength,o+=1}if(r._length&&(r.setXYAt(r.v[p][0],r.v[p][1],"i",p),r.setXYAt(r.v[r._length-1][0],r.v[r._length-1][1],"o",r._length-1)),d>e.e)break;i<c-1&&(r=shape_pool.newElement(),y=!0,u.push(r),o=0)}return u},ShapeModifiers.registerModifier("tm",TrimModifier),extendPrototype([ShapeModifier],RoundCornersModifier),RoundCornersModifier.prototype.initModifierProperties=function(t,e){this.getValue=this.processKeys,this.rd=PropertyFactory.getProp(t,e.r,0,null,this),this._isAnimated=!!this.rd.effectsSequence.length},RoundCornersModifier.prototype.processPath=function(t,e){var r=shape_pool.newElement();r.c=t.c;var i,s,a,n,o,h,l,p,m,f,c,d,u,y=t._length,g=0;for(i=0;i<y;i+=1)s=t.v[i],n=t.o[i],a=t.i[i],s[0]===n[0]&&s[1]===n[1]&&s[0]===a[0]&&s[1]===a[1]?0!==i&&i!==y-1||t.c?(o=0===i?t.v[y-1]:t.v[i-1],l=(h=Math.sqrt(Math.pow(s[0]-o[0],2)+Math.pow(s[1]-o[1],2)))?Math.min(h/2,e)/h:0,p=d=s[0]+(o[0]-s[0])*l,m=u=s[1]-(s[1]-o[1])*l,f=p-(p-s[0])*roundCorner,c=m-(m-s[1])*roundCorner,r.setTripleAt(p,m,f,c,d,u,g),g+=1,o=i===y-1?t.v[0]:t.v[i+1],l=(h=Math.sqrt(Math.pow(s[0]-o[0],2)+Math.pow(s[1]-o[1],2)))?Math.min(h/2,e)/h:0,p=f=s[0]+(o[0]-s[0])*l,m=c=s[1]+(o[1]-s[1])*l,d=p-(p-s[0])*roundCorner,u=m-(m-s[1])*roundCorner,r.setTripleAt(p,m,f,c,d,u,g)):r.setTripleAt(s[0],s[1],n[0],n[1],a[0],a[1],g):r.setTripleAt(t.v[i][0],t.v[i][1],t.o[i][0],t.o[i][1],t.i[i][0],t.i[i][1],g),g+=1;return r},RoundCornersModifier.prototype.processShapes=function(t){var e,r,i,s,a,n,o=this.shapes.length,h=this.rd.v;if(0!==h)for(r=0;r<o;r+=1){if((a=this.shapes[r]).shape.paths,n=a.localShapeCollection,a.shape._mdf||this._mdf||t)for(n.releaseShapes(),a.shape._mdf=!0,e=a.shape.paths.shapes,s=a.shape.paths._length,i=0;i<s;i+=1)n.addShape(this.processPath(e[i],h));a.shape.paths=a.localShapeCollection}this.dynamicProperties.length||(this._mdf=!1)},ShapeModifiers.registerModifier("rd",RoundCornersModifier),extendPrototype([ShapeModifier],RepeaterModifier),RepeaterModifier.prototype.initModifierProperties=function(t,e){this.getValue=this.processKeys,this.c=PropertyFactory.getProp(t,e.c,0,null,this),this.o=PropertyFactory.getProp(t,e.o,0,null,this),this.tr=TransformPropertyFactory.getTransformProperty(t,e.tr,this),this.so=PropertyFactory.getProp(t,e.tr.so,0,.01,this),this.eo=PropertyFactory.getProp(t,e.tr.eo,0,.01,this),this.data=e,this.dynamicProperties.length||this.getValue(!0),this._isAnimated=!!this.dynamicProperties.length,this.pMatrix=new Matrix,this.rMatrix=new Matrix,this.sMatrix=new Matrix,this.tMatrix=new Matrix,this.matrix=new Matrix},RepeaterModifier.prototype.applyTransforms=function(t,e,r,i,s,a){var n=a?-1:1,o=i.s.v[0]+(1-i.s.v[0])*(1-s),h=i.s.v[1]+(1-i.s.v[1])*(1-s);t.translate(i.p.v[0]*n*s,i.p.v[1]*n*s,i.p.v[2]),e.translate(-i.a.v[0],-i.a.v[1],i.a.v[2]),e.rotate(-i.r.v*n*s),e.translate(i.a.v[0],i.a.v[1],i.a.v[2]),r.translate(-i.a.v[0],-i.a.v[1],i.a.v[2]),r.scale(a?1/o:o,a?1/h:h),r.translate(i.a.v[0],i.a.v[1],i.a.v[2])},RepeaterModifier.prototype.init=function(t,e,r,i){this.elem=t,this.arr=e,this.pos=r,this.elemsData=i,this._currentCopies=0,this._elements=[],this._groups=[],this.frameId=-1,this.initDynamicPropertyContainer(t),this.initModifierProperties(t,e[r]);for(;0<r;)r-=1,this._elements.unshift(e[r]),1;this.dynamicProperties.length?this.k=!0:this.getValue(!0)},RepeaterModifier.prototype.resetElements=function(t){var e,r=t.length;for(e=0;e<r;e+=1)t[e]._processed=!1,"gr"===t[e].ty&&this.resetElements(t[e].it)},RepeaterModifier.prototype.cloneElements=function(t){t.length;var e=JSON.parse(JSON.stringify(t));return this.resetElements(e),e},RepeaterModifier.prototype.changeGroupRender=function(t,e){var r,i=t.length;for(r=0;r<i;r+=1)t[r]._render=e,"gr"===t[r].ty&&this.changeGroupRender(t[r].it,e)},RepeaterModifier.prototype.processShapes=function(t){var e,r,i,s,a;if(this._mdf||t){var n,o=Math.ceil(this.c.v);if(this._groups.length<o){for(;this._groups.length<o;){var h={it:this.cloneElements(this._elements),ty:"gr"};h.it.push({a:{a:0,ix:1,k:[0,0]},nm:"Transform",o:{a:0,ix:7,k:100},p:{a:0,ix:2,k:[0,0]},r:{a:1,ix:6,k:[{s:0,e:0,t:0},{s:0,e:0,t:1}]},s:{a:0,ix:3,k:[100,100]},sa:{a:0,ix:5,k:0},sk:{a:0,ix:4,k:0},ty:"tr"}),this.arr.splice(0,0,h),this._groups.splice(0,0,h),this._currentCopies+=1}this.elem.reloadShapes()}for(i=a=0;i<=this._groups.length-1;i+=1)n=a<o,this._groups[i]._render=n,this.changeGroupRender(this._groups[i].it,n),a+=1;this._currentCopies=o;var l=this.o.v,p=l%1,m=0<l?Math.floor(l):Math.ceil(l),f=(this.tr.v.props,this.pMatrix.props),c=this.rMatrix.props,d=this.sMatrix.props;this.pMatrix.reset(),this.rMatrix.reset(),this.sMatrix.reset(),this.tMatrix.reset(),this.matrix.reset();var u,y,g=0;if(0<l){for(;g<m;)this.applyTransforms(this.pMatrix,this.rMatrix,this.sMatrix,this.tr,1,!1),g+=1;p&&(this.applyTransforms(this.pMatrix,this.rMatrix,this.sMatrix,this.tr,p,!1),g+=p)}else if(l<0){for(;m<g;)this.applyTransforms(this.pMatrix,this.rMatrix,this.sMatrix,this.tr,1,!0),g-=1;p&&(this.applyTransforms(this.pMatrix,this.rMatrix,this.sMatrix,this.tr,-p,!0),g-=p)}for(i=1===this.data.m?0:this._currentCopies-1,s=1===this.data.m?1:-1,a=this._currentCopies;a;){if(y=(r=(e=this.elemsData[i].it)[e.length-1].transform.mProps.v.props).length,e[e.length-1].transform.mProps._mdf=!0,e[e.length-1].transform.op._mdf=!0,e[e.length-1].transform.op.v=this.so.v+(this.eo.v-this.so.v)*(i/(this._currentCopies-1)),0!==g){for((0!==i&&1===s||i!==this._currentCopies-1&&-1===s)&&this.applyTransforms(this.pMatrix,this.rMatrix,this.sMatrix,this.tr,1,!1),this.matrix.transform(c[0],c[1],c[2],c[3],c[4],c[5],c[6],c[7],c[8],c[9],c[10],c[11],c[12],c[13],c[14],c[15]),this.matrix.transform(d[0],d[1],d[2],d[3],d[4],d[5],d[6],d[7],d[8],d[9],d[10],d[11],d[12],d[13],d[14],d[15]),this.matrix.transform(f[0],f[1],f[2],f[3],f[4],f[5],f[6],f[7],f[8],f[9],f[10],f[11],f[12],f[13],f[14],f[15]),u=0;u<y;u+=1)r[u]=this.matrix.props[u];this.matrix.reset()}else for(this.matrix.reset(),u=0;u<y;u+=1)r[u]=this.matrix.props[u];g+=1,a-=1,i+=s}}else for(a=this._currentCopies,i=0,s=1;a;)r=(e=this.elemsData[i].it)[e.length-1].transform.mProps.v.props,e[e.length-1].transform.mProps._mdf=!1,e[e.length-1].transform.op._mdf=!1,a-=1,i+=s},RepeaterModifier.prototype.addShape=function(){},ShapeModifiers.registerModifier("rp",RepeaterModifier),ShapeCollection.prototype.addShape=function(t){this._length===this._maxLength&&(this.shapes=this.shapes.concat(createSizedArray(this._maxLength)),this._maxLength*=2),this.shapes[this._length]=t,this._length+=1},ShapeCollection.prototype.releaseShapes=function(){var t;for(t=0;t<this._length;t+=1)shape_pool.release(this.shapes[t]);this._length=0},DashProperty.prototype.getValue=function(t){if((this.elem.globalData.frameId!==this.frameId||t)&&(this.frameId=this.elem.globalData.frameId,this.iterateDynamicProperties(),this._mdf=this._mdf||t,this._mdf)){var e=0,r=this.dataProps.length;for("svg"===this.renderer&&(this.dashStr=""),e=0;e<r;e+=1)"o"!=this.dataProps[e].n?"svg"===this.renderer?this.dashStr+=" "+this.dataProps[e].p.v:this.dashArray[e]=this.dataProps[e].p.v:this.dashoffset[0]=this.dataProps[e].p.v}},extendPrototype([DynamicPropertyContainer],DashProperty),GradientProperty.prototype.comparePoints=function(t,e){for(var r=0,i=this.o.length/2;r<i;){if(.01<Math.abs(t[4*r]-t[4*e+2*r]))return!1;r+=1}return!0},GradientProperty.prototype.checkCollapsable=function(){if(this.o.length/2!=this.c.length/4)return!1;if(this.data.k.k[0].s)for(var t=0,e=this.data.k.k.length;t<e;){if(!this.comparePoints(this.data.k.k[t].s,this.data.p))return!1;t+=1}else if(!this.comparePoints(this.data.k.k,this.data.p))return!1;return!0},GradientProperty.prototype.getValue=function(t){if(this.prop.getValue(),this._mdf=!1,this._cmdf=!1,this._omdf=!1,this.prop._mdf||t){var e,r,i,s=4*this.data.p;for(e=0;e<s;e+=1)r=e%4==0?100:255,i=Math.round(this.prop.v[e]*r),this.c[e]!==i&&(this.c[e]=i,this._cmdf=!t);if(this.o.length)for(s=this.prop.v.length,e=4*this.data.p;e<s;e+=1)r=e%2==0?100:1,i=e%2==0?Math.round(100*this.prop.v[e]):this.prop.v[e],this.o[e-4*this.data.p]!==i&&(this.o[e-4*this.data.p]=i,this._omdf=!t);this._mdf=!t}},extendPrototype([DynamicPropertyContainer],GradientProperty);var buildShapeString=function(t,e,r,i){if(0===e)return"";var s,a=t.o,n=t.i,o=t.v,h=" M"+i.applyToPointStringified(o[0][0],o[0][1]);for(s=1;s<e;s+=1)h+=" C"+i.applyToPointStringified(a[s-1][0],a[s-1][1])+" "+i.applyToPointStringified(n[s][0],n[s][1])+" "+i.applyToPointStringified(o[s][0],o[s][1]);return r&&e&&(h+=" C"+i.applyToPointStringified(a[s-1][0],a[s-1][1])+" "+i.applyToPointStringified(n[0][0],n[0][1])+" "+i.applyToPointStringified(o[0][0],o[0][1]),h+="z"),h},ImagePreloader=function(){var s=function(){var t=createTag("canvas");t.width=1,t.height=1;var e=t.getContext("2d");return e.fillStyle="rgba(0,0,0,0)",e.fillRect(0,0,1,1),t}();function t(){this.loadedAssets+=1,this.loadedAssets===this.totalImages&&this.imagesLoadedCb&&this.imagesLoadedCb(null)}function e(t){var e=function(t,e,r){var i="";if(t.e)i=t.p;else if(e){var s=t.p;-1!==s.indexOf("images/")&&(s=s.split("/")[1]),i=e+s}else i=r,i+=t.u?t.u:"",i+=t.p;return i}(t,this.assetsPath,this.path),r=createTag("img");r.crossOrigin="anonymous",r.addEventListener("load",this._imageLoaded.bind(this),!1),r.addEventListener("error",function(){i.img=s,this._imageLoaded()}.bind(this),!1),r.src=e;var i={img:r,assetData:t};return i}function r(t,e){this.imagesLoadedCb=e;var r,i=t.length;for(r=0;r<i;r+=1)t[r].layers||(this.totalImages+=1,this.images.push(this._createImageData(t[r])))}function i(t){this.path=t||""}function a(t){this.assetsPath=t||""}function n(t){for(var e=0,r=this.images.length;e<r;){if(this.images[e].assetData===t)return this.images[e].img;e+=1}}function o(){this.imagesLoadedCb=null,this.images.length=0}function h(){return this.totalImages===this.loadedAssets}return function(){this.loadAssets=r,this.setAssetsPath=a,this.setPath=i,this.loaded=h,this.destroy=o,this.getImage=n,this._createImageData=e,this._imageLoaded=t,this.assetsPath="",this.path="",this.totalImages=0,this.loadedAssets=0,this.imagesLoadedCb=null,this.images=[]}}(),featureSupport=(qw={maskType:!0},(/MSIE 10/i.test(navigator.userAgent)||/MSIE 9/i.test(navigator.userAgent)||/rv:11.0/i.test(navigator.userAgent)||/Edge\/\d./i.test(navigator.userAgent))&&(qw.maskType=!1),qw),qw,filtersFactory=(rw={},rw.createFilter=function(t){var e=createNS("filter");return e.setAttribute("id",t),e.setAttribute("filterUnits","objectBoundingBox"),e.setAttribute("x","0%"),e.setAttribute("y","0%"),e.setAttribute("width","100%"),e.setAttribute("height","100%"),e},rw.createAlphaToLuminanceFilter=function(){var t=createNS("feColorMatrix");return t.setAttribute("type","matrix"),t.setAttribute("color-interpolation-filters","sRGB"),t.setAttribute("values","0 0 0 1 0  0 0 0 1 0  0 0 0 1 0  0 0 0 1 1"),t},rw),rw,assetLoader=function(){function a(t){return t.response&&"object"==typeof t.response?t.response:t.response&&"string"==typeof t.response?JSON.parse(t.response):t.responseText?JSON.parse(t.responseText):void 0}return{load:function(t,e,r){var i,s=new XMLHttpRequest;s.open("GET",t,!0);try{s.responseType="json"}catch(t){}s.send(),s.onreadystatechange=function(){if(4==s.readyState)if(200==s.status)i=a(s),e(i);else try{i=a(s),e(i)}catch(t){r&&r(t)}}}}}();function TextAnimatorProperty(t,e,r){this._isFirstFrame=!0,this._hasMaskedPath=!1,this._frameId=-1,this._textData=t,this._renderType=e,this._elem=r,this._animatorsData=createSizedArray(this._textData.a.length),this._pathData={},this._moreOptions={alignment:{}},this.renderedLetters=[],this.lettersChangedFlag=!1,this.initDynamicPropertyContainer(r)}function TextAnimatorDataProperty(t,e,r){var i={propType:!1},s=PropertyFactory.getProp,a=e.a;this.a={r:a.r?s(t,a.r,0,degToRads,r):i,rx:a.rx?s(t,a.rx,0,degToRads,r):i,ry:a.ry?s(t,a.ry,0,degToRads,r):i,sk:a.sk?s(t,a.sk,0,degToRads,r):i,sa:a.sa?s(t,a.sa,0,degToRads,r):i,s:a.s?s(t,a.s,1,.01,r):i,a:a.a?s(t,a.a,1,0,r):i,o:a.o?s(t,a.o,0,.01,r):i,p:a.p?s(t,a.p,1,0,r):i,sw:a.sw?s(t,a.sw,0,0,r):i,sc:a.sc?s(t,a.sc,1,0,r):i,fc:a.fc?s(t,a.fc,1,0,r):i,fh:a.fh?s(t,a.fh,0,0,r):i,fs:a.fs?s(t,a.fs,0,.01,r):i,fb:a.fb?s(t,a.fb,0,.01,r):i,t:a.t?s(t,a.t,0,0,r):i},this.s=TextSelectorProp.getTextSelectorProp(t,e.s,r),this.s.t=e.s.t}function LetterProps(t,e,r,i,s,a){this.o=t,this.sw=e,this.sc=r,this.fc=i,this.m=s,this.p=a,this._mdf={o:!0,sw:!!e,sc:!!r,fc:!!i,m:!0,p:!0}}function TextProperty(t,e){this._frameId=initialDefaultFrame,this.pv="",this.v="",this.kf=!1,this._isFirstFrame=!0,this._mdf=!1,this.data=e,this.elem=t,this.comp=this.elem.comp,this.keysIndex=0,this.canResize=!1,this.minimumFontSize=1,this.effectsSequence=[],this.currentData={ascent:0,boxWidth:this.defaultBoxWidth,f:"",fStyle:"",fWeight:"",fc:"",j:"",justifyOffset:"",l:[],lh:0,lineWidths:[],ls:"",of:"",s:"",sc:"",sw:0,t:0,tr:0,sz:0,ps:null,fillColorAnim:!1,strokeColorAnim:!1,strokeWidthAnim:!1,yOffset:0,finalSize:0,finalText:[],finalLineHeight:0,__complete:!1},this.copyData(this.currentData,this.data.d.k[0].s),this.searchProperty()||this.completeTextData(this.currentData)}TextAnimatorProperty.prototype.searchProperties=function(){var t,e,r=this._textData.a.length,i=PropertyFactory.getProp;for(t=0;t<r;t+=1)e=this._textData.a[t],this._animatorsData[t]=new TextAnimatorDataProperty(this._elem,e,this);this._textData.p&&"m"in this._textData.p?(this._pathData={f:i(this._elem,this._textData.p.f,0,0,this),l:i(this._elem,this._textData.p.l,0,0,this),r:this._textData.p.r,m:this._elem.maskManager.getMaskProperty(this._textData.p.m)},this._hasMaskedPath=!0):this._hasMaskedPath=!1,this._moreOptions.alignment=i(this._elem,this._textData.m.a,1,0,this)},TextAnimatorProperty.prototype.getMeasures=function(t,e){if(this.lettersChangedFlag=e,this._mdf||this._isFirstFrame||e||this._hasMaskedPath&&this._pathData.m._mdf){this._isFirstFrame=!1;var r,i,s,a,n,o,h,l,p,m,f,c,d,u,y,g,v,b,E,x=this._moreOptions.alignment.v,P=this._animatorsData,S=this._textData,_=this.mHelper,A=this._renderType,C=this.renderedLetters.length,T=(this.data,t.l);if(this._hasMaskedPath){if(E=this._pathData.m,!this._pathData.n||this._pathData._mdf){var k,M=E.v;for(this._pathData.r&&(M=M.reverse()),n={tLength:0,segments:[]},a=M._length-1,s=g=0;s<a;s+=1)k=bez.buildBezierData(M.v[s],M.v[s+1],[M.o[s][0]-M.v[s][0],M.o[s][1]-M.v[s][1]],[M.i[s+1][0]-M.v[s+1][0],M.i[s+1][1]-M.v[s+1][1]]),n.tLength+=k.segmentLength,n.segments.push(k),g+=k.segmentLength;s=a,E.v.c&&(k=bez.buildBezierData(M.v[s],M.v[0],[M.o[s][0]-M.v[s][0],M.o[s][1]-M.v[s][1]],[M.i[0][0]-M.v[0][0],M.i[0][1]-M.v[0][1]]),n.tLength+=k.segmentLength,n.segments.push(k),g+=k.segmentLength),this._pathData.pi=n}if(n=this._pathData.pi,o=this._pathData.f.v,m=1,p=!(l=f=0),u=n.segments,o<0&&E.v.c)for(n.tLength<Math.abs(o)&&(o=-Math.abs(o)%n.tLength),m=(d=u[f=u.length-1].points).length-1;o<0;)o+=d[m].partialLength,(m-=1)<0&&(m=(d=u[f-=1].points).length-1);c=(d=u[f].points)[m-1],y=(h=d[m]).partialLength}a=T.length,i=r=0;var D,w,F,I,V=1.2*t.finalSize*.714,R=!0;F=P.length;var B,L,G,z,N,O,H,j,q,W,Y,X,$,K=-1,Z=o,J=f,Q=m,U=-1,tt="",et=this.defaultPropsArray;if(2===t.j||1===t.j){var rt=0,it=0,st=2===t.j?-.5:-1,at=0,nt=!0;for(s=0;s<a;s+=1)if(T[s].n){for(rt&&(rt+=it);at<s;)T[at].animatorJustifyOffset=rt,at+=1;nt=!(rt=0)}else{for(w=0;w<F;w+=1)(D=P[w].a).t.propType&&(nt&&2===t.j&&(it+=D.t.v*st),(B=P[w].s.getMult(T[s].anIndexes[w],S.a[w].s.totalChars)).length?rt+=D.t.v*B[0]*st:rt+=D.t.v*B*st);nt=!1}for(rt&&(rt+=it);at<s;)T[at].animatorJustifyOffset=rt,at+=1}for(s=0;s<a;s+=1){if(_.reset(),N=1,T[s].n)r=0,i+=t.yOffset,i+=R?1:0,o=Z,R=!1,0,this._hasMaskedPath&&(m=Q,c=(d=u[f=J].points)[m-1],y=(h=d[m]).partialLength,l=0),$=W=X=tt="",et=this.defaultPropsArray;else{if(this._hasMaskedPath){if(U!==T[s].line){switch(t.j){case 1:o+=g-t.lineWidths[T[s].line];break;case 2:o+=(g-t.lineWidths[T[s].line])/2}U=T[s].line}K!==T[s].ind&&(T[K]&&(o+=T[K].extra),o+=T[s].an/2,K=T[s].ind),o+=x[0]*T[s].an/200;var ot=0;for(w=0;w<F;w+=1)(D=P[w].a).p.propType&&((B=P[w].s.getMult(T[s].anIndexes[w],S.a[w].s.totalChars)).length?ot+=D.p.v[0]*B[0]:ot+=D.p.v[0]*B),D.a.propType&&((B=P[w].s.getMult(T[s].anIndexes[w],S.a[w].s.totalChars)).length?ot+=D.a.v[0]*B[0]:ot+=D.a.v[0]*B);for(p=!0;p;)o+ot<=l+y||!d?(v=(o+ot-l)/h.partialLength,G=c.point[0]+(h.point[0]-c.point[0])*v,z=c.point[1]+(h.point[1]-c.point[1])*v,_.translate(-x[0]*T[s].an/200,-x[1]*V/100),p=!1):d&&(l+=h.partialLength,(m+=1)>=d.length&&(m=0,d=u[f+=1]?u[f].points:E.v.c?u[f=m=0].points:(l-=h.partialLength,null)),d&&(c=h,y=(h=d[m]).partialLength));L=T[s].an/2-T[s].add,_.translate(-L,0,0)}else L=T[s].an/2-T[s].add,_.translate(-L,0,0),_.translate(-x[0]*T[s].an/200,-x[1]*V/100,0);for(T[s].l/2,w=0;w<F;w+=1)(D=P[w].a).t.propType&&(B=P[w].s.getMult(T[s].anIndexes[w],S.a[w].s.totalChars),0===r&&0===t.j||(this._hasMaskedPath?B.length?o+=D.t.v*B[0]:o+=D.t.v*B:B.length?r+=D.t.v*B[0]:r+=D.t.v*B));for(T[s].l/2,t.strokeWidthAnim&&(H=t.sw||0),t.strokeColorAnim&&(O=t.sc?[t.sc[0],t.sc[1],t.sc[2]]:[0,0,0]),t.fillColorAnim&&t.fc&&(j=[t.fc[0],t.fc[1],t.fc[2]]),w=0;w<F;w+=1)(D=P[w].a).a.propType&&((B=P[w].s.getMult(T[s].anIndexes[w],S.a[w].s.totalChars)).length?_.translate(-D.a.v[0]*B[0],-D.a.v[1]*B[1],D.a.v[2]*B[2]):_.translate(-D.a.v[0]*B,-D.a.v[1]*B,D.a.v[2]*B));for(w=0;w<F;w+=1)(D=P[w].a).s.propType&&((B=P[w].s.getMult(T[s].anIndexes[w],S.a[w].s.totalChars)).length?_.scale(1+(D.s.v[0]-1)*B[0],1+(D.s.v[1]-1)*B[1],1):_.scale(1+(D.s.v[0]-1)*B,1+(D.s.v[1]-1)*B,1));for(w=0;w<F;w+=1){if(D=P[w].a,B=P[w].s.getMult(T[s].anIndexes[w],S.a[w].s.totalChars),D.sk.propType&&(B.length?_.skewFromAxis(-D.sk.v*B[0],D.sa.v*B[1]):_.skewFromAxis(-D.sk.v*B,D.sa.v*B)),D.r.propType&&(B.length?_.rotateZ(-D.r.v*B[2]):_.rotateZ(-D.r.v*B)),D.ry.propType&&(B.length?_.rotateY(D.ry.v*B[1]):_.rotateY(D.ry.v*B)),D.rx.propType&&(B.length?_.rotateX(D.rx.v*B[0]):_.rotateX(D.rx.v*B)),D.o.propType&&(B.length?N+=(D.o.v*B[0]-N)*B[0]:N+=(D.o.v*B-N)*B),t.strokeWidthAnim&&D.sw.propType&&(B.length?H+=D.sw.v*B[0]:H+=D.sw.v*B),t.strokeColorAnim&&D.sc.propType)for(q=0;q<3;q+=1)B.length?O[q]=O[q]+(D.sc.v[q]-O[q])*B[0]:O[q]=O[q]+(D.sc.v[q]-O[q])*B;if(t.fillColorAnim&&t.fc){if(D.fc.propType)for(q=0;q<3;q+=1)B.length?j[q]=j[q]+(D.fc.v[q]-j[q])*B[0]:j[q]=j[q]+(D.fc.v[q]-j[q])*B;D.fh.propType&&(j=B.length?addHueToRGB(j,D.fh.v*B[0]):addHueToRGB(j,D.fh.v*B)),D.fs.propType&&(j=B.length?addSaturationToRGB(j,D.fs.v*B[0]):addSaturationToRGB(j,D.fs.v*B)),D.fb.propType&&(j=B.length?addBrightnessToRGB(j,D.fb.v*B[0]):addBrightnessToRGB(j,D.fb.v*B))}}for(w=0;w<F;w+=1)(D=P[w].a).p.propType&&(B=P[w].s.getMult(T[s].anIndexes[w],S.a[w].s.totalChars),this._hasMaskedPath?B.length?_.translate(0,D.p.v[1]*B[0],-D.p.v[2]*B[1]):_.translate(0,D.p.v[1]*B,-D.p.v[2]*B):B.length?_.translate(D.p.v[0]*B[0],D.p.v[1]*B[1],-D.p.v[2]*B[2]):_.translate(D.p.v[0]*B,D.p.v[1]*B,-D.p.v[2]*B));if(t.strokeWidthAnim&&(W=H<0?0:H),t.strokeColorAnim&&(Y="rgb("+Math.round(255*O[0])+","+Math.round(255*O[1])+","+Math.round(255*O[2])+")"),t.fillColorAnim&&t.fc&&(X="rgb("+Math.round(255*j[0])+","+Math.round(255*j[1])+","+Math.round(255*j[2])+")"),this._hasMaskedPath){if(_.translate(0,-t.ls),_.translate(0,x[1]*V/100+i,0),S.p.p){b=(h.point[1]-c.point[1])/(h.point[0]-c.point[0]);var ht=180*Math.atan(b)/Math.PI;h.point[0]<c.point[0]&&(ht+=180),_.rotate(-ht*Math.PI/180)}_.translate(G,z,0),o-=x[0]*T[s].an/200,T[s+1]&&K!==T[s+1].ind&&(o+=T[s].an/2,o+=t.tr/1e3*t.finalSize)}else{switch(_.translate(r,i,0),t.ps&&_.translate(t.ps[0],t.ps[1]+t.ascent,0),t.j){case 1:_.translate(T[s].animatorJustifyOffset+t.justifyOffset+(t.boxWidth-t.lineWidths[T[s].line]),0,0);break;case 2:_.translate(T[s].animatorJustifyOffset+t.justifyOffset+(t.boxWidth-t.lineWidths[T[s].line])/2,0,0)}_.translate(0,-t.ls),_.translate(L,0,0),_.translate(x[0]*T[s].an/200,x[1]*V/100,0),r+=T[s].l+t.tr/1e3*t.finalSize}"html"===A?tt=_.toCSS():"svg"===A?tt=_.to2dCSS():et=[_.props[0],_.props[1],_.props[2],_.props[3],_.props[4],_.props[5],_.props[6],_.props[7],_.props[8],_.props[9],_.props[10],_.props[11],_.props[12],_.props[13],_.props[14],_.props[15]],$=N}this.lettersChangedFlag=C<=s?(I=new LetterProps($,W,Y,X,tt,et),this.renderedLetters.push(I),C+=1,!0):(I=this.renderedLetters[s]).update($,W,Y,X,tt,et)||this.lettersChangedFlag}}},TextAnimatorProperty.prototype.getValue=function(){this._elem.globalData.frameId!==this._frameId&&(this._frameId=this._elem.globalData.frameId,this.iterateDynamicProperties())},TextAnimatorProperty.prototype.mHelper=new Matrix,TextAnimatorProperty.prototype.defaultPropsArray=[],extendPrototype([DynamicPropertyContainer],TextAnimatorProperty),LetterProps.prototype.update=function(t,e,r,i,s,a){this._mdf.o=!1,this._mdf.sw=!1,this._mdf.sc=!1,this._mdf.fc=!1,this._mdf.m=!1;var n=this._mdf.p=!1;return this.o!==t&&(this.o=t,n=this._mdf.o=!0),this.sw!==e&&(this.sw=e,n=this._mdf.sw=!0),this.sc!==r&&(this.sc=r,n=this._mdf.sc=!0),this.fc!==i&&(this.fc=i,n=this._mdf.fc=!0),this.m!==s&&(this.m=s,n=this._mdf.m=!0),!a.length||this.p[0]===a[0]&&this.p[1]===a[1]&&this.p[4]===a[4]&&this.p[5]===a[5]&&this.p[12]===a[12]&&this.p[13]===a[13]||(this.p=a,n=this._mdf.p=!0),n},TextProperty.prototype.defaultBoxWidth=[0,0],TextProperty.prototype.copyData=function(t,e){for(var r in e)e.hasOwnProperty(r)&&(t[r]=e[r]);return t},TextProperty.prototype.setCurrentData=function(t){t.__complete||this.completeTextData(t),this.currentData=t,this.currentData.boxWidth=this.currentData.boxWidth||this.defaultBoxWidth,this._mdf=!0},TextProperty.prototype.searchProperty=function(){return this.searchKeyframes()},TextProperty.prototype.searchKeyframes=function(){return this.kf=1<this.data.d.k.length,this.kf&&this.addEffect(this.getKeyframeValue.bind(this)),this.kf},TextProperty.prototype.addEffect=function(t){this.effectsSequence.push(t),this.elem.addDynamicProperty(this)},TextProperty.prototype.getValue=function(t){if(this.elem.globalData.frameId!==this.frameId&&this.effectsSequence.length||t){this.currentData.t=this.data.d.k[this.keysIndex].s.t;var e=this.currentData,r=this.keysIndex;if(this.lock)this.setCurrentData(this.currentData);else{this.lock=!0,this._mdf=!1;var i,s=this.effectsSequence.length,a=t||this.data.d.k[this.keysIndex].s;for(i=0;i<s;i+=1)a=r!==this.keysIndex?this.effectsSequence[i](a,a.t):this.effectsSequence[i](this.currentData,a.t);e!==a&&this.setCurrentData(a),this.pv=this.v=this.currentData,this.lock=!1,this.frameId=this.elem.globalData.frameId}}},TextProperty.prototype.getKeyframeValue=function(){for(var t=this.data.d.k,e=this.elem.comp.renderedFrame,r=0,i=t.length;r<=i-1&&(t[r].s,!(r===i-1||t[r+1].t>e));)r+=1;return this.keysIndex!==r&&(this.keysIndex=r),this.data.d.k[this.keysIndex].s},TextProperty.prototype.buildFinalText=function(t){for(var e,r=FontManager.getCombinedCharacterCodes(),i=[],s=0,a=t.length;s<a;)e=t.charCodeAt(s),-1!==r.indexOf(e)?i[i.length-1]+=t.charAt(s):55296<=e&&e<=56319&&56320<=(e=t.charCodeAt(s+1))&&e<=57343?(i.push(t.substr(s,2)),++s):i.push(t.charAt(s)),s+=1;return i},TextProperty.prototype.completeTextData=function(t){t.__complete=!0;var e,r,i,s,a,n,o,h=this.elem.globalData.fontManager,l=this.data,p=[],m=0,f=l.m.g,c=0,d=0,u=0,y=[],g=0,v=0,b=h.getFontByName(t.f),E=0,x=b.fStyle?b.fStyle.split(" "):[],P="normal",S="normal";for(r=x.length,e=0;e<r;e+=1)switch(x[e].toLowerCase()){case"italic":S="italic";break;case"bold":P="700";break;case"black":P="900";break;case"medium":P="500";break;case"regular":case"normal":P="400";break;case"light":case"thin":P="200"}t.fWeight=b.fWeight||P,t.fStyle=S,t.finalSize=t.s,t.finalText=this.buildFinalText(t.t),r=t.finalText.length,t.finalLineHeight=t.lh;var _,A=t.tr/1e3*t.finalSize;if(t.sz)for(var C,T,k=!0,M=t.sz[0],D=t.sz[1];k;){g=C=0,r=(T=this.buildFinalText(t.t)).length,A=t.tr/1e3*t.finalSize;var w=-1;for(e=0;e<r;e+=1)_=T[e].charCodeAt(0),i=!1," "===T[e]?w=e:13!==_&&3!==_||(i=!(g=0),C+=t.finalLineHeight||1.2*t.finalSize),M<g+(E=h.chars?(o=h.getCharData(T[e],b.fStyle,b.fFamily),i?0:o.w*t.finalSize/100):h.measureText(T[e],t.f,t.finalSize))&&" "!==T[e]?(-1===w?r+=1:e=w,C+=t.finalLineHeight||1.2*t.finalSize,T.splice(e,w===e?1:0,"\r"),w=-1,g=0):(g+=E,g+=A);C+=b.ascent*t.finalSize/100,this.canResize&&t.finalSize>this.minimumFontSize&&D<C?(t.finalSize-=1,t.finalLineHeight=t.finalSize*t.lh/t.s):(t.finalText=T,r=t.finalText.length,k=!1)}g=-A;var F,I=E=0;for(e=0;e<r;e+=1)if(i=!1,_=(F=t.finalText[e]).charCodeAt(0)," "===F?s="\xa0":13===_||3===_?(I=0,y.push(g),v=v<g?g:v,g=-2*A,i=!(s=""),u+=1):s=t.finalText[e],E=h.chars?(o=h.getCharData(F,b.fStyle,h.getFontByName(t.f).fFamily),i?0:o.w*t.finalSize/100):h.measureText(s,t.f,t.finalSize)," "===F?I+=E+A:(g+=E+A+I,I=0),p.push({l:E,an:E,add:c,n:i,anIndexes:[],val:s,line:u,animatorJustifyOffset:0}),2==f){if(c+=E,""===s||"\xa0"===s||e===r-1){for(""!==s&&"\xa0"!==s||(c-=E);d<=e;)p[d].an=c,p[d].ind=m,p[d].extra=E,d+=1;m+=1,c=0}}else if(3==f){if(c+=E,""===s||e===r-1){for(""===s&&(c-=E);d<=e;)p[d].an=c,p[d].ind=m,p[d].extra=E,d+=1;c=0,m+=1}}else p[m].ind=m,p[m].extra=0,m+=1;if(t.l=p,v=v<g?g:v,y.push(g),t.sz)t.boxWidth=t.sz[0],t.justifyOffset=0;else switch(t.boxWidth=v,t.j){case 1:t.justifyOffset=-t.boxWidth;break;case 2:t.justifyOffset=-t.boxWidth/2;break;default:t.justifyOffset=0}t.lineWidths=y;var V,R,B=l.a;n=B.length;var L,G,z=[];for(a=0;a<n;a+=1){for((V=B[a]).a.sc&&(t.strokeColorAnim=!0),V.a.sw&&(t.strokeWidthAnim=!0),(V.a.fc||V.a.fh||V.a.fs||V.a.fb)&&(t.fillColorAnim=!0),G=0,L=V.s.b,e=0;e<r;e+=1)(R=p[e]).anIndexes[a]=G,(1==L&&""!==R.val||2==L&&""!==R.val&&"\xa0"!==R.val||3==L&&(R.n||"\xa0"==R.val||e==r-1)||4==L&&(R.n||e==r-1))&&(1===V.s.rn&&z.push(G),G+=1);l.a[a].s.totalChars=G;var N,O=-1;if(1===V.s.rn)for(e=0;e<r;e+=1)O!=(R=p[e]).anIndexes[a]&&(O=R.anIndexes[a],N=z.splice(Math.floor(Math.random()*z.length),1)[0]),R.anIndexes[a]=N}t.yOffset=t.finalLineHeight||1.2*t.finalSize,t.ls=t.ls||0,t.ascent=b.ascent*t.finalSize/100},TextProperty.prototype.updateDocumentData=function(t,e){e=void 0===e?this.keysIndex:e;var r=this.copyData({},this.data.d.k[e].s);r=this.copyData(r,t),this.data.d.k[e].s=r,this.recalculate(e),this.elem.addDynamicProperty(this)},TextProperty.prototype.recalculate=function(t){var e=this.data.d.k[t].s;e.__complete=!1,this.keysIndex=0,this._isFirstFrame=!0,this.getValue(e)},TextProperty.prototype.canResizeFont=function(t){this.canResize=t,this.recalculate(this.keysIndex),this.elem.addDynamicProperty(this)},TextProperty.prototype.setMinimumFontSize=function(t){this.minimumFontSize=Math.floor(t)||1,this.recalculate(this.keysIndex),this.elem.addDynamicProperty(this)};var TextSelectorProp=function(){var l=Math.max,p=Math.min,m=Math.floor;function i(t,e){this._currentTextLength=-1,this.k=!1,this.data=e,this.elem=t,this.comp=t.comp,this.finalS=0,this.finalE=0,this.initDynamicPropertyContainer(t),this.s=PropertyFactory.getProp(t,e.s||{k:0},0,0,this),this.e="e"in e?PropertyFactory.getProp(t,e.e,0,0,this):{v:100},this.o=PropertyFactory.getProp(t,e.o||{k:0},0,0,this),this.xe=PropertyFactory.getProp(t,e.xe||{k:0},0,0,this),this.ne=PropertyFactory.getProp(t,e.ne||{k:0},0,0,this),this.a=PropertyFactory.getProp(t,e.a,0,.01,this),this.dynamicProperties.length||this.getValue()}return i.prototype={getMult:function(t){this._currentTextLength!==this.elem.textProperty.currentData.l.length&&this.getValue();var e=BezierFactory.getBezierEasing(this.ne.v/100,0,1-this.xe.v/100,1).get,r=0,i=this.finalS,s=this.finalE,a=this.data.sh;if(2==a)r=e(r=s===i?s<=t?1:0:l(0,p(.5/(s-i)+(t-i)/(s-i),1)));else if(3==a)r=e(r=s===i?s<=t?0:1:1-l(0,p(.5/(s-i)+(t-i)/(s-i),1)));else if(4==a)s===i?r=0:(r=l(0,p(.5/(s-i)+(t-i)/(s-i),1)))<.5?r*=2:r=1-2*(r-.5),r=e(r);else if(5==a){if(s===i)r=0;else{var n=s-i,o=-n/2+(t=p(l(0,t+.5-i),s-i)),h=n/2;r=Math.sqrt(1-o*o/(h*h))}r=e(r)}else r=6==a?e(r=s===i?0:(t=p(l(0,t+.5-i),s-i),(1+Math.cos(Math.PI+2*Math.PI*t/(s-i)))/2)):(t>=m(i)&&(r=t-i<0?1-(i-t):l(0,p(s-t,1))),e(r));return r*this.a.v},getValue:function(t){this.iterateDynamicProperties(),this._mdf=t||this._mdf,this._currentTextLength=this.elem.textProperty.currentData.l.length||0,t&&2===this.data.r&&(this.e.v=this._currentTextLength);var e=2===this.data.r?1:100/this.data.totalChars,r=this.o.v/e,i=this.s.v/e+r,s=this.e.v/e+r;if(s<i){var a=i;i=s,s=a}this.finalS=i,this.finalE=s}},extendPrototype([DynamicPropertyContainer],i),{getTextSelectorProp:function(t,e,r){return new i(t,e,r)}}}(),pool_factory=function(t,e,r,i){var s=0,a=t,n=createSizedArray(a);function o(){return s?n[s-=1]:e()}return{newElement:o,release:function(t){s===a&&(n=pooling.double(n),a*=2),r&&r(t),n[s]=t,s+=1}}},pooling={double:function(t){return t.concat(createSizedArray(t.length))}},point_pool=pool_factory(8,function(){return createTypedArray("float32",2)}),shape_pool=(EA=pool_factory(4,function(){return new ShapePath},function(t){var e,r=t._length;for(e=0;e<r;e+=1)point_pool.release(t.v[e]),point_pool.release(t.i[e]),point_pool.release(t.o[e]),t.v[e]=null,t.i[e]=null,t.o[e]=null;t._length=0,t.c=!1}),EA.clone=function(t){var e,r=EA.newElement(),i=void 0===t._length?t.v.length:t._length;for(r.setLength(i),r.c=t.c,e=0;e<i;e+=1)r.setTripleAt(t.v[e][0],t.v[e][1],t.o[e][0],t.o[e][1],t.i[e][0],t.i[e][1],e);return r},EA),EA,shapeCollection_pool=(NA={newShapeCollection:function(){var t;t=OA?QA[OA-=1]:new ShapeCollection;return t},release:function(t){var e,r=t._length;for(e=0;e<r;e+=1)shape_pool.release(t.shapes[e]);t._length=0,OA===PA&&(QA=pooling.double(QA),PA*=2);QA[OA]=t,OA+=1}},OA=0,PA=4,QA=createSizedArray(PA),NA),NA,OA,PA,QA,segments_length_pool=pool_factory(8,function(){return{lengths:[],totalLength:0}},function(t){var e,r=t.lengths.length;for(e=0;e<r;e+=1)bezier_length_pool.release(t.lengths[e]);t.lengths.length=0}),bezier_length_pool=pool_factory(8,function(){return{addedLength:0,percents:createTypedArray("float32",defaultCurveSegments),lengths:createTypedArray("float32",defaultCurveSegments)}});function BaseRenderer(){}function SVGRenderer(t,e){this.animationItem=t,this.layers=null,this.renderedFrame=-1,this.svgElement=createNS("svg");var r="";if(e&&e.title){var i=createNS("title"),s=createElementID();i.setAttribute("id",s),i.textContent=e.title,this.svgElement.appendChild(i),r+=s}if(e&&e.description){var a=createNS("desc"),n=createElementID();a.setAttribute("id",n),a.textContent=e.description,this.svgElement.appendChild(a),r+=" "+n}r&&this.svgElement.setAttribute("aria-labelledby",r);var o=createNS("defs");this.svgElement.appendChild(o);var h=createNS("g");this.svgElement.appendChild(h),this.layerElement=h,this.renderConfig={preserveAspectRatio:e&&e.preserveAspectRatio||"xMidYMid meet",imagePreserveAspectRatio:e&&e.imagePreserveAspectRatio||"xMidYMid slice",progressiveLoad:e&&e.progressiveLoad||!1,hideOnTransparent:!e||!1!==e.hideOnTransparent,viewBoxOnly:e&&e.viewBoxOnly||!1,viewBoxSize:e&&e.viewBoxSize||!1,className:e&&e.className||"",focusable:e&&e.focusable},this.globalData={_mdf:!1,frameNum:-1,defs:o,renderConfig:this.renderConfig},this.elements=[],this.pendingElements=[],this.destroyed=!1,this.rendererType="svg"}function CanvasRenderer(t,e){this.animationItem=t,this.renderConfig={clearCanvas:!e||void 0===e.clearCanvas||e.clearCanvas,context:e&&e.context||null,progressiveLoad:e&&e.progressiveLoad||!1,preserveAspectRatio:e&&e.preserveAspectRatio||"xMidYMid meet",imagePreserveAspectRatio:e&&e.imagePreserveAspectRatio||"xMidYMid slice",className:e&&e.className||""},this.renderConfig.dpr=e&&e.dpr||1,this.animationItem.wrapper&&(this.renderConfig.dpr=e&&e.dpr||window.devicePixelRatio||1),this.renderedFrame=-1,this.globalData={frameNum:-1,_mdf:!1,renderConfig:this.renderConfig,currentGlobalAlpha:-1},this.contextData=new CVContextData,this.elements=[],this.pendingElements=[],this.transformMat=new Matrix,this.completeLayers=!1,this.rendererType="canvas"}function HybridRenderer(t,e){this.animationItem=t,this.layers=null,this.renderedFrame=-1,this.renderConfig={className:e&&e.className||"",imagePreserveAspectRatio:e&&e.imagePreserveAspectRatio||"xMidYMid slice",hideOnTransparent:!e||!1!==e.hideOnTransparent},this.globalData={_mdf:!1,frameNum:-1,renderConfig:this.renderConfig},this.pendingElements=[],this.elements=[],this.threeDElements=[],this.destroyed=!1,this.camera=null,this.supports3d=!0,this.rendererType="html"}function MaskElement(t,e,r){this.data=t,this.element=e,this.globalData=r,this.storedData=[],this.masksProperties=this.data.masksProperties||[],this.maskElement=null;var i,s=this.globalData.defs,a=this.masksProperties?this.masksProperties.length:0;this.viewData=createSizedArray(a),this.solidPath="";var n,o,h,l,p,m,f,c=this.masksProperties,d=0,u=[],y=createElementID(),g="clipPath",v="clip-path";for(i=0;i<a;i++)if(("a"!==c[i].mode&&"n"!==c[i].mode||c[i].inv||100!==c[i].o.k||c[i].o.x)&&(v=g="mask"),"s"!=c[i].mode&&"i"!=c[i].mode||0!==d?l=null:((l=createNS("rect")).setAttribute("fill","#ffffff"),l.setAttribute("width",this.element.comp.data.w||0),l.setAttribute("height",this.element.comp.data.h||0),u.push(l)),n=createNS("path"),"n"!=c[i].mode){var b;if(d+=1,n.setAttribute("fill","s"===c[i].mode?"#000000":"#ffffff"),n.setAttribute("clip-rule","nonzero"),0!==c[i].x.k?(v=g="mask",f=PropertyFactory.getProp(this.element,c[i].x,0,null,this.element),b=createElementID(),(p=createNS("filter")).setAttribute("id",b),(m=createNS("feMorphology")).setAttribute("operator","erode"),m.setAttribute("in","SourceGraphic"),m.setAttribute("radius","0"),p.appendChild(m),s.appendChild(p),n.setAttribute("stroke","s"===c[i].mode?"#000000":"#ffffff")):f=m=null,this.storedData[i]={elem:n,x:f,expan:m,lastPath:"",lastOperator:"",filterId:b,lastRadius:0},"i"==c[i].mode){h=u.length;var E=createNS("g");for(o=0;o<h;o+=1)E.appendChild(u[o]);var x=createNS("mask");x.setAttribute("mask-type","alpha"),x.setAttribute("id",y+"_"+d),x.appendChild(n),s.appendChild(x),E.setAttribute("mask","url("+locationHref+"#"+y+"_"+d+")"),u.length=0,u.push(E)}else u.push(n);c[i].inv&&!this.solidPath&&(this.solidPath=this.createLayerSolidPath()),this.viewData[i]={elem:n,lastPath:"",op:PropertyFactory.getProp(this.element,c[i].o,0,.01,this.element),prop:ShapePropertyFactory.getShapeProp(this.element,c[i],3),invRect:l},this.viewData[i].prop.k||this.drawPath(c[i],this.viewData[i].prop.v,this.viewData[i])}else this.viewData[i]={op:PropertyFactory.getProp(this.element,c[i].o,0,.01,this.element),prop:ShapePropertyFactory.getShapeProp(this.element,c[i],3),elem:n,lastPath:""},s.appendChild(n);for(this.maskElement=createNS(g),a=u.length,i=0;i<a;i+=1)this.maskElement.appendChild(u[i]);0<d&&(this.maskElement.setAttribute("id",y),this.element.maskedElement.setAttribute(v,"url("+locationHref+"#"+y+")"),s.appendChild(this.maskElement)),this.viewData.length&&this.element.addRenderableComponent(this)}function HierarchyElement(){}function FrameElement(){}function TransformElement(){}function RenderableElement(){}function RenderableDOMElement(){}function ProcessedElement(t,e){this.elem=t,this.pos=e}function SVGStyleData(t,e){this.data=t,this.type=t.ty,this.d="",this.lvl=e,this._mdf=!1,this.closed=!0===t.hd,this.pElem=createNS("path"),this.msElem=null}function SVGShapeData(t,e,r){this.caches=[],this.styles=[],this.transformers=t,this.lStr="",this.sh=r,this.lvl=e,this._isAnimated=!!r.k;for(var i=0,s=t.length;i<s;){if(t[i].mProps.dynamicProperties.length){this._isAnimated=!0;break}i+=1}}function SVGTransformData(t,e,r){this.transform={mProps:t,op:e,container:r},this.elements=[],this._isAnimated=this.transform.mProps.dynamicProperties.length||this.transform.op.effectsSequence.length}function SVGStrokeStyleData(t,e,r){this.initDynamicPropertyContainer(t),this.getValue=this.iterateDynamicProperties,this.o=PropertyFactory.getProp(t,e.o,0,.01,this),this.w=PropertyFactory.getProp(t,e.w,0,null,this),this.d=new DashProperty(t,e.d||{},"svg",this),this.c=PropertyFactory.getProp(t,e.c,1,255,this),this.style=r,this._isAnimated=!!this._isAnimated}function SVGFillStyleData(t,e,r){this.initDynamicPropertyContainer(t),this.getValue=this.iterateDynamicProperties,this.o=PropertyFactory.getProp(t,e.o,0,.01,this),this.c=PropertyFactory.getProp(t,e.c,1,255,this),this.style=r}function SVGGradientFillStyleData(t,e,r){this.initDynamicPropertyContainer(t),this.getValue=this.iterateDynamicProperties,this.initGradientData(t,e,r)}function SVGGradientStrokeStyleData(t,e,r){this.initDynamicPropertyContainer(t),this.getValue=this.iterateDynamicProperties,this.w=PropertyFactory.getProp(t,e.w,0,null,this),this.d=new DashProperty(t,e.d||{},"svg",this),this.initGradientData(t,e,r),this._isAnimated=!!this._isAnimated}function ShapeGroupData(){this.it=[],this.prevViewData=[],this.gr=createNS("g")}BaseRenderer.prototype.checkLayers=function(t){var e,r,i=this.layers.length;for(this.completeLayers=!0,e=i-1;0<=e;e--)this.elements[e]||(r=this.layers[e]).ip-r.st<=t-this.layers[e].st&&r.op-r.st>t-this.layers[e].st&&this.buildItem(e),this.completeLayers=!!this.elements[e]&&this.completeLayers;this.checkPendingElements()},BaseRenderer.prototype.createItem=function(t){switch(t.ty){case 2:return this.createImage(t);case 0:return this.createComp(t);case 1:return this.createSolid(t);case 3:return this.createNull(t);case 4:return this.createShape(t);case 5:return this.createText(t);case 13:return this.createCamera(t)}return this.createNull(t)},BaseRenderer.prototype.createCamera=function(){throw new Error("You're using a 3d camera. Try the html renderer.")},BaseRenderer.prototype.buildAllItems=function(){var t,e=this.layers.length;for(t=0;t<e;t+=1)this.buildItem(t);this.checkPendingElements()},BaseRenderer.prototype.includeLayers=function(t){this.completeLayers=!1;var e,r,i=t.length,s=this.layers.length;for(e=0;e<i;e+=1)for(r=0;r<s;){if(this.layers[r].id==t[e].id){this.layers[r]=t[e];break}r+=1}},BaseRenderer.prototype.setProjectInterface=function(t){this.globalData.projectInterface=t},BaseRenderer.prototype.initItems=function(){this.globalData.progressiveLoad||this.buildAllItems()},BaseRenderer.prototype.buildElementParenting=function(t,e,r){for(var i=this.elements,s=this.layers,a=0,n=s.length;a<n;)s[a].ind==e&&(i[a]&&!0!==i[a]?(r.push(i[a]),i[a].setAsParent(),void 0!==s[a].parent?this.buildElementParenting(t,s[a].parent,r):t.setHierarchy(r)):(this.buildItem(a),this.addPendingElement(t))),a+=1},BaseRenderer.prototype.addPendingElement=function(t){this.pendingElements.push(t)},BaseRenderer.prototype.searchExtraCompositions=function(t){var e,r=t.length;for(e=0;e<r;e+=1)if(t[e].xt){var i=this.createComp(t[e]);i.initExpressions(),this.globalData.projectInterface.registerComposition(i)}},BaseRenderer.prototype.setupGlobalData=function(t,e){this.globalData.fontManager=new FontManager,this.globalData.fontManager.addChars(t.chars),this.globalData.fontManager.addFonts(t.fonts,e),this.globalData.getAssetData=this.animationItem.getAssetData.bind(this.animationItem),this.globalData.getAssetsPath=this.animationItem.getAssetsPath.bind(this.animationItem),this.globalData.imageLoader=this.animationItem.imagePreloader,this.globalData.frameId=0,this.globalData.frameRate=t.fr,this.globalData.nm=t.nm,this.globalData.compSize={w:t.w,h:t.h}},extendPrototype([BaseRenderer],SVGRenderer),SVGRenderer.prototype.createNull=function(t){return new NullElement(t,this.globalData,this)},SVGRenderer.prototype.createShape=function(t){return new SVGShapeElement(t,this.globalData,this)},SVGRenderer.prototype.createText=function(t){return new SVGTextElement(t,this.globalData,this)},SVGRenderer.prototype.createImage=function(t){return new IImageElement(t,this.globalData,this)},SVGRenderer.prototype.createComp=function(t){return new SVGCompElement(t,this.globalData,this)},SVGRenderer.prototype.createSolid=function(t){return new ISolidElement(t,this.globalData,this)},SVGRenderer.prototype.configAnimation=function(t){this.svgElement.setAttribute("xmlns","http://www.w3.org/2000/svg"),this.renderConfig.viewBoxSize?this.svgElement.setAttribute("viewBox",this.renderConfig.viewBoxSize):this.svgElement.setAttribute("viewBox","0 0 "+t.w+" "+t.h),this.renderConfig.viewBoxOnly||(this.svgElement.setAttribute("width",t.w),this.svgElement.setAttribute("height",t.h),this.svgElement.style.width="100%",this.svgElement.style.height="100%",this.svgElement.style.transform="translate3d(0,0,0)"),this.renderConfig.className&&this.svgElement.setAttribute("class",this.renderConfig.className),void 0!==this.renderConfig.focusable&&this.svgElement.setAttribute("focusable",this.renderConfig.focusable),this.svgElement.setAttribute("preserveAspectRatio",this.renderConfig.preserveAspectRatio),this.animationItem.wrapper.appendChild(this.svgElement);var e=this.globalData.defs;this.setupGlobalData(t,e),this.globalData.progressiveLoad=this.renderConfig.progressiveLoad,this.data=t;var r=createNS("clipPath"),i=createNS("rect");i.setAttribute("width",t.w),i.setAttribute("height",t.h),i.setAttribute("x",0),i.setAttribute("y",0);var s=createElementID();r.setAttribute("id",s),r.appendChild(i),this.layerElement.setAttribute("clip-path","url("+locationHref+"#"+s+")"),e.appendChild(r),this.layers=t.layers,this.elements=createSizedArray(t.layers.length)},SVGRenderer.prototype.destroy=function(){this.animationItem.wrapper.innerHTML="",this.layerElement=null,this.globalData.defs=null;var t,e=this.layers?this.layers.length:0;for(t=0;t<e;t++)this.elements[t]&&this.elements[t].destroy();this.elements.length=0,this.destroyed=!0,this.animationItem=null},SVGRenderer.prototype.updateContainerSize=function(){},SVGRenderer.prototype.buildItem=function(t){var e=this.elements;if(!e[t]&&99!=this.layers[t].ty){e[t]=!0;var r=this.createItem(this.layers[t]);e[t]=r,expressionsPlugin&&(0===this.layers[t].ty&&this.globalData.projectInterface.registerComposition(r),r.initExpressions()),this.appendElementInPos(r,t),this.layers[t].tt&&(this.elements[t-1]&&!0!==this.elements[t-1]?r.setMatte(e[t-1].layerId):(this.buildItem(t-1),this.addPendingElement(r)))}},SVGRenderer.prototype.checkPendingElements=function(){for(;this.pendingElements.length;){var t=this.pendingElements.pop();if(t.checkParenting(),t.data.tt)for(var e=0,r=this.elements.length;e<r;){if(this.elements[e]===t){t.setMatte(this.elements[e-1].layerId);break}e+=1}}},SVGRenderer.prototype.renderFrame=function(t){if(this.renderedFrame!==t&&!this.destroyed){null===t?t=this.renderedFrame:this.renderedFrame=t,this.globalData.frameNum=t,this.globalData.frameId+=1,this.globalData.projectInterface.currentFrame=t,this.globalData._mdf=!1;var e,r=this.layers.length;for(this.completeLayers||this.checkLayers(t),e=r-1;0<=e;e--)(this.completeLayers||this.elements[e])&&this.elements[e].prepareFrame(t-this.layers[e].st);if(this.globalData._mdf)for(e=0;e<r;e+=1)(this.completeLayers||this.elements[e])&&this.elements[e].renderFrame()}},SVGRenderer.prototype.appendElementInPos=function(t,e){var r=t.getBaseElement();if(r){for(var i,s=0;s<e;)this.elements[s]&&!0!==this.elements[s]&&this.elements[s].getBaseElement()&&(i=this.elements[s].getBaseElement()),s+=1;i?this.layerElement.insertBefore(r,i):this.layerElement.appendChild(r)}},SVGRenderer.prototype.hide=function(){this.layerElement.style.display="none"},SVGRenderer.prototype.show=function(){this.layerElement.style.display="block"},extendPrototype([BaseRenderer],CanvasRenderer),CanvasRenderer.prototype.createShape=function(t){return new CVShapeElement(t,this.globalData,this)},CanvasRenderer.prototype.createText=function(t){return new CVTextElement(t,this.globalData,this)},CanvasRenderer.prototype.createImage=function(t){return new CVImageElement(t,this.globalData,this)},CanvasRenderer.prototype.createComp=function(t){return new CVCompElement(t,this.globalData,this)},CanvasRenderer.prototype.createSolid=function(t){return new CVSolidElement(t,this.globalData,this)},CanvasRenderer.prototype.createNull=SVGRenderer.prototype.createNull,CanvasRenderer.prototype.ctxTransform=function(t){if(1!==t[0]||0!==t[1]||0!==t[4]||1!==t[5]||0!==t[12]||0!==t[13])if(this.renderConfig.clearCanvas){this.transformMat.cloneFromProps(t);var e=this.contextData.cTr.props;this.transformMat.transform(e[0],e[1],e[2],e[3],e[4],e[5],e[6],e[7],e[8],e[9],e[10],e[11],e[12],e[13],e[14],e[15]),this.contextData.cTr.cloneFromProps(this.transformMat.props);var r=this.contextData.cTr.props;this.canvasContext.setTransform(r[0],r[1],r[4],r[5],r[12],r[13])}else this.canvasContext.transform(t[0],t[1],t[4],t[5],t[12],t[13])},CanvasRenderer.prototype.ctxOpacity=function(t){if(!this.renderConfig.clearCanvas)return this.canvasContext.globalAlpha*=t<0?0:t,void(this.globalData.currentGlobalAlpha=this.contextData.cO);this.contextData.cO*=t<0?0:t,this.globalData.currentGlobalAlpha!==this.contextData.cO&&(this.canvasContext.globalAlpha=this.contextData.cO,this.globalData.currentGlobalAlpha=this.contextData.cO)},CanvasRenderer.prototype.reset=function(){this.renderConfig.clearCanvas?this.contextData.reset():this.canvasContext.restore()},CanvasRenderer.prototype.save=function(t){if(this.renderConfig.clearCanvas){t&&this.canvasContext.save();var e=this.contextData.cTr.props;this.contextData._length<=this.contextData.cArrPos&&this.contextData.duplicate();var r,i=this.contextData.saved[this.contextData.cArrPos];for(r=0;r<16;r+=1)i[r]=e[r];this.contextData.savedOp[this.contextData.cArrPos]=this.contextData.cO,this.contextData.cArrPos+=1}else this.canvasContext.save()},CanvasRenderer.prototype.restore=function(t){if(this.renderConfig.clearCanvas){t&&(this.canvasContext.restore(),this.globalData.blendMode="source-over"),this.contextData.cArrPos-=1;var e,r=this.contextData.saved[this.contextData.cArrPos],i=this.contextData.cTr.props;for(e=0;e<16;e+=1)i[e]=r[e];this.canvasContext.setTransform(r[0],r[1],r[4],r[5],r[12],r[13]),r=this.contextData.savedOp[this.contextData.cArrPos],this.contextData.cO=r,this.globalData.currentGlobalAlpha!==r&&(this.canvasContext.globalAlpha=r,this.globalData.currentGlobalAlpha=r)}else this.canvasContext.restore()},CanvasRenderer.prototype.configAnimation=function(t){this.animationItem.wrapper?(this.animationItem.container=createTag("canvas"),this.animationItem.container.style.width="100%",this.animationItem.container.style.height="100%",this.animationItem.container.style.transformOrigin=this.animationItem.container.style.mozTransformOrigin=this.animationItem.container.style.webkitTransformOrigin=this.animationItem.container.style["-webkit-transform"]="0px 0px 0px",this.animationItem.wrapper.appendChild(this.animationItem.container),this.canvasContext=this.animationItem.container.getContext("2d"),this.renderConfig.className&&this.animationItem.container.setAttribute("class",this.renderConfig.className)):this.canvasContext=this.renderConfig.context,this.data=t,this.layers=t.layers,this.transformCanvas={w:t.w,h:t.h,sx:0,sy:0,tx:0,ty:0},this.setupGlobalData(t,document.body),this.globalData.canvasContext=this.canvasContext,(this.globalData.renderer=this).globalData.isDashed=!1,this.globalData.progressiveLoad=this.renderConfig.progressiveLoad,this.globalData.transformCanvas=this.transformCanvas,this.elements=createSizedArray(t.layers.length),this.updateContainerSize()},CanvasRenderer.prototype.updateContainerSize=function(){var t,e,r,i;if(this.reset(),this.animationItem.wrapper&&this.animationItem.container?(t=this.animationItem.wrapper.offsetWidth,e=this.animationItem.wrapper.offsetHeight,this.animationItem.container.setAttribute("width",t*this.renderConfig.dpr),this.animationItem.container.setAttribute("height",e*this.renderConfig.dpr)):(t=this.canvasContext.canvas.width*this.renderConfig.dpr,e=this.canvasContext.canvas.height*this.renderConfig.dpr),-1!==this.renderConfig.preserveAspectRatio.indexOf("meet")||-1!==this.renderConfig.preserveAspectRatio.indexOf("slice")){var s=this.renderConfig.preserveAspectRatio.split(" "),a=s[1]||"meet",n=s[0]||"xMidYMid",o=n.substr(0,4),h=n.substr(4);r=t/e,i=this.transformCanvas.w/this.transformCanvas.h,this.transformCanvas.sy=r<i&&"meet"===a||i<r&&"slice"===a?(this.transformCanvas.sx=t/(this.transformCanvas.w/this.renderConfig.dpr),t/(this.transformCanvas.w/this.renderConfig.dpr)):(this.transformCanvas.sx=e/(this.transformCanvas.h/this.renderConfig.dpr),e/(this.transformCanvas.h/this.renderConfig.dpr)),this.transformCanvas.tx="xMid"===o&&(i<r&&"meet"===a||r<i&&"slice"===a)?(t-this.transformCanvas.w*(e/this.transformCanvas.h))/2*this.renderConfig.dpr:"xMax"===o&&(i<r&&"meet"===a||r<i&&"slice"===a)?(t-this.transformCanvas.w*(e/this.transformCanvas.h))*this.renderConfig.dpr:0,this.transformCanvas.ty="YMid"===h&&(r<i&&"meet"===a||i<r&&"slice"===a)?(e-this.transformCanvas.h*(t/this.transformCanvas.w))/2*this.renderConfig.dpr:"YMax"===h&&(r<i&&"meet"===a||i<r&&"slice"===a)?(e-this.transformCanvas.h*(t/this.transformCanvas.w))*this.renderConfig.dpr:0}else"none"==this.renderConfig.preserveAspectRatio?(this.transformCanvas.sx=t/(this.transformCanvas.w/this.renderConfig.dpr),this.transformCanvas.sy=e/(this.transformCanvas.h/this.renderConfig.dpr)):(this.transformCanvas.sx=this.renderConfig.dpr,this.transformCanvas.sy=this.renderConfig.dpr),this.transformCanvas.tx=0,this.transformCanvas.ty=0;this.transformCanvas.props=[this.transformCanvas.sx,0,0,0,0,this.transformCanvas.sy,0,0,0,0,1,0,this.transformCanvas.tx,this.transformCanvas.ty,0,1],this.ctxTransform(this.transformCanvas.props),this.canvasContext.beginPath(),this.canvasContext.rect(0,0,this.transformCanvas.w,this.transformCanvas.h),this.canvasContext.closePath(),this.canvasContext.clip(),this.renderFrame(this.renderedFrame,!0)},CanvasRenderer.prototype.destroy=function(){var t;for(this.renderConfig.clearCanvas&&(this.animationItem.wrapper.innerHTML=""),t=(this.layers?this.layers.length:0)-1;0<=t;t-=1)this.elements[t]&&this.elements[t].destroy();this.elements.length=0,this.globalData.canvasContext=null,this.animationItem.container=null,this.destroyed=!0},CanvasRenderer.prototype.renderFrame=function(t,e){if((this.renderedFrame!==t||!0!==this.renderConfig.clearCanvas||e)&&!this.destroyed&&-1!==t){this.renderedFrame=t,this.globalData.frameNum=t-this.animationItem._isFirstFrame,this.globalData.frameId+=1,this.globalData._mdf=!this.renderConfig.clearCanvas||e,this.globalData.projectInterface.currentFrame=t;var r,i=this.layers.length;for(this.completeLayers||this.checkLayers(t),r=0;r<i;r++)(this.completeLayers||this.elements[r])&&this.elements[r].prepareFrame(t-this.layers[r].st);if(this.globalData._mdf){for(!0===this.renderConfig.clearCanvas?this.canvasContext.clearRect(0,0,this.transformCanvas.w,this.transformCanvas.h):this.save(),r=i-1;0<=r;r-=1)(this.completeLayers||this.elements[r])&&this.elements[r].renderFrame();!0!==this.renderConfig.clearCanvas&&this.restore()}}},CanvasRenderer.prototype.buildItem=function(t){var e=this.elements;if(!e[t]&&99!=this.layers[t].ty){var r=this.createItem(this.layers[t],this,this.globalData);(e[t]=r).initExpressions()}},CanvasRenderer.prototype.checkPendingElements=function(){for(;this.pendingElements.length;){this.pendingElements.pop().checkParenting()}},CanvasRenderer.prototype.hide=function(){this.animationItem.container.style.display="none"},CanvasRenderer.prototype.show=function(){this.animationItem.container.style.display="block"},extendPrototype([BaseRenderer],HybridRenderer),HybridRenderer.prototype.buildItem=SVGRenderer.prototype.buildItem,HybridRenderer.prototype.checkPendingElements=function(){for(;this.pendingElements.length;){this.pendingElements.pop().checkParenting()}},HybridRenderer.prototype.appendElementInPos=function(t,e){var r=t.getBaseElement();if(r){var i=this.layers[e];if(i.ddd&&this.supports3d)this.addTo3dContainer(r,e);else if(this.threeDElements)this.addTo3dContainer(r,e);else{for(var s,a,n=0;n<e;)this.elements[n]&&!0!==this.elements[n]&&this.elements[n].getBaseElement&&(a=this.elements[n],s=(this.layers[n].ddd?this.getThreeDContainerByPos(n):a.getBaseElement())||s),n+=1;s?i.ddd&&this.supports3d||this.layerElement.insertBefore(r,s):i.ddd&&this.supports3d||this.layerElement.appendChild(r)}}},HybridRenderer.prototype.createShape=function(t){return this.supports3d?new HShapeElement(t,this.globalData,this):new SVGShapeElement(t,this.globalData,this)},HybridRenderer.prototype.createText=function(t){return this.supports3d?new HTextElement(t,this.globalData,this):new SVGTextElement(t,this.globalData,this)},HybridRenderer.prototype.createCamera=function(t){return this.camera=new HCameraElement(t,this.globalData,this),this.camera},HybridRenderer.prototype.createImage=function(t){return this.supports3d?new HImageElement(t,this.globalData,this):new IImageElement(t,this.globalData,this)},HybridRenderer.prototype.createComp=function(t){return this.supports3d?new HCompElement(t,this.globalData,this):new SVGCompElement(t,this.globalData,this)},HybridRenderer.prototype.createSolid=function(t){return this.supports3d?new HSolidElement(t,this.globalData,this):new ISolidElement(t,this.globalData,this)},HybridRenderer.prototype.createNull=SVGRenderer.prototype.createNull,HybridRenderer.prototype.getThreeDContainerByPos=function(t){for(var e=0,r=this.threeDElements.length;e<r;){if(this.threeDElements[e].startPos<=t&&this.threeDElements[e].endPos>=t)return this.threeDElements[e].perspectiveElem;e+=1}},HybridRenderer.prototype.createThreeDContainer=function(t,e){var r=createTag("div");styleDiv(r);var i=createTag("div");styleDiv(i),"3d"===e&&(r.style.width=this.globalData.compSize.w+"px",r.style.height=this.globalData.compSize.h+"px",r.style.transformOrigin=r.style.mozTransformOrigin=r.style.webkitTransformOrigin="50% 50%",i.style.transform=i.style.webkitTransform="matrix3d(1,0,0,0,0,1,0,0,0,0,1,0,0,0,0,1)"),r.appendChild(i);var s={container:i,perspectiveElem:r,startPos:t,endPos:t,type:e};return this.threeDElements.push(s),s},HybridRenderer.prototype.build3dContainers=function(){var t,e,r=this.layers.length,i="";for(t=0;t<r;t+=1)this.layers[t].ddd&&3!==this.layers[t].ty?"3d"!==i&&(i="3d",e=this.createThreeDContainer(t,"3d")):"2d"!==i&&(i="2d",e=this.createThreeDContainer(t,"2d")),e.endPos=Math.max(e.endPos,t);for(t=(r=this.threeDElements.length)-1;0<=t;t--)this.resizerElem.appendChild(this.threeDElements[t].perspectiveElem)},HybridRenderer.prototype.addTo3dContainer=function(t,e){for(var r=0,i=this.threeDElements.length;r<i;){if(e<=this.threeDElements[r].endPos){for(var s,a=this.threeDElements[r].startPos;a<e;)this.elements[a]&&this.elements[a].getBaseElement&&(s=this.elements[a].getBaseElement()),a+=1;s?this.threeDElements[r].container.insertBefore(t,s):this.threeDElements[r].container.appendChild(t);break}r+=1}},HybridRenderer.prototype.configAnimation=function(t){var e=createTag("div"),r=this.animationItem.wrapper;e.style.width=t.w+"px",e.style.height=t.h+"px",styleDiv(this.resizerElem=e),e.style.transformStyle=e.style.webkitTransformStyle=e.style.mozTransformStyle="flat",this.renderConfig.className&&e.setAttribute("class",this.renderConfig.className),r.appendChild(e),e.style.overflow="hidden";var i=createNS("svg");i.setAttribute("width","1"),i.setAttribute("height","1"),styleDiv(i),this.resizerElem.appendChild(i);var s=createNS("defs");i.appendChild(s),this.data=t,this.setupGlobalData(t,i),this.globalData.defs=s,this.layers=t.layers,this.layerElement=this.resizerElem,this.build3dContainers(),this.updateContainerSize()},HybridRenderer.prototype.destroy=function(){this.animationItem.wrapper.innerHTML="",this.animationItem.container=null,this.globalData.defs=null;var t,e=this.layers?this.layers.length:0;for(t=0;t<e;t++)this.elements[t].destroy();this.elements.length=0,this.destroyed=!0,this.animationItem=null},HybridRenderer.prototype.updateContainerSize=function(){var t,e,r,i,s=this.animationItem.wrapper.offsetWidth,a=this.animationItem.wrapper.offsetHeight;i=s/a<this.globalData.compSize.w/this.globalData.compSize.h?(t=s/this.globalData.compSize.w,e=s/this.globalData.compSize.w,r=0,(a-this.globalData.compSize.h*(s/this.globalData.compSize.w))/2):(t=a/this.globalData.compSize.h,e=a/this.globalData.compSize.h,r=(s-this.globalData.compSize.w*(a/this.globalData.compSize.h))/2,0),this.resizerElem.style.transform=this.resizerElem.style.webkitTransform="matrix3d("+t+",0,0,0,0,"+e+",0,0,0,0,1,0,"+r+","+i+",0,1)"},HybridRenderer.prototype.renderFrame=SVGRenderer.prototype.renderFrame,HybridRenderer.prototype.hide=function(){this.resizerElem.style.display="none"},HybridRenderer.prototype.show=function(){this.resizerElem.style.display="block"},HybridRenderer.prototype.initItems=function(){if(this.buildAllItems(),this.camera)this.camera.setup();else{var t,e=this.globalData.compSize.w,r=this.globalData.compSize.h,i=this.threeDElements.length;for(t=0;t<i;t+=1)this.threeDElements[t].perspectiveElem.style.perspective=this.threeDElements[t].perspectiveElem.style.webkitPerspective=Math.sqrt(Math.pow(e,2)+Math.pow(r,2))+"px"}},HybridRenderer.prototype.searchExtraCompositions=function(t){var e,r=t.length,i=createTag("div");for(e=0;e<r;e+=1)if(t[e].xt){var s=this.createComp(t[e],i,this.globalData.comp,null);s.initExpressions(),this.globalData.projectInterface.registerComposition(s)}},MaskElement.prototype.getMaskProperty=function(t){return this.viewData[t].prop},MaskElement.prototype.renderFrame=function(t){var e,r=this.element.finalTransform.mat,i=this.masksProperties.length;for(e=0;e<i;e++)if((this.viewData[e].prop._mdf||t)&&this.drawPath(this.masksProperties[e],this.viewData[e].prop.v,this.viewData[e]),(this.viewData[e].op._mdf||t)&&this.viewData[e].elem.setAttribute("fill-opacity",this.viewData[e].op.v),"n"!==this.masksProperties[e].mode&&(this.viewData[e].invRect&&(this.element.finalTransform.mProp._mdf||t)&&(this.viewData[e].invRect.setAttribute("x",-r.props[12]),this.viewData[e].invRect.setAttribute("y",-r.props[13])),this.storedData[e].x&&(this.storedData[e].x._mdf||t))){var s=this.storedData[e].expan;this.storedData[e].x.v<0?("erode"!==this.storedData[e].lastOperator&&(this.storedData[e].lastOperator="erode",this.storedData[e].elem.setAttribute("filter","url("+locationHref+"#"+this.storedData[e].filterId+")")),s.setAttribute("radius",-this.storedData[e].x.v)):("dilate"!==this.storedData[e].lastOperator&&(this.storedData[e].lastOperator="dilate",this.storedData[e].elem.setAttribute("filter",null)),this.storedData[e].elem.setAttribute("stroke-width",2*this.storedData[e].x.v))}},MaskElement.prototype.getMaskelement=function(){return this.maskElement},MaskElement.prototype.createLayerSolidPath=function(){var t="M0,0 ";return t+=" h"+this.globalData.compSize.w,t+=" v"+this.globalData.compSize.h,t+=" h-"+this.globalData.compSize.w,t+=" v-"+this.globalData.compSize.h+" "},MaskElement.prototype.drawPath=function(t,e,r){var i,s,a=" M"+e.v[0][0]+","+e.v[0][1];for(s=e._length,i=1;i<s;i+=1)a+=" C"+e.o[i-1][0]+","+e.o[i-1][1]+" "+e.i[i][0]+","+e.i[i][1]+" "+e.v[i][0]+","+e.v[i][1];if(e.c&&1<s&&(a+=" C"+e.o[i-1][0]+","+e.o[i-1][1]+" "+e.i[0][0]+","+e.i[0][1]+" "+e.v[0][0]+","+e.v[0][1]),r.lastPath!==a){var n="";r.elem&&(e.c&&(n=t.inv?this.solidPath+a:a),r.elem.setAttribute("d",n)),r.lastPath=a}},MaskElement.prototype.destroy=function(){this.element=null,this.globalData=null,this.maskElement=null,this.data=null,this.masksProperties=null},HierarchyElement.prototype={initHierarchy:function(){this.hierarchy=[],this._isParent=!1,this.checkParenting()},setHierarchy:function(t){this.hierarchy=t},setAsParent:function(){this._isParent=!0},checkParenting:function(){void 0!==this.data.parent&&this.comp.buildElementParenting(this,this.data.parent,[])}},FrameElement.prototype={initFrame:function(){this._isFirstFrame=!1,this.dynamicProperties=[],this._mdf=!1},prepareProperties:function(t,e){var r,i=this.dynamicProperties.length;for(r=0;r<i;r+=1)(e||this._isParent&&"transform"===this.dynamicProperties[r].propType)&&(this.dynamicProperties[r].getValue(),this.dynamicProperties[r]._mdf&&(this.globalData._mdf=!0,this._mdf=!0))},addDynamicProperty:function(t){-1===this.dynamicProperties.indexOf(t)&&this.dynamicProperties.push(t)}},TransformElement.prototype={initTransform:function(){this.finalTransform={mProp:this.data.ks?TransformPropertyFactory.getTransformProperty(this,this.data.ks,this):{o:0},_matMdf:!1,_opMdf:!1,mat:new Matrix},this.data.ao&&(this.finalTransform.mProp.autoOriented=!0),this.data.ty},renderTransform:function(){if(this.finalTransform._opMdf=this.finalTransform.mProp.o._mdf||this._isFirstFrame,this.finalTransform._matMdf=this.finalTransform.mProp._mdf||this._isFirstFrame,this.hierarchy){var t,e=this.finalTransform.mat,r=0,i=this.hierarchy.length;if(!this.finalTransform._matMdf)for(;r<i;){if(this.hierarchy[r].finalTransform.mProp._mdf){this.finalTransform._matMdf=!0;break}r+=1}if(this.finalTransform._matMdf)for(t=this.finalTransform.mProp.v.props,e.cloneFromProps(t),r=0;r<i;r+=1)t=this.hierarchy[r].finalTransform.mProp.v.props,e.transform(t[0],t[1],t[2],t[3],t[4],t[5],t[6],t[7],t[8],t[9],t[10],t[11],t[12],t[13],t[14],t[15])}},globalToLocal:function(t){var e=[];e.push(this.finalTransform);for(var r=!0,i=this.comp;r;)i.finalTransform?(i.data.hasMask&&e.splice(0,0,i.finalTransform),i=i.comp):r=!1;var s,a,n=e.length;for(s=0;s<n;s+=1)a=e[s].mat.applyToPointArray(0,0,0),t=[t[0]-a[0],t[1]-a[1],0];return t},mHelper:new Matrix},RenderableElement.prototype={initRenderable:function(){this.isInRange=!1,this.hidden=!1,this.isTransparent=!1,this.renderableComponents=[]},addRenderableComponent:function(t){-1===this.renderableComponents.indexOf(t)&&this.renderableComponents.push(t)},removeRenderableComponent:function(t){-1!==this.renderableComponents.indexOf(t)&&this.renderableComponents.splice(this.renderableComponents.indexOf(t),1)},prepareRenderableFrame:function(t){this.checkLayerLimits(t)},checkTransparency:function(){this.finalTransform.mProp.o.v<=0?!this.isTransparent&&this.globalData.renderConfig.hideOnTransparent&&(this.isTransparent=!0,this.hide()):this.isTransparent&&(this.isTransparent=!1,this.show())},checkLayerLimits:function(t){this.data.ip-this.data.st<=t&&this.data.op-this.data.st>t?!0!==this.isInRange&&(this.globalData._mdf=!0,this._mdf=!0,this.isInRange=!0,this.show()):!1!==this.isInRange&&(this.globalData._mdf=!0,this.isInRange=!1,this.hide())},renderRenderable:function(){var t,e=this.renderableComponents.length;for(t=0;t<e;t+=1)this.renderableComponents[t].renderFrame(this._isFirstFrame)},sourceRectAtTime:function(){return{top:0,left:0,width:100,height:100}},getLayerSize:function(){return 5===this.data.ty?{w:this.data.textData.width,h:this.data.textData.height}:{w:this.data.width,h:this.data.height}}},extendPrototype([RenderableElement,createProxyFunction({initElement:function(t,e,r){this.initFrame(),this.initBaseData(t,e,r),this.initTransform(t,e,r),this.initHierarchy(),this.initRenderable(),this.initRendererElement(),this.createContainerElements(),this.createRenderableComponents(),this.createContent(),this.hide()},hide:function(){this.hidden||this.isInRange&&!this.isTransparent||((this.baseElement||this.layerElement).style.display="none",this.hidden=!0)},show:function(){this.isInRange&&!this.isTransparent&&(this.data.hd||((this.baseElement||this.layerElement).style.display="block"),this.hidden=!1,this._isFirstFrame=!0)},renderFrame:function(){this.data.hd||this.hidden||(this.renderTransform(),this.renderRenderable(),this.renderElement(),this.renderInnerContent(),this._isFirstFrame&&(this._isFirstFrame=!1))},renderInnerContent:function(){},prepareFrame:function(t){this._mdf=!1,this.prepareRenderableFrame(t),this.prepareProperties(t,this.isInRange),this.checkTransparency()},destroy:function(){this.innerElem=null,this.destroyBaseElement()}})],RenderableDOMElement),SVGStyleData.prototype.reset=function(){this.d="",this._mdf=!1},SVGShapeData.prototype.setAsAnimated=function(){this._isAnimated=!0},extendPrototype([DynamicPropertyContainer],SVGStrokeStyleData),extendPrototype([DynamicPropertyContainer],SVGFillStyleData),SVGGradientFillStyleData.prototype.initGradientData=function(t,e,r){this.o=PropertyFactory.getProp(t,e.o,0,.01,this),this.s=PropertyFactory.getProp(t,e.s,1,null,this),this.e=PropertyFactory.getProp(t,e.e,1,null,this),this.h=PropertyFactory.getProp(t,e.h||{k:0},0,.01,this),this.a=PropertyFactory.getProp(t,e.a||{k:0},0,degToRads,this),this.g=new GradientProperty(t,e.g,this),this.style=r,this.stops=[],this.setGradientData(r.pElem,e),this.setGradientOpacity(e,r),this._isAnimated=!!this._isAnimated},SVGGradientFillStyleData.prototype.setGradientData=function(t,e){var r=createElementID(),i=createNS(1===e.t?"linearGradient":"radialGradient");i.setAttribute("id",r),i.setAttribute("spreadMethod","pad"),i.setAttribute("gradientUnits","userSpaceOnUse");var s,a,n,o=[];for(n=4*e.g.p,a=0;a<n;a+=4)s=createNS("stop"),i.appendChild(s),o.push(s);t.setAttribute("gf"===e.ty?"fill":"stroke","url("+locationHref+"#"+r+")"),this.gf=i,this.cst=o},SVGGradientFillStyleData.prototype.setGradientOpacity=function(t,e){if(this.g._hasOpacity&&!this.g._collapsable){var r,i,s,a=createNS("mask"),n=createNS("path");a.appendChild(n);var o=createElementID(),h=createElementID();a.setAttribute("id",h);var l=createNS(1===t.t?"linearGradient":"radialGradient");l.setAttribute("id",o),l.setAttribute("spreadMethod","pad"),l.setAttribute("gradientUnits","userSpaceOnUse"),s=t.g.k.k[0].s?t.g.k.k[0].s.length:t.g.k.k.length;var p=this.stops;for(i=4*t.g.p;i<s;i+=2)(r=createNS("stop")).setAttribute("stop-color","rgb(255,255,255)"),l.appendChild(r),p.push(r);n.setAttribute("gf"===t.ty?"fill":"stroke","url("+locationHref+"#"+o+")"),this.of=l,this.ms=a,this.ost=p,this.maskId=h,e.msElem=n}},extendPrototype([DynamicPropertyContainer],SVGGradientFillStyleData),extendPrototype([SVGGradientFillStyleData,DynamicPropertyContainer],SVGGradientStrokeStyleData);var SVGElementsRenderer=function(){var y=new Matrix,g=new Matrix;function e(t,e,r){(r||e.transform.op._mdf)&&e.transform.container.setAttribute("opacity",e.transform.op.v),(r||e.transform.mProps._mdf)&&e.transform.container.setAttribute("transform",e.transform.mProps.v.to2dCSS())}function r(t,e,r){var i,s,a,n,o,h,l,p,m,f,c,d=e.styles.length,u=e.lvl;for(h=0;h<d;h+=1){if(n=e.sh._mdf||r,e.styles[h].lvl<u){for(p=g.reset(),f=u-e.styles[h].lvl,c=e.transformers.length-1;!n&&0<f;)n=e.transformers[c].mProps._mdf||n,f--,c--;if(n)for(f=u-e.styles[h].lvl,c=e.transformers.length-1;0<f;)m=e.transformers[c].mProps.v.props,p.transform(m[0],m[1],m[2],m[3],m[4],m[5],m[6],m[7],m[8],m[9],m[10],m[11],m[12],m[13],m[14],m[15]),f--,c--}else p=y;if(s=(l=e.sh.paths)._length,n){for(a="",i=0;i<s;i+=1)(o=l.shapes[i])&&o._length&&(a+=buildShapeString(o,o._length,o.c,p));e.caches[h]=a}else a=e.caches[h];e.styles[h].d+=!0===t.hd?"":a,e.styles[h]._mdf=n||e.styles[h]._mdf}}function i(t,e,r){var i=e.style;(e.c._mdf||r)&&i.pElem.setAttribute("fill","rgb("+bm_floor(e.c.v[0])+","+bm_floor(e.c.v[1])+","+bm_floor(e.c.v[2])+")"),(e.o._mdf||r)&&i.pElem.setAttribute("fill-opacity",e.o.v)}function s(t,e,r){a(t,e,r),n(t,e,r)}function a(t,e,r){var i,s,a,n,o,h=e.gf,l=e.g._hasOpacity,p=e.s.v,m=e.e.v;if(e.o._mdf||r){var f="gf"===t.ty?"fill-opacity":"stroke-opacity";e.style.pElem.setAttribute(f,e.o.v)}if(e.s._mdf||r){var c=1===t.t?"x1":"cx",d="x1"===c?"y1":"cy";h.setAttribute(c,p[0]),h.setAttribute(d,p[1]),l&&!e.g._collapsable&&(e.of.setAttribute(c,p[0]),e.of.setAttribute(d,p[1]))}if(e.g._cmdf||r){i=e.cst;var u=e.g.c;for(a=i.length,s=0;s<a;s+=1)(n=i[s]).setAttribute("offset",u[4*s]+"%"),n.setAttribute("stop-color","rgb("+u[4*s+1]+","+u[4*s+2]+","+u[4*s+3]+")")}if(l&&(e.g._omdf||r)){var y=e.g.o;for(a=(i=e.g._collapsable?e.cst:e.ost).length,s=0;s<a;s+=1)n=i[s],e.g._collapsable||n.setAttribute("offset",y[2*s]+"%"),n.setAttribute("stop-opacity",y[2*s+1])}if(1===t.t)(e.e._mdf||r)&&(h.setAttribute("x2",m[0]),h.setAttribute("y2",m[1]),l&&!e.g._collapsable&&(e.of.setAttribute("x2",m[0]),e.of.setAttribute("y2",m[1])));else if((e.s._mdf||e.e._mdf||r)&&(o=Math.sqrt(Math.pow(p[0]-m[0],2)+Math.pow(p[1]-m[1],2)),h.setAttribute("r",o),l&&!e.g._collapsable&&e.of.setAttribute("r",o)),e.e._mdf||e.h._mdf||e.a._mdf||r){o||(o=Math.sqrt(Math.pow(p[0]-m[0],2)+Math.pow(p[1]-m[1],2)));var g=Math.atan2(m[1]-p[1],m[0]-p[0]),v=o*(1<=e.h.v?.99:e.h.v<=-1?-.99:e.h.v),b=Math.cos(g+e.a.v)*v+p[0],E=Math.sin(g+e.a.v)*v+p[1];h.setAttribute("fx",b),h.setAttribute("fy",E),l&&!e.g._collapsable&&(e.of.setAttribute("fx",b),e.of.setAttribute("fy",E))}}function n(t,e,r){var i=e.style,s=e.d;s&&(s._mdf||r)&&s.dashStr&&(i.pElem.setAttribute("stroke-dasharray",s.dashStr),i.pElem.setAttribute("stroke-dashoffset",s.dashoffset[0])),e.c&&(e.c._mdf||r)&&i.pElem.setAttribute("stroke","rgb("+bm_floor(e.c.v[0])+","+bm_floor(e.c.v[1])+","+bm_floor(e.c.v[2])+")"),(e.o._mdf||r)&&i.pElem.setAttribute("stroke-opacity",e.o.v),(e.w._mdf||r)&&(i.pElem.setAttribute("stroke-width",e.w.v),i.msElem&&i.msElem.setAttribute("stroke-width",e.w.v))}return{createRenderFunction:function(t){t.ty;switch(t.ty){case"fl":return i;case"gf":return a;case"gs":return s;case"st":return n;case"sh":case"el":case"rc":case"sr":return r;case"tr":return e}}}}();function ShapeTransformManager(){this.sequences={},this.sequenceList=[],this.transform_key_count=0}function CVShapeData(t,e,r,i){this.styledShapes=[],this.tr=[0,0,0,0,0,0];var s=4;"rc"==e.ty?s=5:"el"==e.ty?s=6:"sr"==e.ty&&(s=7),this.sh=ShapePropertyFactory.getShapeProp(t,e,s,t);var a,n,o=r.length;for(a=0;a<o;a+=1)r[a].closed||(n={transforms:i.addTransformSequence(r[a].transforms),trNodes:[]},this.styledShapes.push(n),r[a].elements.push(n))}function BaseElement(){}function NullElement(t,e,r){this.initFrame(),this.initBaseData(t,e,r),this.initFrame(),this.initTransform(t,e,r),this.initHierarchy()}function SVGBaseElement(){}function IShapeElement(){}function ITextElement(){}function ICompElement(){}function IImageElement(t,e,r){this.assetData=e.getAssetData(t.refId),this.initElement(t,e,r),this.sourceRect={top:0,left:0,width:this.assetData.w,height:this.assetData.h}}function ISolidElement(t,e,r){this.initElement(t,e,r)}function SVGCompElement(t,e,r){this.layers=t.layers,this.supports3d=!0,this.completeLayers=!1,this.pendingElements=[],this.elements=this.layers?createSizedArray(this.layers.length):[],this.initElement(t,e,r),this.tm=t.tm?PropertyFactory.getProp(this,t.tm,0,e.frameRate,this):{_placeholder:!0}}function SVGTextElement(t,e,r){this.textSpans=[],this.renderType="svg",this.initElement(t,e,r)}function SVGShapeElement(t,e,r){this.shapes=[],this.shapesData=t.shapes,this.stylesList=[],this.shapeModifiers=[],this.itemsData=[],this.processedElements=[],this.animatedContents=[],this.initElement(t,e,r),this.prevViewData=[]}function SVGTintFilter(t,e){this.filterManager=e;var r=createNS("feColorMatrix");if(r.setAttribute("type","matrix"),r.setAttribute("color-interpolation-filters","linearRGB"),r.setAttribute("values","0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0"),r.setAttribute("result","f1"),t.appendChild(r),(r=createNS("feColorMatrix")).setAttribute("type","matrix"),r.setAttribute("color-interpolation-filters","sRGB"),r.setAttribute("values","1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 1 0"),r.setAttribute("result","f2"),t.appendChild(r),this.matrixFilter=r,100!==e.effectElements[2].p.v||e.effectElements[2].p.k){var i,s=createNS("feMerge");t.appendChild(s),(i=createNS("feMergeNode")).setAttribute("in","SourceGraphic"),s.appendChild(i),(i=createNS("feMergeNode")).setAttribute("in","f2"),s.appendChild(i)}}function SVGFillFilter(t,e){this.filterManager=e;var r=createNS("feColorMatrix");r.setAttribute("type","matrix"),r.setAttribute("color-interpolation-filters","sRGB"),r.setAttribute("values","1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 1 0"),t.appendChild(r),this.matrixFilter=r}function SVGGaussianBlurEffect(t,e){t.setAttribute("x","-100%"),t.setAttribute("y","-100%"),t.setAttribute("width","300%"),t.setAttribute("height","300%"),this.filterManager=e;var r=createNS("feGaussianBlur");t.appendChild(r),this.feGaussianBlur=r}function SVGStrokeEffect(t,e){this.initialized=!1,this.filterManager=e,this.elem=t,this.paths=[]}function SVGTritoneFilter(t,e){this.filterManager=e;var r=createNS("feColorMatrix");r.setAttribute("type","matrix"),r.setAttribute("color-interpolation-filters","linearRGB"),r.setAttribute("values","0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0"),r.setAttribute("result","f1"),t.appendChild(r);var i=createNS("feComponentTransfer");i.setAttribute("color-interpolation-filters","sRGB"),t.appendChild(i),this.matrixFilter=i;var s=createNS("feFuncR");s.setAttribute("type","table"),i.appendChild(s),this.feFuncR=s;var a=createNS("feFuncG");a.setAttribute("type","table"),i.appendChild(a),this.feFuncG=a;var n=createNS("feFuncB");n.setAttribute("type","table"),i.appendChild(n),this.feFuncB=n}function SVGProLevelsFilter(t,e){this.filterManager=e;var r=this.filterManager.effectElements,i=createNS("feComponentTransfer");(r[10].p.k||0!==r[10].p.v||r[11].p.k||1!==r[11].p.v||r[12].p.k||1!==r[12].p.v||r[13].p.k||0!==r[13].p.v||r[14].p.k||1!==r[14].p.v)&&(this.feFuncR=this.createFeFunc("feFuncR",i)),(r[17].p.k||0!==r[17].p.v||r[18].p.k||1!==r[18].p.v||r[19].p.k||1!==r[19].p.v||r[20].p.k||0!==r[20].p.v||r[21].p.k||1!==r[21].p.v)&&(this.feFuncG=this.createFeFunc("feFuncG",i)),(r[24].p.k||0!==r[24].p.v||r[25].p.k||1!==r[25].p.v||r[26].p.k||1!==r[26].p.v||r[27].p.k||0!==r[27].p.v||r[28].p.k||1!==r[28].p.v)&&(this.feFuncB=this.createFeFunc("feFuncB",i)),(r[31].p.k||0!==r[31].p.v||r[32].p.k||1!==r[32].p.v||r[33].p.k||1!==r[33].p.v||r[34].p.k||0!==r[34].p.v||r[35].p.k||1!==r[35].p.v)&&(this.feFuncA=this.createFeFunc("feFuncA",i)),(this.feFuncR||this.feFuncG||this.feFuncB||this.feFuncA)&&(i.setAttribute("color-interpolation-filters","sRGB"),t.appendChild(i),i=createNS("feComponentTransfer")),(r[3].p.k||0!==r[3].p.v||r[4].p.k||1!==r[4].p.v||r[5].p.k||1!==r[5].p.v||r[6].p.k||0!==r[6].p.v||r[7].p.k||1!==r[7].p.v)&&(i.setAttribute("color-interpolation-filters","sRGB"),t.appendChild(i),this.feFuncRComposed=this.createFeFunc("feFuncR",i),this.feFuncGComposed=this.createFeFunc("feFuncG",i),this.feFuncBComposed=this.createFeFunc("feFuncB",i))}function SVGDropShadowEffect(t,e){t.setAttribute("x","-100%"),t.setAttribute("y","-100%"),t.setAttribute("width","400%"),t.setAttribute("height","400%"),this.filterManager=e;var r=createNS("feGaussianBlur");r.setAttribute("in","SourceAlpha"),r.setAttribute("result","drop_shadow_1"),r.setAttribute("stdDeviation","0"),this.feGaussianBlur=r,t.appendChild(r);var i=createNS("feOffset");i.setAttribute("dx","25"),i.setAttribute("dy","0"),i.setAttribute("in","drop_shadow_1"),i.setAttribute("result","drop_shadow_2"),this.feOffset=i,t.appendChild(i);var s=createNS("feFlood");s.setAttribute("flood-color","#00ff00"),s.setAttribute("flood-opacity","1"),s.setAttribute("result","drop_shadow_3"),this.feFlood=s,t.appendChild(s);var a=createNS("feComposite");a.setAttribute("in","drop_shadow_3"),a.setAttribute("in2","drop_shadow_2"),a.setAttribute("operator","in"),a.setAttribute("result","drop_shadow_4"),t.appendChild(a);var n,o=createNS("feMerge");t.appendChild(o),n=createNS("feMergeNode"),o.appendChild(n),(n=createNS("feMergeNode")).setAttribute("in","SourceGraphic"),this.feMergeNode=n,this.feMerge=o,this.originalNodeAdded=!1,o.appendChild(n)}ShapeTransformManager.prototype={addTransformSequence:function(t){var e,r=t.length,i="_";for(e=0;e<r;e+=1)i+=t[e].transform.key+"_";var s=this.sequences[i];return s||(s={transforms:[].concat(t),finalTransform:new Matrix,_mdf:!1},this.sequences[i]=s,this.sequenceList.push(s)),s},processSequence:function(t,e){for(var r,i=0,s=t.transforms.length,a=e;i<s&&!e;){if(t.transforms[i].transform.mProps._mdf){a=!0;break}i+=1}if(a)for(t.finalTransform.reset(),i=s-1;0<=i;i-=1)r=t.transforms[i].transform.mProps.v.props,t.finalTransform.transform(r[0],r[1],r[2],r[3],r[4],r[5],r[6],r[7],r[8],r[9],r[10],r[11],r[12],r[13],r[14],r[15]);t._mdf=a},processSequences:function(t){var e,r=this.sequenceList.length;for(e=0;e<r;e+=1)this.processSequence(this.sequenceList[e],t)},getNewKey:function(){return"_"+this.transform_key_count++}},CVShapeData.prototype.setAsAnimated=SVGShapeData.prototype.setAsAnimated,BaseElement.prototype={checkMasks:function(){if(!this.data.hasMask)return!1;for(var t=0,e=this.data.masksProperties.length;t<e;){if("n"!==this.data.masksProperties[t].mode&&!1!==this.data.masksProperties[t].cl)return!0;t+=1}return!1},initExpressions:function(){this.layerInterface=LayerExpressionInterface(this),this.data.hasMask&&this.maskManager&&this.layerInterface.registerMaskInterface(this.maskManager);var t=EffectsExpressionInterface.createEffectsInterface(this,this.layerInterface);this.layerInterface.registerEffectsInterface(t),0===this.data.ty||this.data.xt?this.compInterface=CompExpressionInterface(this):4===this.data.ty?(this.layerInterface.shapeInterface=ShapeExpressionInterface(this.shapesData,this.itemsData,this.layerInterface),this.layerInterface.content=this.layerInterface.shapeInterface):5===this.data.ty&&(this.layerInterface.textInterface=TextExpressionInterface(this),this.layerInterface.text=this.layerInterface.textInterface)},setBlendMode:function(){var t=getBlendMode(this.data.bm);(this.baseElement||this.layerElement).style["mix-blend-mode"]=t},initBaseData:function(t,e,r){this.globalData=e,this.comp=r,this.data=t,this.layerId=createElementID(),this.data.sr||(this.data.sr=1),this.effectsManager=new EffectsManager(this.data,this,this.dynamicProperties)},getType:function(){return this.type},sourceRectAtTime:function(){}},NullElement.prototype.prepareFrame=function(t){this.prepareProperties(t,!0)},NullElement.prototype.renderFrame=function(){},NullElement.prototype.getBaseElement=function(){return null},NullElement.prototype.destroy=function(){},NullElement.prototype.sourceRectAtTime=function(){},NullElement.prototype.hide=function(){},extendPrototype([BaseElement,TransformElement,HierarchyElement,FrameElement],NullElement),SVGBaseElement.prototype={initRendererElement:function(){this.layerElement=createNS("g")},createContainerElements:function(){this.matteElement=createNS("g"),this.transformedElement=this.layerElement,this.maskedElement=this.layerElement,this._sizeChanged=!1;var t,e,r,i=null;if(this.data.td){if(3==this.data.td||1==this.data.td){var s=createNS("mask");s.setAttribute("id",this.layerId),s.setAttribute("mask-type",3==this.data.td?"luminance":"alpha"),s.appendChild(this.layerElement),i=s,this.globalData.defs.appendChild(s),featureSupport.maskType||1!=this.data.td||(s.setAttribute("mask-type","luminance"),t=createElementID(),e=filtersFactory.createFilter(t),this.globalData.defs.appendChild(e),e.appendChild(filtersFactory.createAlphaToLuminanceFilter()),(r=createNS("g")).appendChild(this.layerElement),i=r,s.appendChild(r),r.setAttribute("filter","url("+locationHref+"#"+t+")"))}else if(2==this.data.td){var a=createNS("mask");a.setAttribute("id",this.layerId),a.setAttribute("mask-type","alpha");var n=createNS("g");a.appendChild(n),t=createElementID(),e=filtersFactory.createFilter(t);var o=createNS("feComponentTransfer");o.setAttribute("in","SourceGraphic"),e.appendChild(o);var h=createNS("feFuncA");h.setAttribute("type","table"),h.setAttribute("tableValues","1.0 0.0"),o.appendChild(h),this.globalData.defs.appendChild(e);var l=createNS("rect");l.setAttribute("width",this.comp.data.w),l.setAttribute("height",this.comp.data.h),l.setAttribute("x","0"),l.setAttribute("y","0"),l.setAttribute("fill","#ffffff"),l.setAttribute("opacity","0"),n.setAttribute("filter","url("+locationHref+"#"+t+")"),n.appendChild(l),n.appendChild(this.layerElement),i=n,featureSupport.maskType||(a.setAttribute("mask-type","luminance"),e.appendChild(filtersFactory.createAlphaToLuminanceFilter()),r=createNS("g"),n.appendChild(l),r.appendChild(this.layerElement),i=r,n.appendChild(r)),this.globalData.defs.appendChild(a)}}else this.data.tt?(this.matteElement.appendChild(this.layerElement),i=this.matteElement,this.baseElement=this.matteElement):this.baseElement=this.layerElement;if(this.data.ln&&this.layerElement.setAttribute("id",this.data.ln),this.data.cl&&this.layerElement.setAttribute("class",this.data.cl),0===this.data.ty&&!this.data.hd){var p=createNS("clipPath"),m=createNS("path");m.setAttribute("d","M0,0 L"+this.data.w+",0 L"+this.data.w+","+this.data.h+" L0,"+this.data.h+"z");var f=createElementID();if(p.setAttribute("id",f),p.appendChild(m),this.globalData.defs.appendChild(p),this.checkMasks()){var c=createNS("g");c.setAttribute("clip-path","url("+locationHref+"#"+f+")"),c.appendChild(this.layerElement),this.transformedElement=c,i?i.appendChild(this.transformedElement):this.baseElement=this.transformedElement}else this.layerElement.setAttribute("clip-path","url("+locationHref+"#"+f+")")}0!==this.data.bm&&this.setBlendMode()},renderElement:function(){this.finalTransform._matMdf&&this.transformedElement.setAttribute("transform",this.finalTransform.mat.to2dCSS()),this.finalTransform._opMdf&&this.transformedElement.setAttribute("opacity",this.finalTransform.mProp.o.v)},destroyBaseElement:function(){this.layerElement=null,this.matteElement=null,this.maskManager.destroy()},getBaseElement:function(){return this.data.hd?null:this.baseElement},createRenderableComponents:function(){this.maskManager=new MaskElement(this.data,this,this.globalData),this.renderableEffectsManager=new SVGEffects(this)},setMatte:function(t){this.matteElement&&this.matteElement.setAttribute("mask","url("+locationHref+"#"+t+")")}},IShapeElement.prototype={addShapeToModifiers:function(t){var e,r=this.shapeModifiers.length;for(e=0;e<r;e+=1)this.shapeModifiers[e].addShape(t)},isShapeInAnimatedModifiers:function(t){for(var e=this.shapeModifiers.length;0<e;)if(this.shapeModifiers[0].isAnimatedWithShape(t))return!0;return!1},renderModifiers:function(){if(this.shapeModifiers.length){var t,e=this.shapes.length;for(t=0;t<e;t+=1)this.shapes[t].sh.reset();for(t=(e=this.shapeModifiers.length)-1;0<=t;t-=1)this.shapeModifiers[t].processShapes(this._isFirstFrame)}},lcEnum:{1:"butt",2:"round",3:"square"},ljEnum:{1:"miter",2:"round",3:"bevel"},searchProcessedElement:function(t){for(var e=this.processedElements,r=0,i=e.length;r<i;){if(e[r].elem===t)return e[r].pos;r+=1}return 0},addProcessedElement:function(t,e){for(var r=this.processedElements,i=r.length;i;)if(r[i-=1].elem===t)return void(r[i].pos=e);r.push(new ProcessedElement(t,e))},prepareFrame:function(t){this.prepareRenderableFrame(t),this.prepareProperties(t,this.isInRange)}},ITextElement.prototype.initElement=function(t,e,r){this.lettersChangedFlag=!0,this.initFrame(),this.initBaseData(t,e,r),this.textProperty=new TextProperty(this,t.t,this.dynamicProperties),this.textAnimator=new TextAnimatorProperty(t.t,this.renderType,this),this.initTransform(t,e,r),this.initHierarchy(),this.initRenderable(),this.initRendererElement(),this.createContainerElements(),this.createRenderableComponents(),this.createContent(),this.hide(),this.textAnimator.searchProperties(this.dynamicProperties)},ITextElement.prototype.prepareFrame=function(t){this._mdf=!1,this.prepareRenderableFrame(t),this.prepareProperties(t,this.isInRange),(this.textProperty._mdf||this.textProperty._isFirstFrame)&&(this.buildNewText(),this.textProperty._isFirstFrame=!1,this.textProperty._mdf=!1)},ITextElement.prototype.createPathShape=function(t,e){var r,i,s=e.length,a="";for(r=0;r<s;r+=1)i=e[r].ks.k,a+=buildShapeString(i,i.i.length,!0,t);return a},ITextElement.prototype.updateDocumentData=function(t,e){this.textProperty.updateDocumentData(t,e)},ITextElement.prototype.canResizeFont=function(t){this.textProperty.canResizeFont(t)},ITextElement.prototype.setMinimumFontSize=function(t){this.textProperty.setMinimumFontSize(t)},ITextElement.prototype.applyTextPropertiesToMatrix=function(t,e,r,i,s){switch(t.ps&&e.translate(t.ps[0],t.ps[1]+t.ascent,0),e.translate(0,-t.ls,0),t.j){case 1:e.translate(t.justifyOffset+(t.boxWidth-t.lineWidths[r]),0,0);break;case 2:e.translate(t.justifyOffset+(t.boxWidth-t.lineWidths[r])/2,0,0)}e.translate(i,s,0)},ITextElement.prototype.buildColor=function(t){return"rgb("+Math.round(255*t[0])+","+Math.round(255*t[1])+","+Math.round(255*t[2])+")"},ITextElement.prototype.emptyProp=new LetterProps,ITextElement.prototype.destroy=function(){},extendPrototype([BaseElement,TransformElement,HierarchyElement,FrameElement,RenderableDOMElement],ICompElement),ICompElement.prototype.initElement=function(t,e,r){this.initFrame(),this.initBaseData(t,e,r),this.initTransform(t,e,r),this.initRenderable(),this.initHierarchy(),this.initRendererElement(),this.createContainerElements(),this.createRenderableComponents(),!this.data.xt&&e.progressiveLoad||this.buildAllItems(),this.hide()},ICompElement.prototype.prepareFrame=function(t){if(this._mdf=!1,this.prepareRenderableFrame(t),this.prepareProperties(t,this.isInRange),this.isInRange||this.data.xt){if(this.tm._placeholder)this.renderedFrame=t/this.data.sr;else{var e=this.tm.v;e===this.data.op&&(e=this.data.op-1),this.renderedFrame=e}var r,i=this.elements.length;for(this.completeLayers||this.checkLayers(this.renderedFrame),r=i-1;0<=r;r-=1)(this.completeLayers||this.elements[r])&&(this.elements[r].prepareFrame(this.renderedFrame-this.layers[r].st),this.elements[r]._mdf&&(this._mdf=!0))}},ICompElement.prototype.renderInnerContent=function(){var t,e=this.layers.length;for(t=0;t<e;t+=1)(this.completeLayers||this.elements[t])&&this.elements[t].renderFrame()},ICompElement.prototype.setElements=function(t){this.elements=t},ICompElement.prototype.getElements=function(){return this.elements},ICompElement.prototype.destroyElements=function(){var t,e=this.layers.length;for(t=0;t<e;t+=1)this.elements[t]&&this.elements[t].destroy()},ICompElement.prototype.destroy=function(){this.destroyElements(),this.destroyBaseElement()},extendPrototype([BaseElement,TransformElement,SVGBaseElement,HierarchyElement,FrameElement,RenderableDOMElement],IImageElement),IImageElement.prototype.createContent=function(){var t=this.globalData.getAssetsPath(this.assetData);this.innerElem=createNS("image"),this.innerElem.setAttribute("width",this.assetData.w+"px"),this.innerElem.setAttribute("height",this.assetData.h+"px"),this.innerElem.setAttribute("preserveAspectRatio",this.assetData.pr||this.globalData.renderConfig.imagePreserveAspectRatio),this.innerElem.setAttributeNS("http://www.w3.org/1999/xlink","href",t),this.layerElement.appendChild(this.innerElem)},IImageElement.prototype.sourceRectAtTime=function(){return this.sourceRect},extendPrototype([IImageElement],ISolidElement),ISolidElement.prototype.createContent=function(){var t=createNS("rect");t.setAttribute("width",this.data.sw),t.setAttribute("height",this.data.sh),t.setAttribute("fill",this.data.sc),this.layerElement.appendChild(t)},extendPrototype([SVGRenderer,ICompElement,SVGBaseElement],SVGCompElement),extendPrototype([BaseElement,TransformElement,SVGBaseElement,HierarchyElement,FrameElement,RenderableDOMElement,ITextElement],SVGTextElement),SVGTextElement.prototype.createContent=function(){this.data.singleShape&&!this.globalData.fontManager.chars&&(this.textContainer=createNS("text"))},SVGTextElement.prototype.buildTextContents=function(t){for(var e=0,r=t.length,i=[],s="";e<r;)t[e]===String.fromCharCode(13)||t[e]===String.fromCharCode(3)?(i.push(s),s=""):s+=t[e],e+=1;return i.push(s),i},SVGTextElement.prototype.buildNewText=function(){var t,e,r=this.textProperty.currentData;this.renderedLetters=createSizedArray(r?r.l.length:0),r.fc?this.layerElement.setAttribute("fill",this.buildColor(r.fc)):this.layerElement.setAttribute("fill","rgba(0,0,0,0)"),r.sc&&(this.layerElement.setAttribute("stroke",this.buildColor(r.sc)),this.layerElement.setAttribute("stroke-width",r.sw)),this.layerElement.setAttribute("font-size",r.finalSize);var i=this.globalData.fontManager.getFontByName(r.f);if(i.fClass)this.layerElement.setAttribute("class",i.fClass);else{this.layerElement.setAttribute("font-family",i.fFamily);var s=r.fWeight,a=r.fStyle;this.layerElement.setAttribute("font-style",a),this.layerElement.setAttribute("font-weight",s)}this.layerElement.setAttribute("aria-label",r.t);var n,o=r.l||[],h=!!this.globalData.fontManager.chars;e=o.length;var l,p=this.mHelper,m="",f=this.data.singleShape,c=0,d=0,u=!0,y=r.tr/1e3*r.finalSize;if(!f||h||r.sz){var g,v,b=this.textSpans.length;for(t=0;t<e;t+=1)h&&f&&0!==t||(n=t<b?this.textSpans[t]:createNS(h?"path":"text"),b<=t&&(n.setAttribute("stroke-linecap","butt"),n.setAttribute("stroke-linejoin","round"),n.setAttribute("stroke-miterlimit","4"),this.textSpans[t]=n,this.layerElement.appendChild(n)),n.style.display="inherit"),p.reset(),p.scale(r.finalSize/100,r.finalSize/100),f&&(o[t].n&&(c=-y,d+=r.yOffset,d+=u?1:0,u=!1),this.applyTextPropertiesToMatrix(r,p,o[t].line,c,d),c+=o[t].l||0,c+=y),h?(l=(g=(v=this.globalData.fontManager.getCharData(r.finalText[t],i.fStyle,this.globalData.fontManager.getFontByName(r.f).fFamily))&&v.data||{}).shapes?g.shapes[0].it:[],f?m+=this.createPathShape(p,l):n.setAttribute("d",this.createPathShape(p,l))):(f&&n.setAttribute("transform","translate("+p.props[12]+","+p.props[13]+")"),n.textContent=o[t].val,n.setAttributeNS("http://www.w3.org/XML/1998/namespace","xml:space","preserve"));f&&n&&n.setAttribute("d",m)}else{var E=this.textContainer,x="start";switch(r.j){case 1:x="end";break;case 2:x="middle"}E.setAttribute("text-anchor",x),E.setAttribute("letter-spacing",y);var P=this.buildTextContents(r.finalText);for(e=P.length,d=r.ps?r.ps[1]+r.ascent:0,t=0;t<e;t+=1)(n=this.textSpans[t]||createNS("tspan")).textContent=P[t],n.setAttribute("x",0),n.setAttribute("y",d),n.style.display="inherit",E.appendChild(n),this.textSpans[t]=n,d+=r.finalLineHeight;this.layerElement.appendChild(E)}for(;t<this.textSpans.length;)this.textSpans[t].style.display="none",t+=1;this._sizeChanged=!0},SVGTextElement.prototype.sourceRectAtTime=function(t){if(this.prepareFrame(this.comp.renderedFrame-this.data.st),this.renderInnerContent(),this._sizeChanged){this._sizeChanged=!1;var e=this.layerElement.getBBox();this.bbox={top:e.y,left:e.x,width:e.width,height:e.height}}return this.bbox},SVGTextElement.prototype.renderInnerContent=function(){if(!this.data.singleShape&&(this.textAnimator.getMeasures(this.textProperty.currentData,this.lettersChangedFlag),this.lettersChangedFlag||this.textAnimator.lettersChangedFlag)){var t,e;this._sizeChanged=!0;var r,i,s=this.textAnimator.renderedLetters,a=this.textProperty.currentData.l;for(e=a.length,t=0;t<e;t+=1)a[t].n||(r=s[t],i=this.textSpans[t],r._mdf.m&&i.setAttribute("transform",r.m),r._mdf.o&&i.setAttribute("opacity",r.o),r._mdf.sw&&i.setAttribute("stroke-width",r.sw),r._mdf.sc&&i.setAttribute("stroke",r.sc),r._mdf.fc&&i.setAttribute("fill",r.fc))}},extendPrototype([BaseElement,TransformElement,SVGBaseElement,IShapeElement,HierarchyElement,FrameElement,RenderableDOMElement],SVGShapeElement),SVGShapeElement.prototype.initSecondaryElement=function(){},SVGShapeElement.prototype.identityMatrix=new Matrix,SVGShapeElement.prototype.buildExpressionInterface=function(){},SVGShapeElement.prototype.createContent=function(){this.searchShapes(this.shapesData,this.itemsData,this.prevViewData,this.layerElement,0,[],!0),this.filterUniqueShapes()},SVGShapeElement.prototype.filterUniqueShapes=function(){var t,e,r,i,s=this.shapes.length,a=this.stylesList.length,n=[],o=!1;for(r=0;r<a;r+=1){for(i=this.stylesList[r],o=!1,t=n.length=0;t<s;t+=1)-1!==(e=this.shapes[t]).styles.indexOf(i)&&(n.push(e),o=e._isAnimated||o);1<n.length&&o&&this.setShapesAsAnimated(n)}},SVGShapeElement.prototype.setShapesAsAnimated=function(t){var e,r=t.length;for(e=0;e<r;e+=1)t[e].setAsAnimated()},SVGShapeElement.prototype.createStyleElement=function(t,e){var r,i=new SVGStyleData(t,e),s=i.pElem;if("st"===t.ty)r=new SVGStrokeStyleData(this,t,i);else if("fl"===t.ty)r=new SVGFillStyleData(this,t,i);else if("gf"===t.ty||"gs"===t.ty){r=new("gf"===t.ty?SVGGradientFillStyleData:SVGGradientStrokeStyleData)(this,t,i),this.globalData.defs.appendChild(r.gf),r.maskId&&(this.globalData.defs.appendChild(r.ms),this.globalData.defs.appendChild(r.of),s.setAttribute("mask","url("+locationHref+"#"+r.maskId+")"))}return"st"!==t.ty&&"gs"!==t.ty||(s.setAttribute("stroke-linecap",this.lcEnum[t.lc]||"round"),s.setAttribute("stroke-linejoin",this.ljEnum[t.lj]||"round"),s.setAttribute("fill-opacity","0"),1===t.lj&&s.setAttribute("stroke-miterlimit",t.ml)),2===t.r&&s.setAttribute("fill-rule","evenodd"),t.ln&&s.setAttribute("id",t.ln),t.cl&&s.setAttribute("class",t.cl),t.bm&&(s.style["mix-blend-mode"]=getBlendMode(t.bm)),this.stylesList.push(i),this.addToAnimatedContents(t,r),r},SVGShapeElement.prototype.createGroupElement=function(t){var e=new ShapeGroupData;return t.ln&&e.gr.setAttribute("id",t.ln),t.cl&&e.gr.setAttribute("class",t.cl),t.bm&&(e.gr.style["mix-blend-mode"]=getBlendMode(t.bm)),e},SVGShapeElement.prototype.createTransformElement=function(t,e){var r=TransformPropertyFactory.getTransformProperty(this,t,this),i=new SVGTransformData(r,r.o,e);return this.addToAnimatedContents(t,i),i},SVGShapeElement.prototype.createShapeElement=function(t,e,r){var i=4;"rc"===t.ty?i=5:"el"===t.ty?i=6:"sr"===t.ty&&(i=7);var s=new SVGShapeData(e,r,ShapePropertyFactory.getShapeProp(this,t,i,this));return this.shapes.push(s),this.addShapeToModifiers(s),this.addToAnimatedContents(t,s),s},SVGShapeElement.prototype.addToAnimatedContents=function(t,e){for(var r=0,i=this.animatedContents.length;r<i;){if(this.animatedContents[r].element===e)return;r+=1}this.animatedContents.push({fn:SVGElementsRenderer.createRenderFunction(t),element:e,data:t})},SVGShapeElement.prototype.setElementStyles=function(t){var e,r=t.styles,i=this.stylesList.length;for(e=0;e<i;e+=1)this.stylesList[e].closed||r.push(this.stylesList[e])},SVGShapeElement.prototype.reloadShapes=function(){this._isFirstFrame=!0;var t,e=this.itemsData.length;for(t=0;t<e;t+=1)this.prevViewData[t]=this.itemsData[t];for(this.searchShapes(this.shapesData,this.itemsData,this.prevViewData,this.layerElement,0,[],!0),this.filterUniqueShapes(),e=this.dynamicProperties.length,t=0;t<e;t+=1)this.dynamicProperties[t].getValue();this.renderModifiers()},SVGShapeElement.prototype.searchShapes=function(t,e,r,i,s,a,n){var o,h,l,p,m,f,c=[].concat(a),d=t.length-1,u=[],y=[];for(o=d;0<=o;o-=1){if((f=this.searchProcessedElement(t[o]))?e[o]=r[f-1]:t[o]._render=n,"fl"==t[o].ty||"st"==t[o].ty||"gf"==t[o].ty||"gs"==t[o].ty)f?e[o].style.closed=!1:e[o]=this.createStyleElement(t[o],s),t[o]._render&&i.appendChild(e[o].style.pElem),u.push(e[o].style);else if("gr"==t[o].ty){if(f)for(l=e[o].it.length,h=0;h<l;h+=1)e[o].prevViewData[h]=e[o].it[h];else e[o]=this.createGroupElement(t[o]);this.searchShapes(t[o].it,e[o].it,e[o].prevViewData,e[o].gr,s+1,c,n),t[o]._render&&i.appendChild(e[o].gr)}else"tr"==t[o].ty?(f||(e[o]=this.createTransformElement(t[o],i)),p=e[o].transform,c.push(p)):"sh"==t[o].ty||"rc"==t[o].ty||"el"==t[o].ty||"sr"==t[o].ty?(f||(e[o]=this.createShapeElement(t[o],c,s)),this.setElementStyles(e[o])):"tm"==t[o].ty||"rd"==t[o].ty||"ms"==t[o].ty?(f?(m=e[o]).closed=!1:((m=ShapeModifiers.getModifier(t[o].ty)).init(this,t[o]),e[o]=m,this.shapeModifiers.push(m)),y.push(m)):"rp"==t[o].ty&&(f?(m=e[o]).closed=!0:(m=ShapeModifiers.getModifier(t[o].ty),(e[o]=m).init(this,t,o,e),this.shapeModifiers.push(m),n=!1),y.push(m));this.addProcessedElement(t[o],o+1)}for(d=u.length,o=0;o<d;o+=1)u[o].closed=!0;for(d=y.length,o=0;o<d;o+=1)y[o].closed=!0},SVGShapeElement.prototype.renderInnerContent=function(){this.renderModifiers();var t,e=this.stylesList.length;for(t=0;t<e;t+=1)this.stylesList[t].reset();for(this.renderShape(),t=0;t<e;t+=1)(this.stylesList[t]._mdf||this._isFirstFrame)&&(this.stylesList[t].msElem&&(this.stylesList[t].msElem.setAttribute("d",this.stylesList[t].d),this.stylesList[t].d="M0 0"+this.stylesList[t].d),this.stylesList[t].pElem.setAttribute("d",this.stylesList[t].d||"M0 0"))},SVGShapeElement.prototype.renderShape=function(){var t,e,r=this.animatedContents.length;for(t=0;t<r;t+=1)e=this.animatedContents[t],(this._isFirstFrame||e.element._isAnimated)&&!0!==e.data&&e.fn(e.data,e.element,this._isFirstFrame)},SVGShapeElement.prototype.destroy=function(){this.destroyBaseElement(),this.shapesData=null,this.itemsData=null},SVGTintFilter.prototype.renderFrame=function(t){if(t||this.filterManager._mdf){var e=this.filterManager.effectElements[0].p.v,r=this.filterManager.effectElements[1].p.v,i=this.filterManager.effectElements[2].p.v/100;this.matrixFilter.setAttribute("values",r[0]-e[0]+" 0 0 0 "+e[0]+" "+(r[1]-e[1])+" 0 0 0 "+e[1]+" "+(r[2]-e[2])+" 0 0 0 "+e[2]+" 0 0 0 "+i+" 0")}},SVGFillFilter.prototype.renderFrame=function(t){if(t||this.filterManager._mdf){var e=this.filterManager.effectElements[2].p.v,r=this.filterManager.effectElements[6].p.v;this.matrixFilter.setAttribute("values","0 0 0 0 "+e[0]+" 0 0 0 0 "+e[1]+" 0 0 0 0 "+e[2]+" 0 0 0 "+r+" 0")}},SVGGaussianBlurEffect.prototype.renderFrame=function(t){if(t||this.filterManager._mdf){var e=.3*this.filterManager.effectElements[0].p.v,r=this.filterManager.effectElements[1].p.v,i=3==r?0:e,s=2==r?0:e;this.feGaussianBlur.setAttribute("stdDeviation",i+" "+s);var a=1==this.filterManager.effectElements[2].p.v?"wrap":"duplicate";this.feGaussianBlur.setAttribute("edgeMode",a)}},SVGStrokeEffect.prototype.initialize=function(){var t,e,r,i,s=this.elem.layerElement.children||this.elem.layerElement.childNodes;for(1===this.filterManager.effectElements[1].p.v?(i=this.elem.maskManager.masksProperties.length,r=0):i=(r=this.filterManager.effectElements[0].p.v-1)+1,(e=createNS("g")).setAttribute("fill","none"),e.setAttribute("stroke-linecap","round"),e.setAttribute("stroke-dashoffset",1);r<i;r+=1)t=createNS("path"),e.appendChild(t),this.paths.push({p:t,m:r});if(3===this.filterManager.effectElements[10].p.v){var a=createNS("mask"),n=createElementID();a.setAttribute("id",n),a.setAttribute("mask-type","alpha"),a.appendChild(e),this.elem.globalData.defs.appendChild(a);var o=createNS("g");for(o.setAttribute("mask","url("+locationHref+"#"+n+")");s[0];)o.appendChild(s[0]);this.elem.layerElement.appendChild(o),this.masker=a,e.setAttribute("stroke","#fff")}else if(1===this.filterManager.effectElements[10].p.v||2===this.filterManager.effectElements[10].p.v){if(2===this.filterManager.effectElements[10].p.v)for(s=this.elem.layerElement.children||this.elem.layerElement.childNodes;s.length;)this.elem.layerElement.removeChild(s[0]);this.elem.layerElement.appendChild(e),this.elem.layerElement.removeAttribute("mask"),e.setAttribute("stroke","#fff")}this.initialized=!0,this.pathMasker=e},SVGStrokeEffect.prototype.renderFrame=function(t){this.initialized||this.initialize();var e,r,i,s=this.paths.length;for(e=0;e<s;e+=1)if(-1!==this.paths[e].m&&(r=this.elem.maskManager.viewData[this.paths[e].m],i=this.paths[e].p,(t||this.filterManager._mdf||r.prop._mdf)&&i.setAttribute("d",r.lastPath),t||this.filterManager.effectElements[9].p._mdf||this.filterManager.effectElements[4].p._mdf||this.filterManager.effectElements[7].p._mdf||this.filterManager.effectElements[8].p._mdf||r.prop._mdf)){var a;if(0!==this.filterManager.effectElements[7].p.v||100!==this.filterManager.effectElements[8].p.v){var n=Math.min(this.filterManager.effectElements[7].p.v,this.filterManager.effectElements[8].p.v)/100,o=Math.max(this.filterManager.effectElements[7].p.v,this.filterManager.effectElements[8].p.v)/100,h=i.getTotalLength();a="0 0 0 "+h*n+" ";var l,p=h*(o-n),m=1+2*this.filterManager.effectElements[4].p.v*this.filterManager.effectElements[9].p.v/100,f=Math.floor(p/m);for(l=0;l<f;l+=1)a+="1 "+2*this.filterManager.effectElements[4].p.v*this.filterManager.effectElements[9].p.v/100+" ";a+="0 "+10*h+" 0 0"}else a="1 "+2*this.filterManager.effectElements[4].p.v*this.filterManager.effectElements[9].p.v/100;i.setAttribute("stroke-dasharray",a)}if((t||this.filterManager.effectElements[4].p._mdf)&&this.pathMasker.setAttribute("stroke-width",2*this.filterManager.effectElements[4].p.v),(t||this.filterManager.effectElements[6].p._mdf)&&this.pathMasker.setAttribute("opacity",this.filterManager.effectElements[6].p.v),(1===this.filterManager.effectElements[10].p.v||2===this.filterManager.effectElements[10].p.v)&&(t||this.filterManager.effectElements[3].p._mdf)){var c=this.filterManager.effectElements[3].p.v;this.pathMasker.setAttribute("stroke","rgb("+bm_floor(255*c[0])+","+bm_floor(255*c[1])+","+bm_floor(255*c[2])+")")}},SVGTritoneFilter.prototype.renderFrame=function(t){if(t||this.filterManager._mdf){var e=this.filterManager.effectElements[0].p.v,r=this.filterManager.effectElements[1].p.v,i=this.filterManager.effectElements[2].p.v,s=i[0]+" "+r[0]+" "+e[0],a=i[1]+" "+r[1]+" "+e[1],n=i[2]+" "+r[2]+" "+e[2];this.feFuncR.setAttribute("tableValues",s),this.feFuncG.setAttribute("tableValues",a),this.feFuncB.setAttribute("tableValues",n)}},SVGProLevelsFilter.prototype.createFeFunc=function(t,e){var r=createNS(t);return r.setAttribute("type","table"),e.appendChild(r),r},SVGProLevelsFilter.prototype.getTableValue=function(t,e,r,i,s){for(var a,n,o=0,h=Math.min(t,e),l=Math.max(t,e),p=Array.call(null,{length:256}),m=0,f=s-i,c=e-t;o<=256;)n=(a=o/256)<=h?c<0?s:i:l<=a?c<0?i:s:i+f*Math.pow((a-t)/c,1/r),p[m++]=n,o+=256/255;return p.join(" ")},SVGProLevelsFilter.prototype.renderFrame=function(t){if(t||this.filterManager._mdf){var e,r=this.filterManager.effectElements;this.feFuncRComposed&&(t||r[3].p._mdf||r[4].p._mdf||r[5].p._mdf||r[6].p._mdf||r[7].p._mdf)&&(e=this.getTableValue(r[3].p.v,r[4].p.v,r[5].p.v,r[6].p.v,r[7].p.v),this.feFuncRComposed.setAttribute("tableValues",e),this.feFuncGComposed.setAttribute("tableValues",e),this.feFuncBComposed.setAttribute("tableValues",e)),this.feFuncR&&(t||r[10].p._mdf||r[11].p._mdf||r[12].p._mdf||r[13].p._mdf||r[14].p._mdf)&&(e=this.getTableValue(r[10].p.v,r[11].p.v,r[12].p.v,r[13].p.v,r[14].p.v),this.feFuncR.setAttribute("tableValues",e)),this.feFuncG&&(t||r[17].p._mdf||r[18].p._mdf||r[19].p._mdf||r[20].p._mdf||r[21].p._mdf)&&(e=this.getTableValue(r[17].p.v,r[18].p.v,r[19].p.v,r[20].p.v,r[21].p.v),this.feFuncG.setAttribute("tableValues",e)),this.feFuncB&&(t||r[24].p._mdf||r[25].p._mdf||r[26].p._mdf||r[27].p._mdf||r[28].p._mdf)&&(e=this.getTableValue(r[24].p.v,r[25].p.v,r[26].p.v,r[27].p.v,r[28].p.v),this.feFuncB.setAttribute("tableValues",e)),this.feFuncA&&(t||r[31].p._mdf||r[32].p._mdf||r[33].p._mdf||r[34].p._mdf||r[35].p._mdf)&&(e=this.getTableValue(r[31].p.v,r[32].p.v,r[33].p.v,r[34].p.v,r[35].p.v),this.feFuncA.setAttribute("tableValues",e))}},SVGDropShadowEffect.prototype.renderFrame=function(t){if(t||this.filterManager._mdf){if((t||this.filterManager.effectElements[4].p._mdf)&&this.feGaussianBlur.setAttribute("stdDeviation",this.filterManager.effectElements[4].p.v/4),t||this.filterManager.effectElements[0].p._mdf){var e=this.filterManager.effectElements[0].p.v;this.feFlood.setAttribute("flood-color",rgbToHex(Math.round(255*e[0]),Math.round(255*e[1]),Math.round(255*e[2])))}if((t||this.filterManager.effectElements[1].p._mdf)&&this.feFlood.setAttribute("flood-opacity",this.filterManager.effectElements[1].p.v/255),t||this.filterManager.effectElements[2].p._mdf||this.filterManager.effectElements[3].p._mdf){var r=this.filterManager.effectElements[3].p.v,i=(this.filterManager.effectElements[2].p.v-90)*degToRads,s=r*Math.cos(i),a=r*Math.sin(i);this.feOffset.setAttribute("dx",s),this.feOffset.setAttribute("dy",a)}}};var _svgMatteSymbols=[];function SVGMatte3Effect(t,e,r){this.initialized=!1,this.filterManager=e,this.filterElem=t,(this.elem=r).matteElement=createNS("g"),r.matteElement.appendChild(r.layerElement),r.matteElement.appendChild(r.transformedElement),r.baseElement=r.matteElement}function SVGEffects(t){var e,r,i=t.data.ef?t.data.ef.length:0,s=createElementID(),a=filtersFactory.createFilter(s),n=0;for(this.filters=[],e=0;e<i;e+=1)r=null,20===t.data.ef[e].ty?(n+=1,r=new SVGTintFilter(a,t.effectsManager.effectElements[e])):21===t.data.ef[e].ty?(n+=1,r=new SVGFillFilter(a,t.effectsManager.effectElements[e])):22===t.data.ef[e].ty?r=new SVGStrokeEffect(t,t.effectsManager.effectElements[e]):23===t.data.ef[e].ty?(n+=1,r=new SVGTritoneFilter(a,t.effectsManager.effectElements[e])):24===t.data.ef[e].ty?(n+=1,r=new SVGProLevelsFilter(a,t.effectsManager.effectElements[e])):25===t.data.ef[e].ty?(n+=1,r=new SVGDropShadowEffect(a,t.effectsManager.effectElements[e])):28===t.data.ef[e].ty?r=new SVGMatte3Effect(a,t.effectsManager.effectElements[e],t):29===t.data.ef[e].ty&&(n+=1,r=new SVGGaussianBlurEffect(a,t.effectsManager.effectElements[e])),r&&this.filters.push(r);n&&(t.globalData.defs.appendChild(a),t.layerElement.setAttribute("filter","url("+locationHref+"#"+s+")")),this.filters.length&&t.addRenderableComponent(this)}function CVContextData(){this.saved=[],this.cArrPos=0,this.cTr=new Matrix,this.cO=1;var t;for(this.savedOp=createTypedArray("float32",15),t=0;t<15;t+=1)this.saved[t]=createTypedArray("float32",16);this._length=15}function CVBaseElement(){}function CVImageElement(t,e,r){this.assetData=e.getAssetData(t.refId),this.img=e.imageLoader.getImage(this.assetData),this.initElement(t,e,r)}function CVCompElement(t,e,r){this.completeLayers=!1,this.layers=t.layers,this.pendingElements=[],this.elements=createSizedArray(this.layers.length),this.initElement(t,e,r),this.tm=t.tm?PropertyFactory.getProp(this,t.tm,0,e.frameRate,this):{_placeholder:!0}}function CVMaskElement(t,e){this.data=t,this.element=e,this.masksProperties=this.data.masksProperties||[],this.viewData=createSizedArray(this.masksProperties.length);var r,i=this.masksProperties.length,s=!1;for(r=0;r<i;r++)"n"!==this.masksProperties[r].mode&&(s=!0),this.viewData[r]=ShapePropertyFactory.getShapeProp(this.element,this.masksProperties[r],3);(this.hasMasks=s)&&this.element.addRenderableComponent(this)}function CVShapeElement(t,e,r){this.shapes=[],this.shapesData=t.shapes,this.stylesList=[],this.itemsData=[],this.prevViewData=[],this.shapeModifiers=[],this.processedElements=[],this.transformsManager=new ShapeTransformManager,this.initElement(t,e,r)}function CVSolidElement(t,e,r){this.initElement(t,e,r)}function CVTextElement(t,e,r){this.textSpans=[],this.yOffset=0,this.fillColorAnim=!1,this.strokeColorAnim=!1,this.strokeWidthAnim=!1,this.stroke=!1,this.fill=!1,this.justifyOffset=0,this.currentRender=null,this.renderType="canvas",this.values={fill:"rgba(0,0,0,0)",stroke:"rgba(0,0,0,0)",sWidth:0,fValue:""},this.initElement(t,e,r)}function CVEffects(){}function HBaseElement(t,e,r){}function HSolidElement(t,e,r){this.initElement(t,e,r)}function HCompElement(t,e,r){this.layers=t.layers,this.supports3d=!t.hasMask,this.completeLayers=!1,this.pendingElements=[],this.elements=this.layers?createSizedArray(this.layers.length):[],this.initElement(t,e,r),this.tm=t.tm?PropertyFactory.getProp(this,t.tm,0,e.frameRate,this):{_placeholder:!0}}function HShapeElement(t,e,r){this.shapes=[],this.shapesData=t.shapes,this.stylesList=[],this.shapeModifiers=[],this.itemsData=[],this.processedElements=[],this.animatedContents=[],this.shapesContainer=createNS("g"),this.initElement(t,e,r),this.prevViewData=[],this.currentBBox={x:999999,y:-999999,h:0,w:0}}function HTextElement(t,e,r){this.textSpans=[],this.textPaths=[],this.currentBBox={x:999999,y:-999999,h:0,w:0},this.renderType="svg",this.isMasked=!1,this.initElement(t,e,r)}function HImageElement(t,e,r){this.assetData=e.getAssetData(t.refId),this.initElement(t,e,r)}function HCameraElement(t,e,r){this.initFrame(),this.initBaseData(t,e,r),this.initHierarchy();var i=PropertyFactory.getProp;if(this.pe=i(this,t.pe,0,0,this),t.ks.p.s?(this.px=i(this,t.ks.p.x,1,0,this),this.py=i(this,t.ks.p.y,1,0,this),this.pz=i(this,t.ks.p.z,1,0,this)):this.p=i(this,t.ks.p,1,0,this),t.ks.a&&(this.a=i(this,t.ks.a,1,0,this)),t.ks.or.k.length&&t.ks.or.k[0].to){var s,a=t.ks.or.k.length;for(s=0;s<a;s+=1)t.ks.or.k[s].to=null,t.ks.or.k[s].ti=null}this.or=i(this,t.ks.or,1,degToRads,this),this.or.sh=!0,this.rx=i(this,t.ks.rx,0,degToRads,this),this.ry=i(this,t.ks.ry,0,degToRads,this),this.rz=i(this,t.ks.rz,0,degToRads,this),this.mat=new Matrix,this._prevMat=new Matrix,this._isFirstFrame=!0,this.finalTransform={mProp:this}}function HEffects(){}SVGMatte3Effect.prototype.findSymbol=function(t){for(var e=0,r=_svgMatteSymbols.length;e<r;){if(_svgMatteSymbols[e]===t)return _svgMatteSymbols[e];e+=1}return null},SVGMatte3Effect.prototype.replaceInParent=function(t,e){var r=t.layerElement.parentNode;if(r){for(var i,s=r.children,a=0,n=s.length;a<n&&s[a]!==t.layerElement;)a+=1;a<=n-2&&(i=s[a+1]);var o=createNS("use");o.setAttribute("href","#"+e),i?r.insertBefore(o,i):r.appendChild(o)}},SVGMatte3Effect.prototype.setElementAsMask=function(t,e){if(!this.findSymbol(e)){var r=createElementID(),i=createNS("mask");i.setAttribute("id",e.layerId),i.setAttribute("mask-type","alpha"),_svgMatteSymbols.push(e);var s=t.globalData.defs;s.appendChild(i);var a=createNS("symbol");a.setAttribute("id",r),this.replaceInParent(e,r),a.appendChild(e.layerElement),s.appendChild(a);var n=createNS("use");n.setAttribute("href","#"+r),i.appendChild(n),e.data.hd=!1,e.show()}t.setMatte(e.layerId)},SVGMatte3Effect.prototype.initialize=function(){for(var t=this.filterManager.effectElements[0].p.v,e=this.elem.comp.elements,r=0,i=e.length;r<i;)e[r]&&e[r].data.ind===t&&this.setElementAsMask(this.elem,e[r]),r+=1;this.initialized=!0},SVGMatte3Effect.prototype.renderFrame=function(){this.initialized||this.initialize()},SVGEffects.prototype.renderFrame=function(t){var e,r=this.filters.length;for(e=0;e<r;e+=1)this.filters[e].renderFrame(t)},CVContextData.prototype.duplicate=function(){var t=2*this._length,e=this.savedOp;this.savedOp=createTypedArray("float32",t),this.savedOp.set(e);var r=0;for(r=this._length;r<t;r+=1)this.saved[r]=createTypedArray("float32",16);this._length=t},CVContextData.prototype.reset=function(){this.cArrPos=0,this.cTr.reset(),this.cO=1},CVBaseElement.prototype={createElements:function(){},initRendererElement:function(){},createContainerElements:function(){this.canvasContext=this.globalData.canvasContext,this.renderableEffectsManager=new CVEffects(this)},createContent:function(){},setBlendMode:function(){var t=this.globalData;if(t.blendMode!==this.data.bm){t.blendMode=this.data.bm;var e=getBlendMode(this.data.bm);t.canvasContext.globalCompositeOperation=e}},createRenderableComponents:function(){this.maskManager=new CVMaskElement(this.data,this)},hideElement:function(){this.hidden||this.isInRange&&!this.isTransparent||(this.hidden=!0)},showElement:function(){this.isInRange&&!this.isTransparent&&(this.hidden=!1,this._isFirstFrame=!0,this.maskManager._isFirstFrame=!0)},renderFrame:function(){if(!this.hidden&&!this.data.hd){this.renderTransform(),this.renderRenderable(),this.setBlendMode();var t=0===this.data.ty;this.globalData.renderer.save(t),this.globalData.renderer.ctxTransform(this.finalTransform.mat.props),this.globalData.renderer.ctxOpacity(this.finalTransform.mProp.o.v),this.renderInnerContent(),this.globalData.renderer.restore(t),this.maskManager.hasMasks&&this.globalData.renderer.restore(!0),this._isFirstFrame&&(this._isFirstFrame=!1)}},destroy:function(){this.canvasContext=null,this.data=null,this.globalData=null,this.maskManager.destroy()},mHelper:new Matrix},CVBaseElement.prototype.hide=CVBaseElement.prototype.hideElement,CVBaseElement.prototype.show=CVBaseElement.prototype.showElement,extendPrototype([BaseElement,TransformElement,CVBaseElement,HierarchyElement,FrameElement,RenderableElement],CVImageElement),CVImageElement.prototype.initElement=SVGShapeElement.prototype.initElement,CVImageElement.prototype.prepareFrame=IImageElement.prototype.prepareFrame,CVImageElement.prototype.createContent=function(){if(this.img.width&&(this.assetData.w!==this.img.width||this.assetData.h!==this.img.height)){var t=createTag("canvas");t.width=this.assetData.w,t.height=this.assetData.h;var e,r,i=t.getContext("2d"),s=this.img.width,a=this.img.height,n=s/a,o=this.assetData.w/this.assetData.h,h=this.assetData.pr||this.globalData.renderConfig.imagePreserveAspectRatio;o<n&&"xMidYMid slice"===h||n<o&&"xMidYMid slice"!==h?e=(r=a)*o:r=(e=s)/o,i.drawImage(this.img,(s-e)/2,(a-r)/2,e,r,0,0,this.assetData.w,this.assetData.h),this.img=t}},CVImageElement.prototype.renderInnerContent=function(t){this.canvasContext.drawImage(this.img,0,0)},CVImageElement.prototype.destroy=function(){this.img=null},extendPrototype([CanvasRenderer,ICompElement,CVBaseElement],CVCompElement),CVCompElement.prototype.renderInnerContent=function(){var t,e=this.canvasContext;for(e.beginPath(),e.moveTo(0,0),e.lineTo(this.data.w,0),e.lineTo(this.data.w,this.data.h),e.lineTo(0,this.data.h),e.lineTo(0,0),e.clip(),t=this.layers.length-1;0<=t;t-=1)(this.completeLayers||this.elements[t])&&this.elements[t].renderFrame()},CVCompElement.prototype.destroy=function(){var t;for(t=this.layers.length-1;0<=t;t-=1)this.elements[t]&&this.elements[t].destroy();this.layers=null,this.elements=null},CVMaskElement.prototype.renderFrame=function(){if(this.hasMasks){var t,e,r,i,s=this.element.finalTransform.mat,a=this.element.canvasContext,n=this.masksProperties.length;for(a.beginPath(),t=0;t<n;t++)if("n"!==this.masksProperties[t].mode){this.masksProperties[t].inv&&(a.moveTo(0,0),a.lineTo(this.element.globalData.compSize.w,0),a.lineTo(this.element.globalData.compSize.w,this.element.globalData.compSize.h),a.lineTo(0,this.element.globalData.compSize.h),a.lineTo(0,0)),i=this.viewData[t].v,e=s.applyToPointArray(i.v[0][0],i.v[0][1],0),a.moveTo(e[0],e[1]);var o,h=i._length;for(o=1;o<h;o++)r=s.applyToTriplePoints(i.o[o-1],i.i[o],i.v[o]),a.bezierCurveTo(r[0],r[1],r[2],r[3],r[4],r[5]);r=s.applyToTriplePoints(i.o[o-1],i.i[0],i.v[0]),a.bezierCurveTo(r[0],r[1],r[2],r[3],r[4],r[5])}this.element.globalData.renderer.save(!0),a.clip()}},CVMaskElement.prototype.getMaskProperty=MaskElement.prototype.getMaskProperty,CVMaskElement.prototype.destroy=function(){this.element=null},extendPrototype([BaseElement,TransformElement,CVBaseElement,IShapeElement,HierarchyElement,FrameElement,RenderableElement],CVShapeElement),CVShapeElement.prototype.initElement=RenderableDOMElement.prototype.initElement,CVShapeElement.prototype.transformHelper={opacity:1,_opMdf:!1},CVShapeElement.prototype.dashResetter=[],CVShapeElement.prototype.createContent=function(){this.searchShapes(this.shapesData,this.itemsData,this.prevViewData,!0,[])},CVShapeElement.prototype.createStyleElement=function(t,e){var r={data:t,type:t.ty,preTransforms:this.transformsManager.addTransformSequence(e),transforms:[],elements:[],closed:!0===t.hd},i={};if("fl"==t.ty||"st"==t.ty?(i.c=PropertyFactory.getProp(this,t.c,1,255,this),i.c.k||(r.co="rgb("+bm_floor(i.c.v[0])+","+bm_floor(i.c.v[1])+","+bm_floor(i.c.v[2])+")")):"gf"!==t.ty&&"gs"!==t.ty||(i.s=PropertyFactory.getProp(this,t.s,1,null,this),i.e=PropertyFactory.getProp(this,t.e,1,null,this),i.h=PropertyFactory.getProp(this,t.h||{k:0},0,.01,this),i.a=PropertyFactory.getProp(this,t.a||{k:0},0,degToRads,this),i.g=new GradientProperty(this,t.g,this)),i.o=PropertyFactory.getProp(this,t.o,0,.01,this),"st"==t.ty||"gs"==t.ty){if(r.lc=this.lcEnum[t.lc]||"round",r.lj=this.ljEnum[t.lj]||"round",1==t.lj&&(r.ml=t.ml),i.w=PropertyFactory.getProp(this,t.w,0,null,this),i.w.k||(r.wi=i.w.v),t.d){var s=new DashProperty(this,t.d,"canvas",this);i.d=s,i.d.k||(r.da=i.d.dashArray,r.do=i.d.dashoffset[0])}}else r.r=2===t.r?"evenodd":"nonzero";return this.stylesList.push(r),i.style=r,i},CVShapeElement.prototype.createGroupElement=function(t){return{it:[],prevViewData:[]}},CVShapeElement.prototype.createTransformElement=function(t){return{transform:{opacity:1,_opMdf:!1,key:this.transformsManager.getNewKey(),op:PropertyFactory.getProp(this,t.o,0,.01,this),mProps:TransformPropertyFactory.getTransformProperty(this,t,this)}}},CVShapeElement.prototype.createShapeElement=function(t){var e=new CVShapeData(this,t,this.stylesList,this.transformsManager);return this.shapes.push(e),this.addShapeToModifiers(e),e},CVShapeElement.prototype.reloadShapes=function(){this._isFirstFrame=!0;var t,e=this.itemsData.length;for(t=0;t<e;t+=1)this.prevViewData[t]=this.itemsData[t];for(this.searchShapes(this.shapesData,this.itemsData,this.prevViewData,!0,[]),e=this.dynamicProperties.length,t=0;t<e;t+=1)this.dynamicProperties[t].getValue();this.renderModifiers(),this.transformsManager.processSequences(this._isFirstFrame)},CVShapeElement.prototype.addTransformToStyleList=function(t){var e,r=this.stylesList.length;for(e=0;e<r;e+=1)this.stylesList[e].closed||this.stylesList[e].transforms.push(t)},CVShapeElement.prototype.removeTransformFromStyleList=function(){var t,e=this.stylesList.length;for(t=0;t<e;t+=1)this.stylesList[t].closed||this.stylesList[t].transforms.pop()},CVShapeElement.prototype.closeStyles=function(t){var e,r=t.length;for(e=0;e<r;e+=1)t[e].closed=!0},CVShapeElement.prototype.searchShapes=function(t,e,r,i,s){var a,n,o,h,l,p,m=t.length-1,f=[],c=[],d=[].concat(s);for(a=m;0<=a;a-=1){if((h=this.searchProcessedElement(t[a]))?e[a]=r[h-1]:t[a]._shouldRender=i,"fl"==t[a].ty||"st"==t[a].ty||"gf"==t[a].ty||"gs"==t[a].ty)h?e[a].style.closed=!1:e[a]=this.createStyleElement(t[a],d),f.push(e[a].style);else if("gr"==t[a].ty){if(h)for(o=e[a].it.length,n=0;n<o;n+=1)e[a].prevViewData[n]=e[a].it[n];else e[a]=this.createGroupElement(t[a]);this.searchShapes(t[a].it,e[a].it,e[a].prevViewData,i,d)}else"tr"==t[a].ty?(h||(p=this.createTransformElement(t[a]),e[a]=p),d.push(e[a]),this.addTransformToStyleList(e[a])):"sh"==t[a].ty||"rc"==t[a].ty||"el"==t[a].ty||"sr"==t[a].ty?h||(e[a]=this.createShapeElement(t[a])):"tm"==t[a].ty||"rd"==t[a].ty?(h?(l=e[a]).closed=!1:((l=ShapeModifiers.getModifier(t[a].ty)).init(this,t[a]),e[a]=l,this.shapeModifiers.push(l)),c.push(l)):"rp"==t[a].ty&&(h?(l=e[a]).closed=!0:(l=ShapeModifiers.getModifier(t[a].ty),(e[a]=l).init(this,t,a,e),this.shapeModifiers.push(l),i=!1),c.push(l));this.addProcessedElement(t[a],a+1)}for(this.removeTransformFromStyleList(),this.closeStyles(f),m=c.length,a=0;a<m;a+=1)c[a].closed=!0},CVShapeElement.prototype.renderInnerContent=function(){this.transformHelper.opacity=1,this.transformHelper._opMdf=!1,this.renderModifiers(),this.transformsManager.processSequences(this._isFirstFrame),this.renderShape(this.transformHelper,this.shapesData,this.itemsData,!0)},CVShapeElement.prototype.renderShapeTransform=function(t,e){(t._opMdf||e.op._mdf||this._isFirstFrame)&&(e.opacity=t.opacity,e.opacity*=e.op.v,e._opMdf=!0)},CVShapeElement.prototype.drawLayer=function(){var t,e,r,i,s,a,n,o,h,l=this.stylesList.length,p=this.globalData.renderer,m=this.globalData.canvasContext;for(t=0;t<l;t+=1)if(("st"!==(o=(h=this.stylesList[t]).type)&&"gs"!==o||0!==h.wi)&&h.data._shouldRender&&0!==h.coOp&&0!==this.globalData.currentGlobalAlpha){for(p.save(),a=h.elements,"st"===o||"gs"===o?(m.strokeStyle="st"===o?h.co:h.grd,m.lineWidth=h.wi,m.lineCap=h.lc,m.lineJoin=h.lj,m.miterLimit=h.ml||0):m.fillStyle="fl"===o?h.co:h.grd,p.ctxOpacity(h.coOp),"st"!==o&&"gs"!==o&&m.beginPath(),p.ctxTransform(h.preTransforms.finalTransform.props),r=a.length,e=0;e<r;e+=1){for("st"!==o&&"gs"!==o||(m.beginPath(),h.da&&(m.setLineDash(h.da),m.lineDashOffset=h.do)),s=(n=a[e].trNodes).length,i=0;i<s;i+=1)"m"==n[i].t?m.moveTo(n[i].p[0],n[i].p[1]):"c"==n[i].t?m.bezierCurveTo(n[i].pts[0],n[i].pts[1],n[i].pts[2],n[i].pts[3],n[i].pts[4],n[i].pts[5]):m.closePath();"st"!==o&&"gs"!==o||(m.stroke(),h.da&&m.setLineDash(this.dashResetter))}"st"!==o&&"gs"!==o&&m.fill(h.r),p.restore()}},CVShapeElement.prototype.renderShape=function(t,e,r,i){var s,a;for(a=t,s=e.length-1;0<=s;s-=1)"tr"==e[s].ty?(a=r[s].transform,this.renderShapeTransform(t,a)):"sh"==e[s].ty||"el"==e[s].ty||"rc"==e[s].ty||"sr"==e[s].ty?this.renderPath(e[s],r[s]):"fl"==e[s].ty?this.renderFill(e[s],r[s],a):"st"==e[s].ty?this.renderStroke(e[s],r[s],a):"gf"==e[s].ty||"gs"==e[s].ty?this.renderGradientFill(e[s],r[s],a):"gr"==e[s].ty?this.renderShape(a,e[s].it,r[s].it):e[s].ty;i&&this.drawLayer()},CVShapeElement.prototype.renderStyledShape=function(t,e){if(this._isFirstFrame||e._mdf||t.transforms._mdf){var r,i,s,a=t.trNodes,n=e.paths,o=n._length;a.length=0;var h=t.transforms.finalTransform;for(s=0;s<o;s+=1){var l=n.shapes[s];if(l&&l.v){for(i=l._length,r=1;r<i;r+=1)1===r&&a.push({t:"m",p:h.applyToPointArray(l.v[0][0],l.v[0][1],0)}),a.push({t:"c",pts:h.applyToTriplePoints(l.o[r-1],l.i[r],l.v[r])});1===i&&a.push({t:"m",p:h.applyToPointArray(l.v[0][0],l.v[0][1],0)}),l.c&&i&&(a.push({t:"c",pts:h.applyToTriplePoints(l.o[r-1],l.i[0],l.v[0])}),a.push({t:"z"}))}}t.trNodes=a}},CVShapeElement.prototype.renderPath=function(t,e){if(!0!==t.hd&&t._shouldRender){var r,i=e.styledShapes.length;for(r=0;r<i;r+=1)this.renderStyledShape(e.styledShapes[r],e.sh)}},CVShapeElement.prototype.renderFill=function(t,e,r){var i=e.style;(e.c._mdf||this._isFirstFrame)&&(i.co="rgb("+bm_floor(e.c.v[0])+","+bm_floor(e.c.v[1])+","+bm_floor(e.c.v[2])+")"),(e.o._mdf||r._opMdf||this._isFirstFrame)&&(i.coOp=e.o.v*r.opacity)},CVShapeElement.prototype.renderGradientFill=function(t,e,r){var i=e.style;if(!i.grd||e.g._mdf||e.s._mdf||e.e._mdf||1!==t.t&&(e.h._mdf||e.a._mdf)){var s=this.globalData.canvasContext,a=e.s.v,n=e.e.v;if(1===t.t)f=s.createLinearGradient(a[0],a[1],n[0],n[1]);else var o=Math.sqrt(Math.pow(a[0]-n[0],2)+Math.pow(a[1]-n[1],2)),h=Math.atan2(n[1]-a[1],n[0]-a[0]),l=o*(1<=e.h.v?.99:e.h.v<=-1?-.99:e.h.v),p=Math.cos(h+e.a.v)*l+a[0],m=Math.sin(h+e.a.v)*l+a[1],f=s.createRadialGradient(p,m,0,a[0],a[1],o);var c,d=t.g.p,u=e.g.c,y=1;for(c=0;c<d;c+=1)e.g._hasOpacity&&e.g._collapsable&&(y=e.g.o[2*c+1]),f.addColorStop(u[4*c]/100,"rgba("+u[4*c+1]+","+u[4*c+2]+","+u[4*c+3]+","+y+")");i.grd=f}i.coOp=e.o.v*r.opacity},CVShapeElement.prototype.renderStroke=function(t,e,r){var i=e.style,s=e.d;s&&(s._mdf||this._isFirstFrame)&&(i.da=s.dashArray,i.do=s.dashoffset[0]),(e.c._mdf||this._isFirstFrame)&&(i.co="rgb("+bm_floor(e.c.v[0])+","+bm_floor(e.c.v[1])+","+bm_floor(e.c.v[2])+")"),(e.o._mdf||r._opMdf||this._isFirstFrame)&&(i.coOp=e.o.v*r.opacity),(e.w._mdf||this._isFirstFrame)&&(i.wi=e.w.v)},CVShapeElement.prototype.destroy=function(){this.shapesData=null,this.globalData=null,this.canvasContext=null,this.stylesList.length=0,this.itemsData.length=0},extendPrototype([BaseElement,TransformElement,CVBaseElement,HierarchyElement,FrameElement,RenderableElement],CVSolidElement),CVSolidElement.prototype.initElement=SVGShapeElement.prototype.initElement,CVSolidElement.prototype.prepareFrame=IImageElement.prototype.prepareFrame,CVSolidElement.prototype.renderInnerContent=function(){var t=this.canvasContext;t.fillStyle=this.data.sc,t.fillRect(0,0,this.data.sw,this.data.sh)},extendPrototype([BaseElement,TransformElement,CVBaseElement,HierarchyElement,FrameElement,RenderableElement,ITextElement],CVTextElement),CVTextElement.prototype.tHelper=createTag("canvas").getContext("2d"),CVTextElement.prototype.buildNewText=function(){var t=this.textProperty.currentData;this.renderedLetters=createSizedArray(t.l?t.l.length:0);var e=!1;t.fc?(e=!0,this.values.fill=this.buildColor(t.fc)):this.values.fill="rgba(0,0,0,0)",this.fill=e;var r=!1;t.sc&&(r=!0,this.values.stroke=this.buildColor(t.sc),this.values.sWidth=t.sw);var i,s,a=this.globalData.fontManager.getFontByName(t.f),n=t.l,o=this.mHelper;this.stroke=r,this.values.fValue=t.finalSize+"px "+this.globalData.fontManager.getFontByName(t.f).fFamily,s=t.finalText.length;var h,l,p,m,f,c,d,u,y,g,v=this.data.singleShape,b=t.tr/1e3*t.finalSize,E=0,x=0,P=!0,S=0;for(i=0;i<s;i+=1){for(l=(h=this.globalData.fontManager.getCharData(t.finalText[i],a.fStyle,this.globalData.fontManager.getFontByName(t.f).fFamily))&&h.data||{},o.reset(),v&&n[i].n&&(E=-b,x+=t.yOffset,x+=P?1:0,P=!1),d=(f=l.shapes?l.shapes[0].it:[]).length,o.scale(t.finalSize/100,t.finalSize/100),v&&this.applyTextPropertiesToMatrix(t,o,n[i].line,E,x),y=createSizedArray(d),c=0;c<d;c+=1){for(m=f[c].ks.k.i.length,u=f[c].ks.k,g=[],p=1;p<m;p+=1)1==p&&g.push(o.applyToX(u.v[0][0],u.v[0][1],0),o.applyToY(u.v[0][0],u.v[0][1],0)),g.push(o.applyToX(u.o[p-1][0],u.o[p-1][1],0),o.applyToY(u.o[p-1][0],u.o[p-1][1],0),o.applyToX(u.i[p][0],u.i[p][1],0),o.applyToY(u.i[p][0],u.i[p][1],0),o.applyToX(u.v[p][0],u.v[p][1],0),o.applyToY(u.v[p][0],u.v[p][1],0));g.push(o.applyToX(u.o[p-1][0],u.o[p-1][1],0),o.applyToY(u.o[p-1][0],u.o[p-1][1],0),o.applyToX(u.i[0][0],u.i[0][1],0),o.applyToY(u.i[0][0],u.i[0][1],0),o.applyToX(u.v[0][0],u.v[0][1],0),o.applyToY(u.v[0][0],u.v[0][1],0)),y[c]=g}v&&(E+=n[i].l,E+=b),this.textSpans[S]?this.textSpans[S].elem=y:this.textSpans[S]={elem:y},S+=1}},CVTextElement.prototype.renderInnerContent=function(){var t,e,r,i,s,a,n=this.canvasContext;this.finalTransform.mat.props;n.font=this.values.fValue,n.lineCap="butt",n.lineJoin="miter",n.miterLimit=4,this.data.singleShape||this.textAnimator.getMeasures(this.textProperty.currentData,this.lettersChangedFlag);var o,h=this.textAnimator.renderedLetters,l=this.textProperty.currentData.l;e=l.length;var p,m,f=null,c=null,d=null;for(t=0;t<e;t+=1)if(!l[t].n){if((o=h[t])&&(this.globalData.renderer.save(),this.globalData.renderer.ctxTransform(o.p),this.globalData.renderer.ctxOpacity(o.o)),this.fill){for(o&&o.fc?f!==o.fc&&(f=o.fc,n.fillStyle=o.fc):f!==this.values.fill&&(f=this.values.fill,n.fillStyle=this.values.fill),i=(p=this.textSpans[t].elem).length,this.globalData.canvasContext.beginPath(),r=0;r<i;r+=1)for(a=(m=p[r]).length,this.globalData.canvasContext.moveTo(m[0],m[1]),s=2;s<a;s+=6)this.globalData.canvasContext.bezierCurveTo(m[s],m[s+1],m[s+2],m[s+3],m[s+4],m[s+5]);this.globalData.canvasContext.closePath(),this.globalData.canvasContext.fill()}if(this.stroke){for(o&&o.sw?d!==o.sw&&(d=o.sw,n.lineWidth=o.sw):d!==this.values.sWidth&&(d=this.values.sWidth,n.lineWidth=this.values.sWidth),o&&o.sc?c!==o.sc&&(c=o.sc,n.strokeStyle=o.sc):c!==this.values.stroke&&(c=this.values.stroke,n.strokeStyle=this.values.stroke),i=(p=this.textSpans[t].elem).length,this.globalData.canvasContext.beginPath(),r=0;r<i;r+=1)for(a=(m=p[r]).length,this.globalData.canvasContext.moveTo(m[0],m[1]),s=2;s<a;s+=6)this.globalData.canvasContext.bezierCurveTo(m[s],m[s+1],m[s+2],m[s+3],m[s+4],m[s+5]);this.globalData.canvasContext.closePath(),this.globalData.canvasContext.stroke()}o&&this.globalData.renderer.restore()}},CVEffects.prototype.renderFrame=function(){},HBaseElement.prototype={checkBlendMode:function(){},initRendererElement:function(){this.baseElement=createTag(this.data.tg||"div"),this.data.hasMask?(this.svgElement=createNS("svg"),this.layerElement=createNS("g"),this.maskedElement=this.layerElement,this.svgElement.appendChild(this.layerElement),this.baseElement.appendChild(this.svgElement)):this.layerElement=this.baseElement,styleDiv(this.baseElement)},createContainerElements:function(){this.renderableEffectsManager=new CVEffects(this),this.transformedElement=this.baseElement,this.maskedElement=this.layerElement,this.data.ln&&this.layerElement.setAttribute("id",this.data.ln),this.data.cl&&this.layerElement.setAttribute("class",this.data.cl),0!==this.data.bm&&this.setBlendMode()},renderElement:function(){this.finalTransform._matMdf&&(this.transformedElement.style.transform=this.transformedElement.style.webkitTransform=this.finalTransform.mat.toCSS()),this.finalTransform._opMdf&&(this.transformedElement.style.opacity=this.finalTransform.mProp.o.v)},renderFrame:function(){this.data.hd||this.hidden||(this.renderTransform(),this.renderRenderable(),this.renderElement(),this.renderInnerContent(),this._isFirstFrame&&(this._isFirstFrame=!1))},destroy:function(){this.layerElement=null,this.transformedElement=null,this.matteElement&&(this.matteElement=null),this.maskManager&&(this.maskManager.destroy(),this.maskManager=null)},createRenderableComponents:function(){this.maskManager=new MaskElement(this.data,this,this.globalData)},addEffects:function(){},setMatte:function(){}},HBaseElement.prototype.getBaseElement=SVGBaseElement.prototype.getBaseElement,HBaseElement.prototype.destroyBaseElement=HBaseElement.prototype.destroy,HBaseElement.prototype.buildElementParenting=HybridRenderer.prototype.buildElementParenting,extendPrototype([BaseElement,TransformElement,HBaseElement,HierarchyElement,FrameElement,RenderableDOMElement],HSolidElement),HSolidElement.prototype.createContent=function(){var t;this.data.hasMask?((t=createNS("rect")).setAttribute("width",this.data.sw),t.setAttribute("height",this.data.sh),t.setAttribute("fill",this.data.sc),this.svgElement.setAttribute("width",this.data.sw),this.svgElement.setAttribute("height",this.data.sh)):((t=createTag("div")).style.width=this.data.sw+"px",t.style.height=this.data.sh+"px",t.style.backgroundColor=this.data.sc),this.layerElement.appendChild(t)},extendPrototype([HybridRenderer,ICompElement,HBaseElement],HCompElement),HCompElement.prototype._createBaseContainerElements=HCompElement.prototype.createContainerElements,HCompElement.prototype.createContainerElements=function(){this._createBaseContainerElements(),this.data.hasMask?(this.svgElement.setAttribute("width",this.data.w),this.svgElement.setAttribute("height",this.data.h),this.transformedElement=this.baseElement):this.transformedElement=this.layerElement},HCompElement.prototype.addTo3dContainer=function(t,e){for(var r,i=0;i<e;)this.elements[i]&&this.elements[i].getBaseElement&&(r=this.elements[i].getBaseElement()),i+=1;r?this.layerElement.insertBefore(t,r):this.layerElement.appendChild(t)},extendPrototype([BaseElement,TransformElement,HSolidElement,SVGShapeElement,HBaseElement,HierarchyElement,FrameElement,RenderableElement],HShapeElement),HShapeElement.prototype._renderShapeFrame=HShapeElement.prototype.renderInnerContent,HShapeElement.prototype.createContent=function(){var t;if(this.baseElement.style.fontSize=0,this.data.hasMask)this.layerElement.appendChild(this.shapesContainer),t=this.svgElement;else{t=createNS("svg");var e=this.comp.data?this.comp.data:this.globalData.compSize;t.setAttribute("width",e.w),t.setAttribute("height",e.h),t.appendChild(this.shapesContainer),this.layerElement.appendChild(t)}this.searchShapes(this.shapesData,this.itemsData,this.prevViewData,this.shapesContainer,0,[],!0),this.filterUniqueShapes(),this.shapeCont=t},HShapeElement.prototype.getTransformedPoint=function(t,e){var r,i=t.length;for(r=0;r<i;r+=1)e=t[r].mProps.v.applyToPointArray(e[0],e[1],0);return e},HShapeElement.prototype.calculateShapeBoundingBox=function(t,e){var r,i,s,a,n,o=t.sh.v,h=t.transformers,l=o._length;if(!(l<=1)){for(r=0;r<l-1;r+=1)i=this.getTransformedPoint(h,o.v[r]),s=this.getTransformedPoint(h,o.o[r]),a=this.getTransformedPoint(h,o.i[r+1]),n=this.getTransformedPoint(h,o.v[r+1]),this.checkBounds(i,s,a,n,e);o.c&&(i=this.getTransformedPoint(h,o.v[r]),s=this.getTransformedPoint(h,o.o[r]),a=this.getTransformedPoint(h,o.i[0]),n=this.getTransformedPoint(h,o.v[0]),this.checkBounds(i,s,a,n,e))}},HShapeElement.prototype.checkBounds=function(t,e,r,i,s){this.getBoundsOfCurve(t,e,r,i);var a=this.shapeBoundingBox;s.x=bm_min(a.left,s.x),s.xMax=bm_max(a.right,s.xMax),s.y=bm_min(a.top,s.y),s.yMax=bm_max(a.bottom,s.yMax)},HShapeElement.prototype.shapeBoundingBox={left:0,right:0,top:0,bottom:0},HShapeElement.prototype.tempBoundingBox={x:0,xMax:0,y:0,yMax:0,width:0,height:0},HShapeElement.prototype.getBoundsOfCurve=function(t,e,r,i){for(var s,a,n,o,h,l,p,m=[[t[0],i[0]],[t[1],i[1]]],f=0;f<2;++f)if(a=6*t[f]-12*e[f]+6*r[f],s=-3*t[f]+9*e[f]-9*r[f]+3*i[f],n=3*e[f]-3*t[f],a|=0,n|=0,0!==(s|=0))(h=a*a-4*n*s)<0||(0<(l=(-a+bm_sqrt(h))/(2*s))&&l<1&&m[f].push(this.calculateF(l,t,e,r,i,f)),0<(p=(-a-bm_sqrt(h))/(2*s))&&p<1&&m[f].push(this.calculateF(p,t,e,r,i,f)));else{if(0===a)continue;0<(o=-n/a)&&o<1&&m[f].push(this.calculateF(o,t,e,r,i,f))}this.shapeBoundingBox.left=bm_min.apply(null,m[0]),this.shapeBoundingBox.top=bm_min.apply(null,m[1]),this.shapeBoundingBox.right=bm_max.apply(null,m[0]),this.shapeBoundingBox.bottom=bm_max.apply(null,m[1])},HShapeElement.prototype.calculateF=function(t,e,r,i,s,a){return bm_pow(1-t,3)*e[a]+3*bm_pow(1-t,2)*t*r[a]+3*(1-t)*bm_pow(t,2)*i[a]+bm_pow(t,3)*s[a]},HShapeElement.prototype.calculateBoundingBox=function(t,e){var r,i=t.length;for(r=0;r<i;r+=1)t[r]&&t[r].sh?this.calculateShapeBoundingBox(t[r],e):t[r]&&t[r].it&&this.calculateBoundingBox(t[r].it,e)},HShapeElement.prototype.currentBoxContains=function(t){return this.currentBBox.x<=t.x&&this.currentBBox.y<=t.y&&this.currentBBox.width+this.currentBBox.x>=t.x+t.width&&this.currentBBox.height+this.currentBBox.y>=t.y+t.height},HShapeElement.prototype.renderInnerContent=function(){if(this._renderShapeFrame(),!this.hidden&&(this._isFirstFrame||this._mdf)){var t=this.tempBoundingBox,e=999999;if(t.x=e,t.xMax=-e,t.y=e,t.yMax=-e,this.calculateBoundingBox(this.itemsData,t),t.width=t.xMax<t.x?0:t.xMax-t.x,t.height=t.yMax<t.y?0:t.yMax-t.y,this.currentBoxContains(t))return;var r=!1;this.currentBBox.w!==t.width&&(this.currentBBox.w=t.width,this.shapeCont.setAttribute("width",t.width),r=!0),this.currentBBox.h!==t.height&&(this.currentBBox.h=t.height,this.shapeCont.setAttribute("height",t.height),r=!0),(r||this.currentBBox.x!==t.x||this.currentBBox.y!==t.y)&&(this.currentBBox.w=t.width,this.currentBBox.h=t.height,this.currentBBox.x=t.x,this.currentBBox.y=t.y,this.shapeCont.setAttribute("viewBox",this.currentBBox.x+" "+this.currentBBox.y+" "+this.currentBBox.w+" "+this.currentBBox.h),this.shapeCont.style.transform=this.shapeCont.style.webkitTransform="translate("+this.currentBBox.x+"px,"+this.currentBBox.y+"px)")}},extendPrototype([BaseElement,TransformElement,HBaseElement,HierarchyElement,FrameElement,RenderableDOMElement,ITextElement],HTextElement),HTextElement.prototype.createContent=function(){if(this.isMasked=this.checkMasks(),this.isMasked){this.renderType="svg",this.compW=this.comp.data.w,this.compH=this.comp.data.h,this.svgElement.setAttribute("width",this.compW),this.svgElement.setAttribute("height",this.compH);var t=createNS("g");this.maskedElement.appendChild(t),this.innerElem=t}else this.renderType="html",this.innerElem=this.layerElement;this.checkParenting()},HTextElement.prototype.buildNewText=function(){var t=this.textProperty.currentData;this.renderedLetters=createSizedArray(t.l?t.l.length:0);var e=this.innerElem.style;e.color=e.fill=t.fc?this.buildColor(t.fc):"rgba(0,0,0,0)",t.sc&&(e.stroke=this.buildColor(t.sc),e.strokeWidth=t.sw+"px");var r,i,s=this.globalData.fontManager.getFontByName(t.f);if(!this.globalData.fontManager.chars)if(e.fontSize=t.finalSize+"px",e.lineHeight=t.finalSize+"px",s.fClass)this.innerElem.className=s.fClass;else{e.fontFamily=s.fFamily;var a=t.fWeight,n=t.fStyle;e.fontStyle=n,e.fontWeight=a}var o,h,l,p=t.l;i=p.length;var m,f=this.mHelper,c="",d=0;for(r=0;r<i;r+=1){if(this.globalData.fontManager.chars?(this.textPaths[d]?o=this.textPaths[d]:((o=createNS("path")).setAttribute("stroke-linecap","butt"),o.setAttribute("stroke-linejoin","round"),o.setAttribute("stroke-miterlimit","4")),this.isMasked||(this.textSpans[d]?l=(h=this.textSpans[d]).children[0]:((h=createTag("div")).style.lineHeight=0,(l=createNS("svg")).appendChild(o),styleDiv(h)))):this.isMasked?o=this.textPaths[d]?this.textPaths[d]:createNS("text"):this.textSpans[d]?(h=this.textSpans[d],o=this.textPaths[d]):(styleDiv(h=createTag("span")),styleDiv(o=createTag("span")),h.appendChild(o)),this.globalData.fontManager.chars){var u,y=this.globalData.fontManager.getCharData(t.finalText[r],s.fStyle,this.globalData.fontManager.getFontByName(t.f).fFamily);if(u=y?y.data:null,f.reset(),u&&u.shapes&&(m=u.shapes[0].it,f.scale(t.finalSize/100,t.finalSize/100),c=this.createPathShape(f,m),o.setAttribute("d",c)),this.isMasked)this.innerElem.appendChild(o);else{if(this.innerElem.appendChild(h),u&&u.shapes){document.body.appendChild(l);var g=l.getBBox();l.setAttribute("width",g.width+2),l.setAttribute("height",g.height+2),l.setAttribute("viewBox",g.x-1+" "+(g.y-1)+" "+(g.width+2)+" "+(g.height+2)),l.style.transform=l.style.webkitTransform="translate("+(g.x-1)+"px,"+(g.y-1)+"px)",p[r].yOffset=g.y-1}else l.setAttribute("width",1),l.setAttribute("height",1);h.appendChild(l)}}else o.textContent=p[r].val,o.setAttributeNS("http://www.w3.org/XML/1998/namespace","xml:space","preserve"),this.isMasked?this.innerElem.appendChild(o):(this.innerElem.appendChild(h),o.style.transform=o.style.webkitTransform="translate3d(0,"+-t.finalSize/1.2+"px,0)");this.isMasked?this.textSpans[d]=o:this.textSpans[d]=h,this.textSpans[d].style.display="block",this.textPaths[d]=o,d+=1}for(;d<this.textSpans.length;)this.textSpans[d].style.display="none",d+=1},HTextElement.prototype.renderInnerContent=function(){if(this.data.singleShape){if(!this._isFirstFrame&&!this.lettersChangedFlag)return;this.isMasked&&this.finalTransform._matMdf&&(this.svgElement.setAttribute("viewBox",-this.finalTransform.mProp.p.v[0]+" "+-this.finalTransform.mProp.p.v[1]+" "+this.compW+" "+this.compH),this.svgElement.style.transform=this.svgElement.style.webkitTransform="translate("+-this.finalTransform.mProp.p.v[0]+"px,"+-this.finalTransform.mProp.p.v[1]+"px)")}if(this.textAnimator.getMeasures(this.textProperty.currentData,this.lettersChangedFlag),this.lettersChangedFlag||this.textAnimator.lettersChangedFlag){var t,e,r,i,s,a=0,n=this.textAnimator.renderedLetters,o=this.textProperty.currentData.l;for(e=o.length,t=0;t<e;t+=1)o[t].n?a+=1:(i=this.textSpans[t],s=this.textPaths[t],r=n[a],a+=1,r._mdf.m&&(this.isMasked?i.setAttribute("transform",r.m):i.style.transform=i.style.webkitTransform=r.m),i.style.opacity=r.o,r.sw&&r._mdf.sw&&s.setAttribute("stroke-width",r.sw),r.sc&&r._mdf.sc&&s.setAttribute("stroke",r.sc),r.fc&&r._mdf.fc&&(s.setAttribute("fill",r.fc),s.style.color=r.fc));if(this.innerElem.getBBox&&!this.hidden&&(this._isFirstFrame||this._mdf)){var h=this.innerElem.getBBox();this.currentBBox.w!==h.width&&(this.currentBBox.w=h.width,this.svgElement.setAttribute("width",h.width)),this.currentBBox.h!==h.height&&(this.currentBBox.h=h.height,this.svgElement.setAttribute("height",h.height));this.currentBBox.w===h.width+2&&this.currentBBox.h===h.height+2&&this.currentBBox.x===h.x-1&&this.currentBBox.y===h.y-1||(this.currentBBox.w=h.width+2,this.currentBBox.h=h.height+2,this.currentBBox.x=h.x-1,this.currentBBox.y=h.y-1,this.svgElement.setAttribute("viewBox",this.currentBBox.x+" "+this.currentBBox.y+" "+this.currentBBox.w+" "+this.currentBBox.h),this.svgElement.style.transform=this.svgElement.style.webkitTransform="translate("+this.currentBBox.x+"px,"+this.currentBBox.y+"px)")}}},extendPrototype([BaseElement,TransformElement,HBaseElement,HSolidElement,HierarchyElement,FrameElement,RenderableElement],HImageElement),HImageElement.prototype.createContent=function(){var t=this.globalData.getAssetsPath(this.assetData),e=new Image;this.data.hasMask?(this.imageElem=createNS("image"),this.imageElem.setAttribute("width",this.assetData.w+"px"),this.imageElem.setAttribute("height",this.assetData.h+"px"),this.imageElem.setAttributeNS("http://www.w3.org/1999/xlink","href",t),this.layerElement.appendChild(this.imageElem),this.baseElement.setAttribute("width",this.assetData.w),this.baseElement.setAttribute("height",this.assetData.h)):this.layerElement.appendChild(e),e.src=t,this.data.ln&&this.baseElement.setAttribute("id",this.data.ln)},extendPrototype([BaseElement,FrameElement,HierarchyElement],HCameraElement),HCameraElement.prototype.setup=function(){var t,e,r=this.comp.threeDElements.length;for(t=0;t<r;t+=1)"3d"===(e=this.comp.threeDElements[t]).type&&(e.perspectiveElem.style.perspective=e.perspectiveElem.style.webkitPerspective=this.pe.v+"px",e.container.style.transformOrigin=e.container.style.mozTransformOrigin=e.container.style.webkitTransformOrigin="0px 0px 0px",e.perspectiveElem.style.transform=e.perspectiveElem.style.webkitTransform="matrix3d(1,0,0,0,0,1,0,0,0,0,1,0,0,0,0,1)")},HCameraElement.prototype.createElements=function(){},HCameraElement.prototype.hide=function(){},HCameraElement.prototype.renderFrame=function(){var t,e,r=this._isFirstFrame;if(this.hierarchy)for(e=this.hierarchy.length,t=0;t<e;t+=1)r=this.hierarchy[t].finalTransform.mProp._mdf||r;if(r||this.pe._mdf||this.p&&this.p._mdf||this.px&&(this.px._mdf||this.py._mdf||this.pz._mdf)||this.rx._mdf||this.ry._mdf||this.rz._mdf||this.or._mdf||this.a&&this.a._mdf){if(this.mat.reset(),this.hierarchy)for(t=e=this.hierarchy.length-1;0<=t;t-=1){var i=this.hierarchy[t].finalTransform.mProp;this.mat.translate(-i.p.v[0],-i.p.v[1],i.p.v[2]),this.mat.rotateX(-i.or.v[0]).rotateY(-i.or.v[1]).rotateZ(i.or.v[2]),this.mat.rotateX(-i.rx.v).rotateY(-i.ry.v).rotateZ(i.rz.v),this.mat.scale(1/i.s.v[0],1/i.s.v[1],1/i.s.v[2]),this.mat.translate(i.a.v[0],i.a.v[1],i.a.v[2])}if(this.p?this.mat.translate(-this.p.v[0],-this.p.v[1],this.p.v[2]):this.mat.translate(-this.px.v,-this.py.v,this.pz.v),this.a){var s;s=this.p?[this.p.v[0]-this.a.v[0],this.p.v[1]-this.a.v[1],this.p.v[2]-this.a.v[2]]:[this.px.v-this.a.v[0],this.py.v-this.a.v[1],this.pz.v-this.a.v[2]];var a=Math.sqrt(Math.pow(s[0],2)+Math.pow(s[1],2)+Math.pow(s[2],2)),n=[s[0]/a,s[1]/a,s[2]/a],o=Math.sqrt(n[2]*n[2]+n[0]*n[0]),h=Math.atan2(n[1],o),l=Math.atan2(n[0],-n[2]);this.mat.rotateY(l).rotateX(-h)}this.mat.rotateX(-this.rx.v).rotateY(-this.ry.v).rotateZ(this.rz.v),this.mat.rotateX(-this.or.v[0]).rotateY(-this.or.v[1]).rotateZ(this.or.v[2]),this.mat.translate(this.globalData.compSize.w/2,this.globalData.compSize.h/2,0),this.mat.translate(0,0,this.pe.v);var p=!this._prevMat.equals(this.mat);if((p||this.pe._mdf)&&this.comp.threeDElements){var m;for(e=this.comp.threeDElements.length,t=0;t<e;t+=1)"3d"===(m=this.comp.threeDElements[t]).type&&(p&&(m.container.style.transform=m.container.style.webkitTransform=this.mat.toCSS()),this.pe._mdf&&(m.perspectiveElem.style.perspective=m.perspectiveElem.style.webkitPerspective=this.pe.v+"px"));this.mat.clone(this._prevMat)}}this._isFirstFrame=!1},HCameraElement.prototype.prepareFrame=function(t){this.prepareProperties(t,!0)},HCameraElement.prototype.destroy=function(){},HCameraElement.prototype.getBaseElement=function(){return null},HEffects.prototype.renderFrame=function(){};var animationManager=function(){var t={},s=[],i=0,a=0,n=0,o=!0,h=!1;function r(t){for(var e=0,r=t.target;e<a;)s[e].animation===r&&(s.splice(e,1),e-=1,a-=1,r.isPaused||m()),e+=1}function l(t,e){if(!t)return null;for(var r=0;r<a;){if(s[r].elem==t&&null!==s[r].elem)return s[r].animation;r+=1}var i=new AnimationItem;return f(i,t),i.setData(t,e),i}function p(){n+=1,d()}function m(){n-=1}function f(t,e){t.addEventListener("destroy",r),t.addEventListener("_active",p),t.addEventListener("_idle",m),s.push({elem:e,animation:t}),a+=1}function c(t){var e,r=t-i;for(e=0;e<a;e+=1)s[e].animation.advanceTime(r);i=t,n&&!h?window.requestAnimationFrame(c):o=!0}function e(t){i=t,window.requestAnimationFrame(c)}function d(){!h&&n&&o&&(window.requestAnimationFrame(e),o=!1)}return t.registerAnimation=l,t.loadAnimation=function(t){var e=new AnimationItem;return f(e,null),e.setParams(t),e},t.setSpeed=function(t,e){var r;for(r=0;r<a;r+=1)s[r].animation.setSpeed(t,e)},t.setDirection=function(t,e){var r;for(r=0;r<a;r+=1)s[r].animation.setDirection(t,e)},t.play=function(t){var e;for(e=0;e<a;e+=1)s[e].animation.play(t)},t.pause=function(t){var e;for(e=0;e<a;e+=1)s[e].animation.pause(t)},t.stop=function(t){var e;for(e=0;e<a;e+=1)s[e].animation.stop(t)},t.togglePause=function(t){var e;for(e=0;e<a;e+=1)s[e].animation.togglePause(t)},t.searchAnimations=function(t,e,r){var i,s=[].concat([].slice.call(document.getElementsByClassName("lottie")),[].slice.call(document.getElementsByClassName("bodymovin"))),a=s.length;for(i=0;i<a;i+=1)r&&s[i].setAttribute("data-bm-type",r),l(s[i],t);if(e&&0===a){r||(r="svg");var n=document.getElementsByTagName("body")[0];n.innerHTML="";var o=createTag("div");o.style.width="100%",o.style.height="100%",o.setAttribute("data-bm-type",r),n.appendChild(o),l(o,t)}},t.resize=function(){var t;for(t=0;t<a;t+=1)s[t].animation.resize()},t.goToAndStop=function(t,e,r){var i;for(i=0;i<a;i+=1)s[i].animation.goToAndStop(t,e,r)},t.destroy=function(t){var e;for(e=a-1;0<=e;e-=1)s[e].animation.destroy(t)},t.freeze=function(){h=!0},t.unfreeze=function(){h=!1,d()},t.getRegisteredAnimations=function(){var t,e=s.length,r=[];for(t=0;t<e;t+=1)r.push(s[t].animation);return r},t}(),AnimationItem=function(){this._cbs=[],this.name="",this.path="",this.isLoaded=!1,this.currentFrame=0,this.currentRawFrame=0,this.totalFrames=0,this.frameRate=0,this.frameMult=0,this.playSpeed=1,this.playDirection=1,this.playCount=0,this.animationData={},this.assets=[],this.isPaused=!0,this.autoplay=!1,this.loop=!0,this.renderer=null,this.animationID=createElementID(),this.assetsPath="",this.timeCompleted=0,this.segmentPos=0,this.subframeEnabled=subframeEnabled,this.segments=[],this._idle=!0,this._completedLoop=!1,this.projectInterface=ProjectInterface(),this.imagePreloader=new ImagePreloader};extendPrototype([BaseEvent],AnimationItem),AnimationItem.prototype.setParams=function(t){t.context&&(this.context=t.context),(t.wrapper||t.container)&&(this.wrapper=t.wrapper||t.container);var e=t.animType?t.animType:t.renderer?t.renderer:"svg";switch(e){case"canvas":this.renderer=new CanvasRenderer(this,t.rendererSettings);break;case"svg":this.renderer=new SVGRenderer(this,t.rendererSettings);break;default:this.renderer=new HybridRenderer(this,t.rendererSettings)}this.renderer.setProjectInterface(this.projectInterface),this.animType=e,""===t.loop||null===t.loop||(!1===t.loop?this.loop=!1:!0===t.loop?this.loop=!0:this.loop=parseInt(t.loop)),this.autoplay=!("autoplay"in t)||t.autoplay,this.name=t.name?t.name:"",this.autoloadSegments=!t.hasOwnProperty("autoloadSegments")||t.autoloadSegments,this.assetsPath=t.assetsPath,t.animationData?this.configAnimation(t.animationData):t.path&&(-1!==t.path.lastIndexOf("\\")?this.path=t.path.substr(0,t.path.lastIndexOf("\\")+1):this.path=t.path.substr(0,t.path.lastIndexOf("/")+1),this.fileName=t.path.substr(t.path.lastIndexOf("/")+1),this.fileName=this.fileName.substr(0,this.fileName.lastIndexOf(".json")),assetLoader.load(t.path,this.configAnimation.bind(this),function(){this.trigger("data_failed")}.bind(this)))},AnimationItem.prototype.setData=function(t,e){var r={wrapper:t,animationData:e?"object"==typeof e?e:JSON.parse(e):null},i=t.attributes;r.path=i.getNamedItem("data-animation-path")?i.getNamedItem("data-animation-path").value:i.getNamedItem("data-bm-path")?i.getNamedItem("data-bm-path").value:i.getNamedItem("bm-path")?i.getNamedItem("bm-path").value:"",r.animType=i.getNamedItem("data-anim-type")?i.getNamedItem("data-anim-type").value:i.getNamedItem("data-bm-type")?i.getNamedItem("data-bm-type").value:i.getNamedItem("bm-type")?i.getNamedItem("bm-type").value:i.getNamedItem("data-bm-renderer")?i.getNamedItem("data-bm-renderer").value:i.getNamedItem("bm-renderer")?i.getNamedItem("bm-renderer").value:"canvas";var s=i.getNamedItem("data-anim-loop")?i.getNamedItem("data-anim-loop").value:i.getNamedItem("data-bm-loop")?i.getNamedItem("data-bm-loop").value:i.getNamedItem("bm-loop")?i.getNamedItem("bm-loop").value:"";""===s||(r.loop="false"!==s&&("true"===s||parseInt(s)));var a=i.getNamedItem("data-anim-autoplay")?i.getNamedItem("data-anim-autoplay").value:i.getNamedItem("data-bm-autoplay")?i.getNamedItem("data-bm-autoplay").value:!i.getNamedItem("bm-autoplay")||i.getNamedItem("bm-autoplay").value;r.autoplay="false"!==a,r.name=i.getNamedItem("data-name")?i.getNamedItem("data-name").value:i.getNamedItem("data-bm-name")?i.getNamedItem("data-bm-name").value:i.getNamedItem("bm-name")?i.getNamedItem("bm-name").value:"","false"===(i.getNamedItem("data-anim-prerender")?i.getNamedItem("data-anim-prerender").value:i.getNamedItem("data-bm-prerender")?i.getNamedItem("data-bm-prerender").value:i.getNamedItem("bm-prerender")?i.getNamedItem("bm-prerender").value:"")&&(r.prerender=!1),this.setParams(r)},AnimationItem.prototype.includeLayers=function(t){t.op>this.animationData.op&&(this.animationData.op=t.op,this.totalFrames=Math.floor(t.op-this.animationData.ip));var e,r,i=this.animationData.layers,s=i.length,a=t.layers,n=a.length;for(r=0;r<n;r+=1)for(e=0;e<s;){if(i[e].id==a[r].id){i[e]=a[r];break}e+=1}if((t.chars||t.fonts)&&(this.renderer.globalData.fontManager.addChars(t.chars),this.renderer.globalData.fontManager.addFonts(t.fonts,this.renderer.globalData.defs)),t.assets)for(s=t.assets.length,e=0;e<s;e+=1)this.animationData.assets.push(t.assets[e]);this.animationData.__complete=!1,dataManager.completeData(this.animationData,this.renderer.globalData.fontManager),this.renderer.includeLayers(t.layers),expressionsPlugin&&expressionsPlugin.initExpressions(this),this.loadNextSegment()},AnimationItem.prototype.loadNextSegment=function(){var t=this.animationData.segments;if(!t||0===t.length||!this.autoloadSegments)return this.trigger("data_ready"),void(this.timeCompleted=this.totalFrames);var e=t.shift();this.timeCompleted=e.time*this.frameRate;var r=this.path+this.fileName+"_"+this.segmentPos+".json";this.segmentPos+=1,assetLoader.load(r,this.includeLayers.bind(this),function(){this.trigger("data_failed")}.bind(this))},AnimationItem.prototype.loadSegments=function(){this.animationData.segments||(this.timeCompleted=this.totalFrames),this.loadNextSegment()},AnimationItem.prototype.imagesLoaded=function(){this.trigger("loaded_images"),this.checkLoaded()},AnimationItem.prototype.preloadImages=function(){this.imagePreloader.setAssetsPath(this.assetsPath),this.imagePreloader.setPath(this.path),this.imagePreloader.loadAssets(this.animationData.assets,this.imagesLoaded.bind(this))},AnimationItem.prototype.configAnimation=function(t){if(this.renderer)try{this.animationData=t,this.totalFrames=Math.floor(this.animationData.op-this.animationData.ip),this.renderer.configAnimation(t),t.assets||(t.assets=[]),this.assets=this.animationData.assets,this.frameRate=this.animationData.fr,this.firstFrame=Math.round(this.animationData.ip),this.frameMult=this.animationData.fr/1e3,this.renderer.searchExtraCompositions(t.assets),this.trigger("config_ready"),this.preloadImages(),this.loadSegments(),this.updaFrameModifier(),this.waitForFontsLoaded()}catch(t){this.triggerConfigError(t)}},AnimationItem.prototype.waitForFontsLoaded=function(){this.renderer&&(this.renderer.globalData.fontManager.loaded()?this.checkLoaded():setTimeout(this.waitForFontsLoaded.bind(this),20))},AnimationItem.prototype.checkLoaded=function(){this.isLoaded||!this.renderer.globalData.fontManager.loaded()||!this.imagePreloader.loaded()&&"canvas"===this.renderer.rendererType||(this.isLoaded=!0,dataManager.completeData(this.animationData,this.renderer.globalData.fontManager),expressionsPlugin&&expressionsPlugin.initExpressions(this),this.renderer.initItems(),setTimeout(function(){this.trigger("DOMLoaded")}.bind(this),0),this.gotoFrame(),this.autoplay&&this.play())},AnimationItem.prototype.resize=function(){this.renderer.updateContainerSize()},AnimationItem.prototype.setSubframe=function(t){this.subframeEnabled=!!t},AnimationItem.prototype.gotoFrame=function(){this.currentFrame=this.subframeEnabled?this.currentRawFrame:~~this.currentRawFrame,this.timeCompleted!==this.totalFrames&&this.currentFrame>this.timeCompleted&&(this.currentFrame=this.timeCompleted),this.trigger("enterFrame"),this.renderFrame()},AnimationItem.prototype.renderFrame=function(){if(!1!==this.isLoaded)try{this.renderer.renderFrame(this.currentFrame+this.firstFrame)}catch(t){this.triggerRenderFrameError(t)}},AnimationItem.prototype.play=function(t){t&&this.name!=t||!0===this.isPaused&&(this.isPaused=!1,this._idle&&(this._idle=!1,this.trigger("_active")))},AnimationItem.prototype.pause=function(t){t&&this.name!=t||!1===this.isPaused&&(this.isPaused=!0,this._idle=!0,this.trigger("_idle"))},AnimationItem.prototype.togglePause=function(t){t&&this.name!=t||(!0===this.isPaused?this.play():this.pause())},AnimationItem.prototype.stop=function(t){t&&this.name!=t||(this.pause(),this.playCount=0,this._completedLoop=!1,this.setCurrentRawFrameValue(0))},AnimationItem.prototype.goToAndStop=function(t,e,r){r&&this.name!=r||(e?this.setCurrentRawFrameValue(t):this.setCurrentRawFrameValue(t*this.frameModifier),this.pause())},AnimationItem.prototype.goToAndPlay=function(t,e,r){this.goToAndStop(t,e,r),this.play()},AnimationItem.prototype.advanceTime=function(t){if(!0!==this.isPaused&&!1!==this.isLoaded){var e=this.currentRawFrame+t*this.frameModifier,r=!1;e>=this.totalFrames-1&&0<this.frameModifier?this.loop&&this.playCount!==this.loop?e>=this.totalFrames?(this.playCount+=1,this.checkSegments(e%this.totalFrames)||(this.setCurrentRawFrameValue(e%this.totalFrames),this._completedLoop=!0,this.trigger("loopComplete"))):this.setCurrentRawFrameValue(e):this.checkSegments(e>this.totalFrames?e%this.totalFrames:0)||(r=!0,e=this.totalFrames-1):e<0?this.checkSegments(e%this.totalFrames)||(!this.loop||this.playCount--<=0&&!0!==this.loop?(r=!0,e=0):(this.setCurrentRawFrameValue(this.totalFrames+e%this.totalFrames),this._completedLoop?this.trigger("loopComplete"):this._completedLoop=!0)):this.setCurrentRawFrameValue(e),r&&(this.setCurrentRawFrameValue(e),this.pause(),this.trigger("complete"))}},AnimationItem.prototype.adjustSegment=function(t,e){this.playCount=0,t[1]<t[0]?(0<this.frameModifier&&(this.playSpeed<0?this.setSpeed(-this.playSpeed):this.setDirection(-1)),this.timeCompleted=this.totalFrames=t[0]-t[1],this.firstFrame=t[1],this.setCurrentRawFrameValue(this.totalFrames-.001-e)):t[1]>t[0]&&(this.frameModifier<0&&(this.playSpeed<0?this.setSpeed(-this.playSpeed):this.setDirection(1)),this.timeCompleted=this.totalFrames=t[1]-t[0],this.firstFrame=t[0],this.setCurrentRawFrameValue(.001+e)),this.trigger("segmentStart")},AnimationItem.prototype.setSegment=function(t,e){var r=-1;this.isPaused&&(this.currentRawFrame+this.firstFrame<t?r=t:this.currentRawFrame+this.firstFrame>e&&(r=e-t)),this.firstFrame=t,this.timeCompleted=this.totalFrames=e-t,-1!==r&&this.goToAndStop(r,!0)},AnimationItem.prototype.playSegments=function(t,e){if(e&&(this.segments.length=0),"object"==typeof t[0]){var r,i=t.length;for(r=0;r<i;r+=1)this.segments.push(t[r])}else this.segments.push(t);this.segments.length&&e&&this.adjustSegment(this.segments.shift(),0),this.isPaused&&this.play()},AnimationItem.prototype.resetSegments=function(t){this.segments.length=0,this.segments.push([this.animationData.ip,this.animationData.op]),t&&this.checkSegments(0)},AnimationItem.prototype.checkSegments=function(t){return!!this.segments.length&&(this.adjustSegment(this.segments.shift(),t),!0)},AnimationItem.prototype.destroy=function(t){t&&this.name!=t||!this.renderer||(this.renderer.destroy(),this.imagePreloader.destroy(),this.trigger("destroy"),this._cbs=null,this.onEnterFrame=this.onLoopComplete=this.onComplete=this.onSegmentStart=this.onDestroy=null,this.renderer=null)},AnimationItem.prototype.setCurrentRawFrameValue=function(t){this.currentRawFrame=t,this.gotoFrame()},AnimationItem.prototype.setSpeed=function(t){this.playSpeed=t,this.updaFrameModifier()},AnimationItem.prototype.setDirection=function(t){this.playDirection=t<0?-1:1,this.updaFrameModifier()},AnimationItem.prototype.updaFrameModifier=function(){this.frameModifier=this.frameMult*this.playSpeed*this.playDirection},AnimationItem.prototype.getPath=function(){return this.path},AnimationItem.prototype.getAssetsPath=function(t){var e="";if(t.e)e=t.p;else if(this.assetsPath){var r=t.p;-1!==r.indexOf("images/")&&(r=r.split("/")[1]),e=this.assetsPath+r}else e=this.path,e+=t.u?t.u:"",e+=t.p;return e},AnimationItem.prototype.getAssetData=function(t){for(var e=0,r=this.assets.length;e<r;){if(t==this.assets[e].id)return this.assets[e];e+=1}},AnimationItem.prototype.hide=function(){this.renderer.hide()},AnimationItem.prototype.show=function(){this.renderer.show()},AnimationItem.prototype.getDuration=function(t){return t?this.totalFrames:this.totalFrames/this.frameRate},AnimationItem.prototype.trigger=function(t){if(this._cbs&&this._cbs[t])switch(t){case"enterFrame":this.triggerEvent(t,new BMEnterFrameEvent(t,this.currentFrame,this.totalFrames,this.frameModifier));break;case"loopComplete":this.triggerEvent(t,new BMCompleteLoopEvent(t,this.loop,this.playCount,this.frameMult));break;case"complete":this.triggerEvent(t,new BMCompleteEvent(t,this.frameMult));break;case"segmentStart":this.triggerEvent(t,new BMSegmentStartEvent(t,this.firstFrame,this.totalFrames));break;case"destroy":this.triggerEvent(t,new BMDestroyEvent(t,this));break;default:this.triggerEvent(t)}"enterFrame"===t&&this.onEnterFrame&&this.onEnterFrame.call(this,new BMEnterFrameEvent(t,this.currentFrame,this.totalFrames,this.frameMult)),"loopComplete"===t&&this.onLoopComplete&&this.onLoopComplete.call(this,new BMCompleteLoopEvent(t,this.loop,this.playCount,this.frameMult)),"complete"===t&&this.onComplete&&this.onComplete.call(this,new BMCompleteEvent(t,this.frameMult)),"segmentStart"===t&&this.onSegmentStart&&this.onSegmentStart.call(this,new BMSegmentStartEvent(t,this.firstFrame,this.totalFrames)),"destroy"===t&&this.onDestroy&&this.onDestroy.call(this,new BMDestroyEvent(t,this))},AnimationItem.prototype.triggerRenderFrameError=function(t){var e=new BMRenderFrameErrorEvent(t,this.currentFrame);this.triggerEvent("error",e),this.onError&&this.onError.call(this,e)},AnimationItem.prototype.triggerConfigError=function(t){var e=new BMConfigErrorEvent(t,this.currentFrame);this.triggerEvent("error",e),this.onError&&this.onError.call(this,e)};var Expressions=(BW={},BW.initExpressions=function(t){var e=0,r=[];function i(){var t,e=r.length;for(t=0;t<e;t+=1)r[t].release();r.length=0}t.renderer.compInterface=CompExpressionInterface(t.renderer),t.renderer.globalData.projectInterface.registerComposition(t.renderer),t.renderer.globalData.pushExpression=function(){e+=1},t.renderer.globalData.popExpression=function(){0==(e-=1)&&i()},t.renderer.globalData.registerExpressionProperty=function(t){-1===r.indexOf(t)&&r.push(t)}},BW),BW;expressionsPlugin=Expressions;var ExpressionManager=function(){var ob={},Math=BMMath,window=null,document=null;function $bm_isInstanceOfArray(t){return t.constructor===Array||t.constructor===Float32Array}function isNumerable(t,e){return"number"===t||"boolean"===t||"string"===t||e instanceof Number}function $bm_neg(t){var e=typeof t;if("number"===e||"boolean"===e||t instanceof Number)return-t;if($bm_isInstanceOfArray(t)){var r,i=t.length,s=[];for(r=0;r<i;r+=1)s[r]=-t[r];return s}return t.propType?t.v:void 0}var easeInBez=BezierFactory.getBezierEasing(.333,0,.833,.833,"easeIn").get,easeOutBez=BezierFactory.getBezierEasing(.167,.167,.667,1,"easeOut").get,easeInOutBez=BezierFactory.getBezierEasing(.33,0,.667,1,"easeInOut").get;function sum(t,e){var r=typeof t,i=typeof e;if("string"===r||"string"===i)return t+e;if(isNumerable(r,t)&&isNumerable(i,e))return t+e;if($bm_isInstanceOfArray(t)&&isNumerable(i,e))return(t=t.slice(0))[0]=t[0]+e,t;if(isNumerable(r,t)&&$bm_isInstanceOfArray(e))return(e=e.slice(0))[0]=t+e[0],e;if($bm_isInstanceOfArray(t)&&$bm_isInstanceOfArray(e)){for(var s=0,a=t.length,n=e.length,o=[];s<a||s<n;)("number"==typeof t[s]||t[s]instanceof Number)&&("number"==typeof e[s]||e[s]instanceof Number)?o[s]=t[s]+e[s]:o[s]=void 0===e[s]?t[s]:t[s]||e[s],s+=1;return o}return 0}var add=sum;function sub(t,e){var r=typeof t,i=typeof e;if(isNumerable(r,t)&&isNumerable(i,e))return"string"===r&&(t=parseInt(t)),"string"===i&&(e=parseInt(e)),t-e;if($bm_isInstanceOfArray(t)&&isNumerable(i,e))return(t=t.slice(0))[0]=t[0]-e,t;if(isNumerable(r,t)&&$bm_isInstanceOfArray(e))return(e=e.slice(0))[0]=t-e[0],e;if($bm_isInstanceOfArray(t)&&$bm_isInstanceOfArray(e)){for(var s=0,a=t.length,n=e.length,o=[];s<a||s<n;)("number"==typeof t[s]||t[s]instanceof Number)&&("number"==typeof e[s]||e[s]instanceof Number)?o[s]=t[s]-e[s]:o[s]=void 0===e[s]?t[s]:t[s]||e[s],s+=1;return o}return 0}function mul(t,e){var r,i,s,a=typeof t,n=typeof e;if(isNumerable(a,t)&&isNumerable(n,e))return t*e;if($bm_isInstanceOfArray(t)&&isNumerable(n,e)){for(s=t.length,r=createTypedArray("float32",s),i=0;i<s;i+=1)r[i]=t[i]*e;return r}if(isNumerable(a,t)&&$bm_isInstanceOfArray(e)){for(s=e.length,r=createTypedArray("float32",s),i=0;i<s;i+=1)r[i]=t*e[i];return r}return 0}function div(t,e){var r,i,s,a=typeof t,n=typeof e;if(isNumerable(a,t)&&isNumerable(n,e))return t/e;if($bm_isInstanceOfArray(t)&&isNumerable(n,e)){for(s=t.length,r=createTypedArray("float32",s),i=0;i<s;i+=1)r[i]=t[i]/e;return r}if(isNumerable(a,t)&&$bm_isInstanceOfArray(e)){for(s=e.length,r=createTypedArray("float32",s),i=0;i<s;i+=1)r[i]=t/e[i];return r}return 0}function mod(t,e){return"string"==typeof t&&(t=parseInt(t)),"string"==typeof e&&(e=parseInt(e)),t%e}var $bm_sum=sum,$bm_sub=sub,$bm_mul=mul,$bm_div=div,$bm_mod=mod;function clamp(t,e,r){if(r<e){var i=r;r=e,e=i}return Math.min(Math.max(t,e),r)}function radiansToDegrees(t){return t/degToRads}var radians_to_degrees=radiansToDegrees;function degreesToRadians(t){return t*degToRads}var degrees_to_radians=radiansToDegrees,helperLengthArray=[0,0,0,0,0,0];function length(t,e){if("number"==typeof t||t instanceof Number)return e=e||0,Math.abs(t-e);e||(e=helperLengthArray);var r,i=Math.min(t.length,e.length),s=0;for(r=0;r<i;r+=1)s+=Math.pow(e[r]-t[r],2);return Math.sqrt(s)}function normalize(t){return div(t,length(t))}function rgbToHsl(t){var e,r,i=t[0],s=t[1],a=t[2],n=Math.max(i,s,a),o=Math.min(i,s,a),h=(n+o)/2;if(n==o)e=r=0;else{var l=n-o;switch(r=.5<h?l/(2-n-o):l/(n+o),n){case i:e=(s-a)/l+(s<a?6:0);break;case s:e=(a-i)/l+2;break;case a:e=(i-s)/l+4}e/=6}return[e,r,h,t[3]]}function hue2rgb(t,e,r){return r<0&&(r+=1),1<r&&(r-=1),r<1/6?t+6*(e-t)*r:r<.5?e:r<2/3?t+(e-t)*(2/3-r)*6:t}function hslToRgb(t){var e,r,i,s=t[0],a=t[1],n=t[2];if(0===a)e=r=i=n;else{var o=n<.5?n*(1+a):n+a-n*a,h=2*n-o;e=hue2rgb(h,o,s+1/3),r=hue2rgb(h,o,s),i=hue2rgb(h,o,s-1/3)}return[e,r,i,t[3]]}function linear(t,e,r,i,s){if(void 0!==i&&void 0!==s||(i=e,s=r,e=0,r=1),r<e){var a=r;r=e,e=a}if(t<=e)return i;if(r<=t)return s;var n=r===e?0:(t-e)/(r-e);if(!i.length)return i+(s-i)*n;var o,h=i.length,l=createTypedArray("float32",h);for(o=0;o<h;o+=1)l[o]=i[o]+(s[o]-i[o])*n;return l}function random(t,e){if(void 0===e&&(void 0===t?(t=0,e=1):(e=t,t=void 0)),e.length){var r,i=e.length;t||(t=createTypedArray("float32",i));var s=createTypedArray("float32",i),a=BMMath.random();for(r=0;r<i;r+=1)s[r]=t[r]+a*(e[r]-t[r]);return s}return void 0===t&&(t=0),t+BMMath.random()*(e-t)}function createPath(t,e,r,i){var s,a=t.length,n=shape_pool.newElement();n.setPathData(!!i,a);var o,h,l=[0,0];for(s=0;s<a;s+=1)o=e&&e[s]?e[s]:l,h=r&&r[s]?r[s]:l,n.setTripleAt(t[s][0],t[s][1],h[0]+t[s][0],h[1]+t[s][1],o[0]+t[s][0],o[1]+t[s][1],s,!0);return n}function initiateExpression(elem,data,property){var val=data.x,needsVelocity=/velocity(?![\w\d])/.test(val),_needsRandom=-1!==val.indexOf("random"),elemType=elem.data.ty,transform,$bm_transform,content,effect,thisProperty=property;thisProperty.valueAtTime=thisProperty.getValueAtTime,Object.defineProperty(thisProperty,"value",{get:function(){return thisProperty.v}}),elem.comp.frameDuration=1/elem.comp.globalData.frameRate,elem.comp.displayStartTime=0;var inPoint=elem.data.ip/elem.comp.globalData.frameRate,outPoint=elem.data.op/elem.comp.globalData.frameRate,width=elem.data.sw?elem.data.sw:0,height=elem.data.sh?elem.data.sh:0,name=elem.data.nm,loopIn,loop_in,loopOut,loop_out,smooth,toWorld,fromWorld,fromComp,toComp,fromCompToSurface,position,rotation,anchorPoint,scale,thisLayer,thisComp,mask,valueAtTime,velocityAtTime,__expression_functions=[],scoped_bm_rt;if(data.xf){var i,len=data.xf.length;for(i=0;i<len;i+=1)__expression_functions[i]=eval("(function(){ return "+data.xf[i]+"}())")}var expression_function=eval("[function _expression_function(){"+val+";scoped_bm_rt=$bm_rt}]")[0],numKeys=property.kf?data.k.length:0,active=!this.data||!0!==this.data.hd,wiggle=function(t,e){var r,i,s=this.pv.length?this.pv.length:1,a=createTypedArray("float32",s);var n=Math.floor(5*time);for(i=r=0;r<n;){for(i=0;i<s;i+=1)a[i]+=-e+2*e*BMMath.random();r+=1}var o=5*time,h=o-Math.floor(o),l=createTypedArray("float32",s);if(1<s){for(i=0;i<s;i+=1)l[i]=this.pv[i]+a[i]+(-e+2*e*BMMath.random())*h;return l}return this.pv+a[0]+(-e+2*e*BMMath.random())*h}.bind(this);function loopInDuration(t,e){return loopIn(t,e,!0)}function loopOutDuration(t,e){return loopOut(t,e,!0)}thisProperty.loopIn&&(loopIn=thisProperty.loopIn.bind(thisProperty),loop_in=loopIn),thisProperty.loopOut&&(loopOut=thisProperty.loopOut.bind(thisProperty),loop_out=loopOut),thisProperty.smooth&&(smooth=thisProperty.smooth.bind(thisProperty)),this.getValueAtTime&&(valueAtTime=this.getValueAtTime.bind(this)),this.getVelocityAtTime&&(velocityAtTime=this.getVelocityAtTime.bind(this));var comp=elem.comp.globalData.projectInterface.bind(elem.comp.globalData.projectInterface),time,velocity,value,text,textIndex,textTotal,selectorValue;function lookAt(t,e){var r=[e[0]-t[0],e[1]-t[1],e[2]-t[2]],i=Math.atan2(r[0],Math.sqrt(r[1]*r[1]+r[2]*r[2]))/degToRads;return[-Math.atan2(r[1],r[2])/degToRads,i,0]}function easeOut(t,e,r,i,s){return applyEase(easeOutBez,t,e,r,i,s)}function easeIn(t,e,r,i,s){return applyEase(easeInBez,t,e,r,i,s)}function ease(t,e,r,i,s){return applyEase(easeInOutBez,t,e,r,i,s)}function applyEase(t,e,r,i,s,a){void 0===s?(s=r,a=i):e=(e-r)/(i-r);var n=t(e=1<e?1:e<0?0:e);if($bm_isInstanceOfArray(s)){var o,h=s.length,l=createTypedArray("float32",h);for(o=0;o<h;o+=1)l[o]=(a[o]-s[o])*n+s[o];return l}return(a-s)*n+s}function nearestKey(t){var e,r,i,s=data.k.length;if(data.k.length&&"number"!=typeof data.k[0])if(r=-1,(t*=elem.comp.globalData.frameRate)<data.k[0].t)r=1,i=data.k[0].t;else{for(e=0;e<s-1;e+=1){if(t===data.k[e].t){r=e+1,i=data.k[e].t;break}if(t>data.k[e].t&&t<data.k[e+1].t){i=t-data.k[e].t>data.k[e+1].t-t?(r=e+2,data.k[e+1].t):(r=e+1,data.k[e].t);break}}-1===r&&(r=e+1,i=data.k[e].t)}else i=r=0;var a={};return a.index=r,a.time=i/elem.comp.globalData.frameRate,a}function key(t){var e,r,i;if(!data.k.length||"number"==typeof data.k[0])throw new Error("The property has no keyframe at index "+t);t-=1,e={time:data.k[t].t/elem.comp.globalData.frameRate,value:[]};var s=data.k[t].hasOwnProperty("s")?data.k[t].s:data.k[t-1].e;for(i=s.length,r=0;r<i;r+=1)e[r]=s[r],e.value[r]=s[r];return e}function framesToTime(t,e){return e||(e=elem.comp.globalData.frameRate),t/e}function timeToFrames(t,e){return t||0===t||(t=time),e||(e=elem.comp.globalData.frameRate),t*e}function seedRandom(t){BMMath.seedrandom(randSeed+t)}function sourceRectAtTime(){return elem.sourceRectAtTime()}function substring(t,e){return"string"==typeof value?void 0===e?value.substring(t):value.substring(t,e):""}function substr(t,e){return"string"==typeof value?void 0===e?value.substr(t):value.substr(t,e):""}var index=elem.data.ind,hasParent=!(!elem.hierarchy||!elem.hierarchy.length),parent,randSeed=Math.floor(1e6*Math.random()),globalData=elem.globalData;function executeExpression(t){return value=t,_needsRandom&&seedRandom(randSeed),this.frameExpressionId===elem.globalData.frameId&&"textSelector"!==this.propType?value:("textSelector"===this.propType&&(textIndex=this.textIndex,textTotal=this.textTotal,selectorValue=this.selectorValue),thisLayer||(text=elem.layerInterface.text,thisLayer=elem.layerInterface,thisComp=elem.comp.compInterface,toWorld=thisLayer.toWorld.bind(thisLayer),fromWorld=thisLayer.fromWorld.bind(thisLayer),fromComp=thisLayer.fromComp.bind(thisLayer),toComp=thisLayer.toComp.bind(thisLayer),mask=thisLayer.mask?thisLayer.mask.bind(thisLayer):null,fromCompToSurface=fromComp),transform||(transform=elem.layerInterface("ADBE Transform Group"),($bm_transform=transform)&&(anchorPoint=transform.anchorPoint)),4!==elemType||content||(content=thisLayer("ADBE Root Vectors Group")),effect||(effect=thisLayer(4)),(hasParent=!(!elem.hierarchy||!elem.hierarchy.length))&&!parent&&(parent=elem.hierarchy[0].layerInterface),time=this.comp.renderedFrame/this.comp.globalData.frameRate,needsVelocity&&(velocity=velocityAtTime(time)),expression_function(),this.frameExpressionId=elem.globalData.frameId,"shape"===scoped_bm_rt.propType&&(scoped_bm_rt=scoped_bm_rt.v),scoped_bm_rt)}return executeExpression}return ob.initiateExpression=initiateExpression,ob}(),expressionHelpers={searchExpressions:function(t,e,r){e.x&&(r.k=!0,r.x=!0,r.initiateExpression=ExpressionManager.initiateExpression,r.effectsSequence.push(r.initiateExpression(t,e,r).bind(r)))},getSpeedAtTime:function(t){var e=this.getValueAtTime(t),r=this.getValueAtTime(t+-.01),i=0;if(e.length){var s;for(s=0;s<e.length;s+=1)i+=Math.pow(r[s]-e[s],2);i=100*Math.sqrt(i)}else i=0;return i},getVelocityAtTime:function(t){if(void 0!==this.vel)return this.vel;var e,r,i=this.getValueAtTime(t),s=this.getValueAtTime(t+-.001);if(i.length)for(e=createTypedArray("float32",i.length),r=0;r<i.length;r+=1)e[r]=(s[r]-i[r])/-.001;else e=(s-i)/-.001;return e},getValueAtTime:function(t){return t*=this.elem.globalData.frameRate,(t-=this.offsetTime)!==this._cachingAtTime.lastFrame&&(this._cachingAtTime.lastIndex=this._cachingAtTime.lastFrame<t?this._cachingAtTime.lastIndex:0,this._cachingAtTime.value=this.interpolateValue(t,this._cachingAtTime),this._cachingAtTime.lastFrame=t),this._cachingAtTime.value},getStaticValueAtTime:function(){return this.pv},setGroupProperty:function(t){this.propertyGroup=t}};!function(){function o(t,e,r){if(!this.k||!this.keyframes)return this.pv;t=t?t.toLowerCase():"";var i,s,a,n,o,h=this.comp.renderedFrame,l=this.keyframes,p=l[l.length-1].t;if(h<=p)return this.pv;if(r?s=p-(i=e?Math.abs(p-elem.comp.globalData.frameRate*e):Math.max(0,p-this.elem.data.ip)):((!e||e>l.length-1)&&(e=l.length-1),i=p-(s=l[l.length-1-e].t)),"pingpong"===t){if(Math.floor((h-s)/i)%2!=0)return this.getValueAtTime((i-(h-s)%i+s)/this.comp.globalData.frameRate,0)}else{if("offset"===t){var m=this.getValueAtTime(s/this.comp.globalData.frameRate,0),f=this.getValueAtTime(p/this.comp.globalData.frameRate,0),c=this.getValueAtTime(((h-s)%i+s)/this.comp.globalData.frameRate,0),d=Math.floor((h-s)/i);if(this.pv.length){for(n=(o=new Array(m.length)).length,a=0;a<n;a+=1)o[a]=(f[a]-m[a])*d+c[a];return o}return(f-m)*d+c}if("continue"===t){var u=this.getValueAtTime(p/this.comp.globalData.frameRate,0),y=this.getValueAtTime((p-.001)/this.comp.globalData.frameRate,0);if(this.pv.length){for(n=(o=new Array(u.length)).length,a=0;a<n;a+=1)o[a]=u[a]+(u[a]-y[a])*((h-p)/this.comp.globalData.frameRate)/5e-4;return o}return u+(h-p)/.001*(u-y)}}return this.getValueAtTime(((h-s)%i+s)/this.comp.globalData.frameRate,0)}function h(t,e,r){if(!this.k)return this.pv;t=t?t.toLowerCase():"";var i,s,a,n,o,h=this.comp.renderedFrame,l=this.keyframes,p=l[0].t;if(p<=h)return this.pv;if(r?s=p+(i=e?Math.abs(elem.comp.globalData.frameRate*e):Math.max(0,this.elem.data.op-p)):((!e||e>l.length-1)&&(e=l.length-1),i=(s=l[e].t)-p),"pingpong"===t){if(Math.floor((p-h)/i)%2==0)return this.getValueAtTime(((p-h)%i+p)/this.comp.globalData.frameRate,0)}else{if("offset"===t){var m=this.getValueAtTime(p/this.comp.globalData.frameRate,0),f=this.getValueAtTime(s/this.comp.globalData.frameRate,0),c=this.getValueAtTime((i-(p-h)%i+p)/this.comp.globalData.frameRate,0),d=Math.floor((p-h)/i)+1;if(this.pv.length){for(n=(o=new Array(m.length)).length,a=0;a<n;a+=1)o[a]=c[a]-(f[a]-m[a])*d;return o}return c-(f-m)*d}if("continue"===t){var u=this.getValueAtTime(p/this.comp.globalData.frameRate,0),y=this.getValueAtTime((p+.001)/this.comp.globalData.frameRate,0);if(this.pv.length){for(n=(o=new Array(u.length)).length,a=0;a<n;a+=1)o[a]=u[a]+(u[a]-y[a])*(p-h)/.001;return o}return u+(u-y)*(p-h)/.001}}return this.getValueAtTime((i-(p-h)%i+p)/this.comp.globalData.frameRate,0)}function l(t,e){if(!this.k)return this.pv;if(t=.5*(t||.4),(e=Math.floor(e||5))<=1)return this.pv;var r,i,s=this.comp.renderedFrame/this.comp.globalData.frameRate,a=s-t,n=1<e?(s+t-a)/(e-1):1,o=0,h=0;for(r=this.pv.length?createTypedArray("float32",this.pv.length):0;o<e;){if(i=this.getValueAtTime(a+o*n),this.pv.length)for(h=0;h<this.pv.length;h+=1)r[h]+=i[h];else r+=i;o+=1}if(this.pv.length)for(h=0;h<this.pv.length;h+=1)r[h]/=e;else r/=e;return r}var s=TransformPropertyFactory.getTransformProperty;TransformPropertyFactory.getTransformProperty=function(t,e,r){var i=s(t,e,r);return i.dynamicProperties.length?i.getValueAtTime=function(t){console.warn("Transform at time not supported")}.bind(i):i.getValueAtTime=function(t){}.bind(i),i.setGroupProperty=expressionHelpers.setGroupProperty,i};var p=PropertyFactory.getProp;PropertyFactory.getProp=function(t,e,r,i,s){var a=p(t,e,r,i,s);a.kf?a.getValueAtTime=expressionHelpers.getValueAtTime.bind(a):a.getValueAtTime=expressionHelpers.getStaticValueAtTime.bind(a),a.setGroupProperty=expressionHelpers.setGroupProperty,a.loopOut=o,a.loopIn=h,a.smooth=l,a.getVelocityAtTime=expressionHelpers.getVelocityAtTime.bind(a),a.getSpeedAtTime=expressionHelpers.getSpeedAtTime.bind(a),a.numKeys=1===e.a?e.k.length:0,a.propertyIndex=e.ix;var n=0;return 0!==r&&(n=createTypedArray("float32",1===e.a?e.k[0].s.length:e.k.length)),a._cachingAtTime={lastFrame:initialDefaultFrame,lastIndex:0,value:n},expressionHelpers.searchExpressions(t,e,a),a.k&&s.addDynamicProperty(a),a};var t=ShapePropertyFactory.getConstructorFunction(),e=ShapePropertyFactory.getKeyframedConstructorFunction();function r(){}r.prototype={vertices:function(t,e){this.k&&this.getValue();var r=this.v;void 0!==e&&(r=this.getValueAtTime(e,0));var i,s=r._length,a=r[t],n=r.v,o=createSizedArray(s);for(i=0;i<s;i+=1)o[i]="i"===t||"o"===t?[a[i][0]-n[i][0],a[i][1]-n[i][1]]:[a[i][0],a[i][1]];return o},points:function(t){return this.vertices("v",t)},inTangents:function(t){return this.vertices("i",t)},outTangents:function(t){return this.vertices("o",t)},isClosed:function(){return this.v.c},pointOnPath:function(t,e){var r=this.v;void 0!==e&&(r=this.getValueAtTime(e,0)),this._segmentsLength||(this._segmentsLength=bez.getSegmentsLength(r));for(var i,s=this._segmentsLength,a=s.lengths,n=s.totalLength*t,o=0,h=a.length,l=0;o<h;){if(l+a[o].addedLength>n){var p=o,m=r.c&&o===h-1?0:o+1,f=(n-l)/a[o].addedLength;i=bez.getPointInSegment(r.v[p],r.v[m],r.o[p],r.i[m],f,a[o]);break}l+=a[o].addedLength,o+=1}return i||(i=r.c?[r.v[0][0],r.v[0][1]]:[r.v[r._length-1][0],r.v[r._length-1][1]]),i},vectorOnPath:function(t,e,r){t=1==t?this.v.c?0:.999:t;var i=this.pointOnPath(t,e),s=this.pointOnPath(t+.001,e),a=s[0]-i[0],n=s[1]-i[1],o=Math.sqrt(Math.pow(a,2)+Math.pow(n,2));return 0===o?[0,0]:"tangent"===r?[a/o,n/o]:[-n/o,a/o]},tangentOnPath:function(t,e){return this.vectorOnPath(t,e,"tangent")},normalOnPath:function(t,e){return this.vectorOnPath(t,e,"normal")},setGroupProperty:expressionHelpers.setGroupProperty,getValueAtTime:expressionHelpers.getStaticValueAtTime},extendPrototype([r],t),extendPrototype([r],e),e.prototype.getValueAtTime=function(t){return this._cachingAtTime||(this._cachingAtTime={shapeValue:shape_pool.clone(this.pv),lastIndex:0,lastTime:initialDefaultFrame}),t*=this.elem.globalData.frameRate,(t-=this.offsetTime)!==this._cachingAtTime.lastTime&&(this._cachingAtTime.lastIndex=this._cachingAtTime.lastTime<t?this._caching.lastIndex:0,this._cachingAtTime.lastTime=t,this.interpolateShape(t,this._cachingAtTime.shapeValue,this._cachingAtTime)),this._cachingAtTime.shapeValue},e.prototype.initiateExpression=ExpressionManager.initiateExpression;var n=ShapePropertyFactory.getShapeProp;ShapePropertyFactory.getShapeProp=function(t,e,r,i,s){var a=n(t,e,r,i,s);return a.propertyIndex=e.ix,a.lock=!1,3===r?expressionHelpers.searchExpressions(t,e.pt,a):4===r&&expressionHelpers.searchExpressions(t,e.ks,a),a.k&&t.addDynamicProperty(a),a}}(),TextProperty.prototype.getExpressionValue=function(t,e){var r=this.calculateExpression(e);if(t.t===r)return t;var i={};return this.copyData(i,t),i.t=r.toString(),i.__complete=!1,i},TextProperty.prototype.searchProperty=function(){var t=this.searchKeyframes(),e=this.searchExpressions();return this.kf=t||e,this.kf},TextProperty.prototype.searchExpressions=function(){if(this.data.d.x)return this.calculateExpression=ExpressionManager.initiateExpression.bind(this)(this.elem,this.data.d,this),this.addEffect(this.getExpressionValue.bind(this)),!0};var ShapeExpressionInterface=function(){function m(t,e,r){var i,s=[],a=t?t.length:0;for(i=0;i<a;i+=1)"gr"==t[i].ty?s.push(n(t[i],e[i],r)):"fl"==t[i].ty?s.push(o(t[i],e[i],r)):"st"==t[i].ty?s.push(h(t[i],e[i],r)):"tm"==t[i].ty?s.push(l(t[i],e[i],r)):"tr"==t[i].ty||("el"==t[i].ty?s.push(p(t[i],e[i],r)):"sr"==t[i].ty?s.push(f(t[i],e[i],r)):"sh"==t[i].ty?s.push(y(t[i],e[i],r)):"rc"==t[i].ty?s.push(c(t[i],e[i],r)):"rd"==t[i].ty?s.push(d(t[i],e[i],r)):"rp"==t[i].ty&&s.push(u(t[i],e[i],r)));return s}function n(t,e,r){var i=function(t){switch(t){case"ADBE Vectors Group":case"Contents":case 2:return i.content;default:return i.transform}};i.propertyGroup=function(t){return 1===t?i:r(t-1)};var s,a,n,o,h,l=(s=t,a=e,n=i.propertyGroup,(h=function(t){for(var e=0,r=o.length;e<r;){if(o[e]._name===t||o[e].mn===t||o[e].propertyIndex===t||o[e].ix===t||o[e].ind===t)return o[e];e+=1}if("number"==typeof t)return o[t-1]}).propertyGroup=function(t){return 1===t?h:n(t-1)},o=m(s.it,a.it,h.propertyGroup),h.numProperties=o.length,h.propertyIndex=s.cix,h._name=s.nm,h),p=function(e,t,r){function i(t){return 1==t?s:r(--t)}t.transform.mProps.o.setGroupProperty(i),t.transform.mProps.p.setGroupProperty(i),t.transform.mProps.a.setGroupProperty(i),t.transform.mProps.s.setGroupProperty(i),t.transform.mProps.r.setGroupProperty(i),t.transform.mProps.sk&&(t.transform.mProps.sk.setGroupProperty(i),t.transform.mProps.sa.setGroupProperty(i));function s(t){return e.a.ix===t||"Anchor Point"===t?s.anchorPoint:e.o.ix===t||"Opacity"===t?s.opacity:e.p.ix===t||"Position"===t?s.position:e.r.ix===t||"Rotation"===t||"ADBE Vector Rotation"===t?s.rotation:e.s.ix===t||"Scale"===t?s.scale:e.sk&&e.sk.ix===t||"Skew"===t?s.skew:e.sa&&e.sa.ix===t||"Skew Axis"===t?s.skewAxis:void 0}return t.transform.op.setGroupProperty(i),Object.defineProperties(s,{opacity:{get:ExpressionPropertyInterface(t.transform.mProps.o)},position:{get:ExpressionPropertyInterface(t.transform.mProps.p)},anchorPoint:{get:ExpressionPropertyInterface(t.transform.mProps.a)},scale:{get:ExpressionPropertyInterface(t.transform.mProps.s)},rotation:{get:ExpressionPropertyInterface(t.transform.mProps.r)},skew:{get:ExpressionPropertyInterface(t.transform.mProps.sk)},skewAxis:{get:ExpressionPropertyInterface(t.transform.mProps.sa)},_name:{value:e.nm}}),s.ty="tr",s.mn=e.mn,s.propertyGroup=r,s}(t.it[t.it.length-1],e.it[e.it.length-1],i.propertyGroup);return i.content=l,i.transform=p,Object.defineProperty(i,"_name",{get:function(){return t.nm}}),i.numProperties=t.np,i.propertyIndex=t.ix,i.nm=t.nm,i.mn=t.mn,i}function o(t,e,r){function i(t){return"Color"===t||"color"===t?i.color:"Opacity"===t||"opacity"===t?i.opacity:void 0}return Object.defineProperties(i,{color:{get:ExpressionPropertyInterface(e.c)},opacity:{get:ExpressionPropertyInterface(e.o)},_name:{value:t.nm},mn:{value:t.mn}}),e.c.setGroupProperty(r),e.o.setGroupProperty(r),i}function h(t,e,r){function i(t){return 1===t?ob:r(t-1)}function s(t){return 1===t?h:i(t-1)}var a,n,o=t.d?t.d.length:0,h={};for(a=0;a<o;a+=1)n=a,Object.defineProperty(h,t.d[n].nm,{get:ExpressionPropertyInterface(e.d.dataProps[n].p)}),e.d.dataProps[a].p.setGroupProperty(s);function l(t){return"Color"===t||"color"===t?l.color:"Opacity"===t||"opacity"===t?l.opacity:"Stroke Width"===t||"stroke width"===t?l.strokeWidth:void 0}return Object.defineProperties(l,{color:{get:ExpressionPropertyInterface(e.c)},opacity:{get:ExpressionPropertyInterface(e.o)},strokeWidth:{get:ExpressionPropertyInterface(e.w)},dash:{get:function(){return h}},_name:{value:t.nm},mn:{value:t.mn}}),e.c.setGroupProperty(i),e.o.setGroupProperty(i),e.w.setGroupProperty(i),l}function l(e,t,r){function i(t){return 1==t?s:r(--t)}function s(t){return t===e.e.ix||"End"===t||"end"===t?s.end:t===e.s.ix?s.start:t===e.o.ix?s.offset:void 0}return s.propertyIndex=e.ix,t.s.setGroupProperty(i),t.e.setGroupProperty(i),t.o.setGroupProperty(i),s.propertyIndex=e.ix,s.propertyGroup=r,Object.defineProperties(s,{start:{get:ExpressionPropertyInterface(t.s)},end:{get:ExpressionPropertyInterface(t.e)},offset:{get:ExpressionPropertyInterface(t.o)},_name:{value:e.nm}}),s.mn=e.mn,s}function p(e,t,r){function i(t){return 1==t?a:r(--t)}a.propertyIndex=e.ix;var s="tm"===t.sh.ty?t.sh.prop:t.sh;function a(t){return e.p.ix===t?a.position:e.s.ix===t?a.size:void 0}return s.s.setGroupProperty(i),s.p.setGroupProperty(i),Object.defineProperties(a,{size:{get:ExpressionPropertyInterface(s.s)},position:{get:ExpressionPropertyInterface(s.p)},_name:{value:e.nm}}),a.mn=e.mn,a}function f(e,t,r){function i(t){return 1==t?a:r(--t)}var s="tm"===t.sh.ty?t.sh.prop:t.sh;function a(t){return e.p.ix===t?a.position:e.r.ix===t?a.rotation:e.pt.ix===t?a.points:e.or.ix===t||"ADBE Vector Star Outer Radius"===t?a.outerRadius:e.os.ix===t?a.outerRoundness:!e.ir||e.ir.ix!==t&&"ADBE Vector Star Inner Radius"!==t?e.is&&e.is.ix===t?a.innerRoundness:void 0:a.innerRadius}return a.propertyIndex=e.ix,s.or.setGroupProperty(i),s.os.setGroupProperty(i),s.pt.setGroupProperty(i),s.p.setGroupProperty(i),s.r.setGroupProperty(i),e.ir&&(s.ir.setGroupProperty(i),s.is.setGroupProperty(i)),Object.defineProperties(a,{position:{get:ExpressionPropertyInterface(s.p)},rotation:{get:ExpressionPropertyInterface(s.r)},points:{get:ExpressionPropertyInterface(s.pt)},outerRadius:{get:ExpressionPropertyInterface(s.or)},outerRoundness:{get:ExpressionPropertyInterface(s.os)},innerRadius:{get:ExpressionPropertyInterface(s.ir)},innerRoundness:{get:ExpressionPropertyInterface(s.is)},_name:{value:e.nm}}),a.mn=e.mn,a}function c(e,t,r){function i(t){return 1==t?a:r(--t)}var s="tm"===t.sh.ty?t.sh.prop:t.sh;function a(t){return e.p.ix===t?a.position:e.r.ix===t?a.roundness:e.s.ix===t||"Size"===t||"ADBE Vector Rect Size"===t?a.size:void 0}return a.propertyIndex=e.ix,s.p.setGroupProperty(i),s.s.setGroupProperty(i),s.r.setGroupProperty(i),Object.defineProperties(a,{position:{get:ExpressionPropertyInterface(s.p)},roundness:{get:ExpressionPropertyInterface(s.r)},size:{get:ExpressionPropertyInterface(s.s)},_name:{value:e.nm}}),a.mn=e.mn,a}function d(e,t,r){var i=t;function s(t){if(e.r.ix===t||"Round Corners 1"===t)return s.radius}return s.propertyIndex=e.ix,i.rd.setGroupProperty(function(t){return 1==t?s:r(--t)}),Object.defineProperties(s,{radius:{get:ExpressionPropertyInterface(i.rd)},_name:{value:e.nm}}),s.mn=e.mn,s}function u(e,t,r){function i(t){return 1==t?a:r(--t)}var s=t;function a(t){return e.c.ix===t||"Copies"===t?a.copies:e.o.ix===t||"Offset"===t?a.offset:void 0}return a.propertyIndex=e.ix,s.c.setGroupProperty(i),s.o.setGroupProperty(i),Object.defineProperties(a,{copies:{get:ExpressionPropertyInterface(s.c)},offset:{get:ExpressionPropertyInterface(s.o)},_name:{value:e.nm}}),a.mn=e.mn,a}function y(t,e,r){var i=e.sh;function s(t){if("Shape"===t||"shape"===t||"Path"===t||"path"===t||"ADBE Vector Shape"===t||2===t)return s.path}return i.setGroupProperty(function(t){return 1==t?s:r(--t)}),Object.defineProperties(s,{path:{get:function(){return i.k&&i.getValue(),i}},shape:{get:function(){return i.k&&i.getValue(),i}},_name:{value:t.nm},ix:{value:t.ix},propertyIndex:{value:t.ix},mn:{value:t.mn}}),s}return function(t,e,r){var i;function s(t){if("number"==typeof t)return i[t-1];for(var e=0,r=i.length;e<r;){if(i[e]._name===t)return i[e];e+=1}}return s.propertyGroup=r,i=m(t,e,s),s.numProperties=i.length,s}}(),TextExpressionInterface=function(e){var r;function t(){}return Object.defineProperty(t,"sourceText",{get:function(){e.textProperty.getValue();var t=e.textProperty.currentData.t;return void 0!==t&&(e.textProperty.currentData.t=void 0,(r=new String(t)).value=t||new String(t)),r}}),t},LayerExpressionInterface=function(){function s(t,e){var r=new Matrix;if(r.reset(),this._elem.finalTransform.mProp.applyToMatrix(r),this._elem.hierarchy&&this._elem.hierarchy.length){var i,s=this._elem.hierarchy.length;for(i=0;i<s;i+=1)this._elem.hierarchy[i].finalTransform.mProp.applyToMatrix(r);return r.applyToPointArray(t[0],t[1],t[2]||0)}return r.applyToPointArray(t[0],t[1],t[2]||0)}function a(t,e){var r=new Matrix;if(r.reset(),this._elem.finalTransform.mProp.applyToMatrix(r),this._elem.hierarchy&&this._elem.hierarchy.length){var i,s=this._elem.hierarchy.length;for(i=0;i<s;i+=1)this._elem.hierarchy[i].finalTransform.mProp.applyToMatrix(r);return r.inversePoint(t)}return r.inversePoint(t)}function n(t){var e=new Matrix;if(e.reset(),this._elem.finalTransform.mProp.applyToMatrix(e),this._elem.hierarchy&&this._elem.hierarchy.length){var r,i=this._elem.hierarchy.length;for(r=0;r<i;r+=1)this._elem.hierarchy[r].finalTransform.mProp.applyToMatrix(e);return e.inversePoint(t)}return e.inversePoint(t)}function o(){return[1,1,1,1]}return function(e){var r;function i(t){switch(t){case"ADBE Root Vectors Group":case"Contents":case 2:return i.shapeInterface;case 1:case 6:case"Transform":case"transform":case"ADBE Transform Group":return r;case 4:case"ADBE Effect Parade":case"effects":case"Effects":return i.effect}}i.toWorld=s,i.fromWorld=a,i.toComp=s,i.fromComp=n,i.sampleImage=o,i.sourceRectAtTime=e.sourceRectAtTime.bind(e);var t=getDescriptor(r=TransformExpressionInterface((i._elem=e).finalTransform.mProp),"anchorPoint");return Object.defineProperties(i,{hasParent:{get:function(){return e.hierarchy.length}},parent:{get:function(){return e.hierarchy[0].layerInterface}},rotation:getDescriptor(r,"rotation"),scale:getDescriptor(r,"scale"),position:getDescriptor(r,"position"),opacity:getDescriptor(r,"opacity"),anchorPoint:t,anchor_point:t,transform:{get:function(){return r}},active:{get:function(){return e.isInRange}}}),i.startTime=e.data.st,i.index=e.data.ind,i.source=e.data.refId,i.height=0===e.data.ty?e.data.h:100,i.width=0===e.data.ty?e.data.w:100,i.inPoint=e.data.ip/e.comp.globalData.frameRate,i.outPoint=e.data.op/e.comp.globalData.frameRate,i._name=e.data.nm,i.registerMaskInterface=function(t){i.mask=new MaskManagerInterface(t,e)},i.registerEffectsInterface=function(t){i.effect=t},i}}(),CompExpressionInterface=function(i){function t(t){for(var e=0,r=i.layers.length;e<r;){if(i.layers[e].nm===t||i.layers[e].ind===t)return i.elements[e].layerInterface;e+=1}return null}return Object.defineProperty(t,"_name",{value:i.data.nm}),(t.layer=t).pixelAspect=1,t.height=i.data.h||i.globalData.compSize.h,t.width=i.data.w||i.globalData.compSize.w,t.pixelAspect=1,t.frameDuration=1/i.globalData.frameRate,t.displayStartTime=0,t.numLayers=i.layers.length,t},TransformExpressionInterface=function(t){function e(t){switch(t){case"scale":case"Scale":case"ADBE Scale":case 6:return e.scale;case"rotation":case"Rotation":case"ADBE Rotation":case"ADBE Rotate Z":case 10:return e.rotation;case"ADBE Rotate X":return e.xRotation;case"ADBE Rotate Y":return e.yRotation;case"position":case"Position":case"ADBE Position":case 2:return e.position;case"ADBE Position_0":return e.xPosition;case"ADBE Position_1":return e.yPosition;case"ADBE Position_2":return e.zPosition;case"anchorPoint":case"AnchorPoint":case"Anchor Point":case"ADBE AnchorPoint":case 1:return e.anchorPoint;case"opacity":case"Opacity":case 11:return e.opacity}}if(Object.defineProperty(e,"rotation",{get:ExpressionPropertyInterface(t.r||t.rz)}),Object.defineProperty(e,"zRotation",{get:ExpressionPropertyInterface(t.rz||t.r)}),Object.defineProperty(e,"xRotation",{get:ExpressionPropertyInterface(t.rx)}),Object.defineProperty(e,"yRotation",{get:ExpressionPropertyInterface(t.ry)}),Object.defineProperty(e,"scale",{get:ExpressionPropertyInterface(t.s)}),t.p)var r=ExpressionPropertyInterface(t.p);return Object.defineProperty(e,"position",{get:function(){return t.p?r():[t.px.v,t.py.v,t.pz?t.pz.v:0]}}),Object.defineProperty(e,"xPosition",{get:ExpressionPropertyInterface(t.px)}),Object.defineProperty(e,"yPosition",{get:ExpressionPropertyInterface(t.py)}),Object.defineProperty(e,"zPosition",{get:ExpressionPropertyInterface(t.pz)}),Object.defineProperty(e,"anchorPoint",{get:ExpressionPropertyInterface(t.a)}),Object.defineProperty(e,"opacity",{get:ExpressionPropertyInterface(t.o)}),Object.defineProperty(e,"skew",{get:ExpressionPropertyInterface(t.sk)}),Object.defineProperty(e,"skewAxis",{get:ExpressionPropertyInterface(t.sa)}),Object.defineProperty(e,"orientation",{get:ExpressionPropertyInterface(t.or)}),e},ProjectInterface=function(){function e(t){this.compositions.push(t)}return function(){function t(t){for(var e=0,r=this.compositions.length;e<r;){if(this.compositions[e].data&&this.compositions[e].data.nm===t)return this.compositions[e].prepareFrame&&this.compositions[e].data.xt&&this.compositions[e].prepareFrame(this.currentFrame),this.compositions[e].compInterface;e+=1}}return t.compositions=[],t.currentFrame=0,t.registerComposition=e,t}}(),EffectsExpressionInterface=function(){function l(s,t,e,r){var i,a=[],n=s.ef.length;for(i=0;i<n;i+=1)5===s.ef[i].ty?a.push(l(s.ef[i],t.effectElements[i],t.effectElements[i].propertyGroup,r)):a.push(p(t.effectElements[i],s.ef[i].ty,r,o));function o(t){return 1===t?h:e(t-1)}var h=function(t){for(var e=s.ef,r=0,i=e.length;r<i;){if(t===e[r].nm||t===e[r].mn||t===e[r].ix)return 5===e[r].ty?a[r]:a[r]();r+=1}return a[0]()};return h.propertyGroup=o,"ADBE Color Control"===s.mn&&Object.defineProperty(h,"color",{get:function(){return a[0]()}}),Object.defineProperty(h,"numProperties",{get:function(){return s.np}}),h.active=h.enabled=0!==s.en,h}function p(t,e,r,i){var s=ExpressionPropertyInterface(t.p);return t.p.setGroupProperty&&t.p.setGroupProperty(i),function(){return 10===e?r.comp.compInterface(t.p.v):s()}}return{createEffectsInterface:function(s,t){if(s.effectsManager){var e,a=[],r=s.data.ef,i=s.effectsManager.effectElements.length;for(e=0;e<i;e+=1)a.push(l(r[e],s.effectsManager.effectElements[e],t,s));return function(t){for(var e=s.data.ef||[],r=0,i=e.length;r<i;){if(t===e[r].nm||t===e[r].mn||t===e[r].ix)return a[r];r+=1}}}}}}(),MaskManagerInterface=function(){function a(t,e){this._mask=t,this._data=e}Object.defineProperty(a.prototype,"maskPath",{get:function(){return this._mask.prop.k&&this._mask.prop.getValue(),this._mask.prop}}),Object.defineProperty(a.prototype,"maskOpacity",{get:function(){return this._mask.op.k&&this._mask.op.getValue(),100*this._mask.op.v}});return function(e,t){var r,i=createSizedArray(e.viewData.length),s=e.viewData.length;for(r=0;r<s;r+=1)i[r]=new a(e.viewData[r],e.masksProperties[r]);return function(t){for(r=0;r<s;){if(e.masksProperties[r].nm===t)return i[r];r+=1}}}}(),ExpressionPropertyInterface=function(){var s={pv:0,v:0,mult:1},n={pv:[0,0,0],v:[0,0,0],mult:1};function o(i,s,a){Object.defineProperty(i,"velocity",{get:function(){return s.getVelocityAtTime(s.comp.currentFrame)}}),i.numKeys=s.keyframes?s.keyframes.length:0,i.key=function(t){if(i.numKeys){var e="";e="s"in s.keyframes[t-1]?s.keyframes[t-1].s:"e"in s.keyframes[t-2]?s.keyframes[t-2].e:s.keyframes[t-2].s;var r="unidimensional"===a?new Number(e):Object.assign({},e);return r.time=s.keyframes[t-1].t/s.elem.comp.globalData.frameRate,r}return 0},i.valueAtTime=s.getValueAtTime,i.speedAtTime=s.getSpeedAtTime,i.velocityAtTime=s.getVelocityAtTime,i.propertyGroup=s.propertyGroup}function e(){return s}return function(t){return t?"unidimensional"===t.propType?function(t){t&&"pv"in t||(t=s);var e=1/t.mult,r=t.pv*e,i=new Number(r);return i.value=r,o(i,t,"unidimensional"),function(){return t.k&&t.getValue(),r=t.v*e,i.value!==r&&((i=new Number(r)).value=r,o(i,t,"unidimensional")),i}}(t):function(e){e&&"pv"in e||(e=n);var r=1/e.mult,i=e.pv.length,s=createTypedArray("float32",i),a=createTypedArray("float32",i);return s.value=a,o(s,e,"multidimensional"),function(){e.k&&e.getValue();for(var t=0;t<i;t+=1)s[t]=a[t]=e.v[t]*r;return s}}(t):e}}(),j5,k5;function SliderEffect(t,e,r){this.p=PropertyFactory.getProp(e,t.v,0,0,r)}function AngleEffect(t,e,r){this.p=PropertyFactory.getProp(e,t.v,0,0,r)}function ColorEffect(t,e,r){this.p=PropertyFactory.getProp(e,t.v,1,0,r)}function PointEffect(t,e,r){this.p=PropertyFactory.getProp(e,t.v,1,0,r)}function LayerIndexEffect(t,e,r){this.p=PropertyFactory.getProp(e,t.v,0,0,r)}function MaskIndexEffect(t,e,r){this.p=PropertyFactory.getProp(e,t.v,0,0,r)}function CheckboxEffect(t,e,r){this.p=PropertyFactory.getProp(e,t.v,0,0,r)}function NoValueEffect(){this.p={}}function EffectsManager(){}function EffectsManager(t,e){var r=t.ef||[];this.effectElements=[];var i,s,a=r.length;for(i=0;i<a;i++)s=new GroupEffect(r[i],e),this.effectElements.push(s)}function GroupEffect(t,e){this.init(t,e)}j5=function(){function r(t,e){return this.textIndex=t+1,this.textTotal=e,this.v=this.getValue()*this.mult,this.v}return function(t,e){this.pv=1,this.comp=t.comp,this.elem=t,this.mult=.01,this.propType="textSelector",this.textTotal=e.totalChars,this.selectorValue=100,this.lastValue=[1,1,1],this.k=!0,this.x=!0,this.getValue=ExpressionManager.initiateExpression.bind(this)(t,e,this),this.getMult=r,this.getVelocityAtTime=expressionHelpers.getVelocityAtTime,this.kf?this.getValueAtTime=expressionHelpers.getValueAtTime.bind(this):this.getValueAtTime=expressionHelpers.getStaticValueAtTime.bind(this),this.setGroupProperty=expressionHelpers.setGroupProperty}}(),k5=TextSelectorProp.getTextSelectorProp,TextSelectorProp.getTextSelectorProp=function(t,e,r){return 1===e.t?new j5(t,e,r):k5(t,e,r)},extendPrototype([DynamicPropertyContainer],GroupEffect),GroupEffect.prototype.getValue=GroupEffect.prototype.iterateDynamicProperties,GroupEffect.prototype.init=function(t,e){this.data=t,this.effectElements=[],this.initDynamicPropertyContainer(e);var r,i,s=this.data.ef.length,a=this.data.ef;for(r=0;r<s;r+=1){switch(i=null,a[r].ty){case 0:i=new SliderEffect(a[r],e,this);break;case 1:i=new AngleEffect(a[r],e,this);break;case 2:i=new ColorEffect(a[r],e,this);break;case 3:i=new PointEffect(a[r],e,this);break;case 4:case 7:i=new CheckboxEffect(a[r],e,this);break;case 10:i=new LayerIndexEffect(a[r],e,this);break;case 11:i=new MaskIndexEffect(a[r],e,this);break;case 5:i=new EffectsManager(a[r],e,this);break;default:i=new NoValueEffect(a[r],e,this)}i&&this.effectElements.push(i)}};var lottiejs={},_isFrozen=!1;function setLocationHref(t){locationHref=t}function searchAnimations(){!0===standalone?animationManager.searchAnimations(animationData,standalone,renderer):animationManager.searchAnimations()}function setSubframeRendering(t){subframeEnabled=t}function loadAnimation(t){return!0===standalone&&(t.animationData=JSON.parse(animationData)),animationManager.loadAnimation(t)}function setQuality(t){if("string"==typeof t)switch(t){case"high":defaultCurveSegments=200;break;case"medium":defaultCurveSegments=50;break;case"low":defaultCurveSegments=10}else!isNaN(t)&&1<t&&(defaultCurveSegments=t);roundValues(!(50<=defaultCurveSegments))}function inBrowser(){return"undefined"!=typeof navigator}function installPlugin(t,e){"expressions"===t&&(expressionsPlugin=e)}function getFactory(t){switch(t){case"propertyFactory":return PropertyFactory;case"shapePropertyFactory":return ShapePropertyFactory;case"matrix":return Matrix}}function checkReady(){"complete"===document.readyState&&(clearInterval(readyStateCheckInterval),searchAnimations())}function getQueryVariable(t){for(var e=queryString.split("&"),r=0;r<e.length;r++){var i=e[r].split("=");if(decodeURIComponent(i[0])==t)return decodeURIComponent(i[1])}}lottiejs.play=animationManager.play,lottiejs.pause=animationManager.pause,lottiejs.setLocationHref=setLocationHref,lottiejs.togglePause=animationManager.togglePause,lottiejs.setSpeed=animationManager.setSpeed,lottiejs.setDirection=animationManager.setDirection,lottiejs.stop=animationManager.stop,lottiejs.searchAnimations=searchAnimations,lottiejs.registerAnimation=animationManager.registerAnimation,lottiejs.loadAnimation=loadAnimation,lottiejs.setSubframeRendering=setSubframeRendering,lottiejs.resize=animationManager.resize,lottiejs.goToAndStop=animationManager.goToAndStop,lottiejs.destroy=animationManager.destroy,lottiejs.setQuality=setQuality,lottiejs.inBrowser=inBrowser,lottiejs.installPlugin=installPlugin,lottiejs.freeze=animationManager.freeze,lottiejs.unfreeze=animationManager.unfreeze,lottiejs.getRegisteredAnimations=animationManager.getRegisteredAnimations,lottiejs.__getFactory=getFactory,lottiejs.version="5.5.9";var standalone="__[STANDALONE]__",animationData="__[ANIMATIONDATA]__",renderer="";if(standalone){var scripts=document.getElementsByTagName("script"),index=scripts.length-1,myScript=scripts[index]||{src:""},queryString=myScript.src.replace(/^[^\?]+\??/,"");renderer=getQueryVariable("renderer")}var readyStateCheckInterval=setInterval(checkReady,100);return lottiejs},"function"==typeof define&&define.amd?define(function(){return b(a)}):"object"==typeof module&&module.exports?module.exports=b(a):(a.lottie=b(a),a.bodymovin=a.lottie));


/*[PATH @digikala/supernova-digikala-desktop/assets/local/js/shared/lottiePlusBadgeMotion.js]*/
var plusBadgeMotion = {"v":"5.5.9","fr":60,"ip":0,"op":330,"w":126,"h":108,"nm":"Plus Profile Icon Animation 3","ddd":0,"assets":[],"layers":[{"ddd":0,"ind":1,"ty":4,"nm":"Return","sr":1,"ks":{"o":{"a":1,"k":[{"i":{"x":[0.667],"y":[1]},"o":{"x":[0.74],"y":[-0.012]},"t":186,"s":[0]},{"i":{"x":[0.667],"y":[1]},"o":{"x":[0.333],"y":[0]},"t":204,"s":[100]},{"i":{"x":[0.245],"y":[1]},"o":{"x":[0.333],"y":[0]},"t":234,"s":[100]},{"t":252,"s":[0]}],"ix":11},"r":{"a":0,"k":0,"ix":10},"p":{"a":1,"k":[{"i":{"x":0.667,"y":1},"o":{"x":0.74,"y":0},"t":186,"s":[23,55.25,0],"to":[6.667,0,0],"ti":[-6.667,0,0]},{"i":{"x":0.667,"y":0.667},"o":{"x":0.333,"y":0.333},"t":204,"s":[63,55.25,0],"to":[0,0,0],"ti":[0,0,0]},{"i":{"x":0.245,"y":1},"o":{"x":0.333,"y":0},"t":234,"s":[63,55.25,0],"to":[6.333,0,0],"ti":[-6.333,0,0]},{"t":252,"s":[101,55.25,0]}],"ix":2},"a":{"a":0,"k":[0,0,0],"ix":1},"s":{"a":1,"k":[{"i":{"x":[0.667,0.667,0.667],"y":[1,1,1]},"o":{"x":[0.74,0.74,0.333],"y":[-0.029,-0.029,0]},"t":186,"s":[60,60,100]},{"i":{"x":[0.667,0.667,0.667],"y":[1,1,1]},"o":{"x":[0.333,0.333,0.333],"y":[0,0,0]},"t":204,"s":[100,100,100]},{"i":{"x":[0.245,0.245,0.667],"y":[1,1,1]},"o":{"x":[0.333,0.333,0.333],"y":[0,0,0]},"t":234,"s":[100,100,100]},{"t":252,"s":[60,60,100]}],"ix":6}},"ao":0,"shapes":[{"ty":"gr","it":[{"ind":0,"ty":"sh","ix":1,"ks":{"a":0,"k":{"i":[[0,0],[0,0],[-0.08,-1.31],[0,0],[0,0],[1.31,-0.07],[0,0],[0,0],[-0.05,0.42],[0,0],[0,0],[0.41,0.05],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0.05,-0.41],[0,0],[0,0],[-0.41,-0.04],[0,0],[0,0],[0,-0.46],[-1.38,0],[0,1.38],[1.21,0.18],[0,0],[0,0],[0,0],[-0.25,0.33],[0,0],[0,0],[0,0],[0,0],[0,-2.19],[2.3,0],[0.45,1.82],[0,0],[0,0],[0.08,1.32],[0,0],[0,0],[-1.31,0.08],[0,0],[0,0]],"o":[[0,0],[1.33,0],[0,0],[0,0],[0,1.33],[0,0],[0,0],[0.43,0],[0,0],[0,0],[0,-0.43],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[-0.43,0],[0,0],[0,0],[0,0.42],[0,0],[0,0],[0.46,0],[0,1.38],[1.38,0],[0,-1.25],[0,0],[0,0],[0,0],[-0.3,-0.3],[0,0],[0,0],[0,0],[0,0],[2.15,0.17],[0,2.3],[-1.95,0],[0,0],[0,0],[-1.33,0],[0,0],[0,0],[0,-1.33],[0,0],[0,0],[0,0]],"v":[[-5,-8.75],[5,-8.75],[7.5,-6.4],[7.5,-6.25],[7.5,2.92],[5.15,5.41],[5,5.42],[5,3.75],[5.83,3.01],[5.83,2.92],[5.83,-6.25],[5.1,-7.08],[5,-7.08],[3.33,-7.08],[3.33,-2.92],[-3.33,-2.92],[-3.33,-7.08],[-5,-7.08],[-5.83,-6.35],[-5.83,-6.25],[-5.83,2.92],[-5.1,3.74],[-5,3.75],[-3.33,3.75],[-2.5,4.58],[0,7.08],[2.5,4.58],[0.37,2.11],[1.42,3.16],[0.24,4.34],[-2.26,1.84],[-2.33,0.74],[-2.26,0.66],[0.24,-1.84],[1.42,-0.66],[0.33,0.43],[4.17,4.58],[0,8.75],[-4.04,5.59],[-4.08,5.42],[-5,5.42],[-7.5,3.06],[-7.5,2.92],[-7.5,-6.25],[-5.15,-8.75],[-5,-8.75],[5,-8.75]],"c":true},"ix":2},"nm":"Path 1","mn":"ADBE Vector Shape - Group","hd":false},{"ind":1,"ty":"sh","ix":2,"ks":{"a":0,"k":{"i":[[0,0],[0,0],[0,0],[0,0]],"o":[[0,0],[0,0],[0,0],[0,0]],"v":[[1.663,-7.083],[-1.667,-7.083],[-1.667,-4.583],[1.663,-4.583]],"c":true},"ix":2},"nm":"Path 2","mn":"ADBE Vector Shape - Group","hd":false},{"ty":"mm","mm":1,"nm":"Merge Paths 1","mn":"ADBE Vector Filter - Merge","hd":false},{"ty":"fl","c":{"a":0,"k":[1,1,1,1],"ix":4},"o":{"a":0,"k":100,"ix":5},"r":1,"bm":0,"nm":"Fill 1","mn":"ADBE Vector Graphic - Fill","hd":false},{"ty":"tr","p":{"a":0,"k":[0,0],"ix":2},"a":{"a":0,"k":[0,0],"ix":1},"s":{"a":0,"k":[300,300],"ix":3},"r":{"a":0,"k":0,"ix":6},"o":{"a":0,"k":100,"ix":7},"sk":{"a":0,"k":0,"ix":4},"sa":{"a":0,"k":0,"ix":5},"nm":"Transform"}],"nm":"Return","np":4,"cix":2,"bm":0,"ix":1,"mn":"ADBE Vector Group","hd":false}],"ip":186,"op":457,"st":157,"bm":0},{"ddd":0,"ind":2,"ty":4,"nm":"Jet","sr":1,"ks":{"o":{"a":1,"k":[{"i":{"x":[0.667],"y":[1]},"o":{"x":[0.74],"y":[-0.012]},"t":138,"s":[0]},{"i":{"x":[0.667],"y":[1]},"o":{"x":[0.333],"y":[0]},"t":156,"s":[100]},{"i":{"x":[0.245],"y":[1]},"o":{"x":[0.333],"y":[0]},"t":186,"s":[100]},{"t":204,"s":[0]}],"ix":11},"r":{"a":0,"k":0,"ix":10},"p":{"a":1,"k":[{"i":{"x":0.667,"y":1},"o":{"x":0.74,"y":0},"t":138,"s":[23,54,0],"to":[6.667,0,0],"ti":[-6.667,0,0]},{"i":{"x":0.667,"y":0.667},"o":{"x":0.333,"y":0.333},"t":156,"s":[63,54,0],"to":[0,0,0],"ti":[0,0,0]},{"i":{"x":0.245,"y":1},"o":{"x":0.333,"y":0},"t":186,"s":[63,54,0],"to":[6.333,0,0],"ti":[-6.333,0,0]},{"t":204,"s":[101,54,0]}],"ix":2},"a":{"a":0,"k":[0,0,0],"ix":1},"s":{"a":1,"k":[{"i":{"x":[0.667,0.667,0.667],"y":[1,1,1]},"o":{"x":[0.74,0.74,0.333],"y":[-0.029,-0.029,0]},"t":138,"s":[60,60,100]},{"i":{"x":[0.667,0.667,0.667],"y":[1,1,1]},"o":{"x":[0.333,0.333,0.333],"y":[0,0,0]},"t":156,"s":[100,100,100]},{"i":{"x":[0.245,0.245,0.667],"y":[1,1,1]},"o":{"x":[0.333,0.333,0.333],"y":[0,0,0]},"t":186,"s":[100,100,100]},{"t":204,"s":[60,60,100]}],"ix":6}},"ao":0,"shapes":[{"ty":"gr","it":[{"ty":"rc","d":1,"s":{"a":0,"k":[3.333,3.333],"ix":2},"p":{"a":0,"k":[0,-2.5],"ix":3},"r":{"a":0,"k":1.667,"ix":4},"nm":"Rectangle Path 1","mn":"ADBE Vector Shape - Rect","hd":false},{"ty":"gr","it":[{"ind":0,"ty":"sh","ix":1,"ks":{"a":0,"k":{"i":[[0.12,-0.03],[0,0],[0,-2.3],[0,0],[-0.46,0],[0,0],[0,0.46],[0,0],[2.33,0.51]],"o":[[0,0],[-2.23,0.6],[0,0],[0,0.46],[0,0],[0.46,0],[0,0],[0,-2.38],[-0.13,-0.03]],"v":[[-0.197,-7.063],[-0.387,-7.013],[-4.167,-2.103],[-4.167,6.247],[-3.337,7.087],[3.333,7.087],[4.163,6.247],[4.163,-2.103],[0.183,-7.063]],"c":true},"ix":2},"nm":"Path 1","mn":"ADBE Vector Shape - Group","hd":false},{"ind":1,"ty":"sh","ix":2,"ks":{"a":0,"k":{"i":[[0,0],[0,0],[0,-1.49],[0,0],[0,0],[0,0],[-1.41,0.45]],"o":[[0,0],[1.39,0.45],[0,0],[0,0],[0,0],[0,-1.49],[0,0]],"v":[[0,-5.392],[0.15,-5.342],[2.5,-2.102],[2.5,5.418],[-2.5,5.418],[-2.5,-2.102],[-0.13,-5.352]],"c":true},"ix":2},"nm":"Path 2","mn":"ADBE Vector Shape - Group","hd":false},{"ty":"mm","mm":1,"nm":"Merge Paths 1","mn":"ADBE Vector Filter - Merge","hd":false},{"ty":"tr","p":{"a":0,"k":[0,-2.083],"ix":2},"a":{"a":0,"k":[0,0],"ix":1},"s":{"a":0,"k":[100,100],"ix":3},"r":{"a":0,"k":0,"ix":6},"o":{"a":0,"k":100,"ix":7},"sk":{"a":0,"k":0,"ix":4},"sa":{"a":0,"k":0,"ix":5},"nm":"Transform"}],"nm":"Rectangle 5","np":3,"cix":2,"bm":0,"ix":2,"mn":"ADBE Vector Group","hd":false},{"ty":"gr","it":[{"ind":0,"ty":"sh","ix":1,"ks":{"a":0,"k":{"i":[[0,-0.66],[0,0],[-0.39,-0.08],[0,0],[0.2,0.6],[0,0],[0.15,0.1],[0,0]],"o":[[0,0],[0,0.4],[0,0],[0.62,0.12],[0,0],[-0.05,-0.18],[0,0],[-0.56,-0.37]],"v":[[-2.917,-3.338],[-2.917,2.502],[-2.247,3.322],[1.923,4.152],[2.873,3.072],[1.203,-1.928],[0.883,-2.358],[-1.617,-4.028]],"c":true},"ix":2},"nm":"Path 1","mn":"ADBE Vector Shape - Group","hd":false},{"ind":1,"ty":"sh","ix":2,"ks":{"a":0,"k":{"i":[[0,0],[0,0],[0,0],[0,0]],"o":[[0,0],[0,0],[0,0],[0,0]],"v":[[-1.251,-1.775],[-0.281,-1.135],[0.839,2.235],[-1.251,1.815]],"c":true},"ix":2},"nm":"Path 2","mn":"ADBE Vector Shape - Group","hd":false},{"ty":"mm","mm":1,"nm":"Merge Paths 1","mn":"ADBE Vector Filter - Merge","hd":false},{"ty":"tr","p":{"a":0,"k":[5.417,1.666],"ix":2},"a":{"a":0,"k":[0,0],"ix":1},"s":{"a":0,"k":[100,100],"ix":3},"r":{"a":0,"k":0,"ix":6},"o":{"a":0,"k":100,"ix":7},"sk":{"a":0,"k":0,"ix":4},"sa":{"a":0,"k":0,"ix":5},"nm":"Transform"}],"nm":"Rectangle","np":3,"cix":2,"bm":0,"ix":3,"mn":"ADBE Vector Group","hd":false},{"ty":"gr","it":[{"ind":0,"ty":"sh","ix":1,"ks":{"a":0,"k":{"i":[[0.55,-0.37],[0,0],[0.06,-0.18],[0,0],[-0.63,0.12],[0,0],[0,0.4],[0,0]],"o":[[0,0],[-0.16,0.1],[0,0],[-0.2,0.6],[0,0],[0.39,-0.08],[0,0],[0,-0.66]],"v":[[1.623,-4.028],[-0.877,-2.358],[-1.207,-1.928],[-2.877,3.072],[-1.917,4.152],[2.243,3.322],[2.913,2.502],[2.913,-3.338]],"c":true},"ix":2},"nm":"Path 1","mn":"ADBE Vector Shape - Group","hd":false},{"ind":1,"ty":"sh","ix":2,"ks":{"a":0,"k":{"i":[[0,0],[0,0],[0,0],[0,0]],"o":[[0,0],[0,0],[0,0],[0,0]],"v":[[1.251,-1.776],[1.251,1.814],[-0.839,2.234],[0.281,-1.136]],"c":true},"ix":2},"nm":"Path 2","mn":"ADBE Vector Shape - Group","hd":false},{"ty":"mm","mm":1,"nm":"Merge Paths 1","mn":"ADBE Vector Filter - Merge","hd":false},{"ty":"tr","p":{"a":0,"k":[-5.417,1.666],"ix":2},"a":{"a":0,"k":[0,0],"ix":1},"s":{"a":0,"k":[100,100],"ix":3},"r":{"a":0,"k":0,"ix":6},"o":{"a":0,"k":100,"ix":7},"sk":{"a":0,"k":0,"ix":4},"sa":{"a":0,"k":0,"ix":5},"nm":"Transform"}],"nm":"Rectangle Copy","np":3,"cix":2,"bm":0,"ix":4,"mn":"ADBE Vector Group","hd":false},{"ind":4,"ty":"sh","ix":5,"ks":{"a":0,"k":{"i":[[0,0],[0,0],[0,0],[0,0]],"o":[[0,0],[0,0],[0,0],[0,0]],"v":[[-1.663,5.833],[-1.663,8.333],[-3.333,8.333],[-3.333,5.833]],"c":true},"ix":2},"nm":"Path 1","mn":"ADBE Vector Shape - Group","hd":false},{"ind":5,"ty":"sh","ix":6,"ks":{"a":0,"k":{"i":[[0,0],[0,0],[0,0],[0,0]],"o":[[0,0],[0,0],[0,0],[0,0]],"v":[[3.337,5.833],[3.337,8.333],[1.667,8.333],[1.667,5.833]],"c":true},"ix":2},"nm":"Path 2","mn":"ADBE Vector Shape - Group","hd":false},{"ind":6,"ty":"sh","ix":7,"ks":{"a":0,"k":{"i":[[0,0],[0,0],[0,0],[0,0]],"o":[[0,0],[0,0],[0,0],[0,0]],"v":[[0.837,5.833],[0.837,9.163],[-0.833,9.163],[-0.833,5.833]],"c":true},"ix":2},"nm":"Path 3","mn":"ADBE Vector Shape - Group","hd":false},{"ty":"mm","mm":2,"nm":"Merge Paths 1","mn":"ADBE Vector Filter - Merge","hd":false},{"ty":"fl","c":{"a":0,"k":[1,1,1,1],"ix":4},"o":{"a":0,"k":100,"ix":5},"r":1,"bm":0,"nm":"Fill 1","mn":"ADBE Vector Graphic - Fill","hd":false},{"ty":"tr","p":{"a":0,"k":[0,0],"ix":2},"a":{"a":0,"k":[0,0],"ix":1},"s":{"a":0,"k":[300,300],"ix":3},"r":{"a":0,"k":0,"ix":6},"o":{"a":0,"k":100,"ix":7},"sk":{"a":0,"k":0,"ix":4},"sa":{"a":0,"k":0,"ix":5},"nm":"Transform"}],"nm":"Jet","np":9,"cix":2,"bm":0,"ix":1,"mn":"ADBE Vector Group","hd":false}],"ip":138,"op":409,"st":109,"bm":0},{"ddd":0,"ind":3,"ty":4,"nm":"Amazing","sr":1,"ks":{"o":{"a":1,"k":[{"i":{"x":[0.667],"y":[1]},"o":{"x":[0.74],"y":[-0.012]},"t":90,"s":[0]},{"i":{"x":[0.667],"y":[1]},"o":{"x":[0.333],"y":[0]},"t":108,"s":[100]},{"i":{"x":[0.245],"y":[1]},"o":{"x":[0.333],"y":[0]},"t":138,"s":[100]},{"t":156,"s":[0]}],"ix":11},"r":{"a":0,"k":0,"ix":10},"p":{"a":1,"k":[{"i":{"x":0.667,"y":1},"o":{"x":0.74,"y":0},"t":90,"s":[23,54,0],"to":[6.667,0,0],"ti":[-6.667,0,0]},{"i":{"x":0.667,"y":0.667},"o":{"x":0.333,"y":0.333},"t":108,"s":[63,54,0],"to":[0,0,0],"ti":[0,0,0]},{"i":{"x":0.245,"y":1},"o":{"x":0.333,"y":0},"t":138,"s":[63,54,0],"to":[6.333,0,0],"ti":[-6.333,0,0]},{"t":156,"s":[101,54,0]}],"ix":2},"a":{"a":0,"k":[0,0,0],"ix":1},"s":{"a":1,"k":[{"i":{"x":[0.667,0.667,0.667],"y":[1,1,1]},"o":{"x":[0.74,0.74,0.333],"y":[-0.029,-0.029,0]},"t":90,"s":[60,60,100]},{"i":{"x":[0.667,0.667,0.667],"y":[1,1,1]},"o":{"x":[0.333,0.333,0.333],"y":[0,0,0]},"t":108,"s":[100,100,100]},{"i":{"x":[0.245,0.245,0.667],"y":[1,1,1]},"o":{"x":[0.333,0.333,0.333],"y":[0,0,0]},"t":138,"s":[100,100,100]},{"t":156,"s":[60,60,100]}],"ix":6}},"ao":0,"shapes":[{"ty":"gr","it":[{"ind":0,"ty":"sh","ix":1,"ks":{"a":0,"k":{"i":[[-0.58,-0.19],[-0.62,-0.54],[0,0],[0,0],[0,0],[0,0],[0,0],[-0.35,-0.49],[-0.18,-0.7],[0,0],[0,0],[0,0],[0,0],[0,-0.6],[0.3,-0.76],[0,0],[0,0],[0,0],[0,0],[0.32,-0.45],[0.69,-0.44],[0,0],[0,0],[0,0],[0,0],[0,0],[0.58,-0.19],[0.85,0.06],[0,0],[0,0],[0,0],[0,0],[0,0],[0.58,0.19],[0.62,0.53],[0,0],[0,0],[0,0],[0,0],[0,0],[0.34,0.49],[0.2,0.83],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0.61],[-0.3,0.76],[0,0],[0,0],[0,0],[0,0],[0,0],[-0.28,0.41],[-0.68,0.44],[0,0],[0,0],[0,0],[0,0],[0,0],[-0.57,0.2],[-0.85,-0.06],[0,0],[0,0],[0,0],[0,0]],"o":[[0.57,0.2],[0,0],[0,0],[0,0],[0,0],[0,0],[0.69,0.45],[0.32,0.45],[0,0],[0,0],[0,0],[0,0],[0.3,0.76],[0,0.61],[0,0],[0,0],[0,0],[0,0],[-0.18,0.7],[-0.35,0.5],[0,0],[0,0],[0,0],[0,0],[0,0],[-0.62,0.53],[-0.57,0.19],[0,0],[0,0],[0,0],[0,0],[0,0],[-0.85,0.06],[-0.57,-0.19],[0,0],[0,0],[0,0],[0,0],[0,0],[-0.68,-0.44],[-0.35,-0.49],[0,0],[0,0],[0,0],[0,0],[0,0],[-0.3,-0.76],[0,-0.6],[0,0],[0,0],[0,0],[0,0],[0,0],[0.16,-0.59],[0.35,-0.49],[0,0],[0,0],[0,0],[0,0],[0,0],[0.62,-0.54],[0.58,-0.19],[0,0],[0,0],[0,0],[0,0],[0.85,-0.06]],"v":[[2.597,-8.143],[4.177,-7.163],[4.617,-6.763],[4.707,-6.693],[4.707,-6.693],[4.827,-6.603],[5.377,-6.253],[6.757,-5.013],[7.417,-3.473],[7.607,-2.693],[7.657,-2.533],[7.697,-2.423],[7.927,-1.823],[8.337,-0.003],[7.927,1.817],[7.727,2.337],[7.657,2.517],[7.607,2.687],[7.417,3.477],[6.757,5.007],[5.387,6.247],[4.827,6.607],[4.827,6.607],[4.707,6.697],[4.567,6.817],[4.177,7.167],[2.587,8.137],[0.737,8.307],[0.167,8.267],[-0.003,8.257],[-0.073,8.257],[-0.253,8.267],[-0.733,8.307],[-2.593,8.137],[-4.173,7.167],[-4.663,6.727],[-4.663,6.727],[-4.783,6.637],[-4.873,6.577],[-5.393,6.247],[-6.753,5.007],[-7.473,3.277],[-7.593,2.757],[-7.643,2.567],[-7.643,2.567],[-7.693,2.417],[-7.933,1.817],[-8.333,-0.003],[-7.933,-1.823],[-7.693,-2.413],[-7.623,-2.633],[-7.593,-2.753],[-7.473,-3.273],[-7.373,-3.653],[-6.763,-5.013],[-5.393,-6.243],[-4.933,-6.543],[-4.803,-6.623],[-4.663,-6.723],[-4.563,-6.813],[-4.173,-7.163],[-2.593,-8.143],[-0.733,-8.303],[-0.153,-8.263],[0.037,-8.253],[0.267,-8.273],[0.737,-8.303]],"c":true},"ix":2},"nm":"Path 1","mn":"ADBE Vector Shape - Group","hd":false},{"ind":1,"ty":"sh","ix":2,"ks":{"a":0,"k":{"i":[[0.49,-0.03],[0,0],[0.07,0],[0,0],[0,0],[0,0],[0,0],[0.27,-0.09],[0,0],[0.43,-0.38],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0.19,-0.27],[0.13,-0.54],[0,0],[0,0],[0,0],[0,0],[0,0],[0,-0.34],[0,0],[-0.17,-0.44],[0,0],[0,0],[0,0],[0,0],[-0.19,-0.27],[-0.53,-0.34],[0,0],[-0.08,-0.06],[0,0],[0,0],[0,0],[-0.33,-0.11],[-0.66,0.05],[0,0],[0,0],[0,0],[-0.09,0],[0,0],[0,0],[-0.34,0.11],[-0.48,0.42],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[-0.19,0.27],[-0.15,0.65],[0,0],[-0.02,0.08],[0,0],[0,0],[0,0],[0,0.33],[0.18,0.49],[0,0],[0,0],[0,0],[0,0],[0,0],[0.11,0.19],[0,0],[0.43,0.29],[0,0],[0.06,0.04],[0,0],[0,0],[0,0],[0.26,0.1],[0,0]],"o":[[0,0],[-0.09,0],[0,0],[0,0],[0,0],[0,0],[-0.43,-0.02],[0,0],[-0.3,0.11],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[-0.43,0.29],[-0.19,0.27],[0,0],[0,0],[0,0],[0,0],[0,0],[-0.19,0.49],[0,0],[0.01,0.29],[0,0],[0,0],[0,0],[0,0],[0.13,0.54],[0.21,0.29],[0,0],[0.1,0.06],[0,0],[0,0],[0,0],[0.47,0.42],[0.34,0.12],[0,0],[0,0],[0,0],[0.07,0],[0,0],[0,0],[0.66,0.05],[0.34,-0.12],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0.43,-0.28],[0.21,-0.3],[0,0],[0.03,-0.11],[0,0],[0,0],[0,0],[0.18,-0.49],[0,-0.34],[0,0],[0,0],[0,0],[0,0],[0,0],[-0.09,-0.33],[0,0],[-0.19,-0.27],[0,0],[-0.08,-0.05],[0,0],[0,0],[0,0],[-0.35,-0.29],[0,0],[-0.27,-0.08]],"v":[[0.983,-6.657],[0.243,-6.597],[0.003,-6.587],[-0.227,-6.597],[-0.357,-6.607],[-0.827,-6.637],[-1.147,-6.657],[-2.057,-6.557],[-2.147,-6.527],[-3.097,-5.887],[-3.557,-5.487],[-3.687,-5.377],[-3.807,-5.287],[-3.997,-5.157],[-3.997,-5.157],[-4.597,-4.777],[-5.397,-4.047],[-5.817,-3.017],[-5.977,-2.337],[-6.027,-2.177],[-6.067,-2.037],[-6.147,-1.807],[-6.427,-1.087],[-6.667,0.003],[-6.667,0.103],[-6.427,1.083],[-6.127,1.863],[-6.067,2.033],[-5.997,2.253],[-5.817,3.013],[-5.397,4.053],[-4.457,4.863],[-3.997,5.163],[-3.747,5.333],[-3.687,5.383],[-3.487,5.543],[-3.097,5.883],[-2.067,6.553],[-0.827,6.643],[-0.577,6.623],[-0.107,6.593],[0.003,6.593],[0.243,6.593],[0.383,6.603],[0.823,6.643],[2.063,6.563],[3.103,5.883],[3.423,5.603],[3.593,5.453],[3.743,5.333],[3.903,5.223],[3.993,5.163],[3.993,5.163],[4.593,4.773],[5.393,4.053],[5.853,2.863],[5.933,2.533],[6.003,2.253],[6.063,2.033],[6.143,1.803],[6.433,1.083],[6.663,0.003],[6.433,-1.087],[6.123,-1.857],[6.043,-2.107],[5.983,-2.337],[5.853,-2.857],[5.773,-3.187],[5.493,-3.907],[5.393,-4.047],[4.593,-4.777],[4.073,-5.107],[3.863,-5.247],[3.683,-5.377],[3.553,-5.487],[2.973,-5.997],[2.163,-6.527],[1.983,-6.587]],"c":true},"ix":2},"nm":"Path 2","mn":"ADBE Vector Shape - Group","hd":false},{"ind":2,"ty":"sh","ix":3,"ks":{"a":0,"k":{"i":[[-0.69,0],[0,-0.69],[0.69,0],[0,0.69]],"o":[[0.69,0],[0,0.69],[-0.69,0],[0,-0.69]],"v":[[2.083,1.667],[3.333,2.917],[2.083,4.167],[0.833,2.917]],"c":true},"ix":2},"nm":"Path 3","mn":"ADBE Vector Shape - Group","hd":false},{"ind":3,"ty":"sh","ix":4,"ks":{"a":0,"k":{"i":[[0,0],[0,0],[0,0],[0,0]],"o":[[0,0],[0,0],[0,0],[0,0]],"v":[[1.833,-3.833],[3.163,-2.833],[-1.837,3.837],[-3.167,2.837]],"c":true},"ix":2},"nm":"Path 4","mn":"ADBE Vector Shape - Group","hd":false},{"ind":4,"ty":"sh","ix":5,"ks":{"a":0,"k":{"i":[[-0.69,0],[0,-0.69],[0.69,0],[0,0.69]],"o":[[0.69,0],[0,0.69],[-0.69,0],[0,-0.69]],"v":[[-2.083,-4.167],[-0.833,-2.917],[-2.083,-1.667],[-3.333,-2.917]],"c":true},"ix":2},"nm":"Path 5","mn":"ADBE Vector Shape - Group","hd":false},{"ty":"mm","mm":1,"nm":"Merge Paths 1","mn":"ADBE Vector Filter - Merge","hd":false},{"ty":"fl","c":{"a":0,"k":[1,1,1,1],"ix":4},"o":{"a":0,"k":100,"ix":5},"r":1,"bm":0,"nm":"Fill 1","mn":"ADBE Vector Graphic - Fill","hd":false},{"ty":"tr","p":{"a":0,"k":[0,0],"ix":2},"a":{"a":0,"k":[0,0],"ix":1},"s":{"a":0,"k":[300,300],"ix":3},"r":{"a":0,"k":0,"ix":6},"o":{"a":0,"k":100,"ix":7},"sk":{"a":0,"k":0,"ix":4},"sa":{"a":0,"k":0,"ix":5},"nm":"Transform"}],"nm":"Amazing","np":7,"cix":2,"bm":0,"ix":1,"mn":"ADBE Vector Group","hd":false}],"ip":90,"op":361,"st":61,"bm":0},{"ddd":0,"ind":4,"ty":4,"nm":"Cashback","sr":1,"ks":{"o":{"a":1,"k":[{"i":{"x":[0.667],"y":[1]},"o":{"x":[0.74],"y":[-0.012]},"t":42,"s":[0]},{"i":{"x":[0.667],"y":[1]},"o":{"x":[0.333],"y":[0]},"t":60,"s":[100]},{"i":{"x":[0.245],"y":[1]},"o":{"x":[0.333],"y":[0]},"t":90,"s":[100]},{"t":108,"s":[0]}],"ix":11},"r":{"a":0,"k":0,"ix":10},"p":{"a":1,"k":[{"i":{"x":0.667,"y":1},"o":{"x":0.74,"y":0},"t":42,"s":[23,54,0],"to":[6.667,0,0],"ti":[-6.667,0,0]},{"i":{"x":0.667,"y":0.667},"o":{"x":0.333,"y":0.333},"t":60,"s":[63,54,0],"to":[0,0,0],"ti":[0,0,0]},{"i":{"x":0.245,"y":1},"o":{"x":0.333,"y":0},"t":90,"s":[63,54,0],"to":[6.333,0,0],"ti":[-6.333,0,0]},{"t":108,"s":[101,54,0]}],"ix":2},"a":{"a":0,"k":[0,0,0],"ix":1},"s":{"a":1,"k":[{"i":{"x":[0.667,0.667,0.667],"y":[1,1,1]},"o":{"x":[0.74,0.74,0.333],"y":[-0.029,-0.029,0]},"t":42,"s":[60,60,100]},{"i":{"x":[0.667,0.667,0.667],"y":[1,1,1]},"o":{"x":[0.333,0.333,0.333],"y":[0,0,0]},"t":60,"s":[100,100,100]},{"i":{"x":[0.245,0.245,0.667],"y":[1,1,1]},"o":{"x":[0.333,0.333,0.333],"y":[0,0,0]},"t":90,"s":[100,100,100]},{"t":108,"s":[60,60,100]}],"ix":6}},"ao":0,"shapes":[{"ty":"gr","it":[{"ty":"gr","it":[{"ind":0,"ty":"sh","ix":1,"ks":{"a":0,"k":{"i":[[0,0],[0,-0.46],[0,0],[0.46,0],[0,0],[0,0.46],[0,0],[-0.46,0]],"o":[[0.46,0],[0,0],[0,0.46],[0,0],[-0.46,0],[0,0],[0,-0.46],[0,0]],"v":[[4.997,-4.167],[5.837,-3.337],[5.837,3.333],[4.997,4.163],[-5.003,4.163],[-5.833,3.333],[-5.833,-3.337],[-5.003,-4.167]],"c":true},"ix":2},"nm":"Path 1","mn":"ADBE Vector Shape - Group","hd":false},{"ind":1,"ty":"sh","ix":2,"ks":{"a":0,"k":{"i":[[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0]],"o":[[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0]],"v":[[4.163,-2.5],[-4.167,-2.5],[-4.167,-0.83],[-2.497,-0.83],[-2.497,0.83],[-4.167,0.83],[-4.167,2.5],[4.163,2.5],[4.163,0.83],[2.503,0.83],[2.503,-0.83],[4.163,-0.83]],"c":true},"ix":2},"nm":"Path 2","mn":"ADBE Vector Shape - Group","hd":false},{"ind":2,"ty":"sh","ix":3,"ks":{"a":0,"k":{"i":[[-0.92,0],[0,-0.92],[0.92,0],[0,0.92]],"o":[[0.92,0],[0,0.92],[-0.92,0],[0,-0.92]],"v":[[0.003,-1.667],[1.663,0.003],[0.003,1.663],[-1.667,0.003]],"c":true},"ix":2},"nm":"Path 3","mn":"ADBE Vector Shape - Group","hd":false},{"ty":"mm","mm":1,"nm":"Merge Paths 1","mn":"ADBE Vector Filter - Merge","hd":false},{"ty":"tr","p":{"a":0,"k":[-4.167,-1.667],"ix":2},"a":{"a":0,"k":[0,0],"ix":1},"s":{"a":0,"k":[100,100],"ix":3},"r":{"a":0,"k":0,"ix":6},"o":{"a":0,"k":100,"ix":7},"sk":{"a":0,"k":0,"ix":4},"sa":{"a":0,"k":0,"ix":5},"nm":"Transform"}],"nm":"Shape","np":4,"cix":2,"bm":0,"ix":1,"mn":"ADBE Vector Group","hd":false},{"ind":1,"ty":"sh","ix":2,"ks":{"a":0,"k":{"i":[[0,0],[0,0],[0,0],[-0.33,0.33],[0,0],[0,0],[0,0],[0,0],[-0.09,-1.77],[0,0],[0,0],[1.84,0],[0,0],[0,0],[0,0],[0,0.92],[0,0],[0.92,0],[0,0]],"o":[[0,0],[0,0],[-0.33,-0.32],[0,0],[0,0],[0,0],[0,0],[1.79,0],[0,0],[0,0],[0,1.84],[0,0],[0,0],[0,0],[0.92,0],[0,0],[0,-0.92],[0,0],[0,0]],"v":[[7.257,1.081],[6.077,2.261],[2.747,-1.079],[2.747,-2.259],[6.077,-5.589],[7.257,-4.409],[5.347,-2.499],[6.667,-2.499],[9.997,0.671],[9.997,0.831],[9.997,2.501],[6.667,5.831],[-3.333,5.831],[-3.333,4.171],[6.667,4.171],[8.337,2.501],[8.337,0.831],[6.667,-0.829],[5.347,-0.829]],"c":true},"ix":2},"nm":"Path 1","mn":"ADBE Vector Shape - Group","hd":false},{"ty":"mm","mm":2,"nm":"Merge Paths 1","mn":"ADBE Vector Filter - Merge","hd":false},{"ty":"fl","c":{"a":0,"k":[1,1,1,1],"ix":4},"o":{"a":0,"k":100,"ix":5},"r":1,"bm":0,"nm":"Fill 1","mn":"ADBE Vector Graphic - Fill","hd":false},{"ty":"tr","p":{"a":0,"k":[0,0],"ix":2},"a":{"a":0,"k":[0,0],"ix":1},"s":{"a":0,"k":[300,300],"ix":3},"r":{"a":0,"k":0,"ix":6},"o":{"a":0,"k":100,"ix":7},"sk":{"a":0,"k":0,"ix":4},"sa":{"a":0,"k":0,"ix":5},"nm":"Transform"}],"nm":"Cashback","np":4,"cix":2,"bm":0,"ix":1,"mn":"ADBE Vector Group","hd":false}],"ip":42,"op":313,"st":13,"bm":0},{"ddd":0,"ind":5,"ty":4,"nm":"Plus","sr":1,"ks":{"o":{"a":1,"k":[{"i":{"x":[0.667],"y":[1]},"o":{"x":[0.333],"y":[0]},"t":18,"s":[100]},{"i":{"x":[0.353],"y":[0.984]},"o":{"x":[0.333],"y":[0]},"t":42,"s":[100]},{"i":{"x":[0.833],"y":[0.833]},"o":{"x":[0.167],"y":[0.167]},"t":60,"s":[0]},{"i":{"x":[0.667],"y":[1]},"o":{"x":[0.333],"y":[0]},"t":252,"s":[0]},{"i":{"x":[0.667],"y":[1]},"o":{"x":[0.333],"y":[0]},"t":269,"s":[100]},{"t":295,"s":[100]}],"ix":11},"r":{"a":0,"k":0,"ix":10},"p":{"a":1,"k":[{"i":{"x":0.212,"y":0.954},"o":{"x":0.341,"y":0.02},"t":0,"s":[96,78,0],"to":[0,0,0],"ti":[0,0,0]},{"i":{"x":0.667,"y":0.667},"o":{"x":0.333,"y":0.333},"t":18,"s":[62.995,53.995,0],"to":[0,0,0],"ti":[0,0,0]},{"i":{"x":0.667,"y":1},"o":{"x":0.333,"y":0},"t":42,"s":[62.995,53.995,0],"to":[0,0,0],"ti":[0,0,0]},{"i":{"x":0.833,"y":0.833},"o":{"x":0.167,"y":0.167},"t":60,"s":[99.995,53.995,0],"to":[0,0,0],"ti":[0,0,0]},{"i":{"x":0.667,"y":1},"o":{"x":0.333,"y":0},"t":252,"s":[23.995,53.995,0],"to":[0,0,0],"ti":[0,0,0]},{"i":{"x":0.667,"y":0.667},"o":{"x":0.333,"y":0.333},"t":269,"s":[62.995,53.995,0],"to":[0,0,0],"ti":[0,0,0]},{"i":{"x":0.667,"y":1},"o":{"x":0.73,"y":0},"t":295,"s":[62.995,53.995,0],"to":[0,0,0],"ti":[0,0,0]},{"t":314,"s":[96,78,0]}],"ix":2},"a":{"a":0,"k":[0,0,0],"ix":1},"s":{"a":1,"k":[{"i":{"x":[0.212,0.212,0.667],"y":[0.973,0.973,1]},"o":{"x":[0.341,0.341,0.333],"y":[0.003,0.003,0]},"t":0,"s":[100,100,100]},{"i":{"x":[0.667,0.667,0.667],"y":[1,1,1]},"o":{"x":[0.333,0.333,0.333],"y":[0,0,0]},"t":18,"s":[170,170,100]},{"i":{"x":[0.353,0.353,0.667],"y":[0.978,0.978,1]},"o":{"x":[0.333,0.333,0.333],"y":[0,0,0]},"t":42,"s":[170,170,100]},{"i":{"x":[0.833,0.833,0.833],"y":[0.833,0.833,0.833]},"o":{"x":[0.167,0.167,0.167],"y":[0.167,0.167,0.167]},"t":60,"s":[100,100,100]},{"i":{"x":[0.667,0.667,0.667],"y":[1,1,1]},"o":{"x":[0.333,0.333,0.333],"y":[0,0,0]},"t":252,"s":[100,100,100]},{"i":{"x":[0.667,0.667,0.667],"y":[1,1,1]},"o":{"x":[0.333,0.333,0.333],"y":[0,0,0]},"t":269,"s":[170,170,100]},{"i":{"x":[0.667,0.667,0.667],"y":[1,1,1]},"o":{"x":[0.73,0.73,0.333],"y":[0.054,0.054,0]},"t":295,"s":[170,170,100]},{"t":314,"s":[100,100,100]}],"ix":6}},"ao":0,"shapes":[{"ty":"gr","it":[{"ind":0,"ty":"sh","ix":1,"ks":{"a":0,"k":{"i":[[0,0],[0.22,-0.5],[0.4,0.39],[0.5,0.22],[-0.4,0.39],[-0.21,0.5],[-0.39,-0.4],[-0.5,-0.21],[0.4,-0.4]],"o":[[-0.39,0.39],[-0.21,-0.5],[-0.4,-0.4],[0.5,-0.21],[0.4,-0.4],[0.22,0.5],[0.4,0.39],[-0.5,0.22],[0,0]],"v":[[0.918,0.928],[-0.002,2.288],[-0.922,0.928],[-2.292,-0.002],[-0.922,-0.922],[-0.002,-2.292],[0.918,-0.922],[2.288,-0.002],[0.918,0.928]],"c":false},"ix":2},"nm":"Path 1","mn":"ADBE Vector Shape - Group","hd":false},{"ind":1,"ty":"sh","ix":2,"ks":{"a":0,"k":{"i":[[0,0],[0,0],[0,0],[0.02,-0.01],[0.6,0.6],[-0.06,0.85],[0,0.01],[0,0],[0,0],[0.21,0],[0,0],[0,-0.21],[0,0],[0,0],[0,-0.01],[0.6,-0.61],[0.85,0.06],[0.01,0],[0,0],[0,0],[0,-0.21],[0,0],[-0.21,0],[0,0],[-0.02,0.01],[-0.61,-0.6],[0.06,-0.85],[0,-0.01],[0,0],[0,0],[-0.21,0],[0,0],[0,0.21],[0,0],[0,0],[0,0.01],[-0.61,0.61],[-0.84,-0.06],[-0.02,0],[0,0],[0,0.2],[0,0],[0.21,0]],"o":[[0,0],[0,0],[-0.01,0],[-0.84,0.06],[-0.61,-0.61],[0,-0.01],[0,0],[0,0],[0,-0.21],[0,0],[-0.21,0],[0,0],[0,0],[0,0.01],[0.06,0.85],[-0.61,0.6],[-0.01,-0.01],[0,0],[0,0],[-0.21,0],[0,0],[0,0.2],[0,0],[0.02,0],[0.85,-0.06],[0.6,0.61],[0,0.01],[0,0],[0,0],[0,0.21],[0,0],[0.21,0],[0,0],[0,0],[0,-0.01],[-0.06,-0.85],[0.6,-0.6],[0.03,0.01],[0,0],[0.21,0],[0,0],[0,-0.21],[0,0]],"v":[[4.207,-0.963],[4.127,-0.963],[4.127,-0.953],[4.087,-0.953],[1.807,-1.803],[0.957,-4.093],[0.957,-4.123],[0.957,-4.123],[0.957,-4.203],[0.577,-4.583],[-0.583,-4.583],[-0.963,-4.203],[-0.963,-4.123],[-0.953,-4.123],[-0.953,-4.093],[-1.803,-1.803],[-4.093,-0.953],[-4.123,-0.953],[-4.123,-0.963],[-4.203,-0.963],[-4.583,-0.583],[-4.583,0.587],[-4.203,0.957],[-4.153,0.957],[-4.093,0.957],[-1.803,1.807],[-0.953,4.097],[-0.953,4.127],[-0.963,4.127],[-0.963,4.207],[-0.583,4.587],[0.577,4.587],[0.957,4.207],[0.957,4.127],[0.957,4.127],[0.957,4.097],[1.807,1.807],[4.087,0.957],[4.157,0.957],[4.207,0.957],[4.587,0.587],[4.587,-0.583],[4.207,-0.963]],"c":false},"ix":2},"nm":"Path 2","mn":"ADBE Vector Shape - Group","hd":false},{"ty":"mm","mm":1,"nm":"Merge Paths 1","mn":"ADBE Vector Filter - Merge","hd":false},{"ty":"fl","c":{"a":0,"k":[1,1,1,1],"ix":4},"o":{"a":0,"k":100,"ix":5},"r":1,"bm":0,"nm":"Fill 1","mn":"ADBE Vector Graphic - Fill","hd":false},{"ty":"tr","p":{"a":0,"k":[0,0],"ix":2},"a":{"a":0,"k":[0,0],"ix":1},"s":{"a":0,"k":[300,300],"ix":3},"r":{"a":0,"k":0,"ix":6},"o":{"a":0,"k":100,"ix":7},"sk":{"a":0,"k":0,"ix":4},"sa":{"a":0,"k":0,"ix":5},"nm":"Transform"}],"nm":"Fill 4","np":4,"cix":2,"bm":0,"ix":1,"mn":"ADBE Vector Group","hd":false}],"ip":0,"op":360,"st":0,"bm":0},{"ddd":0,"ind":6,"ty":4,"nm":"BG","sr":1,"ks":{"o":{"a":0,"k":100,"ix":11},"r":{"a":0,"k":0,"ix":10},"p":{"a":1,"k":[{"i":{"x":0.237,"y":0.988},"o":{"x":0.333,"y":0},"t":0,"s":[96,78,0],"to":[-5.5,-4,0],"ti":[5.5,4,0]},{"i":{"x":0.833,"y":0.833},"o":{"x":0.167,"y":0.167},"t":18,"s":[63,54,0],"to":[0,0,0],"ti":[0,0,0]},{"i":{"x":0.667,"y":1},"o":{"x":0.727,"y":0},"t":295,"s":[63,54,0],"to":[5.5,4,0],"ti":[-5.5,-4,0]},{"t":314,"s":[96,78,0]}],"ix":2},"a":{"a":0,"k":[0,0,0],"ix":1},"s":{"a":1,"k":[{"i":{"x":[0.237,0.237,0.667],"y":[0.989,0.989,1]},"o":{"x":[0.333,0.333,0.333],"y":[0,0,0]},"t":0,"s":[100,100,100]},{"i":{"x":[0.833,0.833,0.833],"y":[0.833,0.833,0.833]},"o":{"x":[0.167,0.167,0.167],"y":[0.167,0.167,0.167]},"t":18,"s":[145,145,100]},{"i":{"x":[0.667,0.667,0.667],"y":[1,1,1]},"o":{"x":[0.727,0.727,0.333],"y":[0,0,0]},"t":295,"s":[145,145,100]},{"t":314,"s":[100,100,100]}],"ix":6}},"ao":0,"shapes":[{"ty":"gr","it":[{"ind":0,"ty":"sh","ix":1,"ks":{"a":0,"k":{"i":[[-2.21,0],[0,0],[0,-2.21],[0,0],[2.21,0],[0,0],[0,2.21],[0,0]],"o":[[0,0],[2.21,0],[0,0],[0,2.21],[0,0],[-2.21,0],[0,0],[0,-2.21]],"v":[[-4,-8],[4,-8],[8,-4],[8,4],[4,8],[-4,8],[-8,4],[-8,-4]],"c":true},"ix":2},"nm":"Path 1","mn":"ADBE Vector Shape - Group","hd":false},{"ty":"gf","o":{"a":0,"k":100,"ix":10},"r":1,"bm":0,"g":{"p":5,"k":{"a":0,"k":[0,0.824,0.392,0.745,0.245,0.731,0.288,0.637,0.489,0.639,0.184,0.529,0.745,0.61,0.149,0.516,1,0.58,0.114,0.502],"ix":9}},"s":{"a":0,"k":[-8,8],"ix":5},"e":{"a":0,"k":[8,-8],"ix":6},"t":1,"nm":"Gradient Fill 1","mn":"ADBE Vector Graphic - G-Fill","hd":false},{"ty":"tr","p":{"a":0,"k":[0,0],"ix":2},"a":{"a":0,"k":[0,0],"ix":1},"s":{"a":0,"k":[300,300],"ix":3},"r":{"a":0,"k":0,"ix":6},"o":{"a":0,"k":100,"ix":7},"sk":{"a":0,"k":0,"ix":4},"sa":{"a":0,"k":0,"ix":5},"nm":"Transform"}],"nm":"BG","np":2,"cix":2,"bm":0,"ix":1,"mn":"ADBE Vector Group","hd":false}],"ip":0,"op":330,"st":0,"bm":0},{"ddd":0,"ind":7,"ty":4,"nm":"Border","sr":1,"ks":{"o":{"a":1,"k":[{"i":{"x":[0.667],"y":[1]},"o":{"x":[0.167],"y":[0.167]},"t":13,"s":[100]},{"i":{"x":[0.833],"y":[0.833]},"o":{"x":[0.167],"y":[0.167]},"t":18,"s":[0]},{"i":{"x":[0.833],"y":[0.833]},"o":{"x":[0.333],"y":[0]},"t":295,"s":[0]},{"t":301,"s":[100]}],"ix":11},"r":{"a":0,"k":0,"ix":10},"p":{"a":1,"k":[{"i":{"x":0.237,"y":0.988},"o":{"x":0.333,"y":0},"t":0,"s":[96,78,0],"to":[-5.5,-4,0],"ti":[5.5,4,0]},{"i":{"x":0.833,"y":0.833},"o":{"x":0.167,"y":0.167},"t":18,"s":[63,54,0],"to":[0,0,0],"ti":[0,0,0]},{"i":{"x":0.667,"y":1},"o":{"x":0.727,"y":0},"t":295,"s":[63,54,0],"to":[5.5,4,0],"ti":[-5.5,-4,0]},{"t":314,"s":[96,78,0]}],"ix":2},"a":{"a":0,"k":[0,0,0],"ix":1},"s":{"a":1,"k":[{"i":{"x":[0.237,0.237,0.667],"y":[0.989,0.989,1]},"o":{"x":[0.333,0.333,0.333],"y":[0,0,0]},"t":0,"s":[100,100,100]},{"i":{"x":[0.833,0.833,0.833],"y":[0.833,0.833,0.833]},"o":{"x":[0.167,0.167,0.167],"y":[0.167,0.167,0.167]},"t":18,"s":[145,145,100]},{"i":{"x":[0.667,0.667,0.667],"y":[1,1,1]},"o":{"x":[0.727,0.727,0.333],"y":[0,0,0]},"t":295,"s":[145,145,100]},{"t":314,"s":[100,100,100]}],"ix":6}},"ao":0,"shapes":[{"ty":"gr","it":[{"ind":0,"ty":"sh","ix":1,"ks":{"a":0,"k":{"i":[[-3.31,0],[0,0],[0,-3.31],[0,0],[3.31,0],[0,0],[0,3.31],[0,0]],"o":[[0,0],[3.31,0],[0,0],[0,3.31],[0,0],[-3.31,0],[0,0],[0,-3.31]],"v":[[-4,-10],[4,-10],[10,-4],[10,4],[4,10],[-4,10],[-10,4],[-10,-4]],"c":true},"ix":2},"nm":"Path 1","mn":"ADBE Vector Shape - Group","hd":false},{"ty":"fl","c":{"a":0,"k":[1,1,1,1],"ix":4},"o":{"a":0,"k":100,"ix":5},"r":1,"bm":0,"nm":"Fill 1","mn":"ADBE Vector Graphic - Fill","hd":false},{"ty":"tr","p":{"a":0,"k":[0,0],"ix":2},"a":{"a":0,"k":[0,0],"ix":1},"s":{"a":0,"k":[300,300],"ix":3},"r":{"a":0,"k":0,"ix":6},"o":{"a":0,"k":100,"ix":7},"sk":{"a":0,"k":0,"ix":4},"sa":{"a":0,"k":0,"ix":5},"nm":"Transform"}],"nm":"Border","np":2,"cix":2,"bm":0,"ix":1,"mn":"ADBE Vector Group","hd":false}],"ip":0,"op":330,"st":0,"bm":0}],"markers":[]}


/*[PATH @digikala/supernova-digikala-desktop/assets/local/js/shared/main.js]*/
/* global __ */

// init sentry
if(typeof module_js_crashlytics != "undefined" && !!module_js_crashlytics) {
    try {
        //
    } catch (e) {
        console.log('failed to load sentry', e);
    }
}

var Main = {
    trends: [],
    gaListName: null,
    userSearchCookieKey : 'user_search_keywords',
    init: function () {
        var functions = [
            this.initCustomRequest,
            this.settingUserIdGoogleAnalytics,
            this.initStatic,
            this.initProductCount,
            this.initLogoutGA,
            this.initHomeTopBox,
            this.initSelects,
            this.initCounter,
            this.initBox,
            this.initSwiper,
            this.extendValidator,
            this.initMainSearchBar,
            this.initLoginFormModal,
            this.initNewsletter,
            this.initFooter,
            this.initCart,
            this.initRemoveFromCart,
            this.initDropdownMenus,
            this.initResetModalForm,
            this.initGeneralAlertModal,
            this.initGeneralInformationModal,
            this.initErrorMessages,
            this.initGoogleAnalyticsEvents,
            this.initBackButtons,
            this.overrideServerErrors,
            this.initBrowserBackHandler,
            this.initCartBrowserBackForwardHandler,
            this.initBrandsSwiper,
            this.initSNTracker,
            this.initHideTooltip,
            this.initAdroRetargeting,
            this.initUserHistoryActions,
            this.initFloatingButton,
            this.initFloatingBox,
            this.initFMCGVoucherBox,
            this.initUserWallet,
            this.initLuckyDrawCounter,
            this.initLightBox,
            this.initGeneralToast,
            this.initShowToastDom,
            this.initNativeLazyLoading,
            this.initPlusBadgeMotion,
            this.initUniversalMiniCart,
            this.setUtmSource,
            this.initShowMore,
            this.initUiPriority,
            this.initUiAjaxAddToCart,
            this.changeFreeShippingText,
        ];

        if(isModuleActive('category_faq')) {
            functions.push(this.scrollToAnchorHref);
        }

        if (isModuleActive('console_greeting')) {
            functions.push(this.initConsoleGreeting);
        }

        if (isModuleActive('new_desktop_header')) {
            functions = functions.concat([
                this.initStickyHeader,
                this.initCategoryBar,
                this.initMiniCart
            ]);
        }

        if (isModuleActive('sponsored_mega_menu')) {
            functions.push(this.setPromotionMegaMenuBannerViewImpressionEvent);
        }

        if (isModuleActive('general_location')) {
            functions.push(this.initGeneralLocation);
        }

        if(isModuleActive('data_layer')) {
            setTimeout(this.getGaListName.bind(this, null, true), 0);

            functions.push(this.initGAPromotionsImpressions);
            functions.push(this.fixListNameInGaImpressions);
            functions.push(this.setPromoViewBannerDataLayer);
        }

        if(isModuleActive('carousel_impression_tracker')) {
            functions.push(this.initCarouselImpressionTracker);
        }

        if(isModuleActive('dk_new_customer_free_shipping_badge')) {
            functions.push(this.initGAFreeShippingBadge);
        }

        if(isModuleActive('dk_ask_to_login_tooltip')) {
            functions.push(this.initAskToLoginTooltip);
        }

        if(isModuleActive('dk_remove_recommendation_carousel')) {
            functions.push(this.initRemoveRecommendationCarousel);
        }
        if(isModuleActive('dk_insider_functions')){
            functions.push(this.initInsiderFunction);
        }

        try {
            this.user = new window.UserClass();
        } catch (e) {
            this.user = {};
        }

        this.fastShoppingConfirmCookieName = "fast-shopping-confirm";
        functions.push(this.initQuickView);
        // functions.push(this.intiShowFMCGModal);
        functions.push(this.initFastShoppingConfirmModal);
        functions.push(this.initAddToCart);

        var self = this;

        $(functions).map(function (index, item) {
            item = item.bind(self);
            try {
                item();
            } catch (e) {
                //
                // eslint-disable-next-line no-console
                console.warn(e);
            }
        });
    },

    initInsiderFunction: function (){
        $('.js-user-register-confirmed').on('click' , function () {
            window.Insider && window.Insider.track({time: `${new Date().getHours()}:${new Date().getMinutes()}:${new Date().getSeconds()}`});
        })
    },

    initAskToLoginTooltip: function(){
        setTimeout(function () {
            $('.js-ask-to-login-tooltip').fadeOut('fast');
        }, 10000);
    },

    initLogoutGA : function () {
        $('.js-logout-button').on('click', function () {
            try {
                ga('set', 'nonInteraction', true);
                ga('send', 'event', {
                    eventCategory: 'Ecommerce',
                    eventAction: 'logout',
                    eventLabel: window.location.pathname
                });
            } catch (e) {
                console.log('Error : Logout GA Function');
            }
        })
    },

    initConsoleGreeting: function () {
        console.log("%c                        *((((((((((((((((((((((((((((((((((((((((((((((((((((((((((####(#####(/*,.                                                  \n" +
            "                        ,(((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((##(############(*.                                            \n" +
            "                        /(((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((####((############(,                                        \n" +
            "                        /(((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((##################*                                     \n" +
            "                        /((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((#################(,                                  \n" +
            "                        /(((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((###################*                                \n" +
            "                        /((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((###(##############,                              \n" +
            "                        /(((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((##################(.                            \n" +
            "                        /(((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((###############(,                           \n" +
            "                        /((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((#(##############,                          \n" +
            "                        /((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((#(###########,                         \n" +
            "                        /((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((########(##(.                        \n" +
            "                        /((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((##########*                        \n" +
            "                        /(((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((##(####/                        \n" +
            "                        /((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((###((.                       \n" +
            "                        /((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((##(.                       \n" +
            "                        /(((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((.                       \n" +
            "                        /(((((((((((((((((((((((((,    ./(((((((((((((((((((((((((((((((((((((*    ./(((((((((((((((((((((((((.                       \n" +
            "                        /(((((((((((((((((((((/.          *((((((((((((((((((((((((((((((((/.          *((((((((((((((((((((((.                       \n" +
            "                        *((((((((((((((((((((/               ,/((((((((((((((((((((((((/*.              *(((((((((((((((((((((.                       \n" +
            "                        *((/((((((((((((((((((/.                  .,/((((((((((((/*..                  /((((((((((((((((((((((.                       \n" +
            "                        *((((((((((((((((((((((((,                                                  ./((((((((((((((((((((((((.                       \n" +
            "                        *((((((((((((((((((((((((((/,               we are hiring                ,/(((((((((((((((((((((((((((.                       \n" +
            "                        */(((((((((((((((((((((((((((((/,                                    .*(((((((((((((((((((((((((((((((.                       \n" +
            "                        */(/((((((((((((((((((((((((((((((((/,.                         .*((((((((((((((((((((((((((((((((((((.                       \n" +
            "                        */(/(((((((((((((((((((((((((((((((((((((((//**,,,,,,,,***/(((((((((((((((((((((((((((((((((((((((((((.                       \n" +
            "                        *(/////(/((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((/.                       \n" +
            "                        *(///////((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((/                        \n" +
            "                        *//////////((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((,                        \n" +
            "                        */////////////((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((/                         \n" +
            "                        *////////////////(((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((.                         \n" +
            "                        *//////////////////((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((.                          \n" +
            "                        *////////////////////((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((/.                           \n" +
            "                        *//////////////////////(/(((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((*                             \n" +
            "                        *//////////////////////////(((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((/.                              \n" +
            "                        *///////////////////////////((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((((/.                                \n" +
            "                        *///////////////////////////////((((((((((((((((((((((((((((((((((((((((((((((((((((((((((*                                   \n" +
            "                        *////////////////////////////////((((((((((((((((((((((((((((((((((((((((((((((((((((((*.                                     \n" +
            "                        *////////////////////////////////////(((((((((((/((((((((((((((((((((((((((((((((((/,                                         \n" +
            "                        .//(///////////////////////////////////////((((((((((((((((((((((((((((((((((((*                                              \n" +
            "                          .**////////////////////////////////////////////////////////////////***,",
            "color:#ef394e;font-size:9px;font-weight:bold",
            "\nWe're Hiring => https://careers.digikala.com/");
    },

    openUniversalMiniCart: function () {
        $('.js-minicart-modal').removeClass('u-hidden').remodal().open();
    },

    initUniversalMiniCart: function () {
        $(document).on('click', '.js-minicart-add', function () {
            var data = getQuantityData($(this));
            data.count += 1;
            changeItemQuantity(data);
        });

        $(document).on('click', '.js-minicart-remove', function () {
            var data = getQuantityData($(this));
            data.count -= 1;
            changeItemQuantity(data);
        });

        function getQuantityData (thiz) {
            var $countDiv = thiz.closest('.c-quantity-selector').find('.js-minicart-count');

            return {
                variantId: $countDiv.data('id'),
                count: Number(Services.convertToEnDigit($countDiv.text())),
            };
        }

        function changeItemQuantity (itemData) {
            var self = this;
            Services.ajaxGETRequestJSON(
                '/cart/change/' + itemData.variantId + '/' + itemData.count + '/',
                {},
                function (response) {
                    window.location.reload();
                }, function (response) {
                    if (response.errors !== undefined) {
                        DKAlert(response.errors);
                    }
                },
                false,
                true
            );
        }
    },

    initCustomRequest: function () {
        var _ajax = $.ajax;
        if (_ajax) {
            $.ajax = function () {
                if (arguments && arguments[0] && arguments[0].url && /mal{1,2}tina/gi.test(arguments[0].url)) {
                    return;
                }
                return _ajax.apply($, arguments);
            };
        }
    },

    initCarouselImpressionTracker: function () {
        var sntCarousel = {};

        $('.js-sntracker-carousel').map(function(index, element) {
            var $element = $(element),
                id = $element.attr('id');

            if(id) {
                sntCarousel[id] = $element;
            }
        });

        $(document).on('scroll', Services.throttle(function(){
            $.each(sntCarousel, function(id) {
                var $element = $('#' + id),
                    title = $element.find('.o-headline span').text();

                if(Services.isScrolledIntoView($element)) {

                    snt("dkCarouselImpression", {
                        carousel_id: id,
                        carousel_title: title,
                    });
                    delete sntCarousel[id];
                }
            });
        }, 500));
    },

    initLightBox: function () {
        $('.js-light-box-close').on('click', function (e) {
            e.preventDefault();
            e.stopPropagation();
            window.DKCookie && window.DKCookie.set('lightbox_dismissed', "1", 7 * 24 * 3600);
            $(this).closest('.js-light-box').fadeOut();
        });
    },

    initShowToastDom: function () {
        $(document).on('click', '.js-show-toast', function () {
            window.DKToast($(this).data('toast'));
        })
    },

    initGeneralToast: function () {
        var toast;
        var template = $('.js-toast')
        var container = $('.js-toast-container');
        var self = this;

        window.DKToast = function (message, button) {
            clearTimeout(self.timer);
            self.timer = null;
            var newToast = template.clone();
            if(toast)
                toast.fadeOut(300);
            newToast.appendTo(container);
            toast = newToast;

            message = message || 'مشکلی پیش آمده است!';

            var textContainer = toast.find('.js-toast-text');
            textContainer.text(message);

            toast.show();

            self.timer = setTimeout(function () {
                toast.fadeOut(300, function () {
                    toast.remove();
                });
            }, 5000);

            var closeBtn = toast.find('.js-toast-btn');
            if(button && button.type) {
                switch (button.type) {
                    case 'url':
                        closeBtn.after('<a target="_blank" href="' + button.url +'" class="' + closeBtn.attr('class') +'">' + button.text + '</a>');
                        closeBtn.remove();
                        break;
                    case 'js':
                        closeBtn.addClass(button.class);
                        closeBtn.text(button.text);
                        break;
                }
            } else {
                closeBtn.on('click', function () {
                    clearTimeout(self.timer);
                    toast.fadeOut(300, function () {
                        toast.remove();
                    });
                });
            }
        };
    },

    initGeneralLocation: function () {
        var addressModal = $('.js-general-location-addresses');
        var generalModal = $('.js-general-location');
        var ModalTitle = $('.js-general-location-title');
        var citiesContainer = $('.js-cities-container');
        var statesContainer = $('.js-states-container');
        var addressesContainer = $('.js-addresses-container');
        var backButton = $('.js-back-to-states');
        var locationBar = $('.js-general-location-bar');
        var addressItem = $('.js-sample-address');
        var states;
        var addresses;
        citiesContainer.hide();

        locationBar.on('click', function () {
            if (!(states || addresses)) {
                Services.showLoader();
                Services.ajaxGETRequestJSON(
                    '/ajax/general-location/',
                    null,
                    function (data) {
                        Services.hideLoader();
                        if(data.states) {
                            states = data.states;
                            updateStates();
                            generalModal.remodal().open();
                        } else if(data.addresses) {
                            addresses = data.addresses;
                            updateAddresses();
                            addressModal.remodal().open();
                        }
                    },
                    function (data) {
                        Services.hideLoader();
                        console.log(data.errors);
                    }
                );
            } else {
                if(states) {
                    statesContainer.show();
                    citiesContainer.hide();
                    generalModal.remodal().open();
                } else {
                    addressModal.remodal().open();
                }
            }
        });

        function updateStates() {
            $.each(states, function (index, state) {
                statesContainer.append('<div class="c-general-location__row c-general-location__row--arrow js-general-location-state" data-state-id="' + state.id + '">\n' +
                    state.title +
                    '            </div>');
            });
        }


        function updateAddresses () {
            addresses = addresses.reverse();
            $.each(addresses, function (index, address) {
                var sampleAddress = addressItem.clone();
                sampleAddress.removeClass('u-hidden js-sample-address').addClass('js-general-location-address').find('.c-filter__label').text(address.address);
                sampleAddress.data('city-id', address.city.id).data('address-id', address.id);
                if(address.is_default) {
                    sampleAddress.find('input[type="radio"]').prop('checked', true);
                }
                addressesContainer.prepend(sampleAddress);
            });

            $('.js-general-location-add-address').attr('href', '/addresses/add/?generalLocationBackUrl=' + document.location.href);
        }

        $(document).on('click', '.js-general-location-state', function () {
            ModalTitle.text('انتخاب شهر');
            var selectedCities;
            var selectedState = $(this).data('state-id');

            $.each(states, function (index, state) {
                if(state.id === selectedState) {
                    selectedCities = state.cities;
                }
            });

            $.each(selectedCities, function (index, city) {
                citiesContainer.append('<div class="c-general-location__row js-general-location-city" data-city-id="' + city.id + '">' + city.title + '</div>')
            });

            statesContainer.hide();
            citiesContainer.show();
            generalModal.remodal().open();
        });

        backButton.on('click', function () {
            citiesContainer.hide();
            statesContainer.show();
            $(this).siblings('.js-general-location-city').remove();
        });

        $(document).on('click', '.js-general-location-city', function () {
            var cityId = $(this).data('city-id');

            Services.showLoader();
            Services.ajaxPOSTRequestJSON(
                '/ajax/general-location/save/',
                {
                    city_id: cityId
                },
                function () {
                    Services.hideLoader();
                    generalModal.find('.js-close-modal').click();
                    window.location.reload();
                },
                function (data) {
                    Services.hideLoader();
                    console.log(data.errors);
                }
            );

            $('.js-close-modal').click();
        });

        $('.js-your-location').on('click', function () {
            navigator.geolocation.getCurrentPosition(
                function (pos) {
                    Services.showLoader();
                    Services.ajaxPOSTRequestJSON(
                        '/ajax/general-location/save/',
                        {
                            latitude: pos.coords.latitude,
                            longitude: pos.coords.longitude
                        },
                        function () {
                            Services.hideLoader();
                            generalModal.find('.js-close-modal').click();
                            window.location.reload();
                        },
                        function (data) {
                            Services.hideLoader();
                            console.log(data.errors);
                        }
                    );
                },
                function () {

                })
        });

        $(document).on('click', '.js-general-location-address', function (e) {
            e.stopPropagation();
            e.preventDefault();
            $(this).find('input[type="radio"]').prop('checked', true);
            var cityId = $(this).data('city-id');
            var addressId = $(this).data('address-id');
            Services.showLoader();
            Services.ajaxPOSTRequestJSON(
                '/ajax/general-location/save/',
                {
                    city_id: cityId,
                    address_id: addressId
                },
                function () {
                    Services.hideLoader();
                    addressModal.find('.js-close-modal').click();
                    window.location.reload();
                },
                function (data) {
                    Services.hideLoader();
                    console.log(data.errors);
                }
            );
        });

        $('.js-close-modal').on('click', function () {
            $(this).closest('.remodal').remodal().close();
        })
    },

    initMiniCart: function() {
        if (window.checkoutStep !== 1) {
            var $miniCart = $('#mini-cart');
            $miniCart.on('mouseenter', '.js-mini-cart-container', function () {
                $('.js-mini-cart-container').addClass('open');
                $('.js-mini-cart-dropdown').show();
            });

            $miniCart.on('mouseleave', '.js-mini-cart-container', function () {
                $('.js-mini-cart-container').removeClass('open');
                $('.js-mini-cart-dropdown').hide();
            });
        }
    },

    initStickyHeader: function () {
        var headerNavigation = $('.js-navi');

        var $w = $(window);
        var lastY = $w.scrollTop();
        var naviHideThreshold = 100;
        var topBannerHeight = 60;
        var $body = $('body');
        var header = $('.js-header:not(.t-header-light .js-header)'); //$('.js-header');
        var hasTopBanner = $body.hasClass('has-top-banner') && header.children('.c-adplacement').length;


        $w.scroll(function () {
            var currentPosition = $w.scrollTop();

            if ($('.js-mega-menu-categories-options').is(':visible')) {
                return;
            }

            if (currentPosition < lastY) {
                headerNavigation.removeClass('not-shown');
                $body.addClass('navi-is-visible');

                if (isModuleActive('top_banner_make_unsticky') && hasTopBanner) {
                    if (currentPosition < topBannerHeight) {
                        header.css('transform', 'translate(0,' + (((-1) * currentPosition) + 'px)'));
                    }
                    else {
                        header.css('transform', 'translate(0,-60px)');
                    }
                }

                if (currentPosition <= naviHideThreshold - 5) {
                    $body.removeClass('navi-is-visible');
                }
            } else {

                if(isModuleActive('top_banner_make_unsticky') && hasTopBanner) {
                    if (currentPosition < topBannerHeight) {
                        header.css('transform', 'translate(0,' + (((-1) * currentPosition) + 'px)'));
                    } else {
                        header.css('transform', 'translate(0,-60px)');
                    }
                }

                if (currentPosition < naviHideThreshold) {
                    lastY = currentPosition;
                    return;
                }

                headerNavigation.addClass('not-shown');
                $body.removeClass('navi-is-visible');
            }

            lastY = currentPosition;
        });

        if(isModuleActive('top_banner_make_unsticky') && hasTopBanner) {
            $w.trigger('scroll');
        }
    },

    initFloatingButton: function () {
        $('.js-floating-close').on('click', function () {
            window.DKCookie && window.DKCookie.set('digikala_fresh_gift', "1", 7 * 24 * 3600);
            $(this).closest('.js-floating-box').fadeOut();
        });
    },

    initYaldaFloatingButton: function () {
        $('.js-floating-close').on('click', function () {
            window.DKCookie && window.DKCookie.set('digikala_fresh_gift', "1", 7 * 24 * 3600);
            $(this).closest('.js-floating-box').fadeOut();
        });
    },

    initFloatingBox: function () {
        if (window.DKCookie.get('digikala_fresh_gift') == 1) {
            $('.js-fmcg-voucher-box').remove();
        } else {
            $('.js-fmcg-voucher-box').removeClass('u-hidden');
        }

        if (isModuleActive('new_customer_floating_box')) {
            var floatingBox = $('.js-wheel-floating-box');
            if (window.DKCookie.get('digikala_new_customer_wheel') == 1) {
                floatingBox.remove();
            } else {
                if (floatingBox.length !== 0 && typeof isAnanasFriendly !== 'undefined' && isAnanasFriendly) {
                    floatingBox.removeClass('u-hidden');
                    if (window.location.pathname === '/' &&  isModuleActive('dk_new_customer_free_shipping_badge')){
                        $('body').css('overflow', 'hidden');
                    }
                }
            }
        }

        if (isModuleActive('mega_campaign')) {
            if (window.DKCookie.get('digikala_mega_campaign_floating_box') == 1) {
                $('.js-mega-campaign-floating-box').remove();
            } else {
                if (typeof isAnanasFriendly !== 'undefined' && isAnanasFriendly) {
                    $('.js-mega-campaign-floating-box').removeClass('u-hidden');
                }
            }
        }
    },

    initGAFreeShippingBadge: function(){
        try {
            $(document).on('click', '.js-ga-free-shipping-badge', function () {
                ga('set', 'nonInteraction', true);
                ga('send', 'event', {
                    eventCategory: 'Free Shipping',
                    eventAction:'Click',
                    eventLabel: userId ? 'Logged in':'Not Logged in'
                });
            })
        } catch (e) {}
    },

    initFMCGVoucherBox: function () {

        var fmcgVoucherBox = $(".js-fmcg-voucher-box");

        if (fmcgVoucherBox[0]) {
            try {
                ga('send', 'event', 'Growth', 'Viewed', document.location.href);
            } catch (e) {
            }
        }

        fmcgVoucherBox.on('click', function () {
            try {
                ga('send', 'event', 'Growth', 'Click', document.location.href);
            } catch (e) {
            }
        });

        $(document).on('click', '.js-fmcg-voucher-box-close', function (e) {
            // e.preventDefault();
            // e.stopPropagation();
            window.DKCookie && window.DKCookie.set('digikala_fresh_gift', "1", 7 * 24 * 3600);
            $(this).closest('.js-fmcg-voucher-box').fadeOut();
            try {
                ga('send', 'event', 'Growth', 'Close Click', document.location.href);
            } catch (e) {
            }
        });


        if (isModuleActive('new_customer_floating_box')) {

            if(isModuleActive('dk_new_customer_free_shipping_badge')){
                $('.js-wheel-floating-box-click').on('click', function () {
                    var cookieName = 'digikala_new_customer_wheel';
                    window.DKCookie && window.DKCookie.set(cookieName, "1", 7 * 24 * 3600);
                    try {
                        ga('set', 'nonInteraction', true);
                        ga('send', 'event', {
                            eventCategory: 'Free Shipping',
                            eventAction:'Click',
                            eventLabel: userId ? 'Logged in':'Not Logged in'
                        });
                    } catch (e) {}
                });
            } else {
                $('.js-wheel-floating-box').on('click', function () {
                    try {
                        ga('set', 'nonInteraction', true);
                        ga('send', 'event', {
                            eventCategory: 'Free Shipping',
                            eventAction:'Click',
                            eventLabel: userId ? 'Logged in':'Not Logged in'
                        });
                    } catch (e) {}
                });
            }


            $(document).on('click', '.js-wheel-floating-box-close', function (e) {
                e.preventDefault();
                e.stopPropagation();
                var cookieName = 'digikala_new_customer_wheel';
                window.DKCookie && window.DKCookie.set(cookieName, "1", 7 * 24 * 3600);
                $(this).closest('.js-wheel-floating-box').fadeOut();
                if (window.location.pathname === '/' && isModuleActive('dk_new_customer_free_shipping_badge')){
                    $('body').css('overflow', 'auto');
                }
                try {
                    ga('set', 'nonInteraction', true);
                    ga('send', 'event', {
                        eventCategory: 'Free Shipping',
                        eventAction:'Exit',
                        eventLabel: userId ? 'Logged in':'Not Logged in'
                    });
                } catch (e) {}
            });
        }

        if (isModuleActive('mega_campaign')) {
            $('.js-mega-campaign-floating-box').on('click', function () {
                try {
                    ga('set', 'nonInteraction', true);
                    ga('send', 'event', {
                        eventCategory: 'End of Year',
                        eventAction:'Annas Banner Click',
                        eventLabel: (window.location.pathname + window.location.search)
                    });
                } catch (e) {
                }
            });

            $(document).on('click', '.js-mega-campaign-floating-box-close', function (e) {
                e.preventDefault();
                e.stopPropagation();
                var cookieName = 'digikala_mega_campaign_floating_box';
                window.DKCookie && window.DKCookie.set(cookieName, "1", 7 * 24 * 3600);
                $(this).closest('.js-mega-campaign-floating-box').fadeOut();
                try {
                    ga('set', 'nonInteraction', true);
                    ga('send', 'event', {
                        eventCategory: 'End of Year',
                        eventAction:'Annas Banner Exit',
                        eventLabel: (window.location.pathname + window.location.search)
                    });
                } catch (e) {
                }
            });
        }

        $('.js-fmcg-voucher-box-copy').on('click', function (e) {
            e.preventDefault();
            e.stopPropagation();
            var aux = document.createElement("input");
            var text = $(this).html();
            aux.setAttribute("value", text);
            aux.setAttribute("contenteditable", true); //IOS compatibility
            document.body.appendChild(aux);
            aux.select();
            document.execCommand("copy");
            document.body.removeChild(aux);
        })
    },

    initUserWallet: function () {
        if (!isModuleActive('dk_wallet') ||
            !this.user.isLogged() ||
            window.skipWalletRequest
        ) {
            return;
        }

        var $miniProfileToggleBtn = $('.js-dropdown-toggle'),
            $digipayMenu = $('.js-digipay-menu'),
            $walletDropdownAmount = $('.js-user-dropdown-wallet-has-amount'),
            $walletDropdownUrl = $('.js-user-dropdown-wallet-has-url'),
            $walletAmount = $('.js-user-drop-down-wallet-amount'),
            $walletUrl = $('.js-wallet-activation-url'),
            $digipayMenuLoading = $('.js-digipay-menu-loading'),
            isAjaxInProgress = false,
            isDataSet = false;

        function getWalletData() {
            if(isAjaxInProgress || isDataSet) return false;

            isAjaxInProgress = true;

            Services.ajaxGETRequestJSON(
                '/ajax/profile/wallet/',
                {},
                function (res) {
                    var response = (res || {});
                    if (!response.hasOwnProperty('amount') && !response.hasOwnProperty('activationUrl') && !response.hasOwnProperty('notVerified')) {
                        $walletAmount.parent().text('فعلا از دسترس خارج');
                        $walletDropdownAmount.removeClass('u-hidden');
                    } else if (response.notVerified) {

                    } else if (response.amount != null) {
                        $walletAmount.text(Services.convertToFaDigit(Services.formatCurrency(response.amount, true, '')));
                        $walletDropdownAmount.removeClass('u-hidden');
                    } else if(response.activationUrl != null) {
                        $walletUrl.attr('href', response.activationUrl);
                        $walletDropdownUrl.removeClass('u-hidden');
                    }

                    $digipayMenuLoading.addClass('u-hidden');
                    isAjaxInProgress = false;
                    isDataSet = true;
                },
                function () {
                    $walletAmount.parent().text('فعلا از دسترس خارج');
                    $walletDropdownAmount.removeClass('u-hidden');

                    $digipayMenuLoading.addClass('u-hidden');
                    isAjaxInProgress = false;
                },
                false,
                false
            );
        }

        $miniProfileToggleBtn.on('click', function() {
            getWalletData();
        })

        $digipayMenu.hover(function() {
            getWalletData();
        })
    },

    initUserHistoryActions: function () {
        var sameProductModal = $("[data-remodal-id=sameProduct]").remodal();

        $(".js-history-same-product-modal").click(function () {
            var productId = $(this).data('product-id');

            Services.ajaxGETRequestHTML(
                '/ajax/browsing-history/product/show-similar/' + productId + '/',
                {},
                function (res) {

                    $('.js-related-product-container').html(res);
                    sameProductModal.open();

                    new window.Swiper(
                        ".js-swiper-same-products",
                        {
                            slidesPerView: 4,
                            slidesPerGroup: 3,
                            lazy: {
                                enabled: true
                            },
                            navigation: {
                                nextEl: ".js-swiper-button-next",
                                prevEl: ".js-swiper-button-prev"
                            },
                            keyboard: {
                                enabled: true,
                                onlyInViewport: true
                            }
                        }
                    );
                },
                function () {
                },
                true,
                true
            );
        });

        $(document).on('click', '.js-remove-item-user-history', function () {
            var productId = $(this).data('product-id');

            DKConfirm(
                'آیا مطمئنید که این محصول از لیست بازدیدهای اخیر شما حذف شود؟',
                function () {
                    Services.ajaxPOSTRequestJSON(
                        '/ajax/browsing-history/product/remove/' + productId + '/',
                        null,
                        function () {
                            location.reload();
                        },
                        null,
                        true,
                        true
                    );
                },
                function () {
                },
                'بله',
                'خیر'
            );
        });
    },

    intiShowFMCGModal: function () {
        var modal = $('[data-remodal-id="fmcg-modal"]');

        modal.find(".js-fmcg-modal-reject").on("click", function () {
            modal.remodal().close();
        });
        window.showFMCGModal = function (productAddURL) {
            modal.find(".js-fmcg-modal-approve").on("click", function () {
                window.open(productAddURL);
                modal.remodal().close();
            });
            modal.remodal().open();
        };
    },

    initSNTracker: function () {
        // SnTracker.trackers.PageViewTracking(); page view is tracking in from sntracker.js
        window.SnTracker.trackers.UTMTracking();

        window.snt = window.snt || function () {
        };
        var $w = $(window);
        var height = $w.height();
        var banners = $(
            ".c-adplacement__item:not(.js-no-track), .js-snt-banner-brand"
        );

        var bannerClickHandler = function () {
            snt(
                "dkBannerClicked",
                {
                    bannerId: $(this).data("id"),
                    url: $(this)
                        .closest("a")
                        .attr("href")
                },
                $(this)
                    .closest("a")
                    .attr("target") === "_blank"
            );
        };

        banners.on("click", bannerClickHandler);
        $(".js-main-page-slider-image").on("click", bannerClickHandler);

        $w.scroll(function () {
            (function (w) {
                var inview = banners.filter(function () {
                    var $e = $(this);

                    if ($e.is(":hidden")) return;

                    var wt = w.scrollTop(),
                        wb = wt + w.height(),
                        et = $e.offset().top,
                        eb = et + $e.height();

                    return eb >= wt - 5 && et <= wb + 5;
                });

                inview.each(function () {
                    if ($(this).data("id")) {
                        snt("dkBannerViewed", {
                            bannerId: $(this).data("id"),
                            created_at: Date.now()
                        });
                    }
                });
                banners = banners.not(inview);

                if (w.scrollTop() >= height) {
                    window.runExperiment = 1;
                    window._conv_q = window._conv_q || [];
                    window._conv_q.push(["executeExperiment", "100022649"]);
                    window.showMsg && window.showMsg();
                }
            }.bind(this, $w)());
        }).scroll();
    },

    initBrowserBackHandler: function () {
        window.addEventListener("pageshow", function () {
            var historyTraversal =
                typeof window.performance !== typeof undefined &&
                window.performance.navigation.type ===
                window.performance.navigation.TYPE_BACK_FORWARD;

            if (historyTraversal) {
                $(".js-product-compare-btn :checkbox").prop("checked", false);
            }
        });
    },

    overrideServerErrors: function () {
        // eslint-disable-next-line no-console
        window.alert = console.log.bind(console);
    },

    initSelects: function () {
        $(".js-ui-select").selectric();
        $(".js-ui-select-above").filter(':visible').selectric({forceRenderAbove: true, maxHeight: 230});
        $(".js-ui-select-search").selectric({hasSearch: true});
    },

    initNativeLazyLoading: function () {
        setInterval(function addLazyLoadingAttr() {
            var images = $("img[data-src]:not(img[src])");

            if(images.length > 0) {
                images.map(function (_idx, img) {
                    var $img = $(img);

                    $img.attr("src", $img.attr("data-src"));
                    $img.attr("loading", "lazy");
                });
            }
        }, 2000);
    },

    initPlusBadgeMotion: function () {
        var $self = this;
        var lottieContainer = document.querySelector('.js-plus-badge-motion');

        if(lottieContainer) {
            var params = {
                container: lottieContainer,
                renderer: 'svg',
                loop: false,
                autoplay: true,
                animationData: plusBadgeMotion
            };

            setTimeout(function(){
                var anim = lottie.loadAnimation(params);
                if (sessionStorage.getItem("plusAnimationPlayed") == 1) {
                    anim.goToAndStop(325, true);
                }
                sessionStorage.setItem("plusAnimationPlayed", 1);
            }, 100);
        }
    },

    initLazyLoading: function () {
        // eslint-disable-next-line no-global-assign
        MutationObserver = window.MutationObserver || window.WebKitMutationObserver;
        var observer = new MutationObserver(function () {
            var images = $("img:not(img[src])");

            try {
                images.lazy($(window).height());
            } catch (e) {
            }
        });

        observer.observe(document, {
            childList: true,
            subtree: true
        });

        setTimeout(function () {
            var timingLazyLoad = setInterval(function () {
                var images = $("img[data-src]:not(img[src])");

                if (!images || images.length === 0) clearInterval(timingLazyLoad);

                images.splice(0, 10).map(function (item) {
                    $(item).attr("src", $(item).attr("data-src"));
                });
            }, 1000);
        }, 3000);
    },

    initGoogleAnalyticsEvents: function () {
        this.settingUserIdGoogleAnalytics();
        $("[data-event]").on("click", function () {
            var event = $(this).data("event");
            var eventCategory = $(this).data("event-category");
            var eventLabel = $(this).data("event-label");
            var eventValue = $(this).data("event-value");

            Main.sendGoogleAnalyticEvent(
                event,
                eventCategory,
                eventLabel,
                eventValue
            );
        });
    },

    settingUserIdGoogleAnalytics: function () {
        window.userId = $("#ESILogged").data("user_id") || null;
    },

    sendGoogleAnalyticEvent: function (
        event,
        eventCategory,
        eventLabel,
        eventValue
    ) {
        var data = {};

        if (eventCategory) {
            data["event_category"] = eventCategory;
        }

        if (eventLabel) {
            data["event_label"] = eventLabel;
        }

        if (eventValue) {
            data["value"] = eventValue;
        }

        gtag("event", event, data);
    },

    getGaListName: function(url, shouldUpdateMain) {
        var listname = '';
        var host = window.location.host;
        var href, pathName, trend, q;

        if(url && typeof url === 'string' && url.indexOf(host) !== -1) {
            href = url;
            pathName = url.slice(url.indexOf(host) + host.length);
        } else {
            href = window.location.href;
            pathName = window.location.pathname;
        }

            function getUrlVars() {
                var vars = [], hash;
                var hashes = href.slice(href.indexOf('?') + 1).split('&');
                for(var i = 0; i < hashes.length; i++)
                {
                    hash = hashes[i].split('=');
                    vars.push(hash[0]);
                    vars[hash[0]] = hash[1];
                }
                return vars;
            }

            if(pathName == '/'){
                listname='home-page';
            }
            else if(pathName.indexOf('cart/')>=1){
                // tabbed page - user clicks are handled in cart's indexAction
                if(href.indexOf('tab=sfl')>=1){
                    listname='next-purchase';
                } else {
                    listname = 'cart';
                }
            }
            else if(pathName.indexOf('main/')>=1){
                listname = pathName;
                listname = listname.substring(listname.indexOf('main/')+5);
                listname = listname.slice(0,-1);
                listname = 'main-'+listname;
            }
            else if(href.indexOf('trend-')>=0){
                trend = getUrlVars()["keyword"];
                trend = decodeURIComponent(trend);
                listname = 'search-'+trend;
            }
            else if(pathName.indexOf('search/category')>=1){
                if(href.indexOf('q=')>=0){
                    q = getUrlVars()["q"];
                    q = decodeURIComponent(q);
                    listname = pathName;
                    listname = 'search-'+listname.substring(listname.indexOf('/search/category')+17);
                    listname = listname.slice(0,-1);
                    listname = listname + '-' + q;
                }
                else{
                    listname = pathName;
                    listname = listname.substring(listname.indexOf('/search/category')+8);
                    listname = listname.slice(0,-1);
                }
            }
            else if(href.indexOf('q=')>=0 && pathName.indexOf('/search')>=0){
                q = getUrlVars()["q"];
                q = decodeURIComponent(q);
                listname = 'search-'+q;
            }
            else if(pathName == "/promotion-center/"){
                listname = 'promotion-center';
            }
            else if(href.indexOf('trend-')>=0){
                trend = getUrlVars()["keyword"];
                trend = decodeURIComponent(trend);
                listname = 'search-'+trend;
            }
            else if(pathName.indexOf('promotion-page/')>=1){
                listname = pathName;
                listname = listname.substring(listname.indexOf('/promotion-page/')+15);
                listname = listname.slice(1,-1);
            }
            else if(pathName.indexOf('incredible-offers/')>=1){
                listname = 'incredible-offers';
            }
            else if(pathName.indexOf('fresh-offers/')>=1){
                listname = 'fresh-offers';
            }
            else if(pathName.indexOf('landing-page/')>=1){
                listname = 'landing-page';
            }
            else if(pathName.indexOf('best-selling/')>=1){
                listname = 'best-selling';
            }
            else if(pathName.indexOf('brand/')>=1){
                listname = pathName;
                listname = listname.substring(listname.indexOf('/brand/')+6);
                listname = listname.slice(1,-1);
                listname = 'brand-'+listname;
            }
            else if(pathName.indexOf('seller/')>=1){
                listname = pathName;
                listname = listname.substring(listname.indexOf('/seller/')+7);
                listname = listname.slice(1,-1);
                listname = 'seller-'+listname;
            }
            else if(pathName.indexOf('product-list/')>=1){
                listname = pathName;
                listname = listname.substring(listname.indexOf('/product-list/')+13);
                listname = listname.slice(1,-1);
                //listname = listname;
            }
            else if(pathName.indexOf('profile/favorites/')>=1){
                listname='my-favorite';
            }
            else if(pathName.indexOf('my-digikala/')>=1){
                listname = 'my-digikala';
            }
            else if(pathName.indexOf('shipping/')>=1){
                listname = 'shipping';
            }
            else if(pathName.indexOf('product/dkp')>=1){
                listname = 'pdp';
            }

            if(shouldUpdateMain) Main.gaListName = listname;
            return listname;
    },

    fixListNameInGaImpressions: function() {
        function chore() {
            var prevPageListName = Main.getGaListName(document.referrer);

            var eecImpressionObjList = window.dataLayer.filter(function(item) {
                return item.event && item.event.indexOf('eec.') !== -1;
            })

            eecImpressionObjList.forEach(function (eventObj) {
                if(eventObj.event === 'eec.productDetail') {
                    Services.mutateProperty(eventObj, 'list', prevPageListName);
                } else {
                    Services.mutateProperty(eventObj, 'list', Main.gaListName);
                }
            });
        }

        setTimeout(chore, 0);
    },

    initGAPromotionsImpressions: function() {

        setTimeout(setImpressions, 0);

        function setImpressions() {
            var $promotions = $('body:not(.t-header-light) [href*="promo_name"]'),
                promotionList = [];

            if (!$promotions || $promotions.length === 0) return false;

            if($promotions.length > 1) {
                $promotions.each(function() {
                    var queryParams = Services.getQueryString($(this).attr('href')),
                        queryObject = Services.parseQueryString(queryParams);

                    promotionList.push(createImpressionObj(queryObject));
                });
            } else {
                promotionList.push(
                    createImpressionObj(
                        Services.parseQueryString(
                            Services.getQueryString($promotions.first().attr('href'))
                        )
                    )
                );
            }

            window.dataLayer.push({
                'event': 'eec.promoView',
                'ecommerce': {
                    'promoView': {
                        'promotions': promotionList
                    }
                }
            });
        }

        $(document).on('click', '[href*="promo_name"]', function() {
            var queryParams = Services.getQueryString($(this).attr('href')),
                queryObject = Services.parseQueryString(queryParams);

            pushClickImpressionToDataLayer(queryObject);
        });

        function createImpressionObj(queryObject) {
            return {
                "id": queryObject.promo_creative || "not specified",
                "name": queryObject.promo_name || "not specified",
                // 'creative': queryObject.promo_creative || 'not specified',
                "position": queryObject.promo_position || "not specified"
            }
        }

        function pushClickImpressionToDataLayer(queryObject) {
            var promotionClickObject = {
                'event': 'eec.promoClick',
                'ecommerce': {
                    'promoClick': {
                        'promotions': [createImpressionObj(queryObject)]
                    }
                }
            };

            window.dataLayer.push(promotionClickObject);
        }
    },

    replaceGaImpressionList: function (dataLayerString) {
        return dataLayerString.replace(
            /"list":"[^"]*"/g,
            '"list":"' + Main.gaListName + '"'
        )
    },

    setImpressionEventOnAjax: function(dataLayerData, notReplaceList) {
        try {
            if(notReplaceList) {
                dataLayerData = JSON.parse(dataLayerData);
            } else {
                dataLayerData = JSON.parse(Main.replaceGaImpressionList(dataLayerData));
            }

            if(Services.isObject(dataLayerData)) {
                window.dataLayer.push(dataLayerData);
            } else {
                dataLayerData.forEach(function(eventItem) {
                    window.dataLayer.push(eventItem);
                });
            }
        } catch (e) {
           //
            // eslint-disable-next-line no-console
            console.warn(e);
        }
    },

    initCategoryBar: function () {
        var $thiz = this,
            $overlay = $(".js-menu-overlay"),
            $naviOverlay = $(".js-navi-overlay"),
            $megaMenuMain = $('.js-mega-menu-main-item'),
            $megaMenuOptionsContainer = $(".js-mega-menu-categories-options"),
            $hoverEffect = $(".js-navi-new-list-category-hover"),
            $headerLinks = $('.js-categories-bar-item'),
            $megaMenuCategory = $('.js-mega-menu-category'),
            $searchBar = $('.js-search'),
            $searchResults = $('.js-search-results'),
            viewWidth = Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0);

        var moveHover = function (self) {
            var parent = self
                .parent()
                .parent()
                .parent();

            $hoverEffect
                .css("width", self.width())
                .css(
                    "right",
                    parent.width() -
                    (self.offset().left + self.width()) +
                    parent.offset().left
                );
            $hoverEffect.css("transform", "scaleX(1)");
        };

        var removeHover = function () {
            $hoverEffect.css("transform", "scaleX(0)");
        };

        $headerLinks.hover(function () {
                moveHover.call(this, $(this));
            },
            function () {
                removeHover.call(this, $(this));
            });

        $megaMenuMain.on('click', function (e) {
            e.stopPropagation();
        });

        var hoverAction;
        $megaMenuMain.hover(
            function() {
                var $this = $(this);
                hoverAction = setTimeout(function () {
                    $this.children(".js-mega-menu-categories-options").css('display', 'flex');
                    $naviOverlay.addClass("is-active");
                    $searchResults.removeClass("is-active");
                    $searchBar.removeClass("is-active");
                }, 200);
            },
            function () {
                hoverAction && clearTimeout(hoverAction);
                $naviOverlay.removeClass("is-active");
                $megaMenuOptionsContainer.hide()
            });

        $megaMenuCategory.hover(
            function () {

                if (isModuleActive('sponsored_mega_menu')) {
                    $megaMenuOptionsContainer.find('.js-categories-ad').removeClass('ad-is-active');
                    $megaMenuOptionsContainer.find('#categories-ad-' + $(this).data('index')).addClass('ad-is-active');
                    if (isModuleActive('dk_banner_view_impression_event') && viewWidth > 1365) {
                        var brandIds = $megaMenuOptionsContainer.find('#categories-ad-' + $(this).data('index') + ' .js-menu-ad-brands');
                        var bannerIds = $megaMenuOptionsContainer.find('#categories-ad-' + $(this).data('index') + ' .js-menu-top-banner');
                        $thiz.setMegaBannerViewImpressionEvent(bannerIds, brandIds);
                    }
                }

                $megaMenuOptionsContainer.find('.js-mega-menu-category-options').removeClass('is-active');
                $megaMenuCategory.removeClass('c-navi-new-list__inner-category--hovered');
                $(this).addClass('c-navi-new-list__inner-category--hovered');
                $megaMenuOptionsContainer.find('#categories-' + $(this).data('index')).addClass('is-active');
            },

            function () {
            }
        );

        $overlay.hover(function () {
            if (!$(this).is(".is-active")) return true;
        });

        if (isModuleActive('dk_banner_view_impression_event') && viewWidth > 1365) {
            $('.js-categories-item').hover(function () {
                var activeCategoryIndex = $('.c-navi-new-list__inner-category--hovered').data('index');
                var brandIds = $megaMenuOptionsContainer.find('#categories-ad-' + activeCategoryIndex + ' .js-menu-ad-brands');
                var bannerIds = $megaMenuOptionsContainer.find('#categories-ad-' + activeCategoryIndex + ' .js-menu-top-banner');
                $thiz.setMegaBannerViewImpressionEvent(bannerIds, brandIds);
            })
        }
    },

    setMegaBannerViewImpressionEvent: function (bannerIds , brandIds) {
        if(!bannerIds || !brandIds) return;
        bannerIds.each(function() {
            if($(this).data('observed')) return;
            findAdDataAndCallGA($(this).data('id') , this);
        });
        brandIds.each(function() {
            if($(this).data('observed')) return;
            findAdDataAndCallGA($(this).data('id') , this);
        });
        function findAdDataAndCallGA(id , adElement) {
            if(!id || !adElement) return;
            try {
                var bannerData = Services.retrieveProductFromDataLayer({
                    productId: id,
                    eventName: "eec.promoView",
                    pathArray: ['ecommerce','promoView','promotions']
                });
                if (bannerData){
                    $(adElement).data('observed' , 1);
                    ga("ec:addPromo", bannerData);
                }
            } catch (e) {
                console.log('Load Error: Mega Menu Ads View Impression')
            }
        }
    },

    setPromotionMegaMenuBannerViewImpressionEvent: function(){
      $('.js-promotion-mega-menu').hover(function () {
          var bannerElm = $(this).find('.js-promotion-mega-menu-banner');
          var bannerId = bannerElm.data('id');
          var observed = bannerElm.data('observed');
          if (!bannerId || observed) return;
          try {
              var bannerData = Services.retrieveProductFromDataLayer({
                  productId: bannerId,
                  eventName: "eec.promoView",
                  pathArray: ['ecommerce','promoView','promotions']
              });
              if (bannerData){
                  bannerElm.data('observed' , 1);
                  ga("ec:addPromo", bannerData);
              }
          } catch (e) {
              console.log('Load Error: Promotion Mega Menu Ads View Impression')
          }
      })
    },

    initStatic: function () {
        var $overlay = $(".js-menu-overlay"),
            $naviOverlay = $(".js-navi-overlay"),
            $newCategories = $(".js-navi-new-list-categories"),
            $newCategoryItem = $(".js-navi-new-list-category"),
            $hoverEffect = $(".js-navi-new-list-category-hover"),
            allCategoriesButton = $(".js-navi-new-list__all-links"),
            sentBanners = [];

        this.openCategories = false;
        var mainJs = this;

        $(".js-navi").hover(function () {
            $(this)
                .find("img[data-src]")
                .each(function () {
                    $(this)
                        .attr("src", $(this).attr("data-src"))
                        .removeAttr("data-src");
                });
        });

        var moveHover = function (self) {
            var parent = self
                .parent()
                .parent()
                .parent();

            $hoverEffect
                .css("width", self.width())
                .css(
                    "right",
                    parent.width() -
                    (self.offset().left + self.width()) +
                    parent.offset().left
                );
            if ($(this).hasClass("is-fmcg")) {
                $hoverEffect.addClass("is-fmcg");
            } else {
                $hoverEffect.removeClass("is-fmcg");
            }
            $hoverEffect.css("transform", "scaleX(1)");
        };

        var removeHover = function () {
            $hoverEffect.css("transform", "scaleX(0)");
        };

        var handlerHover = function () {
            clearTimeout(this.closeTimer);
            var self = $(this);

            this.timer = setTimeout(function () {
                $("body").click();
                $naviOverlay.addClass("is-active");
                self.addClass("can-show-menu");
                self.siblings(".js-navi-new-list-category").addClass("can-show-menu");
                self.find(".js-navi-new-list-category").addClass("can-show-menu");
                mainJs.openCategories = true;
                var id = self.find(".c-adplacement__item").data("id");

                if (id && sentBanners.indexOf(id) < 0) {
                    snt("dkBannerViewed", {bannerId: id, created_at: Date.now()});
                    sentBanners.push(id);
                }
                $(".js-search-results").removeClass("is-active");
            }, 200);
            if (self.hasClass("js-navi-new-list-category")) {
                moveHover.call(this, self);
            }
        };
        var handlerOut = function () {
            clearTimeout(this.timer);
            var self = this;

            this.closeTimer = setTimeout(function () {
                if ($(".js-search-results").hasClass("is-active")) return;
                $(self).hasClass("js-navi-new-list-categories")
                    ? $naviOverlay.removeClass("is-active")
                    : "";
                $(self)
                    .find(".js-navi-new-list-category")
                    .removeClass("can-show-menu");
                $(self).hasClass("can-show-menu")
                    ? $(self).removeClass("can-show-menu")
                    : "";
                mainJs.openCategories = false;
            }, 200);
            removeHover();
        };

        // $('.js-navi-list-promotion-item').hover(function () {
        //     moveHover.call(this, $(this));
        // }, removeHover);

        var $w = $(window),
            lastY = $w.scrollTop();

        $(window).scroll(function () {
            var currentPosition = $w.scrollTop();

            if (!mainJs.openCategories) {
                return (lastY = currentPosition);
            }
            if (currentPosition - lastY < -5) {
                var e = jQuery.Event("mouseout");

                $newCategories.trigger(e);
                $newCategoryItem.trigger(e);
            }
            lastY = currentPosition;
        });

        $newCategories.hover(handlerHover, handlerOut);
        $newCategoryItem.hover(handlerHover, handlerOut);
        allCategoriesButton.hover(function (e) {
            e.stopPropagation();
            e.preventDefault();
            $naviOverlay.removeClass("is-active");
        });
        $overlay.hover(function () {
            if (!$(this).is(".is-active")) return true;
        });

        $(".js-expert-article-button").on("click", function (e) {
            var $this = $(this),
                $article = $this.closest(".js-expert-article");

            if ($article.hasClass("is-active")) {
                $article.removeClass("is-active");
            } else {
                $article.addClass("is-active");
            }

            e.preventDefault();

            window.dispatchEvent(new Event("scroll"));
        });

        var $deliveryLabels = $(".js-delivery-label");

        $deliveryLabels.click(function () {
            var $this = $(this);

            if ($this.hasClass("is-read-only")) {
                return;
            }

            $deliveryLabels.removeClass("is-selected");
            $this.addClass("is-selected");
        });

        $deliveryLabels.each(function () {
            var $this = $(this);
            var $radio = $this.find('input[type="radio"]');

            if ($radio.is(":checked")) {
                $this.addClass("is-selected");
            }
        });
    },

    initNewsletter: function () {
        var $subscriptionForm = $("#SubscribeNewsletter");

        $subscriptionForm.validate({
            rules: {
                "subscribe[email]": {
                    required: true,
                    email: true,
                    maxlength: 255
                }
            },
            messages: {
                "subscribe[email]": {
                    required: 'ایمیل وارد نشده است',
                    email: 'ایمیل نامعتبر است',
                    maxlength: 'ایمیل طولانی است'
                }
            }
        });

        $subscriptionForm.on("submit", function (e) {
            e.preventDefault();

            if (!$subscriptionForm.valid()) {
                DKAlert('ایمیل نامعتبر است');

                return;
            }

            $.ajax({
                type: "POST",
                url: "/newsletter/",
                data: $subscriptionForm.serialize(),
                success: function (response) {
                    if (response.status === "error") {
                        DKAlert(response.errors);
                    } else {
                        DKAlert('ایمیل شما برای ارسال خبرنامه ثبت شد.');
                        $subscriptionForm.find("input").val("");
                    }
                }
            });
        });
    },

    initAdroRetargeting: function () {
        // var adroRetargetingData = null;
        //
        // if (window.adroRCActivation) {
        //     window.StickyRetargeting();
        //     window[window.addEventListener ? "addEventListener" : "attachEvent"](
        //         window.addEventListener ? "message" : "onmessage",
        //         function (e) {
        //             if (e.origin !== window.StickyRetargeting.apibaseAddress) return;
        //             adroRetargetingData = JSON.parse(e.data);
        //         },
        //         false
        //     );
        //     setTimeout(function () {
        //         if (adroRetargetingData) {
        //             if (adroRetargetingData.message === "GetCookie") {
        //                 window.StickyRetargeting.Is_Ready = true;
        //                 window.StickyRetargeting.hostId = adroRetargetingData.HostId;
        //                 window.StickyRetargeting.userId = adroRetargetingData.UserId;
        //                 var pageData = {
        //                     Address: window.location.href,
        //                     HostId: window.StickyRetargeting.hostId,
        //                     UserId: window.StickyRetargeting.userId
        //                 };
        //
        //                 window.StickyRetargeting.SendDataToServer(pageData, "/PageLogger");
        //             }
        //             window.StickyRetargeting.initiated();
        //         } else {
        //             window.adroRCActivation = false;
        //         }
        //     }, 500);
        // }
    },

    extendValidator: function () {
        $.validator.setDefaults({
            errorPlacement: function (error, element) {
                if (element.parent().is("label")) {
                    error.appendTo(element.parent()).addClass("c-ui-feedback-hint");
                    element.parent().addClass("has-error");
                    element.closest(".js-valid-row").addClass("has-error");
                } else if (element.parent().hasClass("selectric-hide-select")) {
                    element
                        .parent()
                        .parent()
                        .addClass("has-error");
                    element
                        .parent()
                        .parent()
                        .append(error.addClass("c-ui-feedback-hint"));
                } else if(element.hasClass('o-form__field') || element.hasClass('o-form__textarea')) {
                    var container = element.closest('.o-form__field-container');
                    container.addClass('has-error');
                    error.appendTo(container).addClass("o-form__error");
                }
            },
            highlight: function (element) {
                element = $(element);
                if (element.parent().is("label")) {
                    element.closest(".js-valid-row").addClass("has-error");
                    element.parent().addClass("has-error");
                } else if (element.parent().hasClass("selectric-hide-select")) {
                    element
                        .parent()
                        .parent()
                        .addClass("has-error");
                } else if(element.hasClass('o-form__field') || element.hasClass('o-form__textarea')) {
                    element.closest('.o-form__field-container').addClass('has-error');
                }
            },
            unhighlight: function (element) {
                element = $(element);
                if (element.parent().is("label")) {
                    element.closest(".js-valid-row").removeClass("has-error");
                    element.parent().removeClass("has-error");
                } else if (element.parent().hasClass("selectric-hide-select")) {
                    element
                        .parent()
                        .parent()
                        .removeClass("has-error");
                } else if(element.hasClass('o-form__field') || element.hasClass('o-form__textarea')) {
                    element.closest('.o-form__field-container').removeClass('has-error');
                }
            },
            errorElement: "div",
            // ignoreTitle : true,
            ignore: ":hidden:not(.force-validation)"
        });

        $.extend($.validator.prototype, {
            showBackendErrors: function () {
                if (typeof jsFormErrors === "undefined") {
                    return;
                }

                var $form = $(this.currentForm);

                var $formErrorsIndex = $form.data("name");

                if (typeof window.jsFormErrors[$formErrorsIndex] === "undefined") {
                    return;
                }

                this.showErrors(window.jsFormErrors[$formErrorsIndex]);
            }
        });

        $.validator.addMethod("persian_english_letters_only", function (value) {
            if ($.trim(value).length === 0) {
                return true;
            }

            return /[abcdefghijklmnopqrstuvwxyzابپتثجچحخدذرزژسشصضطظعغفقکكگلمنوهیئي]$/i.test(
                value
            );
        });

        $.validator.addMethod(
            "national_identity_number",
            function (value) {
                value = Services.convertToEnDigit(value);
                var regex = new RegExp(/^(?!(\d)\1{9})\d{10}$/);

                if (!regex.test(value)) {
                    return false;
                }

                var s = 0;
                var c = parseInt(value.substr(9, 1), 10);

                for (var i = 0; i < 9; i++) {
                    s += parseInt(value.substr(i, 1), 10) * (10 - i);
                }

                s = s % 11;

                return (s < 2 && c == s) || (s >= 2 && c == 11 - s);
            },
            'کد ملی نامعتبر است'
        );

        $.validator.addMethod(
            "mobile_phone",
            function (value) {
                var phone = Services.convertToEnDigit(value);

                var pattern = new RegExp(
                    "^(?:(?:(?:\\+?|00)(98))|(0))?((?:90|91|92|93|99)[0-9]{8})$",
                    "i"
                );

                return pattern.test(phone);
            },
            'شماره موبایل نامعتبر است'
        );

        $.validator.addMethod(
            "landline_phone",
            function (value) {
                var phone = Services.convertToEnDigit(value);

                var pattern = new RegExp(
                    "^(?:(?:(?:\\+?|00)(98))|(0))?([0-9]{12})$",
                    "i"
                );

                return pattern.test(phone);
            },
            'شماره تلفن ثابت نامعتبر است'
        );

        $.validator.addMethod(
            "bank_card_number",
            function (value) {
                var number = Services.convertToEnDigit(value);

                if (number.length === 0) {
                    return true;
                }

                return /^[0-9]{4}-[0-9]{4}-[0-9]{4}-[0-9]{4}(-[0-9]{3})?$/i.test(
                    number
                );
            },
            'شماره کارت بانکی نامعتبر است'
        );

        $.validator.addMethod("digits", function (value) {
            if (!!value && value.length > 0 && value.trim().length > 0)
                return /^[\u06F0-\u06F9\u0660-\u06690-9]+$/i.test(value);

            return true;
        });

        $.validator.addMethod(
            "company_economic_number",
            function (value) {
                value = Services.convertToEnDigit(value);
                var regex = new RegExp(/^(?!(\d)\1{9})\d{12}$/);

                if (String(value).length === 0 && isModuleActive('remove_legal_codes_validation')) {
                    return true;
                }

                if (!regex.test(value)) {
                    return false;
                }

                return value.substring(0, 3) == "411";
            },
            'کد اقتصادی نادرست است.'
        );

        $.validator.addMethod(
            "company_national_identity_number",
            function (value) {
                value = Services.convertToEnDigit(value);
                var regex = new RegExp(/^(?!(\d)\1{10})\d{11}$/);

                if (!regex.test(value)) {
                    return false;
                }

                if (parseInt(value.substr(3, 6), 10) != 0) {
                    var c = parseInt(value.substr(10, 1), 10);
                    var d = parseInt(value.substr(9, 1), 10) + 2;
                    var z = [29, 27, 23, 19, 17];
                    var s = 0;

                    for (var i = 0; i < 10; i++) {
                        s += (d + parseInt(value.substr(i, 1), 10)) * z[i % 5];
                    }

                    s = s % 11;

                    if (s == 10) s = 0;

                    return c == s;
                }

                return false;
            },
            'کد ملی نامعتبر است'
        );

        // $.validator.addMethod('mobile_phone', function(value, element) {
        //     if ($.trim(value).length == 0) {
        //         return true;
        //     }
        //
        //     if ($('#add-email').length && $('#add-email').val() && $.validator.methods.email.call(this, $('#add-email').val(), element)) {
        //         var pattern = new RegExp('^[0-9]+$', 'i');
        //     } else {
        //         var pattern = new RegExp(window.mobileNumberPatternJs, 'i');
        //     }
        //
        //     return pattern.test(value);
        // }, 'Invalid phone format SMS');

        $.validator.addMethod("email", function (value) {
            if ($.trim(value).length === 0) {
                return true;
            }

            // eslint-disable-next-line no-useless-escape
            return /^(([^<>()\[\]\\\.,;:\s@"]+(\.[^<>()\[\]\\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/i.test(
                value
            );
        });

        $.validator.addMethod(
            "email_phone",
            function (value, element) {
                if ($.trim(value).length === 0) {
                    return true;
                }

                if ($.validator.methods.mobile_phone.call(this, value, element)) {
                    return true;
                }

                return $.validator.methods.email.call(this, value, element);
            },
            'ایمیل یا شماره موبایل نامعتبر است'
        );
        $.validator.addMethod(
            "selectric",
            function (value, element) {
                if ($.trim(value).length === 0) return false;

                return $(element).val() !== "";
            },
            "سلام بر همه دوستان عزیز"
        );

        // trim white spaces before validation
        $.each($.validator.methods, function (key, value) {
            $.validator.methods[key] = function () {
                if (arguments.length > 0) {
                    arguments[0] = $.trim(arguments[0]);
                }

                return value.apply(this, arguments);
            };
        });

        $.validator.addMethod(
            "notOnlyNumber",
            function (value, element) {
                return (
                    this.optional(element) ||
                    !/^[0-9]*$/.test(value.replace(/(\r\n|\n|\r|\s)/gm, ""))
                );
            },
            "Not Only Number"
        );

        $.validator.addMethod(
            "notEmailAddress",
            function (value, element) {
                return (
                    this.optional(element) ||
                    (!/[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/.test(
                        value
                        ) &&
                        !/.*@.*/.test(value))
                );
            },
            "Not Email Address"
        );

        $.validator.addMethod(
            "price",
            function (value, element) {
                return (
                    this.optional(element) ||
                    /^\d+$/.test(Services.convertToEnDigit(value).replace(/,/g, ""))
                );
            },
            'قیمت نامعتبر است'
        );

        $.validator.addMethod(
            "url",
            function (value) {
                return /((([A-Za-z]{3,9}:(?:\/\/)?)(?:[\-;:&=+$,\w]+@)?[A-Za-z0-9.\-]+|(?:www\.|[\-;:&=+$,\w]+@)[A-Za-z0-9.\-]+)((?:\/[+~%\/.\w\-_]*)?\??(?:[\-+=&;%@.\w_]*)#?(?:[.!\/\\\w]*))?)/.test(
                    value
                );
            },
            'آدرس صفحه مورد نظر نامعتبر است'
        );

        $.validator.addMethod(
            "dK_product",
            function (value) {
                return /^.*dkp-\d+.*$/.test(
                    value
                ) || /^\d+$/.test(value);
            },
            'لطفا آدرس یا کد محصول دیجی‌کالا را وارد نمایید'
        );

        $.validator.addMethod(
            "shortComment",
            function (value) {
                var countWords = value.split(" ").length;
                return countWords > 4 ? true : false;
            },
            'لطفا نظرتان را کامل شرح دهید'
        );

        $.validator.addMethod(
            "NotCompetitorWebsite",
            function (value) {
                var blackListWebsites = ["digikala", "digistyle", "bamilo", "torob", "nabzebazaar", "google"];
                var result = true;
                blackListWebsites.forEach(function(website) {
                    if(value.includes(website)){
                        result = false;
                    }
                });
                return result;
            },
            'متاسفانه از این وبسایت نمی‌توانید قیمتی ثبت کنید'
        );

        $.validator.addMethod(
            "competitorProductURL",
            function (value) {
                var URLNotMainPageRegex = /^(http:\/\/www\.|https:\/\/www\.|http:\/\/|https:\/\/)?[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,10}(:[0-9]{1,5})?(\/)?$/i;
                return !URLNotMainPageRegex.test(value);
            },
            'لطفا آدرس دقیق صفحه محصول را وارد کنید'
        );

        $.validator.addMethod(
            "competitorURL",
            function (value) {
                var URLRegex = /^(http:\/\/www\.|https:\/\/www\.|http:\/\/|https:\/\/)?[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,10}(:[0-9]{1,5})?(\/.*)?$/i;
                return URLRegex.test(value);
            },
            'آدرس صفحه مورد نظر نامعتبر است'
        );
    },

    initCounter: function () {
        var $counter = $(".js-counter");
        var $counterCarts = $(".js-counter-carts"),
            $topBannerCounter = $(".js-counter-top-banner"),
            $plusEarlyCounter = $(".js-counter-plus-early");

        if ($topBannerCounter.length > 0) {
            $topBannerCounter.each(function () {
                var $this = $(this),
                    seconds = $(this).data("countdownseconds"),
                    now;

                now = new Date();
                now.setSeconds(now.getSeconds() + seconds);

                $this.countdown({
                    date: now,
                    hoursOnly: false,
                    rtlTemplate:
                        '<span class="day">%d<br/><span>روز</span></span><span class="hour">%h<br/><span>ساعت</span></span><span class="dots">:</span><span class="minutes">%i<br/><span>دقیقه</span></span>',
                    template:
                        '<span class="day">%d<br/><span>روز</span></span><span class="hour">%h<br/><span>ساعت</span></span><span class="dots">:</span><span class="minutes">%i<br/><span>دقیقه</span></span>',
                    leadingZero: false,
                    daysLeft: seconds / (3600 * 24),
                    updateTime: 30000
                });
            });
        }

        $counter.each(function () {
            var $this = $(this),
                seconds = $(this).data("countdownseconds"),
                now;

            if (!!$this.attr("data-countdownseconds") && !!seconds) {
                now = new Date();
                now.setSeconds(now.getSeconds() + seconds);
            } else {
                now = ("" + $(this).data("countdown")).replace(/-/g, "/");
            }

            if (!now) return;

            $this.countdown({
                date: now,
                hoursOnly: true,
                rtlTemplate: "%h:%i:%s",
                template: "%h:%i:%s",
                leadingZero: true
            });
        });

        $counterCarts.each(function () {
            var $this = $(this),
                seconds = $(this).data("countdownseconds"),
                now;

            if (!!$this.attr("data-countdownseconds") && !!seconds) {
                now = new Date();
                now.setSeconds(now.getSeconds() + seconds);
            } else {
                now = ("" + $(this).data("countdown")).replace(/-/g, "/");
            }

            if (!now) return;

            $this.countdown({
                date: now,
                hoursOnly: true,
                rtlTemplate: "<span>%s</span> : <span>%i</span> : <span>%h</span>",
                template: "<span>%h</span> : <span>%i</span> : <span>%s</span>"
            });
        });

        $plusEarlyCounter.each(function () {
            var $this = $(this),
                seconds = $(this).data("countdownseconds"),
                now;

            if (!!$this.attr("data-countdownseconds") && !!seconds) {
                now = new Date();
                now.setSeconds(now.getSeconds() + seconds);
            } else {
                now = ("" + $(this).data("countdown")).replace(/-/g, "/");
            }

            if (!now) return;

            $this.countdown({
                date: now,
                hoursOnly: true,
                rtlTemplate: " <span>%i</span> دقیقه تا شروع تخفیف",
                template: " <span>%i</span> دقیقه تا شروع تخفیف"
            });
        });
    },

    initBox: function () {
        $(document).on("click", ".js-box-toggle", function (e) {
            var $this = $(this);
            var $content = $(".js-box-content");

            if ($this.hasClass("is-hidden")) {
                $this.removeClass("is-hidden");
                $this.next($content).slideDown();
            } else {
                $this.addClass("is-hidden");
                $this.next($content).slideUp();
            }

            var SearchAction = window.SearchAction || null;

            setTimeout(function () {
                if (SearchAction && SearchAction.stickySideBar) {
                    SearchAction.stickySideBar.trigger("sticky_kit:recalc");
                    SearchAction.stickySidebar.calcDimensions();
                    SearchAction.stickySidebar.updateSticky();
                }
            }, 200);

            e.preventDefault();
        });
    },

    initHomeTopBox: function () {
        var swiperPromoBoxPager = $("<div />");

        $(".js-promo-box .swiper-slide").each(function () {
            swiperPromoBoxPager.append(
                '<div class="swiper-pagination__item">' +
                $(this).data("title") +
                "</div>"
            );
        });

        var swiperPromoBox = new window.Swiper(".js-promo-box", {
            slidesPerView: 1,
            paginationClickable: true,
            autoplay: {
                delay: 3000
            },
            pagination: {
                el: ".swiper-pagination",
                type: "custom",
                renderCustom: function (swiper, current) {
                    swiperPromoBoxPager.find("div").removeClass("is-active");
                    swiperPromoBoxPager
                        .find("div:eq(" + (current - 1) + ")")
                        .addClass("is-active");

                    return swiperPromoBoxPager.html();
                }
            }
        });

        new window.Swiper(".js-promo-single-features", {
            slidesPerView: 1,
            autoplay: {
                delay: 3000
            },
            free: false,
            loop: true,
            pagination: {
                clickable: true,
                el: ".js-promo-single-features-pagination"
            }
        });

        $(".swiper-pagination").on("click", ".swiper-pagination__item", function (
            e
        ) {
            swiperPromoBox.slideTo($(this).index());
            e.preventDefault();
        });
    },

    initBrandsSwiper: function () {
        new window.Swiper(".js-swiper-brands", {
            slidesPerView: 6,
            slidesPerGroup: 6,
            navigation: {
                nextEl: ".js-swiper-button-next",
                prevEl: ".js-swiper-button-prev"
            },
            breakpoints: {
                1679: {
                    slidesPerView: 5,
                    spaceBetweenSlides: 1
                }
            }
        });
    },

    initSwiper: function () {
        new window.Swiper(".js-swiper-products", {
            slidesPerView: 6,
            slidesPerGroup: 5,
            lazy: {
                enabled: true
            },
            navigation: {
                nextEl: ".js-swiper-button-next",
                prevEl: ".js-swiper-button-prev"
            },
            breakpoints: {
                1367: {
                    slidesPerView: 4,
                    slidesPerGroup: 3,
                    spaceBetweenSlides: 1
                },
                1679: {
                    slidesPerView: 5,
                    slidesPerGroup: 4,
                    spaceBetweenSlides: 1
                }
            },
            on: {
                reachEnd: function () {
                    var activeInstance = this;
                    var carouselType = activeInstance.$el
                        .closest(".swiper-products-container")
                        .attr("data-type");

                    if (typeof carouselType == "undefined") {
                        return;
                    }
                    var pageNo = "pageNo" in activeInstance ? activeInstance.pageNo : 2;

                    activeInstance.pageNo = pageNo + 1;

                    // Services.ajaxGETRequestJSON(
                    //     '/ajax/carousel/' + carouselType,
                    //     {
                    //         'pageno': pageNo
                    //     },
                    //     function (data) {
                    //         if (data.products) {
                    //             var template = self.createSliderItemTemplate(data.products);
                    //             self.appendNewItemsToSliderInstance(activeInstance, template);
                    //         }
                    //     },
                    //     null, null, null,
                    //     'execute'
                    // );
                }
            }
        });

        new window.Swiper(".js-swiper-user-history-products", {
            slidesPerView: 6,
            slidesPerGroup: 5,
            lazy: {
                enabled: true
            },
            navigation: {
                nextEl: ".js-swiper-button-next",
                prevEl: ".js-swiper-button-prev"
            },
            keyboard: {
                enabled: true,
                onlyInViewport: true
            },
            breakpoints: {
                1100: {
                    slidesPerView: 4,
                    slidesPerGroup: 3,
                    spaceBetweenSlides: 1
                },
                1367: {
                    slidesPerView: 5,
                    slidesPerGroup: 4,
                    spaceBetweenSlides: 1
                },
            },
        });

        new window.Swiper(".js-swiper-products-promotion", {
            slidesPerView: 4,
            slidesPerGroup: 3,
            lazy: {
                enabled: true
            },
            navigation: {
                nextEl: ".js-swiper-button-next",
                prevEl: ".js-swiper-button-prev"
            },
            keyboard: {
                enabled: true,
                onlyInViewport: true
            },
            breakpoints: {},
            on: {
                reachEnd: function () {
                    var activeInstance = this;
                    var carouselType = activeInstance.$el
                        .closest(".swiper-products-container")
                        .attr("data-type");

                    if (typeof carouselType == "undefined") {
                        return;
                    }
                    var pageNo = "pageNo" in activeInstance ? activeInstance.pageNo : 2;

                    activeInstance.pageNo = pageNo + 1;

                    // Services.ajaxGETRequestJSON(
                    //     '/ajax/carousel/' + carouselType,
                    //     {
                    //         'pageno': pageNo
                    //     },
                    //     function (data) {
                    //         if (data.products) {
                    //             var template = self.createSliderItemTemplate(data.products);
                    //             self.appendNewItemsToSliderInstance(activeInstance, template);
                    //         }
                    //     },
                    //     null, null, null,
                    //     'execute'
                    // );
                }
            }
        });

        new window.Swiper(".js-swiper-present", {
            slidesPerView: 3,
            slidesPerGroup: 2,
            lazy: {
                enabled: true
            },
            navigation: {
                nextEl: ".js-swiper-button-next",
                prevEl: ".js-swiper-button-prev"
            },
            keyboard: {
                enabled: true,
                onlyInViewport: true
            },
            breakpoints: {
                /*1367: {
                                            slidesPerView: 4,
                                            slidesPerGroup: 3,
                                            spaceBetweenSlides: 1
                                        },
                                        1679: {
                                            slidesPerView: 5,
                                            slidesPerGroup: 4,
                                            spaceBetweenSlides: 1
                                        }*/
            },
            on: {
                reachEnd: function () {
                    var activeInstance = this;
                    var carouselType = activeInstance.$el
                        .closest(".swiper-products-container")
                        .attr("data-type");

                    if (typeof carouselType == "undefined") {
                        return;
                    }
                    var pageNo = "pageNo" in activeInstance ? activeInstance.pageNo : 2;

                    activeInstance.pageNo = pageNo + 1;

                    // Services.ajaxGETRequestJSON(
                    //     '/ajax/carousel/' + carouselType,
                    //     {
                    //         'pageno': pageNo
                    //     },
                    //     function (data) {
                    //         if (data.products) {
                    //             var template = self.createSliderItemTemplate(data.products);
                    //             self.appendNewItemsToSliderInstance(activeInstance, template);
                    //         }
                    //     },
                    //     null, null, null,
                    //     'execute'
                    // );
                }
            }
        });

        new window.Swiper(".js-swiper-related", {
            slidesPerView: 6,
            slidesPerGroup: 5,
            navigation: {
                nextEl: ".js-swiper-button-next",
                prevEl: ".js-swiper-button-prev"
            },
            breakpoints: {
                1367: {
                    slidesPerView: 4,
                    slidesPerGroup: 3,
                    spaceBetweenSlides: 1
                },
                1679: {
                    slidesPerView: 5,
                    slidesPerGroup: 4,
                    spaceBetweenSlides: 1
                }
            }
        });


        new window.Swiper(".js-swiper-specials", {
            slidesPerView: 4,
            slidesPerGroup: 3,
            lazy: {
                enabled: true
            },
            navigation: {
                nextEl: ".js-swiper-button-next",
                prevEl: ".js-swiper-button-prev"
            },
            keyboard: {
                enabled: true,
                onlyInViewport: true
            },
            breakpoints: {
                1280: {
                    slidesPerView: 3,
                    slidesPerGroup: 2,
                    spaceBetweenSlides: 1
                }
            }
        });

        new window.Swiper(".js-swiper-specials--plus-early", {
            slidesPerView: 3,
            slidesPerGroup: 2,
            lazy: {
                enabled: true
            },
            navigation: {
                nextEl: ".js-swiper-button-next",
                prevEl: ".js-swiper-button-prev"
            },
            keyboard: {
                enabled: true,
                onlyInViewport: true
            },
            breakpoints: {
                1280: {
                    slidesPerView: 2,
                    slidesPerGroup: 1,
                    spaceBetweenSlides: 1
                }
            }
        });

        if (isModuleActive('search_product_suggestions')) {
            new window.Swiper(".js-swiper-product-suggestions", {
                slidesPerView: 'auto',
                simulateTouch: false,
                grabCursor: false,
                loop: false,
                lazy: {
                    enabled: true
                },
                navigation: {
                    nextEl: ".js-swiper-button-next",
                    prevEl: ".js-swiper-button-prev"
                },
            });
        }

        // this.initBrandsSwiper();
    },

    appendNewItemsToSliderInstance: function ($swiper, items) {
        $swiper.appendSlide(items);
    },

    createSliderItemTemplate: function (data) {
        var items = [];

        $.each(data, function (k, v) {
            var tmpl =
                '<div class="swiper-slide">' +
                '<div class="c-product-box" > ' +
                '<a class="c-product-box__img js-url" href="' +
                v.url +
                '"> ' +
                '<img alt="' +
                v.title +
                '" src="' +
                v.image +
                '"> ' +
                "</a> " +
                '<div class="c-product-box__title" >' +
                v.title +
                "</div> " +
                '<div class="c-price"> ' +
                '<div class="c-price__value"> ' +
                v.defautlAmount +
                '<span class="c-price__currency">تومان</span> ' +
                "<del>" +
                v.defaultListPrice
                    ? v.defaultListPrice
                    : "" + "</del>" + "</div> ";

            if (v.discount && v.discount.length) {
                tmpl += '<div class="c-price__discount">';
                if (v.discount.type == "percent") {
                    tmpl += "%" + v.discount.value + "<span>تخفیف</span>";
                } else {
                    tmpl += v.discount.value + "<span>تومان</span>";
                }
                tmpl += "</div>";
            }
            tmpl += "</div></div>";

            items.push(tmpl);
        });

        return items;
    },

    initMainSearchBar: function () {
        var overlay = $(".js-navi-overlay"),
            searchInput = $(".js-search-input"),
            searchResults = $(".js-search-results"),
            searchKeyword = $(".js-search-keyword"),
            searchKeywordLink = $(".js-search-keyword-link"),
            lastSearchesElement = $('.js-last-searches'),
            lastSearchesElementItems = $('.js-last-searches-items'),
            lastSearches = window.Cookies.getJSON(Main.userSearchCookieKey),
            searchReset = $(".js-search-reset"),
            searchAdBanner = $('.js-search-ad-banner');

        var resultList = $(".js-autosuggest-results-list"),
            suggestionList = $(".js-results-list"),
            trendsList = $(".js-trends-results"),
            suggestionProductsList = $('.js-product-suggestions-list'),
            suggestionProductsListSwiper = $('.js-swiper-product-suggestions'),
            emptyList = $(".js-autosuggest-empty-list");

        var search = function (val) {
            if (!!val && val.length > 0) {
                if(isModuleActive('dk_insider_functions')) {
                    window.Insider && window.Insider.track({search_data: val})
                }
                window.location = (window.page_search_url || "/search/") + "?filter[search]=" + encodeURIComponent(val);
            }
        };

        var ServicesAutoSuggest = $.extend(false, Services, {
            ajaxBeforeSendCallback: function (jqXHR, settings) {
                settings.duplicateUrl = "/ajax/autosuggest/";
            }
        });

        var self = this;

        self.lastSearch = "";
        self.lastSearchResponse = null;
        self.lastFocusedItem = -1;

        if(lastSearches) {
            setSearchHistory(true, '');
        }

        function initLastSearchesTrashIcon () {
            $('.js-last-searches-trash-icon').on('click', function () {
                lastSearchesElement.hide();
                var filteredLastSearches = lastSearches.filter(function (item) {
                    return item && item.trim().indexOf(searchInput.val().trim()) === -1;
                });
                window.Cookies.set(Main.userSearchCookieKey, filteredLastSearches);
                lastSearches = filteredLastSearches;
                try {
                    ga('set', 'nonInteraction', true);
                    ga('send', 'event', {
                        eventCategory: 'Search box',
                        eventAction:'Click on Delete',
                    });
                }
                catch (e) {
                    //
                    console.warn(e);
                }
            });
        }

        function showTrends(trends_result) {
            trendsList.empty();
            if (window.trends_images) {
                $.map(trends_result, function (element) {
                    trendsList.append(
                        '<li>' +
                        '<img src="' + window.trends_images[element.label] + '" >' +
                        '<a  href="' + element.url + '">' + element.label + '</a>' +
                        '<a  href="' + element.url + '"></a>' +
                        '</li>'
                    )
                });
            } else {
                $.map(trends_result, function (element) {
                    trendsList.append(
                        '<li><a  href="' + element.url + '">' + element.label + "</a></li>"
                    );
                });
            }

            searchResults
                .addClass("is-active")
                .parent(".js-search")
                .addClass("is-active");

            setSearchHistory(false, searchInput.val().trim());

            overlay.addClass("is-active");
            overlay.on("click", function () {
                overlay.removeClass("is-active");
                searchResults
                    .removeClass("is-active")
                    .parent(".js-search")
                    .removeClass("is-active");
            });
            $(".js-autosuggest-empty-list").hide();
            $(".js-trends-results")
                .addClass("no-border")
                .show()
                .parent()
                .show();
        }

        function setSearchHistory(calledFromOnLoad, searchInputValue) {

            if (!calledFromOnLoad && !isModuleActive('dk_search_boxes')) return;

            var filteredLastSearches = [];
            var lastSearchesElementContainer;
            if (isModuleActive('dk_search_boxes')) {

                lastSearchesElementContainer = lastSearchesElementItems;
                lastSearchesElementContainer.empty();

                if (lastSearches && lastSearches.length) {
                    if (searchInputValue && searchInputValue.length && searchInputValue.trim().length) {
                        filteredLastSearches = lastSearches.filter(function (item) {
                            if (item && item.trim().indexOf(searchInputValue.trim()) !== -1) return true;
                            return false;
                        });
                    }
                    else {
                        filteredLastSearches = lastSearches;
                    }
                }
            }
            else {
                lastSearchesElementContainer = lastSearchesElement;
                filteredLastSearches = lastSearches.reverse();
            }

            $.map(filteredLastSearches, function(searchItem) {
                var queryParam = '?filter[search]=' + encodeURIComponent(searchItem),
                    searchUrl = [location.origin, 'search', queryParam].join("/");

                lastSearchesElementContainer.append(
                    '<li><a href="' +
                    searchUrl +
                    '"><span class="c-search__result-item c-search__result-icon c-search__result-icon--history">' +
                    searchItem +
                    '</span></a></li>'
                );
            });

            if (filteredLastSearches && filteredLastSearches.length > 0) {
                lastSearchesElement.show();
                lastSearchesElementItems.show();
            }
            else {
                lastSearchesElement.hide();
                lastSearchesElementItems.hide();
            }
        }

        searchInput.off();

        searchInput.on("click", function (e) {
            e.preventDefault();
            e.stopPropagation();
        });

        searchResults.on("click", function (e) {
            e.stopPropagation();
        });

        searchInput.on("focus click", function () {
            var trendsList = $(".js-trends-results");

            setSearchHistory(false, $(this).val().trim());

            if (
                $(this)
                    .val()
                    .trim().length === 0
            ) {
                suggestionList.hide().empty();
                resultList.hide().empty();
                if(isModuleActive('search_product_suggestions')) {
                    suggestionProductsList.hide().empty();
                    suggestionProductsListSwiper.hide();
                }
            }

            if (!!$(this).val() && $(this).val().length) {
                searchInput.trigger(jQuery.Event("keyup"));

                return;
            }

            if (!!self.trends && self.trends.length > 0) {
                showTrends(self.trends);
                return;
            }

            ServicesAutoSuggest.ajaxGETRequestJSON(
                "/ajax/autosuggest/",
                {
                    q: ""
                },
                function (data) {
                    if (!!data && "trends_result" in data) {
                        if (data.trends_result.length > 0) {
                            showTrends(data.trends_result);
                            self.trends = data.trends_result;
                        } else {
                            trendsList
                                .hide()
                                .parent()
                                .hide();
                        }
                    }
                },
                null,
                null,
                null,
                "execute"
            );

            if (isModuleActive('dk_banner_view_impression_event')) {
                setBannerViewImpressionEvent();
            }
        });

        $(".js-header-search-button, .js-search-keyword-link").on(
            "click",
            function () {
                var e = jQuery.Event("keyup");

                e.which = 13;
                e.keyCode = 13;
                searchInput.trigger(e);
            }
        );

        $(document).click(function () {
            searchResults
                .removeClass("is-active")
                .parent(".js-search")
                .removeClass("is-active");
            overlay.removeClass("is-active");
        });

        var up = 38,
            down = 40,
            esc = 27,
            ent = 13;

        UpdateInputReset();

        function UpdateInputReset() {
            if (searchInput.val()) {
                searchReset.removeClass("u-hidden");
                searchAdBanner.hide();
            } else {
                searchReset.addClass("u-hidden");
                searchAdBanner.show();
            }
        }

        function setBannerViewImpressionEvent() {
            var banner = searchAdBanner.find('.js-search-banner-ga');
            if(banner){
                var bannerId = banner.data('id');
                var observed = banner.data('observed');
                if(!bannerId || observed) return;
                var bannerData = Services.retrieveProductFromDataLayer({
                    productId: bannerId,
                    eventName: "eec.promoView",
                    pathArray: ['ecommerce','promoView','promotions']
                });
                if (bannerData){
                    $(this).data('observed' , 1);
                    ga("ec:addPromo", bannerData);
                }
            }
        }

        function initProductSuggestionsGA () {
            suggestionProductsList.on('click', 'a', function () {
                var productId = $(this).data('product-id');
                var productViewParams = {
                    product_id: productId,
                    type: 'autocomplete product'
                };
                try {
                    ga('set', 'nonInteraction', true);
                    ga('send', 'event', {
                        eventCategory: 'Search box',
                        eventAction:'Click on product suggestion',
                        eventLabel: productId
                    });
                    snt('dkProductViewed', productViewParams, true);
                }
                catch (e) {
                    //
                    console.warn(e);
                }
            })
        }

        if(isModuleActive('search_product_suggestions')) {
           initProductSuggestionsGA();
        }

        function initSeachGA () {
            lastSearchesElement.on('click', 'a', function () {
                try {
                    ga('set', 'nonInteraction', true);
                    ga('send', 'event', {
                        eventCategory: 'Search box',
                        eventAction:'Click on Search History',
                    });
                }
                catch (e) {
                    //
                    console.warn(e);
                }
            });


            resultList.on('click', 'a', function () {
                try {
                    if($(this).attr('href').indexOf('/brand/') != -1) {
                        ga('set', 'nonInteraction', true);
                        ga('send', 'event', {
                            eventCategory: 'Search box',
                            eventAction:'Click on Brands',
                        });
                    }
                    else {
                        ga('set', 'nonInteraction', true);
                        ga('send', 'event', {
                            eventCategory: 'Search box',
                            eventAction:'Click on Categories',
                        });
                    }
                }
                catch (e) {
                    //
                    console.warn(e);
                }
            });

            suggestionList.on('click', 'a', function () {
                try {
                    ga('set', 'nonInteraction', true);
                    ga('send', 'event', {
                        eventCategory: 'Search box',
                        eventAction:'Click on Keywords',
                    });
                }
                catch (e) {
                   //
                    console.warn(e);
                }
            });
        }

        if(isModuleActive('dk_search_boxes')) {
            initLastSearchesTrashIcon();
            initSeachGA();
        }

        searchReset.on("click", function () {
            searchInput.val("");
            UpdateInputReset();
        });

        searchInput.on("keyup focus", function () {
            UpdateInputReset();
        });

        var timeout = null;

        searchInput.on("keyup", function (e) {
            var searchInputValue = $(this).val();
            var searchInputValueL = searchInputValue.length;

            var processResponse = function (data) {
                self.lastSearch = data.query;
                self.lastSearchResponse = data;
                self.lastFocusedItem = -1;
                trendsList
                    .hide()
                    .parent()
                    .hide();
                if (!isModuleActive('dk_search_boxes')) {
                    lastSearchesElement
                        .hide();
                }

                if ("trends_result" in data && data.trends_result.length > 0) {
                    self.trends = data.trends_result;
                    showTrends(data.trends_result);
                }

                if (isModuleActive('search_product_suggestions')) {
                    if ("suggestion_products" in data && data.suggestion_products.length !== 0 && searchInputValueL > 2) {
                        suggestionProductsListSwiper.show();
                        suggestionProductsList.show().empty();
                        $.map(data.suggestion_products, function (element) {
                            suggestionProductsList.append(
                                '<li class="swiper-slide c-search__product-suggestions-list-item"><a href="' +
                                element.url +
                                '" class="u-flex u-justify-center u-items-center" data-product-id="' + element.id + '">' +
                                '<img class="c-search__product-suggestions-list-item-img" alt="' +
                                element.title.substr(0,40) +
                                '" src="' +
                                element.image +
                                '"> ' +
                                '<span class="c-search__product-suggestions-list-item-label">' +
                                element.title.substr(0,40) +
                                "</span></a></li>"
                            );
                        });
                        Main.initSwiper();
                    }
                    else {
                        suggestionProductsList.hide().empty();
                        suggestionProductsListSwiper.hide();
                    }
                }

                if (
                    "auto_complete" in data &&
                    "search_result" in data &&
                    "advance_links" in data
                ) {
                    if (
                        data.auto_complete.length === 0 &&
                        data.search_result.length === 0 &&
                        data.advance_links.length === 0
                    ) {
                        suggestionList.hide().empty();
                        resultList.hide().empty();
                        emptyList.show();
                    } else {
                        if (data.auto_complete.length > 0) suggestionList.empty().show();
                        if (data.search_result.length > 0 || data.advance_links.length > 0)
                            resultList.empty().show();

                        emptyList.hide();
                        if (window.isModuleActive("search_new_style")) {
                            $.map(data.advance_links, function (element) {
                                var smart_class, brand_image;
                                if (element.url.indexOf("/brand/") != -1) {
                                    smart_class = "c-search__result-icon--brand";
                                    brand_image =
                                        'style="background-image: url(' + element.icon_image + ');"';
                                } else {
                                    smart_class = "c-search__result-icon--group";
                                    brand_image = "";
                                }
                                resultList.append(
                                    '<li><a href="' +
                                    element.url +
                                    '"><span ' +
                                    brand_image +
                                    ' class="c-search__result-item c-search__result-icon ' +
                                    smart_class +
                                    '">' +
                                    element.title_prefix +
                                    ' </span><span class="c-search__result-item--category">' +
                                    element.title +
                                    "</span></a></li>"
                                );
                            });

                            $.map(data.search_result, function (element) {
                                resultList.append(
                                    '<li><a href="' +
                                    element.url +
                                    '"><span class="c-search__result-item c-search__result-icon c-search__result-icon--search">' +
                                    element.label +
                                    ' </span><span class="c-search__result-item--category">' +
                                    element.category_name +
                                    "</span></a></li>"
                                );
                            });

                            var classes = 'c-search__result-item c-search__result-icon'
                            if(isModuleActive('dk_search_boxes')) {
                                classes += ' c-search__result-icon--search c-search__result-icon--auto-complete'
                            }
                            $.map(data.auto_complete, function (element) {
                                suggestionList.append(
                                    '<li><a href="' +
                                    element.url +
                                    '"><span class="'+ classes +'">' +
                                    element.label +
                                    "</span></a></li>"
                                );
                            });
                        } else {
                            $.map(data.search_result, function (element) {
                                resultList.append(
                                    '<li><a href="' +
                                    element.url +
                                    '"><span class="c-search__result-item">' +
                                    element.label +
                                    ' </span><span class="c-search__result-item--category">' +
                                    element.category_name +
                                    "</span></a></li>"
                                );
                            });

                            $.map(data.advance_links, function (element) {
                                resultList.append(
                                    '<li><a href="' +
                                    element.url +
                                    '"><span class="c-search__result-item">' +
                                    element.title_prefix +
                                    ' </span><span class="c-search__result-item--category">' +
                                    element.title +
                                    "</span></a></li>"
                                );
                            });

                            $.map(data.auto_complete, function (element) {
                                suggestionList.append(
                                    '<li><a href="' +
                                    element.url +
                                    '">' +
                                    element.label +
                                    "</a></li>"
                                );
                            });
                        }
                    }
                } else {
                    suggestionList.hide().empty();
                    resultList.hide().empty();
                }
            };

            var key = e.which;

            if (key === up || key === down || key === esc) return;

            if (key === ent) {
                var val;
                if ((val = $(this).val())) {
                    search(val);
                }
            } else {
                setSearchHistory(false, searchInputValue);

                searchKeyword.text(searchInputValue);
                searchKeywordLink.attr("href", "/search/?filter[search]=" + searchInputValue);
                if (searchInputValueL > 1) {
                    if (searchResults.not(".is-active")) {
                        searchResults
                            .addClass("is-active")
                            .parent(".js-search")
                            .addClass("is-active");
                        overlay.addClass("is-active");
                    }
                    if (self.lastSearch === searchInputValue && !!self.lastSearchResponse)
                        return processResponse(self.lastSearchResponse);

                    if (timeout) clearTimeout(timeout);

                    timeout = setTimeout(function () {
                        ServicesAutoSuggest.ajaxGETRequestJSON(
                            "/ajax/autosuggest/",
                            {
                                q: searchInputValue
                            },
                            processResponse,
                            null,
                            null,
                            null,
                            "execute"
                        );
                    }, 400);
                } else if(!isModuleActive('dk_search_boxes')) {
                    searchResults
                        .removeClass("is-active")
                        .parent(".js-search")
                        .removeClass("is-active");
                    $(".js-autosuggest-results-list")
                        .hide()
                        .empty();
                    overlay.removeClass("is-active");
                }
            }
        });

        searchInput.on("keydown", function (e) {
            var key = e.which;

            if ([up, down, ent].indexOf(key) === -1) return;

            e.preventDefault();
            e.stopPropagation();

            var lists = resultList.find("li").add(suggestionList.find("li"));

            if (key === ent && lists.filter(".is-hover").length > 0) {
                searchInput.off("keyup");

                return (window.location.href = lists
                    .filter(".is-hover")
                    .find("a")
                    .attr("href"));
            } else if (key === ent) {
                return;
            }

            if (key === up || key === down) lists.removeClass("is-hover");

            var shouldGoTo = self.lastFocusedItem;

            if (key === up) {
                shouldGoTo = shouldGoTo - 1;
                if (shouldGoTo < 0) shouldGoTo = lists.length - 1;
            } else if (key === down) {
                shouldGoTo = (shouldGoTo + 1) % lists.length;
            }

            self.lastFocusedItem = shouldGoTo;

            var focusedItem = lists.eq(shouldGoTo);

            focusedItem.addClass("is-hover");
            searchInput.val(
                focusedItem.parent().is(suggestionList)
                    ? focusedItem.find("a").text()
                    : searchKeyword.text()
            );
        });
    },

    initLoginFormModal: function () {
        var $form = $("#loginFormModal");

        if (!$form.length) {
            return false;
        }

        $(".login-button-js").click(function () {
            if (!$form.valid()) {
                return false;
            }

            $.ajax({
                type: "POST",
                url: "/users/login/?json=1",
                success: function (response) {
                    if (response.status == "error") {
                        $("#loginFormError").show();

                        return false;
                    }

                    location.reload();
                },
                data: $form.serialize()
            });

            return false;
        });

        $form
            .find("input")
            .first()
            .focus();

        $form.validate({
            rules: {
                "login[email_phone]": {
                    required: true,
                    email_phone: true,
                    maxlength: 255
                },
                "login[password]": {
                    required: true,
                    minlength: 4,
                    maxlength: 50
                }
            },
            messages: {
                "login[email_phone]": {
                    required: 'ایمیل یا شماره موبایل را وارد نمایید',
                    email_phone: 'ایمیل یا شماره موبایل نامعتبر است',
                    maxlength: 'ایمیل طولانی است'
                },
                "login[password]": {
                    required: 'رمز عبور را وارد نمایید',
                    minlength: 'رمز عبور باید بیش از ۶ حرف یا عدد باشد',
                    maxlength: 'رمز عبور وارد شده طولانی است'
                }
            }
        });
    },

    ajaxError401Response: function () {
        this.getUser().showLoginForm();
    },

    initCart: function () {
        var userCart = [];

        if (this.user.isLogged()) {
            var $metaData = $("#topBarMeta");

            if (!$metaData.length) {
                return;
            }
            userCart = $metaData.data("cart_items");
        } else {
            var cartItemsCookie = window.Cookies.get("cart_items");

            if (cartItemsCookie) {
                userCart = $.parseJSON(cartItemsCookie);
            }
        }

        if (!!userCart && userCart.length > 0) {
            for (var i = 0; i < userCart.length; ++i) {
                userCart[i].item = "" + userCart[i].item;
            }
        }
    },

    initRemoveFromCart: function () {
        var thiz = this,
            cartButton = $(".c-header__btn-adding.js-dropdown-toggle");

        $(document).on("click", "#mini-cart", function (e) {
            e.stopPropagation();
        });

        $(document).on("click", ".js-mini-cart-remove-item", function (e) {
            e.preventDefault();

            var id = $(this).data("id");
            var productId = $(this).data("product");
            var variantId = $(this).data('variant');
            var variantData = $(this).data("enhanced-ecommerce");

            DKConfirm(
                'آیا مایل به حذف این کالا هستید؟',
                function () {
                    Services.ajaxGETRequestJSON(
                        '/ajax/cart/move/save-for-later/' + id + '/' + variantId + '/',
                        {},
                        function () {
                            window.location.reload();
                        },
                        function (data) {
                            if (data.error !== undefined) {
                                DKAlert(data.error[0]);
                            }
                        },
                        true,
                        true
                    );
                },
                function () {
                    Services.ajaxGETRequestJSON(
                        "/ajax/cart/remove/" + id + "/",
                        null,
                        function (response) {
                            if (window.location.pathname === "/cart/") {
                                window.location.reload();
                            }
                            $("#mini-cart").html(response.data);
                            thiz.initDropdownMenus();

                            window.cart = response.cartData;
                            Main.initProductCount();

                            var $productItem = $(
                                '.js-product-box[data-id="' +
                                productId +
                                '"], .js-product-attributes'
                            );

                            if ($productItem.length > 0) {
                                $productItem
                                    .find(".js-add-to-cart-container")
                                    .removeClass("is-added");
                                $productItem.find(".js-fast-shopping").removeClass("u-hidden");
                                $productItem.find(".js-add-to-cart").show();
                                $productItem.find(".js-select-quantity").hide();

                                // TODO fix PDP variants button
                                /*if (!!variants) {
                                                                                for (var key in variants) {
                                                                                    initQuickView(variants[key]);
                                                                                }
                                                                            }*/
                            }
                        },
                        function (data) {
                            if (data.errors !== undefined) {
                                DKAlert(data.errors);
                            }
                        },
                        false,
                        true
                    );

                    try {
                        // Google Analytics
                        ga("ec:addProduct", variantData);
                        ga("ec:setAction", "remove");
                        ga(
                            "send",
                            "event",
                            "ecommerce",
                            "remove from cart",
                            "remove from mini cart"
                        );
                    } catch (e) {
                    }
                    // Adro Retargeting
                    // if (window.adroRCActivation)
                    //     window.StickyRetargeting.EventListener(
                    //         window.StickyRetargeting.Clear_Products.bind(
                    //             window.StickyRetargeting,
                    //             [productId]
                    //         )
                    //     );
                },
                'انتقال به لیست خرید بعدی',
                'حذف'
            );
        });
    },

    initProductCount: function(){
        if(!window.cart || !window.productId) return;
        var productCount = $('.js-product-quantity');
        var cart = window.cart.products;
        var productId = window.productId;
        if(!productCount || !cart || !productId || !cart[productId] ) return;
        var count = cart[productId].quantity;
        if(!count) {
            $('.js-product-quantity-holder').addClass('u-hidden');
            $('.js-product-counter-holder').addClass('u-hidden');
            $('.js-product-atc-holder').removeClass('u-hidden');
            return
        }
        if(count == 1){
            $('.js-product-counter-holder').addClass('u-hidden');
            $('.js-product-quantity-holder').removeClass('u-hidden');
            $('.js-product-atc-holder').addClass('u-hidden');
            $('.js-product-counter-minus').addClass('u-hidden');
            $('.js-product-counter-trash').removeClass('u-hidden');
        }
        productCount.text(Services.convertToFaDigit(count));
    },

    initFooter: function () {
        $("#enamad").on("click", function (e) {
            e.preventDefault();
            window.open(
                "https://trustseal.enamad.ir/Verify.aspx?id=19077&p=nbpdjzpgdrfsqgwlqgwl",
                "Popup",
                "toolbar=no, location=no, statusbar=no, menubar=no, scrollbars=1, resizable=0, width=580, height=600, top=30"
            );
        });

        $("#resaneh").on("click", function (e) {
            e.preventDefault();
            window.open(
                "https://logo.samandehi.ir/Verify.aspx?id=28177&p=uiwkmcsirfthjyoejyoe",
                "Popup",
                "toolbar=no, scrollbars=no, location=no, statusbar=no, menubar=no, resizable=0, width=450, height=630, top=30"
            );
        });

        $("#js-footer-readmore").on("click", function (e) {
            e.preventDefault();
            var readMoreContentElem = $("#js-footer-readmore-content");

            if (readMoreContentElem.is(":visible")) {
                readMoreContentElem.hide();
                $(this).text("مشاهده بیشتر");
            } else {
                readMoreContentElem.show();
                $(this).text("بستن");
            }
        });

        $("#js-jump-to-top").on("click", function (e) {
            e.preventDefault();
            // $("html,body").animate({scrollTop: 0}, 500);
            $("html,body").scrollTop(0);
        });

        if(isModuleActive('dk_new_footer')) {
            var submitBtn = $('#btnSubmitNewsletterSubscription');
            $('.js-news-letter-subscription-input').keyup(function () {
                var value = $(this).val()
                if (!value) {
                    submitBtn.addClass('c-new-footer__newsletter-send-btn--disabled');
                    submitBtn.removeClass('c-new-footer__newsletter-send-btn--active');
                    return
                }
                submitBtn.removeClass('c-new-footer__newsletter-send-btn--disabled');
                submitBtn.addClass('c-new-footer__newsletter-send-btn--active');
            })
        }

    },

    initDropdownMenus: function () {
        var dropDowns = $(".js-dropdown-toggle");
        var notifAnimation = $(".js-notif-animation");

        dropDowns.off("click");
        dropDowns.on("click", function (e) {
            e.preventDefault();
            e.stopPropagation();
            if (isModuleActive('new_desktop_header')) {
                $('.js-dropdown-toggle.open, .js-dropdown-container.open').removeClass('open');
            }

            $(".js-dropdown-menu")
                .not($(this).next(".js-dropdown-menu"))
                .hide();
            if (
                $(this)
                    .next(".js-dropdown-menu")
                    .is(":visible")
            ) {
                $(this)
                    .next(".js-dropdown-menu")
                    .hide();
                if (isModuleActive('new_desktop_header')) {
                    $(this).closest('.js-dropdown-container').removeClass('open');
                }
                notifAnimation.removeClass(
                    "c-header__btn-user--has-notif-no-animation"
                );
            } else {
                notifAnimation
                    .before()
                    .addClass("c-header__btn-user--has-notif-no-animation");
                $(this)
                    .next(".js-dropdown-menu")
                    .show();
                if (isModuleActive('new_desktop_header')) {
                    $(this).closest('.js-dropdown-container').addClass('open');
                }
            }
        });

        $(document).click(function () {
            jQuery(".js-dropdown-menu").hide();
            $(".js-notif-animation").removeClass(
                "c-header__btn-user--has-notif-no-animation"
            );

            if (isModuleActive('new_desktop_header')) {
                $('.js-dropdown-toggle.open, .js-dropdown-container.open').removeClass('open');
            }
            /*/!* Close variants dropdown on document click *!/
                              if (window.isModuleActive('product_redesign')) {
                                  e.stopPropagation();

                                  var $moreVariants = $('.js-more-variants-button');

                                  if ($moreVariants.has(e.target).length === 0
                                      && !$moreVariants.is($(e.target))) {
                                      $('.js-product-variants').hide();
                                  }
                              }*/
        });
    },

    initResetModalForm: function () {
        $(document).on("opening", "[data-remodal-id]", function () {
            if ($(this).find("form").length) {
                // $(this).find('form').validate().resetForm();
                $(".js-valid-row .error").removeClass("error");
                $(".js-valid-row, .selectric-wrapper").removeClass("has-error");
                // $('.js-ui-select').prop('selectedIndex', 0).selectric('refresh');
            }
        });
    },

    renderMaskText: function () {
        if(isModuleActive('new_pdp_review')) {

            var maskWrapper = $(".js-mask");
            maskWrapper.each(function () {
                var thiz = $(this),
                    text = thiz.find(".js-mask__text"),
                    handler = thiz.find(".js-mask-handler-btn");

                text.addClass('is-active');
                var finalHeight = $('.js-mask__text').innerHeight();
                if(finalHeight > 260){
                    text.removeClass('is-active');
                    handler.removeClass('u-hidden');
                } else {
                    handler.addClass('u-hidden');
                }

                handler.on('click', function (event) {
                    event.preventDefault();
                    text.toggleClass('is-active');
                    handler.toggleClass('is-active');
                    if (text.hasClass('is-active')) {
                        handler.text('مشاهده کمتر');
                    } else {
                        handler.text('ادامه مطلب');
                    }
                })
            })

        } else {
            var $maskWrapper = $(".js-mask");

            $maskWrapper.each(function () {
                var $this = $(this),
                    $text = $this.find(".js-mask__text"),
                    $handler = $this.find(".js-mask_handler"),
                    $open = $this.find(".js-mask_open");

                if ($this.is(".is-masked")) return;

                var maxHeight = 0;

                try {
                    maxHeight = parseInt($text.css("max-height").replace("px", ""));
                } catch (e) {
                    maxHeight = 0;
                }
                $text.css("max-height", "unset");
                $text.css("height", "unset");
                var height = $text.outerHeight();

                if (height <= maxHeight) return;
                $text.css("max-height", maxHeight);
                $this.addClass("is-masked");
                $handler.show();
                $handler.on("click", function (e) {
                    var _this = $(this);

                    e.preventDefault();
                    $text.toggleClass("is-active");
                    _this.toggleClass("is-active");
                    if (!_this.hasClass("is-active")) {
                        $text.css("max-height", maxHeight);
                        _this.text(_this.data('close-text') ? _this.data('close-text') : 'ادامه مطلب');
                    } else {
                        $text.css("max-height", "unset");
                        _this.text(_this.data('open-text') ? _this.data('open-text') : 'بستن');
                    }
                });
                $open.on('click', function (e) {
                    var _this = $(this);

                    e.preventDefault();
                    $text.addClass("is-active");
                    _this.addClass("is-active");
                    _this.addClass("u-hidden");
                })
            });
        }
    },

    convertToFaDigit: function (a) {
        var b = a;

        for (var c = 48; c <= 57; c++) {
            var d = String.fromCharCode(c);
            var e = String.fromCharCode(c + 1728);

            b = b.replace(new RegExp(d.toString(), "g"), e.toString());
        }

        return b;
    },

    initGeneralInformationModal: function () {
        var generalInformationModal = $("[data-remodal-id=information]").remodal();
        var generalInformationModalDom = $("[data-remodal-id=information]");

        window.DKAlert = function (message, buttonText, extraClass, buttonCallback) {
            message = message || "";
            buttonText = buttonText || "باشه";
            extraClass = extraClass || "";

            generalInformationModalDom.addClass(extraClass);

            var modalText = $(".js-remodal-general-information__text"),
                modalApprove = $(".js-remodal-general-information__button--approve");

            modalText.html(Services.nl2br(message));
            modalApprove.text(buttonText);

            modalApprove.on("click", function () {
                generalInformationModal.close();
                if(buttonCallback)
                    buttonCallback();
            });
            generalInformationModal.open();
        };
    },

    initGeneralAlertModal: function () {
        var generalAlertModal = $("[data-remodal-id=alert]").remodal();

        window.DKConfirm = function (
            message,
            approveCallback,
            rejectCallback,
            approveText,
            rejectText,
            description
        ) {
            message = message || "";
            approveCallback = approveCallback || function () {};
            rejectCallback = rejectCallback || function () {};
            approveText = approveText || "بله";
            rejectText = rejectText || "خیر";

            var modalText = $(".js-remodal-general-alert__text"),
                modalCancel = $(".js-remodal-general-alert__button--cancel"),
                modalApprove = $(".js-remodal-general-alert__button--approve"),
                modalDescription = $(".js-remodal-general-alert__description");

            if (description) {
                modalDescription.text(description);
                modalDescription.show();
            } else {
                modalDescription.hide();
            }

            modalText.text(message);
            modalCancel.text(rejectText);
            modalApprove.text(approveText);

            modalCancel.off("click");
            modalApprove.off("click");

            modalCancel.on("click", function () {
                generalAlertModal.close();
                rejectCallback();
            });
            modalApprove.on("click", function () {
                generalAlertModal.close();
                approveCallback();
            });
            generalAlertModal.open();
        };
    },

    initErrorMessages: function () {
        var errorButton = $(".js-message-error-button");

        errorButton.on("click", function () {
            $(this)
                .closest(".js-message-error")
                .hide();
        });

        $(".js-notice-button").on("click", function () {
            $(this)
                .closest(".js-notice")
                .hide();
            if (this.timer) clearTimeout(this.timer);
        });

        $(".js-notice").each(function (index, item) {
            this.timer = setTimeout(function () {
                $(item).fadeOut(300);
            }, 4000);
        });
    },

    initBackButtons: function () {
        var documentReferrer = document.referrer;
        var referrerHost = !!documentReferrer
            ? $("<a>")
                .prop("href", documentReferrer)
                .prop("hostname")
            : "";
        var referrerPort = !!documentReferrer
            ? $("<a>")
                .prop("href", documentReferrer)
                .prop("port")
            : "";
        var backButtonIsActive =
            location.hostname + location.port === referrerHost + referrerPort;
        var $backButton = $(".js-back-history-button");

        if (!backButtonIsActive) {
            $backButton.addClass("disabled");
        }
        $backButton.on("click", function () {
            if (backButtonIsActive) {
                window.history.back();
            }
        });
    },

    initFastShoppingConfirmModal: function () {
        var fastShoppingConfirmModal = $(
            '[data-remodal-id="fmcg-modal"]'
        ).remodal();

        window.fastShoppingConfirm = function (
            approveCallback,
            rejectCallback,
            approveText,
            rejectText
        ) {
            approveCallback = approveCallback || function () {
            };
            rejectCallback = rejectCallback || function () {
            };
            approveText = approveText || "بله";
            rejectText = rejectText || "خیر";

            var modalCancel = $(".js-fmcg-modal-reject"),
                modalApprove = $(".js-fmcg-modal-approve");

            modalCancel.text(rejectText);
            modalApprove.text(approveText);

            modalCancel.off("click");
            modalApprove.off("click");

            modalCancel.on("click", function () {
                fastShoppingConfirmModal.close();
                rejectCallback();
            });
            modalApprove.on("click", function () {
                fastShoppingConfirmModal.close();
                approveCallback();
            });
            fastShoppingConfirmModal.open();
        };
    },

    initQuickView: function () {
        var thiz = this;

        $(document).on("click", ".js-quick-view-more-variants-button", function () {
            var variants = $(this)
                .closest(".js-product-variants")
                .find(".js-c-ui-variant--extra");

            variants.toggleClass("c-ui-variant--hide");
            if (variants.hasClass("c-ui-variant--hide")) {
                $(this).text(
                    "+ " + $(this).data("length") + " " + $(this).data("title") + " دیگر"
                );
            } else {
                $(this).text("نمایش کمتر");
            }
        });

        thiz.quickViewCacheEnabled = false;
        thiz.quickViewCache = {};

        if (thiz.quickViewCacheEnabled) {
            $(document).on("closed", "[data-remodal-id=quick-view]", function () {
                var $this = $(this),
                    s = $this.find("select"),
                    sv = s.val();

                $this.find("option").attr("selected", false);
                $this.find('option[value="' + sv + '"]').attr("selected", true);
                $this.find(".js-ui-select").selectric("destroy");
                thiz.quickViewCache[thiz.targetProductId] = $this
                    .find(".js-quick-view-section")
                    .html();
            });
        }

        $(document).on("click", ".js-fast-shopping.has-more .js-add-to-cart-container", function (e) {
            var $this = $(this),
                $productBox = $this.closest('.js-fast-shopping.has-more');

            e.stopPropagation();
            e.preventDefault();

            if (
                $productBox.hasClass("js-fast-shopping-confirm") &&
                $productBox.find(".is-added").length === 0 &&
                !Services.checkCookie(thiz.fastShoppingConfirmCookieName)
            ) {
                window.fastShoppingConfirm(
                    function () {
                        thiz.handleQuickView($productBox);
                        Services.setCookie(thiz.fastShoppingConfirmCookieName, "yes", 30);
                    },
                    function () {
                    }
                );
            } else {
                thiz.handleQuickView($productBox);
            }
        });
    },

    handleQuickView: function (productElement) {
        var thiz = this;

        thiz.targetElement = productElement;
        thiz.targetProductId = productElement.data("id");

        var productId = productElement.data("id");

        if (thiz.quickViewCacheEnabled && !!thiz.quickViewCache[productId]) {
            var $quickViewSection = $(".js-quick-view-section");

            $quickViewSection.html(thiz.quickViewCache[productId]);
            var a = $quickViewSection.empty().append(thiz.quickViewCache[productId]);

            a.find("select").val(a.find("option[selected]").attr("value"));
            $quickViewSection.find("select").selectric("init");
            $("[data-remodal-id=quick-view]")
                .remodal()
                .open();

            return;
        }

        Services.ajaxGETRequestJSON(
            "/ajax/product/quick-view/" + productId + "/",
            {},
            function (response) {
                var _quickViewSection = $(".js-quick-view-section");

                _quickViewSection.html(response.html);
                if (thiz.quickViewCacheEnabled) {
                    thiz.quickViewCache[productId] = response.html;
                }
                _quickViewSection.find("select").selectric("init");
                $("[data-remodal-id=quick-view]")
                    .remodal()
                    .open();
            },
            function (response) {
                DKAlert(response.message);
                if (thiz.targetElement.find(".js-price-value").length > 0) {
                    thiz.targetElement
                        .find(".js-price-value")
                        .text('ناموجود')
                        .css("color", "#ABABAB");
                }

                if (thiz.targetElement.find(".js-fresh-badge").length > 0) {
                    thiz.targetElement.find(".js-fresh-badge").remove();
                }
            },
            false,
            true
        );
    },

    initAddToCart: function () {
        var thiz = this;

        $(document).on("click", ".js-product-add-to-card", function (e) {
            e.preventDefault();
            var $this = $(this);
            if (
                $this.hasClass("js-fast-shopping-confirm") && !$this.hasClass("is-added") &&
                !Services.checkCookie(thiz.fastShoppingConfirmCookieName)
            ) {
                window.fastShoppingConfirm(
                    function () {
                        thiz.handleListPageAddToCart($this);
                        Services.setCookie(thiz.fastShoppingConfirmCookieName, "yes", 30);
                    },
                    function () {
                    }
                );
            } else {
                thiz.handleListPageAddToCart($this);
            }

            try {
                var $productLink, $productImage, $itemEnhancedEcommerce, $productBox;

                if ($(this).data("enhanced-ecommerce")) {
                    $productBox = $(this).closest(".c-quick-view__content");

                    $productLink = $productBox
                        .find(".c-quick-view__details")
                        .find(".c-quick-view__show-full-container")
                        .find("a")
                        .attr("href");
                    $productImage = $productBox
                        .find(".c-quick-view__image-wrapper")
                        .find("img")
                        .attr("src");
                    $itemEnhancedEcommerce = $(this).data("enhanced-ecommerce");
                } else {
                    $productBox = $(this).closest(".js-product-box");

                    $itemEnhancedEcommerce = $productBox.data("enhanced-ecommerce");
                    var $aTagProductBox = $productBox.find(".js-product-item");

                    $productLink = $aTagProductBox.attr("href");
                    $productImage = $aTagProductBox.find("img").attr("src");
                }
                adro("event", "cart.item_added");
                adro("tag", "cart.item.name", $itemEnhancedEcommerce.id);
                adro("tag", "cart.item.code", $itemEnhancedEcommerce.name);
                adro("tag", "cart.item.link", $productLink);
                adro("tag", "cart.item.image", $productImage);

            } catch (error) {
                //ignore adro tag
            }
        });

        $(document).on("click", ".js-product-page-add-to-card", function (e) {
            e.preventDefault();
            var $this = $(this);

            if (
                $this
                    .parent(".js-add-to-cart-container")
                    .hasClass("js-fast-shopping-confirm") &&
                !$this.parent(".js-add-to-cart-container").hasClass("is-added") &&
                !Services.checkCookie(thiz.fastShoppingConfirmCookieName)
            ) {
                window.fastShoppingConfirm(
                    function () {
                        thiz.handleProductPageAddToCart($this);
                        Services.setCookie(thiz.fastShoppingConfirmCookieName, "yes", 30);
                    },
                    function () {
                    }
                );
            } else {
                thiz.handleProductPageAddToCart($this);
            }

            if (window.ecpd2 && window.adro) {
                adro("event", "cart.item_added");
                adro("tag", "cart.item.name", window.ecpd2.title);
                adro("tag", "cart.item.code", window.ecpd2.id);
                adro("tag", "cart.item.link", window.ecpd2.product_url);
                adro("tag", "cart.item.image", window.ecpd2.image_url);
            }
        });

        $(document).on("click", ".js-mini-add-to-cart", function (e) {
            e.preventDefault();
            var $this = $(this);

            if(isModuleActive('data_layer') && window.IndexAction) {
                var productId = $this.data('product-id');

                window.IndexAction.setGAAddToCartImpressionEvent(productId);
            }

            if(isModuleActive('lazy_actions')) {
                $this.css('pointer-events', 'none');
                setTimeout(function(){
                    $this.css('pointer-events', 'auto');
                }, 5000);
            }

            $(location).attr("href", $(this).attr("href"));
        });

        $(document).on("click", ".js-product-quick-filter", function (e) {
            var $this = $(this);

            e.stopPropagation();
            e.preventDefault();

            var productId = $this.data("product");
            var variantId = $this.data("variant");
            var dropUpContainer = $this.closest(".is-detailed");

            dropUpContainer.fadeTo(250, 0.3);
            Services.ajaxGETRequestHTML(
                "/ajax/product/quick-view/" + productId + "/?variant_id=" + variantId,
                {},
                function (html) {
                    var section = $(".js-quick-view-section");

                    section.html(html.data.html);
                    section.find("select").selectric("init");
                },
                false,
                false
            );
        });

        $(document).on("change", ".js-quick-add-to-cart, .js-quick-carousel-add-to-cart", function () {
            var $this = $(this);
            thiz.targetElement = $this;
            var quantity = parseInt(
                $this.val() || $this.find("option:selected").attr("value")
            );
            var variantId = $this.data("variant");
            var selectCounter = $this.parent('.js-fresh-select-counter');
            var addBtn = $this.closest('.js-fresh-add-container').find('.js-fresh-add-to-cart');
            var productCartNotice = $this.closest('.js-product-cart').find('.js-product-card-added-notice');

            if (quantity === 0) {
                DKConfirm(
                    'آیا مایل به حذف این کالا هستید؟',
                    function () {
                        Services.ajaxGETRequestJSON(
                            "/ajax/cart/remove/" + $this.data("cart-item") + "/" + "?is_quick_view=true",
                            {},
                            function (response) {

                                if(productCartNotice.length > 0){
                                    productCartNotice.addClass('u-hidden');
                                }
                                selectCounter.addClass('u-hidden');
                                addBtn.removeClass('u-hidden');

                                if(isModuleActive('data_layer')) {
                                    Main.setImpressionEventOnAjax(response.data_layer);
                                }

                                $this.data("mode", "add");
                                // $(':selected', $this).addClass('u-hidden');

                                window.cart = response.cartData;

                                Main.initProductCount();
                                $('.js-product-quantity-holder').addClass('u-hidden');
                                $('.js-product-atc-holder').removeClass('u-hidden');


                                /*if (!!window.cart.itemCount) {
                                                                                $('.js-cart-count').attr('data-counter', Services.convertToFaDigit(window.cart.itemCount));
                                                                            } else {
                                                                                $('.js-cart-count').attr('data-counter', Services.convertToFaDigit(0));
                                                                            }*/

                                var $parent = $this.closest(
                                    ".js-fast-shopping, .js-add-to-cart-container"
                                );

                                $parent.removeClass("is-added");
                                $parent.find(".js-select-quantity, .js-quick-carousel-add-to-cart").hide();
                                $parent.find(".js-select-quantity select, .js-quick-carousel-add-to-cart select").selectric({forceRenderAbove: true, maxHeight: 230});
                                $parent
                                    .find(".js-product-add-to-card")
                                    .show()
                                    .css("display", "inline-flex");
                                $parent.find(".js-product-page-add-to-card").show();

                                $parent.find(".js-added-notice").addClass("u-hidden");
                                $parent.find(".js-existing-notice").addClass("u-hidden");

                                thiz.updateQuickViewProduct(response);
                                thiz.updateMiniCart(response);

                                /*if (!!window.cart.variants[variantId] && !!thiz.quickViewCache[window.cart[variantId].productId]) {
                                                                                delete thiz.quickViewCache[window.cart[variantId].productId];
                                                                            }*/
                                if (
                                    $this.hasClass("is-plp") ||
                                    $this.hasClass("is-quick-view")
                                ) {
                                    var enhancedEcommerce = $this.data("enhanced-ecommerce") || {};

                                    enhancedEcommerce.quantity = 0;

                                    try {
                                        ga("ec:addProduct", enhancedEcommerce);
                                        ga("ec:setAction", "remove");
                                        ga(
                                            "send",
                                            "event",
                                            "ecommerce",
                                            "remove from cart",
                                            $this.hasClass("is-quick-view")
                                                ? "Remove from quick view"
                                                : "Remove directly from PLP"
                                        );
                                    } catch (e) {
                                    }
                                }
                            },
                            function (response) {
                                if (response.errors !== undefined) {
                                    DKAlert(response.errors);
                                }
                            },
                            false,
                            true
                        );
                    },
                    function () {
                        $this
                            .closest(".js-select-quantity, .js-quick-carousel-add-to-cart")
                            .find("select")
                            .val(window.cart.variants[variantId].quantity);
                        $this
                            .closest(".js-select-quantity, .js-quick-carousel-add-to-cart")
                            .find("select")
                            .selectric({forceRenderAbove: true, maxHeight: 230});
                    }
                );

                return;
            }

            var url =
                $this.data("mode") === "add"
                    ? "/cart/add/" + variantId + "/" + quantity + "/?is_quick_view=true"
                    : "/cart/change/" + variantId + "/" + quantity + "/?is_quick_view=true";

            Services.ajaxGETRequestJSON(
                url,
                {},
                function (response) {

                    if(isModuleActive('data_layer')) {
                        Main.setImpressionEventOnAjax(response.data_layer);
                    }
                    // $('.u-hidden', $this).removeClass('u-hidden');
                    $this.data("mode", "change");
                    $this.data("cart-item", response.cartItemId);
                    window.cart = response.cartData;

                    Main.initProductCount();

                    $(".js-added-notice").removeClass("u-hidden");
                    $(".js-existing-notice").addClass("u-hidden");

                    /*if (!!response.cartData.itemCount) {
                                                      $('.js-cart-count').attr('data-counter', Services.convertToFaDigit(window.cart.itemCount));
                                                  } else {
                                                      $('.js-cart-count').attr('data-counter', Services.convertToFaDigit(0));
                                                  }*/

                    thiz.updateQuickViewProduct(response);
                    thiz.updateMiniCart(response);

                    // $this.hasClass('js-ab-open-also_bought_modal') && // condition for ab test
                    if(isModuleActive('also_bought_modal') && $('.js-also-bought-modal').length > 0) {
                        $('.js-also-bought-modal').remodal().open();
                        Main.initSwiper();
                        try {
                            ga('set', 'nonInteraction', true);
                            ga('send', 'event', {
                                eventCategory: 'product_page',
                                eventAction: 'fresh popup view'
                            });
                        } catch (e) {
                            console.warn("GA Error: Also Bought Modal")
                        }
                    }
                },
                function (response) {
                    if (response.errors !== undefined) {
                        DKAlert(response.errors);
                        thiz.updateQuickViewProductError();
                    }
                },
                false,
                false
            );
            if ($(this).hasClass("is-plp") || $(this).hasClass("is-quick-view")) {
                var enhancedEcommerce = $this.data("enhanced-ecommerce") || {};

                var gaDimensionData = {
                    "page-path": window.decodeURI(document.URL),
                    "referrer-path": window.decodeURI(document.referrer),
                    "user-id": window.userId,
                    "variant-id": variantId,
                    "cart-id": typeof window.cart == "undefined" ? "" : window.cart.cartId
                };

                if (enhancedEcommerce.quantity === 0 && quantity === 1) {
                    enhancedEcommerce.quantity = quantity;
                    try {
                        ga("ec:addProduct", enhancedEcommerce);
                        ga("ec:setAction", "add");
                        ga("set", "dimension5", JSON.stringify(gaDimensionData));
                        ga(
                            "send",
                            "event",
                            "ecommerce",
                            "add to cart",
                            $(this).hasClass("is-quick-view")
                                ? "Add from quick view"
                                : "Add directly from PLP"
                        );
                    } catch (e) {
                    }
                } else if (enhancedEcommerce.quantity < quantity) {
                    enhancedEcommerce.quantity = quantity;
                    try {
                        ga("ec:addProduct", enhancedEcommerce);
                        ga("ec:setAction", "add");
                        ga("set", "dimension5", JSON.stringify(gaDimensionData));
                        ga(
                            "send",
                            "event",
                            "ecommerce",
                            "add to cart",
                            $(this).hasClass("is-quick-view")
                                ? "Add quantity from quick view"
                                : "Add quantity from PLP"
                        );
                    }catch (e) {
                    }
                } else {
                    enhancedEcommerce.quantity = quantity;
                    try {
                        ga("ec:addProduct", enhancedEcommerce);
                        ga("ec:setAction", "remove");
                        ga(
                            "send",
                            "event",
                            "ecommerce",
                            "remove from cart",
                            $(this).hasClass("is-quick-view")
                                ? "Remove quantity from quick view"
                                : "Remove quantity from PLP"
                        );
                    } catch (e) {
                    }
                }
            }
        });

        $(document).on("click", ".js-mini-buy-box-product-counter", function () {
            var $this = $(this);
            thiz.targetElement = $('.js-product-summary');
            var quantity = parseInt($this.data('value'));
            var variantId = $this.data("variant");
            var mode = $this.data("mode");
            var cartItem = $this.data("id");
            $('.js-current-quantity').data('status' , 'general');
            if(!cartItem || !variantId) return;

            if (quantity === 0) {
                DKConfirm(
                    'آیا مایل به حذف این کالا هستید؟',
                    function () {
                        Services.ajaxGETRequestJSON(
                            "/ajax/cart/remove/" + cartItem + "/" + "?is_quick_view=true",
                            {},
                            function (response) {
                                if(isModuleActive('data_layer')) {
                                    Main.setImpressionEventOnAjax(response.data_layer);
                                }

                                window.cart = response.cartData;

                                Main.initProductCount();
                                $('.js-current-quantity').data('status' , 'removed');
                                $('.js-product-counter-holder').addClass('u-hidden');
                                $('.js-product-quantity-holder').addClass('u-hidden');
                                $('.js-product-atc-holder').removeClass('u-hidden');
                                $('.js-mini-add-to-cart').removeClass('u-hidden');

                                var $parent = $('.js-product-summary').find(
                                    ".js-fast-shopping, .js-add-to-cart-container"
                                );
                                $parent.removeClass("is-added");
                                $parent.find(".js-select-quantity, .js-quick-carousel-add-to-cart").hide();
                                $parent.find(".js-select-quantity select, .js-quick-carousel-add-to-cart select").selectric({forceRenderAbove: true, maxHeight: 230});
                                $parent
                                    .find(".js-product-add-to-card")
                                    .show()
                                    .css("display", "inline-flex");
                                $(".js-product-page-add-to-card").show();

                                $(".js-added-notice").addClass("u-hidden");
                                $(".js-existing-notice").addClass("u-hidden");

                                thiz.updateQuickViewProduct(response);
                                thiz.updateMiniCart(response);

                            },
                            function (response) {
                                if (response.errors !== undefined) {
                                    DKAlert(response.errors);
                                }
                            },
                            false,
                            true
                        );
                    },
                    function () {
                        var box = $('.js-product-summary');
                        box.find("select").val(window.cart.variants[variantId].quantity);
                        box.find("select").selectric("init");
                    }
                );
                return;
            }

            var currentQuantity = $('.js-current-quantity').text();
            var newQuantity = parseInt(Services.convertToEnDigit(currentQuantity));

            if(mode === "add"){
                $('.js-product-counter-minus').removeClass('u-hidden');
                $('.js-product-counter-trash').addClass('u-hidden');
            }

            var url = mode === "add" ?
                "/cart/add/" + variantId + "/" + 1 + "/?is_quick_view=true":
                mode === "minus" ?
                "/cart/change/" + variantId + "/" + (newQuantity-1) + "/?is_quick_view=true" : "";

            Services.ajaxGETRequestJSON(
                url,
                {},
                function (response) {
                    if(isModuleActive('data_layer')) {
                        Main.setImpressionEventOnAjax(response.data_layer);
                    }
                    $this.data("cart-item", response.cartItemId);
                    window.cart = response.cartData;

                    Main.initProductCount();

                    $(".js-added-notice").removeClass("u-hidden");
                    $(".js-existing-notice").addClass("u-hidden");

                    thiz.updateQuickViewProduct(response);
                    thiz.updateMiniCart(response);

                    // $this.hasClass('js-ab-open-also_bought_modal') && // condition for ab test
                    if(isModuleActive('also_bought_modal') && $('.js-also-bought-modal').length > 0) {
                        $('.js-also-bought-modal').remodal().open();
                        Main.initSwiper();
                        try {
                            ga('set', 'nonInteraction', true);
                            ga('send', 'event', {
                                eventCategory: 'product_page',
                                eventAction: 'fresh popup view'
                            });
                        } catch (e) {
                            console.warn("GA Error: Also Bought Modal")
                        }
                    }
                },
                function (response) {
                    if (response.errors !== undefined) {
                        DKAlert(response.errors);
                        thiz.updateQuickViewProductError();
                    }
                },
                false,
                true
            );
        });

        $(document).on('click', '.js-fresh-add-to-cart', function (event) {
            event.preventDefault();
            var $this = $(this);
            var variantId = $this.data('variant');
            var selectCounter = $this.parent('.js-fresh-add-container').find('.js-fresh-select-counter');

            Services.ajaxGETRequestJSON(
                "/cart/add/" + variantId + "/" + 1 + "/?is_quick_view=true",
                {},
                function (response) {
                    if(isModuleActive('data_layer')) {
                        Main.setImpressionEventOnAjax(response.data_layer);
                    }

                    $this.data("cart-item", response.cartItemId);
                    $this.data("mode", "change");
                    window.cart = response.cartData;

                    Main.initProductCount();

                    $this.addClass("u-hidden");
                    selectCounter.removeClass('u-hidden');

                    thiz.updateQuickViewProduct(response);
                    thiz.updateMiniCart(response);

                    window.location.reload();
                },
                function (response) {
                    if (response.errors !== undefined) {
                        DKAlert(response.errors);
                        thiz.updateQuickViewProductError();
                    }
                },
                false,
                true
            );

        })
    },

    handleListPageAddToCart: function (buttonElement) {
        // buttonElement.closest('.js-add-to-cart-container').addClass('is-added');
        var select = buttonElement.parent().find(".js-select-quantity select, .js-quick-carousel-add-to-cart select");
        buttonElement.hide();
        select.val(
            select
                .find("option")
                .eq(1)
                .attr("value")
        );
        buttonElement
            .parent()
            .find(".js-select-quantity, .js-quick-carousel-add-to-cart")
            .show()
            .css("display", "flex");
        select.change();
        select.selectric({forceRenderAbove: true, maxHeight: 230});
    },

    handleProductPageAddToCart: function (buttonElement) {
        buttonElement
            .parent()
            .find(".js-select-quantity, .js-quick-carousel-add-to-cart")
            .show()
            .css("display", "flex");
        var select = buttonElement.parent().find(".js-select-quantity select, .js-quick-carousel-add-to-cart select");

        buttonElement.hide();
        select.val(
            select
                .find("option")
                .eq(1)
                .attr("value")
        );
        $('.js-mini-buy-box').find('.js-mini-add-to-cart').addClass('u-hidden');
        // buttonElement.parent().find('.js-select-quantity').show().css('display', 'flex');
        buttonElement.closest(".js-add-to-cart-container").addClass("is-added");
        // select.parent().show().css('display', 'flex');
        select.change();
        select.selectric({forceRenderAbove: true, maxHeight: 230});
    },

    updateQuickViewProduct: function (data) {
        var thiz = this;

        if (
            !!thiz.targetElement &&
            thiz.targetElement.find(".js-product-show-more").length > 0
        ) {
            if (
                !!data.cartData.products[thiz.targetProductId] &&
                data.cartData.products[thiz.targetProductId].quantity > 0
            ) {
                var select = thiz.targetElement
                    .find(".js-product-show-more-select")
                    .find("select");

                select
                    .find("option")
                    .first()
                    .text(
                        Services.convertToFaDigit(
                            data.cartData.products[thiz.targetProductId].quantity
                        )
                    );
                select.selectric("init");
                thiz.targetElement
                    .find(".js-add-to-cart-container")
                    .addClass("is-added");
                thiz.targetElement
                    .find(".js-product-show-more-select")
                    .removeClass("u-hidden");
                thiz.targetElement
                    .find(".js-product-show-more-button")
                    .addClass("u-hidden");
            } else {
                thiz.targetElement
                    .find(".js-add-to-cart-container")
                    .removeClass("is-added");
                thiz.targetElement
                    .find(".js-product-show-more-select")
                    .addClass("u-hidden");
                thiz.targetElement
                    .find(".js-product-show-more-button")
                    .removeClass("u-hidden");
            }
        }
    },

    updateQuickViewProductError: function () {
        this.targetElement
            .closest(".js-add-to-cart-container")
            .find(".js-select-quantity")
            .hide();
        this.targetElement
            .closest(".js-add-to-cart-container")
            .find(".js-add-to-cart")
            .show();
        this.targetElement
            .closest(".js-add-to-cart-container")
            .removeClass("is-added");
        this.targetElement
            .closest(".js-product-show-more-select")
            .addClass("u-hidden");
        this.targetElement
            .closest(".js-product-show-more-button")
            .removeClass("u-hidden");
    },

    updateMiniCart: function (response) {
        $("#mini-cart").html(response.miniCartData);
        this.initDropdownMenus();
    },

    initLuckyDrawCounter: function() {
        var $counter = $(".js-dc-counter"),
            $days = $counter.find(".js-dc-counter-days"),
            $hours = $counter.find(".js-dc-counter-hours"),
            $minutes = $counter.find(".js-dc-counter-minutes"),
            $seconds = $counter.find(".js-dc-counter-seconds"),
            endTime = Date.parse(window.digiclubLuckyDrawEndTime) / 1000,
            now = Date.now() / 1000,
            timeLeft = endTime - now;

        var luckyDrawTimerInterval = setInterval(makeTimer, 1000);
        makeTimer();

        if(endTime) $counter.removeClass("u-hidden");

        function makeTimer() {
            endTime = (Date.parse(window.digiclubLuckyDrawEndTime) / 1000);
            now = Date.now() / 1000;
            timeLeft = endTime - now;

            var days = Math.floor(timeLeft / 86400),
                hours = Math.floor((timeLeft - (days * 86400)) / 3600),
                minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600)) / 60),
                seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));

            if (days < "10") days = "0" + days;
            if (hours < "10") hours = "0" + hours;
            if (minutes < "10") minutes = "0" + minutes;
            if (seconds < "10") seconds = "0" + seconds;

            if (timeLeft > 0) {
                $days.text(Services.convertToFaDigit(days));
                $hours.text(Services.convertToFaDigit(hours));
                $minutes.text(Services.convertToFaDigit(minutes));
                $seconds.text(Services.convertToFaDigit(seconds));
            } else {
                $days.text(Services.convertToFaDigit("00"));
                $hours.text(Services.convertToFaDigit("00"));
                $minutes.text(Services.convertToFaDigit("00"));
                $seconds.text(Services.convertToFaDigit("00"));
                clearInterval(luckyDrawTimerInterval);
            }
        }
    },

    initCartBrowserBackForwardHandler: function () {
        window.addEventListener("pageshow", function () {
            var historyTraversal =
                typeof window.performance !== typeof undefined &&
                window.performance.navigation.type ===
                window.performance.navigation.TYPE_BACK_FORWARD;

            if (historyTraversal && window.location.pathname === "/cart/") {
                window.location.reload();
            }
        });
    },
    initHideTooltip: function () {
        setTimeout(function () {
            $(".js-tooltip-show-onload").removeClass("show-onload");
        }, 5000);
    },

    copyToClipboard: function(text, appendHook){
        if(!appendHook) appendHook = document.body;

        var aux = $(document.createElement("textarea"));
        aux.addClass("u-hidden-visually");
        aux.text(text);
        aux.attr("contenteditable", true); //IOS compatibility
        // aux.attr("readonly", true); //IOS compatibility
        appendHook.append(aux);
        aux[0].focus();
        aux[0].setSelectionRange(0, 999999); //IOS compatibility
        document.execCommand("copy");
        aux.remove();
    },

    toggleIconFont: function($icon, nextState) {
        if(nextState === 'active') {
            $icon.attr('data-icon', $icon.data('icon-active'));
        }
        else if(nextState === 'deactive') {
            $icon.attr('data-icon', $icon.data('icon-deactive'));
        }
    },

    setPromoViewBannerDataLayer: function () {
        $('.js-menu-top-banner').on('click' , function () {
            var bannerId = $(this).data('id');
            Services.setPromoViewClickImpressionEvent(bannerId, Main.gaListName);
        })
        $('.js-menu-ad-brands').on('click' , function () {
            var brandId = $(this).data('id');
            Services.setPromoViewClickImpressionEvent(brandId, Main.gaListName);
        })
        $('.js-search-banner-ga').on('click', function () {
            var bannerId = $(this).data('id');
            Services.setPromoViewClickImpressionEvent(bannerId, Main.gaListName);
        })
    },

    initRemoveRecommendationCarousel: function () {
        var cancelTime = null;
        $('.js-remove-recommendation-swiper').on('click' , function () {
            if(cancelTime) return;
            var carouselId = $(this).data('id');
            $('.js-swiper-mask-' + carouselId).removeClass('u-hidden');
            cancelTime = setTimeout(function () {
                $('#' + carouselId).addClass('u-hidden');
                if(carouselId === 'recommendation-home_1' || carouselId === 'recommendation-home_2'){
                    $('.js-' + carouselId + '-row').addClass('u-hidden');
                }
                cancelTime = null;
            } , 10000);

            try {
                var params = {
                    carousel_id: carouselId
                };

                snt('dkCarouselNotInterestedClick', params, true);
            } catch (e) {
                // skip event
            }
        })

        $('.js-cancel-swiper-mask').on('click' , function () {
            var carouselId = $(this).data('id');
            clearTimeout(cancelTime);
            $('.js-swiper-mask-' + carouselId).addClass('u-hidden');
            cancelTime = null;
        })
    },
    setUtmSource: function () {
        var currentUrl = new URL(window.location.href);
        var utmSource = currentUrl.searchParams.get("utm_source");
        var linksWithSource = $('.js-utm-sourced-link');
        if (utmSource && linksWithSource.length > 0) {
            linksWithSource.each(function(){
                var href = $(this).attr('href');
                var link = new URL(href);
                var newHref = "";

               if (link.search) {
                   newHref = href + "&utm_source=" + utmSource;
               } else {
                   newHref = href + "?utm_source=" + utmSource;
               }

                $(this).attr('href', newHref);
            });
        }
    },

    initShowMore: function () {
        $('.js-expandable-text').each(function () {
            var expandableText = $(this);
            var $container = expandableText.closest('.js-expandable-text-container');
            var expandBtn = $container.find('.js-expand-btn');

            if (expandableText.height() > 100) {
                $container.addClass('collapsed');
                expandBtn.removeClass('hidden');
            } else {
                $container.removeClass('collapsed');
                expandBtn.addClass('hidden');
            }

            expandBtn.on('click', function () {
                $container.toggleClass('collapsed')
            });
        });
    },

    scrollToAnchorHref: function () {
        $('.js-scroll-to-anchor-href').click(function (e) {
            e.preventDefault();
            var href = $(this).attr('href');
            Services.scrollToEl(href)
            return false;
        });
    },

    initUiPriority: function () {
        $('.js-ui-priority-item').click(function () {
            var thiz = $(this)
            var container = thiz.parent()
            var index = thiz.data('index')
            container.find('input').each(function () {
                var child = $(this)
                var childIndex = child.data('index')
                if(childIndex === index){
                    child.prop("checked", true);
                }
            })
        })
    },

    initUiAjaxAddToCart: function () {
        var $this = this;

        $('.js-ui-ajax-add-to-cart-btn').click(function () {
            var thiz = $(this),
                container = thiz.parent(),
                maxSize = container.data('max-size'),
                variantId = container.data('variant'),
                productId = container.data('product-id'),
                plusBtn = container.find('.js-ui-ajax-add-to-cart-increase-btn'),
                counter = container.find('.js-ui-ajax-add-to-cart-counter'),
                actionsBox = container.find('.js-ui-ajax-add-to-cart-actions'),
                deleteBtn = container.find('.js-ui-ajax-add-to-cart-decrease-btn');

            Services.ajaxGETRequestJSON(
                "/cart/add/" + variantId + "/1/?is_quick_view=true",
                {},
                function (response) {
                    if(isModuleActive('data_layer')) {
                        Main.setImpressionEventOnAjax(response.data_layer);
                    }
                    window.cart = response.cartData;
                    thiz.parent('.js-ui-ajax-add-to-cart').data("cart-item", response.cartItemId);
                    // after add
                    thiz.addClass('u-hidden');
                    deleteBtn.addClass('delete-icon');
                    actionsBox.removeClass('u-hidden');
                    if(maxSize === 1){
                        plusBtn.addClass('disabled');
                    }
                    counter.text(Services.convertToFaDigit(1));
                    $this.updateMiniCart(response);
                 },
                function (response) {
                    if (response.errors !== undefined) {
                        DKAlert(response.errors);
                    }
                },
                false,
                true
            );
        })

        $('.js-ui-ajax-add-to-cart-increase-btn').click(function () {
            var thiz = $(this),
                actionsBox = thiz.parent(),
                container = thiz.parents('.js-ui-ajax-add-to-cart'),
                counter = actionsBox.find('.js-ui-ajax-add-to-cart-counter'),
                currentCount = parseInt(Services.convertToEnDigit(counter.text())),
                deleteBtn = actionsBox.find('.js-ui-ajax-add-to-cart-decrease-btn'),
                productId = container.data('product-id'),
                variantId = container.data('variant'),
                maxSize = container.data('max-size');

            if(currentCount + 1 > maxSize){
                thiz.addClass('disabled')
                return
            }

            Services.ajaxGETRequestJSON(
                "/cart/change/" + variantId + "/" + (currentCount + 1) + "/?is_quick_view=true",
                {},
                function (response) {
                    if(isModuleActive('data_layer')) {
                        Main.setImpressionEventOnAjax(response.data_layer);
                    }
                    window.cart = response.cartData;
                    thiz.parents('.js-ui-ajax-add-to-cart').data("cart-item", response.cartItemId);
                    // after ajax
                    if(currentCount + 1 >= maxSize){thiz.addClass('disabled')}
                    counter.text(Services.convertToFaDigit(currentCount + 1));
                    deleteBtn.removeClass('delete-icon');
                    $this.updateMiniCart(response);
                },
                function (response) {
                    if (response.errors !== undefined) {
                        DKAlert(response.errors);
                    }
                },
                false,
                true
            );

        })

        $('.js-ui-ajax-add-to-cart-decrease-btn').click(function () {
            var thiz = $(this),
                actionsBox = thiz.parent(),
                container = thiz.parents('.js-ui-ajax-add-to-cart'),
                counter = actionsBox.find('.js-ui-ajax-add-to-cart-counter'),
                currentCount = parseInt(Services.convertToEnDigit(counter.text())),
                increaseBtn = actionsBox.find('.js-ui-ajax-add-to-cart-increase-btn'),
                variantId = container.data('variant'),
                productId = container.data('product-id');

            if(currentCount - 1 === 0){
                var cartItem = thiz.parents('.js-ui-ajax-add-to-cart').data('cart-item');
                Services.ajaxGETRequestJSON(
                    "/ajax/cart/remove/" + cartItem + "/" + "?is_quick_view=true",
                    {},
                    function (response) {

                        if(isModuleActive('data_layer')) {
                            Main.setImpressionEventOnAjax(response.data_layer);
                        }

                        window.cart = response.cartData;

                        actionsBox.addClass('u-hidden');
                        container.find('.js-ui-ajax-add-to-cart-btn').removeClass('u-hidden');
                        $this.updateMiniCart(response);

                    },
                    function (response) {
                        if (response.errors !== undefined) {
                            DKAlert(response.errors);
                        }
                    },
                    false,
                    true
                );
                return;
            }

            Services.ajaxGETRequestJSON(
                "/cart/change/" + variantId + "/" + (currentCount - 1) + "/?is_quick_view=true",
                {},
                function (response) {
                    if(isModuleActive('data_layer')) {
                        Main.setImpressionEventOnAjax(response.data_layer);
                    }
                    window.cart = response.cartData;
                    thiz.parents('.js-ui-ajax-add-to-cart').data("cart-item", response.cartItemId);
                    // after ajax
                    if(currentCount - 1 === 1){
                        thiz.addClass('delete-icon');
                    }
                    increaseBtn.removeClass('disabled');
                    counter.text(Services.convertToFaDigit(currentCount - 1));
                    $this.updateMiniCart(response);
                },
                function (response) {
                    if (response.errors !== undefined) {
                        DKAlert(response.errors);
                    }
                },
                false,
                true
            );

        })

    },

    changeFreeShippingText: function () {
        var badgeText = $('.js-free-shipping-badge-text');
        if(window.isNewCustomer || !window.userId){
            badgeText.html("اولین سفارش کاربران جدید");
            return;
        }
        badgeText.html("سفارش‌های بالای ۳۰۰ هزار تومان");
    },
};

$(function () {
    Main.init();
});



/*[PATH @digikala/supernova-digikala-desktop/assets/local/js/shared/uiComponents.js]*/
var UIComponents = {
    trends: [],
    init: function () {
        var functions = [
            this.initSeeMore,
            this.initMoreContent,
            this.initTab,
            this.initInputs,
            this.initSelects,
            this.initErrors,
            this.initButtonUploader,
            this.initPasswordField,
            this.initRoundProgress,
            this.initFieldCounter
        ];

        window.Services.callListInTryCatch(functions, this);
    },

    initFieldCounter: function () {
        $(document).on('change input', '.js-ui-char-counter', function () {
            $(this).closest('label').find('.js-ui-counter-value').html(Services.convertToFaDigit($(this).val().length));
        });
    },

    initRoundProgress: function () {
        $.each($('.js-round-progress'), function (i, val) {
            if(!$(this).data('value'))
                return;
            var percent = parseFloat($(this).data('value'));
            var level1 = parseFloat($(this).data('level-1'));
            var level2 = parseFloat($(this).data('level-2'));
            var $right = $(this).find('.js-round-progress-right');
            var $left = $(this).find('.js-round-progress-left');

            if(percent > 50.0) {
                $right.css('transform', 'rotate(' + (100 - percent) * 3.6 + 'deg)');
            } else {
                $right.addClass('less-fifty');
                $left.css('transform', 'rotate(' + (50 - percent) * 3.6 + 'deg)');
            }

            $(this).removeClass('red');
            $(this).removeClass('green');
            $(this).removeClass('yellow');
            if(percent > level1){
                $(this).addClass('green');
            } else {
                if (percent > level2){
                    $(this).addClass('yellow');
                } else {
                    $(this).addClass('red');
                }
            }

        })
    },

    initFileUploader: function (fileInput, uploadURL, keyName, usedIn, fileAddedCallback, fileRemovedCallback) {
        var thumbnailContainer = fileInput.closest('.js-thumbnails');
        var ajaxes = [];
        var container = fileInput.closest('.js-new-file-btn');
        var hasVideo = false;
        var imageComplete = false;
        var videoMaxSize = 52428800; //50MB
        var imageMaxSize = 5242880; //5MB
        var acceptanceImages = 'image/png,image/jpeg,';
        var acceptanceVideos = 'video/mp4, .mov, video/x-msvideo, video/mpeg, video/x-ms-wmv, .m4v, .avi, .wmv, .3gp,';
        var imageRegEx = new RegExp('image\/(jpeg|png)');
        var videoRegEx = new RegExp('video\/(mp4|quicktime|x-msvideo|x-ms-wmv|mpeg|avi|3gpp)');

        if (thumbnailContainer.children('.is-video').length > 0)
            hasVideo = true;

        if(usedIn === 'comment') {
            videoMaxSize = 314572800; //300MB
            if (isModuleActive('vod')) {
                acceptanceVideos = 'video/mp4, .m4v, .avi,';
            }
            videoRegEx = new RegExp('video\/(mp4|avi)');
        }

        changeAddFileStatus();


        fileInput.on('change', function () {
            var file = this.files[0];
            $(this).val('');
            removeFileError();
            if (imageRegEx.test(file.type)) {
                if (file.size < imageMaxSize) {
                    var quantity = thumbnailContainer.children('.js-thumbnail:not(.is-video)').length;
                    if (quantity < 5) {
                        sendFile(file, 'image');
                        if (quantity === 4) {
                            imageComplete = true;
                            changeAddFileStatus();
                        }
                    } else {
                        showFileError(file, 'مجاز به بارگذاری حداکثر پنج عکس می‌باشید');
                    }
                } else {
                    showFileError(file, 'حجم عکس نباید بیش از ۱ مگا بایت باشد');
                }
            } else if (videoRegEx.test(file.type)) {
                if (file.size < videoMaxSize) {
                    if (!hasVideo) {
                        hasVideo = true;
                        sendFile(file, 'file');
                        changeAddFileStatus();
                    } else {
                        showFileError(file, 'مجاز به بارگذاری حداکثر یک ویديو می‌باشید');
                    }
                } else {
                    if(usedIn === 'comment') {
                        showFileError(file, 'حجم ویدیو نباید بیش از ۳۰۰ مگا بایت باشد');
                    } else {
                        showFileError(file, 'حجم ویدیو نباید بیش از ۵۰ مگا بایت باشد');
                    }
                }
            } else {
                showFileError(file, 'فرمت فایل معتبر نمی‌باشد');
            }

            function showFileError(file, error) {
                container.parent().addClass('has-error');
                container.parent().append('<span class="error c-ui-feedback-hint">' + error + '</span>');
            }

            function removeFileError() {
                container.parent().removeClass('has-error');
                container.parent().children('.error').remove();
            }
        });

        function showImage(file, thumb) {
            var reader = new FileReader();

            reader.onload = function (e) {
                thumb.find('img').attr('src', e.target.result);
                thumb.find('img').show();
            };

            reader.readAsDataURL(file);
        }

        function sendFile(file, label) {
            var formData = new FormData();
            var thumbnail;

            function progress(e, dom) {
                if (e.lengthComputable) {
                    var max = e.total;
                    var current = e.loaded;

                    var Percentage = (current * 100) / max;
                    dom.children('.js-upload-progress').html(Services.convertToFaDigit(Math.round(Percentage)) + '٪');

                    if (Percentage >= 98) {
                        dom.children('.js-upload-progress').html(Services.convertToFaDigit(98) + '٪');
                    }
                }
            }

            function deleteByNetwork() {
                if (thumbnail.hasClass('is-video')) {
                    hasVideo = false;
                } else {
                    imageComplete = false;
                }
                changeAddFileStatus();
                thumbnail.remove();
                var index = thumbnailContainer.children('.js-thumbnail:not(.is-uploaded)').index(thumbnail);
                ajaxes.splice(index, 1);
            }

            formData.append('file', file);
            var xhr = $.ajax({
                type: 'POST',
                url: uploadURL,
                data: formData,
                xhr: function () {
                    var myXhr = $.ajaxSettings.xhr();
                    if (myXhr.upload) {
                        myXhr.upload.addEventListener('progress', function (e) {
                            progress(e, thumbnail)
                        }, false);
                    }
                    return myXhr;
                },
                cache: false,
                contentType: false,
                processData: false,

                beforeSend: function () {
                    thumbnailContainer.append('<div class="c-ui-uploader__thumbnail js-thumbnail in-progress ' + (label === 'file' ? 'is-video' : '') + '">\n' +
                        (label === 'file' ? '' : '<img src=""/>\n') +
                        '                                                    <div class="c-ui-uploader__thumbnail-cancel js-upload-cancel"></div>\n' +
                        '                                                    <div class="c-ui-uploader__thumbnail-progress js-upload-progress"></div>\n' +
                        '                                                    <div class="c-ui-uploader__thumbnail-progress-overlay"></div>\n' +
                        '                                                </div>');
                    thumbnail = thumbnailContainer.children('.js-thumbnail').last();
                    if (label !== 'file')
                        showImage(file, thumbnail);
                },

                success: function (response) {
                    if (response.status) {
                        thumbnail.append('<input type="hidden" name="' + (keyName ? keyName : 'comment[files]') + '[' + (thumbnail.prevAll('.js-thumbnail').length + ']" ') + 'value =' + response.data.id + '>');
                        /*var index = thumbnail.index() - 1;
                        ajaxes.splice(index, 1);*/
                        thumbnail.removeClass('in-progress');
                        thumbnail.children('.js-upload-cancel').remove();
                        thumbnail.append('<div class="c-ui-uploader__thumbnail-remove js-upload-remove"></div>');
                        if(fileAddedCallback)
                            fileAddedCallback();
                    } else {
                        deleteByNetwork();
                    }
                },

                error: function (response) {
                    deleteByNetwork();
                }
            });
            ajaxes.push(xhr);
        }

        $(document).on('click', '.js-upload-cancel', function () {
            var container = $(this).closest('.js-thumbnail');
            var index = thumbnailContainer.children('.js-thumbnail:not(.is-uploaded)').index(container);
            ajaxes[index].abort();
            ajaxes.splice(index, 1);
            if (container.hasClass('is-video')) {
                hasVideo = false;
            } else {
                imageComplete = false;
            }
            changeAddFileStatus();
            container.remove();
        });

        $(document).on('click', '.js-upload-remove', function () {
            var container = $(this).closest('.js-thumbnail');
            if (container.hasClass('is-video')) {
                hasVideo = false;
            } else {
                imageComplete = false;
            }
            changeAddFileStatus();
            container.remove();
            if(fileRemovedCallback)
                fileRemovedCallback();
        });

        function changeAddFileStatus() {
            if (hasVideo) {
                if (imageComplete) {
                    container.hide();
                } else {
                    if (container.is(':hidden')) {
                        container.show();
                    }
                    container.find('input[type="file"]').attr('accept', acceptanceImages);
                }
            } else {
                if (container.is(':hidden')) {
                    container.show();
                }
                if (imageComplete) {
                    container.find('input[type="file"]').attr('accept', acceptanceVideos);
                } else {
                    container.find('input[type="file"]').attr('accept', (acceptanceImages + acceptanceVideos));
                }
            }
        }
    },

    initButtonUploader: function () {

        function progress(e, container) {
            if (e.lengthComputable) {
                var max = e.total;
                var current = e.loaded;

                var Percentage = (current * 100) / max;
                container.find('.js-ui-uploader-progress-bar').css('width', (Percentage + '%'));
            }
        }
        $('.js-ui-simple-uploader').on('change', function () {
            var container = $(this).closest('.js-uploader-container');
            var file = this.files[0];
            container.addClass('finished');
            container.find('.js-ui-uploader-cancel').off().removeClass('js-ui-uploader-cancel');
            container.find('.js-ui-uploader-title').html(file.name);
        });

        $('.js-ui-uploader').on('change', function () {
            var container = $(this).closest('.js-uploader-container');
            container.removeClass('finished');
            var formData = new FormData();
            var file = this.files[0];
            formData.append('file', file);

            var xhr = $.ajax({
                type: 'POST',
                url: $(this).data('url'),
                data: formData,
                xhr: function () {
                    var myXhr = $.ajaxSettings.xhr();
                    if (myXhr.upload) {
                        myXhr.upload.addEventListener('progress', function (e) {
                            progress(e, container)
                        }, false);
                    }
                    return myXhr;
                },
                cache: false,
                contentType: false,
                processData: false,

                beforeSend: function () {

                },

                success: function (response) {
                    container.addClass('finished');
                    container.find('.js-ui-uploader-cancel').off().removeClass('js-ui-uploader-cancel');
                    container.find('.js-ui-uploader-title').html(file.name);
                },

                error: function (response) {

                }
            });
        });
    },

    initSeeMore: function () {
        $(document).on('click', '.js-ui-see-more', function (e) {
            e.stopPropagation();
            $('.js-ui-more-options').hide();
            $(this).siblings('.js-ui-more-options').toggle();
        });

        $('body').on('click', function () {
            $('.js-ui-more-options').hide();
        });
    },

    initMoreContent: function() {
        $('.js-more-content-trigger').on('click', function() {
            var moreContentTrigger = $(this),
                moreContentContainer = moreContentTrigger.closest('.js-more-content-container'),
                moreContentShort = moreContentContainer.find('.js-more-content-short'),
                moreContentFull = moreContentContainer.find('.js-more-content-full');

            moreContentTrigger.addClass('u-hidden');
            moreContentShort.addClass('u-hidden');
            moreContentFull.removeClass('u-hidden');
        });
    },

    initTab: function () {
        $(document).on('click', '.js-ui-tab-pill', function () {
            var $this = $(this),
                tabContainer = $this.closest('.js-ui-tab'),
                tabPillId = $this.data('tab-pill-id');

            $('.js-ui-tab-content').addClass('u-hidden');
            $('.js-ui-tab-pill').removeClass('is-active');
            tabContainer.trigger('tab-switch');

            $('[data-tab-content-id="' + tabPillId + '"]').removeClass('u-hidden');
            $this.addClass('is-active').trigger('tab-switch');
        });
    },

    initInputs: function () {
        var inputs = $('.js-input-field');
        inputs.focus(
            function () {
                $(this).parent().addClass('focus');
            }
        );

        inputs.blur(
            function () {
                $(this).parent().removeClass('focus');
            }
        );

        inputs.keyup(function (e) {
            var $this = $(this),
                $clearButton = $this.next('.js-ui-field-cleaner');

            if(e.target.value && $clearButton) {
                $clearButton.removeClass('u-hidden')
            } else {
                $clearButton.addClass('u-hidden')
            }
        })

        $('.js-ui-field-cleaner').click(function (e) {
            e.preventDefault();
            var $this = $(this),
                $inputField = $this.prev('.js-input-field');

            $this.addClass('u-hidden');
            $inputField.val('');
        });
    },

    initSelects: function () {
        var dropdowns = $('.js-dropdown-universal');
        dropdowns.on('selectric-open', function () {
            $(this).closest('.o-form__field-container').addClass('focus');
        });

        dropdowns.on('selectric-close', function () {
            $(this).closest('.o-form__field-container').removeClass('focus');
        })
    },

    initErrors: function () {
        $.extend($.prototype, {
            showError: function (err) {
                var container = $(this).closest('.o-form__field-container');
                if(container.length > 0) {
                    container.find('.o-form__error').remove();
                    if(!container.hasClass('has-error'))
                        container.addClass('has-error');
                    container.append('<div class="o-form__error">' + err +'</div>');
                }
            },
            removeError: function () {
                var container = $(this).closest('.o-form__field-container');
                if(container.length > 0) {
                    container.removeClass('has-error');
                    container.find('.o-form__error').remove();
                }
            }
        })
    },

    initPasswordField: function () {
        $('.js-ui-toggle-password').click(function (e) {
            e.preventDefault();
            var $this = $(this),
                $inputField = $this.prev('.js-input-field'),
                isPassword = $inputField.attr('type') === 'password';

            if(isPassword) {
                $inputField.attr('type', 'text');
                $this.addClass('o-form__password-field-button--show-password');
            } else {
                $inputField.attr('type', 'password');
                $this.removeClass('o-form__password-field-button--show-password');
            }
        });
    }
};

$(function () {
    UIComponents.init();
});


/*[PATH @digikala/supernova-digikala-desktop/assets/local/js/shared/lazyLoad.min.js]*/
!function(u){u.fn.lazy=function(t,i){var e,n=u(window),s=t||200,r=1<window.devicePixelRatio?"data-src-retina":"data-src",o=this;function a(){var t=o.filter(function(){var t=u(this);if(!t.is(":hidden")){var i=n.scrollTop(),e=i+n.height(),r=t.offset().top,o=r+t.height();return i-s<=o&&r<=e+s}});"function"==typeof i&&t&&0<t.length&&i(t),e=t.trigger("lazy"),o=o.not(e)}return this.one("lazy",function(){var t=this,i=this.getAttribute(r);(i=i||this.getAttribute("data-src"))&&setTimeout(function(){t.setAttribute("src",i),t.removeAttribute(r)},200);var e=this.getAttribute("data-srcset");e&&setTimeout(function(){t.setAttribute("srcset",e)},200)}),n.off("scroll.lazy lookup.lazy resize.lazy"),n.on("scroll.lazy resize.lazy lookup.lazy",a),a(),this}}(window.jQuery);


/*[PATH @digikala/supernova-digikala-desktop/assets/local/js/shared/chatClient.js]*/
(function ($) {
    $.fn.Chatcenter = function (options, touchPoint) {
        var IFRAME_URL = "";
        var settings = $.extend({
            FormChatFile: 'https://chatservice.digikala.com/chat.html?v=' + Date.now().toFixed(),
            UserName: null,
            UserEmail: null,
            UserPhone: null

        }, options);

        return this.each(function () {
            if (settings.FormChatFile)
                IFRAME_URL += settings.FormChatFile
            if (settings.UserName)
                IFRAME_URL += '&' + 'UN=' + settings.UserName

            if (settings.UserEmail)
                IFRAME_URL += '&' + 'UE=' + settings.UserEmail

            if (settings.UserPhone)
                IFRAME_URL += '&' + 'UP=' + settings.UserPhone

            if (touchPoint) {
                var body = '<div id="s___xc8712" class="title chat-top" id="chatPopupExecute" onclick="PopUpValidClick(' + "'" + IFRAME_URL + "'" + ')"><div class="chatlive-errobox">شما هم اکنون درحال گفتگو می باشید</div><span>پشتیبان آنلاین</span>';
                $(this).append('<div class="chat-mainbox" id="chatbox" name="jclsw">')
                $("#chatbox").append(body)
                $('head').append('<link rel="stylesheet" href="ChatCenter.css?v=' + new Date().getTime().toFixed() + '" type="text/css" />');
            } else {
                PopUpValidClick(IFRAME_URL);
            }
        });
    }

    var winPopup = null;

}(jQuery));

function PopUpValidClick(url) {
    winPopup = window.open(url, '_blank', 'directories=no,titlebar=no,toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=460, height=490');
}

$(document).ready(function () {
    var popupClicked = localStorage.getItem("popupClicked");
    if (!!popupClicked && (popupClicked === "true" || popupClicked === true))
        $("#chatPopupExecute").addClass("chating-live");
});

function embdedWindowTitle() {
    if (localStorage.getItem("chatbox") !== "expand")
        if ($("#embedded-window-titled").hasClass("cl-box") && getCookie("chatbox") !== "expand")
            openChat(400);

        else {
            var iframe = $(".chatbox").attr("src");
            openPopup(iframe);
        }
}

function openPopup(url) {
    winPopup = window.open(url, '_blank', 'directories=no,titlebar=no,toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=500, height=600, popup=yes, dependent=yes');
    winPopup.onbeforeunload = function () {
        localStorage.setItem('chatbox', 'closed');
    };
}

$(window).bind('storage', function (e) {
    var popupClicked = localStorage.getItem("popupClicked");
    if (!!popupClicked && (popupClicked === "true" || popupClicked === true))
        $("#chatPopupExecute").addClass("chating-live");
    else
        $("#chatPopupExecute").removeClass("chating-live");
});

function closeChat(ease) {
    $(".chat-mainbox").animate({
        "height": "32px"
    }, ease, function () {
        var $windowTitle = $("#embedded-window-title");
        $(".chatbox").css("display", "none");
        $("#embedded-close").hide();
        $windowTitle.show();
        $windowTitle.addClass("cl-box");
    });
}



/*[PATH @digikala/supernova-digikala-desktop/assets/local/js/shared/adro.js]*/
/**
 * @classdesc Represents an API call.
 * @class
 * @abstract
 */
var Adro = {
  Constants : {
    baseURL : "",
  },
  APICall : {
    send :  function(method, url, data) {
      var Service = Adro.Service
      var Constants = Adro.Constants
      var callURL = Constants.baseURL + url;
      var headers = Service.createAuthHeader();
      var body = "";
      if (method === "POST") {
        headers["Content-Type"] = "application/json";
        headers["Accept"] = "application/json";
        body = JSON.stringify(data);
      }
      return $.ajax(
        {
            url: callURL,
            type: method,
            data: body,
            headers : headers,
            success: function (res) {
              return res;
            },
            error: function (err) {
              return Promise.reject({
                status: err.status,
                message: err.statusText
              });
            }
        }
    )
  }
  },
  Event : {
    tracker : function(params) {
    var APICall = Adro.APICall
    var Service = Adro.Service
        if (
          !params.event_name
        ) {
          return Service.rejectValidation(
            "validation",
            "identifier, event_name"
          );
        }
        return APICall.send("POST", "", params);
    }
  },
  Service : {
    createAuthHeader : function() {
      var Constants = Adro.Constants
      var myHeaders = {};
      myHeaders["api-key"] = Constants.apiKey;
      return myHeaders;
    },
    rejectValidation : function(module, param) {
      return Promise.reject({
        status: 0,
        message:
          "The " +
          module +
          " " +
          param +
          " is not valid or it was not specified properly"
      });
    }
  }
}






/*[PATH @digikala/supernova-digikala-desktop/assets/local/js/shared/chatSection.js]*/
var chatActions = {
    userLastMessage: '',
    init: function () {
        var functions = [
            this.initFaqShortAnswer,
            this.initSwitchButton,
        ], self = this;


        for (var i = 0; i < functions.length; ++i) {
            try {
                functions[i].call(self);
            } catch (e) {
               //
                // eslint-disable-next-line no-console
                console.warn(e);
            }
        }

    },

    chatBotStateHandler: function(state) {
        var $faqState = $('.js-chat-box-faq'),
            $userDataState = $('.js-chat-box-user-data'),
            $userDataState = $('.js-chat-box-user-data'),
            $chatCenterState = $('.js-chat-center-iframe'),
            $chatBotState = $('.js-chat-bot');

        switch (state) {
            case 'faq':
                $faqState.removeClass('u-hidden');
                $userDataState.addClass('u-hidden');
                $chatBotState.addClass('u-hidden');
                $chatCenterState.addClass('u-hidden');
                break;
            case 'userData':
                $faqState.addClass('u-hidden');
                $userDataState.removeClass('u-hidden');
                $chatBotState.addClass('u-hidden');
                $chatCenterState.addClass('u-hidden');
                break;
            case 'chatbot':
                $faqState.addClass('u-hidden');
                $userDataState.addClass('u-hidden');
                $chatBotState.removeClass('u-hidden');
                $chatCenterState.addClass('u-hidden');
                break;
            case 'chatcenter':
                $faqState.addClass('u-hidden');
                $userDataState.addClass('u-hidden');
                $chatBotState.addClass('u-hidden');
                $chatCenterState.removeClass('u-hidden');
                break;
        }
    },

    setUpFaqAndChat: function ($containerMain, faqAndChatInHtml) {
        var $questionsContainer = $containerMain.find('.js-chat-box-questions');

        $questionsContainer.html(faqAndChatInHtml);

        var self = this;
            $questionAll = $containerMain.find('.js-chat-box-question'),
            $answerAll = $containerMain.find('.js-chat-box-answer'),
            $welcomingText = $containerMain.find('.js-chat-box-welcoming'),
            $chatBtn = $containerMain.find('.js-chat-btn');

        $questionAll.on('click', function () {
            var $question = $(this),
                $answer = $question.siblings('.js-chat-box-answer'),
                $QAItem = $question.closest('.js-chat-box-question-container');

            if($question.hasClass('is-open')) {
                $questionAll.removeClass('is-open');
                $answerAll.addClass('u-hidden');
            } else {
                $questionAll.removeClass('is-open');
                $answerAll.addClass('u-hidden');
                $question.addClass('is-open');
                $answer.removeClass('u-hidden');
            }

            var QAItemHeight = $QAItem.height(),
                QAItemPageOffset = $QAItem.offset(),
                containerHeight = 383,
                containerPageOffset = $containerMain.offset(),
                QAItemInnerOffsetTop = QAItemPageOffset.top - containerPageOffset.top,
                questionHeight = $question.height(),
                questionBottomInnerOffset = QAItemInnerOffsetTop + questionHeight,
                floorHeight = Math.floor(Math.abs(containerHeight - questionBottomInnerOffset));

            if (QAItemHeight > floorHeight) {
                $questionsContainer.get(0).scrollTo(0, QAItemHeight);
            }
        });

        $questionsContainer.on('scroll', function () {
            var scroll = $questionsContainer.scrollTop();

            if (scroll > 26) {
                $welcomingText.fadeOut();
            } else {
                $welcomingText.fadeIn();
            }
        });

        function callCenterChatStatus(successCallback, showLoader) {
            Services.ajaxGETRequestJSON(
                '/chat-scheduler/status/',
                {},
                function (response) {
                    successCallback(response)
                },
                function (response) {
                    if (response.errors !== undefined) {
                        DKAlert({message: response.errors[0]});
                    }
                },
                false,
                showLoader
            );
        }

        function chatbotStatus(successCallback, showLoader) {
            Services.ajaxGETRequestJSON(
                '/ajax/chat-bot/health-check/',
                {},
                function (response) {
                    successCallback(response)
                },
                function (response) {
                    if (response.errors !== undefined) {
                        DKAlert(response.errors[0]);
                    }
                },
                false,
                showLoader
            );
        }

        function tryForChatCenter() {
            callCenterChatStatus(function (res){
                if(res.status) {
                    $chatBtn.removeClass('u-hidden');
                } else {
                    $chatBtn.addClass('u-hidden');
                }
            }, false)

            $chatBtn.on('click', function () {
                callCenterChatStatus(function (res){
                    if(res.status) {
                        self.initChatCenter();
                    } else {
                        $chatBtn.addClass('u-hidden');
                    }
                }, true)
            });
        }

        function tryForChatbot() {
            var $userDataForm = $('#chatbotForm'),
                $textArea = $('.js-chat-bot-text-area'),
                $sendMessageButton = $('.js-chat-bot-send-msg'),
                $feedbackSection = $('.js-chatbot-feedback'),
                $chatbotBody = $('.js-chatbot-body');

            $chatBtn.removeClass('u-hidden');

            function sendChatbotFeedback(rate) {
                Services.ajaxPOSTRequestJSON(
                    '/ajax/chat-bot/send-feedback/',
                    {
                        rate: rate,
                    },
                    function (res) {
                    },
                    function (err) {
                    }
                );
            }

            $('.js-chatbot-feedback-button').click(function(){
                $feedbackSection.addClass('u-hidden');
                rate = Number($(this).data('rate'));
                sendChatbotFeedback(rate);
                if(rate < 0) {
                    callCenterChatStatus(function (res){
                        if(res.status) {
                            self.handleIframe(chatUserData || {}, self.userLastMessage);
                            self.chatBotStateHandler('chatcenter');
                        } else {
                            window.DKAlert('متاسفانه پشتیبانی آنلاین بصورت موقت از دسترس خارج است. لطفا زمان دیگری تلاش کنید.')
                        }
                    }, true)
                }
            })

            $chatBtn.on('click', function () {
                var user = new UserClass();
                if (user.isLogged()) {
                    var userData = user.getLoggedUserMetaData().data();
                    $('input[name="chatbot[name]"]').val(userData.first_name + ' ' + userData.last_name);
                    $('input[name="chatbot[phone]"]').val(userData.mobile_phone);
                    $('input[name="chatbot[email]"]').val(userData.email);
                }

                self.chatBotStateHandler('userData');
            });

            $userDataForm.validate({
                rules: {
                    "chatbot[email]": {
                        required: true,
                        email: true,
                        maxlength: 255
                    },
                    "chatbot[name]": {
                        required: true,
                        persian_english_letters_only: true,
                        maxlength: 255
                    },
                    "chatbot[phone]": {
                        mobile_phone: true,
                        required: true,
                        digits: true,
                        minlength: 11,
                        maxlength: 13,
                    },
                },
                messages: {
                    "chatbot[email]": {
                        required: 'ایمیل وارد نشده است',
                        email: 'ایمیل نامعتبر است',
                        maxlength: 'ایمیل طولانی است'
                    },
                    'chatbot[name]': {
                        'required': 'نام خود را وارد نمایید',
                        'persian_english_letters_only': 'فقط حروف فارسی و انگلیسی مجاز است',
                        'maxlength': 'نام وارد شده باید کمتر از ۳۰ حرف باشد'
                    },
                    'chatbot[phone]': {
                        'required': 'فیلد الزامی است',
                        'digits': 'شماره موبایل را درست وارد نمایید',
                        'minlength': 'شماره موبایل را کامل وارد نمایید',
                        'maxlength': 'شماره موبایل را درست وارد نمایید'
                    },
                }
            });

            $userDataForm.on('submit', function(e){
                e.preventDefault();
                if (!$userDataForm.valid()) {
                    return;
                }

                window.chatUserData = {
                    name: $('input[name="chatbot[name]"]').val(),
                    email: $('input[name="chatbot[email]"]').val(),
                    phone: $('input[name="chatbot[phone]"]').val(),
                }

                self.chatBotStateHandler('chatbot');
            })

            $userDataForm.on('keyup', function(e){
                $userDataForm.valid();
            })

            $textArea.on('keyup', function(e){
                if(e.target.value.length > 0) {
                    if (e.keyCode === 13) {
                        e.preventDefault();
                        $sendMessageButton.click();
                    } else {
                        $sendMessageButton.removeClass('disabled');
                    }
                } else {
                    $sendMessageButton.addClass('disabled');
                }
            })

            $sendMessageButton.on('click', function() {
                var message = $textArea.val();

                self.userLastMessage = message;
                $chatbotBody.append(self.generateChatBotMessage(message, false));
                $textArea.val('');
                $sendMessageButton.addClass('disabled');
                $chatbotBody.parent().scrollTop($chatbotBody.height());

                Services.ajaxPOSTRequestJSON(
                    '/ajax/chat-bot/send-question/',
                    {
                        question: message,
                    },
                    function (res) {
                        $chatbotBody.append(self.generateChatBotMessage(res.data, true, res.link));
                        $chatbotBody.parent().scrollTop($chatbotBody.height());
                        $feedbackSection.removeClass('u-hidden');
                    },
                    function (err) {
                        console.log(err);
                    }
                );
            })
        }

        if(isModuleActive('chatbot') && window.location.pathname.indexOf('/faq/') >= 0) {
            chatbotStatus(function (res){
                if(res.status) {
                    tryForChatbot();
                } else {
                    $chatBtn.addClass('u-hidden');
                    tryForChatCenter();
                }
            }, false)
        } else {
            tryForChatCenter();
        }
    },

    initSwitchButton: function () {
        var self = this;
            $chatBoxContainer = $('.js-chat-box'),
            $switchBtn = $chatBoxContainer.find('.js-chat-box-container-btn'),
            $containerMain = $chatBoxContainer.find('.js-chat-box-container'),
            $loader = $chatBoxContainer.find('.js-chat-box-loader'),
            pageTitle = window.faqPageTitle || 'plp_section',
            isAjaxInProgress = false,
            questionsLoaded = false;

        $switchBtn.on('click', function () {
            if(!questionsLoaded && !isAjaxInProgress) {
                isAjaxInProgress = true

                Services.ajaxGETRequestJSON(
                    '/ajax/chat-box/',
                    {
                        page_title: pageTitle
                    },
                    function (response) {
                        self.setUpFaqAndChat($containerMain, response.faq_chat);
                        $loader.fadeOut();
                        questionsLoaded = true;
                        isAjaxInProgress = false;
                    },
                    function (response) {
                        DKAlert('متاسفانه خطایی رخ داده است.');
                        $switchBtn.trigger('click');
                        isAjaxInProgress = false;
                    },
                    false,
                    false
                );
            }

            $switchBtn.toggleClass('is-active');
            $containerMain.toggleClass('u-hidden');
        });
    },

    initFaqShortAnswer: function () {
        var $chatBoxContainer = $('.js-chat-box');

        if($chatBoxContainer.length === 0) return false;

        if(window.isPDP) {
            $(window).on('scroll', Services.debounce(switchChatBoxVisibilityBySroll, 100));
        } else if(window.isHomePage) {
            $chatBoxContainer.addClass('u-hidden')
        } else {
            $chatBoxContainer.removeClass('u-hidden')
        }

        function switchChatBoxVisibilityBySroll() {
            if ($(window).scrollTop() > 1000) {
                $chatBoxContainer.fadeIn(300).removeClass('u-hidden');
            } else {
                $chatBoxContainer.fadeOut(300);
            }
        }
    },

    generateChatBotMessage: function (text, isDK, link) {
        var now = new Date();
        var message = '';

        message += '<div class="c-cro__chat-message' + (isDK ? ' c-cro__chat-message--dk' : '') + '"><p>';
        message += text;

        if(link) {
            message += '<a href="' + link + '" target="_blank">پرسش های متداول</a>'
        }

        message += '</p><span>';
        message += Services.convertToFaDigit(now.getHours() + ':' + now.getMinutes()) + ' - ' + (isDK ? 'پشتیبان هوش مصنوعی' : window.chatUserData.name);
        message += '</span></div>';

        return message;
    },

    initChatCenter: function () {
        var user = new UserClass();
        if(isModuleActive('chatbot')) {
            window.chatUserData = {};
            if (user.isLogged()) {
                var userData = user.getLoggedUserMetaData().data();
                window.chatUserData.name = userData.first_name + ' ' + userData.last_name;
                window.chatUserData.email = userData.email;
                window.chatUserData.phone = userData.mobile_phone;
            }

            this.handleIframe(window.chatUserData || {}, this.userLastMessage);
            this.chatBotStateHandler('chatcenter');
        } else {
            if (user.isLogged()) {
                var userData = user.getLoggedUserMetaData().data();
                $('body').Chatcenter({
                    "UserName" : userData.first_name + ' ' + userData.last_name,
                    "UserEmail" : userData.email,
                    "UserPhone" : userData.mobile_phone
                }, false);
            } else {
                $('body').Chatcenter({}, false);
            }
        }
    },

    handleIframe: function (chatUserData, userLastMessage) {
        var appId = 'callCenterCiscoBubbleChat';

        if (document.getElementById(appId)) {
            return;
        }
        var $chatCenterIframe = $('.js-chat-center-iframe');
        var widgetId = '2';
        var secure = 'true';
        var appMargin = 10;
        var name = chatUserData.name || '';
        var email = chatUserData.email || '';
        var phone = chatUserData.phone || '';
        var dkparameters = '';
        var dkchat = '';
        var queue = '';
        var conversation = userLastMessage || '';
        var submit = 'false';
        var baseUrl = 'https://chatservice.digikala.com';

        if(isModuleActive('not_production')) {
            baseUrl = 'https://ucservice.digikala.com/chatservice';
        }

        var iframe = document.createElement('iframe');
        iframe.setAttribute('sandbox', 'allow-scripts allow-same-origin allow-forms allow-popups');
        iframe.setAttribute('id', appId);
        iframe.setAttribute('style', 'width:100%;height: 70vh;max-height: 580px;min-height: 500px; border: none; z-index:999;');
        var appUrl =  `${baseUrl}/chat.html?v=${Date.now().toFixed()}&bubble=true&UN=${name}&UP=${phone}&UE=${email}&queue=${queue}&conversation=${conversation}&dkparameters=${dkparameters}&submit=${submit}`;
        iframe.setAttribute('src', appUrl);
        $chatCenterIframe.html(iframe);
        document.getElementById(appId).style.visibility = 'visible';
    },
};

$(function () {
    chatActions.init();
});
