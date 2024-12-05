document.getElementById('registerForm').addEventListener('submit', async (event) => {
  event.preventDefault();
  
  const username = document.getElementById('username').value;
  const email = document.getElementById('email').value;
  const password = document.getElementById('password').value;
  const confirmPassword = document.getElementById('confirm-password').value;
  
  if (password !== confirmPassword) {
      alert("Las contraseñas no coinciden.");
      return;
  }

  try {
      const response = await fetch('register.php', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify({ username, email, password })
      });
      const result = await response.json();

      if (result.success) {
          alert("¡Registro exitoso! Puedes iniciar sesión ahora.");
          window.location.href = 'iniciar.php';
      } else {
          alert("Error: " + result.message);
      }
  } catch (error) {
      console.error("Error en el registro:", error);
      alert("Hubo un error en el registro. Inténtalo nuevamente.");
  }
});
