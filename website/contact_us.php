<!DOCTYPE html>
<html lang="en">
    <!--HEAD-->
    <head>
        <title>Ely & Associates Landscape Design Company - Contact Us!</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale= 1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css">
        <script src="contact_us.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
        <script type="text/javascript">
            (function(){
                emailjs.init("yaZw2HEajFpg_RM2O");
            })();
        </script>
    </head>

    <!--BODY-->
    <body>
        <header>
            <h1>Ely & Associates Contact Us</h1>
        </header>
        <main>

            <h2 style ="text-align: center;">Contact Form</h2>

            <!--FORM STARTS HERE-->
            <div class="contact_form" style = "text-align: center;">
                <form method="post" name="contact_form" id="contact_form">
                    <p style="text-align: center;" name = "Disclaimer"><strong>DISCLAIMER:</strong>
                        If you do not live in northeast ohio, we are unfortunately not available to you.</p>
                    <label for="name" name="Name Label">Name: 
                        <input type="text" id = "name" name="Name" placeholder="Enter name here!" required>
                    </label><br>
                    <label for="email" name="Email Label">Email:
                        <input type="email" id="email" name="Email" placeholder="example@gmail.com" required>
                    </label><br>
                    <label for="phone_number" name = "Number Label">Phone Number:
                        <input type="tel" id="phone_number" name = "Phone_Number" placeholder="999-999-9999" 
                        pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
                    </label><br>
                    <label for="address" name ="Address Label">Street Address: 
                        <input type="text" id="address" name="Address" placeholder="999 East Main Street" required>
                    </label><br>
                    <label for="city" name ="City Label">City: 
                        <input type="text" id="city" name="City" placeholder="Cleveland" required>
                    </label><br>
                    <label for="state">State:
                        <select id = "state">
                            <option value = "Ohio" id = "OH">Ohio</option>
                            <option value = "Pennslyvania" id="PA">Pennslyvania</option>
                            <option value = "Indianna" id="ID">Indianna</option>
                        </select>
                    </label><br>
                    <label for = "zipcode">Zipcode:
                        <input type="text" id ="zipcode" name="Zipcode" placeholder="11111" required>
                    </label><br>


                     <!--Change the form being filled out on the fly-->
                    <fieldset style="width: fit-content; margin: 10px auto;" id="inquiry_or_project">
                        <p style = "display: block;">Which form would you like to fill out?</p>
                        <label for="radio_description">Project Description:
                            <input type="radio" name="form_decision" value="1" id="radio_description" onclick="changeForm()">
                        </label><br>
                        <label for="radio_description">Ask a question:
                            <input type="radio" name="form_decision" value="2" id="radio_inquiry" onclick="changeForm()">
                        </label>
                    </fieldset>

                    <!--TEXTAREA-->
                    <fieldset style="width: fit-content; margin: auto;" id="description_textarea" name="Description textarea">
                        <legend name ="Description Legend" id="description_legend">Project Description:</legend>
                        <textarea rows="10" cols="50" id="description" name = "Description"></textarea>
                    </fieldset><br>

                    <input type="button" style="border-radius: 10px;" value = "Send" onclick="sendMail()">            
                
                </form>

            </div>
        </main>
        <footer style = "text-align: center;">
            <p>Company Phone Number: ***-***-****</p>
            <p>Company Email: example@gmail.com</p>
        </footer>
    </body>
</html>
