@extends('admin.master')
@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-sm-12 col-md-12 d-flex justify-content-between">
                    @if ($logo->id)
                        <h2>Edit Logo Data</h2>
                    @else
                        <h2>Logo Data</h2>
                    @endif
                    <h2><a href="{{ route('logo.index') }}" class="btn btn-info btn-sm">Back</a></h2>
                </div>
                <div class="col-sm-12 col-md-12">
                    <div class="container mt-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10">
                                <div class="card">
                                    @if ($logo->id)
                                        <div class="card-header">Edit Logo</div>
                                    @else
                                        <div class="card-header">Add Logo</div>
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
                                            action="{{ $logo->id ? route('logo.update', $logo->id) : route('logo.store') }}"
                                            method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @if ($logo->id)
                                                @method('PUT')
                                            @endif
                                            <div class="form-group">
                                                @if ($logo->id)
                                                <img src="{{ asset('storage/' . $logo->logo) }}" alt="logo" class="img-fluid"><br>
                                                @endif
                                                <label for="logo">Logo</label>
                                                <input type="file" name="logo" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="logo_url">Logo URL</label>
                                                <input type="text" name="logo_url" class="form-control"
                                                    value="{{ old('logo_url', $logo->logo_url) }}">
                                            </div>
                                            <button type="submit"
                                                class="btn btn-success">{{ $logo->id ? 'Update' : 'Add' }}</button>
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
