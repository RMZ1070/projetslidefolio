<!-- Contact -->
<div id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12  text-center">
                        <h1>Subscribe to our newsletter</h1>
                        <hr>
                    </div>
                    <div class="col-md-12">
                        <!-- contact form starts -->
                    <form action="{{route('mail')}}" id="contact-form" class="form-horizontal" method= 'POST'>
                        @csrf
                            <fieldset>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="name">Your Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" placeholder="Your Name" class="form-control" name="name"
                                            id="name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="email">Email Address</label>
                                    <div class="col-sm-8">
                                        <input type="text" placeholder="Enter Your Email Address" class="form-control"
                                            name="email" id="email">
                                    </div>
                                </div>
                                <div class="col-sm-offset-4 col-sm-8">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                    <button type="reset" class="btn btn-primary">Cancel</button>
                                </div>
                            </fieldset>
                        </form>

                        <!-- contact form ends -->
                    </div>
                </div>
              </div>
              <h1 class="text-center">Contact Us</h1>
              <hr>
              <div id="vertical" class="col-md-6 text-center mt-5">
                <p> Email: {{$contact->email}}</p>
              <p>Telephone: {{$contact->telephone}}</p>
              <p>Adresse: {{$contact->adresse}}</p>
              </div>
            </div>

      </div>
  </div>
<!-- /Contact -->
