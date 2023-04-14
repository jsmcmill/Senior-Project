?>

    <?php

    if($_POST["message"]){
        mail("jmcmillon002@my.wilmu.edu", "Subject Line",
        $_POST["insert your message here"]. "From: ");
    }
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <title>Pandemics</title>
</head>

<body>
    <header>
        <section id="home">
            <div class="table">

                <h1>Pandemics</h1>
                <ul style="list-style-type: none;" id="main-nav" class="container">
                    <li class="item-1 item"><a href="index.html">HOME</a></li>
                    <li class="item-2 item"><a href="Pandemics.html">PANDEMICS</a></li>
                    <li class="item-3 item"><a href="resources.html">RESOURCES</a></li>
                    <li class="item-4 item"><a href="#contact">CONTACT</a></li>
                </ul>
            </div>
        </section>
    </header>

<form method="post" action="subscriberform.php">


<textarea name="message"></textarea>


<input type="submit">


</form>
    
</body>
