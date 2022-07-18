<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table                = 'table_barang';
    protected $primaryKey           = 'id';
    protected $protectFields        = true;
    protected $allowedFields        = ['name', 'qty', 'price'];

    public function getBarang($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where('id', $id)->first();
    }
}
