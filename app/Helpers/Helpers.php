<?php

function getDotStr($string){
    return Str::limit($string, 100, '...');
}
