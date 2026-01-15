<x-layout>
    <main class="container">
        <section class="row justify-content-center">
            <article class="col-12 text-center">
                <h1>Crea il tuo Giornale</h1>
            </article>
            <article class="col-12 col-md-8">
                <form method="POST" action="{{route('magazine_update', compact('magazine'))}}">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="name" class="form-label">Nuovo Nome Giornale</label>
                        <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name" value="{{$magazine->name}}">
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Nuovo Titolo Articolo</label>
                        <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title" value="{{$magazine->title}}">
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Nuovo Contenuto Articolo</label>
                        <textarea name="content" class="form-control" id="content" cols="30" rows="10">{{$magazine->content}}</textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </article>
        </section>
    </main>
</x-layout>