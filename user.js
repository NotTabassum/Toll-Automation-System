document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("myForm");
    const popup = document.getElementById("popup");
    const closePopupButton = document.getElementById("close-popup");
    const greetingMessage = document.getElementById("greeting-message");

    form.addEventListener("submit", function (event) {
        event.preventDefault(); // Prevent the form from submitting normally
        const name = document.getElementById("name").value;
        const email = document.getElementById("email").value;

        // Customize the greeting message
        const message = `Hello, ${name} (${email})! Welcome!`;

        // Display the pop-up with the greeting message
        greetingMessage.textContent = message;
        popup.style.display = "block";
    });

    // Close the pop-up when the close button is clicked
    closePopupButton.addEventListener("click", function () {
        popup.style.display = "none";
    });
});
