<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\TransaksiModel;

class Transaksi extends Controller
{
    public function simpan()
    {
        try {
            $data = json_decode($this->request->getBody(), true);

            // Debugging
            log_message('debug', 'Data transaksi yang diterima: ' . print_r($data, true));

            $totalHarga = array_reduce($data['keranjang'], function($total, $item) {
                return $total + ($item['harga'] * $item['jumlah']);
            }, 0);

            $transaksiData = [];
            foreach ($data['keranjang'] as $item) {
                if (!isset($item['id'])) {
                    throw new \Exception('Undefined array key id_menu');
                }
                $transaksiData[] = [
                    'id_menu' => $item['id'],
                    'nama_menu' => $item['nama'],
                    'foto_menu' => $item['gambar'],
                    'jumlah' => $item['jumlah'],
                    'total_harga' => $totalHarga,
                    'tgl_transaksi' => date('Y-m-d H:i:s'),
                    'harga' => $item['harga'],
                    'nama_pengirim' => $data['namaPengirim'],
                    'nomor_rekening' => $data['nomorRekening']
                ];
            }

            log_message('debug', 'Data transaksi yang akan disimpan: ' . print_r($transaksiData, true));

            $model = new TransaksiModel();
            if ($model->insertBatch($transaksiData)) {
                return $this->response->setJSON(['status' => 'success', 'message' => 'Transaksi berhasil disimpan!']);
            } else {
                log_message('error', 'Gagal menyimpan data transaksi');
                return $this->response->setJSON(['status' => 'error', 'message' => 'Terjadi kesalahan saat menyimpan transaksi!']);
            }
        } catch (\Exception $e) {
            // exception dan log error
            log_message('error', 'Exception: ' . $e->getMessage());
            return $this->response->setJSON(['status' => 'error', 'message' => 'Terjadi kesalahan: ' . $e->getMessage()]);
        }
    }
}
