<!--
	var FACEBOOK_LOADED	= false;

	function waitForFacebook(go, cb) {
		if (FACEBOOK_LOADED)
			GetUnity().SendMessage(go, cb, "1");
		else
			setTimeout( function() { waitForFacebook(go, cb); }, 100);
	}
	
	
	window.fbAsyncInit = function()
	{
		FB.init({
			appId: '293404110724460',
			status: false,
			cookie: false,
			xfbml: false,
			oauth: false		});
		
		FACEBOOK_LOADED = true;
	};
	
	$(document).ready(function() {
		if (typeof(FB) == 'undefined') {
			var d = document.getElementById('fb-root');
			if (d == null) {
				d			= document.createElement('div');
				d.id		= 'fb-root';
				var body	= document.getElementsByTagName('body')[0];
				body.appendChild(d);
			}
			
			var s	= document.createElement('script');
			s.type	= 'text/javascript';
			s.async	= true;
			s.src	= 'http://connect.facebook.net/en_US/all.js';
			d.appendChild(s);
		}
	});
// -->