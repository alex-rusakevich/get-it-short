<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Links extends Model
{
    use HasFactory;
    protected $table = "links";
    public $timestamps = false;

    protected $fillable = ['link', 'expires_at', 'is_premium'];
}
