@extends('main.master')
@section('content') 

 <meta name="description" content="Amazing ideas for all things Interior Design, from Decorating your Home with Color, Furniture and Accessories, by Mar Decor"/>
<link rel="canonical" href="https://mar-decor.com/interior-design/" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="The latest decoration and interior design of the2019" />
<meta property="og:description" content="Amazing ideas for all things Interior Design, from Decorating your Home with Color, Furniture and Accessories, by Mar Decor" />
<meta property="og:url" content="https://mar-decor.com/interior-design/" />
<meta property="og:site_name" content="Mar Decor" />
<meta property="article:tag" content="decoration and interior design" />
<meta property="article:section" content="Uncategorized" />
<meta property="article:published_time" content="2018-08-29T12:11:07+00:00" />
<meta property="article:modified_time" content="2019-02-04T10:56:41+00:00" />
<meta property="og:updated_time" content="2019-02-04T10:56:41+00:00" />
<meta property="og:image" content="https://mar-decor.com/wp-content/uploads/2018/08/اهم-اعمال-الديكور-1.jpg" />
<meta property="og:image:secure_url" content="https://mar-decor.com/wp-content/uploads/2018/08/اهم-اعمال-الديكور-1.jpg" />
<meta property="og:image:width" content="900" />
<meta property="og:image:height" content="900" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:description" content="Amazing ideas for all things Interior Design, from Decorating your Home with Color, Furniture and Accessories, by Mar Decor" />
<meta name="twitter:title" content="The latest decoration and interior design of the2019" />
<meta name="twitter:image" content="https://mar-decor.com/wp-content/uploads/2018/08/اهم-اعمال-الديكور-1.jpg" />

<a href="https://mar-decor.com/interior-design/"
 title="The latest decoration and interior design of the latest 2018">
  </a>















    <div class="cover-page">
        <h2 class="h1"> تفاصيل الخبر</h2>
    </div>
  <!-- =====end cover ===== -->
  
  <!-- =====start single-blog ===== -->
  <div class="single-blog sections">
      <div class="container">
          <div class="row">
                <div class="col-md-4">
                        <div class="box-news-left">
                            <h4 class="b">مواضيع ذات علاقة</h4>
                            <div class="row">
							
							
							@foreach(  $All_NEWS as  $services_val)
							@foreach(  $services_val->get_NEWS_description  as  $services_val_dec)

				<h3></h3>
 		 
		  <div class="col-12">
                                    <a href="{!! $services_val->get_NEWS_path()  !!}">
                                   <div class="box-min-news">
                                       <img src="{{ URL::to('/').'/images/'.$services_val->single_photo}}" alt="">
                                           <p>  {!! $services_val_dec->title !!}  </p>
                                        </div>
                                    </a>
                                </div>
								
									 @endforeach
									 @endforeach
									 
									 
							
							
                               
								
								
								
								
                            </div>
                        </div>
                     </div>

              <div class="col-md-8">
                  <div class="box-single-blog-img">
                      <img src="{{ URL::to('/').'/images/'.$NEWS->single_photo}}" alt="">
                  </div>
                  <div class="box-single-blog-info">
				  
				  	@foreach(  $NEWS->get_NEWS_description  as  $services_val_dec)

				<h3>{!! $services_val_dec->title !!} </h3>
         <p>  {!! $services_val_dec->description  !!}  </p>
		 
		 
									 @endforeach
									 
                    
						
                    </div>
              </div>

 
          </div>
      </div>
  </div>
 
	
   @endsection