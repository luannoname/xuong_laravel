@extends('layouts.admin')

@section('css')
<link href="{{ url('admin/assets') }}/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="{{ url('admin/assets') }}/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
        <link href="{{ url('admin/assets') }}/css/plugins/summernote/summernote.css" rel="stylesheet">
        <link href="{{ url('admin/assets') }}/css/plugins/summernote/summernote-bs3.css" rel="stylesheet">

        <link href="{{ url('admin/assets') }}/css/plugins/datapicker/datepicker3.css" rel="stylesheet">
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
                <a href="{{ route('admin.products.index') }}">{{ $table1 }}</a>
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
                        <li class="active"><a data-toggle="tab" href="#tab-1"> Thông tin sản phẩm</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-2"> Biến thể</a></li>
                    </ul>
                    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane active">
                            <div class="panel-body">

                                <fieldset class="form-horizontal">
                                    
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Tên sản phẩm:</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="name" value="{{ old('name') }}"
                                                class="form-control @error('name') is-invalid @enderror" placeholder="Tên sản phẩm">
                                                @error('name')
                                                    <div class="message-err">* {{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Mã sản phẩm:</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="sku" value="{{ old('sku') }}"
                                                class="form-control @error('sku') is-invalid @enderror" placeholder="Mã sản phẩm">
                                                @error('sku')
                                                    <div class="message-err">* {{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Giá:</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="price" value="{{ old('price') }}"
                                                class="form-control @error('price') is-invalid @enderror" placeholder="Giá">
                                                @error('price')
                                                    <div class="message-err">* {{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Giá Sale:</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="price_sale" value="{{ old('price_sale') }}"
                                                class="form-control @error('price_sale') is-invalid @enderror" placeholder="Giá Sale">
                                                @error('price_sale')
                                                    <div class="message-err">* {{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group"><label class="col-sm-2 control-label">Danh mục:</label>
                                            <div class="col-sm-10">
                                                <select class="form-control @error('category_id') is-invalid @enderror" name="category_id">
                                                    <option selected>Chọn danh mục</option>
                                                    @foreach ($categories as $id => $name)
                                                        <option value="{{ $id }}">{{ $name }}</option>
                                                    @endforeach
                                                </select>
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
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Loại sản phẩm:</label>
                                            @php
                                                $type = [
                                                    'is_best_sale' => 'Bán chạy',
                                                    'is_40_sale' => 'Giảm 40%',
                                                    'is_hot_online' => 'Hot online',
                                                ]
                                            @endphp
                                            <div class="col-sm-10">
                                                @foreach ($type as $key => $value)
                                                
                                                <div class="checkbox checkbox-success checkbox-inline">
                                                    <input type="checkbox" name="{{ $key }}" id="{{ $key }}" value="{{ $key }}">
                                                    <label for="{{ $key }}"> {{ $value }} </label>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                    

                                        {{-- <div class="form-group">
                                            <label class="col-sm-2 control-label">Trạng thái:</label>
                                            <div class="col-sm-10">
                                                <select class="form-control">
                                                    <option value="1">Hoạt động</option>
                                                    <option value="0">Không hoạt động</option>
                                                </select>
                                            </div>
                                        </div> --}}
                                        

                                        <div class="form-group"><label class="col-sm-2 control-label">Description:</label>
                                            <div class="col-sm-10">
                                                <textarea name="description" class="summernote">
                                                    {{ old('description') }}
                                                </textarea>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group"><label class="col-sm-2 control-label">Ảnh nhỏ:</label>
                                            <div class="col-sm-10 d-flex align-items-center">
                                                <img id="image_preview_thumb" 
                                                src="https://camo.githubusercontent.com/ad77e52cae42baa5aefa30684551edcbc4ca435a61e2c00bfc588d0334f3289f/68747470733a2f2f662e636c6f75642e6769746875622e636f6d2f6173736574732f323037383234352f3235393331332f35653833313336322d386362612d313165322d383435332d6536626439353663383961342e706e67" 
                                                class="image-custom mr-5" 
                                                alt="Preview Image" style="width: 36px; height: auto;">
                                                <input onchange="previewImageThumb(this)" class="form-control" id="image_thumb" type="file" name="image_thumb">
                                            </div>
                                        </div>
                                        <div class="form-group"><label class="col-sm-2 control-label">Hình ảnh Album:</label>
                                            <div class="col-sm-10">
                                                <div class="upload-wrapper">
                                                    <input multiple onchange="previewImageAlbum(this)" type="file" class="form-control" name="product_galleries[]">
                                                </div>
                                                <div id="preview_images" class="image-container">
                                                    <!-- Các ảnh sẽ được hiển thị ở đây -->
                                                    <img id="image_preview_thumb" 
                                                    src="https://camo.githubusercontent.com/ad77e52cae42baa5aefa30684551edcbc4ca435a61e2c00bfc588d0334f3289f/68747470733a2f2f662e636c6f75642e6769746875622e636f6d2f6173736574732f323037383234352f3235393331332f35653833313336322d386362612d313165322d383435332d6536626439353663383961342e706e67" 
                                                    class="image-custom mr-5" 
                                                    alt="Preview Image" style="width: 36px; height: auto;">
                                                </div>

                                                
                                            </div>
                                        </div>

                                        
                                </fieldset>

                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane">
                            <div class="panel-body">

                                <fieldset class="form-horizontal">
                                    <button id="add-row" type="button" class="btn btn-success demo3">
                                        <i class="fa fa-plus-square-o"></i> Thêm biến thể
                                    </button>
                                    
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Size</th>
                                                <th>Màu</th>
                                                <th>Image</th>
                                                <th>Số lượng</th>
                                                <th>Giá</th>
                                                <th>Giá Sale</th>
                                            </tr>
                                        </thead>
                                        <tbody id="image-table-body">

                                            <tr>
                                                <td>
                                                    <select class="form-control" name="product_variants[0][size]">
                                                        @foreach ($sizes as $id => $name)
                                                            <option value="{{ $id }}">{{ $name }}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control pr-5" name="product_variants[0][color]">
                                                        @foreach ($colors as $id => $name)
                                                            <option value="{{ $id }}">{{ $name }}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td>
                                                   <div class="d-flex">
                                                        <img id="preview_0" src="https://camo.githubusercontent.com/ad77e52cae42baa5aefa30684551edcbc4ca435a61e2c00bfc588d0334f3289f/68747470733a2f2f662e636c6f75642e6769746875622e636f6d2f6173736574732f323037383234352f3235393331332f35653833313336322d386362612d313165322d383435332d6536626439353663383961342e706e67" class="variant-icon" style="width: 36px; height: auto;" alt="Preview Image">
                                                        <input id="image" onchange="previewImage(this, 0)" type="file" class="form-control" name="product_variants[0][image]">
                                                   </div>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="product_variants[0][quantity]" placeholder="Số lượng">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="product_variants[0][price]" placeholder="Giá">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="product_variants[0][price_sale]" placeholder="Giá Sale">
                                                </td>
                                                <td>
                                                    <button onclick="removeRow(this)" type="button" class="btn btn-danger demo3">
                                                        <i class="fa fa-trash"></i> Xóa
                                                    </button>
                                                </td>
                                            </tr>
                                            {{-- @php $amount = 5 @endphp
                                            @for ($index = 1; $index <= $amount; $index++)
                                                <tr>
                                                    <td>
                                                        <select class="form-control" name="product_variants[{{ $index }}][size]">
                                                            @foreach ($sizes as $id => $name)
                                                                <option value="{{ $id }}">{{ $name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-control" name="product_variants[{{ $index }}][color]">
                                                            @foreach ($colors as $id => $name)
                                                                <option value="{{ $id }}">{{ $name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type="file" class="form-control" name="product_variants[{{ $index }}][image]">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" name="product_variants[{{ $index }}][quantity]" placeholder="Số lượng">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" name="product_variants[{{ $index }}][price]" placeholder="Giá">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" name="product_variants[{{ $index }}][price_sale]" placeholder="Giá Sale">
                                                    </td>
                                                </tr>
                                            @endfor --}}
                                            
                                        </tbody>
                                    </table>

                                    {{-- <div class="form-group">
                                        <label class="col-sm-2 control-label">ID:</label>
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
                                    </div> --}}
                                    <div class="text-center">
                                        
                                        <div>
                                            <button type="submit" class="btn btn-primary">Thêm</button>
                                        </div>
                                    </div>
                                </fieldset>


                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
    </div>

</div>

@endsection

@section('js')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var rowCount = 1;

        document.getElementById('add-row').addEventListener('click', function () {
            var tableBody = document.getElementById('image-table-body');
            var newRow = document.createElement('tr');

            newRow.innerHTML = `
                <td>
                    <select class="form-control" name="product_variants[${rowCount}][size]">
                        @foreach ($sizes as $id => $name)
                            <option value="{{ $id }}">{{ $name }}</option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <select class="form-control pr-5" name="product_variants[${rowCount}][color]">
                        @foreach ($colors as $id => $name)
                            <option value="{{ $id }}">{{ $name }}</option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <div class="d-flex">
                        <img id="preview_${rowCount}" src="https://camo.githubusercontent.com/ad77e52cae42baa5aefa30684551edcbc4ca435a61e2c00bfc588d0334f3289f/68747470733a2f2f662e636c6f75642e6769746875622e636f6d2f6173736574732f323037383234352f3235393331332f35653833313336322d386362612d313165322d383435332d6536626439353663383961342e706e67" class="variant-icon" style="width: 36px; height: auto;" alt="Preview Image">
                        <input id="image" onchange="previewImage(this, ${rowCount})" type="file" class="form-control" name="product_variants[${rowCount}][image]">
                    </div>
                </td>
                <td>
                    <input type="text" class="form-control" name="product_variants[${rowCount}][quantity]" placeholder="Số lượng">
                </td>
                <td>
                    <input type="text" class="form-control" name="product_variants[${rowCount}][price]" placeholder="Giá">
                </td>
                <td>
                    <input type="text" class="form-control" name="product_variants[${rowCount}][price_sale]" placeholder="Giá Sale">
                </td>
                <td class="d-flex">
                    <button onclick="removeRow(this)" type="button" class="btn btn-danger demo3">
                        <i class="fa fa-trash"></i> Xóa
                    </button>
                </td>
            `;

            tableBody.appendChild(newRow);
            rowCount++;
        });
    });
    function previewImageThumb(input) {
            var preview = document.getElementById('image_preview_thumb');

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    preview.src = e.target.result;
                };

                reader.readAsDataURL(input.files[0]);
            } else {
                // Nếu không có tệp nào được chọn, thiết lập lại hình ảnh mặc định
                preview.src = 'https://camo.githubusercontent.com/ad77e52cae42baa5aefa30684551edcbc4ca435a61e2c00bfc588d0334f3289f/68747470733a2f2f662e636c6f75642e6769746875622e636f6d2f6173736574732f323037383234352f3235393331332f35653833313336322d386362612d313165322d383435332d6536626439353663383961342e706e67';
            }
        }

    function previewImageAlbum(input) {
        const previewContainer = document.getElementById('preview_images');
        previewContainer.innerHTML = ''; // Xóa hình ảnh hiện tại

        if (input.files) {
            Array.from(input.files).forEach(file => {
                const reader = new FileReader();
                reader.onload = function(e) {
                    // Tạo thẻ img mới và thêm vào container
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.className = 'variant-icon';
                    previewContainer.appendChild(img);
                }
                reader.readAsDataURL(file);
            });
        } else {
                // Nếu không có tệp nào được chọn, thiết lập lại hình ảnh mặc định
                img.src = 'https://camo.githubusercontent.com/ad77e52cae42baa5aefa30684551edcbc4ca435a61e2c00bfc588d0334f3289f/68747470733a2f2f662e636c6f75642e6769746875622e636f6d2f6173736574732f323037383234352f3235393331332f35653833313336322d386362612d313165322d383435332d6536626439353663383961342e706e67';
            }
    }
    function previewImage(input, rowIndex) {
        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function(e) {
                var preview = document.getElementById(`preview_${rowIndex}`);
                if (preview) {
                    preview.setAttribute('src', e.target.result);
                }
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    function removeRow(item) {
        var row = item.closest('tr');
        row.remove();
    }
</script>

{{--  --}}
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

    <!-- SUMMERNOTE -->
    <script src="{{ url('admin/assets') }}/js/plugins/summernote/summernote.min.js"></script>

    <!-- Data picker -->
    <script src="{{ url('admin/assets') }}/js/plugins/datapicker/bootstrap-datepicker.js"></script>

    <script>
        $(document).ready(function(){

            $('.summernote').summernote({
                height: 150, // set the height in pixels
                minHeight: 100, // set minimum height in pixels
                maxHeight: 500, // set maximum height in pixels
            });

            $('.input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });

        });
    </script>

@endsection