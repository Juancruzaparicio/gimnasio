$(document).ready(function () {
    let planId; // Variable para almacenar el ID del plan
  
    // Al hacer clic en el botón de eliminación, abrir el modal y capturar el ID del cliente
    $('.btnEliminarPlan').on('click', function () {
      planId = $(this).data('id');
      console.log(planId);
    });
  
    // Foco automático en un campo específico al mostrar el modal
    $('#modal-danger').on('shown.bs.modal', function () {
      $('#confirmDeleteButtonPlan').trigger('focus');
    });
  
    // Confirmar eliminación y redirigir
    $('#confirmDeleteButtonPlan').on('click', function () {
      window.location.href = "?c=plan&a=ctrBorrarPlan&id=" + planId;
    });
  });