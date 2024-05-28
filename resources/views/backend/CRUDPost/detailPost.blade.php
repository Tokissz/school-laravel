@include('backend.back-header')

<div class="container"></div>
<div class="row  ml-4 mt-2">
    <a href="/posts">
        <h1><i class="fas fa-angle-left link-dark"></i></h1>
    </a>
</div>
<div class="container p-4 ">

    <div class="row justify-content-md-center">
        <div class="col-md-12">
            <div class="text-center">
                <h3 class="text-center">{{ $post->postTitle }}</h3>
                <hr>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <div>ประเภท : {{ $post->postType }} </div>
                <br>
                <div>
                    กลุ่มสาระ : {{ $post->postGroup}}
                </div>
            </div>
            <br>
            <label for="">รูปภาพปก : </label>
            <img src="{{ asset('upload/imgCover/' . $post->postCover) }} " width="300" height="200">
            <br>

            <div class="min-vh-100 w-auto d-inline-block text-center">
                {!! $post->postContent !!}
            </div>

        </div>
    </div>
</div>
</div>
@include('backend.back-script')
