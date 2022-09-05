<?php
function get_CURL($url)
{
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  $result = curl_exec($curl);
  curl_close($curl);

  return json_decode($result, true);
}

$result = get_CURL("https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UCDe1oebmf5Aiy5eSAY5Rv3Q&key=AIzaSyBTh_b8E-SSbjrwLURdooYHYXoufCcA6dM");

$youtube_profile = $result["items"][0]["snippet"]["thumbnails"]["medium"]["url"];
$channel_name = $result["items"][0]["snippet"]["title"];
$subscriber = $result["items"][0]["statistics"]["subscriberCount"];

// latest vidio
$urlLatestVidio = ("https://www.googleapis.com/youtube/v3/search?key=AIzaSyBTh_b8E-SSbjrwLURdooYHYXoufCcA6dM&channelId=UCDe1oebmf5Aiy5eSAY5Rv3Q&maxResults=1&order=date&part=snippet");
$result = get_CURL($urlLatestVidio);
$latestVideoId = $result["items"][0]["id"]["videoId"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css" />

  <!-- My style css -->
  <link rel="stylesheet" href="css/style.css" />

  <title>My Portofolio | Ade Fathi</title>
</head>

<body id="home">
  <!-- Nav Bar -->
  <nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Ade Fathi Amirrasyid</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#projects">Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Akhir Nav Bar -->

  <!-- jumbotron -->
  <section class="jumbotron text-center">
    <img src="image/ade.jpg" alt="" width="200" height="200" class="rounded-circle img-thumbnail" />
    <h1 class="display-4">Ade Fathi Amirrasyid</h1>
    <p class="lead">Web Developer | Freelancer</p>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#ffffff" fill-opacity="1" d="M0,32L48,26.7C96,21,192,11,288,21.3C384,32,480,64,576,96C672,128,768,160,864,149.3C960,139,1056,85,1152,64C1248,43,1344,53,1392,58.7L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
  </section>
  <!-- Akhir jumbotron -->

  <!-- About -->
  <section id="about">
    <div class="container">
      <div class="row text-center">
        <div class="col">
          <h2>About me</h2>
        </div>
      </div>

      <div class="row justify-content-center fs-5 text-center mt-3">
        <div class="col-md-4 mb-5">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium aut dicta velit hic possimus aliquid minus nobis similique
          quisquam ipsa!
        </div>
        <div class="col-md-4">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, consequuntur fugiat reprehenderit consequatur error alias a vel
          ipsum neque! Possimus expedita velit facilis enim soluta veniam quas veritatis, sed dolore?
        </div>
      </div>
    </div>

  </section>
  <!-- Akhir About -->

  <!-- Youtube and Instagram -->
  <section class="sosial" id="sosial">
    <div class="container">
      <div class="row mb-4">
        <div class="col text-center">
          <h2>Sosial Media</h2>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-md-5">
          <div class="row">
            <div class="col-md-4">
              <img src="<?= $youtube_profile; ?>" alt="Insanie Fathie" class="rounded-circle img-thumbnail" width="200">
            </div>
            <div class="col-md-8">
              <h5><?= $channel_name; ?></h5>
              <p><?= $subscriber; ?> Subscriber </p>
              <div class="g-ytsubscribe" data-channelid="UCDe1oebmf5Aiy5eSAY5Rv3Q" data-layout="default" data-count="default"></div>
            </div>

            <div class="row my-4">
              <div class="col">
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $latestVideoId; ?>?rel=0" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-5">
          <div class="row">
            <div class="col-md-4">
              <img src="image/ade.jpg" alt="Insanie Fathie" class="rounded-circle img-thumbnail" width="200">
            </div>
            <div class="col-md-8">
              <h5>Ade Fathi Amirrasyid</h5>
              <p>80 Followers.</p>
            </div>
          </div>

          <div class="row my-4">
            <div class="col">
              <div class="ig-thumbnail">
                <img src="image/projects/image1.jpg" alt="">
              </div>
              <div class="ig-thumbnail">
                <img src="image/projects/image2.jpg" alt="">
              </div>
              <div class="ig-thumbnail">
                <img src="image/projects/image3.jpg" alt="">
              </div>
              <div class="ig-thumbnail">
                <img src="image/projects/image2.jpg" alt="">
              </div>

            </div>
          </div>
        </div>

      </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#e2edff" fill-opacity="1" d="M0,32L48,26.7C96,21,192,11,288,26.7C384,43,480,85,576,101.3C672,117,768,107,864,90.7C960,75,1056,53,1152,37.3C1248,21,1344,11,1392,5.3L1440,0L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
  </section>
  <!-- Akhir Youtube and Instagram -->


  <!-- Projects -->
  <section id="projects">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col">
          <h2>My Projects</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="image/projects/image1.jpg" class="card-img-top" alt="Projects" />
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="image/projects/image2.jpg" class="card-img-top" alt="Projects" />
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="image/projects/image3.jpg" class="card-img-top" alt="Projects" />
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="image/projects/image4.jpg" class="card-img-top" alt="Projects" />
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="image/projects/image5.jpg" class="card-img-top" alt="Projects" />
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#fff" fill-opacity="1" d="M0,64L48,90.7C96,117,192,171,288,170.7C384,171,480,117,576,112C672,107,768,149,864,160C960,171,1056,149,1152,128C1248,107,1344,85,1392,74.7L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
  </section>
  <!-- Akhir Projects -->

  <!-- Contact -->
  <section id="contact">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col">
          <h2>Contact Me</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-6">
          <form>
            <div class="mb-3">
              <label for="name" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control" id="name" aria-describedby="name" />
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" aria-describedby="email" />
            </div>

            <div class="mb-3">
              <label for="pesan" class="form-label">Pesan</label>
              <textarea class="form-control" id="pesan" rows="3"></textarea>
            </div>

            <button type="submit" class="btn">Kirim</button>
          </form>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#0f9979" fill-opacity="1" d="M0,192L48,208C96,224,192,256,288,256C384,256,480,224,576,213.3C672,203,768,213,864,234.7C960,256,1056,288,1152,282.7C1248,277,1344,235,1392,213.3L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
  </section>
  <!-- Akhir Contact -->



  <!-- Footer -->
  <footer class="text-center pb-5">
    <p>Created with <i class="bi bi-suit-heart-fill text-info"></i> by <a href="https://www.instagram.com/">Ade Fathi Amirrasyid </a></p>
  </footer>
  <!-- Akhir Footer -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
<script src="https://apis.google.com/js/platform.js"></script>

</html>