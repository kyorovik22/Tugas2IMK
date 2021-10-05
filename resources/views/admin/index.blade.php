@extends('layouts/admin')

@section('content')
   halo 

   <style> 
    .row{padding50px;}

</style>



<div class="p-2"> <h3>Grid 1</h3> </div>
<div class="row justify-content-start text-center"> 
   <div class="col-1 bg-primary text-white p-1 rounded">kolom 1</div>
   <div class="col-1 bg-danger text-white p-1 rounded">kolom 2</div>
   <div class="col-1 bg-secondary text-white p-1 rounded">kolom 3</div>
   <div class="col-1 bg-info text-white p-1 rounded">kolom 4</div>
</div>

<div class="p-2"> <h3>Grid 2</h3> </div>
<div class="row justify-content-start text-center"> 
   <div class="col-8 col-8 col-8  p-1 rounded"></div>
   <div class="col-1 col-1 col-1 bg-secondary text-white p-1 rounded">kolom 1</div>
   <div class="col-1 col-1 col-1 bg-info text-white p-1 rounded">kolom 2</div>
   <div class="col-1 col-1 col-1 bg-danger text-white p-1 rounded">kolom 3</div>
   <div class="col-1 col-1 col-1 bg-info text-white p-1 rounded">kolom 4</div>
</div>

<div class="p-2"> <h3>Grid 3</h3> </div>
<div class="row justify-content-start text-center"> 
   <div class="col-4 col-4 col-4  p-1 rounded"></div>
   <div class="col-1 col-1 col-1 bg-primary text-white p-1 rounded">kolom 1</div>
   <div class="col-1 col-1 col-1 bg-danger text-white p-1 rounded">kolom 2</div>
   <div class="col-1 col-1 col-1 bg-secondary text-white p-1 rounded">kolom 3</div>
   <div class="col-1 col-1 col-1 bg-info text-white p-1 rounded">kolom 4</div>
   <div class="col-4 col-4 col-4  p-1 rounded"></div>
</div>

<div class="p-2"> <h3>Grid 4</h3> </div>
<div class="row justify-content-start text-center"> 
   <div class="col-1 col-1 col-1 bg-primary text-white p-1 rounded">kolom 1</div>
   <div class="col-2 col-2 col-2  p-1 rounded"></div>
   <div class="col-1 col-1 col-1 bg-danger text-white p-1 rounded">kolom 2</div>
   <div class="col-4 col-4 col-4  p-1 rounded"></div>
   <div class="col-1 col-1 col-1 bg-secondary text-white p-1 rounded">kolom 3</div>
   <div class="col-2 col-2 col-2  p-1 rounded"></div>
   <div class="col-1 col-1 col-1 bg-info text-white p-1 rounded">kolom 4</div>
</div>

<div class="p-2"> <h3>Grid 5</h3> </div>
<div class="row justify-content-start text-center"> 
   <div class="col-1 col-1 col-1  p-1 rounded"></div>
   <div class="col-1 col-1 col-1 bg-primary text-white p-1 rounded">kolom 1</div>
   <div class="col-2 col-2 col-2  p-1 rounded"></div>
   <div class="col-1 col-1 col-1 bg-danger text-white p-1 rounded">kolom 2</div>
   <div class="col-2 col-2 col-2  p-1 rounded"></div>
   <div class="col-1 col-1 col-1 bg-secondary text-white p-1 rounded">kolom 3</div>
   <div class="col-2 col-2 col-2  p-1 rounded"></div>
   <div class="col-1 col-1 col-1 bg-info text-white p-1 rounded">kolom 4</div>
   <div class="col-1 col-1 col-1  p-1 rounded"></div>
</div>

<div class="p-2"><h2>Grid 6</h2></div> 
<div class="row justify-content-around">
  <div class="p-1 col-1 bg-primary text-white rounded">Kolom 1</div> 
  <div class="p-1 col-2 bg-secondary text-white rounded">Kolom 2</div>
  <div class="p-1 col-3 bg-success text-white rounded">Kolom 3</div>
  <div class="p-1 col-4 bg-danger text-white rounded">Kolom 4</div> </div>

@endsection