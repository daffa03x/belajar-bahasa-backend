<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $keyType = "int";
    protected $table = "language";
    public $incrementing = true;
    public $timestamps = true;

    protected $fillable = [
        'language_name'
    ];

    public function word()
    {
        return $this->hasMany(Word::class);
    }
}
