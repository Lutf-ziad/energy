@extends('layouts.admin')
@section('title', 'Edit Product')
@section('page', 'Edit Product')
@section('content')
<div class="table-responsive">
    <div class="card">
        <div class="card-header">
            <x-buttons.btn-back route="prizes.index" />
        </div>
        <div class="card-body">
            <form action="{{ route('prizes.update',$prize) }}" method="post">
                @csrf
                @method('patch')
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <x-inputs.text-input label="الاسم" name="name" :value="$prize->name" />
                    </div>
                    <div class="col-md-3 col-6">
                        <x-inputs.checkbox-input label="فعال" name="active" :value="$prize->active" />
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
