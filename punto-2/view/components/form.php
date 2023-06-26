<?php include "./controller/registerController.php"; ?>

<form method = "post">
    <h2>Registro de usuario</h2>
    <div class = "form__row">
       <div>
        <label 
            for="name-user">Nombre del usuario:
        </label>
        <input 
            id="name-user"
            type="text"
            name="name_user"
            placeholder="John"
            >   
       </div>
       <div>
       <label 
            for="age-user">Edad
       </label>
        <input 
            id="age-user"
            type="text"
            name="age_user"
            placeholder="18"
            >
       </div> 
    </div>
    <button>Validar</button>
</form>