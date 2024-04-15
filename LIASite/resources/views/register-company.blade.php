@extends('layouts.app')
@include('header')

<section class="mt-6">
    <form class="flex flex-col sm:items-center" action={{-- "{{ TODO: submit all }}" --}} method="post">
        @csrf
        <!-- Form 1 -->
        <div class="p-6 mt-6 sm:w-2/3 form">
            <div class="register-container bg-marine1 gap-custom">
                <h6>Skapa ett konto</h6>
                <label class="p1" for="name">Företagets namn</label>
                <input class="form-input" type="text" id="name" name="name" placeholder="Namn..." required>

                <label class="p1" for="email">E-postadress</label>
                <input class="form-input" type="email" id="companyEmail" name="email" placeholder="name@example.com" required>

                <label class="p1" for="password">Lösenord</label>
                <input class="form-input" type="password" id="companyPassword" name="password" placeholder="Lösenord" required>

                <p id="formError1"></p>
            </div>
            <div class="flex justify-center">
                <button class="btn btn-marine next-btn mt-11 justify-center" type="button">Nästa</button>
            </div>
        </div>

        <!-- Form 2 -->
        <div class="p-6 mt-6 sm:w-2/3 form-about form hidden">
            <div class="register-container bg-marine1 gap-custom">
                <h6>Om företag</h6>
                <label class="p1" for="company-name">Företagets namn</label>
                <input class="form-input" type="text" id="companyName" name="company-name" placeholder="Namn..." required>

                <label class="p1" for="company-contact">Kontaktinfo</label>
                <input class="form-input" type="text" id="companyContact" name="company-contact" placeholder="name@example.com, LinkedIn etc." required>

                <label class="p1" for="location">Var ligger kontoret?</label>
                <input class="form-input" type="text" id="location" name="location" placeholder="Vasagatan, Göteborg" required>

                <label class="p1" for="company-description">Vad arbetar företaget med?</label>
                <input class="form-input" type="text" id="companyDescription" name="company-description" placeholder="Fordon" required>

                <p id="formError2"></p>
            </div>
            <div class="buttons mt-11">
                <button class="btn btn-1 prev-btn" type="button">Tillbaka</button>
                <button class="btn btn-marine next-btn" type="button">Nästa</button>
            </div>
        </div>

        <!-- Form 3 -->
        <div class="p-6 mt-6 sm:w-2/3 form-info form hidden">
            <div class="register-container bg-marine1 gap-custom">
                <h6>Info om LIA</h6>
                <div class="competence">
                    <h6 class="p1 text-left">Kompetens ni är ute efter?</h6>
                    <div class="grid grid-cols-3 gap-1 pt-4 pb-2 px-6">
    
                        {{-- Competence checkboxes. ctg = category --}}
                        <label for="ctg-frontend" class="custom-checkbox flex items-center">
                          <input type="checkbox" id="ctg-frontend" class="form-checkbox">
                          <span class="checkbox-icon">Frontend</span>                     
                        </label>
                        <label for="ctg-backend" class="custom-checkbox flex items-center">
                          <input type="checkbox" id="ctg-backend" class="form-checkbox">
                          <span class="checkbox-icon">Backend</span>                    
                        </label>
                        <label for="ctg-javascript" class="custom-checkbox flex items-center">
                            <input type="checkbox" id="ctg-javascript" class="form-checkbox">
                            <span class="checkbox-icon">JavaScript</span>                       
                        </label>
                        <label for="ctg-phpCompetence" class="custom-checkbox flex items-center">
                            <input type="checkbox" id="ctg-phpCompetence" class="form-checkbox">
                            <span class="checkbox-icon">PHP</span>                       
                        </label>
                        <label for="ctg-wordpress" class="custom-checkbox flex items-center">
                            <input type="checkbox" id="ctg-wordpress" class="form-checkbox">
                            <span class="checkbox-icon">Wordpress</span>                       
                        </label>
                        <label for="ctg-react" class="custom-checkbox flex items-center">
                            <input type="checkbox" id="ctg-react" class="form-checkbox">
                            <span class="checkbox-icon">React</span>                       
                        </label>
                        <label for="ctg-csharp" class="custom-checkbox flex items-center">
                            <input type="checkbox" id="ctg-csharp" class="form-checkbox">
                            <span class="checkbox-icon">C#</span>                       
                        </label>
                        <label for="ctg-sql" class="custom-checkbox flex items-center">
                            <input type="checkbox" id="ctg-sql" class="form-checkbox">
                            <span class="checkbox-icon">SQL</span>                       
                        </label>
                        <label for="ctg-figma" class="custom-checkbox flex items-center">
                            <input type="checkbox" id="ctg-figma" class="form-checkbox">
                            <span class="checkbox-icon">Figma</span>                       
                        </label>
                        <label for="ctg-uxui" class="custom-checkbox flex items-center">
                            <input type="checkbox" id="ctg-uxui" class="form-checkbox">
                            <span class="checkbox-icon">UX/UI</span>                       
                        </label>
                        <label for="ctg-editing" class="custom-checkbox flex items-center">
                            <input type="checkbox" id="ctg-editing" class="form-checkbox">
                            <span class="checkbox-icon">Redigering</span>                       
                        </label>                     
                    </div>
                </div>
                <label class="p1 mt-2" for="requirements">Vad kan man förvänta sig för uppgifter som LIA-student?</label>
                <input class="form-input" type="text" id="companyRequirements" name="requirements" placeholder="Ex. jobba med designsystem" required>
                
                <h6 class="p1 my-2">Hur stort är teamet?</h6>
                <div class="grid grid-cols-4 gap-1 pt-1.5 px-6">
                    <label for="countEmployees14" class="custom-checkbox flex items-center">
                      <input type="checkbox" id="countEmployees14" class="form-checkbox">
                      <span class="checkbox-icon">1-4</span>                     
                    </label>
                    <label for="countEmployees58" class="custom-checkbox flex items-center">
                      <input type="checkbox" id="countEmployees58" class="form-checkbox">
                      <span class="checkbox-icon">5-8</span>                    
                    </label>
                    <label for="countEmployees912" class="custom-checkbox flex items-center">
                        <input type="checkbox" id="countEmployees912" class="form-checkbox">
                        <span class="checkbox-icon">9-12</span>                       
                    </label>
                    <label for="countEmployeesMore" class="custom-checkbox flex items-center">
                        <input type="checkbox" id="countEmployeesMore" class="form-checkbox">
                        <span class="checkbox-icon">Fler</span>                       
                    </label>                  
                </div>       
                <p id="formError3"></p>
        </div>
        <div class="buttons mt-11">
            <button class="btn btn-1 prev-btn" type="submit">Tillbaka</button>
            <button class="btn btn-marine next-btn" type="submit">Nästa</button>
        </div>
    </form>
</section>

{{--
    <h6>Student</h6>
    <form action="" method="post">
        @csrf
        <label class="p1" for="name">Företagets namn</label>
        <input class="form-input" type="text" id="name" name="name" placeholder="Namn..." required>
    
        <label class="p1" for="count">Hur många av er kommer?</label>
        <input class="form-input" type="text" id="count" name="count" placeholder="Ex. 3 personer" required>
        
        <label class="p1" for="orientation">Inom vilket område erbjuder ni LIA?</label>
        <input class="form-input" type="text" id="orientation" name="orientation" placeholder="Ex. Webb" required>
        
        <label class="p1" for="email">E-postadress</label>
        <input class="form-input" type="email" id="email" name="email" placeholder="name@example.com" required>
    
        <button class="btn btn-2" type="submit">Gå vidare</button>
    </form>
    <p>Har du redan ett konto? <a href="#">Klicka här</a> för att logga in</p>
 --}}