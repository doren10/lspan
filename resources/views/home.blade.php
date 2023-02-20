@extends('layouts.main')
@section('container')
<div class="col-12 mb-10">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="padding: 10px">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('img/1.jpg') }}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('img/9.jpg') }}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('img/maxresdefault.jpg') }}" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    <div class="col-12">
            <Article>
                <h1 class="fw-bold mb-2">Layanan Pengaduan Siswa</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab facilis in est optio fugiat recusandae illum quasi vel reprehenderit, esse atque odio nostrum minima voluptatibus molestias nam id velit debitis praesentium eveniet eaque laboriosam. t vero qui soluta doloremque vitae animi consequuntur nulla, molestiae fugit nemo dolorum non voluptas.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam cum earum quidem? Ullam quibusdam sequi cupiditate laudantium hic natus atque et nulla id, illo necessitatibus? Porro minima sapiente aliquam quam quod accusamus ad nisi, qui maiores nobis molestiae provident nesciunt natus veniam nisi quae quam fugit esse est animi. Ullam, aperiam rem animi blanditiis nobis optio, adipisci soluta ducimus aut labore ratione, quae dolores suscipit sint ipsum provident.</p>
            </Article>
      
    </div>
    <div class="col-12">
        <a href="/aspirasi" class="btn btn-primary fw-bold">Yuk Ajukan Aspirasi</a>
    </div>
</div>
@endsection
