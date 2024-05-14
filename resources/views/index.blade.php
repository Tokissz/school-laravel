@include('header')
@include('navbar')
<div id="boxes">
    <div style="top: 50%; left: 50%; display: none;" id="dialog" class="window">
        <div id="san">
            <a href="#" class="close agree"><img src="{{ asset('assets/img/icons/close-icon.png') }} " width="25" style="float:right; margin-right: -25px; margin-top: -20px;"></a>
            <img class="responsive" src="{{ asset('assets/img/popup/pop-up.jpg')}} ">
        </div>
    </div>
    <div style="width: 100%; font-size: 32pt; color:white; height: auto; display: none; opacity: 0.4;" id="mask">
    </div>
</div>


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
</section><!-- End Hero -->

<main id="main">
    <!-- ======= news ======= -->
    <div class="row">
        <div class="container">
            <section id="services" class="services">
                <div class="container">
                    <div class="section-title">
                        <h2>กิจกรรม</h2>
                    </div>
                    <div class="row">
                        @foreach ($posts as $post)
                        <div class="col-lg-4 col-md-4 d-flex align-items-stretch " data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon-box iconbox-blue">

                                <div class="card__header">
                                    <img src="{{ asset('upload/imgCover/'.$post->postCover)}}" class="card__image" width="600" height="200">
                                </div>
                                <div class="card__body">
                                    <span class="tag tag-blue">Technology</span>
                                    <h5>{{ $post->postTitle }}</h5>
                                    <div class="wrapper"> {!!$post->postContent!!} </div>
                                </div>
                                <div class="card__footer">
                                    <div class="user">
                                        <div class="user__info">
                                            <small>{{ \Carbon\Carbon::parse($post->created_at)->locale('th')->isoFormat('LL') }} </small>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </section>

            <!-- ======= news ======= -->

            <section id="services" class="services">
                <div class="container">
                    <div class="section-title">
                        <h2>บริการ</h2>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 d-flex align-items-stretch " data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon-box iconbox-blue">
                                <a href="https://21ess.net/Account/SignIn">
                                    <img class="icon" src="../../assets/img/icons/student.png">
                                    <div class="icon">
                                        <svg width="0" height="0" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174">
                                            </path>
                                        </svg>
                                        <i class="bx bxl-dribbble"></i>
                                    </div>
                                    <h4>ตรวจสอบการเข้าเรียน
                                </a></h4>
                            </div>
                        </div>

                        <div class="ccol-lg-6 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                            <div class="icon-box iconbox-orange ">
                                <a href="bill-temp.html">
                                    <img class="icon" src="../../assets/img/icons/money.png">
                                    <div class="icon">
                                        <svg width="0" height="0" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426">
                                            </path>
                                        </svg>
                                        <i class="bx bx-file"></i>
                                    </div>
                                    <h4>การชำระเงินการบำรุงการศึกษา
                                </a></h4>
                            </div>
                        </div>
                    </div>
            </section>

            <section id="services" class="services">
                <div class="container">

                    <div class="section-title">
                        <h2>ประกาศจากทางโรงเรียน</h2>
                        <p></p>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 d-flex align-items-stretch " data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon-box iconbox-blue">
                                <a href="assets/pdf/27-28.pdf" target="_blank">
                                    <img class="icon" src="../../assets/img/icons/megaphone.png">
                                    <div class="icon">
                                        <svg width="0" height="0" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174">
                                            </path>
                                        </svg>
                                        <i class="bx bxl-dribbble"></i>
                                    </div>
                                    <h4>ปรับเปลี่ยนรูปแบบการจัดการเรียนการสอน
                                </a></h4>
                            </div>
                        </div>

                        <div class="ccol-lg-6 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                            <div class="icon-box iconbox-orange ">
                                <a href="assets/pdf/recruit_2023.pdf" target="_blank">
                                    <img class="icon" src="../../assets/img/icons/school.png">
                                    <div class="icon">
                                        <svg width="0" height="0" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426">
                                            </path>
                                        </svg>
                                        <i class="bx bx-file"></i>
                                    </div>
                                    <h4>การรับนักเรียนปีการศึกษา 2567
                                </a></h4>
                            </div>
                        </div>
                    </div>
            </section>
            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">
                <div class="container">

                    <div class="section-title">
                        <h2>ข้อมูลติดต่อ</h2>

                    </div>

                    <div class="row">

                        <div class="col-lg-50 d-flex align-items-stretch">
                            <div class="info">
                                <div class="address">
                                    <i class="bi bi-geo-alt"></i>
                                    <h4>ตำแหน่งที่ตั้ง:</h4>
                                    <p>666 หมู่ที่ 2 ตำบลบางปูใหม่ อำเภอเมืองสมุทรปราการ จังหวัดสมุทรปราการ 10280</p>
                                </div>

                                <div class="phone">
                                    <i class="bi bi-phone"></i>
                                    <h4>โทร:</h4>
                                    <p>02-323-2853</p>
                                </div>

                                <div class="clock">
                                    <i class="bi bi-clock"></i>
                                    <h4>เวลาทำการ:</h4>
                                    <p>เปิด : วันจันทร์ - ศุกร์ เวลา 8.00 -16.30 น
                                        <br>ปิด : วันเสาร์ - อาทิตย์ และวันหยุดนักขัตฤกษ์
                                    </p>
                                </div>

                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3879.225089326507!2d100.6416089749534!3d13.521773586846516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d583fb1acedcf%3A0x7b44fe6440125af3!2sSichan%20Pradit%20Secondary%20School!5e0!3m2!1sen!2sus!4v1698131272483!5m2!1sen!2sus" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                            </div>

                        </div>



                    </div>

                </div>
            </section><!-- End Contact Section -->



</main><!-- End #main -->

<!-- ======= Footer ======= -->
@include('footer')
<!-- End Footer -->
</body>

</html>