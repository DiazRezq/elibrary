@extends('layouts.front')

@section('title')

@section('content')
<div
id="carouselExampleIndicators"
class="carousel slide mt-5"
data-ride="carousel"
>
<ol class="carousel-indicators">
  <li
    data-target="#carouselExampleIndicators"
    data-slide-to="0"
    class="active"
  ></li>
  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
</ol>
<div class="carousel-inner">
  <div class="container">
    <div class="carousel-item active">
      <div class="row pt-5 justify-content-center">
        <div class="col-9 col-sm-4 col-md-6 col-lg-4">
          <h1>New Release</h1>
          <p>Read the new book from good Author,read with imaginary</p>
          <a href="" class="btn btn-warning">Rent Now</a>
        </div>
        <div
          class="col-3 col-sm-6 col-md-4 col-lg-4 d-none d-sm-block offset-1"
        >
          <img src="/assets/images 2.png" alt="" />
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="row pt-5 justify-content-center">
        <div class="col-9 col-sm-4 col-md-6 col-lg-4">
          <h1>New Release</h1>
          <p>Read the new book from good Author,read with imaginary</p>
          <a href="" class="btn btn-warning">Rent Now</a>
        </div>
        <div
          class="col-3 col-sm-6 col-md-4 col-lg-4 d-none d-sm-block offset-1"
        >
          <img src="/assets/images 2.png" alt="" />
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="row pt-5 justify-content-center">
        <div class="col-9 col-sm-4 col-md-6 col-lg-4">
          <h1>New Release</h1>
          <p>Read the new book from good Author,read with imaginary</p>
          <a href="" class="btn btn-warning">Rent Now</a>
        </div>
        <div
          class="col-3 col-sm-6 col-md-4 col-lg-4 d-none d-sm-block offset-1"
        >
          <img src="/assets/images 2.png" alt="" />
        </div>
      </div>
    </div>
  </div>
</div>
<button
  class="carousel-control-prev"
  type="button"
  data-target="#carouselExampleIndicators"
  data-slide="prev"
>
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</button>
<button
  class="carousel-control-next"
  type="button"
  data-target="#carouselExampleIndicators"
  data-slide="next"
>
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</button>
</div>

<section class="publisher">
    <div class="container">
      <div class="row p-5 justify-content-center">
        <h3>Top Publishers</h3>
      </div>
      <div class="row mt-2 text-center">
        <div class="col-md">
          <img
            src="/brands/prh-logo 1.png"
            class="img-fluid"
            alt="carnegie"
          />
        </div>
        <div class="col-md">
          <img src="/brands/Harper.png" class="img-fluid" alt="carnegie" />
        </div>
        <div class="col-md">
          <img
            src="/brands/logo-sourcebooks_5.png"
            class="img-fluid"
            alt="carnegie"
          />
        </div>
        <div class="col-md">
          <img
            src="/brands/prh-logo 1.png"
            class="img-fluid"
            alt="carnegie"
          />
        </div>
      </div>
    </div>
</section>
<section class="features bg-light p-5">
    <div class="container">
      <div class="row mb-3">
        <div class="col">
          <h3>New Realease</h3>
          <p>Read the new story will bring you the new adventure</p>
          <hr />
        </div>
      </div>
      <div class="row">
        <div class="col-2">
          <figure class="figure">
            <img
              src="/brands/Carnegie.png"
              class="figure-img img-fluid rounded"
              alt="carnegie"
            />
            <figcaption class="figure-caption text-center">
              <h5>Dale Carnegie</h5>
              <a href="" class="btn btn-primary">Rent now</a>
            </figcaption>
          </figure>
        </div>
        <div class="col-2">
          <figure class="figure">
            <img
              src="/brands/Carnegie.png"
              class="figure-img img-fluid rounded"
              alt="carnegie"
            />
            <figcaption class="figure-caption text-center">
              <h5>Dale Carnegie</h5>
              <a href="" class="btn btn-primary">Rent now</a>
            </figcaption>
          </figure>
        </div>
        <div class="col-2">
          <figure class="figure">
            <img
              src="/brands/Carnegie.png"
              class="figure-img img-fluid rounded"
              alt="carnegie"
            />
            <figcaption class="figure-caption text-center">
              <h5>Dale Carnegie</h5>
              <a href="" class="btn btn-primary">Rent now</a>
            </figcaption>
          </figure>
        </div>
        <div class="col-2">
          <figure class="figure">
            <img
              src="/brands/Carnegie.png"
              class="figure-img img-fluid rounded"
              alt="carnegie"
            />
            <figcaption class="figure-caption text-center">
              <h5>Dale Carnegie</h5>
              <a href="" class="btn btn-primary">Rent now</a>
            </figcaption>
          </figure>
        </div>
        <div class="col-2">
          <figure class="figure">
            <img
              src="/brands/Carnegie.png"
              class="figure-img img-fluid rounded"
              alt="carnegie"
            />
            <figcaption class="figure-caption text-center">
              <h5>Dale Carnegie</h5>
              <a href="" class="btn btn-primary">Rent now</a>
            </figcaption>
          </figure>
        </div>
        <div class="col-2">
          <figure class="figure">
            <img
              src="/brands/Carnegie.png"
              class="figure-img img-fluid rounded"
              alt="carnegie"
            />
            <figcaption class="figure-caption text-center">
              <h5>Dale Carnegie</h5>
              <a href="" class="btn btn-primary">Rent now</a>
            </figcaption>
          </figure>
        </div>
      </div>
      <div class="row mt-5 text-center">
        <div class="col">
          <h3>Science Fiction 🚀</h3>
          <p>explore the unbelieveable journey</p>
          <hr />
        </div>
      </div>
      <div class="row">
        <div class="col-2">
          <figure class="figure">
            <img
              src="/brands/dune 1.png"
              class="figure-img img-fluid rounded"
              alt="carnegie"
            />
            <figcaption class="figure-caption text-center">
              <h5>Frank Herbert</h5>
              <a href="" class="btn btn-primary">Rent now</a>
            </figcaption>
          </figure>
        </div>
        <div class="col-2">
          <figure class="figure">
            <img
              src="/brands/images 3.png"
              class="figure-img img-fluid rounded"
              alt="carnegie"
            />
            <figcaption class="figure-caption text-center">
              <h5>Frank Herbert</h5>
              <a href="" class="btn btn-primary">Rent now</a>
            </figcaption>
          </figure>
        </div>
        <div class="col-2">
          <figure class="figure">
            <img
              src="/brands/dune 1.png"
              class="figure-img img-fluid rounded"
              alt="carnegie"
            />
            <figcaption class="figure-caption text-center">
              <h5>Frank Herbert</h5>
              <a href="" class="btn btn-primary">Rent now</a>
            </figcaption>
          </figure>
        </div>
        <div class="col-2">
          <figure class="figure">
            <img
              src="/brands/dune 1.png"
              class="figure-img img-fluid rounded"
              alt="carnegie"
            />
            <figcaption class="figure-caption text-center">
              <h5>Frank Herbert</h5>
              <a href="" class="btn btn-primary">Rent now</a>
            </figcaption>
          </figure>
        </div>
        <div class="col-2">
          <figure class="figure">
            <img
              src="/brands/dune 1.png"
              class="figure-img img-fluid rounded"
              alt="carnegie"
            />
            <figcaption class="figure-caption text-center">
              <h5>Frank Herbert</h5>
              <a href="" class="btn btn-primary">Rent now</a>
            </figcaption>
          </figure>
        </div>
        <div class="col-2">
          <figure class="figure">
            <img
              src="/brands/dune 1.png"
              class="figure-img img-fluid rounded"
              alt="carnegie"
            />
            <figcaption class="figure-caption text-center">
              <h5>Frank Herbert</h5>
              <a href="" class="btn btn-primary">Rent now</a>
            </figcaption>
          </figure>
        </div>
      </div>
    </div>
  </section>

  <section class="authors p-5">
    <div class="container">
      <div class="row mb-3">
        <div class="col">
          <h3>Top Authors</h3>
          <p>they bring our mind to great experience</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-6 col-sm-3 text-center">
        <figure class="figure">
          <img
            src="/authors/Group 19.png"
            class="figure-img img-fluid rounded"
            alt="carnegie"
          />
          <figcaption class="figure-caption text-center">
            <h5>Authors</h5>
            <p>Stephen King</p>
          </figcaption>
        </figure>
      </div>
      <div class="col-6 col-sm-3 text-center">
        <figure class="figure">
          <img
            src="/authors/Mask group.png"
            class="figure-img img-fluid rounded"
            alt="carnegie"
          />
          <figcaption class="figure-caption text-center">
            <h5>Authors</h5>
            <p>J. R. R. Tolkien</p>
          </figcaption>
        </figure>
      </div>
      <div class="col-6 col-sm-3 text-center">
        <figure class="figure">
          <img
            src="/authors/Mask group.png"
            class="figure-img img-fluid rounded"
            alt="carnegie"
          />
          <figcaption class="figure-caption text-center">
            <h5>Authors</h5>
            <p>J. R. R. Tolkien</p>
          </figcaption>
        </figure>
      </div>
      <div class="col-6 col-sm-3 text-center">
        <figure class="figure">
          <img
            src="/authors/Mask group.png"
            class="figure-img img-fluid rounded"
            alt="carnegie"
          />
          <figcaption class="figure-caption text-center">
            <h5>Authors</h5>
            <p>J. R. R. Tolkien</p>
          </figcaption>
        </figure>
      </div>
    </div>
  </section>

@endsection