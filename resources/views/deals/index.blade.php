<div class="row" style="display: inline-block">
    <div class="col m-3" >

    <div class="card myBg-index" style="width: 18rem; ">
        <img class="card-img-top" style="height:18rem" data-bs-toggle="modal" data-bs-target="#dealModal{{$deal->id}}" src="{{asset('uploads/deals_pics/'.$deal->first_image())}}">
        <div class="card-body">
            <h4 class="card-title myTitle-search align-middle" data-bs-toggle="modal" data-bs-target="#dealModal{{$deal->id}}">{{$deal->title}}</h4>
            <a class="merName" @isset($deal->merchant)href="{{route('merchants.deals', $merchant=$deal->merchant)}}" target="_blank" @endisset>
                <b class="card-text myDescription">{{$deal->merchant->name ?? "Deleted merchant"}}</b>
            </a>
            <div class="myDescription-slider">
            <p>{!!nl2br($deal->description)!!}</p>
            </div>
        </div>
        <div><b class="myPrice">${{$deal->price}}</b></div>

        <div class="mb-2 justify-content-center" style="white-space: nowrap;" >
            <a class=" me-5 AddToFavorite guest-modal " href="#" data-deal-id="{{$deal->id}}" style="color:#636b6f;  font-size:32px; display: inline-block" >
                <i class="bi bi-heart-fill myHeart-deal"></i>
                <p style="font-size:12px; margin: 0">Deal</p>
            </a>
            <a class=" AddMerToFavorite guest-modal " href="#" data-deal-id="{{$deal->id}}" style="color:#636b6f;  font-size:33px; display: inline-block" >
                <i class="bi bi-star-fill myHeart-deal"></i>
                <p style="font-size:12px">Merchant</p>
            </a>
        </div>

        <div class="pb-4">
        @include('components.showCategories')
        </div>
    </div>

    </div>
</div>
