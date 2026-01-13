<form method="POST" action="{{route('article_submit')}}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" name="title" class="form-control" id="title" aria-describedby="titlelHelp">
    </div>
    
    <div class="mb-3">
        <label for="content" class="form-label">Contenuto</label>
        <textarea name="description" id="content" class="form-control" cols="30" rows="10"></textarea>
    </div>
    
    {{-- input per img --}}
    <div class="mb-3">
        <label for="img" class="form-label">Immagine</label>
        <input type="file" name="img" class="form-control" id="img" aria-describedby="imglHelp">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>