@extends('admin.master')
@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-sm-12 col-md-12 d-flex justify-content-between">

                    @if ($welcome->id)
                        <h2>Edit Welcome Data</h2>
                    @else
                        <h2>Welcome Data</h2>
                    @endif


                    <h2><a href="{{ route('welcome.index') }}" class="btn btn-info btn-sm">Back</a></h2>
                </div>
                <div class="col-sm-12 col-md-12">

                    <div class="container mt-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10">
                                <div class="card">
                                    
                                    @if ($welcome->id)
                                    <div class="card-header">Edit Welcome</div>
                                    @else
                                    <div class="card-header">Add Welcome</div>
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
                                            action="{{ $welcome->id ? route('welcome.update', $welcome->id) : route('welcome.store') }}"
                                            method="POST">
                                            @csrf
                                            @if ($welcome->id)
                                                @method('PUT')
                                            @endif
                                            <div class="form-group">
                                                <label for="icon">Icon</label>
                                                <input type="text" name="icon" class="form-control"
                                                    value="{{ old('icon', $welcome->icon) }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <textarea name="description" class="form-control">{{ old('description', $welcome->description) }}</textarea>
                                            </div>
                                            <button type="submit"
                                                class="btn btn-success">{{ $welcome->id ? 'Update' : 'Add' }}</button>
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
