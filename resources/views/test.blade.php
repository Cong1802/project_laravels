<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <style>
        body, html, #app {
  margin: 0;
  width: 100%;
  height: 100%;
}

#app {
  overflow: hidden;
  touch-action: pan-up;
  color: #ffffff;
  font-family: 'Montserrat', sans-serif;
  text-align: center;
  text-shadow: 0 0 5px #ffffff, 0 0 20px #000, 0 0 30px #000;
}

#app h1 {
  --fontSize: 60px;
  --lineHeight: 80px;
  width: auto;
  height: calc(2 * var(--lineHeight));
  line-height: var(--lineHeight);
  margin: calc(50vh - var(--lineHeight)) auto 0;
  font-size: var(--fontSize);
}

#app a {
  margin-top: 10px;
  display: inline-block;
  text-decoration: none;
  color: #fff;
}

#app canvas {
  display: block;
  position: fixed;
  z-index: -1;
  top: 0;
}
    </style>
    <div id="app">
        <div id="hero">
          <h1>PARTICLES<br/>CURSOR</h1>
          <a target="_blank" href="https://github.com/klevron/threejs-toys">github/threejs-toys</a>
        </div>
      </div>
      
</body>
<script type="module" src="{{ asset("public/frontend/home/js/particle.js") }}"></script>
</html>