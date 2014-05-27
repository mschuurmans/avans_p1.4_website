<?php
/* ////////////////////////////////////////
 * Author: Michiel Schuurmans
 * Email: Michiel@codox.org
 * Created: Jun 19, 2013
 * CopyRight Codox.org
 * Co-Author: Nick van der Maaden | Digitzone.org | niekvdm@digitzone.org
 * ////////////////////////////////////////
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Codox</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Michiel Schuurmans">

    {{ HTML::script('js/bootstrap.js'); }}

   {{ HTML::style('css/bootstrap.css'); }}
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <![endif]-->
</head>

<body>
<div id="wrap">

    <div class="navbar navbar-fixed-top">
    	<div class="navbar-inner">
            <div class="container">
                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <?php echo link_to('/', 'Essperience', $attributes = array("class"=>"brand"), $secure = null); ?>

                <ul class="nav"> 
                  <li><?php echo link_to('/games', 'games', $attributes = array(), $secure = null); ?></li>    
                </ul>

                	<div class="nav-collapse collapse">
               
	             </div>
          </div>
</div>
    </div>

    <div class="container">
        <div class="hero-unit">
            <!--<img style="float: left;" src="./img/logo.png"/>-->

            <h2 style="text-align: center;">Essperience</h2>
        </div>

        <div class="row">
        	<div class="span12">
            	<h1></h1>
                <p class="lead"></p>                
               	@yield('content')
                <br />
                <br />
                            
            </div>
        </div>


        
    </div>

    <div id="push"></div>
</div>

<div id="footer">
    <div class="container">
        <p class="muted credit">copyright &copy; essperience.tostring.nl
        <span style='float:right;'> <?php echo link_to('/', 'essperience.tostring.nl', array("target"=>"_blank"), $secure = null); ?> | <a href="http://avans.nl">Avans.nl</a></span></p>
    </div>
</div>



</body>
</html>
