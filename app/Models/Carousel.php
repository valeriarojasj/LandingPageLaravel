<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    use HasFactory;
    protected $table = 'carousel';
    protected $fillable =['image_url'];

    public function jobOpening() {
        return $this->belongsTo('App\Models\JobOpening','job_opening_id');
    }
    public function updatedBy() {
        return $this->belongsTo('App\Models\User','updated_by');
    }
}
