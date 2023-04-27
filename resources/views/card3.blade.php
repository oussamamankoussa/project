<!DOCTYPE html>
        <html lang="en">
        <head>
           <meta charset="UTF-8">
           <meta http-equiv="X-UA-Compatible" content="IE=edge">
           <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <title>Document</title>
        </head>
        <body>
        <div class=" col-lg-6" number="3">
        <div id="background1" class=" d-flex m-2" style="{{$request->styleCarteA}}">
          <div id="background2" class="letf"style="{{$request->styleCarteB}}">
            <img src="./imagesService/{{$request->file}}" alt="" style="width: 60%; height: 40%;margin: 55px 0px 5px 40px; border-radius:50%; border:solid 4px #000000">
            <h3 class="text-center" style="{{$request->tail_titre}}">{{$request->titre}}</h3>
          </div> 
          <div class="rigth" style="width: 60%; height: 100%; #aefaf795; margin-top: 25px; ">
          
              <p class=" text-center" style="{{$request->tail_info}}"><b>{{$request->name}}</b></p>
          
            <div class="my-2" >
              <p class="ms-2" style="{{$request->tail_info}}"><i class="bi bi-stars me-2"></i>{{$request->profession}}</p>
            </div>
            <div class="my-2 " >
              <p class="ms-2" style="{{$request->tail_info}}"><i class="bi bi-telephone me-2"></i>{{$request->tel}}</p>
            </div>
            <div class="my-2 " >
              <p class="ms-2" style="{{$request->tail_info}}"><i class="bi bi-whatsapp me-2"></i>{{$request->whatsapp}}</p>
            </div>
            <div class="my-2 " >
                <p class="ms-2" style="{{$request->tail_info}}"><i class="bi bi-geo-alt me-2"></i>{{$request->adresse}}</p>
            </div>
            <div class="my-2 " >
                <p class="ms-2" style="{{$request->tail_info}}"><i class="bi bi-envelope me-2"></i>{{$request->email}}</p>
            </div>
          </div> 
        </div>
        
            
    </div>
    </body>
    </html>