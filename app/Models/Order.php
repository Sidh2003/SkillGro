<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['mobile', 'email', 'coupon_code', 'price', 'course_name', 'full_name', 'razorpay_order_id'];
}
