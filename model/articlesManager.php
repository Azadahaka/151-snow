<?php

/**
 * @file      articlesManager.php
 * @brief     File description
 * @author    Created by azad.safai-naeeni
 * @version   03.12.2021
 */

function getArticle(){
    $query = "SELECT code, brand, model, qtyAvailable, price, photo FROM snows";
    $params = array();
    $queryResult = executeQuerySelect($query, $params);
    return $queryResult;
}

?>