// Morris.Bar({
// 	element: 'myfirstchart',
// 	data: [
// 	{label: "Admins", value: 12},
// 	{label: "Users", value: 30},
// 	{label: "Teachers", value: 20},
// 	{label: "Students", value: 20}
// 	]
// });

/*
 * Play with this code and it'll update in the panel opposite.
 *
 * Why not try some of the options above?
 */
// Morris.Donut({
//   element: 'myfirstchart',
//   data: [
//     { y: '2006', a: 100 },
//     { y: '2007', a: 75 },  
//     { y: 'Total leads', a: 100 }
//   ],
//   xkey: 'y',
//   ykeys: ['a'],
//   labels: ['Series A', 'Series B']
// });

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





