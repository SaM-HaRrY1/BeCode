<?php

namespace App\Controllers;

use App\Models\ModelMenu;

class Home extends BaseController
{
    protected $modelmenu;
    public function __construct() 
    {
        $this->modelmenu = new ModelMenu();
    }


    public function index()
    {
        return view('auth/login');
    }

    public function landing()
    {

        // if (session()->get('isLoggedIn')) {
        //     return redirect()->to('/index');
        // }

        return view('tampilan/landing');
    }

    public function minuman()
    {
        $minum = $this->modelmenu->getByJenisSatu();

        $data = [
            "tittle" => 'Menu',
            "minum" => $minum
        ];

        return view('tampilan/minuman', $data);
    }

    public function makanan()
    {
        $makan = $this->modelmenu->getByJenisTiga();

        $data = [
            "tittle" => 'Menu',
            "makan" => $makan
        ];

        return view('tampilan/makanan', $data);
    }

    public function cemilan()
    {
        $cemil = $this->modelmenu->getByJenisDua();

        $data = [
            "tittle" => 'Menu',
            "cemil" => $cemil
        ];

        return view('tampilan/cemilan', $data);
    }

    public function hubungikami()
    {
        return view('tampilan/hubungikami');
    }

    public function isimenu()
    {
        $isimenu = $this->modelmenu->findAll();

        $data = [
            "tittle" => 'Menu',
            "isimenu" => $isimenu
        ];

        return view('tampilan/menu', $data);
    }

    public function keranjang()
    {
        return view('tampilan/keranjang');
    }
    public function beli()
    {
        return view('tampilan/beli');
    }

}
