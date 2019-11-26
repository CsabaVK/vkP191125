<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

<?php
// function out($t){
//     echo '<pre>';
//     print_r($t);
//     echo '<pre>';
// }
//????? WTF



$e = "alma";

//only for debug
//var_dump($e);

/**
* is_numeric();
* is_integer();
* is_string();
* ...
*/

//echo is_numeric($e);
//echo is_null(isset(@$i)) ? 'TRUE' : 'FALSE'; //TRUE

echo is_null(isset($i)) ? 'TRUE' : 'FALSE'; //FALSE
echo is_numeric($e);

// $t = [0,3,6,7];
// $t['key'] = 42;
// $t[] = 100;
$t = [[0, 3, 5, 't' => [0, 2, 42]], 'key' => 'value'];


//unset
//out($t);

// if(is_numeric($v) && gettype == 'string')
// {
//     settype($v, 'integer');
//     //var_dump(settype($v, 'integer'));
//     var_dump($v);
// }

/**
 * $_SERVER
 * $_GET
 * $_POST
 * $GLOBALS
 * $_FILES
 * ...
 */

function f()
{
    //echo $e; //zárt függvény
    global $e;
    out($_SERVER);

}

?>


</body>
</html>