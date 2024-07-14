@extends('admin.master')
@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-sm-12 col-md-12 d-flex justify-content-between">
                    <h2>Banner Data</h2>

                    @if ($count >= 5)
                        <!-- No button displayed if there is exactly one welcome entry -->
                    @else
                        <h2><a href="{{ route('banner.create') }}" class="btn btn-info btn-sm">Add New</a></h2>
                    @endif
                </div>
                <div class="col-sm-12 col-md-12">
                    <div class="container mt-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10">
                                <div class="card">
                                    <div class="card-header">Banner List</div>

                                    <div class="card-body">
                                        @if (session('success'))
                                            <div class="alert alert-success">
                                                {{ session('success') }}
                                            </div>
                                        @endif
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>SL</th>
                                                    <th>Banner</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; ?>
                                                @foreach ($banners as $banner)
                                                    <tr>
                                                        <td>{{ $i++ }}</td>
                                                        <td>
                                                            <img src="{{ asset('storage/' . $banner->item) }}" alt="logo" class="img-fluid" height="300px" width="300px">
                                                        </td>
                                                        <td>
                                                            <a href="{{ route('banner.edit', $banner->id) }}"
                                                                class="btn btn-warning btn-sm">Edit</a>
                                                                <form action="{{ route('banner.destroy', $banner->id) }}" method="POST" style="display:inline-block;">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                                                </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
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
