@include('backend.back-header')

<div class="container p-4 ">
    <div class="row justify-content-start">
        <a href="/info"><h1><i class="fas fa-angle-left">ย้อนกลับ</i></h1></a>
    </div>
    <div class="row justify-content-md-center">
        <div class="col-md-12">
            <div class="text-center">
                <h3 class="text-center">{{ $infos->infoTitle }}</h3>
                <hr>
            </div>
            <div>
                {!! $infos->infoContent !!}
            </div>

        </div>
    </div>
</div>

@include('backend.back-script')