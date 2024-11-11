$(document).ready(function () {
  let clienteId; // Variable para almacenar el ID del cliente

  // Al hacer clic en el botón de eliminación, abrir el modal y capturar el ID del cliente
  $('.btnEliminarCliente').on('click', function () {
    clienteId = $(this).data('id');
    console.log(clienteId);
  });

  // Foco automático en un campo específico al mostrar el modal
  $('#modal-danger').on('shown.bs.modal', function () {
    $('#confirmDeleteButton').trigger('focus');
  });

  // Confirmar eliminación y redirigir
  $('#confirmDeleteButton').on('click', function () {
    window.location.href = "?c=cliente&a=ctrBorrarCliente&id=" + clienteId;
  });
});