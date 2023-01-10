@section ('headTitle','Counties - ')
@section ('pageTitle','Counties')
@section('content')
<div class="row">
        <div class="col-12">
          <!--add{display:flex;}-->
            <div class= "d-flex justify-content-end">
            <a class="btn btn btn-primary" href="{{URL::to('county/add')}}">
                <i class="fas fa-plus"></i>Add County
            </a>
            </div>      
          <div class="card mb-4">
                   
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">#</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                      <th class="align-middle text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Actions</th>
                      </tr>
                  </thead>
                  <tbody>
                    @forelse($counties as $county)
                    <tr>
                     <td><p class="text-xs px-3 font-weight-bold mb-0">{{$county->id}}</p></td>
                     <td><p class="text-xs px-3 mb-0">{{$county->name}}</p></td>
                     <td class="align-middle text-centre text-small"> 
                       <a href="{{URL::to('county/edit/' .$county->id}}}">
                       <i class="fa-solid fa-pen-to-square"></i>
                       </a>
                       <a onclick="return confirm('Are you sure?')">
                       <i class="fa-solid fa-trash"></i>
                       </a>
                     </td>
                     <</tr>
                    @empty
                    <tr>
                    <td colspan="3">No records found</td>
                    </tr>
                    @endforelse
                  </tbody> 
              </table>
              <div class="pagn-links">
                {{$counties->links()}}
              </div>
              </div>
            </div>  
          </div>
        </div> 
</div>
@endsection