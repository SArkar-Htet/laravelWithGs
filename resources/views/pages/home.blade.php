@extends('layouts.master')
@section('content')
  <div class="container pt-3">
    <div class="row">
      <div class="col-md-12">
        <h2>Google Sheet Data</h2>
        <table class="table table-bordered">
          <thead class="thead-light">
            <tr>
              <th scope="col">Name</th>
              <th scope="col">Age</th>
              <th scope="col">Address</th>
              <th scope="col">Phone</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $value)
              <tr>
                <td>{{ $value->name }}</td>
                <td>{{ $value->age }}</td>
                <td>{{ $value->address }}</td>
                <td>{{ $value->phone }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection