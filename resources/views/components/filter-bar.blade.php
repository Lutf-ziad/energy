@push('css')
    <style>
        input:placeholder-shown {
            text-overflow: ellipsis;
        }
    </style>
@endpush
<a class="btn btn-default btn-block my-collapse" data-toggle="collapse" href="#collapse-filter-bar" role="button"
    aria-expanded="true">
    فلتره <i class="float-right mt-1 fas fa-angle-up"></i>
</a>
<div class="pt-1">
    <div class="collapse  show " id="collapse-filter-bar">
        <div class="card card-body">
            <div class="row mb-1">
                <div class="col-md-3">
                    <label for="records" class="mb-0">إظهار السجلات    </label>
                    <select wire:model="records" id="records" class="form-control">
                        <option value="without-trashed">بدون المهملات</option>
                        <option value="trashed">المهملات</option>
                        <option value="all">الكل</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="orderBy" class="mb-0">ترتيب السجلات</label>
                    <select wire:model="orderBy" id="orderBy" class="form-control">
                        @foreach ($columnsSort as $key => $value)
                            <option value="{{ $key }}">{{ $value }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="sortAs" class="mb-0">فرز حسب</label>
                    <select wire:model="sortAs" id="sortAs" class="form-control">
                        <option value="asc">تصاعدي</option>
                        <option value="desc">تنازلي</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="search" class="mb-0">البحث</label>
                    <div class="input-group">
                        <input wire:model.debounce.500ms="key" type="search" id="search"
                            class="form-control float-right" placeholder="Ex: {{ implode(', ', $columnsSearch) }}"
                            class="overflow-hidden">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <label for="byDate" class="mb-0">حسب التاريخ</label>
                    <select wire:model="byDate" id="byDate" class="form-control">
                        <option value="all">الكل</option>
                        <option value="within-day">خلال يوم</option>
                        <option value="until-day">حتى يوم واحد</option>
                        <option value="range-date" wire:ignore>حدد موعدًا</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="date1" class="mb-0">التاريخ الاول</label>
                    <div class="input-group">
                        <input wire:model="date1" type="date" id="date1" class="form-control">
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <i class="fa fa-calendar"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="date2" class="mb-0">التاريخ الثاني</label>
                    <div class="input-group">
                        <input wire:model="date2" type="date" id="date2" class="form-control"
                            @disabled($byDate != 'range-date')>
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <i class="fa fa-calendar"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <label></label>
                    <button class="btn btn-outline-dark d-block btn-block" wire:click="resetDefault">اعاده التعيين الفلتر</button>
                </div>
            </div>
            {{ $slot }}
        </div>
    </div>
</div>

@push('js')
    <script>
        $(".my-collapse").on("click", function() {
            $(this).find(".fa-angle-up").toggleClass("rotate-icon");
        });
    </script>
@endpush
@push('css')
    <style>
        .rotate-icon {
            transform: rotate(-180deg);
            -webkit-transform: rotate(-180deg);
            -moz-transform: rotate(-180deg);
            -ms-transform: rotate(-180deg);
            -o-transform: rotate(-180deg);
        }
    </style>
@endpush
