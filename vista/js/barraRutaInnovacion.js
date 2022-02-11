const bmv = document.getElementById("bmv").innerHTML;
const bmp = document.getElementById("bmp").innerHTML;
const bmt = document.getElementById("bmt").innerHTML;
const bmux = document.getElementById("bmux").innerHTML;
const bmps = document.getElementById("bmps").innerHTML;

const dxFinal_bmv = document.getElementById("dxFinal_bmv").innerHTML;
const dxFinal_bmp = document.getElementById("dxFinal_bmp").innerHTML;
const dxFinal_bmt = document.getElementById("dxFinal_bmt").innerHTML;
const dxFinal_bmux = document.getElementById("dxFinal_bmux").innerHTML;
const dxFinal_bmps = document.getElementById("dxFinal_bmps").innerHTML;

// const estrategiaDx2 = document.getElementById("estrategiaDx2").innerHTML;
// const gestionDx2 = document.getElementById("gestionDx2").innerHTML;
// const equipoDx2 = document.getElementById("equipoDx2").innerHTML;
// const potencialCrecimientoDx2 = document.getElementById("potencialCrecimientoDx2").innerHTML;


const ctx2 = document.getElementById('myChartComparativaRutaInnovacionComp').getContext('2d');
const myChart2 = new Chart(ctx2, {
    type: 'bar',
    data: {
        labels: ['BMV Dx1', 'BMV Dx2', 'BMP Dx1', 'BMP Dx2', 'BMT Dx1', 'BMT Dx2', 'BMUX Dx1', 'BMUX Dx2', 'BMPS Dx1', 'BMPS Dx1'],
        datasets: [{
            label: 'Comparativa ruta de innovación',
            data: [bmv, dxFinal_bmv, bmp, dxFinal_bmp, bmt, dxFinal_bmt, bmux, dxFinal_bmux, bmps, dxFinal_bmps],
            backgroundColor: [
                'rgba(255, 159, 64, 0.5)',
                'rgba(75, 192, 192, 1)',
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
                beginAtZero:true
            }
        }]
        }
    }
});