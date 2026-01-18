<x-layout>
    <main class="container">
        <section class="row">
            <article class="col-12 text-center">
                <h1>I nostri Post</h1>
            </article>
            @foreach($posts as $post)
            <article class="col-12 col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$post->title}}</h5>
                        <p>Post creato da: {{$post->user->name}}</p>
                        <p>Mail dall'utente: {{$post->user->email}}</p>
                        <a href="{{route('post_show', compact('post'))}}" class="btn btn-info">Dettaglio</a>
                        
                        @if(Auth::id() == $post->user_id)
                        <form action="" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Elimina Post</button>
                        </form>
                        @endif
                        
                    </div>
                </div>
            </article>
            @endforeach
        </section>
    </main>
</x-layout>