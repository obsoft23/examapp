@extends('admin.admin_layout')

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

		      <div class="container-fluid" style="padding: 8px; ">
		         <div class="row">
          
          <!-- /.col -->
          <div class="" style="margin-left: 10%;">
            <div class="card">
              <div class="card-header p-2" style="border-bottom: none;" >
                <ul class="nav nav-pills" >
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Image</a></li>
                   <li class="nav-item"><a class="nav-link " href="#timeline" data-toggle="tab">About </a></li>
                    <li class="nav-item"><a class="nav-link" href="#change-password" data-toggle="tab">Change Password </a></li>
                 
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content col-md-13" >



                  <div class="active tab-pane"  id="activity" style="">
                   
                   <form action="/profile/{{Auth::user()->id}}" method="POST" enctype="multipart/form-data" >

                     @csrf

                       <div class="d-flex justify-content-center w-100" style="padding: 20px">
                          <img class="img-circle img-bordered-sm " src="../../dist/img/avatar2.png" alt="User Image" style="width: 200px; height: 200px" name="profile-picture">
                      </div>

                      <div class="d-flex justify-content-center" >
                        <input type="file" name="profilepicture" accept="image/png, image/jpeg, image/jpeg" name="image" />
                        <input type="hidden" name="_method" value="PUT" />
                        <input type="hidden" name="update_type" value="one" />
                      </div>

                      <div class="d-flex justify-content-center">
                        <input type="submit" class="btn btn-sm btn-success " value="submit" />   
                      </div>

                  </form>
                  </div>
                  <!-- /.tab-pane 1-->



                  <div class="tab-pane" id="timeline">
                     <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                      <p class="text-muted">Malibu, California</p>

                      <hr>

                      <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                      <p class="text-muted">
                        <span class="tag tag-danger">UI Design</span>
                        <span class="tag tag-success">Coding</span>
                        <span class="tag tag-info">Javascript</span>
                        <span class="tag tag-warning">PHP</span>
                        <span class="tag tag-primary">Node.js</span>
                      </p>

                      <hr>

                      <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                      <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                    
                  </div>
                  <!-- /.tab-pane 2 -->


                  <div class="tab-pane" id="change-password" style="width: 400px;">
               
                      <form method="POST" action="{{ route('login') }}">
                                      @csrf
                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">Old Password</label>
                              <div class="col-md-6">
                                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                              @enderror
                                          </div>
                            </div>

                            <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">New Password</label>
                              <div class="col-md-6">
                                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                              @enderror
                                          </div>
                            </div>


                            <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">Confirm New Password</label>
                              <div class="col-md-6">
                                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                              @enderror
                                          </div>
                            </div>

                           <div class="d-flex justify-content-center">
                              <input type="submit" class="btn btn-info " value="Update password" name="">
                          </div>
                                  </form>
                             </div>
                   </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
		  </div>
		    </section>
		    <!-- /.content -->
  </div>

@endsection