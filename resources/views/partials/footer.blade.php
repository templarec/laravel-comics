@if($route->uri != '/')
    <?php $root = '..'; ?>
@else
    <?php $root = ''; ?>
@endif
<div class="upper-footer">
    <div class="container">
        <ul>
            <li>
                <span>digital comics</span>
                <img src="{{$root}}/images/buy-comics-digital-comics.png" alt="buy logo">
            </li>
            <li>
                <span>shop dc</span>
                <img src="{{$root}}/images/buy-comics-merchandise.png" alt="shop locator logo">
            </li>
            <li>
                <span>comic shop locator</span>
                <img src="{{$root}}/images/buy-comics-shop-locator.png" alt="shop locator logo">
                </li>
            <li>
                <span>subscriptions</span>
                <img src="{{$root}}/images/buy-comics-subscriptions.png" alt="shop locator logo">
            </li>
        </ul>
    </div>
</div>
<div class="lower-footer">
    <div class="container">
        <div class="links">
            <ul>
                <li class="li-title">Dc Comics</li>
                <li><a href="">Characters</a></li>
                <li><a href="">Comics</a></li>
                <li><a href="">Movies</a></li>
                <li><a href="">TV</a></li>
                <li><a href="">Games</a></li>
                <li><a href="">Videos</a></li>
                <li><a href="">News</a></li>

                <li class="li-title">Shop</li>
                <li><a href="">Shop DC</a></li>
                <li><a href="">Shop DC Collection</a></li>
            </ul>
            <ul>
                <li class="li-title">DC</li>
                <li><a href="">Terms of Use</a></li>
                <li><a href="">Privacy policy (New)</a></li>
                <li><a href="">Ad Choices</a></li>
                <li><a href="">Advertising</a></li>
                <li><a href="">Jobs</a></li>
                <li><a href="">Subscriptions</a></li>
                <li><a href="">Talent Workshops</a></li>
                <li><a href="">CPSC Certificates</a></li>
                <li><a href="">Ratings</a></li>
                <li><a href="">Shop Help</a></li>
                <li><a href="">Contact Us</a></li>
            </ul>
            <ul>
                <li class="li-title">Sites</li>
                <li><a href="">DC</a></li>
                <li><a href="">MAD Magazine</a></li>
                <li><a href="">DC Kids</a></li>
                <li><a href="">DC Universe</a></li>
                <li><a href="">DC Power Visa</a></li>
            </ul>

        </div>
        <div class="disclaimer">
            <p>All Site Content TM and &copy; 2020 DC Entertainment, unless otherwise <a href="">noted here</a>. All rights reserved.</p>
            <p><a href="">Cookie Settings</a></p>
        </div>
        <img id="bg-logo" src="{{$root}}/images/dc-logo-bg.png" alt="bg logo">
    </div>
</div>
