

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

<?php if($articles>0){ ?>
<?php if(count($articles)): ?>
<?php foreach ($articles as $art): ?>
 <tr>
   <td><?=  anchor("admin/Editdetails/{$art->id}",'Edit',['class'=>'button btn-primary']) ?></td>

  <td><?=  $art->company_type; ?></td>
<td><?=  $art->company_name; ?></td>
<td><?=  $art->city; ?></td>
<td><?=  $art->address; ?></td>
<td><?=  $art->pramoter_name; ?></td>
<td> <?=  $art->contact_person_name; ?>
  <?=  $art->contact_person_name1; ?>
  <?=  $art->contact_person_name2; ?></td>
<td><?=  $art->person_type; ?>
  <?=  $art->person_type1; ?>
  <?=  $art->person_type2; ?></td>
<td><?=  $art->mobile; ?></td>
<td><?=  $art->email; ?></td>


<td>
<img src="<?= $art->image; ?>" alt="" width="80" height="50" style="margin: 5px;">
<img src="<?= $art->image1; ?>" alt="" width="80" height="50" style="margin: 5px;">
<img src="<?= $art->image2; ?>" alt="" width="80" height="50" style="margin: 5px;">
</td>
<td><?=  $art->grade; ?></td>
<td><?=  $art->stage; ?></td>
<td><?=  $art->intrest_type; ?></td>
<td><?=  $art->follow_date; ?></td>
<td><?=  $art->follow_email; ?></td>
<td><?=  $art->product_intrest; ?></td>
<td><?=  $art->user_id; ?></td>
</tr>
<?php endforeach; ?>
        <?php endif; ?>
        <?php }else{ ?>
          <tr>
            <td colspan="17"><center>No Record Found</center></td>
           

          </tr>
        <?php } ?>
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

 