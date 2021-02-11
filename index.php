<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, user-scalable=no" />
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-borderless@4/borderless.css" rel="stylesheet">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.js"></script>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
  <link href="//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css" rel="stylesheet" />
  <script src="//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
</head>

<body style="background: #000 url('https://i.pinimg.com/originals/3d/ce/ce/3dcece2f5cedc92685b2f9b8490e0e2d.png') center top">
  <!-- http://hackergrousrlpprsc.blogspot.com -->
  <style type="text/css">
    body {
      padding-bottom: 20px
    }
  </style><img style="width:90px;position:fixed;z-index:9999;top:0;left:0;" src="http://4.bp.blogspot.com/-Vlt_TV7Q9V8/UsA7lwMZryI/AAAAAAAAA3Q/ref7HQc1968/s1600/banner_left.png" _cke_saved_src="http://4.bp.blogspot.com/-Vlt_TV7Q9V8/UsA7lwMZryI/AAAAAAAAA3Q/ref7HQc1968/s1600/banner_left.png" /><img style="width:90px;position:fixed;z-index:9999;top:0;right:0;" src="http://4.bp.blogspot.com/-A85wPjYE2BM/UsA7mDDQWmI/AAAAAAAAA3U/R9bxy6zSrLs/s1600/banner_right.png" />
  <div style="position:fixed;z-index:9999;bottom:-50px;left:0;width:100%;height:104px;background:url(https://3.bp.blogspot.com/-uQrQaR3IkxE/WF9dDUUVLLI/AAAAAAAAAdw/VKNA5q7FJSQX5OWofOiPafEEENaoBcY9wCLcB/s1600/nentet.png) repeat-x bottom left;"></div><img style="position:fixed;z-index:9999;bottom:20px;left:20px" src="http://3.bp.blogspot.com/-4Zt-ZB4tols/UsA_qIR0w9I/AAAAAAAAA3w/Ffyy-5OqGec/s320/banner_header.png" />
  <div class="mb-4"></div>
  <div class="container">
    <br /><br /> <br /><br /><br /><br /> <br />
    <center><img style="width:350px;" src="https://phatphapungdung.com/wp-content/uploads/2019/03/than-tai-la-bieu-phap-cho-hanh-bo-thi.jpg"></center>
    <br />
    <div class="d-grid gap-2 col-6 mx-auto">
      <button class="btn btn-primary mt-2 ripple-surface" style="color:white" id="lixi">NHẬN LÌ XÌ</button>
    </div>
    <center>
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <button type="button" onclick="thele()" class="btn btn-primary">
              Thể lệ
            </button>
            <button onclick="tile()" type="button" class="btn btn-primary">
              Tỉ lệ
            </button>
          </div>
        </div>
      </div>
      <div class="progress">
        <progress class="progress-bar" role="progressbar" style="width:3520px; height:30px;" value="0" max="7" id="progressBar"></progress>
      </div>
    </center>
  </div>

  <script>
    $(document).ready(function() {
      $('#myTable').DataTable();
    });

    function tile() {
      alert('20.000vnđ - Tỉ lệ 10%\n50.00vnđ - Tỉ lệ 30% \n100.00vnđ - Tỉ lệ 40%\n200.00vnđ - Tỉ lệ 20%\n500.00vnđ - Tỉ lệ 10%');
    }

    function thele() {
      alert('***Lì xì theo phong cách này nhằm tăng sự thú vị và hấp dẫn hơn trong ngày Tết*** \nChúc mọi người có một cái Tết 2021 vui vẻ bên người thân nhưng đừng quên bảo vệ sức khoẻ nhé <3');
    }
    $('#lixi').click(function() {
      $('#lixi').html('<div class="spinner-border text-warning" role="status"><span class="visually-hidden">Loading... </span></div>Đang nhận lì xì <span class="badge bg-secondary" id="countdown"></span>').attr('disabled', 'disabled');
      setTimeout(() => {
        lixi();
      }, 8000);
      var timeleft = 8;
      var downloadTimer = setInterval(function() {
        if (timeleft <= 0) {
          clearInterval(downloadTimer);
        }
        document.getElementById("progressBar").value = 8 - timeleft;
        timeleft -= 1;
      }, 1000);
      var hoangphuc = demnguoc();

      function demnguoc() {
        var timeleft1 = 5;
        var downloadTimer = setInterval(function() {
          if (timeleft1 <= 0) {
            clearInterval(downloadTimer);
            document.getElementById("countdown").innerHTML = "Hoàn tất";
          } else {
            document.getElementById("countdown").innerHTML = "Hệ thống đang ngẫu nhiên...";
          }
          timeleft1 -= 1;
        }, 1000);
      }
      var chucmung = ["Chúc mừng năm mới", "An Khang Thịnh Vượng", "Ngàn lần như ý, Vạn lần như mơ, Triệu sự bất ngờ, Tỷ lần hạnh phúc. Chúc mừng năm mới!", "Xuân này hơn hẳn mấy xuân qua. Phúc lộc đưa nhau đến từng nhà. Vài lời cung chúc tân niên mới. Vạn sự an khang vạn sự lành.", "Chúc mừng năm mới. Chúc 365 ngày hạnh phúc, 52 tuần như ý, 12 tháng an vui, 8.760 giờ thoải mái, 52.600 phút may mắn và một năm mới an khang thịnh vượng – phát tài phát lộc.", "Chúc mọi người vui vẻ như Chim Sẻ, khỏe mạnh như mảnh hổ, giàu sang như chim Phụng, làm lụng như chim Sâu, sống lâu như Đà Điểu.", "Cung chúc tân niên một chữ nhàn. Chúc mừng gia quyến đặng bình an. Tân niên đem lại niềm hạnh phúc. Xuân đến rồi hưởng trọn niềm vui.", "Đầu xuân năm mới chúc bình an. Chúc luôn tuổi trẻ chúc an khang. Chúc sang năm mới nhiều tài lộc. Công thành danh toại chúc vinh quang.", "Kính chúc mọi người một năm mới tràn đầy niềm vui và hạnh phúc: Vui trong sức khoẻ, trẻ trong tâm hồn, khôn trong lý tưởng và trưởng thành mọi lĩnh vực.", "Năm mới đã tới thật gần, tôi cầu chúc cho anh và gia đình sức khỏe dồi dào, phúc lộc đầy nhà. Chúc cho đại gia đình một năm mới An Khang Thịnh Vượng.", "Năm mới với bao điều thú vị đang đến với bạn. Chúc bạn có đủ niềm đam mê để khám phá và tận hưởng từng ngày tươi đẹp của cuộc sống mới.", "Tết đến, xuân về, an khang thịnh vượng, phát tài phát lộc, sức khỏe dồi dào, mọi điều như ý.", "Chúc mọi người năm mới An khang thịnh vượng, tài lộc đầy nhà, con cháu sum vầy, một năm bình an và sung túc.", "Có thể những niềm vui của năm mới kéo dài mãi mãi trong cuộc sống của bạn. Có thể bạn sẽ tìm thấy được ánh sáng dẫn bạn đến thành công, cái đích mà bạn mong muốn. Chúc mừng năm mới.", "Hãy cùng vẫy tay tạm biệt năm cũ, đón nhận năm mới với nhiều ước mơ, hoài bão và cả hy vọng. Chúc bạn năm mới tràn ngập niềm vui và hạnh phúc.", "May all your new year wishes come true (Chúc mọi điều ước năm mới của bạn đều thành sự thật).", "Best wishes for a happy and successful new year (Những lời chúc tốt đẹp nhất, ấm áp nhất cho một năm vui vẻ và thành công).", "Wishing you all the magic of the new year (Chúc bạn mọi điều thần kỳ của năm mới)."];
      var random = chucmung[Math.floor(Math.random() * chucmung.length)];

      function lixi() {
        $.get('config.php', function(data, status) {
          if (data == '1' || data == '2' || data == '3' || data == '4' || data == '5' || data == '6' || data == '7' || data == '8') {
            if (data == '1') {
              var vnd = '50.000vnđ'
              Swal.fire({
                title: 'LỘC VỀ',
                text: 'Chúc mừng bạn đã nhận được ' + vnd + '. ' + random + '',
                imageUrl: 'https://h3jd9zjnmsobj.vcdn.cloud/public/mytravelmap/images/2016/12/3/tram_anhh_55/9ef19d85739ab5c2e425a2bf3f22fb1b.jpg',
                imageWidth: 400,
                imageHeight: 150,
                imageAlt: 'Custom image',
              }).then(function() {
                window.location = "/";
              });
            }
            if (data == '2') {
              var vnd = '20.000vnđ'
              Swal.fire({
                title: 'LỘC VỀ',
                text: 'Chúc mừng bạn đã nhận được ' + vnd + '. ' + random + '',
                imageUrl: 'https://h3jd9zjnmsobj.vcdn.cloud/public/mytravelmap/images/2016/12/3/tram_anhh_55/6c8f9948c232a8865e2008943f64227d.png',
                imageWidth: 400,
                imageHeight: 150,
                imageAlt: 'Custom image',
              }).then(function() {
                window.location = "/";
              });
            }
            if (data == '3') {
              var vnd = '500.000vnđ'
              Swal.fire({
                title: 'LỘC VỀ',
                text: 'Chúc mừng bạn đã nhận được ' + vnd + '. ' + random + '',
                imageUrl: 'https://h3jd9zjnmsobj.vcdn.cloud/public/mytravelmap/images/2016/12/3/tram_anhh_55/371c96f1f8b9bd5f34c11cab4ed8727b.png',
                imageWidth: 400,
                imageHeight: 150,
                imageAlt: 'Custom image',
              }).then(function() {
                window.location = "/";
              });
            }
            if (data == '4') {
              var vnd = '200.000vnđ'
              Swal.fire({
                title: 'LỘC VỀ',
                text: 'Chúc mừng bạn đã nhận được ' + vnd + '. ' + random + '',
                imageUrl: 'https://h3jd9zjnmsobj.vcdn.cloud/public/mytravelmap/images/2016/12/3/tram_anhh_55/061ad979ba5086beb4c6f31ab2e04f69.png',
                imageWidth: 400,
                imageHeight: 150,
                imageAlt: 'Custom image',
              }).then(function() {
                window.location = "/";
              });
            }
            if (data == '5') {
              var vnd = '50.000vnđ'
              Swal.fire({
                title: 'LỘC VỀ',
                text: 'Chúc mừng bạn đã nhận được ' + vnd + '. ' + random + '',
                imageUrl: 'https://h3jd9zjnmsobj.vcdn.cloud/public/mytravelmap/images/2016/12/3/tram_anhh_55/9ef19d85739ab5c2e425a2bf3f22fb1b.jpg',
                imageWidth: 400,
                imageHeight: 150,
                imageAlt: 'Custom image',
              }).then(function() {
                window.location = "/";
              });
            }
            if (data == '6') {
              var vnd = '100.000 vnđ'
              Swal.fire({
                title: 'LỘC VỀ',
                text: 'Chúc mừng bạn đã nhận được ' + vnd + '. ' + random + '',
                imageUrl: 'https://h3jd9zjnmsobj.vcdn.cloud/public/mytravelmap/images/2016/12/3/tram_anhh_55/08362315b9f6980b1f1578acf83be21d.png',
                imageWidth: 400,
                imageHeight: 150,
                imageAlt: 'Custom image',
              }).then(function() {
                window.location = "/";
              });
            }
            if (data == '7') {
              var vnd = '500.000vnđ'
              Swal.fire({
                title: 'LỘC VỀ',
                text: 'Chúc mừng bạn đã nhận được ' + vnd + '. ' + random + '',
                imageUrl: 'https://h3jd9zjnmsobj.vcdn.cloud/public/mytravelmap/images/2016/12/3/tram_anhh_55/371c96f1f8b9bd5f34c11cab4ed8727b.png',
                imageWidth: 400,
                imageHeight: 150,
                imageAlt: 'Custom image',
              }).then(function() {
                window.location = "/";
              });
            }
            if (data == '8') {
              var vnd = '100.000vnđ'
              Swal.fire({
                title: 'LỘC VỀ',
                text: 'Chúc mừng bạn đã nhận được ' + vnd + '. ' + random + '',
                imageUrl: 'https://h3jd9zjnmsobj.vcdn.cloud/public/mytravelmap/images/2016/12/3/tram_anhh_55/08362315b9f6980b1f1578acf83be21d.png',
                imageWidth: 400,
                imageHeight: 150,
                imageAlt: 'Custom image',
              }).then(function() {
                window.location = "/";
              });
            }
          }
        })
      }
    })
  </script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>

</html>