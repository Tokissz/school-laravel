@include('backend.back-header')

<div class="container-fluid px-4">
    <h1 class="mt-4">กิจกรรม</h1>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="/create" class="btn btn-md btn-primary">เพิ่มกิจกรรม</a>
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th scope="col">ลำดับ</th>
                    <th scope="col">หัวข้อ</th>
                    <th scope="col">วันที่สร้าง</th>
                    <th scope="col">วันที่อัปเดตล่าสุด</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>


                @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $post->postTitle }}</td>
                        <td>{{ $post->created_at->format('d-m-Y H:i') }}</td>
                        <td>{{ $post->updated_at->format('d-m-Y H:i') }}</td>
                        <td>
                            <a href="show/post/{{ $post->id }}" class="btn btn-success">แสดง</a>
                            <a href="edit/post/{{ $post->id }}" class="btn btn-info">แก้ไข</a>
                            {{-- <a href="delete/post/{{ $post->id }}" class="btn btn-danger" name="delete">ลบ</a> --}}
                            <a class="btn btn-danger" data-bs-toggle="modal" href="#deleteModalToggle"
                                data-post-id="{{ $post->id }}" role="button">ลบ</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        <div class="modal fade" id="deleteModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
            tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <form id="deleteUserForm" method="GET">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalToggleLabel">ยืนยันการลบกิจกรรม</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ต้องการลบกิจกรรมใช่หรือไม่
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-danger" type="submit">ยืนยัน</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</main>

</div>
<script>
    $('#deleteModalToggle').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget);
        console.log(button.data('post-id'));
        $('#deletePostForm').attr('action', 'delete/post/' + button.data('post-id'));
    });
</script>
@include('backend.back-script')
