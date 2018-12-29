


<?php include('header.php'); ?>


<div class="row">
	

	<div class="col-xl-12 mb-30" id="first">
		<center>
			<p class="button" id="new">New</p>
			<p  class="button" id="exits" data-toggle="modal" data-target="#exampleModalCenter">Exits</p>
		</center>
	</div>
</div>

<div class="row" id="newmail" style="display: none;" >


	
	<div class="col-xl-12 mb-30">
		<div class="card "> 
          <div class="card-body">
          	 <?php  echo form_open('admin/newmailsend'); ?>
            
           
             <div class="col-xl-12">





			<div class="card-body">
			<h5 class="card-title">Mail Send New  </h5>





			 <?php 

       // print_r($data); 
      

       $num=count($data['email']);



       // echo "<hr>";
       // echo $num;
       
          	 foreach ($data as $key  ) {
          	 
          	 	for($i = 0; $i < $num; $i++){
          	 		echo '<input type="hidden" class="form-control form-control-lg" id="colFormLabelLg" name="emailsend[]" value='.$key[$i].'>';
                     echo $key[$i];
                   }

          	 }
          	

          ?>
			
			
			<div class="form-group row">
			<label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">To</label>
			<div class="col-sm-10">
			<input type="text" class="form-control form-control-lg" id="colFormLabelLg" value="<?= $num; ?> email selected" readonly>
			</div>
			</div>

			<div class="form-group row">
			<label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Subject</label>
			<div class="col-sm-10">
			<input type="text" class="form-control form-control-lg" id="colFormLabelLg" name="subject">
			</div>
			</div>

			<div class="form-group row">
			<label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Body</label>
			<div class="col-sm-10">
            <textarea id="textarea" rows="18" cols="12" name="mailbody"></textarea>

            <?php  echo form_upload(['name'=>'userfile[]','multiple'=>'multiple']); ?>

			</div>
			</div>
			
			</div>
                
             </div>



             
             
             
             <div class="col-xl-2"><button type="submit" class="button btn-primary">Send</button></div>
              
         
           <?php   echo form_close(); ?>
             

           
      </div>
		
	</div>
</div>

</div>


<div class="row" id="mailexits" style="display: none;">
	

		
		

</div>






<?php include('footer.php'); ?>




<script type="text/javascript">
	$(document).ready(function(){

  $('#new').click(function(){
  	$('#newmail').show();
  	$('#first').hide();
  });
mailexits

  $('#exits').click(function(){
  	$('#mailexits').show();
  	$('#first').hide();
  	
  });



	});
</script>






       

              <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="modal-title"><div class="mb-30">
                        <h6>EXPERTISE</h6>
                        <h2>Modal title</h2>
                        <p>We are an innovative agency. We develop and design customers around the world. Our clients are some of the most forward-looking companies in the world.</p>
                      </div>
                      </div>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                     

			<div class="pricing-table active col-xl-4 mb-30">
                     <div class="pricing-top">
                       <div class="pricing-title">
                         <h3 class="mb-15">Deepawali</h3>
                         
                       </div>
                       
                       <div class="pricing-button">
                         <a class="button" href="#">Send</a>
                       </div>
                     </div>
                     
                  </div>




                  <div class="pricing-table active col-xl-4 mb-30">
                     <div class="pricing-top">
                       <div class="pricing-title">
                         <h3 class="mb-15">Template 1 </h3>
                         
                       </div>
                       
                       <div class="pricing-button">
                         <a class="button" href="#">Send</a>
                       </div>
                     </div>
                     
                  </div>
		




		<div class="pricing-table active col-xl-4 mb-30">
                     <div class="pricing-top">
                       <div class="pricing-title">
                         <h3 class="mb-15">Template 2 </h3>
                         
                       </div>
                       
                       <div class="pricing-button">
                         <a class="button" href="#">Send</a>
                       </div>
                     </div>
                     
                  </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>






 
         


