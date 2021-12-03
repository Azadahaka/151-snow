<?php

/**
 * @file      users.php
 * @brief     File description
 * @author    Created by azad.safai-naeeni
 * @version   16.11.2021
 */
require "model/userMgt.php";

function login(){
    //check if email is set, if we come from the login page and click on the login button
    if(isset ($_POST['email'])){
        if(checklogin()){
            $_SESSION['email'] = $_POST['email'];
            require 'view/home.php';
            echo 'email set and OK';
        }else{
            require "view/login.php";
            echo 'email is not set';
        }
    }else{//we ask login page
        require "view/login.php";
        echo 'email is not set';
    }
}

function logout(){
    session_destroy();
    $_SESSION = array();
    require 'view/home.php';

}