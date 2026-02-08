<!-- Start Breadcrumbs -->
<div class="breadcrumb-bar">
    <div class="container">
        <img src="{{ asset('frontend/assets/images/breadcrumb-bg.png') }}" alt="" class="breadcrumb-bg d-none d-lg-flex position-absolute top-0 end-0">
        <div class="row align-items-center text-center">
            <div class="col-md-12 col-12 breadcrumb-arrow">
                <h2 class="breadcrumb-title">{{ $label }}</h2>
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $label }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->
