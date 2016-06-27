<?php
  // The global $_POST variable allows you to access the data sent with the POST method
  // To access the data sent with the GET method, you can use $_GET
  // The htmlspecialchars() function makes sure special HTML characters such as '<' and '>' are encoded so people cannot inject HTML or Javascript tags into the page through your form.
  $name = htmlspecialchars($_POST['name']);
  $picture  = htmlspecialchars($_POST['picture']);
?>

Here you go, <?php echo $name; ?>! </br>

<!-- You can use control structures with php -->
<?php
if (strcmp($picture == "pink_feathers") {
    echo '<img src="https://pbs.twimg.com/media/Cl6LQ5GUgAAnhI0.jpg:large" />';
} 
elseif ($picture == "rainbow_lei") {
    echo '<img src="https://pbs.twimg.com/media/Cl6LQ5EUoAEossh.jpg:large" />';
}
elseif ($picture == "batman") {
    echo '<img src="https://pbs.twimg.com/media/Cl43GDJUgAAPYYV.jpg:large" />';
}
else {
    echo '<img src="https://pbs.twimg.com/media/Cl1MA5SUoAA56CX.jpg:large" />';
} 
?>