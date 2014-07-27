<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/reset.css" type="text/css" media="all">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" type="text/css" media="all">
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.4.2.min.js" ></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/cufon-yui.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/cufon-replace.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/Myriad_Pro_300.font.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/Myriad_Pro_400.font.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/script.js"></script>
    <!--[if lt IE 7]>
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie6.css" type="text/css" media="screen">
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/ie_png.js"></script>
    <script type="text/javascript">ie_png.fix('.png, footer, header nav ul li a, .nav-bg, .list li img');</script>
    <![endif]-->
    <!--[if lt IE 9]><script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/html5.js"></script><![endif]-->
</head>
<body id="page1">
<!-- START PAGE SOURCE -->
<div class="wrap">
    <header>
        <div class="container">
            <h1><a href="#"></a></h1>
            <nav>
                <?php $this->widget('CSimpleMenu',[
                    'item'=>[
                        ['name'=>'Home Page','url'=>'site/index','class'=>'m1'],
                        ['name'=>'About Us','url'=>'site/about','class'=>'m1'],
                        ['name'=>'Our Articles','url'=>'site/articles','class'=>'m1'],
                        ['name'=>'Contact Us','url'=>'site/contact','class'=>'m1'],
                        ['name'=>'Personal Cabinet','url'=>'site/personalCabinet','class'=>'m1'],
                    ]
                ])?>
            </nav>
            <form action="#" id="search-form">
                <fieldset>
                    <div class="rowElem">
                        <input type="text">
                        <a href="#">Search</a></div>
                </fieldset>
            </form>
        </div>
    </header>
    <div class="container">
        <aside>
            <h3>Categories</h3>
            <ul class="categories">
                <li><span><a href="#">Programs</a></span></li>
                <li><span><a href="#">Student Info</a></span></li>
                <li><span><a href="#">Teachers</a></span></li>
                <li><span><a href="#">Descriptions</a></span></li>
                <li><span><a href="#">Administrators</a></span></li>
                <li><span><a href="#">Basic Information</a></span></li>
                <li><span><a href="#">Vacancies</a></span></li>
                <li class="last"><span><a href="#">Calendar</a></span></li>
            </ul>
            <form action="#" id="newsletter-form">
                <fieldset>
                    <div class="rowElem">
                        <h2>Newsletter</h2>
                        <input type="email" value="Enter Your Email Here" onFocus="if(this.value=='Enter Your Email Here'){this.value=''}" onBlur="if(this.value==''){this.value='Enter Your Email Here'}" >
                        <div class="clear"><a href="#" class="fleft">Unsubscribe</a><a href="#" class="fright">Submit</a></div>
                    </div>
                </fieldset>
            </form>
            <h2>Fresh <span>News</span></h2>
            <ul class="news">
                <li><strong>June 30, 2014</strong>
                    <h4><a href="#">Sed ut perspiciatis unde</a></h4>
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque. </li>
                <li><strong>June 14, 2014</strong>
                    <h4><a href="#">Neque porro quisquam est</a></h4>
                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit consequuntur magni. </li>
                <li><strong>May 29, 2014</strong>
                    <h4><a href="#">Minima veniam, quis nostrum</a></h4>
                    Uis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae. </li>
            </ul>
        </aside>
        <section id="content">
            <?php
                if(!array_key_exists(Yii::app()->request->pathinfo,Yii::app()->params['hideBlock'])):?>
            <div id="banner">
                <h2>Professional <span>Online Education <span>Since 1992</span></span></h2>
            </div>
            <?php endif;?>
            <div class="inside">

                <?php echo $content; ?>

                <div class="clear"></div>
            </div>
        </section>
    </div>
</div>
<footer>
    <div class="footerlink">
        <p class="lf">Copyright &copy; 2014 <a href="#"><?php echo CHtml::encode(Yii::app()->name); ?></a> - All Rights Reserved</p>
        <div style="clear:both;"></div>
    </div>
</footer>
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->
</body>
</html>
