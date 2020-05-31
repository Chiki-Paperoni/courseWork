<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="{{asset('img/logo.png')}}">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:ital,wght@1,100&display=swap" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:ital,wght@0,300;1,100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/order.css')}}">
    <link rel="stylesheet" href="{{asset('css/bag.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
</head>

<body>

    <div class="wrapper">
        <div id="content">

        <div id="header">
            <div id="back-link"><div></div>Назад</div>
                <div class="type">Оформити замовлення</div>
                <div id="shopbag"></div>
            </div>

            <form action="{{url('order')}}" method="post" id="form">
            @csrf

                <input type="text" id="name" name="name" placeholder="Ім'я" required>
                <input type="text" id="surname" name="surname" placeholder="Прізвище">
                <input type="text" id="phone" name="phone" placeholder="Телефон" required>
                <input type="text" id="np" name="np" placeholder="Відділення нової пошти" required>
                <input type="email" id="email" name="email" placeholder="email" required>
                <input type="text" id="order-input" name="order" style="display:none;">
                <input type="submit" id="form-submit" value="Надіслати">

            </form>

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
        </div>
    
    </div>
        </div>

        <script src="{{asset('js/orderBag.js')}}"></script>
</body>
</html>