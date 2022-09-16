@extends('layouts.main')

@section('main-content')
<div class="row">
   <div class="col-12">
      <form action="{{ route('comics.store') }}" method="POST">
         @csrf
   
         <div class="mb-3">
            <label for="input-title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="input-title">
            @error('title')
               <div class="alert alert-danger">
                  {{ $message }}
               </div>
            @enderror
         </div>
         <div class="mb-3">
            <label for="input-description" class="form-label">Description</label>
            <textarea type="text" name="description" class="form-control" id="input-description"></textarea>
         </div>
         <div class="mb-3">
            <label for="input-thumb" class="form-label">Thumbnail</label>
            <input type="text" name="thumb" class="form-control" id="input-thumb">
            @error('thumb')
               <div class="alert alert-danger">
                  {{ $message }}
               </div>
            @enderror
         </div>
         <div class="mb-3">
            <label for="input-price" class="form-label">Price</label>
            <input type="text" name="price" class="form-control" id="input-price">
         </div>
         <div class="mb-3">
            <label for="input-series" class="form-label">Series</label>
            <input type="text" name="series" class="form-control" id="input-series">
         </div>
         <div class="mb-3">
            <label for="input-sale-date" class="form-label">Sale Date</label>
            <input type="date" name="sale_date" class="form-control" id="input-sale-date">
         </div>
         <div class="mb-3">
            <label for="input-type" class="form-label">Type</label>
            <input type="text" name="type" class="form-control" id="input-type">
         </div>
         <button type="submit" class="btn btn-primary">Add Comic</button>
      </form>
   </div>
</div>
@endsection