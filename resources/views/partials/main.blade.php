<main>
    <div class="container">
        @foreach($film as $id => $card)
            <div class="card">

                <div class="cover">
                    <a href="/comic-detail?id={{$id}}"><img src="{{$card['thumb']}}" alt="image cover"></a>

                </div>
                <div class="card-title">
                    <span>{{$card['title']}}</span>
                </div>


            </div>
        @endforeach
    </div>

</main>
