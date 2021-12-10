<!-- Content Row -->
<div class="row">

  <div class="col-lg-12 text-center">

    <h4 class="bg-danger text-light" >

      <?php if($this->session->flashdata('deleteUser')): ?>

        <?php echo $this->session->flashdata('deleteUser'); ?>

      <?php endif; ?>

    </h4>

    <h4 class="bg-info text-light" >

      <?php if($this->session->flashdata('noDelete')): ?>

        <?php echo $this->session->flashdata('noDelete'); ?>

      <?php endif; ?>

    </h4>



    <h4 class="bg-warning text-light" >

      <?php if($this->session->flashdata('emailNoRegister')): ?>

        <?php echo $this->session->flashdata('emailNoRegister'); ?>

      <?php endif; ?>

    </h4>

    <h4 class="bg-success text-light" >

      <?php if($this->session->flashdata('promo')): ?>

        <?php echo $this->session->flashdata('promo'); ?>

      <?php endif; ?>

    </h4>
    
  </div>



  <div class="col-lg-12 mb-4">

    <!-- Illustrations -->
    <!-- <div class="card shadow mb-4"> -->
      <!-- <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary text-center">Usuarios</h6>
      </div> -->
      <br>

      <?php if($data): ?>

        <div class="card-body">
        <!-- <div class="text-center">
        -->
        




        <!-- <div class="container "> -->

          <!-- <div class="card o-hidden border-0 shadow-lg my-5"> -->
            <!-- <div class="card-body p-0"> -->
              <!-- Nested Row within Card Body -->
              <!-- <div class="row"> -->
                <!-- <div class="col-lg-5 d-none d-lg-block "></div> -->
                <div class="col-lg-12">
                  <!-- <div class="p-5"> -->

                    <!-- clase que centra -->
                    <!-- <div class="p-5"> -->

                      <!-- <?php //if(count($data)): ?> -->

                      <div>

                        <a id="" data-toggle="modal" data-target="#test"><span class="btn btn-info  btn-md">Add</span></a>     

                        <a id="pdf" onclick="pdfLeads()"><span class="btn btn-danger  btn-md">PDF</span></a>

                        <a id="excel" onclick="excel()"><span class="btn btn-warning  btn-md">XLS</span></a>

                      </div>                     

                      <!--   <table id="users"class="table table-responsive table-hover table-borderless " > -->

                        <table id="leads" class="table table-responsive table-striped">     

                          <thead class="thead-dark">
                            <tr>

                              <th>Img</th>
                              <th>Name</th>
                              <!--  <th>Last Name</th> -->
                              <th>Company</th>                         
                              <th>Email</th>
                              <th>Country</th>
                              <th>Phone</th>
                              <th>View</th>                          
                              <!-- <th></th> -->
                            <!--  <th></th>
                             <th></th> -->





                              <!-- <th>Img</th>
                              <th>id_user</th>
                              <th>F name</th>
                              <th>L name</th>                         
                              <th>Email</th>
                              <th>Country</th>
                              <th>State</th>
                              <th>Role</th> -->
                           <!--  <th>Creado</th>
                            <th>Actualizado</th> -->
                            <!-- <th>View</th>
                            <th>Edit</th>
                            <th>Delete</th>
                          -->

                        </tr>
                      </thead>                     

                       <!--  <tbody>

                       </tbody> -->

                     </table>

                     <!-- <?php //endif; ?>   -->  

               <!--   <br>
                 <br>
                 <br>   -->         



                 <!--  end centra -->
                 <!-- </div> -->

               </div>

               <!--  end row -->
               <!--  </div> -->

               <!-- </div> -->
               <!--    </div> -->

               <!-- end container -->
               <!--  </div> -->


               <br>
               <br>
               <br>


               <!-- </div> -->

             </div>

           <?php endif; ?>

           <!--  end shadow -->
    <!--  </div>  
    -->


  </div>
</div>




<!-- modal de registro -->

<div class="modal fade" id="test" role="dialog">
 <div class="modal-dialog modal-lg">
  <div class="modal-content">
    <div class="modal-header">
     <!--  <button type="button" class="close" data-dismiss="modal"></button> -->
      <!--  <h4 class="modal-title">Agregar usuario</h4>
       <br> -->
       <h4 class="modal-title">Add Lead</h4>
       <h4 class="text-success" id="msg_success"></h4>
       <!-- <h4 class="text-danger" id="msg_first_name"></h4>
         <h4 class="text-danger" id="msg_last_name"></h4> -->
       </div>
       <div class="modal-body">
        <!-- <?php //echo form_open('','class="form-inline"','id="leadsAdd"') ?>  -->
        <?php echo form_open('','id="leadsAdd"') ?>   

        <div class="form-group  form-inline">

          <div class="col-sm-4">
            <input type="text" class="form-control form-control-user" name="first_name" id="first_name"  placeholder="First name">
            <p class="text-danger" id="msg_first_name"></p>

          </div>         

          <!-- </div> -->
          <div class="col-sm-4" >
            <!--  <div class="form-group col-sm-6"> -->
              <input type="text" class="form-control form-control-user" name="last_name" id="last_name"  placeholder="Last name">
              <p class="text-danger" id="msg_last_name"></p>
            </div>

            <div class="col-sm-4" >
              <input type="text" class="form-control form-control-user" name="company" id="company"  placeholder="Company">
              <p class="text-danger" id=""></p>
            </div>

          </div>

          <div class="form-group form-inline form-inline">

           <div class="col-sm-4" >
            <input type="email" class="form-control form-control-user" name="email" id="email"  placeholder="Email">
          </div>

          <div class="col-sm-4" >
           <input type="text" class="form-control form-control-user" name="street" id="street"  placeholder="Street">
         </div>

         <div class="col-sm-4" >
           <input type="text" class="form-control form-control-user" name="city" id="city"  placeholder="City">
         </div>




       </div>

       <div class="form-group form-inline">

         <div class="col-sm-4" >
           <select class="form-control" name="country" id="country">
            <option id="option" value="">Select Country</option>       
          </select>
        </div>

        <div class="col-sm-4" >
         <select class="form-control" name="state" id="state">
          <option value="">Select State</option>       
        </select>
      </div>

      <div class="col-sm-4" >
       <input type="text" class="form-control form-control-user" name="postal_code" id="postal_code"  placeholder="Postal code">
     </div>
     <!--  <div class="form-group col-sm-6">   -->     



     </div>

     <div class="form-group form-inline">

      <div class="col-sm-4" >
       <input type="text" class="form-control form-control-user" name="title" id="title"  placeholder="Title">
     </div>

     <div class="col-sm-4" >
       <input type="text" class="form-control form-control-user" name="phone" id="phone"  placeholder="Phone">
     </div>

     <div class="col-sm-4" >
      <input type="text" class="form-control form-control-user" name="cell_phone" id="cell_phone"  placeholder="Cell phone">
    </div>  

    <!-- </div> -->

    <!-- <div class="form-group col-sm-6">   -->   

    </div>

    <div class="form-group form-inline">

     <div class="col-sm-4" >
       <select class="form-control" name="source" id="source">
        <option value="">Select Source</option>       
      </select>
    </div>

    <div class="col-sm-4" >
      <select class="form-control" name="sector" id="sector">
        <option value="">Select Sector</option>       
      </select>
    </div>

    <div class="col-sm-4" >
     <input type="text" class="form-control form-control-user" name="income" id="income"  placeholder="Income">
   </div>





 </div>

 <div class="form-group form-inline">
  <div class="col-sm-4" >
   <input type="text" class="form-control form-control-user" name="fax" id="fax"  placeholder="Fax">
 </div>

 <div class="col-sm-4" >
   <input type="text" class="form-control form-control-user" name="website" id="website"  placeholder="Website">
 </div>

 <div class="col-sm-4" >
   <select class="form-control" name="state_client" id="state_client">
    <option value="">Select State Client</option>       
  </select>
</div>

</div>

<div class="form-group form-inline">
  <div class="offset-2 col-sm-4" >
   <input type="text" class="form-control form-control-user" name="quantity_worker" id="quantity_worker"  placeholder="Quantity Workers">
 </div>

 <div class="col-sm-4" >
  <select class="form-control" name="qualification" id="qualification">
    <option value="">Select Qualification</option>       
  </select>
</div>

</div>

<div class="form-group form-inline"> 

  <div class="offset-2 col-sm-4" >
    <input type="text" class="form-control form-control-user" name="id_skype" id="id_skype"  placeholder="Id Skype">
  </div>

  <div class="col-sm-4" >
   <input type="text" class="form-control form-control-user" name="id_twitter" id="id_twitter"  placeholder="Twitter">
 </div>



</div>

<div class="form-group">

  <div class="offset-2 col-sm-8" >
    <textarea class="form-control form-control-user" name="description" id="description"  placeholder="Description"></textarea>
  </div>

</div>

<br>

<div class="form-group">

  <div class="offset-2 col-sm-8" >                                       

    <button type="submit" class="btn btn-primary btn-user btn-block">Send</button>

  </div>

</div>          


<?php echo form_close()  ?>

<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>

</div>

</div>

</div>

</div>

