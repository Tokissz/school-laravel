@include('header')
@include('navbar')
<!-- ======= banner Section ======= -->
@include ('banner')
<!-- =======  end banner Section ======= -->
<div class="container-fluid">
    <div class="container p-4 ">
        <br>
        <div class="text-center">
            <h3 class="text-center">{{ $post->postTitle }}</h3>
            <div class="d-flex justify-content-end">
                {{ \Carbon\Carbon::parse($post->created_at)->locale('th')->isoFormat('LL LT') }} น.</div>
            <hr>
        </div>
        <div class="min-vh-100 w-auto d-inline-block">
            {!! $post->postContent !!}
        </div>
    </div>
</div>

<script>
   $("img").addClass("img-fluid");
</script>

<!-- ======= Footer ======= -->
@include('footer')
<!-- End Footer -->
