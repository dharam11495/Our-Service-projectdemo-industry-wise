<?php include('header.php'); ?>

    <div class="page-title">
    <div class="row">
    <div class="col-sm-6">
    <h4 class="mb-0"> Dashboard</h4>
    </div>
    <div class="col-sm-6">

    </div>
    </div>
    </div>
    <br>
    <br>
   


          <div class="col-xl-12 mb-30"> 

            
          <?php  if($user=$this->session->flashdata('user')): 

      $user_class=$this->session->flashdata('user_class')

      ?>
      
      <div class="col-md-12">
      <div class="alert <?= $user_class ?>">
      <?= $user; ?>
      </div>
      </div>
      

      <?php endif; ?>
   



          <div class="card card-statistics h-100"> 
          <div class="card-body">   
          <h2 class="card-title">Edit</h2>
          <div class="tab nav-border">
          <ul class="nav nav-tabs" role="tablist">
         
         
         
        
          </ul>
          <div class="tab-content">
          <div class="tab-pane fade active show" id="home-02" role="tabpanel" aria-labelledby="home-02-tab">
         
            <?php echo form_open_multipart("admin/update/{$article->id}"); ?>
        
         

           <div class="form-group row">
          <div class="col-sm-2"></div>
        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Username</label>
        <div class="col-sm-6">
       <input type="text" class="form-control form-control-sm" name="user_id" value="<?= $article->user_id; ?>">
         <?php  echo form_error('company_type');  ?> 
        </div>
        </div>

          <div class="form-group row">
          <div class="col-sm-2"></div>
        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Industry</label>
        <div class="col-sm-6">
       <input type="text" class="form-control form-control-sm" name="company_type" value="<?= $article->company_type; ?>">
         <?php  echo form_error('company_type');  ?> 
        </div>
        </div>


        <div class="form-group row">
          <div class="col-sm-2"></div>
        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Company Name</label>
        <div class="col-sm-6">
        <input type="text" class="form-control form-control-sm" name="company_name" placeholder="Company Name" value="<?= $article->company_name; ?>">
        <?php  echo form_error('company_name');  ?> 
        
        </div>
        </div>

        <div class="form-group row">
          <div class="col-sm-2"></div>
        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">City</label>
        <div class="col-sm-6">
        <input type="text" class="form-control form-control-sm" name="city" placeholder="City" value="<?= $article->city; ?>">
         <?php  echo form_error('city');  ?> 
        </div>
        </div>

         <div class="form-group row">
          <div class="col-sm-2"></div>
        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Address</label>
        <div class="col-sm-6">
        <input type="text" class="form-control form-control-sm" name="address" placeholder="Address" value="<?= $article->address; ?>">
         <?php  echo form_error('address');  ?> 
        </div>
        </div>


        <div class="form-group row">
          <div class="col-sm-2"></div>
        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Promoter Name</label>
        <div class="col-sm-6">
        <input type="text" class="form-control form-control-sm" name="pramoter_name" placeholder="Promoter Name" value="<?= $article->pramoter_name; ?>">
         <?php  echo form_error('pramoter_name');  ?> 
        </div>
        </div>



         <div class="form-group row">
          <div class="col-sm-2"></div>
        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Contact Person</label>
        <div class="col-sm-3">
        <input type="text" class="form-control form-control-sm" name="contact_person_name" placeholder=" Name" value="<?= $article->contact_person_name; ?>">
         <?php  echo form_error('contact_person_name');  ?> 
        </div>
        <div class="col-sm-3">
          <input type="text" class="form-control form-control-sm" name="person_type" placeholder="Type" value="<?= $article->person_type; ?>">
         
          <?php  echo form_error('person_type');  ?>
        </div>
        <div class="col-sm-2" id="button_hide1">
          <button type="button" class="btn btn-info" id="button1">Add</button>
          <button type="button" class="btn btn-danger" id="buttonx">X</button>
        </div>
        </div>




       <div id="contact1">
         <div class="form-group row" >
          <div class="col-sm-2"></div>
        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg"></label>
        <div class="col-sm-3">
        <input type="text" class="form-control form-control-sm" name="contact_person_name1" placeholder=" Name" value="<?= $article->contact_person_name1; ?>">
        </div>
        <div class="col-sm-3">
           <input type="text" class="form-control form-control-sm" name="person_type1" placeholder="Type" value="<?= $article->person_type1; ?>">
          
        </div>
        <div class="col-sm-2" >
          <button type="button" class="btn btn-info" id="button2">Add</button>
          <button type="button" class="btn btn-danger" id="buttonx1">X</button>
        </div>
        </div>
      </div>


        <div id="contact2">
         <div class="form-group row" >
          <div class="col-sm-2"></div>
        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg"></label>
        <div class="col-sm-3">
        <input type="text" class="form-control form-control-sm" name="contact_person_name2" placeholder=" Name" value="<?= $article->contact_person_name2; ?>">
        </div>
        <div class="col-sm-3">
           <input type="text" class="form-control form-control-sm" name="person_type2" placeholder="Type" value="<?= $article->person_type2; ?>">
      
        </div>
        <div class="col-sm-2" id="button3">
          <button type="button" class="btn btn-info">Add</button>
        </div>
        </div>
      </div>


      <div class="form-group row">
          <div class="col-sm-2"></div>
        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Mobile No</label>
        <div class="col-sm-6">
        <input type="text" class="form-control form-control-sm" name="mobile" placeholder="Mobile No" value="<?= $article->mobile; ?>">
        <?php  echo form_error('mobile');  ?>
        </div>
        </div>


      <div class="form-group row">
          <div class="col-sm-2"></div>
        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Email Id</label>
        <div class="col-sm-6">
        <input type="email" class="form-control form-control-sm" name="email" placeholder="Email" value="<?= $article->email; ?>">
        <?php  echo form_error('email');  ?>
        </div>
        </div>



        <div class="form-group row">
          <div class="col-sm-2"></div>
        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Upload Image</label>
        <div class="col-sm-3">
<?php  $value=$article->image; ?>     

        <div class="custom-file">
          <?php  echo form_upload(['name'=>'userfile[]','value'=>set_value('userfile[]')]); ?>
       
       
         <!-- <?php  echo form_error('userfile');  ?> -->
         <!-- <?php if(isset($upload_error)) { echo $upload_error;  }  ?> -->
        </div>
        
        </div>
        <div class="col-sm-3">
          <img src="<?php echo $article->image; ?>" width="80" height="50">
        </div>
         <div class="col-sm-2" >
          <button type="button" class="btn btn-info" id="buttonfile">Add</button>
          <button type="button" class="btn btn-danger" id="buttonfilex">X</button>
        </div>
        </div>

        <div id="file1">
         <div class="form-group row">
          <div class="col-sm-2"></div>
        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg"></label>
        <div class="col-sm-3">
        
        <div class="custom-file">
          <?php  echo form_upload(['name'=>'userfile[]']); ?>
        <!-- <input type="file" class="custom-file-input" name="image[]"> -->
       
        </div>
        </div>
        <div class="col-sm-3">
          <img src="<?php echo $article->image1; ?>" width="80" height="50">
        </div>
         <div class="col-sm-2" >
          <button type="button" class="btn btn-info" id="buttonfile1">Add</button>
          <button type="button" class="btn btn-danger" id="buttonfilex1">X</button>
        </div>
        </div>
      </div>


        <div id="file2">
         <div class="form-group row">
          <div class="col-sm-2"></div>
        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg"></label>
        <div class="col-sm-3">
        
        <div class="custom-file">
          <?php  echo form_upload(['name'=>'userfile[]']); ?>
        <!-- <input type="file" class="custom-file-input" name="image[]"> -->
       <!--  <label  for="customFile"> Jpg,Png Only</label> -->
        </div>
        </div>
        <div class="col-sm-3">
          <img src="<?php echo $article->image2; ?>" width="80" height="50">
        </div>
        <div class="col-sm-2" >
          <button type="button" class="btn btn-info" id="buttonfile3">Add</button>
          
        </div>
        </div>
      </div>



        <div class="form-group row">
          <div class="col-sm-2"></div>
        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Client Grade</label>
        <div class="col-sm-6">
           <select class="custom-select custom-select-lg mb-3" name="grade">
          <option value="<?= $article->grade; ?>"><?= $article->grade; ?></option>
          <option value="A+">A+</option>
          <option value="A">A</option>
          <option value="B+">B+</option>
          <option value="B">B</option>
          <option value="C+">C+</option>
          <option value="C">C</option>
          </select>
        
         <?php  echo form_error('grade');  ?>
        </div>
        </div>


        <div class="form-group row">
          <div class="col-sm-2"></div>
        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Stall</label>
        <div class="col-sm-6">
        <select class="custom-select custom-select-lg mb-3" name="stage">
          <option value="<?= $article->stage; ?>"><?= $article->stage; ?></option>
          <option value="Big">Big</option>
          <option value="Medium">Medium</option>
          <option value="Small">Small</option>
          </select>
          <?php  echo form_error('stage');  ?>
        </div>
        </div>




        <div class="form-group row">
          <div class="col-sm-2"></div>
        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Intrest Type</label>
        <div class="col-sm-6">
        <select class="custom-select custom-select-lg mb-3" name="intrest_type">
          <option value="<?= $article->intrest_type; ?>"><?= $article->intrest_type; ?></option>
          <option value="High">High</option>
          <option value="Medium">Midium</option>
          <option value="Ignore">Ignore</option>
          </select>
          <?php  echo form_error('intrest_type');  ?>
        </div>
        </div>


          <div class="form-group row">
          <div class="col-sm-2"></div>
        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Follow up Date</label>
        <div class="col-sm-6">
        <input type="date" class="form-control form-control-sm" id="colFormLabelLg" name="follow_date" value="<?= $article->follow_date; ?>">
        <?php  echo form_error('follow_date');  ?>
        </div>
        </div>


        <div class="form-group row">
          <div class="col-sm-2"></div>
        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Follow up By</label>
        <div class="col-sm-3">
        <div class="custom-control custom-checkbox">
           <?php
           $val2=$article->follow_email;
           
           if($val2=='email'){
            ?>
      <input type="checkbox" class="dharam" name="follow_email" value="email" checked>
      <label  >Email</label>
       <?php
        }else{
      ?>
      <input type="checkbox" class="dharam" name="follow_email" value="email" >
        <label  >Phone</label>
      <?php } ?>
      </div>
        </div>

         <div class="col-sm-3">
        <div class="custom-control custom-checkbox">
          <?php
           $val2=$article->follow_phone;
           
           if($val2=='phone'){
            ?>
      <input type="checkbox" class="dharam" name="follow_phone" value="phone" checked>
      <label  >Phone</label>
      <?php
        }else{
      ?>
       <input type="checkbox" class="dharam" name="follow_phone" value="phone" >
        <label  >Phone</label>
      <?php } ?>
      
      </div>
        </div>
        </div>




          <div class="form-group row">
          <div class="col-sm-2"></div>
        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Product Intrest</label>
        <div class="col-sm-6">
        <select class="custom-select custom-select-lg mb-3" name="product_intrest">
          <option value="<?= $article->product_intrest; ?>"><?= $article->product_intrest; ?></option>
          <option value="Full">Full</option>
          <option value="Medium">Midium</option>
          <option value="Beta">Beta</option>
          
          </select>
          <?php  echo form_error('product_intrest');  ?>
        </div>
        </div>



        <div class="form-group row">
          <div class="col-sm-2"></div>
        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Remarks</label>
        <div class="col-sm-6">
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="remarks" ><?= $article->remarks; ?></textarea>
        </div>
        </div>


         <div class="form-group row">
          <div class="col-sm-2"></div>
        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">
           <input type="submit" class="button" value="Submit">
        </label>
        <div class="col-sm-6">
        
        </div>
        </div>  

  




       
       
        </form>







          </div>
          <div class="tab-pane fade" id="profile-02" role="tabpanel" aria-labelledby="profile-02-tab">


          <form>
        <div class="form-group row">
          <div class="col-sm-2"></div>
        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Product Profile</label>
        <div class="col-sm-6">
         <p><input class="dharam" type="checkbox" required="">
         </p>
        </div>
        </div>


         <div class="form-group row">
          <div class="col-sm-2"></div>
        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Video</label>
        <div class="col-sm-6">
         <p><input class="dharam" type="checkbox" required="">
         </p>
        </div>
        </div>

         <div class="form-group row">
          <div class="col-sm-2"></div>
        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Company Profile</label>
        <div class="col-sm-6">
         <p><input class="dharam" type="checkbox" required="">
         </p>
        </div>
        </div>


         <div class="form-group row">
          <div class="col-sm-2"></div>
        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Email Id</label>
        <div class="col-sm-6">
        <input type="email" class="form-control form-control-sm" id="colFormLabelLg" placeholder="Email">
        </div>
        </div>



         <div class="form-group row">
          <div class="col-sm-2"></div>
        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">
           <input type="submit" class="button" value="Send">
        </label>
        <div class="col-sm-6">
        
        </div>
        </div>


      </form>


          </div>
         
         
          </div> 
          </div>
          </div>
          </div>   
          </div>






<?php include('footer.php'); ?>


<script type="text/javascript">
  $(document).ready(function(){
  $('#button1').click(function(){
    $('#contact1').show();
    $('#buttonx').show();
    $('#button1').hide();
  });

   $('#button2').click(function(){
    $('#contact2').show();
    $('#buttonx1').show();
    $('#button2').hide();
  });

     $('#buttonx1').click(function(){
    $('#contact2').hide();
    $('#buttonx1').hide();
    $('#button2').show();
  });


     $('#buttonx').click(function(){
    $('#contact1').hide();
    $('#buttonx').hide();
    
    $('#button1').show();
  });


     $('#buttonfile').click(function(){
        $('#file1').show();
        $('#buttonfilex').show();
        $('#buttonfile').hide();
     });


     $('#buttonfilex').click(function(){
        $('#file1').hide();
        $('#buttonfilex').hide();
        $('#buttonfile').show();
     });

     $('#buttonfile1').click(function(){
    $('#file2').show();
    $('#buttonfile1').hide();
    $('#buttonfilex1').show();
  });


      $('#buttonfilex1').click(function(){
    $('#file2').hide();
    $('#buttonfile1').show();
    $('#buttonfilex1').hide();
  });


  });
</script>