
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
<body> 
 
<div data-role="page">
 
   <header data-role="header" class="<?php echo $siteName; ?>">
      <h1> <?php echo ucWords($siteName).'+'; ?> </h1>
   </header>
 
   <div data-role="content">  
        <h1> <?php echo $feed; ?> </h1>
        <div> <?php echo $feed; ?> </div>
   </div>
 
   <footer data-role="footer" class="<?php echo $siteName; ?>">
      <h4> <a href="<?php echo $feed->guid->content;?>"> Read on <?php echo ucWords($siteName); ?>+</a></h4>
   </footer>
</div>
 
</body>
</html>