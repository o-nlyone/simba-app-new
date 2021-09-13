@php
    use App\Models\Tahun_ajaran;
    use App\Models\Pembayaran;
    use App\Models\Tagihan;
@endphp
@extends('layout.app', ['title' => 'Input Pembayaran'])

@include('layout.css')

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="">

    @include('layout.menus')

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
                                    <form action="/bayar" method="post" class="needs-validation" enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-1">
                                            <label class="form-label" for="basic-addon-name">Nomor Induk
                                                Mahasiswa</label>
                                                <input type="id" name="id_mhs" value="{{$mhs->id ?? ''}}" hidden>
                                            <input type="number" name="nim" id="id_nim_mhs" class="form-control"
                                                placeholder="130 / 131" value="{{$mhs->nim ?? ''}}" aria-label="Name"
                                                aria-describedby="basic-addon-name" required />
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Please enter your name.</div>
                                        </div>
                                        <div class="mb-1">
                                            <label class="form-label" for="basic-addon-name">Nama Mahasiswa</label>

                                            <input type="text" name="nama_mhs" id="basic-addon-name" class="form-control"
                                                placeholder="Nama" aria-label="Name" aria-describedby="basic-addon-name"
                                                value="{{$mhs->nama_mhs ?? ''}}"
                                                disabled />
                                        </div>
                                        <div id="cardat" onclick="caridata()" class="btn btn-icon btn-outline-primary waves-effect mb-1">
                                            <a class="d-flex align-items-center"><i
                                            data-feather="search"></i></a></div>
                                        <div class="mb-1">
                                            <label class="form-label" for="select-country1">Pilih Tagihan</label>
                                            <select name="id_ta" class="form-select" id="select-country1" required>
                                                <option value="">Tagihan Tahun</option>
                                                @php
                                                    $querys = Tahun_ajaran::all()->reverse();
                                                    // $jml = DB::table('tahun_ajaran')->count();
                                                @endphp
                                                @foreach ($querys as $ta)
                                                    <option value="{{$ta->id}}">{{$ta->nama_ta}} | {{$ta->semester}}</option>
                                                @endforeach
                                            </select>
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Silahkan Pilih Tahun_Ajaran</div>
                                        </div>
                                        <div class="mb-1">
                                            <label class="form-label" for="numeral-formatting">Jumlah Pembayaran</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend">Rp.</span>
                                                <input name="jml_bayar" type="text" id="numeral-formatting" class="form-control numeral-mask"
                                                    placeholder="4,750,000" aria-label="4,750,000"
                                                    required />
                                                <div class="valid-feedback">Looks good!</div>
                                                <div class="invalid-feedback">Please enter a valid email</div>
                                            </div>
                                        </div>
                                        <div class="mb-1">
                                            <label for="customFile1" class="form-label">Upload Bukti | max 1mb</label>
                                            <input name="bukti_bayar" class="form-control" type="file" id="bukti_bayar"
                                                accept=".jpg, .png, .jpeg|image/*" required/>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                    @if ($errors->any())
                                            @foreach ($errors->all() as $error)
                                            <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                                                <div class="alert-body d-flex align-items-center">
                                                <i data-feather="info" class="me-50"></i>
                                                <span><strong>invalid </strong> Gambar Lebih Dari 1 MB</span>
                                                </div>
                                            </div>
                                            @endforeach
                                    @endif
                                    @if (session()->get('ses_error'))
                                        <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                                            <div class="alert-body d-flex align-items-center">
                                            <i data-feather="info" class="me-50"></i>
                                            <span><strong>invalid </strong>{{session('ses_error')}}</span>
                                            </div>
                                        </div>
                                    @endif
                                    @if (session()->get('ses_success'))
                                        <div class="alert alert-success mt-1 alert-validation-msg" role="alert">
                                            <div class="alert-body d-flex align-items-center">
                                            <i data-feather="info" class="me-50"></i>
                                            <span><strong>Success </strong>{{session('ses_success')}}</span>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @if (Request::is('input/*') && $tagihan != null)
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Informasi Tagihan</h4>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">
                                        Jumlah Tagihan Pembayaran Biaya Penyelenggaraan Pendidikan setiap Semester.
                                    </p>

                                    @php
                                        $i = 0;
                                        $tahun = Tahun_ajaran::all();
                                        $tahun = $tahun->reverse();
                                    @endphp
                                    {{-- start foreach --}}
                                    @foreach ($tahun as $ta)
                                    @php
                                        $jmlpembayaran_sebelumnya = 0;
                                        $jmlpembayaran_sbl = 0;
                                        $summarytagihan = 0;
                                        $tagih = Tagihan::where('id_mhs', $mhs->id)->where('id_ta', $ta->id)->first();
                                        try {
                                            $pembayaran = Pembayaran::where('id_tagihan', $tagih->id)->get();
                                            foreach($pembayaran as $bayar){
                                                $jmlpembayaran_sebelumnya = $jmlpembayaran_sebelumnya + $bayar->jml_bayar; //mengakumulasi semua pembayaran sebelumnya
                                            }
                                            $summarytagihan = $tagih->jml_tagihan - $jmlpembayaran_sebelumnya;
                                        } catch (\Throwable $th) {
                                            $summarytagihan = $tagih->jml_tagihan;
                                        }

                                        $i++;
                                        $j = 0;

                                    @endphp
                                    <div class="accordion accordion-margin" id="accordionMargin"
                                        data-toggle-hover="true">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingMargin{{$i}}">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#accordionMargin{{$i}}"
                                                    aria-expanded="false" aria-controls="accordionMargin{{$i}}">
                                                    {{$ta->nama_ta}} | {{$ta->semester}} &nbsp;&nbsp;
                                                    @if ($summarytagihan > 0)
                                                        <span class="badge badge-glow bg-danger"> Belum Lunas</span>
                                                    @else
                                                        <span class="badge badge-glow bg-success"> Lunas</span>
                                                    @endif
                                                </button>
                                            </h2>
                                            <div id="accordionMargin{{$i}}" class="accordion-collapse collapse"
                                                aria-labelledby="headingMargin{{$i}}" data-bs-parent="#accordionMargin"
                                                style="">
                                                <div class="accordion-body">
                                                    <strong>Jumlah Tagihan </strong> Rp. {{$tagih->jml_tagihan}}
                                                    <div class="table-responsive">
                                                        <table class="table mb-0">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col" class="text-nowrap">No.</th>
                                                                    <th scope="col" class="text-nowrap">Pembayaran</th>
                                                                    <th scope="col" class="text-nowrap">Sisa</th>
                                                                    <th scope="col" class="text-nowrap">Detail</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                {{-- foreach pembayaran --}}
                                                                @foreach ($pembayaran as $bayar)
                                                                @php
                                                                    $jmlpembayaran_sbl = $jmlpembayaran_sbl + $bayar->jml_bayar;
                                                                    $summary = $tagih->jml_tagihan - $jmlpembayaran_sbl;
                                                                    $j++;
                                                                @endphp
                                                                <tr>
                                                                    <td class="text-nowrap">{{$j}}</td>
                                                                    <td class="text-nowrap">Rp. {{$bayar->jml_bayar}}</td>
                                                                    <td class="text-nowrap">Rp. {{$summary}}</td>
                                                                    <td class="text-nowrap">
                                                                        <button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                                            <i data-feather="more-vertical"></i>
                                                                          </button>
                                                                          <div class="dropdown-menu">
                                                                            <a class="dropdown-item" href="/bayar/{{$bayar->id}}/delete">
                                                                              <i data-feather="trash" class="me-50"></i>
                                                                              <span>Delete</span>
                                                                            </a>
                                                                          </div>
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                                @endforeach
                                                                {{-- end foreach pembayaran --}}
                                                                <tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                    {{-- end foreach --}}
                                </div>
                            </div>

                        </div>
                        @endif
                    </div>
                </section>
                        <!-- /Bootstrap Validation -->

                        @include('layout.footers')
                        <script src="{{asset('app-assets/vendors/js/forms/cleave/cleave.min.js')}}"></script>
                        <script src="{{asset('app-assets/vendors/js/forms/cleave/addons/cleave-phone.us.js')}}"></script>
                        <script>
                            function caridata(){
                                window.location.assign(('/')+'input'+('/')+document.getElementById('id_nim_mhs').value)
                                document.getElementById('cardat').style.display = 'none';
                            }

                        </script>
</body>


</html>
