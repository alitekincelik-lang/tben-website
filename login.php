		<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
		<head>
		<script language="javascript" type="text/javascript">
		<!-- Hide from Old Browsers
		function entsub(event,ourform) {
			if (event && event.which == 13)
				ourform.submit();
			else
				return true;
		}
		//-->
		</script>
		<META http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"><title>CSL</title><meta name="generator" content = "Lady Lodge Systems">
<meta name="viewport" content="width=device-width,initial-scale=1">
<META HTTP-EQUIV="imagetoolbar" CONTENT="no">
<meta name="google" content="nopagereadaloud"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><link type="text/css" href = "/ordering//includes/magicscroll-commercial/magicscroll/magicscroll.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="https://csl.coldweb.co.uk/supportfiles/csl-stylesheet-2023-03-01:20:25:14.css"><link type="text/css" rel="stylesheet" href="https://csl.coldweb.co.uk/supportfiles/advertising-banners-2025-12-08:14:20:14.css" crossorigin><script language="javascript" type="text/javascript">var BASE_DIR="ordering"</script>
<link href = "/ordering//includes/jquery-ui.css" rel = "stylesheet">
<script src = "/ordering//includes/jquery-1.12.4.js"></script>
<script src = "/ordering//includes/jquery-ui.js"></script>
<script type="text/javascript" src = "/ordering//includes/magicscroll-commercial/magicscroll/magicscroll.js"></script>
<script language="javascript" type="text/javascript" src="/ordering//pages/general.js?ver=17"></script>
<script language="javascript" type="text/javascript">
<!-- Hide from Old Browsers
var use_ajax=1;
var ajax_host='https://csl.coldweb.co.uk';
function protectimg(e) {
        var rightclick;
		if (!e) var e = window.event; // for IE
		if (e.which) rightclick = (e.which == 3);
		else if (e.button) rightclick = (e.button == 2);
 		if( rightclick ) {
			alert("Sorry, images on this site are copyright\nand are not available for download.");
			return(false);
		}
		return(true);
}
for (var i=0; i<document.images.length; i++) document.images[i].onmousedown=protectimg(event);
var unload_warned=0;
var form_modified=0;
var doing_submit=0;
function reloadOnlineOrderingImage()
{
var xmlHttp = getXMLHttp();

	xmlHttp.onreadystatechange = function() {
		if(xmlHttp.readyState == 4) {
			ProcessOnlineOrderingImage(xmlHttp.responseText);
		}
	}

	xmlHttp.open("GET", "/ordering/pages/ajax/replace_online_ordering_image.php", true); 
	xmlHttp.send(null);
}

function ProcessOnlineOrderingImage(response)
{
	/* innerHTML is rumoured to be dodgy but it
		seems to work here.  */
	if( (cell = document.getElementById("online_ordering_image")) ) {
		cell.innerHTML = response;
	}
}

function do_pic_popup(pic,title,x,y){
   preview = window.open("", title, "resizable=yes,toolbar=no,scrollbars=yes,menubar=no,status=no,directories=no,width="+x+",height="+y);
   /* The \x3C is to avoid script words being reinterpreted */
   preview.document.write('<html><head>\x3Cscript language="text/javascript">document.onmousedown=window.close();\x3C/scri' + 'pt>' + '<title>Click in the window to dismiss<\/title><\/head>'+'<body onBlur="self.focus();" marginWidth="0" marginHeight="0" topmargin="0" leftmargin="0">'+'<center><div onmousedown="javascript:self.close()"><img border="0" alt="Click to close image" src="'+pic+'">'+'<\/center><\/div><\/body><\/html>');
preview.document.close();
}
function favorite(img,code)
{
var xmlHttp = getXMLHttp();
 if( img.src.search('notloved') > 0 ) { 
   img.src = img.src.replace('not','');
	xmlHttp.open('GET','/ordering/pages/ajax/favorites.php?stcode=' + code + ';func=set', true);
 } else {
   img.src = img.src.replace('loved','notloved');
	xmlHttp.open('GET','/ordering/pages/ajax/favorites.php?stcode=' + code + ';func=clear', true);
 }
	xmlHttp.send(null);
}
function toggle_favorites(checkbox)
{
	if( checkbox.checked ) createCookie('just_favorites',1,0);
  else eraseCookie('just_favorites');
 location.reload(true);
}
-->
</script>
<link rel="shortcut icon" href="https://llscloud.net/favicon.ico"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
</head>
<body id="login_page" >
		<!-- header -->
		<!-- start of header.php -->
<div id="top_line_div"><a class="top_line_div_logo" href="http://www.charles-saunders.com"><img src="https://s3.eu-west-2.amazonaws.com/lls.clientimages/csl/general/compact_header_logo.gif" border="0" alt=" Charles Saunders E-Commerce Site " id='top_line_div_logo' style='max-height: 100%;height: auto;'onmousedown="javascript:protectimg(event)"></a><span id='top_line_div_text_login_screen' class='notsmallscreen'></span>&nbsp;</div><div class="header_breadcrumbs_bar">&nbsp;<a class="headerNav" href="http://www.charles-saunders.com">CSL</a>&nbsp;|&nbsp;<a class=headerNav href="https://csl.coldweb.co.uk/ordering/pages/default.php">Home</a> | <a class=headerNav href="https://csl.coldweb.co.uk/ordering/pages/login.php">Login</a><span class="compact_header_customer_name"></span></div>		<!-- header_eof -->
		<center>
		<div id="login_page_top_banner" class="banner_wrapper MagicScroll" data-options="mode: animation; items: 1; step: 1; speed: 500; autoplay: 4000; arrows: off; lazyLoad: true"></div>		<div width="90%" id="login_title_block">
<!--
				<tr><td colspan=2><font size="+2"><br><b>Sorry:</b> This site is
				current out of use whilst essential maintenance is being carried out.
				<p>
				We expect normal service to be resumed by 13:00 on Wednesday the 10th of July 2013.
				<p>
				We apologise for any inconvenience caused.
				</font>
				</td></tr>
				<tr><td colspan=2><font size="+1"><b>Please Note:</b> This site will be unavailable between 
				09:30 and 12:30 on Wednesday the 10th of July 2013 for essential maintenance (we're moving to
				a bigger, better, faster server to improve the service).
				We apologise for any inconvenience caused.
				</font>
				</td></tr>
-->
					<img src="https://s3.eu-west-2.amazonaws.com/lls.clientimages/csl/general/pixel_black.gif" border="0" alt=" - " width="100%" height="1">	</div>
	<div id="outer_login_block">
	<div id="inner_login_block">
	<h1>Customer Login:</h1>
	<br>
	<td><form name="login" 
	 
	method="post" action="https://csl.coldweb.co.uk/ordering/pages/login.php?action=process">
	<div> <!-- input_container -->
		<table border=0 cellpadding="4px"><tr>
		<td align="right" id="login_customer_id_label">Account Code</td>
		<td><input class="login_customer_id" type="text" name="customer_id" maxlength="6" value=""></td>
		</tr><tr>
		<td align="right" id="login_customer_password_label">Password</td>
                <td><input class="login_customer_password" type="password" name="password" onkeypress="return entsub(event,this.form)" maxlength="12" value=""></td>
		</tr></table>
	</div> <!-- input_container -->
	<br>
<input class="button" onmousedown="javascript:doing_submit=1;" align="middle" type="submit" name="login_button" value="Login"><div class="login_forgotten_and_cookie"><div class="login_password_forgotten"><a href="https://csl.coldweb.co.uk/ordering/pages/password_forgotten.php">Password forgotten?</a></div></div>	</form>
	</div> <!-- inner_login_block -->
	<div id="inner_info_block">
<div id="inner_info_block_information"><h1>Information</h1>Welcome to <B>Charles Saunders E-Commerce Site</B>.</div>		<h1>Existing Accounts</h1>
		<p>If you already have an account with us but have not been setup for online access then please <a href="https://csl.coldweb.co.uk/ordering/pages/contact_us.php">Contact Us.</a>		<p>
			</div>
	</div> <!-- outer_login_block -->
	<div id="login_page_bottom_banner" class="banner_wrapper MagicScroll" data-options="mode: animation; items: 1; step: 1; speed: 500; autoplay: 4000; arrows: off; lazyLoad: true"></div>	
</div> <!-- end of main body flex div -->

<div id="pre_footer_banner" class="banner_wrapper MagicScroll" data-options="mode: animation; items: 1; step: 1; speed: 500; autoplay: 4000; arrows: off; lazyLoad: true"></div><div class="custom_footer_holder" w3-include-html="https://csl.coldweb.co.uk/supportfiles/footer-2022-10-03:16:25:07.html"></div><div class="absolute_footer">
<table border="0" width="100%">
  <tr height="19">
    <td align="left" nowrap class="footer"><b>&nbsp;&nbsp;Saturday 25 July, 2026&nbsp;&nbsp;</b></td>
    <td align="right" nowrap class="footer"><b>&nbsp;&nbsp;12761380 pages viewed since Tuesday 01 March, 2011&nbsp;&nbsp;</b></td>
  </tr>
  <tr><td colspan=2 align="center">
<span style="font-style: italic; font-size: 40%; color:black; background:white;">Copyright &copy; 2000-2026&nbsp;<a style="text-decoration: underline;font-size: inherit;font-style: inherit;" href="http://www.lls.com">Lady Lodge Systems Ltd</a><br>This site is running: Release 4.0 <span style="font-size: 80%;">(Parse Time: 0.024ms) on 10.0.1.42</span>	</span>
  </td></tr>
</table>
<br>
<button style="display: none;" onclick="topFunction()" id="BacktoTopButton" title="Go to top">Top</button></div>
<script>
//
// Stuff that should happen at the end of the page load
//
includeHTML();

// When the user scrolls down Npx from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

var backtotop_button = document.getElementById("BacktoTopButton");

function scrollFunction() {
	if(backtotop_button) {
	  if (document.body.scrollTop > 250 || document.documentElement.scrollTop > 250) {
	    backtotop_button.style.display = "block";
	  } else {
	    backtotop_button.style.display = "none";
	  }
	}
}
// When the user clicks on the button, scroll to the top of the document
function topFunction() {
	window.scrollTo(0,0);
}
// Update the banner links
$(document).ready(setup_banner_links);
</script>
	<br><img src="https://s3.eu-west-2.amazonaws.com/lls.clientimages/csl/general/pixel_black.gif" border="0" alt=" - " width="100%" height="1"><font color="red">WARNING.</font> In order to proceed past this screen you must have a valid user-id and password as supplied by Charles Saunders E-Commerce Site. Any use of this website, including but not limited to the text, images, and data therein by AI or other automated systems for any purpose whatsoever is strictly forbidden. Any attempt at unauthorised access or modification of Computer Data is a criminal offence under the Computer Misuse Act 1990. This site uses essential <a href="http://www.aboutcookies.org">cookies</a>.</center>
<!-- footer_eof //-->
	<p>
<a href="https://validator.w3.org/check?uri=referer"><img src="https://www.w3.org/Icons/valid-html401" alt="Valid HTML 4.01 Transitional" height="31" width="88"></a>
<br>ID: 10.0.1.42</body>
</html>
