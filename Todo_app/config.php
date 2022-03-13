<?php

$uri = $_SERVER["REQUEST_URI"];

if (preg_match("/\/todo/", $uri, $match)) {
    define("BASE_CONTEXT_PATH", $match[0] ."/");
}

define("BASE_IMAGE_PATH", BASE_CONTEXT_PATH . "imgs/");
define("BASE_CSS_PATH", BASE_CONTEXT_PATH . "css/");
define("BASE_JS_PATH", BASE_CONTEXT_PATH . "js/");