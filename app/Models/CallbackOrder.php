<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CallbackOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'form_name',
        'name',
        'phone',
        'description',
        'additional',
        'ip',
    ];

    protected $sortable = ['created_at'];
}
