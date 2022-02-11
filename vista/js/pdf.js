

var descargar = document.getElementById("descargar");
var descargar2 = document.getElementById("descargar2");

var area = document.getElementById('area-pdf');
    var opt = {
        margin:       1,
        filename:     'Resultado_diagnostico.pdf',
        image:        { type: 'jpeg', quality: 0.98 },
        html2canvas:  { scale: 2 },
        jsPDF:        { unit: 'mm', format: 'letter', orientation: 'portrait' }
      };


descargar.addEventListener("click", function(){
      // New Promise-based usage:
      html2pdf().set(opt).from(area).save();
})

descargar2.addEventListener("click", function(){
      // New Promise-based usage:
      html2pdf().set(opt).from(area).save();
})