@extends('layouts.admin')
@section('title', 'Edit Contactu')
@section('page', 'Edit Contactu')
@section('content')
<div class="table-responsive">
    <div class="card">
        <div class="card-header">
            <x-buttons.btn-back route="Contactu.index" />
            <img class="img-circle img-thumbnail float-right" width="100" height="100" src={{asset('images/' . $Contactu->picture)}} />
        </div>
        <div class="card-body">
            <form action="{{ route('Contactu.update', $Contactu) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <x-inputs.text-input label="الاسم" name="name" :value="$Contactu->name" />
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <x-inputs.text-input label="الايميل" name="email" :value="$Contactu->email" />
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <x-inputs.text-input label="الرقم" name="phone" :value="$Contactu->phone" />
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <x-inputs.text-input label="الوصف" name="desc" :value="$Contactu->desc" />
                    </div>
                    <div class="col-md-3 col-6">
                        <x-inputs.checkbox-input label="التفاعل" name="active" :value="$Contactu->active" />
                    </div>
                </div>
                <div class="dropdown-divider"></div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">حفظ</button>
                </div>

            </form>
        </div>

    </div>
</div>
@endsection
