<html>
    <head>
        <title><!-- INSERT TITLE HERE --></title>
    </head>
    
    <body>
        <h1>Examples of simple webapps</h1>
        
        <!-- If php is enabled (must be installed on server), you will see this text display -->
        <?php echo '<p>Use php to show this text!</p>'; ?>
        <hr>
        
        <!-----------------------------------------------------------
        ---------------PHP EXAMPLE OF HANDLING WEBFORM---------------
        ------------------------------------------------------------>        
        
        <h2>A basic form (redirects to php-rendered results page)</h2>
        
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
        <hr>

        <!-----------------------------------------------------------
        -------------PYTHON EXAMPLE OF HANDLING WEBFORM--------------
        ------------------------------------------------------------> 
        <h2>Another basic form (redirects to python-rendered results page)</h2>
        <p>Similar to above example, except a python file generates the response. We will utilize python's time and random modules in this example.</p>
        
        <!-- This time we are going to send to a Python script, called 'randomnumbers' -->
        <form action="randomnumbers" method="post">
            <p>Your name: <input type="text" name="name" /></p>
            <p>Pick a range of numbers.</p>
            <select name="range">
                <option value="0_10">1-10</option>
                <option value="11_20">11-20</option>
                <option value="21_30">21-30</option>
            </select>
            <p><input type="submit" /></p>
        </form>
                
        <hr>
        
        <h2>Basic form without redirect</h2>
        <p>This uses AJAX with plain JavaScript to send a request without reloading the page, and calls a server-side Python function. In order to send HTTP requests with redirects, you must use AJAX (a Javascript method).</p>
        
    </body>
</html>

