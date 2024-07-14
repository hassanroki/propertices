@extends('admin.master')
@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-sm-12 col-md-12 d-flex justify-content-between">
                    @if ($project->id)
                        <h2>Edit Project Data</h2>
                    @else
                        <h2>Project Data</h2>
                    @endif
                    <h2><a href="{{ route('project.index') }}" class="btn btn-info btn-sm">Back</a></h2>
                </div>
                <div class="col-sm-12 col-md-12">
                    <div class="container mt-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10">
                                <div class="card">
                                    @if ($project->id)
                                        <div class="card-header">Edit Project</div>
                                    @else
                                        <div class="card-header">Add Project</div>
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
                                            action="{{ $project->id ? route('project.update', $project->id) : route('project.store') }}"
                                            method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @if ($project->id)
                                                @method('PUT')
                                            @endif

                                            <div class="form-group">
                                                <label for="p_name">Project Name</label>
                                                <input type="text" name="p_name" class="form-control"
                                                    value="{{ old('p_name', $project->p_name) }}" placeholder="Enter Project Name">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="land_area">Land Area</label>
                                                <input type="text" name="land_area" class="form-control"
                                                    value="{{ old('land_area', $project->land_area) }}" placeholder="Enter Land Area">
                                            </div>

                                            <div class="form-group">
                                                <label for="project_face">Project Face</label>
                                                <input type="text" name="project_face" class="form-control"
                                                    value="{{ old('project_face', $project->project_face) }}" placeholder="Enter Project Face">
                                            </div>

                                            <div class="form-group">
                                                <label for="b_height">Height of The Building</label>
                                                <input type="text" name="b_height" class="form-control"
                                                    value="{{ old('b_height', $project->b_height) }}" placeholder="Enter Height of The Building">
                                            </div>

                                            <div class="form-group">
                                                <label for="num_flat">Number of Flat</label>
                                                <input type="number" name="num_flat" class="form-control"
                                                    value="{{ old('num_flat', $project->num_flat) }}" placeholder="Enterflat_size">
                                            </div>

                                            <div class="form-group">
                                                <label for="flat_size">Flat Size</label>
                                                <input type="text" name="flat_size" class="form-control"
                                                    value="{{ old('flat_size', $project->flat_size) }}" placeholder="Enter Flat Size">
                                            </div>

                                            <div class="form-group">
                                                <label for="each_floor">Each Floor</label>
                                                <input type="number" name="each_floor" class="form-control"
                                                    value="{{ old('each_floor', $project->each_floor) }}" placeholder="Enter Each Floor">
                                            </div>

                                            <div class="form-group">
                                                <label for="address">Address</label>
                                                <input type="text" name="address" class="form-control"
                                                    value="{{ old('address', $project->address) }}" placeholder="Enter Address">
                                            </div>

                                            <div class="form-group">
                                                @if ($project->id)
                                                <img src="{{ asset('storage/' . $project->photo) }}" alt="photo" class="img-fluid" height="100" width="100"><br>
                                                @endif
                                                <label for="photo">Image</label>
                                                <input type="file" value="{{ old('photo') }}" name="photo" class="form-control">
                                            </div>

                                            <button type="submit"
                                                class="btn btn-success">{{ $project->id ? 'Update' : 'Add' }}</button>
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
