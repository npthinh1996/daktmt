@include('header')

<nav class="row px-0 mx-0">
    <div class="col-4 col-sm-2 px-0">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active" id="thongtin-tab" data-toggle="pill" href="#thongtin" role="tab" aria-controls="thongtin" aria-selected="true">Thông tin</a>
            <a class="nav-link" id="dichvu-tab" data-toggle="pill" href="#dichvu" role="tab" aria-controls="dichvu" aria-selected="false">Dịch vụ</a>
            <a class="nav-link" id="quanly-tab" data-toggle="pill" href="#quanly" role="tab" aria-controls="quanly" aria-selected="false">Quản lý</a>
            <a class="nav-link" id="hotro-tab" data-toggle="pill" href="#hotro" role="tab" aria-controls="hotro" aria-selected="false">Hỗ trợ</a>
        </div>
    </div>
    <div class="col-8 col-sm-10 bg-light text-dark rounded">
        <div class="tab-content py-3" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="thongtin" role="tabpanel" aria-labelledby="thongtin-tab">
                <b>Mã số thuế:</b> 12345 <br><hr>
                <b>Đại diện:</b> Nguyễn Phước Thịnh <br><hr>
                <b>Ngày đăng ký:</b> {{date("d/m/Y")}}
            </div>
            <div class="tab-pane fade" id="dichvu" role="tabpanel" aria-labelledby="dichvu-tab">
                <b>Gói đăng ký:</b> Gói doanh nghiệp <br><hr>
                <b>Hạn dùng:</b> {{date("d/m/Y")}} <br><hr>
                <b>Thanh toán:</b> Hoàn thành
            </div>
            <div class="tab-pane fade" id="quanly" role="tabpanel" aria-labelledby="quanly-tab">
                <b>Nâng cấp:</b> Gói hiện tại <br><hr>
                <b>Gia hạn:</b> Tự động <br><hr>
                <a href="#" class="text-danger">Xóa tài khoản</a>
            </div>
            <div class="tab-pane fade" id="hotro" role="tabpanel" aria-labelledby="hotro-tab">
                <b>Nhân viên:</b> Nguyễn Phước Thịnh <br><hr>
                <b>Email:</b> npthinh1996@gmail.com <br><hr>
                <b>Điện thoại:</b> 0989098494
            </div>
        </div>
    </div>
</nav>

@include('footer')