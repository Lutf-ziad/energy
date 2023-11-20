@extends('layouts.admin')
@section('title', 'Details Product')
@section('page', 'Details Product')
@section('content')
    <div class="card">
         <div class="card-header">
            <x-buttons.btn-back route="team.index" />
            <a href="{{ route('team.edit', $teme) }}"
                class="btn btn-outline-success float-right">{{ __('تعديل') }}</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="text-center mb-2">
                    <img class="img-circle img-thumbnail float-right" width="100" height="100" src={{asset('images/'.$teme->picture)}}                                 </div>
                </div>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>{{ __('الاسم') }}</th>
                        <td>{{ $teme->name }}</td>
                    </tr>

                    <tr>
                        <th>{{ __('الوضيفه') }}</th>
                        <td>{{ $teme->jop }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('السعر') }}</th>
                        <td>{{ $teme->price }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('التفاعل') }}</th>
                        <td>{{ getStatus($teme->active, ['Yes', 'No']) }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('تم الانشاء') }}</th>
                        <td>{{ $teme->created_at }}
                            <span class="d-block">{{ $teme->created_at->diffForHumans() }}</span>
                        </td>
                    </tr>
                    <tr>
                        <th>{{ __('تم التعديل') }}</th>
                        <td>{{ $teme->updated_at }}
                            @if ($teme->updated_at)
                                <span class="d-block">{{ $teme->updated_at->diffForHumans() }}</span>
                            @endif
                        </td>
                    </tr>

                </table>
            </div>
        </div>

    </div>
@endsection
