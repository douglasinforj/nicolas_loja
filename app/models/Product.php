<?php

namespace App\Models;

class Product
{
    public static function getAll()
    {
        return [
            1 => ['id' => 1, 'name' => 'Produto 1', 'description' => 'Descrição 1', 'price' => 100],
            2 => ['id' => 2, 'name' => 'Produto 2', 'description' => 'Descrição 2', 'price' => 200],
        ];
    }
}
