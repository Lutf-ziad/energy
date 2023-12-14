@section('title', 'Product List')
@extends('layouts.admin')
@section('page', 'Product List')
<div>
    <div class="card">
         <div class="card-header">
            <x-buttons.btn-add route="products.create" />
        </div>
        <div class="card-body pt-2">
            <x-filter-bar :columnsSort="$columns" :columnsSearch="['Name', 'Describe']" :byDate="$byDate" >
                <div class="row mt-1 mb-0">
                    <div class="col-md-6">
                        <label for="byCatgry" class="mb-0">نوع الشركه المصنعه البطاريه</label>
                        <select wire:model="byCatgry" id="byCatgry" class="form-control">
                            <option value="all">الكل</option>
                            @foreach ($Catgrys as $Catgry)
                                <option value="{{ $Catgry->id }}">{{ $Catgry->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </x-filter-bar>
            <div class="table-responsive">
                <table id="my-data-table" class="mt-1 table table-bordered table-hover">
                    <thead class="">
                        <tr>
                            <th>#</th>
                            <th>الاسم</th>
                            <th>صوره</th>
                            <th>نوع البطاريه</th>
                            <th>الوصف</th>
                            <th>الشركه المصنعه</th>
                             <th>التفاعل</th>
                            <th>الانشطه</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $product)
                            <tr class="@if ($product->deleted_at) {{ 'table-danger' }} @endif"
                                data-toggle="@if ($product->deleted_at) {{ 'tooltip' }} @endif "
                                data-placement="top"
                                title="@if ($product->deleted_at) {{ __('This Record is Trashed') }} @endif">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $product->name     }}</td>
                                <td>
                                    <div class="col-3 p-md-0">
                                        <img class="img-circle img-thumbnail float-right" width="150" height="200" src={{asset('images/'.$product->picture)}}                                 </div>
                                </td>
                                <td><a href="{{route("products.show",$product->categorie_id)}}">{{ $product->categorie->name }}</a></td>
                                <td>{{ Str::limit($product->desc,30) }}</td>
                                <td>{{ Str::limit($product->brand) }}</td>
                                 <td>{{ getStatus($product->active) }}</td>
                                <td class="text-center">
                                     <x-buttons.btn-show route="products.show" :id="$product" />
                                    <x-buttons.btn-edit route="products.edit" :id="$product" />
                                    @if ($product->deleted_at == null)
                                        <x-buttons.btn-delete route="products.destroy" :id="$product" />
                                    @else
                                        <x-buttons.btn-force-delete route="products.force-delete" :id="$product" />
                                        <x-buttons.btn-restore route="products.restore" :id="$product" />
                                    @endif
                                    @php
                                        $actions = [['route' => 'products.change-active', 'label' => $product->active ? 'InActive' : 'Active', 'id' => $product]];
                                     @endphp
                                    <x-buttons.btn-more :actions="$actions" />
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
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

