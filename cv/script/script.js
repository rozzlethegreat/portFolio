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
        [ 'Place', 'Palmerston North', new Date(2012, 2, 2), new Date(2012, 6, 12)],
        [ 'Place', 'London', new Date(2012, 6, 12), new Date(2012, 10, 28)],
        [ 'Place', 'Palmerston North', new Date(2012, 10, 28), new Date(2013, 8, 15)],
        [ 'Place', 'London', new Date(2013, 8, 15), new Date(2014, 2, 1)],
        [ 'Place', 'Scotland', new Date(2014, 2, 1), new Date(2014, 6, 28)],
        [ 'Place', 'Holland', new Date(2014, 6, 28), new Date(2015, 7, 5)],
        [ 'Place', 'Wellington', new Date(2015, 7, 5), new Date(2017, 12, 15)],
        [ 'Work', 'Pak N Save', new Date(2012, 2, 2), new Date(2012, 6, 12) ],
        [ 'Work', 'Charity Fundraiser', new Date(2012, 8, 28), new Date(2012, 10, 28) ],
        [ 'Work', 'Post Haste', new Date(2012, 12, 10), new Date(2013, 8, 15) ],
        [ 'Work', 'Red 5', new Date(2013, 10, 1), new Date(2014, 2, 1) ],
        [ 'Work', 'Mad Mex', new Date(2015, 8, 28), new Date(2017, 12, 15) ],
        [ 'Study', 'KABK', new Date(2014, 7, 1), new Date(2015, 5, 28)],
        [ 'Study', 'Massey', new Date(2016, 2, 1), new Date(2016, 12, 5)],
        [ 'Study', 'Yoobee', new Date(2017, 2, 27), new Date(2017, 12, 15)]

    ]);

    chart.draw(dataTable, options);
}