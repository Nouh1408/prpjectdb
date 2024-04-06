<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shout it!</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
    <div id="container">
    <header>
        <h1>SHOUT IT! shoutbox</h1>
    </header>
        <div id="shouts">
            <ul>
            <li class="shout"><span>10:15 PM - </span> Ahmed: ya rab help me finish my projects</li>
            <li class="shout"><span>10:15 PM - </span> Ahmed: ya rab help me finish my projects</li>
            <li class="shout"><span>10:15 PM - </span> Ahmed: ya rab help me finish my projects</li>
            <li class="shout"><span>10:15 PM - </span> Ahmed: ya rab help me finish my projects</li>
            <li class="shout"><span>10:15 PM - </span> Ahmed: ya rab help me finish my projects</li>
            <li class="shout"><span>10:15 PM - </span> Ahmed: ya rab help me finish my projects</li>
            </ul>
        </div>
        <div id ="input">
            <form method="post" action="process.php">
                <input type="text" name="user" placeholder="Enter your name" />
                <input type="text" name="message" placeholder="Enter a message"/>
                <br />
                <input class ="shout-btn"type="submit" name="Submit" value="Shout-it out"/>
            </form>
    </div>
    
</body>
</html>