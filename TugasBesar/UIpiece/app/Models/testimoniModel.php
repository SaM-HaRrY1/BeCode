<?php

namespace App\Models;

use CodeIgniter\Model;

class TestimoniModel extends Model
{
    protected $table = 'testimoni';
    protected $primaryKey = 'id_testimoni';
    protected $allowedFields = ['id_pembeli', 'testimoni_text', 'created_at'];
}
