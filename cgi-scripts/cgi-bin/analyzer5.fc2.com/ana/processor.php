var fc2anaEnableHook = true;
var fc2anaRaiseClickEvent = null;
var fc2anaRaiseClickTimer = null;
if (! self._FC2ANA58958_0)
{
       var _FC2ANA58958_0 =
       {
               uid:58958,
               onclick:function (ev)
               {
                       if (! ev)
                       {
                               ev = window.event;
                       }
                       var el = (ev.target || ev.srcElement);
                       var sendclicktrack = false;
                       if( !fc2anaEnableHook ) {
                               fc2anaEnableHook = true;
                               return true;
                       }
                       
                       while (el)
                       {
                               if (el.tagName == "A")
                               {
                                       if( !el.href.match( /^(https?|ftp)/) ) break;
                                       var is_mobile = window.navigator.userAgent.match(/(KDDI|SoftBank|FOMA;|DoCoMo|iPhone|iPad)/i)  ? true : false;
                                       
                                       if (!is_mobile) {
                                               var f = (self.encodeURIComponent || escape);
                                               var img = new Image();
                                               img.src = "http://analyzer5.fc2.com/clicktrack.php?uid=" + this.uid
                                                       + "&ref=" + f(document.URL)
                                                       + "&url=" + f(el.href)
                                                       + "&txt=" + f(el.innerHTML.replace(/<[^>]+>/g, ''))
                                                       + "&visitor=" + this.visit;
                                               sendclicktrack = true;
                                               break;
                                       } else {
                                               fc2anaRaiseClickEvent = function() {
                                                       if (el != null) {
                                                               var evt = document.createEvent("MouseEvents");
                                                               evt.initEvent("click", false, true);
                                                               el.dispatchEvent(evt);
                                                               clearTimeout(fc2anaRaiseClickTimer);
                                                               el = null;
                                                       }
                                               }
                                               
                                               var f = (self.encodeURIComponent || escape);
                                               var url = "http://analyzer5.fc2.com/clicktrack.php?js=1&uid=" + this.uid
                                                               + "&ref=" + f(document.URL)
                                                               + "&url=" + f(el.href)
                                                               + "&txt=" + f(el.innerHTML.replace(/<[^>]+>/g, ''))
                                                               + "&visitor=" + this.visit;
                                                               //+ "&tt=" + (new Date).getTime();

                                               var script = document.createElement('script');
                                               script.setAttribute('type', 'text/javascript');
                                               script.setAttribute('src', url);
                                               script.setAttribute('charset', 'shift-jis');
                                               document.body.appendChild(script);

                                               fc2anaRaiseClickTimer = setTimeout(fc2anaRaiseClickEvent, 500);
                                               fc2anaEnableHook = false;
                                               ev.preventDefault();
                                               break;
                                       }
                               }
                               el = el.parentNode;
                       }
                       if (this.document_onclick)
                       {
                               this.document_onclick(ev);
                       }
                       var t = (new Date()).getTime();
                       if (sendclicktrack)
                       {
                               while ((new Date()).getTime()-t < 250)
                               {
                                       void img;
                               }
                       }
                       return true;
               },
               visit_info:function()
               {
                       var time = new Date();
                       var now = Math.floor(time.getTime()/1000);
                       var version = 1, is_unique;
                       var info = [version, Math.floor(Math.random()*4294967296), now, 0, 1, 1, 0];
                       var cookie_name = "fc2_analyzer_" + this.uid;
                       var reg = (" " + document.cookie + ";").match(new RegExp(" " + cookie_name + "=([\\d\\-]+);"));
                       if (reg)
                       {
                               info = reg[1].split("-");
                               is_unique = (now - info[3] > 60*60*24)
                       }
                       else
                       {
                               is_unique = true;
                       }
                       time.setTime(time.getTime()+30*86400*1000);
                       document.cookie = cookie_name + "="
                               + [
                                       info[0],
                                       info[1],
                                       info[2],
                                       now,
                                       info[4]*1+1,
                                       info[5]*1+(is_unique ? 1 : 0),
                                       (is_unique ? now : info[6])
                               ].join("-")
                               + " ; expires=" + time.toGMTString();
                       return info.join("-");//analyzer5
               },
               disp_img:function()
               {
                       var current = false;
                       if ('currentScript' in document){ 
                           current = document.currentScript;
                       }else{ 
                           current = false;
                       } 
                       this.visit = this.visit_info();
                       var ref = "";
                       var parent_url = "";
                       try
                       {
                               parent_url = parent.document.URL;
                               if (document.referrer == parent_url)
                               {
                                       ref = parent.document.referrer;
                               }
                               else
                               { 
                                       ref = document.referrer; 
                               }
                       }
                       catch(ex)
                       {
                       }
                       var idSess   = readCookie('FC2ANASESSION2');
                       if (current == false){ 
                       document.write('<script type="text/javascript" language="javascript"'
                               + ' src="http://analyzer5.fc2.com/ana/analyzer.php?uid=' + this.uid
                               + '&amp;pid=0'
                               + '&amp;idsess='+ idSess
                               + '&amp;ref=' + escape(ref)
                               + '&amp;href=' + escape(location.href)
                               + '&amp;wid=' + screen.width
                               + '&amp;hei=' + screen.height
                               + '&amp;col=' + screen.colorDepth
                               + '&amp;visitor=' + this.visit
                               + '&amp;ssl=0'
                               + '" charset="UTF-8"></script>'
                       );
                       }else{ 
                         var script = document.createElement('script');
                         script.src = 'http://analyzer5.fc2.com/ana/analyzer.php?uid=' + this.uid + '&amp;pid=0' + '&amp;idsess='+ idSess + '&amp;ref=' + escape(ref) + '&amp;href=' + escape(location.href) + '&amp;wid=' + screen.width + '&amp;hei=' + screen.height + '&amp;col=' + screen.colorDepth + '&amp;visitor=' + this.visit + '&amp;ssl=0';
                         script.charset="UTF-8";
                         current.parentNode.appendChild(script);
                       }
               }
       }
       _FC2ANA58958_0.document_onclick = document.onclick;
       document.onclick = function(ev){
               return _FC2ANA58958_0.onclick(ev);
       }
}
_FC2ANA58958_0.disp_img();
function readCookie(name)
{
       var cookies = document.cookie;
       var start = cookies.indexOf(name + '=');
       if (start == -1) {
               return '';
       }
       start = cookies.indexOf('=', start) + 1; 
       var end = cookies.indexOf(';', start); 
       if (end == -1) { 
               end = cookies.length; 
       } 
       var value = unescape(cookies.substring(start, end)); 
       if(value == null){ 
               return ''; 
       } 
       else{ 
               return value;
       }
}
