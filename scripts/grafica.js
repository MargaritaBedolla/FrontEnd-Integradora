// Datos de entradas y salidas de personas
const data = {
    labels: ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'],
    datasets: [
      {
        label: 'Entradas',
        data: [120, 100, 140, 160, 200, 180, 220],
        backgroundColor: 'green',
        borderColor: 'rgba(54, 162, 235, 1)',
        borderWidth: 1
      },
      {
        label: 'Salidas',
        data: [80, 90, 120, 110, 150, 100, 130],
        backgroundColor: 'red',
        borderColor: 'rgba(255, 99, 132, 1)',
        borderWidth: 1
      }
    ]
  };
  
  // Opciones de la gráfica
  const options = {
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true
        }
      }]
    }
  };
  
  // Crear gráfica de barras
  const ctx = document.getElementById('myChart').getContext('2d');
  const myChart = new Chart(ctx, {
    type: 'bar',
    data: data,
    options: options
  });

  function cambiarTipoGrafica() {
    if (myChart.config.type === "bar") {
      myChart.config.type = "pie";
    } else {
      myChart.config.type = "bar";
    }
    myChart.update();
  }