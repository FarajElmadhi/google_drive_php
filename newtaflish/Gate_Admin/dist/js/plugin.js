  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : false,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : false,
      'autoWidth'   : false,
"order": [[2, "desc"]],
 "columns": [
         { 'width': '5%' },
         { width: '20%' },
         { width: '20%' },
         { width: '10%' },
         { width: '15%' },
         { width: '15%' }
      ],



    });
  });


	
$('#example1').DataTable({
	"lengthMenu": [ [25, 50, 100, 250, -1], [25, 50, 100, 250, "All"] ],
	"order": [[2, "desc"]],  
});




	
        $('#confirm-delete').on('show.bs.modal', function(url) {
        	 $(this).find('.btn-ok').attr('href', $(url.relatedTarget).data('href'));
        	 var url =  $(this).data('href')
            return url;
	        });


$('#admin-delete').on('show.bs.modal', function(url) {
           $(this).find('.btn-ok').attr('href', $(url.relatedTarget).data('href'));
           var url =  $(this).data('href')
            return url;
          });



  
        $('#modalMove').on('show.bs.modal', function(url) {
           $(this).find('.id-hide').attr('value', $(url.relatedTarget).data('href'));
           var url =  $(this).data('href')
            return url;
          });

  
        $('#modalMoveFile').on('show.bs.modal', function(url) {
           $(this).find('.id-hide').attr('value', $(url.relatedTarget).data('href'));
           var url =  $(this).data('href')
            return url;
          });



$(document).ready(function(){  
      $('#insert_button').click(function(){
          var name = $('#name').val();  
           var username = $('#username').val();  
           var password = $('#password').val();  
           if(username != '' && password != '' && name != '')  
           {  
                $.ajax({  
                     url:"layout/insertAdmin.php",  
                     method:"POST",  
                     data: {name:name, username:username, password:password},
                success:function(data) 

                     {  
                          //alert(data);  
                          if(data == 'fault') {

                              $('#fault').html("<div class='alert alert-warning'><strong>Oops :</strong> Username [ " + username + " ] Exist Please Choose Another One. </div>");

                          } 
                          
                            
                          else  
                          {  
                               $('#modalAddAdmin').hide();  
                               location.reload();  
                          }  
                     }  

                });  
           }  
           else  
           {  
                alert("All Fields are required");  
           }  
      });  
    
 });  

$(document).ready(function(){  
      $('#insert_button_p').click(function(){
          var name = $('#name').val();  
           var level = $('#level').val();  
           var duration = $('#duration').val();
           var price = $('#price').val();  
           var status = $('#status').val();
           if(level != '' && duration != '' && name != '' && price != '')  
           {  
                $.ajax({  
                     url:"layout/insertPackage.php",  
                     method:"POST",  
                     data: {name:name, level:level, duration:duration, price:price, status:status},
                success:function(data) 

                     {  
                          //alert(data);  
                          if(data == 'fault') {

                              $('#fault').html("<div class='alert alert-warning'><strong>Oops :</strong> level [ " + level + " ] Exist Please Choose Another One. </div>");

                          } 
                          
                            
                          else  
                          {  
                               $('#modalAddPackage').hide();  
                               location.reload();  
                          }  
                     }  

                });  
           }  
           else  
           {  
                alert("All Fields are required");  
           }  
      });  
    
 });  




$(document).ready(function(){  
      $('#insert_button_m').click(function(){
          var name = $('#name').val();  
           var username = $('#username').val();  
           var password = $('#password').val(); 
           var dolar = $('#dolar').val(); 
           if(username != '' && password != '' && name != '')  
           {  
                $.ajax({  
                     url:"layout/insertMember.php",  
                     method:"POST",  
                     data: {name:name, username:username, password:password},
                success:function(data) 

                     {  
                          //alert(data);  
                          if(data == 'fault') {

                              $('#fault').html("<div class='alert alert-danger'><strong>Oops :</strong> Username [ " + username + " ] Exist Please Choose Another One. </div>");

                          } 
                          
                            
                          else  
                          {  
                               $('#modalAddMember').hide();  
                               location.reload();  
                          }  
                     }  

                });  
           }  
           else  
           {  
                alert("All Fields are required");  
           }  
      });  
    
 });  
