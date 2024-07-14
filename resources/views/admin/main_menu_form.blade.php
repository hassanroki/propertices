@extends('admin.master')
@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-sm-12 col-md-12 d-flex justify-content-between">
                    @if ($main_menu->id)
                        <h2>Edit Main Menu Data</h2>
                    @else
                        <h2>Main Menu Data</h2>
                    @endif
                    <h2><a href="{{ route('main-menu.index') }}" class="btn btn-info btn-sm">Back</a></h2>
                </div>
                <div class="col-sm-12 col-md-12">

                    <div class="container mt-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10">
                                <div class="card">

                                    @if ($main_menu->id)
                                        <div class="card-header">Edit Main Menu</div>
                                    @else
                                        <div class="card-header">Add Menu</div>
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
                                            action="{{ $main_menu->id ? route('main-menu.update', $main_menu->id) : route('main-menu.store') }}"
                                            method="POST">
                                            @csrf
                                            @if ($main_menu->id)
                                                @method('PUT')
                                            @endif
                                            
                                            <div class="form-group">
                                                <label for="item__url">Item Url</label>
                                                <input type="text" name="item_url" class="form-control"
                                                    value="{{ old('item_url', $main_menu->item_url) }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="item">Item</label>
                                                <input type="text" name="item" class="form-control"
                                                    value="{{ old('item', $main_menu->item) }}">
                                            </div>
                                            <button type="submit"
                                                class="btn btn-success">{{ $main_menu->id ? 'Update' : 'Add' }}</button>
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
