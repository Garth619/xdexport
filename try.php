<?php // https://jonsuh.com/blog/convert-loop-through-json-php-javascript-arrays-objects 


// //echo file_get_contents('style.css');

// $str = file_get_contents('style.css');

// //$strplc = str_replace(' ', '', $str);

// $strplc = preg_replace('!\s+!', '', $str);

// echo $strplc;

// $cssArray = array_map('trim', explode("{",$strplc));

// echo "<pre>" . print_r ($cssArray,true) . "</pre>";

// $nested_array = array();

// foreach($cssArray as $yooo) {

//     $inner = explode("}", $yooo);

//     $nested_array[] = $inner;

// }

// echo "<pre>" . print_r ($nested_array,true) . "</pre>";



// https://stackoverflow.com/questions/1215074/break-a-css-file-into-an-array-with-php




$css = file_get_contents('style.css');

//
function BreakCSS($css)
{

    $results = array();

    preg_match_all('/(.+?)\s?\{\s?(.+?)\s?\}/', $css, $matches);
    foreach($matches[0] AS $i=>$original)
        foreach(explode(';', $matches[2][$i]) AS $attr)
            if (strlen(trim($attr)) > 0) // for missing semicolon on last element, which is legal
            {
                list($name, $value) = explode(':', $attr);
                $results[$matches[1][$i]][trim($name)] = trim($value);
            }
    return $results;
}



echo "<pre>" . print_r (BreakCSS($css),true) . "</pre>";




// https://stackoverflow.com/questions/3618381/parse-a-css-file-with-php

//$file = file_get_contents('style.css');


// function parse($file){
//     $css = file_get_contents($file);
//     preg_match_all( '/(?ims)([a-z0-9\s\.\:#_\-@,]+)\{([^\}]*)\}/', $css, $arr);
//     $result = array();
//     foreach ($arr[0] as $i => $x){
//         $selector = trim($arr[1][$i]);
//         $rules = explode(';', trim($arr[2][$i]));
//         $rules_arr = array();
//         foreach ($rules as $strRule){
//             if (!empty($strRule)){
//                 $rule = explode(":", $strRule);
//                 $rules_arr[trim($rule[0])] = trim($rule[1]);
//             }
//         }

//         $selectors = explode(',', trim($selector));
//         foreach ($selectors as $strSel){
//             $result[$strSel] = $rules_arr;
//         }
//     }
//     return $result;
// }
// $css = parse('css/'.$user['blog'].'.php');

// $css['#selector']['color'];




// $String = 'a,b,c|d,e,f|g,h,y';

// $one=explode("|",$String);
// $array = array();
// foreach ($one as $item){
//     $array[] = explode(",",$item);
// }


// echo "<pre>" . print_r ($array,true) . "</pre>";

// https://stackoverflow.com/questions/37356391/php-explode-string-key-into-multidimensional-array-with-values/37356572

// $result = array();

// foreach($array as $path => $value) {
//     $temp = &$result;

//     foreach(explode(';', $path) as $key) {
//         $temp =& $temp[$key];
//     }
//     $temp = $value;
// }

// print_r($result);

// https://stackoverflow.com/questions/39208686/explode-string-to-a-multidimensional-array



// foreach($array as $k => $v) {
//     $temp  = &$result[$k];
//     $path  = explode('.', $v['key']);

//     foreach($path as $key) {
//         $temp = &$temp[$key];
//     }
//     $temp = $v['content'];
// }
// print_r($result);


// $strr = "name:john,hone:12345,ebsite:www.23.com";

// $array = explode(",",$strr);

// echo "<pre>" . print_r ($array,true) . "</pre>";

// foreach($array as $value)
// {

//     $data = explode(":",$value);

//       echo $data[0]."=".$data[1];


//     echo ' ';

// }






