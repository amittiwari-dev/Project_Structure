<?php
/**
 * @title:functions.php
 * @description : This the main file where all the ready made functions will be declared
 * 
 */
# getBaseURL : it will return the base_url and will give the new URL.
if(!function_exists('getBaseUrl'))
{
    function getBaseUrl($url="")
    {
        if(empty($url) )
        {
            return BASE_URL;
        }
        else{
            return BASE_URL.$url;
        }
    }
}
?>