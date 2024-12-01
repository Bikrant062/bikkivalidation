function validateForm() {
    const name = document.getElementById("txtname").value.trim();
    const email = document.getElementById("txtemail").value.trim();
    const contact = document.getElementById("txtcontact").value.trim();
    const gender = document.querySelector('input[name="bikrant_gender"]:checked');
    const password = document.getElementById("password").value.trim();
    const course = document.getElementById("course").value;

    const errorMsg = document.getElementById("errorMsg");

    if (!name) {
        errorMsg.textContent = "Name is required.";
        return false;
    }
    if (!email) {
        errorMsg.textContent = "Email is required.";
        return false;
    }
    if (!contact.match(/^[0-9]{10}$/)) {
        errorMsg.textContent = "Enter a valid 10-digit contact number.";
        return false;
    }
    if (!gender) {
        errorMsg.textContent = "Gender is required.";
        return false;
    }
    if (!password) {
        errorMsg.textContent = "Password is required.";
        return false;
    }
    if (!course) {
        errorMsg.textContent = "Please select a course.";
        return false;
    }
    errorMsg.textContent = "";
    return true;
}
