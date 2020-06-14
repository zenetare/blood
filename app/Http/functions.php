<?php

use App\countyCity;
use Illuminate\Support\Facades\DB;

if(! function_exists("aca_url")) {

    function aca_url($url) {


       $secure = config("secure.secure-ssl");

       if($secure == false) {

            return url($url);

       } elseif( $secure == true) {

            return secure_url($url);

       }

    }

}



if(! function_exists("aca_asset")) {

    function aca_asset($url) {


       $secure = config("secure.secure-ssl");

       if($secure == false) {

            return asset($url);

       } elseif( $secure == true) {

            return secure_asset($url);

       }

    }

}
if (! function_exists("aca_count")) {

     function aca_count($id) {

          $country = DB::table('cities')->where('country_id', '=', $id)->count();

          return $country;

     }

}