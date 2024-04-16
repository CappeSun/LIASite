@extends('layouts.app')
@include('header')

<section class="mt-6 h-screen">
    <form class="flex flex-col sm:items-center" action="/account/create" method="post" id="regCompanyForm">
        @csrf
        <!-- Form 1 -->
        <div class="p-6 mt-6 sm:w-2/3 form">
            <div class="register-container bg-marine1 gap-custom">
                <h6>Skapa ett konto</h6>
                <label class="p1" for="name">Företagets namn</label>
                <input class="form-input" type="text" id="name" name="name" placeholder="Namn..." required>

                <label class="p1" for="companyEmail">E-postadress</label>
                <input class="form-input" type="email" id="companyEmail" name="email" placeholder="name@example.com" required>

                <label class="p1" for="companyPassword">Lösenord</label>
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
                <label class="p1" for="companyName">Företagets namn</label>
                <input class="form-input" type="text" id="companyName" name="cName" placeholder="Namn..." required>

                <label class="p1" for="companyContact">Kontaktinfo</label>
                <input class="form-input" type="text" id="companyContact" name="contact" placeholder="name@example.com, LinkedIn etc." required>

                <label class="p1" for="location">Var ligger kontoret?</label>
                <input class="form-input" type="text" id="location" name="location" placeholder="Vasagatan, Göteborg" required>

                <label class="p1" for="companyDescription">Vad arbetar företaget med?</label>
                <input class="form-input" type="text" id="companyDescription" name="area" placeholder="Fordon" required>

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
                    <div class="companyCompetenceCheckboxes grid grid-cols-3 gap-1 pt-4 pb-2 px-6">
    
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
                            <span class="checkbox-icon">WordPress</span>                       
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
                        <label for="ctg-motion" class="custom-checkbox flex items-center">
                            <input type="checkbox" id="ctg-motion" class="form-checkbox">
                            <span class="checkbox-icon">Motion</span>                       
                        </label>
                        <label for="ctg-cms" class="custom-checkbox flex items-center">
                            <input type="checkbox" id="ctg-cms" class="form-checkbox">
                            <span class="checkbox-icon">CMS</span>                       
                        </label>
                        <label for="ctg-adobe" class="custom-checkbox flex items-center">
                            <input type="checkbox" id="ctg-adobe" class="form-checkbox">
                            <span class="checkbox-icon">Adobe-suiten</span>                       
                        </label>
                        <label for="ctg-3d" class="custom-checkbox flex items-center">
                            <input type="checkbox" id="ctg-3d" class="form-checkbox">
                            <span class="checkbox-icon">3D</span>                       
                        </label>                      
                    </div>
                </div>
                <label class="p1 mt-2" for="companyRequirements">Vad kan man förvänta sig för uppgifter som LIA-student?</label>
                <input class="form-input" type="text" id="companyRequirements" name="tasks" placeholder="Ex. jobba med designsystem" required>
                
                <h6 class="p1 my-2">Hur stort är teamet?</h6>
                <div class="companySizeCheckboxes grid grid-cols-4 gap-1 pt-1.5 px-6">
                    <label for="countEmployees1-4" class="custom-checkbox flex items-center">
                      <input type="checkbox" id="countEmployees1-4" class="form-checkbox">
                      <span class="checkbox-icon">1-4</span>                     
                    </label>
                    <label for="countEmployees5-8" class="custom-checkbox flex items-center">
                      <input type="checkbox" id="countEmployees5-8" class="form-checkbox">
                      <span class="checkbox-icon">5-8</span>                    
                    </label>
                    <label for="countEmployees9-12" class="custom-checkbox flex items-center">
                        <input type="checkbox" id="countEmployees9-12" class="form-checkbox">
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
            <button class="btn btn-marine next-btn" id="submitForm" type="submit">Nästa</button>
        </div>
        <input type="hidden" name="level" value="2">
        <input type="hidden" id="positionsInput" name="positions" value="">
        <input type="hidden" id="sizeInput" name="size" value="">
    </form>
</section>

{{-- <div id="confirmation"></div> --}}
<div id="confirmation">
    <p class="text-lg font-semibold">BEKRÄFTA ATT ALLT STÄMMER</p>
    <div class="confirmation-container">
        <h4 id="c-companyName"></h4> 
        <p id="c-companyEmail"></p>
        <p id="c-location"></p>
        <p id="c-companyDescription"></p>
        <div id="competenceList" class="grid grid-cols-4 gap-1 pt-1.5">
            <!-- Checkbox competence values here -->
        </div>
        <strong>LIA vad kan man förvänta sig</strong>
        <p id="c-companyRequirements"></p>
        <strong>Hur stort är teamet</strong>
        <div id="sizeList" class="grid grid-cols-4 gap-1 pt-1.5">
            <!-- Checkbox size values here -->
        </div>
    </div>
    <div class="buttons">
        <a href="{{ route('index') }}"><button class="btn btn-1">Avbryt</button></a>
        <button class="btn btn-marine" onclick="submitForm()">Allt stämmer</button>
    </div>
</div>

@include('footer')

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