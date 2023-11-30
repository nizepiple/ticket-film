<?php

use App\Models\OurFilm;
use App\Models\section;
use App\Models\setting;
function get_setting_value($key)
{
    $data = setting::where ('key' ,$key) -> first(); 
    if(isset($data->value)){
        return $data->value; 
    }else{
        return 'empty'; 
    }
}
// function get_section_data($key)
// {
//     $data = section::where ('key' ,$key) -> first(); 
//     if(isset($data->value)){
//         return $data->value; 
//     }else{
//         return 'empty'; 
//     }
// }
function get_film()
{
   $data = OurFilm::all();
   return $data;
}

