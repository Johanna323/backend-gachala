<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDocument extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'tipo_documento',
        'url_archivo',
        'fecha_carga',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
