@extends('admins.admin.app')
@section('title', 'Create Contactu')
@section('page', 'Create Contactu')
@section('content')
    <div class="card">
        <x-view.alerts />
        <div class="card-header">
            <x-buttons.btn-back route="Contactu.index" />
        </div>
        <div class="card-body">
            <form action="{{ route('Contactu.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <x-inputs.text-input label="Name" name="name" />
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <x-inputs.text-input type="number" label="Phone" name="phone" />
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <x-inputs.text-input type="text" label="Email" name="email" required="0" />
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <x-inputs.text-input label="Describe" name="desc" required="0"/>
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
