@include('backend.back-header')

<div class="container-fluid px-4">
    <h1 class="mt-4">ประชาสัมพันธ์</h1>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="/createInfo" class="btn btn-md btn-primary">เพิ่มประชาสัมพันธ์</a>
    </div>
   
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ลำดับ</th>
                <th scope="col">หัวข้อ</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>

            
            @foreach ($infos as $info)
            <tr>
                <th scope="row">{{  $loop->iteration }}</th>
                <td>{{ $info->infoTitle }}</td>
                <td>
                    <a href="show/info/{{ $info->id }}" class="btn btn-success">แสดง</a>
                    <a href="edit/info/{{ $info->id }}" class="btn btn-info">แก้ไข</a>
                    <a href="delete/info/{{ $info->id }}" class="btn btn-danger">ลบ</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@include('backend.back-script')