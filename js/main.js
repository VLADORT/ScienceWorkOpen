(function ($) {
    $(function () {
        $('.menu__icon').on('click', function () {
            $(this).closest('.icon-wrapper').toggleClass('menu_state_open');
            if ($('li.invisible').css("display") == "none") {

                $('li.invisible').removeClass('invisible');
            } else {
                $('ul.topnav li').addClass('invisible');
            }
        });
    });

})(jQuery);

$(document).ready(function () {
    $("#fl_inp").change(function () {
        var filename = $(this).val().replace(/.*\\/, "");
        $("#fl_nm").html(filename);
    });
});

google.charts.load('current', { 'packages': ['scatter'] });
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

    var data = new google.visualization.DataTable();
    data.addColumn('number', '');
    data.addColumn('number', '');

    data.addRows([
        [0, 67],
        [1, 88],
        [2, 77],
        [3, 93],
        [4, 85],
        [5, 91],
        [6, 71],
        [7, 78],
        [8, 93],
        [9, 80],
        [10, 82],
        [0, 75],
        [5, 80],
        [3, 90],
        [1, 72],
        [5, 75],
        [6, 68],
        [7, 98],
        [3, 82],
        [9, 94],
        [2, 79],
        [2, 95],
        [2, 86],


        [0.7, 67],
        [1.7, 88],
        [2.7, 77],
        [3.7, 93],
        [4.7, 85],
        [5.7, 91],
        [6.7, 71],
        [7.7, 78],
        [8.7, 93],
        [9.7, 80],
        [10.7, 82],
        [0.7, 75],
        [5.7, 80],
        [3.7, 90],
        [1.7, 72],
        [5.5, 75],
        [6.5, 68],
        [7.5, 98],
        [3.5, 82],
        [9.5, 94],
        [2.5, 79],
        [2.5, 95],
        [2.5, 86],


        [8.2, 67],
        [7.2, 88],
        [9.2, 77],
        [3.2, 93],
        [1.2, 85],
        [3.2, 91],
        [2.2, 71],
        [4.2, 78],
        [6.2, 93],
        [2.2, 80],
        [7.7, 82],
        [0.7, 75],
        [.2, 80],
        [9.2, 90],
        [4.2, 72],
        [7.2, 75],
        [3.2, 68],
        [6.2, 98],
        [6.2, 82],
        [6.2, 94],
        [6.2, 79],
        [2.5, 95],
        [6.2, 86],
        [2.3, 67],
        [4.3, 88],
        [7.3, 77],
        [8.3, 93],
        [6.3, 85],
        [3.3, 91],
        [2.3, 71],
        [5.3, 78],
        [6.3, 93],
        [8.3, 80],
        [9.7, 82],
        [4.7, 75],
        [5.3, 80],
        [5.3, 90],
        [6.3, 72],
        [4.3, 75],
        [6.3, 68],
        [8.3, 98],
        [2.3, 82],
        [3.3, 94],
        [5.3, 79],
        [2.5, 95],
        [5.3, 86],



        [3, 67],
        [4, 60],
        [2, 80],
        [6, 92],
        [2, 81],
        [8, 79],
        [9, 83],
        [3, 75],
        [1, 80],
        [3, 71],
        [3, 89],
        [4, 92],
        [5, 85],
        [6, 92],
        [7, 78],
        [6, 95],
        [3, 81],
        [0, 64],
        [4, 85],
        [2, 83],
        [3, 96],
        [4, 77],
        [5, 89],
        [4, 89],
        [7, 84],
        [4, 92],
        [9, 98]
    ]);

    var options = {
        width: 500,
        height: 320,
        'backgroundColor': 'transparent',


    };

    var chart = new google.charts.Scatter(document.getElementById('scatterchart_material'));

    chart.draw(data, google.charts.Scatter.convertOptions(options));
}