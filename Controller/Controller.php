<?php


namespace app\controller;

use Exception;

abstract class controller
{
    protected static function getResponseAsJSON($data)
    {
        header("Access-Control-Allow-Origin");
        header("content-type: application/json, chrset=utf-8");
        header("cache-control: no-cache, must-revalidate");
        header("Expires: mon, 26 jul 1997 05:00:00 GMT ");
        
        exit(json_encode($data));

    }

  




}








