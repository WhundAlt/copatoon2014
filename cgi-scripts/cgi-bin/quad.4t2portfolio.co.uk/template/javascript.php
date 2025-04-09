if (document.images)
	{
	var start_off = new Image();start_off.src = "/images/template/menu/start_off.gif";var start_over = new Image();start_over.src = "/images/template/menu/start_over.gif";var info_off = new Image();info_off.src = "/images/template/menu/info_off.gif";var info_over = new Image();info_over.src = "/images/template/menu/info_over.gif";var demo_off = new Image();demo_off.src = "/images/template/menu/demo_off.gif";var demo_over = new Image();demo_over.src = "/images/template/menu/demo_over.gif";var levels_off = new Image();levels_off.src = "/images/template/menu/levels_off.gif";var levels_over = new Image();levels_over.src = "/images/template/menu/levels_over.gif";var hints_off = new Image();hints_off.src = "/images/template/menu/hints_off.gif";var hints_over = new Image();hints_over.src = "/images/template/menu/hints_over.gif";var champions_off = new Image();champions_off.src = "/images/template/menu/champions_off.gif";var champions_over = new Image();champions_over.src = "/images/template/menu/champions_over.gif";var links_off = new Image();links_off.src = "/images/template/menu/links_off.gif";var links_over = new Image();links_over.src = "/images/template/menu/links_over.gif";	}

function hilight(reference,changeto)
	{
	if (document.images)
		document[reference].src = eval(changeto + '.src');
	return true;
	}
	
function popup(url,X,Y)
	{
	popPage = window.open(url,'4T2_popup','status=no,location=no,resizable=yes,maximize=yes,minimize=yes,width='+X+',height='+Y+',scrollbars=yes');
	return void(0);
	}