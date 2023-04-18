

fetch('http://localhost:3000/api/sensor')
.then(response => response.json())
.then(data => {
  const tbody = document.querySelector('#tabla-datos tbody');
  data.forEach(item => {
    tbody.innerHTML += `
      <tr>
        <td>${item.sensor}</td>
        <td>${item.fecha}</td>
        <td>${item.hora}</td>
      </tr>
    `;
  });
  console.log(data);
})
.catch(error => console.error(error));