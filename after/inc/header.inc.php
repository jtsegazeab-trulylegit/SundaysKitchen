<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.min.css">
    <link rel="stylesheet" href="styles/custom.css">


    <title>Sunday's Kitchen <?php if (!empty($pageTitle)) : ?> &bull; <?php echo $pageTitle;?> <?php endif; ?> </title>
   


    
</head>
<body>

    <?php if (!isset($headerImg) || empty($headerImg)) { 
        $headerImg =  'images/default.jpg'; 
    } ?> 

    <header class="header-with-background" style="background-image: url(<?php echo $headerImg; ?>); " > 
        <h1>Sunday's Kitchen</h1>
        <p>Your sanctuary for excpetional flavors</p>

<!-- Now that the header is in different file, you can change the naviagtion once (in this file) and 
    all other files that contain this header will also display the same navigation --> 

<!-- This is all good and all, but now notice how the title and the header image does not change 
    respective to which site is being selected ... perhaps we can use variables to fix this issue-->
        <nav>

            <a <?php if ($pageKey == 'mission'):?>class="active"<?php endif; ?> href="our-mission.php" style="text-decoration: none">Our Mission</a>
            <a <?php if ($pageKey == 'ingredients'):?>class="active"<?php endif; ?> href="ingredients.php" style="text-decoration: none" >Our Ingredients</a>
            <a <?php if ($pageKey == 'menu'):?>class="active"<?php endif; ?> href="menu.php" style="text-decoration: none" >Menu</a>
        </nav>
    </header>

    <main> 
        