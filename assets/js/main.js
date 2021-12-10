// load modal to refresh page
$( document ).ready(function() {
  $('#modalFormLogin').modal('toggle')
});



// load  countrys with ajax
$.ajax({
  url: BASE_URL+'api/getcountrys',   
  dataType: 'json'    
})
.done(function(result) {

 // console.log(result); 

 $.each(result, function(index, val) {

    // console.log(val);
    $("#country").append('<option value="'+ val.id_country + '">' + val.country + '</option>')
   // $("#country").append('<option>' + val.country + '</option>')

 });
});



$.ajax({
  url: BASE_URL+'api/getstates',   
  dataType: 'json'    
})
.done(function(result) {

 // console.log(result); 

 $.each(result, function(index, val) {

   $("#state").append('<option value="'+ val.id_state + '">' + val.state + '</option>')
   // $("#state").append('<option>' + val.state + '</option>')

 });
});



$.ajax({
  url: BASE_URL+'api/getsources',   
  dataType: 'json'    
})
.done(function(result) {

 // console.log(result); 

 $.each(result, function(index, val) {

   $("#source").append('<option value="'+ val.id_source + '">' + val.source + '</option>')
   // $("#state").append('<option>' + val.state + '</option>')

 });
});


$.ajax({
  url: BASE_URL+'api/getsectors',   
  dataType: 'json'    
})
.done(function(result) {

 // console.log(result); 

 $.each(result, function(index, val) {

   $("#sector").append('<option value="'+ val.id_sector + '">' + val.sector + '</option>')
   // $("#state").append('<option>' + val.state + '</option>')

 });
});


$.ajax({
  url: BASE_URL+'api/getstateclients',   
  dataType: 'json'    
})
.done(function(result) {

 // console.log(result); 

 $.each(result, function(index, val) {

   $("#state_client").append('<option value="'+ val.id_state_client + '">' + val.state_client + '</option>')
   // $("#state").append('<option>' + val.state + '</option>')

 });
});


$.ajax({
  url: BASE_URL+'api/getqualifications',   
  dataType: 'json'    
})
.done(function(result) {

 // console.log(result); 

 $.each(result, function(index, val) {

   $("#qualification").append('<option value="'+ val.id_qualification + '">' + val.qualification + '</option>')
   // $("#state").append('<option>' + val.state + '</option>')

 });
});





$('#country').change(function(event) {

  var countryVal = $("#country").val();

  $.get(BASE_URL + 'api/getcombo',{countryVal: countryVal}, function(data){



      // parse the string
      var par = JSON.parse(data);


      $("#state").html('<option value="'+ par[0].id_state + '">' + par[0].state + '</option>');


      // remove the opction Select Country
      $("#option").remove();


    });



});


function pdfLeads(){

  window.location=BASE_URL + 'leads/leadspdf';
}





// //leads add
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
  var id_twitter = $("#id_twitter").val();
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
    id_twitter: id_twitter,
    description:description

  }, function(data) {
    /*optional stuff to do after success */

    var par = JSON.parse(data);

    // console.log(data);

    $("#msg_first_name").html(par.msg_first_name);
    $("#msg_last_name").html(par.msg_last_name);

    $("#msg_success").html(par.msg_success);

      // console.log(par);

      // table.ajax.reload();

      location.reload();



     //if (par.msg_success == "Register success") {     
      //window.location=BASE_URL + 'leads';
    //}     

  });





});







