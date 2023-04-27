<?php



class Download 
{
public function card1($request){
    return ' 
    <!DOCTYPE html>
    <html lang="en">
    <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Document</title>
    </head>
    <body>
    <div class="col-lg-6" number="1">
    <div id="background1" class="m-2" style="{{$request->styleCarteA}}">
        <div id="background2" class="d-flex" style="{{$request->styleCarteB}}" >

            <img src="./imagesService/{{$request->file}}" alt="" style=" width:25%; height: 80%; border-radius: 50%; border:solid 4px #000000;margin:8px 0px 0px 13px ;">
          <div style="margin: 20px 0px 0px 70px;">
            <h3 id="style_titer" class="text-center" style="{{$request->tail_titre}}">{{$request->titre}}</h3>
            <p id="style_info" class=" text-center" style="{{$request->tail_info}}"><b>{{$request->name}}</b></p>
            <p class="text-center"  style="{{$request->tail_info}}">{{$request->profession}}</p>
          </div>  
        </div>
        <div class="d-flex mt-3" style="{{$request->tail_info}}">
          <div>
              <div class="my-2" >
                <p class="ms-2"><i class="bi bi-telephone me-2"></i>{{$request->tel}}</p>
              </div>
              <div class="my-2" >
                <p class="ms-2"><i class="bi bi-whatsapp me-2"></i>{{$request->whatsapp}}</p>
              </div>
          </div>
          <div>
            <div class="my-2" >
                <p class="ms-2"><i class="bi bi-geo-alt me-2"></i>{{$request->adresse}}</p>
            </div>
            <div class=" my-2 " >
              <p class="ms-2"><i class="bi bi-envelope me-2"></i>{{$request->email}}</p>
            </div>
          </div>
        </div>
    </div>
       
</div>
    </body>
    </html>';
}
public function card2($request){
    return '<div class="col-lg-6" number="2">
    <div id="background1" class=" d-flex m-2" style="{{$request->styleCarteA}} ">
        <div id="background2" class="letf"style="{{$request->styleCarteB}}">
              <img src="./imagesService/{{$request->file}}" alt="" style="width: 60%; height: 40%;margin: 55px 0px 5px 40px; border-radius:50%; border:solid 4px #000000">
          <h3 class="text-center" style="{{$request->tail_titre}}">{{$request->titre}}</h3>
        </div> 
        <div class="rigth" style="width: 60%; height: 100%; margin-top: 25px; ">
      
          <p class=" text-center" style="{{$request->tail_info}}">{{$request->name}}</b></p>
        
          <div class="my-2" >
              <p class="ms-2" style="{{$request->tail_info}}"><i class="bi bi-stars me-2"></i>{{$request->profession}}</p>
          </div>
          <div class="my-2" >
            <p class="ms-2" style="{{$request->tail_info}}"><i class="bi bi-telephone me-2"></i>{{$request->tel}}</p>
          </div>
          <div class="my-2" >
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
        
</div>';
}
public function card3($request){
    return '<div class=" col-lg-6" number="3">
    <div id="background1" class=" d-flex m-2" style="{{$request->styleCarteA}}">
      <div id="background2" class="letf"style="{{$request->styleCarteB}}">
        <img src="./imagesService/{{$request->file}}" alt="" style="width: 60%; height: 40%;margin: 55px 0px 5px 40px; border-radius:50%; border:solid 4px #000000">
        <h3 class="text-center" style="{{$request->tail_titre}}">{{$e->titre}}</h3>
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
    
        
</div>';
}
public function card4($request){
    return '<div class="card1 col-lg-6" number="4">
    <div class="front-side" style="color: rgb(255, 255, 255);font-family: "Heebo", sans-serif;width: 390px;height: 220px;display: grid;grid-template-columns: 2% 96% 2%;grid-template-rows: 4% 92% 4%;position: relative;margin: 20px auto;overflow: hidden;box-shadow: 2px 5px 15px 0px #17161694;background-color: #122529;">
      <div class="color-grid" style="display: grid;grid-template-columns: repeat(3, 150px);grid-template-rows: repeat(8, 50px);grid-gap: 8px;width: 150px;height: 400px;transform: rotate(-45deg);">
          <div  id="background1" class="black" style="{{$request->styleCarteA}}"></div>
          <div  id="background2" class="red1" style="{{$request->styleCarteB}}"></div>
          <div   class="red2"  style="{{$request->styleCarteB}}grid-column: 2 / span 2;grid-row: 4/7;"></div>
          
      </div>
      <div class="info-grid" style="grid-column: 2/3;grid-row: 2/3;z-index: 2;width: 100%;height: 100%;background-color: rgba(255, 255, 255, 0.363);box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.432);border-radius: 6px;font-size: 0.7rem;display: grid;grid-template-columns: 15px repeat(3, 1fr) 15px;grid-template-rows: repeat(3, 1fr);line-height: 1px;">
          <div class="name" style="grid-column: 2 / span 3;grid-row: 1 / span 1;font-size: 1.2em;letter-spacing: .1rem;margin-top: 8px;">
              
              <p style="{{$request->tail_info}}"><b>{{$request->name}}</b></p>
              <p style="{{$request->tail_info}}">{{$request->profession}}</p>
          </div>
          <div class="addr" style="width: 2.8cm;height: 2.8cm;position: absolute;bottom: 24%;left: 20px;">
              <img src="./imagesService/{{$request->file}}" alt="" style="width: 100%; height: 100%; border-radius:50%; border:solid 4px #000000">
              <h3 style="{{$request->tail_titre}}">{{$request->titre}}</h3>    
          </div>
          <div class="phoneNo" style=";grid-column: 3 / span 2;grid-row: 2;margin-left: 1.5cm;">
              
              <p style="{{$request->tail_info}}"><i class="bi bi-telephone me-2"></i>{{$request->tel}}</p>
              <p style="{{$request->tail_info}}"><i class="bi bi-whatsapp me-2"></i>{{$request->whatsapp}}</p><br>
              <p style="{{$request->tail_info}}"><i class="bi bi-geo-alt me-2"></i>{{$request->adresse}}</p><br>
              <p style="{{$request->tail_info}}"><i class="bi bi-envelope me-2"></i>{{$request->email}}</p>
          </div>
          
      </div>
    </div>

  </div>';
}
}




?>