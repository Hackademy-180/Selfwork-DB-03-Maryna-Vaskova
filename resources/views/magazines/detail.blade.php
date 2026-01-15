<x-layout>
    <main class="container">
        <section class="row">
            <article class="col-12 text-center">
                <h1>Dettagli del Giornale</h1>
            </article>
            <article class="col-12 mt-3">
                <p class="lead">
                    <strong>Giornale:</strong> {{$magazine->name}}
                </p>
                <p class="lead">
                    <strong>Titolo Articolo:</strong> {{$magazine->title}}
                </p>
                <p class="lead">
                    <strong>Contenuto Articolo:</strong> {{$magazine->content}}
                </p>

                <a href="{{route('magazine_edit', compact('magazine'))}}" class="btn btn-primary">Modifica Articolo</a>
                <a href="{{route('magazines_index')}}" class="btn btn-primary">Torna a tutti i giornali</a>
            </article>
        </section>
    </main>
</x-layout>