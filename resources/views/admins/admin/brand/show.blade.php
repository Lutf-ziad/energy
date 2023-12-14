@extends('layouts.admin')
@section('title', 'Details Blog')
@section('page', 'Details Blog')
@section('content')
    <div class="card">
        <div class="card-header">
            <x-buttons.btn-back route="brands.index" />
            <a href="{{ route('brands.edit', $brand) }}" class="btn btn-outline-success float-right">{{ __('تعديل') }}</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="text-center mb-2">
                    <img class="img-circle img-thumbnail float-right" width="100" height="100" src={{asset('images/' . $brand->picture)}}                                 </div>
                </div>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>{{ __('الاسم') }}</th>
                        <td>{{ $brand->name }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('وصف  البطاريه') }}</th>
                        <td>{{ $brand->descrption }}</td>
                    </tr>


                    <tr>
                        <th>{{ __('فعال') }}</th>
                        <td>{{ getStatus($brand->active, ['Yes', 'No']) }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('Special Store') }}</th>
                        <td>{{ getStatus($brand->special, ['Yes', 'No'], false, ['info', 'info']) }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('تم الانشاء') }}</th>
                        <td>{{ $brand->created_at }}
                            <span class="d-block">{{ $brand->created_at->diffForHumans() }}</span>
                        </td>
                    </tr>
                    <tr>
                        <th>{{ __('تم التعديل') }}</th>
                        <td>{{ $brand->updated_at }}
                            @if ($brand->updated_at)
                                <span class="d-block">{{ $brand->updated_at->diffForHumans() }}</span>
                            @endif
                        </td>
                    </tr>

                </table>
            </div>
        </div>

    </div>
@endsection
