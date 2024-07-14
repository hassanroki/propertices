@extends('admin.master')
@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-sm-12 col-md-12 d-flex justify-content-between">
                    @if ($banner->id)
                        <h2>Edit Banner Data</h2>
                    @else
                        <h2>Banner Data</h2>
                    @endif
                    <h2><a href="{{ route('banner.index') }}" class="btn btn-info btn-sm">Back</a></h2>
                </div>
                <div class="col-sm-12 col-md-12">
                    <div class="container mt-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10">
                                <div class="card">
                                    @if ($banner->id)
                                        <div class="card-header">Edit Banner</div>
                                    @else
                                        <div class="card-header">Add Banner</div>
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
                                            action="{{ $banner->id ? route('banner.update', $banner->id) : route('banner.store') }}"
                                            method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @if ($banner->id)
                                                @method('PUT')
                                            @endif
                                            <div class="form-group">
                                                @if ($banner->id)
                                                <img src="{{ asset('storage/' . $banner->item) }}" alt="banner" class="img-fluid"><br>
                                                @endif
                                                <label for="item">Banner</label>
                                                <input type="file" name="item" class="form-control">
                                            </div>
                                            <button type="submit"
                                                class="btn btn-success">{{ $banner->id ? 'Update' : 'Add' }}</button>
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
