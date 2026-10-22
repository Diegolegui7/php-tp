# TP Login en PHP (sin base de datos)

Aplicación web en PHP, HTML y CSS que permite iniciar sesión a usuarios registrados.

- **Usuario:** `admin`
- **Contraseña:** `12345`

## Archivos

| Archivo | Función |
|---|---|
| `index.html` | Formulario de login |
| `carga.php` | Valida el login y muestra "Bienvenido Diego Leguizamon" |
| `error.php` | Mensaje de usuario o contraseña incorrectos |
| `usuarios.php` | Usuarios registrados (array en PHP, sin base de datos) |
| `salir.php` | Cierra la sesión |
| `estilos.css` | Estilos |

## Protección de páginas (investigación)

Se usan **sesiones de PHP**:

1. `session_start()` inicia o retoma la sesión del usuario.
2. Al validar el login se guarda `$_SESSION['logueado'] = true`.
3. Cada página protegida verifica esa variable y, si no existe, redirige con
   `header('Location: index.html'); exit;`

Así, si alguien escribe la URL de `carga.php` o `error.php` sin haber pasado por el login, vuelve al `index.html`.

## Cómo ejecutarlo

1. Copiar la carpeta en `C:\xampp\htdocs\`
2. Iniciar Apache en XAMPP
3. Abrir `http://localhost/tp_login/index.html`
