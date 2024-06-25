<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Potion of Geralt</h1>
    <img src="https://static0.gamerantimages.com/wordpress/wp-content/uploads/2023/04/the-witcher-3-potions.jpg" alt="">
    <?php
    $name = "Cat is one of the potions witchers use most often. After imbibing it, the witcher is able to see in total darkness and will avoid being surprised by any nocturnal creatures. The potion allows its user to see both living creatures and those made of inanimate matter, even through walls.
    Cat slightly disrupts perception, however, as a result of which its user deals less damage to monsters. The Rook potion can be used to alleviate this side effect.
    Potion causes minor intoxication when imbibed.
    The Cat potion is recommended before entering a cave or a crypt, and before a midnight stroll through dangerous terrain.";
    echo $name;
    ?>
    <h3>length of the text: <?php echo strlen ($name); ?> <h3>  
    
</body>
</html>