(window.webpackJsonp=window.webpackJsonp||[]).push([[189],{413:function(e,o,t){"use strict";t.r(o);var i=t(3),n=t(5),r=t(2),s=t(189),a="https://ol-zoomify.surge.sh/zoomify/",c=new s.b({url:a,size:[4e3,3e3],crossOrigin:"anonymous",zDirection:-1}),u=c.getTileGrid().getExtent(),l=new s.b({url:a,size:[4e3,3e3],crossOrigin:"anonymous",zDirection:-1,tilePixelRatio:2,tileSize:128}),g=new n.a({source:c});new i.a({layers:[g],target:"map",view:new r.a({resolutions:g.getSource().getTileGrid().getResolutions(),extent:u,constrainOnlyCenter:!0})}).getView().fit(u),document.getElementById("zoomifyProtocol").addEventListener("change",(function(e){var o=e.currentTarget.value;"zoomify"===o?g.setSource(c):"zoomifyretina"===o&&g.setSource(l)}))}},[[413,0]]]);
//# sourceMappingURL=zoomify.js.map