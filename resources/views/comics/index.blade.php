@extends('layouts.main')

@section('main-content')
   <table class="table table-hover">
      <thead>
         <tr>
            <th scope="col">Id</th>
            <th scope="col">Title</th>
            <th scope="col">Series</th>
            <th scope="col">Type</th>
            <th scope="col">Price</th>
            <th></th>
            <th></th>
         </tr>
      </thead>
      <tbody>
         @forelse ($comics as $comic)
            <tr>
               <td scope="row">
                  {{ $comic->id }}
               </td>
               <td>
                  <a href="{{ route('comics.show', $comic->id) }}">
                     {{ $comic->title }}
                  </a>
               </td>
               <td>
                  {{ $comic->series }}
               </td>
               <td>
                  {{ $comic->type }}
               </td>
               <td>
                  {{ $comic->price }}
               </td>
               <td>
                  <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-success">Edit</a>
               </td>
               <td>
                  <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                     @csrf
                     @method('DELETE')
   
                     <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
               </td>
               @empty
               <h2>Sorrry! No comics here...</h2>
            </tr>
         @endforelse
      </tbody>
   </table>
@endsection