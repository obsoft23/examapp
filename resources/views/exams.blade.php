@extends('admin.admin_layout2')

@section('content')


<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="font-weight: bold;">
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
		            
		              <div class="card-body">
		                  <div class="card">
		                  <div class="card-header" style="border-bottom: none"> <!--page box header-->
		                    <h3 class="card-title">Exams</h3>

		                    <div class="card-tools">
		                      <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
		                        <i class="fas fa-minus"></i>
		                      </button>
		                      
		                    </div>
		                  </div>

		                  <div class="card-body"> 
		                  	<!--Blade Content goes in here -->

		                     

         
		                     <!--end blade content -->
		                  </div>
		              </div>
		             
		          </div>
		        </div>
		      </div>
		    </section>
		    <!-- /.content -->
  </div>

@endsection