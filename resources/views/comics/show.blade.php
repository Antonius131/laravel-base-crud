@extends('layouts.main')

@section('main-content')
<div class="container">
   <div class="row">
      <div class="col-4 offset-4">
         <ul class="list-group text-center ">
            <li class="list-group-item">
               <div class="py-4">
                  <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
               </div>
            </li>
            <li class="list-group-item">
               <h5>{{ $comic->title }}</h5>
            </li>
            <li class="list-group-item">
               {{ $comic->series }}
            </li>
            <li class="list-group-item">
               {{ $comic->type }}
            </li>
            <li class="list-group-item">
               {{ $comic->price }}€
            </li>
         </ul>
      </div>
   </div>
</div>
@endsection