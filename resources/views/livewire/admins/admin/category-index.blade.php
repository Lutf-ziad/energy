@section('title', 'انواع البطاريات   ')
@section('page', 'انواع البطاريات   ')
<div>
    {{-- <x-view.alerts /> --}}
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
                            <th>فعّال</th>
                             <th>أعمال</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($categories as $category)
                            <tr class="@if ($category->deleted_at) {{ 'table-danger' }} @endif"
                                data-toggle="@if ($category->deleted_at) {{ 'tooltip' }} @endif "
                                data-placement="top"
                                title="@if ($category->deleted_at) {{ __('This Record is Trashed') }} @endif">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ getStatus($category->active) }}</td>
                                 <td class="text-center">
                                    <x-livewire.buttons.btn-show :id="$category->id" />
                                    <x-livewire.buttons.btn-edit :id="$category->id" />
                                    @if ($category->deleted_at == null)
                                        <x-livewire.buttons.btn-delete :id="$category->id" />
                                    @else
                                        <x-livewire.buttons.btn-force-delete :id="$category->id" />
                                        <x-livewire.buttons.btn-restore :id="$category->id" />
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr class="text-center">
                                <td colspan="5"> ليس هناك بيانات</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer">
            <div class="float-right">
                {{ $categories->links() }}
            </div>
        </div>
    </div>
    <div wire:ignore.self class="modal fade" id="formModal" tabindex="-1" role="dialog"
        aria-labelledby="formModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="formModalLabel">
                        {{ $mode == 'edit' ? 'تعديل نوع بطارية' : ($mode == 'show' ? 'Show Category' : 'انشائ نوع بطارية') }}
                    </h5>
                    <button type="button"  onclick="history.back();" class="close" data-dismiss="modal" aria-label="اغلاق">
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
                                <th>الوصف</th>
                                <td>{{ $name }}</td>
                            </tr>
                            <tr>
                                <th>الصوره</th>
                                <td>{{ $name }}</td>
                            </tr>
                            <tr>
                                <th>فعّال</th>
                                <td> {{ getStatus($active) }}</td>
                            </tr>
                            <tr>
                                <th>تم الانشاء</th>
                                <td> {{ $created_at }} | {{$created_at->diffForHumans()}}</td>
                            </tr>
                            <tr>
                                <th>تم التعديل  </th>
                                <td> {{ $updated_at }} | {{$updated_at!=null?$updated_at->diffForHumans():''}}</td>
                            </tr>
                        </table>
                    @else
                        <form wire:submit.prevent="store()">
                            <x-livewire.inputs.text-input name="name" label="الاسم" />
                            <x-livewire.inputs.text-input name="dec" label="الوصف" />
                                <livewire:components.picture-upload>
                            <x-livewire.inputs.checkbox-input name="active" label="التفاعل" />
                        </form>
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button"  onclick="history.back();" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                    @if ($mode == 'create' || $mode == 'edit')
                        <button type="submit" class="btn btn-primary" wire:click.prevent="store()">حفظ</button>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
