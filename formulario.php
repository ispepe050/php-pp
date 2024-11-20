<?php
include_once "header.php";
?>

<form action="procesa.php" method="get">
    <fieldset>
        <label for="nombre">Nomnre</label>
        <input type="text" id="nombre" name="nombre">
    </fieldset>
    <fieldset>
        <button type="submit">
            Envíar
        </button>
    </fieldset>
</form>

<?php
include_once "footer.php"
?>