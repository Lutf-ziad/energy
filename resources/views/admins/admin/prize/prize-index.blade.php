@section('title', 'Product List')
@extends('layouts.admin')
@section('page', 'Product List')
<div>
    <div class="card">
         <div class="card-header">
            <x-buttons.btn-add route="prizes.create" />
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
                            <th>صوره</th>
                            <th>التفاعل</th>
                            <th>الانشطه</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($prizes as $priz)
                            <tr class="@if ($priz->deleted_at) {{ 'table-danger' }} @endif"
                                data-toggle="@if ($priz->deleted_at) {{ 'tooltip' }} @endif "
                                data-placement="top"
                                title="@if ($priz->deleted_at) {{ __('This Record is Trashed') }} @endif">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $priz->name     }}</td>
                                <td>
                                    <div class="col-3 p-md-0">
                                        <img class="img-circle img-thumbnail float-right" width="150" height="200" src={{asset('images/'.$priz->picture)}}                                 </div>
                                </td>
                                <td>{{ getStatus($priz->active) }}</td>
                                <td class="text-center">
                                     <x-buttons.btn-show route="prizes.show" :id="$priz" />
                                    <x-buttons.btn-edit route="prizes.edit" :id="$priz" />
                                    @if ($priz->deleted_at == null)
                                        <x-buttons.btn-delete route="prizes.destroy" :id="$priz" />
                                    @else
                                        <x-buttons.btn-force-delete route="prizes.force-delete" :id="$priz" />
                                        <x-buttons.btn-restore route="prizes.restore" :id="$priz" />
                                    @endif
                                    @php
                                        $actions = [['route' => 'prizes.change-active', 'label' => $priz->active ? 'InActive' : 'Active', 'id' => $priz]];
                                        $action = [['route' => 'image.index', 'label'  => 'Image', 'id' => $priz]];
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
                    {{ $prizes->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

