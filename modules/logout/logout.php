<?php
setcookie('user', $username, time() - 21150);
// cách 1
session_unset();

//cách 2
// unset($_SESSION['login']);
// unset($_SESSION['username']);


// show_array($_SESSION);
redirect("?mod=login&act=login");
