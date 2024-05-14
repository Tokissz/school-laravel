@include('backend.back-header')

<div class="container p-4 ">
    <div class="row justify-content-md-center">
        <div class="col-md-12">
            <div class="text-center">
                <h1 class="">แก้ไขกิจกรรมโรงเรียน</h1>
            </div>
            <form action="/update/post/{{ $post->id }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <label for="">หัวข้อ : </label>
                <input type="text" class="form-control" name="title" value="{{ $post->postTitle }}">
                <br>
                <label for="">รูปภาพปก : </label>
                <input type="file" name="image" id="image" value="">
                <br><br>
                <img src="{{ asset('upload/imgCover/'.$post->postCover) }}" width="300" height="200">
                <br>
                <label for="">ประเภท:</label>
                    <select name="type" value="{{ $post->type }}">
                        <option value="activity">กิจกรรมโรงเรียน</option>
                        <option value="activityStudent">กิจกรรมนักเรียน</option>
                        <option value="activityTeacher">กิจกรรมครู</option>
                        <option value="news">ประชาสัมพันธ์</option>
                    </select>
                <br><br>
                <label for="">เนื้อหา : </label>
                <textarea name="description" id="description" cols="30" rows="10">{{ $post->postContent }}</textarea>
               
                <br>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-primary">ยืนยัน</button>
                    <a  href="/posts" class="btn btn-danger">ย้อนกลับ</a>
                </div>
            </form>

        </div>
    </div>
</div>

<script src="{{ asset('assets/summernote/lang/summernote-th-TH.js')}}"></script>

<script>
$('#description').summernote({
        lang: 'th-TH',
        placeholder: 'description...',
        tabsize: 10,
        focus: true,
        height: 500,
        width: 1100,
});
</script>
@include('backend.back-script')