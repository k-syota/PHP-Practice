<?php

function get_param($key, $default_val, $is_post = true)
{
    $arr = $is_post ? $_POST : $_GET;
    return $arr[$key] ?? $default_val;
    // $id = $_POST["id"] ?? "";の文を汎用できるようにする
}