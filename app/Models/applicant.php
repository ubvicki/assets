<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class applicant extends Model
{
    use HasFactory;
    protected $table = 'applicant';
    protected $primarykey = 'id';
    protected $guarded = [];
    public $timestamps = false ;

    public function contact():HasOne{
        return $this->hasOne(contact::class);
    }

    public function details():HasOne{
        return $this->hasOne(details::class);
    }
}
