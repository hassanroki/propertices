@extends('admin.master')
@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-sm-12 col-md-12 d-flex justify-content-between">
                    <h2>Footer Table Data</h2>

                    @if ($count >= 1)
                        <!-- No button displayed if there is exactly one welcome entry -->
                    @else
                        <h2><a href="{{ route('footer.create') }}" class="btn btn-info btn-sm">Add New</a></h2>
                    @endif
                </div>
                <div class="col-sm-12 col-md-12">
                    <div class="container mt-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10">
                                <div class="card">
                                    <div class="card-header">Footer List</div>

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
                                                    <th>Footer Text 1</th>
                                                    <th>Footer Text 2</th>
                                                    <th>Footer Text 3</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; ?>
                                                @foreach ($footers as $footer)
                                                    <tr>
                                                        <td>{{ $i++ }}</td>
                                                        <td>{{ $footer->footer_text_one }}</td>
                                                        <td>{{ $footer->footer_text_two }}</td>
                                                        <td>{{ $footer->footer_text_three }}</td>
                                                        <td>
                                                            <a href="{{ route('footer.edit', $footer->id) }}"
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
