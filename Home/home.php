<!DOCTYPE html>
<html>
<head>


    <link rel="stylesheet" href="../css/navigation.css">
    <link rel="stylesheet" href="../css/tooltip.css">
    <link rel="stylesheet" href="../css/body.css">
    <link rel="stylesheet" href="../css/who-we-are.css">
    <link rel="stylesheet" href="../css/videos.css">
    <link rel="stylesheet" href="../css/fonts.css">
    <link rel="stylesheet" href="../css/social-media-icons.css">
    <link rel="stylesheet" href="../css/popup-signin.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--font-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!--font-->

    <title>Home</title>
    <style>
        .material-icons {
            align-content: center;
            padding: 16.5px;
        }

        .datalist {
            padding: 20px;
        }

        /*footer*/
        .poster {
            width: 100px;
            height: 200px;
        }

        .card-footer {
            position: relative;
            height: 354px;
        }

        div.card-footer {
            width: auto;
            border-style: solid;
            border-color: red;
            float: left;
            background-color: white;
            margin: 30px 30px 30px 0px;
            margin-top: 60px;
        }


        .footer_subbody {
            background-color: black;
            width: 100%;
            height: 600px;
            margin-top: 40px;
            border: 0px none;
            margin-left: 0px;
            margin-right: 35px;
            /*margin-bottom: 30px;*/
        }



        .cards-footer-placement {
            margin-top: 30px;
            margin-left: 150px;
            width: 100%;
            background-color: black
        }



        .temperory {
            position: relative;
            background-color: orange;
            width: 300px;
            height: 1168px;
            margin-right: 50px;
            margin-top: -215px;
            margin-bottom: 0px;
            /*height: wrap;*/
            float: right;
            overflow: hidden;
            z-index: 0;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <div>
        <header class="main-head" style="background-color:black;">
            <a href="home.html" class="logo">Sozellio</a>
            <!--<h4 class="logo">Sozellio </h4>-->
            <!--<h3 class="tagline">Cook Yourself!</h3>-->


            <ul class="main-nav">
                <!--<li><a href="#" class="material-icons" src="breakfast_types/Parathas/parathas-body.html">person </a></li>-->
                <li class="tooltip">
                    <a href="#popup1" class="material-icons">person </a>
                    <span class="tooltiptext">
                        Sign In
                    </span>
                </li>






                <li class="datalist">
                    <form action="/action_page.php">
                        <input list="reciepies" placeholder="Search">
                        <datalist id="reciepies">
                            <option value="Chicken Karahi">
                            <option value="Supreme Pizza">
                            <option value="Italian Pasta">
                            <option value="Cherry and Chocolate Dessert Pot">
                            <option value="Thai Red Chicken">
                            <option value="Hyderabadi Chicken Biryani">
                            <option value="Suji ka Halwa">
                            <option value="Vegan Spicy Peanut Noodles">
                            <option value="Fajita Chicken Salad">
                            <option value="Italian Sausage Lasagna">
                            <option value="Desi Chicken Sizzler">

                        </datalist>
                        <!--<input type="Submit" value="Search" placeholder="Search">-->
                    </form>
                </li>
 <li><a href="home.html" >Social Media</a></li>
                <!--<li><a href="#">Sign In</a></li>-->

                <li class="dropdown">
                    <a href="">Meal Preference</a>



                    <ul class="drop-nav">
                        <li>
                            <a href="..\meal-preference\breakfast\breakfast_types\Parathas\nav-click-paratha.html">Breakfast</a>

                            <ul class="subdropdown">
                                <li><a href="..\meal-preference\breakfast\breakfast_types\Parathas\nav-click-paratha.html">Parathas</a></li>
                                <li><a href="..\meal-preference/breakfast/breakfast_types/Halwa Puri/nav-click-halwa puri.html">Halwa Puri</a></li>
                                <li><a href="..\meal-preference/breakfast/breakfast_types/Oatmeal/nav-click-oatmeal.html">Oatmeal </a></li>
                                <li><a href="..\meal-preference/breakfast/breakfast_types/Eggs/nav-click-eggs.html">Eggs</a></li>
                                <li><a href="..\meal-preference/breakfast/breakfast_types/Sandwiches/nav-click-sandwiches.html">Sandwiches </a></li>
                                <li><a href="..\meal-preference/breakfast/breakfast_types/Tea/nav-click-tea.html">Tea</a></li>
                            </ul>




                        <li>
                            <a href="..\meal-preference/lunch/lunch_types/bbq/nav-click-bbq.html">Lunch</a>
                            <ul class="subdropdown">
                                <li><a href="..\meal-preference/lunch/lunch_types/bbq/nav-click-bbq.html">BBQ</a></li>
                                <li><a href="..\meal-preference/lunch/lunch_types/burger/nav-click-burger.html">Burger</a></li>
                                <li><a href="..\meal-preference/lunch/lunch_types/chinese/nav-click-chinese.html">Chinese </a></li>
                                <li><a href="..\meal-preference/lunch/lunch_types/continental/nav-click-continental.html">Continental</a></li>
                                <li><a href="..\meal-preference/lunch/lunch_types/pizza/nav-click-pizza.html">Pizza </a></li>
                            </ul>




                        <li>
                            <a href="..\meal-preference/dinner/dinner_types/pasta/nav-click-pasta.html">Dinner</a>
                            <ul class="subdropdown">
                                <li><a href="..\meal-preference/dinner/dinner_types/pasta/nav-click-pasta.html">Pasta</a></li>
                                <li><a href="..\meal-preference/dinner/dinner_types/rice/nav-click-rice.html">Rice</a></li>
                                <li><a href="..\meal-preference/dinner/dinner_types/salad/nav-click-salad.html">Salad </a></li>
                                <li><a href="..\meal-preference/dinner/dinner_types/seafood/nav-click-seafood.html">Seafood</a></li>
                                <li><a href="..\meal-preference/dinner/dinner_types/thai/nav-click-thai.html">Thai</a></li>
                            </ul>


                    </ul>

                <li><a href="home.html">Home</a></li>

            </ul>
    </div>

    <!--Nav end-->
    <!---Pop up Sign In-->

    <div id="popup1" class="overlay">
        <div class="popup">
            <a class="close" href="#">&times;</a>

            <form class="modal-content" action="home.html">
                <div class="container">
                    <h1>Login</h1>
                    <hr>
                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Enter Email" name="email" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>

                    <label>
                        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                    </label>

                    <div class="clearfix">
                        <button type="submit" class="sign-in">Login</button>
                        <button type="button" class="log-in-button" onclick="location.href='sign in.html'">Sign Up</button>

                    </div>
                </div>
            </form>

        </div>
    </div>



    <!--Animations-->
    <!--Automatic Slide Show images-->

    <div>
        <div class="mySlides img-styling">
            <img src="images/backgroundAnimation/khana-12.png" alt="image" style="width:100%; height:650px" />

        </div>
        <div class="mySlides img-styling">
            <img src="images/backgroundAnimation/khana-13.png" alt="image" style="width:100%;height:650px" />

        </div>

        <div class="mySlides img-styling">
            <img src="images/backgroundAnimation/khana-17.png" alt="image" style="width:100%;height:650px" />

        </div>
        <div class="mySlides img-styling">
            <img src="images/backgroundAnimation/khana-19.png" alt="image" style="width:100%;height:650px" />

        </div>
        <div class="mySlides img-styling">
            <img src="images/backgroundAnimation/khana-20.png" alt="image" style="width:100%;height:650px" />

        </div>
    </div>


    <!--Who we are-->

    <div class="who">
        <p class="fonts">
            WHO WE ARE
        </p>
        <h2 class="fontss">
            Welcome!
        </h2>
        <p class="fontsss">
            We, the staff of <i><b>sozellio</b></i>, in reality students of <i>CS</i>, are here to provide the best of ways to make your day a creative and healthy one.
            So, try out our various newest recipes which will definitely surprise your palates in the most perfect way.
        </p>
    </div>

    <!--Who we are-->

    <div class="temperory">
        <h3 class="video-div-text">Your Favourites</h3>
        <video controls autoplay loop muted class="videos">
            <source src="../videos/left-favourites/tawa-chicken.mp4" type="video/mp4">
        </video>
        <!--<img   width="200" height="200" src="rice.png">-->
        <video controls autoplay loop muted class="videos">
            <source src="../videos/left-favourites/Kaleji.mp4" type="video/mp4">
        </video>
        <video controls autoplay loop muted class="videos">
            <source src="../videos/left-favourites/maza.mp4" type="video/mp4">
        </video>
        <video controls autoplay loop muted class="videos">
            <source src="../videos/left-favourites/parathas.mp4" type="video/mp4">
        </video>
        <video controls autoplay loop muted class="videos">
            <source src="../videos/left-favourites/Chicken-wings.mp4" type="video/mp4">
        </video>
    </div>



    <!--main body-->
    <div class="main-body-home">
        <div class="provide" style="margin-top:5px; font-weight: bold; margin-left:50px; font-size:30px;">
            Our Recipes:
        </div>

        <div class="card , zoom">
            <div class="header">
                <img class="image-bisma" src="images\home-body\desi1.jpg">
            </div>
            <div class="text">
               <!-- <a id="imp1"  href="#popup2">Chicken Karahi</a>-->
               <a id="imp1"  href="../../includes/home-body.php">Chicken Karahi</a>
            </div>
        </div>

        <!--   REcipie 
        <div id="popup2" class="overlay">
            <div class="popup">
                <a class="close" href="#">&times;</a>

                <table class="table">
                    <tr>
                        <td> <h2>Ingredients</h2></td>
                        <td>
                            <h2>How to Make Chicken Karahi</h2>
                            <b>1.</b>Knead the flour into a soft and pliable dough, with the water, cover and let rest for 30 minutes.
                        </td>
                    </tr>
                    <tr>
                        <td>2 Cups whole wheat flour</td>
                        <td><b>2.</b>  Make eight round and smooth balls.</td>
                    </tr>
                    <tr>
                        <td>To knead water</td>
                        <td><b>3.</b>  Roll into a round of about 1/4 cm/1/8" thickness.</td>
                    </tr>
                    <tr>
                        <td>1/2 cup ghee</td>
                        <td><b>4.</b>  Smear the surface of this round, with ghee. Fold in 1/2, smear the surface with ghee again, and make another fold, from corner to corner.</td>
                    </tr>
                    <tr>
                        <td>For dusting dry flour</td>
                        <td><b>5.</b>  Roll thinly, without tearing. Heat the tava and place one parantha on to it.</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><b>6.</b>  When the edges start lifting, slightly, smear some ghee over it letting it trickle under it.</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><b>7.</b>  Brown on both sides and serve hot.</td>
                    </tr>
                </table>




            </div>
        </div>-->

        <div class="card , zoom">
            <div class="header">
                <img class="image-bisma" src="images\home-body\img2.jpg">
            </div>

            <div class="text">
                <a href="">Supreme Pizza</a>
            </div>
        </div>



        <div class="card , zoom">
            <div class="header">
                <img class="image-bisma" src="images\home-body\img3.jpg">
            </div>

            <div class="text">
                <a href="">Italian Pasta</a>
            </div>
        </div>



        <div class="card , zoom">
            <div class="header">
                <img class="image-bisma" src="images\home-body\img4.jpg">
            </div>

            <div class="text">
                <a href="">Chocolate Dessert Pot</a>
            </div>
        </div>



        <div class="card , zoom">
            <div class="header">
                <img class="image-bisma" src="images\home-body\img5.jpg">
            </div>

            <div class="text">
                <a href="">Thai Red Chicken Soup</a>
            </div>
        </div>



        <div class="card , zoom">
            <div class="header">
                <img class="image-bisma" src="images\home-body\biryani.jpg">
            </div>

            <div class="text">
                <a href="">Hyderabadi Chicken Biryani</a>
            </div>
        </div>


        <div class="card , zoom">
            <div class="header">
                <img class="image-bisma" src="images\home-body\desi3.jpg">
            </div>

            <div class="text">
                <a href="">Suji ka Halwa</a>
            </div>
        </div>

        <div class="card , zoom">
            <div class="header">
                <img class="image-bisma" src="images\home-body\noodles.jpg">
            </div>

            <div class="text">
                <a href="">Vegan Spicy Peanut Noodles</a>
            </div>
        </div>

        <div class="card , zoom">
            <div class="header">
                <img class="image-bisma" src="images\home-body\fchickensala.jpg">
            </div>

            <div class="text">
                <a href="">Fajita Chicken Salad</a>
            </div>
        </div>


        <div class="card , zoom">
            <div class="header">
                <img class="image-bisma" src="images\home-body\desi4.jpg">
            </div>

            <div class="text">
                <a href="">Suji ka Halwa</a>
            </div>
        </div>




        <div class="card , zoom">
            <div class="header">
                <img class="image-bisma" src="images\home-body\italian2.jpg">
            </div>

            <div class="text">
                <a href="">Italian Lasagna</a>
            </div>
        </div>

        <!--<div class="card , zoom">
            <div class="header">
                <img class="image-bisma" src="images\home-body\italian2.jpg">
            </div>

            <div class="text">
                <a href="">Italian Lasagna</a>
            </div>
        </div>-->
        <!--<div class="card , zoom">
            <div class="header">
                <img class="image-bisma" src="images\home-body\italian2.jpg">
            </div>

            <div class="text">
                <a href="">Italian Lasagna</a>
            </div>
        </div>

        <div class="card , zoom">
            <div class="header">
                <img class="image-bisma" src="images\home-body\italian2.jpg">
            </div>

            <div class="text">
                <a href="">Italian Lasagna</a>
            </div>
        </div>

        <div class="card , zoom">
            <div class="header">
                <img class="image-bisma" src="images\home-body\italian2.jpg">
            </div>

            <div class="text">
                <a href="">Italian Lasagna</a>
            </div>
        </div>-->
        <!--<div class="vertical-Line-left"></div>-->

    </div>

    <div class="footer_subbody">
        <div class=" cards-footer-placement">
            <div class="card-footer">
                <img src="..\footer\images\mcdonalds.jpg" class="poster"
                     style="height:350px;
                        width:350px">
                <div class="details">

                </div>
            </div>

            <div class="card-footer">
                <img src="..\footer\images\howdy.jpg" class="poster" style="height:350px;
                        width:350px">
                <div class="details">
                    <!--<div class="info">
                        <h3>Address  </h3> <br>
                    </div>-->
                </div>
            </div>

            <div class="card-footer">
                <img src="..\footer\images\kfc.jpg" class="poster" style="height:350px;
                        width:350px">
                <div class="details">

                </div>
            </div>

            <h3> </h3>
        </div>
        <div class="socialmedia-icons">
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-youtube"></a>
            <a href="#" class="fa fa-instagram"></a>

        </div>

        <address class="contact">
            <br><br><br>
            Contact us: <a href="mailto:qain.bscs17seecs@seecs.edu.pk" style="color:white;">AJEEB</a>.<br>

        </address>
        <!--<div style="height:30px; background-color:black; width:100%;"> </div>-->

    </div>







    <!--main body-->

    <script>

        // Automatic Slideshow - change image every 4 seconds
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) { myIndex = 1 }
            x[myIndex - 1].style.display = "block";
            setTimeout(carousel, 5000);
        }
    </script>

</body>
</html>