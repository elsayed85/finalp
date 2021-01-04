<?php

function localUrl($url = "")
{
    return \LaravelLocalization::localizeUrl($url);
}
