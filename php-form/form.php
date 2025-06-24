<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Formulario</title>
  <style>
    .error { color: red; font-size: 0.9em; }
  </style>
</head>
<body>
  <h2>Formulario de Registro</h2>
  <form id="formulario">
    <label>Nombre:
      <input type="text" name="nombre" id="nombre">
      <div class="error" id="error-nombre"></div>
    </label><br><br>

    <label>Email:
      <input type="email" name="email" id="email">
      <div class="error" id="error-email"></div>
    </label><br><br>

    <label>Edad:
      <input type="number" name="edad" id="edad">
      <div class="error" id="error-edad"></div>
    </label><br><br>

    <button type="submit">Enviar</button>
  </form>

  <script>
    document.getElementById('formulario').addEventListener('submit', function(event) {
      let errores = false;

      const nombre = document.getElementById('nombre').value.trim();
      const email = document.getElementById('email').value.trim();
      const edad = parseInt(document.getElementById('edad').value);

      document.getElementById('error-nombre').textContent = '';
      document.getElementById('error-email').textContent = '';
      document.getElementById('error-edad').textContent = '';

      if (!nombre) {
        document.getElementById('error-nombre').textContent = 'Nombre es obligatorio';
        errores = true;
      }

      if (!email || !email.includes('@')) {
        document.getElementById('error-email').textContent = 'Email inválido';
        errores = true;
      }

      if (isNaN(edad) || edad < 18 || edad > 99) {
        document.getElementById('error-edad').textContent = 'Edad debe ser entre 18 y 99';
        errores = true;
      }

      if (errores) event.preventDefault();
    });
  </script>
</body>
</html>
