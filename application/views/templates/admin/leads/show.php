<!-- Content Row -->
<div class="row">

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





                      <div class="card content">

                        <div class="row">              
                          <div class="col col-md-6">

                            <!-- float-left -->

                        <!-- <div class="pull-left card-danger">

                          <a class="offert" href="<?php //echo base_url('leads/promo/'.''.$data['id_lead']); ?>"  ><span class="btn-success btn-lg fas  fa-envelope" data-toggle="offert" title="Offert" ></span></a>

                        </div> -->

                       <!--  <div class="card bg-danger text-white ">
                        <div class="card-body"> -->
                          <a class="offert" href="<?php echo base_url('leads/promo/'.''.$data['id_lead']); ?>"  ><span class="btn-success btn-lg fas  fa-envelope" data-toggle="offert" title="Offert" >Offert</span></a>

                          <a class="delete" onclick="deleteLead(<?php echo $data['id_lead'];?>)" ><span class="btn-danger btn-lg fas  fa-trash-alt" data-toggle="delete" title="Delete" >Delete</span></a>

                          <br>
                          <br>

                          <div id="lead_delete" class="col col-md-12 bg-success text-white"></div>





                          <!-- '<a class="btn btn-danger" onclick="deleteLead('+ data.id_lead +')" ><span class="fas fa-trash-alt"></span</a>'; -->
                      <!--     </div>
                      </div> -->

                    </div>
                  </div>
                  <br>
                  <br>


                      <!-- <div class="col col-md-6">

                        <a class="offert" href="<?php //echo base_url('leads/promot/'.''.$data['id_lead']); ?>"  ><span class="btn-danger btn-lg fas  fa-eye" data-toggle="offert" title="Offert" ></span></a>

                      </div> -->
                      <div class="row">
                        <div class="col col-md-6">

                          <h2><b>Potential Lead Information</b></h2>
                          <hr>
                        </div>
                      </div>

                      <div class="row"> <!-- start row -->

                        <div class="col col-md-6"> 

                          <p>
                            <span><b>FirstName potential client:</b></span>
                            <?php echo $data['first_name'].' '.$data['last_name'] ?> 
                          </p>

                       <!--  <p>
                          <span>Nombre de Posible cliente</span>
                          <?php //echo $data['last_name'] ?> 
                        </p> -->



                        <p>
                          <span><b>Company:</b></span>
                          <?php echo $data['company'] ?> 
                        </p>

                        <p>
                          <span><b>Email:</b></span>
                          <?php echo $data['email'] ?> 
                        </p>

                        <p>
                          <span><b>Código postal:</b></span>
                          <?php echo $data['title'] ?> 
                        </p>

                        <p>
                          <span><b>Phone:</b></span>
                          <?php echo $data['phone'] ?> 
                        </p>

                        <p>
                          <span><b>Cell Phone:</b></span>
                          <?php echo $data['cell_phone'] ?> 
                        </p>

                        <p>
                          <span><b>Source:</b></span>
                          <?php echo $data['source'] ?> 
                        </p>

                        <p>
                          <span><b>Sector:</b></span>
                          <?php echo $data['sector'] ?> 
                        </p>

                      </div>

                      <div class="col col-md-6">                        

                        <p>
                          <span><b>Annual income:</b></span>
                          <?php echo $data['income'] ?> 
                        </p>

                        <p>
                          <span><b>Fax:</b></span>
                          <?php echo $data['fax'] ?> 
                        </p>

                        <p>
                          <span><b>Website:</b></span>
                          <?php echo $data['website'] ?> 
                        </p>

                        <p>
                          <span><b>Prospective leads status:</b></span>
                          <?php echo $data['state_client'] ?> 
                        </p>

                        <p>
                          <span><b>Quantity of employees:</b></span>
                          <?php echo $data['quantity_worker'] ?> 
                        </p>

                        <p>
                          <span><b>Qualification:</b></span>
                          <?php echo $data['qualification'] ?> 
                        </p>

                        <p>
                          <span><b>ID skype:</b></span>
                          <?php echo $data['id_skype'] ?> 
                        </p>

                        <p>
                          <span><b>ID Twiiter:</b></span>
                          <?php echo $data['id_twitter'] ?> 
                        </p>


                      </div>

                    </div> <!-- end row -->

                    <div class="row">
                      <div class="col col-md-6">

                        <h2><b>Address information</b></h2>
                        <hr>
                      </div>
                    </div>

                    <div class="row">

                      <div class="col col-md-6"> 

                        <p>
                         <span><b>Street:</b></span>
                         <?php echo $data['street'] ?> 
                       </p>

                       <p>
                        <span><b>City:</b></span>
                        <?php echo $data['city'] ?> 
                      </p>



                      <p>
                        <span><b>Country:</b></span>
                        <?php echo $data['country'] ?>
                      </p>

                      <p>
                        <span><b>State:</b></span>                              
                        <?php echo $data['state'] ?> 
                      </p>

                      <p>
                        <span><b>Postal Code:</b></span>   
                        <?php echo $data['postal_code'] ?> 
                      </p>

                    </div>
                  </div> <!-- end row -->


                  <div class="row">
                    <div class="col col-md-6">
                      <h2><b>Description information</b></h2>
                      <hr>
                    </div>
                  </div>


                  <div class="row">
                    <div class="col col-md-6">
                      <p>
                        <span><b>Description:</b></span>
                        <?php echo $data['description'] ?> 
                      </p>
                    </div>
                  </div>



                </div> <!-- end content card -->





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


