<!-- 
      <div class="container">
          <div class="section-title">
            <span>Portfolio</span>
            <h2>Portfolio</h2>
            <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
          </div>
          
    
       
          <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
              <ul class="result" id="portfolio-flters">
                <li data-filter="*" class="filter-active filter" >All</li>
                
                    @foreach($tableProfession as $e)
                <li data-filter=".filter-{{$e->profession}}" class="filter">{{$e->profession}}</li>
                    @endforeach
                
                
              </ul>
            </div>
          </div>

          <div class="row portfolio-container">
            @foreach($dataUser as $e)
              @foreach($dataService as $serv)
                  @if($e->id == $serv->user_id)
                  
                    <div class="col-lg-4 col-md-6 portfolio-item filter-{{$e->profession}}">
                        <img src="./imagesService/{{$serv->file}}" class="img-fluid" alt="">
                        <div class="col-lg-4 col-md-6 portfolio-info">
                          <h4>{{$serv->titre}}</h4>
                          <p>{{$serv->discription}}</p>
                          <a href="./imagesService/{{$serv->file}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                          <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                  
                  @endif
              @endforeach
            @endforeach
          
          </div>
          
            
      </div> -->
