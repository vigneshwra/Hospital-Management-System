<html>
<body>
<?php
$conn = mysqli_connect("localhost","root","");
if (!$conn)
  {
  die('Could not connect: ' . mysql_error());
  }
echo "1 record added";
mysqli_close($conn)
?>


</body>
</html>