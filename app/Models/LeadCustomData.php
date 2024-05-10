<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeadCustomData extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function customfields()
    {
        return $this->hasOne(LeadCustomFields::class,'id','lead_custom_field_id');
    }
}
