require('chart.js/dist/Chart.bundle')

let ctx = document.getElementById('myChart');
window.myChart = new Chart(ctx, {
    type: 'line',
    data: {
        datasets: [{
            label: 'תשלומים אשר שולמו בשנה הנכחית',
            data: balance.amounts,
            fill: false,
            backgroundColor: 'rgb(255,106,0)',
            borderColor: 'rgb(0,113,255)',
            borderWidth: 1
        }],
        labels: ['ינואר', 'פברואר', 'מרץ', 'אפריל', 'מאי', 'יוני', 'יולי', 'אוגוסט', 'ספטמבר', 'אוקטובר', 'נובמבר', 'דצמבר']
    },
    options: {
        title: {
            display: true,
            text: `תשלומי ${balance.nameOfChart}`,
            fontSize: 20
        },
        tooltips: {
            mode: 'nearest'
        }
    }
});
