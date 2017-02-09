<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>书里的生活</title>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway';
                font-weight: 100;
                height: 100vh;
                margin: 0;
                background-image: url("images/wbj.jpg");
                background-size:100% 100%;
                background-repeat:no-repeat;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            div.transbox
            {
                width: 500px;
                height: 800px;
                margin: 30px 50px;
                background-color: #ffffff;
                border: 1px solid black;
                opacity:0.6;
                filter:alpha(opacity=60); /* For IE8 and earlier */
            }
            div.transbox span
            {
                margin: 30px 40px;
                font-weight: bold;
                color: #000000;
                font-size:2.2em;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{ url('/login') }}">登录</a>
                    <a href="{{ url('/register') }}">注册</a>
                </div>
            @endif

            <div class="content">
                <div class="transbox">
                    <span>
                        <p>冬有冬的来意,寒冷像花，</p>
                        <p>花有花香，冬有回忆一把。</p>
                        <p>一条枯枝影，青烟色的瘦细，</p>
                        <p>在午后的窗前拖过一笔画；</p>
                        <p>寒里日光淡了，渐斜……</p>
                        <p>就是那样地</p>
                        <p>像待客人说话</p>
                        <p>我在静沉中默啜着茶。</p>
                    </span>
                </div>
            </div>
        </div>
    </body>
</html>
