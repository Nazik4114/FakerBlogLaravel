@extends('master')
@section('title')All Posts @endsection 
@section('content')
<div class="container">
  <?php
  if(strlen($search)!=0){
    echo "<h2>Searching by: {$search}</h2><br>";
  }
  ?>
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
  @foreach($posts as $post)
        <div class="col">
          <div class="card shadow-sm ">
		 	<img alt="" src="{{$post->image_url}}" height="560">
            <div class="card-body" style="height: 210px;">
              <h3 class="card-text">{{$post->title}}</h3>
              <p class="card-text"></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="/onePost/{{$post->id}}" class="btn btn-sm btn-outline-secondary">View</a>
                </div>
                <small class="text-muted">{{$post->created_at}}</small>
              
              </div>
            </div>
          </div>
        </div>           
      @endforeach
      </div>

</div>
<br>
<div class="paginator">
{{$posts->links()}}
</div>
      @endsection