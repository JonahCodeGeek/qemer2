@extends('layouts.app')

@section('content')
 

<div class="container">
    <div class="row  p-4 gap-5 justify-content-between ">
        <div onclick="showCaruselOption()" class="btn col-md-3 mybtn shadow text-center fs-1  rounded-circle" style="width:20rem;height:20rem;">
        Mangge carusel slider
        </div>
        <div onclick="showAboutUsOption()" class=" card col-md-3 mybtn shadow text-center fs-1  rounded-circle" style="width:20rem;height:20rem;">
            Mangge About Us
        </div>
        <div onclick="showTeamOption()" class=" card col-md-3 mybtn shadow text-center fs-1  rounded-circle" style="width:20rem;height:20rem;">
            Mangge Team_items
        </div>
        <div onclick="showServicesOption()" class=" card col-md-3 mybtn shadow text-center fs-1  rounded-circle" style="width:20rem;height:20rem;">
            Mangge Service_items
        </div>
        <div onclick="showContactOption()" class=" card col-md-3 mybtn shadow text-center fs-1  rounded-circle" style="width:20rem;height:20rem;">
            Mangge Contact_items   
        </div>
        <div onclick="showFooterOption()" class=" card col-md-3 mybtn shadow text-center fs-1  rounded-circle" style="width:20rem;height:20rem;  display: inline-block;text-align: center;">
       Caarusel
        </div>
    </div>
</div>

@extends('template.navbar')


@endsection
<script>
    function showCaruselOption(){
        window.location.href = '/carousel_items';
    }
</script>

<script>
    function showAboutUsOption{
        window.location.href = '/AboutUs_items';
    }
</script>

<script>
    function showServicesOption(){
        window.location.href = '/services';
    }
</script>

<script>
    function showContactOption(){
        window.location.href = '/contacts';
    }
</script>


<script>
    function showTeamOption(){
        window.location.href = '/Team_items';
    }
</script>



