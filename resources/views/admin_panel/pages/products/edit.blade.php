@extends('admin_panel.layout.master')
@section('page_title', 'Edit Product')
@section('products_menu_active', 'active')
@section('custom_style')


    <!-- Select2 -->
    {{-- <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css"> --}}
    <link rel="stylesheet" href="{{ asset('backend_assets/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend_assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">

@endsection
@section('content')
    <div class="content-header">

    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h5 class="card-title">Edit Product</h5>
                            <div class="ml-auto">
                                <a class="btn btn-sm btn-info" href="{{ route('admin.products.index') }}"
                                    role="button">Back</a>
                            </div>
                        </div>
                        <form action="{{ route('admin.products.update', $product->id) }}" method="POST"
                            enctype="multipart/form-data" class="">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="row">

                                    <div class="form-group col-md-6">
                                        <label for="name">Name<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Enter name" value="{{ $product->name }}" required>
                                        @error('name')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="category">Category</label>
                                        <input type="text" class="form-control" id="category" name="category"
                                            placeholder="Enter category" value="{{ $product->category }}">
                                        @error('category')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="image">Image</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="image"
                                                    name="image" required>
                                                <label class="custom-file-label" for="image" name="image">Choose
                                                    file</label>
                                            </div>
                                        </div>
                                        <img src="{{ asset($product->image) }}" alt="" style="height: 80px"
                                            class="my-2">
                                        @error('image')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>


                                    <div class="form-group col-md-12">
                                        <label for="description">Description</label>
                                        <textarea class="form-control summernote" id="description" name="description" placeholder="Optional">{{ $product->description }}</textarea>
                                    </div>

                                </div>

                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-sm text-white"
                                    style="background-color: #3f6791;">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('custom_js')

    <script>
        $(function() {
            bsCustomFileInput.init();
            $('.summernote').summernote({
                placeholder: 'Optional',
                tabsize: 2,
                height: 200
            })
        });
    </script>

@endsection
