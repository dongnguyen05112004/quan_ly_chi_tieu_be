@extends('lte_ltr.ltr')
@section('ltr')

<div class="card mt-2">
    <div class="card-header">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <h4><p class="mt-2 text-danger"><b>Danh sach tour</b></p></h4>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="text-right">
                    <button class="btn btn-info mt-2" type="button" data-toggle="modal"
                        data-target="#exampleModal">Them moi tour
                    </button>
                </div>
            </div>

        </div>


    </div>
    <div class="card-body">
        <table class="table table-bordered table-hover text-center">
            <tbody>
                <tr class="text-info">
                    <th>#</th>
                    <th>Ten tour</th>
                    <th>Hinh anh</th>
                    <th>Mo ta</th>
                    <th>Lich trinh</th>
                    <th>Gia tour</th>
                    <th>Ngay bat dau</th>
                    <th>Ngay ket thuc</th>
                    <th>Tinh trang</th>
                    <th>Hanh dong</th>
                </tr>
                <tr>
                    <th>1</th>
                    <th>Tour Da Nang</th>
                    <th>
                        <img src="https://upload.wikimedia.org/wikipedia/vi/9/90/One_Piece%2C_Volume_61_Cover_%28Japanese%29.jpg"
                            style="width: 30%" class="img-fluid img-thumbnail" alt="...">
                    </th>
                    <th>Nhieu qua ke khong het
                        Nhieu qua ke khong het


                    </th>
                    <th>Nhieu qua ke khong het
                        Nhieu qua ke khong het

                        </th>
                    <th>99.999.999</th>
                    <th>99/99/9999</th>
                    <th>99/99/9999</th>
                    <th><button class="btn btn-success">Dang mo</button></th>
                    <th>
                        <button class="btn btn-info" type="button" data-toggle="modal"
                            data-target="#exampleModal1">Cap nhat</button>
                        <button class="btn btn-danger" type="button" data-toggle="modal"
                            data-target="#exampleModal2">Xoa</button>
                    </th>
                </tr>
                <tr>
                    <th>2</th>
                    <th>Tour Hue</th>
                    <th>
                        <img src="https://upload.wikimedia.org/wikipedia/vi/9/90/One_Piece%2C_Volume_61_Cover_%28Japanese%29.jpg"
                            style="width: 30%" class="img-fluid img-thumbnail" alt="...">

                    </th>
                    <th>Nhieu qua ke khong het
                        Nhieu qua ke khong het

                        </th>
                    <th>Nhieu qua ke khong het
                        Nhieu qua ke khong het

                        </th>
                    <th>99.999.999</th>
                    <th>99/99/9999</th>
                    <th>99/99/9999</th>
                    <th><button class="btn btn-warning">tam tat</button></th>
                    <th>
                        <button class="btn btn-info" type="button" data-toggle="modal"
                            data-target="#exampleModal1">Cap nhat</button>
                        <button class="btn btn-danger" type="button" data-toggle="modal"
                            data-target="#exampleModal2">Xoa</button>
                    </th>
                </tr>
                <tr>
                    <th>3</th>
                    <th>Tour Nhat</th>
                    <th>
                        <img src="https://upload.wikimedia.org/wikipedia/vi/9/90/One_Piece%2C_Volume_61_Cover_%28Japanese%29.jpg"
                            style="width: 30%" class="img-fluid img-thumbnail" alt="...">

                    </th>
                    <th>Nhieu qua ke khong het
                        Nhieu qua ke khong het

                        </th>
                    <th>Nhieu qua ke khong het
                        Nhieu qua ke khong het

                        </th>
                    <th>99.999.999</th>
                    <th>99/99/9999</th>
                    <th>99/99/9999</th>
                    <th><button class="btn btn-warning">tam tat</button></th>
                    <th>
                        <button class="btn btn-info" type="button" data-toggle="modal"
                            data-target="#exampleModal1">Cap nhat</button>
                        <button class="btn btn-danger" type="button" data-toggle="modal"
                            data-target="#exampleModal2">Xoa</button>
                    </th>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Them moi Tour</h1>
                <button type="button" class="btn-close btn btn-danger" data-dismiss="modal" aria-label="Close">x</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6">
                        <label for="">Ten tour</label>
                        <input placeholder="Ten tour" type="text" class="form-control">
                        <label for="">Mo ta</label>
                        <textarea class="form-control" placeholder="Mo ta" id="floatingTextarea"></textarea>
                        <label for="">Hinh anh</label>
                        <input placeholder="Hinh anh" type="text" class="form-control">
                        <label for="">Tinh trang</label>
                        <select class="form-select form-control" aria-label="Default select example">
                            <option value="2">Dang mo</option>
                            <option value="3">Tam tat</option>
                        </select>
                    </div>
                    <div class="col-lg-6">
                        <label for="">Gia tour</label>
                        <input placeholder="Gia tour" type="text" class="form-control">
                        <label for="">lich trinh</label>
                        <textarea class="form-control" placeholder="Lich trinh" id="floatingTextarea"></textarea>
                        <label for="">Ngay bat dau</label>
                        <input type="date" class="form-control">
                        <label for="">Ngay ket thuc</label>
                        <input type="date" class="form-control">
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" type="button" data-dismiss="modal">Dong</button>
                <button class="btn btn-info" type="button" data-dismiss="modal">Xac nhan</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Cap nhat tour</h1>
                <button type="button" class="btn-close btn btn-danger" data-dismiss="modal" aria-label="Close">x</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6">
                        <label for="">Ten tour</label>
                        <input placeholder="Ten tour" type="text" class="form-control">
                        <label for="">Mo ta</label>
                        <textarea class="form-control" placeholder="Mo ta" id="floatingTextarea"></textarea>
                        <label for="">Hinh anh</label>
                        <input placeholder="Hinh anh" type="text" class="form-control">
                        <label for="">Tinh trang</label>
                        <select class="form-select form-control" aria-label="Default select example">
                            <option value="2">Dang mo</option>
                            <option value="3">Tam tat</option>
                        </select>
                    </div>
                    <div class="col-lg-6">
                        <label for="">Gia tour</label>
                        <input placeholder="Gia tour" type="text" class="form-control">
                        <label for="">lich trinh</label>
                        <textarea class="form-control" placeholder="Lich trinh" id="floatingTextarea"></textarea>
                        <label for="">Ngay bat dau</label>
                        <input type="date" class="form-control">
                        <label for="">Ngay ket thuc</label>
                        <input type="date" class="form-control">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" type="button" data-dismiss="modal">Dong</button>
                <button class="btn btn-info" type="button" data-dismiss="modal">Xac nhan</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-l">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Xoa tour</h1>
                <button type="button" class="btn-close btn btn-danger" data-dismiss="modal" aria-label="Close">x</button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger" role="alert">
                    <p><i class="fa-sharp fa-solid fa-circle-exclamation"></i></p>
                    <p>Ban co muon xoa phim nay?</p>
                    <p>Luu y: Dieu nay khong th hoan tac</p>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-info" type="button" data-dismiss="modal">Close</button>
                <button class="btn btn-danger" type="button"> Xac nhan Xoa</button>
            </div>
        </div>
    </div>
</div>

@endsection
