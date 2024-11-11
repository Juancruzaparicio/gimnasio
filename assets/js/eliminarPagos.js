$(document).ready(function () {
    let pagoId; // Variable para almacenar el ID del cliente
  
    // Al hacer clic en el botón de eliminación, abrir el modal y capturar el ID del cliente
    $('.btnEliminarPago').on('click', function () {
      pagoId = $(this).data('id');
      console.log(pagoId);
    });
  
    // Foco automático en un campo específico al mostrar el modal
    $('#modal-danger').on('shown.bs.modal', function () {
      $('#confirmDeleteButtonPago').trigger('focus');
    });
  
    // Confirmar eliminación y redirigir
    $('#confirmDeleteButtonPago').on('click', function () {
      window.location.href = "?c=pago&a=ctrBorrarPago&id=" + pagoId;
    });
  });