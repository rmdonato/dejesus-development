<?php /* Template Name: Contact Template */ ?>

<?php get_header() ?>


<div class="container-fluid mt-5 pt-5">
    <div class="row">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.3028678661426!2d121.05824631530221!3d14.58181018144505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c8144392c921%3A0x6af9dde166050b9e!2sOMM-Citra+Building!5e0!3m2!1sen!2sph!4v1531969802062" width="1920" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
</div>


<div class="container py-5 mx-auto">
    <div class="row text-center">
        <div class="col-md-12">
            <h1 class="font-style">Contact Us</h1>
            <p style="margin-top:-10px;"></p>
        </div>
    </div> <!--/row-->

    <div class="row pl-5">
        <div class="col-md-6 pb-5" style="padding-top:8%;">
            <ul class="list-unstyled">
                <li><i class="fas fa-home pr-3"></i>1607 OMM-Citra Building, San Miguel Avenue,</li>
                <li class="pb-4"><i class="pl-4"></i>&nbsp;&nbsp; Ortigas Centre, Pasig City</li>
                <li><i class="fas fa-phone pr-3 pb-4"></i>637-4881</li>
                <li><i class="fas fa-calendar-alt pr-3 pb-4"></i>Mon-Fri 9am - 6pm</li>
            </ul>
        </div>
        
        <div classs="col-md-6 pb-4" sytle="padding-top:6%">
            <?php the_content(); ?> <!-- Page Content -->
        
        </div>

   <!--     <div class="col-md-6 pb-4" style="padding-top:6%;">
            <form>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Name">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Email Address">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Contact no">
                </div>
                <div class="form-group">
                    <textarea class="form-control" rows="5" id="comment" placeholder="Inquiry"></textarea>
                </div>
                <button type="submit" class="btn btn-orange float-left">Submit</button>
            </form>
        </div> -->
    </div> <!--/row-->
</div> <!--/container-->

<?php get_footer() ?>