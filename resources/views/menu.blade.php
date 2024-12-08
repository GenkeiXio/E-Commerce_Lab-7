@extends('Components.Layout')

@section('title', 'Menu')

@section('content')
    <main class="content-main">
        <section class="menu">
            <div class="menu-box">
                <div class="bfast">Breakfast</div>
                <div class="menu-a">
                    @foreach($menuItems as $item)
                        <div class="a-box">
                            <img src="{{ asset($item['image']) }}" alt="">
                            <h3>{{ $item['name'] }}</h3>
                            <div class="price">{{ $item['price'] }}</div>
                            <div class="stars">
                                @for($i = 0; $i < 5; $i++)
                                    @if($i < $item['rating'])
                                        <i class="fa-solid fa-star"></i>
                                    @else
                                        <i class="fa-regular fa-star"></i>
                                    @endif
                                @endfor
                            </div>
                            <a href="#" class="check-btn">Buy</a>
                        </div>
                    @endforeach
                </div>
                <div class="bfast">Lunch/Dinner with free soup of the day</div>
                <div class="bfast">Steamed rice with buttered vegetebles to go in:</div>
                <div class="menu-a">
                    @foreach($menuItems as $item)
                        <div class="a-box">
                            <img src="{{ asset($item['image']) }}" alt="">
                            <h3>{{ $item['name'] }}</h3>
                            <div class="price">{{ $item['price'] }}</div>
                            <div class="stars">
                                @for($i = 0; $i < 5; $i++)
                                    @if($i < $item['rating'])
                                        <i class="fa-solid fa-star"></i>
                                    @else
                                        <i class="fa-regular fa-star"></i>
                                    @endif
                                @endfor
                            </div>
                            <a href="#" class="check-btn">Buy</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection
