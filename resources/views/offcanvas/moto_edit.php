

<!-- Modal -->
<div class="modal fade" id="motoeditform" tabindex="-1" role="dialog" aria-labelledby="motoeditformlabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="motoeditformlabel">Model</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


  <div class="modal-body">
  <div class="container-fluid">
    <form action="{{url('update_moto_details')}}" id="updateform" method="post" >
    <input type="hidden" class="form-control" name="modified_by" id="modified_by"   >
    <input type="hidden" class="form-control" name="modaleditid" id="modaleditid"  >
    <input type="hidden" name="_token" id="_token" />
  

            <div class="row">
                <div class="col-md-3 mb-3">
                        <div class="form-group">
                          <label for="modaleditmodel">Model</label>
                          <input type="text" class="form-control" name="modaleditmodel" id="modaleditmodel"  disabled >
                        </div>
               </div>
                      <div class="col-md-3 mb-3">
                        <div class="form-group">
                          <label for="modaleditcolor">Color</label>
                          <input type="text" class="form-control" name="modaleditcolor" id="modaleditcolor"  disabled >
                        </div>
                        </div>
                     <div class="col-md-3 mb-3">
                        <div class="form-group">
                          <label for="modaleditvin">VIN</label>
                          <input type="text" class="form-control" name="modaleditvin" id="modaleditvin"  disabled >
                        </div>
                      </div>
                        <div class="col-md-3 mb-3">
                        <div class="form-group">
                          <label for="modaleditpo">Import order</label>
                          <input type="text" class="form-control" name="modaleditpo" id="modaleditpo"  disabled >
                        </div>
                        </div>
          </div>


          <hr>

          <div class="row">
            <div class="col-md-3 mb-3 form-inline">
                        <div class="form-check">
                              <input class="form-check-input" name="sold" type="checkbox" id="sold"    >
                              <label class="form-check-label"  for="sold" >
                              Sold?
                              </label>
                          </div>
            </div>

            </div>











            <div class="row">


                  <div class="col-md-3 mb-3">
                            <div class="form-group">
                                  <label for="location">Location</label>
                                  <input     type="text" class="form-control" name="location" id="location"     >
                          </div>
            </div>
          

            <div class="col-md-3 mb-3">
                            <div class="form-group">
                                  <label for="registration_nbr">Registr. nbr</label>
                                  <input    type="text" class="form-control" name="registration_nbr" id="registration_nbr"  >
                          </div>
            </div>

            <div class="col-md-3 mb-3">
                            <div class="form-group">
                                  <label for="inv_eccity_nbr">ECCITY Inv.</label>
                                  <input  type="text" class="form-control" name="inv_eccity_nbr" id="inv_eccity_nbr"  >
                          </div>
            </div>


            <div class="col-md-3 mb-3">
                            <div class="form-group">
                                  <label for="inv_eccity_date">Date Invoiced</label>
                                  <input    type="date" class="form-control" name="inv_eccity_date" id="inv_eccity_date"  >
                          </div>
            </div>

               

  </div>


  <hr>


  <div class="row">
            <div class="col-md-9 mb-3 form-inline">
                        <div class="form-check ">
                              <input class="form-check-input" name="invoiced" type="checkbox" id="invoiced" >
                              <label class="form-check-label"  for="invoiced">
                              Invoiced by Nipponia?
                              </label>
                          </div>
            </div>
            </div>



  <div class="row">
                  <div class="col-md-4 mb-3">
                            <div class="form-group">
                                  <label for="inv_nipponia_nbr">Nipponia Invoice</label>
                                  <input    type="text" class="form-control" name="inv_nipponia_nbr" id="inv_nipponia_nbr"  >
                          </div>
            </div>


            <div class="col-md-4 mb-3">
                            <div class="form-group">
                                  <label for="inv_nipponia_paid">Paid to Nipponia?</label>
                                  <input  type="text" class="form-control" name="inv_nipponia_paid"  id="inv_nipponia_paid"  >
                          </div>
            </div>



            <div class="col-md-4 mb-3">
                            <div class="form-group">
                                  <label for="inv_nipponia_date">Date Invoiced</label>
                                  <input   type="date" class="form-control" name="inv_nipponia_date" id="inv_nipponia_date"  >
                          </div>
            </div>
       

    </div>

  
  <div class="row">
        <div class="col-md-3 mb-5">
        <button type="submit" class="btn btn-primary">Update</button>
        </div>
  </div>






















    </div>
</div>




      <div class="modal-footer">
        <button type="button" class="btn btn-secondary  btn-ok" data-dismiss="modal">Close</button>
        </div>
    </div>
  </div>
</div>



