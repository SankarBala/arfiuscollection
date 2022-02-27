@extends('layouts.app')
@section('pagename', 'Categories')
@section('breadcrumb')
    <li class="active">Categories</li>
@endsection
@section('content')
    <div id="content">
        <section class="section bg-white shadow-md rounded">
            <div class="container">
                <h2 class="text-9 font-weight-500 text-center">Start your travel planning here</h2>
                <p class="lead text-center mb-5">Search Hotels, Flights, Trains & Bus</p>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="accordion accordion-alternate popularRoutes mx-lg-2" id="popularRoutes">
                            <div class="card">
                                <div class="card-header" id="one">
                                    <h5 class="collapsed mb-0" data-toggle="collapse" data-target="#collapseOne"
                                        aria-expanded="false" aria-controls="collapseOne"> New Delhi <span
                                            class="nav"><a href="#">HOTELS</a><a href="#">FLIGHTS</a><a
                                                href="#">TRAINS</a><a href="#">BUS</a></span> </h5>
                                </div>
                                <div id="collapseOne" class="collapse" aria-labelledby="one"
                                    data-parent="#popularRoutes">
                                    <div class="card-body">
                                        <ul class="routes-list">
                                            <li><i class="fas fa-bed"></i></li>
                                            <li><a href="#">The Orchid Hotel <span class="ml-auto">$
                                                        210+</span></a></li>
                                            <li><a href="#">Whistling Meadows Resort <span class="ml-auto">$
                                                        675+</span></a></li>
                                            <li><a href="#">Radisson Blu Hotel <span class="ml-auto">$
                                                        280+</span></a></li>
                                            <li><a href="#">The Lotus Hotel <span class="ml-auto">$
                                                        412+</span></a></li>
                                        </ul>
                                        <ul class="routes-list">
                                            <li><i class="fas fa-plane"></i></li>
                                            <li><a href="#">Jaipur - New Delhi <span class="ml-auto">$
                                                        1,015+</span></a></li>
                                            <li><a href="#">Varanasi - New Delhi <span class="ml-auto">$
                                                        3,152+</span></a></li>
                                            <li><a href="#">Amritsar - New Delhi <span class="ml-auto">$
                                                        4,137+</span></a></li>
                                            <li><a href="#">Ahmedabad - New Delhi <span class="ml-auto">$
                                                        925+</span></a></li>
                                        </ul>
                                        <ul class="routes-list">
                                            <li><i class="fas fa-train"></i></li>
                                            <li><a href="#">Surat - New Delhi <span class="ml-auto">$
                                                        1,209+</span></a></li>
                                            <li><a href="#">Kolkata - New Delhi <span class="ml-auto">$
                                                        1,999+</span></a></li>
                                        </ul>
                                        <ul class="routes-list">
                                            <li><i class="fas fa-bus"></i></li>
                                            <li><a href="#">Bhopal To Indore <span class="ml-auto">$
                                                        1,209+</span></a></li>
                                            <li><a href="#">Bangalore to Chennai <span class="ml-auto">$
                                                        1,999+</span></a></li>
                                            <li><a href="#">Srinagar - New Delhi <span class="ml-auto">$
                                                        2,100+</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="two">
                                    <h5 class="collapsed mb-0" data-toggle="collapse" data-target="#collapseTwo"
                                        aria-expanded="false" aria-controls="collapseTwo"> Bengaluru <span
                                            class="nav"><a href="#">HOTELS</a><a href="#">FLIGHTS</a><a
                                                href="#">TRAINS</a><a href="#">BUS</a></span> </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="two"
                                    data-parent="#popularRoutes">
                                    <div class="card-body">
                                        <ul class="routes-list">
                                            <li><i class="fas fa-bed"></i></li>
                                            <li><a href="#">The Orchid Hotel <span class="ml-auto">$
                                                        210+</span></a></li>
                                            <li><a href="#">Whistling Meadows Resort <span class="ml-auto">$
                                                        675+</span></a></li>
                                            <li><a href="#">Radisson Blu Hotel <span class="ml-auto">$
                                                        280+</span></a></li>
                                            <li><a href="#">The Lotus Hotel <span class="ml-auto">$
                                                        412+</span></a></li>
                                        </ul>
                                        <ul class="routes-list">
                                            <li><i class="fas fa-plane"></i></li>
                                            <li><a href="#">Jaipur - Bengaluru <span class="ml-auto">$
                                                        1,015+</span></a></li>
                                            <li><a href="#">Varanasi - Bengaluru <span class="ml-auto">$
                                                        3,152+</span></a></li>
                                            <li><a href="#">Amritsar - Bengaluru <span class="ml-auto">$
                                                        4,137+</span></a></li>
                                            <li><a href="#">Ahmedabad - Bengaluru <span class="ml-auto">$
                                                        925+</span></a></li>
                                        </ul>
                                        <ul class="routes-list">
                                            <li><i class="fas fa-train"></i></li>
                                            <li><a href="#">Surat - Bengaluru <span class="ml-auto">$
                                                        1,209+</span></a></li>
                                            <li><a href="#">Kolkata - Bengaluru <span class="ml-auto">$
                                                        1,999+</span></a></li>
                                        </ul>
                                        <ul class="routes-list">
                                            <li><i class="fas fa-bus"></i></li>
                                            <li><a href="#">Surat - Bengaluru <span class="ml-auto">$
                                                        1,209+</span></a></li>
                                            <li><a href="#">Kolkata - Bengaluru <span class="ml-auto">$
                                                        1,999+</span></a></li>
                                            <li><a href="#">Srinagar - Bengaluru <span class="ml-auto">$
                                                        2,100+</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="three">
                                    <h5 class="collapsed mb-0" data-toggle="collapse" data-target="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree"> Chennai <span
                                            class="nav"><a href="#">HOTELS</a><a href="#">FLIGHTS</a><a
                                                href="#">TRAINS</a><a href="#">BUS</a></span> </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="three"
                                    data-parent="#popularRoutes">
                                    <div class="card-body">
                                        <ul class="routes-list">
                                            <li><i class="fas fa-bed"></i></li>
                                            <li><a href="#">The Orchid Hotel <span class="ml-auto">$
                                                        210+</span></a></li>
                                            <li><a href="#">Whistling Meadows Resort <span class="ml-auto">$
                                                        675+</span></a></li>
                                            <li><a href="#">Radisson Blu Hotel <span class="ml-auto">$
                                                        280+</span></a></li>
                                            <li><a href="#">The Lotus Hotel <span class="ml-auto">$
                                                        412+</span></a></li>
                                        </ul>
                                        <ul class="routes-list">
                                            <li><i class="fas fa-plane"></i></li>
                                            <li><a href="#">Jaipur - Chennai <span class="ml-auto">$
                                                        1,015+</span></a></li>
                                            <li><a href="#">Varanasi - Chennai <span class="ml-auto">$
                                                        3,152+</span></a></li>
                                            <li><a href="#">Amritsar - Chennai <span class="ml-auto">$
                                                        4,137+</span></a></li>
                                            <li><a href="#">Ahmedabad - Chennai <span class="ml-auto">$
                                                        925+</span></a></li>
                                        </ul>
                                        <ul class="routes-list">
                                            <li><i class="fas fa-train"></i></li>
                                            <li><a href="#">Surat - Chennai <span class="ml-auto">$
                                                        1,209+</span></a></li>
                                            <li><a href="#">Kolkata - Chennai <span class="ml-auto">$
                                                        1,999+</span></a></li>
                                        </ul>
                                        <ul class="routes-list">
                                            <li><i class="fas fa-bus"></i></li>
                                            <li><a href="#">Surat - Chennai <span class="ml-auto">$
                                                        1,209+</span></a></li>
                                            <li><a href="#">Kolkata - Chennai <span class="ml-auto">$
                                                        1,999+</span></a></li>
                                            <li><a href="#">Srinagar - Chennai <span class="ml-auto">$
                                                        2,100+</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="four">
                                    <h5 class="collapsed mb-0" data-toggle="collapse" data-target="#collapseFour"
                                        aria-expanded="false" aria-controls="collapseFour"> Mumbai <span
                                            class="nav"><a href="#">HOTELS</a><a href="#">FLIGHTS</a><a
                                                href="#">TRAINS</a><a href="#">BUS</a></span> </h5>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="four"
                                    data-parent="#popularRoutes">
                                    <div class="card-body">
                                        <ul class="routes-list">
                                            <li><i class="fas fa-bed"></i></li>
                                            <li><a href="#">The Orchid Hotel <span class="ml-auto">$
                                                        210+</span></a></li>
                                            <li><a href="#">Whistling Meadows Resort <span class="ml-auto">$
                                                        675+</span></a></li>
                                            <li><a href="#">Radisson Blu Hotel <span class="ml-auto">$
                                                        280+</span></a></li>
                                            <li><a href="#">The Lotus Hotel <span class="ml-auto">$
                                                        412+</span></a></li>
                                        </ul>
                                        <ul class="routes-list">
                                            <li><i class="fas fa-plane"></i></li>
                                            <li><a href="#">Jaipur - Mumbai <span class="ml-auto">$
                                                        1,015+</span></a></li>
                                            <li><a href="#">Varanasi - Mumbai <span class="ml-auto">$
                                                        3,152+</span></a></li>
                                            <li><a href="#">Amritsar - Mumbai <span class="ml-auto">$
                                                        4,137+</span></a></li>
                                            <li><a href="#">Ahmedabad - Mumbai <span class="ml-auto">$
                                                        925+</span></a></li>
                                        </ul>
                                        <ul class="routes-list">
                                            <li><i class="fas fa-train"></i></li>
                                            <li><a href="#">Surat - Mumbai <span class="ml-auto">$
                                                        1,209+</span></a></li>
                                            <li><a href="#">Kolkata - Mumbai <span class="ml-auto">$
                                                        1,999+</span></a></li>
                                        </ul>
                                        <ul class="routes-list">
                                            <li><i class="fas fa-bus"></i></li>
                                            <li><a href="#">Surat - Mumbai <span class="ml-auto">$
                                                        1,209+</span></a></li>
                                            <li><a href="#">Kolkata - Mumbai <span class="ml-auto">$
                                                        1,999+</span></a></li>
                                            <li><a href="#">Srinagar - Mumbai <span class="ml-auto">$
                                                        2,100+</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="five">
                                    <h5 class="collapsed mb-0" data-toggle="collapse" data-target="#collapseFive"
                                        aria-expanded="false" aria-controls="collapseFive"> Hyderabad <span
                                            class="nav"><a href="#">HOTELS</a><a href="#">FLIGHTS</a><a
                                                href="#">TRAINS</a><a href="#">BUS</a></span> </h5>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="five"
                                    data-parent="#popularRoutes">
                                    <div class="card-body">
                                        <ul class="routes-list">
                                            <li><i class="fas fa-bed"></i></li>
                                            <li><a href="#">The Orchid Hotel <span class="ml-auto">$
                                                        210+</span></a></li>
                                            <li><a href="#">Whistling Meadows Resort <span class="ml-auto">$
                                                        675+</span></a></li>
                                            <li><a href="#">Radisson Blu Hotel <span class="ml-auto">$
                                                        280+</span></a></li>
                                            <li><a href="#">The Lotus Hotel <span class="ml-auto">$
                                                        412+</span></a></li>
                                        </ul>
                                        <ul class="routes-list">
                                            <li><i class="fas fa-plane"></i></li>
                                            <li><a href="#">Jaipur - Hyderabad <span class="ml-auto">$
                                                        1,015+</span></a></li>
                                            <li><a href="#">Varanasi - Hyderabad <span class="ml-auto">$
                                                        3,152+</span></a></li>
                                            <li><a href="#">Amritsar - Hyderabad <span class="ml-auto">$
                                                        4,137+</span></a></li>
                                            <li><a href="#">Ahmedabad - Hyderabad <span class="ml-auto">$
                                                        925+</span></a></li>
                                        </ul>
                                        <ul class="routes-list">
                                            <li><i class="fas fa-train"></i></li>
                                            <li><a href="#">Surat - Hyderabad <span class="ml-auto">$
                                                        1,209+</span></a></li>
                                            <li><a href="#">Kolkata - Hyderabad <span class="ml-auto">$
                                                        1,999+</span></a></li>
                                        </ul>
                                        <ul class="routes-list">
                                            <li><i class="fas fa-bus"></i></li>
                                            <li><a href="#">Surat - Hyderabad <span class="ml-auto">$
                                                        1,209+</span></a></li>
                                            <li><a href="#">Kolkata - Hyderabad <span class="ml-auto">$
                                                        1,999+</span></a></li>
                                            <li><a href="#">Srinagar - Hyderabad <span class="ml-auto">$
                                                        2,100+</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="accordion accordion-alternate popularRoutes mx-lg-2" id="popularRoutes2">
                            <div class="card">
                                <div class="card-header" id="six">
                                    <h5 class="collapsed mb-0" data-toggle="collapse" data-target="#collapseSix"
                                        aria-expanded="false" aria-controls="collapseSix"> Chicago <span
                                            class="nav"><a href="#">HOTELS</a><a href="#">FLIGHTS</a><a
                                                href="#">TRAINS</a><a href="#">BUS</a></span> </h5>
                                </div>
                                <div id="collapseSix" class="collapse" aria-labelledby="six"
                                    data-parent="#popularRoutes2">
                                    <div class="card-body">
                                        <ul class="routes-list">
                                            <li><i class="fas fa-bed"></i></li>
                                            <li><a href="#">The Orchid Hotel <span class="ml-auto">$
                                                        210+</span></a></li>
                                            <li><a href="#">Whistling Meadows Resort <span class="ml-auto">$
                                                        675+</span></a></li>
                                            <li><a href="#">Radisson Blu Hotel <span class="ml-auto">$
                                                        280+</span></a></li>
                                            <li><a href="#">The Lotus Hotel <span class="ml-auto">$
                                                        412+</span></a></li>
                                        </ul>
                                        <ul class="routes-list">
                                            <li><i class="fas fa-plane"></i></li>
                                            <li><a href="#">Jaipur - Chicago <span class="ml-auto">$
                                                        1,015+</span></a></li>
                                            <li><a href="#">Varanasi - Chicago <span class="ml-auto">$
                                                        3,152+</span></a></li>
                                            <li><a href="#">Amritsar - Chicago <span class="ml-auto">$
                                                        4,137+</span></a></li>
                                            <li><a href="#">Ahmedabad - Chicago <span class="ml-auto">$
                                                        925+</span></a></li>
                                        </ul>
                                        <ul class="routes-list">
                                            <li><i class="fas fa-train"></i></li>
                                            <li><a href="#">Surat - Chicago <span class="ml-auto">$
                                                        1,209+</span></a></li>
                                            <li><a href="#">Kolkata - Chicago <span class="ml-auto">$
                                                        1,999+</span></a></li>
                                        </ul>
                                        <ul class="routes-list">
                                            <li><i class="fas fa-bus"></i></li>
                                            <li><a href="#">Bhopal To Chicago <span class="ml-auto">$
                                                        1,209+</span></a></li>
                                            <li><a href="#">Bangalore to Chicago <span class="ml-auto">$
                                                        1,999+</span></a></li>
                                            <li><a href="#">Srinagar - Chicago <span class="ml-auto">$
                                                        2,100+</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="seven">
                                    <h5 class="collapsed mb-0" data-toggle="collapse" data-target="#collapseSeven"
                                        aria-expanded="false" aria-controls="collapseTwo"> New York <span
                                            class="nav"><a href="#">HOTELS</a><a href="#">FLIGHTS</a><a
                                                href="#">TRAINS</a><a href="#">BUS</a></span> </h5>
                                </div>
                                <div id="collapseSeven" class="collapse" aria-labelledby="seven"
                                    data-parent="#popularRoutes2">
                                    <div class="card-body">
                                        <ul class="routes-list">
                                            <li><i class="fas fa-bed"></i></li>
                                            <li><a href="#">The Orchid Hotel <span class="ml-auto">$
                                                        210+</span></a></li>
                                            <li><a href="#">Whistling Meadows Resort <span class="ml-auto">$
                                                        675+</span></a></li>
                                            <li><a href="#">Radisson Blu Hotel <span class="ml-auto">$
                                                        280+</span></a></li>
                                            <li><a href="#">The Lotus Hotel <span class="ml-auto">$
                                                        412+</span></a></li>
                                        </ul>
                                        <ul class="routes-list">
                                            <li><i class="fas fa-plane"></i></li>
                                            <li><a href="#">Jaipur - New York <span class="ml-auto">$
                                                        1,015+</span></a></li>
                                            <li><a href="#">Varanasi - New York <span class="ml-auto">$
                                                        3,152+</span></a></li>
                                            <li><a href="#">Amritsar - New York <span class="ml-auto">$
                                                        4,137+</span></a></li>
                                            <li><a href="#">Ahmedabad - New York <span class="ml-auto">$
                                                        925+</span></a></li>
                                        </ul>
                                        <ul class="routes-list">
                                            <li><i class="fas fa-train"></i></li>
                                            <li><a href="#">Surat - New York <span class="ml-auto">$
                                                        1,209+</span></a></li>
                                            <li><a href="#">Kolkata - New York <span class="ml-auto">$
                                                        1,999+</span></a></li>
                                        </ul>
                                        <ul class="routes-list">
                                            <li><i class="fas fa-bus"></i></li>
                                            <li><a href="#">Surat - New York <span class="ml-auto">$
                                                        1,209+</span></a></li>
                                            <li><a href="#">Kolkata - New York <span class="ml-auto">$
                                                        1,999+</span></a></li>
                                            <li><a href="#">Srinagar - New York <span class="ml-auto">$
                                                        2,100+</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="eight">
                                    <h5 class="collapsed mb-0" data-toggle="collapse" data-target="#collapseEight"
                                        aria-expanded="false" aria-controls="collapseEight"> London <span
                                            class="nav"><a href="#">HOTELS</a><a href="#">FLIGHTS</a><a
                                                href="#">TRAINS</a><a href="#">BUS</a></span> </h5>
                                </div>
                                <div id="collapseEight" class="collapse" aria-labelledby="eight"
                                    data-parent="#popularRoutes2">
                                    <div class="card-body">
                                        <ul class="routes-list">
                                            <li><i class="fas fa-bed"></i></li>
                                            <li><a href="#">The Orchid Hotel <span class="ml-auto">$
                                                        210+</span></a></li>
                                            <li><a href="#">Whistling Meadows Resort <span class="ml-auto">$
                                                        675+</span></a></li>
                                            <li><a href="#">Radisson Blu Hotel <span class="ml-auto">$
                                                        280+</span></a></li>
                                            <li><a href="#">The Lotus Hotel <span class="ml-auto">$
                                                        412+</span></a></li>
                                        </ul>
                                        <ul class="routes-list">
                                            <li><i class="fas fa-plane"></i></li>
                                            <li><a href="#">Jaipur - London <span class="ml-auto">$
                                                        1,015+</span></a></li>
                                            <li><a href="#">Varanasi - London <span class="ml-auto">$
                                                        3,152+</span></a></li>
                                            <li><a href="#">Amritsar - London <span class="ml-auto">$
                                                        4,137+</span></a></li>
                                            <li><a href="#">Ahmedabad - London <span class="ml-auto">$
                                                        925+</span></a></li>
                                        </ul>
                                        <ul class="routes-list">
                                            <li><i class="fas fa-train"></i></li>
                                            <li><a href="#">Surat - London <span class="ml-auto">$
                                                        1,209+</span></a></li>
                                            <li><a href="#">Kolkata - London <span class="ml-auto">$
                                                        1,999+</span></a></li>
                                        </ul>
                                        <ul class="routes-list">
                                            <li><i class="fas fa-bus"></i></li>
                                            <li><a href="#">Surat - London <span class="ml-auto">$
                                                        1,209+</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="nine">
                                    <h5 class="collapsed mb-0" data-toggle="collapse" data-target="#collapseNine"
                                        aria-expanded="false" aria-controls="collapseNine"> Panaji <span
                                            class="nav"><a href="#">HOTELS</a><a href="#">FLIGHTS</a><a
                                                href="#">TRAINS</a><a href="#">BUS</a></span> </h5>
                                </div>
                                <div id="collapseNine" class="collapse" aria-labelledby="nine"
                                    data-parent="#popularRoutes2">
                                    <div class="card-body">
                                        <ul class="routes-list">
                                            <li><i class="fas fa-bed"></i></li>
                                            <li><a href="#">The Orchid Hotel <span class="ml-auto">$
                                                        210+</span></a></li>
                                            <li><a href="#">Whistling Meadows Resort <span class="ml-auto">$
                                                        675+</span></a></li>
                                            <li><a href="#">Radisson Blu Hotel <span class="ml-auto">$
                                                        280+</span></a></li>
                                            <li><a href="#">The Lotus Hotel <span class="ml-auto">$
                                                        412+</span></a></li>
                                        </ul>
                                        <ul class="routes-list">
                                            <li><i class="fas fa-plane"></i></li>
                                            <li><a href="#">Jaipur - Panaji <span class="ml-auto">$
                                                        1,015+</span></a></li>
                                            <li><a href="#">Varanasi - Panaji <span class="ml-auto">$
                                                        3,152+</span></a></li>
                                            <li><a href="#">Amritsar - Panaji <span class="ml-auto">$
                                                        4,137+</span></a></li>
                                            <li><a href="#">Ahmedabad - Panaji <span class="ml-auto">$
                                                        925+</span></a></li>
                                        </ul>
                                        <ul class="routes-list">
                                            <li><i class="fas fa-train"></i></li>
                                            <li><a href="#">Surat - Panaji <span class="ml-auto">$
                                                        1,209+</span></a></li>
                                            <li><a href="#">Kolkata - Panaji <span class="ml-auto">$
                                                        1,999+</span></a></li>
                                        </ul>
                                        <ul class="routes-list">
                                            <li><i class="fas fa-bus"></i></li>
                                            <li><a href="#">Surat - Panaji <span class="ml-auto">$
                                                        1,209+</span></a></li>
                                            <li><a href="#">Kolkata - Panaji <span class="ml-auto">$
                                                        1,999+</span></a></li>
                                            <li><a href="#">Srinagar - Panaji <span class="ml-auto">$
                                                        2,100+</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="ten">
                                    <h5 class="collapsed mb-0" data-toggle="collapse" data-target="#collapseTen"
                                        aria-expanded="false" aria-controls="collapseTen"> Ahmedabad <span
                                            class="nav"><a href="#">HOTELS</a><a href="#">FLIGHTS</a><a
                                                href="#">TRAINS</a><a href="#">BUS</a></span> </h5>
                                </div>
                                <div id="collapseTen" class="collapse" aria-labelledby="ten"
                                    data-parent="#popularRoutes2">
                                    <div class="card-body">
                                        <ul class="routes-list">
                                            <li><i class="fas fa-bed"></i></li>
                                            <li><a href="#">The Orchid Hotel <span class="ml-auto">$
                                                        210+</span></a></li>
                                            <li><a href="#">Whistling Meadows Resort <span class="ml-auto">$
                                                        675+</span></a></li>
                                            <li><a href="#">Radisson Blu Hotel <span class="ml-auto">$
                                                        280+</span></a></li>
                                            <li><a href="#">The Lotus Hotel <span class="ml-auto">$
                                                        412+</span></a></li>
                                        </ul>
                                        <ul class="routes-list">
                                            <li><i class="fas fa-plane"></i></li>
                                            <li><a href="#">Jaipur - Ahmedabad <span class="ml-auto">$
                                                        1,015+</span></a></li>
                                            <li><a href="#">Varanasi - Ahmedabad <span class="ml-auto">$
                                                        3,152+</span></a></li>
                                            <li><a href="#">Amritsar - Ahmedabad <span class="ml-auto">$
                                                        4,137+</span></a></li>
                                            <li><a href="#">Ahmedabad - Ahmedabad <span class="ml-auto">$
                                                        925+</span></a></li>
                                        </ul>
                                        <ul class="routes-list">
                                            <li><i class="fas fa-train"></i></li>
                                            <li><a href="#">Surat - Ahmedabad <span class="ml-auto">$
                                                        1,209+</span></a></li>
                                            <li><a href="#">Kolkata - Ahmedabad <span class="ml-auto">$
                                                        1,999+</span></a></li>
                                        </ul>
                                        <ul class="routes-list">
                                            <li><i class="fas fa-bus"></i></li>
                                            <li><a href="#">Surat - Ahmedabad <span class="ml-auto">$
                                                        1,209+</span></a></li>
                                            <li><a href="#">Kolkata - Ahmedabad <span class="ml-auto">$
                                                        1,999+</span></a></li>
                                            <li><a href="#">Srinagar - Ahmedabad <span class="ml-auto">$
                                                        2,100+</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="accordion accordion-alternate popularRoutes mx-lg-2" id="popularRoutes3">
                            <div class="card">
                                <div class="card-header" id="eleven">
                                    <h5 class="collapsed mb-0" data-toggle="collapse" data-target="#collapseEleven"
                                        aria-expanded="false" aria-controls="collapseEleven"> Bangkok <span
                                            class="nav"><a href="#">HOTELS</a><a href="#">FLIGHTS</a><a
                                                href="#">TRAINS</a><a href="#">BUS</a></span> </h5>
                                </div>
                                <div id="collapseEleven" class="collapse" aria-labelledby="eleven"
                                    data-parent="#popularRoutes3">
                                    <div class="card-body">
                                        <ul class="routes-list">
                                            <li><i class="fas fa-bed"></i></li>
                                            <li><a href="#">The Orchid Hotel <span class="ml-auto">$
                                                        210+</span></a></li>
                                            <li><a href="#">Whistling Meadows Resort <span class="ml-auto">$
                                                        675+</span></a></li>
                                            <li><a href="#">Radisson Blu Hotel <span class="ml-auto">$
                                                        280+</span></a></li>
                                            <li><a href="#">The Lotus Hotel <span class="ml-auto">$
                                                        412+</span></a></li>
                                        </ul>
                                        <ul class="routes-list">
                                            <li><i class="fas fa-plane"></i></li>
                                            <li><a href="#">Jaipur - Bangkok <span class="ml-auto">$
                                                        1,015+</span></a></li>
                                            <li><a href="#">Varanasi - Bangkok <span class="ml-auto">$
                                                        3,152+</span></a></li>
                                            <li><a href="#">Amritsar - Bangkok <span class="ml-auto">$
                                                        4,137+</span></a></li>
                                            <li><a href="#">Ahmedabad - Bangkok <span class="ml-auto">$
                                                        925+</span></a></li>
                                        </ul>
                                        <ul class="routes-list">
                                            <li><i class="fas fa-train"></i></li>
                                            <li><a href="#">Surat - Bangkok <span class="ml-auto">$
                                                        1,209+</span></a></li>
                                            <li><a href="#">Kolkata - Bangkok <span class="ml-auto">$
                                                        1,999+</span></a></li>
                                        </ul>
                                        <ul class="routes-list">
                                            <li><i class="fas fa-bus"></i></li>
                                            <li><a href="#">Surat - Bangkok <span class="ml-auto">$
                                                        1,209+</span></a></li>
                                            <li><a href="#">Kolkata - Bangkok <span class="ml-auto">$
                                                        1,999+</span></a></li>
                                            <li><a href="#">Srinagar - Bangkok <span class="ml-auto">$
                                                        2,100+</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="twelve">
                                    <h5 class="collapsed mb-0" data-toggle="collapse" data-target="#collapseTwelve"
                                        aria-expanded="false" aria-controls="collapseTwelve"> Singapore <span
                                            class="nav"><a href="#">HOTELS</a><a href="#">FLIGHTS</a><a
                                                href="#">TRAINS</a><a href="#">BUS</a></span> </h5>
                                </div>
                                <div id="collapseTwelve" class="collapse" aria-labelledby="twelve"
                                    data-parent="#popularRoutes3">
                                    <div class="card-body">
                                        <ul class="routes-list">
                                            <li><i class="fas fa-bed"></i></li>
                                            <li><a href="#">The Orchid Hotel <span class="ml-auto">$
                                                        210+</span></a></li>
                                            <li><a href="#">Whistling Meadows Resort <span class="ml-auto">$
                                                        675+</span></a></li>
                                            <li><a href="#">Radisson Blu Hotel <span class="ml-auto">$
                                                        280+</span></a></li>
                                            <li><a href="#">The Lotus Hotel <span class="ml-auto">$
                                                        412+</span></a></li>
                                        </ul>
                                        <ul class="routes-list">
                                            <li><i class="fas fa-plane"></i></li>
                                            <li><a href="#">Jaipur - Singapore <span class="ml-auto">$
                                                        1,015+</span></a></li>
                                            <li><a href="#">Varanasi - Singapore <span class="ml-auto">$
                                                        3,152+</span></a></li>
                                            <li><a href="#">Amritsar - Singapore <span class="ml-auto">$
                                                        4,137+</span></a></li>
                                            <li><a href="#">Ahmedabad - Singapore <span class="ml-auto">$
                                                        925+</span></a></li>
                                        </ul>
                                        <ul class="routes-list">
                                            <li><i class="fas fa-train"></i></li>
                                            <li><a href="#">Surat - Singapore <span class="ml-auto">$
                                                        1,209+</span></a></li>
                                            <li><a href="#">Kolkata - Singapore <span class="ml-auto">$
                                                        1,999+</span></a></li>
                                        </ul>
                                        <ul class="routes-list">
                                            <li><i class="fas fa-bus"></i></li>
                                            <li><a href="#">Bhopal To Singapore <span class="ml-auto">$
                                                        1,209+</span></a></li>
                                            <li><a href="#">Bangalore to Singapore <span class="ml-auto">$
                                                        1,999+</span></a></li>
                                            <li><a href="#">Srinagar - Singapore <span class="ml-auto">$
                                                        2,100+</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="thirteen">
                                    <h5 class="collapsed mb-0" data-toggle="collapse" data-target="#collapseThirteen"
                                        aria-expanded="false" aria-controls="collapseThirteen"> Los Angeles <span
                                            class="nav"><a href="#">HOTELS</a><a href="#">FLIGHTS</a><a
                                                href="#">TRAINS</a><a href="#">BUS</a></span> </h5>
                                </div>
                                <div id="collapseThirteen" class="collapse" aria-labelledby="thirteen"
                                    data-parent="#popularRoutes3">
                                    <div class="card-body">
                                        <ul class="routes-list">
                                            <li><i class="fas fa-bed"></i></li>
                                            <li><a href="#">The Orchid Hotel <span class="ml-auto">$
                                                        210+</span></a></li>
                                            <li><a href="#">Whistling Meadows Resort <span class="ml-auto">$
                                                        675+</span></a></li>
                                            <li><a href="#">Radisson Blu Hotel <span class="ml-auto">$
                                                        280+</span></a></li>
                                            <li><a href="#">The Lotus Hotel <span class="ml-auto">$
                                                        412+</span></a></li>
                                        </ul>
                                        <ul class="routes-list">
                                            <li><i class="fas fa-plane"></i></li>
                                            <li><a href="#">Jaipur - Los Angeles <span class="ml-auto">$
                                                        1,015+</span></a></li>
                                            <li><a href="#">Varanasi - Los Angeles <span class="ml-auto">$
                                                        3,152+</span></a></li>
                                            <li><a href="#">Amritsar - Los Angeles <span class="ml-auto">$
                                                        4,137+</span></a></li>
                                            <li><a href="#">Ahmedabad - Los Angeles <span class="ml-auto">$
                                                        925+</span></a></li>
                                        </ul>
                                        <ul class="routes-list">
                                            <li><i class="fas fa-train"></i></li>
                                            <li><a href="#">Surat - Los Angeles <span class="ml-auto">$
                                                        1,209+</span></a></li>
                                            <li><a href="#">Kolkata - Los Angeles <span class="ml-auto">$
                                                        1,999+</span></a></li>
                                        </ul>
                                        <ul class="routes-list">
                                            <li><i class="fas fa-bus"></i></li>
                                            <li><a href="#">Surat - Los Angeles <span class="ml-auto">$
                                                        1,209+</span></a></li>
                                            <li><a href="#">Kolkata - Los Angeles <span class="ml-auto">$
                                                        1,999+</span></a></li>
                                            <li><a href="#">Srinagar - Los Angeles <span class="ml-auto">$
                                                        2,100+</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="fourteen">
                                    <h5 class="collapsed mb-0" data-toggle="collapse" data-target="#collapseFourteen"
                                        aria-expanded="false" aria-controls="collapseFourteen"> San Francisco <span
                                            class="nav"><a href="#">HOTELS</a><a href="#">FLIGHTS</a><a
                                                href="#">TRAINS</a><a href="#">BUS</a></span> </h5>
                                </div>
                                <div id="collapseFourteen" class="collapse" aria-labelledby="fourteen"
                                    data-parent="#popularRoutes3">
                                    <div class="card-body">
                                        <ul class="routes-list">
                                            <li><i class="fas fa-bed"></i></li>
                                            <li><a href="#">The Orchid Hotel <span class="ml-auto">$
                                                        210+</span></a></li>
                                            <li><a href="#">Whistling Meadows Resort <span class="ml-auto">$
                                                        675+</span></a></li>
                                            <li><a href="#">Radisson Blu Hotel <span class="ml-auto">$
                                                        280+</span></a></li>
                                            <li><a href="#">The Lotus Hotel <span class="ml-auto">$
                                                        412+</span></a></li>
                                        </ul>
                                        <ul class="routes-list">
                                            <li><i class="fas fa-plane"></i></li>
                                            <li><a href="#">Jaipur - San Francisco <span class="ml-auto">$
                                                        1,015+</span></a></li>
                                            <li><a href="#">Varanasi - San Francisco <span class="ml-auto">$
                                                        3,152+</span></a></li>
                                            <li><a href="#">Amritsar - San Francisco <span class="ml-auto">$
                                                        4,137+</span></a></li>
                                            <li><a href="#">Ahmedabad - San Francisco <span class="ml-auto">$
                                                        925+</span></a></li>
                                        </ul>
                                        <ul class="routes-list">
                                            <li><i class="fas fa-train"></i></li>
                                            <li><a href="#">Surat - San Francisco <span class="ml-auto">$
                                                        1,209+</span></a></li>
                                            <li><a href="#">Kolkata - San Francisco <span class="ml-auto">$
                                                        1,999+</span></a></li>
                                        </ul>
                                        <ul class="routes-list">
                                            <li><i class="fas fa-bus"></i></li>
                                            <li><a href="#">Surat - San Francisco <span class="ml-auto">$
                                                        1,209+</span></a></li>
                                            <li><a href="#">Kolkata - San Francisco <span class="ml-auto">$
                                                        1,999+</span></a></li>
                                            <li><a href="#">Srinagar - San Francisco <span class="ml-auto">$
                                                        2,100+</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="fifteen">
                                    <h5 class="collapsed mb-0" data-toggle="collapse" data-target="#collapseFifteen"
                                        aria-expanded="false" aria-controls="collapseFifteen">Hong Kong <span
                                            class="nav"><a href="#">HOTELS</a><a href="#">FLIGHTS</a><a
                                                href="#">TRAINS</a><a href="#">BUS</a></span> </h5>
                                </div>
                                <div id="collapseFifteen" class="collapse" aria-labelledby="fifteen"
                                    data-parent="#popularRoutes3">
                                    <div class="card-body">
                                        <ul class="routes-list">
                                            <li><i class="fas fa-bed"></i></li>
                                            <li><a href="#">The Orchid Hotel <span class="ml-auto">$
                                                        210+</span></a></li>
                                            <li><a href="#">Whistling Meadows Resort <span class="ml-auto">$
                                                        675+</span></a></li>
                                            <li><a href="#">Radisson Blu Hotel <span class="ml-auto">$
                                                        280+</span></a></li>
                                            <li><a href="#">The Lotus Hotel <span class="ml-auto">$
                                                        412+</span></a></li>
                                        </ul>
                                        <ul class="routes-list">
                                            <li><i class="fas fa-plane"></i></li>
                                            <li><a href="#">Jaipur - Hong Kong <span class="ml-auto">$
                                                        1,015+</span></a></li>
                                            <li><a href="#">Varanasi - Hong Kong <span class="ml-auto">$
                                                        3,152+</span></a></li>
                                            <li><a href="#">Amritsar - Hong Kong <span class="ml-auto">$
                                                        4,137+</span></a></li>
                                            <li><a href="#">Ahmedabad - Hong Kong <span class="ml-auto">$
                                                        925+</span></a></li>
                                        </ul>
                                        <ul class="routes-list">
                                            <li><i class="fas fa-train"></i></li>
                                            <li><a href="#">Surat - Hong Kong <span class="ml-auto">$
                                                        1,209+</span></a></li>
                                            <li><a href="#">Kolkata - Hong Kong <span class="ml-auto">$
                                                        1,999+</span></a></li>
                                        </ul>
                                        <ul class="routes-list">
                                            <li><i class="fas fa-bus"></i></li>
                                            <li><a href="#">Surat - Hong Kong <span class="ml-auto">$
                                                        1,209+</span></a></li>
                                            <li><a href="#">Kolkata - Hong Kong <span class="ml-auto">$
                                                        1,999+</span></a></li>
                                            <li><a href="#">Srinagar - Hong Kong <span class="ml-auto">$
                                                        2,100+</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-4">
                        <p class="text-center mb-0"><a href="#" class="btn btn-link">View All <i
                                    class="fas fa-arrow-right ml-1"></i></a></p>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
