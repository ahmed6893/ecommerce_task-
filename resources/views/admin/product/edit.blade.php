@extends('admin.master')
@section('body')
       <!--app-content open-->
       <div class="app-content main-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">


                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <div>
                        <h1 class="page-title">Edit Project</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Apps</li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Projects</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Project</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!--ROW OPENED-->
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Success!</strong> {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <div  class="card">
                            <div class="card-body p-5 create-project-main">

                                <!-- Header Title + Right Side Button -->
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <h4 class="m-0">All Products</h4>
                                    <a href="{{ route('product.index') }}" class="btn btn-sm btn-outline-secondary">
                                         Back to List
                                    </a>
                                </div>
                                <form action="{{route('product.update',$product->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Category Name</label>
                                    <div class="col-sm-6">
                                        <select class="form-control select2" name="category_ids[]" multiple data-placeholder="-- Select Categories --">
                                           @foreach ($categories as $category)
                                                <option value="{{ $category->id }}"
                                                    @if($product->categories->contains($category->id)) selected @endif>
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row g-3 mb-4">
                                    <div class="col-md-6">
                                        <label for="name" class="form-label fw-semibold text-dark">Product Name</label>
                                        <input type="text" name="name" value="{{ $product->name }}" id="name" class="form-control" placeholder="Enter new product name">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="code" class="form-label fw-semibold text-dark">Product Code</label>
                                        <input type="text" name="code" value="{{ $product->code }}" id="code" class="form-control" placeholder="Enter New product code">
                                    </div>
                                </div>


                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <label class="form-label text-muted">Meta Title:</label>
                                        <textarea  name="meta_title" type="text" class="form-control text-dark" placeholder="Enter Meta Title">{{ $product->meta_title }}</textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label text-muted">Meta Description:</label>
                                        <textarea  name="meta_description" type="text" class="form-control text-dark" placeholder="Enter Meta Description">{{ $product->meta_description }}</textarea>
                                    </div>
                                </div>


                                <div class="row mb-4">
                                    <label class="form-label text-muted">Product Price:</label>
                                    <div class="input-group">
                                        <input  name="regular_price" type="number" value="{{ $product->regular_price }}" class="form-control text-dark" placeholder="Enter Product Regular Price">
                                        <input  name="selling_price" type="number" value="{{ $product->selling_price }}" class="form-control text-dark" placeholder="Enter Product Selling Price">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <label class="form-label text-muted">Stock Amount:</label>
                                        <input name="stock_amount" type="text" value="{{ $product->stock_amount }}" class="form-control text-dark" placeholder="Enter Stock Amount">
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <label class="form-label text-muted">Short Description:</label>
                                        <textarea  name="short_description" type="text" class="form-control text-dark" placeholder="Enter Short Description">{{ $product->short_description }}</textarea>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-md-12">
                                        <label class="form-label text-muted">Long Description:</label>
                                        <textarea  name="long_description" type="text" class="form-control text-dark Summernote" id="summernote" placeholder="Enter Long Description">{{ $product->long_description }}</textarea>
                                    </div>
                                </div>
                                        <div class="row mb-4">
                                            <div class="col-md-6">
                                                <label for="category-status" class="form-label text-muted">Sub Category Status:</label>
                                                <select name="status" id="category-status" class="form-control">
                                                    <option value="1" {{ old('status',$product->status) == 1 ? 'selected' : '' }}>Active</option>
                                                    <option value="0" {{ old('status',$product->status) == 0 ? 'selected' : '' }}>Inactive</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-4">
                                            <div class="col-md-6">
                                                <label class="form-label text-muted">Product Image:</label>
                                                <input type="file" name="image" class="dropify" data-bs-height="100" />
                                                <img src="{{ asset($product->product_image) }}" width="100" class="mt-2 rounded" />
                                            </div>
                                        </div>
                                        </div>

                                  <!-- Buttons -->
                                  <div class="text-end">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fe fe-check-circle"></i> Save
                                    </button>
                                </div>
                            </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--ROW CLOSED-->
            </div>
        </div>
    </div>
        <!-- CONTAINER CLOSED -->
 </div>
@endsection
