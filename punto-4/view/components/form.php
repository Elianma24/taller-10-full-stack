<?php include "./controller/calculationController.php"; ?>

<form method = "post">
    <h2>Calculadora de edad</h2>
    <div class = "form__row">
       <div>
        <label 
            for="user-name">Nombre usuario
        </label>
        <input 
            id="user-name"
            type="text"
            name="user_name"
            placeholder="John Doe"
            >   
       </div>
       <div>
       <label 
            for="birthdate-name">Fecha de nacimiento
       </label>
        <input 
            id="user-birthdate"
            type="date"
            name="user_birthdate"
            >
       </div> 
    </div>
    <button>Validar</button>
</form>