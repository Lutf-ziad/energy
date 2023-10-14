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
                        <th>Name</th>
                        <th>desc Name</th>
                        <th>Image</th>
                        <th>Active</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($Blogs as $Blog)
                        <tr class="@if ($Blog->deleted_at) {{ 'table-danger' }} @endif"
                            data-toggle="@if ($Blog->deleted_at) {{ 'tooltip' }} @endif "
                            data-placement="top"
                            title="@if ($Blog->deleted_at) {{ __('This Record is Trashed') }} @endif">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ substr( $Blog->name , 0, 20)}}</td>
                            <td>{{ substr($Blog->descrption , 0, 30)}}</td>
                            <td>
                                <div class="col-3 p-md-0">
                                    <img class="img-circle img-thumbnail float-right" width="50" height="50" src={{asset('uploads/blog/' . $Blog->picture)}}                                 </div>
                            </td>

                            <td>{{ getStatus($Blog->active) }}</td>
                            </td>
                             <td class="text-center">
                                <x-buttons.btn-show route="Blogs.show" :id="$Blog" />
                                <x-buttons.btn-edit route="Blogs.edit" :id="$Blog" />
                                @if ($Blog->deleted_at == null)
                                    <x-buttons.btn-delete route="Blogs.destroy" :id="$Blog" />
                                @else
                                    <x-buttons.btn-force-delete route="Blogs.force-delete" :id="$Blog" />
                                    <x-buttons.btn-restore route="Blogs.restore" :id="$Blog" />
                                @endif
                                @php
                                    $actions = [['route' => 'Blogs.change-active', 'label' => $Blog->active ? 'InActive' : 'Active', 'id' => $Blog]];
                                @endphp
                                <x-buttons.btn-more :actions="$actions" />
                            </td>
                        </tr>
                    @empty
                        <tr class="text-center">
                            <td colspan="11">No Data</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <div class="float-right">
                {{ $Blogs->links() }}
            </div>
        </div>
    </div>
</div>
</div>
