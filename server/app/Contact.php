<?php

namespace App;
use App\Company;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'birth_date',
        'first_name',
        'last_name',
        'function',
        'phone_number',
        'email_address',
        'id_company',
        'city',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

}
