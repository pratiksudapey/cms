<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    protected $fillable = [
      'customer_name', "company_name", "address", "language", "genre_id"
    ];
}
