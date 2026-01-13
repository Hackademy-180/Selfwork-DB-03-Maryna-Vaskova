<x-layout>
    <main class="container">
        <section class="row">
            <article class="col-12 text-center">
                <h1>Tutti articoli</h1>
            </article>
        </section>
        
        <section class="row">
            @foreach ($articles as $article)
            <article class="col-12 col-md-3">
                <x-article-card :article="$article" />
                </article>
            @endforeach
        </section>
            
    </main>
        
        
</x-layout>