@section('title', 'Product List')
@extends('layouts.admin')
@section('page', 'Product List')
<div>
    <div class="card">
         <div class="card-header">
            <x-buttons.btn-add route="team.create" />
        </div>
        <div class="card-body pt-2">
            <x-filter-bar :columnsSort="$columns" :columnsSearch="['Name']" :byDate="$byDate" >
            </x-filter-bar>
            <div class="table-responsive">
                <table id="my-data-table" class="mt-1 table table-bordered table-hover">
                    <thead class="">
                        <tr>
                            <th>#</th>
                            <th>الاسم</th>
                            <th>الوضيفه</th>
                            <th>صوره</th>
                            <th>التفاعل</th>
                            <th>الانشطه</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($Teme as $teme)
                            <tr class="@if ($teme->deleted_at) {{ 'table-danger' }} @endif"
                                data-toggle="@if ($teme->deleted_at) {{ 'tooltip' }} @endif "
                                data-placement="top"
                                title="@if ($teme->deleted_at) {{ __('This Record is Trashed') }} @endif">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $teme->name     }}</td>
                                <td>{{ $teme->jop     }}</td>
                                <td>
                                    <div class="col-3 p-md-0">
                                        <img class="img-circle img-thumbnail float-right" width="150" height="200" src={{asset('images/'.$teme->picture)}}                                 </div>
                                </td>
                                <td>{{ getStatus($teme->active) }}</td>
                                <td class="text-center">
                                    <x-buttons.btn-show route="team.show" :id="$teme" />
                                   <x-buttons.btn-edit route="team.edit" :id="$teme" />
                                   @if ($teme->deleted_at == null)
                                       <x-buttons.btn-delete route="team.destroy" :id="$teme" />
                                   @else
                                       <x-buttons.btn-force-delete route="team.force-delete" :id="$teme" />
                                       <x-buttons.btn-restore route="team.restore" :id="$teme" />
                                   @endif
                                   @php
                                       $actions = [['route' => 'team.change-active', 'label' => $teme->active ? 'InActive' : 'Active', 'id' => $teme]];
                                       $action = [['route' => 'image.index', 'label'  => 'Image', 'id' => $teme]];
                                   @endphp
                                   <x-buttons.btn-more :actions="$actions" />
                                   <x-buttons.btn-more :actions="$action" />
                                </td>
                            </tr>
                        @empty
                            <tr class="text-center">
                                <td colspan="7">ليس هناك بيانات</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <div class="float-right">
                    {{ $Teme->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

