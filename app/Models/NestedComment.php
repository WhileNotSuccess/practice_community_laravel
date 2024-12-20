<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NestedComment extends Model
{
    use HasFactory;

    protected $fillable = [
        'comment_id',
        'author',
        'content',
    ];
    public function comment() {
        return $this->belongsTo(Comment::class);
    }

}
