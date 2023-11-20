@section('title', 'قايمه التحكم')
@section('page', '  قايمه التحكم')
<div>
    <x-view.alerts />
    <div class="card">
        <div class="card-header">
            <x-livewire.buttons.btn-add />
        </div>
        <div class="card-body pt-2">
            <x-filter-bar :columnsSort="$columns" :columnsSearch="['Name']" :byDate="$byDate" />
            <div class="table-responsive">
                <table id="my-data-table" class="mt-1 table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>الاسم </th>
                            <th>رقم </th>
                            <th>الايميل</th>
                             <th>فعّال</th>
                             <th>أعمال</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($Admins as $Admin)
                            <tr class="@if ($Admin->deleted_at) {{ 'table-danger' }} @endif"
                                data-toggle="@if ($Admin->deleted_at) {{ 'tooltip' }} @endif "
                                data-placement="top"
                                title="@if ($Admin->deleted_at) {{ __('This Record is Trashed') }} @endif">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $Admin->name }}</td>
                                <td>{{ $Admin->phone }}</td>
                                <td>{{ $Admin->email }}</td>
                                <td>{{ getStatus($Admin->active) }}</td>
                                <td class="text-center">
                                    <x-livewire.buttons.btn-show :id="$Admin->id" />
                                    <x-livewire.buttons.btn-edit :id="$Admin->id" />
                                    @if ($Admin->deleted_at == null)
                                        <x-livewire.buttons.btn-delete :id="$Admin->id" />
                                    @else
                                        <x-livewire.buttons.btn-force-delete :id="$Admin->id" />
                                        <x-livewire.buttons.btn-restore :id="$Admin->id" />
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr class="text-center">
                                <td colspan="5">ليس هناك بيانات</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer">
            <div class="float-right">
                {{ $Admins->links() }}
            </div>
        </div>
    </div>
    <div wire:ignore.self class="modal fade" id="formModal" tabindex="-1" role="dialog"
        aria-labelledby="formModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="formModalLabel">
                        {{ $mode == 'edit' ? 'تعديل' : ($mode == 'show' ? 'عرص ' : 'انشائ') }}
                    </h5>
                    <button type="button" onclick="history.back();" class="close" data-dismiss="modal" aria-label="اغلاق">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @if ($mode == 'show')
                        <table class="table table-bordered">
                            <tr>
                                <th>الاسم</th>
                                <td>{{ $name }}</td>
                            </tr>
                            <tr>
                                <th>الايميل</th>
                                <td>{{ $email }}</td>
                            </tr>
                            <tr>
                                <th>الرقم</th>
                                <td>{{ $phone }}</td>
                            </tr>
                            <tr>
                                <th>فعال</th>
                                <td> {{ getStatus($active) }}</td>
                            </tr>
                            <tr>
                                <th>تم الانشاء</th>
                                <td> {{ $created_at }} | {{$created_at->diffForHumans()}}</td>
                            </tr>
                            <tr>
                                <th>تم التعديل</th>
                                <td> {{ $updated_at }} | {{$updated_at!=null?$updated_at->diffForHumans():''}}</td>
                            </tr>
                        </table>
                    @else
                        <form wire:submit.prevent="store()">
                            <x-livewire.inputs.text-input name="name" label="الاسم " />
                            <x-livewire.inputs.text-input name="email" label="الايميل" />
                            <x-livewire.inputs.text-input name="phone" label="الرقم" />
                            <x-livewire.inputs.text-input name="password" label="كلمه السر" />
                            <x-livewire.inputs.checkbox-input name="active" label="فعال" />
                        </form>
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" onclick="history.back();" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                    @if ($mode == 'create' || $mode == 'edit')
                        <button type="submit" class="btn btn-primary" wire:click.prevent="store()">حفظ</button>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
