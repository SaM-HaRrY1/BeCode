<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
    protected $table = 'tb_transaksi';
    protected $allowedFields = [
        'id_menu', 'nama_menu', 'foto_menu', 'jumlah', 
        'total_harga', 'tgl_transaksi', 'harga', 
        'nama_pengirim', 'nomor_rekening'
    ];
    protected $useTimestamps = false;
}
