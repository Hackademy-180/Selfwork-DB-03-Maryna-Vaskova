<div class="card">
  <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$article->title}}</h5>
    <p class="card-text">{{$article->description}}</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>