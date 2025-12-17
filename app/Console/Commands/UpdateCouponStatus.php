<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Coupon;
use Carbon\Carbon;

class UpdateCouponStatus extends Command
{
    protected $signature = 'coupons:update-status';
    protected $description = 'Automatically set expired coupons to INACTIVE';

    public function handle()
    {
        $expiredCoupons = Coupon::where('status', 'ACTIVE')
            ->whereDate('expiry_date', '<=', Carbon::today())
            ->update(['status' => 'INACTIVE']);
    }
}
