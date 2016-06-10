$(document).ready(function () {
    getJson();
    getJsonTest();
});

function getJsonTest(){
    $.getJSON("js/donneesTest.json", function (data) {
        console.log(data.annees);
        console.log("------------------------------")
        console.log(data.secteurActivites);
        console.log("------------------------------")
        console.log(data.secteurActivites.construction.chiffreAffaire);
        console.log("Boucle for")
        for(secteurActivite in data.secteurActivites){
            //console.log(secteurActivite.chiffreAffaire);
            console.log(data.secteurActivites[secteurActivite].chiffreAffaire);
        }
    });
}

function getJson(){
    $.getJSON("js/donneesTest.json", function (data) {

        afficherGraphEmploye(data);
        afficherGraphEntreprise(data);
        afficherGraphCA(data);
    });
}

function afficherGraphEmploye(data) {
    console.log("graph line se lance !");
    var ctxy = document.getElementById("myChartEmploye");



    var data = {
        labels: data.annees,
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
                data: data.secteurActivites.construction.NombreSalaries,
            },{
                label: "My First dataset",
                fill: false,
                lineTension: 0.1,
                backgroundColor: "rgba(255, 99, 132,0.4)",
                borderColor: "rgba(255, 99, 132,1)",
                borderCapStyle: 'butt',
                borderDash: [],
                borderDashOffset: 0.0,
                borderJoinStyle: 'miter',
                pointBorderColor: "rgba(255, 99, 132,1)",
                pointBackgroundColor: "#fff",
                pointBorderWidth: 1,
                pointHoverRadius: 5,
                pointHoverBackgroundColor: "rgba(255, 99, 132,1)",
                pointHoverBorderColor: "rgba(220,220,220,1)",
                pointHoverBorderWidth: 2,
                pointRadius: 1,
                pointHitRadius: 10,
                data: data.secteurActivites.immobilier.NombreSalaries,
            },{
                label: "My First dataset",
                fill: false,
                lineTension: 0.1,
                backgroundColor: "rgba(54, 162, 235,0.4)",
                borderColor: "rgba(54, 162, 235,1)",
                borderCapStyle: 'butt',
                borderDash: [],
                borderDashOffset: 0.0,
                borderJoinStyle: 'miter',
                pointBorderColor: "rgba(54, 162, 235,1)",
                pointBackgroundColor: "#fff",
                pointBorderWidth: 1,
                pointHoverRadius: 5,
                pointHoverBackgroundColor: "rgba(54, 162, 235,1)",
                pointHoverBorderColor: "rgba(220,220,220,1)",
                pointHoverBorderWidth: 2,
                pointRadius: 1,
                pointHitRadius: 10,
                data: data.secteurActivites.industrie.NombreSalaries,
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
            labels: data.annees,
            datasets: [{
                label: "construction",
                data: data.secteurActivites.construction.NombreEntreprises,
                backgroundColor:
                    'rgba(255, 99, 132, 0.2)'
                ,
                borderColor:
                    'rgba(255,99,132,1)'
                ,
                borderWidth: 1
            },{
                label: 'immobilier',
                data: data.secteurActivites.immobilier.NombreEntreprises,
                backgroundColor:
                    'rgba(54, 162, 235, 0.2)'
                ,
                borderColor:
                    'rgba(54, 162, 235, 1)'
                ,
                borderWidth: 1
            },{
                label: 'industrie',
                data: data.secteurActivites.industrie.NombreEntreprises,
                backgroundColor:
                    'rgba(255, 206, 86, 0.2)'
                ,
                borderColor:
                    'rgba(255, 206, 86, 1)'
                ,
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