@extends('layouts.admin')
@section('title', 'Create Product')
@section('page', 'Create Product')
@section('content')
<div class="table-responsive">
    <div class="card">
        <x-view.alerts />
        <div class="card-header">
            <x-buttons.btn-back route="products.index" />
        </div>
        <div class="card-body">
            <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <label for="byCatgry" class="mb-0">نوع الشركه المصنعه البطاريه</label>
                            <select name="categorie_id" id="categorie_id" class="form-control">
                                <option value="all">الكل</option>
                                @foreach ($Category as $Catgry)
                                    <option value="{{ $Catgry->id }}">{{ $Catgry->name }}</option>
                                @endforeach
                            </select>
                        </div>
                     <div class="col-md-3 col-sm-6">
                        <x-inputs.text-input label="الاسم" id="name" name="name" />
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <x-inputs.text-input label="التفاصيل " id="desc" name="desc" />
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <livewire:components.picture-upload>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <x-inputs.text-input type="الرقم" label="Price"  id="price" name="price" />
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
