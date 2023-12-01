<x-layout>
    <div class="intro-excerpt text-center mt-5">
        <h2>Tutti gli articoli</h2>
        <p>Qui puoi visualizzare ogni articolo pubblicato</p>
    </div>
    <div class="container">
        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
         
            @foreach ($articles as $article)
            <div class="col">
                <div class="lc-block card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" lc-helper="background" style="background:url('{{Storage::url($article->image)}}')  center / cover no-repeat;">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                        <div class="lc-block pt-5 mt-5 mb-4">
                            <div editable="rich">
                              <h2 class="display-6 lh-1 fw-bold">{{$article->title}}</h2>
                              <p>{{$article->subtitle}}</p>
                              <p>{{substr($article->body, 0, 20)}}</p>
                              <a href="{{route('articles.index') }}" class=card-text> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
            @endforeach
        </div>
    </div>

    <div class="product-section">
        <div class="container">
            <div class="row">
                @forelse ($articles as $article)

                @empty
                <div class="text-center mt-5">
                    <h3>OPSSS al momento non sono presenti articoli</h3>
                    <div><a href="{{ route('announcements.create') }}" class="btn btn-warning btn-sm">{{__('custom.cat.show3')}}</a></div>
                </div>
                @endforelse
               
                </div>
            </div>
        </div>
    </div>
</x-layout>
