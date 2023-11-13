let isSubmitting = false;

function sendMail(event) {
    event.preventDefault();

    console.log("Sending mail...");

    if (isSubmitting) {
        alert("Please wait before submitting again.");
        return;
    }

    isSubmitting = true;

    let params = {
        firstName: document.getElementById("firstName").value,
        lastName: document.getElementById("lastName").value,
        email: document.getElementById("email").value,
        phone: document.getElementById("phone").value,
        address: document.getElementById("address").value,
        city: document.getElementById("city").value, 
        state: document.getElementById("state").value,
        zip: document.getElementById("zip").value,
        message: document.getElementById("message").value
    };
    const serviceID = "service_v6wevb7";
    const templateID = "template_0opaxzg";

    if(params.firstName == "" || params.lastName == "" || params.email == "" || params.phone == "" || params.address == "" || 
    params.city == "" || params.state == "" || params.zip == "" || params.message == "") {
        alert("Form was not filled out properly!");
        return;
    }

    emailjs.send(serviceID, templateID, params)
    .then(
        res => {
            document.getElementById("firstName").value = "";
            document.getElementById("lastName").value = "";
            document.getElementById("email").value = "";
            document.getElementById("phone").value = "";
            document.getElementById("address").value = "";
            document.getElementById("city").value = "";
            document.getElementById("state").value = "Ohio";
            document.getElementById("zip").value = "";
            document.getElementById("message").value = "";
            console.log(res);
            alert("Your message has been sent successfully!");

            setTimeout(() => {
                isSubmitting = false;
            }, 10000);
        }
    ).catch((err) => {
        console.log(err);
        isSubmitting = false;
    });
}