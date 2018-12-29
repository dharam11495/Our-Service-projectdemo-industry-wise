

  <?php include('header.php'); ?>


   
    <div class="page-title">
      <div class="row">
          <div class="col-sm-6">
              <h4 class="mb-0">Show Details</h4>
          </div>
          <div class="col-sm-6">
            
          </div>
        </div>
    </div>
    <!-- main body --> 
    <div class="row">
     
    <div class="col-xl-12 mb-30" style="margin-top: 10px;">

<?php echo form_open_multipart('',['id'=>'import_form']);?>
<?php echo "<input type='file' name='file' id='file'  />"; ?>
<?php echo "<input type='submit' name='import' value='upload' /> ";?>
<?php echo "</form>"?>

     <!--  <form method="post" id="import_form" enctype="multipart/form-data">
   <p>
   <input type="file" name="file" id="file" required accept=".xls, .xlsx" /></p>
   <br />
   <input type="submit" name="import" value="Import" class="btn btn-info" />
  </form> -->
    </div> 
   <div class="col-md-4"></div>
      
      
         
 
      <div class="col-xl-12 mb-30">     
        <div class="card "> 
          <div class="card-body">
             <?php  echo form_open('admin/Search'); ?>
            <div class="row">
           
             <div class="col-xl-2">
               <select class="custom-select custom-select-lg mb-3" name="industry">
              <option selected=""  disabled>Industry</option>
              <option>Furniture</option>
              <option>Home Furnishing</option>
              <option>TexTile</option>
           
              </select>
             </div>
             <div class="col-xl-2">
               <select class="custom-select custom-select-lg mb-3" name="city">
              <option selected="" disabled>City</option>
                <?php if(count($res)): ?>
                <?php foreach($res as $value): ?>
                <option value="<?php echo $value->city; ?>"><?php echo $value->city; ?></option>
                <?php endforeach; ?>  
                <?php else: ?>
                <?php endif; ?>
              </select>
             </div>
             <div class="col-xl-2">
               <select class="custom-select custom-select-lg mb-3" name="grade">
                <option selected="" disabled>Grade</option>
                <?php if(count($grade)): ?>
                <?php foreach($grade as $value): ?>
                <option value="<?php echo $value->grade; ?>"><?php echo $value->grade; ?></option>
                <?php endforeach; ?>  
                <?php else: ?>
                <?php endif; ?>
              </select>
             </div>
             <div class="col-xl-2">
              <select class="custom-select custom-select-lg mb-3" name="username">
              <option selected="" disabled>Username</option>
             <?php if(count($user)): ?>
            <?php foreach($user as $value): ?>
              <option value="<?php echo $value->user_id; ?>"><?php echo $value->user_id; ?></option>
          <?php endforeach; ?>  
        <?php else: ?>
        <?php endif; ?>
              </select>
               </div>
             <div class="col-xl-2"><button type="submit" class="button btn-primary">Search</button></div>
              
           </div>
           <?php   echo form_close(); ?>

            <div class="table-responsive test">
<table id="datatable" class="table table-striped table-bordered p-0 m-0" >
  <thead>
                  <tr>
                    <th></th>
                    <th>Edit</th>
                      <th>Industry</th>
                      <th>Company Name</th>
                      <th>City</th>
                      <th>Address</th>
                      <th>Promoter</th>
                      <th>Contact Person</th>
                      <th>Person Type</th>
                      <th>Mobile</th>
                      <th>Email</th>
                      <th>Document</th>
                     
                      
                      <th>Grade</th>
                      <th>Stall</th>
                      <th>Intrest Level</th>
                      <th>Follow Date</th>
                      <th>Follow by</th>
                      <th>Product Intrtest</th>
                      <th>Username</th>
                  </tr>
              </thead>
              <tbody id="myTable">
               
  </tbody>
</table>

            </div>
          </div>
        </div>   
      </div>
  </div> 

 <!--=================================
 wrapper -->
      
<!--=================================
 footer -->
<?php include('footer.php'); ?>


   <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>


 <script>
    $(function(){ 
        showAllEmployee();


            //function
        function showAllEmployee(){
            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url() ?>Admin/All_Details',
                async: false,
                dataType: 'json',
                success: function(data){
        
                    var html = '';
                    var i;
                    var x=1;
                    for(i=0; i<data.length; i++){
                    
                        html +='<tr style="border: 1px solid black">'+
                                    '<td style="border: 1px solid black">'+x+'</td>'+
                                    '<td style="border: 1px solid black"><?=  anchor("admin/Editdetails/'+data[i].id+'",'Edit',['class'=>'button btn-primary']) ?></td>'+
                                    '<td style="border: 1px solid black">'+data[i].company_type+'</td>'+
                                    '<td style="border: 1px solid black">'+data[i].company_name+'</td>'+
                                    '<td style="border: 1px solid black">'+data[i].city+'</td>'+
                                    '<td style="border: 1px solid black">'+data[i].address+'</td>'+
                                    '<td style="border: 1px solid black">'+data[i].pramoter_name+'</td>'+
                                    '<td style="border: 1px solid black">'+data[i].contact_person_name+'</td>'+
                                    '<td style="border: 1px solid black">'+data[i].person_type+'</td>'+
                                    '<td style="border: 1px solid black">'+data[i].mobile+'</td>'+                                  
                                    '<td style="border: 1px solid black">'+data[i].email+'</td>'+                                  
                                    '<td style="border: 1px solid black"><img src="'+data[i].image+'" alt="" width="80" height="50" style="margin: 5px;"></td>'+                                  
                                    '<td style="border: 1px solid black">'+data[i].grade+'</td>'+                                  
                                    '<td style="border: 1px solid black">'+data[i].stage+'</td>'+                                  
                                    '<td style="border: 1px solid black">'+data[i].intrest_type+'</td>'+                                  
                                    '<td style="border: 1px solid black">'+data[i].follow_date+'</td>'+                                  
                                    '<td style="border: 1px solid black">'+data[i].follow_email+data[i].follow_phone+'</td>'+                                  
                                    '<td style="border: 1px solid black">'+data[i].product_intrest+'</td>'+                                  
                                    '<td style="border: 1px solid black">'+data[i].user_id+'</td>'+                                  
                                '</tr>';
                                x++;
                    }
                    $('#myTable').html(html);
                },
                error: function(){
                    alert('Could not get Data from Database');
                }
            });
        }




         $('#import_form').on('submit', function(event){
  event.preventDefault();
  $.ajax({
   url:'<?php echo base_url() ?>Admin/import',
   method:"POST",
   data:new FormData(this),
   contentType:false,
   cache:false,
   processData:false,
   success:function(data){
    $('#file').val('');
    showAllEmployee();
    alert(data);
   }
  })
 });


   });






    </script>

 