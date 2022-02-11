let widthScreenRI = screen.width;
let stepSizeRI;

if (widthScreenRI >= 1024) {
  stepSizeRI = 1;
}else{
  stepSizeRI = 2;
}

// Obteniendo los valores para el radar
const bmv = document.getElementById("bmv").innerHTML;
const bmp = document.getElementById("bmp").innerHTML;
const bmt = document.getElementById("bmt").innerHTML;
const bmux = document.getElementById("bmux").innerHTML;
const bmps = document.getElementById("bmps").innerHTML;

// console.log(screen.width);


const ctx2 = document.getElementById("myChartDxIniRutaInnovacion");
const myChart2 = new Chart(ctx2, {
  type: "polarArea",
  data:{
    labels:['BMV', 'BMP', 'BMT', 'BMUx', 'BMPs'],
    datasets:[ {
      data: [
          bmv, bmp, bmt, bmux, bmps
      ],
      borderWidth: 0,
      backgroundColor: ['rgba(12, 110, 207, 0.85)', 'rgba(13, 200, 125, 0.85)', 'rgba(255, 190, 34, 0.85)', 'rgba(215, 56, 16, 0.85)', 'rgba(98, 12, 197, 0.85)']
      
  }]
  },
  options:{
    responsive: true,
    scale:{
      gridLines: {
        color: '#444'
    },

    ticks: {
      beginAtZero: true,
      min: 0,
      stepSize: stepSizeRI,
      fontSize: 12,
      fontColor: 'black',
      z: 1
    }
    },

    legend:{
      position: 'top',
          labels: {
              fontColor: '#000'
          }
    }
  }
  
});

