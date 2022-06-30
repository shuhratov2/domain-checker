<div class="container" style="width:500px; padding-top:300px">
    
    @if (Session::has('success'))
  <div class="alert alert-success" role="alert">{{ Session::get('success') }} </div>
    @endif
    @if (Session::has('danger'))
    <div class="alert alert-danger" role="alert">{{ Session::get('danger') }} </div>
    @endif
    @if (Session::has('bad'))
    <div class="alert alert-warning" role="alert">{{ Session::get('bad') }} </div>
    @endif
   
        <form>
            <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https:</span>
            <input type="text" class="form-control" wire:model="search" id="basic-url" aria-describedby="basic-addon3" placeholder="Search available domains...">
            </div>
        </form>
       
       
    </div>