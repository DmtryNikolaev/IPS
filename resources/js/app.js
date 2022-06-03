import axios from 'axios'
import Chartist from 'chartist';

async function getRecords() {
    return await axios.get('/records/all');
}

(async function () {
    let dates = (await getRecords()).data.map((item) => item.date);
    let values = (await getRecords()).data.map((item) => item.value);


    new Chartist.Line('.ct-chart', {
        labels: [...dates],
        series: [
            // [1],
            // [2],
            // [1, 3, 4, 5, 6]
            [...values]
        ]
    }, {
        fullWidth: true,
        chartPadding: {
            right: 40
        }
    });
}());
