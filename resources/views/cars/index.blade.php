@extends('layouts.main')

@section('content')
<main class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-title">
            <div class="d-flex align-items-center">
              <h2 class="mb-0">All Cars Models</h2>
              <div class="ml-auto">
                <a href="{{ route('cars.create') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Add
                  New</a>
              </div>
            </div>
          </div>
          <div class="card-body">

            @include('cars.filter')

            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Model</th>
                  <th scope="col">Year</th>
                  <th scope="col">Salesperson email</th>
                  <th scope="col">Manufacturer</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>

              <tbody>
                @if ($cars->count())
                @foreach ($cars as $index => $car)
                <tr>
                  <th scope="row">{{ $index + 1 }}</th>
                  <td>{{ $car->model }}</td>
                  <td>{{ $car->year }}</td>
                  <td>{{ $car->salesperson_email }}</td>
                  <td>{{ $car->manufacturer->name }}</td>
                  <td width="150">
                    <div class="d-flex">
                      <a href="{{ route('cars.show', $car->id) }}" class="btn btn-sm btn-circle btn-outline-info"
                        title="Show"><i class="fa fa-eye"></i></a>
                      <a href="create.html" class="btn btn-sm btn-circle btn-outline-secondary ml-2" title="Edit"><i
                          class="fa fa-edit"></i></a>
                      <form action="{{ route('cars.delete', $car->id) }}" method="POST"
                        onsubmit="return confirm('Are you sure?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-circle btn-outline-danger ml-2" title="Delete"><i
                            class="fa fa-times"></i></button>
                      </form>
                    </div>
                  </td>
                </tr>
                @endforeach
                @endif
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection