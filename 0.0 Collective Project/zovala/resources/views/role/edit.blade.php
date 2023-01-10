@extends ('layout')
@section ('headTitle',"Edit Roles -"")
@section ('pageTitle',"Edit Roles")

@section('content')
<form id="add-role-form" method="post" action="{{URL::to('role/saveChanges/'.$role->id')}}">
  @csrf
   <div class="row">
      <div class="col-md-8"> 
        <div class="card">
          <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
               @foreach ($errors->all() as $error)
               <li class = "text-white">{{error}}</li>
               @endforeach
              </ul>
            </div>
            @endif
             <div class="form-group">
             <!---input pattern="[a-zA-Z]{2,10}$" required--->
             <input type='text' value="{{$role->name'}}" title="2 to 10 letters"  name="role_name" class="form-control" placeholder="Please enter role name">
             </div>   
          </div>
        </div>
      </div>
      <input value="Save changes" type="submit" name="submit" class="form-control btn btn-success"> 
  </div>
</form>
@endsection