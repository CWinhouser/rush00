<!DOCTYPE html>
<html>
<head>
    <TITLE>AK ltd.</TITLE>
<style>
.topbar {
    position: absolute;
    height: 80px;
    top: 0;
    width: 1900px;
    background-color: rgba(161, 52, 52, 0.61);
}    

.register{
    position: absolute;
    margin-left: 1732px;
    margin-top: 20px;
    width: 150px;
    height: 30px;
    font-weight: bold;
    font-style: oblique;
    color: white;
    text-align: center;
} 

.login {
    position: absolute;
    margin-top: 20px;
    margin-left: 1150px;
}

.logo {
    position: absolute;
    height: 80px;
    width: 80px;
    background-image: url("logo.png");
}

.cart {
    position: absolute;
    height: 80px;
    width: 80px;
    margin-left: 100px;
    background-image: url("../Cart.png");
    background-size: 80px 80px;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 200px;
    background-color: #f1f1f1;
}

li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}

li a.active {
    background-color: rgba(76, 86, 175, 0.61);
    color: white;
}

li a:hover:not(.active) {
    background-color: rgb(23, 36, 216);
    color: white;
}

.categories{
    position: absolute;
    margin-left: 0px;
    width: 300px;
    height: 300px;
}

.box1{
    position: absolute;
    width: 400px;
    height: 400px;

}
.box2{
    position: absolute;
    margin-left: 400px;
    margin-top: 0px;
    width: 400px;
    height: 400px;
}
.box3{
    position: absolute;
    margin-left: 800px;
    margin-top: 0px;
    width: 400px;
    height: 400px;
}
.box4{
    position: absolute;
    margin-top: 400px;
    width: 400px;
    height: 400px;
}
.box5{
    position: absolute;
    margin-top: 400px;
    margin-left: 400px;
    width: 400px;
    height: 400px;
}
.box6{
    position: absolute;
    margin-top: 400px;
    margin-left: 800px;
    width: 400px;
    height: 400px;
}

.parent {
    position: sticky;
    margin-top: 100px;
    text-align: center;
    margin-left: 400px;
    width: 1200px;
    height: 800px;
}

</style>
</head>
<body>
<div class="topbar">
    <div class="register">
           <a class="center" href="register.php">Register Today!</a>
    </div>
   <div class="logo"></div>
   <div class="cart"></div>
   <form class="login" action="../login.php" method="POST">
        Username: <input type="text" name="login">
        Password: <input class="pw" type="password" name="pass">
        <input type="submit" value="login">
    </form>
</div>
<div class="categories">
    <ul>
    <li><a>Mens</a></li>
    <li><a>Women</a></li>
    <li><a>Shoes</a></li>
    <li><a>Pants</a></li>
    <li><a>Shirts</a></li>
    <li><a>Cart</a></li>
    </ul>
</div>
<div class="parent">
    <div class="box1"><img src="https://ae01.alicdn.com/kf/HTB1z.npPpXXXXcXXVXXq6xXFXXXa/Special-price-new-men-coat-New-Zealand-calfskin-leather-male-models-Motorcycle-casual-leather-jacket-free.jpg_640x640.jpg" alt="Male Model" width="400" height="400"></div>
    <div class="box2"><img src="http://4.bp.blogspot.com/-A32qvFQx0r4/U3fC7yIe1NI/AAAAAAAACzY/Oe977xFSv3Q/s1600/women+clothing+models+%25282%2529.jpg" alt="Feale Model" width="400" height="400"></div>
    <div class="box3"><img src="https://assets.adidas.com/images/w_600,f_auto,q_auto/a5f63f2948eb4ead81d1a5790009511a_9366/Pro_Model_Shoes_Black_S85957_01_standard.jpg" alt="Feale Model" width="400" height="400"></div>
    <div class="box4"><img src="https://media.frenchconnection.com/ms/fcuk/54fcf/1537/1024/colourful-track-pants.jpg?404=fcuk/54fcf.jpg" alt="Feale Model" width="400" height="400"></div>
    <div class="box5"></div>
    <div class="box6"><img src="https://mms-images.out.customink.com/mms/images/catalog/styles/286800/catalog_detail_image_large.jpg" alt="Feale Model" width="400" height="400"></div>
</div>
</body>
</body>
</html>