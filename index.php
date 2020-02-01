<!-- I used php with embedded html, grecaptcha v3, MAMP with Apache server 
and javascript function for browser console form dump (localhost:8888/index.php) -->

<!DOCTYPE html>
<?php
define('SITE_KEY', '6LdSJNIUAAAAAKOzS4KuaTPpr0huxStzw6RlALSc');
define('SECRET_KEY', '6LdSJNIUAAAAAJ9Cv_jGt8NwSq9kIQVzfzISj2yZ');
?>

<html>
<body style="background-color:orange;">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Kevin Lin">
        <meta name="description" content="MVP of NextLevel Labs Site">
        <meta name="keywords" content="HTML, JavaScript, client">
        <meta charset="UTF-8">
        <title>Dunder Mifflin</title>
        <link rel="shortcut icon" type="image/png" href="img/favicon.png">
    </head>
    <body>
        <div style="background-color:black" >
        <font color="white">
        <h1>
            <b><i>NextLevel Labs</i></b>
        </h1>
        </div>
        <font color="black">

        <h2>To stay technical, we assign each of our members a technical 
        project that we track using Gantt charts and Agile development 
        processes. We hold weekly code reviews so that one member's 
        learning may be shared with the team, and we may all grow together 
        more than by coding alone.</h2>

        <div style="background-color:black" >
                <font color="white">
                <h3>What do we do?</h3>
                <p>We develop next level technical projects using Silocon Valley big tech methodologies:  
                <i>{Agile, Scrum, Waterfall, Kanban, Gantt}</i>! We stay grounded in the technical and 
                leverage members' comparative advantages to get more done together than we could eah do alone.
                If you would like to connect, please fill out the web 
                form below. We look forward to hearing from you!</p>
        </div>
        <font color="black">

        <p>
            <!-- // empty foobar -->
        </p>
        <div class="contact-form">
        <h2>Contact Us:</h2>
        <form action="" id="form" onsubmit="sConsole(event)">
            <fieldset class="contactinfo">
                <legend>Contact Information:</legend>
                <label for="nameinput">
                    Name
                    <input type="text" name="name" id="data">
                    <script>console.log("nameinput");</script>
                    <!-- <?php echo $_GET["name"]; ?> -->
                </label>
                <label for="emailinput">
                    Email
                    <input type="email" name="email" id="data">
                    <!-- <?php echo $_GET["email"]; ?> -->
                </label>
                <label for="phoneinput">
                    Phone
                    <input type="tel" name="phone" id="data">
                    <!-- <?php echo $_GET["phone"]; ?> -->
                </label>
                    <button type="submit">Submit</button>
            
                <div class="g-recaptcha" data-sitekey="6LdSJNIUAAAAAKOzS4KuaTPpr0huxStzw6RlALSc">
                </div>
            <script type="text/javascript">
                localStorage.setItem("name", Name)
                localStorage.setItem("email", Email)
                localStorage.setItem("tel", Phone)
            </script>
            </fieldset>  
        </form>

        <!-- // dump to browser console -->
        <script>
            function sConsole(event) {
                event.preventDefault();
                var data = document.getElementById("data");
                console.log(data.value);
            }
        </script>

        <script src="https://www.google.com/recaptcha/api.js?render=6LdSJNIUAAAAAKOzS4KuaTPpr0huxStzw6RlALSc"></script>
        <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('6LdSJNIUAAAAAKOzS4KuaTPpr0huxStzw6RlALSc', {action: 'homepage'}).then(function(token) {
            });
        });
        </script>
    </body>
</html>

<!-- <script>
import React, { Component } from 'react';
import Recaptcha from 'react-recaptcha';

Class App extends Component {
    constructor(props)
    super(props)

    this.handleSubscribe = this.handleSubscribe.bind(this);
    this.state = {
        isVerified: false
    }
}

handleSubscribe() {
    if (this.state.isVerified) {
        alert('Successful subscription!')
    }
    else {
        alert('Please verify that you are a human!')
    }
}
<Recaptcha
    sitekey="6LdSJNIUAAAAAKOzS4KuaTPpr0huxStzw6RlALSc"
    render="explicit"
    onloadCallback={callback}
  />,

</script> -->
