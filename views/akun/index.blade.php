@extends('layouts.main')
@section('container')
    <div class="content">
        <div class="container-fluid" style="margin-top: 50px; font-family: Poppins;0">
            <div class="row justify-content-start">
                <div class="py-2 col-5"
                    style="font-size: 32px; background-color: rgba(59, 75, 101, 1); width: max-content; color: white; font-weight: bolder; 
                    padding-left: 70px; padding-right: 70px; margin-right: 40px">
                    AKUN
                </div>
                <button class="col-5" style="padding-left: 70px; padding-right: 70px; border: none; width: max-content; font-size: 24px;">
                    <a href="/login" style="text-decoration: none; color:black">
                        Keluar
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                            <path fill-rule="evenodd"
                                d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                        </svg>
                    </a>
                </button>
            </div>
            <div class="mt-5">
                <form>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" placeholder="PMI Kota Padang"
                            style="background-color: rgba(217,217,217,1); height: 50px; margin-top:10px">
                    </div>
                    <div class="form-group mt-4">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder=""
                            style="background-color: rgba(217,217,217,1); height: 50px; margin-top:10px">
                    </div>
                    <div class="form-group mt-4">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" placeholder="jalan xxxxxxx"
                            style="background-color: rgba(217,217,217,1); height: 50px; margin-top:10px">
                    </div>
                    <div class="form-group mt-4">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="pmipadang@gmail.com"
                            style="background-color: rgba(217,217,217,1); height: 50px; margin-top:10px">
                    </div>
                    <div class="form-group mt-4">
                        <label for="telp">No. Telepon</label>
                        <input type="text" class="form-control" id="telp" placeholder="089129831232"
                            style="background-color: rgba(217,217,217,1); height: 50px; margin-top:10px">
                    </div>
                    <button type="button" class="btn btn-primary mt-4 btn-success" data-bs-toggle="modal"
                        data-bs-target="#ambilDarah">Edit</button>
                    <div class="modal fade" id="ambilDarah" tabindex="-1" aria-labelledby="ambilDarahLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <form action="">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="ambilDarahLabel"
                                            style="font-weight: bold; color: rgba(59, 75, 101, 1);">
                                            Edit Akun</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col">
                                                <label for="">Nama</label>
                                                <input type="text" class="form-control" placeholder="PMI Kota Padang">
                                            </div>
                                            <div class="col">
                                                <label for="">Email</label>
                                                <input type="email" class="form-control"
                                                    placeholder="pmipadang@gmail.com">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col">
                                                <label for="">Password</label>
                                                <input type="date" class="form-control" placeholder="*********">
                                            </div>
                                            <div class="col">
                                                <label for="">No Telepon</label>
                                                <input type="text" class="form-control" placeholder="0812983912">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col">
                                                <label for="">Alamat</label>
                                                <input type="text" class="form-control" placeholder="jalan xxxxxxx">
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
                </form>
            </div>
        </div>
    </div>
@endsection
