<!DOCTYPE html>

<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    
		<!-- Bootstrap core CSS -->
	    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	    <!-- Custom styles for this template -->
		<link rel="stylesheet" type="text/css" href="assets/css/custom.css">
	
	    <title>E-valimised</title>
	
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
          <a class="navbar-brand" href="http://evpri.cs.ut.ee/">E-valimised</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="http://evpri.cs.ut.ee/">Avaleht</a></li>
            <li><a href="http://evpri.cs.ut.ee/haaletamine.html">Hääletamine</a></li>
            <li><a href="http://evpri.cs.ut.ee/kandideerimine.html">Kandideerimine</a></li>
            <li class="active"><a href="http://evpri.cs.ut.ee/statistika.html">Statistika</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	    <div class="alert alert-danger">
        <a href="index.html" class="btn btn-xs btn-danger pull-right">Tagasi avalehele</a>
        <strong>Viga:</strong> See leht on valmimisel...
    	</div>

     <div class="content">
	 <h1>Hääletustulemused</h1>
	 <p class="lead">Siin on nähtav esialgne häälte jagunemine</p>
	 <p>...</p>
	 	<!-- tabelina hääletustulemused -->
         <?php
            include('tabel.php');
            ?>
         

    </div>
    </div><!-- /.container -->
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.js"></script>
    
	</body>
</html>