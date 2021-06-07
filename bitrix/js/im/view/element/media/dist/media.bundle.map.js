{"version":3,"sources":["media.bundle.js"],"names":["exports","ui_progressbarjs_uploader","ui_vue_vuex","im_model","im_const","ui_vue_components_audioplayer","ui_vue_directives_lazyload","ui_icons","ui_vue_components_socialvideo","im_lib_utils","ui_vue","Vue","component","mounted","this","createProgressbar","beforeDestroy","removeProgressbar","props","userId","default","messageType","MessageType","self","file","type","Object","FilesModel","create","getElementState","methods","download","progress","FileType","image","urlShow","Utils","platform","isBitrixMobile","BXMobileApp","UI","Photo","show","photos","files","collection","application","dialog","chatId","filter","map","url","replace","reverse","default_photo","window","open","video","app","openDocument","name","urlDownload","_this","uploader","blurElement","undefined","Uploader","container","$refs","direction","offsetHeight","vertical","horizontal","icon","cloud","cancel","sizes","circle","labels","loading","localize","completed","canceled","cancelTitle","megabyte","cancelCallback","event","$emit","destroyCallback","start","size","offsetWidth","setProgressTitleVisibility","updateProgressbar","result","status","FileStatus","error","setProgress","setCancelDisable","setIcon","setProgressTitle","wait","setByteSent","destroy","computed","babelHelpers","objectSpread","getFilteredPhrases","$root","$bitrixMessages","fileName","maxLength","length","endWordLength","secondPart","substring","extension","firstPart","trim","fileSize","position","Math","round","uploadProgress","Vuex","mapState","state","watch","template","cloneComponent","background","getImageSize","width","height","maxWidth","aspectRatio","styleFileSizes","backgroundSize","styleBoxSizes","parseInt","fileSource","urlPreview","isSafari","browser","styleVideoSizes","autoplay","options","autoplayVideo","BX","ProgressBarJs","Messenger","Model","Const","Lib"],"mappings":"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","file":"media.bundle.map.js"}