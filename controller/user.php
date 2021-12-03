<?php

/**
 * @file      user.php
 * @brief     File description
 * @author     Created by azad.safai-naeeni
 * @version   16.11.2021
 */

require "model/userManagement.php";

/**
 * @brief get login page
 */
function login($data) : void
{
    //check email is set, when coming from login page.
    if (isset($data))
    {
        if(checkLoginDB($data))
        {
            $_SESSION["email"] = $data["email"];
            require "view/home.php";
        }
        else
        {
            $errorMsg = "Identifiant(s) incorrect";
            require "view/login.php";
        }

    }
    else
    {
        require "view/login.php";
    };
}

function logout() : void
{
    session_destroy();
    $_SESSION = array();
    require "view/home.php";
}