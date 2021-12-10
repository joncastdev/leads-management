getChart();


function getChart()
{
  
  $.ajax({
    url: BASE_URL+'api/gettotalchart/',   
    dataType: 'json'    
  })
  .done(function(result) {    

    chartData(result);

  });

}

function chartData(resp){

  var data = resp;        

  Morris.Donut({
    element: 'myfirstchart',
    data: [    
    {label: "Total Users", value: data[0].totalUsers},
    {label: "Total Leads", value: data[1].totalLeads}
    ]
  });

}





