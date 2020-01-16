<?php
function optionize ($string){
    return str_replace(' ', '_', strtolower($string));
}

//rounds to $precision and trims extra trailing zeros
function float_to_string($float, $precision=10){
//typecast to insure value is a float
$float=(float) $float;
$string=number_format($float, precision, '.', '');
$string=rtrim($string, '0');
$string=rtrim($string, '.');
return $string;
}
//temperature
function convert_to_celsius($value, $from_unit){
    switch($from_unit){
        case 'celsius':
            return $value;
            break;
        case 'fahrenheit':
            return ($value - 32)/1.8;
            break;
        case 'kelvin':
            return $value - 273.15;
            break;
        default:
            return "Unsupported unit.";
    }
}
function convert_from_celsius($value, $to_unit){
     switch($to_unit){
        case 'celsius':
            return $value;
            break;
        case 'fahrenheit':
            return ($value * 1.8) +32;
            break;
        case 'kelvin':
            return $value + 273.15;
            break;
        default:
            return "Unsupported unit.";
    }
}
function convert_temperature($value, $from_unit, $to_unit){
    $celsius_value=convert_to_celsius($value, $from_unit);
    $new_value=convert_from_celsius($celsius_value, $to_unit);
    return $new_value;
        
   
}


?>

