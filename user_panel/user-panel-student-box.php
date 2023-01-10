<?php
include "include/userpanel-header.php";
include "include/user-header-page.php";
?>

<section class="user-panel" id="user-panel">
    <div class="navbar navbar-expand">
        <div class="container-fluid">
            <!-- <div class="navbar-header"> -->
                <!-- <button class="btn navbar-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
                    <i class="fas fa-bars"></i>
                </button> -->
                <button class="btn navbar-toggle" id="open-btn">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="navigation">
                    <ul class="navbar-nav" id="nav-active">
                        <li class="nav-item active">
                        <a class="nav-link" href="#">Batches</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Industrial Skills</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Innovation</a>
                        </li>
                    </ul>
                <!-- </div> -->
            </div>
        </div>
    </div>
    <div class="row">
        <!-- <div style="min-height: 120px;"> -->
        <div class="col-md-3">
            <!-- <div class="collapse collapse-horizontal" id="collapseWidthExample"> -->
                <div class="list-group border-bottom card-h" id="card-h" style="width: 300px;">
                <div class="card card-body">
                    <p>
                        <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
                            <!-- Button with data-bs-target -->
                            <strong class="mb-1">Subject Name</strong>
                        </button>
                        <div class="collapse" id="collapseExample1">
                            <div class="card card-body">
                                <a href="" class="mb-1">Lecture name</a>
                            </div>
                        </div>
                        <div class="collapse" id="collapseExample1">
                            <div class="card card-body">
                                <a href="" class="mb-1">Lecture name</a>
                            </div>
                        </div>
                    </p>
                    <p>
                        <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
                        <strong class="mb-1">Subject Name</strong>
                        </button>
                    </p>
                    <div class="collapse" id="collapseExample2">
                        <div class="card card-body">
                        <a href="" class="mb-1">Lecture Name</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">Hey</div>
        <!-- </div> -->
    </div>
</section>


<script>
    const openbtn = document.getElementById('open-btn');
    const navI = document.getElementById('card-h');
    const active = document.getElementById('nav-active');

    active.addEventListener('click', () => {
        active.classList.toggle('active');
    });

    openbtn.addEventListener('click', () => {
        navI.classList.toggle('active');
    });
</script>


<?php
include "include/userpanel_footer.php";
include "include/user-footer-page.php";
?>