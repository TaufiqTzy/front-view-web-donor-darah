@extends('layouts.main')
@section('container')
    <div class="content">
        <div class="container-fluid" style="margin-top: 50px; font-family: Poppins;0">
            <div class="py-2"
                style="font-size: 32px; background-color: rgba(59, 75, 101, 1); width: max-content; color: white; font-weight: bolder; 
                padding-left: 70px; padding-right: 70px; ">
                JADWAL DONOR
            </div>
            <div class="row mt-5">
                <div class="col-3" style="display: flex;">
                    <div class="btn-group">
                        <input type="text" class=""
                            style="border-top-left-radius: 20px; border: none; padding: 10px; padding-left: 15px; color: rgba(94, 94, 94, 1); background-color: rgba(217, 217, 217, 1)"
                            placeholder="Cari Lokasi..">
                        <button type="button"
                            style="border: none; background-color: rgba(59, 75, 101, 1); color: white; width: 45px; 
                            height: 45px;  font-weight: bold; border-bottom-right-radius: 20px">
                            <span class="visually">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-search" viewBox="0 0 16 16">
                                    <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                </svg>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="col-3" style="display: flex;">
                    <div class="btn-group">
                        <button type="button"
                            style="border-radius: 40px; border: none; background-color: rgba(59, 75, 101, 1); color: white; width: 45px; 
                        height: 45px;position: absolute; font-weight: bold;">
                            <span class="visually">+</span>
                        </button>
                        <button type="button" class=""
                            style="border-bottom-right-radius: 20px; border-top-left-radius: 40px; border-bottom-left-radius: 40px; 
                        border: none; padding: 10px; color: rgba(94, 94, 94, 1); padding-left: 60px; font-weight: bold;"
                            data-bs-toggle="modal" data-bs-target="#tambahJadwal">Tambah</button>
                        <div class="modal fade" id="tambahJadwal" tabindex="-1" aria-labelledby="tambahJadwalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="tambahJadwalLabel"
                                            style="font-weight: bold; color: rgba(59, 75, 101, 1);">
                                            Tambah Jadwal Donor</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col">
                                                <label for=""></label>
                                                <input type="text" class="form-control" placeholder="Nama Lokasi">
                                            </div>
                                            <div class="col">
                                                <label for="">Tanggal</label>
                                                <input type="date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col">
                                                <input type="text" class="form-control" placeholder="Alamat">
                                            </div>
                                            <div class="col">
                                                <div class="row">
                                                    <div class="col">
                                                        <input type="text" class="form-control" placeholder="Mulai">
                                                    </div>
                                                    <div class="col">
                                                        <input type="text" class="form-control" placeholder="Selesai">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col">
                                                <iframe
                                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15863.712879285264!2d106.7390523!3d-6.2731692!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f06f065c241d%3A0x34badb3cb72538f1!2sCodelabs%20Indonesia%20(PT.%20Digital%20Angkasa%20Indonesia)!5e0!3m2!1sid!2sid!4v1694592939276!5m2!1sid!2sid"
                                                    width="370" height="220" style="border:0;" allowfullscreen=""
                                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                            </div>
                                            <div class="col">
                                                <div class="row">
                                                    <div class="col">
                                                        <input type="text" class="form-control" placeholder="Kontak">
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col">
                                                        <input type="text" class="form-control" placeholder="Latitude">
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col">
                                                        <input type="text" class="form-control" placeholder="Longitude">
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col">
                                                    </div>
                                                    <div class="col">
                                                        <button type="button" class="btn btn-success">Simpan</button>
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
            </div>
            <div class="mt-5">
                <table class="table table-light table-striped text-center">
                    <thead>
                        <tr style="background-color: rgba(59, 75, 101, 1);">
                            <th scope="col">#</th>
                            <th scope="col">LOKASI</th>
                            <th scope="col">ALAMAT</th>
                            <th scope="col">TANGGAL</th>
                            <th scope="col">JAM MULAI</th>
                            <th scope="col">JAM SELESAI</th>
                            <th scope="col">KONTAK</th>
                            <th scope="col">PENDAFTAR</th>
                            <th scope="col">STATUS</th>
                            <th scope="col">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>CodeLabs</td>
                            <td style="max-width: 200px">Jalan Mandar III DC10 No 66, Pd. Karya, Kec. Pd. Aren, Kota Tangerang
                                Selatan, Banten 15225</td>
                            <td>30/12/2023</td>
                            <td>13.00</td>
                            <td>17.00</td>
                            <td>089524451643</td>
                            <td>37
                                <button type="button"
                                    style="border-radius: 40px; border: none; background-color: rgba(59, 75, 101, 1); color: white; font-weight: bold;"
                                    data-bs-toggle="modal" data-bs-target="#data">
                                    <span class="visually"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor" class="bi bi-exclamation-lg"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M7.005 3.1a1 1 0 1 1 1.99 0l-.388 6.35a.61.61 0 0 1-1.214 0L7.005 3.1ZM7 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z" />
                                        </svg></span>
                                </button>
                                <div class="modal fade" id="data" tabindex="-1" aria-labelledby="dataLabel"
                                    aria-hidden="true" >
                                    <div class="modal-dialog modal-dialog-centered modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="dataLabel"
                                                    style="font-weight: bold; color: rgba(59, 75, 101, 1);">
                                                    Data Pendonor</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body text-center">
                                                <table class="table table-light table-striped">
                                                    <thead>
                                                        <tr style="background-color: rgba(59, 75, 101, 1);">
                                                            <th scope="col">#</th>
                                                            <th scope="col">NO. URUT</th>
                                                            <th scope="col">NO. PENDONOR</th>
                                                            <th scope="col">NAMA</th>
                                                            <th scope="col">GOL. DARAH</th>
                                                            <th scope="col">KONTAK</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>1</td>
                                                            <td>69696969</td>
                                                            <td>FadhilGanteng1998</td>
                                                            <td>A+</td>
                                                            <td>089524451643</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>Selesai</td>
                            <td>
                                <button style="border: none" data-bs-toggle="modal" data-bs-target="#editJadwal">
                                    <span style="color: green;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path
                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                            <path fill-rule="evenodd"
                                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                        </svg>
                                    </span>
                                </button>
                                <div class="modal fade" id="editJadwal" tabindex="-1" aria-labelledby="editJadwalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="editJadwalLabel"
                                                    style="font-weight: bold; color: rgba(59, 75, 101, 1);">
                                                    Edit Jadwal Donor</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col">
                                                        <label for=""></label>
                                                        <input type="text" class="form-control" placeholder="Nama Lokasi">
                                                    </div>
                                                    <div class="col">
                                                        <label for="">Tanggal</label>
                                                        <input type="date" class="form-control" id="tanggal">
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col">
                                                        <input type="text" class="form-control" placeholder="Alamat">
                                                    </div>
                                                    <div class="col">
                                                        <div class="row">
                                                            <div class="col">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Mulai">
                                                            </div>
                                                            <div class="col">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Selesai">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col">
                                                        <iframe
                                                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15863.712879285264!2d106.7390523!3d-6.2731692!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f06f065c241d%3A0x34badb3cb72538f1!2sCodelabs%20Indonesia%20(PT.%20Digital%20Angkasa%20Indonesia)!5e0!3m2!1sid!2sid!4v1694592939276!5m2!1sid!2sid"
                                                            width="370" height="220" style="border:0;"
                                                            allowfullscreen="" loading="lazy"
                                                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                    </div>
                                                    <div class="col">
                                                        <div class="row">
                                                            <div class="col">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Kontak">
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class="col">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Latitude">
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class="col">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Longitude">
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class="col">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Status">
                                                            </div>
                                                            <div class="col">
                                                                <button type="button" class="btn btn-success">Simpan</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
    
                                        </div>
                                    </div>
                                </div>
                                <button style="border: none" data-bs-toggle="modal" data-bs-target="#hapusJadwal">
                                    <span style="color: red">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                            <path
                                                d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                        </svg>
                                    </span>
                                </button>
                                <div class="modal fade" id="hapusJadwal" tabindex="-1"
                                    aria-labelledby="hapusJadwalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="hapusJadwalLabel"
                                                    style="font-weight: bold; color: red">PERINGATAN</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Apakah anda yakin ingin menghapus jadwal ini??
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success">Ya</button>
                                                <button type="button" class="btn btn-danger"
                                                    data-bs-dismiss="modal">Tidak</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
