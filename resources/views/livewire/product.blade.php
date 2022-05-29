<div>
    <div class="pl-list">
        <i class="fa-solid fa-quote-left"></i>
        <div style="display: flex; justify-content:space-around">
            <h4>{{$produit->description}}</h4>
            <button wire:click="addLike">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-1 w-1" fill="{{$produit->isLike() ? 'red' : 'white'}}" viewBox="0 0 24 24" stroke="red" style="height: auto; width: 40px">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                </svg>
            </button>
        </div>
        <a href="/annonce/{{$produit->id}}" class="" ><img src="{{$produit->images}}" alt=""></a>
        <div class="container-details-publication">
            <p class="localisation">{{ $produit->localisation}}</p>
            <p class="categorie">{{ $produit->categorie}}</p>
            <div class="date-creation">{{$produit->created_at->format('d/m/y')}}</div>
        </div>
    </div>
</div>
