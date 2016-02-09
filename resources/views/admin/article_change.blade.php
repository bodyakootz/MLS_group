<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
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

        .title {
            font-size: 96px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <div class="title">This is article change</div>
            <a href="{{l('article', [s($article->title), $article->article_id, $article->language])}}">{{$article->title}}</a>
            <p>{{$article->date}}</p>
            <p>{{$article->body}}</p>
            <p>{{$article->category}}</p>
            <p>{{$article->preview}}</p>
            <p>{{$article->language}}</p>
        {!! Form::model($article, ['url'=>[URL::to('/admin/update_article/')], 'method'=>'POST', 'class'=>'article_update_form']) !!}
         {!! Form::submit('Сохранить', ['class'=>'btn admin_uni_button']) !!}
        {!! Form::close() !!}
    </div>

</div>
</body>
</html>
