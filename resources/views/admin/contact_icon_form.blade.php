@extends('admin.master')
@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-sm-12 col-md-12 d-flex justify-content-between">
                    @if ($contact_icon->id)
                        <h2>Edit Contact Icon Data</h2>
                    @else
                        <h2>Contact Icon Data</h2>
                    @endif
                    <h2><a href="{{ route('contact-icon.index') }}" class="btn btn-info btn-sm">Back</a></h2>
                </div>
                <div class="col-sm-12 col-md-12">

                    <div class="container mt-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10">
                                <div class="card">

                                    @if ($contact_icon->id)
                                        <div class="card-header">Edit Contact Icon</div>
                                    @else
                                        <div class="card-header">Add Contact Icon</div>
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
                                            action="{{ $contact_icon->id ? route('contact-icon.update', $contact_icon->id) : route('contact-icon.store') }}"
                                            method="POST">
                                            @csrf
                                            @if ($contact_icon->id)
                                                @method('PUT')
                                            @endif
                                            <div class="form-group">
                                                <label for="icon">Contact Icon</label>
                                                <input type="text" name="icon" class="form-control"
                                                    value="{{ old('icon', $contact_icon->icon) }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="icon_url">Contact Icon Url</label>
                                                <input type="text" name="icon_url" class="form-control"
                                                    value="{{ old('icon_url', $contact_icon->icon_url) }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <input type="text" name="title" class="form-control"
                                                    value="{{ old('title', $contact_icon->title) }}">
                                            </div>
                                            <button type="submit"
                                                class="btn btn-success">{{ $contact_icon->id ? 'Update' : 'Add' }}</button>
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
