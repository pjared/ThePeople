<div class="carousel rounded-box">
    @foreach ($photos as $photo)
        <div class="carousel-item">
            <img src="{{ storage_path('public/' . $photo->attachment)}}" alt="Burger" />
        </div>
    @endforeach

    {{-- <div class="carousel-item">
      <img src="https://placeimg.com/400/300/arch" alt="Burger" />
    </div>
    <div class="carousel-item">
      <img src="https://placeimg.com/400/300/arch" alt="Burger" />
    </div>
    <div class="carousel-item">
      <img src="https://placeimg.com/400/300/arch" alt="Burger" />
    </div>
    <div class="carousel-item">
      <img src="https://placeimg.com/400/300/arch" alt="Burger" />
    </div>
    <div class="carousel-item">
      <img src="https://placeimg.com/400/300/arch" alt="Burger" />
    </div>
    <div class="carousel-item">
      <img src="https://placeimg.com/400/300/arch" alt="Burger" />
    </div> --}}
</div>
