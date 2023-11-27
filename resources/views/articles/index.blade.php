<x-layout>
    <div class="intro-excerpt text-center mt-5">
        <h2>Tutti gli articoli</h2>
        <p>Qui puoi visualizzare ogni articolo pubblicato</p>
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
