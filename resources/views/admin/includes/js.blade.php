<!-- latest jquery-->
<script src="{{asset('assets/dashboard')}}/js/jquery-3.5.1.min.js"></script>
<script src="{{asset('assets/dashboard')}}/js/bootstrap/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets/dashboard')}}/js/scrollbar/simplebar.js"></script>
<script src="{{asset('assets/dashboard')}}/js/scrollbar/custom.js"></script>
<script src="{{asset('assets/dashboard')}}/js/counter/jquery.waypoints.min.js"></script>
<script src="{{asset('assets/dashboard')}}/js/counter/jquery.counterup.min.js"></script>
<script src="{{asset('assets/dashboard')}}/js/sidebar-menu.js"></script>
<script src="{{asset('assets/dashboard')}}/js/notify/bootstrap-notify.min.js"></script>
<script src="{{asset('assets/dashboard')}}/js/notify/index.js"></script>
<script src="{{asset('assets/dashboard')}}/js/echarts.js"></script>
<script src="{{asset('assets/dashboard')}}/js/datatable/datatables/jquery.datatables.min.js"></script>
<script src="{{asset('assets/dashboard')}}/js/datatable/datatable-extension/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('assets/dashboard')}}/js/datatable/datatable-extension/dataTables.buttons.min.js"></script>
<script src="{{asset('assets/dashboard')}}/js/datatable/datatable-extension/jszip.min.js"></script>
<script src="{{asset('assets/dashboard')}}/js/datatable/datatable-extension/buttons.colVis.min.js"></script>
<script src="{{asset('assets/dashboard')}}/js/datatable/datatable-extension/pdfmake.min.js"></script>
<script src="{{asset('assets/dashboard')}}/js/datatable/datatable-extension/vfs_fonts.js"></script>
<script src="{{asset('assets/dashboard')}}/js/datatable/datatable-extension/buttons.bootstrap4.min.js"></script>
<script src="{{asset('assets/dashboard')}}/js/datatable/datatable-extension/buttons.html5.min.js"></script>
<script src="{{asset('assets/dashboard')}}/js/datatable/datatable-extension/buttons.print.min.js"></script>
<script src="{{asset('assets/dashboard')}}/js/select2/select2.full.min.js"></script>
<script src="{{asset('assets/dashboard/js/datepicker/moment.min.js')}}"></script>
<script src="{{asset('assets/dashboard/js/datepicker/datepicker.js')}}"></script>
<script src="{{asset('assets/dashboard')}}/js/script.js"></script>
<script src="{{asset('assets/dashboard/plugins/metro/js/design.js')}}"></script>
<script src="{{asset('assets/dashboard/plugins/sweetalert/swal.js')}}"></script>

<script src="{{asset('assets/dashboard/js/editor/ckeditor/ckeditor.js')}}"></script>

@include('admin.includes.helper')
@include('admin.includes.swal')
@stack('js')

