// tablas

// $("button").click(function(){
//     $("p").toggle();
//   });

// $("#sidebarToggle, #sidebarToggleTop").on('click', function(e) {
//     $("body").toggleClass("sidebar-toggled");
//     $(".sidebar").toggleClass("toggled");
//     if ($(".sidebar").hasClass("toggled")) {
//       $('.sidebar .collapse').collapse('hide');
//     };
//   });

// declaro la variable afuera de las funciones, por que si declaro
// adentro de las funciones esta fuera del scope
var table;

$.ajax({
	url  : BASE_URL + 'leads/leadstable',
	// dataType: 'json',
  type: 'POST',
  cache: false,
  success :  function(result)
  {		
   table = $('#leads').DataTable({
			// "searching": false, //esta es la propiedad para el filtrado
			"bProcessing": true,
			// rowId: 'staffId',
			data: result,               
			columns: [
			     // '<img src=" ' + BASE_URL + 'uploads/thumbnails/' + result.img + ' " class="img-responsive img-circle" />'           
                // { "mData": "BASE_URL" },
                // { "data": "id_lead" },
                // { "data": "img" },
                {"data": null,"render": function (data) { // obligatorio porner data si no llega como indefinido

                     return '<img height="70" width="70" src=" ' + BASE_URL + 'uploads/thumbnails/' + data.img + ' " class="img-responsive img-circle" />';
                   }},
                // { "sDefaultContent": BASE_URL + result[0].email },               
                { "data": "first_name" },
                // { "data": "last_name" },
                { "data": "company" },
                { "data": "email" },              
                { "data": "country" },
                { "data": "phone" },
                {"data": null,"render": function (data) { // obligatorio porner data si no llega como indefinido
                	// return '<button type="button" value="id_lead" id="editar" class="editar edit-modal btn btn-warning botonEditar"><span class="fa fa-edit"></span><span class="hidden-xs"> Editar</span></button>';
               // return '<a type="button" id="editar" class="btn btn-info"><span class="fa fa-edit"></span><span class="hidden-xs"> Editar</span></a';
                 // return '<a href="'+ data.id_lead +'">'+ data.id_lead +'</a>';
                 return '<a class="btn btn-info btn-lg" href=" ' + BASE_URL + 'leads/view/' + data.id_lead +'"><span class="far fa-eye"></span></a>';
               }},
                   // {"data": null,"render": function (data) { // obligatorio porner data si no llega como indefinido

                   //   return '<a class="btn btn-success" href="'+ data.id_lead +'"><span class="fas fa-edit"></span></a>';
                   // }},
                   // {"data": null,"render": function (data) { // obligatorio porner data si no llega como indefinido

                   //   return '<a class="btn btn-danger" onclick="deleteLead('+ data.id_lead +')" ><span class="fas fa-trash-alt"></span</a>';
                   // }},

                  

                // { "data": null, "render": 'position' }
                // "render": function ( data, type, row, meta ) {
                // 	return '<a href="'+data+'">Download</a>';
                // }
                // { "data": "img","[, ].name"}
                // { "sDefaultContent": "<button type='submit' class='btn btn-primary btn-user btn-block'>View</button>" },
                // { "sDefaultContent": "<button type='submit' class='btn btn-success btn-user btn-block'>Edit</button>"  },
                // { "sDefaultContent": "<button type='submit' class='btn btn-danger btn-user btn-block'>Delete</button>" }
                ],


            });//end table

        // table.ajax.reload();


        // table.destroy();





		// editar("#leads tbody",datatable);

    // reloadTable(table);


	}
});

// table.ajax.reload(null,false);

// $('#leads').DataTable().ajax.reload();
// table.ajax.reload();


// function reloadTable(params){

//   // table.ajax.reload(null,false);

//   params.ajax.reload();

//   // console.log(params);
// }

// console.log(reloadTable());

//leads add
$("#leadsAdd").submit(function(event) {
  event.preventDefault();



  var first_name = $("#first_name").val();
  var last_name = $("#last_name").val();
  var company = $("#company").val();
  var email = $("#email").val();
  var street = $("#street").val();
  var country = $("#country").val();
  var city = $("#city").val();
  var state = $("#state").val();
  var postal_code = $("#postal_code").val(); 
  var title = $("#title").val();
  var phone = $("#phone").val();
  var cell_phone = $("#cell_phone").val();
  var source = $("#source").val();
  var sector = $("#sector").val();
  var income = $("#income").val();
  var fax = $("#fax").val();
  var website = $("#website").val();
  var state_client = $("#state_client").val()
  var quantity_worker = $("#quantity_worker").val();
  var qualification = $("#qualification").val();
  var id_skype = $("#id_skype").val();
  var id_twiiter = $("#id_twiiter").val();
  var description = $("#description").val();

  // console.log(role);

  $.post(BASE_URL + 'leads/register',
  {
    first_name: first_name,
    last_name: last_name,
    email: email,
    company: company,
    street: street,   
    country: country,
    city: city,
    state: state,
    postal_code: postal_code,
    title: title,
    phone: phone,
    cell_phone: cell_phone,
    source: source,
    sector: sector,
    income: income,
    fax: fax,
    website: website,
    state_client: state_client,
    quantity_worker: quantity_worker,
    qualification: quantity_worker,
    id_skype: id_skype,
    id_twiiter: id_twiiter,
    description:description
    
  }, function(data) {
    /*optional stuff to do after success */

    var par = JSON.parse(data);

    // console.log(data);

    $("#msg_first_name").html(par.msg_first_name);
    $("#msg_last_name").html(par.msg_last_name);

    $("#msg_success").html(par.msg_success);

    // table.ajax.reload(null,false);

      // console.log(par);

      // console.log(table);

      // table.ajax.reload();

      // $('#leads').DataTable().ajax.reload();

      // table = $("#leads").DataTable();

      // table.ajax.reload();

    //   setInterval( function () {
    //     table.ajax.reload();
    // }, 30000 );



     if (par.msg_success == "Register success") {     
      window.location=BASE_URL + 'leads';
    }     

  });





});



function deleteLead(params)
{

    // swal("Hola mundo!");

    // console.log(params);
    // console.log(dos);

    // if (datos === 'admin') {

    //   isAdministrator();

    // }




    swal({
      title: 'Are you sure to delete this record?',
      text: 'There is no way back!',
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      confirmButtonText: 'You accept?',
      cancelButtonColor: '#d33'    

    }).then(function(result) {      

         // verificamos si ahy resultados
         if (result) {

          confirmDelete(params);

        }

      }, function(err) {   

      });

  }

  // funcion para ir a la ruta para eliminar
  function confirmDelete(params)
  {

    // window.location=BASE_URL + 'leads/deleteLead/' + params;

    // // cargo los countrys con ajax
    $.ajax({
      url: BASE_URL+'leads/deletelead/' + params,   
      dataType: 'json'    
    })
    .done(function(result) {

        // table.ajax.reload();

        console.log(result);

        // table.ajax.reload(); 

        // $("#lead_delete").html('<p>'+result+'<p>');

          // no necesito hacer parse por que result ya bino 
          // como objeto en este caso
        // var par = JSON.parse(result);

          // console.log(par.leadd);
          console.log(result.leadd);

        if (result.leadd == 'delete') {
           // window.location=BASE_URL + 'leads';
           $("#lead_delete").html('<p>'+result.leadd+'<p>');
        }


      });



  }





