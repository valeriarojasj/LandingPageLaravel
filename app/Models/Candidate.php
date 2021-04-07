<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;
    protected $table = 'candidates';

    public function jobOpening() {
        return $this->belongsTo('App\Models\JobOpening','job_id');
    }
    public function downloadedBy() {
        return $this->belongsTo('App\Models\User','downloaded_by');
    }
    
}
