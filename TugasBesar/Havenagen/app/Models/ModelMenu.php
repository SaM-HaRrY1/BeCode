<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelMenu extends Model
{
    protected $table = 'tb_menu';
    protected $primaryKey = 'id_menu';
    protected $allowedFields = ['nama_menu', 'jenis', 'kategori','harga', 'foto_menu'];

    public function getAllMenu()
    {
        return $this->findAll();
    }

    public function getByJenisSatu()
    {
        return $this->where('jenis', 1)->findAll();
    }

    public function getByJenisDua()
    {
        return $this->where('jenis', 2)->findAll();
    }

    public function getByJenisTiga()
    {
        return $this->where('jenis', 3)->findAll();
    }
}
