document.addEventListener("DOMContentLoaded", function () {
    const forms = document.querySelectorAll(".form");
    const nextButtons = document.querySelectorAll(".next-btn");
    const prevButtons = document.querySelectorAll(".prev-btn");
    const regCompanyForm = document.getElementById("regCompanyForm");
    const confirmationBox = document.getElementById("confirmation");
    const lastSubmitButton = document.getElementById("submitForm");

    // Validate, hide and display next form
    nextButtons.forEach((button, index) => {
        button.addEventListener("click", function (event) {
            event.preventDefault();
            const currentForm = forms[index];
            const nextForm = forms[index + 1];
            const error = document.getElementById(`formError${index + 1}`);

            if (validateForm(currentForm, error)) {
                if (currentForm && nextForm) {
                    hideForm(currentForm);
                    showForm(nextForm);
                }
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

    lastSubmitButton.addEventListener("click", function (event) {
        event.preventDefault();

        forms.style.display = "none";

        // Get input data from forms
        const formData = {
            companyName: document.getElementById("name").value.trim(),
            companyEmail: document.getElementById("companyEmail").value.trim(),
            companyPassword: document
                .getElementById("companyPassword")
                .value.trim(),
            companyContact: document
                .getElementById("companyContact")
                .value.trim(),
            location: document.getElementById("location").value.trim(),
            companyDescription: document
                .getElementById("companyDescription")
                .value.trim(),
            companyRequirements: document
                .getElementById("companyRequirements")
                .value.trim(),
        };

        // Display confirmation
        const confirmationMessage = `
        <h6>BEKRÄFTA ATT ALLT STÄMMER</h6>
        <div class="confirmation-container">
            <h4>${formData.companyName}</h4> 
            <p>${formData.companyEmail}</p>
            <p>${formData.location}</p>
            <p>${formData.companyDescription}</p>
            <p>${formData.companyContact}</p> 
            <p>${formData.companyRequirements}</p> 
        </div>
        <div>
            <button class="btn btn-1" onclick="submitForm()">Allt stämmer</button>
            <a href="{{ route('index') }}"><button class="btn btn-2">Avbryt</button></a>
        </div>
    `;
        confirmationBox.innerHTML = confirmationMessage;
    });

    // Submit all
    window.submitForm = function () {
        regCompanyForm.submit();
    };

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

    function validateForm(form, error) {
        if (!error) return true;

        const inputs = form.querySelectorAll("input[required]");
        let isValid = true;
        if (error) {
            inputs.forEach((input) => {
                if (!input.value.trim()) {
                    isValid = false;
                    error.innerHTML = "Vänligen fyll i alla fält.";
                }
            });
        }
        return isValid;
    }
});
