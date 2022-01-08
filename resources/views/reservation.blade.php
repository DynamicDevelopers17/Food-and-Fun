<section class="caviar-reservation-area d-md-flex align-items-center" id="reservation">
        <div class="reservation-form-area d-flex justify-content-end">
            <div class="reservation-form">
                <div class="section-heading">
                    <h2>Reservation</h2>
                </div>
                <form id="contact" action="{{url('reservation')}}" method="post"> @csrf
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <input type="date" name="date" id="date" class="form-control" placeholder="dd/mm/yyyy" required="">   
                        </div>
                        <div class="col-12 col-lg-6">
                            <input type="time" name="time" id="time" class="form-control" required="">
                        </div>
                        <div class="col-12 col-lg-6">
                            <input name="name" type="text" id="name" class="form-control" placeholder="Your Name" required="">
                        </div>
                        <div class="col-12 col-lg-6">
                              <fieldset>
                              <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Your Email Address" required="">
                            </fieldset>
                        </div>
                        <div class="col-12 col-lg-6">
                              <fieldset>
                                <input name="phone" type="text" id="phone" placeholder="Phone Number" class="form-control" required="">
                              </fieldset>
                            </div>
                            <div class="col-12 col-lg-6">
                            <input name="guest" type="number" id="phone" class="form-control" placeholder="Number of guest" required="">
                            </div>
                        <div class="col-12">
                            <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Your Message"></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" id="form-submit"  class="btn caviar-btn"><span></span> Reserve Your Desk</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="reservation-side-thumb wow fadeInRightBig" data-wow-delay="0.5s">
            <img src="img/bg-img/hero-3.jpg" alt="">
        </div>
    </section>