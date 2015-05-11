<!DOCTYPE html>

<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->

<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
	<meta charset="UTF-8">
	
	<!-- Remove this line if you use the .htaccess -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<meta name="viewport" content="width=device-width">
	
	<meta name="description" content="Designa Studio, a HTML5 / CSS3 template.">
	<meta name="author" content="Sylvain Lafitte, Web Designer, sylvainlafitte.com">
	
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	<link rel="shortcut icon" type="image/png" href="favicon.png">
	
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css">
	
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body>
<!-- Prompt IE 7 users to install Chrome Frame -->
<!--[if lt IE 8]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

<div class="container">

	<header id="navtop">
		<a href="#" class="logo fleft">
		
			<img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/logo2.jpg" alt="Designa Studio">
			
		</a>
		
		<nav class="fright">
				<?php $this->widget('zii.widgets.CMenu',array(
								'items'=>array(
				array('label'=>'หน้าหลัก', 'url'=>array('/site/index')),
		array('label'=>'จัดการจังหวัด', 'url'=>array('/province/admin'), 'visible'=>!Yii::app()->user->isGuest),
		array('label'=>'จัดการอุทยาน', 'url'=>array('/dataSouthnationpark/admin'), 'visible'=>!Yii::app()->user->isGuest),
		//array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
		//array('label'=>'Contact', 'url'=>array('/site/contact')),
		array('label'=>'เข้าสู่ระบบ', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
		array('label'=>'ออกจากระบบ ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
		),
				)); ?>
				
		</nav>

	</header>
		
<div class="home-page main">
	<section class="grid-wrap" >
		<header class="grid col-full">
			<hr>
			<?php $this->widget('zii.widgets.CBreadcrumbs', array(
				'links'=>$this->breadcrumbs,
			)); ?><!-- breadcrumbs -->

			<a  class="arrow fright"><center>South Nation Park Travel ..</br>Android Mobile Application</a>
		</header>
		
		<div class="grid col-one-half mq2-col-full">
			<?php echo $content; ?>
			
		</div>
	
		 <div class="slider grid col-one-half mq2-col-full">
		   <div class="flexslider">
		     <div class="slides">
		       <div class="slide">
		           	<figure>
		                 <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/gtr1.jpg", alt="">

		                 <figcaption>
		                 	<div>
		                 	<center><h5>อุทยานแห่งชาติเขาหลวง </h5></center>
		                 	<center><p>อุทยานแห่งชาติเขาหลวง ได้รับรางวัล “ยอดเยี่ยม (กินรีทอง)” ประเภท “แหล่งท่องเที่ยวทางธรรมชาติ” </p></center>
		                 	</div>
		                 </figcaption>
		             	</figure>
		           </div>
		           
		           <div class="slide">
		               	<figure>
		                     <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/gtr2.jpg" alt="">
		                     <figcaption>
		                     	<div>
		                     	<center><h5>อุทยานแห่งชาติเขาหลัก-ลำรู่ </h5></center>
		                     	<center><p>ตั้งอยู่ในเขตป่าสงวนแห่งชาติเทือกเขากะได บริเวณรอบๆ ยังมีสภาพป่าที่อุดมสมบูรณ์ </p></center>
		                     	</div>
		                     </figcaption>
		                 	</figure>
		               </div>
		          <div class="slide">
		               	<figure>
		                     <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/gtr3.jpg" alt="">
		                     <figcaption>
		                     	<div>
		                     	<center><h5>อุทยานแห่งชาติบางลาง</h5></center>
		                     	<center><p>เป็นอุทยานแห่งชาติ 1 ใน 5 ของโครงการจัดตั้งอุทยานแห่งชาติเพื่อการเฉลิม</p></center>
		                     	</div>
		                     </figcaption>
		                 	</figure>
		               </div>
		            </div>
		   </div>
		 </div>
		
		 </section>
<div class="divide-top">
	<footer class="grid-wrap">
		<nav class="grid col-one-third ">
				<?php $this->widget('zii.widgets.CMenu',array(
								'items'=>array(
				array('label'=>'หน้าหลัก', 'url'=>array('/site/index')),
				array('label'=>'จัดการจังหวัด', 'url'=>array('/province/admin'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'จัดการอุทยาน', 'url'=>array('/dataSouthnationpark/admin'), 'visible'=>!Yii::app()->user->isGuest),
				//array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				//array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'เข้าสู่ระบบ', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'ออกจากระบบ ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
				)); ?>
		</nav>
	</footer>
</div>

</div>

<!-- Javascript - jQuery -->
<script src="http://code.jquery.com/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-1.7.2.min.js"><\/script>')</script>

<!--[if (gte IE 6)&(lte IE 8)]>
<script src="js/selectivizr.js"></script>
<![endif]-->

<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.flexslider-min.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/scripts.js"></script>

<!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID. -->
<script>
  var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
  (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
  g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
  s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
</body>
</html>
