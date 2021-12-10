<!-- Content Row -->
<div class="row">

  <div class="col-lg-12 text-center">

    <h4 class="bg-warning text-light" >

      <?php if($this->session->flashdata('closeSession')): ?>

        <?php echo $this->session->flashdata('closeSession'); ?>

      <?php endif; ?>

    </h4>    
    
  </div>




  <div class="col-lg-8 mb-4 offset-md-2">
    
    <br>

    <div class="card-body">
      <div class="">          



        <div class="container ">
          
          <div class="row">
            
            <div class="col-lg-8 offset-md-2">
             

              <!-- modal -->

              <div class="modal fade" id="modalFormLogin" role="dialog">
               <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                   
                   <h4 class="modal-title">Log In</h4>
                   <h4 class="bg-danger text-light">        

                   </h4>
                 </div>
                 <div class="modal-body">

                  <?php echo form_open('login') ?>      

                  <div class="form-group">
                    <input type="email" class="form-control form-control-user" name="email" id="email"  placeholder="Email" value="jonathancastro@opengiscrm.com">
                    <div class="text-danger"><?php echo form_error('email');  ?></div>
                    <div class="text-danger" id="msg_email"></div>
                  </div>

                  <div class="form-group">
                    <input type="password" class="form-control form-control-user" name="password" id="password"  placeholder="Password" value="123">
                    <div class="text-danger"><?php echo form_error('password');  ?></div>
                    <div class="text-danger" id="msg_password"></div>
                  </div>      

                  <br>                                            


                  <button type="submit" class="btn btn-primary btn-user btn-block">Send</button>

                  <?php echo form_close()  ?> 

                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>

                </div>

              </div>

            </div>

          </div>

        </div>
      </div>

      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>

    </div>




  </div>

</div>


</div>
</div>


