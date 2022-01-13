<?php

namespace App\Models;

use PDO;

class Product {

    protected $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function getProducts()
    {
        $query = "SELECT 
                        id,
                        descricao,
                        preco
                    FROM
                        tb_produtos";

        return $this->db->query($query)->fetchAll();
    }
}