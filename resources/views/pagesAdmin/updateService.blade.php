
<div>
   {{$data}} 
   <form method="POST" action="{{route('convocation.update',['id'=>$data->id])}}" enctype="multipart/form-data">
   @method('patch')
   @csrf
<div class=" justify-content-center" style="margin: 70px 200px;">
            <div class=" d-flex flex-column align-items-center justify-content-center">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create an Serevice</h5>
                    <p class="text-center small">Enter your personal details to create Serevice </p>
                  </div>
                  <form class="row g-3 needs-validation" novalidate="">
                    <div class="col-12">
                      <label for="yourTitre" class="form-label pb-0 fs-4">Titre :</label>
                      <input type="text" name="titre" class="form-control" id="yourTitre"  value="{{$data->titre}}">
                      <div class="invalid-feedback">Please, enter your Titer!</div>
                    </div>
                    <div class="col-12">
                      <label for="yourText" class="form-label pb-0 fs-4">Discriptin :</label><br>
                      <textarea calss="form-control" id="formFile" name="discription" rows="5" cols="60" >{{$data->discription}}</textarea>
                      <div class="invalid-feedback">Please enter a valid discriptin!</div>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label pb-0 fs-4">Default file input example :</label>
                        <input class="form-control" type="file" id="formFile" name="file" value="{{$data->file}}" />
                  
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit"><p class="text-dark pb-0 fs-4">Update Serevice</p></button>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by BootstrapMade</a>
              </div>

            </div>
          </div>
</form>
 </div>
