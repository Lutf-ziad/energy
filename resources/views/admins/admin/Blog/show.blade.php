@extends('layouts.admin')
@section('title', 'Details Blog')
@section('page', 'Details Blog')
@section('content')
    <div class="card">
        <div class="card-header">
            <x-buttons.btn-back route="Blogs.index" />
            <a href="{{ route('Blogs.edit', $Blog) }}" class="btn btn-outline-success float-right">{{ __('تعديل') }}</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="text-center mb-2">
                    <img class="img-circle img-thumbnail float-right" width="100" height="100" src={{asset('images/' . $Blog->picture)}}                                 </div>
                </div>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>{{ __('الاسم') }}</th>
                        <td>{{ $Blog->name }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('نوع البطاريه') }}</th>
                        <td>{{ $Blog->descrption }}</td>
                    </tr>


                    <tr>
                        <th>{{ __('فعال') }}</th>
                        <td>{{ getStatus($Blog->active, ['Yes', 'No']) }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('Special Store') }}</th>
                        <td>{{ getStatus($Blog->special, ['Yes', 'No'], false, ['info', 'info']) }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('تم الانشاء') }}</th>
                        <td>{{ $Blog->created_at }}
                            <span class="d-block">{{ $Blog->created_at->diffForHumans() }}</span>
                        </td>
                    </tr>
                    <tr>
                        <th>{{ __('تم التعديل') }}</th>
                        <td>{{ $Blog->updated_at }}
                            @if ($Blog->updated_at)
                                <span class="d-block">{{ $Blog->updated_at->diffForHumans() }}</span>
                            @endif
                        </td>
                    </tr>

                </table>
            </div>
        </div>

    </div>
@endsection
