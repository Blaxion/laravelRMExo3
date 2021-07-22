<div class="gtco-section gtco-testimonial gtco-gray">
    <div class="gtco-container">

        <div class="row row-pb-sm">
            <div class="col-md-8 col-md-offset-2 gtco-heading text-center">
                <h2>{{ $sections[0]->titre }}</h2>
                <p>{{ $sections[0]->sous_titre }}</p>
            </div>
        </div>

        <div class="row">
            @foreach ($testimonials as $testimonial)
                <div class="col-md-6 col-sm-6 animate-box">
                    <div class="gtco-testimony gtco-left">
                        <div><img src="{{ asset('images/' . $testimonial->img) }}"
                                alt="Free Website template by FreeHTML5.co">
                        </div>
                        <blockquote>
                            <p>&ldquo;{{ $testimonial->comment }}&rdquo; <cite class="author">&mdash;
                                    {{ $testimonial->author }}</cite></p>
                        </blockquote>
                    </div>
                </div>
                @if ($loop->iteration % 2 == 0)
            </div>
            <div class="row">
                @endif
            @endforeach

        </div>
    </div>
</div>
