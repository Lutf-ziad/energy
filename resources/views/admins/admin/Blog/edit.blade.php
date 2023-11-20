@extends('layouts.admin')
@section('title', 'Edit Blog')
@section('page', 'Edit Blog')
@section('content')
<div class="table-responsive">
    <div class="card">
        <div class="card-header">
            <x-buttons.btn-back route="Blogs.index" />
            <img class="img-circle img-thumbnail float-right" width="100" height="100" src={{asset('images/' . $Blog->picture)}} />
        </div>
        <div class="card-body">
            <form action="{{ route('Blogs.update',$Blog) }}" method="post" >
                @csrf
                @method('patch')
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <x-inputs.text-input label="الاسم" name="name" :value="$Blog->name" />
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <x-inputs.text-input label="التفاصيل" name="descrption" :value="$Blog->descrption" />
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <livewire:components.picture-upload>
                    </div>
                    <div class="col-md-3 col-6">
                        <x-inputs.checkbox-input label="فعال" name="active" :value="$Blog->active"/>
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
