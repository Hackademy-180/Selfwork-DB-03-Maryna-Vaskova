<x-layout>
    <main class="container">
        <section class="row justify-content-center">
            <article class="col-12 text-center">
                <h1>Detagli post {{$post->title}}</h1>
                <p>Contenuto: {{$post->content}}</p>
                <p>Creato il: {{$post->created_at->format('d/m/Y')}}</p>
                
                @if(Auth::id() == $post->user_id)
                <a href="{{route('post_edit', compact('post'))}}" class="btn btn-warning">Modifica</a>
                @endif
                
            </article>
        </section>
    </main>
</x-layout>