@include('layout.app', ['title' => 'Tagihan BPP'])
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/app-user.min.css')}}">
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
                            <h2 class="content-header-title float-start mb-0">Mahasiswa</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active">Informasi BPP
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <section class="app-user-view">
                    <div class="row">
                        <div>
                            <div class="card user-card">
                                <div class="card-body">
                                    <div class="row">
                                        <div
                                            class="col-xl-6 col-lg-12 d-flex flex-column justify-content-between border-container-lg">
                                            <div class="user-avatar-section">
                                                <div class="d-flex justify-content-start">
                                                    <div class="d-flex flex-column ms-1">
                                                        <div class="user-info mb-1">
                                                            <h1 class="mb-0">{{$mhs->nama_mhs}}</h1>
                                                            <span class="card-text">
                                                                @if ($mhs->jurusan == 'TI')
                                                                Teknik Informatika
                                                                @endif
                                                                @if ($mhs->jurusan == 'SI')
                                                                Sistem Informasi
                                                                @endif
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 mt-2 mt-xl-0">
                                            <div class="user-info-wrapper">
                                                <div class="d-flex flex-wrap">
                                                    <div class="user-info-title">
                                                        <i data-feather="user" class="me-1"></i>
                                                        <span class="card-text user-info-title fw-bold mb-0">NIM</span>
                                                    </div>
                                                    <p class="card-text mb-0">{{$mhs->nim}}</p>
                                                </div>
                                                <div class="d-flex flex-wrap my-50">
                                                    <div class="user-info-title">
                                                        <i data-feather="check" class="me-1"></i>
                                                        <span
                                                            class="card-text user-info-title fw-bold mb-0">Status</span>
                                                    </div>
                                                    <p class="card-text mb-0">
                                                        @if ($mhs->status_mhs == 'aktif')
                                                        <span class="badge bg-success">Aktif</span>
                                                        @elseif ($mhs->status_mhs == 'nonaktif')
                                                        <span class="badge bg-danger">Nonaktif</span>

                                                        @elseif ($mhs->status_mhs == 'cuti')
                                                        <span class="badge bg-warning">Cuti</span>

                                                        @elseif ($mhs->status_mhs == 'lulus')
                                                        <span class="badge bg-secondary">Lulus</span>

                                                        @endif
                                                    </p>
                                                </div>
                                                <div class="d-flex flex-wrap my-50">
                                                    <div class="user-info-title">
                                                        <i data-feather="star" class="me-1"></i>
                                                        <span
                                                            class="card-text user-info-title fw-bold mb-0">Jurusan</span>
                                                    </div>
                                                    <p class="card-text mb-0">{{$mhs->jurusan}}
                                                    </p>
                                                </div>
                                                <div class="d-flex flex-wrap my-50">
                                                    <div class="user-info-title">
                                                        <i data-feather="flag" class="me-1"></i>
                                                        <span
                                                            class="card-text user-info-title fw-bold mb-0">Beasiswa</span>
                                                    </div>
                                                    <p class="card-text mb-0">
                                                        @if ($mhs->mhs_spesial == 'tidak')
                                                        Tidak Ada
                                                        @endif
                                                        @if ($mhs->mhs_spesial == 'mhs_binaan1')
                                                        Mahasiswa Binaan 1
                                                        @endif
                                                        @if ($mhs->mhs_spesial == 'mhs_binaan2')
                                                        Mahasiswa Binaan 2
                                                        @endif
                                                    </p>
                                                </div>
                                                <div class="d-flex flex-wrap">
                                                    <div class="user-info-title">
                                                        <i data-feather="phone" class="me-1"></i>
                                                        <span
                                                            class="card-text user-info-title fw-bold mb-0">Contact</span>
                                                    </div>
                                                    <p class="card-text mb-0">{{$mhs->notelp_mhs}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>
                <section class="bs-validation">
                    <div class="row">
                        <!-- Bootstrap Validation -->
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Tagihan</h4>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">
                                        Jumlah Tagihan Pembayaran Biaya Penyelenggaraan Pendidikan setiap Semester.
                                    </p>
                                    @php
                                        use App\Models\Tahun_ajaran;
                                        use App\Models\Pembayaran;
                                        use App\Models\Tagihan;
                                        $i = 0;
                                        $tahun = Tahun_ajaran::all();
                                        $tahun = $tahun->reverse();
                                    @endphp
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
                                                                        <button type="button"
                                                                            class="btn btn-icon btn-flat-success waves-effect"
                                                                            data-bs-toggle="popover"
                                                                            data-bs-html="true"
                                                                            data-bs-content="<b>Jumlah Pembayaran</b> Rp. {{$bayar->jml_bayar}}
                                                                                            <b>Tanggal Pembayaran</b> {{$bayar->created_at->format('Y-m-d')}}
                                                                                            <b>Waktu Pembayaran</b> {{$bayar->created_at->format('H:i')}}<br>
                                                                                            <b>Bukti Pembayaran</b><br>  <img class='rounded img-fluid' src='image/{{$bayar->bukti_bayar}}' alt='bukti'>"
                                                                            data-bs-trigger="hover" title=""
                                                                            data-bs-original-title="Detail Pembayaran">
                                                                            <i data-feather='more-horizontal'></i>
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
                    </div>
                </section>
            </div>
            <!-- /Plan CardEnds -->
            <!-- /Bootstrap Validation -->

            @include('layout.footers')
            <script src="{{asset('app-assets/js/scripts/components/components-popovers.min.js')}}"></script>
            <script src="{{asset('app-assets/vendors/js/forms/cleave/cleave.min.js')}}"></script>
            <script src="{{asset('app-assets/vendors/js/forms/cleave/addons/cleave-phone.us.js')}}"></script>
            <script src="{{asset('app-assets/js/scripts/pages/app-user-view.min.js')}}"></script>

</body>

</html>
