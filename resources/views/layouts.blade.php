<html>
    <head>
        <title>@yield('title')</title>
        <style>
            body { font-size:16pt; color:#999; margin:5px; text-align: center;}
            table { margin: 0 auto; text-align: center;}
            th { background-color: #999; color:#fff; padding:5px; }
            td { border: solid 1px #aaa; color:#999; padding:5px; }
            li { display:inline; }
            .content { margin:10px; border-top: solid 1px #ccc;}
            .footer { text-align: right; font-size: 10pt; margin:10px; border-bottom: solid 1px #ccc; color:#ccc; }
            .form-group{ text-align:center;}
            .form-control {width:200px;}
            #tanto {width:130px;}
        </style>
    </head>
    <body>
        <div class="form">
            @yield('form')
        </div>
        <div class="content">
            @yield('content')
        </div>
        <div class="footer">
            @yield('footer')
        </div>
    </body>
</html>