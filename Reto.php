<?php

function placesRecomendation($condition = '', $question = ''){
    $weather = array("Bogotá"=>"Cold", "Moneteria"=>"Hot", "Medellin"=>"mild");
    $ubication = array("Guajira" => "North", "Leticia"=>"south","Santander"=>"east", "Antioquia"=>"west");
    $touristm = array("Santa Marta"=> "sea", "Villavicencio" => "plains", "Riohacha"=>"desert", "Quindio"=>"Valley");

    switch($condition){
        case 'weather':
            $search = $weather;
            break;
        case 'ubication':
            $search = $ubication;
            break;
        case 'tourism':
            $search = $tourism;
            break;
        default:
        echo "Welcome to Colombia";
    }
    echo "The perfect place is: ".array_search($question, $search);
}

placesRecomendation("weather","Cold");