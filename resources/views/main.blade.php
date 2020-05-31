<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="background">
    </div>
    <div class="wrapper">
        <div id="content">
            <div id="logo">
                <span></span>
            </div>
            <div id="contacts">
                <div class="line"></div>
                <div class="links">
                    <span><a href="{{ route('catalog') }}">Каталог</a> </span>
                    <span><a href="{{ route('contacts') }}">Контакти</a> </span>
                </div>
                <div class="line"></div>
            </div>
            <div class="caption">Прикраси ручної роботи з частинкою живої природи</div>
            <div id="photoes">


                <a href="{{ route('catalog') }}?s=1">
                    <div class="summer photo">
                        <div class="collection-photo"></div>
                        <span>Літня колекція</span>
                    </div>
                </a>
                <a href="{{ route('catalog') }}?s=2">
                <div class="fall photo">
                    <div class="collection-photo"></div>
                    <span>Осіння колекція</span>
                </div>
                </a>
                <a href="{{ route('catalog') }}?s=3">
                <div class="winter photo">
                    <div class="collection-photo"></div>
                    <span>Зимова колекція</span>
                </div>
                </a>
               
                

                
            </div>
            <div id="scroll"></div>
        </div>
    </div>
   
    
</body>
</html>