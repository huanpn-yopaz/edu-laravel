<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Zoom extends Model
{
    public $timestamps = false;
    protected $fillable = ['name_zoom','created_at','updated_at'];
    protected $table = 'zoom';
    protected $primaryKey = 'id_zoom';
    protected $dates = [
        'created_at',
        'updated_at'
    ];
    public function post(): HasMany
    {
        return $this->hasMany(Post::class);
    }
}
