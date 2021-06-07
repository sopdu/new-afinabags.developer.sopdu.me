{"version":3,"sources":["call.bundle.js"],"names":["this","BX","exports","ui_vue_vuex","im_lib_logger","im_const","im_view_textarea","ui_vue_components_smiles","ui_vue","Vue","cloneComponent","methods","hideForm","event","$parent","hideSmiles","template","MicLevel","props","data","bars","barDisabledColor","barEnabledColor","watch","micId","newId","startAudioCheck","mounted","babelHelpers","toConsumableArray","document","querySelectorAll","_this","navigator","mediaDevices","getUserMedia","audio","deviceId","exact","then","stream","audioContext","window","AudioContext","webkitAudioContext","analyser","createAnalyser","microphone","createMediaStreamSource","scriptNode","createScriptProcessor","smoothingTimeConstant","fftSize","connect","destination","onaudioprocess","processVolume","_this2","arr","Uint8Array","frequencyBinCount","getByteFrequencyData","values","i","length","average","oneBarValue","barsToColor","Math","round","elementsToColor","slice","forEach","elem","style","backgroundColor","component","cameraList","microphoneList","audioOutputList","defaultDevices","camera","audioOutput","currentlySelected","defaultOptions","preferHDQuality","enableMicAutoParameters","selectedOptions","noVideo","created","Call","Hardware","preferHdQuality","getDefaultDevices","getVideoFromCamera","currentCamera","computed","localize","getFilteredPhrases","$root","$bitrixMessages","defaultCamera","video","getVideoTracks","getSettings","catch","e","console","warn","defaultMicrophone","getAudioTracks","defaultSpeaker","id","width","height","$refs","volume","srcObject","play","save","changedValues","isEmptyObject","$emit","exit","obj","Object","keys","components","popupModes","freeze","preparation","checkDevices","chatId","default","userNewName","isSettingNewName","popupMode","addEventListener","onBeforeUnload","bind","showChat","newValue","$nextTick","EventType","textarea","focus","dialog","scrollToBottom","user","userHasRealName","nameInput","dialogInited","$bitrixApplication","setDialogInited","objectSpread","userId","application","common","dialogId","init","dialogName","name","userInited","callApplication","inited","userCounter","userCount","userInCallCounter","userInCallCount","isPreparationStep","state","CallStateType","isPopupPreparation","isPopupCheckDevices","callError","noSignalFromCamera","CallErrorCode","newNameButtonClasses","ui-btn-wait","ui-btn-disabled","startCallButtonClasses","reloadButtonClasses","checkDevicesButtonClasses","Vuex","mapState","users","collection","dialogues","onNewNameButtonClick","trim","setUserName","onCloseChat","toggleChat","reloadPage","location","reload","onTextareaSend","text","showSmiles","$store","commit","addMessage","onTextareaFileSelected","fileInput","files","size","disk","maxFileSize","uploadFile","onTextareaWrites","$bitrixController","startWriting","startCall","onTextareaAppButtonClick","appId","message","returnValue","onSmilesSelectSmile","insertText","onSmilesSelectSet","onCheckDevicesSave","onCheckDevicesExit","Messenger","Lib","Const"],"mappings":"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","file":"call.bundle.map.js"}