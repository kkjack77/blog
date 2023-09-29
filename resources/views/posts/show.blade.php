<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <style>
        body {
            font-family: Arial, sans-serif;
        }

        .item {
            text-align: center;
        }

        .content {
            margin: 20px;
            padding: 10px;
            background-color: #f9f9f9;
            border: 1px solid #ccc;
        }

        .content_post {
            margin-bottom: 10px;
        }

        h3 {
            color: #333;
        }

        p {
            line-height: 1.6;
        }

        .edit,
        .footer {
            margin-top: 20px;
            text-align: center;
        }

        .edit a,
        .footer a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .edit a:hover,
        .footer a:hover {
            background-color: #0056b3;
        }

        </style>
    </head>
    <body>
        <h1 class="title item">
            {{ $post->title }}
        </h1>
        <div class="content">
            <div class="content_post">
                <p>{{ $post->body }}</p>    
            </div>
        </div>
        @if($post->image_url)
        <div>
                <img src="{{ $post->image_url }}" alt="画像が読み込めません。"/>
        </div>
        @endif
        <div class="edit">
            <a href="/posts/{{ $post->id }}/edit">編集</a>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>