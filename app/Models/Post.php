<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    public $timestamps = false;
    protected $fillable = ['name_post','img_post','video_post','name_teacher','img_teacher','date_post','id_object','id_zoom'];
    protected $table = 'post';
    protected $primaryKey = 'id_post';
    public function objects(): BelongsTo
    {
        return $this->belongsTo(Objects::class,'id_object');
    }
    public function zoom(): BelongsTo
    {
        return $this->belongsTo(Zoom::class,'id_zoom');
    }
}
