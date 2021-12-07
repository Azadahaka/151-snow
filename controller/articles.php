<?php

/**
 * @file      articles.php
 * @brief     File description
 * @author    Created by azad.safai-naeeni
 * @version   03.12.2021
 */

function displayArticles()
{
    $query = "SELECT code, brand, model, qtyAvailable, price, photo FROM snows";
    $queryResult = executeQuerySelect($query);
    return $queryResult;
}
?>