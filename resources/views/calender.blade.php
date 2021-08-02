@extends('admin.admin_layout2')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
    </section>

    <!-- Main content -->
    <section class="content" >
     
       
         
                <!-- THE CALENDAR -->
                <div class="d-flex justify-content-center">
             	   <div id="calendar" style="width: 900px; height: 200px; margin-top: -2.7%; margin-left: 10%"></div>
             	</div>
       
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<script type="text/javascript">
	
  document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth'
        });
        calendar.render();
   });


</script>
@endsection