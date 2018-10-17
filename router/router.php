<?php

require_once '../config/config.php';


$link = basename($_SERVER['REQUEST_URI']);

if($link == 'annuaire_film') {
    $link = '/';
}
if($link == '/') {
    route('/');
}
else if($link == 'contact_us') {
    route('contact');
}
else if($link == 'apropos') {
    route('apropos');
}
else if($link == 'services') {
    route('services');
}
else {
    route('error');
}


?>