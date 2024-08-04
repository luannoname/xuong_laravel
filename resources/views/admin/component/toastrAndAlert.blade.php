<!-- jQuery script -->
<script src="{{ url('admin/assets') }}/js/jquery-3.1.1.min.js"></script>
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
                        window.location.href = "{{ route('admin.categories.index') }}";
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