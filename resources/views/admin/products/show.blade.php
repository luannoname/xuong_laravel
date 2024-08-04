@extends('layouts.admin')

@section('css')
    <!-- FooTable -->
    <link href="{{ url('admin/assets') }}/css/plugins/footable/footable.core.css" rel="stylesheet">
    <!-- Sweet Alert -->
    <link href="{{ url('admin/assets') }}/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="{{ url('admin/assets') }}/css/plugins/toastr/toastr.min.css" rel="stylesheet">
@endsection

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-8">
        <h2>{{ $title }}</h2>
        <ol class="breadcrumb" style="margin-bottom: 10px;">
            <li>
                <a href="{{ route('admin.dashboard') }}">Trang chủ</a>
            </li>
            <li class="active"><strong>{{ $table1 }}</strong></li>
            <li class="active"><strong>{{ $table2 }}</strong></li>
        </ol>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight ecommerce">
    
    <div class="ibox-content m-b-sm border-bottom">
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="control-label" for="product_name">Product Name</label>
                    <input type="text" id="product_name" name="product_name" value="" placeholder="Product Name" class="form-control">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label class="control-label" for="price">Price</label>
                    <input type="text" id="price" name="price" value="" placeholder="Price" class="form-control">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label class="control-label" for="quantity">Quantity</label>
                    <input type="text" id="quantity" name="quantity" value="" placeholder="Quantity" class="form-control">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label class="control-label" for="status">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="1" selected>Enabled</option>
                        <option value="0">Disabled</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group mt-24">
                    <a href="{{ route('admin.products.create') }}" class="btn btn-w-m btn-primary">Thêm sản phẩm</a>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-content">

                    <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="15">
                        <thead>
                        <tr>

                            <th data-toggle="true">#</th>
                            <th data-hide="phone">Hình ảnh</th>
                            <th data-hide="phone">Màu sắc</th>
                            <th data-hide="phone">Kích cỡ</th>
                            <th data-hide="phone">Giá</th>
                            <th data-hide="phone">Giá sale</th>
                            <th data-hide="phone">Số lượng</th>
                            <th class="text-right" data-sort-ignore="true">Action</th>

                        </tr>
                        </thead>
                        <tbody>
                            @foreach($product->variants as $index => $variant)
                                <tr>
                                    <td>{{ $index+1 }}</td>
                                    <td><img src="{{ Storage::url($variant->image) }}" class="width-img" alt=""></td>
                                    <td>{{ $variant->color->name }}</td>
                                    <td>{{ $variant->size->name }}</td>
                                    <td>{{ number_format($variant->price) }}</td>
                                    <td>{{ number_format($variant->price_sale) }}</td>
                                    <td>{{ $variant->quantity }}</td>
                                
                                    <td class="text-right">
                                        <a href="{{ route('admin.products.show', $variant->id) }}" class="btn btn-primary"><i class="fa fa-search-plus"></i></a>
                                        <a href="{{ route('admin.products.edit', $variant->id) }}" class="btn btn-success"><i class="fa fa-edit"></i></a>

                                                <form action="{{ route('admin.products.destroy', $variant->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-danger demo3">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="6">
                                <ul class="pagination pull-right"></ul>
                            </td>
                        </tr>
                        </tfoot>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <!-- FooTable -->
    <script src="{{ url('admin/assets') }}/js/plugins/footable/footable.all.min.js"></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function() {

            $('.footable').footable();

        });

    </script>
     <!-- Toastr script -->
     <script src="{{ url('admin/assets') }}/js/plugins/toastr/toastr.min.js"></script>
     <script src="{{ url('admin/assets') }}/js/plugins/sweetalert/sweetalert.min.js"></script>
 
     <script>
         $(document).ready(function() {
             @if (session('success'))
                 var shortCutFunction = 'success'; // Có thể là 'info', 'warning', 'error'
                 var msg = "{{ session('success') }}";
                 var title = 'Thông báo';
                 
                 toastr.options = {
                     "closeButton": true,
                     "debug": false,
                     "progressBar": true,
                     "preventDuplicates": false,
                     "positionClass": "toast-top-right",
                     "onclick": null,
                     "showDuration": "400",
                     "hideDuration": "1000",
                     "timeOut": "7000",
                     "extendedTimeOut": "1000",
                     "showEasing": "swing",
                     "hideEasing": "linear",
                     "showMethod": "fadeIn",
                     "hideMethod": "fadeOut"
                 }
 
                 // Hiển thị thông báo toast
                 var $toast = toastr[shortCutFunction](msg, title);
                 
                 // Chuyển hướng sau khi toast được hiển thị
                 $toast.on('hidden.bs.toast', function () {
                     window.location.href = "{{ route('admin.products.index') }}";
                 });
             @endif
         });
     </script>
 
     <script>
         $(document).ready(function () {
             $('.demo3').click(function (e) {
                 e.preventDefault(); // Ngăn chặn hành động mặc định của nút submit
 
                 var form = $(this).closest('form'); // Lấy form chứa nút delete
 
                 swal({
                     title: "Bạn có chắc chắn muốn xóa?",
                     text: "Bạn sẽ không thể khôi phục lại tập tin này!",
                     type: "warning",
                     showCancelButton: true,
                     confirmButtonColor: "#DD6B55",
                     confirmButtonText: "Xóa ngay!",
                     cancelButtonText: "Hủy",
                     closeOnConfirm: false,
                     closeOnCancel: false
                 }, function (isConfirm) {
                     if (isConfirm) {
                         $.ajax({
                             url: form.attr('action'),
                             type: form.attr('method'),
                             data: form.serialize(),
                             success: function (response) {
                                 // Hiển thị thông báo thành công bằng Toastr
                                 var shortCutFunction = 'success'; // Có thể là 'info', 'warning', 'error'
                                 var msg = response.success || "Xóa tập tin thành công";
                                 var title = 'Thông báo';
                                 
                                 toastr.options = {
                                     "closeButton": true,
                                     "debug": false,
                                     "progressBar": true,
                                     "preventDuplicates": false,
                                     "positionClass": "toast-top-right",
                                     "onclick": null,
                                     "showDuration": "400",
                                     "hideDuration": "1000",
                                     "timeOut": "7000",
                                     "extendedTimeOut": "1000",
                                     "showEasing": "swing",
                                     "hideEasing": "linear",
                                     "showMethod": "fadeIn",
                                     "hideMethod": "fadeOut"
                                 };
 
                                 toastr[shortCutFunction](msg, title);
 
                                 // Hiển thị hộp thoại SweetAlert với nút OK
                                 swal({
                                     title: "Đã xóa!",
                                     text: "Tập tin của bạn đã bị xóa.",
                                     type: "success",
                                     confirmButtonText: "OK"
                                 }, function () {
                                     window.location.reload(); // Tải lại trang sau khi nhấn OK
                                 });
                             },
                             error: function () {
                                 swal("Lỗi!", "Đã xảy ra lỗi khi xóa tập tin.", "error");
                             }
                         });
                     } else {
                         swal.close(); // đóng hộp thoại khi ấn cancel
                     }
                 });
             });
         });
     </script>
@endsection

