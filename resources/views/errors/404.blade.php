<!DOCTYPE html>
<html>
<head>
    <title>Oooops...</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            color: #B0BEC5;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }
        .logo img {
            max-height: 200px;
        }
        .title {
            font-size: 24px;
        }
        .heading {
            font-size: 72px;
            margin-bottom: 40px;
        }
    </style>
    <script>
        function backAway(){
            //if it was the first page
            if(history.length === 1){
                window.location = "http://mlsgroup.com.ua/"
            } else {
                history.back();
            }
        }
    </script>
</head>
<body>
<div class="container">
    <div class="content">
        <div class="logo">
            {!!HTML::image('img/logo.png', 'MLS group logo')!!}
        </div>
        <div class="title">
            <p class="heading">It seems to be an error:(</p>
            <p class="error">{{$error}}</p>
            @if ($error == 'NO SUCH LANGUAGE')
                <p>Seriously, are you making these adresses up?</p>
                <p>But we forgive you, you can go <a href="#" onClick="backAway()">back</a> and kepp searching!</p>
                <p>Have a nice day!</p>
            @else
                <p>Be right back!</p>
                <p>But now you can go <a href="#" onClick="backAway()">back</a> and kepp searching!</p>
            @endif
        </div>
    </div>
</div>
</body>
</html>
