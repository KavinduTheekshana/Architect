<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="app/css/style.css" />
  </head>
  <body>
    <div class="main-wrapper">
      <div class="container">
        <div class="row m-0 p-0">
          <div class="col col-md-9 center m-0 p-0">
            <p class="name">damith .s. munasinghe associates</p>
            <div class="content row m-0 p-0">
              <div class="col col-md-2 pr-1 pl-0">
                <div class="menu">
                  <div class="top">
                    <nav class="nav flex-column menu-nav">
                      <a class="nav-link {{ Request::segment(1) === null ? 'active' : null }}" href="/">Home</a>
                      <a class="nav-link {{ Request::segment(1) === 'about' ? 'active' : null }}" href="about">About</a>
                      <a id="gallery-menu" class="nav-link {{ Request::segment(1) === 'gallery' ? 'active' : null }}" onclick="myFunction()" href="#">gallery</a>
                      <a class="nav-link {{ Request::segment(1) === 'contact' ? 'active' : null }}" href="#">contact</a>
                    </nav>
                  </div>
                  <div class="middle">
                    <nav id="second-menu-gallery" class="nav flex-column second-menu-nav d-none">
                      <a class="nav-link" href="#">Example 1</a>
                      <a class="nav-link" href="#">Example 2</a>
                      <a class="nav-link" href="#">Example 3</a>
                      <a class="nav-link" href="#">Example 3</a>
                    </nav>
                  </div>
                  <div class="bottum"><img src="app/image/logo.png" alt=""></div>
                </div>
              </div>


              @yield('content')

              </div>
            <div class="row bottum-name p-0">
              <p class="left-name">chartred architects</p>
              <p class="right-name">interior designers</p>
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
