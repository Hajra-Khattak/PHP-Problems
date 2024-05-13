# PHP-Problems
Mastering in PHP and ready to dig in deep by solving Problems Solutions
<html>
  <head>
    <style>
      :root {
  --primary-color: #49b93f;
}

* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  font-family: "Arial", sans-serif;
  background: #000;
  color: #999;
}

ul {
  list-style: none;
}

h1,
h2,
h3,
h4 {
  color: #fff;
}

a {
  color: #fff;
  text-decoration: none;
}

p {
  margin: 0.5rem 0;
}

img {
  width: 100%;
}

/* Showcase Styling */

.showcase {
  width: 100%;
  height: 100vh;
  position: relative;
  background: url("https://github.com/sjvarnum/acme-media-showcase/blob/master/img/showcase.jpg?raw=true")
    no-repeat center center/cover;
}

/* Showcase Overlay */

.showcase::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
  background: rgba(0, 0, 0, 0.6);
  box-shadow: inset 120px 100px 250px #000000, inset -120px -100px 250px #000000;
}



.showcase-content {
  position: relative;
  margin: auto;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  margin-top: 9rem;
  z-index: 2;
}

.showcase-content h1 {
  font-weight: 700;
  font-size: 5.2rem;
  line-height: 1.1rem;
  margin: 0 0 2rem;
}

.showcase-content p {
  font-weight: 400;
  color: #fff;
  font-size: 1.8rem;
  text-transform: uppercase;
  line-height: 1.25rem;
  margin: 2rem 0 2rem 0;
}

.showcase-content .btn-xl {
  margin-top: 3rem;
}

/* Button Styling */

.btn {
  display: inline-block;
  background: var(--primary-color);
  color: #fff;
  padding: 0.4rem 1.3rem;
  font-size: 1rem;
  text-align: center;
  border: none;
  cursor: pointer;
  outline: none;
  box-shadow: 0 1px 0 rgba(0, 0, 0, 0.45);
  border-radius: 2px;
  /*   margin-top: 3rem; */
}

.btn: hover {
  opacity: 0.9;
}


.btn-xl {
  font-size: 2rem;
  padding: 1.1rem 2rem;
  border-radius: 7px;
  text-transform: uppercase;
}

.btn-lg {
  font-size: 1rem;
  padding: 0.8rem 1.3rem;
  text-transform: uppercase;
}
.name{
    color: #fff;
    font-size: 0.75rem;
}

  </style>
  </head>
  <body>
    <header class="showcase">
  <div class="showcase-content">
    <h1>PHP CHALLENGES </h1>
    <p>Accepted</p>
    <a href="#" class="btn btn-xl">
      30 Day Challenge
      <i class="fas fa-chevron-right btn-icon"></i>
    </a>
  </div>
</header>
<footer class="pb-0 mb-0">
  <div> 
    <p><a href="https://github.com/Hajra-Khattak/PHP-Problems.git"> <i class="name"> Hajra Khattak </i></a></p>
  </div>
  <footer>
  </body>
</html>
