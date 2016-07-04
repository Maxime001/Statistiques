function getJson(){
    $.getJSON("js/donneesTest.json", function (data) {
        afficherGraphEmploye(data);
        afficherGraphEntreprise(data);
        afficheGraphe3(data);
    });
}

function afficheGraphe3(data){
    var nombreAnnee = data.annees.length;
        for(var j=0;j<nombreAnnee;j++){
            document.getElementById("graphe3").innerHTML += '<p><div style=\"text-align:center;font-family:calibri;font-size:25px\">Année '+data.annees[j]+' </div></p><p><canvas id=\"'+j+'"></canvas></p>';
        }
        for(var i=0;i<nombreAnnee;i++){
           afficherGraphCA(data,i);
        }
}


function afficherGraphEmploye(data) {
    console.log("graph line se lance !");
    var ctxy = document.getElementById("myChartEmploye");



    var data = {
        labels: data.annees,
        datasets: [
            {
                label: "construction",
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
               // pointStyle:"cross",
                data: data.secteurActivites.Construction.NombreSalaries
            },{
                label: "immobilier",
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
                data: data.secteurActivites.Activites.NombreSalaries,
            },{
                label: "industrie",
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
                data: data.secteurActivites.Industrie.NombreSalaries
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
                data: data.secteurActivites.Construction.NombreEntreprises,
                backgroundColor:
                    'rgba(255, 99, 132, 0.2)'
                ,
                borderColor:
                    'rgba(255,99,132,1)'
                ,
                borderWidth: 1
            },{
                label: 'immobilier',
                data: data.secteurActivites.Activites.NombreEntreprises,
                backgroundColor:
                    'rgba(54, 162, 235, 0.2)'
                ,
                borderColor:
                    'rgba(54, 162, 235, 1)'
                ,
                borderWidth: 1
            },{
                label: 'industrie',
                data: data.secteurActivites.Industrie.NombreEntreprises,
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

// camembert
function afficherGraphCA(data,i){
    var ctx = document.getElementById(i);
    console.log("Afficher le graph CA");
    
    var data = {
    labels: [
        "Red",
        "Blue",
        "Yellow"
    ],
    datasets: [
        {
            data: [data.secteurActivites.Construction.chiffreAffaire[i],data.secteurActivites.Activites.chiffreAffaire[i],data.secteurActivites.Industrie.chiffreAffaire[i]],
            backgroundColor: [
                "#FF6384",
                "#36A2EB",
                "#FFCE56"
            ],
            hoverBackgroundColor: [
                "#FF6384",
                "#36A2EB",
                "#FFCE56"
            ]
        }]
};
    
    var myPieChart = new Chart(ctx,{
        type: 'pie',
        data: data

    });
    
}

