<!DOCTYPE HTML>

<html>

<head>
    <title>Contact me</title>
    <link rel='stylesheet' type="text/css" href='css/contact.css'>
    <link rel='stylesheet' type="text/css" href='css/menu.css'>
    <link rel='stylesheet' type="text/css" href='css/font-awesome.min.css'>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <!--    ANIMATE LIBRARY-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css" integrity="sha384-OHBBOqpYHNsIqQy8hL1U+8OXf9hH6QRxi0+EODezv82DfnZoV7qoHAZDwMwEJvSw" crossorigin="anonymous">
    <!--    JQUERY-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="viewport" content="width=590">
    
</head>

<body>
    <div class="preload" id="preload"></div>
    <div class="secondMenu" id="secondMenu">
        <input type="checkbox" />
        <span></span>
        <span></span>
        <span></span>
    </div>
    <div class="content" id='content'>
        <section class="contactSection">
            <div class="halfLeft">
                <div class="contactTitle">
                    <h2 class="animated fadeInLeft">Tell me how can I <span>help you</span></h2>
                    <p class="animated fadeInRight">And I will</p>
                </div>
                <form class="form" action='form.php' method='post'>
                    <input type="text" class='input' name='Name' required placeholder='Name'>
                    <input type="email" class='input' name='Email' required placeholder='Email'>
                    <input type="text" class='input' name='Phone' placeholder='Phone'>
                    <textarea class='input' name='Message' required placeholder='Message'></textarea>
                    <input type="submit" class='sendMessage' value='Send your S.O.S'>
                </form>
            </div>
            <div class="halfRight">
            </div>
        </section>
        <div class='menu display' id="menu"></div>
    </div>

    <script src="js/index.js"></script>
     <script type='text/javascript'>
        window.onload = detectarCarga;

        function detectarCarga() {
            setTimeout(function(){
                document.getElementById("preload").style.opacity = "0";
                document.getElementById("preload").style.zIndex = "0";
            },500)
        }
    </script>
</body>

</html>
