<x-layout>
    <h1>I nostri Prodotti</h1>
    <main class="container">
        <section class="row">
            @foreach ($products as $product)
            <article class="col-12 col-md-3">
                <div class="card">
                    <div class="card-body">
                        <p class="lead fw-bold">{{$product->title}}</p>
                        <p class="lead">{{$product->description}}</p>
                        <p class="lead">{{$product->price}}€</p>
                    </div>
                </div>
            </article> 
            @endforeach
        </section>
    </main>
</x-layout>