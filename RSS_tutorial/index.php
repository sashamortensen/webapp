<!DOCTYPE html> 
<html> 
   <head> 
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
 
   <title> Tuts+ </title> 
 
 <link rel="stylesheet" type="text/css" href="CSS/mobile.css">
   <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a1/jquery.mobile-1.0a1.min.css" />
   <link rel="apple-touch-icon" href="img/tutsTouchIcon.png" />
 
   <script src="http://code.jquery.com/jquery-1.4.3.min.js"></script>
   <script src="http://code.jquery.com/mobile/1.0a1/jquery.mobile-1.0a1.min.js"></script>
</head>

<?php include ('includes/header.php') ?>

<body>


<div data-role="page">
    
    <header data-role="header" class="tuts">
    	<h1> RSS Reader </h1>
    </header>
    
    <div data-role="content">
    	<ul data-role="listview" data-theme="a">
            <li data-role="list-divider">
                <img src="" class="ui-li-icon"/>
                <a href="site.php?siteName=nettuts" data-transition="slide"> Nettuts+ </a>
            </li>
            <li>
                <img src="" class="ui-li-icon"/>
                <a href="site.php?siteName=psdtuts"> Psdtuts+ </a>
            </li>
            <li>
                <img src="" class="ui-li-icon"/>
                <a href="site.php?siteName=vectortuts"> Vectortuts+ </a>
            </li>
            <li>
                <img src="" class="ui-li-icon"/>
                <a href="site.php?siteName=mobiletuts"> Mobiletuts+ </a>
            </li>
            <li>
                <img src="" class="ui-li-icon"/>
                <a href="site.php?siteName=aetuts"> Aetuts+ </a>
            </li>
            <li>
                <img src="" class="ui-li-icon"/>
                <a href="site.php?siteName=phototuts"> Phototuts+ </a>
            </li>
            <li>
                <img src="" class="ui-li-icon"/>
                <a href="site.php?siteName=cgtuts"> Cgtuts+ </a>
            </li>
            <li>
                <img src="" class="ui-li-icon"/>
                <a href="site.php?siteName=audiotuts"> Audiotuts+ </a>
            </li>
            <li>
                <img src="" class="ui-li-icon"/>
                <a href="site.php?siteName=webdesigntutsplus"> Webdesigntuts+ </a>
            </li>
        </ul>
    </div>
    
    <footer data-role="footer" data-position="fixed">
   <h4> <a href="<?php echo $feed->guid->content;?>"> Read on <?php echo ucWords($siteName); ?>+</a></h4>
</footer>
 
</div>
  
</body>
</html>