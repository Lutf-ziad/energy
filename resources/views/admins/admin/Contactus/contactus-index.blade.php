@section('title', 'Contactus List')
@section('page', 'Contactus List')
<div>
    <div class="card">
        <div class="card-header">
            <x-buttons.BtnAdd route="Contactu.create" />
        </div>
        <div class="card-body pt-2">
            <x-filter-bar :columnsSort="$columns" :columnsSearch="['Name', 'Phone', 'Email']" :byDate="$byDate" />
            <div class="table-responsive">
                <table id="my-data-table" class="mt-1 table table-bordered table-hover">
                    <thead class="">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>email</th>
                            <th>phone</th>
                            <th>Describe</th>
                            <th>Active</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($Contactus as $Contactu)
                            <tr class="@if ($Contactu->deleted_at) {{ 'table-danger' }} @endif"
                                data-toggle="@if ($Contactu->deleted_at) {{ 'tooltip' }} @endif "
                                data-placement="top"
                                title="@if ($Contactu->deleted_at) {{ __('This Record is Trashed') }} @endif">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $Contactu->name }}</td>
                                <td>{{ $Contactu->email }}</td>
                                <td>{{ $Contactu->phone }}</td>
                                <td>{{ substr($Contactu->desc , 0, 50) }}</td>
                                <td>{{ getStatus($Contactu->active) }}</td>
                                <td class="text-center">
                                    <x-buttons.btn-show route="Contactu.show" :id="$Contactu" />
                                    <x-buttons.btn-edit route="Contactu.edit" :id="$Contactu" />
                                    @if ($Contactu->deleted_at == null)
                                        <x-buttons.btn-delete route="Contactu.destroy" :id="$Contactu" />
                                    @else
                                        <x-buttons.btn-force-delete route="Contactu.force-delete" :id="$Contactu" />
                                        <x-buttons.btn-restore route="Contactu.restore" :id="$Contactu" />
                                    @endif
                                    @php
                                        $actions = [['route' => 'Contactu.change-active', 'label' => $Contactu->active ? 'InActive' : 'Active', 'id' => $Contactu]];
                                    @endphp
                                    <x-buttons.btn-more :actions="$actions" />
                                </td>
                            </tr>
                        @empty
                            <tr class="text-center">
                                <td colspan="6">No Data</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <div class="float-right">
                    {{ $Contactus->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
