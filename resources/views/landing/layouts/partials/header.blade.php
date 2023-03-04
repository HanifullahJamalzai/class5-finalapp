
<header id="fh5co-header-section" class="sticky-banner">
    <div class="container">
        <div class="nav-header">
            <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
            <h1 id="fh5co-logo"><a href="{{ route('index') }}"><i class="icon-home"></i>Home<span>state</span></a></h1>
            <!-- START #fh5co-menu-wrap -->
            <nav id="fh5co-menu-wrap" role="navigation">
                <ul class="sf-menu" id="fh5co-primary-menu">
                    <li class="active"><a href="{{ route('index') }}">@lang('navigation.home')</a></li>
                    <li>
                        <a href="properties.html" class="fh5co-sub-ddown">@lang('navigation.categories')</a>
                        <ul class="fh5co-sub-menu">
                            <li><a href="#">Family</a></li>
                            <li><a href="#">CSS3 &amp; HTML5</a></li>
                        </ul>
                    </li>
                    <li><a href="agent.html">@lang('navigation.agents')</a></li>
                    <li><a href="blog.html">@lang('navigation.properties')</a></li>
                    <li><a href="contact.html">@lang('navigation.contact')</a></li>
                    
                    <li><a href="{{ route('language', ['language' => 'pa']) }}" >PA</a></li>
                    <li><a href="{{ route('language', ['language' => 'en']) }}" >EN</a></li>
                    <li><a href="{{ route('language', ['language' => 'da']) }}" >DA</a></li>
                    
                </ul>
            </nav>
        </div>
    </div>
</header>
