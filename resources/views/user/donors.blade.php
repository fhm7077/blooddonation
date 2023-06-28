<div class="page-section" id="donors">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp">Donors</h1>

      <div class="row">
  @foreach($donors as $donor)
  <div class="col-md-3">
    <div class="card-doctor">
      <div class="header">
        <img src="donorphotos/{{$donor->photo}}" alt="">
        <div class="meta">
          <a href="tel:{{$donor->phone}}"><span class="mai-call"></span></a>
          <a href="tel:{{$donor->phone}}"><span class="mai-logo-whatsapp"></span></a>
          
        </div>
      </div>
      <div class="body">
        <p class="text-xl mb-0">{{$donor->name}}</p>
        <span class="text-sm text-grey">{{$donor->blood_group}}</span> <br>
        <span class="text-sm text-grey">{{$donor->place}}</span>
      </div>
      
    </div>
  </div>
  @endforeach
</div>

    </div>
  </div>