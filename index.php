<?php

function sanitize_output($buffer) {
    $search = array(
        '/\n(\s+)?\/\/[^\n]*/',
        '/\>[^\S ]+/s',
        '/[^\S ]+\</s',
        '/(\s)+/s',
        '/\s+|\n+|\r/',
        '/<!--(.|\s)*?-->/'
    );
    $replace = array(
        '',
        '>',
        '<',
        '\\1',
        ' ',
        ''
    );
    $buffer = preg_replace($search, $replace, $buffer);
    return $buffer;
}
ob_start("sanitize_output");
?>
<!DOCTYPE html>
<html lang="it" dir="ltr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Profilo Personale - Detomasi Marco.">
<title>Detomasi Marco</title> 

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="preload" as="font"  onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap"></noscript>

<link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"></noscript>

<style>
:root {
    --bg: hsl(216 28% 93% / 1);
    --bg2: hsl(207 13% 86% / 1);
    --bg3: hsl(215deg 21% 89% / 80%);
    --grad_0: linear-gradient(90deg,#000000 2.34%,#000000 100.78%);
    --grad_1: linear-gradient(90deg,#4c73ff 2.34%,#389bff 100.78%);
    --grad_2: linear-gradient(90deg,#ff7170 -50.34%,#ffe57f 100.78%);
    --color: hsl(0 0% 0% / 1);
    --color2: hsl(0 0% 14% / 1);
    --fill: hsl(0deg 0% 0% / 15%);
    --shadow: hsl(0deg 0% 89% / 10%);
    --shadow_dark: hsl(0deg 0% 0% / 50%);
}

:root {
  --bg: rgb(13 17 23);
  --bg2: rgb(31 36 40);
  --bg3: rgb(22 27 34 / 80%);  
  --grad_0: linear-gradient(90deg,#ffffff 2.34%,#ffffff 100.78%);
  --grad_1: linear-gradient(90deg,#4c73ff 2.34%,#389bff 100.78%);
  --grad_2: linear-gradient(90deg,#ff7170 -50.34%,#ffe57f 100.78%);  
  --color: #fff;
  --color2: #dbdbdb;  
  --fill: hsl(0deg 0% 100% / 15%);  
  --shadow: hsl(0deg 0% 11% / 10%);
  --shadow_dark : hsl(0deg 0% 100% / 50%);
}



* {
  box-sizing: border-box;
}
::-webkit-scrollbar {
  width: 0px;
    height: 0px;
}
::-webkit-scrollbar-track {
  background: #f1f1f1;
}
::-webkit-scrollbar-thumb {
  background: #888;
}
::-webkit-scrollbar-thumb:hover {
  background: #555;
}

html, body {
    padding: 0;
    margin: 0;
    position: fixed;
    font-size: min(calc(15px + 0.390625vw), 25px);
	font-family: 'Poppins', system-ui, sans-serif;
}
html{
    height: 100%;
    overflow: hidden;
    width: 100%;
    background-color: var(--bg);
}
body{
    overflow: scroll;
    overflow-x: hidden;
    position: fixed;
    display: inline-grid;
    top: 0;
    left: 0;
    right: 0;
    scroll-behavior: smooth;
    font-size: 1rem;
    margin: 0 auto;
    height: calc(100vh + 1px);
    height: calc(100dvh + 1px);
    overflow-y: scroll;
    -webkit-overflow-scrolling: touch;
    font-display: swap;
    color: var(--bg);
    background: inherit;
    //scroll-snap-type: y mandatory;
}
h1 {
    font-size: min(13vmin, 5rem);
    line-height: min(11.7vmin, 4.5rem);
    margin: 0;
    text-shadow: 7px 7px 0px var(--shadow);
    color: var(--color);
}
r {
    transform: translate(min(6.06vmin,2.33rem), min(1.52vmin,0.58rem));
    display: block;
}
l {
    transform: translate(max(-6.06vmin,-2.33rem), max(-1.52vmin,-0.58rem));
    display: inline-block;
}
h1 codes {
    display: inline-block;
    position: absolute;
    line-height: 0;
    font-size: min(2.75vmin, .75rem);
    margin: max(1.5vmin, 0.5rem);
    margin-left: min(-2.75vmin, -0.75rem);
    width: max-content;
}
codes > span {
    text-shadow: 1px 1px 0px var(--shadow);
    font-family: monospace;
    font-weight: 400;
    line-height: 1em;
    color: var(--color);
    border-radius: 3px;
    font-size: 1em;
    box-shadow: 7px 7px 0px var(--shadow);
}
span.text {
    display: inline-block;
    overflow-wrap: normal;
    word-break: break-all;
    width: 0%;
    height: 1em;
    overflow: hidden;
    animation: type 5s steps(15) infinite;
    letter-spacing: 1px;
}

@keyframes type {
  0% {
    width: 0%;
} 
  20% {
    width: 0%;
} 
50% {
    width: 100%;
}

75% {
    width: 100%;
}
95% {
    width: 0%;
} 
}
.type-cursor{
    animation: type-cursor .5s steps(6) infinite;
    position: absolute;
    top: 0;
}
@keyframes type-cursor {
  0% {
    opacity: 0;
} 
}




section{ 
    min-height: 100vh;
    min-height: 100svh;
    max-width: 100vw;
    max-width: 100svw;
    scroll-snap-align: start;
    position: relative;
    height: max-content;
    display: grid;
    align-content: center;
    align-items: center;
    width: -webkit-fill-available;
    justify-items: center;
    justify-content: center;
    color: var(--color2);
    background: inherit;
    padding: 5rem 2rem;
}

section.hero{
    padding: 3rem 0 5rem 0;
}
section.about{
    padding: 0 1.5rem;
}
section.works{
    padding: 0rem 0rem 1rem 0rem;
}

.desc {
    font-size: 1.25rem;
    font-weight: 700;
        max-width: 750px;
    margin: auto;
}
.desc span{
  background: var(--grad_0);
    background-size: 0%;
    background-repeat: no-repeat;
    background-position: left;
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: var(--fill);
    text-fill-color: var(--fill);
}

.-active .desc span{
    animation: bgul 14.25s linear .8s forwards;
}
.desc b {
    font-weight: 700;
    display: inline;
    background: var(--grad_1);
    background-size: 0%;
    background-repeat: no-repeat;
    background-position: left;
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: var(--fill);
    text-fill-color: var(--fill);
}
.-active .desc b {
    animation: bgul .8s ease-in forwards;
}
.-active .desc b:nth-child(1) {
    animation-delay:2.55s;
}
.-active .desc b:nth-child(2) {
    animation-delay:4.8s;
}

.-active .desc b:nth-child(5) {
    animation-delay:7.5s;
}
.-active .desc b:nth-child(6) {
    animation-delay:10.25s;
}
.-active .desc b:nth-child(9) {
    animation-delay: 11.8s;
}

@keyframes bgul {
  0% {
    background-size: 0%;
} 
 100%{
    background-size: 100%;
}
}

h2 {
    text-align: center;
    text-transform: uppercase;
    font-family: "poppins";
    width: -webkit-fill-available;
    text-shadow: 7px 7px 0px var(--shadow);
    top: 0;
    margin: 0 auto;
    right: 0;
    left: 0;
    font-size: clamp(3rem, 9.33vmin, 4rem);
    line-height: 77%;
    padding: 5rem 0;
    text-shadow: 7px 7px 0px var(--shadow_dark);
    font-weight: 700;
    display: inline;
    background-size: 0%;
    background-repeat: no-repeat;
    background-position: left;
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: var(--fill);
    text-fill-color: var(--fill);
    transform: translate(100vw,0%);
    transition: transform .3s ease-in-out;
    opacity: 0.2;
    max-width: 720px;
}
h3{
    margin: 0.5rem;
    margin-top: 0;
    font-size: 1.5rem;
    text-align: left;
}
h4 {
    background: var(--grad_2);
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
    text-fill-color: transparent;
    font-size: .8rem;
    margin: 0 0.5rem;
    text-align: left;
}

.slider {
    display: flex;
    flex-direction: row;
    align-content: center;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
}

.slider-slide {
    padding: 0.5rem;
    width: calc(100% - 2rem);
    flex-grow: 0;
    flex-shrink: 0;
    flex-basis: calc(100% - 2rem);
    max-width: 400px!important;
    margin: 0.5rem;
    border-width: 1px;
    border-color: var(--bg2);
    border-radius: 10px;
    padding-bottom: 7rem;
    position: relative;
    overflow: hidden;
}
.slider-slide img {
    width: calc(100% - 2px);
    width: -webkit-fill-available;
    z-index: -1;
    position: absolute;
    top: 1px;
    left: 1px;
    right: 1px;
    bottom: 0;
    display: block;
    height: 100%;
    object-fit: cover;
    object-position: center;
    border-radius: 15px;
}
.slider-slide:after {
    content: "";
    top: -20%;
    left: -10%;
    height: 60%;
    width: 110%;
    position: absolute;
    z-index: -1;
    transform: rotate(170deg);
    backdrop-filter: blur(10px);
    background: var(--bg3);
}
.ripple:after, .slider-slide:before {
    display: block;
    content: '';
    box-shadow: 0 0 100px var(--shadow_dark);
    background: var(--shadow_dark);
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    border-radius: 1rem;
    -webkit-animation-duration: 0.5s;
    animation-duration: 0.5s;
    animation-fill-mode: forwards;
    opacity: 0;
}

.links {
    text-align:center;
}
.links a{
display:inline-block;
}

.links i {
    font-size: 2rem;
    margin: 2rem;
    padding: 1.3rem 1.5rem;
    border: 1px solid var(--bg2);
    border-radius: 10px;
    position: relative;
    backdrop-filter: blur(10px);
    background: var(--bg3);
}


.links {
    transform: translate(-100vw,0%);
    transition: transform .3s ease-in-out 15.5s;
}
.desc, .slider, h1, .-active h2 {
    transform: translate(-100vw,0%);
    transition: transform .3s ease-in-out .25s;
}
.-active .desc, .-active .slider, .-active .links, .-active h1, .-active h2 {
    transform: translate(0,0%);
}


</style>
</head>
<body>
<section  class="hero -active">
  <h1><r>Detomasi</r><l>Marco</l>
  <codes><span class="text">//Web Developer</span><span class="type-cursor">|</span></codes></h1>

</section>

<section class="about block">
  <h2> About</h2>
  <div class="desc"><span>Sviluppo siti web personalizzati dal <b>design innovativo</b> e realizzo progetti web di <b>qualità e funzionalità</b>.<br><br>Scopri come possiamo creare <b>un’identità web unica</b> per le tue esigenze attraverso <b>soluzioni web su misura</b>. <br><br>Per <b>un sito web che catturi l’attenzione</b>, <BR> non esitare a contattarmi.</span>
	<div class="links">
  		<a href="https://wa.me/3463132457" aria-label="whatsapp" class="ripple" style="color: #00d171;" target="_blank"><i class="fab fa-whatsapp"></i></a>
  	</div>
  </div>
</section>

<section class="works">
  <h2>Works</h2>
  <div class="slider">
    <div class="slider-slide">
      <h4>Movie discover Web App</h4>
      <h3>Videocast</h3><img src="videoc.webp" onerror="this.style.display='none'" alt="">
    </div>
    <div class="slider-slide">
      <h4>News aggregator Web App</h4>
      <h3>News</h3><img src="news.webp" onerror="this.style.display='none'" alt="">
    </div>
    <div class="slider-slide">
      <h4>Music player Web App</h4>
      <h3>Music Player</h3><img src="vrsc.webp"onerror="this.style.display='none'" alt="">
    </div>
    <div class="slider-slide">
      <h4>Graphic Designer Portfolio</h4>
      <h3>Jolly Fishing</h3><img src="jolly.webp" onerror="this.style.display='none'" alt="">
    </div>
  </div>
</section>

<section style="display:none">
  <h2>Contact Me</h2>
  <div class="links">
  <a href="https://wa.me/3463132457" aria-label="whatsapp" class="ripple" style="color: #00d171;" target="_blank"><i class="fab fa-whatsapp"></i></a>
<a href="mailto:detomarco@gmail.com" aria-label="envelope" class="ripple" style="color: #ECEFF1;" target="_blank"><i class="fas fa-envelope-open-text"></i></a><a href="https://www.linkedin.com/in/detomasi-marco/" aria-label="linkedin" class="ripple" style="color: rgb(0 109 189);" target="_blank"><i class="fab fa-linkedin-in"></i></a>
  </div>
</section>

<script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js" integrity="sha512-BdHyGtczsUoFcEma+MfXc71KJLv/cd+sUsUaYYf2mXpfG/PtBjNXsPo78+rxWjscxUYN2Qr2+DbeGGiJx81ifg==" crossorigin="anonymous"></script>
<script>
$.fn.isInViewport = function () {
  var elementTop = $(this).offset().top;
  var elementBottom = elementTop + $(this).outerHeight();

  var viewportTop = $(window).scrollTop() +$(window).height()*0.30;
  var viewportBottom = viewportTop + $(window).height()*0.30;

  return (elementBottom > viewportTop && elementTop < viewportBottom) ;
};

$('body').on("resize scroll", function () {
  $("section").each(function () {
    if ($(this).isInViewport()) {
      $(this).addClass("-active");
    } else {
      if(!$(this).hasClass("block")){
      	$(this).removeClass("-active");
      }
    }
  });
});
$("section").each(function () {
    if ($(this).isInViewport()) {
      $(this).addClass("-active");
    } else {
      $(this).removeClass("-active");
    }
  });
</script>
</body>
</html>
