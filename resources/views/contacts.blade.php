<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/contacts.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>

<body>
   
<div class="wrapper">
        <div id="content">
            <div id="header">
                <span id="logo"></span>
                <div><a href="{{ route('main') }}">Головна</a> </div>
                <div><a href="{{ route('catalog') }}">Каталог</a> </div>
            </div>
        
        <div id="contacts">
            <div class="creds">
                <span class="caption">Контакти</span>
                <span class="phone">+380723456789</span>
                <span class="email">blablabla@ukr.telekom</span>
                <span class="insta">@boooooooring</span>
            </div>
            <form action="{{url('letter')}}" method="post" id="form">
            @csrf
                <div class="caption">Написати листа</div>
                <input type="text" id="name" name="name" placeholder="Ім'я">
                <input type="email" id="email" name="email" placeholder="Email" required>
                <textarea type="text" id="text" name="text" placeholder="Текст" required></textarea>
                <input type="submit" id="form-submit" value="Надіслати">

            </form>

        </div>


            
            <div id="scroll"></div>
        </div>
    </div>
    
</body>
</html>