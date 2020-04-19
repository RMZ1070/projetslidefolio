 <!-- Services -->
 <div id="services" class="services">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">
          <h2>Our Services</h2>
          <hr>
        </div>
      </div>
      <div class="row">
        @foreach($services as $item)
          
        <div class="col-md-4 text-center">
          <div style="height: 200px;" class="service-item">
            <i class="service-icon {{$item->logo}} fa-3x"></i>
          <h3>{{$item->titre}}</h3>
          <p>{{$item->texte}}</p>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  <!-- /Services -->