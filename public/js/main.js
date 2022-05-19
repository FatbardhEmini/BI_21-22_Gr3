// ContactUs Form
const contactForm = document.querySelector("footer .contact-us-form");

/*
contactForm.addEventListener("submit", (e) => {
    // Preventing browser from form submission
    e.preventDefault();

    // Getting values
    const fullName = contactForm.querySelector(".fullName").value;
    const emailAddress = contactForm.querySelector(".emailAdress").value;
    const message = contactForm.querySelector(".message").value;
    const contactEror = contactForm.querySelector(".error");

    const nameValidated = validateEmpty(fullName);
    const emailValidated = validateEmpty(emailAddress);
    const messageValidated = validateEmpty(message);

    //regex check for 'math' string in message
    checkForName(message);

    if (
        nameValidated == true &&
        emailValidated == true &&
        messageValidated == true
    ) {
        //local Storage
        localStorage.setItem("userFullName", fullName);
        localStorage.setItem("userEmail", emailAddress);
        localStorage.setItem("userMessage", message);

        contactForm.querySelector(".fullName").value = "";
        contactForm.querySelector(".emailAdress").value = "";
        contactForm.querySelector(".message").value = "";
    } else {
        setInnerText(contactEror, "Field can not be empty!", 3000);
    }

});
*/

//Newsletter
const newsletter = document.querySelector(".newsletter form");
if (newsletter)
    newsletter.addEventListener("submit", (e) => {
        // Preventing browser from form submission
        e.preventDefault();

        // Getting values
        const newsletterValue = newsletter.querySelector(
            ".newsletter-input input"
        ).value;
        const searchError = newsletter.querySelector(".error");

        const emailValidated = validateEmpty(newsletterValue);
        const isValid = isEmailValid(newsletterValue);

        if (emailValidated == true && isValid) {
            newsletter.querySelector(".newsletter-input input").value = "";
            setInnerText(searchError, "The submit was successful", 3000);
        } else {
            setInnerText(searchError, "Please write and valid email", 3000);
        }
    });

/** BACKGROUND CHANGE */
const bgEl = document.getElementById("backgroundChange");
if(bgEl) {
    var d = new Date();
    var n = d.getHours();
    // console.log(n);
    if (n > 19 || n < 6) bgEl.style.background = "#000";
    else if (n > 16 && n < 19) bgEl.style.background = "#fff";
    else bgEl.style.background = "#fff";
}
/** SEARCH LOGIC */

const searchForm = document.getElementById("search");
const searchError = document.querySelector(".error");
searchForm.addEventListener("submit", (e) => {
    // Preventing browser from form submission
    e.preventDefault();

    // Getting search value
    const search = document.querySelector("#search input").value;

    // Validating the input
    const inputValidated = validateEmpty(search);

    if (inputValidated == true) {
        setInnerText(
            searchError,
            "Error: Search functionality is not implemented!",
            3000
        );
    } else {
        setInnerText(searchError, inputValidated.message, 3000);
    }
});

// Validating the input
const inputValidated = validateEmpty(search);

if (inputValidated == true) {
    setInnerText(
        searchError,
        "Error: Search functionality is not implemented!",
        3000
    );
} else {
    setInnerText(searchError, inputValidated.message, 3000);
}
// }
