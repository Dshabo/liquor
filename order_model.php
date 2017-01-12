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
<section class="content">
         <center>
         <hgroup>
                 <h2>Pick A Model of Car</h2>
         </hgroup>
         <article>
              <form class="form-wrapper cf" action="order_color.php" method="POST">
				<input type="text" name="model" placeholder="Search For A Model..." required autofocus>
				<input type="hidden" name="brand" value="<?php echo  $_POST['brand']; ?>">
				<button type="submit">Next>></button>
              </form>
         </article>
         </center>
</section>
<aside>
<center>
	<center>
      <h2>Your Order</h2>
	</center>
		Cart: <br />
	<center>
	  <?php echo  $_POST['brand']; ?>
    </center>
</aside>
       <footer>
           &copy Copyright 2013
       </footer>

</div>
</body>
</html>
