@extends('layout.app', ['title' => 'Input Pembayaran'])

@include('layout.css')

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="">

    @include('layout.mhsmenus')

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Input Pembayaran</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/dashboard">Informasi BPP</a>
                                    </li>
                                    <li class="breadcrumb-item active">Input Pembayaran
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Validation -->
                <section class="bs-validation">
                    <div class="row">
                        <!-- Bootstrap Validation -->
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Input Pembayaran</h4>
                                </div>
                                <div class="card-body">
                                    <form class="needs-validation" novalidate>
                                        <div class="mb-1">
                                            <label class="form-label" for="basic-addon-name">Nomor Induk
                                                Mahasiswa</label>

                                            <input type="number" id="basic-addon-name" class="form-control"
                                                placeholder="130 / 131" aria-label="Name"
                                                aria-describedby="basic-addon-name" required />
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Please enter your name.</div>
                                        </div>
                                        <div class="mb-1">
                                            <label class="form-label" for="basic-addon-name">Nama Mahasiswa</label>

                                            <input type="text" id="basic-addon-name" class="form-control"
                                                placeholder="Nama" aria-label="Name" aria-describedby="basic-addon-name"
                                                disabled />
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Please enter your name.</div>
                                        </div>
                                        <button type="submit" class="btn btn-icon btn-outline-primary waves-effect mb-1">
                                            <a class="d-flex align-items-center" href="input"><i
                                            data-feather="search"></i></a></button>
                                        <div class="mb-1">
                                            <label class="form-label" for="select-country1">Pilih Tagihan</label>
                                            <select class="form-select" id="select-country1" required>
                                                <option value="">Tagihan Tahun</option>

                                            </select>
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Please select your country</div>
                                        </div>
                                        <div class="mb-1">
                                            <label class="form-label" for="numeral-formatting">Jumlah Pembayaran</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend">Rp.</span>
                                                <input type="text" id="numeral-formatting" class="form-control numeral-mask"
                                                    placeholder="4,750,000" aria-label="4,750,000"
                                                    required />
                                                <div class="valid-feedback">Looks good!</div>
                                                <div class="invalid-feedback">Please enter a valid email</div>
                                            </div>
                                        </div>
                                        <div class="mb-1">
                                            <label for="customFile1" class="form-label">Upload Bukti</label>
                                            <input class="form-control" type="file" id="customFile1" required />
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /Bootstrap Validation -->

                        @include('layout.footers')
                        <script src="{{asset('app-assets/vendors/js/forms/cleave/cleave.min.js')}}"></script>
                        <script src="{{asset('app-assets/vendors/js/forms/cleave/addons/cleave-phone.us.js')}}"></script>
</body>

</html>
