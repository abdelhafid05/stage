@extends('layouts.app')
@section('start')
<style>
  .btn {
      padding: 5px 10px; /* Adjust padding to change button height */
      font-size: 14px; /* Adjust font size if needed */
      height: 35px;
      }
</style>

@foreach($articles as $article)
<div class="col-sm-6 col-md-4 col-lg-3">
    <div class="box">
      <a href="">
        <div class="img-box">
          @if($article->photo == null)
            <img src="{{ asset("images\Empty state concept.jpeg") }}" class="card-img-top" alt="product Photo" style="width: 200px; height: 250px;">
          @else
            <img src="{{ asset($article->photo) }}" class="card-img-top" alt="product Photo" style="width: 200px; height: 200px;">
          @endif
        </div>
        <div class="detail-box">
          <h6>{{ $article->designation }}</h6>
          <h6>
            Price
            <span>
              {{ $article->prix }}DH
            </span>
          </h6>
        </div> 
        
        <div class="new">
          <span>New</span>
        </div>
    
      </a>
    </div>
    
  </div>
@endforeach <br><br>
{{ $articles->links() }}
@endsection

