<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class details extends Model
{
    use HasFactory;
    protected $table = 'details';
    protected $guarded = [];
    public $timestamps = false ;
    protected $foreignkey = 'applicant_id';

    public function applicant() {
        return $this->belongsTo(applicant::class);
    }
}
