@include('header')
@include('navbar')
<!-- <div id="boxes">
    <div style="top: 50%; left: 50%; display: none;" id="dialog" class="window">
        <div id="san">
            <a href="#" class="close agree"><img src="{{ asset('assets/img/icons/close-icon.png') }} " width="25" style="float:right; margin-right: -25px; margin-top: -20px;"></a>
            <img class="responsive" src="{{ asset('assets/img/popup/pop-up.jpg')}} ">
        </div>
    </div>
    <div style="width: 100%; font-size: 32pt; color:white; height: auto; display: none; opacity: 0.4;" id="mask">
    </div>
</div> -->


<!-- ======= Hero Section ======= -->
<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

            <!-- Slide 1 -->
            <div class="carousel-item active" style="background-image: url(../../assets/img/slide/newslide-1.jpg)">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">เอกลักษณ์ของโรงเรียน</h2>
                        <p class="animate__animated animate__fadeInUp">“โรงเรียนที่พ่อสร้าง”</p>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item" style="background-image: url(../../assets/img/slide/newslide-2.jpg)">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">คำขวัญโรงเรียน</h2>
                        <p class="animate__animated animate__fadeInUp">รักษ์ศักดิ์ศรี มีคุณธรรม นำวิชาการ
                            สืบสานงานพระราชดำริ</p>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item" style="background-image: url(../../assets/img/slide/newslide-3.jpg)">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">อัตลักษณ์โรงเรียน</h2>
                        <p class="animate__animated animate__fadeInUp">ลูก ศ.ป. เป็นคนดี มีจิตสาธารณะ</p>
                    </div>
                </div>
            </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

    </div>
</section>
<div class="container p-4 ">
    <div class="col-md-12">
        <br>
        <div class="text-center">
            <h3 class="text-center">{{ $post->postTitle }}</h3>
            <hr>
        </div>
        <div class="vh-100 w-auto p-3">
            {!! $post->postContent !!}
        </div>
    </div>
</div>

<!-- ======= Footer ======= -->
@include('footer')
<!-- End Footer -->
</body>

</html>