<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="Csympa">
    <meta name="description" content="this is my personal blog website"> 

     <!-- google font link -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600;700;800&display=swap"rel="stylesheet">
 
       <!-- CSS link -->
       <link rel="stylesheet" href="css/style.css"/>
       
    <!-- logo -->
  <link rel="shorcut icon" href="img/default.png">

  <!-- preload image -->
  <link rel="preload" as="image"  href="/public/img/hero-banner.jpg">
  <link rel="preload" as="image"  href="/public/img/pattern-1.svg">
  <link rel="preload" as="image"  href="/public/img/pattern-2.svg">

    <!-- Title -->
    <title>Csympa</title>
  </head>
  <body>
 
<header class="header" data-header>
            <div class="container">
              <a href="#" class="logo">
                <img src="img/default.png" alt="Csympa logo" width="50" height="37">
              </a>
              <nav class="navbar" data-navbar>  

                    <div class="navbar-top">
                      <a href="#" class="logo">
                      <img src="img/default.png" alt="Csympa logo" width="119" height="37">
                      </a>
                      <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
                        <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
                    </button>
                  </div>


                  <ul class="navbar-list">
                    <li>
                      <a href="#home" class="navbar-link hover-1" data-nav-toggler>Accueil</a>
                    </li>

                    <li>
                      <a href="#topics" class="navbar-link hover-1" data-nav-toggler>Textes</a>
                    </li>

                    <li>
                      <a href="#featured" class="navbar-link hover-1" data-nav-toggler>post annexe</a>
                    </li>

                    <li>
                      <a href="#recent" class="navbar-link hover-1" data-nav-toggler>Post recent</a>
                    </li>

                    <li>
                      <a href="#" class="navbar-link hover-1" data-nav-toggler>Contacts</a>
                    </li>
                  </ul>

                  <div class="navbar-bottom">
                    <div class="profile-card">
                      <img src="/img/profile-pic.png" width="48" height="48" alt="Andrès" class="profile-banner">
                      <div>
                        <p class="card-title"> Salut Andrès !</p>

                        <p class="card-subtitle">
                          Vous Avez 3 messages!
                        </p>
                      </div>
                    </div>

                    <ul class="link-list">
                      <li>
                        <a href="#" class="navbar-bottom-link hover-1">Profil</a>
                      </li>

                      <li>
                        <a href="#" class="navbar-bottom-link hover-1">Articles Enregistrés</a>
                      </li>

                      <li>
                        <a href="#" class="navbar-bottom-link hover-1">faire un nouveau post</a>
                      </li>

                      <li>
                        <a href="#" class="navbar-bottom-link hover-1">Mes j'aime</a>
                      </li>

                      <li>
                        <a href="#" class="navbar-bottom-link hover-1">Paramètres</a>
                      </li>

                      <li>
                        <a href="#" class="navbar-bottom-link hover-1">Deconnecter</a>
                      </li>
                    </ul>  
                  
                  </div>

                  <p class="copyright-text">
                      Copyright 2022  Csympa - Personal Blog Template Developed by codewithsadee
                    </p>
              </nav>

              <a href="#" class="btn btn-primary"> S'inscrire</a>
              <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
                <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
            </button>
            </div>
</header>

<main>
  <article>
    <!-- HERO -->

    <section class="hero" id="home" aria-label="home">
      <div class="container">

        <div class="hero-content">
          <p class="hero-subtitle"> Salut tout le monde!</p> 

            <h1 class="headline headline-1 section-title">Je suis<span class="span">Andrès S. Saintil</span></h1>

            <p class="hero-text">
              Vous êtes sur mon blog Personnel, entant qu'informaticien et community manager je vous invite à vous abonné et à recevoir,
              des articles intéressant sur des sujets pertinent qui vous intéresse.
          </p>

          <div class="input-wrapper">
            <input type="email" name="email-adress" placeholder="tapez votre adresse email" required 
            class="input-field">

            <button class="btn btn-primary">
              <span class="span">S'inscrire</span>
              <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
            </button>
          </div>

        </div>

        <div class="hero-banner">
          <img src="/img/hero-banner.jpg" width="327" height="490" alt="Andrès S. Saintil" class="w-100">
          <img src="/public/img/pattern-2.svg" width="27" height="26" alt="shape" class="shape shape-1">
          <img src="/public/img/pattern-3.svg" width="27" height="26" alt="shape" class="shape shape-2">

        </div>

      </div>

    </section>
  </article>
</main>
    

<!-- js link -->
<script src="js/script.js"></script>


<!-- ionicon link -->
<script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"></script>
<script nomodule src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ionic/core/css/ionic.bundle.css" />

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
     
</body>
</html>




<?php
     echo'<h1>home  </h1>';
     ?>