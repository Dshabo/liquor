<!doctype html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="description" content="How Online Car Ordering Should Be!" />
<meta name="keywords" content="car, ordering, order car, car orders, car order, order" />
<meta http-equiv="author" content="Gregory Toscano" />
<title>Cars Order</title>
<link rel="stylesheet" href="style.css" type="text/css">
<link rel="stylesheet" href="search.css" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Walter+Turncoat' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>
<script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/
html5.js"></script>
<![endif]-->
</head>
<body>
<div class="wrapper">
      <header>
            <img src="images/logo.png" width="1000" height="155">
          <nav>
           <ul>
              <li><a href="index.html" >Home</a></li>
              <li><a href="order.html" class="current">Order</a></li>
              <li><a href="contact.php">Contact</a></li>
           </ul>
        </nav>
  </header>
<section>
    <hgroup>
        <center><h2>Review and Complete</h2></center>
    </hgroup>
<section><center>
<?php
$brand = $_POST['brand'];
$model = $_POST['model'];
$color = $_POST['color'];
?>

<table cellspacing="5" cellpadding="6">
<tr>
	<td>
		Make: 
	</td>
	<td>
		<center>
			<?php echo $brand.' '; ?>
		</center>
	</td>
</tr>
<tr>
	<td>
		Model: 
	</td>
	<td>
		<center>
			<?php echo $model.' '; ?>
		</center>
	</td>
</tr>
<tr>
	<td>
		Color: 
	</td>	
	<td>
		<center>
			<?php echo $color.' '; ?>
		</center>
	</td>
</tr>
</table>
<p><input type="submit" value=" Complete Order "></p>

    </center>
</section>
	
       <footer>
           &copy Copyright 2013
       </footer>

</div>
</body>
</html>
