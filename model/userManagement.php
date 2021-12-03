<?php

/**
 * @file      userManagement.php
 * @brief     File description
 * @author    Created by azad.safai-naeeni
 * @version   19.11.2021
 */

function checkLoginDB($data)
{
    $email = $data['email'];
    $pwd = $data['userPswd'];

    $query = "SELECT userHashPsw FROM users WHERE userEmailAddress =:femail";
    $params = array(":femail" => $email);

    $queryResult = executeQuerySelect($query, $params);
    //$hashed = '$2y$10$KiKja1KkYTJgLBmyHKGKeO8Oghsr/9s4iwGEQ18q4.vLcP2IHUsiC';

    if(count($queryResult) > 0 && password_verify($pwd, $queryResult[0]["userHashPsw"]))
        return true;
    else
        return false;
}

function CheckOrUpdateHash($data)
{

}
?>