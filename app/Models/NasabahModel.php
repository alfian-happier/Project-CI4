<?php

namespace App\Models;

use CodeIgniter\Model;

class NasabahModel extends Model
{
    protected $table = 'nasabah';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = [
        'nama_nasabah', 'periode_pertanggungan', 'pertanggungan_kendaraan',
        'harga_pertanggungan', 'jenis_pertanggungan', 'risiko_pertanggungan',
    ];

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
    protected $cleanValidationRules = true;

    protected $allowCallbacks = true;
    protected $beforeInsert = [];
    protected $afterInsert = [];
    protected $beforeUpdate = [];
    protected $afterUpdate = [];
    protected $beforeFind = [];
    protected $afterFind = [];
    protected $beforeDelete = [];
    protected $afterDelete = [];
}
