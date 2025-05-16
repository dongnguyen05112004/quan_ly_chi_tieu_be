@extends('lte_horizon.horizon')
@section('baitap')

<div class="row">
    <div class="col-lg-4 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://www.bmwlevanluong.vn/wp-content/uploads/sites/6/2024/02/bmw-320i-m-sport-2024-bmw-le-van-luong-ngoai-that-1.jpg" alt="Admin" class="rounded-circle p-1 bg-primary" width="200" height="200">
                    <div class="mt-3">
                        <h4>Nguyen van a</h4>
                        <p class="text-secondary mb-1"> DZ Full Stack Developer</p>
                        <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-8 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Ho Ten</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" value="Nguyen van a">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" value="nguyenvana@gmail.com">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">SDT</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" value="(239) 816-9029">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Dia chi</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" value="345 nguyen cong tru">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-9 text-secondary">
                        <input type="button" class="btn btn-primary px-4" value="Luu Thong tin">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
