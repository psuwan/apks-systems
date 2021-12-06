<nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
    <div class="container-fluid">
        <div class="navbar-wrapper">
            <div class="navbar-toggle">
                <button type="button" class="navbar-toggler">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <a class="navbar-brand" href="#pablo">Dashboard</a>
            <p class="display-6 text-light" id="showTimeNow"></p>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
                <div class="input-group no-border">
                    <input type="text" value="" class="form-control" placeholder="Search...">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <i class="now-ui-icons ui-1_zoom-bold"></i>
                        </div>
                    </div>
                </div>
            </form>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#pablo">
                        <i class="now-ui-icons media-2_sound-wave"></i>
                        <p>
                            <span class="d-lg-none d-md-block">Stats</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <i class="now-ui-icons ui-1_bell-53"></i>
                        <sup style="font-size:12px"><span class="badge badge-pill badge-danger">0</span></sup>
                        <p>
                            <span class="d-lg-none d-md-block">แจ้งเตือน</span>
                        </p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">ข้อความ</a>
                        <a class="dropdown-item" href="#">งาน</a>
                        <!--<a class="dropdown-item" href="#">Something else here</a>-->
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink4Users" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <i class="now-ui-icons users_single-02"></i>
                        <p>
                            <span class="d-lg-none d-md-block">เกี่ยวกับผู้ใช้</span>
                        </p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="../app-users/template-now-ui-user.php">template</a>
                        <a class="dropdown-item" href="#">เข้าระบบ</a>
                        <a class="dropdown-item" href="#">ลงทะเบียนผู้ใช้</a>
                        <a class="dropdown-item" href="#">ออกจากระบบ</a>
                        <a class="dropdown-item" href="#">เปลี่ยนรหัสผ่าน</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    let timeDisplay = document.getElementById("showTimeNow");

    function refreshTime() {
        let dateString = new Date().toLocaleString("th-TH", {timeZone: "Asia/Bangkok"});
        let formattedString = dateString.replace(", ", " - ");
        timeDisplay.innerHTML = formattedString;
    }
    setInterval(refreshTime, 800);
</script>