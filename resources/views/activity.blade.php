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

                <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-2">
                    <form action="search" method="GET" class="d-flex " enctype="multipart/form-data">
                        @csrf
                        <div class="d-flex m-2">
                            <select class="form-select" name="type">
                                <option selected value="">จัดเรียงลำดับ</option>
                                <option value="activity">กิจกรรมโรงเรียน</option>
                                <option value="activityTeacher">กิจกรรมครู</option>
                                <option value="activityStudent">กิจกรรมนักเรียน</option>
                                <option value="news">ประชาสัมพันธ์</option>
                            </select>
                        </div>

                        <div class="d-flex m-2">
                            <input class="form-control me-2" type="text" name="search" placeholder="Search"
                                aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </div>
                    </form>
                </div>

                <div>
                   
                    @if ($searchType == 'activity')
                        <h4>กิจกรรมโรงเรียน</h4>
                    @elseif ($searchType == 'news')
                        <h4>ประชาสัมพันธ์</h4>
                    @elseif ($searchType == 'activityStudent')
                        <h4>กิจกรรมนักเรียน</h4>
                    @elseif ($searchType == 'activityTeacher')
                        <h4>กิจกรรมครู</h4>
                    @else <h4></h4>
                    @endif
                </div>


                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach ($posts as $post)
                        <div class="col d-flex ">
                            <div class="card">
                                <a href="show/news/{{ $post->id }}">
                                    <div class="card__header">
                                        <img src="{{ asset('upload/imgCover/' . $post->postCover) }}"
                                            class="card__image" width="600" height="200">
                                    </div>
                                    <div class="card__body">
                                        @if ($post->postType == 'activity')
                                            <span class="tag tag-blue">กิจกรรมโรงเรียน</span>
                                        @elseif ($post->postType == 'news')
                                            <span class="tag tag-blue">ประชาสัมพันธ์</span>
                                        @elseif ($post->postType == 'activityStudent')
                                            <span class="tag tag-blue">กิจกรรมนักเรียน</span>
                                        @elseif ($post->postType == 'activityTeacher')
                                            <span class="tag tag-blue">กิจกรรมครู</span>
                                        @endif

                                        <h5>{{ $post->postTitle }}</h5>
                                    </div>
                                    <div class="card__footer">
                                        <div class="user">
                                            <div class="user__info">
                                                <small>{{ \Carbon\Carbon::parse($post->created_at)->locale('th')->isoFormat('LL') }}
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
            <div class="d-grid gap-2 col-2 mx-auto mt-2">{{ $posts->links() }}</div>
        </section>

    </main>

    <!-- ======= Footer ======= -->
    @include('footer')
    <!-- ======= End Footer ======= -->
</body>
