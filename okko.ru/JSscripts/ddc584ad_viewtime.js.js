var viewtime = {};
document.cookie='wtest=1; path=/';
if (document.cookie.indexOf('wtest=1') != -1) {	
	viewtime.time = new Date();
	viewtime.time.setTime(viewtime.time.getTime() + (15*60*1000));
	viewtime.sid = document.cookie.indexOf('wsid=');
	if (viewtime.sid != -1) {
		viewtime.sid = document.cookie.substr(viewtime.sid + 5);
		viewtime.tmp = viewtime.sid.indexOf(';');
		if (viewtime.tmp != -1) {
			viewtime.sid = unescape(viewtime.sid.substr(0, viewtime.tmp));
		}
	}
	else {
		viewtime.sid = escape(viewtime.time.getTime() + Math.random().toString().replace('.',''));
	}
	viewtime.cookie_end = '; path=/; domain=.'+document.domain.replace(/^www\./, '')+
		'; expires='+viewtime.time.toGMTString();
	document.cookie = 'wsid='+viewtime.sid + viewtime.cookie_end;
	viewtime.crfr = function () {
		viewtime.fr=document.createElement('iframe');
		viewtime.fr.src = 'about:blank';
		document.getElementsByTagName('head')[0].appendChild(viewtime.fr);
		viewtime.fr.src = 'http://viewtime.gkit.ru/vv2.php?ref='
			+escape(document.referrer)+'&url='+escape(document.URL)
			+'&f='+escape((self!=top) ? 1:0)
			+'&sc='+((typeof(screen)!="undefined") ? screen.width+'x'+screen.height :'')
			+'&vtsid='+escape(viewtime.sid)
			+'&r='+Math.random();
	}	
	setTimeout("viewtime.crfr()",1);
}