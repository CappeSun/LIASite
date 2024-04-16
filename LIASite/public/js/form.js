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
        let positions = '';

        if (document.getElementById('ctg-frontend').checked) positions = positions+'Frontend|';
        if (document.getElementById('ctg-backend').checked) positions = positions+'Backend|';
        if (document.getElementById('ctg-javascript').checked) positions = positions+'JavaScript|';
        if (document.getElementById('ctg-phpCompetence').checked) positions = positions+'PHP|';
        if (document.getElementById('ctg-wordpress').checked) positions = positions+'WordPress|';
        if (document.getElementById('ctg-react').checked) positions = positions+'React|';
        if (document.getElementById('ctg-csharp').checked) positions = positions+'C#|';
        if (document.getElementById('ctg-sql').checked) positions = positions+'SQL|';
        if (document.getElementById('ctg-figma').checked) positions = positions+'Figma|';
        if (document.getElementById('ctg-uxui').checked) positions = positions+'UX/UI|';
        if (document.getElementById('ctg-motion').checked) positions = positions+'Motion|';
        if (document.getElementById('ctg-cms').checked) positions = positions+'CMS|';
        if (document.getElementById('ctg-adobe').checked) positions = positions+'Adobe-suiten|';
        if (document.getElementById('ctg-3d').checked) positions = positions+'3D|';

        positionsInput.value = positions;

        if (document.getElementById('countEmployees1-4').checked) size = '1-4';
        else if (document.getElementById('countEmployees5-8').checked) size = '5-8';
        else if (document.getElementById('countEmployees9-12').checked) size = '9-12';
        else if (document.getElementById('countEmployeesMore').checked) size = 'More';

        sizeInput.value = size;

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
