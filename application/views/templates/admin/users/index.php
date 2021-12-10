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
    
  </div>



  <div class="col-lg-12 mb-4">

    <!-- Illustrations -->
    <!-- <div class="card shadow mb-4"> -->
      <!-- <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary text-center">Usuarios</h6>
      </div> -->
      <br>

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

                        <a id="pdf" onclick="pdf()"><span class="btn btn-danger  btn-md">PDF</span></a>

                        <a id="excel" onclick="excel()"><span class="btn btn-warning  btn-md">XLS</span></a>

                      </div>                     

                    <!--   <table id="users"class="table table-responsive table-hover table-borderless " > -->

                        <table id="users" class="table table-responsive">     

                        <thead class="thead-dark">
                          <tr>                         
                            <th>Img</th>
                            <th>F name</th>
                            <th>L name</th>                         
                            <th>Email</th>
                            <th>Country</th>
                            <th>State</th>
                            <th>Role</th>
                           <!--  <th>Creado</th>
                            <th>Actualizado</th> -->
                            <th>View</th>
                            <th>Edit</th>
                            <th>Delete</th>


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

             <!--  end shadow -->
    <!--  </div>  
    -->


  </div>
</div>

