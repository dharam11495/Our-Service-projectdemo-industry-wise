

  <?php include('header.php'); ?>


   
    <div class="page-title">
      <div class="row">
          <div class="col-sm-6">
              <h4 class="mb-0">Mail Section</h4>
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

            <?php  echo form_open('admin/Searchnew',['id'=>'myForm1']); ?>
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
              <select class="custom-select custom-select-lg mb-3" name="product_intrest">
              <option selected="" disabled>Product Intrest</option>
              <option value="Full">Full</option>
              <option value="Medium">Midium</option>
              <option value="Beta">Beta</option>
              </select>
             </div>
             
             
             <div class="col-xl-2"><button type="submit" class="button btn-primary" id="search">Search</button></div>
              
           </div>
           <?php   echo form_close(); ?>
             

            <div class="table-responsive test">
                         <?php   echo form_open('admin/section_mail'); ?>

            <table id="datatable" class="table table-striped table-bordered p-0 m-0" >
               <thead>
                  <tr>
                    <th><input type="checkbox" id="checkall">  Check All</th>
                      <th>Industry</th>
                      <th>Company Name</th>
                      <th>City</th>
                      <th>Product Intrest</th>
                      <th>Email</th>
                      
                  </tr>
              </thead>
              <tbody id="myTable">
  </tbody>
</table>
<br>


<input type="submit"  class="button btn-primary">

<?php   echo form_close(); ?>
           






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

                      var em =data[i].email;
                        if (em=='') {
                          em = 'test@gmail.com';
                        }
                      
                        html +='<tr style="border: 1px solid black">'+
                                    '<td style="border: 1px solid black"><input type="checkbox" name="email[]" class="checkitem" value="'+em+'"> </td>'+
                                    
                                    '<td style="border: 1px solid black">'+data[i].company_type+'</td>'+
                                    '<td style="border: 1px solid black">'+data[i].company_name+'</td>'+
                                    '<td style="border: 1px solid black">'+data[i].city+'</td>'+
                                    '<td style="border: 1px solid black">'+data[i].product_intrest+'</td>'+
                                    
                                                                      
                                    '<td style="border: 1px solid black">'+data[i].email+'</td>'+                                  
                                                                      
                                                                      
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


        $('#checkall').change(function(){

          $('.checkitem').prop("checked", $(this).prop("checked"))
        });




   });






    </script>


     





    


 