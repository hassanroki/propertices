@extends('admin.master')
@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-sm-12 col-md-12 d-flex justify-content-between">
                    @if ($footer->id)
                        <h2>Edit Footer Data</h2>
                    @else
                        <h2>Footer Data</h2>
                    @endif
                    <h2><a href="{{ route('footer.index') }}" class="btn btn-info btn-sm">Back</a></h2>
                </div>
                <div class="col-sm-12 col-md-12">
                    <div class="container mt-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10">
                                <div class="card">
                                    @if ($footer->id)
                                        <div class="card-header">Edit Footer</div>
                                    @else
                                        <div class="card-header">Add Footer</div>
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
                                            action="{{ $footer->id ? route('footer.update', $footer->id) : route('footer.store') }}"
                                            method="POST">
                                            @csrf
                                            @if ($footer->id)
                                                @method('PUT')
                                            @endif

                                            <div class="form-group">
                                                <label for="footer_text_one">Footer Text One</label>
                                                <textarea name="footer_text_one" class="form-control" placeholder="Enter Footer Text One">{{ old('footer_text_one', $footer->footer_text_one) }}</textarea>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="footer_text_two">Footer Text Two</label>
                                                <textarea name="footer_text_two" class="form-control" placeholder="Enter Footer Text Two">{{ old('footer_text_two', $footer->footer_text_two) }}</textarea>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="footer_text_three">Footer Text Three</label>
                                                <textarea name="footer_text_three" class="form-control" placeholder="Enter Footer Text Three">{{ old('footer_text_three', $footer->footer_text_three) }}</textarea>
                                            </div>                                            
                                                                                    
                                            <button type="submit"
                                                class="btn btn-success">{{ $footer->id ? 'Update' : 'Add' }}</button>
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
