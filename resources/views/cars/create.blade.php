@extends('layouts.main')

@section('content')
<main class="py-5">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header card-title">
            <strong>Add New Car</strong>
          </div>           
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group row">
                  <label for="model" class="col-md-3 col-form-label">Model</label>
                  <div class="col-md-9">
                    <input type="text" name="model" id="model" class="form-control is-invalid">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="year" class="col-md-3 col-form-label">Year</label>
                  <div class="col-md-9">
                    <input type="text" name="year" id="year" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="salesperson_email" class="col-md-3 col-form-label">Salesperson Email</label>
                  <div class="col-md-9">
                    <input type="text" name="salesperson_email" id="salesperson_email" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="company_id" class="col-md-3 col-form-label">Company</label>
                  <div class="col-md-9">
                    <select name="company_id" id="company_id" class="form-control">
                    <option value="">Select Manufacturer</option>
                    @foreach ($manufacturers as $manufacturer)
                      <option value="{{ $manufacturer->id }}">{{ $manufacturer->name }}</option>
                    @endforeach
                    </select>
                  </div>
                </div>
                <hr>
                <div class="col-md-9 offset-md-5">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="{{ route('cars.index') }}" class="btn btn-outline-secondary">Cancel</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection