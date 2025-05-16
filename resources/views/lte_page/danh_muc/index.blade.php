@extends('lte_template.master')
@section('noi-dung')
<section>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 col-md-12 mt-3">
                    <div class="card card-info ">
                        <div class="card-header ">
                                <b><P class="mt-3">THEM MOI DANH MUC SAN PHAM</P></b>
                        </div>
                        <div class="card-body ">
                                <label for="">Ten danh muc</label>
                                <input type="text" class="form-control">
                                <label for="">Slug san pham</label>
                                <input type="text" class="form-control">
                                <label for="">Hinh snh danh muc</label>
                                <input type="text" class="form-control">
                                <label for="">Tinh trang</label>
                                <select class="form-control">
                                    <option value="0">gg</option>
                                    <option value="1">ga</option>
                                    <option value="2">non</option>
                                    <option value="3">tuoi</option>
                                </select>
                        </div>
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-info">Them moi</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 mt-3">
                    <div class="card">
                        <div class="card-header card-info">
                            <b><P class="mt-3">THEM MOI DANH MUC SAN PHAM</P></b>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text">#</th>
                                        <th>Ten danh muc</th>
                                        <th>Slug danh muc</th>
                                        <th>Hinh anh</th>
                                        <th>Tinh trang</th>
                                        <th>Hanh dong</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="align-middle">1</td>
                                        <td class="align-middle">Iphone</td>
                                        <td class="align-middle">iphone</td>
                                        <td class="align-middle"> <img style="width: 50px" src="/assets_lte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"></td>
                                        <td class="align-middle">
                                            <button type="submit" class="btn btn-info">Hien thi</button>
                                        </td>
                                        <td class="align-middle">
                                            <button type="submit" class="btn btn-info">Cap nhat</button>
                                            <button type="submit" class="btn btn-info">Huy bo</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">1</td>
                                        <td class="align-middle">Iphone</td>
                                        <td class="align-middle">iphone</td>
                                        <td class="align-middle"> <img style="width: 50px" src="/assets_lte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"></td>
                                        <td class="align-middle">
                                            <button type="submit" class="btn btn-info">Hien thi</button>
                                        </td>
                                        <td class="align-middle">
                                            <button type="submit" class="btn btn-info">Cap nhat</button>
                                            <button type="submit" class="btn btn-info">Huy bo</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">1</td>
                                        <td class="align-middle">Iphone</td>
                                        <td class="align-middle">iphone</td>
                                        <td class="align-middle"> <img style="width: 50px" src="/assets_lte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"></td>
                                        <td class="align-middle">
                                            <button type="submit" class="btn btn-info">Hien thi</button>
                                        </td>
                                        <td class="align-middle">
                                            <button type="submit" class="btn btn-info">Cap nhat</button>
                                            <button type="submit" class="btn btn-info">Huy bo</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

