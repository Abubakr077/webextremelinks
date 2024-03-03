<!--Title maximum 60 character-->
<!--Description maximum 160 character-->
<!--Keywords comma separated-->
<!--Organization title maximum 60 character-->
<!--Organization description maximum 160 character-->
<!--Page links-->
<!--Page image URL: the image contain in folder in public html assets/img/meta. example: https://gposting.com/assets/img/meta/img.png-->
<!--Robots-->
<!--Googlebot-->




<!DOCTYPE html>
<html>
@include('header')



<section class="breadcrumb-area">
    <div class="breadcrumb-shape"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inn">
                    <h1>Site List</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-area section_b_50 section_t_50">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="site-heading2">
                    <h2>Our Websites And Services</h2>
                    <br>
                    <h4>About our sites</h4>
                    </br>
                    <p>
                        We have a list of 178 guest posting sites sorted by Domain Authority (DA), PA,
                        DR, Traffic, and different niches. Buy your niche relevant guest posts from real websites
                        with real traffic.
                    </p>
                    <br>
                    <h4>Contact Information</h4>
                    </br>
                    <p>We have multiple contact information such as Facebook, WhatsApp, Skype, and Email. Contact
                        information is given below.</p>
                </div>
                <div class="col-lg-12 mt-5 mb-5">
                    <blockquote>
                        <center>Email: <a class="__cf_email__"
                                data-cfemail="780b0d0808170a0c381f08170b0c11161f561b1715">[support@webextremelinks.com]</a>
                            ||
                            WhatsApp: +8801826574180 || Skype:
                            live:.cid.e794949374bfa80a  

                        </center>
                    </blockquote>
                </div>

            </div>



            <div class="col-md-12 table-responsive">



                <table id="example" class="table table-striped table-bordered dt-responsive nowrap"
                    style="width:100%">

                    <thead>
                        <tr>
                            <th>Website URL</th>
                            <th>DA</th>
                            <th>DR</th>
                            <th>Traffic</th>
                            <th>Niche</th>
                            <th>Google News</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sites as $key => $value)
                            <tr>
                                <td><a href={{ 'https://' . $value->url }} title={{ $value->url }}
                                        target="_blank">{{ $value->url }}</a></td>
                                <td>{{ $value->da }}</td>
                                <td>{{ $value->dr }}</td>
                                <td>{{ $value->traffic }}</td>
                                <td>{{ $value->niche }}</td>
                                <td>
                                    {{ $value->news }}
                                </td>
                                <td style="text-align: center;">
                                    <a href="/contact" target="_blank"
                                        class="google-sheet-contact">Contact<span>&#8594;</span></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>


</section>
<section class="about-area">
    <div class="shape shape-top">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" fill="#FFFFFF">
            <path class="shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
                c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
                c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
        </svg>
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-sm-6">
                <div class="about_img">
                    <img class="lazyload" data-src="{{ asset('/image/requirements.svg') }}" alt="img" />
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="about_text">
                    <div class="site-heading text-left ">
                        <h2>Our <span>Requirements</span> And <span>Terms</span> Here</h2>
                    </div>
                    <div class="post-requirement">
                        <ul>
                            <li><i class="fa fa-check"></i> Article Must Unique and Minimum 500 words</li>
                            <li><i class="fa fa-check"></i> Adult Not Allow</li>
                            <li><i class="fa fa-check"></i> Link do-follow</li>
                            <li><i class="fa fa-check"></i> Yes Google Index</li>
                            <li><i class="fa fa-check"></i> Lifetime Live Link</li>
                            <li><i class="fa fa-check"></i> Post Publish Time Instant (TAT)</li>
                            <li><i class="fa fa-check"></i> 1st Payment instant and After 72 Hours Wait</li>
                            <li><i class="fa fa-check"></i> Payment Method PayPal or Card</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape shape-bottom">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" fill="#FFFFFF">
            <path class="shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
        c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
        c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
        </svg>
    </div>
</section>


<section class="team section_t_50" id="ourExperts">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="site-heading2">
                    <h2>Our Experts</h2>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industrys standard dummy text ever since the 1500s </p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-lg-6 col-md-6 mt-sm-4">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="{{ asset('/image/team.png') }}" class="img-fluid" alt>
                            </div>
                            <div class="member-info">
                                <p class="member-heading">Admin Support</p>
                                <span>Guest Post And Reseller</span>
                                <p class="member-para">Skype: live:.cid.e794949374bfa80a</p>
                                <p class="member-para">E-mail: <a class="__cf_email__"
                                        data-cfemail="bcddd8d1d5d2fcdbccd3cfc8d5d2db92dfd3d1">[support@webextremelinks.com]</a>
                                </p>
                                <p class="member-para">WhatsApp: +8801826574180</p>
                                <div class="social">
                                    <a href="https://www.facebook.com/" target="_blank"><i
                                            class="fa fa-facebook team-icon"></i></a>
                                    <a href="#"><i class="fa fa-whatsapp team-icon"></i></a>
                                    <a href="#"><i class="fa fa-skype team-icon"></i></a>
                                    <a href="#"><i class="fa fa-envelope-o team-icon"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mt-sm-4">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="{{ asset('/image/team.png') }}" class="img-fluid" alt>
                            </div>
                            <div class="member-info">
                                <p class="member-heading">Support Team 24/7</p>
                                <span>Guest Post, Payment and support</span>
                                <p class="member-para">Skype: live:.cid.e794949374bfa80a</p>
                                <p class="member-para">E-mail: <a class="__cf_email__"
                                        data-cfemail="b0c3c5c0c0dfc2c4f0d7c0dfc3c4d9ded79ed3dfdd">[support@webextremelinks.com]</a>
                                </p>
                                <p class="member-para">WhatsApp: +8801826574180</p>
                                <div class="social">
                                    <a href="https://www.facebook.com/" target="_blank"><i
                                            class="fa fa-facebook team-icon"></i></a>
                                    <a href="#"><i class="fa fa-whatsapp team-icon"></i></a>
                                    <a href="#"><i class="fa fa-skype team-icon"></i></a>
                                    <a href="#"><i class="fa fa-envelope-o team-icon"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('footer')



<script>
    $(document).ready(function() {
        $("#example").DataTable({
            "pageLength": 25,
            "order": [],
            columnDefs: [{
                    responsivePriority: 1,
                    targets: 0
                },
                {
                    responsivePriority: 2,
                    targets: 1
                },
                {
                    responsivePriority: 3,
                    targets: 2
                },
                {
                    responsivePriority: 4,
                    targets: 3
                },
                {
                    responsivePriority: 5,
                    targets: 4
                }
            ]
        });
    });
</script>

</html>
