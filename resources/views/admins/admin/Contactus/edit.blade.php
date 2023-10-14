@extends('admins.admin.app')
@section('title', 'Edit Contactu')
@section('page', 'Edit Contactu')
@section('content')
    <div class="card">
        <div class="card-header">
            <x-buttons.btn-back route="Contactu.index" />
            <img class="img-circle img-thumbnail float-right" width="50" height="50" src="{{ $Contactu->picture }}" />
        </div>
        <div class="card-body">
            <form action="{{ route('Contactu.update', $Contactu) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <x-inputs.text-input label="Name" name="name" :value="$Contactu->name" />
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <x-inputs.text-input label="email" name="email" :value="$Contactu->email" />
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <x-inputs.text-input label="phone" name="phone" :value="$Contactu->phone" />
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <x-inputs.text-input label="Describe" name="desc" :value="$Contactu->desc" />
                    </div>
                    <div class="col-md-3 col-6">
                        <x-inputs.checkbox-input label="Active" name="active" :value="$Contactu->active" />
                    </div>
                </div>
                <div class="dropdown-divider"></div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Svae</button>
                </div>

            </form>
        </div>

    </div>
@endsection
