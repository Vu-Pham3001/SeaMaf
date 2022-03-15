<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-m-6 col-6 mb-5">
    <div class="pro-filter-item" style="position:relative; height: 200px;">
        <a href="{{ route('pro-detail', [$product->id])}}">
            <img class="img-product123" src="{{asset('images/'.$product->img)}}" alt="{{$product->name}}" style="width:100%; height:100%;">
        </a>
        <div class="pi-pic border">
            <div class="text-pro-filter d-flex justify-content-center align-items-center">{{ $product->sale }}</div>
            <div class="icon-pro-filter d-flex flex-column">
                <span>
                    <i class="far fa-heart heart-pro-filter"></i>
                </span>
                <span>
                    <i class="fas fa-shopping-bag mt-3 mb-3 bag-pro-filter"></i>
                </span>
            </div>
        </div>
        <div class="d-flex" style="position:relative">
            <span class="pro-name" style="width: 70%;">{{ $product->name }}</span>
            <div class="price" style="position: absolute; right: 0;">$ {{ $product->price }}</div>
        </div>
    </div>
</div>