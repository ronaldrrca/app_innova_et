let widthScreenResultado = screen.width;
let stepSizeResultado;
// let fontSizeResultado;

if (widthScreenResultado >= 1024) {
  stepSizeResultado = 0.5;
//   fontSizeResultado = 11;
}else{
  stepSizeResultado = 1;
//   fontSizeResultado = 12;
}

const estrategia = document.getElementById("estrategia").innerHTML;
const gestion = document.getElementById("gestion").innerHTML;
const equipo = document.getElementById("equipo").innerHTML;
const potencialCrecimiento = document.getElementById("potencialCrecimiento").innerHTML;

const estrategiaDx2 = document.getElementById("estrategiaDx2").innerHTML;
const gestionDx2 = document.getElementById("gestionDx2").innerHTML;
const equipoDx2 = document.getElementById("equipoDx2").innerHTML;
const potencialCrecimientoDx2 = document.getElementById("potencialCrecimientoDx2").innerHTML;


const ctx = document.getElementById('myChartComparativaResultadoComp').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Estrategia Dx1', 'Estrategia Dx2', 'Gestión Dx1', 'Gestión Dx2', 'Equipo Dx1', 'Equipo Dx2', 'P. Crecimiento Dx1', 'P. Crecimiento Dx2'],
        datasets: [{
            label: 'Comparativa resultados',
            data: [estrategia, estrategiaDx2, gestion, gestionDx2, equipo, equipoDx2, potencialCrecimiento, potencialCrecimientoDx2],
            backgroundColor: [
                'rgba(255, 159, 64, 0.5)',
                'rgba(75, 192, 192, 1)',
                'rgba(255, 159, 64, 0.5)',
                'rgba(75, 192, 192, 1)',
                'rgba(255, 159, 64, 0.5)',
                'rgba(75, 192, 192, 1)',
                'rgba(255, 159, 64, 0.5)',
                'rgba(75, 192, 192, 1)'
            ],
            borderColor: [
                'rgba(255, 159, 64, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(75, 192, 192, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        responvie: true,
        scales: {
          yAxes: [{
            ticks: {
                beginAtZero:true,
                min: 0,
                stepSize: stepSizeResultado
            }
        }]
        }
    }
});