@include('layout.app', ['title' => 'Tagihan'])
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
                            <h2 class="content-header-title float-start mb-0">Tagihan</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/dashboard">Informasi BPP</a>
                                    </li>
                                    <li class="breadcrumb-item active">Tagihan
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
                        <!-- list section start -->
                        <div class="card">
                            <div style="margin: 10pt">
                                <div class="card-datatable table-responsive pt-0">
                                    </button>
                                    <table class="user-list-table table dataTable" id="tbl_tagihan">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Id Tagihan</th>
                                                <th>NIM</th>
                                                <th>Tahun Ajaran</th>
                                                <th>Jumlah Pembayaran</th>
                                                <th>Ubah</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- list section end -->
                </section>
                <!-- users list ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
    @include('layout.footers')
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <script>
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            })
        });

        $(document).ready( function () {
            $('#tbl_tagihan').DataTable(
                {
                serverSide : true,
                processing : true,
                language : {
                    processing : "<div class='spinner-border text-primary' role='status'> <span class='visually-hidden'>Loading...</span></div>"
                },

                ajax : {
                    url: '{{ route('tagihan.index') }}',
                    type: 'GET'
                },
                columns : [
                    {data: 'id'},
                    {data: 'nim'},
                    {data: 'ta'},
                    {data: 'jml'},
                    {data: 'action'}
                ],
                order: [[0, 'asc']],
                "drawCallback" : function( settings ) {
                    feather.replace();
                }

            },
            );
        } );

        //tombol edit post di klik
        $('body').on('click', '.edit-post', function () {
            var data_id = $(this).data('id');
            var values = {
                'jml_tagihan' : document.getElementById('jml'+data_id).value
            };
            $.ajax({
                url: "/tagihan/"+ data_id+"/edit", //url simpan data
                method: "GET", //karena simpan kita pakai method POST
                data: values,
                success: function (data) {
                    var oTable = $('#tbl_tagihan').dataTable(); //inialisasi datatable
                    oTable.fnDraw(false);
                },
                error: function (data) { //jika error tampilkan error pada console
                    console.log('Error:', data);
                }
            });
        });




    </script>
</body>
<!-- END: Body-->


</html>
