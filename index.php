<!-- 
Outsize.net 
Garrett Lew
May 22 2018
-->

<!DOCTYPE php>
<html>
    <head>
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Outsize landing page.">
        <meta name="keywords" content="outsize, clothing, size">
        <meta name="author" content="Garrett Lew, Jared <last name>">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>OutSize&trade; | Landing</title>

        <link rel="stylesheet" type="text/css" href="./css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">


<!--         <link rel="preload" href="img/showcase.jpg" as="image">
        <link rel="preload" href="img/measure.jpg" as="image">
        <link rel="preload" href="img/match.jpg" as="image">
        <link rel="preload" href="img/package.jpg" as="image">
        <link rel="preload" href="img/computer.jpg" as="image"> -->

    </head>
    <body>

        <header id="showcase">

            <h1>Welcome</h1>
            <p>Making Style Easy With OutSize&trade;.</p>
            <section class="form">

                <p style="font-size: 32px;">Let's Get Started</p>
                
                <div class = "row justify-content-center" style="margin: 10px;">
                    
                    <div class="col-md-6 col-md-offset-3" align="center"></div>

                    <form method="POST" action="includes/signup.inc.php">
                        <input class="form-control" type="text" name="name" placeholder="First Name...">
                        <br>  
                        <input class="form-control" type="email" name="email" placeholder="Email...">
                        <br>  
                        <input class='btn btn-primary' id='button' type="submit" name="submit" value="Start Sizing Today">
                    </form>

                </div>       

            </section>

        </header>

        <section id="section-a">
            <img src="img/measure.jpg" style="display:none;">
            <h1>Measure.</h1>
        </section>

        <section id="section-b">
            <img src="img/match.jpg" style="display:none;">
            <h1>Match.</h1>
        </section>

        <section id="section-c">
            <img src="img/package.jpg" style="display:none;">
            <h1>Mail.</h1>
        </section>

        <section id="section-d">
            <img src="img/computer.jpg" style="display:none;">
            <div class='block'>
                <h1>Stop going to stores to find your size.</h1>
            </div>

            <div class="form">

                <div class = "row justify-content-center" style="margin: 10px;">

                    <p>Let's Get Started</p>
                    
                    <div class="col-md-6 col-md-offset-3" align="center"></div>

                    <form method="POST" action="includes/signup.inc.php">
                        <input class="form-control" type="text" name="name" placeholder="First Name..." id="margin-10"> 
                        <p></p>
                        <input class="form-control" type="email" name="email" placeholder="Email..."> <br> 
                        <input class='btn btn-primary' id='button' type="submit" name="submit" value="Start Sizing Today">
                    </form>

                </div> 

            </div>

        </section>

        <section id="info">
            <div class="box">
                <h3>Why OutSize&trade;</h3>
                <p>Until now, you were faced with two options: shopping online with inaccurate sizing and limited selection, or driving to a physical store with more options to try the clothes on with outsize.net, we allow you to:</p>
                <ul>
                    <li>Purchase your clothes without fear of poor sizing or fit.</li>
                    <li>Browse a wide selection of clothing spanning a variety of major and local brands.</li>
                    <li>Access our selection with an easy-to-navigate, apparel-centric layout.</li>
                </ul>
            </div>
            <div class="box">
                <h3>About Us</h3>
                <p>OutSize&trade; was founded by a diverse group of students from California Polytechnic University San Luis Obispo—a consistent top ranking undergraduate university. Our company stems from the same tech that was featured recently in The New York Times and that birthed flourishing companies such as MindBody and ThoughtSpot.</p>
            </div>

        </section>
        <footer>
            <p>OutSize&trade; | Landing, Copyright &copy; 2018</p>
        </footer>

       

    </body>
</html>