<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Visita</title>
</head>
<body>
    <form action="http://127.0.0.1:8000/api/visita-pdf" method="post">
        <label for="empresa">Empresa:</label>
        <input type="text" id="empresa" name="empresa" required>
        <br><br>
        
        <label for="razon_social">Razón Social:</label>
        <input type="text" id="razon_social" name="razon_social" required>
        <br><br>
        
        <label for="cuit">CUIT:</label>
        <input type="text" id="cuit" name="cuit" required>
        <br><br>
        
        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" required>
        <br><br>
        
        <label for="localidad">Localidad:</label>
        <input type="text" id="localidad" name="localidad" required>
        <br><br>

        <label for="motivo">Motivo:</label>
        <select name="motivo">
            <option value="rutina" selected>Visita de rutina</option>
            <option value="capacitacion">Capacitación</option>
            <option value="ambiente">Medio Ambiente</option>
            <option value="otros">Otros</option>
        </select>
        <br><br>
        
        <label for="observaciones">Observaciones:</label>
        <textarea id="observaciones" name="observaciones"></textarea>
        <br><br>
        
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
