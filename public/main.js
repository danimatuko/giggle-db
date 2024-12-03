// remove the message after 3 seconds
document.addEventListener("DOMContentLoaded", () => {
    const successMessage = document.querySelector(".alert-success");
    if (successMessage) {
        setTimeout(() => {
            successMessage.remove();
        }, 3000); // 3000ms = 3 seconds
    }
});
