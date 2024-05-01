
@include('header')
  @include('navbar')
  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title">
        <h2>ขั้นตอนการชำระเงิน ค่าบำรุงการศึกษา ปีการศึกษา 2/2566</h2>
        <p>โรงเรียนมัธยมวัดศรีจันทร์ประดิษฐ์ ในพระบรมราชานุเคราะห์</p>
      </div>

      <div class="row portfolio-container">

        <div class="col-lg-3 col-md-5 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="{{asset('assets/img/bill/bill-1.png')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <div class="portfolio-links">
                <a href="{{asset('assets/img/bill/bill-1.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-5 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="{{asset('assets/img/bill/bill-2.png')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <div class="portfolio-links">
                <a href="{{asset('assets/img/bill/bill-2.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-5 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="{{asset('assets/img/bill/bill-3.png')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <div class="portfolio-links">
                <a href="{{asset('assets/img/bill/bill-3.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-5 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="{{asset('assets/img/bill/bill-4.png')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <div class="portfolio-links">
                <a href="{{asset('assets/img/bill/bill-4.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <a href="http://sb.schoolbillingdev31.com/SBMCPD/Pages/PrintReportPayInForStudent.aspx"><button class="button-9" role="button">คลิกเพื่อชำระเงิน</button></a>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
    @include('footer')
  <!-- End Footer -->

