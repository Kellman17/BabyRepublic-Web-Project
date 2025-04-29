<?php
 header("Content-type: text/css"); ?>

header{
    position: relative;
    top: 0;
    left: 0;
    width: 100%;
    background-color: black;
    box-shadow: 10px;
    margin : 0 auto 15px;
    
}
*{
    font-family: "poppins", sans-serif;
    margin: 0;
    padding: 0;
    scroll-padding-top: 2rem;
    scroll-behavior: smooth;
    box-sizing: border-box;
    list-style: none;
    text-decoration: none;

}

:root{
    color: black;
    background-color: white;
    text-decoration: burlywood;
}
.nav li a{
    color: white;
    margin :10px 20px;
}
.nav li a:hover{
    color:orange;
    padding :0 0 0 0;
    text-decoration:none;
}
html,body{
    margin: 0;
    padding: 0;
}
.container{
    max-width: 1070px;
    margin: auto;
    width: 100%;
}
.logo{
    font-size: 1.1rem;
    color: aliceblue;
    font-weight: 400;
}
.logo img{
    position: absolute;
    width: 100px;
    height: 100px;
    top: -8px;
    left: 150px;
    padding-bottom: 10px;
}
.nav{
    display: flex;
    
    padding: 30px 0;
    color: white;
}
.footer img{
    width: 640px;
    height: 260px;
}
.footer {
    padding: 5em 0;
    background: black;
    -webkit-box-shadow: 0px 0px 5px 1px #C3C3C3;
    -moz-box-shadow: 0px 0px 5px 1px #C3C3C3;
    box-shadow: 0px 0px 5px 1px #C3C3C3;
}
h3.title{
    font-size: 60px;
    font-weight: 900;
    color: lightskyblue;
    font-family: 'Pompiere', cursive;
    margin: 0;
}
h3.title span {
    color: rgb(251, 180, 192);
    font-family: 'Pompiere', cursive;
    margin: 0;
}
.title-info p {
    font-size: 15px;
    font-family: 'Raleway', sans-serif;
    color: #999;
    margin-top: .5em;
    letter-spacing: 1px;
    color: #ffffff;
}
.title-info {
    text-align: center;
    margin-bottom: 5em;
}
.footer {
    padding: 2.5em 0;
    margin : 1px 0;
}

.carousel{
    height : 200px;
    width : 51%;
    margin: 10px auto px;
    position:relative;
    right:px;
    
}
.carousel-inner img{
    width:100%;
    height:auto;
    image-rendering:High-quality;
}
.carousel-item,.carousel-inner,.carousel-inner img{
    height:100%;
    width:100%;
}
.carousel-item{
    text-align:Center;
}
.video{
    width:80%;
    height:200px;
    margin:0 auto;
    display : flex;
    column-gap:10px;
    position:relative;
    left:20px;
    margin:0 auto 30px;
}
iframe{
    width:50%;
    height : 100%;
    margin:auto;
}
.trend {
	padding: 5em 0;
	-webkit-box-shadow: 0px 0px 6px 1px #E6E6E6;
	-moz-box-shadow: 0px 0px 6px 1px #E6E6E6;
	box-shadow: 0px 0px 6px 1px #E6E6E6;
}
.trend-info {
    background: #00a6d6;
    padding: 0em 0em 2.3em 4em;
    background: linear-gradient(to right, orange,yellow);
}
.trend-slider h4 {
    font-size: 2em;
    color: #000;
    font-family: 'Raleway', sans-serif;
    font-weight: 200;
    position: relative;
    left: 300px;
    bottom: 100px;
}

.trend-slider h4 span {
    margin-top: .4em;
    font-weight: 900;
    color: #fff;
}
.trend-slider h5 {
    font-size: 2em;
    color: #014A5F;
    margin-top: .5em;
    text-align: center;
    font-family: 'Fascinate', cursive;
    position: relative;
    left: 250px;
    bottom: 100px;
}
.trend-slider p {
    font-size: 1em;
    color: #fff;
    line-height: 2em;
    margin-top: 1.5em;
	font-weight: 400;
}

.trend-right {
    position: absolute;
    width: 60%;
    padding: 0;
}
/*--//trend--*/

.trend img{
    width: 200px;
    height: 200px;
    position: relative;
    bottom: -40px;
    left: 20px;
}
#clothes,#bathncare,#diaper,#aksesori,#toys,#stroller{
    color: orange;
}

.title-info img{
    height: 300px;
    width: 400px;
    padding-bottom: 10px;
}
.home .img:hover{
    padding:10px;
}
.home .box-container{
   display: grid;
   grid-template-columns: repeat(3, 23rem);
   gap:1.5rem;
   justify-content:center;
   align-items:center;
   grid-template-rows: repeat(2, auto);
   margin:auto;
}

.home .box-container .box{
   text-align: center;
   padding:2rem;
   box-shadow: var(--box-shadow);
   border:var(--border);
   align-items:center;
   justify-content:center;
}

.home .box-container .box img{
   height: 175px;
}

.home .box-container .box h3{
   margin:1rem 0;
   font-size: 1.8rem;
   color:var(--black);
}

.home .box-container .box .price{
   font-size: 1.5rem;
   color:var(--black);
}
.home .box-container .box{
    border-style:solid;
    height: 350px;
    width:350px;
    
}
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}


.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}
.home{
    margin: 0 0 10px 0;
    align-items:center;
}

.home img{
    width : 300px;
    height: 50%;  
    position:relative;
    right:10px;  
}
.product img{
}

.box{
    position: relative;
    border-style: solid;
    border-width: 3px;
    border-color: black;
    padding-left: 2px;
}
.box img:hover{
    padding: 3px;
   
    
    transition: 0.4s;
}
.box{
    background: orange;
}
.add-cart{
    background:black;
    color:white;
    padding:4px;
}
.add-cart:hover{
    color:orange;
    padding:2px;
    transition:0.4s;
}
.home h1{
    text-align:center;
    margin:0 0 10px;
}
.container1{
    position:relative;
    left:20px;
}
.container1{
    width:80%;
    margin:0 auto 10px;
}
.container1 .trend-info{
    height:150px;
}
.container1 h4 {
    position: absolute;
    width: 100%;
    padding: 0;
    bottom:30px;
}

.container1 img{
    width:125px;
    height:125px;
    position : relative;
    top:11px;
    left:30px;
}
.container3{
    display:flex;
    justify-content:center;
    position:relative;
    left:20px;
    margin : 0 0 10px;
    
}
.container2 img{
    width:150px;
    height:150px;
    position:Relative;
    left:-40px;
    top:30px;
}
.container2 h4 span{
    position:relative;
    left:-155px;
    top:-30px;
}
.container2{
    width:29%;
    height:100px;
}






:root{
   --orange:#d36804;
   --red:tomato;
   --orange:orange;
   --black:#333;
   --white:#fff;
   --bg-color:#eee;
   --dark-bg:rgba(0,0,0,.7);
   --box-shadow:0 .5rem 1rem rgba(0,0,0,.1);
   --border:.1rem solid #999;
}

*{
   font-family: 'Poppins', sans-serif;
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none; border:none;
   text-decoration: none;
   text-transform: capitalize;
}


.header .flex .cart{
   margin-left: 2rem;
   font-size: 2rem;
   color:#fff;
}

.header .flex .cart:hover{
   color:yellow;
}

.header .flex .cart span{
   padding:.1rem .5rem;
   border-radius: .5rem;
   background-color: #fff;
   color:#045ed3;
   font-size: 2rem;
}
