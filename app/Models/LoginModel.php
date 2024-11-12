<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    Protected $table = 'admin'; 
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'username', 'password', 'nama', 'email', 'level', 'created_at'];


    public function getData($username, $password)
    {    
        return $this->where('username', $username)
                    ->where('password', $password)
                    ->first();
    }

    public function getLogin()
    {    
        return $this->findAll();
    }
    // Method untuk menganmbil data barang berdasarkan id
    public function getLoginById($id)

    {
        return $this->find($id);
    }
    // Method untuk menyimpan data baru atau memperbarui data yang sudah ada
        public function saveLogin($data)
    {
        return $this->save($data);
    }
    // Method untuk memperbarui data Pelanggan yang sudah ada
    public Function updateLogin($id, $data)
    {
        return $this->update($id, $data);
    }
    // Method untuk menghapus data barang berdasarkan id
    public function deleteLogin($id)
    {
        return $this->delete($id);
    }
}