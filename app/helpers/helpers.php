<?php

function localUrl($url = "")
{
    return \LaravelLocalization::localizeUrl($url);
}


function qlog()
{
    dd(DB::getQueryLog());
}


