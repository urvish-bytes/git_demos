<!DOCTYPE html>
<html>
<head>
	<title>Articles List</title>
	<!-- <link rel="stylesheet" type="text/css" href="<?/*= base_url('assets/css/bootstrap.min.css'); */?>"> -->
	<?= link_tag('assets/css/bootstrap.min.css') ?>  <!--  Link Tag is an HTML Helper to access CSS file-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
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
    		
            <?=  form_open('user/search',['class'=>'form-inline my-2 my-lg-0','role'=>'search'])?>
    	      	<input class="form-control mr-sm-2" type="text" name="searchbar" placeholder="Search">
	    		<button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                <?= form_error('searchbar',"<p class='text-danger my-lg-1 my-1'>",'</p>') ?>
        		<?= form_close(); ?>
            <?= anchor('login', 'Login',['class'=>'btn-link disabled float-right']) ?>

	   </div>
    </nav>

  