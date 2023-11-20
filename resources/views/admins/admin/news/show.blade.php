@extends('layouts.admin')
@section('title', 'Details Product')
@section('page', 'Details Product')
@section('content')
    <div class="card">
        <div class="card-header">
            <x-buttons.btn-back route="products.index" />
            <a href="{{ route('products.edit', $product) }}"
                class="btn btn-outline-success float-right">{{ __('تعديل') }}</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="text-center mb-2">
                    <img class="img-circle img-thumbnail float-right" width="100" height="100" src={{asset('images/'.$product->picture)}}                                 </div>
                </div>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>{{ __('الاسم') }}</th>
                        <td>{{ $product->name }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('نوع البطاريه') }}</th>
                        <td><a>{{ $product->categorie->name }}</a></td>
                    </tr>
                    <tr>
                        <th>{{ __('الوصف') }}</th>
                        <td>{{ $product->desc }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('السعر') }}</th>
                        <td>{{ $product->price }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('التفاعل') }}</th>
                        <td>{{ getStatus($product->active, ['Yes', 'No']) }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('تم الانشاء') }}</th>
                        <td>{{ $product->created_at }}
                            <span class="d-block">{{ $product->created_at->diffForHumans() }}</span>
                        </td>
                    </tr>
                    <tr>
                        <th>{{ __('تم التعديل') }}</th>
                        <td>{{ $product->updated_at }}
                            @if ($product->updated_at)
                                <span class="d-block">{{ $product->updated_at->diffForHumans() }}</span>
                            @endif
                        </td>
                    </tr>

                </table>
            </div>
        </div>

    </div>
@endsection
