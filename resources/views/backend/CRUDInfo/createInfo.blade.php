@include('backend.back-header')

<div class="container p-4 ">

        <div class="row justify-content-md-center">
        <div class="col-md-12">
            <div class="text-center">
                <h1 class="">เพิ่มประชาสัมพันธ์</h1>
            </div>
            <form action="/storeInfo" method="post" enctype="multipart/form-data">
                @csrf
                <label for="">หัวข้อ : </label>
                <input type="text" class="form-control" name="title">
                <br>
                <label for="">เนื้อหา : </label>
                <textarea name="description" id="description" cols="30" rows="10"></textarea>
                {{-- <br>
                <input type="file" name="file" id="" accept="application/pdf">
                <br> --}}

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
        focus: true,
        height: 500,
    });
</script>
@include('backend.back-script')
