@include('backend.back-header')

<div class="container p-4 ">
    <div class="row justify-content-md-center">
        <div class="col-md-12">
            <div class="text-center">
                <h1 class="">แก้ไขกิจกรรม</h1>
            </div>
            <form action="/update/post/{{ $post->id }}" id="editForm" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <label for="">หัวข้อ : </label>
                <input type="text" class="form-control" name="title" value="{{ $post->postTitle }}">
                <br>
                <label for="">รูปภาพปก : </label>
                <input type="file" name="image" id="image" value="">
                <br><br>
                <img src="{{ asset('upload/imgCover/' . $post->postCover) }}" width="300" height="200">
                <br>
                <label for="">ประเภท:</label>
                <select name="type">
                    <option value="activity" {{ $post->postType == 'activity' ? 'selected' : '' }}>กิจกรรมโรงเรียน
                    </option>
                    <option value="activityStudent" {{ $post->postType == 'activityStudent' ? 'selected' : '' }}>
                        กิจกรรมนักเรียน</option>
                    <option value="activityTeacher" {{ $post->postType == 'activityTeacher' ? 'selected' : '' }}>
                        กิจกรรมครู</option>
                    <option value="news" {{ $post->postType == 'news' ? 'selected' : '' }}>ประชาสัมพันธ์</option>
                </select>
                <br>
                <br>
                <label for="">กลุ่มสาระ :</label> 
                <input type="text" class="form-control" name="group" value="{{ $post->postGroup }}" required>
                <br>
                
                <label for="">เนื้อหา : </label>
                <textarea name="description" id="description" cols="30" rows="10">{{ $post->postContent }}</textarea>

                <br>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a data-bs-toggle="modal" href="#editModalToggle" class="btn btn-primary"> ยืนยัน </a>
                    <a href="/posts" class="btn btn-danger">ย้อนกลับ</a>
                </div>
            </form>

        </div>
    </div>
</div>

<div class="modal fade" id="editModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel">ยืนยันการแก้ไขกิจกรรม</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ต้องการแก้ไขกิจกรรมใช่หรือไม่
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" id="btnSubmit" type="submit">ยืนยัน</button>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('assets/summernote/lang/summernote-th-TH.js') }}"></script>

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
<script>
    document.getElementById("btnSubmit").onclick = function() {
        document.getElementById("editForm").submit();
    }
</script>
@include('backend.back-script')
