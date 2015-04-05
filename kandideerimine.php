<?php
	require_once('auth.php');
?>

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
          <a class="navbar-brand" href="http://evpri.cs.ut.ee/index-members.php">E-valimised</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="http://evpri.cs.ut.ee/index-members.php">Avaleht</a></li>
            <li><a href="http://evpri.cs.ut.ee/haaletamine.php">Hääletamine</a></li>
            <li class="active"><a href="http://evpri.cs.ut.ee/kandideerimine.php">Kandideerimine</a></li>
            <li><a href="http://evpri.cs.ut.ee/statistika-members.php">Statistika</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
	        <li><a href="http://evpri.cs.ut.ee/logout.php">Logi välja</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

     <div class="content">
	     
	 	<h1>Kandideerimine</h1>
	 	<p class="lead">Valimistel kandideerimiseks täida allolev vorm:</p>
        
	 	<form role="form" method="post" action="kandideerimine_form.php">
	 	<div class="form-group">
	 	<label for="fname">Eesnimi:</label>
	 	<input type="text" class="form-control" id="fname" name="fname">
  		</div>
  		<div class="form-group">
  		<label for="lname">Perekonnanimi:</label>
  		<input type="text" class="form-control" id="lname" name="lname">
  		</div>
  		<div class="form-group">
  		<!--
	  		TODO: Prepopulate from database!
	  		Kuvab valikud otse andmebaasi 'erakonnad' tabelist. Sellisel kujul:
	  		<option value="erakonnaID">erakonnaNimi</option 
	  		Mingi mõte hilisemaks:
	  		Teha erakond tekstiväljana, kui sisestatud erakond puudub, siis lisab selle, muidu LiikmeteArv +1
	  	 -->
  		<label for="erakond">Erakond:</label>
  		<select class="form-control" id="erakond" name="erakond">
  		<option value="1">Erakond 1</option>
	    <option value="2">Erakond 2</option>
	    <option value="3">Erakond 3</option>
	    <option value="4">Erakond 4</option>
	    <option value="5">Erakond 5</option>
  		</select>
  		</div>
  		<!--
	  		TODO: Prepopulate from database!
	  		Kuvab valikud otse andmebaasi 'ringkonnad' tabelist. Sellisel kujul:
	  		<option value="ringkonnaID">ringkonnaNimetus</option 
	  	 -->
  		<div class="form-group">
  		<label for="ringkond">Ringkond:</label>
  		<select class="form-control" id="ringkond" name="ringkond">
  		<option value="1">Tallinna Haabersti, Põhja-Tallinna ja Kristiine linnaosa</option>
	    <option value="2">Tallinna Kesklinna, Lasnamäe ja Pirita linnaosa</option>
	    <option value="3">Tallinna Mustamäe ja Nõmme linnaosa</option>
	    <option value="4">Harju- ja Raplamaa</option>
	    <option value="5">Hiiu-, Lääne- ja Saaremaa</option>
	    <option value="6">Lääne-Virumaa</option>
	    <option value="7">Ida-Virumaa</option>
	    <option value="8">Järva- ja Viljandimaa</option>
	    <option value="9">Jõgeva- ja Tartumaa</option>
	    <option value="10">Tartu linn</option>
	    <option value="11">Võru-, Valga- ja Põlvamaa</option>
	    <option value="12">Pärnumaa</option>
  		<!-- TODO: Populate dropdown menu from database.
	  		Mingi poolik kood, millest võib abi olla:
            <?php
               $servername = "localhost";
               $username = "root";
               $password = "root";
               $dbname = "myfirstdb";
            // Create Connection
            $connection = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$connection) {
                trigger_error("Connection failed: " . mysqli_connect_error());
            }
            //Run Query
            $statement = "SELECT DISTINCT `Nimetus` FROM `ringkonnad` WHERE 1"; // SQL käsk testitud, töötab
            $result = mysqli_query($connection,$statement) or die(mysqli_error($connection));
            while(list($category) = mysqli_fetch_row($result)){
                echo '<option value="'.$category.'">'.$category.'</option>';
            }
            mysqli_close($connection);
            ?>-->
  		</select>
		</div>
  		<button type="submit" class="btn btn-default">Kandideeri</button>
		</form>
		
      </div>
    </div><!-- /.container -->
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.js"></script>
    
	</body>
</html>
