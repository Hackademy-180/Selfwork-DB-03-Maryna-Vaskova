<x-layout>
    <main class="container">
        <section class="row justify-content-center">
            <article class="col-12 text-center">
                <h1>Crea il tuo Giornale</h1>
            </article>
            <article class="col-12 col-md-8">
                <form method="POST" action="{{route('magazine_store')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome Giornale</label>
                        <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo Articolo</label>
                        <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Titolo Articolo</label>
                        <textarea name="content" class="form-control" id="content" cols="30" rows="10"></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </article>
        </section>
    </main>
</x-layout>