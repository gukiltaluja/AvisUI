<?php
if(is_array($seo_data)){ 
 $page_title = $seo_data['page_title'];
 $page_seo_keywords = $seo_data['page_seo_keywords'];
 $page_seo_desc = strip_tags($seo_data['page_seo_desc']);
 
 $og_title   = $seo_data['og_title'];
 $og_description = strip_tags($seo_data['og_description']);
 $og_image   = $seo_data['og_image'];
 $news_keywords   = $seo_data['news_keywords'];
 
 
  
}
else{
 $page_title = 'Mobile Phones, Mobiles, Compare & Review Latest (New) Mobile Phone';
 $page_seo_keywords = "mobiles, compare mobile phones, mobile phone, latest mobile phones, latest mobiles, new mobile phones, best mobile phones, latest mobile, mobile phone reviews, new mobiles, best mobile phone, mobile phone comparison, compare latest mobile phones, mobile phones review";
 $page_seo_desc = "Mobile Phones: For Latest Mobile Phones, New Mobiles, Latest Mobiles, New Mobile Phones Reviews, Compare Mobile Phones &amp; Latest Mobile Phones News Visit The Mobile Indian .";
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $page_title; ?></title>
<meta id="description" name="description" content="<?php echo $page_seo_desc;?>" />
<meta id="keywords" name="keywords" content="<?php echo $page_seo_keywords;?>" />
<?php if (isset($news_keywords) && trim($news_keywords)!='') { ?><meta name="news_keywords" content="<?php echo $news_keywords;?>"/><?php } ?>
<?php if (isset($published_time) && trim($published_time)!='') { ?><meta property="article:published_time" content="<?php echo $published_time;?>"/><?php } ?>
<?php if (isset($modified_time) && trim($modified_time)!='') { ?><meta property="article:modified_time" content="<?php echo $modified_time?>"/><?php } ?>

<?php if(isset($og_title)){?>
<meta property="og:site_name" content="<?php echo base_url();?>" />
<meta property="og:title" content="<?php echo $og_title; ?>" />
<meta property="og:description" content="<?php echo $og_description; ?>" />
<meta property="og:type" content="article" />
<meta property="og:image" content="<?php echo $og_image; ?>" />

<?php }?>



<link href="<?php echo ASSET_URL?>css/common.css" rel="stylesheet">
<link href="<?php echo ASSET_URL?>css/styles.css" rel="stylesheet">
<link href="<?php echo ASSET_URL?>css/header.css" rel="stylesheet">
<link href="<?php echo ASSET_URL?>css/footer.css" rel="stylesheet">
<link href="<?php echo ASSET_URL?>css/meanmenu.min.css" rel="stylesheet">
<link href="<?php echo ASSET_URL?>css/elusive-icons.css" rel="stylesheet">
<link href="<?php echo ASSET_URL?>css/jquery.bxslider.css" rel="stylesheet" />
<link href="<?php echo ASSET_URL?>css/responsive.css" rel="stylesheet" media="(max-width:1180px)">

<script src="<?php echo ASSET_URL?>script/modernizr.js" type="text/javascript"></script>
<script src="<?php echo ASSET_URL?>script/jquery.js" type="text/javascript"></script>
<script src="<?php echo ASSET_URL?>script/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?php echo ASSET_URL?>script/jquery.easing.latest.js" type="text/javascript"></script>
<script src="<?php echo ASSET_URL?>script/ddsmoothmenu.js" type="text/javascript"></script>
<script src="<?php echo ASSET_URL?>script/jquery.meanmenu.min.js"></script>
<script src="<?php echo ASSET_URL?>script/jquery.bxslider.min.js"></script>

</head>

<body>
<header>
	<div class="wrap top">
    	<p class="tac dn-768"><a href="#"><img src="<?php echo ASSET_URL?>images/baner_996.jpg" alt="" /></a></p>
        <div class="columns12 vam">
        	<ul>
                <li class="col-1 dn-768"><a href="#"><img src="<?php echo ASSET_URL?>images/logo.jpg" alt="" /></a></li>
                <li class="col-2"><img src="<?php echo ASSET_URL?>images/banner_728.jpg" alt=""/></li>
            </ul>
        </div>
    </div>
    
    <div class="nav">
        <nav class="fo wrap pr" id="tml">
        <div class="company"><a href="#"><img src="<?php echo ASSET_URL?>images/logo_w.png" alt="" title=""/></a></div>
       <div class="searchFull">
        <input name="kword" type="text" class="input w70 vam" maxlength="30" id="req_text_Keyword" value="Type Keywords here. . ." onFocus="if(this.value=='Type Keywords here. . .')this.value=''" onBlur="if(this.value=='')this.value='Type Keywords here. . .'">
        <input type="image" src="<?php echo ASSET_URL?>images/spacer.png" class="cp vam button" alt="search">
        <span></span>
    </div>
     <script>
        $(document).ready(function() { 
            $('.searchFull .button, .searchFull').click(function(e){e.stopPropagation();
                $('.searchFull').css({"width":"100%","box-shadow":"0 0 3px rgba(0,0,0,.2)"});
            });
            $('html').click(function(){$('.searchFull').css({"width":"45px"});})
        });
    </script>
    
    <?php   $urisegment = $this->uri->segment(1);	?>	
    
            <ul>
               <li <?php if($urisegment=='') echo "class='on'";?>><a href="/">Home</a></li>
               <li <?php if($urisegment=='news') echo "class='on'";?>><a href="/news">News</a>
			   <ul>
                    <li><a href="/news/Mobile"><span>Mobile</span></a></li>
					<li><a href="/news/Tablet"><span>Tablet</span></a></li>
					<li><a href="/news/IoT"><span>IoT</span></a></li>
					<li><a href="/news/Computer"><span>Computer</span></a></li>
					<li><a href="/news/TV"><span>TV</span></a></li>
					<li><a href="/news/Camera"><span>Camera</span></a></li>
					<li><a href="/news/Printers"><span>Printers</span></a></li>
					<li><a href="/news/Applications"><span>App</span></a></li>
					<li><a href="/news/Accessories"><span>Accessories</span></a></li>
					<li><a href="/news/Operator"><span>Operator</span></a></li>
					<li><a href="/top-5/"><span>Top-5</span></a></li>
					<li><a href="/how-to/"><span>How To</span></a></li>
                </ul>
			   
			   
			   </li>
               <li <?php if($urisegment=='new-launches') echo "class='on'";?>><a href="/new-launches">New Launch</a>
					<ul>
						<li><a href="/new-launches/Mobile"><span>Mobile</span></a></li>
						<li><a href="/new-launches/Tablet"><span>Tablet</span></a></li>
						<li><a href="/new-launches/IoT"><span>IoT</span></a></li>
						<li><a href="/new-launches/Computer"><span>Computer</span></a></li>
						<li><a href="/new-launches/TV"><span>TV</span></a></li>
						<li><a href="/new-launches/Camera"><span>Camera</span></a></li>
						<li><a href="/new-launches/Printers"><span>Printers</span></a></li>
						<li><a href="/new-launches/Applications"><span>App</span></a></li>
						<li><a href="/new-launches/Accessories"><span>Accessories</span></a></li>
						<li><a href="/new-launches/Operator"><span>Operator</span></a></li>
						<li><a href="/new-launches/FaceOff"><span>Face Off</span></a></li>						 
					</ul>			   
			   </li>
               <li  <?php if($urisegment=='mobile-videos') echo "class='on'";?>><a href="/mobile-videos">Gallery & Video</a></li>
               <li <?php if($urisegment=='handset-guide') echo "class='on'";?>><a href="/handset-guide">Product Finder</a></li>
               <li <?php if($urisegment=='reviews') echo "class='on'";?>><a href="/reviews">Reviews</a></li>
               <li <?php if($urisegment=='recharge') echo "class='on'";?>><a href="/recharge">Recharge</a></li>
               <li><a href="#">Tmi Hack</a></li>
               <li <?php if($urisegment=='top-10') echo "class='on'";?>><a href="/top-10">Top 10</a></li>
            </ul>
			<script type="text/javascript">
				ddsmoothmenu.arrowimages.down[1] = '<?php echo ASSET_URL?>images/spacer.png';
				ddsmoothmenu.arrowimages.right[1] = '<?php echo ASSET_URL?>images/spacer.png';
				ddsmoothmenu.init({
					mainmenuid: "tml", //menu DIV id
					orientation: 'h',
					topPos :0,
					leftPos :0
				})
            </script>
        </nav>
		<script>
        jQuery(document).ready(function () {
        jQuery('nav').meanmenu();
        });
        </script>
     </div>
    
</header>
<?php if(isset($seo_data['additional_header'])) {echo $seo_data['additional_header'];}?>
<div id="middle" class="wrap">
<?php
$controller = $this->router->fetch_class();
$method = $this->router->fetch_method();
if($controller == 'products_guide' && $method == 'index'){
	$class = 'columns12 fo p-find';
}else{
	$class = 'columns23 width70 fo';
}


?>
    <div class="<?php echo $class;?>">
        <ul>