@extends('layouts.main')
@section('container')
    <div class="content">
        <div class="container-fluid" style="margin-top: 50px; font-family: Poppins;0">
            <div class="py-2"
                style="font-size: 32px; background-color: rgba(59, 75, 101, 1); width: max-content; color: white; font-weight: bolder; 
                padding-left: 70px; padding-right: 70px; ">
                STOK DARAH
            </div>
            <div class="row mt-5">
                <div class="col" style="display: flex;">
                    <div class="btn-group">
                        <button type="button" class=""
                            style="border-top-left-radius: 20px; border: none; padding: 10px; padding-left: 15px; color: rgba(94, 94, 94, 1); ">Cari
                            Golongan
                            Darah....</button>
                        <button type="button" class="dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"
                            aria-expanded="false"
                            style="border-bottom-right-radius: 20px; border: none; background-color: rgba(59, 75, 101, 1); color: white; width: 45px">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col" style="display: flex;">
                    <div class="btn-group">
                        <button type="button"
                            style="border-radius: 40px; border: none; background-color: rgba(59, 75, 101, 1); color: white; width: 45px; 
                        height: 45px;position: absolute; font-weight: bold;">
                            <span class="visually">+</span>
                        </button>
                        <button type="button" class=""
                            style="border-bottom-right-radius: 20px; border-top-left-radius: 40px; border-bottom-left-radius: 40px; 
                        border: none; padding: 10px; color: rgba(94, 94, 94, 1); padding-left: 60px; font-weight: bold;"
                            data-bs-toggle="modal" data-bs-target="#tambahDarah">Tambah</button>
                        <div class="modal fade" id="tambahDarah" tabindex="-1" aria-labelledby="tambahDarahLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <form action="">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="tambahDarahLabel"
                                                style="font-weight: bold; color: rgba(59, 75, 101, 1);">
                                                Tambah Stok Darah</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col">
                                                    <input type="text" class="form-control" placeholder="Nomor Pendonor">
                                                </div>
                                                <div class="col">
                                                    <input type="text" class="form-control"
                                                        placeholder="Jumlah Donor Darah">
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col">
                                                    <label for="" style="color: gray">Tanggal Donor</label>
                                                    <input type="date" class="form-control" placeholder="Tanggal">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-success">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" style="display: flex;">
                    <div class="btn-group">
                        <button type="button"
                            style="border-radius: 40px; border: none; background-color: rgba(59, 75, 101, 1); color: white; width: 45px; height: 45px;position: absolute; font-weight: bold;">
                            <span class="visually">-</span>
                        </button>
                        <button type="button" class=""
                            style="border-bottom-right-radius: 20px; border-top-left-radius: 40px; border-bottom-left-radius: 40px; border: none; padding: 10px; color: rgba(94, 94, 94, 1); padding-left: 60px; font-weight: bold;"
                            data-bs-toggle="modal" data-bs-target="#ambilDarah">Ambil</button>
                        <div class="modal fade" id="ambilDarah" tabindex="-1" aria-labelledby="ambilDarahLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <form action="">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="ambilDarahLabel"
                                                style="font-weight: bold; color: rgba(59, 75, 101, 1);">
                                                Ambil Stok Darah</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col">
                                                    <input type="text" class="form-control"
                                                        placeholder="Nomor Pendonor">
                                                </div>
                                                <div class="col">
                                                    <input type="text" class="form-control"
                                                        placeholder="Jumlah Ambil Darah">
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col">
                                                    <label for="" style="color: gray">Tanggal Donor</label>
                                                    <input type="date" class="form-control" placeholder="Tanggal">
                                                </div>
                                                <div class="col">
                                                    <label for="" style="color: gray"></label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Penerima Donor">
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col">
                                                    <input type="text" class="form-control"
                                                        placeholder="Kontak Donor">
                                                </div>
                                                <div class="col"></div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-success">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5" style="width: 435px">
                <table class="table table-light table-striped">
                    <thead>
                        <tr style="background-color: rgba(59, 75, 101, 1);">
                            <th scope="col">#</th>
                            <th scope="col">GOLONGAN DARAH</th>
                            <th scope="col">JUMLAH</th>
                            <th scope="col">UPDATE_AT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
