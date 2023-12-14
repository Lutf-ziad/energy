@extends('layouts.admin')
@section('title', 'Edit Product')
@section('page', 'Edit Product')
@section('content')
<div class="table-responsive">
    <div class="card">
        <div class="card-header">
            <x-buttons.btn-back route="products.index" />
        </div>
        <div class="card-body">
            <form action="{{ route('products.update',$product) }}" method="post">
                @csrf
                @method('patch')
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <x-inputs.select-input label="نوع البطاريه" name="categorie_id" :items="$Catgry" :value="$product->categorie_id"/>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <x-inputs.text-input label="الاسم" name="name" :value="$product->name" />
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <x-inputs.text-input label="الشركه المصنعه" name="brand" :value="$product->brand" />
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <x-inputs.text-input label="الوصف" name="desc" :value="$product->desc" required="0"/>
                    </div>
                    {{-- <div class="col-md-3 col-sm-6">
                        <x-inputs.text-input type="الرقم" label="Price" name="price" :value="$product->price"/>
                    </div> --}}
                    <div class="col-md-3 col-6">
                        <x-inputs.checkbox-input label="فعال" name="active" :value="$product->active" />
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
