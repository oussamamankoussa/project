@extends('dashboard')
@section('cont')
<div>
<div class="m-5" >
<form method="POST" action="{{ route('serevice') }}" class=""  enctype="multipart/form-data">
    @csrf
<div class=" justify-content-center" style="margin: 70px 200px;">
            <div class=" d-flex flex-column align-items-center justify-content-center">
              <div class="card mb-3 bg-info">
                <div class="card-body">
                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4 " >Create an Serevice</h5>
                    <p class="text-center small">Enter your personal details to create Serevice </p>
                  </div>
                  <form class="row g-3 needs-validation" novalidate="">
                    <div class="col-12">
                      <label for="yourTitre" class="form-label pb-0 fs-4">Titre :</label>
                      <input type="text" name="titre" class="form-control" id="yourTitre" required="">
                      <div class="invalid-feedback">Please, enter your Titer!</div>
                    </div>
                    <div class="col-12">
                      <label for="yourText" class="form-label pb-0 fs-4">Discriptin :</label><br>
                      <textarea calss="form-control" id="formFile" name="discription" rows="5" cols="60"></textarea>
                      <div class="invalid-feedback">Please enter a valid discriptin!</div>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label pb-0 fs-4">Default file input example :</label>
                        <input class="form-control" type="file" id="formFile" name="file">
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit"><p class="text-dark pb-0 fs-4">Create Serevice</p></button>
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
<div>
  <h1 class="text-center m-5 font-semibold text-xl text-gray-800 leading-tight"><b>Liste Services</b></h1>
  
  @if($data !== null)
  <div class="container">
     <div class="row text-center ms-5">
        @foreach($data as $serv)
        <div class="card col-4 m-3" style="width: 18rem;">
          <center>
            <img src="./imagesService/{{$serv->file}}" style="width: 80%;height: 200px;" class="card-img-top ms-5 mt-2" alt="...">
          </center>
          <div class="card-body">
            <h5 class="card-title"><b>{{$serv->titre}}</b></h5>
            <p class="card-text">{{$serv->discription}}</p>
            <div class="d-flex"> 
                    <form action="{{route('serevice.destroy',['id'=>$serv->id])}}" method="post">
                      @method('delete')
                      @csrf
                        <button style="margin-left:40px" class="btn btn-outline-danger ms-5" type="submit">Delete</button>
                    </form>
                    <a style="margin-left:40px" href="{{route('serevice.show',['id'=>$serv->id])}}" class="btn btn-outline-primary ms-5">update</a>
            </div>
             </div>
             @if($serv->status === 0)
              <p class="badge badge-danger">en atande</p>
              @else
              <p class="badge badge-success">Accepte</p>
              @endif
              <p>{{$serv->created_at->format('d/m/Y')}}</p>
            </div>
        @endforeach
       </div>
       </div>
      @else
       <p>non service</p>
      @endif
 
      </div> 
</div>
</div>
 </div>
@endsection