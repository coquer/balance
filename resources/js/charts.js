require('chart.js/dist/Chart.bundle')

var ctx = document.getElementById('myChart');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['ינואר', 'פברואר', 'מרץ', 'אפריל', 'מאי','יוני', 'יולי', 'אוגוסט', 'ספטמבר', 'אוקטובר', 'נובמבר', 'דצמבר'],
        datasets: [{
            label:`תשלומי ${balance.nameOfChart} לפי תאריך תשלום`,
            data: balance.amounts,
            backgroundColor: [
                'rgb(255,99,132)',
                'rgba(54,162,235,0.79)',
                'rgb(255,206,86)',
                'rgba(75,192,192,0.96)',
                'rgba(153,102,255,0.91)',
                'rgba(255,159,64,0.88)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        tooltips: {
            mode: 'nearest'
        },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
