<?php
    $url = 'https://newsapi.org/v2/everything?q=bitcoin&apiKey=fb187692c30143dd9c4dffba2dd6d059'; //replace "CLIENT-ID"
    $json = file_get_contents($url);
  $data = $array = json_decode($json, true);

?>
<html lang="en">
	<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>News</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/round-about.css" rel="stylesheet">
<style>

div .center {
        height: 400px;
      margin: 0 auto;
      overflow:no;
    
}
</style>
  </head>
	<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">News</a>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
	<!-- Introduction Row -->
      <h1 class="my-4">About Us
        <small>It's Nice to Meet You!</small>
      </h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, explicabo dolores ipsam aliquam inventore corrupti eveniet quisquam quod totam laudantium repudiandae obcaecati ea consectetur debitis velit facere nisi expedita vel?</p>

      <!-- Team Members Row -->
      <div class="row">
        <div class="col-lg-12">
          <h2 class="my-4">Our News</h2>
		  
        </div>
		
        <?php
		/*echo"<pre>";
		print_r($data);
		echo"</pre>";*/
        foreach ($data['articles'] as $item) {
	
			?>
		
			<div class="col-lg-4 col-sm-6 text-center center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="<?php print_r($item['urlToImage']);?>/200x200" alt="">
          <h3><?php print_r($item['source']['name']);?>
            <small><?php print_r($item['source']['id']);?></small>
          </h3>
          <p><?php print_r($item['publishedAt']);?></p>
          <p><?php print_r($item['description']);?></p>
		  <hr/>
        </div>
	
			<?php
        }
?>

      </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
