<!-- UserPanel Header page -->
<?php
include "include/userpanel-header.php";
include "include/user-header-page.php";
?>
<!-- End UserPanel Header page -->

<section>
    <div class="container-fluid">
        <div class="row" style="margin-top: 50px">

            <strong class="col-md-12 fs-4 text-center border-bottom">Analytics</strong>

            <!-- Videos -->
            <div class="col-md-4">
                <div class="graphbox">
                    <span class="fs-5 fw-semibold p-3 border">Videos</span>
                    <div class="list-group list-group-flush border-bottom scrollarea">
                        <a href="#" class="list-group-item list-group-item-action active py-3 lh-sm" aria-current="true">
                            <div class="d-flex w-100 align-items-center justify-content-between">
                            <strong class="mb-1">Video 1</strong>
                            <!-- <small>Wed</small> -->
                            </div>
                            <!-- <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div> -->
                        </a>
                        <a href="#" class="list-group-item list-group-item-action py-3 lh-sm">
                            <div class="d-flex w-100 align-items-center justify-content-between">
                                <strong class="mb-1">Video 2</strong>
                            </div>
                        </a>
                        
                        <a href="#" class="list-group-item list-group-item-action py-3 lh-sm">
                            <div class="d-flex w-100 align-items-center justify-content-between">
                                <strong class="mb-1">Video 3</strong>
                            </div>
                        </a>

                        <a href="#" class="list-group-item list-group-item-action py-3 lh-sm">
                            <div class="d-flex w-100 align-items-center justify-content-between">
                                <strong class="mb-1">Video 4</strong>
                            </div>
                        </a>
                        
                        <a href="#" class="list-group-item list-group-item-action py-3 lh-sm">
                            <div class="d-flex w-100 align-items-center justify-content-between">
                                <strong class="mb-1">Video 5</strong>
                            </div>
                        </a>
                        
                        <a href="#" class="list-group-item list-group-item-action py-3 lh-sm">
                            <div class="d-flex w-100 align-items-center justify-content-between">
                                <strong class="mb-1">Video 6</strong>
                            </div>
                        </a>
                        
                        <a href="#" class="list-group-item list-group-item-action py-3 lh-sm">
                            <div class="d-flex w-100 align-items-center justify-content-between">
                                <strong class="mb-1">Video 7</strong>
                            </div>
                        </a>
                        
                        <a href="#" class="list-group-item list-group-item-action py-3 lh-sm">
                            <div class="d-flex w-100 align-items-center justify-content-between">
                                <strong class="mb-1">Video 8</strong>
                            </div>
                        </a>
                        
                        <a href="#" class="list-group-item list-group-item-action py-3 lh-sm">
                            <div class="d-flex w-100 align-items-center justify-content-between">
                                <strong class="mb-1">Video 9</strong>
                            </div>
                        </a>
                        
                        <a href="#" class="list-group-item list-group-item-action py-3 lh-sm">
                            <div class="d-flex w-100 align-items-center justify-content-between">
                                <strong class="mb-1">Video 10</strong>
                            </div>
                        </a>
                        
                        <a href="#" class="list-group-item list-group-item-action py-3 lh-sm">
                            <div class="d-flex w-100 align-items-center justify-content-between">
                                <strong class="mb-1">Video 11</strong>
                            </div>
                        </a>
                        
                        <a href="#" class="list-group-item list-group-item-action py-3 lh-sm">
                            <div class="d-flex w-100 align-items-center justify-content-between">
                                <strong class="mb-1">Video 12</strong>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Line chart -->
            <div class="col-md-8 p-4">
                <div class="graphbox">
                    <canvas id="lineChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    //line
    var ctxL = document.getElementById("lineChart").getContext('2d');
    var myLineChart = new Chart(ctxL, {
    type: 'line',
    data: {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [{
        label: "My First dataset",
        data: [65, 59, 80, 81, 56, 55, 40],
        backgroundColor: [
            'rgba(105, 0, 132, .2)',
        ],
        borderColor: [
            'rgba(200, 99, 132, .7)',
        ],
        borderWidth: 2
        },
        {
        label: "My Second dataset",
        data: [28, 48, 40, 19, 86, 27, 90],
        backgroundColor: [
            'rgba(0, 137, 132, .2)',
        ],
        borderColor: [
            'rgba(0, 10, 130, .7)',
        ],
        borderWidth: 2
        }
        ]
    },
    options: {
        responsive: true
    }
    });
</script>



<!-- UserPanel Footer page -->
<?php
include "include/user-footer-page.php";
include "include/userpanel_footer.php";
?>
<!-- End UserPanel Footer page -->