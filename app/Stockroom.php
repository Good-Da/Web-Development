<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stockroom extends Model
{
    // Table Name
    protected $table = 'stockrooms';
    // Primary Key
    public $primamrykey = 'id';
    // Timestamps
    public $timestamps = true; 
}
