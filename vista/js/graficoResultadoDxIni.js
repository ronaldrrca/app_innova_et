let widthScreenResultado = screen.width;
let stepSizeResultado;
let fontSizeResultado;

if (widthScreenResultado >= 1024) {
  stepSizeResultado = 1;
//   fontSizeResultado = 11;
}else{
  stepSizeResultado = 2;
//   fontSizeResultado = 12;
}

// Obteniendo los valores para el radar
const estrategia = document.getElementById("estrategia").innerHTML;
const gestion = document.getElementById("gestion").innerHTML;
const equipo = document.getElementById("equipo").innerHTML;
const potencialCrecimiento = document.getElementById("potencialCrecimiento").innerHTML;

// console.log(estrategia + " " + gestion + " " + equipo + " " + potencialCrecimiento);

  // Every ChartJS chart needs data with labels and datasets
  const data = {
      labels: ['Estrategia', 'Gestión', 'Equipo', 'Potencial crecimiento'],
      datasets: [   
          {
              data: [
                  estrategia, gestion, equipo, potencialCrecimiento
              ],
              borderWidth: 0,
              backgroundColor: ['rgba(12, 110, 207, 0.85)', 'rgba(13, 200, 125, 0.85)', 'rgba(98, 12, 197, 0.85)', 'rgba(215, 56, 16, 0.85)']
              
          }
      ]
  }

  // Every ChartJs chart can have multiple layout options
  const options = {
        responsive: true,
      scale: {
          
          gridLines: {
              color: '#444'
          },

          ticks: {
            beginAtZero: true,
            min: 0,
            stepSize: stepSizeResultado,
            fontSize: 12,
            fontColor: 'black',
            z: 1
          }
      },
      legend: {
          position: 'top',
          labels: {
              fontColor: '#000'
          }
      }
  }

  // Every ChartJS chart receives two arguments: the Canvas id to place the chart, and an object with: chart type, data to show, layout options object (optional)
  const myChart = new Chart('myChartDxiIniResultado', { type: 'polarArea', data, options })
