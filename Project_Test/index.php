
<?php


//  include_once __DIR__.'/home.php';
// print_r(get_included_files());
// echo 'Index.php Page';
?>

<?php
$endPoint=array_key_exists('PATH_INFO',$_SERVER)?$_SERVER['PATH_INFO']:"";


if(array_key_exists($endPoint,$webRoutes))
{
    $fileToLoaded=$webRoutes[$endPoint];
   
    $path=__DIR__.'/'.$fileToLoaded;
    if(file_exists(__DIR__.'/'.$fileToLoaded))
    {
        require_once $path;

    }
    else
    {
        exit(basename($fileToLoaded)." <b>File does not Exist, Go and Create it.</b>");

    }
    // for checking file in exits or not
}
else
{
   # echo basename($_SERVER['PHP_SELF']);
   #echo basename($_SERVER['SCRIPT_NAME']);     
    if(basename($_SERVER['PHP_SELF'])==basename(__FILE__))
    {
        if(array_key_exists('DEFAULT_ROUTES',$webRoutes))
        {
            require_once __DIR__.'/'.$webRoutes['DEFAULT_ROUTES'];
        }
    }
    else{
   
    ob_clean();  // for not showing header 
    if(array_key_exists('404_ERROR_ROUTE',$webRoutes))
    {
        require_once __DIR__.'/'.$webRoutes['404_ERROR_ROUTE'];
    }
    exit();  // for not showing footer page
    }
}

?>


