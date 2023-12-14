@section('title', 'Blogs List')
@section('page', 'Blogs List')
<div>
    <div class="card">
        <div class="card-header">
            <x-buttons.btn-add route="Blogs.create" />
        </div>
        <div class="card-body pt-2">
            <x-filter-bar :columnsSort="$columns" :columnsSearch="['Name']" :byDate="$byDate">
        </x-filter-bar>
        <div class="table-responsive">
            <table id="my-data-table" class="mt-1 table table-bordered table-hover">
                <thead class="">
                    <tr>
                        <th>#</th>
                        <th>الاسم</th>
                        <th>التفاصيل</th>
                        <th>الشركه المصنعه</th>
                        <th>صوره</th>
                        <th>فعال</th>
                        <th>الانشطه التفاعليه</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($brands as $brand)
                        <tr class="@if ($brand->deleted_at) {{ 'table-danger' }} @endif"
                            data-toggle="@if ($brand->deleted_at) {{ 'tooltip' }} @endif "
                            data-placement="top"
                            title="@if ($brand->deleted_at) {{ __('This Record is Trashed') }} @endif">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ substr( $brand->name , 0, 100)}}</td>
                            <td>{{ substr($brand->descrption , 0, 100)}}</td>
                            <td>{{ Str::limit($brand->brand) }}</td>
                            <td>
                                <div class="col-3 p-md-0">
                                    <img class="img-circle img-thumbnail float-right" width="150" height="200" src={{asset('images/'.$brand->picture)}}                                 </div>
                            </td>

                            <td>{{ getStatus($brand->active) }}</td>
                            </td>
                             <td class="text-center">
                                <x-buttons.btn-show route="brands.show" :id="$brand" />
                                <x-buttons.btn-edit route="brands.edit" :id="$brand" />
                                @if ($brand->deleted_at == null)
                                    <x-buttons.btn-delete route="brands.destroy" :id="$brand" />
                                @else
                                    <x-buttons.btn-force-delete route="brands.force-delete" :id="$brand" />
                                    <x-buttons.btn-restore route="brands.restore" :id="$brand" />
                                @endif
                                @php
                                    $actions = [['route' => 'brands.change-active', 'label' => $brand->active ? 'غير فعال' : 'فعال', 'id' => $brand]];
                                @endphp
                                <x-buttons.btn-more :actions="$actions" />
                            </td>
                        </tr>
                    @empty
                        <tr class="text-center">
                            <td colspan="11">ليس هناك بيانات</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <div class="float-right">
                {{ $brands->links() }}
            </div>
        </div>
    </div>
</div>
</div>
