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

        regCompanyForm.style.display = "none";
        confirmationBox.style.display = "flex";

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

        // Get checked checkboxes from competence
        const checkedCheckboxesCompetence = document.querySelectorAll(
            '.companyCompetenceCheckboxes input[type="checkbox"]:checked'
        );
        const checkedCheckboxCompetenceValues = Array.from(
            checkedCheckboxesCompetence
        ).map((checkbox) => {
            return checkbox.nextElementSibling.textContent.trim();
        });

        // Get checked checkboxes from company size
        const checkedCheckboxesSize = document.querySelectorAll(
            '.companySizeCheckboxes input[type="checkbox"]:checked'
        );
        const checkedCheckboxSizeValues = Array.from(checkedCheckboxesSize).map(
            (checkbox) => {
                return checkbox.nextElementSibling.textContent.trim();
            }
        );

        // Insert data from forms to confirmationbox
        document.getElementById("c-companyName").textContent =
            formData.companyName;
        document.getElementById("c-companyEmail").textContent =
            formData.companyEmail;
        document.getElementById("c-location").textContent = formData.location;
        document.getElementById("c-companyDescription").textContent =
            formData.companyDescription;
        document.getElementById("c-companyRequirements").textContent =
            formData.companyRequirements;

        // Populate competence checkbox values
        const competenceList = document.getElementById("competenceList");
        competenceList.innerHTML = checkedCheckboxCompetenceValues
            .map((value) => `<p class="checkbox-icon-confirmation">${value}</p>`)
            .join("");

        // Populate size checkbox values
        const sizeList = document.getElementById("sizeList");
        sizeList.innerHTML = checkedCheckboxSizeValues
            .map((value) => `<p class="checkbox-icon-confirmation">${value}</p>`)
            .join("");
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
