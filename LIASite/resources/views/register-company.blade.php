@extends('layouts.app')
@include('header')

<section class="">
    <div class="register-container form-register form {{-- form-bg m-6 --}}">
        <div class="form-bg">
            <h6>Skapa ett konto</h6>
            {{-- TODO: Add routes --}}
            <form action="#" method="post">
                @csrf
                <label class="p1" for="name">Företagets namn</label>
                <input class="form-input" type="text" id="name" name="name" placeholder="Namn..." required>
            
                <label class="p1" for="email">E-postadress</label>
                <input class="form-input" type="email" id="email" name="email" placeholder="name@example.com" required>
            
                <label class="p1" for="password">Lösenord</label>
                <input class="form-input" type="password" id="password" name="password" placeholder="Lösenord" required>
                
                <p id="formError1"></p>
            </form>
            <p>Har du redan ett konto? <a href="{{ route('login') }}">Klicka här</a> för att logga in</p>
        </div>
        <button class="btn btn-2 next-btn" type="submit">Nästa</button>
    </div>
    <div class="register-container form-about form">
        <div class="form-bg">
            <h6>Om företag</h6>
            <form action="" method="post">
                @csrf
                <label class="p1" for="company-name">Företagets namn</label>
                <input class="form-input" type="text" id="companyName" name="company-name" placeholder="Namn..." required>
            
                <label class="p1" for="company-contact">Kontaktinfo</label>
                <input class="form-input" type="text" id="companyContact" name="company-contact" placeholder="name@example.com, LinkedIn etc." required>
                
                <label class="p1" for="location">Var ligger kontoret?</label>
                <input class="form-input" type="text" id="location" name="location" placeholder="Vasagatan, Göteborg" required>
                
                <label class="p1" for="company-description">Vad arbetar företaget med?</label>
                <input class="form-input" type="text" id="companyDescription" name="company-description" placeholder="Fordon" required>
                
                <p id="formError2"></p>
            </form>
        </div>
        <div class="buttons">
            <button class="btn btn-1 prev-btn" type="submit">Tillbaka</button>
            <button class="btn btn-2 next-btn" type="submit">Nästa</button>
        </div>
    </div>
    <div class="register-container form-info form">
        <div class="form-bg">

            <h6>Info om LIA</h6>
            <form action="" method="post">
                @csrf
                
                <div class="competence">
                    <h6 class="p1">Kompetens ni är ute efter?</h6>
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
            </form>
        </div>
        <div class="buttons">
            <button class="btn btn-1 prev-btn" type="submit">Tillbaka</button>
            <button class="btn btn-2 next-btn" type="submit">Nästa</button>
        </div>
    </div>
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