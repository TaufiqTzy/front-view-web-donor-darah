@extends('layouts.main')
@section('container')
    <div class="content">
        <div class="container-fluid" style="margin-top: 50px; font-family: Poppins;0">
            <div class="py-2"
                style="font-size: 32px; background-color: rgba(59, 75, 101, 1); width: max-content; color: white; font-weight: bolder; 
            padding-left: 70px; padding-right: 70px; ">
                RIWAYAT
            </div>
            <div class="row text-center mt-5">
                <div class="col">
                    <div class="row" style="font-weight: bold">
                        <a href="#" id="tombol1" style="text-decoration: none; margin-right: 10px" class="col">
                            Riwayat Donor Darah
                        </a>
                        <a href="#" id="tombol2" style="text-decoration: none" class="col">
                            Riwayat Ambil Darah
                        </a>
                    </div>
                </div>
                <div class="col"></div>
            </div>
        </div>
        <div class="mt-5">
            <table class="table table-light table-striped" id="tabel1" style="">
                <thead>
                    <tr style="background-color: rgba(59, 75, 101, 1);">
                        <th scope="col">#</th>
                        <th scope="col">NO. PENDONOR</th>
                        <th scope="col">JUMLAH DONOR</th>
                        <th scope="col">TANGGAL</th>
                        <th scope="col">GOL. DARAH</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>69696969</td>
                        <td>3</td>
                        <td>29/12/2023</td>
                        <td>A+</td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-light table-striped" id="tabel2" style="display: none;">
                <thead>
                    <tr style="background-color: rgba(59, 75, 101, 1);">
                        <th scope="col">#</th>
                        <th scope="col">NO. PENERIMA</th>
                        <th scope="col">JUMLAH AMBIL</th>
                        <th scope="col">TANGGAL</th>
                        <th scope="col">GOL. DARAH</th>
                        <th scope="col">PENERIMA</th>
                        <th scope="col">KONTAK PENERIMA</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>68686868</td>
                        <td>3</td>
                        <td>30/12/2023</td>
                        <td>A+</td>
                        <td>Aammonn</td>
                        <td>0895456342</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <script>
            function tampilkanTabel(idTabel) {
                const tabel1 = document.getElementById("tabel1");
                const tabel2 = document.getElementById("tabel2");

                if (idTabel === "tabel1") {
                    tabel1.style.display = "table";
                    tabel2.style.display = "none";
                    document.getElementById("tombol1").classList.remove("tabel-mati");
                    document.getElementById("tombol1").classList.add("tabel-aktif");
                    document.getElementById("tombol2").classList.remove("tabel-aktif");
                    document.getElementById("tombol2").classList.add("tabel-mati");
                } else if (idTabel === "tabel2") {
                    tabel1.style.display = "none";
                    tabel2.style.display = "table";
                    document.getElementById("tombol2").classList.remove("tabel-mati");
                    document.getElementById("tombol1").classList.remove("tabel-aktif");
                    document.getElementById("tombol2").classList.add("tabel-aktif");
                    document.getElementById("tombol1").classList.add("tabel-mati");

                }
            }
            document.getElementById("tombol1").addEventListener("click", function() {
                tampilkanTabel("tabel1");
            });

            document.getElementById("tombol2").addEventListener("click", function() {
                tampilkanTabel("tabel2");
            });

            window.onload = function() {
                tampilkanTabel("tabel1");
            };
        </script>
    </div>
@endsection
