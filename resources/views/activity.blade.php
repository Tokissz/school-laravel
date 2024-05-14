@include('header')

<body>

    <!-- ======= Header ======= -->
    @include('navbar')<!-- End Header -->
    <main>
        <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="section-title">
                    <h2>กิจกรรม</h2>
                    <h1></h1>
                </div>

                <div class="row card_margin">
                    @foreach ($posts as $post)
                        <div class="col-lg-4 col-md-3 d-flex align-items-stretch " data-aos="zoom-in" data-aos-delay="100">
                            <!-- <div class="icon-box iconbox-blue"> -->
                            <div class="card ">
                                <a href="show/news/{{ $post->id }}">
                                    <div class="card__header">
                                        <img src="{{ asset('upload/imgCover/' . $post->postCover) }}"
                                            class="card__image" width="600" height="200">
                                    </div>
                                    <div class="card__body">
                                        @if ($post->postType == 'activity')
                                            <span class="tag tag-blue">กิจกรรม</span>
                                        @elseif ($post->postType == 'news')
                                            <span class="tag tag-blue">ประชาสัมพันธ์</span>
                                        @elseif ($post->postType == 'activityStudent')
                                            <span class="tag tag-blue">กิจกรรมนักเรียน</span>
                                        @elseif ($post->postType == 'activityTeacher')
                                            <span class="tag tag-blue">กิจกรรมครู</span>
                                        @endif

                                        <h5>{{ $post->postTitle }}</h5>
                                        <!-- <div class="demo"> {!! $post->postContent !!} </div> -->
                                    </div>
                                    <div class="card__footer">
                                        <div class="user">
                                            <div class="user__info">
                                                <small>{{ \Carbon\Carbon::parse($post->created_at)->locale('th')->isoFormat('LL') }}
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- </div> -->
                                </a>
                            </div>
                        </div>
                    @endforeach

                   
                </div>
             <div class="d-grid gap-2 col-2 mx-auto">{{ $posts->links() }}</div></div>

        </section>

    </main>

    <!-- ======= Footer ======= -->
    @include('footer')
    <!-- ======= End Footer ======= -->
</body>
