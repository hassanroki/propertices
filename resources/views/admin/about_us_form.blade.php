@extends('admin.master')
@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-sm-12 col-md-12 d-flex justify-content-between">
                    @if ($about->id)
                        <h2>Edit About Us Data</h2>
                    @else
                        <h2>About Us Data</h2>
                    @endif
                    <h2><a href="{{ route('about.index') }}" class="btn btn-info btn-sm">Back</a></h2>
                </div>
                <div class="col-sm-12 col-md-12">
                    <div class="container mt-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10">
                                <div class="card">
                                    @if ($about->id)
                                        <div class="card-header">Edit About Us</div>
                                    @else
                                        <div class="card-header">Add About Us</div>
                                    @endif
                                    <div class="card-body">
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        <form
                                            action="{{ $about->id ? route('about.update', $about->id) : route('about.store') }}"
                                            method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @if ($about->id)
                                                @method('PUT')
                                            @endif

                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input type="text" name="name" class="form-control"
                                                    value="{{ old('name', $about->name) }}" placeholder="Enter Name">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="designation">Designation</label>
                                                <input type="text" name="designation" class="form-control"
                                                    value="{{ old('designation', $about->designation) }}" placeholder="Enter Designation">
                                            </div>

                                            <div class="form-group">
                                                <label for="company_name">Company Name</label>
                                                <input type="text" name="company_name" class="form-control"
                                                    value="{{ old('company_name', $about->company_name) }}" placeholder="Enter Company Name">
                                            </div>

                                            <div class="form-group">
                                                <label for="sub_company">Sub Company</label>
                                                <input type="text" name="sub_company" class="form-control"
                                                    value="{{ old('sub_company', $about->sub_company) }}" placeholder="Enter Sub Company">
                                            </div>

                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <input type="text" name="title" class="form-control"
                                                    value="{{ old('title', $about->title) }}" placeholder="Enter Title">
                                            </div>

                                            <div class="form-group">
                                                <label for="description_one">Description One</label>
                                                <input type="text" name="description_one" class="form-control"
                                                    value="{{ old('description_one', $about->description_one) }}" placeholder="Enter Description One">
                                            </div>

                                            <div class="form-group">
                                                <label for="description_two">Description Two</label>
                                                <input type="text" name="description_two" class="form-control"
                                                    value="{{ old('description_two', $about->description_two) }}" placeholder="Enter Description Two">
                                            </div>

                                            <div class="form-group">
                                                <label for="description_three">Description Three</label>
                                                <input type="text" name="description_three" class="form-control"
                                                    value="{{ old('description_three', $about->description_one) }}" placeholder="Enter Description Three">
                                            </div>

                                            <div class="form-group">
                                                @if ($about->id)
                                                <img src="{{ asset('storage/' . $about->img) }}" alt="img" class="img-fluid" height="100" width="100"><br>
                                                @endif
                                                <label for="img">Image</label>
                                                <input type="file" name="img" class="form-control">
                                            </div>

                                            <button type="submit"
                                                class="btn btn-success">{{ $about->id ? 'Update' : 'Add' }}</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
