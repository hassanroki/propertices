@extends('admin.master')
@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-sm-12 col-md-12 d-flex justify-content-between">
                    <h2>About Us Data</h2>

                    @if ($count >= 1)
                        <!-- No button displayed if there is exactly one welcome entry -->
                    @else
                        <h2><a href="{{ route('about.create') }}" class="btn btn-info btn-sm">Add New</a></h2>
                    @endif
                </div>
                <div class="col-sm-12 col-md-12">
                    <div class="container mt-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10">
                                <div class="card">
                                    <div class="card-header">About List</div>

                                    <div class="card-body table-responsive">
                                        @if (session('success'))
                                            <div class="alert alert-success">
                                                {{ session('success') }}
                                            </div>
                                        @endif
                                        <table class="table table-bordered table-sm">
                                            <thead>
                                                <tr>
                                                    <th>SL</th>
                                                    <th>Name</th>
                                                    <th>Designation</th>
                                                    <th>C Name</th>
                                                    <th>Title</th>
                                                    <th>Img</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; ?>
                                                @foreach ($aboutUs as $about)
                                                    <tr>
                                                        <td>{{ $i++ }}</td>
                                                        <td>{{ $about->name }}</td>
                                                        <td>{{ $about->designation }}</td>
                                                        <td>{{ $about->company_name }}</td>
                                                        <td>{{ $about->title }}</td>
                                                        <td>
                                                            <img src="{{ asset('storage/' . $about->img) }}" alt="img" class="img-fluid" height="100" width="100">
                                                        </td>
        
                                                        <td>
                                                            <a href="{{ route('about.edit', $about->id) }}"
                                                                class="btn btn-warning btn-sm">Edit</a>
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
