@extends('layouts.admin')
@section('title', 'Create Contactu')
@section('page', 'Create Contactu')
@section('content')
<div class="table-responsive">
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
                        <x-inputs.text-input label="الاسم" name="name" />
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <x-inputs.text-input type="الرقم" label="Phone" name="phone" />
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <x-inputs.text-input type="النص" label="Email" name="email" required="0" />
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <x-inputs.text-input label="الوصف" name="desc" required="0"/>
                    </div>
                    <div class="col-md-3 col-6">
                        <x-inputs.checkbox-input label="التفاعل" name="active" value="1" />
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
