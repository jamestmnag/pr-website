@extends('/layouts.app')

@section('content')
<div class="form_update">
    <p class="container mt-4 fs-1 text-center text-weight-bold">
        
    Cars</p>
</div>
<hr class="text-weight-bold">

<div class="container pd-auto">
   @foreach ($car as $car )
   
   
   
   <p class="m-auto text-uppercase fs-6">
        founded : {{ $car-> founded }}
    </p>
    <h2 class="fs-2">{{ $car-> name }}</h2>
    <p>
    {{ $car-> description }}    </p>
    <hr class="pd-1 m-1">
       
   @endforeach
</div>



    
@endsection