<?php
function getImg($src){
    if(!$src) return asset('placeholder-doctor.webp');
    return asset('storage/'. $src);
}