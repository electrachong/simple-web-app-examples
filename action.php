<?php
  // The global $_POST variable allows you to access the data sent with the POST method
  // To access the data sent with the GET method, you can use $_GET
  // The htmlspecialchars() function makes sure special HTML characters such as '<' and '>' are encoded so people cannot inject HTML or Javascript tags into the page through your form.
  $name = htmlspecialchars($_POST['name']);
  $picture  = htmlspecialchars($_POST['picture']);
?>

<p>Here you go, <?php echo $name; ?>!</p>

<!-- You can use control structures with php -->
<?php
if ($picture == "pink_feathers") {
    echo '<img src="https://pbs.twimg.com/media/Cl6LQ5GUgAAnhI0.jpg" />';
} 
elseif ($picture == "rainbow_lei") {
    echo '<img src="https://pbs.twimg.com/media/Cl6LQ5EUoAEossh.jpg" />';
}
elseif ($picture == "batman") {
    echo '<img src="https://pbs.twimg.com/media/Cl43GDJUgAAPYYV.jpg" />';
}
else {
    echo '<img src="https://pbs.twimg.com/media/Cl1MA5SUoAA56CX.jpg" />';
} 
?>