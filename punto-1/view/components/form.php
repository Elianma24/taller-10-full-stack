<?php include "./controller/calculationController.php"; ?>

<form method="post">
    <h2>Calculadora</h2>
    <div class="form__row">
        <div>
            <label for="first-number">Primer Numero
            </label>
            <input id="first-number" type="text" name="first_number" placeholder="5">
        </div>
        <div>
            <label for="second-number">Segundo Numero
            </label>
            <input id="second-number" type="text" name="second_number" placeholder="10">
        </div>
        <div>
            <label for="operation-type">Tipo de operacion
            </label>
            <select id="operation-type" name="operation_type">
                <option value="Suma">Suma</option>
                <option value="Resta">Resta</option>
                <option value="Multiplicacion">Multiplicacion</option>
                <option value="Division">Division</option>
            </select>
        </div>
    </div>
    <button>Calcular</button>
</form>