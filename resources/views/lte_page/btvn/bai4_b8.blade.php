@extends('lte_ltr.ltr')
@section('ltr')
    <div class="row mt-3">
        <div class="col-lg-6 col-md-6">
            <div id="slideshow" class="fullscreen">
                <!-- Below are the images in the gallery -->
                <div id="img-1" data-img-id="1" class="img-wrapper active"
                    style="background-image: url('https://salt.tikicdn.com/cache/600x600/ts/product/f7/58/e1/57a3333786f3b531a67fc6a4b1b56da3.jpg')">
                </div>
                <div id="img-2" data-img-id="2" class="img-wrapper"
                    style="background-image: url('https://img.tiki.vn/media/catalog/product/d/o/doraemon-tap-5_1.jpg')">
                </div>
                <div id="img-3" data-img-id="3" class="img-wrapper"
                    style="background-image: url('https://bizweb.dktcdn.net/thumb/1024x1024/100/523/087/products/8935244815665.png?v=1728886576313')">
                </div>
                <!-- Below are the thumbnails of above images -->
                <div class="thumbs-container bottom">
                    <div id="prev-btn" class="prev" style="padding: 40px 1%;">
                        <i class="fa fa-chevron-left fa-3x"></i>
                    </div>
                    <ul class="thumbs">
                        <li data-thumb-id="1" class="thumb active"
                            style="background-image: url('https://salt.tikicdn.com/cache/600x600/ts/product/f7/58/e1/57a3333786f3b531a67fc6a4b1b56da3.jpg')">
                        </li>
                        <li data-thumb-id="2" class="thumb"
                            style="background-image: url('https://img.tiki.vn/media/catalog/product/d/o/doraemon-tap-5_1.jpg')">
                        </li>
                        <li data-thumb-id="3" class="thumb"
                            style="background-image: url('https://bizweb.dktcdn.net/thumb/1024x1024/100/523/087/products/8935244815665.png?v=1728886576313')">
                        </li>
                    </ul>
                    <div id="next-btn" class="next" style="padding: 40px 1%;">
                        <i class="fa fa-chevron-right fa-3x"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="card ">
                <div class="card-body">
                    <div class="product-page-details text-danger">
                        <h3>Lich trinh va gia tour</h3>
                    </div>
                    <h5>CHon lich trinh va xem gia</h5>

                    <div class="row">
                        <div class="col-lg-6">
                            <input type="date" class="form-control">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mt-3 text-dark">
                                        <p>Nguoi lon > 10 tuoi</p>
                                    </div>
                                    <div class="mt-3 text-dark">
                                        <p>Tre em < 2 tuoi
                                        </p>
                                    </div>
                                    <div class="mt-3 text-dark">
                                        <p>Tre em 2-10 tuoi</p>
                                    </div>
                                    <div class="mt-3 text-dark">
                                        <p>Nguoi lon < 10 tuoi
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="text-right ">
                                        <div class="mt-3 text-warning">
                                            <p>x 99.999.999</p>
                                        </div>
                                        <div class="mt-3 text-warning">
                                            <p>x 99.999.999</p>
                                        </div>
                                        <div class="mt-3 text-warning">
                                            <p>x 99.999.999</p>
                                        </div>
                                        <div class="mt-3 text-warning">
                                            <p>x 99.999.999</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6">
                            <input type="date" class="form-control">
                            <input type="number" class="form-control mt-3">
                            <input type="number" class="form-control mt-3">
                            <input type="number" class="form-control mt-3">

                        </div>
                    </div>

                    <hr>
                    <p class="text-success">Lien he de xac nhan cho</p>
                    <div class="row">
                        <div class="col-lg-6">
                            <p><b>Tong gia tour:</b></p>
                        </div>
                        <div class="col-lg-6">
                            <div class="text-right text-warning">
                                <h3><b>99.999.999 VND</b></h3>
                            </div>
                        </div>
                    </div>
                    <button style="width: 100%" class="btn btn-danger">Yeu cau dat</button>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <p>Khoi hanh tu</p>
                            <h5>HO CHI MINH</h5>
                        </div>
                        <div class="col-lg-6">
                            <div class="text-right">
                                <p>Ma tour</p>
                                <p><b>TO456</b></p>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h3>Tour tron goi</h3>
                    <div class="row">
                        <div class="col-lg-4">
                            <p>Ve may bay</p>
                            <p>Bua an</p>
                            <p>Huong dan vien</p>
                        </div>
                        <div class="col-lg-4">
                            <p>Visa</p>
                            <p>Xe tham quan</p>
                            <p>Bao hiem du lich</p>
                        </div>
                        <div class="col-lg-4">
                            <p>Khach san</p>
                            <p>Ve tham gia</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
