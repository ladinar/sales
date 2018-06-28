<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    protected $table = 'sales_lead_register';
    protected $primaryKey = 'lead_id';
    protected $fillable = ['lead_id', 'nik', 'contact', 'opp_name', 'closing_date', 'amount'];
}
