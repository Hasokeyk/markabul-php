<?php

    //Source : https://developers.markabul.com/docs/marketplace/urun-entegrasyonu/markabul-kategori-listesi

    use Hasokeyk\Markabul\Markabul;

    require "vendor/autoload.php";

    $supplierId = 'XXXXXX';
    $username   = 'XXXXXXXXXXXXXXXXXXXX';
    $password   = 'XXXXXXXXXXXXXXXXXXXX';

    $markabul = new Markabul($supplierId, $username, $password);

    $markabul_marketplace_categories = $markabul->marketplace->MarkabulMarketplaceCategories();

    $categories = $markabul_marketplace_categories->get_categories();
    print_r($categories);
