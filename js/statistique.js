$(document).ready(function () {
    getJson();
    getJsonTest();
});

function getJsonTest(){
    $.getJSON("js/donneesTest.json", function (data) {
        console.log(data.annees);
        console.log(data.secteurActivites.construction.chiffreAffaire);
    });
}

function getJson(){
    $.getJSON("js/donnees.json", function (data) {
        afficherGraphEmploye(data);
        afficherGraphEntreprise(data);
        afficherGraphCA(data);
    });
}

function afficherGraphEmploye(data) {
    console.log("graph line se lance !");
    var ctxy = document.getElementById("myChartEmploye");



    var data = {
        labels: data.mois,
        datasets: [
            {
                label: "My First dataset",
                fill: false,
                lineTension: 0.1,
                backgroundColor: "rgba(75,192,192,0.4)",
                borderColor: "rgba(75,192,192,1)",
                borderCapStyle: 'butt',
                borderDash: [],
                borderDashOffset: 0.0,
                borderJoinStyle: 'miter',
                pointBorderColor: "rgba(75,192,192,1)",
                pointBackgroundColor: "#fff",
                pointBorderWidth: 1,
                pointHoverRadius: 5,
                pointHoverBackgroundColor: "rgba(75,192,192,1)",
                pointHoverBorderColor: "rgba(220,220,220,1)",
                pointHoverBorderWidth: 2,
                pointRadius: 1,
                pointHitRadius: 10,
                data: data.points,
            }
        ]
    };

    var myLineChart = new Chart(ctxy, {
        type: 'line',
        data: data
    });
}

function afficherGraphEntreprise(data){
    var ctx = document.getElementById("myChartEntreprise");
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: data.mois,
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
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
            fullWidth: false
        }
    });
}

function afficherGraphCA(data){
    console.log("Afficher le graph CA");
    document.getElementById("myChartCA").innerHTML = "Afficher le graph CA !";
}