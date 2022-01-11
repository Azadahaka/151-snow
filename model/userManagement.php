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
    //mot de passe hashed = $2y$10$KiKja1KkYTJgLBmyHKGKeO8Oghsr/9s4iwGEQ18q4.vLcP2IHUsiC
    //mit dans la base de donnée

    $query = "SELECT userHashPsw FROM users WHERE userEmailAddress =:femail";
    $params = array(":femail" => $email);

    $queryResult = executeQuerySelect($query, $params);


    if(count($queryResult) > 0 && password_verify($pwd, $queryResult[0]["userHashPsw"]))
        return true;
    else
        return false;
}

function registerLogin($email, $pwd){
    $result = false;

    $loginQuery = "insert into users(userEmailAddress, userHashPsw, isAdmin) VALUES	(:femail, :fpwd, 0)";

    $userHashPsw = password_hash($pwd, PASSWORD_DEFAULT);

    require_once 'model/dbConnector.php';
    $params = array(':femail' => $email,':fpwd' => $userHashPsw);
    return executeQueryInsert($loginQuery,$params);

}


function CheckOrUpdateHash($data)
{

}
?>