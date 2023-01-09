<?php
session_start();
?>
<html>
<head>
<title>blank page</title>
</head>
<body>
<?php
echo $_SESSION['Email'];
?>
</body>
</html>