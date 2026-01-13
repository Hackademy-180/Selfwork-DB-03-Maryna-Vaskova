<x-layout>
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
    <main class="container">
        <section class="row">
            <article class="col-12 text-center">
                <h1>Crea il tuo articolo</h1>
            </article>
        </section>
        <section class="row justify-content-center">
            <article class="col-12 col-md-8">
                <x-articleForm />
            </article>
        </section>
    </main>
</x-layout>