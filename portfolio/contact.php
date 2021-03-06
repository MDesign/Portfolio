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
            <div class="divError" id="divError">
                <div class="warnings">
                    <div class="close">X</div>
                    <div class="thanks">Thank you!</div>
                    <div class="text"></div>
                </div>
            </div>
            <div class="halfLeft">
                <div class="contactTitle">
                    <h2 class="animated fadeInLeft">Tell me how can I <span>help you</span></h2>
                    <p class="animated fadeInRight">And I will</p>
                </div>
                <form class="form" action='form.php' method='post' onsubmit="return formValidate();">
                    <input type="text" class='input' name='Name' placeholder='Name' autocomplete="off" id='nameForm'>
                    <input type="text" class='input' name='Email' placeholder='Email' autocomplete="off" id='emailForm'>
                    <input type="text" class='input' name='Phone' placeholder='Phone' autocomplete="off" id='phoneForm'>
                    <textarea class='input' name='Message' placeholder='Message' id='messageForm'></textarea>
                    <input type="submit" class='sendMessage' id='submit' value='Send your S.O.S' name='Submit'>
                </form>
            </div>
            <div class="halfRight">
            </div>
        </section>
        <div class='menu display' id="menu"></div>
    </div>

    <script src="js/index.js"></script>
    <script src="js/validate.js"></script>
    <script type='text/javascript'>
        window.onload = detectarCarga;

        function detectarCarga() {
            setTimeout(function() {
                document.getElementById("preload").style.opacity = "0";
                document.getElementById("preload").style.zIndex = "0";
            }, 500)
        }

    </script>
</body>

</html>
