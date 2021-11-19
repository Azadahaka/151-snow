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
        checklogin();
        echo 'email set';
        require 'view/home.php';
    }else{//we ask login page
        echo 'email is not set';
        require "view/login.php";
    }
}