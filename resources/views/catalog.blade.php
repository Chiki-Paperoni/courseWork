<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="{{asset('img/logo.png')}}">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/catalog.css')}}">
    <link rel="stylesheet" href="{{asset('css/bag.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalog</title>
</head>

<body>
   
<div class="wrapper">

        <div id="content">
            <div id="header">
                <span id="logo"></span>
                <div><a href="{{ route('main') }}">Головна</a> </div>
                <div><a href="{{ route('contacts') }}">Контакти</a> </div>
                <div id="shopbag"></div>
            </div>
            <div id="contacts">
                <div class="line"></div>
                <div class="links">
                    <span id="categories-dropp">Тип
                        <div class="dropdown" id="cat-dropdown">
                            <a href="{{ route('catalog') }}?c=1"><div class="drop-item">Сережки</div></a> 
                            <a href="{{ route('catalog') }}?c=2"><div class="drop-item">Підвіски</div></a> 
                            <a href="{{ route('catalog') }}?c=3"><div class="drop-item">Каблучки</div></a> 
                        </div>
                    </span>
                    <span id="seasons-dropp">Колекції
                    <div class="dropdown" id="seas-dropdown">
                            <a href="{{ route('catalog') }}?s=1"><div class="drop-item">Літня колекція</div></a> 
                            <a href="{{ route('catalog') }}?s=2"><div class="drop-item">Осіння колекція</div></a> 
                            <a href="{{ route('catalog') }}?s=3"><div class="drop-item">Зимова колекція</div></a> 
                        </div>
                    </span>
                </div>
                <div class="line"></div>
            </div>

            <div class="photoes">
                @foreach($items as $item)
                <a href="{{ route('item') }}?id={{$item->id}}"><div class="photo">
                    <img src='../public/img/{{$item->img}}' alt="">
                    <span class="title">{{$item->category_name}}</span>
                    <span class="type">{{$item->season_name}}</span>
                    <span class="cost">$ {{$item->price??"unset"}}</span>
                </div></a>
                
                @endforeach
            </div>
            <div class="paginator">{{$items->withQueryString()->links()}}</div>
            
            
            <div id="scroll"></div>
        </div>


        <div class="" id="shopbag-wrapper">
        
        <div id="content">

            <div class="bag-header">
                <div id="bag-back-link"><div></div>До товару</div>
                <div class="title">
                    <span>Кошик</span>
                    <span>Сума: $ <span id="totalcost"><span></span>
                </div>
            </div>

            <div class="scrollbar style-15">
                <div class="items">
                    <div id="pointer"></div>
                </div>
            </div>

            <a href="{{ route('SubmitOrder') }}"><div id="bag-add-btn">Oформити</div></a>
        </div>
    
    </div>
    </div>
    <script src="{{asset('js/catalogBag.js')}}"></script>
</body>
</html>