getChart();


function getChart()
{

    // window.location=BASE_URL + 'leads/deleteLead/' + params;

    // // cargo los countrys con ajax
    $.ajax({
      url: BASE_URL+'api/gettotalchart/',   
      dataType: 'json'    
    })
    .done(function(result) {      

      // console.log(result);

      chartData(result);

    });

  }

  function chartData(resp){

    var data = resp;
        // lead = teads;

        // console.log(user);

        Morris.Donut({
          element: 'myfirstchart',
          data: [    
          {label: "Total Users", value: data[0].totalUsers},
          {label: "Total Leads", value: data[1].totalLeads}
          ]
        });

      }





