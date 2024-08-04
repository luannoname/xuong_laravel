@extends('layouts.admin')

@section('css')
    <link href="{{ url('admin/assets') }}/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="{{ url('admin/assets') }}/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
@endsection

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-8">
        <h2>{{ $title }}</h2>
        <ol class="breadcrumb" style="margin-bottom: 10px;">
            <li>
                <a href="{{ route('admin.dashboard') }}">Trang chủ</a>
            </li>
            <li>
                <a href="{{ route('admin.categories.index') }}">{{ $table1 }}</a>
            </li>
            <li class="active"><strong>{{ $table2 }}</strong></li>
        </ol>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight ecommerce">
    <div class="row">
        <div class="col-lg-12">
            <div class="tabs-container">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#tab-1"> Thông tin danh mục</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-2"> Data</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-3"> Discount</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-4"> Images</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane active">
                            <div class="panel-body">

                                <fieldset class="form-horizontal">
                                    <form id="form" action="{{ route('admin.categories.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        {{-- <div class="form-group">
                                            <label class="col-sm-2 control-label">Tên danh mục:</label>
                                            <div class="col-sm-10"><input type="text" name="category_name" value="{{ old('category_name') }}"
                                                class="form-control @error('category_name') is-invalid @enderror" placeholder="Tên danh mục">
                                                @error('category_name')
                                                    <i class="text-danger">{{ $message }}</i>
                                                @enderror
                                            </div>
                                        </div> --}}
                                        <div class="form-group">
                                        
                                            <label class="col-sm-2 control-label">Tên danh mục:</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="category_name" value="{{ old('category_name') }}"
                                                class="form-control @error('category_name') is-invalid @enderror" placeholder="Tên danh mục">
                                                @error('category_name')
                                                    <div class="message-err">* {{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group"><label class="col-sm-2 control-label">Hình ảnh:</label>
                                            <div class="col-sm-10"><input id="thumbnail" type="file" name="thumbnail"
                                                class="form-control" onchange="showThumbnail(event)">
                                                <img id="category_img" src="" style="width: 150px; display: none" alt="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Trạng thái:</label>
                                            {{-- <div class="i-checks"><input type="radio" value="1" name="status" checked> Hoạt động </div>
                                            <div class="i-checks"><input type="radio" value="0" name="status"> Không hoạt động</div> --}}
                                            <div class="radio radio-success radio-inline">
                                                <input type="radio" value="1" name="status" checked="">
                                                <label for="inlineRadio1"> Hoạt động </label>
                                            </div>
                                            <div class="radio radio-inline">
                                                <input type="radio" value="0" name="status">
                                                <label for="inlineRadio2"> Không hoạt động </label>
                                            </div>
                                        </div>
                                            
                                        
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Thêm</button>
                                        </div>
                                    </form>
                                </fieldset>

                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane">
                            <div class="panel-body">

                                <fieldset class="form-horizontal">
                                    <div class="form-group"><label class="col-sm-2 control-label">ID:</label>
                                        <div class="col-sm-10"><input type="text" class="form-control" placeholder="543"></div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">Model:</label>
                                        <div class="col-sm-10"><input type="text" class="form-control" placeholder="..."></div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">Location:</label>
                                        <div class="col-sm-10"><input type="text" class="form-control" placeholder="location"></div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">Tax Class:</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" >
                                                <option>option 1</option>
                                                <option>option 2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">Quantity:</label>
                                        <div class="col-sm-10"><input type="text" class="form-control" placeholder="Quantity"></div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">Minimum quantity:</label>
                                        <div class="col-sm-10"><input type="text" class="form-control" placeholder="2"></div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">Sort order:</label>
                                        <div class="col-sm-10"><input type="text" class="form-control" placeholder="0"></div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">Status:</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" >
                                                <option>option 1</option>
                                                <option>option 2</option>
                                            </select>
                                        </div>
                                    </div>
                                </fieldset>


                            </div>
                        </div>
                        <div id="tab-3" class="tab-pane">
                            <div class="panel-body">

                                <div class="table-responsive">
                                    <table class="table table-stripped table-bordered">

                                        <thead>
                                        <tr>
                                            <th>
                                                Group
                                            </th>
                                            <th>
                                                Quantity
                                            </th>
                                            <th>
                                                Discount
                                            </th>
                                            <th style="width: 20%">
                                                Date start
                                            </th>
                                            <th style="width: 20%">
                                                Date end
                                            </th>
                                            <th>
                                                Actions
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <select class="form-control" >
                                                    <option selected>Group 1</option>
                                                    <option>Group 2</option>
                                                    <option>Group 3</option>
                                                    <option>Group 4</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" placeholder="10">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" placeholder="$10.00">
                                            </td>
                                            <td>
                                                <div class="input-group date">
                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group date">
                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                </div>
                                            </td>
                                            <td>
                                                    <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <select class="form-control" >
                                                    <option selected>Group 1</option>
                                                    <option>Group 2</option>
                                                    <option>Group 3</option>
                                                    <option>Group 4</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" placeholder="10">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" placeholder="$10.00">
                                            </td>
                                            <td>
                                                <div class="input-group date">
                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group date">
                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                </div>
                                            </td>
                                            <td>
                                                <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <select class="form-control" >
                                                    <option selected>Group 1</option>
                                                    <option>Group 2</option>
                                                    <option>Group 3</option>
                                                    <option>Group 4</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" placeholder="10">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" placeholder="$10.00">
                                            </td>
                                            <td>
                                                <div class="input-group date">
                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group date">
                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                </div>
                                            </td>
                                            <td>
                                                <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <select class="form-control" >
                                                    <option selected>Group 1</option>
                                                    <option>Group 2</option>
                                                    <option>Group 3</option>
                                                    <option>Group 4</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" placeholder="10">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" placeholder="$10.00">
                                            </td>
                                            <td>
                                                <div class="input-group date">
                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group date">
                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                </div>
                                            </td>
                                            <td>
                                                <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <select class="form-control" >
                                                    <option selected>Group 1</option>
                                                    <option>Group 2</option>
                                                    <option>Group 3</option>
                                                    <option>Group 4</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" placeholder="10">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" placeholder="$10.00">
                                            </td>
                                            <td>
                                                <div class="input-group date">
                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group date">
                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                </div>
                                            </td>
                                            <td>
                                                <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <select class="form-control" >
                                                    <option selected>Group 1</option>
                                                    <option>Group 2</option>
                                                    <option>Group 3</option>
                                                    <option>Group 4</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" placeholder="10">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" placeholder="$10.00">
                                            </td>
                                            <td>
                                                <div class="input-group date">
                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group date">
                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                </div>
                                            </td>
                                            <td>
                                                <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <select class="form-control" >
                                                    <option selected>Group 1</option>
                                                    <option>Group 2</option>
                                                    <option>Group 3</option>
                                                    <option>Group 4</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" placeholder="10">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" placeholder="$10.00">
                                            </td>
                                            <td>
                                                <div class="input-group date">
                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group date">
                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                </div>
                                            </td>
                                            <td>
                                                <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                            </td>
                                        </tr>

                                        </tbody>

                                    </table>
                                </div>

                            </div>
                        </div>
                        <div id="tab-4" class="tab-pane">
                            <div class="panel-body">

                                <div class="table-responsive">
                                    <table class="table table-bordered table-stripped">
                                        <thead>
                                        <tr>
                                            <th>
                                                Image preview
                                            </th>
                                            <th>
                                                Image url
                                            </th>
                                            <th>
                                                Sort order
                                            </th>
                                            <th>
                                                Actions
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <img src="img/gallery/2s.jpg">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" disabled value="http://mydomain.com/images/image1.png">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="1">
                                            </td>
                                            <td>
                                                <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="img/gallery/1s.jpg">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" disabled value="http://mydomain.com/images/image2.png">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="2">
                                            </td>
                                            <td>
                                                <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="img/gallery/3s.jpg">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" disabled value="http://mydomain.com/images/image3.png">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="3">
                                            </td>
                                            <td>
                                                <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="img/gallery/4s.jpg">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" disabled value="http://mydomain.com/images/image4.png">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="4">
                                            </td>
                                            <td>
                                                <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="img/gallery/5s.jpg">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" disabled value="http://mydomain.com/images/image5.png">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="5">
                                            </td>
                                            <td>
                                                <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="img/gallery/6s.jpg">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" disabled value="http://mydomain.com/images/image6.png">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="6">
                                            </td>
                                            <td>
                                                <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="img/gallery/7s.jpg">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" disabled value="http://mydomain.com/images/image7.png">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" value="7">
                                            </td>
                                            <td>
                                                <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>

</div>

@endsection

@section('js')
<script>
    function showThumbnail (event) {
        const category_img = document.getElementById('category_img');
        const file = event.target.files[0];
        const reader = new FileReader();
        reader.onload = function () {
            category_img.src = reader.result;
            category_img.style.display = 'block';
        }
        if (file) {
            reader.readAsDataURL(file)
        }
    }
</script>

<!-- Jquery Validate -->
{{-- <script src="{{ url('admin/assets') }}/js/plugins/validate/jquery.validate.min.js"></script>

<script>
    $(document).ready(function(){
            $("#form").validate({
                rules: {
                    category_name: {
                        required: true,
                        maxlength: 255
                    },
                    thumbnail: {
                        required: true,
                        extension: "jpg|jpeg|png"
                    }
                },
                messages: {
                    category_name: {
                        required: "Vui lòng nhập tên danh mục",
                        maxlength: "Tên danh mục tối đa 255 ký tự"
                    },
                    thumbnail: {
                        required: "Vui lòng chọn hình ảnh",
                        extension: "Định dạng hình ảnh không hợp lệ (chỉ chấp nhận jpg, jpeg, png)"
                    }
                },
                errorElement: "div",
                errorPlacement: function(error, element) {
                    error.addClass("invalid-feedback");
                    element.closest(".col-sm-10").append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass("is-invalid").removeClass("is-valid");
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).addClass("is-valid").removeClass("is-invalid");
                }
            });
        });
</script> --}}

@endsection