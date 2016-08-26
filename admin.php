<!DOCTYPE html>
<?php 
	require 'common/conf.php';
	Modules('sanitize,test_module');

	$title="Home"; 
	//sanitize("tester or insert = + - order union <> !");	

?>
<html>
<head>
	<title>
		<?echo project_name .' - '. $title; ?>
	</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="/CSS/bootstrap.min.css">
	<link rel="stylesheet" href="/CSS/style.css">

<script type='text/javascript'></script>
<style>
	nav{background:#<?echo primary_color?> !important;}
	.navbar-inverse {border-color:#<?echo secondary_color?> !important;}
</style>
</head>
<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">

      <div class="container">

        <div class="navbar-header">

          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img id='top_logo' src='assets/images/auralogo01.png'></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <!--<form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>-->
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
    <?if(isset($flash_message)){echo '<div id="flash_message"  class="alert alert-danger" role="alert">Message: '.$flash_message.'</div>'; unset($flash_message);} ?>
    
    <!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron" style="padding-top:100px;background:url('assets/images/framework.png')">
      <div class="container">
      <img id='top_logo' src='assets/images/auralogo01drk.png'>
        <p>Aura is a simple and light-weight php framework solution.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
      </div>
    </div>
    <div class="container" style="margin-top:55px;">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
      </div>

      <hr>

      <footer><?  ?>
        <p>&copy; 2016 <?echo project_name.' by '.company_name;?>, Inc.</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/js/ie10-viewport-bug-workaround.js"></script>
  
  </body>
</html>


