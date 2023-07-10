<?php 
// This includes the session_start to resume the session on this page. It identifies the session that needs to be destroyed
include_once 'include/session.php';
?>
<?php
// session_destroy() destroys the session. Then the header() function redirects to the home page
session_destroy();
header("location:index.php");

?>