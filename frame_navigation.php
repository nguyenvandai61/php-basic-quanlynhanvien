<html>
<head>
	<style>
		@import url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,700');

		@import url('//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css');
		body {
		  color: #5D5F63;
		  background: #293949;
		  font-family: 'Open Sans', sans-serif;
		  padding: 0;
		  margin: 0;
		  text-rendering: optimizeLegibility;
		  -webkit-font-smoothing: antialiased;
		}
		.sidebar-toggle {
		  margin-left: -240px;
		}
		.sidebar {
		  width: 240px;
		  height: 100%;
		  background: #293949;
		  position: absolute;
		  -webkit-transition: all 0.3s ease-in-out;
		  -moz-transition: all 0.3s ease-in-out;
		  -o-transition: all 0.3s ease-in-out;
		  -ms-transition: all 0.3s ease-in-out;
		  transition: all 0.3s ease-in-out;
		  z-index: 100;
		}
		.sidebar #leftside-navigation ul,
		.sidebar #leftside-navigation ul ul {
		  margin: -2px 0 0;
		  padding: 0;
		}
		.sidebar #leftside-navigation ul li {
		  list-style-type: none;
		  border-bottom: 1px solid rgba(255, 255, 255, 0.05);
		}
		.sidebar #leftside-navigation ul li.active > a {
		  color: #1abc9c;
		}
		.sidebar #leftside-navigation ul li.active ul {
		  display: block;
		}
		.sidebar #leftside-navigation ul li a {
		  color: #aeb2b7;
		  text-decoration: none;
		  display: block;
		  padding: 18px 0 18px 25px;
		  font-size: 12px;
		  outline: 0;
		  -webkit-transition: all 200ms ease-in;
		  -moz-transition: all 200ms ease-in;
		  -o-transition: all 200ms ease-in;
		  -ms-transition: all 200ms ease-in;
		  transition: all 200ms ease-in;
		}
		.sidebar #leftside-navigation ul li a:hover {
		  color: #1abc9c;
		}
		.sidebar #leftside-navigation ul li a span {
		  display: inline-block;
		}
		.sidebar #leftside-navigation ul li a i {
		  width: 20px;
		}
		.sidebar #leftside-navigation ul li a i .fa-angle-left,
		.sidebar #leftside-navigation ul li a i .fa-angle-right {
		  padding-top: 3px;
		}
		.sidebar #leftside-navigation ul ul {
		  display: none;
		}
		.sidebar #leftside-navigation ul ul li {
		  background: #23313f;
		  margin-bottom: 0;
		  margin-left: 0;
		  margin-right: 0;
		  border-bottom: none;
		}
		.sidebar #leftside-navigation ul ul li a {
		  font-size: 12px;
		  padding-top: 13px;
		  padding-bottom: 13px;
		  color: #aeb2b7;
		}

	</style

</head>
<body>

<aside class="sidebar">
  <div id="leftside-navigation" class="nano">
    <ul class="nano-content">
      <?php
		session_start();
		if (isset($_SESSION['username'])) {?>
			  <li class="nano-content">
				<a target='frame_content' href="capnhat.php"><i class="fa fa-cogs"></i><span>Cập nhật</span></i></a>
			</li>
			  <li class="nano-content">
				<a target='frame_content' href="xoa.php"><i class="fa fa-trash-o"></i><span>Xóa</span></i></a>
			</li>
			<li class="nano-content">
				<a target='frame_content' href="chenthongtinNV.php"><i class="fa fa-plus"></i><span>Chèn thông tin NV</span></i></a>
			</li>
			<li class="nano-content">
				<a target='frame_content' href="chenthongtinPB.php"><i class="fa fa-plus"></i><span>Chèn thông tin PB</span></i></a>
			</li>
		<?php }?>
		
	<li class="nano-content">
        <a target='frame_content' href="xemthongtinNV.php"><i class="fa fa-eye"></i><span>Xem thông tin NV</span></i></a>
	</li>
		<li class="nano-content">
        <a target='frame_content' href="xemthongtinPB.php"><i class="fa fa-eye"></i><span>Xem thông tin PB</span></i></a>
	</li>
	<li class="nano-content">
        <a target='frame_content' href="timkiem.php"><i class="fa fa-search-plus"></i><span>Tìm kiếm NV</span></i></a>
	</li>
	
    </ul>
  </div>
</aside>
</body>