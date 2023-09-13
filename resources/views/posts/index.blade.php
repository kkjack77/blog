<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="UTF-8">
    <meta name="description" content="作品投稿・閲覧サイト">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NewBook</title>
    <link rel="icon" href="img/favicon.ico">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script src="{{asset('js/main.js')}}"></script>
    </head>
    <body>
        <header id="header">
    <nav id="navi">
      <ul class="nav-menu1">
        <li><a href="#magazine">雑誌</a></li>
        <li><a href="#comic">漫画</a></li>
        <li><a href="#novel">小説</a></li>
      </ul>
      <ul class="nav-menu2">
        <li><a href="#">お気に入り</a></li>
        <li><a href="#" target="_blank">X</a></li>
      </ul>
    </nav>
    <div class="toggle_btn">
      <span></span>
      <span></span>
      <span></span>
    </div>

    <div id="mask"></div>
  </header>

  
  <main id="main">
    <section id="magazine">
      <h2 class="sec-title">雑誌</h2>
      <div class="grid">
        <div class="item">
          <img class="fadein" src="img/magazine.jpg" alt="">
          <div class="item-content">
            <p class="item-cat">category</p>
            <p class="item-text">テキストテキストテキストテキストテキストテキストテキストテキスト</p>
            <p class="item-date">XXXX.XX.XX</p>
          </div>
        </div>

        <div class="item">
          <img class="fadein" src="img/magazine2.jpg" alt="">
          <div class="item-content">
            <p class="item-cat">category</p>
            <p class="item-text">テキストテキストテキストテキストテキストテキストテキストテキスト</p>
            <p class="item-date">XXXX.XX.XX</p>
          </div>
        </div>

        <div class="item">
          <img class="fadein" src="img/magazine3.jpg" alt="">
          <div class="item-content">
            <p class="item-cat">category</p>
            <p class="item-text">テキストテキストテキストテキストテキストテキストテキストテキスト</p>
            <p class="item-date">XXXX.XX.XX</p>
          </div>
        </div>

        <div class="item">
          <img class="fadein" src="img/magazine4.jpg" alt="">
          <div class="item-content">
            <p class="item-cat">category</p>
            <p class="item-text">テキストテキストテキストテキストテキストテキストテキストテキスト</p>
            <p class="item-date">XXXX.XX.XX</p>
          </div>
        </div>

        <div class="item">
          <img class="fadein" src="img/magazine5.jpg" alt="">
          <div class="item-content">
            <p class="item-cat">category</p>
            <p class="item-text">テキストテキストテキストテキストテキストテキストテキストテキスト</p>
            <p class="item-date">XXXX.XX.XX</p>
          </div>
        </div>

        <div class="item">
          <img class="fadein" src="img/magazine6.jpg" alt="">
          <div class="item-content">
            <p class="item-cat">category</p>
            <p class="item-text">テキストテキストテキストテキストテキストテキストテキストテキスト</p>
            <p class="item-date">XXXX.XX.XX</p>
          </div>
        </div>

        <div class="item">
          <img class="fadein" src="img/magazine7.jpg" alt="">
          <div class="item-content">
            <p class="item-cat">category</p>
            <p class="item-text">テキストテキストテキストテキストテキストテキストテキストテキスト</p>
            <p class="item-date">XXXX.XX.XX</p>
          </div>
        </div>

        <div class="item">
          <img class="fadein" src="img/magazine8.jpg" alt="">
          <div class="item-content">
            <p class="item-cat">category</p>
            <p class="item-text">テキストテキストテキストテキストテキストテキストテキストテキスト</p>
            <p class="item-date">XXXX.XX.XX</p>
          </div>
        </div>

        <div class="item">
          <img class="fadein" src="img/magazine9.jpg" alt="">
          <div class="item-content">
            <p class="item-cat">category</p>
            <p class="item-text">テキストテキストテキストテキストテキストテキストテキストテキスト</p>
            <p class="item-date">XXXX.XX.XX</p>
          </div>
        </div>
      </div>
    </section>
    </main>

    <footer id="footer">
      <a id="to_top" href="#"></a>

      <ul class="menu">
        <li><a href="#">当サイトについて</a></li>
        <li><a href="#">サービス</a></li>
        <li><a href="#">お問い合わせ</a></li>
      </ul>
      <p class="copyright">Copyright &copy; 2023 NewBook All Rights Reserved.</p>
    </footer>
    </div>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <a href="/posts/{{$post->id}}"><h2 class='title'>{{ $post->title }}</h2></a>
                    <p class='body'>{{ $post->body }}</p>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
    </body>
</html>