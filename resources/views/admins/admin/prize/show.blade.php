@extends('layouts.admin')
@section('title', 'Details Product')
@section('page', 'Details Product')
@section('content')
    <div class="card">
        <div class="card-header">
            <x-buttons.btn-back route="prizes.index" />
            <a href="{{ route('prizes.edit', $prize) }}"
                class="btn btn-outline-success float-right">{{ __('تعديل') }}</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="text-center mb-2">
                    <img class="img-circle img-thumbnail float-right" width="100" height="100" src={{asset('images/'.$prize->picture)}}                                 </div>
                </div>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>{{ __('الاسم') }}</th>
                        <td>{{ $prize->name }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('نوع البطاريه') }}</th>
                        <td><a>{{ $prize->name }}</a></td>
                    </tr>

                    <tr>
                        <th>{{ __('التفاعل') }}</th>
                        <td>{{ getStatus($prize->active, ['Yes', 'No']) }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('تم الانشاء') }}</th>
                        <td>{{ $prize->created_at }}
                            <span class="d-block">{{ $prize->created_at->diffForHumans() }}</span>
                        </td>
                    </tr>
                    <tr>
                        <th>{{ __('تم التعديل') }}</th>
                        <td>{{ $prize->updated_at }}
                            @if ($prize->updated_at)
                                <span class="d-block">{{ $prize->updated_at->diffForHumans() }}</span>
                            @endif
                        </td>
                    </tr>

                </table>
            </div>
        </div>

    </div>
@endsection
