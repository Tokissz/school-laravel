@include('backend.back-header')

<div class="container p-4 ">

    <div class="row justify-content-md-center">
        <div class="col-md-12">
            <div class="text-center">
                <h1 class="">เพิ่มกิจกรรม</h1>
            </div>
            <form action="/post" method="post" enctype="multipart/form-data">
                @csrf
                <label for="">หัวข้อ : </label> 
                <input type="text" class="form-control" name="title" required>
                <br>
                
                <label for="">รูปภาพปก : </label>
                <input type="file" name="image" id="image" required>
                
                <br>
                <br>
                <label for="">ประเภท:</label>
                
                    <select name="type" >
                        <option value="activity">กิจกรรมโรงเรียน</option>
                        <option value="activityStudent">กิจกรรมนักเรียน</option>
                        <option value="activityTeacher">กิจกรรมครู</option>
                        <option value="news">ประชาสัมพันธ์</option>
                    </select>
                <br>
                <br>
                <label for="">กลุ่มสาระ :</label> 
                <input type="text" class="form-control" name="group" required>
                <br>

                <br>
                <label for="">เนื้อหา : </label>
                <textarea name="description" id="description" cols="30" rows="10" required></textarea>
                <br>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-primary">ยืนยัน</button>
                    <a href="/posts" class="btn btn-danger">ย้อนกลับ</a>
                </div>

            </form>

        </div>
    </div>
</div>

<script src="{{ asset('assets/summernote/lang/summernote-th-TH.js') }}"></script>


<script>
    $('#description').summernote({

        toolbar: [
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['insert', ['link', 'picture', 'video']],
            ['height', ['height']],
            ['codeview', ['codeview']]
        ],
        fontSizes: ['12', '16', '18', '24'], //here set the font size options you want
        lang: 'th-TH',
        placeholder: 'description...',
        tabsize: 20,
        focus: true,
        height: 500,
        width: 1100,
        minHeight: null, // set minimum height of editor
        maxHeight: null,
    });
</script>

@include('backend.back-script')