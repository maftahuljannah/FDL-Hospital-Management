<?php

function getImg($src){
    if(!$src) return asset('placeholder-doctor.png');
    return asset('storage/'. $src);
}