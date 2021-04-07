<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobUser extends Model
{
    use HasFactory;
    protected $table = 'job_users';

    protected $fillable = [
        'job_id',
        'user_id'
    ];
    
    public function jobOpening() {
        return $this->belongsTo('App\Models\JobOpening','job_id');
    }
    public function user() {
        return $this->belongsTo('App\Models\User','user_id');
    }
}
