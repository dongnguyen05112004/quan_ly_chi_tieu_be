@extends('lte_cork.cork')
@section('cork')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div id="invoice">
                    <div class="toolbar hidden-print">
                        <div class="text-right">
                            <div class="row">
                                <div class="col-lg-3 col-md-6">
                                    <div class="position-relative search-bar-box">
                                        <input type="text" class="form-control search-control"
                                            placeholder="tim cong viec"> <span
                                            class="position-absolute top-50 search-show translate-middle-y"><i
                                                class="bx bx-search"></i></span>
                                        <span class="position-absolute top-50 search-close translate-middle-y"><i
                                                class="bx bx-x"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="input-group mb-4">
                                        <input type="text" class="form-control" placeholder="tat ca linh vuc"
                                            aria-label="Text input with segmented dropdown button">
                                        <div class="input-group-append">
                                            <button type="button"
                                                class="btn btn-info dropdown-toggle dropdown-toggle-split"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-chevron-down">
                                                    <polyline points="6 9 12 15 18 9"></polyline>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                                                <div role="separator" class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="input-group mb-4">
                                        <input type="text" class="form-control" placeholder="tat ca muc luong"
                                            aria-label="Text input with segmented dropdown button">
                                        <div class="input-group-append">
                                            <button type="button"
                                                class="btn btn-info dropdown-toggle dropdown-toggle-split"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-chevron-down">
                                                    <polyline points="6 9 12 15 18 9"></polyline>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                                                <div role="separator" class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6"><button type="button" class="btn btn-danger"
                                        style="width: 100%"><i class="fa fa-file-pdf-o"></i>Tim kiem</button></div>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="card">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="https://storage.googleapis.com/pod_public/1300/173321.jpg" alt="..."
                                            class="card-img ">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-9 col-md-4">
                                                    <h5 class="card-title">DZFullstack</h5>
                                                    <p class="card-text">This l content. This content is a little bit
                                                        longer.</p>
                                                    <p class="card-text"><small class="text-muted">Last updated 3 mins
                                                            ago</small></p>
                                                    <p class="card-text"><small class="text-muted">Da nang</small></p>
                                                </div>
                                                <div class="col-lg-3 col-md-4 ">
                                                    <h5 class="card-title">10-20 Trieu</h5>
                                                    <button class="btn btn-danger">Ung tuyen</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="https://storage.googleapis.com/pod_public/1300/173321.jpg" alt="..."
                                            class="card-img ">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-9 col-md-4">
                                                    <h5 class="card-title">FPT</h5>
                                                    <p class="card-text">This l content. This content is a little bit
                                                        longer.</p>
                                                    <p class="card-text"><small class="text-muted">Last updated 3 mins
                                                            ago</small></p>
                                                    <p class="card-text"><small class="text-muted">Da nang</small></p>
                                                </div>
                                                <div class="col-lg-3 col-md-4 ">
                                                    <h5 class="card-title">15-20 Trieu</h5>
                                                    <button class="btn btn-danger">Ung tuyen</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="https://storage.googleapis.com/pod_public/1300/173321.jpg" alt="..."
                                            class="card-img ">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-9 col-md-4">
                                                    <h5 class="card-title">Duy Tan</h5>
                                                    <p class="card-text">This l content. This content is a little bit
                                                        longer.</p>
                                                    <p class="card-text"><small class="text-muted">Last updated 3 mins
                                                            ago</small></p>
                                                    <p class="card-text"><small class="text-muted">Da nang</small></p>
                                                </div>
                                                <div class="col-lg-3 col-md-4 ">
                                                    <h5 class="card-title">10-30 Trieu</h5>
                                                    <button class="btn btn-danger">Ung tuyen</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <p><b>Top cong ti noi bat</b></p>
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="https://storage.googleapis.com/pod_public/1300/173321.jpg"
                                            class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">FPT</h5>
                                            <p class="card-text"><small class="text-body-secondary">3 viec lam</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="https://storage.googleapis.com/pod_public/1300/173321.jpg"
                                            class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">DZFullstack</h5>
                                            <p class="card-text"><small class="text-body-secondary">5 viec lam</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="https://storage.googleapis.com/pod_public/1300/173321.jpg"
                                            class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Duy Tan</h5>
                                            <p class="card-text"><small class="text-body-secondary">10 viec lam</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="https://storage.googleapis.com/pod_public/1300/173321.jpg"
                                            class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">HOA van</h5>
                                            <p class="card-text"><small class="text-body-secondary">3 viec lam</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="https://storage.googleapis.com/pod_public/1300/173321.jpg"
                                            class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Car Muscle</h5>
                                            <p class="card-text"><small class="text-body-secondary">6 viec lam</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="https://storage.googleapis.com/pod_public/1300/173321.jpg"
                                            class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">YS air</h5>
                                            <p class="card-text"><small class="text-body-secondary">20 viec lam</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
