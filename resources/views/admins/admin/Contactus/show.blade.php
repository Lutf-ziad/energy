@extends('layouts.admin')
@section('title', 'Details Contactu')
@section('page', 'Details Contactu')
@section('content')

    <div class="card">
        <div class="card-header">
            <x-buttons.btn-back route="Contactu.index" />
            <a href="{{route("Contactu.edit",$Contactu)}}" class="btn btn-outline-success float-right">{{__("تعديل")}}</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
              <div class="text-center mb-2">
                <img src={{asset('images/' . $Contactu->picture)}} class="img-thumbnail img-circle" width="100" height="100">
              </div>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>{{__("الاسم")}}</th><td>{{$Contactu->name}}</td>
                    </tr>
                    <tr>
                        <th>{{__("الرقم")}}</th><td>{{$Contactu->phone}}</td>
                    </tr>
                    <tr>
                        <th>{{__("الايميل")}}</th><td>{{$Contactu->email}}</td>
                    </tr>
                    <tr>
                        <th>{{__("الوصف")}}</th><td>{{$Contactu->desc}}</td>
                    </tr>
                    <tr>
                        <th>{{__("التفاعل")}}</th><td>{{getStatus($Contactu->active,["Yes","No"])}}</td>
                    </tr>
                    <tr>
                        <th>{{__("تم الانشاء")}}</th><td>{{$Contactu->created_at}}
                        <span class="d-block">{{$Contactu->created_at->diffForHumans()}}</span>
                        </td>
                    </tr>
                    <tr>
                        <th>{{__("تم التعديل")}}</th><td>{{$Contactu->updated_at}}
                            @if ($Contactu->updated_at)
                            <span class="d-block">{{$Contactu->updated_at->diffForHumans()}}</span>
                            @endif
                        </td>
                    </tr>

                </table>
            </div>
        </div>

    </div>
@endsection
