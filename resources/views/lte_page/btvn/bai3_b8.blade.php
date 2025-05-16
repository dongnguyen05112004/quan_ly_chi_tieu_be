@extends('lte_ltr.ltr')
@section('ltr')

<div class="row" style="width: 100%" >
    <div class="col-lg-4 col-md-6">
        <div class="card">
            <div class="card-header">
                <h4><p class="text-danger mt-2"><b>Them Moi dia diem</b></p></h4>
            </div>
            <div class="card-body">
                <label for="">Ten quoc gia</label>
                <input type="text" class="form-control">
                <label for="">Ten thanh pho</label>
                <input type="text" class="form-control">
                <label for="">Vi do</label>
                <input type="text" class="form-control">
                <label for="">Kinh do</label>
                <input type="text" class="form-control">
                <label for="">Tinh trang</label>
                <select class="form-select form-control mt-3" aria-label="Default select example">
                    <option value="1">Hoat dong</option>
                    <option value="2">Tam tat</option>
                </select>
            </div>
            <div class="card-footer text-end">
                <button class="btn btn-info">Them moi</button>
            </div>
        </div>
    </div>
    <div class="col-lg-8 col-md-6">
        <div class="card">
            <div class="card-header">
                <h4><p class="text-danger mt-2"><b>Danh sach the loai</b></p></h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover text-center">
                    <tbody>
                        <tr>
                            <th>#</th>
                            <th>Ten Quoc gia</th>
                            <th>Ten thanh pho</th>
                            <th>Kinh do</th>
                            <th>Vi do</th>
                            <th>Tinh trang</th>
                            <th>Hanh dong</th>
                        </tr>
                        <tr>
                            <th>1</th>
                            <th>Adult</th>
                            <th>adult</th>
                            <th>Kinh do</th>
                            <th>Vi do</th>
                            <th>
                                <button class="btn btn-success" type="button" data-toggle="modal"
                                    data-target="#exampleModal3"> Hoat dong</button>
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
    </div>
</div>
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-l">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Cap nhat dia diem</h1>
                <button type="button" class="btn-close btn btn-danger" data-dismiss="modal" aria-label="Close"> x </button>
            </div>
            <div class="modal-body">
                <label for="">Ten quoc gia</label>
                <input type="text" class="form-control">
                <label for="">Ten thanh pho</label>
                <input type="text" class="form-control">
                <label for="">Vi do</label>
                <input type="text" class="form-control">
                <label for="">Kinh do</label>
                <input type="text" class="form-control">
                <label for="">Tinh trang</label>
                <select class="form-select form-control mt-3" aria-label="Default select example">
                    <option value="1">Hoat dong</option>
                    <option value="2">Tam tat</option>
                </select>
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
                <h1 class="modal-title fs-5" id="exampleModalLabel">Xoa dia diem</h1>
                <button type="button" class="btn-close btn btn-danger" data-dismiss="modal" aria-label="Close"> x </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger" role="alert">
                    <p><i class="fa-sharp fa-solid fa-circle-exclamation"></i></p>
                    <p>Ban co muon xoa dia diem nay</p>
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
