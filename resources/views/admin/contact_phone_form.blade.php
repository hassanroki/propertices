@extends('admin.master')
@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-sm-12 col-md-12 d-flex justify-content-between">
                    @if ($contact_phone->id)
                        <h2>Edit Contact Data</h2>
                    @else
                        <h2>Contact Data</h2>
                    @endif
                    <h2><a href="{{ route('contact-phone.index') }}" class="btn btn-info btn-sm">Back</a></h2>
                </div>
                <div class="col-sm-12 col-md-12">
                    <div class="container mt-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10">
                                <div class="card">
                                    @if ($contact_phone->id)
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
                                            action="{{ $contact_phone->id ? route('contact-phone.update', $contact_phone->id) : route('contact-phone.store') }}"
                                            method="POST">
                                            @csrf
                                            @if ($contact_phone->id)
                                                @method('PUT')
                                            @endif

                                            <div class="form-group">
                                                <label for="phone_num_one">Phone Number</label>
                                                <input type="text" name="phone_num_one" class="form-control"
                                                    value="{{ old('phone_num_one', $contact_phone->phone_num_one) }}" placeholder="Enter Phone Number">
                                            </div>

                                            <div class="form-group">
                                                <label for="phone_num_two">Alternate Phone Number</label>
                                                <input type="text" name="phone_num_two" class="form-control"
                                                    value="{{ old('phone_num_two', $contact_phone->phone_num_two) }}" placeholder="Enter Phone Number">
                                            </div>
                                            

                                            <div class="form-group">
                                                <label for="phone_num_icon">Phone Icon</label>
                                                <input type="text" name="phone_num_icon" class="form-control"
                                                    value="{{ old('phone_num_icon', $contact_phone->phone_num_icon) }}" placeholder="Enter Phone Icon">
                                            </div>

                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" name="email" class="form-control"
                                                    value="{{ old('email', $contact_phone->email) }}" placeholder="Enter Email">
                                            </div>

                                            <div class="form-group">
                                                <label for="email_icon">Email Icon</label>
                                                <input type="text" name="email_icon" class="form-control"
                                                    value="{{ old('email_icon', $contact_phone->email_icon) }}" placeholder="Enter Email Icon">
                                            </div>


                                            <div class="form-group">
                                                <label for="website_link">Website Link</label>
                                                <input type="text" name="website_link" class="form-control"
                                                    value="{{ old('website_link', $contact_phone->website_link) }}" placeholder="Enter Website Link">
                                            </div>

                                            <div class="form-group">
                                                <label for="address_one">Address</label>
                                                <input type="text" name="address_one" class="form-control"
                                                    value="{{ old('address_one', $contact_phone->address_one) }}" placeholder="Enter Address">
                                            </div>

                                            <div class="form-group">
                                                <label for="address_two">Alternate Address</label>
                                                <input type="text" name="address_two" class="form-control"
                                                    value="{{ old('address_two', $contact_phone->address_two) }}" placeholder="Enter Address">
                                            </div>

                                            <div class="form-group">
                                                <label for="address_icon">Address Icon</label>
                                                <input type="text" name="address_icon" class="form-control"
                                                    value="{{ old('address_icon', $contact_phone->address_icon) }}" placeholder="Enter Address Icon">
                                            </div>


                                            <button type="submit"
                                                class="btn btn-success">{{ $contact_phone->id ? 'Update' : 'Add' }}</button>
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
