<?php

namespace App\Models;

use CodeIgniter\Model;
use Config\Database;

class GalleryModel extends Model
{
    public $db;
    public $dataTable;
    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->dataTable = $this->db->table('gallery');
    }

    public function saveData($data)
    {

        return $this->dataTable->insert($data);

    }

    public function getAll()
    {
        return $this->dataTable
            ->select()
            ->orderBy('id', 'DESC')

            ->get()
            ->getResult();
    }

    public function deletePhoto($id)
    {

        return $this->dataTable
            ->where(['id' => $id])
            ->delete();

    }
}