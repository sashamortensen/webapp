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

<?php include('includes/header.php'); ?>
<body> 

    <div data-role="page">
        <header data-role="header" class="<?php echo $siteName; ?>">
            <h1><?php echo ucwords($siteName).'+'; ?></h1>
        </header>
        
        <div data-role="content">    
            <ul data-role="listview" data-theme="c" data-dividertheme="d" data-counttheme="e">
                <?php
                foreach($feed->query->results->entry as $item) { ?>
                
                <li>
                    <h2>
                        <a href="article.php?siteName=<?php echo $siteName;?>&origLink=<?php echo urlencode($item->link->href); ?>">
                        <?php echo $item->title; ?>
                        </a>
                    </h2>
                    <span class="ui-li-count"><?php echo $item->author->name; ?> </span>
                </li>
                <?php  } ?>
            </ul>
        </div>
        
        <footer data-role="footer" data-position="fixed">
            <h4> <a href="<?php echo $feed->guid->content;?>"> Read on <?php echo ucWords($siteName); ?>+</a></h4>	
        </footer>
    </div>

</body>
</html>