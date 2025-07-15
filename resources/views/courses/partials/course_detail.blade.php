<div class="container">
    <div class="row align-items-center my-5">
        <div class="col-md-6">
            <img src="{{ asset('images/' . $image) }}" alt="{{ $title }}" class="img-fluid rounded shadow">
        </div>
        <div class="col-md-6">
            <h2 class="fw-bold text-dark">{{ $title }}</h2>
            <p class="text-muted mb-3">{{ $description }}</p>
            <p class="text-muted">Duration: <strong>{{ $duration }}</strong></p>

            <!-- <div class="mt-3">
                <strong>Rating:</strong>
                <span class="text-warning">
                    @for ($i = 1; $i <= floor($rating); $i++)<i class="bi bi-star-fill"></i>@endfor
                        @if (fmod($rating, 1) > 0)<i class="bi bi-star-half"></i>@endif
                </span>
                <small class="text-muted ms-2">{{ $rating }}/5 based on {{ $reviews }} reviews</small>
            </div> -->
        </div>
    </div>
    <div class="card  border-0 mb-5">
        <div class="card-body">
            <h3 class="mb-3 text-dark">Course Curriculum</h3>
            <ul>
                @foreach ($curriculum as $item)<li>{{ $item }}</li>@endforeach
            </ul>
        </div>
    </div>

    @include('courses.partials.leave_reply')
</div>