<?php 
use Carbon\Carbon;

if (! function_exists("hello")) {
    function hello()
    {
        echo "radi";
    }
}

if (! function_exists("convert")) {
    function convert($data)
    {
        return Carbon::parse($data)->format('m/d/y');
    }

}

?>