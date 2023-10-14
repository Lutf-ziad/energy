@extends('admins.admin.app')
@section('title', 'Create Blog')
@section('page', 'Create Blog')
@section('content')
    <div class="card">
        <x-view.alerts />
        <div class="card-header">
            <x-buttons.btn-back route="Blogs.index" />

        </div>

        <div class="card-body">
            <form action="{{ route('Blogs.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <x-inputs.text-input label="Name" name="name" />
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <x-inputs.text-input label="Descrption" name="descrption" />
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <livewire:components.picture-upload>
                    </div>
                    <div class="col-md-3 col-6">
                        <x-inputs.checkbox-input label="Active" name="active" value="1" />
                    </div>
                </div>
                <div class="dropdown-divider"></div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>

            </form>
        </div>

    </div>
@endsection
