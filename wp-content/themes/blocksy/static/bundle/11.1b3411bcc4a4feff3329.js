(window.blocksyJsonP=window.blocksyJsonP||[]).push([[11],{29:function(e,t,o){"use strict";o.r(t),o.d(t,"mount",(function(){return a}));var i=o(1),c=o.n(i);o(0);function n(e,t){var o=Object.keys(e);if(Object.getOwnPropertySymbols){var i=Object.getOwnPropertySymbols(e);t&&(i=i.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),o.push.apply(o,i)}return o}function r(e){for(var t=1;t<arguments.length;t++){var o=null!=arguments[t]?arguments[t]:{};t%2?n(Object(o),!0).forEach((function(t){s(e,t,o[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(o)):n(Object(o)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(o,t))}))}return e}function s(e,t,o){return t in e?Object.defineProperty(e,t,{value:o,enumerable:!0,configurable:!0,writable:!0}):e[t]=o,e}function l(){try{return document.createEvent("TouchEvent"),!0}catch(e){return!1}}const a=(e,t)=>{let{event:o}=t;const i=function(e){let t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:null;var o=c()(".pswp")[0],i=c()(e),n=i;const r=[...e.closest(".woocommerce-product-gallery").querySelectorAll(".flexy-items .ct-image-container img:not(.zoomImg), .woocommerce-product-gallery > .ct-image-container img:not(.zoomImg)")].map(e=>({img:e,src:e.closest("a")?e.closest("a").href:e.src,w:(e.closest("a")?e.closest("a").dataset.width:e.width)||e.width,h:(e.closest("a")?e.closest("a").dataset.height:e.width)||e.width,title:e.getAttribute("title")}));if(1!==r.length||!r[0].img.closest("a")||r[0].img.closest("a").getAttribute("href")){var s=c.a.extend({index:0===t?0:t||c()(n).index(),addCaptionHTMLFn:function(e,t){return e.title?(t.children[0].textContent=e.title,!0):(t.children[0].textContent="",!1)}},{shareEl:!1,closeOnScroll:!1,history:!1,hideAnimationDuration:0,showAnimationDuration:0}),l=new PhotoSwipe(o,PhotoSwipeUI_Default,r,s);l.init(),document.body.classList.add("ct-photoswipe-open"),l.listen("close",()=>{setTimeout(()=>{document.body.classList.remove("ct-photoswipe-open")},300)})}};!function(){let{onlyZoom:e=!1}=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{},t=[...document.querySelectorAll(".woocommerce-product-gallery .woocommerce-product-gallery__trigger")];[...document.querySelectorAll(".single-product .flexy-items .ct-image-container, .single-product .woocommerce-product-gallery > .ct-image-container")].map(o=>{if(!(window.wp&&wp.customize&&wp.customize("has_product_single_lightbox")&&"yes"===wp.customize("has_product_single_lightbox")())&&window.wp&&wp.customize||e||o.hasPhotoswipeListener||(o.hasPhotoswipeListener=!0,o.addEventListener("click",e=>{if(e.preventDefault(),t.length>0)return;let c=0;o.closest(".flexy-items")&&(c=[...o.closest(".flexy-items").children].indexOf(o.parentNode)),window.PhotoSwipe&&i(o,c)})),c.a.fn.zoom&&(window.wp&&wp.customize&&wp.customize("has_product_single_zoom")&&"yes"===wp.customize("has_product_single_zoom")()||!window.wp||!wp.customize)){const e=o.getBoundingClientRect();c()(o).zoom(r(r({url:o.href,touch:!1,duration:50},e.width>parseFloat(o.dataset.width)||e.height>parseFloat(o.dataset.height)?{magnify:2}:{}),l()?{on:"toggle"}:{}))}}),c.a.fn.zoom&&(wp.customize&&wp.customize("has_product_single_zoom")&&"yes"===wp.customize("has_product_single_zoom")()||!wp.customize)&&setTimeout(()=>{o&&(o.target.closest(".flexy-items")||o.target.closest(".ct-image-container")&&o.target.closest(".ct-image-container").parentNode.classList.contains("woocommerce-product-gallery"))&&c()(o.target.closest(".ct-image-container")).trigger(l()?"click.zoom":"mouseenter.zoom")},150),t.map(e=>{e.hasPhotoswipeListener||(e.hasPhotoswipeListener=!0,e.addEventListener("click",t=>{if(t.preventDefault(),t.stopPropagation(),!e.closest(".ct-image-container")||e.closest(".flexy-items")){if(e.closest(".ct-image-container")&&e.closest(".flexy-items")&&e.closest(".ct-columns-top-gallery"))window.PhotoSwipe&&i(e.closest(".ct-image-container"),[...e.closest(".ct-image-container").parentNode.parentNode.children].indexOf(e.closest(".ct-image-container").parentNode));else if(document.querySelector(".single-product .woocommerce-product-gallery > .ct-image-container")&&window.PhotoSwipe&&i(document.querySelector(".single-product .woocommerce-product-gallery > .ct-image-container")),document.querySelector(".single-product .flexy-items .ct-image-container")){let e=document.querySelector(".single-product .flexy-pills"),t=Array.from(e.querySelector(".active").parentNode.children).indexOf(e.querySelector(".active")||e.firstElementChild);window.PhotoSwipe&&i(document.querySelector(".single-product .flexy-items").children[t].firstElementChild,t)}}else window.PhotoSwipe&&i(e.closest(".ct-image-container"))}))})}()}}}]);