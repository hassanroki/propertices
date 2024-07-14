@extends('admin.master')
@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-sm-12 col-md-12 d-flex justify-content-between">
                    <h2>Contact Icon Data</h2>

                    @if ($count >= 3)
                        <!-- No button displayed if there is exactly one welcome entry -->
                    @else
                        <h2><a href="{{ route('contact-icon.create') }}" class="btn btn-info btn-sm">Add New</a></h2>
                    @endif
                </div>
                <div class="col-sm-12 col-md-12">
                    <div class="container mt-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10">
                                <div class="card">
                                    <div class="card-header">Contact Icon List</div>

                                    <div class="card-body table-responsive">
                                        @if (session('success'))
                                            <div class="alert alert-success">
                                                {{ session('success') }}
                                            </div>
                                        @endif
                                        <table class="table table-bordered table-sm text-center">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>SL</th>
                                                    <th>Icon</th>
                                                    <th>Icon Url</th>
                                                    <th>Title</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; ?>
                                                @foreach ($contactIcon as $item)
                                                    <tr>
                                                        <td>{{ $i++ }}</td>
                                                        <td>
                                                            @if ($item->icon)
                                                                <i class="{{ $item->icon }}"></i>
                                                            @endif
                                                        </td>
                                                        <td>{{ $item->icon_url }}</td>
                                                        <td>{{ $item->title }}</td>
                                                        <td>
                                                            <a href="{{ route('contact-icon.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                                            <form action="{{ route('contact-icon.destroy', $item->id) }}" method="POST" style="display:inline-block;">
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
