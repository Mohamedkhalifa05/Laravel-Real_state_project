@php
    $property = App\Models\Property::where("status",1)
    ->where("hot",1)->limit(3)->get();
@endphp





        <!-- deals-section -->
        <section class="deals-section sec-pad">
            <div class="auto-container">
                <div class="sec-title">
                    <h5>Hot Property</h5>
                    <h2>Our Best Deals</h2>
                </div>
                 
 <div class="row clearfix">

  
    @foreach ($property as $item)
                
            

    <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
        <div class="feature-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
            <div class="inner-box">
                <div class="image-box">
                    <figure class="image"><img src="{{ (!empty($item->property_thambnail)) ? asset($item->property_thambnail) : url("upload/no_image.jpg") }}" alt=""></figure>
                    <div class="batch"><i class="icon-11"></i></div>
                    <span class="category">Hot</span>
                </div>
                <div class="lower-content">
                    <div class="author-info clearfix">
                        <div class="author pull-left">
                            <figure class="author-thumb"><img src="{{ (!empty($item->user->photo)) ? asset($item->user->photo) : url("upload/no_image.jpg") }}" style="height: 42px!important;" alt=""></figure>
                            <h6 style="font-size: 18px !important;">{{$item->user->name}}</h6>
                        </div>
                        @if ($item->property_status == "buy")
                        <div class="buy-btn pull-right"><a href="property-details.html">For Buy</a></div>
                        @else
                        <div class="buy-btn pull-right"><a href="property-details.html">For Rent</a></div>
                        @endif
                        
                    </div>


                    <div class="title-text"><h4 style="width:292px !important"><a href="property-details.html">{{$item->property_name}}</a></h4></div>
                    <div class="price-box clearfix">
                        <div class="price-info pull-left">
                            <h6>Start From</h6>
                            <h4>${{$item->lowest_price}}</h4>
                            
                        </div>
                       
                        <ul class="other-option pull-right clearfix">
                            <li><a aria-label='Add To Compare' class="action-btn"
                                id='{{$item->id}}' onclick="addToCompare(this.id)"><i class="icon-12"></i></a></li>
                           
                            <li  ><a aria-label='Add To Wishlist' class="action-btn"
                                id='{{$item->id}}' onclick="addToWishList(this.id)"><i class="icon-13"></i></a></li>
        
                           
                           
                            
                        </ul>
                    </div>
                    {{-- <p>{{$item->short_descp}}</p> --}}
                    <ul class="more-details clearfix">
                        <li><i class="icon-14"></i>{{$item->bedrooms}} Beds</li>
                        <li><i class="icon-15"></i>{{$item->bathrooms}} Baths</li>
                        <li><i class="icon-16"></i>{{$item->property_size}} Sq Ft</li>
                    </ul>
                    <div class="btn-box"><a href="{{url('property/details/'.$item->id."/".$item->property_slug)}}" class="theme-btn btn-two">See Details</a></div>
                </div>
            </div>
        </div>
    </div>

    @endforeach

{{-- <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{ asset('frontend/assets/images/feature/feature-1.jpg') }}" alt=""></figure>
                                    <div class="batch"><i class="icon-11"></i></div>
                                    <span class="category">Featured</span>
                                </div>
                                <div class="lower-content">
                                    <div class="author-info clearfix">
                                        <div class="author pull-left">
                                            <figure class="author-thumb"><img src="{{ asset('frontend/assets/images/feature/author-1.jpg') }}" alt=""></figure>
                                            <h6>Michael Bean</h6>
                                        </div>
                                        <div class="buy-btn pull-right"><a href="property-details.html">For Buy</a></div>
                                    </div>
                                    <div class="title-text"><h4><a href="property-details.html">Villa on Grand Avenue</a></h4></div>
                                    <div class="price-box clearfix">
                                        <div class="price-info pull-left">
                                            <h6>Start From</h6>
                                            <h4>$30,000.00</h4>
                                        </div>
                                        <ul class="other-option pull-right clearfix">
                                            <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                            <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                        </ul>
                                    </div>
                                     
                                    <ul class="more-details clearfix">
                                        <li><i class="icon-14"></i>3 Beds</li>
                                        <li><i class="icon-15"></i>2 Baths</li>
                                        <li><i class="icon-16"></i>600 Sq Ft</li>
                                    </ul>
                                    <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                </div>
                            </div>
                        </div>
                    </div> --}}





 </div>

            </div>
        </section>
        <!-- deals-section end -->