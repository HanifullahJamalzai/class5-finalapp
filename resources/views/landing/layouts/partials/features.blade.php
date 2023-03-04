
<div id="fh5co-features">
    <div class="container">
        <div class="row">
            @foreach ($features as $item)
            <div class="col-md-4 animate-box">
                <div class="feature-left">
                    <span class="icon">
                        <i class="icon-map"></i>
                    </span>
                    <div class="feature-copy">
                        <h3>{{ $item->title }}</h3>
                        <p>{{ $item->description }}</p>
                        <p><a href="#">Learn More</a></p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
