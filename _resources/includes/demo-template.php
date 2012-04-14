<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <meta name="description" content="<?php echo $this->description; ?>" />
    
    <title><?php echo $this->title; ?> | Creative and Code</title>
    
    <link rel="stylesheet" type="text/css" href="/demos/_resources/css/demo-template.css" />
    <?php 
        foreach( $this->css as $css ){
            echo '<link rel="stylesheet" type="text/css" href="'.$css.'" />';
        }
    ?>
    
    <script src="/demos/_resources/js/modernizr-2.5.2.min.js"></script>    
    
    <script type="text/javascript">
    
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-30232257-1']);
      _gaq.push(['_trackPageview']);
    
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    
    </script>
    
</head>

<body>
    
    <article>
    
        <?php if($this->showInfo){ ?>
        <header>    
            <h1><?php echo $this->title; ?></h1>
            <p><?php echo $this->description; ?></p>
        </header>
        <?php } ?>
        
        <?php echo $this->content; ?>

    </article>
        
    
    <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="/demos/_resources/js/jquery-1.7.2.min.js"><\/script>')</script>
    
    <?php 
        foreach( $this->js as $js ){
            echo '<script type="text/javascript" src="'.$js.'"></script>';
        }
    ?>
    
</body>
</html>