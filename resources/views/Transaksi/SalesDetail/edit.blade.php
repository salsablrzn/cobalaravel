@extends('admin/admin')
@section('konten')
<!-- form start -->
              <form role="form">
                <h3> &nbsp;&nbsp;Edit Category</h3>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputNama">Category ID<span class="required"> * </span></label>
                    <input class="form-control" id="exampleInputCategoryID" type="text" placeholder="Enter Category ID" value="<?php echo "001" ?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputCategoryName">Category Name<span class="required"> * </span></label>
                    <input class="form-control" id="exampleInputCategoryName"type="text" placeholder="Enter Category Name" value="<?php echo "Makanan" ?>">
                  </div>

                  <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                      <label class="custom-control-label" for="exampleCheck1">I agree to the</a>.</label>
                    </div>
                    <br>

                    <!-- /.card-body -->

                <div class="card-footer">
                	<button type="submit" class="btn btn-primary"><a href="SalesDetailIndex" style="color: white;">Cancel</button>
                	<button type="submit" class="btn btn-primary"><a href="SalesDetailIndex" style="color: white;">Update Data</button>
                  
                </div>
            </div>
        </form>
              </form>
          </div>
          </div>
      </form>
      </form>
      </form>
      

            @endsection