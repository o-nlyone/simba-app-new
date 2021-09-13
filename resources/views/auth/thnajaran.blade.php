@extends('layout.app', ['title' => 'Tahun Ajaran'])

@include('layout.css')

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="">

    @include('layout.menus')

    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Tahun Ajaran</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/dashboard">Informasi BPP</a>
                                    </li>
                                    <li class="breadcrumb-item active">Tahun Ajaran
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section id="basic-horizontal-layouts">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Tambah Tahun Ajaran</h4>
                            </div>
                            <div class="card-body">
                                <form action="/inputthnajaran" method="post" class="form form-horizontal">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-1 row">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label" for="nama_ta">Periode Tahun</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <select name="id" class="form-select" id="select-country1" required>
                                                        <option value="">Tagihan Tahun</option>
                                                        @for ($i = 21; $i<=99; $i++)
                                                        <option value="20{{$i}}">20{{$i}}-20{{$i+1}}</option>
                                                        @endfor
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-1 row">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label" for="semester">Semester</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <select name="semester" class="form-select" id="select-country1" required>
                                                        <option value="">Semester</option>
                                                        <option value="ganjil">ganjil</option>
                                                        <option value="genap">genap</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 offset-sm-3">
                                            <button type="submit" class="btn btn-primary me-1">Submit</button>
                                            <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                        </div>
                                    </div>
                                </form>
                                @if (session()->get('error_thnajaran'))
                                        <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                                            <div class="alert-body d-flex align-items-center">
                                            <i data-feather="info" class="me-50"></i>
                                            <span><strong>invalid </strong>{{session('error_thnajaran')}}</span>
                                            </div>
                                        </div>
                                @endif
                                @if (session()->get('success_thnajaran'))
                                        <div class="alert alert-success mt-1 alert-validation-msg" role="alert">
                                            <div class="alert-body d-flex align-items-center">
                                            <i data-feather="info" class="me-50"></i>
                                            <span><strong>Success </strong>{{session('success_thnajaran')}}</span>
                                            </div>
                                        </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                            <div class="card">
                              <div class="card-header">
                                <h4 class="card-title">List Tahun Ajaran</h4>
                              </div>
                              <div class="card-body">
                                <p class="card-text mb-0">
                                    <span class="text-danger"><b>Peringatan!!</b></span>, Apabila Anda Menghapus Tahun Ajaran, Maka Semua Pembayaran dan Tagihan yang berkaitan dengan Tahun Ajaran akan dihapus.
                                  </p>
                              </div>
                              <div class="table-responsive">
                                <table class="table">
                                  <thead>
                                    <tr>
                                      <th>Tahun Ajaran</th>
                                      <th>Semester</th>
                                      <th>Aksi</th>
                                    </tr>
                                  </thead>
                                  @php
                                    use App\Models\Tahun_ajaran;
                                      $query = Tahun_ajaran::all();
                                      $query = $query->reverse();
                                  @endphp
                                  @foreach ($query as $key)
                                  <tbody>
                                    <tr>
                                      <td><span class="fw-bold">{{$key->nama_ta}}</span></td>
                                      <td>{{$key->semester}}</td>
                                      <td>
                                        <div class="dropdown">
                                          <button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i data-feather="more-vertical"></i>
                                          </button>
                                          <div class="dropdown-menu">
                                            <a class="dropdown-item" href="/thnajaran/{{$key->id}}/delete">
                                              <i data-feather="trash" class="me-50"></i>
                                              <span>Delete</span>
                                            </a>
                                          </div>
                                        </div>
                                      </td>
                                    </tr>
                                  </tbody>
                                  @endforeach
                                </table>
                              </div>
                            </div>
            </section>

        </div>
    </div>
    </div>
    </div>



    @include('layout.footers')
</body>
<!-- END: Body-->

<!-- Mirrored from pixinvent.com/demo/vuexy-html-bootstrap-admin-template/html/ltr/vertical-menu-template/dashboard-analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Aug 2021 13:14:24 GMT -->

</html>
