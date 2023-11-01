function sendMail() {
    let params = {
        name: document.getElementById("name").value,
        email: document.getElementById("email").value,
        phone_number: document.getElementById("phone_number").value,
        address: document.getElementById("address").value,
        city: document.getElementById("city").value, 
        state: document.getElementById("state").value,
        zipcode: document.getElementById("zipcode").value,
        description: document.getElementById("description").value
    };
    const serviceID = "service_v6wevb7";
    const templateID = "template_0opaxzg";

    if(params.name == "" || params.email == "" || params.phone_number == "" || params.address == "" || 
    params.city == "" || params.state == "" || params.zipcode == "" || params.description == "") {
        alert("Form was not filled out properly!");
        return;
    }

    emailjs.send(serviceID, templateID, params)
    .then(
        res => {
            document.getElementById("name").value = "";
            document.getElementById("email").value = "";
            document.getElementById("phone_number").value = "";
            document.getElementById("address").value = "";
            document.getElementById("city").value = "";
            document.getElementById("state").value = "Ohio";
            document.getElementById("zipcode").value = "";
            document.getElementById("description").value = "";
            console.log(res);
            alert("Your message has been sent successfully!");
        }
    ).catch((err) => console.log(err));
}

function changeForm() {
    let choice1 = document.getElementById("radio_description");
    let choice2 = document.getElementById("radio_inquiry");
    if(choice1.checked) {
        document.getElementById("description_legend").innerHTML = "Project Description:";
    } else if(choice2.checked) {
        document.getElementById("description_legend").innerHTML = "Customer Inquiry:";
    }
}