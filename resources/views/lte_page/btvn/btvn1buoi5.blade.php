@extends('lte_cork.cork')
@section('cork')

<div class="card">
    <div class="card-header ">
        <div class="row">
            <div class="col-lg-6 col-md-6"><p class="mt-2"><b>Danh sach cong viec</b></p></div>
            <div class="col-lg-6 col-md-6 text-right">
                <button class="btn btn-info" type="button" data-toggle="modal"
                            data-target="#exampleModal">Them moi</button>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-hover text-center">
            <tbody>
                <tr>
                    <th>#</th>
                    <th>Tieu de</th>
                    <th>Mo ta</th>
                    <th>Yeu cau</th>
                    <th>Muc luong</th>
                    <th>Dia diem</th>
                    <th>Ngay Dang</th>
                    <th>Han nop</th>
                    <th>Tinh trang</th>
                    <th>Hanh dong</th>
                </tr>
                <tr>
                    <th>1</th>
                    <th>Nhan vien IT</th>
                    <th>
                        eeeeeeeeeeeeeeeeeeeee
                        eeeeeeeeeeeeeeeeeeeee
                        eeeeeeeeeeeeeeeeeeeee
                        eeeeeeeeeeeeeeeeeeeee
                        eeeeeeeeeeeeeeeeeeeee
                    </th>
                    <th>
                        eeeeeeeeeeeeeeeeeeeee
                        eeeeeeeeeeeeeeeeeeeee
                        eeeeeeeeeeeeeeeeeeeee
                        eeeeeeeeeeeeeeeeeeeee
                        eeeeeeeeeeeeeeeeeeeee
                    </th>
                    <th>99.999.999VND/thang</th>
                    <th>Da nang</th>
                    <th>99/99/9999</th>
                    <th>99/99/9999</th>
                    <th>
                        <button class="btn btn-danger">Da het han</button>
                    </th>
                    <th>
                        <button class="btn btn-info" type="button" data-toggle="modal"
                            data-target="#exampleModal1">Cap
                            nhat</button>
                        <button class="btn btn-danger" type="button" data-toggle="modal"
                            data-target="#exampleModal2">Xoa</button>
                    </th>
                </tr>
                <tr>
                    <th>1</th>
                    <th>Nhan vien kinh doanh</th>
                    <th>
                        eeeeeeeeeeeeeeeeeeeee
                        eeeeeeeeeeeeeeeeeeeee
                        eeeeeeeeeeeeeeeeeeeee
                        eeeeeeeeeeeeeeeeeeeee
                        eeeeeeeeeeeeeeeeeeeee
                    </th>
                    <th>
                        eeeeeeeeeeeeeeeeeeeee
                        eeeeeeeeeeeeeeeeeeeee
                        eeeeeeeeeeeeeeeeeeeee
                        eeeeeeeeeeeeeeeeeeeee
                        eeeeeeeeeeeeeeeeeeeee

                    </th>
                    <th>99.999.999VND/thang</th>
                    <th>Da nang</th>
                    <th>99/99/9999</th>
                    <th>99/99/9999</th>
                    <th>
                        <button class="btn btn-danger">Da het han</button>
                    </th>
                    <th>
                        <button class="btn btn-info" type="button" data-toggle="modal"
                            data-target="#exampleModal1">Cap
                            nhat</button>
                        <button class="btn btn-danger" type="button" data-toggle="modal"
                            data-target="#exampleModal2">Xoa</button>
                    </th>
                </tr>
                <tr>
                    <th>2</th>
                    <th>Nhan vien kinh doanh</th>
                    <th>
                        eeeeeeeeeeeeeeeeeeeee
                        eeeeeeeeeeeeeeeeeeeee
                        eeeeeeeeeeeeeeeeeeeee
                        eeeeeeeeeeeeeeeeeeeee
                        eeeeeeeeeeeeeeeeeeeee
                    </th>
                    <th>
                        eeeeeeeeeeeeeeeeeeeee
                        eeeeeeeeeeeeeeeeeeeee
                        eeeeeeeeeeeeeeeeeeeee
                        eeeeeeeeeeeeeeeeeeeee
                        eeeeeeeeeeeeeeeeeeeee

                    </th>
                    <th>99.999.999VND/thang</th>
                    <th>Da nang</th>
                    <th>99/99/9999</th>
                    <th>99/99/9999</th>
                    <th>
                        <button class="btn btn-success">Dang tuyen</button>
                    </th>
                    <th>
                        <button class="btn btn-info" type="button" data-toggle="modal"
                            data-target="#exampleModal1">Cap
                            nhat</button>
                        <button class="btn btn-danger" type="button" data-toggle="modal"
                            data-target="#exampleModal2">Xoa</button>
                    </th>
                </tr>
            </tbody>
        </table>
    </div>

</div>
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Cap nhat cong viec</h1>
                <button type="button" class="btn-close btn btn-danger" data-dismiss="modal" aria-label="Close"> x </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <label><b>Tieu de</b></label>
                        <input type="text" class="form-control mt-3">
                        <label class="mt-2"><b>Mo ta</b></label>
                        <textarea class="form-control mt-2" rows="2"></textarea>
                        <label><b>Muc luong</b></label>
                        <input type="text" class="form-control mt-3">
                        <label class="mt-2"><b>Ngay nop</b></label>
                        <input type="date" class="form-control mt-3">
                    </div>
                    <div class="col-lg-6 col-md-6">
                         <label><b>Dia diem</b></label>
                        <input type="text" class="form-control mt-3">
                        <label class="mt-2"><b>Yeu cau</b></label>
                        <textarea class="form-control mt-2" rows="2"></textarea>
                        <label><b>Tinh trang</b></label>
                        <select class="form-select form-control mt-3" aria-label="Default select example">
                            <option value="1">Dang tuyen</option>
                            <option value="2">Da het han</option>
                          </select>
                        <label class="mt-2"><b>Ngay dang</b></label>
                        <input type="date" class="form-control mt-3">
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" type="button" data-dismiss="modal">Dong</button>
                <button class="btn btn-info" type="button" data-dismiss="modal">Cap nhat</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Them moi cong viec</h1>
                <button type="button" class="btn-close btn btn-danger" data-dismiss="modal" aria-label="Close"> x </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <label><b>Tieu de</b></label>
                        <input type="text" class="form-control mt-3">
                        <label class="mt-2"><b>Mo ta</b></label>
                        <textarea class="form-control mt-2" rows="2"></textarea>
                        <label><b>Muc luong</b></label>
                        <input type="text" class="form-control mt-3">
                        <label class="mt-2"><b>Ngay nop</b></label>
                        <input type="date" class="form-control mt-3">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <label><b>Dia diem</b></label>
                        <input type="text" class="form-control mt-3">
                        <label class="mt-2"><b>Yeu cau</b></label>
                        <textarea class="form-control mt-2" rows="2"></textarea>
                        <label><b>Tinh trang</b></label>
                        <select class="form-select form-control mt-3" aria-label="Default select example">
                            <option value="1">Dang tuyen</option>
                            <option value="2">Da het han</option>
                          </select>
                        <label class="mt-2"><b>Ngay dang</b></label>
                        <input type="date" class="form-control mt-3">
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
                <h1 class="modal-title fs-5" id="exampleModalLabel">Xoa nhan vien</h1>
                <button type="button" class="btn-close btn btn-danger" data-dismiss="modal" aria-label="Close"> x </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-primary" role="alert">
                    <p><i class="fa-sharp fa-solid fa-circle-exclamation"></i></p>
                    <p>Ban co muon xoa san pham nay</p>
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
