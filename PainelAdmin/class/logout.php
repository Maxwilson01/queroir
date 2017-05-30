<?php
header("content-type: text/html; charset=utf-8");
session_start();
unset($_SESSION['user_logado']);
session_destroy();
?>
<script>location.href='../PainelAdmin/login.php';</script> 
<?php exit('Redirecionando...'); ?>