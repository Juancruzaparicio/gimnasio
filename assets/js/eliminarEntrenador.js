$(document).ready(function () {
    let entrenadorId; // Variable para almacenar el ID del cliente
  
    // Al hacer clic en el botón de eliminación, abrir el modal y capturar el ID del cliente
    $('.btnEliminarEntrenador').on('click', function () {
      entrenadorId = $(this).data('id');
      console.log(entrenadorId);
    });
  
    // Foco automático en un campo específico al mostrar el modal
    $('#modal-danger').on('shown.bs.modal', function () {
      $('#confirmDeleteButtonEntrenador').trigger('focus');
    });
  
    // Confirmar eliminación y redirigir
    $('#confirmDeleteButtonEntrenador').on('click', function () {
      window.location.href = "?c=entrenador&a=BorrarEntrenador&id=" + entrenadorId;
    });
  });