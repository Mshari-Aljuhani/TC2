<div class="mySlider-main col-m-4 content">
        <h4 class="myTitle" data-bs-toggle="modal" data-bs-target="#dealModal{{$deal->id}}">{{$deal->title}}</h4>
        <div class="mySlider-main-img-container">
            <img class="mySlider-main-img " data-bs-toggle="modal" data-bs-target="#dealModal{{$deal->id}}" src="{{asset('uploads/deals_pics/'.$deal->first_image())}}" loading="lazy">
        </div>
    <a class="merName" @isset($deal->merchant) href="{{route('merchants.deals', $merchant=$deal->merchant)}}" target="_blank" @endisset>
        <b>{{$deal->merchant->name ?? "Deleted merchant"}}</b>
    </a>
        <div class="myDescription-slider">
           <p style="word-wrap: break-word;">{!!nl2br($deal->description)!!}</p>
        </div>
    <div class="mt-2"><b class="myPrice">${{$deal->price}}</b></div>

    <div class="mb-5 justify-content-center" style="white-space: nowrap;" >
            <a class=" me-5 AddToFavorite guest-modal " href="#" data-deal-id="{{$deal->id}}" style="color:#636b6f;  font-size:32px; display: inline-block" >
            <i class="bi bi-heart-fill myHeart-deal"></i>
                <p style="font-size:12px; margin: 0">Deal</p>
            </a>
        @isset($deal->merchant)
        <a class=" AddMerToFavorite guest-modal " href="#" data-merchant-id="{{$deal->merchant->id}}" style="color:#636b6f;  font-size:33px; display: inline-block" >
            <i class="bi bi-star-fill myHeart-deal"></i>
            <p style="font-size:12px">Merchant</p>
        </a>
            @endisset
    </div>
</div>



