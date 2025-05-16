@extends('lte_horizon.horizon')
@section('baitap')
    <div id="content-page" class="content-page">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <p><b>Them Moi Review</b></p>
                    </div>
                    <div class="card-body">
                        <label for="">Avatar</label>
                        <input type="text" class="form-control">
                        <label for="">Ho Ten</label>
                        <input type="text" class="form-control">
                        <label for="">Noi Dung</label>
                        <input type="text" class="form-control">
                        <label for="">Sao danh gia</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="card-footer text-end">
                        <button class="btn btn-info">Them moi</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <p><b>Danh sach review</b></p>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Some">
                            <button class="btn" type="submit"><i class="bx bx-search"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover text-center">
                            <tbody>
                                <tr>
                                    <th>#</th>
                                    <th>Avarta</th>
                                    <th>Ho Ten</th>
                                    <th>Noi dung</th>
                                    <th>Sao danh gia</th>
                                    <th>Hanh dong</th>
                                </tr>
                                <tr>
                                    <th>1</th>
                                    <th><img src="https://storage.googleapis.com/pod_public/1300/173321.jpg" width="48" height="48" class="rounded-circle" alt=""></th>
                                    <th>Nguyen Van A</th>
                                    <th>
                                        nguyenvana@gmail.com
                                        nguyenvana@gmail.com
                                        nguyenvana@gmail.com
                                        nguyenvana@gmail.com
                                        nguyenvana@gmail.com
                                    </th>
                                    <th>5</th>
                                    <th>
                                        <button class="btn btn-info" type="button" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal1">Cap
                                            nhat</button>
                                        <button class="btn btn-danger" type="button" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal2">Xoa</button>
                                    </th>
                                </tr>
                                <tr>
                                    <th>1</th>
                                    <th><img src="https://storage.googleapis.com/pod_public/1300/173321.jpg" width="48" height="48" class="rounded-circle" alt=""></th>
                                    <th>Nguyen Van A</th>
                                    <th>nguyenvana@gmail.com
                                        nguyenvana@gmail.com
                                        nguyenvana@gmail.com
                                        nguyenvana@gmail.com
                                        nguyenvana@gmail.com

                                    </th>
                                    <th>4</th>

                                    <th>
                                        <button class="btn btn-info" type="button" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal1">Cap
                                            nhat</button>
                                        <button class="btn btn-danger" type="button" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal2">Xoa</button>
                                    </th>
                                </tr>
                                <tr>
                                    <th>1</th>
                                    <th><img src="https://storage.googleapis.com/pod_public/1300/173321.jpg" width="48" height="48" class="rounded-circle" alt=""></th>
                                    <th>Nguyen Van A</th>
                                    <th>
                                        nguyenvana@gmail.com
                                        nguyenvana@gmail.com
                                        nguyenvana@gmail.com
                                        nguyenvana@gmail.com
                                        nguyenvana@gmail.com
                                    </th>
                                    <th>3</th>

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
                    <div class="card-footer">

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-l">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Cap nhat nhan vien</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                </div>
                <div class="modal-body">
                    <label><b>Avatar</b></label>
                    <input type="text" class="form-control mt-3">
                    <label class="mt-2"><b>Ho Ten</b></label>
                    <input type="text" class="form-control mt-3">
                    <label><b>Noi dung</b></label>
                    <input type="text" class="form-control mt-3">
                    <label class="mt-2"><b>Sao danh gia</b></label>
                    <input type="number" class="form-control mt-3">
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Xoa nhan vien</h1>
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

@endsection
