<?php

namespace controller\login;

use lib\Auth;
use lib\Msg;

function get()
{
    require_once SOURCE_BASE . "views/login.php";
}

function post()
{

    $id = get_param("id", "");
    $pwd  = get_param("pwd", "");


    Msg::push(Msg::DEBUG, "デバックメッセージです");

    if (Auth::login($id, $pwd)) {
        Msg::push(Msg::INFO, "ログイン成功");
        redirect(GO_HOME);
    } else {
        Msg::push(Msg::ERROR, "ログイン失敗");
        redirect(GO_REFERER);
    }
}