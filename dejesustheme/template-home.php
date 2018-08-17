<?php /* Template Name: Home Template */ ?>

<?php get_header()?>

<div class="jumbotron bg-jumbo-home bg-jumbotron">
    <div class="container text-center" style="float: right;">
        <h1 class="display-1 mb-0">Legal Advocates</h1>
        <br />
        <div class="font-italic font-style">
            <blockquote class="blockquote text-center">
                <p class="mb-1 font-style text-white" style="font-size: 24px;">"The leading rule for the lawyer, <br /> as for the man of every calling, is diligence"</p>
                <footer class="blockquote-footer" style="color:white; font-size: 18px; letter-spacing: 2px;">Abraham Lincoln<cite title="Source Title"></cite></footer>
            </blockquote>
        </div>
        <a href="#About" class="btn btn-orange">Read more</a>
    </div>
</div>  <!--/jumbotron-->




<div class="container-fluid bg-lawyer" id="About">

    <div class="row mt-5 pt-4">
        <div class="col-md-6 m-md-5 px-md-5 py-md-3">
            <h1>Legal Professionalism</h1>
            <blockquote class="blockquote">
                <p class="mb-0 font-italic">"The greatest teaching of all must be done by righteous example"</p>
                <footer class="blockquote-footer">L. Tom Perry</footer>
            </blockquote>
            <br />
            <p>
                From extensive corporate in-house practice to government regulatory experience, Atty. Edgardo de Jesus founded De Jesus and Associates Law Office in 1997 with the purpose of delivering high-quality and personalized legal services to address the needs of his clients, may it be individuals or corporations. This boutique law firm has stood the test of time and has helped a vast clientele. Ever evolving, De Jesus and Associates Law Office is ready to advocate your rights before any court, tribunal, or forum, in a methodical and disciplined legal approach.
            </p>
            <br />
            <br />
            <h4>Atty. Edgardo de Jesus</h4>
            <p class="name-title">Founder of De Jesus & Associates</p>
        </div>
        <div class="col-md-4 d-none d-md-block">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/edj1.png" alt="Atty. Edgardo de Jesus" />
        </div>
    </div>
</div>

<div class="container-fluid" style="background-color:#bca24b;">
    <div class="col-md-8 mx-auto text-center py-5">
        <h1 class="text-white">30 Years of Legal Experience</h1>
        <p class="text-white">
            Connect with us should you require consultation on legal matters
        </p>
        <a href="@Url.Action("Contact", "Home")" class="btn btn-dark">Contact Us</a>
    </div>
</div>

<div class="container-fluid cover-lawyer pt-5">
    <h1 class="mt-5 text-center font-weight-bold" style="color:#212529;">OUR ATTORNEYS</h1>
    <p class="mb-5 text-center">What distinguishes this law firm from others is its personalized approach in answering your legal queries. <br /> Our family of lawyers is ready to consult with you on a wide range of matters that require our legal expertise.</p>
    <div class="row">
        <div class="col-md-3 order-md-3" style="padding-right: 5rem;">
            <img class="" src="<?php bloginfo('template_directory'); ?>/assets/images/edj1.png" alt="Atty. Darren de Jesus" />
        </div>
        <div class="col-md-3 order-md-4 pt-5 pl-5">
            <p style="font-size: 23px; font-weight: bold;">Atty. Edgardo de Jesus</p>
            <p>He specializes in the following fields of law: <br /> Nunc tristique lectus in leo malesuada, nec varius eros porttitor. Aenean eu elit.</p>
        </div>
        <div class="col-md-3 order-md-2" style="padding-left: 6%;">
            <img class="" src="<?php bloginfo('template_directory'); ?>/assets/images/ddj.png" alt="Atty. Darren de Jesus" />
        </div>
        <div class="col-md-3 order-md-1 pt-5 pl-5 text-md-right">
            <p style="font-size: 23px; font-weight: bold">Atty. Darren de Jesus</p>
            <p>He specializes in the following fields of law: <br /> Nunc tristique lectus in leo malesuada, nec varius eros porttitor. Aenean eu elit.</p>
        </div>
    </div>
</div>

<section id="Services" >
    <div class="container-fluid">
        <div class="row">
            <div id="our-services-title" class="text-center">
                <h1 class="text-white" style="padding-top:25px;">OUR FOCUS</h1>
                <p class="text-white" style="line-height:0;">We provide our clients with three different areas</p>
            </div>
        </div>
    </div>

    <div class="container-fluid cover-services mb-5 pb-5">
        <div class="container-fluid">
            <div class="container pt-5 text-center">
                <div class="row pt-5">
                    <div class="col-md-4 border-services litigation">
                        <div style="padding-top: 40%;">
                            <h4 class="pb-4" style="font-size: 2.0rem;">Litigation</h4>
                        </div>
                        <div class="overlay p-4">
                            <h4 class="text-dark pb-2 pt-3">Litigation</h4>
                            <p style="font-size: 16px;">Our lawyers are seasoned litigators, may it be before Regional Trial Courts or appellate courts. We are meticulous in our pleadings and aggressive in obtaining favorable decisions and resolutions, within the confines of proper remedial procedure and ethical practice.</p>
                        </div>
                    </div>

                    <div class="col-md-4 border-services corporate-practice">
                        <div style="padding-top: 40%;">
                            <h4 class="pb-4" style="font-size: 2.0rem;">Corporate Practice</h4>
                        </div>
                        <div class="overlay p-4">
                            <h4 class="text-dark pb-2 pt-2">Corporate Practice</h4>
                            <p style="font-size: 16px;">Our clients are mostly corporations. We advise them in their compliance requirements. We may assist you in your submissions before government regulatory bodies and consult you to ensure that your business, and its eventual expansion, runs smoothly in the Philippines.</p>
                        </div>
                    </div>

                    <div class="col-md-4 border-services labor">
                        <div style="padding-top: 40%">
                            <h4 class="pb-4" style="font-size: 2.0rem;">Labor</h4>
                        </div>
                        <div class="overlay p-4">
                            <h4 class="text-dark pb-2 pt-2">Labor</h4>
                            <p style="font-size: 16px;">We have extensive labor practice, and we are willing to negotiate with labor groups at any venue. Our lawyers may advise you on a wide range of labor issues, depending on the structure of your business organization, including settling strikes and negotiating collective bargaining agreements.</p>
                        </div>
                    </div>

                    <div class="col-md-4 border-services immigration">
                        <div style="padding-top: 40%">
                            <h4 class="pb-4" style="font-size: 2.0rem;">Immigration</h4>
                        </div>
                        <div>
                            <div class="overlay p-4 mr-3">
                                <h4 class="text-dark pb-2 pt-4">Immigration</h4>
                                <p style="font-size: 16px;">To ensure timely entry and/or deportation of your foreign officials, our lawyers are well adept with immigration rules and regulations, and are ready to file the necessary documents before the Bureau of Immigration.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 border-services taxation">
                        <div style="padding-top: 40%">
                            <h4 class="pb-4" style="font-size: 2.0rem;">Taxation</h4>
                        </div>
                        <div class="overlay p-4">
                            <h4 class="text-dark pb-2 pt-3">Taxation</h4>
                            <p style="font-size: 16px;">Tax assessments and litigation before the Court of Tax Appeals may be handled by our lawyers. We are well versed with the issuances of the Bureau of Internal Revenue, and we handle several assessment issues, which we have successfully settled in favor of our clients.</p>
                        </div>
                    </div>

                    <div class="col-md-4 border-services special-projects">
                        <div style="padding-top: 40%">
                            <h4 class="pb-4" style="font-size: 2.0rem;">Special Projects</h4>
                        </div>
                        <div class="overlay p-4">
                            <h4 class="text-dark pb-2">Special Projects</h4>
                            <p style="font-size: 16px;">Should you require business consultation on foreign investments or putting up new branches of your company, as well as specific concerns regarding local government units and/or legislation, our lawyers may assist you on how best to implement your business plan, in line with applicable laws, rules, and regulations.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!--/container-->
</section>

<div class="container-fluid pb-2">
    <div class="col-md-12 text-center py-3">
        <h1>RECENT POSTS</h1>
    </div>
    <div class="row my-5">
        <div class="col-md-3">
            <div class="card border-card">
                <img class="card-img-top" src="<?php bloginfo('template_directory'); ?>/assets/images/leaps-and-bounds.jpg" alt="leaps and bounds">
                <div class="card-body">
                    <h5 class="card-title">Leaps and bounds</h5>
                    <p class="card-text"><small class="text-muted">July 13, 2018</small></p>
                    <p class="card-text">Last Saturday, I conducted a six-hour lecture on Special Commercial Laws at the Legal Edge Bar Review Center attended by aspiring future lawyers. It...</p>
                    <a href="#" class="card-link">Read more</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-card">
                <img class="card-img-top" src="<?php bloginfo('template_directory'); ?>/assets/images/fiba.jpg" alt="shot fired">
                <div class="card-body">
                    <h5 class="card-title">Shot fired</h5>
                    <p class="card-text"><small class="text-muted">July 6, 2018</small></p>
                    <p class="card-text">It was a gruesome week for Philippine sports and politics. A basketball game turned into a wrestling match. Everything was caught on camera and seen...</p>
                    <a href="#" class="card-link">Read more</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-card">
                <img class="card-img-top" src="<?php bloginfo('template_directory'); ?>/assets/images/no-loitering.jpg" alt="no loitering">
                <div class="card-body">
                    <h5 class="card-title">No loitering (aka 'tambay')</h5>
                    <p class="card-text"><small class="text-muted">June 29, 2018</small></p>
                    <p class="card-text">
                        “The word tambay is even a generic one describing how time is spent on unimportant things.” “Idle loiterers” maybe a politically correct term, but let’s be bluntly...</p>
                    <a href="#" class="card-link">Read more</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-card">
                <img class="card-img-top" src="<?php bloginfo('template_directory'); ?>/assets/images/world-cup.jpg" alt="world cup">
                <div class="card-body">
                    <h5 class="card-title">A reflection on the World Cup – politics and the chief justice </h5>
                    <p class="card-text"><small class="text-muted">June 22, 2018</small></p>
                    <p class="card-text">
                        “To jump back to the World Cup, the roster of teams participating seems odd due to the non-inclusion of Italy.” I have been getting up...</p>
                    <a href="#" class="card-link">Read more</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.3028678661426!2d121.05824631530221!3d14.58181018144505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c8144392c921%3A0x6af9dde166050b9e!2sOMM-Citra+Building!5e0!3m2!1sen!2sph!4v1531969802062" width="1920" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
</div>

<?php get_footer() ?>