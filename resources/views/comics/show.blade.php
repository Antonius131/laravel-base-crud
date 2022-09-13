@extends('layouts.main')

@section('main-content')
   <ul>
      <li>
         {{ $comic->title }}
      </li>
      <li>
         {{ $comic->series }}
      </li>
      <li>
         {{ $comic->type }}
      </li>
      <li>
         {{ $comic->price }}
      </li>
   </ul>
@endsection