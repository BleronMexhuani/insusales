<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function LeadCustomFields()
    {
        return $this->hasMany(LeadCustomFields::class);
    }

    public function LeadCustomData()
    {
        return $this->hasMany(LeadCustomData::class);
    }
}
