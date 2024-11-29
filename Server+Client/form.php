<?php
$errname="";
if(isset($_POST['name'])){
    if(empty($_POST['name'])){
        $errname="Name is required";
    } else {echo "The name is ",$_POST['name'];}
}
?>

<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="refresh" content="1000" data-comment="Meta tag to refresh the page every 1000 seconds" />
    <title>Form</title>
    </head>
<body>
    <style>
    </style>
    <header>
        <h1>PHP Form Validation Example</h1>
        <p style="color: red;">* required field</p>
    </header>
    <form method="POST" id="myForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">
            <nobr>Name: <input type="text" id="name" name="name" required /> <span style="color:red"> *</span></nobr>
        </label>
        <br>
        <label for="email">
            E-Mail: <input type="email" id="email" name="email" required /> <span style="color:red"> *</span>
        </label>
        <br>
        <label for="website">
            Website: <input type="url" id="website" name="website" required />
        </label>
        <br>
        <label for="comments">
            Comments: <textarea id="comments" name="comments"></textarea>
        </label>
        <br>
        <label for="gender">
            Gender:
            <input type="radio" id="female" name="gender" value="Female" /> Female
            <input type="radio" id="male" name="gender" value="Male" /> Male
            <input type="radio" id="other" name="gender" value="Other" /> Other
        </label> 
        <span style="color:red"> *</span>
        <br>
        <button type="submit">Submit</button>
    </form>
    <footer>
        <h1>Your Input:</h1>
        <p id="input"></p>
    </footer>
    <!-- <script>
        const form = document.getElementById('myForm');
        form.addEventListener('submit', validateForm);
        function validateForm(event) {
            event.preventDefault();
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const website = document.getElementById('website').value;
            const comments = document.getElementById('comments').value;
            const gender = document.querySelector('input[name="gender"]:checked');
            if (name === '' || email === '' || website === '' || gender === null) {
                alert('Please fill in all required fields');
                return;
            }
            if (!validateEmail(email)) {
                alert('Invalid email address');
                return;
            }
            form.submit();
            display(name, email, website,comments===""?"<i>No Commets<i/>":comments, gender);
        }

        function validateEmail(email) {
            const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            return emailRegex.test(email);
        }
        function display( name, email, website, comments, gender ) {
        document.getElementById('input').innerHTML+=`<b>Name: <b/> ${name},<br/><b>E-Mail: <b/>${email}<br/><b>Website: <b/>${website},<br/><b>Comments: <b/>${comments},<br/><b>Gender: <b/>${gender}`;
        }
    </script> -->
</body>

</html>