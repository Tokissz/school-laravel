@include('backend.back-header')

<div class="container p-4 ">
    <div class="row justify-content-md-center">
        <div class="col-md-12">
            <div class="text-center">
                <h3 class="text-center">{{ $post->title }}</h3>
                <hr>
            </div>
            <div>
                {!! $post->description !!}
            </div>

        </div>
    </div>
</div>

@include('backend.back-script')