<?php
$idc = $_GET['id'];
$currentComic = $film[$idc];
?>
<main class="detail">
    <div class="blue-bar">
        <div class="floating-poster">
            <img src="{{$currentComic['thumb']}}" alt="comic poster">
        </div>
    </div>
    <div class="container">


        <div class="card-detail">
            <div class="left">
                <div class="detail-title">
                    <h1>{{$currentComic['title']}}</h1>
                </div>
                <div class="bar">
                    <div><span>U.S Price: </span>{{$currentComic['price']}}</div>
                    <div><span>AVAILABLE</span></div>
                    <div>Check Availability</div>
                </div>
                <div class="description">
                    <p>{{$currentComic['description']}}</p>
                </div>
            </div>
            <div class="right">
                <h3>ADVERTISMENT</h3>
                <img src="/images/adv.jpg" alt="ad">
            </div>
        </div>
    </div>

</main>
