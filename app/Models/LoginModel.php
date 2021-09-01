<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    public $db;
    public $dataTable;
    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->dataTable = $this->db->table('users');
    }

    public function verifyEmail($email)
    {
        return $this->dataTable
            ->select('unique_id,email,password')
            ->where('email', $email)
            ->get()
            ->getRow();

        if (count($result->getResultArray()) == 1) {
            return $result->getRowArray();
        }
    }

    public function checkAdmin()
    {
        return $this->dataTable->select()->get()->getResult();
    }

    public function getLoggedUserData($id)
    {
        return $this->dataTable
            ->select()
            ->where('unique_id', $id)
            ->get()
            ->getRow();

    }

    public function updatePassword($id, $password)
    {

        return $this->dataTable
            ->where(['unique_id' => $id])
            ->set(['password' => $password])
            ->update();
    }
}