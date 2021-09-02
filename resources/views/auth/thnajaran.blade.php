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
                            <h2 class="content-header-title float-start mb-0">Form Layouts</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index-2.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Forms</a>
                                    </li>
                                    <li class="breadcrumb-item active"><a href="#">Form Layouts</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    data-feather="grid"></i></button>
                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                    href="app-todo.html"><i class="me-1" data-feather="check-square"></i><span
                                        class="align-middle">Todo</span></a><a class="dropdown-item"
                                    href="app-chat.html"><i class="me-1" data-feather="message-square"></i><span
                                        class="align-middle">Chat</span></a><a class="dropdown-item"
                                    href="app-email.html"><i class="me-1" data-feather="mail"></i><span
                                        class="align-middle">Email</span></a><a class="dropdown-item"
                                    href="app-calendar.html"><i class="me-1" data-feather="calendar"></i><span
                                        class="align-middle">Calendar</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <section id="basic-horizontal-layouts">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Horizontal Form</h4>
                            </div>
                            <div class="card-body">
                                <form class="form form-horizontal">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-1 row">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label" for="first-name">First Name</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" id="first-name" class="form-control" name="fname"
                                                        placeholder="First Name" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-1 row">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label" for="email-id">Email</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="email" id="email-id" class="form-control"
                                                        name="email-id" placeholder="Email" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-1 row">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label" for="contact-info">Mobile</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="number" id="contact-info" class="form-control"
                                                        name="contact" placeholder="Mobile" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-1 row">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label" for="password">Password</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="password" id="password" class="form-control"
                                                        name="password" placeholder="Password" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 offset-sm-3">
                                            <div class="mb-1">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck1" />
                                                    <label class="form-check-label" for="customCheck1">Remember
                                                        me</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 offset-sm-3">
                                            <button type="reset" class="btn btn-primary me-1">Submit</button>
                                            <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                            <div class="card">
                              <div class="card-header">
                                <h4 class="card-title">Table Basic</h4>
                              </div>
                              <div class="card-body">
                                <p class="card-text">
                                  Using the most basic table Leanne Grahamup, here’s how <code>.table</code>-based tables look in Bootstrap. You
                                  can use any example of below table for your table and it can be use with any type of bootstrap tables.
                                </p>
                              </div>
                              <div class="table-responsive">
                                <table class="table">
                                  <thead>
                                    <tr>
                                      <th>Project</th>
                                      <th>Client</th>
                                      <th>Users</th>
                                      <th>Status</th>
                                      <th>Actions</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>
                                        <img
                                          src="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/icons/angular.svg"
                                          class="me-75"
                                          height="20"
                                          width="20"
                                          alt="Angular"
                                        />
                                        <span class="fw-bold">Angular Project</span>
                                      </td>
                                      <td>Peter Charls</td>
                                      <td>
                                        <div class="avatar-group">
                                          <div
                                            data-bs-toggle="tooltip"
                                            data-popup="tooltip-custom"
                                            data-bs-placement="top"
                                            class="avatar pull-up my-0"
                                            title="Lilian Nenez"
                                          >
                                            <img
                                              src="../../../app-assets/images/portrait/small/avatar-s-5.jpg"
                                              alt="Avatar"
                                              height="26"
                                              width="26"
                                            />
                                          </div>
                                          <div
                                            data-bs-toggle="tooltip"
                                            data-popup="tooltip-custom"
                                            data-bs-placement="top"
                                            class="avatar pull-up my-0"
                                            title="Alberto Glotzbach"
                                          >
                                            <img
                                              src="../../../app-assets/images/portrait/small/avatar-s-6.jpg"
                                              alt="Avatar"
                                              height="26"
                                              width="26"
                                            />
                                          </div>
                                          <div
                                            data-bs-toggle="tooltip"
                                            data-popup="tooltip-custom"
                                            data-bs-placement="top"
                                            class="avatar pull-up my-0"
                                            title="Alberto Glotzbach"
                                          >
                                            <img
                                              src="../../../app-assets/images/portrait/small/avatar-s-7.jpg"
                                              alt="Avatar"
                                              height="26"
                                              width="26"
                                            />
                                          </div>
                                        </div>
                                      </td>
                                      <td><span class="badge rounded-pill badge-light-primary me-1">Active</span></td>
                                      <td>
                                        <div class="dropdown">
                                          <button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i data-feather="more-vertical"></i>
                                          </button>
                                          <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">
                                              <i data-feather="edit-2" class="me-50"></i>
                                              <span>Edit</span>
                                            </a>
                                            <a class="dropdown-item" href="#">
                                              <i data-feather="trash" class="me-50"></i>
                                              <span>Delete</span>
                                            </a>
                                          </div>
                                        </div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <img
                                          src="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/icons/react.svg"
                                          class="me-75"
                                          height="20"
                                          width="20"
                                          alt="React"
                                        />
                                        <span class="fw-bold">React Project</span>
                                      </td>
                                      <td>Ronald Frest</td>
                                      <td>
                                        <div class="avatar-group">
                                          <div
                                            data-bs-toggle="tooltip"
                                            data-popup="tooltip-custom"
                                            data-bs-placement="top"
                                            class="avatar pull-up my-0"
                                            title="Lilian Nenez"
                                          >
                                            <img
                                              src="../../../app-assets/images/portrait/small/avatar-s-5.jpg"
                                              alt="Avatar"
                                              height="26"
                                              width="26"
                                            />
                                          </div>
                                          <div
                                            data-bs-toggle="tooltip"
                                            data-popup="tooltip-custom"
                                            data-bs-placement="top"
                                            class="avatar pull-up my-0"
                                            title="Alberto Glotzbach"
                                          >
                                            <img
                                              src="../../../app-assets/images/portrait/small/avatar-s-6.jpg"
                                              alt="Avatar"
                                              height="26"
                                              width="26"
                                            />
                                          </div>
                                          <div
                                            data-bs-toggle="tooltip"
                                            data-popup="tooltip-custom"
                                            data-bs-placement="top"
                                            class="avatar pull-up my-0"
                                            title="Alberto Glotzbach"
                                          >
                                            <img
                                              src="../../../app-assets/images/portrait/small/avatar-s-7.jpg"
                                              alt="Avatar"
                                              height="26"
                                              width="26"
                                            />
                                          </div>
                                        </div>
                                      </td>
                                      <td><span class="badge rounded-pill badge-light-success me-1">Completed</span></td>
                                      <td>
                                        <div class="dropdown">
                                          <button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i data-feather="more-vertical"></i>
                                          </button>
                                          <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">
                                              <i data-feather="edit-2" class="me-50"></i>
                                              <span>Edit</span>
                                            </a>
                                            <a class="dropdown-item" href="#">
                                              <i data-feather="trash" class="me-50"></i>
                                              <span>Delete</span>
                                            </a>
                                          </div>
                                        </div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <img
                                          src="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/icons/vuejs.svg"
                                          class="me-75"
                                          height="20"
                                          width="20"
                                          alt="Vuejs"
                                        />
                                        <span class="fw-bold">Vuejs Project</span>
                                      </td>
                                      <td>Jack Obes</td>
                                      <td>
                                        <div class="avatar-group">
                                          <div
                                            data-bs-toggle="tooltip"
                                            data-popup="tooltip-custom"
                                            data-bs-placement="top"
                                            class="avatar pull-up my-0"
                                            title="Lilian Nenez"
                                          >
                                            <img
                                              src="../../../app-assets/images/portrait/small/avatar-s-5.jpg"
                                              alt="Avatar"
                                              height="26"
                                              width="26"
                                            />
                                          </div>
                                          <div
                                            data-bs-toggle="tooltip"
                                            data-popup="tooltip-custom"
                                            data-bs-placement="top"
                                            class="avatar pull-up my-0"
                                            title="Alberto Glotzbach"
                                          >
                                            <img
                                              src="../../../app-assets/images/portrait/small/avatar-s-6.jpg"
                                              alt="Avatar"
                                              height="26"
                                              width="26"
                                            />
                                          </div>
                                          <div
                                            data-bs-toggle="tooltip"
                                            data-popup="tooltip-custom"
                                            data-bs-placement="top"
                                            class="avatar pull-up my-0"
                                            title="Alberto Glotzbach"
                                          >
                                            <img
                                              src="../../../app-assets/images/portrait/small/avatar-s-7.jpg"
                                              alt="Avatar"
                                              height="26"
                                              width="26"
                                            />
                                          </div>
                                        </div>
                                      </td>
                                      <td><span class="badge rounded-pill badge-light-info me-1">Scheduled</span></td>
                                      <td>
                                        <div class="dropdown">
                                          <button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i data-feather="more-vertical"></i>
                                          </button>
                                          <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">
                                              <i data-feather="edit-2" class="me-50"></i>
                                              <span>Edit</span>
                                            </a>
                                            <a class="dropdown-item" href="#">
                                              <i data-feather="trash" class="me-50"></i>
                                              <span>Delete</span>
                                            </a>
                                          </div>
                                        </div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <img
                                          src="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/icons/bootstrap.svg"
                                          class="me-75"
                                          height="20"
                                          width="20"
                                          alt="Bootstrap"
                                        />
                                        <span class="fw-bold">Bootstrap Project</span>
                                      </td>
                                      <td>Jerry Milton</td>
                                      <td>
                                        <div class="avatar-group">
                                          <div
                                            data-bs-toggle="tooltip"
                                            data-popup="tooltip-custom"
                                            data-bs-placement="top"
                                            class="avatar pull-up my-0"
                                            title="Lilian Nenez"
                                          >
                                            <img
                                              src="../../../app-assets/images/portrait/small/avatar-s-5.jpg"
                                              alt="Avatar"
                                              height="26"
                                              width="26"
                                            />
                                          </div>
                                          <div
                                            data-bs-toggle="tooltip"
                                            data-popup="tooltip-custom"
                                            data-bs-placement="top"
                                            class="avatar pull-up my-0"
                                            title="Alberto Glotzbach"
                                          >
                                            <img
                                              src="../../../app-assets/images/portrait/small/avatar-s-6.jpg"
                                              alt="Avatar"
                                              height="26"
                                              width="26"
                                            />
                                          </div>
                                          <div
                                            data-bs-toggle="tooltip"
                                            data-popup="tooltip-custom"
                                            data-bs-placement="top"
                                            class="avatar pull-up my-0"
                                            title="Alberto Glotzbach"
                                          >
                                            <img
                                              src="../../../app-assets/images/portrait/small/avatar-s-7.jpg"
                                              alt="Avatar"
                                              height="26"
                                              width="26"
                                            />
                                          </div>
                                        </div>
                                      </td>
                                      <td><span class="badge rounded-pill badge-light-warning me-1">Pending</span></td>
                                      <td>
                                        <div class="dropdown">
                                          <button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i data-feather="more-vertical"></i>
                                          </button>
                                          <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">
                                              <i data-feather="edit-2" class="me-50"></i>
                                              <span>Edit</span>
                                            </a>
                                            <a class="dropdown-item" href="#">
                                              <i data-feather="trash" class="me-50"></i>
                                              <span>Delete</span>
                                            </a>
                                          </div>
                                        </div>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
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
