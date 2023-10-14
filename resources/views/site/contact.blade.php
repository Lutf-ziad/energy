@extends('layout.main')

@section('content')
    <div class="content-area">
        <div class="container-fluid mw-1200">
            <div class="alm-tabs brands-tabs">
                <ul class="nav nav-pills nav-justified" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" data-catid="1" data-toggle="tab" href="#tab1">شركه مشاريع الطاقه</a>
                    </li>

                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab1">
                        <div class="table-responsive mt-4">
                            <table class="table">
                                <thead class="bg-light text-primary">
                                    <tr>
                                        <th width="33%">الاسم</th>
                                        <th width="20%">الرقم</th>
                                        <th width="20%"><i class="fab fa-whatsapp"></i> رقم الواتس</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>   شركه مشاريع الطاقه</td>
                                        <td>966 8003 043 334</td>
                                        <td>-</td>
                                        <td>info@enrgy.com</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" wire:model.defer="partnerRequest.username" type="text" id="name" placeholder="أدخل   الاسم  **" data-listener-added_cb6e8f04="true">
                                                                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" wire:model.defer="email" type="email" id="email" placeholder="أدخل عنوان بريدك الالكتروني*">
                                                                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input class="form-control" wire:model.defer="phone" type="text" id="phone" placeholder="رقم التواصل*">
                                                                                </div>
                            </div>
                        </div>
                        <button type="submit" id="btnSave1" name="btnSave1" class="btn btn-primary" style="float: right;">أرسل</button>
                    </div>
                    {{-- <a href="{{ url('complain') }}" class="float-complain" target="_blank">
                        <i class="fa fa-ticket my-float"></i> Your Valued Feedback </a> --}}

                </div>
            </div>
            <hr>
            <div class="embed-responsive embed-responsive-21by9 mb-2">
                <div id="contact_map" style="position: initial !important;"></div>
            </div>
        </div>

    </div>



    <!-- Location picker -->
    <script type="text/javascript" src="{{ asset('maps/api/js.html?key=AIzaSyBgosoARzpSnpQc6o-gbDl57md_8JnU5-U&libraries=places') }}">
    </script>

@endsection
