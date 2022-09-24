<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    public function admin() {
        return $this->belongsTo(Admin::class, 'id', 'user_id');
    }
}
