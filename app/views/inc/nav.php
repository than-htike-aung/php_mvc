<div class="container-fluid bg-dark">
<nav class="container navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand text-white english" href="#">
    <img src="<?php echo URLROOT . "assets/imgs/php.jpg" ?>" alt="" width="30" height="30" class="rounded">
        <span class="english ml-3">Coder Crazy</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav  ml-auto">
        <li class="nav-item">
          <a class="nav-link active text-white english" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white english" href="<?php echo URLROOT . 'user/login' ?>">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white english" href="<?php echo URLROOT . 'user/register' ?>">Register</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white english" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Language
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item  english" href="#">PHP</a></li>
            <li><a class="dropdown-item  english" href="#">React js</a></li>
            
            <li><a class="dropdown-item english" href="#">MERN Stack</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
     
    </div>
  </div>
</nav>
</div>