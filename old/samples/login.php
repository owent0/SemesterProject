<?php
// login.php
// NOTE: PHP for starting session must appear before any HTML is
// sent!

session_start();

$_SESSION['time']    = time();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
 "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
  <title>PHP Session Sample Page</title>
  <meta http-equiv="Content-Type"
        content="application/xhtml+xml; charset=UTF-8" />
</head>

<body>

<p>
This page uses PHP sessions to manage a login across mutiple
pages and connections, instead of manually setting cookies.
</p>

<?php

$_SESSION['favcolor'] = 'green';
$_SESSION['animal']  = 'cat';

?>

<form action="./process.php" method="post">
<fieldset>
<legend>Your Name</legend>
<table>
    <tr>
        <td> Type in your name: </td>
        <td> <input name="name" type="text" /> </td>
    </tr>
    <tr>
        <td colspan="2"> If you don't have one, make one up. </td>
    </tr>
</table>
</fieldset>

<fieldset>
<legend>Ice Cream</legend>
<table>
    <tr>
        <td> Type in your favorite ice cream: </td>
        <td> <input name="icecream" type="text" /> </td>
    </tr>
    <tr>
        <td colspan="2"> If you don't have one, type "fur".</td>
    </tr>
</table>
</fieldset>

<p>
         <input type="submit" /> 
</p>
</form>

<p>
Here's the SID:
<?php echo session_id(); ?> <br />
Here's the raw session info:
<pre>
<?php print_r($_SESSION); ?>
</pre>
</p>


<p>
<a href="http://validator.w3.org/check/referer">
<img style="border:0;width:88px;height:31px"
       src="http://www.w3.org/Icons/valid-xhtml11"
       alt="Valid XHTML 1.1!" />
</a>
</p>

<p>
<a href="http://jigsaw.w3.org/css-validator/check/referer">
<img style="border:0;width:88px;height:31px"
       src="http://jigsaw.w3.org/css-validator/images/vcss" 
       alt="Valid CSS!" />
</a>
</p>

</body>
</html>
