<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Blade File Tracer
    |--------------------------------------------------------------------------
    |
    | Shows blade file path in front
    |
    */

    'tracer' => false,

    /*
    |--------------------------------------------------------------------------
    | View Storage Paths
    |--------------------------------------------------------------------------
    |
    | Most templating systems load templates from disk. Here you may specify
    | an array of paths that should be checked for your views. Of course
    | the usual Laravel view path has already been registered for you.
    |
    */

    'paths' => [
        resource_path('views'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Compiled View Path
    |--------------------------------------------------------------------------
    |
    | This option determines where all the compiled Blade templates will be
    | stored for your application. Typically, this is within the storage
    | directory. However, as usual, you are free to change this value.
    |
    */

    'compiled' => realpath(storage_path('framework/views')),
    'paths' => [
    resource_path('themes/ecome'),
    resource_path('views'),
    ],


];
