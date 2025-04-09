var FacebookConnector = function() {
	var initialized		= false;
	var onInit			= function() {};
	var fadeDuration	= 400;
		
	this.setInitCallback = function(gameObject, callback)
	{
		onInit = function() {
			GetUnity().SendMessage(gameObject, callback, 'initialized');
		}
		if (initialized) {
			onInit();
		}
	}
	
	this.init = function() {
		if (initialized) return;
		
		FB.init({
			appId:		'275483752495720',
			status:		false,
			cookie:		false,
			xfbml:		true,
			oauth:		true,
			logging:	true		});
		
		initialized		= true;
console.log('[FB] SDK initialized.');
		onInit();
	};
	
	var showLogout = function() {
		if (typeof(jQuery) == 'undefined') {
			var button				= document.getElementById('fbs_disconnect');
			button.style.visibility	= 'visible';
		}
		else {
			var button		= $('#fbs_disconnect');
			if (button != null) button.slideDown(fadeDuration, 'swing', function(){});
		}
	};
	
	var hideLogout = function() {
		if (typeof(jQuery) == 'undefined') {
			var logout		= document.getElementById('fbs_disconnect');			
			if (logout != null) logout.style.visibility	= 'hidden';
		}
		else {
			var logout	= $('#fbs_disconnect');
			if (logout != null) logout.slideUp(fadeDuration, 'swing', function(){});
		}
		GetUnity().focus();
	}
	
	var showDialog = function(onConfirm, onCancel) {
		hideLogout();
		
		var confirm	= document.getElementById('fbs_dialog_connect');
		var cancel	= document.getElementById('fbs_dialog_cancel');
			
		if (confirm != null)	confirm.onclick	= onConfirm;
		if (cancel != null)		cancel.onclick	= onCancel;
		
		if (typeof(jQuery) == 'undefined') {
			var dialog		= document.getElementById('fbs_dialog');
			if (dialog != null) dialog.style.visibility = 'visible';
		}
		else {
			var dialog		= $('#fbs_dialog');
			if (dialog != null) dialog.slideDown(fadeDuration, 'swing', function(){});
		}
	};
	
	var hideDialog = function() {
		var confirm		= document.getElementById('fbs_dialog_connect');
		var cancel		= document.getElementById('fbs_dialog_cancel');
		
		if (confirm != null)	confirm.style.onclick		= function(){};
		if (cancel != null) 	cancel.style.onclick		= function(){};
		
		if (typeof(jQuery) == 'undefined') {
			var dialog		= document.getElementById('fbs_dialog');
			if (dialog != null) dialog.style.visibility		= 'hidden';
		}
		else {
			var dialog 	= $('#fbs_dialog');
			if (dialog != null) dialog.slideUp(fadeDuration, 'swing', function(){});
		}
		GetUnity().focus();
	};
	
	this.getStatus = function(gameObject, callback) {
		FB.getLoginStatus(function(response) {
			if (response && response.authResponse) {
				showLogout();
				FBS.fqlRequest('SELECT uid, name, first_name, pic_square FROM user WHERE uid = me()', gameObject, callback);
			} else {
				GetUnity().SendMessage(gameObject, callback, 'no session');
			}
		}, true);
	};
	
	this.login = function(gameObject, callback, permissions) {
		var scope = (permissions == null)
			? ''
			: permissions.join();
		
		if (typeof(FB) == 'undefined') {
			GetUnity().SendMessage(gameObject, callback, 'FB undefined');
			return;
		}
		
		var doLogin = function() {
			FB.login(function(response) {
				if (response.authResponse) {
					FB.api({method: 'fql.query', query: 'SELECT uid, name, first_name, pic_square FROM user WHERE uid = me()'}, function(response) {
						hideDialog();
						showLogout();
						GetUnity().SendMessage(gameObject, callback, JSON.stringify(response));
					});
				}
			},
			{
				scope: scope
			});
		};
		var doCancel = function() {
			GetUnity().SendMessage(gameObject, callback, 'cancelled');
			hideDialog();
		};
		
		showDialog(doLogin, doCancel);
	};
	
	this.logout = function() {
		FB.logout();
	};
	
	this.graphRequest = function(path, method, parameters, gameObject, callback) {
		FB.api(path, method, parameters, function(response) {
			GetUnity().SendMessage(gameObject, callback, JSON.stringify(response));
		});
	};
	
	this.fqlRequest = function(queryString, gameObject, callback)
	{
		var req = {method: 'fql.query', query: queryString}; 
		FB.api(req, function(response) {
			GetUnity().SendMessage(gameObject, callback, JSON.stringify(response));
		});
	}
	
	this.hideDialog = hideDialog;
};
if (!window.FBS) window.FBS = new FacebookConnector();
// -->