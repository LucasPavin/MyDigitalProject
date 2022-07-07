<div>
    <div class="pl-list">
        <div class="partie-photo">
            <a href="/annonce/{{$produit->id}}" class="" ><img src="{{$produit->images}}" class="photo-consulter-annonce"></a>
        </div>
       <div class="partie-description">
            <h4>{{$produit->product_name}}</h4>
            <i class="fa-solid fa-quote-left"></i>
            <div class="container-product-description">
                <p class="description-text">Description</p>
                <p class="description-annonce">{{Str::limit($produit->description, 110)}}</p>
            </div>
            <hr>
            <p class="class-budget">Budget</p>
            <p class="class-somme-budget">≈ {{$produit->product_prix}} €</p>
            <hr>
            <div class="details-annonce">
                <div class="details-creation">
                    <div class="date-creation"><span><i class="fa-solid fa-calendar"></i></span>{{$produit->created_at->format('d/m/y')}}</div>
                </div>
                <div class="details-creation">
                    <div class="date-creation"><span><i class="fa-solid fa-tag"></i></span>{{ $produit->categorie}}</div>
                </div>
                <div class="details-creation">
                    <div class="date-creation"><span><i class="fa-solid fa-location-dot"></i></span>{{ $produit->localisation}}</div>
                </div>
            </div>
            <div class="container-bleu">
                <div class="info-savoir-plus-like">
                    <a href="/annonce/{{$produit->id}}"><button class="bouton savoir-plus">En savoir plus</button></a>
                    <div class="container-addLike">
                        <button wire:click="addLike">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-1 w-1" fill="{{$produit->isLike() ? 'white' : '#FB5C2D'}}" viewBox="0 0 24 24" stroke="white" style="height: auto; width: 40px">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
       </div>
    </div>
    
</div>
