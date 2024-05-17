@include('header')
@include('navbar')
<!-- <div id="boxes">
    <div style="top: 50%; left: 50%; display: none;" id="dialog" class="window">
        <div id="san">
            <a href="#" class="close agree"><img src="{{ asset('assets/img/icons/close-icon.png') }} " width="25" style="float:right; margin-right: -25px; margin-top: -20px;"></a>
            <img class="responsive" src="{{ asset('assets/img/popup/pop-up.jpg') }} ">
        </div>
    </div>
    <div style="width: 100%; font-size: 32pt; color:white; height: auto; display: none; opacity: 0.4;" id="mask">
    </div>
</div> -->


<!-- ======= Hero Section ======= -->
@include ('banner')
<div class="container-fluid">
    <div class="container p-4">
        <br>
        <div class="text-center">
            <h3 class="text-center">{{ $post->postTitle }}</h3>
            <hr>
        </div>
        <div class="min-vh-100 w-auto d-inline-block">
            {!! $post->postContent !!}
        </div>
    </div>
</div>

<!-- ======= Footer ======= -->
@include('footer')
<!-- End Footer -->
</body>

</html>
