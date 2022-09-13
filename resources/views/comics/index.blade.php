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
      @forelse ($comics as $comic)
         <tr>
            <td>
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
            @empty
            <h2>Sorrry! No comics here...</h2>
         </tr>
      @endforelse
   </table>
@endsection