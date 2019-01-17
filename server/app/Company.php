<?php

namespace App;
use App\Contact;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['name', 'address'];

    public function contact()
    {
        return $this->hasOne(Contact::class);
    }
}
