@extends('dashboard')
@section('cont')
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<div>
<div class="contun row">
        <div class="card1 col" number="1">
          <div id="background1" class="m-2" style="width: 400px;height: 240px; background-color: #E9ECEF;border-radius:15px;">
              <div id="background2" class="d-flex" style=" background-color: #CCD7D6 ; width:90%; height: 50%; border-radius:0% 0% 25% 25%; margin-left:5%" >

                  <img src="./FB_IMG_16546301093109901.jpg" alt="" style=" width:25%; height: 80%; border-radius: 50%; border:solid 4px #000000;margin:8px 0px 0px 13px ;">
                <div style="margin: 0px 0px 0px 70px;">
                  <h3 id="style_titer" class="text-center" style=" font-family: 'montserrat',sans-serif;">Titre</h3>
                  <p id="style_info" class=" text-center" style=" font-size: 12px;"><b>{{$dataUser->name}}</b></p>
                  <p class="text-center"  style=" font-size: 12px;">{{$dataUser->profession}}</p>
                </div>  
              </div>
              <div id="style_B" class="d-flex mt-3" style="font-size: 12px;">
                <div>
                    <div class="my-2 ms-2 d-flex" >
                      <p class="ms-2"><i class="bi bi-telephone me-2"></i>{{$dataUser->tel}}</p>
                    </div>
                    <div class="my-2 ms-2 d-flex" >
                      <p class="ms-2"><i class="bi bi-whatsapp me-2"></i>{{$dataUser->whatsapp}}</p>
                    </div>
                </div>
                <div>
                  <div class="my-2 ms-2 d-flex" >
                      <p class="ms-2"><i class="bi bi-geo-alt me-2"></i>{{$dataUser->adresse}}</p>
                  </div>
                  <div class=" my-2 ms-2 d-flex" >
                    <p class="ms-2"><i class="bi bi-envelope me-2"></i>{{$dataUser->email}}</p>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <div class="card1 col" number="2">
            <div id="background1" class=" d-flex m-2" style="width: 400px;height: 240px; background-color: #E9ECEF ; border-radius: 15px; ">
                <div id="background2" class="letf"style="width: 40%; height: 94%; background-color:  #CCD7D6;  border-radius: 15px 0% 0% 15px;margin:8px 6px 0px 0px;">
                      <img src="./FB_IMG_16546301093109901.jpg" alt="" style="width: 60%; height: 40%;margin: 55px 0px 5px 40px; border-radius:50%; border:solid 4px #000000">
                  <h3 id="style_titer" class="text-center" style=" font-family: 'montserrat',sans-serif;">Titre</h3>
                </div> 
                <div class="rigth" style="width: 60%; height: 100%; margin-top: 25px;font-size: 12px; ">
              
                  <p  id="style_info" class=" text-center" style=" font-size: 12px;"><b>{{$dataUser->name}}</b></p>
                
                  <div class="my-2" >
                      <p class="ms-2"><i class="bi bi-stars me-2"></i>{{$dataUser->profession}}</p>
                  </div>
                  <div class="my-2" >
                    <p class="ms-2"><i class="bi bi-telephone me-2"></i>{{$dataUser->tel}}</p>
                  </div>
                  <div class="my-2" >
                    <p class="ms-2"><i class="bi bi-whatsapp me-2"></i>{{$dataUser->whatsapp}}</p>
                  </div>
                  <div class="my-2" >
                    <p class="ms-2"><i class="bi bi-geo-alt me-2"></i>{{$dataUser->adresse}}</p>
                  </div>
                  <div class="my-2 " >
                    <p class="ms-2"><i class="bi bi-envelope me-2"></i>{{$dataUser->email}}</p>
                  </div>
                </div> 
            </div>
        </div> 
    
        <div  class="card1 col" number="3">
              <div id="background1" class=" d-flex m-2" style="width: 400px;height: 240px; background-color: #E9ECEF;  border-radius: 15px; ">
                <div id="background2" class="letf" style="width: 40%; height: 94%; background-color:  #CCD7D6;    border-radius: 15px 50% 50% 15px;margin:8px 6px 0px 0px;">
                  <img src="./FB_IMG_16546301093109901.jpg" alt="" style="width: 60%; height: 40%;margin: 55px 0px 5px 40px; border-radius:50%; border:solid 4px #000000">
                  <h3  id="style_titer" class="text-center" style=" font-family: 'montserrat',sans-serif;">Titre</h3>
                </div> 
                <div class="rigth" style="width: 60%; height: 100%;margin-top: 25px;font-size: 12px; ">
                
                    <p  id="style_info" class=" text-center" style=" font-size: 12px;"><b>{{$dataUser->name}}</b></p>
                
                  <div class="my-2" >
                    <p class="ms-2"><i class="bi bi-stars me-2"></i>{{$dataUser->profession}}</p>
                  </div>
                  <div class="my-2" >
                    <p class="ms-2"><i class="bi bi-telephone me-2"></i>{{$dataUser->tel}}</p>
                  </div>
                  <div class="my-2" >
                    <p class="ms-2"><i class="bi bi-whatsapp me-2"></i>{{$dataUser->whatsapp}}</p>
                  </div>
                  <div class="my-2" >
                      <p class="ms-2"><i class="bi bi-geo-alt me-2"></i>{{$dataUser->adresse}}</p>
                  </div>
                  <div class="my-2" >
                      <p class="ms-2"><i class="bi bi-envelope me-2"></i>{{$dataUser->email}}</p>
                  </div>
                </div> 
              </div>
        </div>
</div>
</div>

<div class="d-flex">
    <div id="affichage" style="width:100%; border: 4px solid ;"></div>    
        <div class="col-lg-6 border border-dark border-5 bg-info">
          <label for="">nomber modele:</label>
          <input type="text" class="form-control" id="model" value="" disabled><br>

          <label for="">background1:</label>   
          <input type="color" name="" id="backgroundA"><br>

          <label for="">background2:</label>   
          <input type="color" name="" id="backgroundB"><br>

          <label for="">titre:</label>
          <input type="text" id="titre" value=""><br>

          <label for="">la tail de titer:</label>
          <select class="from-select" name="" id="f_titer">
                                <option value=""></option>
                                @for($i=20;$i < 40 ;$i++)
                                <option value="{{$i}}">{{$i}}</option>
                                @endfor
                                </select><br>

          <label for="">color de Titre :</label>   
          <input type="color" name="" id="color_titre"><br>

          <label for="">la tail de information:</label>
          <select class="from-select" name="" id="f_info">
                                <option value=""></option>
                                @for($i=5;$i < 20 ;$i++)
                                <option value="{{$i}}">{{$i}}</option>
                                @endfor
                                </select><br>

          <label for="">color de information:</label>   
          <input type="color" name="" id="color_info"><br>

            
          <button class="update btn btn-outline-primary " style="padding:8px 20px;background-color:blue; border-radius: 4px;">Update</button>
        </div>     
</div>
<div>
    <form action="{{ route('CarteVisite.store') }}" method="post" enctype='multipart/form-data'>  
                @csrf 
                <div  style="margin-top:-2cm ;margin-left:10px">
                  photo :<br><input type="file" id="file" name="file">
                  <p id='erorr' class='text-danger'></p>
                </div>         
                      <input type="text" id="number_M"  name="number_M" hidden>
                      
                        <input type="text" id="styleCarteA"  name="styleA" hidden ><br>
                        <input type="text" id="styleCarteB"  name="styleB" hidden ><br>
                        <input type="text" id="Titre" name="T_h3" hidden ><br>
                        <input type="text" id="styleTitre" name="h3" hidden ><br>
                        <input type="text" id="styleInfo" name="p" hidden >
                        
                        <button type="button" class="valide btn btn-outline-primary btn-lg btn-block bg-info" style="">Ajoute un carte</button>
                        
    </form> 
</div>

<div>
@if($data !== null)
  <div class="row">
    @foreach($data as $e)
      
        @if($e->N_Modele === "1")
        
            <div class="col-lg-6" number="1">
                  <div id="capture{{$e->id}}" class="m-2" style="{{$e->styleCarteA}}">
                      <div id="background2" class="d-flex" style="{{$e->styleCarteB}}" >

                          <img src="./imagesService/{{$e->file}}" alt="" style=" width:25%; height: 80%; border-radius: 50%; border:solid 4px #000000;margin:8px 0px 0px 13px ;">
                        <div style="margin: 20px 0px 0px 70px;">
                          <h3 id="style_titer" class="text-center" style="{{$e->tail_titre}}">{{$e->titre}}</h3>
                          <p id="style_info" class=" text-center" style="{{$e->tail_info}}"><b>{{$dataUser->name}}</b></p>
                          <p class="text-center"  style="{{$e->tail_info}}">{{$dataUser->profession}}</p>
                        </div>  
                      </div>
                      <div class="d-flex mt-3" style="{{$e->tail_info}}">
                        <div>
                            <div class="my-2" >
                              <p class="ms-2"><i class="bi bi-telephone me-2"></i>{{$dataUser->tel}}</p>
                            </div>
                            <div class="my-2" >
                              <p class="ms-2"><i class="bi bi-whatsapp me-2"></i>{{$dataUser->whatsapp}}</p>
                            </div>
                        </div>
                        <div>
                          <div class="my-2" >
                              <p class="ms-2"><i class="bi bi-geo-alt me-2"></i>{{$dataUser->adresse}}</p>
                          </div>
                          <div class=" my-2 " >
                            <p class="ms-2"><i class="bi bi-envelope me-2"></i>{{$dataUser->email}}</p>
                          </div>
                        </div>
                      </div>
                  </div>
                      <div class="d-flex">
                          <form action="{{route('CarteVisite.destroy',['id'=>$e->id])}}" method="post">
                              @method('delete')
                              @csrf
                                <button class="btn btn-outline-primary mx-2" type="submit">Delete</button>
                          </form>
                          @if($e->show === 0)
                           
                           <form method="POST" action="{{route('CarteVisite.update',['id'=>$e->id ,'show'=>1])}}">
                                  @csrf
                                  @method('patch')
                                  <button class="btn btn-outline-primary mx-2 " type="submit">show</button>
                          </form>
                               
                            
                          @else
                          <form method="POST" action="{{route('CarteVisite.update',['id'=>$e->id ,'show'=>0])}}">
                                  @csrf
                                  @method('patch')
                                  <button class="btn btn-outline-primary mx-2 " type="submit">hide</button>
                          </form>
                          @endif
                          <i  id="i" class="btn btn-outline-primary bi bi-download me-2" onclick="capture({{$e->id}})" ></i>
                          <p>{{$e->created_at->format('d/m/Y')}}</p>
                          @if($e->status === 0)
                            <p class="badge badge-danger">en atande</p>
                          @else
                            <p class="badge badge-success">Accepte</p>
                          @endif

   
                      </div>
                  
            </div>
            
        @endif    
        @if($e->N_Modele === "2")

              <div class="col-lg-6" number="2">
                  <div id="capture{{$e->id}}" class=" d-flex m-2" style="{{$e->styleCarteA}} ">
                      <div id="background2" class="letf"style="{{$e->styleCarteB}}">
                            <img src="./imagesService/{{$e->file}}" alt="" style="width: 60%; height: 40%;margin: 55px 0px 5px 40px; border-radius:50%; border:solid 4px #000000">
                        <h3 class="text-center" style="{{$e->tail_titre}}">{{$e->titre}}</h3>
                      </div> 
                      <div class="rigth" style="width: 60%; height: 100%; margin-top: 25px; ">
                    
                        <p class=" text-center" style="{{$e->tail_info}}">{{$dataUser->name}}</b></p>
                      
                        <div class="my-2" >
                            <p class="ms-2" style="{{$e->tail_info}}"><i class="bi bi-stars me-2"></i>{{$dataUser->profession}}</p>
                        </div>
                        <div class="my-2" >
                          <p class="ms-2" style="{{$e->tail_info}}"><i class="bi bi-telephone me-2"></i>{{$dataUser->tel}}</p>
                        </div>
                        <div class="my-2" >
                          <p class="ms-2" style="{{$e->tail_info}}"><i class="bi bi-whatsapp me-2"></i>{{$dataUser->whatsapp}}</p>
                        </div>
                        <div class="my-2 " >
                          <p class="ms-2" style="{{$e->tail_info}}"><i class="bi bi-geo-alt me-2"></i>{{$dataUser->adresse}}</p>
                        </div>
                        <div class="my-2 " >
                          <p class="ms-2" style="{{$e->tail_info}}"><i class="bi bi-envelope me-2"></i>{{$dataUser->email}}</p>
                        </div>
                      </div> 
                  </div>
                      <div class="d-flex">
                          <form action="{{route('CarteVisite.destroy',['id'=>$e->id])}}" method="post">
                              @method('delete')
                              @csrf
                                <button class="btn btn-outline-primary mx-2 " type="submit">Delete</button>
                          </form>
                          
                          @if($e->show === 0)
                           
                           <form method="POST" action="{{route('CarteVisite.update',['id'=>$e->id ,'show'=>1])}}">
                                  @csrf
                                  @method('patch')
                                  <button class="btn btn-outline-primary mx-2 " type="submit">show</button>
                          </form>
                               
                            
                          @else
                          <form method="POST" action="{{route('CarteVisite.update',['id'=>$e->id ,'show'=>0])}}">
                                  @csrf
                                  @method('patch')
                                  <button class="btn btn-outline-primary mx-2 " type="submit">hide</button>
                          </form>
                          @endif
                          <i  id="i" class="btn btn-outline-primary bi bi-download me-2" onclick="capture({{$e->id}})" ></i>
                          <p>{{$e->created_at->format('d/m/Y')}}</p>
                          @if($e->status === 0)
                            <p class="badge badge-danger">en atande</p>
                          @else
                            <p class="badge badge-success">Accepte</p>
                          @endif
                      </div>
              </div>
              
        @endif       
        @if($e->N_Modele === "3") 
          
                <div class=" col-lg-6" number="3">
                      <div id="capture{{$e->id}}" class=" d-flex m-2" style="{{$e->styleCarteA}}">
                        <div id="background2" class="letf"style="{{$e->styleCarteB}}">
                          <img src="./imagesService/{{$e->file}}" alt="" style="width: 60%; height: 40%;margin: 55px 0px 5px 40px; border-radius:50%; border:solid 4px #000000">
                          <h3 class="text-center" style="{{$e->tail_titre}}">{{$e->titre}}</h3>
                        </div> 
                        <div class="rigth" style="width: 60%; height: 100%; #aefaf795; margin-top: 25px; ">
                        
                            <p class=" text-center" style="{{$e->tail_info}}"><b>{{$dataUser->name}}</b></p>
                        
                          <div class="my-2" >
                            <p class="ms-2" style="{{$e->tail_info}}"><i class="bi bi-stars me-2"></i>{{$dataUser->profession}}</p>
                          </div>
                          <div class="my-2 " >
                            <p class="ms-2" style="{{$e->tail_info}}"><i class="bi bi-telephone me-2"></i>{{$dataUser->tel}}</p>
                          </div>
                          <div class="my-2 " >
                            <p class="ms-2" style="{{$e->tail_info}}"><i class="bi bi-whatsapp me-2"></i>{{$dataUser->whatsapp}}</p>
                          </div>
                          <div class="my-2 " >
                              <p class="ms-2" style="{{$e->tail_info}}"><i class="bi bi-geo-alt me-2"></i>{{$dataUser->adresse}}</p>
                          </div>
                          <div class="my-2 " >
                              <p class="ms-2" style="{{$e->tail_info}}"><i class="bi bi-envelope me-2"></i>{{$dataUser->email}}</p>
                          </div>
                        </div> 
                      </div>
                      <div class="d-flex">
                          <form action="{{route('CarteVisite.destroy',['id'=>$e->id])}}" method="post">
                              @method('delete')
                              @csrf
                                <button class="btn btn-outline-primary mx-2 " type="submit">Delete</button>
                          </form>
                          
                          @if($e->show === 0)
                           
                           <form method="POST" action="{{route('CarteVisite.update',['id'=>$e->id ,'show'=>1])}}">
                                  @csrf
                                  @method('patch')
                                  <button class="btn btn-outline-primary mx-2 " type="submit">show</button>
                          </form>
                               
                            
                          @else
                          <form method="POST" action="{{route('CarteVisite.update',['id'=>$e->id ,'show'=>0])}}">
                                  @csrf
                                  @method('patch')
                                  <button class="btn btn-outline-primary mx-2" type="submit">hide</button>
                          </form>
                          @endif
                          <i class="btn btn-outline-primary bi bi-download me-2" onclick="capture({{$e->id}})"></i>
                          <p>{{$e->created_at->format('d/m/Y')}}</p>
                          @if($e->status === 0)
                            <p class="badge badge-danger">en atande</p>
                          @else
                            <p class="badge badge-success">Accepte</p>
                          @endif   
                      </div>
                          
                </div>
              
        @endif     
    @endforeach        
  </div>
@else
  <p>non carte</p>
@endif
</div>


<script src="./html2canvas.min.js"></script>
<script src="./jquery-3.6.0.min.js"></script>
<script src="./test.js"></script>
<script>

        function capture(i) {

          
            html2canvas( document.getElementById(`capture${i}`),{
        logging: true,
        letterRendering: 1,
        allowTaint: true,
        useCORS: true,
        scrollX: 0,
        scrollY: -window.scrollY,

        async: true,
      } ).then(canvas => { 
                canvas.toBlob(function(blob) {
                // Create an <a> element and set its download attribute to the filename
                var a = document.createElement("a");
                a.download = "invoice.jpg";
  
                // Set the href attribute to a URL created from the Blob object
                a.href = URL.createObjectURL(blob);
  
                // Trigger a click event on the <a> element to download the image
                a.click();
  
                // Clean up the URL object
                URL.revokeObjectURL(a.href);
              }, "image/jpeg", 0.8);
            

            })
          
        }
    
</script>

@endsection