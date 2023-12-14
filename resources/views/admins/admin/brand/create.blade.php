@extends('layouts.admin')
@section('title', 'الاخبار')
@section('page', 'الاخبار')
@section('content')
<div class="table-responsive">
    <div class="card">
        <x-view.alerts />
        <div class="card-header">
            <x-buttons.btn-back route="brands.index" />

        </div>

        <div class="card-body">
            <form action="{{ route('brands.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <x-inputs.text-input label="الاسم" name="name" />
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <x-inputs.text-input label="التفاصيل " name="descrption" />
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <x-inputs.text-input label="اسم الشركه " name="brand" />
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <livewire:components.picture-upload>
                    </div>
                    <div class="col-md-3 col-6">
                        <x-inputs.checkbox-input label="فعال" name="active" value="1" />
                    </div>
                </div>
                <div class="dropdown-divider"></div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">حفظ</button>
                </div>
                @include(' includes.alerts.success')
             </form>
        </div>

    </div>
</div>
@endsection
