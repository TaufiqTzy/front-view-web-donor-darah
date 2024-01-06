<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <style>
        /* *{
            border: 1px solid red;
        } */
        .bg {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>
    <section class="gradient-form" style="background-color: rgba(59, 75, 101, 1); height: 100vh; font-family: Poppins">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-xl-10" style="width:538px">
                    <div class="card rounded-3 text-black">
                        <div class="card-header"
                            style="display: flex; align-items: center; color: #EB1F3E; font-weight: bold; font-size: 20px;">
                            <div>
                                <img src="img/img2.png" alt="Logo"
                                    style="width: 100px; height: 100px; margin-left: 40px; margin-right: 30px;">
                            </div>
                            <div>
                                DARA (DARAH RELAWAN)<br>
                                <span style="font-size: 14px; color: #000; font-weight: normal">Setetes Darah Akan
                                    Sangat Berarti</span>
                            </div>
                        </div>
                        <div class="card-body p-md-5 mx-md-4">


                            <form method="POST" action="">
                                @csrf
                                <div class="input-group flex-nowrap mb-3">
                                    <span class="input-group-text" id="addon-wrapping">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                            <path
                                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                                        </svg></span>
                                    <input type="email" class="form-control" placeholder="Email" aria-label="Username"
                                        aria-describedby="addon-wrapping">
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-9">
                                        <div class="input-group flex-nowrap">
                                            <span class="input-group-text" id="addon-wrapping">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z" />
                                                </svg>
                                            </span>
                                            <input type="password" class="form-control" placeholder="Password"
                                                aria-label="Username" aria-describedby="addon-wrapping">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <button type="submit" class="btn btn-primary"
                                            style="background-color: #EB1F3E; border-radius: 30px; width:70px">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="20"
                                                fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="" style="display: flex; align-items: center; color: #EB1F3E; font-weight: normal; font-size: 20px;">
                                    <div>
                                        <img src="img/img1.png" alt="Logo"
                                            style="width: 50px; height: 50px; margin-right: 10px; margin-left: 30px">
                                    </div>
                                    <div>
                                        PALANG MERAH INDONESIA <br>
                                        <span style="font-weight: bold">KOTA PADANG</span>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>

{{-- <div class="row mb-3">
    <label for="password" class="col-md-4 col-form-label text-md-end">
    </label>
    <div class="col-md-4">
        <input id="password" type="password"
            class="form-control @error('password') is-invalid @enderror" name="password"
            required autocomplete="current-password" style="background-color:#D9D9D9">
    </div>
    <div class="col-md-4">
        <button type="submit" class="btn btn-primary"
            style="background-color: #EB1F3E; border-radius: 30px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
            </svg>
        </button>
    </div>
</div> --}}
