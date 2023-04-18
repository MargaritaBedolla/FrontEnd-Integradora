fetch('http://localhost:3000/api/datos/')
.then(response => response.json())
.then(data => {
  let datosDiv = document.getElementById('actual');
  let limite = data[0].limite;
  datosDiv.innerHTML = limite;
})
.catch(error => console.error(error));

$(document).ready(function() {
    $('#guardar').click(function() {
      let nuevoLimite = $('#nuevolimite').val();
      let data = {limite: nuevoLimite};
      
      $.ajax({
        type: 'PUT',
        url: 'http://localhost:3000/api/datos/'+nuevoLimite,
        data: JSON.stringify(data),
        contentType: 'application/json',
        success: function(response) {
          location.reload();
        },
        error: function(error) {
          console.error(error);
          alert('Ha ocurrido un error al actualizar el límite.');
        }
      });
    });
  });