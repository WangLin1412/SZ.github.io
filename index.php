<!DOCTYPE html>
<html>
<head>
  <title>Sports Zone</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css2?family=Orbitron:wght@700;900&display=swap' rel='stylesheet'>
  <link href="css/style.css" rel="stylesheet">
  <script src="script/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="margin: 0; padding: 0; overflow-x: hidden; overflow-y: auto;"> 
  <!-- Menu -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary menu" id="main_nav">
    <div class="container-fluid px-5" style="background: none;">
      <!-- Logo -->
      <a class="navbar-brand" href="#">
        Sports Zone
      </a>

      <!-- Nút toggle cho mobile -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Menu -->
      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0 align-items-center">
          <li class="nav-item"><a class="nav-link active me-3" href="#" style="color:#012970; font-size:19px; font-weight:bold;">Trang chủ</a></li>
          <li class="nav-item"><a class="nav-link active me-3" href="#" style="color:#012970; font-size:19px; font-weight:bold;">Giới thiệu</a></li>

          <!-- Giải đấu -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle me-3" href="#" role="button" data-bs-toggle="dropdown" style="color:#012970; font-size:19px; font-weight:bold;">Giải đấu</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Giải đang diễn ra</a></li>
              <li><a class="dropdown-item" href="#">Giải đã tổ chức</a></li>
              <li><a class="dropdown-item" href="#">Kết quả – Hình ảnh</a></li>
            </ul>
          </li>

          <!-- Dịch vụ -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle me-3" href="#" role="button" data-bs-toggle="dropdown" style="color:#012970; font-size:19px; font-weight:bold;">Dịch vụ</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Tổ chức sự kiện</a></li>
              <li><a class="dropdown-item" href="#">Truyền thông & PR</a></li>
              <li><a class="dropdown-item" href="#">Cho thuê thiết bị thể thao</a></li>
            </ul>
          </li>

          <li class="nav-item"><a class="nav-link active me-3" href="#" style="color:#012970; font-size:19px; font-weight:bold;">Đăng ký tổ chức</a></li>
          <li class="nav-item"><a class="nav-link active me-3" href="#" style="color:#012970; font-size:19px; font-weight:bold;">Tin tức</a></li>

          <!-- Thư viện -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle me-3" href="#" role="button" data-bs-toggle="dropdown" style="color:#012970; font-size:19px; font-weight:bold;">Thư viện</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Hình ảnh</a></li>
              <li><a class="dropdown-item" href="#">Video highlight</a></li>
              <li><a class="dropdown-item" href="#">Tài liệu hướng dẫn tổ chức Pickleball</a></li>
            </ul>
          </li>
          <li class="nav-item"><a class="nav-link active me-3" href="#" style="color:#012970; font-size:19px; font-weight:bold;">Tuyển dụng</a></li>
          <li class="nav-item"><a class="nav-link active" href="#" style="color:#012970; font-size:19px; font-weight:bold;">Liên hệ</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hình nền -->
  <div id="bg_img" class="sitebg">
      <p class="Logo">
        Sports<br>Zone
      </p>

      <button type="submit" class="btnLogo">
      Tìm hiểu thêm →
      </button>
  </div>


        <p class="TinMoiNhat">Sự kiện sắp diễn ra</p>

  <div class="event-container">
    <!-- Sự kiện 1 -->
    <div class="event-box">
      <p class="event-name">Giải chạy Vĩnh Long Xanh 2025</p>
      <p class="event-date">Ngày: 10/11/2025 - 08:00 sáng</p>
      <button class="btn" onclick="window.open('https://forms.gle/yourlink1','_blank')">
        Tham gia ngay →
      </button>
      <div class="Time">
        <div class="ConLai">Còn lại</div>
        <div class="KhungThoiGian" id="count1">
          <div class="KhungNho"><div class="So">00</div><div class="Chu">Ngày</div></div>
          <div class="KhungNho"><div class="So">00</div><div class="Chu">Giờ</div></div>
          <div class="KhungNho"><div class="So">00</div><div class="Chu">Phút</div></div>
          <div class="KhungNho"><div class="So">00</div><div class="Chu">Giây</div></div>
        </div>
      </div>
    </div>

    <!-- Sự kiện 2 -->
    <div class="event-box">
      <p class="event-name"> Hội liên hoan Âm nhạc Trẻ 2025</p>
      <p class="event-date">Ngày: 20/11/2025 - 19:00 tối</p>
      <button class="btn" onclick="window.open('https://forms.gle/yourlink2','_blank')">
        Đăng ký tham dự →
      </button>
      <div class="Time">
        <div class="ConLai">Còn lại</div>
        <div class="KhungThoiGian" id="count2">
          <div class="KhungNho"><div class="So">00</div><div class="Chu">Ngày</div></div>
          <div class="KhungNho"><div class="So">00</div><div class="Chu">Giờ</div></div>
          <div class="KhungNho"><div class="So">00</div><div class="Chu">Phút</div></div>
          <div class="KhungNho"><div class="So">00</div><div class="Chu">Giây</div></div>
        </div>
      </div>
    </div>

    <div class="event-box">
      <p class="event-name"> Hội liên hoan Âm nhạc Trẻ 2025</p>
      <p class="event-date">Ngày: 20/11/2025 - 19:00 tối</p>
      <button class="btn" onclick="window.open('https://forms.gle/yourlink2','_blank')">
        Đăng ký tham dự →
      </button>
      <div class="Time">
        <div class="ConLai">Còn lại</div>
        <div class="KhungThoiGian" id="count2">
          <div class="KhungNho"><div class="So">00</div><div class="Chu">Ngày</div></div>
          <div class="KhungNho"><div class="So">00</div><div class="Chu">Giờ</div></div>
          <div class="KhungNho"><div class="So">00</div><div class="Chu">Phút</div></div>
          <div class="KhungNho"><div class="So">00</div><div class="Chu">Giây</div></div>
        </div>
      </div>
    </div>

    <div class="event-box">
      <p class="event-name"> Hội liên hoan Âm nhạc Trẻ 2025</p>
      <p class="event-date">Ngày: 20/11/2025 - 19:00 tối</p>
      <button class="btn" onclick="window.open('https://forms.gle/yourlink2','_blank')">
        Đăng ký tham dự →
      </button>
      <div class="Time">
        <div class="ConLai">Còn lại</div>
        <div class="KhungThoiGian" id="count2">
          <div class="KhungNho"><div class="So">00</div><div class="Chu">Ngày</div></div>
          <div class="KhungNho"><div class="So">00</div><div class="Chu">Giờ</div></div>
          <div class="KhungNho"><div class="So">00</div><div class="Chu">Phút</div></div>
          <div class="KhungNho"><div class="So">00</div><div class="Chu">Giây</div></div>
        </div>
      </div>
    </div>

    <!-- Sự kiện 3 -->
    <div class="event-box">
      <p class="event-name">Lễ tốt nghiệp Đại học Cửu Long</p>
      <p class="event-date">Ngày: 05/12/2025 - 07:30 sáng</p>
      <button class="btn" onclick="window.open('https://forms.gle/yourlink3','_blank')">
        Xem chi tiết →
      </button>
      <div class="Time">
        <div class="ConLai">Còn lại</div>
        <div class="KhungThoiGian" id="count3">
          <div class="KhungNho"><div class="So">00</div><div class="Chu">Ngày</div></div>
          <div class="KhungNho"><div class="So">00</div><div class="Chu">Giờ</div></div>
          <div class="KhungNho"><div class="So">00</div><div class="Chu">Phút</div></div>
          <div class="KhungNho"><div class="So">00</div><div class="Chu">Giây</div></div>
        </div>
      </div>
    </div>
  </div>

   <div style="clear: both;"></div>
  <!-- Nút xem tất cả -->
  <div style="width: 100%; text-align: center; margin-top: 2px;">
    <button class="btn button ps-4 pe-4 pt-2 pb-2" style="font-size: 25px;">
      Xem tất cả →
    </button>
  </div>

  <script>
    function countdown(id, date) {
      const eventDate = new Date(date).getTime();
      const boxes = document.querySelectorAll(`#${id} .So`);
      const interval = setInterval(() => {
        const now = new Date().getTime();
        const distance = eventDate - now;

        if (distance < 0) {
          clearInterval(interval);
          document.getElementById(id).innerHTML = "<p style='color:red;'>Sự kiện đã bắt đầu!</p>";
          return;
        }

        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        boxes[0].textContent = days.toString().padStart(2, '0');
        boxes[1].textContent = hours.toString().padStart(2, '0');
        boxes[2].textContent = minutes.toString().padStart(2, '0');
        boxes[3].textContent = seconds.toString().padStart(2, '0');
      }, 1000);
    }

    countdown("count1", "Nov 10, 2025 08:00:00");
    countdown("count2", "Nov 20, 2025 19:00:00");
    countdown("count3", "Dec 05, 2025 07:30:00");
  </script>

</body>
</html>

  <div style="clear: both;"></div>

  <!-- Tin tức -->
  <div class="TinTuc">
    <p class="TinMoiNhat">Tin Mới Nhất</p>
    <div style="margin-top: 100px;">
      <!-- box1 -->
      <div class="box" style="margin-left: 20%;">
        <!-- ngày tháng -->
        <div class="KhungNgayThang">
          <div class="ms-auto textNgayThang">AUGUST 21</div>
        </div>
        <!-- Nội dung -->
        <div class="KhungNoiDung">
          <!-- tiêu đề -->
          <div class="KhungTieuDe">
            <p class="TieuDe">Dịch vụ tổ chức giải Pickleball chuyên nghiệp tại Việt Nam</p>
            <p class="NoiDung">👤 Nhất kiến văn     /     📁 Tin tức</p>
          </div>
          <!-- nút tìm hiểu thêm-->
          <div class="divTimHieuThem">
              <p class="ReadMore">Read More →</p>
          </div>
        </div>
      </div>

      <div class="box">
        <!-- ngày tháng -->
        <div class="KhungNgayThang">
          <div class="ms-auto textNgayThang">AUGUST 21</div>
        </div>
        <!-- Nội dung -->
        <div class="KhungNoiDung">
          <!-- tiêu đề -->
          <div class="KhungTieuDe">
            <p class="TieuDe">Pickleball – Môn thể thao lý tưởng để tổ chức sự kiện cộng đồng</p>
            <p class="NoiDung">👤 Nhất kiến văn     /     📁 Tin tức</p>
          </div>
          <!-- nút tìm hiểu thêm-->
          <div class="divTimHieuThem">
              <p class="ReadMore">Read More →</p>
          </div>
        </div>
      </div>

      <div class="box">
        <!-- ngày tháng -->
        <div class="KhungNgayThang">
          <div class="ms-auto textNgayThang">AUGUST 21</div>
        </div>
        <!-- Nội dung -->
        <div class="KhungNoiDung">
          <!-- tiêu đề -->
          <div class="KhungTieuDe">
            <p class="TieuDe">Checklist 10 Bước Tổ Chức Giải Pickleball Chuyên Nghiệp</p>
            <p class="NoiDung">👤 Nhất kiến văn     /     📁 Tin tức</p>
          </div>
          <!-- nút tìm hiểu thêm-->
          <div class="divTimHieuThem">
              <p class="ReadMore">Read More →</p>
          </div>
        </div>
      </div>

  </div>

  <div style="clear: both;"></div>
  <!-- Nút xem tất cả -->
  <div style="width: 100%; text-align: center; margin-top: 50px;">
    <button class="btn button ps-4 pe-4 pt-2 pb-2" style="font-size: 25px;">
      Xem tất cả →
    </button>
  </div>

  <!-- Đội ngũ -->
  <div class="divDoiNgu">
  <p class="pDoiNguSportZone">Đội Ngũ SportsZone</p>
  <div class="team-container">
    <!-- media -->
    <div class="team-member" style="margin-left: 20%;">
      <p>⭐⭐⭐⭐⭐</p>
      <img src="assets/media.jpg">
      <p class="large">Lại Toàn Minh Hiếu</p>
      <p class="small">Trưởng Phòng Media</p>
    </div>

    <!-- Giám đốc -->
    <div class="team-member">
      <p>⭐⭐⭐⭐⭐</p>
      <img src="assets/gd.jpg">
      <p class="large">Phạm Như Ý</p>
      <p class="small">Giám Đốc</p>
    </div>

    <!-- event -->
    <div class="team-member">
      <p>⭐⭐⭐⭐⭐</p>
      <img src="assets/event.png">
      <p class="large">Lý Cẩm Tú</p>
      <p class="small">Chuyên Viên Event</p>
    </div>
  </div>

  <div style="clear: both;"></div>

  <!-- Đối tác -->
  <div class="divDoiTac">
    <p class="pDoiTac">
      Đối Tác
    </p>

   <!-- vùng chứa logo -->

  <div class="logo-track" >
    <div class="logo-inner">

      <!-- set 1 -->
      <div class="logo-item">
        <img src="assets/logo1.png" class="logo-img">
      </div>
      <div class="logo-item">
        <img src="assets/logo2.jpg" class="logo-img">
      </div>
      <div class="logo-item">
        <img src="assets/logo3.jpg" class="logo-img">
      </div>
      <div class="logo-item">
        <img src="assets/logo4.jpg" class="logo-img">
      </div>
      <div class="logo-item">
        <img src="assets/logo5.jpg" class="logo-img">
      </div>
      <div class="logo-item">
        <img src="assets/logo6.jpg" class="logo-img">
      </div>

      <!-- set 2 -->
      <div class="logo-item">
        <img src="assets/logo1.png" class="logo-img">
      </div>
      <div class="logo-item">
        <img src="assets/logo2.jpg" class="logo-img">
      </div>
      <div class="logo-item">
        <img src="assets/logo3.jpg" class="logo-img">
      </div>
      <div class="logo-item">
        <img src="assets/logo4.jpg" class="logo-img">
      </div>
      <div class="logo-item">
        <img src="assets/logo5.jpg" class="logo-img">
      </div>
      <div class="logo-item">
        <img src="assets/logo6.jpg" class="logo-img">
      </div>

    </div>
  </div>

  

<!-- Sự kiện đã tổ chức -->
<div class="divSuKien">
  <p class="pSuKien">Sự kiện đã tổ chức</p>
  <div class="SuKien">
    <!-- Sự kiện 1 -->
    <div class="SuKienContainer" style="margin-left: 20%;">
      <div class="NoiDungSuKien">
        <img src="assets/sk1.png">
        <p class="Title">Giải Việt Dã Về Nguồn Quận 7 - Nhà Bè</p>
        <p class="phanLoai">👤 Nhất kiến văn / 📁 Chạy bộ</p>
      </div>
      <div class="divTimHieuThem">
        <p class="ReadMore" style="margin-left: 15px;padding-left: 0px;">Read More →</p>
        <p class="btn button" style="margin-left: 15px;padding-left: 10px; font-size: 15px; margin-top: 0px">Xem thư viện ảnh/video →</p>
      </div>
    </div>



    

    <!-- Sự kiện 2 -->
    <div class="SuKienContainer">
      <div class="NoiDungSuKien">
        <img src="assets/sk2.jpg">
        <p class="Title">GIẢI BÓNG ĐÁ CBSC LẦN II</p>
        <p class="phanLoai">👤 Nhất kiến văn / 📁 Bóng đá</p>
      </div>
      <div class="divTimHieuThem">
        <p class="ReadMore" style="margin-left: 15px;padding-left: 0px;">Read More →</p>
        <p class="btn button" style="margin-left: 15px;padding-left: 10px; font-size: 15px; margin-top: 0px">Xem thư viện ảnh/video →</p>
      </div>
    </div>

    <div class="SuKienContainer">
      <div class="NoiDungSuKien">
        <img src="assets/sk2.jpg">
        <p class="Title">GIẢI BÓNG ĐÁ CBSC LẦN II</p>
        <p class="phanLoai">👤 Nhất kiến văn / 📁 Bóng đá</p>
      </div>
      <div class="divTimHieuThem">
        <p class="ReadMore" style="margin-left: 15px;padding-left: 0px;">Read More →</p>
        <p class="btn button" style="margin-left: 15px;padding-left: 10px; font-size: 15px; margin-top: 0px">Xem thư viện ảnh/video →</p>
      </div>
    </div>
  </div>


</div>
  <div style="clear: both;"></div>

  <!-- Liên hệ -->
  <div class="LienHe">
    <p style="font-size: 35px;">Liên hệ với chúng tôi</p>
    <p style="font-size: 20px;margin-top: 10px;">Tổ chức các giải đấu thể thao uy tín, chuyên nghiệp và sáng tạo để phù hợp với đơn vị của bạn</p>

    <form class="d-flex" role="search">
        <input class="form-control" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn bg-primary" type="submit">Đăng ký</button>
      </form>
  </div>

  <!-- footer -->
  <div class="footer">
      <div>
        <p class="Title" style="color: #f4aa63;">Sports Zone</p>
        <p>📞 0931 334 332</p>
        <p>📧 nhatkienvan@gmail.com</p>
        <p>🌎 www.sportszone.vn</p>
        <p>🏠 529/13 Huỳnh Văn Bánh, P.14, Q.Phú Nhuận, TP.HCM</p>
      </div>

      <div>
        <span>Menu SportsZone</span><br>
        <div>
          <a href="#">Trang chủ</a>
          <a href="#">Đăng ký tổ chức</a>
          <a href="#">Tin tức</a>
          <a href="#">Tuyển dụng</a>
          <a href="#">Giới thiệt</a>
          <a href="#">Giải đấu</a>
          <a href="#">Dịch vụ</a>
          <a href="#">Thư viện</a>
          <a href="#">Liên hệ</a>
        </div>
      </div>

      <div>
        <span>Mạng xã hội</span><br>
        <a href="#">🌐 Facebook</a>
        <a href="#">💬 Zalo</a>
        <a href="#">▶️ Youtube</a>
        <a href="#">🎵 Tiktok</a>
        <a href="#">📸 Intagam</a>
      </div>

      <!-- Form đăng ký nhận tin -->
      <div>
        <p class="Title">Đăng ký nhận bản tin</p>
        <form>
          <!-- Tên -->
          <label for="name">Tên</label><br>
          <input id="name" type="text" name="name" placeholder="Nhập tên"><br>

          <!-- Email -->
          <label for="email">Email</label><br>
          <input id="email" type="email" name="email" placeholder="Nhập email"><br>

          <!-- Nội dung -->
          <textarea name="message" rows="3" placeholder="Nội dung..."></textarea><br>

          <button type="submit">
          Gửi
        </button>
      </form>
    </div>

    <hr style="width: 80%; border: 2px solid #f4aa63;">
   <h5 style=" color: #212514; text-decoration: none; text-align: center;width: 100%;">(Bản quyền © 2025 Sports Zone | <a href="#" style="display: inline-block;">Chính sách bảo mật</a> | <a href="#" style="display: inline-block;">Điều khoản</a>)</h5>
  </div>

  <script type="text/javascript">
    function resizeLayout() {
      const height = window.innerHeight;
      const navbar = document.getElementById("main_nav");
      const bg_img = document.getElementById("bg_img");

      navbar.style.height = (height * 0.12) + "px";
      bg_img.style.height = (height * 0.9) + "px";
    }

    window.addEventListener("load", resizeLayout);
    window.addEventListener("resize", resizeLayout);

    const track = document.querySelector('.logo-track');
    const inner = document.querySelector('.logo-inner');

    // Khi rê chuột vào 1 logo bất kỳ
    track.addEventListener('mouseover', (e) => {
      if (e.target.closest('.logo-item')) {
        inner.style.animationPlayState = 'paused';
      }
    });

    // Khi rời chuột khỏi vùng logo
    track.addEventListener('mouseout', (e) => {
      if (e.target.closest('.logo-item')) {
        inner.style.animationPlayState = 'running';
      }
    });
  </script>
</body>
</html>
