<?php

$name = "patient";

// Home
Breadcrumbs::for($name . '.home', function ($trail) {
    $trail->push('Home', route('patient.home'));
});
