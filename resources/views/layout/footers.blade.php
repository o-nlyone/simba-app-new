 <!-- BEGIN: Footer-->
     <div class="mb-1 breadcrumb-right">
             <button class="btn btn-primary waves-effect waves-float waves-light scroll-top" type="button"><i data-feather="arrow-up"></i></button>
     </div>
 <footer class="footer footer-static footer-light">
     <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2021<a
                 class="ms-25" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Fakultas Ilmu Komputer
                 UMI</a><span class="d-none d-sm-inline-block">, All rights Reserved</span></span><span
             class="float-md-end d-none d-md-block">Hand-crafted & Made with<i data-feather="heart"></i></span></p>
 </footer>
 <!-- END: Footer-->


 <!-- BEGIN: Vendor JS-->
 <script src="{{asset('app-assets/vendors/js/vendors.min.js')}}"></script>
 <!-- BEGIN Vendor JS-->

 <!-- BEGIN: Page Vendor JS-->
 <script src="{{asset('app-assets/vendors/js/charts/apexcharts.min.js')}}"></script>
 <script src="{{asset('app-assets/vendors/js/extensions/toastr.min.js')}}"></script>
 <script src="{{asset('app-assets/vendors/js/extensions/moment.min.js')}}"></script>
 <script src="{{asset('app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js')}}"></script>
 <script src="{{asset('app-assets/vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
 <script src="{{asset('app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js')}}"></script>
 <script src="{{asset('app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js')}}"></script>
 <script src="{{asset('app-assets/vendors/js/tables/datatable/responsive.bootstrap4.js')}}"></script>

 <!-- END: Page Vendor JS-->

 <!-- BEGIN: Theme JS-->
 <script src="{{asset('app-assets/js/core/app-menu.min.js')}}"></script>
 <script src="{{asset('app-assets/js/core/app.min.js')}}"></script>
 <script src="{{asset('app-assets/js/scripts/customizer.min.js')}}"></script>
 <!-- END: Theme JS-->

 <!-- BEGIN: Page JS-->
 <script src="{{asset('app-assets/js/scripts/pages/dashboard-analytics.min.js')}}"></script>
 <script src="{{asset('app-assets/js/scripts/pages/app-invoice-list.min.js')}}"></script>
 {{-- <script src="{{asset('app-assets/js/scripts/pages/app-user-list.min.js')}}"></script> --}}
 <script src="{{asset('app-assets/js/scripts/extensions/ext-component-toastr.min.js')}}"></script>
 <script src="{{asset('app-assets/js/scripts/forms/form-input-mask.min.js')}}"></script>
 <!-- END: Page JS-->



 <script>
     $(window).on('load', function () {
         if (feather) {
             feather.replace({
                 width: 14,
                 height: 14
             });
         }
     })

 </script>
