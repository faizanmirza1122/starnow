/*! For license information please see videoList.js.LICENSE?x=463b792a4a9523765312 */
(window.webpackJsonp=window.webpackJsonp||[]).push([[189],{1312:function(e,t,o){e.exports=o(826)},826:function(e,t,o){"use strict";o.r(t);var i,r=o(1),s=o(0),n=o(199),a=o.n(n),c=o(9),d=o(34),l=o(25),u=o(94),m=o(71),p=o(142),h=o(3),v=o.n(h),f=o(367),w=o.n(f),b=o(442),E=o.n(b);!function(e){e[e.YouTube=1]="YouTube",e[e.Vimeo=2]="Vimeo"}(i||(i={}));var y=function(e){function t(){var t=null!==e&&e.apply(this,arguments)||this;return t.reactPlayerConfig={vimeo:{playerOptions:{color:"7BC718"}}},t.trackVideoPlay=function(){return Object(r.b)(t,void 0,void 0,(function(){var e,t,o,i,s,n,a,d;return Object(r.d)(this,(function(r){switch(r.label){case 0:e=this.props,t=e.mediaID,o=e.videoOwnerId,i=e.starnow,s=i.sessionCookie,n=i.memberId,a=JSON.stringify({requestID:s,viewerMemberID:n}),r.label=1;case 1:return r.trys.push([1,3,,4]),[4,Object(c.j)(i.starNowApiUrl+"/v1/member/"+o+"/media/"+t+"/trackplay",{body:a})];case 2:return r.sent(),[3,4];case 3:return d=r.sent(),console.log(d),[3,4];case 4:return[2]}}))}))},t}return Object(r.c)(t,e),t.prototype.getVideoUrl=function(){var e=this.props,t=e.mediaProviderID;switch(e.mediaType){case i.YouTube:return"https//www.youtube.com/watch?v="+t;case i.Vimeo:return"https://www.vimeo.com/"+t}},t.prototype.render=function(){return s.createElement("div",{className:"video-player-new--container"},s.createElement(E.a,{width:"100%",height:"100%",url:this.getVideoUrl(),onStart:this.trackVideoPlay,config:this.reactPlayerConfig,controls:!0}))},t}(s.Component),D=o(280),V=o(18),g=o(6);o.d(t,"VideoCard",(function(){return S}));var O=function(e){return s.createElement("div",{className:"w-100 mt2 mb3 mr3-ns"},s.createElement(y,Object(r.a)({},e)),s.createElement("p",{className:"txt-black-90 f4 f3-ns mb1 fw6 lh-title"},s.createElement("a",{className:"txt-black-90 f4 f3-ns fw6",href:e.url},e.captionText)),s.createElement("p",{className:"txt-steel f6 mb1"},e.uploaded))},S=function(e){return s.createElement("div",{className:v()("video-card-new",e.className)},s.createElement("a",{href:e.url,className:"video-card-new--content"},s.createElement("div",{className:"video-card-new--thumb-container"},s.createElement("img",{className:"video-card-new--thumb",width:"320",height:"180",src:e.thumbURL})),s.createElement("div",{className:"pl2 pl1-ns"},s.createElement("p",{className:"video-card-new--heading "},e.captionText.length>=40?a()(e.captionText,40):e.captionText),s.createElement("p",{className:"txt-steel f8 mb0 mb1-ns"},e.uploaded))),e.isEditing&&s.createElement(C,{mediaID:e.mediaID,actions:e.actions,isFirstItem:0===e.index,isLastItem:e.index===e.listLength-1}))},C=function(e){var t=e.mediaID,o=e.isFirstItem,i=e.actions,r=e.isLastItem,n=function(){return{}};return s.createElement("footer",{className:"flex justify-around mt3 w-100 self-end"},s.createElement(u.default,{className:"fade-on-hover video-sort-order-left",colour:o?"#B3B3B3":"#20b6cc",style:{cursor:o?"not-allowed":"pointer"},onClick:o?n:function(){return i.moveUp(t)}}),s.createElement(u.default,{className:"fade-on-hover video-sort-order-right",colour:r?"#B3B3B3":"#20b6cc",style:{cursor:r?"not-allowed":"pointer"},onClick:r?n:function(){return i.moveDown(t)}}),s.createElement(p.default,{className:"pointer fade-on-hover",colour:"#20b6cc",onClick:function(){return i.edit(t)}}),s.createElement(m.default,{className:"pointer fade-on-hover",colour:"#20b6cc",onClick:function(){return i.delete(t)}}))},N=function(e){return s.createElement(d.default,{size:1,isOpen:e.isOpen,title:"Are you sure?",onRequestClose:e.onRequestClose},s.createElement("div",{className:"flex flex-column justify-end pa3 w-100"},s.createElement(g.d,{onClick:e.delete,className:"w-100 mb1"},"Delete video"),s.createElement("a",{onClick:e.onRequestClose,className:"mt3 flex justify-center"},"Cancel")))},I=function(e){function t(t){var o=e.call(this,t)||this;return o.showMore=o.showMore.bind(o),o.moveVideoUp=o.moveVideoUp.bind(o),o.moveVideoDown=o.moveVideoDown.bind(o),o.deleteVideo=o.deleteVideo.bind(o),o.editVideo=o.editVideo.bind(o),o.hideDeleteModal=o.hideDeleteModal.bind(o),o.hideErrorModal=o.hideErrorModal.bind(o),o.makeDeleteRequest=o.makeDeleteRequest.bind(o),o.state={isShowMore:!1,showServerError:!1,showDeleteConfirmation:!1,videos:o.props.videos,videoToDelete:void 0},o}return Object(r.c)(t,e),t.prototype.showMore=function(){this.setState({isShowMore:!0})},t.prototype.hideErrorModal=function(){this.setState({showServerError:!1})},t.prototype.showErrorModal=function(){this.setState({showServerError:!0})},t.prototype.hideDeleteModal=function(){this.setState({showDeleteConfirmation:!1})},t.prototype.moveVideoClientSide=function(e,t){var o=this.state.videos,i=this.state.videos.findIndex((function(t){return t.mediaID===e}));"Up"===t&&this.setState({videos:Object(r.g)(o.slice(0,i-1),[o[i],o[i-1]],o.slice(i+1,o.length))}),"Down"===t&&this.setState({videos:Object(r.g)(o.slice(0,i),[o[i+1],o[i]],o.slice(i+2,o.length))})},t.prototype.makeDeleteRequest=function(){return Object(r.b)(this,void 0,void 0,(function(){var e,t;return Object(r.d)(this,(function(o){switch(o.label){case 0:if(e=this.state.videoToDelete,t=this.state.videos.findIndex((function(t){return t.mediaID===e})),void 0===e||-1===t)return[3,5];o.label=1;case 1:return o.trys.push([1,4,,5]),[4,this.setState({videos:Object(l.e)(this.state.videos,t)})];case 2:return o.sent(),[4,Object(c.a)(this.props.starnow.starNowApiUrl+"/v1/member/"+this.props.starnow.memberId+"/media/"+e)];case 3:return o.sent(),this.setState({videoToDelete:void 0}),[3,5];case 4:return o.sent(),this.showErrorModal(),[3,5];case 5:return[2]}}))}))},t.prototype.moveVideo=function(e,t){return Object(r.b)(this,void 0,void 0,(function(){var o;return Object(r.d)(this,(function(i){switch(i.label){case 0:this.moveVideoClientSide(e,t),i.label=1;case 1:return i.trys.push([1,3,,4]),[4,Object(c.d)(this.props.starnow.starNowApiUrl+"/v1/member/"+this.props.starnow.memberId+"/media/"+e+"/order?direction="+t)];case 2:return i.sent(),[3,4];case 3:return i.sent(),o="Up"===t?"Down":"Up",this.moveVideoClientSide(e,o),this.showErrorModal(),[3,4];case 4:return[2]}}))}))},t.prototype.moveVideoUp=function(e){this.moveVideo(e,"Up")},t.prototype.moveVideoDown=function(e){this.moveVideo(e,"Down")},t.prototype.deleteVideo=function(e){this.setState({showDeleteConfirmation:!0,videoToDelete:e})},t.prototype.editVideo=function(e){window.location.assign("/register/MediaEdit.aspx?media_id="+e)},t.prototype.render=function(){var e=this,t=this.props.isFirstVideoEmbedded?4:3,o=this.state.isShowMore||!this.props.isListTruncated?this.state.videos:this.state.videos.slice(0,t),i=this.props.isListTruncated&&!this.state.isShowMore&&this.props.videos.length>t;return s.createElement(s.Fragment,null,this.props.isEditing&&s.createElement(N,{isOpen:this.state.showDeleteConfirmation,onRequestClose:this.hideDeleteModal,delete:function(){e.makeDeleteRequest(),e.hideDeleteModal()}}),this.props.isEditing&&s.createElement(D.a,{isOpen:this.state.showServerError,onRequestClose:this.hideErrorModal}),s.createElement("div",{className:"video-list-new"},o&&o.map((function(t,o){return e.props.isFirstVideoEmbedded&&0===o?s.createElement(O,Object(r.a)({key:t.mediaID,showStats:e.props.showStats,videoOwnerId:e.props.videoOwnerId,starnow:e.props.starnow},t)):s.createElement(w.a,{key:t.mediaID,offset:200},s.createElement(S,Object(r.a)({isEditing:e.props.isEditing,currentURL:e.props.starnow.currentURL,showStats:e.props.showStats,index:o,listLength:e.state.videos.length,actions:{moveUp:e.moveVideoUp,moveDown:e.moveVideoDown,edit:e.editVideo,delete:e.deleteVideo}},t)))})),i&&s.createElement(g.d,{className:"content-center center",colour:g.a.SkyBlue,onClick:this.showMore,isOutline:!0,isRounded:!0},"Show more")))},t}(s.Component);t.default=I,Object(V.a)(I,"VideoList")}},[[1312,1,2,0]]]);
//# sourceMappingURL=videoList.js.map?x=463b792a4a9523765312;