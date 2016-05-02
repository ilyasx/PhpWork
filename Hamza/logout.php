<?php 

session_start();

session_destroy();

header("Location:index.php?success=" . urlencode("Logged out Successfully"));
exit();

?>