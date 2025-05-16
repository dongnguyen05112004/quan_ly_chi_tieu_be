@extends('lte_ltr.ltr')
@section('ltr')
    <div class="row">
        <div class="col-lg-12">
            <img src="/anh/anhrong1.jpg" class="" style="width: 100%" alt="...">
        </div>
    </div>
   <div class="container">
    <div class="card"  style="margin-top: -30px;">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-3">
                    <label for="">Ban muon di dau?</label>
                    <select class="form-select form-control" aria-label="Default select example">
                        <option selected>Da Nang </option>
                        <option value="1">Hue</option>
                        <option value="2">Ha Noi</option>
                        <option value="3">Hoi An</option>
                    </select>
                </div>
                <div class="col-lg-4">
                    <label for="">Ngay khoi hanh - Ngay ket thuc</label>
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-lg-6">
                            <input type="date" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <label for="">Khoi hanh tu?</label>
                    <select class="form-select form-control" aria-label="Default select example">
                        <option selected>Da Nang </option>
                        <option value="1">Hue</option>
                        <option value="2">Ha Noi</option>
                        <option value="3">Hoi An</option>
                    </select>
                </div>
                <div class="col-lg-2">
                    <button class="btn btn-info form-control mt-3">Tim kiem</button>
                </div>
            </div>
        </div>

    </div>
   </div>
    <div class="row mt-3">
        <div class="col-lg-4">
            <div class="card">
                <img class="img-fluid" src="/anh/anhrong1.jpg" alt="blog-image">
                <div class="card-body">
                    <h5 class="card-title">Wildlife Photography</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet.</p>
                    <p class=""><span class="post-category text-info">Travel </span> | <span
                            class="post-meta-info">August 19, 2018</span></p>
                    <div class="row">
                        <div class="col-lg-6 mt-2">
                            <h5><b class="text-danger">9.999.999 VND</b></h5>
                        </div>
                        <div class="col-lg-6">
                            <div class="text-right mt-2">
                                <button class="btn btn-danger ">Dat tour</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <img class="img-fluid" src="/anh/anhrong1.jpg" alt="blog-image">
                <div class="card-body">
                    <h5 class="card-title">Wildlife Photography</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet.</p>
                    <p class=""><span class="post-category text-info">Travel </span> | <span
                            class="post-meta-info">August 19, 2018</span></p>
                    <div class="row">
                        <div class="col-lg-6 mt-2">
                            <h5><b class="text-danger">9.999.999 VND</b></h5>
                        </div>
                        <div class="col-lg-6">
                            <div class="text-right mt-2">
                                <button class="btn btn-danger ">Dat tour</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <img class="img-fluid" src="/anh/anhrong1.jpg" alt="blog-image">
                <div class="card-body">
                    <h5 class="card-title">Wildlife Photography</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet.</p>
                    <p class=""><span class="post-category text-info">Travel </span> | <span
                            class="post-meta-info">August 19, 2018</span></p>
                    <div class="row">
                        <div class="col-lg-6 mt-2">
                            <h5><b class="text-danger">9.999.999 VND</b></h5>
                        </div>
                        <div class="col-lg-6">
                            <div class="text-right mt-2">
                                <button class="btn btn-danger ">Dat tour</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection
