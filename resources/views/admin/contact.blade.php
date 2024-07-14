@extends('admin.master')
@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-sm-12 col-md-12 d-flex justify-content-between">
                    <h2>Contact Data</h2>
                </div>
                <div class="col-sm-12 col-md-12">
                    <div class="container mt-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10">
                                <div class="card">
                                    <div class="card-header">Contact List</div>

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
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>M</th>
                                                    <th>e</th>
                                                    <th>s</th>
                                                    <th>s</th>
                                                    <th>a</th>
                                                    <th>g</th>
                                                    <th>e</th>
                                                    <th>Website Link</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; ?>
                                                @foreach ($contacts as $contact)
                                                    <tr>
                                                        <td>{{ $i++ }}</td>
                                                        <td>{{ $contact->name }}</td>
                                                        <td>{{ $contact->email }}</td>
                                                        <td>{{ $contact->phone }}</td>
                                                        <td colspan="7">{{ $contact->message }}</td>
                                                        <td>{{ $contact->website_url }}</td>
                                                        <td class="d-flex">
                                                            <form action="{{ route('contact.destroy', $contact->id) }}" method="POST" style="display:inline-block;">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger btn-sm m-1" onclick="return confirm('Are you sure?')">Delete</button>
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
