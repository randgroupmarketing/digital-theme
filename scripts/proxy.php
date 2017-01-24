<?php 

//$destination="http://www2.randgroup.com";
$destination="https://go.pardot.com";

// URL to proxy
 $domain = file_get_contents($destination.$_GET['pardot_url']);
// echo $destination.$_GET['pardot_url'];
// echo 'contents below';
 echo $domain;
