<x-layout>
    <main class="container">
        <section class="row">
            <article class="col-12 text-center">
                <h1>I nostri Giornali ed i rispettivi articoli</h1>
            </article>
            @foreach($magazines as $magazine)
            <article class="col-12 col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$magazine->title}}</h5>
                        
                        <a href="{{route('magazine_show', compact('magazine'))}}" class="btn btn-info">Visualizza Dettaglio</a>
                        <form method="POST" action="{{route('magazine_destroy', compact('magazine'))}}">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Elimina Giornale</button>

                        </form>
                    </div>
                </div>
            </article>
            @endforeach
        </section>
    </main>
</x-layout>