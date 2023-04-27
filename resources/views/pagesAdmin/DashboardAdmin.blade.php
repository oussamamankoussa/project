@extends('pagesAdmin.pageAdmin')
@section('cont')
<main>
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                nombre de client</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"style="font-size:40px">{{$N_user[0]->user_count}}</div>
                        </div>
                        <div class="col-auto">
                            
                           <i style="font-size:60px" class="bi bi-people text-info"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            nombre de service </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800" style="font-size:40px">{{$N_service[0]->service_count}}</div>
                        </div>
                        <div class="col-auto">
                        <i style="font-size:60px" class="bi bi-briefcase text-warning"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                            nombre de carte</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800" style="font-size:40px">{{$N_carte[0]->carte_count}}</div>
                        </div>
                        <div class="col-auto">
                        <i style="font-size:60px" class="bi bi-card-heading text-info"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       
    </div>
    <div class="row">
       
        <div class="col-md-12">
            <h4> Datatable User</h4>
            
            <div class="table-responsive">
    <div class="container">
       <center><h1>Recherche</h1></center>
        <div class="row">
            
            <form class="col-9 d-flex" action="{{route('pageAdmin.recherche')}}" method="post">
                  @csrf               
                               
                <div class=" col-3 form-floating mb-3">
                    <select name="E_Reche" class="form-select" id="floatingSelect" >
                        <option selected="id">id</option>
                        <option value="name">name</option>
                        <option value="ville">ville</option>
                        <option value="profession">profession</option>
                    </select>
                    <label for="floatingSelect">recherche par:</label>
                </div>
                <div class="col-6 mb-3 ms-5">
                    <div class="input-group mb-3">
                        <input type="text"  name="T_recherche"  class="form-control" placeholder="cherche">
                        <span class="input-group-text" id="basic-addon2">
                            <button type="submit"><i class="bi bi-search "  ></i></button>
                        </span>
                    </div>
                    
                </div>
            
            </form>
            <a class="col-3" href="{{route('pageAdmin')}}"><button class="btn btn-info">affiche table users</button></a>
        </div>
    </div>
    @if(count($dataUser) == null)
        <h3 class="text-danger">la recherche ne existe pas!</h3>
      @else  
                <table id="mytable" class="table table-bordred table-striped">
                                    
                    <thead>
                        <th>Id</th>
                        <th>Name</th>
                        <th>profession</th>
                        <th>Ville</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Tel</th>
                        <th>Whatsap</th> 
                        <th>N_carte</th> 
                        <th>N_Service</th> 
                        <th>Delete</th>
                    </thead>
                    <tbody>
                    @foreach($dataUser as $e)      
                        <tr>
                            <td>{{$e->id}}</td>
                            <td>{{$e->name}}</td>
                            <td>{{$e->profession}}</td>
                            <td>{{$e->ville}}</td>
                            <td>{{$e->adresse}}</td>
                            <td>{{$e->email}}</td>
                            <td>{{$e->tel}}</td>
                            <td>{{$e->whatsapp}}</td>
                            <td>
                                <?php
                                    $i=0;
                                    
                                        
                                    foreach ($dataCarte as $e_C){
                                        if($e->id === $e_C->user_id){
                                        $i=$i+1;  
                                        }
                                        }
                                        echo $i;
                                ?> 
                            </td>
                            <td>
                                <?php
                                    $j=0;    
                                    foreach ($dataService as $e_S){
                                            if($e->id === $e_S->user_id){
                                            $j=$j+1;  
                                            }
                                        }
                                        echo $j;
                                ?>
                            </td>
                            <td>
                                <form action="{{route('pageAdmin.destroy',['id'=>$e->id])}}" method="post">
                                @method('delete')
                                @csrf
                                    <button class="btn btn-danger btn-xs" type="submit"><i class="bi bi-trash-fill"></i></button>
                                </form>
                            </td>    
                                

                        </tr>
                    @endforeach
                    </tbody>
                            
                </table>
    @endif        
            </div>
        </div>
    </div> 
           
</main>


@endsection