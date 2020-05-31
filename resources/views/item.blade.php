<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="{{asset('img/logo.png')}}">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:ital,wght@1,100&display=swap" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:ital,wght@0,300;1,100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/item.css')}}">
    <link rel="stylesheet" href="{{asset('css/bag.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
</head>

<body>

    <div class="wrapper">
        <div id="content">

            <div class="header">
                <div id="back-link"><div></div>Назад</div>
                <div class="type">
                    <div class="caption">{{$item->category_name}}</div>
                    <div id="collection">{{$item->season_name}}</div>
                    <div id="price">$ {{$item->price}}</div>
                    <div id="add-btn">У кошик</div>
                </div>
                <div class="bagwrapp"><div id="shopbag"></div></div>
            </div>

            <div class="info">
                <!-- <img src="../public/img/12.png" alt="" srcset="">
                <div class="description">
                    <p id="size" style="margin-top:0;"><strong>Розмір кулона:</strong>25x17mm</p>
                    <p id="furniture"><strong>Фурнітура:</strong> медична (гіпоалергенна) сталь, срібло або сріблення.</p>
                    <p id="using"><strong>Про застосуванні і зберіганні прикрас</strong></p>
                    <p id="text">Щоб прикраси збереглися якомога довше, дотримуйте інструкції:
Зберігайте прикраси в сухому і темному місці
Знімайте прикраси перед сном
Зберігайте прикраси окремо від прикрас з металевими елементами
Знімайте прикраси перед відвідуванням душа / ванни
Для того, щоб прикраси зберігали яскравість довгий час, протирайте їх мікрофіброю</p>
                </div> -->
                <img src="../public/img/{{$item->img}}" alt="" srcset="">
                <div class="description">
                    <p id="itemID" style="display:none;">{{$item->id}}</p>
                    <p id="size" style="margin-top:0;"><strong>Розмір кулона:</strong>{{$item->size}}</p>
                    <p id="furniture"><strong>Фурнітура:</strong> {{$item->furniture}}.</p>
                    <p id="using"><strong>Про застосуванні і зберіганні прикрас</strong></p>
                    <p id="text">Щоб прикраси збереглися якомога довше, дотримуйте інструкції:{{$item->howtouse}}</p>
                </div>
            </div>
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
    
   
    <script src="{{asset('js/bag.js')}}"></script>
</body>
</html>