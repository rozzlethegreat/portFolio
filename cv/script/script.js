google.charts.load("current", {packages:["timeline"]});
google.charts.setOnLoadCallback(drawChart);
function drawChart() {

    var options = {
        colors: ['#65c3a5', '#36aa85', '#4b917b','#26785e']
    };

    var container = document.getElementById('timeline');
    var chart = new google.visualization.Timeline(container);
    var dataTable = new google.visualization.DataTable();
    dataTable.addColumn({ type: 'string', id: 'Position' });
    dataTable.addColumn({ type: 'string', id: 'Name' });
    dataTable.addColumn({ type: 'date', id: 'Start' });
    dataTable.addColumn({ type: 'date', id: 'End' });
    dataTable.addRows([
        // [ 'Place', 'Palmerston North', new Date(2012, 1, 2), new Date(2012, 5, 12)],
        // [ 'Place', 'London', new Date(2012, 5, 12), new Date(2012, 9, 28)],
        // [ 'Place', 'Palmerston North', new Date(2012, 9, 28), new Date(2013, 7, 15)],
        // [ 'Place', 'London', new Date(2013, 7, 15), new Date(2014, 1, 1)],
        // [ 'Place', 'Scotland', new Date(2014, 1, 1), new Date(2014, 5, 28)],
        [ 'Place', 'Holland', new Date(2014, 6, 1), new Date(2015, 6, 5)],
        [ 'Place', 'Wellington', new Date(2015, 6, 5), new Date(2020, 3, 31)],
        // [ 'Work', 'Pak N Save', new Date(2012, 1, 2), new Date(2012, 5, 12) ],
        // [ 'Work', 'Charity Fundraiser', new Date(2012, 7, 28), new Date(2012, 9, 28) ],
        // [ 'Work', 'Post Haste', new Date(2012, 11, 10), new Date(2013, 7, 15) ],
        // [ 'Work', 'Red 5', new Date(2013, 9, 1), new Date(2014, 1, 1) ],
        [ 'Work', 'Mad Mex', new Date(2015, 7, 28), new Date(2017, 8, 28) ],
        [ 'Work', 'BNZ', new Date(2017, 8, 28), new Date(2018, 2, 16) ],
        [ 'Work', 'Xequals', new Date(2019, 6, 16), new Date(2020, 3, 31) ],
        [ 'Work', 'Flinch Marketing', new Date(2018, 2, 16), new Date(2020, 3, 31) ],
        [ 'Study', 'KABK', new Date(2014, 6, 1), new Date(2015, 4, 28)],
        [ 'Study', 'Massey', new Date(2016, 1, 1), new Date(2016, 11, 5)],
        [ 'Study', 'Yoobee', new Date(2017, 1, 27), new Date(2017, 11, 15)]

    ]);

    chart.draw(dataTable, options);
}