@extends('admin.master')
@section('body')

    <!--app-content open-->
    <div class="app-content main-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">


                <<!-- PAGE-HEADER -->
                <div class="page-header">
                    <div>
                        <h1 class="page-title">Edit Category</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Apps</li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">All Category</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Category</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!--ROW OPENED-->
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ session('success') }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <div  class="card">
                            <div class="card-body p-5 create-project-main">

                                <!-- Header Title + Right Side Button -->
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <h4 class="m-0">All Category</h4>
                                    <a href="{{ route('category.index') }}" class="btn btn-sm btn-outline-secondary">
                                        Back to List
                                    </a>
                                </div>
                                <form action="{{route('category.update',$category->id)}}" method="POST">
                                    @method('PUT')
                                    @csrf
                                <!-- Category Name -->
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <label for="category-name" class="form-label text-muted">Category Name:</label>
                                        <input id="category-name" name="name" type="text" value="{{$category->name}}" class="form-control text-dark" placeholder="Enter Category Name">
                                    </div>
                                </div>
                                        <div class="row mb-4">
                                            <div class="col-md-6">
                                                <label for="category-status" class="form-label text-muted">Category Status:</label>
                                                <select name="status" id="category-status" class="form-control">
                                                    <option value="1" {{ (old('status', $category->status) == 1) ? 'selected' : '' }}>Active</option>
                                                    <option value="0" {{ (old('status', $category->status) == 0) ? 'selected' : '' }}>Inactive</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Category Description -->
                                <div class="row mb-4">
                                    <div class="col-md-12">
                                        <label class="form-label text-muted">Category Description</label>
                                        <textarea class="form-control" name="description" rows="4" placeholder="Write something...">{{$category->description}}</textarea>
                                    </div>
                                </div>

                                <!-- Image Upload -->
                                        <div class="row mb-4">
                                            <div class="col-md-6">
                                                <label class="form-label text-muted">Add Image:</label>
                                                <input type="file" class="dropify" data-bs-height="100" name="image" />

                                                @if($category->category_image)
                                                    <div class="mt-2">
                                                        <img src="{{ asset($category->image) }}" width="100" height="80" alt="No Image">
                                                    </div>
                                                @endif
                                            </div>
                                        </div>

                                <!-- Buttons -->
                                <div class="text-end">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fe fe-check-circle"></i> Update Category
                                    </button>
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
@endsection
