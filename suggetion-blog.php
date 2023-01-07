<?php
include 'include/header.php';
include 'include/mheader.php';
?>


<!-- MAIN BLOG PAGE -->

<div class="container">
    <div class="row">

        <div class="carriculam-title">
            <h1 class="c-title blog-head"><b>We are hiring</b></h1>
        </div>


        <div class="col-md-12">
            <div class="col-md-8 blog-page-content">
                <h2><b>Blog title</b></h2>
                <a href="#"><i class="fa fa-clock"></i>Shivam Anand</a><a href="#"><i class="fa fa-mail-bulk"></i>Admin</a><a href="#"><i class="fa fa-calendar"></i>22 nov, 2022</a>
            </div>
            <div class="col-md-7 blog-page">
                <div class="col-md-12 mainblog-page-img">
                    <img src="img/blogs/3979483.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-12 blog-page-content">


                

                <P>we don't need CV’s or resumes, we want real talent ,we don't need degree, if anyone want to join our revolution, so simply write 20 one line suggestion related to your interest and talent, make a document, and send us on our mail.(<b>contact@endiavolve.com</b>)</P>

            
                    <ul>
                        <li><b>(1). </b> Technical team-web developers/designer/programmers.</li>
                        <li><b>(2). </b> Marketing team-digital marketing/social media manager/campaign strategist.</li>
                        <li><b>(3). </b> Business development.</li>
                        <li><b>(4). </b> product development.</li>
                        <li><b>(5). </b> Operations .</li>
                    </ul>
                    

                </div>
            </div>

        </div>
    </div>
</div>

<!-- END MAIN BLOG PAGE -->



<!-- Suggetion form  -->

<section id="suggetion-form">
    <div class="container">
        <div class="row g-3">
            <!-- <div class="col-md-12"> -->
            <div class="col-sm-10 offset-md-1 offset-sm-1 col-12 mt-4 d-block">
                <form id="algin-form">
                    <div class="form-group">
                        <h4 class="suggetion-form-heading">Leave a comment</h4>
                        <label class="suggetion-form-heading" for="message">Message</label>
                        <textarea name="msg" id="" msg cols="30" rows="1" class="form-control" style="background-color: black;"></textarea>
                    </div>
                    <div class="col-md-6">
                        <!-- <div class="form-group"> -->
                            <label class="suggetion-form-heading form-label" for="fullname">Name</label>
                            <input type="text" name="name" id="fullname" class="form-control">
                        <!-- </div> -->
                    </div>
                    <div class="col-md-6">
                        <!-- <div class="form-group"> -->
                            <label class="suggetion-form-heading form-label" for="email">Email</label>
                            <input type="text" name="email" id="email" class="form-control">
                        <!-- </div> -->
                    </div>
                    <div class="form-group">
                        <p class="text-secondary">If you have a <a href="#" class="alert-link">gravatar account</a> your address will be used to display your profile picture.</p>
                    </div>
                    <div class="form-inline">
                        <input type="checkbox" name="check" id="checkbx" class="mr-1">
                        <label for="subscribe">Subscribe me to the newlettter</label>
                    </div>
                    <div class="form-group mb-4">
                        <button type="button" id="post" class="btn btn-lg btn-blue-gray">Post Comment</button>
                    </div>
                </form>
                <!-- </div> -->

            </div>

            <!-- <div class="col-sm-12 col-md-12 col-12 pb-4">
                <h4 class="suggetion-comment">Comments</h4>
                <div class="darker mt-4 text-justify">
                    <img src="https://i.imgur.com/yTFUilP.jpg" alt="" class="rounded-circle" width="40" height="40">
                    <h4 class="comment-name">Jhon Doe</h4>
                    <span class="comment-time">- 20 October, 2018</span>
                    <br>
                    <p class="comment-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus numquam assumenda hic aliquam vero sequi velit molestias doloremque molestiae dicta?</p>
                </div>
                <div class="darker mt-4 text-justify">
                    <img src="https://i.imgur.com/CFpa3nK.jpg" alt="" class="rounded-circle" width="40" height="40">
                    <h4 class="comment-name">Rob Simpson</h4>
                    <span class="comment-time">- 20 October, 2018</span>
                    <br>
                    <p class="comment-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus numquam assumenda hic aliquam vero sequi velit molestias doloremque molestiae dicta?</p>
                </div>
                <div class="darker mt-4 text-justify">
                    <img src="https://i.imgur.com/yTFUilP.jpg" alt="" class="rounded-circle" width="40" height="40">
                    <h4 class="comment-name">Jhon Doe</h4>
                    <span class="comment-time">- 20 October, 2018</span>
                    <br>
                    <p class="comment-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus numquam assumenda hic aliquam vero sequi velit molestias doloremque molestiae dicta?</p>
                </div>
                <div class="darker mt-4 text-justify">
                    <img src="https://i.imgur.com/CFpa3nK.jpg" alt="" class="rounded-circle" width="40" height="40">
                    <h4 class="comment-name">Rob Simpson</h4>
                    <span class="comment-time">- 20 October, 2018</span>
                    <br>
                    <p class="comment-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus numquam assumenda hic aliquam vero sequi velit molestias doloremque molestiae dicta?</p>
                </div>
            </div> -->
        </div>
</section>






<?php
include 'include/footer-page.php';
include 'include/footer.php';
?>
