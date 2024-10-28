// JavaScript Document
window.onload = function() {
  // Obtener todos los checkboxes
  const checkboxes = document.querySelectorAll('input[type="checkbox"]');

  // Iterar sobre cada checkbox
  checkboxes.forEach(checkbox => {
    const checkboxId = checkbox.id;
    
    // Verificar si hay un valor almacenado para cada checkbox en localStorage
    const isChecked = localStorage.getItem(checkboxId) === 'true';
    
    // Asignar el estado almacenado al checkbox
    checkbox.checked = isChecked;

    // Guardar el estado del checkbox cada vez que se cambie
    checkbox.addEventListener('change', function() {
      localStorage.setItem(checkboxId, checkbox.checked);
    });
  });
};
