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
                <th scope="row">{{  $loop->iteration }}</th>
                <td>{{ $post->postTitle }}</td>
                <td>{{ $post->created_at->format('d-m-Y H:i') }}</td>
                <td>{{  $post->updated_at->format('d-m-Y H:i') }}</td>
                <td>
                    <a href="show/post/{{ $post->id }}" class="btn btn-success">แสดง</a>
                    <a href="edit/post/{{ $post->id }}" class="btn btn-info">แก้ไข</a>
                    <a href="delete/post/{{ $post->id }}" class="btn btn-danger">ลบ</a>
                </td>
            </tr>
            @endforeach

        </tbody>
        </table>
    </div>
</div>
</div>
</main>

</div>

@include('backend.back-script')