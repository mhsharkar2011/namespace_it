
<div class="col-md-6 col-sm-6 col-lg-6 col-xl-{{ $col ?? '3' }}">
    <div class="card text-{{ $color ?? 'white' }} shadow mb-5 rounded-3 border-secondary bg-{{ $bgcolor='dark' }} o-hidden">
        <div class="card-body">  
            <span class="dash-widget-icon"><i class="{{ $icon }}"></i></span>
            <div class="dash-widget-info">
                <h3>{{ $count }}</h3>
                <span>{{ $label }}</span>
            </div>
        </div>
    </div>
</div>