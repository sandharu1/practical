<h1>test</h1>
<form action="../functions/functions.php" method="POST">
<label>name:</label>
<input type="text" name="name">

<label>password:</label>
<input type="password" name="password">

<label>email:</label>
<input type="email" name="email">

<input type="submit" name="createuser">	
</form>

<hr>
<h2>User login</h2>
<form action="../functions/functions.php" method="POST">

<label>email:</label>
<input type="email" name="email">

<label>password:</label>
<input type="password" name="password">


<input type="submit" name="userlog">	
</form>

<?php 
    
    $color = "maroon";
    $var = $color[2];
    echo "$var";
    echo "<br>";

    // -------------
    $score = 1234;
    $scoreboard = (array) $score;
    echo $scoreboard[0];
       echo "<br>";
    // -------------
       $total = "25 students";
    $more = 10;
    $total = $total + $more;
    echo "$total";
       

    echo "\$x";
echo "<br>";
echo "<br>";
        $user = array("Ashley", "Bale", "Shrek", "Blank");
    for ($x=0; $x < count($user); $x++)	{
        if ($user[$x] == "Shrek") continue;
            printf ($user[$x]); 
    }
?>