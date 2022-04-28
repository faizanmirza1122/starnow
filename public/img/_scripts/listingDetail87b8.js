/*! For license information please see listingOwnerWidget.js.LICENSE?x=0e5ef5fced0b32754a3e */
(window.webpackJsonp=window.webpackJsonp||[]).push([[120,27,44],{1367:function(e,t,n){e.exports=n(823)},229:function(e,t,n){"use strict";var i=n(0),a=n(337),r=n.n(a),s=n(3),l=n.n(s);t.a=function(e){var t=1===e.activePage,n=Math.ceil(e.totalItemsCount/e.itemsCountPerPage),a=e.activePage===n,s=l()("paging__button paging__button--next",{"paging__button--only-item":t}),o=l()("paging__button paging__button--prev",{"paging__button--only-item":a});return i.createElement(r.a,{innerClass:"paging",prevPageText:"Prev",nextPageText:"Next",itemClass:"paging__item",linkClass:"paging__link",itemClassFirst:"dn",itemClassLast:"dn",itemClassPrev:o,itemClassNext:s,hideDisabled:!0,itemsCountPerPage:e.itemsCountPerPage,totalItemsCount:e.totalItemsCount,activePage:e.activePage,onChange:e.onChange,getPageUrl:e.getPageUrl})}},243:function(e,t,n){"use strict";n.r(t);var i=n(1),a=n(0),r=n(11);t.default=function(e){return a.createElement(r.a,Object(i.a)({viewBox:"1715 -640.6 24.2 19"},e),a.createElement("path",{d:"M1737.8-633.3a200.4 200.4 0 00-8 5.5l-1.3.6a4 4 0 01-3 0l-1.3-.6-1.2-.9-6.7-4.6c-.5-.3-1-.7-1.4-1.2v10.7a2 2 0 002.1 2.1h19.9a2 2 0 002.1-2.1v-10.7c-.2.5-.7.9-1.2 1.2zm.7-6.6a2 2 0 00-1.5-.6h-19.9c-.7 0-1.2.2-1.6.7a2.8 2.8 0 00.1 3.6c.5.7 1 1.2 1.6 1.5l2.8 1.9 3.5 2.5.6.4.7.5.7.4.8.4.7.1.7-.1.8-.4.7-.4.7-.5.6-.4 6.3-4.4c.6-.5 1.2-1 1.6-1.7.4-.6.7-1.3.7-2 .1-.6-.1-1.1-.6-1.5z"}))}},337:function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var i=function(){function e(e,t){for(var n=0;n<t.length;n++){var i=t[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}return function(t,n,i){return n&&e(t.prototype,n),i&&e(t,i),t}}(),a=o(n(0)),r=(o(n(10)),o(n(521))),s=o(n(522)),l=o(n(3));function o(e){return e&&e.__esModule?e:{default:e}}var c=function(e){function t(){return function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,t),function(e,t){if(!e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return!t||"object"!=typeof t&&"function"!=typeof t?e:t}(this,(t.__proto__||Object.getPrototypeOf(t)).apply(this,arguments))}return function(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function, not "+typeof t);e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,enumerable:!1,writable:!0,configurable:!0}}),t&&(Object.setPrototypeOf?Object.setPrototypeOf(e,t):e.__proto__=t)}(t,a.default.Component),i(t,[{key:"isFirstPageVisible",value:function(e){var t=this.props,n=t.hideDisabled;return t.hideNavigation,!(t.hideFirstLastPages||n&&!e)}},{key:"isPrevPageVisible",value:function(e){var t=this.props,n=t.hideDisabled;return!(t.hideNavigation||n&&!e)}},{key:"isNextPageVisible",value:function(e){var t=this.props,n=t.hideDisabled;return!(t.hideNavigation||n&&!e)}},{key:"isLastPageVisible",value:function(e){var t=this.props,n=t.hideDisabled;return t.hideNavigation,!(t.hideFirstLastPages||n&&!e)}},{key:"buildPages",value:function(){for(var e=[],t=this.props,n=t.itemsCountPerPage,i=t.pageRangeDisplayed,o=t.activePage,c=t.prevPageText,m=t.nextPageText,u=t.firstPageText,d=t.lastPageText,f=t.totalItemsCount,g=t.onChange,p=t.activeClass,h=t.itemClass,v=t.itemClassFirst,b=t.itemClassPrev,E=t.itemClassNext,C=t.itemClassLast,P=t.activeLinkClass,_=t.disabledClass,x=(t.hideDisabled,t.hideNavigation,t.linkClass),w=t.linkClassFirst,y=t.linkClassPrev,N=t.linkClassNext,k=t.linkClassLast,L=(t.hideFirstLastPages,t.getPageUrl),O=new r.default(n,i).build(f,o),I=O.first_page;I<=O.last_page;I++)e.push(a.default.createElement(s.default,{isActive:I===o,key:I,href:L(I),pageNumber:I,pageText:I+"",onClick:g,itemClass:h,linkClass:x,activeClass:p,activeLinkClass:P}));return this.isPrevPageVisible(O.has_previous_page)&&e.unshift(a.default.createElement(s.default,{key:"prev"+O.previous_page,pageNumber:O.previous_page,onClick:g,pageText:c,isDisabled:!O.has_previous_page,itemClass:(0,l.default)(h,b),linkClass:(0,l.default)(x,y),disabledClass:_})),this.isFirstPageVisible(O.has_previous_page)&&e.unshift(a.default.createElement(s.default,{key:"first",pageNumber:1,onClick:g,pageText:u,isDisabled:!O.has_previous_page,itemClass:(0,l.default)(h,v),linkClass:(0,l.default)(x,w),disabledClass:_})),this.isNextPageVisible(O.has_next_page)&&e.push(a.default.createElement(s.default,{key:"next"+O.next_page,pageNumber:O.next_page,onClick:g,pageText:m,isDisabled:!O.has_next_page,itemClass:(0,l.default)(h,E),linkClass:(0,l.default)(x,N),disabledClass:_})),this.isLastPageVisible(O.has_next_page)&&e.push(a.default.createElement(s.default,{key:"last",pageNumber:O.total_pages,onClick:g,pageText:d,isDisabled:O.current_page===O.total_pages,itemClass:(0,l.default)(h,C),linkClass:(0,l.default)(x,k),disabledClass:_})),e}},{key:"render",value:function(){var e=this.buildPages();return a.default.createElement("ul",{className:this.props.innerClass},e)}}]),t}();c.defaultProps={itemsCountPerPage:10,pageRangeDisplayed:5,activePage:1,prevPageText:"⟨",firstPageText:"«",nextPageText:"⟩",lastPageText:"»",innerClass:"pagination",itemClass:void 0,linkClass:void 0,activeLinkClass:void 0,hideFirstLastPages:!1,getPageUrl:function(e){return"#"}},t.default=c},359:function(e,t,n){"use strict";n.r(t),n.d(t,"StarNowVerifiedPill",(function(){return s})),n.d(t,"WithTooltip",(function(){return l}));var i=n(0),a=n(47),r=n(51),s=function(){return i.createElement("div",{className:"star-now-verified-pill"},i.createElement("img",{className:"star-now-verified-icon",src:"/images/star.svg"}),"StarNow Verified")},l=Object(a.c)(s,{tooltipContent:i.createElement((function(){return i.createElement(r.a,{text:"These members connected via a StarNow listing"})}),null)});t.default=s,n(595)},413:function(e,t,n){"use strict";n.r(t);var i=n(1),a=n(0),r=n(11);t.default=function(e){return a.createElement(r.a,Object(i.a)({viewBox:"0 0 86 86"},e),a.createElement("g",{fill:"none",fillRule:"evenodd"},a.createElement("rect",{width:"66",height:"76",x:"7",y:"10",fill:"#FFF",rx:"8"}),a.createElement("path",{fill:"currentColor",d:"M69.6.4H16.1A16 16 0 000 16.5v53.6a16 16 0 0016 16h29.8V53H34.6V40h11.2v-9.4c0-11.1 6.8-17.1 16.6-17.1 4.7 0 8.8.3 10 .5v11.5h-6.8c-5.4 0-6.4 2.6-6.4 6.3V40h12.7l-1.6 13H59.2V86h10.4a16 16 0 0016.1-16V16.5a16 16 0 00-16-16z"})))}},428:function(e,t,n){"use strict";n.r(t),n.d(t,"PrivatePill",(function(){return m}));var i=n(0),a=n(124),r=n(263),s=n(47),l=n(18),o=n(51),c=i.createElement(o.a,{text:"This member has set their profile to private."}),m=function(e){var t;return i.createElement("span",{className:"ml1 cursor--pointer"},i.createElement(s.b,{interactive:!0,tooltipContent:(t=e.tooltipContent,null!=t?t:c)},i.createElement(a.default,{text:"private",icon:i.createElement(r.default,{inline:!0,height:"12px",width:"10px"}),className:"v-mid ma0",size:e.size,txtColour:"rgba(255,255,255,1)",bgColour:"rgba(0,0,0,0.3)"})))};t.default=m,Object(l.a)(m,"PrivatePill")},521:function(e,t){function n(e,t){if(!(this instanceof n))return new n(e,t);this.per_page=e||25,this.length=t||10}e.exports=n,n.prototype.build=function(e,t){var n=Math.ceil(e/this.per_page);e=parseInt(e,10),(t=parseInt(t,10)||1)<1&&(t=1),t>n&&(t=n);var i=Math.max(1,t-Math.floor(this.length/2)),a=Math.min(n,t+Math.floor(this.length/2));a-i+1<this.length&&(t<n/2?a=Math.min(n,a+(this.length-(a-i))):i=Math.max(1,i-(this.length-(a-i)))),a-i+1>this.length&&(t>n/2?i++:a--);var r=this.per_page*(t-1);r<0&&(r=0);var s=this.per_page*t-1;return s<0&&(s=0),s>Math.max(e-1,0)&&(s=Math.max(e-1,0)),{total_pages:n,pages:Math.min(a-i+1,n),current_page:t,first_page:i,last_page:a,previous_page:t-1,next_page:t+1,has_previous_page:t>1,has_next_page:t<n,total_results:e,results:Math.min(s-r+1,e),first_result:r,last_result:s}}},522:function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var i=function(){function e(e,t){for(var n=0;n<t.length;n++){var i=t[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}return function(t,n,i){return n&&e(t.prototype,n),i&&e(t,i),t}}(),a=n(0),r=l(a),s=(l(n(10)),l(n(3)));function l(e){return e&&e.__esModule?e:{default:e}}function o(e,t,n){return t in e?Object.defineProperty(e,t,{value:n,enumerable:!0,configurable:!0,writable:!0}):e[t]=n,e}var c=function(e){function t(){return function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,t),function(e,t){if(!e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return!t||"object"!=typeof t&&"function"!=typeof t?e:t}(this,(t.__proto__||Object.getPrototypeOf(t)).apply(this,arguments))}return function(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function, not "+typeof t);e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,enumerable:!1,writable:!0,configurable:!0}}),t&&(Object.setPrototypeOf?Object.setPrototypeOf(e,t):e.__proto__=t)}(t,a.Component),i(t,[{key:"handleClick",value:function(e){var t=this.props,n=t.isDisabled,i=t.pageNumber;e.preventDefault(),n||this.props.onClick(i)}},{key:"render",value:function(){var e,t=this.props,n=t.pageText,i=(t.pageNumber,t.activeClass),a=t.itemClass,l=t.linkClass,c=t.activeLinkClass,m=t.disabledClass,u=t.isActive,d=t.isDisabled,f=t.href,g=(0,s.default)(a,(o(e={},i,u),o(e,m,d),e)),p=(0,s.default)(l,o({},c,u));return r.default.createElement("li",{className:g,onClick:this.handleClick.bind(this)},r.default.createElement("a",{className:p,href:f},n))}}]),t}();c.defaultProps={activeClass:"active",disabledClass:"disabled",itemClass:void 0,linkClass:void 0,activeLinkCLass:void 0,isActive:!1,isDisabled:!1,href:"#"},t.default=c},595:function(e,t,n){(function(t){e.exports=t.StarNowVerifiedPill=n(359)}).call(this,n(23))},823:function(e,t,n){"use strict";n.r(t);var i=n(1),a=n(0),r=n(18),s=n(61),l=n(103),o=n(51),c=n(3),m=n.n(c),u=n(12),d=n(6),f=n(41),g=n(44),p=n(125),h=n(52),v=n(26),b=n(229),E=n(359),C=n(50),P=function(e){return a.createElement("div",{className:"message recommendation-messages"},e.recommendations.map((function(t){return a.createElement(_,{key:t.memberRecommendationId,recommendation:t,memberId:e.memberId})})))},_=function(e){var t=new Date(e.recommendation.date),n=Object(C.format)(t,"D MMMM YYYY");return a.createElement("div",{className:"recommendation-message pv3 dib flex-ns"},a.createElement("div",{className:"msg-thumb center"},a.createElement("div",{className:"msg-thumb-headshot"},a.createElement("a",{href:e.recommendation.profilePath,className:"headshot headshot-s"},a.createElement("img",{src:e.recommendation.thumbUrl,alt:""})),e.recommendation.isAdvertiser&&a.createElement("span",{className:"casting-pro-pill"},"A")),a.createElement("div",{className:"msg-thumb-footer"},a.createElement("a",{href:e.recommendation.profilePath},a.createElement("p",{className:"txt-stone tracked-tight fw7 txt-center"},e.recommendation.displayName)))),a.createElement("div",{className:"w-100"},a.createElement("div",{className:"mr3 ml1 mr4-ns ml2-ns"},a.createElement("p",null,e.recommendation.body),a.createElement("p",{className:"txt-steel f8 mb0"},"Recommended for ",a.createElement(x,{recommendation:e.recommendation}),a.createElement("span",{className:"mh1"},"•"),n),e.recommendation.isStarNowVerified&&a.createElement(E.WithTooltip,null))))},x=function(e){return null===e.recommendation.listingId?a.createElement(a.Fragment,null,e.recommendation.recommendationCategory):a.createElement("a",{className:"txt-steel under",href:"/listing/"+e.recommendation.listingId},e.recommendation.recommendationCategory)},w=function(e){var t=Object(i.e)(a.useState(void 0),2),n=t[0],r=t[1],s=Object(i.e)(a.useState([]),2),l=s[0],o=s[1],c=Object(i.e)(a.useState(1),2),m=c[0],d=c[1],f=a.useContext(h.a).global;a.useEffect((function(){var t;e.isOpen&&(r(g.a.Loading),t={hitType:"event",eventCategory:"listing-owner-widget",eventAction:"recommendations-open",eventLabel:"click-link",transport:"beacon"},ga("send",t.hitType,t),Object(v.b)(Object(p.c)(e.advertiserId,f.starNowApiUrl),300).then((function(e){r(void 0),o(e.recommendations)})).catch((function(e){r(g.a.Error)})))}),[e.isOpen]);var E=5*(m-1),C=5*m,_=l.slice(E,C),x=l.length>5;return a.createElement(g.b,{isOpen:e.isOpen,size:3,onRequestClose:e.onRequestClose,loadingState:n},a.createElement("div",{className:"pb3 ph3"},a.createElement("div",{className:"copy__h2 txt-center mb2"},"Recommendations"),a.createElement("p",{className:"f8 txt-center mb3"}," ",a.createElement("span",{className:"casting-pro-pill"},"A")," = Advertiser"),a.createElement(P,{recommendations:_,memberId:e.advertiserId}),a.createElement(u.a,{condition:x},a.createElement(b.a,{activePage:m,itemsCountPerPage:5,totalItemsCount:l.length,onChange:function(e){return d(e)},getPageUrl:function(e){return e.toString()}}))))},y=n(243),N=n(413),k=n(428),L=n(124),O=n(62),I=function(e){return a.createElement("div",{className:"listing-owner-widget__verification-item"},a.createElement("span",{className:"listing-owner-widget__verification-state"},void 0!==e.icon&&e.icon,void 0!==e.count&&(void 0!==(t=e.count)&&t>99?"99+":t)),e.children,void 0!==e.tooltipText&&a.createElement(O.default,{className:"ml2",infoPopupText:e.tooltipText}));var t};n.d(t,"ListingOwnerVerificationList",(function(){return S}));var M=function(e){var t=e.global,n=e.session,i=e.advertiserInfo,r=Boolean(e.isListingOwner||i.recommendationCount||i.previousListingCount||i.isEmailVerified||i.isFacebookVerified);return a.createElement(h.a.Provider,{value:{global:t,session:n}},a.createElement("div",{className:"listing-owner-widget js-owner-widget"},a.createElement("img",{"data-src":i.thumbUrl,className:"listing-owner-widget__profile-thumb lazy"}),a.createElement(U,{advertiserInfo:i,isPaidMember:e.isPaidMember,isUserSignedIn:e.isUserSignedIn,listingURL:e.listingURL,isListingOwner:e.isListingOwner}),a.createElement(u.a,{condition:e.isListingOwner},a.createElement(d.d,{className:"mb2",href:"/l/42086"},"Edit my profile details")),a.createElement(u.a,{condition:r},a.createElement(S,{advertiserInfo:i,isListingOwner:e.isListingOwner,isPaidMember:e.isPaidMember,listingURL:e.listingURL}))))},T=function(e){var t=Object(i.e)(a.useState(!1),2),n=t[0],r=t[1],s=e.advertiserInfo,l=!s.isPrivate&&e.isPaidMember?a.createElement("a",{className:"txt--sky-blue",onClick:function(){return r(!0)}},e.recommendationText):e.recommendationText;return a.createElement(a.Fragment,null,a.createElement(I,{count:e.recommendationCount},l),a.createElement(w,{isOpen:n,onRequestClose:function(){return r(!1)},advertiserId:s.advertiserId}))},U=function(e){var t=e.advertiserInfo;return a.createElement(a.Fragment,null,a.createElement("div",{className:"listing-owner-widget__details mw6"},a.createElement(j,{advertiserInfo:t,isPaidMember:e.isPaidMember,isUserSignedIn:e.isUserSignedIn,listingURL:e.listingURL,isListingOwner:e.isListingOwner}),a.createElement(u.a,{condition:e.isUserSignedIn},a.createElement(a.Fragment,null,null!==t.type&&a.createElement("p",{className:"f6 italic txt-center"},a.createElement(l.default,{text:t.type,length:50})),a.createElement("p",{className:"mb1"},"Located in ",t.location),a.createElement("p",null,"Member since ",t.joinDate)))),null!==t.bio&&a.createElement("div",{className:"mh-auto mb2 mw6"},a.createElement(l.default,{text:t.bio,length:200})))},j=function(e){var t=e.advertiserInfo,n=!e.isUserSignedIn||!e.isPaidMember||t.isPrivate,i=t.isPrivate&&e.isPaidMember&&e.isUserSignedIn,r=a.createElement(R,{advertiserInfo:t,listingURL:e.listingURL,isUserSignedIn:e.isUserSignedIn,isPaidMember:e.isPaidMember,isListingOwner:e.isListingOwner});return a.createElement("div",{className:m()("mb2 f6 lh-copy",{fw7:n,"flex items-center":i})},"Listed by ",r)},R=function(e){var t=e.advertiserInfo,n=encodeURIComponent(e.listingURL),i="/l/42084?return_url="+encodeURI("/signin?return_url="+n),r="/l/42085?return_url="+encodeURI("/register/membership.aspx?return_url="+n);return e.isUserSignedIn?t.isPrivate?a.createElement(k.default,{size:L.PillSize.Medium,tooltipContent:a.createElement(o.a,{text:"Some casting professionals need to remain anonymous during the casting phase of the production due to commercial sensitivity."})}):e.isPaidMember||e.isListingOwner?a.createElement("span",{className:"fw7"},t.name):a.createElement("a",{className:"lh-copy",href:r},"Upgrade to view"):a.createElement("a",{className:"lh-copy",href:i},"Sign in for details")},S=function(e){var t=e.advertiserInfo,n=!t.isFacebookVerified&&e.isListingOwner,i=!t.isEmailVerified&&e.isListingOwner,r=Object(f.a)("Recommendation","Recommendations",t.recommendationCount),l=Object(f.a)("Previous Listing","Previous Listings",t.previousListingCount),o=encodeURIComponent(e.listingURL),c="/l/42083?resend=1&return_url="+encodeURIComponent("/member/ConfirmEmailAddress?return_url="+o);return a.createElement("div",{className:"flex justify-center"},a.createElement("div",null,a.createElement(u.a,{condition:null!==t.recommendationCount&&t.recommendationCount>0},a.createElement(T,{advertiserInfo:t,recommendationText:r,recommendationCount:t.recommendationCount,isPaidMember:e.isPaidMember})),a.createElement(u.a,{condition:null!==t.previousListingCount&&t.previousListingCount>0},a.createElement(I,{count:t.previousListingCount},l)),a.createElement(u.a,{condition:t.isEmailVerified},a.createElement(I,{icon:a.createElement(s.default,{height:"16px",width:"16px"}),tooltipText:"This member has confirmed their email account registered with StarNow actually belongs to them."},"Email verified")),a.createElement(u.a,{condition:i},a.createElement(I,{icon:a.createElement(y.default,{height:"20px",width:"20px",className:"txt-steel"})},a.createElement("a",{href:c},"Get Email verified"))),a.createElement(u.a,{condition:t.isFacebookVerified},a.createElement(I,{icon:a.createElement(s.default,{height:"16px",width:"16px"}),tooltipText:"This member has linked their facebook account with StarNow."},"Facebook verified")),a.createElement(u.a,{condition:n},a.createElement(I,{icon:a.createElement(N.default,{height:"20px",width:"20px",className:"txt-steel"})},a.createElement("a",{onClick:function(){var e;e={hitType:"event",eventCategory:"listing-owner-widget",eventAction:"facebook-verify",eventLabel:"click-link",transport:"beacon"},ga("send",e.hitType,e),snfb.authorizefb({reload:!0})}},"Get Facebook verified")))))};t.default=M,Object(r.a)(M,"ListingOwnerWidget")}},[[1367,1,2,0]]]);
//# sourceMappingURL=listingOwnerWidget.js.map?x=0e5ef5fced0b32754a3e;
/*! For license information please see liveListings.js.LICENSE?x=4245c812da302c6a55aa */
(window.webpackJsonp=window.webpackJsonp||[]).push([[122],{1294:function(t,e,i){t.exports=i(797)},776:function(t,e,i){(function(e){t.exports=e.LiveListings=i(797)}).call(this,i(23))},797:function(t,e,i){"use strict";i.r(e);var r=i(0),o=i(1),n=function(t){function e(e){var i=t.call(this,e)||this;return i.updateScroll=i.updateScroll.bind(i),i.updateArrowVisibility=i.updateArrowVisibility.bind(i),i.state={showLeftArrow:!1,showRightArrow:!1},i}return Object(o.c)(e,t),e.prototype.componentDidMount=function(){this.setState({showRightArrow:this.scrollContainer.scrollWidth-this.scrollContainer.clientWidth>0})},e.prototype.updateScroll=function(t){var e=this.scrollContainer.scrollLeft%this.props.scrollIncrement,i=this.scrollContainer.scrollLeft-e+this.props.scrollIncrement*t;s(this.scrollContainer,{x:i,y:0},500)},e.prototype.updateArrowVisibility=function(){var t=this.scrollContainer.scrollLeft>0,e=0===this.scrollContainer.scrollLeft;(t&&!this.state.showLeftArrow||e&&this.state.showLeftArrow)&&this.setState({showLeftArrow:this.scrollContainer.scrollLeft>0});var i=this.scrollContainer.scrollLeft+this.scrollContainer.clientWidth===this.scrollContainer.scrollWidth;(i&&this.state.showRightArrow||t&&!this.state.showRightArrow)&&this.setState({showRightArrow:!i})},e.prototype.render=function(){var t=this;return r.createElement("div",null,r.createElement(l,{onClick:function(){t.updateScroll(-1)},isVisible:this.state.showLeftArrow,direction:"left"}),r.createElement("div",{ref:function(e){null!==e&&(t.scrollContainer=e)},className:"scroll--horizontal relative",onScroll:this.updateArrowVisibility},this.props.children),r.createElement(l,{onClick:function(){t.updateScroll(1)},isVisible:this.state.showRightArrow,direction:"right"}))},e}(r.Component),l=function(t){return r.createElement("div",{style:{opacity:t.isVisible?1:0},className:"scroll-arrow scroll-arrow--"+t.direction,onClick:t.onClick},r.createElement("img",{src:"/images/icons/svg/arrow-in-circle--"+t.direction+".svg",width:"30",alt:"See more"}))},s=function(t,e,i){var r;void 0===i&&(i=350);var o=t.scrollLeft,n=t.scrollTop,l=e.x-o,s=e.y-n;window.requestAnimationFrame((function e(c){var a=function(t){return--t*t*t+1};r||(r=c);var h=(c-r)/i,m=o+l*a(h),u=n+s*a(h);t.scrollLeft=m,t.scrollTop=u,h<1&&window.requestAnimationFrame(e)}))},c=n;e.default=function(t){return r.createElement("div",{className:"mv2 live-listing__wrapper"},r.createElement(c,{scrollIncrement:170},t.Listings.map((function(e,i){return r.createElement("div",{onClick:function(){var e,r;e=i,(r=t.TrackListingEventCategory)&&ga("send","event",{eventCategory:r,eventAction:"click",eventLabel:"position_"+String(e+1)})},key:e.ListingID,className:"box box--simple box--slim mr2 dib live-listing__card"},r.createElement("div",{className:"box__body"},r.createElement("a",{href:e.ListingURL,title:e.Title},r.createElement("div",{className:"live-listing__image mb2"},r.createElement("img",{src:e.ImagePath,alt:e.Title})),r.createElement("span",{className:"live-listing__title"},e.Title))),r.createElement("div",{className:"fade"}))}))))},i(776)}},[[1294,1,2]]]);
//# sourceMappingURL=liveListings.js.map?x=4245c812da302c6a55aa;
/*! For license information please see listingPills.js.LICENSE?x=ab433ea05bda6bd3e3ad */
(window.webpackJsonp=window.webpackJsonp||[]).push([[121],{1296:function(n,o,p){n.exports=p(469)}},[[1296,1,2,0]]]);
//# sourceMappingURL=listingPills.js.map?x=ab433ea05bda6bd3e3ad;