@extends("layout.test")

@section('content')
   <div class= "container mx-auto px-4 pt-16">

       <!-- Popular Movie -->

       <div class="pupular-movie">
            <h2 class="capitalize text-white text-lg-semibold ">Popular Movies</h2>
                <div class="grid grid-cols-2 sm:grid-cols-4 md:grid-cols-5 lg:grid-cols-8 gap-3 ">

                @foreach($popularMovie as $movie)
                    @if($loop->index <16)
                        <div class="mt-8 relative">
                            <a href="#" >
                                <img src=" {{'https://image.tmdb.org/t/p/w500/'. $movie['poster_path'] }} " alt="" class="hover:opacity-50 transition ease-in-out duration-150 rounded">
                            </a>
                            <span class="ml-3 mt-3 border-2 from-blue-600 bg-gradient-to-r rounded-full w-8 h-8 absolute top-0 left-0 text-white font-semibold text-sm flex justify-center items-center cursor-pointer">
                                {{$movie['vote_average'] * 10 }} <small class="text-sm">%</small>
                            </span>
                            <div class="mt-2">
                                <a href="" class="text-md pt-4 text-white font-semibold hover:text-yellow-500"> {{$movie['title']}} </a>    
                                <div class="">
                                    <span class="flex item-center text-gray-500 text-sm "> {{\Carbon\Carbon::parse($movie['release_date'])->format('M,D,Y')}} </span>                       
                                </div>            
                            </div>          
                        </div>
                        @endif
                @endforeach     
                                 
       </div>

        <!-- Upcoming Movie -->

       <div class="pupular-movie pb-11">
            <h2 class="capitalize text-white text-lg-semibold ">Upcoming Movies</h2>
                <div class="grid grid-cols-2 sm:grid-cols-4 md:grid-cols-5 lg:grid-cols-8 gap-3 ">

                @foreach($upcomingMovie as $movie)
                    @if($loop->index <16)
                        <div class="mt-8 relative">
                            <a href=" {{ route ('movie.show',$movie['id']) }} " >
                                <img src=" {{'https://image.tmdb.org/t/p/w500/'. $movie['poster_path'] }} " alt="" class="hover:opacity-50 transition ease-in-out duration-150 rounded">
                            </a>
                            <span class="ml-3 mt-3 border-2 from-blue-600 bg-gradient-to-r w-8 h-8 absolute top-0 left-0 text-white font-semibold text-sm flex justify-center items-center cursor-pointer rounded-full">
                                {{$movie['vote_average'] * 10 }} <small class="text-sm">%</small>
                            </span>
                            <div class="mt-2">
                                <a href="" class="text-md pt-4 text-white font-semibold hover:text-yellow-500"> {{$movie['title']}} </a>    
                                <div class="">
                                    <span class="flex item-center text-gray-500 text-sm "> {{\Carbon\Carbon::parse($movie['release_date'])->format('M,D,Y')}} </span>                       
                                </div>            
                            </div>          
                        </div>
                        @endif
                @endforeach     
                                 
       </div>
   </div>
@endsection