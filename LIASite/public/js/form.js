document.addEventListener("DOMContentLoaded", function () {
    const forms = document.querySelectorAll(".form");
    const nextButtons = document.querySelectorAll(".next-btn");
    const prevButtons = document.querySelectorAll(".prev-btn");

    nextButtons.forEach((button, index) => {
        button.addEventListener("click", function (event) {
            event.preventDefault();
            const currentForm = forms[index];
            const nextForm = forms[index + 1];
            if (currentForm && nextForm) {
                hideForm(currentForm);
                showForm(nextForm);
            }
        });
    });

    prevButtons.forEach((button, index) => {
        button.addEventListener("click", function (event) {
            event.preventDefault();
            const currentForm = forms[index + 1];
            const prevForm = forms[index];
            if (currentForm && prevForm) {
                hideForm(currentForm);
                showForm(prevForm);
            }
        });
    });

    function showForm(form) {
        if (form) {
            form.style.display = "block";
        }
    }

    function hideForm(form) {
        if (form) {
            form.style.display = "none";
        }
    }
});