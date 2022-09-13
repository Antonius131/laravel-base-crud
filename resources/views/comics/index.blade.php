@extends('layouts.main')

@section('main-content')
   <table>
      <tr>
         <th>Id</th>
         <th>Title</th>
         <th>Series</th>
         <th>Type</th>
         <th>Price</th>
      </tr>
      <tr>
         @forelse ($comics as $comic)
            <td>{{ $comic->id }}</td>
            <td>{{ $comic->title }}</td>
            <td>{{ $comic->series }}</td>
            <td>{{ $comic->type }}</td>
            <td>{{ $comic->price }}</td>
         @empty
             <h2>Sorrry! No comics here...</h2>
         @endforelse
      </tr>
   </table>
@endsection