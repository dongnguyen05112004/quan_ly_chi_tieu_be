@extends('lte_cuba.cuba')
@section('cuba')
    <div class="container-fluid">
        <div class="card mt-3">
            <div class="card-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <p class=" fs-3 mt-4"><b>Danh sach phim</b></p>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="text-end">
                            <button class="btn btn-info mt-4" type="button" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">Them moi
                            </button>
                        </div>
                    </div>

                </div>


            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover text-center">
                    <tbody>
                        <tr>
                            <th>#</th>
                            <th>Ten film</th>
                            <th>Slug film</th>
                            <th>Hinh anh</th>
                            <th>The loai</th>
                            <th>Nha san xuat</th>
                            <th>So tap</th>
                            <th>Nam phat hanh </th>
                            <th>Tinh trang</th>
                            <th>Hanh dong</th>
                        </tr>
                        <tr>
                            <th>1</th>
                            <th>Attack on titan</th>
                            <th>Attack-on-titan</th>
                            <th>
                                <img src="https://upload.wikimedia.org/wikipedia/vi/9/90/One_Piece%2C_Volume_61_Cover_%28Japanese%29.jpg"
                                    style="width: 30%" class="img-fluid img-thumbnail" alt="...">
                            </th>
                            <th>Adult</th>
                            <th>Dong studio</th>
                            <th>12</th>
                            <th>2000</th>
                            <th><button class="btn btn-warning">tam tat</button></th>
                            <th>
                                <button class="btn btn-info" type="button" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal1">Cap nhat</button>
                                <button class="btn btn-danger" type="button" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal2">Xoa</button>
                            </th>
                        </tr>
                        <tr>
                            <th>2</th>
                            <th>One piece</th>
                            <th>one-piece</th>
                            <th>
                                <img src="https://upload.wikimedia.org/wikipedia/vi/9/90/One_Piece%2C_Volume_61_Cover_%28Japanese%29.jpg"
                                    style="width: 30%" class="img-fluid img-thumbnail" alt="...">

                            </th>
                            <th>Adult</th>
                            <th>Dong studio</th>
                            <th>12</th>
                            <th>2000</th>
                            <th><button class="btn btn-warning">tam tat</button></th>
                            <th>
                                <button class="btn btn-info" type="button" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal1">Cap nhat</button>
                                <button class="btn btn-danger" type="button" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal2">Xoa</button>
                            </th>
                        </tr>
                        <tr>
                            <th>3</th>
                            <th>Naruto</th>
                            <th>naruto</th>
                            <th>
                                <img src="https://upload.wikimedia.org/wikipedia/vi/9/90/One_Piece%2C_Volume_61_Cover_%28Japanese%29.jpg"
                                    style="width: 30%" class="img-fluid img-thumbnail" alt="...">

                            </th>
                            <th>Adult</th>
                            <th>Dong studio</th>
                            <th>12</th>
                            <th>2000</th>
                            <th><button class="btn btn-warning">tam tat</button></th>
                            <th>
                                <button class="btn btn-info" type="button" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal1">Cap nhat</button>
                                <button class="btn btn-danger" type="button" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal2">Xoa</button>
                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Them moi phim</h1>
                    <button type="button" class="btn-close btn btn-danger" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="">Ten phim</label>
                            <input placeholder="Ten phim" type="text" class="form-control">
                            <label for="">Slug phim</label>
                            <input placeholder="Slug phim" type="text" class="form-control">
                            <label for="">Hinh anh</label>
                            <input placeholder="Hinh anh" type="text" class="form-control">
                            <label for="">Tinh trang</label>
                            <select class="form-select" aria-label="Default select example">
                                <option value="2">Dang ra</option>
                                <option value="3">Tam tat</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label for="">Nam san xuat</label>
                            <input placeholder="Nam san xuat" type="text" class="form-control">
                            <label for="">So tap</label>
                            <input placeholder="So tap" type="text" class="form-control">
                            <label for="">The loai</label>
                            <input placeholder="The loai" type="text" class="form-control">
                            <label for="">Nam phat hanh</label>
                            <input placeholder="Nam phat hanh" type="text" class="form-control">

                        </div>

                    </div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-bs-dismiss="modal">Dong</button>
                    <button class="btn btn-info" type="button" data-bs-dismiss="modal">Xac nhan</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Cap nhat phim</h1>
                    <button type="button" class="btn-close btn btn-danger" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="">Ten phim</label>
                            <input placeholder="Ten phim" type="text" class="form-control">
                            <label for="">Slug phim</label>
                            <input placeholder="Slug phim" type="text" class="form-control">
                            <label for="">Hinh anh</label>
                            <input placeholder="Hinh anh" type="text" class="form-control">
                            <label for="">Tinh trang</label>
                            <select class="form-select" aria-label="Default select example">
                                <option value="2">Dang ra</option>
                                <option value="3">Tam tat</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label for="">Nam san xuat</label>
                            <input placeholder="Nam san xuat" type="text" class="form-control">
                            <label for="">So tap</label>
                            <input placeholder="So tap" type="text" class="form-control">
                            <label for="">The loai</label>
                            <input placeholder="The loai" type="text" class="form-control">
                            <label for="">Nam phat hanh</label>
                            <input placeholder="Nam phat hanh" type="text" class="form-control">

                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-bs-dismiss="modal">Dong</button>
                    <button class="btn btn-info" type="button" data-bs-dismiss="modal">Xac nhan</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-l">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Xoa phim</h1>
                    <button type="button" class="btn-close btn btn-danger" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger" role="alert">
                        <p><i class="fa-sharp fa-solid fa-circle-exclamation"></i></p>
                        <p>Ban co muon xoa phim nay?</p>
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
