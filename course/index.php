<html>
    <link rel="icon" href="stacked-up.jpg">
<link rel="stylesheet" href="style.css">
<title>What's Up</title>
<body class="body">
    <header class="placed">
        <h1 class="title" title = "Respect the dude">Rick's ☕ PHP</h1>

        <div class="dark-mode">
        </div>
    </header>

    

<div class="about-me">
<div class="hello-rick">
        <div class="hello">HELLO</div>
        <div class="ricko">RICKO</div>
    </div>
    <?php 
    echo "<img src='bear_diaries.webp' alt='picture of a bear'> \n <br>";
    $Title = "God's Child";
    $string = 'PHP';
    $boolean = true;
    $number = 10;

    // Arrays are indicated with round brackets in PHP
    $snacks = array("<img src = 'Doughnut.jfif'>", "<img src = 'MilkShake.jfif'>", "<img src = 'Jollof.jfif'>", "<img src = 'pancakes.jfif'>", "<img src = 'Keros.jfif'>");

    

    echo "I'm $Title" . "\n <br /> ";

    echo "
    
    Hi $string ! <br />\n Are you tasking $boolean<br />\n do i like it $boolean  
    ";

    echo "
    <br /> 
    <p class = 'bite'>I like snacks likes:</p>
    
    ";
    
    // if(){}

    // THIS LOOPS THROUGH AN ARRAY OF IMAGES

    for($name = 0; $name < count($snacks); $name ++){
        echo "<br /> \n $snacks[$name]<br /> \n";
}
    ?>
    </div>
    </body>
    <script src="snug.js"></script>
</html>