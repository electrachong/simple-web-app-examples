<html>
    <head>
        <title><!-- INSERT TITLE HERE --></title>
    </head>
    
    <body>
        <h1>A simple php webapp</h1>
        
        <!-- If php is enabled (must be installed on server), you will see this text display -->
        <?php echo '<p>Use php to show this text!</p>'; ?>
        
        <h2>A basic form</h2>
        
        <!-- When this HTML form is submitted, it will send the form data via a http POST request to the web server at the designated path (action.php).
            The http request will contain this message body:
                name=[formvalue]&picture=[formvalue]
            The code in action.php is then called to handle the response!    
        -->

        <form action="action.php" method="post">
            <p>Your name: <input type="text" name="name" /></p>
            <p>What would you like?</p>
            <input type="radio" name="picture" value="pink_feathers" checked> Pink Feathers<br>
                <input type="radio" name="picture" value="rainbow_lei"> Rainbow Lei<br>
                <input type="radio" name="picture" value="batman"> Batman<br>
                <input type="radio" name="picture" value="gym"> Gym<br>
            <p><input type="submit" /></p>
        </form>
        
        <!-- Note: In this case we are using the POST method because we are sending some data variables to the server, and want an appropriate response. You could use the GET method if you simply want to request a certain resource. 
        FMI: https://developer.mozilla.org/en-US/docs/Web/Guide/HTML/Forms/Sending_and_retrieving_form_data 
        -->
        
    </body>
</html>

