<?php

$songs = [
  [
    "poster" => "http://www.rocklab.it/wp-content/uploads/2016/09/frank-ocean-blond.jpg",
    "title" => "Blond",
    "author" => "Frank Ocean"
  ],
  [
    "poster" => "https://m.media-amazon.com/images/I/814AZHWxf0L._AC_SL1500_.jpg",
    "title" => "Flower Boy",
    "author" => "Tyler The Creator"
  ],
  [
    "poster" => "https://m.media-amazon.com/images/I/61quAjwYMtS._AC_SL1000_.jpg",
    "title" => "Nevermind",
    "author" => "Nirvana"
  ],
  [
    "poster" => "https://m.media-amazon.com/images/I/81Czxcf33qL._AC_SL1500_.jpg",
    "title" => "Berlin Calling",
    "author" => ""
  ],
  [
    "poster" => "https://m.media-amazon.com/images/I/71K9CbNZPsL._SS500_.jpg",
    "title" => "Bad",
    "author" => "Michael Jackson",
  ],
  [
    "poster" => "https://m.media-amazon.com/images/I/A1Rn2NzXyNL._AC_SL1500_.jpg",
    "title" => "Pain in my heart",
    "author" => "Otis Redding"
  ],
  [
    "poster" => "https://m.media-amazon.com/images/I/51cZe398KcL._AC_SL1248_.jpg",
    "title" => "Ready to die",
    "author" => "Notorius BIG"
  ],
  [
    "poster" => "https://m.media-amazon.com/images/I/81oJg8R1C4L._AC_SL1500_.jpg",
    "title" => "Illmatic",
    "author" => "NAS"
  ],
  [
    "poster" => "https://m.media-amazon.com/images/I/71NUQhdZDJL._AC_SL1200_.jpg",
    "title" => "To pimp a butterfly",
    "author" => "Kendrick Lamar"
  ],
  [
    "poster" => "https://m.media-amazon.com/images/I/91B+9WTlelL._AC_SL1500_.jpg",
    "title" => "Noi, Loro, Gli altri",
    "author" => "Marracash"
  ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <div id="app">
    

  </div>

  <?php foreach($songs as $song): ?>
  <div class="albums">
    <img src="<?php echo $song['poster'] ?>" alt="">
    <h5> <?php echo $song['title'] ?></h5>
    <p><?php echo $song['author'] ?></p>
  </div> 
  <?php endforeach ?>
  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</body>
</html>