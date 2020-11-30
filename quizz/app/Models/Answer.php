<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    use HasFactory;
    protected $fillable = [
        'name',
        'correct',
    ];

    public function question(){
        return $this->belongsTo(Question::class);
    }
}
