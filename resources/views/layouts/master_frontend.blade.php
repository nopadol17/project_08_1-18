<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>เย็นตาโฟก๋วยเตี๋ยวหมูต้มยำ ศิริชัย</title>
  <!-- improt CSS -->
  <link rel="stylesheet" href="{{ asset('frontend/src/css/styles.css')}}">
  <link rel="stylesheet" href="{{ asset('frontend/node_modules/bootstrap/dist/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>
  <!-- เมนู -->
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #F99144">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ url('/')}}">
        <img src="{{ asset('frontend/image/logo2.jpg')}}" alt="" width="30" height="24" class="d-inline-block align-text-top">
        เย็นตาโฟก๋วยเตี๋ยวหมูต้มยำ ศิริชัย
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="{{ url('product')}}"><b>รายการอาหาร</b></a>
            <a class="nav-link" href="{{ url('about')}}"><b>เกี่ยวกับเรา</b></a>
            <a class="nav-link" href="{{ url('contact')}}"><b>ติดต่อเรา</b></a>
            </div>
         <span class="navbar-text">
            <a href="{{route('login')}}" class="btn btn-warning">Login</a>
            <a href="{{route('register')}}" class="btn btn-primary">Regiter</a>
         </span>

          </div>
        </div>
    </div>
  </nav>
  <!-- จบเมนู -->

<!-- ใช้งาน vanta.js -->


<header id="page-header" class="header">
  <div class="title text-warningt">
    <h1><b>เย็นตาโฟก๋วยเตี๋ยวหมูต้มยำ ศิริชัย</b></h1>
    <p>เว็บไซต์ขายอาหาร อร่อย สะอาด ราคาถูก</p>
  </div>
</header>

<!--ปิดใช้งาน vanta.js -->


@yield('content')

<!-- ส่วนท้ายของเว็บไซต์ -->
<footer>
  <div class="text-center p-4" style="background-color:#F99144">
   Copyright &copy;
    <a class="text" href="https://web.facebook.com/ITSERVICES1972/">Information Technology @ PSC</a>, by <a href="https://www.facebook.com/nopadol.daengklad.14/" class="text">Nopadol.DK</a>
  </div>
</footer>
<!-- จบส่วนท้ายของเว็บไซต์ -->








  <!-- <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.waves.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script> -->
  <script src="{{ asset('frontend/src/js/three.r119.min.js')}}"></script>
  <script src="{{ asset('frontend/src/js/vanta.waves.min.js')}}"></script>
  <script src="{{ asset('frontend/src/js/index.js')}}"></script>
  <script src="{{ asset('frontend/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('frontend/node_modules/@popperjs/core/dist/umd/popper.min.js')}}"></script>
  <script src="{{ asset('frontend/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>




</body>
</html>
