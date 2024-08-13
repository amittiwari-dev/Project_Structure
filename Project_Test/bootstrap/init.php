<?php
#note : in laravel same file is called : kernel.php,boot.php,core.php
#bootstrap : folder : intialisation of the Application.

$config= include_once dirname(__DIR__).'/config/settings.php';
//includes helpers files......
require_once PROJECT_PATH.'/helper/function.php';

// print_r(get_included_files()); // for getting include inside this file another files.
//echo '<pre>';
$hostname=$config['database']['hostname'];
$UserName=$config['database']['username'];
$Password=$config['database']['password'];
$DatabaseName=$config['database']['dbname'];
$port=$config['database']['port'];


// includes routes files.....
require_once PROJECT_PATH.'/Routes/web-routes.php';
require_once PROJECT_PATH.'/Routes/api-routes.php';

?>