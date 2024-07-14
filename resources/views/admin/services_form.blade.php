@extends('admin.master')
@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-sm-12 col-md-12 d-flex justify-content-between">
                    @if ($service->id)
                        <h2>Edit Service Data</h2>
                    @else
                        <h2>Service Data</h2>
                    @endif
                    <h2><a href="{{ route('service.index') }}" class="btn btn-info btn-sm">Back</a></h2>
                </div>
                <div class="col-sm-12 col-md-12">
                    <div class="container mt-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10">
                                <div class="card">
                                    @if ($service->id)
                                        <div class="card-header">Edit Service</div>
                                    @else
                                        <div class="card-header">Add Service</div>
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
                                            action="{{ $service->id ? route('service.update', $service->id) : route('service.store') }}"
                                            method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @if ($service->id)
                                                @method('PUT')
                                            @endif

                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <input type="text" name="title" class="form-control"
                                                    value="{{ old('title', $service->title) }}" placeholder="Enter Title">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="title_url">Titile URL</label>
                                                <input type="text" name="title_url" class="form-control"
                                                    value="{{ old('title_url', $service->title_url) }}" placeholder="Enter Titile URL">
                                            </div>

                                            <div class="form-group">
                                                <label for="s_paragraph">Paragraph</label>
                                                <input type="text" name="s_paragraph" class="form-control"
                                                    value="{{ old('s_paragraph', $service->s_paragraph) }}" placeholder="Enter Paragraph">
                                            </div>

                                            <div class="form-group">
                                                @if ($service->id)
                                                <img src="{{ asset('storage/' . $service->img) }}" alt="img" class="img-fluid" height="100" width="100"><br>
                                                @endif
                                                <label for="img">Image</label>
                                                <input type="file" name="img" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="img_url">Image URL</label>
                                                <input type="text" name="img_url" class="form-control"
                                                    value="{{ old('img_url', $service->img_url) }}" placeholder="Enter Image URL">
                                            </div>

                                            <button type="submit"
                                                class="btn btn-success">{{ $service->id ? 'Update' : 'Add' }}</button>
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
