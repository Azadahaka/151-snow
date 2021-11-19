<?php

/**
 * @file      userMgt.php
 * @brief     File description
 * @author    Created by azad.safai-naeeni
 * @version   19.11.2021
 */

function checklogin() {
    $jsonUsers = file_get_contents('model/users.json');
    $tabUsers = json_decode($jsonUsers, true);
    $email = $_POST['email'];
    $pwd = $_POST['userPswd'];
    foreach ($tabUsers as $key => $tabUsersInter){
        foreach ($tabUsersInter as $enbtry => $tablogin){
             if(in_array($email, $tablogin, true) && in_array($pwd, $tablogin, true)){
                 return true;
             }
        }
    }
    return false;
}