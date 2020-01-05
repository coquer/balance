require('chart.js/dist/Chart.bundle')

let ctx = document.getElementById('myChart');
window.myChart = new Chart(ctx, {
    type: 'line',
    data: {
        datasets: [{
            label: 'תשלומים אשר שולמו בשנה הנכחית',
            data: balance.amounts,
            backgroundColor: [
                'rgb(255,106,0)'
            ],
            borderWidth: 1
        }],
        labels: ['ינואר', 'פברואר', 'מרץ', 'אפריל', 'מאי', 'יוני', 'יולי', 'אוגוסט', 'ספטמבר', 'אוקטובר', 'נובמבר', 'דצמבר']
    },
    options: {
        title: {
            display: true,
            text: `תשלומי ${balance.nameOfChart}`,
            fontSize: 15
        },
        tooltips: {
            mode: 'nearest'
        }
    }
});
