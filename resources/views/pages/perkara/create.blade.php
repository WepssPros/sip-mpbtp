@extends('layouts.admin')

@section('breadcump-content')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">Menu Pembuatan Data Perkara Baru</h4>
        </div>
        <div class="col-7 align-self-center">
            <div class="d-flex align-items-center justify-content-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Perkara</li>
                        <li class="breadcrumb-item active" aria-current="page">Buat Perkara Baru</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection

@section('admin-content')
<div class="row">
    <div class="col-sm-12 col-lg-12">
        <div class="card">
            <form>
                <div class="card-body">
                    <h4 class="card-title">Buat Data Perkara</h4>
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        <span class="badge badge-info"><i class="fas fa-info"></i></span>
                        <strong> Perhatikan Setiap Form Input Yang Telah Disesuaikan dan Terisi Semua.</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                </div>
                <hr>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <label for="inputEmail3" class="control-label col-form-label">Nomor Perkara</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i
                                            class="fas fa-address-card"></i></span>
                                </div>
                                <input type="text" id="no_perkara" name="no_perkara" class="form-control"
                                    placeholder=".../..../....../...." maxlength="18" required>
                                <script>
                                    // Mendapatkan elemen input
                                    var nomorBerkasInput = document.getElementById("no_perkara");
                                
                                    // Menyimpan placeholder awal
                                    var placeholderAwal = ".../..../....../....";
                                
                                    // Mendengarkan peristiwa "input" pada elemen
                                    nomorBerkasInput.addEventListener("input", function () {
                                        var value = nomorBerkasInput.value;
                                
                                        // Menyimpan placeholder saat ini
                                        var placeholderSaatIni = nomorBerkasInput.placeholder;
                                
                                        // Menyesuaikan format jika panjang input mencapai 3, 8, 14
                                        if (value.length === 3 || value.length === 8 || value.length === 14) {
                                            value += "/";
                                        }
                                
                                        // Mengisi titik-titik dengan angka atau karakter sesuai dengan berkas yang diinputkan
                                        if (value.length > 18) {
                                            // Misalnya, mengganti titik-titik dengan karakter sesuai dengan berkas yang diinputkan
                                            nomorBerkasInput.value = value.replace(/\.{4}/, '/PMK.03/2022');
                                        }
                                
                                        // Memasukkan nilai yang telah dimodifikasi kembali ke input
                                        if (value.length <= 18) {
                                            nomorBerkasInput.value = value.substring(0, 18);
                                        }
                                
                                        // Mengembalikan placeholder ke nilai awal jika input kosong
                                        if (nomorBerkasInput.value === "" && placeholderSaatIni === "") {
                                            nomorBerkasInput.placeholder = placeholderAwal;
                                        }
                                    });
                                </script>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="inputEmail3" class="control-label col-form-label">Tanggal
                                    Pendaftaran</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon11"><i
                                                class="fas fa-calendar-alt"></i></span>
                                    </div>
                                    <input type="date" class="form-control" placeholder="Tanggal Pendaftaran "
                                        aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="inputEmail3" class="control-label col-form-label">Jenis Tindak
                                    Pidana</label>
                                <div class="input-group">
                                    <select class="select2 form-control custom-select" style="width: 100%; height:36px;"
                                        aria-label="Username" aria-describedby="basic-addon1"
                                        aria-describedby="basic-addon1">
                                        <option>Cari Jenis Tindak Pidana</option>
                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                            <option value="AK">Alaska</option>
                                            <option value="HI">Hawaii</option>
                                        </optgroup>
                                        <optgroup label="Pacific Time Zone">
                                            <option value="CA">California</option>
                                            <option value="NV">Nevada</option>
                                            <option value="OR">Oregon</option>
                                            <option value="WA">Washington</option>
                                        </optgroup>
                                        <optgroup label="Mountain Time Zone">
                                            <option value="AZ">Arizona</option>
                                            <option value="CO">Colorado</option>
                                            <option value="ID">Idaho</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="UT">Utah</option>
                                            <option value="WY">Wyoming</option>
                                        </optgroup>
                                        <optgroup label="Central Time Zone">
                                            <option value="AL">Alabama</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MO">Missouri</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TX">Texas</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="WI">Wisconsin</option>
                                        </optgroup>
                                        <optgroup label="Eastern Time Zone">
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="IN">Indiana</option>
                                            <option value="ME">Maine</option>
                                            <option value="MD">Maryland</option>
                                            <option value="MA">Massachusetts</option>
                                            <option value="MI">Michigan</option>
                                            <option value="NH">New Hampshire</option>
                                            <option value="NJ">New Jersey</option>
                                            <option value="NY">New York</option>
                                            <option value="NC">North Carolina</option>
                                            <option value="OH">Ohio</option>
                                            <option value="PA">Pennsylvania</option>
                                            <option value="RI">Rhode Island</option>
                                            <option value="SC">South Carolina</option>
                                            <option value="VT">Vermont</option>
                                            <option value="VA">Virginia</option>
                                            <option value="WV">West Virginia</option>
                                        </optgroup>
                                    </select>

                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="inputEmail3" class="control-label col-form-label">Status Perkara</label>
                            <div class="input-group">

                                <select class="select2 form-control custom-select" style="width: 100%; height:36px;"
                                    aria-label="Username" aria-describedby="basic-addon1"
                                    aria-describedby="basic-addon1">
                                    <option>Pilih Status Perkara</option>
                                    <option value="">Open</option>
                                    <option value="">Close</option>

                                </select>

                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 pt-2">
                            <div class="form-group">
                                <label for="inputEmail3" class="control-label col-form-label">Pilih Jaksa
                                    Terdata</label>
                                <div class="input-group">

                                    <select class="select2 form-control custom-select" style="width: 100%; height:36px;"
                                        aria-label="Username" aria-describedby="basic-addon1"
                                        aria-describedby="basic-addon1">
                                        <option>Pilih Jaksa</option>
                                        <option value="">Open</option>
                                        <option value="">Close</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 pt-2">
                            <div class="form-group">
                                <label for="inputEmail3" class="control-label col-form-label">Pilih Hakim
                                    Terdata</label>
                                <div class="input-group">

                                    <select class="select2 form-control custom-select" style="width: 100%; height:36px;"
                                        aria-label="Username" aria-describedby="basic-addon1"
                                        aria-describedby="basic-addon1">
                                        <option>Pilih Hakim</option>
                                        <option value="">Open</option>
                                        <option value="">Close</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="inputEmail3" class="control-label col-form-label">Tanggal Putusan
                                </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon11"><i
                                                class="fas fa-calendar-alt"></i></span>
                                    </div>
                                    <input type="date" class="form-control" placeholder="Tanggal Putusan "
                                        aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="card-body">
                    <div class="action-form">
                        <div class="form-group m-b-0 text-left">
                            <button type="submit" class="btn btn-info waves-effect waves-light">Save</button>
                            <button type="submit" class="btn btn-dark waves-effect waves-light">Cancel</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection