@extends('master.layout')

@section('title')
    Edit_Car
@endsection


@section('content')
<div class="row">
        <div class="col-md-12">
            <div class="">
                <h1 class="text-center text-warning">EDIT CAR</h1>
            </div>
            <div class="card w-75" style="margin:0px auto ;">
                <div class="card-header bg-warning">
                    <h3 class="text-center text-light">Car</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('now_update',$up->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3 c1">
              <label  class="form-label">Matricule</label>
              <input type="text" class="form-control" placeholder="Matricule" value="{{ $up->matricule }}" name="matricule">
            </div>
        
            <div class="mb-3 c1">
              <label  class="form-label">Gear-box</label>

              <select class="form-select" name="gear">

                <option value="manual">Manual</option>
                <option value="automatic">Automatic</option>

              </select>
            </div>
        
            <div class="mb-3 c1">
              <label  class="form-label">Mark</label>
              <select class="form-select" name="mark">
                @foreach ($mark as $i)
                    @if ($up->id_marque == $i->id_marque)
                        <option value="{{ $i->id }}" selected>{{ $i->mark_name }}</option>
                    @endif
                    <option value="{{ $i->id }}">{{ $i->mark_name }}</option>
                @endforeach
              </select>
            </div>
        
            <div class="mb-3 c1">
              <label  class="form-label">Model</label>
              <select class="form-select" name="model">
                @foreach ($model as $j)
                @if ($up->id_model == $j->id_model)
                    <option value="{{ $j->id }}" selected>{{ $j->model_name }}</option>
                @endif
                <option value="{{ $j->id }}">{{ $j->model_name }}</option>
            @endforeach
              </select>
            </div>
            
            <div class="mb-3 c1">
              <label  class="form-label">Fuel</label>
              <select class="form-select" name="fuel">
                @foreach ($fuel as $k)
                    @if ($up->id_carburant == $k->id_carburant)
                    <option value="{{ $k->id }}" selected>{{ $k->fuel_type }}</option>
                    @endif
                    <option value="{{ $k->id }}">{{ $k->fuel_type }}</option>
                @endforeach
              </select>
            </div>

            <div class="mb-3 c1">
                <label  class="form-label">Color</label>
                <input type="text" class="form-control" placeholder="color" value="{{ $up->color }}" name="color">
            </div>

            <div class="mb-3 c1">
                <label  class="form-label">Speed</label>
                <input type="text" class="form-control" placeholder="speed" value="{{ $up->puissance }}" name="speed">
            </div>

            <div class="mb-3 c1">
              <label  class="form-label">Kilometrage</label>
              <select class="form-select" name="kilometrage">
                    <option value="limited">Limited</option>
                    <option value="unlimited">Unlimited</option>
              </select>
          </div>

          <div class="mb-3 c1">
            <label  class="form-label">Type</label>
            <select class="form-select" name="type">
                  <option value="Economy">Economy Car</option>
                  <option value="Compact">Compact Car</option>
                  <option value="SUVs">SUVs Car</option>
                  <option value="Minivan">Minivans Car</option>
                  <option value="Sport">Sport Car</option>
                  <option value="Van">Van Car</option>
                  <option value="Covertible">Covertible Car</option>
            </select>
        </div>

          <div class="mb-3 c1">
              <label  class="form-label">Number of persons</label>
              <input type="number" class="form-control" placeholder="Number of persons" min="0" name="nbr_person">
          </div>

            <div class="mb-3 c1">
                <label  class="form-label">Price per day</label>
                <input type="text" class="form-control" placeholder="price" value="{{ $up->price }}" name="price">
            </div>

            <div class="mb-3 c1">
                  <label  class="form-label">Status</label>
    
                  <select class="form-select" name="status">
    
                    <option value="available">Available</option>
                    <option value="reserved">Reserved</option>
    
                  </select>
              </div>

            <div class="mb-3 c1">
                <label  class="form-label">Image/Logo</label>
                <input type="file" class="form-control" placeholder="image" name="image">
            </div>
            
            <button type="submit" class="btn btn-warning" style="display: block">Modify</button>
            </form>
                </div>
            </div>
        </div>
</div>
@endsection


@section('style')
   <style>
        .sec{
            display: inline-block;
        }
       .option-head a{
           margin: 1px 6px;
       }
       
       .mb-3.c1,.mb-3.c2{
        display: inline-block;
        width: 48%;
       }
       .bt{
        margin: 0px -10px;
       }

       th ,td{
        text-align: center;
        margin: 0px -10px;
       }
   </style>
@endsection
