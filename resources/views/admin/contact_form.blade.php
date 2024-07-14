@extends('admin.master')
@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-sm-12 col-md-12 d-flex justify-content-between">
                    @if ($contact->id)
                        <h2>Edit Contact Data</h2>
                    @else
                        <h2>Contact Data</h2>
                    @endif
                    <h2><a href="{{ route('contact.index') }}" class="btn btn-info btn-sm">Back</a></h2>
                </div>
                <div class="col-sm-12 col-md-12">
                    <div class="container mt-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10">
                                <div class="card">
                                    @if ($contact->id)
                                        <div class="card-header">Edit Contact</div>
                                    @else
                                        <div class="card-header">Add Contact</div>
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
                                            action="{{ $contact->id ? route('contact.update', $contact->id) : route('contact.store') }}"
                                            method="POST">
                                            @csrf
                                            @if ($contact->id)
                                                @method('PUT')
                                            @endif

                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input type="text" name="name" class="form-control"
                                                    value="{{ old('name', $contact->name) }}" placeholder="Enter Name">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" name="email" class="form-control"
                                                    value="{{ old('email', $contact->email) }}" placeholder="Enter Temail">
                                            </div>

                                            <div class="form-group">
                                                <label for="phone">Phone Number</label>
                                                <input type="text" name="phone" class="form-control"
                                                    value="{{ old('phone', $contact->phone) }}" placeholder="Enter Phone Number">
                                            </div>

                                            <div class="form-group">
                                                <label for="website_url">Website Link</label>
                                                <input type="text" name="website_url" class="form-control"
                                                    value="{{ old('website_url', $contact->website_url) }}" placeholder="Enter Website Link">
                                            </div>

                                            <div class="form-group">
                                                <label for="message">Message</label>
                                                <textarea name="message" class="form-control" placeholder="Enter Message">{{ old('message', $contact->message) }}</textarea>
                                            </div>

                                            <button type="submit"
                                                class="btn btn-success">{{ $contact->id ? 'Update' : 'Add' }}</button>
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
