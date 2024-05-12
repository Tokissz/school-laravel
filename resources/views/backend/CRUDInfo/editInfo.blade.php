@include('backend.back-header')

<div class="container p-4 ">
    <div class="row justify-content-md-center">
        <div class="col-md-12">
            <div class="text-center">
                <h1 class="">แก้ไขประชาสัมพันธ์</h1>
            </div>
            <form action="/update/{{ $infos->id }}" method="post">
                @csrf
                <label for="">หัวข้อ : </label>
                <input type="text" class="form-control" name="title" value="{{ $infos->infoTitle }}">

                <label for="">เนื้อหา : </label>
                <textarea name="description" id="description" cols="30" rows="10">{{ $infos->infoContent }}</textarea>
               
                <br>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-primary">ยืนยัน</button>
                    <a  href="/info" class="btn btn-danger">ย้อนกลับ</a>
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
        tabsize: 2,
        height: 300,                 // set editor height
        minHeight: null,             // set minimum height of editor
        maxHeight: null,             // set maximum height of editor
        focus: true,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ] 
});
</script>
@include('backend.back-script')