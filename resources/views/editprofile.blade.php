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

		      <div class="container-fluid" style="padding: 8px; ">
		         
  <div id="w" class="">
        <div id="content" class="clearfix">
          <h1>Manage Account Settings</h1>
          <nav id="profiletabs">
            <ul class="clearfix">
              <li><a href="#profilepicture" class="sel">Profile Picture</a></li>
              <li><a href="#bio">Bio</a></li>
              <li><a href="#activity">Activity</a></li>
              <li><a href="#friends">Friends</a></li>
              <li><a href="#settings">Settings</a></li>
            </ul>
          </nav>
          
          <section id="profilepicture">
            <form action="/profile/{{Auth::user()->id}}" method="POST" enctype="multipart/form-data" >

                         @csrf

                           <div class="d-flex justify-content-center w-100" style="padding: 20px">
                              <img class="img-circle img-bordered-sm " src="{{ asset('storage/profilepictures/'. $profile_details->profile_picture) }} " alt="User Image" style="width: 200px; height: 200px" name="profile-picture">
                          </div>

                          <div class="d-flex justify-content-center" >
                            <input type="file" name="profilepicture"  name="image" class="@error('profilepicture') is-invalid @enderror" />
                            <input type="hidden" name="_method" value="PUT" />
                            <input type="hidden" name="update_type" value="one" />
                          </div>

                          @error('profilepicture')
                                    <span class="d-flex justify-content-center invalid-feedback p-1" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                          @enderror

                          <div class="d-flex justify-content-center">
                            <input type="submit" class="btn btn-sm btn-success " value="submit" />   
                          </div>

                      </form>
          </section>

          <section id="">
            
          </section>
          
          <section id="activity" class="hidden">
            <p>Most recent actions:</p>
            
            <p class="activity">@10:15PM - Submitted a news article</p>
            
            <p class="activity">@9:50PM - Submitted a news article</p>
            
            <p class="activity">@8:15PM - Posted a comment</p>
            
            <p class="activity">@4:30PM - Added <strong>someusername</strong> as a friend</p>
            
            <p class="activity">@12:30PM - Submitted a news article</p>
          </section>
          
          <section id="friends" class="hidden">
            <p>Friends list:</p>
            
            <ul id="friendslist" class="clearfix">
              <li><a href="#"><img src="images/avatar.png" width="22" height="22"> Username</a></li>
              <li><a href="#"><img src="images/avatar.png" width="22" height="22"> SomeGuy123</a></li>
              <li><a href="#"><img src="images/avatar.png" width="22" height="22"> PurpleGiraffe</a></li>
            </ul>
          </section>
          
          <section id="settings" class="hidden">
            <p>Edit your user settings:</p>
            
            <p class="setting"><span>E-mail Address <img src="../../dist/img/edit.png" alt="*Edit*"></span> lolno@gmail.com</p>
            
            <p class="setting"><span>Language <img src="../../dist/img/edit.png" alt="*Edit*"></span> English(US)</p>
            
            <p class="setting"><span>Profile Status <img src="../../dist/img/edit.png" alt="*Edit*"></span> Public</p>
            
            <p class="setting"><span>Update Frequency <img src="../../dist/img/edit.png" alt="*Edit*"></span> Weekly</p>
            
            <p class="setting"><span>Connected Accounts <img src="../../dist/img/edit.png" alt="*Edit*"></span> None</p>
          </section>
        </div><!-- @end #content -->
  </div><!-- @end #w -->         
</div>
		    </section>
		    <!-- /.content -->
  </div>
@endsection