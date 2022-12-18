<div class="col-12 col-md-4 mb-4">
    <div class="card h-100">
        <a href="shop-single.html">
            <img src="./assets/img/{{$featured->thumbnail}}" class="card-img-top" alt="...">
        </a>
        <div class="card-body">
            <ul class="list-unstyled d-flex justify-content-between">
                <li>

                    @for($i = 1; $i <= $featured->stars; $i++)

                        <i class="text-warning fa fa-star"></i>
                        {{-- <i class="text-muted fa fa-star"></i> --}}

                    @endfor

                </li>
                <li class="text-muted text-right">${{$featured->price}}</li>
            </ul>
            <a href="shop-single.html"
               class="h2 text-decoration-none text-dark">{{$featured->title}}</a>
            <p class="card-text">{!! $featured->preview !!}
            </p>
            <p class="text-muted">Reviews ({{$featured->reviews}})</p>
        </div>
    </div>
</div>
