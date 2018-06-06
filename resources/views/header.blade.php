<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="bg-dark text-light">
    <header class="bg-secondary">
        <nav class="navbar navbar-dark navbar-expand-sm justify-content-between">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active"><a href="#" class="nav-link">Trang chủ</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Giới thiệu</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Dịch vụ</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Hướng dẫn</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Liên hệ</a></li>
                </ul>
            </div>
            <div class="text-right">
                <button class="btn btn-info" data-toggle="modal" data-target="#dangnhapModal">Đăng nhập</button>
                <button class="btn btn-info" data-toggle="modal" data-target="#dangkyModal">Đăng ký</button>
            </div>
        </nav>
    </header>

    <div class="modal fade" id="dangnhapModal" tabindex="-1" role="dialog" aria-labelledby="dangnhapTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content bg-dark">
                <div class="modal-header">
                    <h5 class="modal-title" id="dangnhapTitle">Đăng nhập</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Hello
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="dangkyModal" tabindex="-1" role="dialog" aria-labelledby="dangkyTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content bg-dark">
                <div class="modal-header">
                    <h5 class="modal-title" id="dangkyTitle">Đăng ký</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Hello
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>