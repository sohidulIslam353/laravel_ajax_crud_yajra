<!--Data Insert modal here-->
<!-- Modal -->
<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
      	<h4 class="modal-title" id="myModalLabel"></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>
      <div class="modal-body">
       <form method="post" data-toogle="validator">
       	@csrf {{ method_field('POST') }}
         <div class="form-group">
         <input type="hidden" name="id" id="id">
           <label for="exampleInputEmail1">Title</label>
           <input type="text" class="form-control" name="title" id="title" placeholder="Title" required="" autofocus="">
         </div>
         <div class="form-group">
           <label for="exampleInputEmail1">Author </label>
           <input type="text" class="form-control" name="author" id="author" placeholder="Author" required="" autofocus="">
         </div>
         <div class="form-group">
           <label for="exampleInputEmail1">Details </label>
           <textarea class="form-control" row='3' name="details" id="details" required>
           	
           </textarea>
         </div>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="insertbutton"></button>
      </div>
      </form>
    </div>
  </div>
</div>

<!--SIngle data show are here-->
<div class="modal fade" id="single-data" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      	<h4 class="modal-title" id="myModalLabel" align="center"></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 
      </div>
      <div class="modal-body">
        <ul class="list-group">
		  <li class="list-group-item">ID: <span class="text-danger" id="contactid"></span></li>
		  <li class="list-group-item">Title: <span class="text-danger" id="fullname"></span> </li>
		  <li class="list-group-item">Author: <span class="text-danger" id="contactemail"></span></li>
		  <li class="list-group-item">Details: <span class="text-danger" id="contactnumber"></span></li>
		</ul>
    </div>
  </div>
</div>