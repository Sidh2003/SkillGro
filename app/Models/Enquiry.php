<?php

namespace App\Models;

use App\Models\BaseModel;

class Enquiry extends BaseModel
{
    protected $fillable = ['full_name', 'subject', 'email', 'mobile', 'message'];

}
