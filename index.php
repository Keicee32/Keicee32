<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us ::</title>
</head>
<body>
    
    <fieldset><legend>Contact Form</legend>
    <form action="contactform.php" method="POST" autocomplete="off">
        <p>
            <label for="first_name"> First Name: </label> 
            <input type="text" name="first_name" placeholder="Enter your First name" required/>
        </p>
        <br/>
        <p>
            <label for="last_name"> Last Name: </label> 
            <input type="text" name="last_name" placeholder="Enter your Last name" required/>
        </p>
        <br/>
        <p>
            <label for="email"> Email: </label> 
            <input type="email" name="email" placeholder="Enter your Email" required/>
        </p>
        <br/>
        <p>
            <label for="gender">Gender: </label>
            <input type="radio" value="male" name="gender" checked/> Male
            <input type="radio" value="female" name="gender"/> Female
        </p>
        <br/>
        <p>
            <label for="depatment"> Department: </label>
            <select name="department">
                <option>Select Department</option>
                <option>Front-End</option>
                <option>Back-End</option>
                <option>Design</option>
                <option>Mobile</option>
            </select>
        </p>
        <br/>
        <p>
            <label for="email"> Your Message: </label><br/>
            <textarea name="message" col="5" rows="5"></textarea>
        </p>
        <p>
            <button type="submit" name="submit">Submit</button>
        </p>
    </form>
    <fieldset>
    
</body>
</html>