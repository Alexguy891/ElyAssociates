<!DOCTYPE html>
<html lang="en">
    <!--HEAD-->
    <head>
        <title>Ely & Associates Landscape Design Company - Customer Inquiry!</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale= 1.0">
    </head>

    <!--BODY-->
    <body>
        <header>
            <h1>Ely & Associates Customer Inquiry</h1>
        </header>
        <main>

            <h2 style ="text-align: center;">Customer Inquiry Form</h2>

            <!--FORM STARTS HERE-->
            <div class="contact_form" style = "text-align: center;">
                <form method="post" enctype="text/plain" name="customer_form">
                    <p style="text-align: center;"><strong>DISCLAIMER:</strong>
                        If you do not live in northeast ohio, we are unfortunately not available to you.</p>
                    <label for="name">Name: 
                        <input type="text" id = "name" name ="name"placeholder="Enter name here!" required>
                    </label><br>
                    <label for="email">Email:
                        <input type="email" id="email" name="email"placeholder="example@gmail.com" required>
                    </label><br>
                    <label for="phone_number">Phone Number:
                        <input type="tel" id="phone_number" name="phone_number" placeholder="999-999-9999" 
                        pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
                    </label><br>
                    <label for="address">Address: 
                        <input type="text" id="address" name="address" placeholder="999 East Main Street, Kent, Ohio" required>
                    </label><br>

                    <fieldset style="width: fit-content; margin: auto;" id="description_textarea">
                        <legend>Question:</legend>
                        <textarea placeholder="Please put your question here" rows="10" cols="30" name="description" id="description">
                        </textarea>
                    </fieldset><br>

                    <input type="submit" style="border-radius: 10px;" name = "send" value = "Submit" onclick="reveal()">
                </form>
                <p style="display: none;" id="form_submission">Your form has been submitted!</p>
                <p>Company Phone Number: ***-***-****</p>
                <p>Company Email: example@gmail.com</p>
                <script>
                    function reveal() {
                        document.getElementById("form_submission").style.display = "block";
                    }

                </script>
            </div>
        </main>
    </body>
</html>