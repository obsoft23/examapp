<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          
          </div>
         
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
                  <div class="card-header">
                    <h3 class="card-title">Title</h3>

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                      <!-- <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                      </button> -->
                    </div>
                  </div>
                  <div class="card-body">
                     @yield('content')
                  </div>
                  <!-- /.card-body -->
            
              </div>
             
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>