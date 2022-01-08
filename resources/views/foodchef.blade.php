
    <section class="caviar-testimonials-area" id="chefs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="testimonials-content">
                        <div class="section-heading text-center">
                        <h6>Our Chefs</h6>
                        <h2>We offer the best ingredients for you</h2>
                        </div>
                        <div class="caviar-testimonials-slides owl-carousel">
                            <!-- Single Testimonial Area -->
                            @foreach($data2 as $data2)
                            <div class="single-testimonial">
                                
                                <div class="testimonial-thumb-name d-flex align-items-center">
                                    <img width="200" height="200" src="chefimage/{{$data2->image}}" alt="">
                                    <div class="tes-name">
                                        <h5>{{$data2->name}}</h5>
                                        <p>{{$data2->speciality}}</p>
                                    </div>
                                </div>
                                
                            </div>
                            @endforeach
                            <!-- Single Testimonial Area -->
                            
                            <!-- Single Testimonial Area -->
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>