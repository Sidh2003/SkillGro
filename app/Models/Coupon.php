<?php

namespace App\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Coupon extends BaseModel
{
    use HasFactory;

    protected $table = 'coupons';
    protected $fillable = ['status', 'coupon_code', 'discount_percentage', 'package_type', 'expiry_date', 'start_date'];
}
