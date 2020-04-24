// google
google.charts.load('current', { 'packages': ['bar'] });
google.charts.setOnLoadCallback(drawStuff);

// charts.js
var ctx = document.getElementById('myChart').getContext('2d');

// gera os dados 
var label = []
var assitencia = []
$.getJSON('/grafico_cidade_dados', obj => {
  obj.forEach(element => {
    label.push([element.uf])
    assitencia.push(element.num)
  });
  // drawStuff()

  // chats.js 
  var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
      labels: label,
      datasets: [{
        label: 'Quantidade de famílias que precisam de assistência no Brasil',
        backgroundColor: '#148b7e',
        data: assitencia
      }]
    },

    // Configuration options go here
    options:  {
      scales: {
          xAxes: [{
              stacked: true
          }],
          yAxes: [{
              stacked: true
          }]
      }
  }
  });
})



// google
function drawStuff() {
  var data = new google.visualization.arrayToDataTable(assitencia);

  var options = {
    legend: { position: 'none' },
    chart: {
      title: '',
      subtitle: ''
    },
    axes: {
      x: {
        0: { side: 'top', label: ''} // Top x-axis.
      }
    },
    bar: { groupWidth: "10%" }
  };

  var chart = new google.charts.Bar(document.getElementById('columnchart_material'));
  // Convert the Classic options to Material options.
  chart.draw(data, google.charts.Bar.convertOptions(options));
};