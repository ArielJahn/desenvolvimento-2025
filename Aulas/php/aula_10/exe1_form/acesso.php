<?php

session_start();

$_SESSION['tempo'] = time() - $_SESSION['tempo'];

print_r($_SESSION);

session_destroy();