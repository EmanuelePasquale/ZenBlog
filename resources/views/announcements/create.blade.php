<x-layout>

    <h1 class="text-center">Crea Articolo</h1>
    <main>

        <article class="artcontenitore">

            <div class="container py-4">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li> {{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="mb-3">
                        <label class="form-label">Titolo</label>
                        <input class="form-control" value="{{ old('title') }}" name="title" type="text"
                            placeholder="Titolo" />
                        @error('title')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>

                    <!--  -->
                    <div class="mb-3">
                        <label class="form-label">Sottotitolo</label>
                        <input class="form-control" value="{{ old('subtitle') }}" name="subtitle" type="text"
                            placeholder="SottoTitolo" />
                        @error('subtitle')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Testo</label>
                        <textarea class="form-control" value="{{ old('body') }}" name="body" type="text" rows="3"
                            placeholder="Corpo del testo"></textarea>
                        @error('body')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="category">{{__('ui.category')}}</label>
                        <select type="text" class="form-control" name="category">
                            <option value="">--{{__('ui.category')}}</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>



                    <div class="mb-3">
                        <label class="form-label">Copertina</label>
                        <input class="form-control" value="{{ old('image') }}" name="image" type="file"
                            placeholder="Immagini" />
                        @error('image')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>

                    {{-- <div class="mb-3 form-control">
                        <select name="author_id">

                            @foreach ($authors as $author)
                                <option value="{{ $author->id }}">{{ $author->name . ' ' . $author->surname }}
                                </option>
                            @endforeach

                        </select>
                    </div> --}}

                    <div class="d-grid">
                        <button class="btn btn-primary btn-lg" type="submit">Salva</button>
                    </div>
                    <hr>
                    <a href="{{ route('articles.index') }}">Torna Indietro</a>
                </form>

            </div>
        </article>
    </main>
</x-layout>
