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
    "author" => "Paul Kalkbrenner"
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
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
  
  <div id="app">
    

  </div>

<div class="albums container d-flex justify-content-center">
  <?php foreach($songs as $song): ?>
    <div class="album">
      <img src="<?php echo $song['poster'] ?>" alt="">
      <h5> <?php echo $song['title'] ?></h5>
      <p><?php echo $song['author'] ?></p>
    </div>
    <?php endforeach ?>
</div> 
  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>