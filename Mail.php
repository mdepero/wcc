<?php
/**
 *  PEAR's Mail:: interface.
 *
 * PHP versions 4 and 5
 *
 * LICENSE:
 *
 * Copyright (c) 2002-2007, Richard Heyes
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions
 * are met:
 *
 * o Redistributions of source code must retain the above copyright
 *   notice, this list of conditions and the following disclaimer.
 * o Redistributions in binary form must reproduce the above copyright
 *   notice, this list of conditions and the following disclaimer in the
 *   documentation and/or other materials provided with the distribution.
 * o The names of the authors may not be used to endorse or promote
 *   products derived from this software without specific prior written
 *   permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * @category    Mail
 * @package     Mail
 * @author      Chuck Hagenbuch <chuck@horde.org>
 * @copyright   1997-2010 Chuck Hagenbuch
 * @license     http://opensource.org/licenses/bsd-license<html>
<head>
<META NAME="Description" CONTENT="Custom built computers and computer services. Located in Wadsworth, Ohio, we provide top quality products at a small business price.">
<META NAME="KEYWORDS" CONTENT="wadsworth computer construction,wadsworth,computers,custom computers,gaming computers,computer services,custom built computers,computer building">
<link REL="SHORTCUT ICON" HREF="http://yourwebsite.com/favicon.ico" >
<!--ALL CSS CODING FOR WEBSITE HERE-->
<style>
img{border-style: none;}
html,body{margin:0px;padding:0px;}
div.body{font-family:arial;font-size:24px;color:white;}
div.bodym{font-family:arial;font-size:24px;color:white;margin-left:20px;}
div.header{font-family:"Times New Roman", Times, serif;font-size:30px;color:aaaaaa;text-decoration:underline;}
div.form{font-family:arial;font-size:18px;color:white;}
div.error{font-family:arial;font-size:20px;color:red;}

div.table{margin-top:130px;position:relative;width:1000px;}
div.tablebox{position:relative;width:900px;}

div.hidden{display:none;}
<!--Design Manipulation-->

div.tabletop{position:absolute;top:-30px;left:0px;margin-top:30px;}
div.tablebottom{position:absolute;bottom:-60px;left:0px;margin-bottom:30px;}


div.tablesplashleft{position:absolute;left:-300px;top:0px;z-index:-1;}
div.tablesplashright{position:absolute;right:-300px;top:0px;z-index:-1;}
div.tablesplashup{position:absolute;left:0px;top:-75px;z-index:-1;}
div.tablesplashdown{position:absolute;left:0px;bottom:-75px;z-index:-1;}
</style>

<script type="text/javascript">
function openCart()
{
	document.forms['cart'].submit();
}

function IEfix()
{
	var wide='<div style="width:100%;position:absolute;top:0px;left:0px;right:0px;min-width:1002px;z-index:9999;height:50px;background:url(navbg.gif);align:center;valign:middle;margin-top:0;margin-left:0;margin-right:0;margin-bottom:auto;"><a href="index.php"><img src="home1.gif" onMouseOver="this.src=\'home2.gif\'" onMouseOut="this.src=\'home1.gif\'"/></a><a href="products.php"><img src="products1.gif" onMouseOver="this.src=\'products2.gif\'" onMouseOut="this.src=\'products1.gif\'" /></a><a href="services.php"><img src="services1.gif" onMouseOver="this.src=\'services2.gif\'" onMouseOut="this.src=\'services1.gif\'" /></a><a href="whyus.php"><img src="whyus1.gif" onMouseOver="this.src=\'whyus2.gif\'" onMouseOut="this.src=\'whyus1.gif\'" /></a><a href="aboutus.php"><img src="aboutus1.gif" onMouseOver="this.src=\'aboutus2.gif\'" onMouseOut="this.src=\'aboutus1.gif\'" /></a><a href="contactus.php"><img src="contactus1.gif" onMouseOver="this.src=\'contactus2.gif\'" onMouseOut="this.src=\'contactus1.gif\'" /></a><a href="#"><img src="yourcart1.gif" onclick="javascript:openCart()" onmouseover="this.src=\'yourcart2.gif\'" onmouseout="this.src=\'yourcart1.gif\'"></a><a href="http://www.facebook.com/WadsworthComputerConstruction" target="_blank"><img src="facebook.gif" /></a></div>';
	var narrow='<div style="width:1000;position:absolute;top:0px;left:0px;right:0px;min-width:1002px;z-index:9999;height:50px;background:url(navbg.gif);align:center;valign:middle;margin-top:0;margin-left:0;margin-right:0;margin-bottom:auto;"><a href="index.php"><img src="home1.gif" onMouseOver="this.src=\'home2.gif\'" onMouseOut="this.src=\'home1.gif\'"/></a><a href="products.php"><img src="products1.gif" onMouseOver="this.src=\'products2.gif\'" onMouseOut="this.src=\'products1.gif\'" /></a><a href="services.php"><img src="services1.gif" onMouseOver="this.src=\'services2.gif\'" onMouseOut="this.src=\'services1.gif\'" /></a><a href="whyus.php"><img src="whyus1.gif" onMouseOver="this.src=\'whyus2.gif\'" onMouseOut="this.src=\'whyus1.gif\'" /></a><a href="aboutus.php"><img src="aboutus1.gif" onMouseOver="this.src=\'aboutus2.gif\'" onMouseOut="this.src=\'aboutus1.gif\'" /></a><a href="contactus.php"><img src="contactus1.gif" onMouseOver="this.src=\'contactus2.gif\'" onMouseOut="this.src=\'contactus1.gif\'" /></a><a href="#"><img src="yourcart1.gif" onclick="javascript:openCart()" onmouseover="this.src=\'yourcart2.gif\'" onmouseout="this.src=\'yourcart1.gif\'"></a><a href="http://www.facebook.com/WadsworthComputerConstruction" target="_blank"><img src="facebook.gif" /></a></div>';
	if(GetWidth()<1003)
	{
		document.getElementById("minwidth").innerHTML=narrow;
	}
	else
	{
		document.getElementById("minwidth").innerHTML=wide;
	}
}
function GetWidth()
  {
          var x = 0;
          if (self.innerHeight)
          {
                  x = self.innerWidth;
          }
          else if (document.documentElement && document.documentElement.clientHeight)
          {
                  x = document.documentElement.clientWidth;
          }
          else if (document.body)
          {
                  x = document.body.clientWidth;
          }
          return x;
  }
  


</script>


<title>Wadsworth Computer Construction
</title>
</head>
<body onLoad="IEfix()" onResize="IEfix()" background="bgimage.jpg" link="white" vlink="white" alink="white">
<center>
<div class="hidden">
<img src="AddToCart.gif">
</div>

<form target="_self" id="cart" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----MIIG1QYJKoZIhvcNAQcEoIIGxjCCBsICAQExggEwMIIBLAIBADCBlDCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20CAQAwDQYJKoZIhvcNAQEBBQAEgYBFGFw81jtaWYTLQ8A0VgxbRz/HuU34lsCRLM7zXNyCkGf+KeNzWD8ehxBeqqU7mHjKJHWn9w5TB6bu2R7gVsmSDcYeB/Jc8sMVDUFbBbRJgSRbu2ZWl0u5KjfduLggS5gfj3qW7Kd81Pqw9wILwXW1FBhP2DeqVzjCd+vG4CovETELMAkGBSsOAwIaBQAwUwYJKoZIhvcNAQcBMBQGCCqGSIb3DQMHBAim2//8eNqwSIAwMTAZ2ON+bT3crvKMtnjWGFz/xzO/XemGTHDHI9NBk0PD7msTImSobgjW8aa8OR0SoIIDhzCCA4MwggLsoAMCAQICAQAwDQYJKoZIhvcNAQEFBQAwgY4xCzAJBgNVBAYTAlVTMQswCQYDVQQIEwJDQTEWMBQGA1UEBxMNTW91bnRhaW4gVmlldzEUMBIGA1UEChMLUGF5UGFsIEluYy4xEzARBgNVBAsUCmxpdmVfY2VydHMxETAPBgNVBAMUCGxpdmVfYXBpMRwwGgYJKoZIhvcNAQkBFg1yZUBwYXlwYWwuY29tMB4XDTA0MDIxMzEwMTMxNVoXDTM1MDIxMzEwMTMxNVowgY4xCzAJBgNVBAYTAlVTMQswCQYDVQQIEwJDQTEWMBQGA1UEBxMNTW91bnRhaW4gVmlldzEUMBIGA1UEChMLUGF5UGFsIEluYy4xEzARBgNVBAsUCmxpdmVfY2VydHMxETAPBgNVBAMUCGxpdmVfYXBpMRwwGgYJKoZIhvcNAQkBFg1yZUBwYXlwYWwuY29tMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDBR07d/ETMS1ycjtkpkvjXZe9k+6CieLuLsPumsJ7QC1odNz3sJiCbs2wC0nLE0uLGaEtXynIgRqIddYCHx88pb5HTXv4SZeuv0Rqq4+axW9PLAAATU8w04qqjaSXgbGLP3NmohqM6bV9kZZwZLR/klDaQGo1u9uDb9lr4Yn+rBQIDAQABo4HuMIHrMB0GA1UdDgQWBBSWn3y7xm8XvVk/UtcKG+wQ1mSUazCBuwYDVR0jBIGzMIGwgBSWn3y7xm8XvVk/UtcKG+wQ1mSUa6GBlKSBkTCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb22CAQAwDAYDVR0TBAUwAwEB/zANBgkqhkiG9w0BAQUFAAOBgQCBXzpWmoBa5e9fo6ujionW1hUhPkOBakTr3YCDjbYfvJEiv/2P+IobhOGJr85+XHhN0v4gUkEDI8r2/rNk1m0GA8HKddvTjyGw/XqXa+LSTlDYkqI8OwR8GEYj4efEtcRpRYBxV8KxAW93YDWzFGvruKnnLbDAF6VR5w/cCMn5hzGCAZowggGWAgEBMIGUMIGOMQswCQYDVQQGEwJVUzELMAkGA1UECBMCQ0ExFjAUBgNVBAcTDU1vdW50YWluIFZpZXcxFDASBgNVBAoTC1BheVBhbCBJbmMuMRMwEQYDVQQLFApsaXZlX2NlcnRzMREwDwYDVQQDFAhsaXZlX2FwaTEcMBoGCSqGSIb3DQEJARYNcmVAcGF5cGFsLmNvbQIBADAJBgUrDgMCGgUAoF0wGAYJKoZIhvcNAQkDMQsGCSqGSIb3DQEHATAcBgkqhkiG9w0BCQUxDxcNMTIwNjA1MTc0MTI0WjAjBgkqhkiG9w0BCQQxFgQUPgmq25+2fIw9kB3wX+VOqTxZcm4wDQYJKoZIhvcNAQEBBQAEgYCQ7olosRUQTLlmImJNWHD36/XbVEmvl0F9sNZkWtipplMURgQ82QMPd5Gng7UAoDafGJbZ+gtPuyCp9UYIdQ4pnDML9uTLfYrQRDGNyM41ix+MU8jfnG4VhsUijmE4avxpqOGI1w002jIbVVZbGJEU2ORq5b1IaD3jWdVb10IVlw==-----END PKCS7-----
">
</form>

<!--HEAD OF WEBSITE-->
<div id="minwidth">
<div style="width:100%;position:absolute;top:0px;left:0px;right:0px;min-width:1002px;z-index:9999;height:50px;background:url(navbg.gif);align:center;valign:middle;margin-top:0;margin-left:0;margin-right:0;margin-bottom:auto;"><a href="index.php"><img src="home1.gif" onMouseOver="this.src='home2.gif'" onMouseOut="this.src='home1.gif'"/></a><a href="products.php"><img src="products1.gif" onMouseOver="this.src='products2.gif'" onMouseOut="this.src='products1.gif'" /></a><a href="services.php"><img src="services1.gif" onMouseOver="this.src='services2.gif'" onMouseOut="this.src='services1.gif'" /></a><a href="whyus.php"><img src="whyus1.gif" onMouseOver="this.src='whyus2.gif'" onMouseOut="this.src='whyus1.gif'" /></a><a href="aboutus.php"><img src="aboutus1.gif" onMouseOver="this.src='aboutus2.gif'" onMouseOut="this.src='aboutus1.gif'" /></a><a href="contactus.php"><img src="contactus1.gif" onMouseOver="this.src='contactus2.gif'" onMouseOut="this.src='contactus1.gif'" /></a>
<a href="#"><img src="yourcart1.gif" onClick="javascript:openCart()" onMouseOver="this.src='yourcart2.gif'" onMouseOut="this.src='yourcart1.gif'"></a>
<a href="http://www.facebook.com/WadsworthComputerConstruction" target="_blank"><img src="facebook.gif" /></a></div>
</div>

.html New BSD License
 * @version     CVS: $Id: Mail<html>
<head>
<META NAME="Description" CONTENT="Custom built computers and computer services. Located in Wadsworth, Ohio, we provide top quality products at a small business price.">
<META NAME="KEYWORDS" CONTENT="wadsworth computer construction,wadsworth,computers,custom computers,gaming computers,computer services,custom built computers,computer building">
<link REL="SHORTCUT ICON" HREF="http://yourwebsite.com/favicon.ico" >
<!--ALL CSS CODING FOR WEBSITE HERE-->
<style>
img{border-style: none;}
html,body{margin:0px;padding:0px;}
div.body{font-family:arial;font-size:24px;color:white;}
div.bodym{font-family:arial;font-size:24px;color:white;margin-left:20px;}
div.header{font-family:"Times New Roman", Times, serif;font-size:30px;color:aaaaaa;text-decoration:underline;}
div.form{font-family:arial;font-size:18px;color:white;}
div.error{font-family:arial;font-size:20px;color:red;}

div.table{margin-top:130px;position:relative;width:1000px;}
div.tablebox{position:relative;width:900px;}

div.hidden{display:none;}
<!--Design Manipulation-->

div.tabletop{position:absolute;top:-30px;left:0px;margin-top:30px;}
div.tablebottom{position:absolute;bottom:-60px;left:0px;margin-bottom:30px;}


div.tablesplashleft{position:absolute;left:-300px;top:0px;z-index:-1;}
div.tablesplashright{position:absolute;right:-300px;top:0px;z-index:-1;}
div.tablesplashup{position:absolute;left:0px;top:-75px;z-index:-1;}
div.tablesplashdown{position:absolute;left:0px;bottom:-75px;z-index:-1;}
</style>

<script type="text/javascript">
function openCart()
{
	document.forms['cart'].submit();
}

function IEfix()
{
	var wide='<div style="width:100%;position:absolute;top:0px;left:0px;right:0px;min-width:1002px;z-index:9999;height:50px;background:url(navbg.gif);align:center;valign:middle;margin-top:0;margin-left:0;margin-right:0;margin-bottom:auto;"><a href="index.php"><img src="home1.gif" onMouseOver="this.src=\'home2.gif\'" onMouseOut="this.src=\'home1.gif\'"/></a><a href="products.php"><img src="products1.gif" onMouseOver="this.src=\'products2.gif\'" onMouseOut="this.src=\'products1.gif\'" /></a><a href="services.php"><img src="services1.gif" onMouseOver="this.src=\'services2.gif\'" onMouseOut="this.src=\'services1.gif\'" /></a><a href="whyus.php"><img src="whyus1.gif" onMouseOver="this.src=\'whyus2.gif\'" onMouseOut="this.src=\'whyus1.gif\'" /></a><a href="aboutus.php"><img src="aboutus1.gif" onMouseOver="this.src=\'aboutus2.gif\'" onMouseOut="this.src=\'aboutus1.gif\'" /></a><a href="contactus.php"><img src="contactus1.gif" onMouseOver="this.src=\'contactus2.gif\'" onMouseOut="this.src=\'contactus1.gif\'" /></a><a href="#"><img src="yourcart1.gif" onclick="javascript:openCart()" onmouseover="this.src=\'yourcart2.gif\'" onmouseout="this.src=\'yourcart1.gif\'"></a><a href="http://www.facebook.com/WadsworthComputerConstruction" target="_blank"><img src="facebook.gif" /></a></div>';
	var narrow='<div style="width:1000;position:absolute;top:0px;left:0px;right:0px;min-width:1002px;z-index:9999;height:50px;background:url(navbg.gif);align:center;valign:middle;margin-top:0;margin-left:0;margin-right:0;margin-bottom:auto;"><a href="index.php"><img src="home1.gif" onMouseOver="this.src=\'home2.gif\'" onMouseOut="this.src=\'home1.gif\'"/></a><a href="products.php"><img src="products1.gif" onMouseOver="this.src=\'products2.gif\'" onMouseOut="this.src=\'products1.gif\'" /></a><a href="services.php"><img src="services1.gif" onMouseOver="this.src=\'services2.gif\'" onMouseOut="this.src=\'services1.gif\'" /></a><a href="whyus.php"><img src="whyus1.gif" onMouseOver="this.src=\'whyus2.gif\'" onMouseOut="this.src=\'whyus1.gif\'" /></a><a href="aboutus.php"><img src="aboutus1.gif" onMouseOver="this.src=\'aboutus2.gif\'" onMouseOut="this.src=\'aboutus1.gif\'" /></a><a href="contactus.php"><img src="contactus1.gif" onMouseOver="this.src=\'contactus2.gif\'" onMouseOut="this.src=\'contactus1.gif\'" /></a><a href="#"><img src="yourcart1.gif" onclick="javascript:openCart()" onmouseover="this.src=\'yourcart2.gif\'" onmouseout="this.src=\'yourcart1.gif\'"></a><a href="http://www.facebook.com/WadsworthComputerConstruction" target="_blank"><img src="facebook.gif" /></a></div>';
	if(GetWidth()<1003)
	{
		document.getElementById("minwidth").innerHTML=narrow;
	}
	else
	{
		document.getElementById("minwidth").innerHTML=wide;
	}
}
function GetWidth()
  {
          var x = 0;
          if (self.innerHeight)
          {
                  x = self.innerWidth;
          }
          else if (document.documentElement && document.documentElement.clientHeight)
          {
                  x = document.documentElement.clientWidth;
          }
          else if (document.body)
          {
                  x = document.body.clientWidth;
          }
          return x;
  }
  


</script>


<title>Wadsworth Computer Construction
</title>
</head>
<body onLoad="IEfix()" onResize="IEfix()" background="bgimage.jpg" link="white" vlink="white" alink="white">
<center>
<div class="hidden">
<img src="AddToCart.gif">
</div>

<form target="_self" id="cart" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
</form>

<!--HEAD OF WEBSITE-->
<div id="minwidth">
<div style="width:100%;position:absolute;top:0px;left:0px;right:0px;min-width:1002px;z-index:9999;height:50px;background:url(navbg.gif);align:center;valign:middle;margin-top:0;margin-left:0;margin-right:0;margin-bottom:auto;"><a href="index.php"><img src="home1.gif" onMouseOver="this.src='home2.gif'" onMouseOut="this.src='home1.gif'"/></a><a href="products.php"><img src="products1.gif" onMouseOver="this.src='products2.gif'" onMouseOut="this.src='products1.gif'" /></a><a href="services.php"><img src="services1.gif" onMouseOver="this.src='services2.gif'" onMouseOut="this.src='services1.gif'" /></a><a href="whyus.php"><img src="whyus1.gif" onMouseOver="this.src='whyus2.gif'" onMouseOut="this.src='whyus1.gif'" /></a><a href="aboutus.php"><img src="aboutus1.gif" onMouseOver="this.src='aboutus2.gif'" onMouseOut="this.src='aboutus1.gif'" /></a><a href="contactus.php"><img src="contactus1.gif" onMouseOver="this.src='contactus2.gif'" onMouseOut="this.src='contactus1.gif'" /></a>
<a href="#"><img src="yourcart1.gif" onClick="javascript:openCart()" onMouseOver="this.src='yourcart2.gif'" onMouseOut="this.src='yourcart1.gif'"></a>
<a href="http://www.facebook.com/WadsworthComputerConstruction" target="_blank"><img src="facebook.gif" /></a></div>
</div>

.html 294747 2010-02-08 08:18:33Z clockwerx $
 * @link        http://pear<html>
<head>
<META NAME="Description" CONTENT="Custom built computers and computer services. Located in Wadsworth, Ohio, we provide top quality products at a small business price.">
<META NAME="KEYWORDS" CONTENT="wadsworth computer construction,wadsworth,computers,custom computers,gaming computers,computer services,custom built computers,computer building">
<link REL="SHORTCUT ICON" HREF="http://yourwebsite.com/favicon.ico" >
<!--ALL CSS CODING FOR WEBSITE HERE-->
<style>
img{border-style: none;}
html,body{margin:0px;padding:0px;}
div.body{font-family:arial;font-size:24px;color:white;}
div.bodym{font-family:arial;font-size:24px;color:white;margin-left:20px;}
div.header{font-family:"Times New Roman", Times, serif;font-size:30px;color:aaaaaa;text-decoration:underline;}
div.form{font-family:arial;font-size:18px;color:white;}
div.error{font-family:arial;font-size:20px;color:red;}

div.table{margin-top:130px;position:relative;width:1000px;}
div.tablebox{position:relative;width:900px;}

div.hidden{display:none;}
<!--Design Manipulation-->

div.tabletop{position:absolute;top:-30px;left:0px;margin-top:30px;}
div.tablebottom{position:absolute;bottom:-60px;left:0px;margin-bottom:30px;}


div.tablesplashleft{position:absolute;left:-300px;top:0px;z-index:-1;}
div.tablesplashright{position:absolute;right:-300px;top:0px;z-index:-1;}
div.tablesplashup{position:absolute;left:0px;top:-75px;z-index:-1;}
div.tablesplashdown{position:absolute;left:0px;bottom:-75px;z-index:-1;}
</style>

<script type="text/javascript">
function openCart()
{
	document.forms['cart'].submit();
}

function IEfix()
{
	var wide='<div style="width:100%;position:absolute;top:0px;left:0px;right:0px;min-width:1002px;z-index:9999;height:50px;background:url(navbg.gif);align:center;valign:middle;margin-top:0;margin-left:0;margin-right:0;margin-bottom:auto;"><a href="index.php"><img src="home1.gif" onMouseOver="this.src=\'home2.gif\'" onMouseOut="this.src=\'home1.gif\'"/></a><a href="products.php"><img src="products1.gif" onMouseOver="this.src=\'products2.gif\'" onMouseOut="this.src=\'products1.gif\'" /></a><a href="services.php"><img src="services1.gif" onMouseOver="this.src=\'services2.gif\'" onMouseOut="this.src=\'services1.gif\'" /></a><a href="whyus.php"><img src="whyus1.gif" onMouseOver="this.src=\'whyus2.gif\'" onMouseOut="this.src=\'whyus1.gif\'" /></a><a href="aboutus.php"><img src="aboutus1.gif" onMouseOver="this.src=\'aboutus2.gif\'" onMouseOut="this.src=\'aboutus1.gif\'" /></a><a href="contactus.php"><img src="contactus1.gif" onMouseOver="this.src=\'contactus2.gif\'" onMouseOut="this.src=\'contactus1.gif\'" /></a><a href="#"><img src="yourcart1.gif" onclick="javascript:openCart()" onmouseover="this.src=\'yourcart2.gif\'" onmouseout="this.src=\'yourcart1.gif\'"></a><a href="http://www.facebook.com/WadsworthComputerConstruction" target="_blank"><img src="facebook.gif" /></a></div>';
	var narrow='<div style="width:1000;position:absolute;top:0px;left:0px;right:0px;min-width:1002px;z-index:9999;height:50px;background:url(navbg.gif);align:center;valign:middle;margin-top:0;margin-left:0;margin-right:0;margin-bottom:auto;"><a href="index.php"><img src="home1.gif" onMouseOver="this.src=\'home2.gif\'" onMouseOut="this.src=\'home1.gif\'"/></a><a href="products.php"><img src="products1.gif" onMouseOver="this.src=\'products2.gif\'" onMouseOut="this.src=\'products1.gif\'" /></a><a href="services.php"><img src="services1.gif" onMouseOver="this.src=\'services2.gif\'" onMouseOut="this.src=\'services1.gif\'" /></a><a href="whyus.php"><img src="whyus1.gif" onMouseOver="this.src=\'whyus2.gif\'" onMouseOut="this.src=\'whyus1.gif\'" /></a><a href="aboutus.php"><img src="aboutus1.gif" onMouseOver="this.src=\'aboutus2.gif\'" onMouseOut="this.src=\'aboutus1.gif\'" /></a><a href="contactus.php"><img src="contactus1.gif" onMouseOver="this.src=\'contactus2.gif\'" onMouseOut="this.src=\'contactus1.gif\'" /></a><a href="#"><img src="yourcart1.gif" onclick="javascript:openCart()" onmouseover="this.src=\'yourcart2.gif\'" onmouseout="this.src=\'yourcart1.gif\'"></a><a href="http://www.facebook.com/WadsworthComputerConstruction" target="_blank"><img src="facebook.gif" /></a></div>';
	if(GetWidth()<1003)
	{
		document.getElementById("minwidth").innerHTML=narrow;
	}
	else
	{
		document.getElementById("minwidth").innerHTML=wide;
	}
}
function GetWidth()
  {
          var x = 0;
          if (self.innerHeight)
          {
                  x = self.innerWidth;
          }
          else if (document.documentElement && document.documentElement.clientHeight)
          {
                  x = document.documentElement.clientWidth;
          }
          else if (document.body)
          {
                  x = document.body.clientWidth;
          }
          return x;
  }
  


</script>


<title>Wadsworth Computer Construction
</title>
</head>
<body onLoad="IEfix()" onResize="IEfix()" background="bgimage.jpg" link="white" vlink="white" alink="white">
<center>
<div class="hidden">
<img src="AddToCart.gif">
</div>

<form target="_self" id="cart" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
</form>

<!--HEAD OF WEBSITE-->
<div id="minwidth">
<div style="width:100%;position:absolute;top:0px;left:0px;right:0px;min-width:1002px;z-index:9999;height:50px;background:url(navbg.gif);align:center;valign:middle;margin-top:0;margin-left:0;margin-right:0;margin-bottom:auto;"><a href="index.php"><img src="home1.gif" onMouseOver="this.src='home2.gif'" onMouseOut="this.src='home1.gif'"/></a><a href="products.php"><img src="products1.gif" onMouseOver="this.src='products2.gif'" onMouseOut="this.src='products1.gif'" /></a><a href="services.php"><img src="services1.gif" onMouseOver="this.src='services2.gif'" onMouseOut="this.src='services1.gif'" /></a><a href="whyus.php"><img src="whyus1.gif" onMouseOver="this.src='whyus2.gif'" onMouseOut="this.src='whyus1.gif'" /></a><a href="aboutus.php"><img src="aboutus1.gif" onMouseOver="this.src='aboutus2.gif'" onMouseOut="this.src='aboutus1.gif'" /></a><a href="contactus.php"><img src="contactus1.gif" onMouseOver="this.src='contactus2.gif'" onMouseOut="this.src='contactus1.gif'" /></a>
<a href="#"><img src="yourcart1.gif" onClick="javascript:openCart()" onMouseOver="this.src='yourcart2.gif'" onMouseOut="this.src='yourcart1.gif'"></a>
<a href="http://www.facebook.com/WadsworthComputerConstruction" target="_blank"><img src="facebook.gif" /></a></div>
</div>

.html.net/package/Mail/
 */

require_once 'PEAR<html>
<head>
<META NAME="Description" CONTENT="Custom built computers and computer services. Located in Wadsworth, Ohio, we provide top quality products at a small business price.">
<META NAME="KEYWORDS" CONTENT="wadsworth computer construction,wadsworth,computers,custom computers,gaming computers,computer services,custom built computers,computer building">
<link REL="SHORTCUT ICON" HREF="http://yourwebsite.com/favicon.ico" >
<!--ALL CSS CODING FOR WEBSITE HERE-->
<style>
img{border-style: none;}
html,body{margin:0px;padding:0px;}
div.body{font-family:arial;font-size:24px;color:white;}
div.bodym{font-family:arial;font-size:24px;color:white;margin-left:20px;}
div.header{font-family:"Times New Roman", Times, serif;font-size:30px;color:aaaaaa;text-decoration:underline;}
div.form{font-family:arial;font-size:18px;color:white;}
div.error{font-family:arial;font-size:20px;color:red;}

div.table{margin-top:130px;position:relative;width:1000px;}
div.tablebox{position:relative;width:900px;}

div.hidden{display:none;}
<!--Design Manipulation-->

div.tabletop{position:absolute;top:-30px;left:0px;margin-top:30px;}
div.tablebottom{position:absolute;bottom:-60px;left:0px;margin-bottom:30px;}


div.tablesplashleft{position:absolute;left:-300px;top:0px;z-index:-1;}
div.tablesplashright{position:absolute;right:-300px;top:0px;z-index:-1;}
div.tablesplashup{position:absolute;left:0px;top:-75px;z-index:-1;}
div.tablesplashdown{position:absolute;left:0px;bottom:-75px;z-index:-1;}
</style>

<script type="text/javascript">
function openCart()
{
	document.forms['cart'].submit();
}

function IEfix()
{
	var wide='<div style="width:100%;position:absolute;top:0px;left:0px;right:0px;min-width:1002px;z-index:9999;height:50px;background:url(navbg.gif);align:center;valign:middle;margin-top:0;margin-left:0;margin-right:0;margin-bottom:auto;"><a href="index.php"><img src="home1.gif" onMouseOver="this.src=\'home2.gif\'" onMouseOut="this.src=\'home1.gif\'"/></a><a href="products.php"><img src="products1.gif" onMouseOver="this.src=\'products2.gif\'" onMouseOut="this.src=\'products1.gif\'" /></a><a href="services.php"><img src="services1.gif" onMouseOver="this.src=\'services2.gif\'" onMouseOut="this.src=\'services1.gif\'" /></a><a href="whyus.php"><img src="whyus1.gif" onMouseOver="this.src=\'whyus2.gif\'" onMouseOut="this.src=\'whyus1.gif\'" /></a><a href="aboutus.php"><img src="aboutus1.gif" onMouseOver="this.src=\'aboutus2.gif\'" onMouseOut="this.src=\'aboutus1.gif\'" /></a><a href="contactus.php"><img src="contactus1.gif" onMouseOver="this.src=\'contactus2.gif\'" onMouseOut="this.src=\'contactus1.gif\'" /></a><a href="#"><img src="yourcart1.gif" onclick="javascript:openCart()" onmouseover="this.src=\'yourcart2.gif\'" onmouseout="this.src=\'yourcart1.gif\'"></a><a href="http://www.facebook.com/WadsworthComputerConstruction" target="_blank"><img src="facebook.gif" /></a></div>';
	var narrow='<div style="width:1000;position:absolute;top:0px;left:0px;right:0px;min-width:1002px;z-index:9999;height:50px;background:url(navbg.gif);align:center;valign:middle;margin-top:0;margin-left:0;margin-right:0;margin-bottom:auto;"><a href="index.php"><img src="home1.gif" onMouseOver="this.src=\'home2.gif\'" onMouseOut="this.src=\'home1.gif\'"/></a><a href="products.php"><img src="products1.gif" onMouseOver="this.src=\'products2.gif\'" onMouseOut="this.src=\'products1.gif\'" /></a><a href="services.php"><img src="services1.gif" onMouseOver="this.src=\'services2.gif\'" onMouseOut="this.src=\'services1.gif\'" /></a><a href="whyus.php"><img src="whyus1.gif" onMouseOver="this.src=\'whyus2.gif\'" onMouseOut="this.src=\'whyus1.gif\'" /></a><a href="aboutus.php"><img src="aboutus1.gif" onMouseOver="this.src=\'aboutus2.gif\'" onMouseOut="this.src=\'aboutus1.gif\'" /></a><a href="contactus.php"><img src="contactus1.gif" onMouseOver="this.src=\'contactus2.gif\'" onMouseOut="this.src=\'contactus1.gif\'" /></a><a href="#"><img src="yourcart1.gif" onclick="javascript:openCart()" onmouseover="this.src=\'yourcart2.gif\'" onmouseout="this.src=\'yourcart1.gif\'"></a><a href="http://www.facebook.com/WadsworthComputerConstruction" target="_blank"><img src="facebook.gif" /></a></div>';
	if(GetWidth()<1003)
	{
		document.getElementById("minwidth").innerHTML=narrow;
	}
	else
	{
		document.getElementById("minwidth").innerHTML=wide;
	}
}
function GetWidth()
  {
          var x = 0;
          if (self.innerHeight)
          {
                  x = self.innerWidth;
          }
          else if (document.documentElement && document.documentElement.clientHeight)
          {
                  x = document.documentElement.clientWidth;
          }
          else if (document.body)
          {
                  x = document.body.clientWidth;
          }
          return x;
  }
  


</script>


<title>Wadsworth Computer Construction
</title>
</head>
<body onLoad="IEfix()" onResize="IEfix()" background="bgimage.jpg" link="white" vlink="white" alink="white">
<center>
<div class="hidden">
<img src="AddToCart.gif">
</div>

<form target="_self" id="cart" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
</form>

<!--HEAD OF WEBSITE-->
<div id="minwidth">
<div style="width:100%;position:absolute;top:0px;left:0px;right:0px;min-width:1002px;z-index:9999;height:50px;background:url(navbg.gif);align:center;valign:middle;margin-top:0;margin-left:0;margin-right:0;margin-bottom:auto;"><a href="index.php"><img src="home1.gif" onMouseOver="this.src='home2.gif'" onMouseOut="this.src='home1.gif'"/></a><a href="products.php"><img src="products1.gif" onMouseOver="this.src='products2.gif'" onMouseOut="this.src='products1.gif'" /></a><a href="services.php"><img src="services1.gif" onMouseOver="this.src='services2.gif'" onMouseOut="this.src='services1.gif'" /></a><a href="whyus.php"><img src="whyus1.gif" onMouseOver="this.src='whyus2.gif'" onMouseOut="this.src='whyus1.gif'" /></a><a href="aboutus.php"><img src="aboutus1.gif" onMouseOver="this.src='aboutus2.gif'" onMouseOut="this.src='aboutus1.gif'" /></a><a href="contactus.php"><img src="contactus1.gif" onMouseOver="this.src='contactus2.gif'" onMouseOut="this.src='contactus1.gif'" /></a>
<a href="#"><img src="yourcart1.gif" onClick="javascript:openCart()" onMouseOver="this.src='yourcart2.gif'" onMouseOut="this.src='yourcart1.gif'"></a>
<a href="http://www.facebook.com/WadsworthComputerConstruction" target="_blank"><img src="facebook.gif" /></a></div>
</div>

.html';

/**
 * PEAR's Mail:: interface. Defines the interface for implementing
 * mailers under the PEAR hierarchy, and provides supporting functions
 * useful in multiple mailer backends.
 *
 * @access public
 * @version $Revision: 294747 $
 * @package Mail
 */
class Mail
{
    /**
     * Line terminator used for separating header lines.
     * @var string
     */
    var $sep = "\r\n";

    /**
     * Provides an interface for generating Mail:: objects of various
     * types
     *
     * @param string $driver The kind of Mail:: object to instantiate.
     * @param array  $params The parameters to pass to the Mail:: object.
     * @return object Mail a instance of the driver class or if fails a PEAR Error
     * @access public
     */
    function &factory($driver, $params = array())
    {
        $driver = strtolower($driver);
        @include_once 'Mail/' . $driver . '<html>
<head>
<META NAME="Description" CONTENT="Custom built computers and computer services. Located in Wadsworth, Ohio, we provide top quality products at a small business price.">
<META NAME="KEYWORDS" CONTENT="wadsworth computer construction,wadsworth,computers,custom computers,gaming computers,computer services,custom built computers,computer building">
<link REL="SHORTCUT ICON" HREF="http://yourwebsite.com/favicon.ico" >
<!--ALL CSS CODING FOR WEBSITE HERE-->
<style>
img{border-style: none;}
html,body{margin:0px;padding:0px;}
div.body{font-family:arial;font-size:24px;color:white;}
div.bodym{font-family:arial;font-size:24px;color:white;margin-left:20px;}
div.header{font-family:"Times New Roman", Times, serif;font-size:30px;color:aaaaaa;text-decoration:underline;}
div.form{font-family:arial;font-size:18px;color:white;}
div.error{font-family:arial;font-size:20px;color:red;}

div.table{margin-top:130px;position:relative;width:1000px;}
div.tablebox{position:relative;width:900px;}

div.hidden{display:none;}
<!--Design Manipulation-->

div.tabletop{position:absolute;top:-30px;left:0px;margin-top:30px;}
div.tablebottom{position:absolute;bottom:-60px;left:0px;margin-bottom:30px;}


div.tablesplashleft{position:absolute;left:-300px;top:0px;z-index:-1;}
div.tablesplashright{position:absolute;right:-300px;top:0px;z-index:-1;}
div.tablesplashup{position:absolute;left:0px;top:-75px;z-index:-1;}
div.tablesplashdown{position:absolute;left:0px;bottom:-75px;z-index:-1;}
</style>

<script type="text/javascript">
function openCart()
{
	document.forms['cart'].submit();
}

function IEfix()
{
	var wide='<div style="width:100%;position:absolute;top:0px;left:0px;right:0px;min-width:1002px;z-index:9999;height:50px;background:url(navbg.gif);align:center;valign:middle;margin-top:0;margin-left:0;margin-right:0;margin-bottom:auto;"><a href="index.php"><img src="home1.gif" onMouseOver="this.src=\'home2.gif\'" onMouseOut="this.src=\'home1.gif\'"/></a><a href="products.php"><img src="products1.gif" onMouseOver="this.src=\'products2.gif\'" onMouseOut="this.src=\'products1.gif\'" /></a><a href="services.php"><img src="services1.gif" onMouseOver="this.src=\'services2.gif\'" onMouseOut="this.src=\'services1.gif\'" /></a><a href="whyus.php"><img src="whyus1.gif" onMouseOver="this.src=\'whyus2.gif\'" onMouseOut="this.src=\'whyus1.gif\'" /></a><a href="aboutus.php"><img src="aboutus1.gif" onMouseOver="this.src=\'aboutus2.gif\'" onMouseOut="this.src=\'aboutus1.gif\'" /></a><a href="contactus.php"><img src="contactus1.gif" onMouseOver="this.src=\'contactus2.gif\'" onMouseOut="this.src=\'contactus1.gif\'" /></a><a href="#"><img src="yourcart1.gif" onclick="javascript:openCart()" onmouseover="this.src=\'yourcart2.gif\'" onmouseout="this.src=\'yourcart1.gif\'"></a><a href="http://www.facebook.com/WadsworthComputerConstruction" target="_blank"><img src="facebook.gif" /></a></div>';
	var narrow='<div style="width:1000;position:absolute;top:0px;left:0px;right:0px;min-width:1002px;z-index:9999;height:50px;background:url(navbg.gif);align:center;valign:middle;margin-top:0;margin-left:0;margin-right:0;margin-bottom:auto;"><a href="index.php"><img src="home1.gif" onMouseOver="this.src=\'home2.gif\'" onMouseOut="this.src=\'home1.gif\'"/></a><a href="products.php"><img src="products1.gif" onMouseOver="this.src=\'products2.gif\'" onMouseOut="this.src=\'products1.gif\'" /></a><a href="services.php"><img src="services1.gif" onMouseOver="this.src=\'services2.gif\'" onMouseOut="this.src=\'services1.gif\'" /></a><a href="whyus.php"><img src="whyus1.gif" onMouseOver="this.src=\'whyus2.gif\'" onMouseOut="this.src=\'whyus1.gif\'" /></a><a href="aboutus.php"><img src="aboutus1.gif" onMouseOver="this.src=\'aboutus2.gif\'" onMouseOut="this.src=\'aboutus1.gif\'" /></a><a href="contactus.php"><img src="contactus1.gif" onMouseOver="this.src=\'contactus2.gif\'" onMouseOut="this.src=\'contactus1.gif\'" /></a><a href="#"><img src="yourcart1.gif" onclick="javascript:openCart()" onmouseover="this.src=\'yourcart2.gif\'" onmouseout="this.src=\'yourcart1.gif\'"></a><a href="http://www.facebook.com/WadsworthComputerConstruction" target="_blank"><img src="facebook.gif" /></a></div>';
	if(GetWidth()<1003)
	{
		document.getElementById("minwidth").innerHTML=narrow;
	}
	else
	{
		document.getElementById("minwidth").innerHTML=wide;
	}
}
function GetWidth()
  {
          var x = 0;
          if (self.innerHeight)
          {
                  x = self.innerWidth;
          }
          else if (document.documentElement && document.documentElement.clientHeight)
          {
                  x = document.documentElement.clientWidth;
          }
          else if (document.body)
          {
                  x = document.body.clientWidth;
          }
          return x;
  }
  


</script>


<title>Wadsworth Computer Construction
</title>
</head>
<body onLoad="IEfix()" onResize="IEfix()" background="bgimage.jpg" link="white" vlink="white" alink="white">
<center>
<div class="hidden">
<img src="AddToCart.gif">
</div>

<form target="_self" id="cart" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
</form>

<!--HEAD OF WEBSITE-->
<div id="minwidth">
<div style="width:100%;position:absolute;top:0px;left:0px;right:0px;min-width:1002px;z-index:9999;height:50px;background:url(navbg.gif);align:center;valign:middle;margin-top:0;margin-left:0;margin-right:0;margin-bottom:auto;"><a href="index.php"><img src="home1.gif" onMouseOver="this.src='home2.gif'" onMouseOut="this.src='home1.gif'"/></a><a href="products.php"><img src="products1.gif" onMouseOver="this.src='products2.gif'" onMouseOut="this.src='products1.gif'" /></a><a href="services.php"><img src="services1.gif" onMouseOver="this.src='services2.gif'" onMouseOut="this.src='services1.gif'" /></a><a href="whyus.php"><img src="whyus1.gif" onMouseOver="this.src='whyus2.gif'" onMouseOut="this.src='whyus1.gif'" /></a><a href="aboutus.php"><img src="aboutus1.gif" onMouseOver="this.src='aboutus2.gif'" onMouseOut="this.src='aboutus1.gif'" /></a><a href="contactus.php"><img src="contactus1.gif" onMouseOver="this.src='contactus2.gif'" onMouseOut="this.src='contactus1.gif'" /></a>
<a href="#"><img src="yourcart1.gif" onClick="javascript:openCart()" onMouseOver="this.src='yourcart2.gif'" onMouseOut="this.src='yourcart1.gif'"></a>
<a href="http://www.facebook.com/WadsworthComputerConstruction" target="_blank"><img src="facebook.gif" /></a></div>
</div>

.html';
        $class = 'Mail_' . $driver;
        if (class_exists($class)) {
            $mailer = new $class($params);
            return $mailer;
        } else {
            return PEAR::raiseError('Unable to find class for driver ' . $driver);
        }
    }

    /**
     * Implements Mail::send() function using php's built-in mail()
     * command.
     *
     * @param mixed $recipients Either a comma-seperated list of recipients
     *              (RFC822 compliant), or an array of recipients,
     *              each RFC822 valid. This may contain recipients not
     *              specified in the headers, for Bcc:, resending
     *              messages, etc.
     *
     * @param array $headers The array of headers to send with the mail, in an
     *              associative array, where the array key is the
     *              header name (ie, 'Subject'), and the array value
     *              is the header value (ie, 'test'). The header
     *              produced from those values would be 'Subject:
     *              test'.
     *
     * @param string $body The full text of the message body, including any
     *               Mime parts, etc.
     *
     * @return mixed Returns true on success, or a PEAR_Error
     *               containing a descriptive error message on
     *               failure.
     *
     * @access public
     * @deprecated use Mail_mail::send instead
     */
    function send($recipients, $headers, $body)
    {
        if (!is_array($headers)) {
            return PEAR::raiseError('$headers must be an array');
        }

        $result = $this->_sanitizeHeaders($headers);
        if (is_a($result, 'PEAR_Error')) {
            return $result;
        }

        // if we're passed an array of recipients, implode it.
        if (is_array($recipients)) {
            $recipients = implode(', ', $recipients);
        }

        // get the Subject out of the headers array so that we can
        // pass it as a seperate argument to mail().
        $subject = '';
        if (isset($headers['Subject'])) {
            $subject = $headers['Subject'];
            unset($headers['Subject']);
        }

        // flatten the headers out.
        list(, $text_headers) = Mail::prepareHeaders($headers);

        return mail($recipients, $subject, $body, $text_headers);
    }

    /**
     * Sanitize an array of mail headers by removing any additional header
     * strings present in a legitimate header's value.  The goal of this
     * filter is to prevent mail injection attacks.
     *
     * @param array $headers The associative array of headers to sanitize.
     *
     * @access private
     */
    function _sanitizeHeaders(&$headers)
    {
        foreach ($headers as $key => $value) {
            $headers[$key] =
                preg_replace('=((<CR>|<LF>|0x0A/%0A|0x0D/%0D|\\n|\\r)\S).*=i',
                             null, $value);
        }
    }

    /**
     * Take an array of mail headers and return a string containing
     * text usable in sending a message.
     *
     * @param array $headers The array of headers to prepare, in an associative
     *              array, where the array key is the header name (ie,
     *              'Subject'), and the array value is the header
     *              value (ie, 'test'). The header produced from those
     *              values would be 'Subject: test'.
     *
     * @return mixed Returns false if it encounters a bad address,
     *               otherwise returns an array containing two
     *               elements: Any From: address found in the headers,
     *               and the plain text version of the headers.
     * @access private
     */
    function prepareHeaders($headers)
    {
        $lines = array();
        $from = null;

        foreach ($headers as $key => $value) {
            if (strcasecmp($key, 'From') === 0) {
                include_once 'Mail/RFC822<html>
<head>
<META NAME="Description" CONTENT="Custom built computers and computer services. Located in Wadsworth, Ohio, we provide top quality products at a small business price.">
<META NAME="KEYWORDS" CONTENT="wadsworth computer construction,wadsworth,computers,custom computers,gaming computers,computer services,custom built computers,computer building">
<link REL="SHORTCUT ICON" HREF="http://yourwebsite.com/favicon.ico" >
<!--ALL CSS CODING FOR WEBSITE HERE-->
<style>
img{border-style: none;}
html,body{margin:0px;padding:0px;}
div.body{font-family:arial;font-size:24px;color:white;}
div.bodym{font-family:arial;font-size:24px;color:white;margin-left:20px;}
div.header{font-family:"Times New Roman", Times, serif;font-size:30px;color:aaaaaa;text-decoration:underline;}
div.form{font-family:arial;font-size:18px;color:white;}
div.error{font-family:arial;font-size:20px;color:red;}

div.table{margin-top:130px;position:relative;width:1000px;}
div.tablebox{position:relative;width:900px;}

div.hidden{display:none;}
<!--Design Manipulation-->

div.tabletop{position:absolute;top:-30px;left:0px;margin-top:30px;}
div.tablebottom{position:absolute;bottom:-60px;left:0px;margin-bottom:30px;}


div.tablesplashleft{position:absolute;left:-300px;top:0px;z-index:-1;}
div.tablesplashright{position:absolute;right:-300px;top:0px;z-index:-1;}
div.tablesplashup{position:absolute;left:0px;top:-75px;z-index:-1;}
div.tablesplashdown{position:absolute;left:0px;bottom:-75px;z-index:-1;}
</style>

<script type="text/javascript">
function openCart()
{
	document.forms['cart'].submit();
}

function IEfix()
{
	var wide='<div style="width:100%;position:absolute;top:0px;left:0px;right:0px;min-width:1002px;z-index:9999;height:50px;background:url(navbg.gif);align:center;valign:middle;margin-top:0;margin-left:0;margin-right:0;margin-bottom:auto;"><a href="index.php"><img src="home1.gif" onMouseOver="this.src=\'home2.gif\'" onMouseOut="this.src=\'home1.gif\'"/></a><a href="products.php"><img src="products1.gif" onMouseOver="this.src=\'products2.gif\'" onMouseOut="this.src=\'products1.gif\'" /></a><a href="services.php"><img src="services1.gif" onMouseOver="this.src=\'services2.gif\'" onMouseOut="this.src=\'services1.gif\'" /></a><a href="whyus.php"><img src="whyus1.gif" onMouseOver="this.src=\'whyus2.gif\'" onMouseOut="this.src=\'whyus1.gif\'" /></a><a href="aboutus.php"><img src="aboutus1.gif" onMouseOver="this.src=\'aboutus2.gif\'" onMouseOut="this.src=\'aboutus1.gif\'" /></a><a href="contactus.php"><img src="contactus1.gif" onMouseOver="this.src=\'contactus2.gif\'" onMouseOut="this.src=\'contactus1.gif\'" /></a><a href="#"><img src="yourcart1.gif" onclick="javascript:openCart()" onmouseover="this.src=\'yourcart2.gif\'" onmouseout="this.src=\'yourcart1.gif\'"></a><a href="http://www.facebook.com/WadsworthComputerConstruction" target="_blank"><img src="facebook.gif" /></a></div>';
	var narrow='<div style="width:1000;position:absolute;top:0px;left:0px;right:0px;min-width:1002px;z-index:9999;height:50px;background:url(navbg.gif);align:center;valign:middle;margin-top:0;margin-left:0;margin-right:0;margin-bottom:auto;"><a href="index.php"><img src="home1.gif" onMouseOver="this.src=\'home2.gif\'" onMouseOut="this.src=\'home1.gif\'"/></a><a href="products.php"><img src="products1.gif" onMouseOver="this.src=\'products2.gif\'" onMouseOut="this.src=\'products1.gif\'" /></a><a href="services.php"><img src="services1.gif" onMouseOver="this.src=\'services2.gif\'" onMouseOut="this.src=\'services1.gif\'" /></a><a href="whyus.php"><img src="whyus1.gif" onMouseOver="this.src=\'whyus2.gif\'" onMouseOut="this.src=\'whyus1.gif\'" /></a><a href="aboutus.php"><img src="aboutus1.gif" onMouseOver="this.src=\'aboutus2.gif\'" onMouseOut="this.src=\'aboutus1.gif\'" /></a><a href="contactus.php"><img src="contactus1.gif" onMouseOver="this.src=\'contactus2.gif\'" onMouseOut="this.src=\'contactus1.gif\'" /></a><a href="#"><img src="yourcart1.gif" onclick="javascript:openCart()" onmouseover="this.src=\'yourcart2.gif\'" onmouseout="this.src=\'yourcart1.gif\'"></a><a href="http://www.facebook.com/WadsworthComputerConstruction" target="_blank"><img src="facebook.gif" /></a></div>';
	if(GetWidth()<1003)
	{
		document.getElementById("minwidth").innerHTML=narrow;
	}
	else
	{
		document.getElementById("minwidth").innerHTML=wide;
	}
}
function GetWidth()
  {
          var x = 0;
          if (self.innerHeight)
          {
                  x = self.innerWidth;
          }
          else if (document.documentElement && document.documentElement.clientHeight)
          {
                  x = document.documentElement.clientWidth;
          }
          else if (document.body)
          {
                  x = document.body.clientWidth;
          }
          return x;
  }
  


</script>


<title>Wadsworth Computer Construction
</title>
</head>
<body onLoad="IEfix()" onResize="IEfix()" background="bgimage.jpg" link="white" vlink="white" alink="white">
<center>
<div class="hidden">
<img src="AddToCart.gif">
</div>

<form target="_self" id="cart" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
</form>

<!--HEAD OF WEBSITE-->
<div id="minwidth">
<div style="width:100%;position:absolute;top:0px;left:0px;right:0px;min-width:1002px;z-index:9999;height:50px;background:url(navbg.gif);align:center;valign:middle;margin-top:0;margin-left:0;margin-right:0;margin-bottom:auto;"><a href="index.php"><img src="home1.gif" onMouseOver="this.src='home2.gif'" onMouseOut="this.src='home1.gif'"/></a><a href="products.php"><img src="products1.gif" onMouseOver="this.src='products2.gif'" onMouseOut="this.src='products1.gif'" /></a><a href="services.php"><img src="services1.gif" onMouseOver="this.src='services2.gif'" onMouseOut="this.src='services1.gif'" /></a><a href="whyus.php"><img src="whyus1.gif" onMouseOver="this.src='whyus2.gif'" onMouseOut="this.src='whyus1.gif'" /></a><a href="aboutus.php"><img src="aboutus1.gif" onMouseOver="this.src='aboutus2.gif'" onMouseOut="this.src='aboutus1.gif'" /></a><a href="contactus.php"><img src="contactus1.gif" onMouseOver="this.src='contactus2.gif'" onMouseOut="this.src='contactus1.gif'" /></a>
<a href="#"><img src="yourcart1.gif" onClick="javascript:openCart()" onMouseOver="this.src='yourcart2.gif'" onMouseOut="this.src='yourcart1.gif'"></a>
<a href="http://www.facebook.com/WadsworthComputerConstruction" target="_blank"><img src="facebook.gif" /></a></div>
</div>

.html';
                $parser = new Mail_RFC822();
                $addresses = $parser->parseAddressList($value, 'localhost', false);
                if (is_a($addresses, 'PEAR_Error')) {
                    return $addresses;
                }

                $from = $addresses[0]->mailbox . '@' . $addresses[0]->host;

                // Reject envelope From: addresses with spaces.
                if (strstr($from, ' ')) {
                    return false;
                }

                $lines[] = $key . ': ' . $value;
            } elseif (strcasecmp($key, 'Received') === 0) {
                $received = array();
                if (is_array($value)) {
                    foreach ($value as $line) {
                        $received[] = $key . ': ' . $line;
                    }
                }
                else {
                    $received[] = $key . ': ' . $value;
                }
                // Put Received: headers at the top.  Spam detectors often
                // flag messages with Received: headers after the Subject:
                // as spam.
                $lines = array_merge($received, $lines);
            } else {
                // If $value is an array (i.e., a list of addresses), convert
                // it to a comma-delimited string of its elements (addresses).
                if (is_array($value)) {
                    $value = implode(', ', $value);
                }
                $lines[] = $key . ': ' . $value;
            }
        }

        return array($from, join($this->sep, $lines));
    }

    /**
     * Take a set of recipients and parse them, returning an array of
     * bare addresses (forward paths) that can be passed to sendmail
     * or an smtp server with the rcpt to: command.
     *
     * @param mixed Either a comma-seperated list of recipients
     *              (RFC822 compliant), or an array of recipients,
     *              each RFC822 valid.
     *
     * @return mixed An array of forward paths (bare addresses) or a PEAR_Error
     *               object if the address list could not be parsed.
     * @access private
     */
    function parseRecipients($recipients)
    {
        include_once 'Mail/RFC822<html>
<head>
<META NAME="Description" CONTENT="Custom built computers and computer services. Located in Wadsworth, Ohio, we provide top quality products at a small business price.">
<META NAME="KEYWORDS" CONTENT="wadsworth computer construction,wadsworth,computers,custom computers,gaming computers,computer services,custom built computers,computer building">
<link REL="SHORTCUT ICON" HREF="http://yourwebsite.com/favicon.ico" >
<!--ALL CSS CODING FOR WEBSITE HERE-->
<style>
img{border-style: none;}
html,body{margin:0px;padding:0px;}
div.body{font-family:arial;font-size:24px;color:white;}
div.bodym{font-family:arial;font-size:24px;color:white;margin-left:20px;}
div.header{font-family:"Times New Roman", Times, serif;font-size:30px;color:aaaaaa;text-decoration:underline;}
div.form{font-family:arial;font-size:18px;color:white;}
div.error{font-family:arial;font-size:20px;color:red;}

div.table{margin-top:130px;position:relative;width:1000px;}
div.tablebox{position:relative;width:900px;}

div.hidden{display:none;}
<!--Design Manipulation-->

div.tabletop{position:absolute;top:-30px;left:0px;margin-top:30px;}
div.tablebottom{position:absolute;bottom:-60px;left:0px;margin-bottom:30px;}


div.tablesplashleft{position:absolute;left:-300px;top:0px;z-index:-1;}
div.tablesplashright{position:absolute;right:-300px;top:0px;z-index:-1;}
div.tablesplashup{position:absolute;left:0px;top:-75px;z-index:-1;}
div.tablesplashdown{position:absolute;left:0px;bottom:-75px;z-index:-1;}
</style>

<script type="text/javascript">
function openCart()
{
	document.forms['cart'].submit();
}

function IEfix()
{
	var wide='<div style="width:100%;position:absolute;top:0px;left:0px;right:0px;min-width:1002px;z-index:9999;height:50px;background:url(navbg.gif);align:center;valign:middle;margin-top:0;margin-left:0;margin-right:0;margin-bottom:auto;"><a href="index.php"><img src="home1.gif" onMouseOver="this.src=\'home2.gif\'" onMouseOut="this.src=\'home1.gif\'"/></a><a href="products.php"><img src="products1.gif" onMouseOver="this.src=\'products2.gif\'" onMouseOut="this.src=\'products1.gif\'" /></a><a href="services.php"><img src="services1.gif" onMouseOver="this.src=\'services2.gif\'" onMouseOut="this.src=\'services1.gif\'" /></a><a href="whyus.php"><img src="whyus1.gif" onMouseOver="this.src=\'whyus2.gif\'" onMouseOut="this.src=\'whyus1.gif\'" /></a><a href="aboutus.php"><img src="aboutus1.gif" onMouseOver="this.src=\'aboutus2.gif\'" onMouseOut="this.src=\'aboutus1.gif\'" /></a><a href="contactus.php"><img src="contactus1.gif" onMouseOver="this.src=\'contactus2.gif\'" onMouseOut="this.src=\'contactus1.gif\'" /></a><a href="#"><img src="yourcart1.gif" onclick="javascript:openCart()" onmouseover="this.src=\'yourcart2.gif\'" onmouseout="this.src=\'yourcart1.gif\'"></a><a href="http://www.facebook.com/WadsworthComputerConstruction" target="_blank"><img src="facebook.gif" /></a></div>';
	var narrow='<div style="width:1000;position:absolute;top:0px;left:0px;right:0px;min-width:1002px;z-index:9999;height:50px;background:url(navbg.gif);align:center;valign:middle;margin-top:0;margin-left:0;margin-right:0;margin-bottom:auto;"><a href="index.php"><img src="home1.gif" onMouseOver="this.src=\'home2.gif\'" onMouseOut="this.src=\'home1.gif\'"/></a><a href="products.php"><img src="products1.gif" onMouseOver="this.src=\'products2.gif\'" onMouseOut="this.src=\'products1.gif\'" /></a><a href="services.php"><img src="services1.gif" onMouseOver="this.src=\'services2.gif\'" onMouseOut="this.src=\'services1.gif\'" /></a><a href="whyus.php"><img src="whyus1.gif" onMouseOver="this.src=\'whyus2.gif\'" onMouseOut="this.src=\'whyus1.gif\'" /></a><a href="aboutus.php"><img src="aboutus1.gif" onMouseOver="this.src=\'aboutus2.gif\'" onMouseOut="this.src=\'aboutus1.gif\'" /></a><a href="contactus.php"><img src="contactus1.gif" onMouseOver="this.src=\'contactus2.gif\'" onMouseOut="this.src=\'contactus1.gif\'" /></a><a href="#"><img src="yourcart1.gif" onclick="javascript:openCart()" onmouseover="this.src=\'yourcart2.gif\'" onmouseout="this.src=\'yourcart1.gif\'"></a><a href="http://www.facebook.com/WadsworthComputerConstruction" target="_blank"><img src="facebook.gif" /></a></div>';
	if(GetWidth()<1003)
	{
		document.getElementById("minwidth").innerHTML=narrow;
	}
	else
	{
		document.getElementById("minwidth").innerHTML=wide;
	}
}
function GetWidth()
  {
          var x = 0;
          if (self.innerHeight)
          {
                  x = self.innerWidth;
          }
          else if (document.documentElement && document.documentElement.clientHeight)
          {
                  x = document.documentElement.clientWidth;
          }
          else if (document.body)
          {
                  x = document.body.clientWidth;
          }
          return x;
  }
  


</script>


<title>Wadsworth Computer Construction
</title>
</head>
<body onLoad="IEfix()" onResize="IEfix()" background="bgimage.jpg" link="white" vlink="white" alink="white">
<center>
<div class="hidden">
<img src="AddToCart.gif">
</div>

<form target="_self" id="cart" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
</form>

<!--HEAD OF WEBSITE-->
<div id="minwidth">
<div style="width:100%;position:absolute;top:0px;left:0px;right:0px;min-width:1002px;z-index:9999;height:50px;background:url(navbg.gif);align:center;valign:middle;margin-top:0;margin-left:0;margin-right:0;margin-bottom:auto;"><a href="index.php"><img src="home1.gif" onMouseOver="this.src='home2.gif'" onMouseOut="this.src='home1.gif'"/></a><a href="products.php"><img src="products1.gif" onMouseOver="this.src='products2.gif'" onMouseOut="this.src='products1.gif'" /></a><a href="services.php"><img src="services1.gif" onMouseOver="this.src='services2.gif'" onMouseOut="this.src='services1.gif'" /></a><a href="whyus.php"><img src="whyus1.gif" onMouseOver="this.src='whyus2.gif'" onMouseOut="this.src='whyus1.gif'" /></a><a href="aboutus.php"><img src="aboutus1.gif" onMouseOver="this.src='aboutus2.gif'" onMouseOut="this.src='aboutus1.gif'" /></a><a href="contactus.php"><img src="contactus1.gif" onMouseOver="this.src='contactus2.gif'" onMouseOut="this.src='contactus1.gif'" /></a>
<a href="#"><img src="yourcart1.gif" onClick="javascript:openCart()" onMouseOver="this.src='yourcart2.gif'" onMouseOut="this.src='yourcart1.gif'"></a>
<a href="http://www.facebook.com/WadsworthComputerConstruction" target="_blank"><img src="facebook.gif" /></a></div>
</div>

.html';

        // if we're passed an array, assume addresses are valid and
        // implode them before parsing.
        if (is_array($recipients)) {
            $recipients = implode(', ', $recipients);
        }

        // Parse recipients, leaving out all personal info. This is
        // for smtp recipients, etc. All relevant personal information
        // should already be in the headers.
        $addresses = Mail_RFC822::parseAddressList($recipients, 'localhost', false);

        // If parseAddressList() returned a PEAR_Error object, just return it.
        if (is_a($addresses, 'PEAR_Error')) {
            return $addresses;
        }

        $recipients = array();
        if (is_array($addresses)) {
            foreach ($addresses as $ob) {
                $recipients[] = $ob->mailbox . '@' . $ob->host;
            }
        }

        return $recipients;
    }

}
