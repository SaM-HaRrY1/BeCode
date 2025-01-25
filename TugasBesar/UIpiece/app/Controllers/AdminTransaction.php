<?php

namespace App\Controllers;

use App\Models\TransaksiModel;
use App\Models\ModelMember;

class AdminTransaction extends BaseController
{
    protected $transactionModel;
    protected $memberModel;

    public function __construct()
    {
        $this->transactionModel = new TransaksiModel();
        $this->memberModel = new ModelMember();
    }

    public function index()
    {
        $data['transactions'] = $this->transactionModel->findAll();
        $data['totalBalance'] = $this->getTotalBalance();
        return view('admin/transactions', $data);
    }

    public function getTransaction($id)
    {
        $transaction = $this->transactionModel->find($id);
        return $this->response->setJSON($transaction);
    }

    public function updateTransaction($id)
    {
        $rules = [
            'status' => 'required|in_list[pending,completed,canceled]'
        ];

        if ($this->validate($rules)) {
            $updateData = [
                'status' => $this->request->getPost('status')
            ];

            $this->transactionModel->update($id, $updateData);

            return $this->response->setJSON(['message' => 'Data transaksi berhasil diupdate']);
        }

        return $this->response->setJSON(['errors' => $this->validator->getErrors()], 400);
    }

    public function deleteTransaction($id)
    {
        $this->transactionModel->delete($id);
        return $this->response->setJSON(['message' => 'Data transaksi berhasil dihapus']);
    }

    private function getTotalBalance()
    {
        $completedTransactions = $this->transactionModel->where('status', 'completed')->findAll();
        $totalBalance = 0;

        foreach ($completedTransactions as $transaction) {
            $totalBalance += $transaction['jumlah'];
        }

        return $totalBalance;
    }
}
