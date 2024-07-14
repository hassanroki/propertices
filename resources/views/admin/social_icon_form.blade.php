@extends('admin.master')
@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-sm-12 col-md-12 d-flex justify-content-between">
                    @if ($social->id)
                        <h2>Edit Social Icon Data</h2>
                    @else
                        <h2>Social Icon Data</h2>
                    @endif
                    <h2><a href="{{ route('social.index') }}" class="btn btn-info btn-sm">Back</a></h2>
                </div>
                <div class="col-sm-12 col-md-12">

                    <div class="container mt-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10">
                                <div class="card">

                                    @if ($social->id)
                                        <div class="card-header">Edit Social Icon</div>
                                    @else
                                        <div class="card-header">Add Social Icon</div>
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
                                            action="{{ $social->id ? route('social.update', $social->id) : route('social.store') }}"
                                            method="POST">
                                            @csrf
                                            @if ($social->id)
                                                @method('PUT')
                                            @endif
                                            <div class="form-group">
                                                <label for="icon">Icon</label>
                                                <input type="text" name="icon" class="form-control"
                                                    value="{{ old('icon', $social->icon) }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="icon_url">Social Url</label>
                                                <textarea name="icon_url" class="form-control">{{ old('icon_url', $social->icon_url) }}</textarea>
                                            </div>
                                            <button type="submit"
                                                class="btn btn-success">{{ $social->id ? 'Update' : 'Add' }}</button>
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
