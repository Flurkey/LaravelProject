<div class="row">
    <div class="col-md-12">
      <div class="form-group row">
        <label for="model" class="col-md-3 col-form-label">Model</label>
        <div class="col-md-9">
          <input type="text" name="model" id="model" value="{{ old('model') }}" class="form-control @error('model') is-invalid @enderror">
          @error ('model')
          <div class="invalid-feedback">
             {{ $message }}
          </div>
        @enderror
        </div>
      </div>
      <div class="form-group row">
        <label for="year" class="col-md-3 col-form-label">Year</label>
        <div class="col-md-9">
          <input type="number" name="year" id="year" value="{{ old('year') }}" class="form-control @error('year') is-invalid @enderror">
          @error ('year')
            <div class="invalid-feedback">
               {{ $message }}
            </div>
          @enderror
        </div>
      </div>
      <div class="form-group row">
        <label for="salesperson_email" class="col-md-3 col-form-label">Salesperson Email</label>
        <div class="col-md-9">
          <input type="text" name="salesperson_email" id="salesperson_email" value="{{ old('salesperson_email') }}" class="form-control @error('salesperson_email') is-invalid @enderror">
          @error ('salesperson_email')
            <div class="invalid-feedback">
               {{ $message }}
            </div>
          @enderror
        </div>
      </div>
      <div class="form-group row">
    <label for="manufacturer_id" class="col-md-3 col-form-label">Manufacturer</label>
    <div class="col-md-9">
            <select name="manufacturer_id" id="manufacturer_id" value="{{ old('manufacturer_id') }}" class="form-control @error('manufacturer_id') is-invalid @enderror">
                <option value="">Select Manufacturer</option>
                @foreach ($manufacturers as $manufacturer)
                    <option {{ $manufacturer->id == old('manufacturer_id') ? 'selected' : '' }} value="{{ $manufacturer->id }}">{{ $manufacturer->name }}</option>
                @endforeach
            </select>
            @error ('manufacturer_id')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
      <hr>
      <div class="form-group row mb-0">
        <div class="col-md-9 offset-md-3">
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('cars.index') }}" class="btn btn-outline-secondary">Cancel</a>
        </div>
      </div>
    </div>
  </div>