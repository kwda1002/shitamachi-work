(window["aioseopjsonp"]=window["aioseopjsonp"]||[]).push([["settings-partials-Breadcrumbs-NotFound-vue","settings-partials-Breadcrumbs-Preview-vue"],{c468:function(e,t,r){"use strict";r.r(t);var a=function(){var e=this,t=e.$createElement,r=e._self._c||t;return r("div",{staticClass:"preview-box"},[e.label?r("span",{staticClass:"label"},[e._v(" "+e._s(e.label)+": ")]):e._e(),e._l(this.getPreviewData(),(function(t,a){return[1<e.previewLength&&a>0&&a<e.previewLength?r("span",{key:a+"sep",staticClass:"aioseo-breadcrumb-separator",domProps:{innerHTML:e._s(e.options.breadcrumbs.separator)}}):e._e(),a<e.previewLength-1?r("span",{key:a+"crumb",class:{"aioseo-breadcrumb":!t.match(/aioseo-breadcrumb/),link:t!==e.options.breadcrumbs.breadcrumbPrefix&&!t.match(/<a /)},domProps:{innerHTML:e._s(t)}}):e._e(),a===e.previewLength-1?r("span",{key:a+"crumbLast",class:{last:!0,link:e.options.breadcrumbs.linkCurrentItem&&e.useDefaultTemplate&&!t.match(/<a /),noLink:!e.options.breadcrumbs.linkCurrentItem&&e.useDefaultTemplate,"aioseo-breadcrumb":!t.match(/aioseo-breadcrumb/)},domProps:{innerHTML:e._s(t)}}):e._e()]}))],2)},s=[],o=(r("4de4"),r("d81d"),r("fb6a"),r("ac1f"),r("5319"),r("5530")),n=r("2f62"),i={props:{previewData:{type:Array,default:null},useDefaultTemplate:{type:Boolean,default:!0},label:String},computed:Object(o["a"])(Object(o["a"])({},Object(n["e"])(["options"])),{},{previewLength:function(){return this.getPreviewData()?this.getPreviewData().length:0}}),methods:{getPreviewData:function(){var e=this,t=this.previewData.filter((function(e){return!!e})).map((function(t){return e.$tags.decodeHTMLEntities(t).replace(/#breadcrumb_separator/g,'<span class="aioseo-breadcrumb-separator">'+e.options.breadcrumbs.separator+"</span>").replace(/#breadcrumb_link/g,"Permalink")}));return this.useDefaultTemplate&&!this.options.breadcrumbs.showCurrentItem&&(t=t.slice(0,t.length-1)),t}}},u=i,c=r("2877"),m=Object(c["a"])(u,a,s,!1,null,null,null);t["default"]=m.exports},ef30:function(e,t,r){"use strict";r.r(t);var a=function(){var e=this,t=e.$createElement,r=e._self._c||t;return r("core-settings-row",{key:"404",attrs:{name:"404"},scopedSlots:e._u([{key:"content",fn:function(){return[r("div",[r("preview",{attrs:{"preview-data":e.getPreview(),useDefaultTemplate:e.options.breadcrumbs.dynamic.archives.notFound.useDefaultTemplate}}),r("grid-row",[r("grid-column",[r("base-toggle",{staticClass:"current-item",model:{value:e.options.breadcrumbs.dynamic.archives.notFound.useDefaultTemplate,callback:function(t){e.$set(e.options.breadcrumbs.dynamic.archives.notFound,"useDefaultTemplate",t)},expression:"options.breadcrumbs.dynamic.archives.notFound.useDefaultTemplate"}}),e._v(" "+e._s(e.strings.useDefaultTemplate)+" ")],1)],1),e.options.breadcrumbs.dynamic.archives.notFound.useDefaultTemplate?e._e():r("grid-row",[e.options.breadcrumbs.breadcrumbPrefix&&e.options.breadcrumbs.breadcrumbPrefix.length?r("grid-column",[r("base-toggle",{staticClass:"current-item",model:{value:e.options.breadcrumbs.dynamic.archives.notFound.showPrefixCrumb,callback:function(t){e.$set(e.options.breadcrumbs.dynamic.archives.notFound,"showPrefixCrumb",t)},expression:"options.breadcrumbs.dynamic.archives.notFound.showPrefixCrumb"}}),e._v(" "+e._s(e.strings.showPrefixLabel)+" ")],1):e._e(),r("grid-column",[r("base-toggle",{staticClass:"current-item",model:{value:e.options.breadcrumbs.dynamic.archives.notFound.showHomeCrumb,callback:function(t){e.$set(e.options.breadcrumbs.dynamic.archives.notFound,"showHomeCrumb",t)},expression:"options.breadcrumbs.dynamic.archives.notFound.showHomeCrumb"}}),e._v(" "+e._s(e.strings.showHomeLabel)+" ")],1),r("grid-column",[r("core-html-tags-editor",{attrs:{"line-numbers":!0,checkUnfilteredHtml:"","tags-context":"breadcrumbs-notFound","minimum-line-numbers":3,"default-tags":["breadcrumb_404_error_format","breadcrumb_link"]},model:{value:e.options.breadcrumbs.dynamic.archives.notFound.template,callback:function(t){e.$set(e.options.breadcrumbs.dynamic.archives.notFound,"template",t)},expression:"options.breadcrumbs.dynamic.archives.notFound.template"}})],1)],1)],1)]},proxy:!0}])})},s=[],o=(r("ac1f"),r("5319"),r("5530")),n=r("2f62"),i=r("c468"),u={components:{preview:i["default"]},data:function(){return{strings:{useDefaultTemplate:this.$t.__("Use a default template",this.$td),showHomeLabel:this.$t.__("Show homepage link",this.$td),showPrefixLabel:this.$t.__("Show prefix link",this.$td)}}},methods:{getPreview:function(){var e=this.options.breadcrumbs,t=e.dynamic.archives.notFound,r=t.useDefaultTemplate;return[r&&e.breadcrumbPrefix||!r&&t.showPrefixCrumb?e.breadcrumbPrefix:"",r&&e.homepageLink||!r&&t.showHomeCrumb?e.homepageLabel?e.homepageLabel:"Home":"",this.getTemplate()]},getTemplate:function(){var e=this.options.breadcrumbs.dynamic.archives.notFound.useDefaultTemplate?this.$aioseo.breadcrumbs.defaultTemplates.archives.notFound:this.options.breadcrumbs.dynamic.archives.notFound.template;return e.replace(/#breadcrumb_404_error_format/g,this.options.breadcrumbs.errorFormat404)}},computed:Object(o["a"])({},Object(n["e"])(["options"]))},c=u,m=r("2877"),l=Object(m["a"])(c,a,s,!1,null,null,null);t["default"]=l.exports}}]);