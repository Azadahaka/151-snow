<?php

/**
 * @file      articles.php
 * @brief     File description
 * @author    Created by azad.safai-naeeni
 * @version   03.12.2021
 */
require "model\articlesManager.php";

function displayArticles()
{
    $articles= getArticle();
    require "view/articles.php";
}
?>