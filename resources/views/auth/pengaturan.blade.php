@include('layout.app', ['title' => 'Pengaturan'])

@include('layout.css')

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
                        <h2 class="content-header-title float-start mb-0">Pengaturan</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/dashboard">Lain-lain</a>
                                </li>
                                <li class="breadcrumb-item active">Pengaturan
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
                <section id="vertical-tabs">
                    <div class="row">
                      <!-- Vertical Left Tabs start -->
                      <div class="col-xl-6 col-lg-12">
                        <div class="card">
                          <div class="card-header">
                            <h4 class="card-title">Pengaturan</h4>
                          </div>
                          <div class="card-body">
                            <div class="nav-vertical">
                              <ul class="nav nav-tabs nav-left flex-column" role="tablist" style="height: 119px;">
                                <li class="nav-item">
                                  <a class="nav-link active" id="baseVerticalLeft-tab1" data-bs-toggle="tab" aria-controls="tabVerticalLeft1" href="#tabVerticalLeft1" role="tab" aria-selected="true">Akun</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link disabled" id="baseVerticalLeft-tab2" data-bs-toggle="tab" aria-controls="tabVerticalLeft2" href="#tabVerticalLeft2" role="tab" aria-selected="false">Aplikasi</a>
                                </li>
                              </ul>
                              <div class="tab-content">
                                <div class="tab-pane active" id="tabVerticalLeft1" role="tabpanel" aria-labelledby="baseVerticalLeft-tab1">
                                        <h4 class="card-title">Pengaturan Akun</h4>
                                    <form class="form form-vertical" action="/pengaturan/edit" method="POST">
                                        @csrf
                                        <input type="text" name="id" value="{{auth()->user()->id}}" hidden>
                                        <div class="row">
                                          <div class="col-12">
                                            <div class="mb-1">
                                              <label class="form-label" for="first-name-icon">Nama Lengkap</label>
                                              <div class="input-group input-group-merge">
                                                <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></span>
                                                <input type="text" id="first-name-icon" class="form-control" name="nama" value="{{auth()->user()->name}}" placeholder="Nama Lengkap">
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-12">
                                            <div class="mb-1">
                                              <label class="form-label" for="email-id-icon">Email</label>
                                              <div class="input-group input-group-merge">
                                                <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg></span>
                                                <input type="email" id="email-id-icon" class="form-control" name="email" value="{{auth()->user()->email}}" placeholder="Email">
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-12">
                                            <div class="mb-1">
                                              <label class="form-label" for="password-icon">Password Baru</label>
                                              <div class="input-group input-group-merge">
                                                <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg></span>
                                                <input type="password" id="password" class="form-control" name="pass" placeholder="Password">
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-12">
                                            <div class="mb-1">
                                              <label class="form-label" for="password-icon">Konfirmasi Password</label>
                                              <div class="input-group input-group-merge">
                                                <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg></span>
                                                <input type="password" id="confirmation-password-icon" class="form-control" name="konpass" placeholder="Konfirmasi Password">
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-12">
                                            <button type="submit" class="btn btn-primary me-1 waves-effect waves-float waves-light">Submit</button>
                                            <button type="reset" class="btn btn-outline-secondary waves-effect">Reset</button>
                                          </div>
                                        </div>
                                      </form>

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
                                <div class="tab-pane" id="tabVerticalLeft2" role="tabpanel" aria-labelledby="baseVerticalLeft-tab2">
                                  <p>
                                    Sugar plum tootsie roll biscuit caramels. Liquorice brownie pastry cotton candy oat cake fruitcake
                                    jelly chupa chups. Sweet fruitcake cheesecake biscuit cotton candy. Cookie powder marshmallow donut.
                                    Pudding caramels pastry powder cake soufflé wafer caramels. Jelly-o pie cupcake.
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      @if (auth()->user()->id == 1)
                      <div class="col-md-6 col-12">
                        <div class="card">
                          <div class="card-header">
                            <h4 class="card-title">List Akun</h4>
                            <button data-toggle="modal" data-bs-toggle="modal" data-bs-target="#newaccount" class="edit-post btn btn-icon btn-success">
                                <i data-feather='user-plus'></i>
                                </button>
                          </div>
                          <div class="card-body">
                            <p class="card-text mb-0">
                                <span class="text-danger"><b>Peringatan!!</b></span>, Apabila Anda Menghapus Akun, Maka Akun Akan terhapus Selamanya
                              </p>
                          </div>
                          <div class="table-responsive">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th>Nama</th>
                                  <th>Email</th>
                                  <th>Aksi</th>
                                </tr>
                              </thead>
                              @foreach ($account as $key)
                              <tbody>
                                <tr>
                                  <td><span class="fw-bold">{{$key->name}}</span></td>
                                  <td>{{$key->email}}</td>
                                  <td>
                                    <div class="dropdown">
                                      <button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i data-feather="more-vertical"></i>
                                      </button>
                                      <div class="dropdown-menu">
                                        <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#editaccount{{$key->id}}">
                                            <i data-feather='edit'></i>
                                          <span>Edit</span>
                                        </a>
                                        <a class="dropdown-item" href="/pengaturan/{{$key->id}}/delete">
                                          <i data-feather="trash" class="me-50"></i>
                                          <span>Delete</span>
                                        </a>
                                      </div>
                                    </div>
                                  </td>
                                </tr>

                                <div class="modal fade text-start show" id="editaccount{{$key->id}}" tabindex="-1" aria-labelledby="myModalLabel33" style="display: none;" aria-modal="true" role="dialog">
                                    <div class="modal-dialog modal-dialog-centered">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h4 class="modal-title" id="myModalLabel33">Edit Akun</h4>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        <form class="form form-vertical" action="/pengaturan/edit" method="POST">
                                            @csrf
                                            <input type="text" name="id" value="{{$key->id}}" hidden>
                                            <div class="row">
                                              <div class="col-12">
                                                <div class="mb-1">
                                                  <label class="form-label" for="first-name-icon">Nama Lengkap</label>
                                                  <div class="input-group input-group-merge">
                                                    <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></span>
                                                    <input type="text" id="first-name-icon" class="form-control" name="nama" value="{{$key->name}}" placeholder="Nama Lengkap">
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-12">
                                                <div class="mb-1">
                                                  <label class="form-label" for="email-id-icon">Email</label>
                                                  <div class="input-group input-group-merge">
                                                    <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg></span>
                                                    <input type="email" id="email-id-icon" class="form-control" name="email" value="{{$key->email}}" placeholder="Email">
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-12">
                                                <div class="mb-1">
                                                  <label class="form-label" for="password-icon">Password Baru</label>
                                                  <div class="input-group input-group-merge">
                                                    <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg></span>
                                                    <input type="password" id="password" class="form-control" name="pass" placeholder="Password">
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-12">
                                                <div class="mb-1">
                                                  <label class="form-label" for="password-icon">Konfirmasi Password</label>
                                                  <div class="input-group input-group-merge">
                                                    <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg></span>
                                                    <input type="password" id="confirmation-password-icon" class="form-control" name="konpass" placeholder="Konfirmasi Password">
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-12">
                                                <button type="submit" class="btn btn-primary me-1 waves-effect waves-float waves-light">Submit</button>
                                                <button type="reset" class="btn btn-outline-secondary waves-effect">Reset</button>
                                              </div>
                                            </div>
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                @endforeach
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                      @endif
                      <!-- Vertical Right Tabs ends -->
                    </div>
                  </section>
            </section>
        </div>

        {{-- modal tambah akun --}}
        <div class="modal fade text-start show" id="newaccount" tabindex="-1" aria-labelledby="myModalLabel33" style="display: none;" aria-modal="true" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title" id="myModalLabel33">Buat Akun</h4>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form class="form form-vertical" action="/pengaturan/create" method="POST">
                    @csrf
                    <div class="row">
                      <div class="col-12">
                        <div class="mb-1">
                          <label class="form-label" for="first-name-icon">Nama Lengkap</label>
                          <div class="input-group input-group-merge">
                            <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></span>
                            <input type="text" id="first-name-icon" class="form-control" name="nama" value="" placeholder="Nama Lengkap">
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="mb-1">
                          <label class="form-label" for="email-id-icon">Email</label>
                          <div class="input-group input-group-merge">
                            <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg></span>
                            <input type="email" id="email-id-icon" class="form-control" name="email" value="" placeholder="Email">
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="mb-1">
                          <label class="form-label" for="password-icon">Password Baru</label>
                          <div class="input-group input-group-merge">
                            <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg></span>
                            <input type="password" id="password" class="form-control" name="pass" placeholder="Password">
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="mb-1">
                          <label class="form-label" for="password-icon">Konfirmasi Password</label>
                          <div class="input-group input-group-merge">
                            <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg></span>
                            <input type="password" id="confirmation-password-icon" class="form-control" name="konpass" placeholder="Konfirmasi Password">
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <button type="submit" class="btn btn-primary me-1 waves-effect waves-float waves-light">Submit</button>
                        <button type="reset" class="btn btn-outline-secondary waves-effect">Reset</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

@include('layout.footers')
</body>

</html>
