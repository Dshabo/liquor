<!doctype html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="description" content="How Online Liquor Bottle Ordering Should Be!" />
<meta name="keywords" content="Whiskey, Bourbon, Wine, Beer, Scotch, Gin, Tequila, Liquor, Rum, " />
<meta http-equiv="author" content="David Shab" />
<title>Bottle Rack Online</title>
<link rel="stylesheet" href="style.css" type="text/css">
<link rel="stylesheet" href="search.css" type="text/css">


<script type="text/javascript">
function greeting()
{
alert("Message Sent\nThank You " + document.forms["contact"]["fname"].value + "! \nWe will respond as soon as we can."  )
}
</script>

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
			  <li><a href="liquor_list.html">List</a></li>
              <li><a href="order.html">Order</a></li>
              <li><a href="contact.php" class="current">Contact</a></li>
           </ul>
        </nav>
  </header>
<section>
       <center><form name="contact" action="index.html" onsubmit="greeting()" autocomplete="off" method="POST" >
                   <table>
                      <tr>
                        <td><label for="fname">First name:</label></td> <td><input type="text" name="fname" required="required"></td>
                      </tr>
                      <tr>
                        <td><label for="lname">Last  Name:</label></td> <td><input type="text" name="lname" required="required"> </td>
                      </tr>
                      <tr>
                        <td><label for="topic">Topic: </label></td> <td><select name="topic" required="required">
                                   <option value="" SELECTED>--Select One--
                                   <option value="forgotpass">Forgot Password</option>
                                   <option value="billing">Billing</option>
                                   <option value="found">Update Registry</option>
                                   <option value="website">Website Issue</option>
                                   <option value="other">Other</option>
                        </select>
                        </td>
                      </tr>
                      <tr>
                        <td><label for="message">Message:</label> </td><td><textarea rows="10" cols="30" name="message" required="required"></textarea> </td>
                      <tr>
                        <td colspan="2"><center><input type="submit" value=" Submit " name="submit"></td>
                      </tr>
                    </table>
                   </form>
                  </center>


</section>


       <footer>
           &copy Copyright 2013
       </footer>

</div>
</body>
</html>
