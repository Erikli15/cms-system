<?php
return [
    ["method" => "GET", "path" => "/", "controller" => "PageController@home"],
    ["method" => "GET", "path" => "/page/{slug}", "controller" => "PageController@show"],
    ["method" => "GET", "path" => "/products", "controller" => "ProductController@index"],
    ["method" => "GET", "path" => "/product/{id}", "controller" => "ProductController@show"],
    ["method" => "GET", "path" => "/admin", "cntroller" => "AdminController@dashboard"],
    ["method" => "GET", "path" => "/admin/pages", "controller" => "AdminController@pages"],
    ["method" => "GET", "path" => "/admin/pages/create", "controller" => "PageController@create"],
];
?>