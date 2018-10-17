<?php

/**
 * @param string view file name
 * 
 */
function route($link) {
    if($link == '/') {
        require 'view/accueil.html';
    }
    else {
        require 'view/' . $link . '.html';
    }
}