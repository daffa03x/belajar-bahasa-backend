<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlashCard extends Model
{
    use HasFactory;

    protected $primaryKey = "id";
    protected $keyType = "int";
    protected $table = "flashcard";
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = [
        'user_id',
        'word_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function word()
    {
        return $this->belongsTo(Word::class);
    }
}
