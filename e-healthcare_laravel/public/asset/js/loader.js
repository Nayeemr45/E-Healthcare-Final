var x = document.getElementById("val").value
google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
        var bmi1,bmi2,bmi3,bmi4=0
        if(x>0 && x<18.5){
            bmi1=x
        }
        else if(x>=18.5 && x<24.9){
            bmi2=x
        }
        else if(x>=25 && x<29.9){
            bmi3=x
        }
        else if(x>=30 && x<100){
            bmi4=x
        }
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        [ '',0, "white"],
        ["Underweight(>18.5)", bmi1, "yellow"],
        ["Healthy(18.5–24.9)", bmi2, "green"],
        ["Overweight(25–29.9)", bmi3, "orange"],
        ["Obese(<30)", bmi4, "red"],
        ["", 0, "color: #e5e4e2"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "BMI Chart",
        width: 930,
        height: 400,
        fontSize: 10,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }