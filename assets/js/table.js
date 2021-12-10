var table;

$.ajax({
	url  : BASE_URL + 'leads/leadstable',
	// dataType: 'json',
  type: 'POST',
  cache: false,
  success :  function(result)
  {
     var par = JSON.parse(result);
  // console.log(result);
  // alert(result);		
   table = $('#leads').DataTable({
			// "searching": false, //esta es la propiedad para el filtrado
			"bProcessing": true,
			// rowId: 'staffId',
			data: par,               
			columns: [
			     
                {"data": null,"render": function (data) { 

                     return '<img height="70" width="70" src=" ' + BASE_URL + 'uploads/thumbnails/' + data.img + ' " class="img-responsive img-circle" />';
                   }},
                            
                { "data": "first_name" },
                // { "data": "last_name" },
                { "data": "company" },
                { "data": "email" },              
                { "data": "country" },
                { "data": "phone" },
                {"data": null,"render": function (data) { 
                 return '<a class="btn btn-info btn-lg" href=" ' + BASE_URL + 'leads/view/' + data.id_lead +'"><span class="far fa-eye"></span></a>';
               }},
                 
                ],


            });//end table


// alert(result);    
   
	}
});



function deleteLead(params)
{


    swal({
      title: 'Are you sure to delete this record?',
      text: 'There is no way back!',
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      confirmButtonText: 'You accept?',
      cancelButtonColor: '#d33'    

    }).then(function(result) {      

        
         if (result) {

          confirmDelete(params);

        }

      }, function(err) {   

      });

  }


  function confirmDelete(params)
  {

   
    $.ajax({
      url: BASE_URL+'leads/deletelead/' + params,   
      dataType: 'json'    
    })
    .done(function(result) {
        

        if (result.leadd == 'delete') {
          
           $("#lead_delete").html('<p>'+result.leadd+'<p>');

            location.reload();
        }


      });



  }





