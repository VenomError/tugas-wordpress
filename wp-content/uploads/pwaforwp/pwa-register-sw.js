                                 var swsource = "https://231013.undp.my.id/pwa-sw.js";                                          
                                 var config = pnScriptSetting.pn_config;if (!firebase.apps.length) {firebase.initializeApp(config);}  
                            if(!messaging){const messaging = firebase.messaging();}                                 
              function PWAforwpreadCookie(name) {
                  var nameEQ = name + "=";
                  var ca = document.cookie.split(";");
                  for(var i=0;i < ca.length;i++) {
                      var c = ca[i];
                      while (c.charAt(0)==" ") c = c.substring(1,c.length);
                      if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
                  }
                  return null;
              }
			         if("serviceWorker" in navigator) {
                                     window.addEventListener('load', function() {			         		
			                navigator.serviceWorker.register(swsource, {scope: 'https://231013.undp.my.id/'}).then(function(reg){                                                                                        
			                    console.log('Congratulations!!Service Worker Registered ServiceWorker scope: ', reg.scope);
                                            messaging.useServiceWorker(reg); pushnotification_load_messaging();                                                                        
			                }).catch(function(err) {
			                    console.log('ServiceWorker registration failed: ', err);
			                });	
                                                                                                                                                                                                                                                                              
			                var deferredPrompt;                           
                      window.addEventListener('beforeinstallprompt', (e) => {
							  
							  deferredPrompt = e;
                                                          
                    if(deferredPrompt != null || deferredPrompt != undefined){
                        
                        var a2hsviashortcode = document.getElementsByClassName("pwaforwp-sticky-banner");
                        var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent); 
                        if(a2hsviashortcode !== null && checkbarClosedOrNot() && (typeof pwa_cta_assets !== 'undefined') && (pwa_cta_assets.a2h_sticky_on_desktop_cta==1 || isMobile)){
                            for (var i = 0; i < a2hsviashortcode.length; i++) {
                              a2hsviashortcode[i].style.display="flex"; 
                          }
                        }

                        

                     }
                                                                                                                    
							});			    
              function checkbarClosedOrNot(){
                var closedTime = PWAforwpreadCookie("pwaforwp_prompt_close");
                  if(closedTime){
                    var today = new Date();
                    var closedTime = new Date(closedTime);
                    var diffMs = (today-closedTime);
                    var diffMins = Math.round(((diffMs % 86400000) % 3600000) / 60000); /* minutes*/
                    if(diffMs){/*diffMins<4*/
                      return false;
                    }
                  }
                  return true;
              }
              
              /* Safari 3.0+ "[object HTMLElementConstructor]" */
              var isSafari = /constructor/i.test(window.HTMLElement) || (function (p) { return p.toString() === "[object SafariRemoteNotification]"; })(!window['safari'] || (typeof safari !== 'undefined' && safari.pushNotification));
              if( isSafari ){
                var a2hsviashortcode = document.getElementsByClassName("pwaforwp-add-via-class");
                  if(a2hsviashortcode !== null){
                      for (var i = 0; i < a2hsviashortcode.length; i++) {
                        a2hsviashortcode[i].style.display="inline-block"; 
                    }
                  }
                  
                  var a2hsviashortcode = document.getElementsByClassName("pwaforwp-sticky-banner");
                  var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent); 
                  if(a2hsviashortcode !== null && checkbarClosedOrNot() && (typeof pwa_cta_assets !== 'undefined') && (pwa_cta_assets.a2h_sticky_on_desktop_cta==1 || isMobile) ){
                      for (var i = 0; i < a2hsviashortcode.length; i++) {
                        a2hsviashortcode[i].style.display="flex"; 
                    }
                  }
              }                                                         
                                                     
                                                                                                                                                               
                                                     var a2hsviashortcode = document.getElementsByClassName("pwaforwp-add-via-class");
                                                        if(a2hsviashortcode !== null){
                                                            for (var i = 0; i < a2hsviashortcode.length; i++) {
                                                              a2hsviashortcode[i].addEventListener("click", addToHome); 
                                                          }
                                                        }
                                         
                                                     window.addEventListener('appinstalled', (evt) => {
							  
                                                          var a2hsviashortcode = document.getElementsByClassName("pwaforwp-add-via-class");
                                                                 if(a2hsviashortcode !== null){
                                                                     for (var i = 0; i < a2hsviashortcode.length; i++) {
                                                                       a2hsviashortcode[i].style.display="none"; 
                                                                   }
                                                                 }
                                                                 
                                                                 var a2hsviashortcode = document.getElementsByClassName("pwaforwp-sticky-banner");
                                                                    if(a2hsviashortcode !== null){
                                                                        for (var i = 0; i < a2hsviashortcode.length; i++) {
                                                                          a2hsviashortcode[i].style.display="none"; 
                                                                      }
                                                                    }
                                                          var addtohomeBtn = document.getElementById("pwaforwp-add-to-home-click");
                                                          if(addtohomeBtn !==null){ 
                                                            addtohomeBtn.style.display="none";
                                                          }                                           
                                                     });  
                                                                                                          
                                                     function addToHome(){
                                                         if(!deferredPrompt){return ;}
                                                         deferredPrompt.prompt();							  
                                                         deferredPrompt.userChoice
                                                           .then((choiceResult) => {
                                                             if (choiceResult.outcome === "accepted") {
                                                                 
                                                               document.getElementById("pwaforwp-add-to-home-click").style.display = "none"; 
                                                       
                                                                var a2hsviashortcode = document.getElementsByClassName("pwaforwp-add-via-class");
                                                                 if(a2hsviashortcode !== null){
                                                                     for (var i = 0; i < a2hsviashortcode.length; i++) {
                                                                       a2hsviashortcode[i].style.display="none"; 
                                                                   }
                                                                 }
                                                                 
                                                                 var a2hsviashortcode = document.getElementsByClassName("pwaforwp-sticky-banner");
                                                                    if(a2hsviashortcode !== null){
                                                                        for (var i = 0; i < a2hsviashortcode.length; i++) {
                                                                          a2hsviashortcode[i].style.display="none"; 
                                                                      }
                                                                    }
                                                                                                                                          
                                                               console.log("User accepted the prompt");

                                                             } else {
                                                               console.log("User dismissed the prompt");
                                                             }
                                                             deferredPrompt = null;
                                                         });
                                                         
                                                        }
                                          var offline_message = '0'

                                          if (offline_message == 1) {
                                            window.addEventListener("offline", pwaforwpOnNetworkChange);
                                          }
                                          function pwaforwpOnNetworkChange(event) {
                                            if (!navigator.onLine) {
                                              var a2hsdesk = document.getElementById("pwaforwp-add-to-home-click");
                                              if(a2hsdesk !== null){
                                                a2hsdesk.style.display = "none";
                                              }
                                              var html = '<style class="pwa-offmsgwrcss">.pwa-offmsgwr{background: #323232;color: #f1f1f1;display: table;position: fixed;box-sizing: border-box;box-shadow: 0 2px 4px 0 #000;bottom: 0;left: 0;width: 100%;font-size: 14px;padding: 0;transition: transform .15s cubic-bezier(.17,.67,.39,.95);transform: translateY(200%);z-index: 1000;will-change: transform;}.pwa-offmsgwr table{margin:0px}.pwa-offmsgwr.active{transform: translateY(0);}.pwa-offmsgwr .tdcl{padding: 15px;}.pwa-offmsgwr .span{display: table-cell;vertical-align: middle;}</style><div class="pwa-offmsgwr active"><table width="100%"><tbody><tr><td class="tdcl"><span>You are currently offline</span></td></tr><tr></tr></tbody></table></div>';
                                              if(document.getElementsByClassName('pwa-offmsgwrcss').length==0){
                                                document.body.innerHTML += html;
                                              }
                                                setTimeout(function(){
                                                  if(document.getElementsByClassName('pwa-offmsgwrcss').length){ document.getElementsByClassName('pwa-offmsgwrcss')[0].remove(); }
                                                  if(document.getElementsByClassName('pwa-offmsgwr').length){ document.getElementsByClassName('pwa-offmsgwr')[0].remove();}
                                                }, 3000);

                                            }else{
                                              if(document.getElementsByClassName('pwa-offmsgwrcss').length){document.getElementsByClassName('pwa-offmsgwrcss')[0].remove(); document.getElementsByClassName('pwa-offmsgwr')[0].remove();}
                                            }
                                          }
                                          if( window.matchMedia('(display-mode: standalone)').matches ){
                                            var appContent = document.getElementsByClassName('pwaforwp-app-contents');
                                            for(var i=0; i<appContent.length; i++){
                                              appContent[i].style.display = 'block';
                                            }
                                          }
                                        });
			                             }	document.addEventListener('DOMContentLoaded', function () {
                if (typeof pnScriptSetting !== 'undefined' && pnScriptSetting.pwaforwp_apk_only !== undefined && pnScriptSetting.pwaforwp_apk_only == 1) {
                    const reffer = document.referrer; 
                    if (reffer && reffer.includes('android-app://')) {
                        sessionStorage.setItem('pwaforwp_mode', 'apk');
                    }
                }
            });var config=pnScriptSetting.pn_config;  
               
if (!firebase.apps.length) {
	firebase.initializeApp(config);	
}       
firebase.analytics();
if(!messaging)
{
	var messaging = firebase.messaging();
}
	

pushnotification_load_messaging();	  
function pushnotification_load_messaging(){
	// [START refresh_token]
	// Callback fired if Instance ID token is updated.
	messaging.onTokenRefresh(() => {
	  messaging.getToken().then((refreshedToken) => {
		console.log('Token refreshed.');
		// Indicate that the new Instance ID token has not yet been sent to the
		// app server.
		push_notification_setTokenSentToServer(false);
		// Send Instance ID token to app server.
		sendTokenToServer(refreshedToken);
		// [START_EXCLUDE]
		// Display new Instance ID token and clear UI of all previous messages.
		resetUI();
		// [END_EXCLUDE]
	  }).catch((err) => {
		console.log('Unable to retrieve refreshed token ', err);
		showToken('Unable to retrieve refreshed token ', err);
	  });
	});
	// [END refresh_token]
	addEventListener("load", pnMainFunctionPWA);
	function pnMainFunctionPWA(){
	function PWAforwpreadCookie(name) {
	  var return_var = null;
	  var nameEQ = name + "=";
	  var ca = document.cookie.split(";");
	  for(var i=0;i < ca.length;i++) {
		  var c = ca[i];
		  while (c.charAt(0)==" ") { c = c.substring(1,c.length);}
		  if (c.indexOf(nameEQ) == 0) { return_var = c.substring(nameEQ.length,c.length);} 
	  }
	  // fallback if cookies are not enabled or when cookies are rewritten/modified by other plugins
	  if(return_var===null)
	  {
		if(localStorage.getItem(name))
		{
			var item_expiry=localStorage.getItem(name+'_expiry');
			if(item_expiry>Date.now())
			{
				return_var = localStorage.getItem(name);
			}
		}
	  }
	  return return_var;
  }
	  
		if(PWAforwpreadCookie("pn_notification_block")==null){
			const pageAccessedByReload = window.history.length;
			if(pageAccessedByReload < pnScriptSetting.popup_show_afternpageview){
				return false;
		}
		if(pnScriptSetting.superpwa_apk_only == '1'){
			let superpwa_apk = sessionStorage.getItem('superpwa_mode');
			if(superpwa_apk != 'apk'){
				return false;
			}
		}

		if(pnScriptSetting.pwaforwp_apk_only == '1'){
			let pwaforwp_apk = sessionStorage.getItem('pwaforwp_mode');
			if(pwaforwp_apk != 'apk'){
				return false;
			}
		}
		var popup_show_afternseconds = 1000;
		if (pnScriptSetting.popup_show_afternseconds) {
			popup_show_afternseconds = (parseInt(pnScriptSetting.popup_show_afternseconds) * 1000);
		}
		setTimeout(function() {
			var wrapper = document.getElementsByClassName("pn-wrapper");
			if(wrapper.length > 0){ wrapper[0].style.display="flex"; }
	   	}, popup_show_afternseconds);	
		 
	  }
	  
	  if (document.getElementById("pn-activate-permission_link_nothanks")) {
		  document.getElementById("pn-activate-permission_link_nothanks").addEventListener("click", function(){
			  var date = new Date;
			  date.setDate(date.getDate() + parseInt(pnScriptSetting.notification_popup_show_again));
			  document.cookie = "pn_notification_block=true;expires="+date.toUTCString()+";path="+pnScriptSetting.cookie_scope;
			  localStorage.setItem('pn_notification_block',true);
			  localStorage.setItem('pn_notification_block_expiry',date.getTime());
			  var wrapper = document.getElementsByClassName("pn-wrapper");
			  if(wrapper){ wrapper[0].style.display="none"; }
		  })
	  }
	  if (document.getElementById("pn-activate-permission_link")) {
		  document.getElementById("pn-activate-permission_link").addEventListener("click", function(){
			  var wrapper = document.getElementsByClassName("pn-wrapper");
			  if(wrapper){ wrapper[0].style.display="none"; }
			  messaging.requestPermission().then(function() {
				  console.log("Notification permission granted.");
				  var date = new Date;
				  date.setDate(date.getDate() + parseInt(pnScriptSetting.notification_popup_show_again));
				  document.cookie = "pn_notification_block=true;expires="+date.toUTCString()+";path="+pnScriptSetting.cookie_scope;
				  document.cookie = "notification_permission=granted;expires="+date.toUTCString()+";path="+pnScriptSetting.cookie_scope;
				  localStorage.setItem('pn_notification_block',true);
				  localStorage.setItem('pn_notification_block_expiry',date.getTime());
				  localStorage.getItem('notification_permission','granted');
				  if(push_notification_isTokenSentToServer()){
					  console.log('Token already saved');
				  }else{
					  push_notification_getRegToken();
				  }                                   
			  }).catch(function(err) {
				  if(Notification && Notification.permission=='denied'){
					  console.log("Notification permission denied.");
					  var date = new Date;
					  date.setDate(date.getDate() + pnScriptSetting.notification_popup_show_again);
					  document.cookie = "pn_notification_block=true;expires="+date+";path="+pnScriptSetting.cookie_scope;
					  localStorage.setItem('pn_notification_block',true);
					  localStorage.setItem('pn_notification_block_expiry',date.getTime());
				  }else{
					  console.log("Unable to get permission to notify.", err);
				  }
			  });
		  })
	  }
	}
	  messaging.onMessage(function(payload) {
		  console.log('Message received. ', payload);
  
		  notificationTitle = payload.data.title;
		  notificationOptions = {
		  body: payload.data.body,
		  icon: payload.data.icon,
		  image: payload.data.image,
		  vibrate: [100, 50, 100],
		  data: {
			  dateOfArrival: Date.now(),
			  primarykey: payload.data.currentCampaign,
			  url : payload.data.url
			},
		  }
		  var notification = new Notification(notificationTitle, notificationOptions); 
			  notification.onclick = function(event) {
			  event.preventDefault();
			  window.open(payload.data.url, '_blank');
			  
			  var xhttp = new XMLHttpRequest();
			  xhttp.open("POST", pnScriptSetting.ajax_url, true);
	  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	  xhttp.send('campaign='+payload.data.currentCampaign+'&nonce='+pnScriptSetting.nonce+'&action=pn_noteclick_subscribers');
			  
			  notification.close();
			  }
	  });

	  if (navigator.clearAppBadge) {
		navigator.clearAppBadge();
	  } else if (navigator.clearExperimentalAppBadge) {
		navigator.clearExperimentalAppBadge();
	  } else if (window.ExperimentalBadge) {
		window.ExperimentalBadge.clear();
	  }
  }
  
  function push_notification_getRegToken(argument){
	   
	  messaging.getToken().then(function(currentToken) {
		if (currentToken) {                      
		 push_notification_saveToken(currentToken);
		 console.log(currentToken);
		  push_notification_setTokenSentToServer(true);
		} else {                       
		  console.log('No Instance ID token available. Request permission to generate one.');                       
		  push_notification_setTokenSentToServer(false);
		}
	  }).catch(function(err) {
		console.log('An error occurred while retrieving token. ', err);                      
		push_notification_setTokenSentToServer(false);
	  });
  }
  function push_notification_setTokenSentToServer(sent) {
   window.localStorage.setItem('sentToServer', sent ? '1' : '0');
  }
  
  function push_notification_isTokenSentToServer() {
  return window.localStorage.getItem('sentToServer') === '1';
  }
  
  // Send the Instance ID token your application server, so that it can:
  // - send messages back to this app
  // - subscribe/unsubscribe the token from topics
  function sendTokenToServer(currentToken) {
	  if (!push_notification_isTokenSentToServer()) {
		console.log('Sending token to server...');
		push_notification_saveToken(currentToken);
		
	  } else {
		console.log('Token already sent to server so won\'t send it again ' +
			'unless it changes');
	  }
  
  }
  
  function pn_get_checket_cats(item, index){
	  if(item.checked){
		  pn_cat_value.push(item.checked);
	  }	
  }
  
  function push_notification_saveToken(currentToken){
	var xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
		  if(this.responseText.status==200){
			  push_notification_setTokenSentToServer(true);
		  }
		  console.log(this.responseText);
		}
	  };
	  const optioArr = [];
	  const optElm = document.querySelectorAll("#pn-categories-checkboxes input:checked");
		for (var i=0; i <=  optElm.length - 1 ; i++) {
			optioArr.push(optElm[i].value);
		}
	  var catArraystr = [...optioArr].join(',');
	  var grabOs = pushnotificationFCMGetOS();
	  var browserClient = pushnotificationFCMbrowserclientDetector();
	  var currentUrl = window.location.href;
	  xhttp.open("POST", pnScriptSetting.ajax_url, true);
	  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	  xhttp.send('token_id='+currentToken+'&category='+catArraystr+'&user_agent='+browserClient+'&os='+grabOs+'&nonce='+pnScriptSetting.nonce+'&action=pn_register_subscribers&url='+currentUrl);
  }              
  
  
  var pushnotificationFCMbrowserclientDetector  = function (){
	  var browserClient = '';
  
	  // Opera 8.0+
	  var isOpera = (!!window.opr && !!opr.addons) || !!window.opera || navigator.userAgent.indexOf(' OPR/') >= 0;
  
	  // Firefox 1.0+
	  var isFirefox = typeof InstallTrigger !== 'undefined';
  
	  // Safari 3.0+ "[object HTMLElementConstructor]" 
	  var isSafari = /constructor/i.test(window.HTMLElement) || (function (p) { return p.toString() === "[object SafariRemoteNotification]"; })(!window['safari'] || (typeof safari !== 'undefined' && safari.pushNotification));
  
	  // Internet Explorer 6-11
	  var isIE = /*@cc_on!@*/false || !!document.documentMode;
  
	  // Edge 20+
	  var isEdge = !isIE && !!window.StyleMedia;
  
	  // Chrome 1 - 71
	  var isChrome = !!window.chrome && (!!window.chrome.webstore || !!window.chrome.runtime);
  
	  // Blink engine detection
	  var isBlink = (isChrome || isOpera) && !!window.CSS;
  
  
	  if(navigator.userAgent.match('CriOS')){
		  browserClient = 'Chrome ios';
		  return browserClient;
	  }
	  var isSafari = !!navigator.userAgent.match(/Version\/[\d\.]+.*Safari/);
	  var iOS = /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;
	  if (isSafari && iOS) {
		  browserClient = 'Safari ios';
		  return browserClient;
	  } else if(isSafari) {
		  browserClient = 'Safari';
		  return browserClient;
	  }else if(isFirefox){
		  browserClient = 'Firefox';
		  return browserClient;
	  }else if(isChrome){
		  browserClient = 'Chrome';
		  return browserClient;
	  }else if(isOpera){
		  browserClient = 'Opera';
		  return browserClient;
	  }else if(isIE ){
		  browserClient = 'IE';
		  return browserClient;
	  }else if(isEdge ){
		  browserClient = 'Edge';
		  return browserClient;
	  }else if( isBlink ){
		  browserClient = 'Blink';
		  return browserClient;
	  }
  
  
  }
  
  var pushnotificationFCMGetOS = function() {
	var userAgent = window.navigator.userAgent,
		platform = window.navigator.platform,
		macosPlatforms = ['Macintosh', 'MacIntel', 'MacPPC', 'Mac68K'],
		windowsPlatforms = ['Win32', 'Win64', 'Windows', 'WinCE'],
		iosPlatforms = ['iPhone', 'iPad', 'iPod'],
		os = null;
  
	if (macosPlatforms.indexOf(platform) !== -1) {
	  os = 'Mac OS';
	} else if (iosPlatforms.indexOf(platform) !== -1) {
	  os = 'iOS';
	} else if (windowsPlatforms.indexOf(platform) !== -1) {
	  os = 'Windows';
	} else if (/Android/.test(userAgent)) {
	  os = 'Android';
	} else if (!os && /Linux/.test(platform)) {
	  os = 'Linux';
	}
  
	return os;
  }
  
  /*if (Notification.permission !== "granted") {
	  document.cookie = "notification_permission=granted";
  }*/
  
  if(pnScriptSetting.pn_token_exists=='0'){
	  setTimeout(function(){
		  messaging.getToken().then(function(currentToken) {
			  if (currentToken) {
			   push_notification_saveToken(currentToken);
			   console.log(currentToken);
				push_notification_setTokenSentToServer(true);
			  } else {
				console.log('No Instance ID token available. Request permission to generate one.');
				push_notification_setTokenSentToServer(false);
			  }
			}).catch(function(err) {
			  console.log('An error occurred while retrieving token. ', err);
			  push_notification_setTokenSentToServer(false);
			});
  
  
	  },2000);
	  
  }
setTimeout(function(){
	if (document.querySelector('.pn-bell-button')) {
		const bellButton = document.querySelector('.pn-bell-button');
		bellButton.addEventListener('click', () => {
			document.cookie = 'pn_notification_block' + '=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
			localStorage.removeItem('pn_notification_block');
			location.reload();
		});
	}
},2000);