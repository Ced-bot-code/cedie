<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="ico.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome :: Cedie Camomot</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://www.suncalc.org/scripts/somotools.min.js?v=1.4"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Ubuntu:wght@400;500;700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Assistant:wght@200..800&display=swap');

@font-face {
    font-family: CG_O;
    src: url(cgor45w.woff);
}

.f_cg_o{
    font-family: CG_O;
}

.f_consolas{
    font-family:Consolas;
}

.f_assistant{
    font-family: "Assistant", serif;
    font-optical-sizing: auto;
    font-style: normal; 
}

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
}
html{
    scroll-behavior: smooth;
}

/* custom scroll bar */
::-webkit-scrollbar {
    width: 10px;
}
::-webkit-scrollbar-track {
    background:rgb(192, 175, 175);
}

::-webkit-scrollbar-thumb {
    background: #888;
}

::-webkit-scrollbar-thumb:hover {
    background: #555;
}

/* all similar content styling codes */
section{
    padding: 100px 0;
}

.max-width{
    max-width: 1300px;
    padding: 0 80px;
    margin: auto;
}

.about, .services, .skills, .teams, .contact, footer{
    font-family: 'Assistant', sans-serif;
}

.about .about-content,
.services .serv-content,
.skills .skills-content,
.contact .contact-content{
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
}

section .title{
    position: relative;
    text-align: center;
    font-size: 40px;
    margin-bottom: 60px;
    padding-bottom: 20px;
}

section .title_bottom{
    position: relative;
    text-align: center;
    margin: 60px 0 0;
    /* padding-bottom: 20px; */
}

section .title::before{
    content: "";
    position: absolute;
    bottom: 0px;
    left: 50%;
    width: 180px;
    height: 3px;
    background: #111;
    transform: translateX(-50%);
}

section .title::after{
    position: absolute;
    bottom: -8px;
    left: 50%;
    font-size: 20px;
    color: crimson;
    padding: 0 5px;
    background: #fff;
    transform: translateX(-50%);
}

/* navbar styling */
.navbar{
    position: fixed;
    width: 100%;
    z-index: 999;
    padding: 30px 0;
    transition: all 0.3s ease;
}

.navbar.sticky{
    padding: 15px 0;
    background: #139adb;
}

.navbar .max-width{
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.navbar .logo a{
    color: #fff;
    font-size: 20px;
    cursor: pointer;
}

.navbar .logo a span{
    color: #0ced1e;
    transition: all 0.3s ease;
}

.navbar.sticky .logo a span{
    color: #fff;
}

.navbar .menu li{
    list-style: none;
    display: inline-block;
}

.navbar .menu li a{
    display: block;
    color: #fff;
    font-size: 16px;
    margin-left: 25px;
    transition: color 0.3s ease;
}

.navbar .menu li a:hover{
    color: #3eed14;
    cursor: pointer;
}

.navbar.sticky .menu li a:hover{
    color: #fff;
    cursor: pointer;
}

/* menu btn styling */
.menu-btn{
    color: #fff;
    font-size: 23px;
    cursor: pointer;
    display: none;
}

.scroll-up-btn{
    position: fixed;
    height: 45px;
    width: 42px;
    background: crimson;
    right: 30px;
    bottom: 10px;
    text-align: center;
    line-height: 45px;
    color: #fff;
    z-index: 9999;
    font-size: 30px;
    border-radius: 6px;
    border-bottom-width: 2px;
    cursor: pointer;
    opacity: 0;
    pointer-events: none;
    transition: all 0.3s ease;
}

.scroll-up-btn.show{
    bottom: 30px;
    opacity: 1;
    pointer-events: auto;
}

.scroll-up-btn:hover{
    filter: brightness(90%);
}


/* home section styling */
.home{
    display: flex;
    background: url("codes.jpg") no-repeat center;
    height: 100vh;
    color: #fff;
    min-height: 500px;
    background-size: cover;
    background-attachment: fixed;
    font-family: 'Ubuntu', sans-serif;
}

.home .max-width{
  width: 100%;
  display: flex;
}

.home .max-width .row{
  margin-right: 0;
}

.home .home-content .text-1{
    font-size: 20px;
}

.home .home-content .text-2{
    font-size: 75px;
    margin-left: -3px;
}

.home .home-content .text-3{
    font-size: 40px;
    margin: 5px 0;
}

.home .home-content .text-3 span{
    color: #00e7ff;
    font-weight: 500;
}

.classbox{
    position: relative;
    width: 200px;
    height: 90px;
    display: flex;
    justify-content: center;
    align-items: center;
    background: rgba(0, 0, 0, 0.5);
    overflow: hidden;
    border-radius: 25px;
    margin-top: 45px;
    cursor: pointer;
}

.classbox::before{
    content: '';
    position: absolute;
    width: 68px;
    height: 500%;
    border-radius: 0;
    background: linear-gradient(#00ccff,#d400d4);
    animation: animate-rotate 4s linear infinite;
   
}

.classbox::after{
    content: '';
    position: absolute;
    inset: 4px;
    background: #0e1538;
    /* background: crimson; */
    border-radius: 20px;
}

@keyframes animate-rotate {
    0%
    {
        transform: rotate(0deg);
    }
    100%
    {
        transform: rotate(360deg);
    }
}

.classbox a{
    text-decoration: none;
    color: #fff;
    font-size: 2em;
    z-index: 10;
    cursor: pointer;
}

/* about section styling */
.about .title::after{
    /* content: ""; */
}
.about .about-content .left{
    width: 45%;
}
.about .about-content .left img{
    height: 400px;
    width: 400px;
    object-fit: cover;
    border-radius: 6px;
}
.about .about-content .right{
    width: 55%;
}
.about .about-content .right .text{
    font-size: 25px;
    font-weight: 600;
    margin-bottom: 10px;
}
.about .about-content .right .text span{
    color: crimson;
}
.about .about-content .right p{
    text-align: justify;
}
.about .about-content .right a{
     display: inline-block;
    /* background: crimson; */
    color: crimson;
    font-size: 20px;
    font-weight: 500;
    padding: 10px 30px;
    margin-top: 20px;
    border-radius: 6px;

    border: 2px solid crimson;
    transition: all 0.3s ease-in-out; 
    
    
}
.about .about-content .right a:hover{
   color: white;
    background: crimson;

} 

.b_class_wh{
    background: #f1f1f1;
}

/* services section styling */
.services, .teams{
    color:#fff;
    background: #111;
}

.services .title::before,
.teams .title::before{
    background: #fff;
}
.services .title::after,
.teams .title::after{
    background: #111;
    /* content: "what i provide"; */
}

.container{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    padding: 40px 0;
    background: #111;
    cursor: pointer;
}

.container .box{
    position: relative;
    width: 320px;
    height: 400px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 40px 30px;
    transition: 0.5s;
}

.container .box::before{
    content: '';
    position: absolute;
    top: 0;
    left: 50px;
    width: 50%;
    height: 100%;
    background: #fff;
    border-radius: 8px;
    transition: 0.5s;
    transform: skewX(15deg);
}

.container .box::after{
    content: '';
    position: absolute;
    top: 0;
    left: 50px;
    width: 50%;
    height: 100%;
    background: #fff;
    border-radius: 8px;
    transition: 0.5s;
    transform: skewX(15deg);
    filter: blur(30px);
    transition: 0.5s;
}

.container .box:hover:before,
.container .box:hover:after{
    transform: skewX(0deg);
    left: 20px;
    width: calc(100% - 90px);
}

.container .box:nth-child(1):before,
.container .box:nth-child(1):after{
    background: linear-gradient(315deg,#ffbc00,#ff0058);
}

.container .box:nth-child(2):before,
.container .box:nth-child(2):after{
    background: linear-gradient(315deg,#03a9f4,#ff0058);
}

.container .box:nth-child(3):before,
.container .box:nth-child(3):after{
    background: linear-gradient(315deg,#4dff03,#00d0ff);
}

.container .box:nth-child(4):before,
.container .box:nth-child(4):after{
    background: linear-gradient(315deg,#eecda3 , #ef629f);
}

.container .box:nth-child(5):before,
.container .box:nth-child(5):after{
    background: linear-gradient(-315deg,#c33764 ,#1d2671);
}

.container .box:nth-child(6):before,
.container .box:nth-child(6):after{
    background: linear-gradient(315deg,#36d1dc ,#5b86e5);
}

.container .box .content{
    position: relative;
    left: 0;
    padding: 20px 40px;
    background:rgba(255, 255, 255, 0.05);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    backdrop-filter: blur(10ox);
    z-index: 1;
    transition: 0.5s;
    color: #fff;

}

.container .box:hover .content{
    left: -25px;
    padding:60px 40px ;
}

.container .box .content h2{
    font-size: 2em;
    color: #fff;
    margin-bottom: 10px;
}

.container .box .content p{
    font-size: 1.1em;
    margin-bottom: 10px;
    line-height: 1.4em;
    padding: 12px;
}

.container .box .content a{
    display: inline-block;
    font-size: 1.1em;
    color: #111;
    background: #fff;
    padding: 10px;
    border-radius: 4px;
    text-decoration: none;
    font-weight: 700;
    margin-top: 5px;
}

.container .box span{
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 50;
    pointer-events: none;
  
}

.container .box span::before{
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border-radius: 8px ;
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    opacity: 0;
    transition: 0.5s;
    animation: animate 2s ease-in-out infinite;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 05);
}

.container .box:hover #first::before {
    top: -50px;
    left: 50px;
    width: 100px;
    height: 100px;  
    opacity: 1;
    background: url("https://cdn.icon-icons.com/icons2/2334/PNG/512/pen_tool_anchor_point_design_icon_142354.png") no-repeat;
    background-size: 100px;
    background-position: center;
    filter:invert(100%);
}
.container .box:hover #second::before {
    top: -50px;
    left: 50px;
    width: 100px;
    height: 100px;  
    opacity: 1;
    background: url("https://cdn.icon-icons.com/icons2/1145/PNG/512/codeoutlinedprogrammingsigns_81143.png") no-repeat;
    background-size: 100px;
    background-position: center;
    filter:invert(100%);
}

.container .box:hover #third::before {
    top: -50px;
    left: 50px;
    width: 100px;
    height: 100px;  
    opacity: 1;
    background: url("https://cdn.icon-icons.com/icons2/2066/PNG/512/search_icon_125165.png") no-repeat;
    background-size: 100px;
    background-position: center;
    filter:invert(100%);
}

.container .box:hover #fourth::before {
    top: -50px;
    left: 50px;
    width: 100px;
    height: 100px;  
    opacity: 1;
    background: url("https://cdn.icon-icons.com/icons2/935/PNG/512/video-camera-outline_icon-icons.com_73112.png") no-repeat;
    background-size: 100px;
    background-position: center;
    filter:invert(100%);
}

.container .box:hover #fifth::before {
    top: -50px;
    left: 50px;
    width: 100px;
    height: 100px;  
    opacity: 1;
    background: url("https://cdn.icon-icons.com/icons2/620/PNG/512/bars-chart-ascending_icon-icons.com_56865.png") no-repeat;
    background-size: 100px;
    background-position: center;
    filter:invert(100%);
}

.container .box:hover #sixth::before {
    top: -50px;
    left: 50px;
    width: 100px;
    height: 100px;  
    opacity: 1;
    background: url("https://cdn.icon-icons.com/icons2/936/PNG/512/android-character-symbol_icon-icons.com_73684.png") no-repeat;
    background-size: 100px;
    background-position: center;
    filter:invert(100%);
}

.container .box span::after{
    content: '';
    position: absolute;
    bottom:  0;
    right: 0;
    width: 100%;
    height: 100%;
    border-radius: 8px ;
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    opacity: 0;
    transition: 0.5s;
    animation: animate 2s ease-in-out infinite;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 05);
    animation-delay: -1s;
}

.container .box:hover #sixth::after{
    bottom: -50px;
    right: 50px;
    width: 100px;
    height: 100px;  
    opacity: 1;
    background: url("https://cdn.icon-icons.com/icons2/936/PNG/512/android-character-symbol_icon-icons.com_73684.png") no-repeat;
    background-size: 100px;
    background-position: center;
}
.container .box:hover #fifth::after{
    bottom: -50px;
    right: 50px;
    width: 100px;
    height: 100px;  
    opacity: 1;
    background: url("https://cdn.icon-icons.com/icons2/620/PNG/512/bars-chart-ascending_icon-icons.com_56865.png") no-repeat;
    background-size: 100px;
    background-position: center;
}

.container .box:hover #fourth::after{
    bottom: -50px;
    right: 50px;
    width: 100px;
    height: 100px;  
    opacity: 1;
    background: url("https://cdn.icon-icons.com/icons2/935/PNG/512/video-camera-outline_icon-icons.com_73112.png") no-repeat;
    background-size: 100px;
    background-position: center;
}

.container .box:hover #third::after{
    bottom: -50px;
    right: 50px;
    width: 100px;
    height: 100px;  
    opacity: 1;
    background: url("https://cdn.icon-icons.com/icons2/2066/PNG/512/search_icon_125165.png") no-repeat;
    background-size: 100px;
    background-position: center;
}

.container .box:hover #second::after{
    bottom: -50px;
    right: 50px;
    width: 100px;
    height: 100px;  
    opacity: 1;
    background: url("https://cdn.icon-icons.com/icons2/1145/PNG/512/codeoutlinedprogrammingsigns_81143.png") no-repeat;
    background-size: 100px;
    background-position: center;
}

.container .box:hover #first::after{
    bottom: -50px;
    right: 50px;
    width: 100px;
    height: 100px;  
    opacity: 1;
    background: url("https://cdn.icon-icons.com/icons2/2334/PNG/512/pen_tool_anchor_point_design_icon_142354.png") no-repeat;
    background-size: 100px;
    background-position: center;
}

@keyframes animate{
    0%,100%
    {
        transform: translateY(10px);
    }
    50%
    {
        transform: translateY(-10px);
    }
}

/* skills section styling */

.skills .title::after{
    /* content: "what i know"; */
}
.skills .skills-content .column{
    width: calc(50% - 30px);
}
.skills .skills-content .left .text{
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 10px;
}
.skills .skills-content .left p{
    text-align: justify;
}
.skills .skills-content .left a{
    transition: 0.3s ease-in-out;
}
.skills .skills-content .left a:hover{
    color: white;
    background: #139adb;
}
.skills .skills-content .left p #link
{
    border: none;
    text-decoration: none;
    color: crimson;
}

.skills .skills-content .left p #link:hover
{
    color: crimson;
    /* text-transform: uppercase; */
    text-decoration: underline;
    background: none;
}
.skills .skills-content .right .bars{
    margin-bottom: 15px;
}
.skills .skills-content .right .info{
    display: flex;
    margin-bottom: 5px;
    align-items: center;
    justify-content: space-between;
}
.skills .skills-content .right span{
    font-weight: 500;
    font-size: 18px;
}
.skills .skills-content .right .line{
    height: 5px;
    width: 100%;
    background: lightgrey;
    position: relative;
}
.skills .skills-content .right .line::before{
    content: "";
    position: absolute;
    height: 100%;
    left: 0;
    top: 0;
    background: #ff7354;
}
.skills-content .right .html::before{
    width: 60%;
}
.skills-content .right .css::before{
    width: 50%;
}
.skills-content .right .js::before{
    width: 80%;
}
.skills-content .right .php::before{
    width: 75%;
}

.skills-content .right .mathjax::before{
    width:35%;
}

.skills-content .right .plotly_js::before{
    width: 25%;
}

.skills-content .right .mysql::before{
    width: 40%;
}


/* projects section styling */
.teams .title::after{
    /* content: "Projects Done"; */
}
.teams .carousel .card{
    background: #222;
    border-radius: 6px;
    padding: 25px 35px;
    text-align: center;
    overflow: hidden;
    transition: all 0.3s ease;
}

 .teams .carousel .card .box{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
}

.teams .carousel .card .text{
    font-size: 25px;
    font-weight: 500;
    margin: 10px 0 7px 0;
}
.teams .carousel .card img{
    height: 150px;
    width: 150px;
    object-fit: cover;
    border-radius: 50%;
    border: 5px solid #3f8cff;
    transition: all 0.3s ease;
}
.teams .carousel .card:hover img{
    border-color: #fff;
}
.owl-dots{
    text-align: center;
    margin-top: 20px;
}
.owl-dot{
    height: 13px;
    width: 13px;
    margin: 0 5px;
    outline: none!important;
    border-radius: 50%;
    border: 2px solid crimson!important;
    transition: all 0.3s ease;
}
.owl-dot.active{
    width: 35px;
    border-radius: 14px;
}
.owl-dot.active,
.owl-dot:hover{
    background: crimson!important;
}
.teams .carousel .card .box .project
{
    display: inline-block;
    color: crimson;
    font-size: 18px;
    font-weight: 500;
    padding: 8px 16px;
    margin-top: 20px;
    border-radius: 6px;
    border: 2px solid crimson;
    transition: 0.3s ease-in-out;
}
.teams .carousel .card .box .project:hover{
    color: white;
    background: crimson;
}
/* contact section styling */
input,textarea
{
    caret-color: red;
}
.contact .title::after{
    /* content: ""; */
}
.contact .contact-content .column{
    width: calc(50% - 30px);
}
.contact .contact-content .text{
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 10px;
}
.contact .contact-content .left p{
    text-align: justify;
}
.contact .contact-content .left .icons{
    margin: 10px 0;
}
.contact .contact-content .row{
    display: flex;
    height: 65px;
    align-items: center;
}
.contact .contact-content .row .info{
    margin-left: 30px;
}
.contact .contact-content .row i{
    font-size: 25px;
    color: #1489ed;
}
.contact .contact-content .info .head{
    font-weight: 500;
}
.contact .contact-content .info .sub-title{
    color: #333;
}
.contact .right form .fields{
    display: flex;
}
.contact .right form .field,
.contact .right form .fields .field{
    height: 45px;
    width: 100%;
    margin-bottom: 15px;
}
.contact .right form .textarea{
    height: 80px;
    width: 100%;
}
.contact .right form .name{
    margin-right: 10px;
}
.contact .right form .field input,
.contact .right form .textarea textarea{
    height: 100%;
    width: 100%;
    border: 1px solid lightgrey;
    border-radius: 6px;
    outline: none;
    padding: 0 15px;
    font-size: 17px;
    font-family: 'Poppins', sans-serif;
    transition: all 0.3s ease;
}
.contact .right form .field input:focus,
.contact .right form .textarea textarea:focus{
    border-color: #b3b3b3;
}
.contact .right form .textarea textarea{
  padding-top: 10px;
  resize: none;
}
.contact .right form .button-area{
  display: flex;
  align-items: center;
}
.right form .button-area button{
  color: crimson;
  display: block;
  width: 160px!important;
  height: 45px;
  outline: none;
  font-size: 18px;
  font-weight: 500;
  border-radius: 6px;
  cursor: pointer;
  flex-wrap: nowrap;
  border: 2px solid crimson;
  transition: all 0.3s ease-in-out;
}
.right form .button-area button:hover{
  color: white;
  background: crimson;
}
/* footer section styling */

footer{
    position: relative;
    width: 100%;
    background: #139adb;
    min-height: 100px;
    padding: 20px 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}

footer h2{
    margin-bottom: 12px;
    color: #fff;
    font-size: 2em;
}

#media {
    position: relative;
    display: flex;
    gap: 50px;
}
#media li{
    position: relative;
    list-style: none;
    width: 80px;
    height: 80px;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    transition: 0.5s;


}

#media  li a{
    position: relative;
    text-decoration: none;
    color: var(--clr);
    z-index: 10;
    font-size: 2em;
    transition: 0.5s ease-in-out;

}
#media  li:hover{
    z-index: 100000;
    transform: scale(0.75);
    transform: translateY(-10px);
}

#media  li::before{
    content: '';
    position: absolute;
    inset: 30px;
    box-shadow: 0 0 0 10px var(--clr),
    0 0 0 20px var(--bg),
    0 0 0 22px var(--clr);
    transition: 0.5s;
}

#media  li:hover::before{
  inset: 0px;
}

#media  li::after{
    content: '';
    position: absolute;
    inset: 0;
    background:var(--bg);
    transform: rotate(45deg);
}

footer p{
    color: #fff;
    text-align: center;
    margin-top: 15px;
    font-size: 1.1em;
}

footer p a{
    text-decoration: none;
    color: black;
    font-size: 1em;
    transition: 0.5s ease-in-out;
}

footer p a:hover{
    text-decoration: underline;
    color: rgb(5, 1, 1);
    font-size: 1.2em;
    transform: rotateX(10px);
}

footer .wave{
    position: absolute;
    top: -100px;
    left: 0;
    width: 100%;
    height: 100px;
    background: url("https://ftl.deekshith.eu.org/354310/None?hash=AgADY7");
    background-size: 1000px 100px;
}

footer .wave#wave1{
    z-index: 1000;
    opacity: 1;
    bottom: 0;
    animation: animatewave 4s linear infinite;
}

footer .wave#wave2{
    z-index: 999;
    opacity: 0.5;
    bottom: 10px;
    animation: animatewave_02 4s linear infinite;
}

footer .wave#wave3{
    z-index: 1000;
    opacity: 0.2;
    bottom:15px;
    animation: animatewave 3s linear infinite;
}

footer .wave#wave4{
    z-index: 999;
    opacity: 0.7;
    bottom: 20px;
    animation: animatewave_02 3s linear infinite;
}

@keyframes animatewave{
    0%
    {
        background-position-x: 1000px;
    }
    100%
    {
        background-position-x: 0px;
    }
}

@keyframes animatewave_02{
    0%
    {
        background-position-x: 0px;
    }
    100%
    {
        background-position-x: 1000px;
    }
}

/* pr loader design  */
#preloader{
    background:url("img/e3a.gif") no-repeat center ;
    background-size: 15%;
    filter: invert(100%);
    background-color: #fff;
    height: 100vh;
    width: 100%;
    position: fixed;
    cursor: pointer;
    z-index: 1000;
    /* border-radius: 12px; */
}
/* responsive media query start */
@media (max-width: 1104px) {
    .about .about-content .left img{
        height: 350px;
        width: 350px;
    }
}

@media (max-width: 991px) {
    .max-width{
        padding: 0 50px;
    }
}
@media (max-width: 947px){
    .menu-btn{
        display: block;
        z-index: 999;
    }
    .menu-btn i.active:before{
        content: "\f00d";
    }
    .navbar .menu{
        position: fixed;
        height: 100vh;
        width: 100%;
        left: -100%;
        top: 0;
        background: #111;
        text-align: center;
        padding-top: 80px;
        transition: all 0.3s ease;
    }
    .navbar .menu.active{
        left: 0;
    }
    .navbar .menu li{
        display: block;
    }
    .navbar .menu li a{
        display: inline-block;
        margin: 20px 0;
        font-size: 25px;
    }
    .home .home-content .text-2{
        font-size: 70px;
    }
    .home .home-content .text-3{
        font-size: 35px;
    }
    .home .home-content a{
        font-size: 23px;
        padding: 10px 30px;
    }
    .max-width{
        max-width: 930px;
    }
    .about .about-content .column{
        width: 100%;
    }
    .about .about-content .left{
        display: flex;
        justify-content: center;
        margin: 0 auto 60px;
    }
    .about .about-content .right{
        flex: 100%;
    }
    .services .serv-content .card{
        width: calc(50% - 10px);
        margin-bottom: 20px;
    }
    .skills .skills-content .column,
    .contact .contact-content .column{
        width: 100%;
        margin-bottom: 35px;
    }
}

@media (max-width: 690px) {
    .max-width{
        padding: 0 23px;
    }
    .home .home-content .text-2{
        font-size: 50px;
    }
    .home .home-content .text-3{
        font-size: 32px;
    }
    .home .home-content a{
        font-size: 20px;
    }
    .classbox
    {
            width: 153px;
            height: 88px;
    }
    .services .serv-content .card{
        width: 100%;
    }
}

@media (max-width: 500px) {
    .home .home-content .text-2{
        font-size: 50px;
    }
    .home .home-content .text-3{
        font-size: 27px;
    }
    .about .about-content .right .text,
    .skills .skills-content .left .text{
        font-size: 19px;
    }
    .contact .right form .fields{
        flex-direction: column;
    }
    .contact .right form .name,
    .contact .right form .email{
        margin: 0;
    }
    .right form .error-box{
       width: 150px;
    }
    .scroll-up-btn{
        right: 15px;
        bottom: 15px;
        height: 38px;
        width: 35px;
        font-size: 23px;
        line-height: 38px;
    }
}

    </style>
</head>
<body>
    <!-- pre loader  -->
     <div id="preloader"></div>
        <nav class="navbar">
            <div class="max-width">
                <div class="logo f_cg_o">
                    <a href="#"><span>Cedie</span> Camomot</a>
                </div>
                <ul class="menu f_assistant">
                    <li><a href="#home" class="menu-btn">Home</a></li>
                    <li><a href="#about" class="menu-btn">About</a></li>
                    <li><a href="#services" class="menu-btn">Services</a></li>
                    <li><a href="#skills" class="menu-btn">Skills</a></li>
                    <li><a href="#teams" class="menu-btn">Works</a></li>
                    <li><a href="#contact" class="menu-btn">Contact</a></li>
                </ul>
                <div class="menu-btn">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </nav>

        <!-- home section start -->
        <section class="home" id="home">
            <div class="max-width">
                <div class="home-content f_cg_o">
                    <div class="text-1">Hello, my name is</div>
                    <div class="text-2">Cedie Camomot</div>
                    <div class="text-3">And I'm <span class="typing f_consolas"></span></div>
                </div>
            </div>
        </section>

        <!-- about section start -->
        <section class="about b_class_wh" id="about">
            <div class="max-width">
                <h2 class="title f_assistant">About me</h2>
                <div class="about-content">
                    <div class="column left">
                        <img src="me.jpg" alt="img">
                    </div>
                    <div class="column right f_assistant">
                        <div class="text">I'm Cedie Camomot and I'm <span class="typing-2 f_consolas"></span></div>
                        <p>A self-taught web developer and designer. Planning and producing real-life, realistic forms. Also a street tutor. Looking for a career in web development and design, well specialize in backend development. Also proficient in most prominent programming or scripting languages such as PHP, MariaDB, and JavaScript, with a strong background in project management and customer relations. Mostly focused on server programming languages such as PHP and developing a functional layouts for convenient user experience.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- services section start -->
         <section class="services" id="services">
            <div class="max-width">
                <h2 class="title f_assistant">My services</h2>
                <div class="serv-content">
                </div>
            </div>
        <div class="container">
            <div class="box">
                <span id="first"> </span>
                <div class="content">
                    <h2>Designer</h2>
                    <p>I am a Fresher web designer. I have make different design with different ideas. I today's rat race new fresher have more mind blowing ideas with more expoloring ideas.</p>
                </div>
            </div>
            <div class="box">
                <span id="second"></span>
                <div class="content">
                    <h2>Development</h2>
                    <p>In this digital world. I help people in build there business and brand digitally which helps in the many thing like:Brand building, more seling etc.</p>
                </div>
            </div>
        </div>
    </section>

        <!-- skills section start -->
        <section class="skills" id="skills">
            <div class="max-width">
                <h2 class="title">My skills</h2>
                <div class="skills-content">
                    <div class="column left">
                        <div class="text">Creative skills & experiences.</div>
                        <p>Since of my college days I start accepting CAPSTONE projects and other web projects until now from some students and also other individuals until now as a part of my building of my expertise and also teaching a basic coding for their startup learning. I collaborated also with talented people to create web products for both business, consumer, educational use.
                            <br><br>
                            I create and develop a responsive websites for their projects with a nice and convenient user experience fast and fluid build with the best practice and art. Main building blocks of my development is pure PHP and JavaScript for my best quality functions. For Front-End development sometimes I use Bootstrap additional user experience.
                            <br><br>
                            
                            Visit my Github <a href="https://github.com/Ced-bot-code" target="_blank" 
                            >Ced-bot-code</a> for more details.
                        </p>
                    </div>
                    <div class="column right">
                        <div class="bars">
                            <div class="info">
                                <span>JavaScript</span>
                                <span>80%</span>
                            </div>
                            <div class="line js"></div>
                        </div>
                        <div class="bars">
                            <div class="info">
                                <span>PHP</span>
                                <span>75%</span>
                            </div>
                            <div class="line php"></div>
                        </div>
                        <div class="bars">
                            <div class="info">
                                <span>HTML</span>
                                <span>60%</span>
                            </div>
                             <div class="line html"></div>
                        </div>
                        <div class="bars">
                            <div class="info">
                                <span>CSS</span>
                                <span>50%</span>
                            </div>
                             <div class="line css"></div>
                        </div>
                        <div class="bars">
                            <div class="info">
                                <span>MariaDB</span>
                                <span>40%</span>
                            </div>
                             <div class="line mysql"></div>
                        </div>
                        <div class="bars">
                            <div class="info">
                                <span>MathJax</span>
                                <span>35%</span>
                            </div>
                             <div class="line mathjax"></div>
                        </div>
                        <div class="bars">
                            <div class="info">
                                <span>Plotly.JS</span>
                                <span>25%</span>
                            </div>
                             <div class="line plotly_js"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- project section start -->
        <section class="teams" id="teams">
            <div class="max-width">
                <h2 class="title">My Projects</h2>
                <div class="carousel owl-carousel">
                    <div class="card">
                        <div class="box">
                            <img src="https://cdn-icons-png.flaticon.com/512/7553/7553260.png" alt="img">
                            <div class="text">Voting system for SSG Election</div>
                            <p>A web-based application for handling, gathering, and processing for election responses such as votes, ballot records, and student's voters information.</p>
                            <?php
                            /*
                            <!-- <a href="https://apps.pfcrestaurant.com.np/" class="project" target="_blank">View Project</a> -->
                            */?>
                        </div>
                    </div>
                    <div class="card">
                        <div class="box">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRxiP34bHzYvZ6GJA2yyLVOUAcNio9VT3XBkQ&s" alt="img">
                            <div class="text">Lunarlib</div>
                            <p>A library for app integration for Lunar enthusiasts. (<i>Development ongoing</i>)</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="box">
                            <img src="https://cdn-icons-png.flaticon.com/512/10480/10480648.png" alt="img">
                            <div class="text">Solarlib</div>
                            <p>A library for app integration for Solar enthusiasts. (<i>Development ongoing</i>)</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="title_bottom">
                LST: 0h0m0s | Moon age: 0d 0h 0m 0s | Sun forcast: Rise at 5:23:44 AM Noon will be at 12:00:00 PM Set at 5:33:29 PM<br>

            </div>
        </section>

        <!-- contact section start -->
        <section class="contact" id="contact">
            <div class="max-width f_assistant">
                <h2 class="title">Contact me</h2>
                <div class="contact-content">
                    <div class="column left">
                        <div class="text">Get in Touch</div>
                        <p>If you are interested in working together? Please fill out the form aside with some info about your project and I will get back to you as soon as I can. Please allow a couple days for me to respond.</p>
                        <div class="icons">
                            <div class="row">
                                <i class="fas fa-user"></i>
                                <div class="info">
                                    <div class="head">Name</div>
                                    <div class="sub-title">Cedie V. Camomot</div>
                                </div>
                            </div>
                            <div class="row">
                                <i class="fas fa-map-marker-alt"></i>
                                <div class="info">
                                    <div class="head">Address</div>
                                    <div class="sub-title">Tugas, Bolinawan, Carcar City, Cebu</div>
                                </div>
                            </div>
                            <div class="row">
                                <i class="fa-brands fa-facebook-f"></i>
                                <div class="info">
                                    <div class="head">Facebook</div>
                                    <div class="sub-title">
                                        <a href="https://www.facebook.com/proof.newton.2024/">
                                            Proof Newton
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <i class="fas fa-envelope"></i>
                                <div class="info">
                                    <div class="head">Email</div>
                                    <div class="sub-title"><a href="mailto:cedcamomot@gmail.com">cedcamomot@gmail.com</a></div>
                                </div>
                            </div>
                            <div class="row">
                            <i class="fa fa-mobile"></i>
                                <div class="info">
                                    <div class="head">Mobile</div>
                                    <div class="sub-title"><a href="tel:+639106036207">(+63) 0910 603 6207</a></div>
                                </div>
                            </div>
                            <div class="row">
                                <i class="fa-brands fa-github"></i>
                                <div class="info">
                                    <div class="head">Github</div>
                                    <div class="sub-title"><a href="https://github.com/Ced-bot-code">Ced-bot-code</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column right">
                        
                    </div>
                </div>
            </div>
        </section>

        <!-- footer section start -->
    
        <footer class="f_assistant">
            <div class="waves">
                <div class="wave" id="wave1"></div>
                <div class="wave" id="wave2"></div>
                <div class="wave" id="wave3"></div>
                <div class="wave" id="wave4"></div>
            </div>

            <p>&copy; <?= date("Y");?> Cedie Camomot. All rights reserved.</p>
        </footer>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script src="script.js"></script>
        <!-- scroll bar js  -->
        <script type="text/javascript">
            var preogressbar = document .getElementById("preogressbar")
            var percent = document .getElementById("percent")

            var totalHeight = document .body.scrollHeight - window.innerHeight;
            window.onscroll = function(){
                var progress =( window.pageYOffset / totalHeight) * 100;
                preogressbar.style.height = progress + "%";
                percent.innerHTML = "Page Scrolled " + Math.round(progress)+ "%"
            }
        </script>
    <!-- pre loader js  -->
      <script>
          var loader = document .getElementById("preloader");

          window.addEventListener("load", function(){
             loader.style.display = "none";
          })
      </script>
      <script>
        $(document).ready(function(){
            $(window).scroll(function(){
                // sticky navbar on scroll script
                if(this.scrollY > 20){
                    $('.navbar').addClass("sticky");
                }else{
                    $('.navbar').removeClass("sticky");
                }

                // scroll-up button show/hide script
                if(this.scrollY > 500){
                    $('.scroll-up-btn').addClass("show");
                }else{
                    $('.scroll-up-btn').removeClass("show");
                }
            });

            // slide-up script
            $('.scroll-up-btn').click(function(){
                $('html').animate({scrollTop: 0});
                // removing smooth scroll on slide-up button click
                $('html').css("scrollBehavior", "auto");
            });

            $('.navbar .menu li a').click(function(){
                // applying again smooth scroll on menu items click
                $('html').css("scrollBehavior", "smooth");
            });

            // toggle menu/navbar script
            $('.menu-btn').click(function(){
                $('.navbar .menu').toggleClass("active");
                $('.menu-btn i').toggleClass("active");
            });

            // typing text animation script
            var typed = new Typed(".typing", {
                strings: ["a web developer","a Front-End developer", "a freelancer","a musician", "an astronomer"],
                typeSpeed: 100,
                backSpeed: 60,
                loop: true
            });

            var typed = new Typed(".typing-2", {
                strings: ["a web developer","a Front-End developer", "a freelancer","a musician", "an astronomer"],
                typeSpeed: 100,
                backSpeed: 60,
                loop: true
            });

            // owl carousel script
            $('.carousel').owlCarousel({
                margin: 20,
                loop: true,
                autoplay: true,
                autoplayTimeOut: 2000,
                autoplayHoverPause: true,
                responsive: {
                    0:{
                        items: 1,
                        nav: false
                    },
                    600:{
                        items: 2,
                        nav: false
                    },
                    1000:{
                        items: 3,
                        nav: false
                    }
                }
            });
        });
    </script>
</body>
</html>
