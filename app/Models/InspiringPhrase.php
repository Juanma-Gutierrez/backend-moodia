<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InspiringPhrase extends Model {
    use HasFactory;

    protected $table = 'inspiring_phrase';
    protected $primaryKey = 'idInspiringPhrase';
    public $timestamps = true;

    protected $fillable = [
        'title',
        'message',
        'idCategory',
    ];

    public function category() {
        return $this->belongsTo(Category::class, 'idCategory');
    }
}
