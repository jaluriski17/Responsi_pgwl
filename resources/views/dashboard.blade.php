<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
    </div>

    <div class="container">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                <div class="alert alert-primary" role="alert">
                    <h4><i class="fa-solid fa-location-pin"></i> Total Points</h4>
                    <p style="font-size:  28pt">{{$Total_points}}</p>
                </div>
                </div>
                <div class="col">
                <div class="alert alert-warning" role="alert">
                    <h4><i class="fa-solid fa-draw-polygon"></i> Total Polygons</h4>
                    <p style="font-size:  28pt">{{$Total_polylines}}</p>
                </div>
                </div>
                <div class="col">
                <div class="alert alert-info" role="alert">
                    <h4><i class="fa-solid fa-lines-leaning"></i> Total Polylines</h4>
                    <p style="font-size:  28pt">{{$Total_polygons}}</p>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</x-app-layout>
