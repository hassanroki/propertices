@extends('admin.master')
@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-sm-12 col-md-12 d-flex justify-content-between">
                    <h2>Services Data</h2>

                    @if ($count >= 6)
                        <!-- No button displayed if there is exactly one welcome entry -->
                    @else
                        <h2><a href="{{ route('service.create') }}" class="btn btn-info btn-sm">Add New</a></h2>
                    @endif
                </div>
                <div class="col-sm-12 col-md-12">
                    <div class="container mt-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10">
                                <div class="card">
                                    <div class="card-header">Service List</div>

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
                                                    <th>Title</th>
                                                    <th>Title Url</th>
                                                    <th>Paragraph</th>
                                                    <th>Image</th>
                                                    <th>Img Url</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; ?>
                                                @foreach ($services as $service)
                                                    <tr>
                                                        <td>{{ $i++ }}</td>
                                                        <td>{{ $service->title }}</td>
                                                        <td>{{ $service->title_url }}</td>
                                                        <td>{{ $service->s_paragraph }}</td>
                                                        
                                                        <td>
                                                            <img src="{{ asset('storage/' . $service->img) }}" alt="img" class="img-fluid" height="100" width="100">
                                                        </td>
                                                        <td>{{ $service->img_url }}</td>
                                                        <td>
                                                            <a href="{{ route('service.edit', $service->id) }}"
                                                                class="btn btn-warning btn-sm">Edit</a>
                                                            <form action="{{ route('service.destroy', $service->id) }}"
                                                                method="POST" style="display:inline-block;">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"
                                                                    class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
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
