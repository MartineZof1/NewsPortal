<!DOCTYPE html>
<html>
    <head>
        <title> Games </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel= "stylesheet" type ="text/css" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
        <meta charset="utf-8">

    </head>
    <body>

        <nav class="one">
            <ul class="topmenu">
                <li><a href="./">Home</a></li>
                <li><a href="all">News<i class="fa fa-angle-down"></i></a>
                </li>
                <li><a href="info">Info</a></li>
                
                <!-- <li><a href="registerForm">Register</a></li> -->
                <div class="pull-right">
                    <li>
                        <form action="search">
                            <input type="text" name="otsi">
                            <input type="submit" value="otsi">
                        </form>
                    </li>
                </div>
            </ul>			
        </nav>
        <section>
            <div class = 'divBox'>
                <?php
                if (isset($content)) {
                    echo $content;
                } else {
                    echo '<h1>Content is gone!</h1>';
                }
                ?>
            </div>
        </section>
        <div >
            <p class="footer">top Games</p>

        </div>
    </body>
</html>