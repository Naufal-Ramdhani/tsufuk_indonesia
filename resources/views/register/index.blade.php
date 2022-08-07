<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-10">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Pendaftaran Anggota</h3>
                            <form method="POST" action="#" id="register_form">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="firstName">Nama</label>
                                            <input type="text" name="name" id="name" class="border form-control" />
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-4 pb-2">
                                        <div class="form-outline">
                                            <label class="form-label" for="phoneNumber">Email</label>
                                            <input type="email" name="email" id="email" class="border form-control" />
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-4 pb-2">
                                        <div class="form-outline">
                                            <label class="form-label" for="phoneNumber">Password</label>
                                            <input type="password" name="password" id="password" class="border form-control" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="lastName">No Ktp</label>
                                            <input type="number" name="no_ktp" id="no_ktp" class="border form-control" />
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-4 d-flex align-items-center">
                                        <div class="form-outline datepicker w-100">
                                            <label for="birthdayDate" class="form-label">Tempat</label>
                                            <input type="text" class="border form-control" name="tempat_lahir" id="tempat_lahir"/>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-4 d-flex align-items-center">
                                        <div class="form-outline datepicker w-100">
                                            <label for="birthdayDate" class="form-label">Tanggal Lahir</label>
                                            <input type="date" class="border form-control" name="tanggal_lahir" id="tanggal_lahir"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4 mb-4 pb-2">
                                        <div class="form-outline">
                                            <label class="form-label" for="emailAddress">Agama</label>
                                            <input type="text" class="border form-control" name="agama" id="agama"/>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-4 pb-2">
                                        <div class="form-outline">
                                            <label class="form-label" for="emailAddress">No Telp</label>
                                            <input type="number" class="border form-control" name="no_telp" id="no_telp"/>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-4 pb-2">
                                        <div class="form-outline">
                                            <label class="form-label" for="emailAddress">Pekerjaan</label>
                                            <input type="text" class="border form-control" name="pekerjaan" id="pekerjaan"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-3 mb-4">
                                        <h6 class="mb-2 pb-1">Jenis Kelamin</h6>
                                        <div class="">
                                            <input class="form-check-input" name="jenis_kelamin" id="jenis_kelamin" type="radio" name="inlineRadioOptions"
                                                id="femaleGender" value="Laki-laki" checked />
                                            <label class="form-check-label" for="femaleGender">Laki-laki</label>
                                        </div>
                                        <div class="">
                                            <input class="form-check-input" name="jenis_kelamin" id="jenis_kelamin" type="radio" name="inlineRadioOptions"
                                                id="maleGender" value="Perempuan" />
                                            <label class="form-check-label" for="maleGender">Perempuan</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-4">
                                      <h6 class="mb-2 pb-1">Kelas</h6>
                                      <div class="">
                                          <input class="form-check-input" name="kelas" id="kelas" type="radio" name="inlineRadioOptions"
                                              id="femaleGender" value="Reguler" checked />
                                          <label class="form-check-label" for="femaleGender">Reguler</label>
                                      </div>
                                      <div class="">
                                          <input class="form-check-input" name="kelas" id="kelas" type="radio" name="inlineRadioOptions"
                                              id="maleGender" value="Private" />
                                          <label class="form-check-label" for="maleGender">Private</label>
                                      </div>
                                  </div>
                                  <div class="col-md-3 mb-4 pb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="emailAddress">Tinggi Badan</label>
                                        <input type="number" name="tinggi_badan" id="tinggi_badan" class="border form-control" />
                                    </div>
                                </div>
                                    <div class="col-md-3 mb-4 pb-2">
                                        <div class="form-outline">
                                            <label class="form-label" for="emailAddress">Berat Badan</label>
                                            <input type="number" name="berat_badan" id="berat_badan" class="border form-control" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-7 mb-4 pb-2">
                                        <div class="form-outline">
                                            <label class="form-label" for="phoneNumber">Alamat</label>
                                            <textarea class="form-control" name="alamat" id="alamat"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-5 mb-4 pb-2">
                                        <div class="form-outline">
                                            <label class="form-label" for="phoneNumber">Lanah</label>
                                            <select class="form-select" name="lanah_id" id="lanah_id" aria-label="Default select example">
                                              <option selected disabled>Pilih Lanah</option>
                                              @foreach ($lanah as $lanah)
                                                <option value="{{ $lanah->id }}">{{ $lanah->nama }} ({{ $lanah->alamat }})</option>
                                              @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-4 pt-2">
                                    <input class="btn btn-primary btn-lg" id="register_btn" type="submit" value="Daftar" />
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div id="dropDownSelect1"></div>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script>
        $(function () {
            $("#register_form").submit(function (e) {
                e.preventDefault();
                $("#register_btn").val('Silahkan Tunggu...');
                $("#register_btn").prop('disabled', true);
                $.ajax({
                    url: '{{ route('register-form') }}',
                    method: 'POST',
                    data: $(this).serialize(),
                    dataType: 'json',
                    success: function (res) {
                        if (res.status == 400) {
                            showError('email', res.messages.email);
                            showError('password', res.messages.password);
                            $("#register_btn").val('Daftar');
                            $("#register_btn").prop('disabled', false);
                        } else if (res.status === 200) {
                            $("#register_form")[0].reset();
                            removeValidationClasses("#register_form");
                            $("#register_btn").val('Daftar');
                            $("#register_btn").prop('disabled', false);
                        }
                    }
                });
            });
        });

    </script>

</body>

</html>
