<!DOCTYPE html>
<html>
<head>
	<title>Articles List</title>
	<!-- <link rel="stylesheet" type="text/css" href="<?/*= base_url('assets/css/bootstrap.min.css'); */?>"> -->
	<?= link_tag('assets/css/bootstrap.min.css') ?>  <!--  Link Tag is an HTML Helper to access CSS file-->
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  		<div class="container">
            <a class="navbar-brand" href="#">Article</a>
      		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
      		    <span class="sr-only">Toogle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <?= anchor('login', 'Login',['class'=>'btn-link disabled float-right']) ?>

	   </div>
    </nav>

  