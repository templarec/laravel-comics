<main class="detail">
    <div class="blue-bar">
        <div class="floating-poster">
            <img src="{{$comic['thumb']}}" alt="comic poster">
        </div>
    </div>
    <div class="container">
        <div class="card-detail">
            <div class="left">
                <div class="detail-title">
                    <h1>{{$comic['title']}}</h1>
                </div>
                <div class="bar">
                    <div><span>U.S Price: </span>{{$comic['price']}}</div>
                    <div><span>AVAILABLE</span></div>
                    <div>Check Availability</div>
                </div>
                <div class="description">
                    <p>{{$comic['description']}}</p>
                </div>
            </div>
            <div class="right">
                <h3>ADVERTISMENT</h3>
                <img src="/images/adv.jpg" alt="ad">
            </div>
        </div>
    </div>
    <div class="comic-info">
        <div class="container">
            <div class="talent">
                <h3>Talent</h3>
                <div class="art">
                    <span>Art by:</span>
                    <ul>
                        @foreach($comic['artists'] as $artista)
                        <li><a href="#">{{$artista}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="written">
                    <span>Written by:</span>
                    <ul>
                        @foreach($comic['writers'] as $scrittore)
                            <li><a href="#">{{$scrittore}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="specs">
                <h3>Specs</h3>
                <div class="series">
                    <span>Series: </span>
                    <span>
                        <a href="#">{{$comic['series']}}</a>{{$comic['series']}}
                    </span>
                </div>
                <div class="price">
                    <span>U.S. Price: </span>
                    <span>{{$comic['price']}}</span>
                </div>
                <div class="sale-date">
                    <span>On Sale Date: </span>
                    <span>{{$comic['sale_date']}}</span>
                </div>
            </div>
        </div>
    </div>
</main>
