<?php 
require('header.php'); 
?>
<div class="container">
<div class="panel">
<h1>test</h1>
<form action="../controller/functions/functions.php" method="POST">
<div class="form-group">
<label>name:</label>
<input type="text" name="name">
</div>
<div class="form-group">
<label>password:</label>
<input type="password" name="password">
</div>
<div class="form-group">
<label>email:</label>
<input type="email" name="email">
</div>
<input type="submit" name="createuser">	
</form>
</div>
</div>

<hr>
<div class="container">
<div class="panel">
<h2>User login</h2>
<form action="../../controller/functions/functions.php" method="POST">
<div class="form-group">
<label>email:</label>
<input type="email" name="email">
</div>
<div class="form-group">
<label>password:</label>
<input type="password" name="password">
</div>
<button type="submit" name="userlog" class="btn btn-default">LogIn</button>	
</form>
</div>
</div>
<?php require('footer.php'); ?>
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

    $a = '1';
    $b = &$a;
    $b = "2$b";
    echo $a.", ".$b;
    echo "<br>";
echo "----------";
echo "<br>";
    class Animal
{
    public $name = "No-name animal";
    
    public function __construct($name)
    {
        $this->name = $name;
        var_dump($this);
    }
}

$animal = new Animal("Bob the Dog");
echo $animal->name;
echo "<br>";
echo "----------";
$name = 'sandharu1';
unset($name);
var_dump($name);

?>