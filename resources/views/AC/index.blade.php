@extends('template.main')



@section('content')

   
  

<div class="row">

    <div class="col-md-12">
    <button class="ms-btn-icon btn-primary mb-2" data-toggle="modal" data-target="#modal-10"><i class="fa fa-plus"></i></button>
    <div class="ms-panel">
        <div class="ms-panel-header">
              <h6>Data AC Gedung Tireg VII</h6>
        </div>
        <div class="ms-panel-body">
            <div class="table-responsive">
            <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Wing</th>
                <th>Lantai</th>
                <th>Lokasi</th>
                <th>Merk</th>
                <th>Status</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>A1.02</td>
                <td>WA</td>
                <td>Lt2</td>
                <td>Rg.Staff</td>
                <td>Daikin</td>
                <td class="text-success">Normal</td>
                <td>
                    <a href=""><i class="fa fa-edit text-success"></i></a>
                    <a href=""><i class="fa fa-info text-primary"></i></a>
                    <a href=""><i class="fa fa-trash text-danger"></i></a>
                </td>
            </tr>            
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Wing</th>
                <th>Lantai</th>
                <th>Lokasi</th>
                <th>Merk</th>
                <th>Status</th>
                <th>Option</th>
            </tr>
        </tfoot>
    </table>
            </div>
        </div>
    </div>
    </div>    
</div>

<div class="col-md-3 col-sm-6">
                 
                  
                </div>
                <div class="modal fade" id="modal-10" tabindex="-1" role="dialog" aria-labelledby="modal-10">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title">Silahkan tambahkan data AC dengan benar!</h1>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                      <div class="modal-body">
                        
                        <form method="post">
                        <div class="form-row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleEmail">Email address</label>
                                    <input type="email" class="form-control" id="exampleEmail" placeholder="info@example.com">
                                </div>
                            </div>                        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleEmail">Email address</label>
                                    <input type="email" class="form-control" id="exampleEmail" placeholder="info@example.com">
                                </div>
                            </div>                        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleEmail">Email address</label>
                                    <input type="email" class="form-control" id="exampleEmail" placeholder="info@example.com">
                                </div>
                            </div>                        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleEmail">Email address</label>
                                    <input type="email" class="form-control" id="exampleEmail" placeholder="info@example.com">
                                </div>
                            </div>                        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleEmail">Email address</label>
                                    <input type="email" class="form-control" id="exampleEmail" placeholder="info@example.com">
                                </div>
                            </div>                        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleEmail">Email address</label>
                                    <input type="email" class="form-control" id="exampleEmail" placeholder="info@example.com">
                                </div>
                            </div>                        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleEmail">Email address</label>
                                    <input type="email" class="form-control" id="exampleEmail" placeholder="info@example.com">
                                </div>
                            </div>                        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleEmail">Email address</label>
                                    <input type="email" class="form-control" id="exampleEmail" placeholder="info@example.com">
                                </div>
                            </div>                        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleEmail">Email address</label>
                                    <input type="email" class="form-control" id="exampleEmail" placeholder="info@example.com">
                                </div>
                            </div>                        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleEmail">Email address</label>
                                    <input type="email" class="form-control" id="exampleEmail" placeholder="info@example.com">
                                </div>
                            </div>                        
                        </div>
                          <button type="submit" class="btn btn-primary shadow-none">Submit</button>
                        </form>
                      </div>

                    </div>
                  </div>
                </div>
  
  
@endsection


