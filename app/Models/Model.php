<?php

namespace App\Models;

use Database\DBConnection;

class Model
{
    protected DBConnection $db;

    public function __construct(DBConnection $db)
    {
        $this->db = $db;
    }
}