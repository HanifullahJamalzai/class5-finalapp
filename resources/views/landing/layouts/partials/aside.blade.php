<aside id="fh5co-hero" class="js-fullheight">
    <div class="flexslider js-fullheight">
        <ul class="slides">
            @foreach ($sliders as $item)
                <li style="background-image: url({{ $item->photo }});">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4 col-md-pull-4 js-fullheight slider-text">
                                <div class="slider-text-inner">
                                    <div class="desc">
                                        <span class="status">{{ $item->category }}</span>
                                        <h1>{{ $item->address }} Address</h1>
                                        <h2 class="price">${{ $item->price }} Price</h2>
                                        <p>{!! Str::limit($item->description, 10, '...')  !!}</p>
                                        <p class="details">
                                            <span>{{ $item->beswa }} Beswa</span>
                                            <span>{{ $item->propertyIndoor->rooms }} Bedrooms</span>
                                            <span>{{ $item->propertyIndoor->bathroom }} Bathrooms</span>
                                            <span>{{ $item->propertyIndoor->kitchen }} Kitchen</span>
                                        </p>
                                        <p><a class="btn btn-primary btn-lg" href="{{ route('property', ['property' => Str::slug($item->title, '-'), 'id' => $item->id]) }}">Learn More</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
           
          </ul>
      </div>
</aside>
