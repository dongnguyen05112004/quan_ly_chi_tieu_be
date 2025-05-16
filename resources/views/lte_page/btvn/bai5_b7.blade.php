@extends('lte_cuba.cuba')
@section('cuba')
    <div class="row">
        <div class="col-lg-4 col-md-6">
            <div class="card text-center">
                <div class="cardheader"></div>
                <div class="user-image">
                    <div class="avatar mt-3"><img alt="" src="https://images-na.ssl-images-amazon.com/images/I/81bj2hlah2L.jpg" style="width: 50%"></div>
                    <div class="icon-wrapper mt-3"><i class="icofont icofont-pencil-alt-5"></i></div>
                </div>
                <div class="info">
                    <div class="user-designation mt-3">
                        <div class="title"><a target="_blank" href="" data-bs-original-title="" title="">Mark
                                jecno</a></div>
                        <div class="desc">designer</div>
                    </div>
                </div>
                <hr>
                <div class="social-media">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="#" data-bs-original-title="" title=""><i
                                    class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#" data-bs-original-title="" title=""><i
                                    class="fa fa-google-plus"></i></a></li>
                        <li class="list-inline-item"><a href="#" data-bs-original-title="" title=""><i
                                    class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#" data-bs-original-title="" title=""><i
                                    class="fa fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#" data-bs-original-title="" title=""><i
                                    class="fa fa-rss"></i></a></li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="ttl-info text-start">
                            <h6><i class="fa fa-envelope"></i>&nbsp;&nbsp;&nbsp;Email</h6>
                            <span>Marekjecno@yahoo.com</span>
                        </div>
                        <div class="ttl-info text-start">
                            <h6><i class="fa fa-calendar"></i>&nbsp;&nbsp;&nbsp;BOD</h6><span>02 January
                                1988</span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ttl-info text-start">
                            <h6><i class="fa fa-phone"></i>&nbsp;&nbsp;&nbsp;Contact Us</h6><span>India +91
                                123-456-7890</span>
                        </div>
                        <div class="ttl-info text-start">
                            <h6><i class="fa fa-location-arrow"></i>&nbsp;&nbsp;&nbsp;Location</h6><span>B69
                                Near
                                Schoool Demo Home</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-6">
            <form class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Cap nhat profile</h4>
                    <div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"
                            data-bs-original-title="" title=""><i class="fe fe-chevron-up"></i></a><a
                            class="card-options-remove" href="#" data-bs-toggle="card-remove"
                            data-bs-original-title="" title=""><i class="fe fe-x"></i></a></div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Ho ten</label>
                                <input class="form-control" type="text" placeholder="nguyen van a"
                                    data-bs-original-title="" title="">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="mb-3">
                                <label class="form-label">SDT</label>
                                <input class="form-control" type="text" placeholder="0905.xxx.xxx"
                                    data-bs-original-title="" title="">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Ngay sinh</label>
                                <input class="form-control" type="date" placeholder="Company"
                                    data-bs-original-title="" title="">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input class="form-control" type="text" placeholder="Email"
                                    data-bs-original-title="" title="">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Dia chi</label>
                                <input class="form-control" type="text" placeholder="Dia chi"
                                    data-bs-original-title="" title="">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div>
                                <label class="form-label">Ghi chu</label>
                                <textarea class="form-control" rows="5" placeholder="Ghi chu"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-end">
                    <button class="btn btn-primary" type="submit" data-bs-original-title="" title="">Update
                        Profile</button>
                </div>
            </form>
        </div>
    </div>


@endsection
