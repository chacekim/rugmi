<?php 

require_once '../libraries/auth.lib.php';
require_once '../libraries/url.lib.php';

Auth::log_out();

URL::redirect('login.php');