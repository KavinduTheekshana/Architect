<!DOCTYPE html>
<html lang="en">
  <head>
    <title>DSMA | Damith .S. Munasinghe Associates</title>
    <link rel="icon" href="app/image/fav.jpg" type="image/x-icon" />
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <meta
      name="keywords"
      content="Damith S Munasinghe Associates, Damith S Munasinghe, Damith Munasinghe, Architect Damith Munasinghe, Architect Damith S Munasinghe, DSMA, Architect Damith, Archt Damith S Munasinghe, 
    Architect Damith Munasinghe, Chartered Architect Damith Munasinghe, Architects in Sri Lanka, Architects in Colombo, Best Architects in Colombo, Who is the best architect in Sri Lanka, 
    Sri Lankan Architects, House Architecture, House designs, Tropical House designs, Tropical Architecture, Award wining architects in Sri Lanka, 
    Nice houses, SLIA, Sri Lanka Institutes of Architects, Architect institute, Chartered Architects in Colombo, Chartered Architect, Best house designs, Architects Directory,
    Tourism Sri Lanka, Villa Architecture, Villa designs in Sri Lanka, Chalets, Sri Lankan Home, Architectural buildings, Architecture projects,
    Best project, Construction industry, Construction projects Colombo, Construction, Professional Architect, Green Architecture,Green buildings, Eco friendly architecture, Sustainable Architecture,
    Sustainable designs, Green consultants, Design consultancy services"
    />
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="app/css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.1/css/all.min.css"
    />
  </head>
  <body onload="Justify()">
    <div class="mob-header">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand" href="#"
            ><img src="app/image/logo-mob-icon.png" alt=""
          /></a>
          <button id="navbar-toggler-menu" class="navbar-toggler" type="button">
            <!-- <span class="navbar-toggler-icon"></span> -->
            <img src="app/image/icon/menu.svg" alt="" />
          </button>

          <button
            id="navbar-toggler-times"
            class="navbar-toggler d-none"
            type="button"
          >
            <img src="app/image/icon/close.svg" alt="" />
          </button>
        </nav>
        <div class="row ml-0 mr-0 mt-0 mb-4">
          <div class="col col-md-12 col-lg-9 col-sm-12 center m-0 p-0">
            <p id="character_justify4" class="name-top">
              damith .s. munasinghe associates
            </p>
          </div>
        </div>
      </div>

      <header id="header" class="navbar-demo d-none-custom">
        <div class="nav-bar">
          <nav class="nav flex-column menu-nav">
            <a class="nav-link active" href="index.html">Home</a>
            <a class="nav-link" href="about.html">About</a>

            <a
              id="gallery-menu"
              class="nav-link"
              onclick="myGalleryMob()"
              href="#"
              >gallery</a
            >
            <div id="sub-gallery" class="sub-gallery d-none">
              <ul>
                <li><a href="gallery-2-6.html">Lake villa by Carlson</a></li>
                <li>
                  <a href="gallery-5-7-12.html">Urban compact living</a>
                </li>
                <li>
                  <a href="gallery-vasthu-convertor.html">“Vasthu” converter</a>
                </li>
                <li><a href="gallery-1-9.html">Urban remake</a></li>
                <li><a href="gallery-8.html">Small Dutch house</a></li>
                <li><a href="gallery-3-4.html">Bigger the faster</a></li>
                <li><a href="#">“Lavinia mews” guesthouse</a></li>
                <li><a href="gallery-10.html">Less is strong</a></li>
                <li><a href="gallery-random.html">Random clicks</a></li>
                <li>
                  <a href="gallery-adaptable.html">Adaptable studio apartmen</a>
                </li>
              </ul>
            </div>
            <a
              id="awards-menu"
              class="nav-link"
              onclick="myAwardsMob()"
              href="#"
              >Awards</a
            >
            <div id="sub-awards" class="sub-awards d-none">
              <ul class="temp-ul">
                <li>
                  <a href="award-1.html">SLIA design completion award 2018</a>
                </li>
                <li>
                  <a href="award-2.html">SLIA design completion award 2015</a>
                </li>
              </ul>
            </div>
            <a class="nav-link" href="contact">contact</a>
          </nav>
        </div>
      </header>
    </div>

    <div class="main-wrapper" onload="Justify()">
      <div class="container container-full">
        <div class="row m-0 p-0">
          <div class="col col-md-12 col-lg-9 col-sm-12 center m-0 p-0">
            <p id="character_justify" class="name">
              damith .s. munasinghe associates
            </p>

            <div class="content row m-0 p-0">
              <div class="col col-lg-2 pr-1 pl-0 side-menu">
                <div class="menu">
                  <div class="top">
                    <nav class="nav flex-column menu-nav">
                      <a class="nav-link {{ Request::segment(1) === null ? 'active' : null }}" href="/">Home</a>
                      <a class="nav-link {{ Request::segment(1) === 'about' ? 'active' : null }}" href="about">About</a>
                      <a
                        id="gallery-menu"
                        class="nav-link {{ Request::segment(1) === 'gallery' ? 'active' : null }}"
                        onclick="myGallery()"
                        href="#"
                        >gallery</a
                      >
                      <a
                        id="awards-menu"
                        class="nav-link {{ Request::segment(1) === 'awards' ? 'active' : null }}"
                        onclick="myAwards()"
                        href="#"
                        >Awards</a
                      >
                      <a class="nav-link {{ Request::segment(1) === 'contact' ? 'active' : null }}" href="contact">contact</a>
                    </nav>
                  </div>
                  <div id="middle" class="middle">
                    <nav
                      id="second-menu-gallery"
                      class="nav flex-column second-menu-nav d-none"
                    >
                      <ul class="temp-ul">
                        <li>
                          <a class="nav-link" href="gallery-2-6.html"
                            >Lake villa by Carlson
                          </a>
                        </li>

                        <li>
                          <a class="nav-link" href="gallery-5-7-12.html"
                            >Urban compact living
                          </a>
                        </li>

                        <li>
                          <a
                            class="nav-link"
                            href="gallery-vasthu-convertor.html"
                            >“Vasthu” converter</a
                          >
                        </li>

                        <li>
                          <a class="nav-link" href="gallery-1-9.html"
                            >Urban remake
                          </a>
                        </li>

                        <li>
                          <a class="nav-link" href="gallery-8.html"
                            >Small Dutch house</a
                          >
                        </li>

                        <li>
                          <a class="nav-link" href="gallery-3-4.html"
                            >Bigger the faster
                          </a>
                        </li>

                        <li>
                          <a class="nav-link" href="#"
                            >“Lavinia mews” guesthouse
                          </a>
                        </li>

                        <li>
                          <a class="nav-link" href="gallery-10.html"
                            >Less is strong
                          </a>
                        </li>

                        <li>
                          <a class="nav-link" href="gallery-random.html"
                            >Random clicks</a
                          >
                        </li>

                        <li>
                          <a class="nav-link" href="gallery-adaptable.html"
                            >Adaptable studio apartment</a
                          >
                        </li>
                      </ul>
                    </nav>

                    <nav
                      id="second-menu-awards"
                      class="nav flex-column second-menu-nav d-none"
                    >
                      <ul class="temp-ul">
                        <li>
                          <a class="nav-link" href="award-1.html"
                            >SLIA design completion award 2018
                          </a>
                        </li>

                        <li>
                          <a class="nav-link" href="award-2.html"
                            >SLIA design completion award 2015
                          </a>
                        </li>
                      </ul>
                    </nav>
                  </div>
                  <div id="bottum" class="bottum">
                    <div class="color">
                      <a href="index.html">
                        <img src="app/image/logo.png" alt=""
                      /></a>
                    </div>
                  </div>
                </div>
              </div>

              @yield('content')


              <div class="row bottum-name p-0 w-100">
              <p id="character_justify2" class="left-name">
                chartered architects
              </p>
              <p id="character_justify3" class="right-name">
                interior designers
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>

    <script src="app/js/main.js"></script>
  </body>
</html>
