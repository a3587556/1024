<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=<?php $this->options->charset(); ?>" />	
<style type="text/css">
body {
	text-align: center;
    background-image: url('<?php $this->options->themeUrl(); ?>img/3754313239466827106.jpg');
    color: #F7F7F7;
    background-attachment: fixed
}
h1 {color: gray; font-family:Rockwell,Georgia,Palatino Linotype,Palatino,"Microsoft YaHei","Times New Roman",Times,serif;}
h2 {margin:0;}
a:link {color: #CDBA96; text-decoration: none;}
a:visited {color: #CDBA96; text-decoration: none;}

.container {
	background:url('<?php $this->options->themeUrl(); ?>img/blacktrans.png'); 
	width:550px; 
	margin:.2cm auto; 
	padding: .6cm .7cm 0 .7cm;
	position: relative;
	top:1.8cm;
}
.entry_title {color: #CDBA96; text-align:left;}
.entry_text {color: #B0C4DE; text-align:left; padding-bottom:.5cm; line-height:1.5em;}

#date {color: #B0C4DE; text-align:left;}
#header {position:fixed;}
#header #logo {float:left; width:300px; margin:0 0 0 0;}
#header #logo h1 {margin:9px 0 0 0;}
#header #logo h1 a {color:#fff; font-size:.8em; font-weight:normal;}
#header #logo h1 a:hover {color:#a8ef9d;}
#header #logo #desc {font-size:.8em; color:#ddd; line-height:1.2em;}
#header #headerbanner {float:right; width:300px; margin:5px 0 2px 0; text-align:left; padding:2px;  font-size:.9em; line-height:1.5em;}
#header #headerbanner h3 {font-size:1.1em; font-family:"Lucida Grande", "Lucida Sans Unicode", "Microsoft YaHei", Verdana, Arial, Helvetica, sans-serif;}
#top, #header, .navmenu {overflow:hidden; width:100%;}

#navigation {overflow:hidden; width:100%; line-height:2em; margin-bottom:20px; position: relative; top:1.7cm;}
#navigation li {display:inline; margin:0 2px;}
#navigation a {padding:5px 7px; font-size:1em; background:url('<?php $this->options->themeUrl(); ?>img/blacktrans.png'); color:#fff; border:none;}
#navigation a:hover {color:#8B6914;}
#navigation .current a {padding:5px 7px; font-size:1em; background:url('<?php $this->options->themeUrl(); ?>img/blacktrans2.png'); color:#ccc; border:none;}

</style>
</head>
<body>
<div id="header">
<div id="logo">
<h1><a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a></h1>
<div id="desc"><?php $this->options->description() ?></div>
</div><!-- /logo -->
<div id="headerbanner">
<?php if ($this->options->headtext): $this->options->headtext(); ?>
<?php else: ?>
<p><?php _e('我不是为了输赢，我就是认真————老罗'); ?></p>
<?php endif; ?>
</div><!-- /headerbanner -->
</div><!-- /header -->