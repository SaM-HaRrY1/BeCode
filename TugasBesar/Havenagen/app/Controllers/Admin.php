<?php

namespace App\Controllers;

use App\Models\ModelMenu;
use App\Models\TransaksiModel;

class Admin extends BaseController
{
    protected $modelmenu;
    public function __construct() 
    {
        $this->modelmenu = new ModelMenu();
    }

    public function index()
    {
        $model = new TransaksiModel();
        $data['pesanan'] = $model->select('nama_pengirim, GROUP_CONCAT(nama_menu SEPARATOR ", ") AS menu_yang_dipesan, total_harga, tgl_transaksi')
                                ->groupBy('nama_pengirim, total_harga, tgl_transaksi')
                                ->findAll();
                                
        return view('user/index', $data);
    }

    public function minum()
    {
        $minum = $this->modelmenu->getByJenisSatu();

        $data = [
            "tittle" => 'Menu',
            "minum" => $minum
        ];

        return view('user/tminuman', $data);
    }

    public function makan()
    {
        $makan = $this->modelmenu->getByJenisTiga();

        $data = [
            "tittle" => 'Menu',
            "makan" => $makan
        ];

        return view('user/tmakanan', $data);
    }

    public function cemil()
    {
        $cemil = $this->modelmenu->getByJenisDua();

        $data = [
            "tittle" => 'Menu',
            "cemil" => $cemil
        ];

        return view('user/tcemilan', $data);
    }

    public function luser()
    {
        return view('user/luser');
    }

}
