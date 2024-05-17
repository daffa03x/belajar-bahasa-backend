<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizzResult extends Model
{
    use HasFactory;

    protected $primaryKey = "id";
    protected $keyType = "int";
    protected $table = "quizz_result";
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = [
        'quiz_id',
        'question',
        'user_answer',
        'correct_answer',
        'is_correct',
    ];

    public function quiz()
    {
        return $this->belongsTo(Quizz::class);
    }
}
