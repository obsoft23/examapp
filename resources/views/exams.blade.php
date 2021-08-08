@extends('admin.admin_layout2')

@section('content')


<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="font-weight: normal;">
		    <!-- Content Header (Page header) -->
		    <section class="content-header">
		      <div class="container-fluid">
		        <div class="row" style=""> <!--for notifications/alerts-->
		        </div>
		      </div><!-- /.container-fluid -->
		    </section>

		    <!-- Main content -->
		    <section class="content">

		      <div class="container-fluid">
		        <div class="row">
		          <div class="col-12">
		            
		              <div class="m-5">
		        
										  <div class="d-flex">
										
										  		<div class="pr-5" style="margin-top: 8%;">
										  			 <button type="button" style="width: 135px; height: 135px; border-radius: 50%;" name="" id="add_questionaire_button" class="btn btn-success btn-circle btn-sm">
										     	<i class="fas fa-plus"></i>
										     </button>
										  		</div>
										     <div  class="pr-5">
										     	<div class="card" style="width: 18rem; border: 1px solid #ccc">
													  <img src="../../dist/img/photo4.jpg" class="card-img-top" alt="...">
													  <div class="card-body">
													    <h5 class="card-title">Card title</h5>
													    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
													    <a href="#" class="btn btn-dark">start exam</a>
													  </div>
													</div>
										     </div>
										</div>
		          </div>
		        </div>
		      </div>
		    </section>
		    <!-- /.content -->
  </div>




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
	 document.addEventListener('DOMContentLoaded', function() {	

			$("#add_questionaire_button").on("click", function() {
				window.location.href = '/questionaire';
			});

			$(document).on('click', '.add_question', function(){
				reset_question_form();
				$('#questionModal').modal('show');
				$('#message_operation').html('');
				exam_id = $(this).attr('id');
				$('#hidden_online_exam_id').val(exam_id);
			});
	});
</script>
@endsection