<div class="container section-marginTop text-center">
    <h1 class="section-title">সাম্প্রতিক ব্লগ </h1>
    <h1 class="section-subtitle">আইটি কোর্স, প্রজেক্ট ভিত্তিক সোর্স কোড সহ আরো যে সকল সার্ভিস আমরা প্রদান করি </h1>
    <div class="row">
        

        

       @foreach ($posts as $data )
           <div class="col-md-10  p-2 ">
            <div class="card">
                <img class="w-100" src="{{ $data->image }}" alt="Card image cap">
                <div class="w-100 p-4">
                    
                    <h5 class="blog-card-title text-justify  mt-2">{{ $data->title }} </h5>
                    <h2 class="blog-card-title text-justify  mt-2">{{ $data->name }}<h2> 
                    <h6 class="blog-card-subtitle text-justify p-0 ">{{ $data->description }}</h6>
                    <h6 class="blog-card-date text-justify "> <i class="far fa-clock"></i> ২৪/০৫/২০২০</h6>
                    <button class="normal-btn-outline float-left mt-2 mb-4 btn">আরো পড়ুন </button>
                    
                </div>
               @include('layout.comment')
            
            

                <div class="card-footer py-3 border-0" style="background-color: #f8f9fa;">
            
          </div>
                    
                
            </div>
            
        </div>

       @endforeach

          
        
        
</div>