<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [
    'user_id','street_address','phone_number','district','province','country',
    'zip','education','start_year','end_year','education_id','job_name',
    'institution','start_date','end_date','street_address_job','ditrict_job','province_job',
    'country_job','zip_job','phone_job','email_job'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
