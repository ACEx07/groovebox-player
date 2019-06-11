<?php



/*
  https://github.com/Hmerritt/internet-radio
  
  This is the main settings file for the internet-radio

*/
$settings = [




    //  port that the icecast server is running on
    "icecast_port" => "7400",


    //  domain-name or host that icecast is running from
    //  e.g. example.com if running on a remote server
    //  or   localhost
    "icecast_host" => "harrymerritt.me",




    //  only change if on windows (used in development)
    //  default value: '/'
    "default_slash" => "/"




];




//  hide all errors
//error_reporting(0);
//ini_set('display_errors', 0);



?>
