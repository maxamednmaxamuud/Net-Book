
<?php

if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
    // since the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to index
    session_unset();
    session_write_close();
}

?>



<html>
<head>
<title>home page</title>
<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.header{
    height: 90px;
    width: 100%;
    background-color: FF7B54;
    position: fixed;
}
.logo{
    height: 100%;
    width: 360px;
    float: left;
    
}
.p1{
    margin-top:40px ;
    font-size: 32px;
    max-width: 40px;
    margin-left: 30px;
    text-transform: capitalize;
}
span{
    color: red;
}
.menu{
    height: 100%;
    width: 610px;
    float: right;

}
.menu ul{
    margin-top: 40px;
    display: flex;
    
}
.menu ul li{
    list-style: none;
    
}
.menu ul li a{
    text-decoration: none;
    text-transform: uppercase;
    margin-left: 20px;
    font-size: 23px;
    color: white;
}
#hero{
    height: 500px;
    background-image: url('hero.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    opacity: 100%;
}
#service{
    height: 1300px;
    
    background-color: ff7B54;
}
.p2{
    
    text-align: center;
    font-size: 38px;
    font-weight: bold;
    padding-top: 30px;
}
.border{
    background-color: white;
    height: 1000px;
    width: 85%;
    margin-top: 30px;
    margin-left: 50px;
}
img{
    height: 500px;
    width: 80%;
    margin-left: 80px;
    margin-top: 30px ;
}
img:hover{
    box-shadow: 10px 10px 20px;
}
.p3{
    padding-top: 45px;
    text-align: center;
    font-size: 28px;
    font-weight: bold;
}
.btn{
    margin-left: 340px;
    margin-top: 40px;
    font-size: 53px;
    height: 70px;
    width: 150px;
    background: wheat;

}
.btn {
    text-decoration: none;
    
}
#contact{
    height: 200px;
    background-color: black;
    position: relative;
    top: 0px;
}
.p4{
    
    text-align: center;
    font-size: 38px;
    font-weight: bold;
    
}
.p5{
    color: white;
    font-size: 28px;
}
</style>

</head>
<body>
<div class="header">
<div class="logo">
<p class="p1"><span>net</span>book</p></div>
<div class="menu">
<ul>
<li><a href="#hero">home</a></li>
<li><a href="#service">service</a></li>
<li><a href="#contact">contact</a></li>
<li><a href="logout.php">logout</a></li>
</ul>
</div>
</div>
<div id="hero"></div>
<div id="service">
    <p class="p2">services</p>
<div class="border books">
<img src="books.jpg">
<p class="p3">welcome to digital books</p>
<a class="btn"href="books.php">enter</a
>
</div>

</div>
<div id="contact">
    <p class="p4">contact</p>
    <p class="p5">creater by eng mohamed mohamuud</p>
    <p class="p5">location:mogadisho somali</p>
    <a class="p5"href="https://whatsapp.com/dl/">whatsapp:682615721</a>
</div>
</body>