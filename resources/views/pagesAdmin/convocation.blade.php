@extends('pagesAdmin.pageAdmin')
@section('cont')
<style>
  .custab{
    border: 1px solid #ccc;
    padding: 5px;
    margin: 5% 0;
    box-shadow: 3px 3px 2px #ccc;
    transition: 0.5s;
    }
.custab:hover{
    box-shadow: 3px 3px 0px transparent;
    transition: 0.5s;
    }
table{
    width: 16cm;
    }
img{
    width:100%;
    height: 100%;
    }
</style>

<!------ Include the above in your HEAD tag ---------->
<div class="container">
    <h2>Table de Service</h2>
    <div class="row custyle">
      <table class="table table-striped custab" >
        <thead>
            <tr>
                <th>ID</th>
                <th>Usre_ID</th>
                <th>Title</th>
                <th>Discription</th>
                <th>File</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        @foreach($dataService as $serv)
            @if($serv->status === 0)
                <tr>
                    <td>{{$serv->id}}</td>
                    <td>{{$serv->user_id}}</td>
                    <td>{{$serv->titre}}</td>
                    <td>{{$serv->discription}}</td>
                    <td> 
                        <div style="width:5cm;height:5cm">
                            <a href="./imagesService/{{$serv->file}}">
                                <img src="./imagesService/{{$serv->file}}" class="card-img-top" alt="...">
                            </a>    
                        </div>
                    </td>
                    <td class="text-center">

                        <a calss="d-block" href="{{route('convocation.edit',['id'=>$serv->id])}}">
                            <button type="button" class="btn btn-success d-inline">
                                <i class="bi bi-check-circle"></i>
                            </button>
                        </a>
                        <a calss="d-block" href="{{route('updateserevice.show',['id'=>$serv->id])}}">
                            <button type="button" class="btn btn-info">
                               <i class="bi bi-pencil-fill"></i>
                            </button>
                        </a>
                        <form action="{{route('convocation.destroy',['id'=>$serv->id])}}" method="post">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger" type="submit"><i class="bi bi-trash-fill"></i></button>
                        </form>
                    </td>
                </tr>
                @endif
            @endforeach
      </table>
    </div>
    <h2>Table de Carte</h2>
    <div class="row custyle">
      <table class="table table-striped custab" >
        <thead>
            <tr>
                <th>ID</th>
                <th>Usre_ID</th>
                <th>N_Modele</th>
                <th>Titre</th>
                <th>File</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        @foreach($dataCarte as $serv)
            @if($serv->status === 0)
                <tr>
                    <td>{{$serv->id}}</td>
                    <td>{{$serv->user_id}}</td>
                    <td>{{$serv->N_Modele}}</td>
                    <td>{{$serv->titre}}</td>
                    <td>
                         <div style="width:5cm;height:5cm ;">
                         <a href="./imagesService/{{$serv->file}}">
                           <img src="./imagesService/{{$serv->file}}" class="card-img-top" alt="...">
                         </a>
                        </div>
                    </td>
                    <td class="text-center">
                             <a href="{{route('convocation.editCarte',['id'=>$serv->id])}}">
                                <button type="button" class="btn btn-success d-inline">
                                    <i class="bi bi-check-circle"></i>
                                </button>
                            </a>
                            <form action="{{route('convocation.destroyCarte',['id'=>$serv->id])}}" method="post">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger d-inline">
                                    <i class="bi bi-trash-fill"></i>
                                </button>
                            </form>
                        
                    </td>
                </tr>
                @endif
            @endforeach
      </table>
    </div>
</div>
@endsection