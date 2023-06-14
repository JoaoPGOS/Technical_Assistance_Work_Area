plots = document.getElementById("plots");
// Example datasets for X and Y-axes 
var months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"]; //Stays on the X-axis 
var traffic = [65, 59, 80, 81, 56, 55, 60] //Stays on the Y-axis 

new Chart(plots, {
    type: 'bar', //Declare the chart type 
    data: {
    labels: months, //X-axis data 
    datasets: [{
    data: traffic, //Y-axis data 
    backgroundColor: '#3bf70c', //Color of the bars 
    }]
    },
    options:{
    legend: {display: false}, //Remove the legend box by setting it to false. It's true by default. 
    }
   });
