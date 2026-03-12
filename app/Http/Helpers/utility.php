<?php
function getImg($src){
    if(!$src) return asset('placeholder-doctor.webp');
    return asset('storage/'. $src);
}


function getActiveLink($routeName, $activeClass = 'active'){
    return request()->routeIs($routeName) ? $activeClass : '';
}