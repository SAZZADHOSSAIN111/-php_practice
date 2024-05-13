<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname"> <br>
  Email: <input type="email" name="asd"> <br>
  <input type="submit">
</form>

<?php
$_SERVER["REQUEST_METHOD"] == "POST"; 
// collect value of input field
echo $name = $_POST['fname'];
echo "<br>";
echo $name = $_POST['asd'];
?>

</body>
</html>