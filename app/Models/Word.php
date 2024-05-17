<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    use HasFactory;
    
    protected $primaryKey = "id";
    protected $keyType = "int";
    protected $table = "word";
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = [
        'language_id',
        'word',
        'translation',
    ];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
