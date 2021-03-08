<div id="carouselIndicators" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
        <li data-bs-target="#carouselIndicators" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#carouselIndicators" data-bs-slide-to="1"></li>
        <li data-bs-target="#carouselIndicators" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        @foreach($carousels as $carousel)
            <div class="carousel-item {{ ($carousel->order == 1) ? 'active' : '' }}">
                <div class="divImgText">
                    <div class="carousel-img-wrapper">
                    <img  src="{{ asset($carousel->image_url) }}"  alt="...">
                    </div>
                    <div class="divText d-block">
                        <h3 class="text-left">{{$carousel->job_title}}</h3>
                        {!!$carousel->description1!!}
                        </ul>
                        <div class="mt-3 text-right">
                            <a class="rounded-full btn applyBtn" href="#apply" role="button">Postúlate</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
  
