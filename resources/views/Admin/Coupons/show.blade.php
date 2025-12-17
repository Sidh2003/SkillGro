<div class="row">
    <div class="col-lg-8 order-last">
        <ul class="list-unstyled mb-0">
            <li class="d-flex align-items-center gap-3 mb-3">
                <i class="fas fa-tag text-dark fs-5"></i>
                <span class="fw-bold">Package Type:</span>
                <span class="fs-5 text-muted">{{ $coupon->package_type }}</span>
            </li>
            <li class="d-flex align-items-center gap-3 mb-3">
                <i class="fas fa-tag text-dark fs-5"></i>
                <span class="fw-bold">Coupon Code:</span>
                <span class="fs-5 text-muted">{{ $coupon->coupon_code }}</span>
            </li>

            <li class="d-flex align-items-center gap-3 mb-3">
                <i class="fas fa-percent text-dark fs-5"></i>
                <span class="fw-bold">Discount:</span>
                <span class="fs-5 text-muted">{{ $coupon->discount_percentage }}%</span>
            </li>

            <li class="d-flex align-items-center gap-3 mb-3">
                <i class="fas fa-calendar-alt text-dark fs-5"></i>
                <span class="fw-bold">Expiry Date:</span>
                <span class="fs-5 text-muted">{{ \Carbon\Carbon::parse($coupon->expiry_date)->format('d M Y') }}</span>
            </li>
        </ul>
    </div>
</div>
