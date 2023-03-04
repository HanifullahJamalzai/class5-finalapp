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
           {{-- <li style="background-image: url({{ asset('landing_assets/images/img_bg_2.jpg') }});">
               <div class="container-fluid">
                   <div class="row">
                       <div class="col-md-4 col-md-offset-4 col-md-pull-4 js-fullheight slider-text">
                           <div class="slider-text-inner">
                               <div class="desc">
                                   <span class="status">Rent</span>
                                   <h1>New House in Canada, UK</h1>
                                    <h2 class="price">$2000/mos</h2>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="details">
                                        <span>2000 ft sq</span>
                                        <span>4 Bedrooms</span>
                                        <span>3 Bathrooms</span>
                                        <span>2 Garage</span>
                                    </p>
                                    <p><a class="btn btn-primary btn-lg" href="#">Learn More</a></p>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </li>
           <li style="background-image: url({{ asset('landing_assets/images/img_bg_3.jpg') }});">
               <div class="container-fluid">
                   <div class="row">
                       <div class="col-md-4 col-md-offset-4 col-md-pull-4 js-fullheight slider-text">
                           <div class="slider-text-inner">
                               <div class="desc">
                                   <span class="status">Sale</span>
                                   <h1>New House in Canada, UK</h1>
                                    <h2 class="price">$4,000.00</h2>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="details">
                                        <span>2000 ft sq</span>
                                        <span>4 Bedrooms</span>
                                        <span>3 Bathrooms</span>
                                        <span>2 Garage</span>
                                    </p>
                                    <p><a class="btn btn-primary btn-lg" href="#">Learn More</a></p>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </li>		   	 --}}
          </ul>
      </div>
</aside>
