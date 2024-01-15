<div class="row">
    <div class="col-md-6"></div>
    <div class="col-md-6">
        <div class="row">
            <div class="col mx-auto">
                <div class="input-group mb-3">
                    <select id="filter_manufacturer_id" name="manufacturer_id" class="custom-select">
                        @foreach ($manufacturers as $id => $name)
                        <option {{ $id==request('manufacturer_id') ? 'selected' : '' }} value="{{ $id }}">{{ $name }}
                        </option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>