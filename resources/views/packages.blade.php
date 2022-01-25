@extends('layouts.main')

@section('content')

<main class="container">
  <h1>Packages</h1>
 
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#id</th>
        <th scope="col">city</th>
        <th scope="col">state</th>
        <th scope="col">price</th>
        <th scope="col">description</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($package as $packages )
        
        <tr>
          <th scope="row">{{$packages->id}}</th>
          <td>{{$packages->city}}</td>
          <td>{{$packages->state}}</td>
          <td>{{$packages->price}}</td>
          <td>{{$packages->description}}</td>
        </tr>
      @endforeach

    </tbody>
  </table>
</main>
  
@endsection