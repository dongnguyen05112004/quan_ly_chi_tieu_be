@extends('lte_horizon.horizon')
@section('baitap')
    <div id="content-page" class="content-page">
        <div class="row ">
            <div class="col-lg-12 text-end">
                <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal3"> Them
                    moi</button>
            </div>
        </div>

        <div class="card border-primary border-top border-3 border-0 mt-3">
            <div class="card-body">
                <h5 class="card-title text-primary">Danh sach san pham</h5>
                <hr>
                <table class="table table-bordered table-hover text-center">
                    <tbody>
                        <tr>
                            <th>#</th>
                            <th>Ten san pham</th>
                            <th>Slug san pham</th>
                            <th>Gia ban</th>
                            <th>SO luong</th>
                            <th>Hinh anh</th>
                            <th>Mo ta</th>
                            <th>Tinh trang</th>
                            <th>Hanh dong</th>
                        </tr>
                        <tr>
                            <th>1</th>
                            <th>Iphone 20xxx Pro Max</th>
                            <th>iphone-20xxx-pro-max</th>
                            <th>99.999.999 đ</th>
                            <th>1</th>
                            <th><img src="https://storage.googleapis.com/pod_public/1300/173321.jpg" width="48" height="48" class="rounded-circle" alt=""></th>
                            <th><i class="fa-sharp fa-solid fa-circle-info"></i></th>

                            <th>
                                <button class="btn btn-success" type="button" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal3"> Yes</button>
                            </th>
                            <th>
                                <button class="btn btn-info" type="button" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal1">Cap
                                    nhat</button>
                                <button class="btn btn-danger" type="button" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal2">Xoa</button>
                            </th>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Cap nhat san pham</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                </div>
                <div class="modal-body">


                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <label><b>Ten san pham</b></label>
                            <input type="text" class="form-control mt-3">
                            <label class="mt-2"><b>Gia ban</b></label>
                            <input type="text" class="form-control mt-3">
                            <label class="mt-2"><b>Hinh anh</b></label>
                            <input type="text" class="form-control mt-3">
                            <label class="mt-2"><b>Tinh trang</b></label>
                            <select class="form-select" aria-label="Default select example">
                                <option value="1">yes</option>
                                <option value="2">no</option>
                            </select>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <label><b>San pham</b></label>
                            <input type="text" class="form-control mt-3">
                            <label><b>So luong</b></label>
                            <input type="text" class="form-control mt-3">
                            <label class="mt-2"><b>Danh muc</b></label>
                            <input type="number" class="form-control mt-3">
                            <label class="mt-2"><b>Mo ta</b></label>
                            <textarea class="form-control mt-2" rows="5"></textarea>
                        </div>

                    </div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-bs-dismiss="modal">Dong</button>
                    <button class="btn btn-info" type="button" data-bs-dismiss="modal">Cap nhat</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-l">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Xoa san pham</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-primary" role="alert">
                        <p><i class="fa-sharp fa-solid fa-circle-exclamation"></i></p>
                        <p>Ban co muon xoa san pham nay</p>
                        <p>Luu y: Dieu nay khong th hoan tac</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-info" type="button" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-danger" type="button"> Xac nhan Xoa</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Cap nhat nhan vien</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                </div>
                <div class="modal-body">


                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <label><b>Ten san pham</b></label>
                            <input type="text" class="form-control mt-3">
                            <label class="mt-2"><b>Gia ban</b></label>
                            <input type="text" class="form-control mt-3">
                            <label class="mt-2"><b>Hinh anh</b></label>
                            <input type="text" class="form-control mt-3">
                            <label class="mt-2"><b>Tinh trang</b></label>
                            <select class="form-select" aria-label="Default select example">
                                <option value="1">yes</option>
                                <option value="2">no</option>
                            </select>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <label><b>San pham</b></label>
                            <input type="text" class="form-control mt-3">
                            <label><b>So luong</b></label>
                            <input type="text" class="form-control mt-3">
                            <label class="mt-2"><b>Danh muc</b></label>
                            <input type="number" class="form-control mt-3">
                            <label class="mt-2"><b>Mo ta</b></label>
                            <textarea class="form-control mt-2" rows="5"></textarea>
                        </div>

                    </div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-bs-dismiss="modal">Dong</button>
                    <button class="btn btn-info" type="button" data-bs-dismiss="modal">Cap nhat</button>
                </div>
            </div>
        </div>
    </div>
@endsection
