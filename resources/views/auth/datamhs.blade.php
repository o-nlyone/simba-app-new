@include('layout.app', ['title' => 'Data Mahasiswa'])
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" type="text/css"
    href="{{asset('app-assets/css/plugins/extensions/ext-component-toastr.min.css')}}">
@include('layout.css')

<!-- BEGIN: Body-->

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
                            <h2 class="content-header-title float-start mb-0">Data Mahasiswa</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/dashboard">Informasi BPP</a>
                                    </li>
                                    <li class="breadcrumb-item active">Mahasiswa
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- users list start -->
                <section class="app-user-list">
                    <!-- users filter start -->
                    <div class="card">
                        <div class="card_body">
                            <h5 class="card-header">Filter Pencarian</h5>
                            <div class="d-flex justify-content-between align-items-center mx-50 row pt-0 pb-2">
                                <div class="row">
                                    <div class="col-md-3 user_role"><label class="form-label"
                                        for="UserRole">Jurusan</label>
                                    <select id="filter-mhs_Jurusan" class="form-select text-capitalize mb-md-0 mb-2">
                                        <option value=""> Jurusan </option>
                                        <option value="TI"> Teknik Informatika </option>
                                        <option value="SI"> Sistem Informasi </option>
                                    </select>
                                </div>
                                    <div class="col-md-3 user_role"><label class="form-label"
                                            for="UserRole">Angkatan</label>
                                        <select id="filter-mhs_Angkatan" class="form-select text-capitalize mb-md-0 mb-2">
                                            <option value=""> Angkatan </option>
                                            @for ($i = 12; $i<50; $i++) <option value="20{{$i}}"> 20{{$i}} </option>
                                                @endfor
                                        </select>
                                    </div>
                                    <div class="col-md-3 user_plan"><label class="form-label"
                                            for="UserRole">Status</label>
                                        <select id="filter-status_mhs" class="form-select text-capitalize mb-md-0 mb-2">
                                            <option value=""> Status </option>
                                            <option value="aktif"> Aktif </option>
                                            <option value="nonaktif"> Nonaktif </option>
                                            <option value="cuti"> Cuti </option>
                                            <option value="lulus"> Lulus </option>
                                        </select>
                                    </div>
                                        <div class="col-md-3 user_status"><label class="form-label"
                                                for="UserRole">Beasiswa</label>
                                            <select id="filter-mhs_Beasiswa" class="form-select text-capitalize mb-md-0 mb-2">
                                                <option value=""> Beasiswa </option>
                                                <option value="mhs_binaan1"> Mahasiswa Binaan 1 </option>
                                                <option value="mhs_binaan2"> Mahasiswa Binaan 2 </option>
                                            </select>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <!-- users filter end -->
                        <!-- list section start -->
                        <div class="card">
                            <div style="margin: 10pt">
                                <div class="card-datatable table-responsive pt-0">
                                    <button href="javascript:void(0)" class="btn btn-success" id="tombol-tambah">
                                        <i data-feather='user-plus'></i>
                                    </button>
                                    <table class="user-list-table table dataTable" id="tbl_mhs">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Nama Mahasiswa</th>
                                                <th>NIM</th>
                                                <th>Jurusan</th>
                                                <th>Angkatan</th>
                                                <th>Status</th>
                                                <th>Beasiswa</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="tambah-edit-modal">
                            <div class="modal-dialog">
                                <form id="form-tambah-edit" class="add-new-user modal-content pt-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="modal-judul">New User</h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <input type="text" id="id" name="id" value="" hidden/>
                                        <div class="mb-1">
                                            <label class="form-label" for="basic-icon-default-fullname">Nama Lengkap</label>
                                            <input type="text" class="form-control dt-full-name"
                                                id="nama_mhs" placeholder="Nama Lengkap"
                                                name="nama_mhs" aria-label="Nama Lengkap" value=""
                                                aria-describedby="basic-icon-default-fullname2" onkeyup="this.value = this.value.toUpperCase();" />
                                        </div>
                                        <div class="mb-1">
                                            <label class="form-label" for="basic-icon-default-uname">Nomor Induk Mahasiswa</label>
                                            <input type="number" id="nim"
                                                class="form-control dt-uname" placeholder="130xxxxxx"
                                                value="" name="nim"
                                                aria-label="jdoe1" aria-describedby="basic-icon-default-uname2" />
                                        </div>
                                        <div class="mb-1">
                                            <label class="form-label" for="basic-icon-default-fullname">Nomor Telepon</label>
                                            <input type="text" class="form-control dt-full-name"
                                                id="notelp_mhs" placeholder="Nomor Telepon"
                                                name="notelp_mhs" aria-label="Nomor Telepon" value=""
                                                aria-describedby="basic-icon-default-fullname2" />
                                        </div>
                                        <div class="mb-1">
                                            <label class="form-label" for="basic-icon-default-email">Jurusan</label>
                                            <select name="jurusan" class="form-select" id="jurusan" required>
                                                <option value="">Jurusan</option>
                                                <option value="TI"> Teknik Informatika</option>
                                                <option value="SI"> Sistem Informasi</option>
                                            </select>
                                        </div>
                                        <div class="mb-1">
                                            <label class="form-label" for="user-role">Angkatan</label>
                                            <select name="angkatan" id="angkatan" class="form-select">
                                                <option value="">Angkatan</option>
                                                @for ($i = 12; $i<50; $i++)
                                                <option value="20{{$i}}"> 20{{$i}} </option>
                                                @endfor
                                            </select>
                                        </div>
                                        <div class="mb-2">
                                            <label class="form-label" for="user-plan">Status Mahasiswa</label>
                                            <select name="status_mhs" id="status_mhs" class="form-select">
                                                <option value="">Status</option>
                                                <option value="aktif">aktif</option>
                                                <option value="nonaktif">nonaktif</option>
                                                <option value="cuti">cuti</option>
                                                <option value="lulus">lulus</option>
                                            </select>
                                        </div>
                                        <div class="mb-2">
                                            <label class="form-label" for="user-plan">Beasiswa Mahasiswa</label>
                                            <select name="mhs_spesial" id="mhs_spesial" class="form-select">
                                                <option value=""> Beasiswa </option>
                                                <option value="tidak"> tidak </option>
                                                <option value="mhs_binaan1"> Mahasiswa Binaan 1 </option>
                                                <option value="mhs_binaan2"> Mahasiswa Binaan 2 </option>
                                            </select>
                                        </div>
                                        <button id="tombol-simpan" type="submit" class="btn btn-primary me-1 data-submit">Submit</button>
                                        <button type="reset" class="btn btn-outline-secondary"
                                            data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->
                        {{-- Modal Untuk Konfirmasi Delete --}}
                        <div class="modal fade text-start" tabindex="-1" role="dialog" id="konfirmasi-modal"
                            data-backdrop="false">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-danger"><b>PERHATIAN</b></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p><b>Jika Menghapus Mahasiswa maka,</b></p>
                                        <p>Data Mahasiswa tersebut hilang selamanya, apakah anda yakin?</p>
                                    </div>
                                    <div class="modal-footer bg-whitesmoke br">
                                        <button type="button" class="btn btn-primary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-danger" name="tombol-hapus"
                                            id="tombol-hapus">Hapus
                                            Data</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- end modal konfirmasi delete --}}
                    </div>
                    <!-- list section end -->
                </section>
                <!-- users list ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
    @if (session()->get('ses_success'))
    <script>
        $("#tombol-simpan").on("click", (function () {
            "use strict";
                // console.log(document.getElementById('tombol-simpan').innerText);
                if (document.getElementById('tombol-simpan').innerText == 'Simpan'){
                    toastr.success("👋 Sukses Mengedit Data Mahasiswa", "Data Teredit!", {
                        positionClass: "toast-bottom-left",
                        closeButton: !0,
                        tapToDismiss: !1,
                        rtl: o
                    })
                } else if (document.getElementById('tombol-simpan').innerText == 'Tambah') {
                    toastr.success("👋 Sukses Menambah Data Mahasiswa", "Data Tertambah!", {
                        positionClass: "toast-bottom-left",
                        closeButton: !0,
                        tapToDismiss: !1,
                        rtl: o
                    })
                }
            }
    </script>
    @endif
    @include('layout.footers')



    <script src="ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <script>
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            })
        });

        //tomboh tambah mhs
        $('#tombol-tambah').click(function () {
            $('#tombol-simpan').html("Tambah"); //valuenya menjadi create-post
            $('#id').val(''); //valuenya menjadi kosong
            $('#form-tambah-edit').trigger("reset"); //mereset semua input dll didalamnya
            $('#modal-judul').html("Tambah Mahasiswa Baru"); //valuenya tambah pegawai baru
            $('#tambah-edit-modal').modal('show'); //modal tampil
        });

        $(document).ready( function () {
            $('#tbl_mhs').DataTable(
                {
                serverSide : true,
                processing : true,
                language : {
                    processing : "<div class='spinner-border text-primary' role='status'> <span class='visually-hidden'>Loading...</span></div>"
                },

                ajax : {
                    url: '{{ route('datamhs.index') }}',
                    type: 'GET'
                },
                columns : [
                    {data: 'nama_mhs'},
                    {data: 'nim'},
                    {data: 'jurusan'},
                    {data: 'angkatan'},
                    {data: 'status_mhs'},
                    {data: 'mhs_spesial'},
                    {data: 'action'}
                ],
                order: [[0, 'asc']],
                "drawCallback" : function( settings ) {
                    feather.replace();
                }

            },
            );
        } );

        if ($("#form-tambah-edit").length > 0) {
            $("#form-tambah-edit").validate({
                submitHandler: function (form) {
                    var actionType = $('#tombol-simpan').val();
                    $('#tombol-simpan').html('Mengirim..');

                    $.ajax({
                        data: $('#form-tambah-edit')
                            .serialize(), //function yang dipakai agar value pada form-control seperti input, textarea, select dll dapat digunakan pada URL query string ketika melakukan ajax request
                        url: "{{ route('datamhs.store') }}", //url simpan data
                        type: "POST", //karena simpan kita pakai method POST
                        dataType: 'json', //data tipe kita kirim berupa JSON
                        success: function (data) { //jika berhasil
                            $('#tambah-edit-modal').modal('hide'); //modal hide
                            $('#tombol-simpan').html('Simpan'); //tombol simpan
                            $('#form-tambah-edit').trigger("reset");
                            var oTable = $('#tbl_mhs').dataTable(); //inialisasi datatable
                            oTable.fnDraw(false);
                        },
                        error: function (data) { //jika error tampilkan error pada console
                            console.log('Error:', data);
                            $('#tombol-simpan').html('Simpan');
                        }
                    });
                }
            })
        }

        //tombol edit post di klik
        $('body').on('click', '.edit-post', function () {
            var data_id = $(this).data('id');
            $.get('datamhs/' + data_id + '/edit', function (data) {
                $('#modal-judul').html("Edit Mahasiswa");
                $('#tombol-simpan').html("Simpan");
                $('#tambah-edit-modal').modal('show');

                //set value masing-masing id berdasarkan data yg diperoleh dari ajax get request diatas
                $('#id').val(data.id);
                $('#nama_mhs').val(data.nama_mhs);
                $('#nim').val(data.nim);
                $('#jurusan').val(data.jurusan);
                $('#angkatan').val(data.angkatan);
                $('#status_mhs').val(data.status_mhs);
                $('#mhs_spesial').val(data.mhs_spesial);
                $('#notelp_mhs').val(data.notelp_mhs);
            })
        });

        //Modal Konfirmasi Delete
        $(document).on('click', '.delete', function () {
            dataId = $(this).attr('id');
            $('#konfirmasi-modal').modal('show');
        });

        //jika tombol hapus pada modal konfirmasi di klik maka
        $('#tombol-hapus').click(function () {
            $.ajax({
                url: "/datamhs/" + dataId, //eksekusi ajax ke url ini
                type: 'DELETE',
                beforeSend: function () {
                    $('#tombol-hapus').text('Hapus Data'); //set text untuk tombol hapus
                },
                success: function (data) { //jika sukses
                    setTimeout(function () {
                        $('#konfirmasi-modal').modal('hide'); //sembunyikan konfirmasi modal
                        var oTable = $('#tbl_mhs').dataTable();
                        oTable.fnDraw(false); //reset datatable
                    });
                }
            })
        });




    </script>
</body>


</html>
