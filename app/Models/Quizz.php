<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quizz extends Model
{
    use HasFactory;

    protected $primaryKey = "id";
    protected $keyType = "int";
    protected $table = "quizz";
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = [
        'user_id',
        'language_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
    }

    public function quizzResult()
    {
        return $this->hasMany(QuizzResult::class);
    }
}
