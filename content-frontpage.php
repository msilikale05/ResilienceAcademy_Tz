<?php
/**
 * Template Name: Home
 */
?>

<?php get_header(); ?>
    <!-- home content -->
       <section class="page_section" id="home">
        <!--Slider-->
     <div class="js-include" id="branding_home" style="margin-bottom: 20px;">
        <div class="container">
            <div class="row">
                <!-- logo -->
                <div id="logo-foss4g" class="col-lg-4 text-center">
                    <a href="index.php">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/FOSSG42018logo.svg" width="246"
                             height="100" alt="foss4g logo"/></a>
                </div>
                <div id="logo-hot" class="col-lg-4 text-center">
                    <a href="http://hotosm.org">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/hot-logo.png "
                             height="80" alt="HOT logo"/></a>
                </div>
                <div id="logo-osgeo" class="col-lg-4 text-center">
                    <a href="http://osgeo.org">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/logo-osgeo.svg " width="246"
                             height="100" alt="osgeo logo"/></a>
                </div>
            </div>
        </div>
    </div>
        <div class="full_slider preloader">
            <div id="fullwidth_slider" class="flexslider">
                <ul class="slides">
                    <li>
                        <div class="full_slider_caption">
                            <div class="container">
                                <h2 id="foss4g-title" style="color: white; text-transform: uppercase;font-weight: bold; margin-top: 2%">
                                    #foss4g2018</h2>
                                <p style="color: white;text-transform: uppercase;"><strong>27, 28 August 2018</strong> :
                                    Workshops<br>
                                    <strong>29, 30, 31 August 2018</strong> : Three day main conference<br>
                                    <strong>1, 2 September 2018</strong> : Code sprints and community events</p>

                                 
                                <div class="global_count_wrapper">
                                    <script>
                                        jQuery(function () {
                                            austDay = new Date();
                                            austDay = new Date(2018, 8 - 1, 27, 12, 0, 0); //year, month-1, day
                                            jQuery('#countdown').countdown({
                                                until: austDay
                                            });
                                        });
                                    </script>
                                    <div id="countdown"></div>
                                </div>
                              <div style="color: #fff">
                                <h2 class="text-center"  style="color: #fff;margin: 0" > The latest news about foss4g2018</h2>
                                    <?php
                                $args = array( 'numberposts' => 1, 'order'=> 'DSC', 'orderby' => 'title', 'category_name' => 'announcement'  );
                                $postslist = get_posts( $args );
                                // $max_size = 12/sizeof($postslist);
                                // $col_css = "col-md-". $max_size;
                                foreach ($postslist as $post) :  setup_postdata($post); ?> 
<!--                                  <div class="<?php echo $col_css ?>">
 -->                                       <!--  <div class="blog-title"> -->
                                          <h5 style="color: #fff"><strong><?php the_title(); ?></strong></h5>
                                        <!-- </div>  -->
                                  <div class="row">  
                                  <div class="col-md-8  col-md-offset-2">    
                                 <div class="blog-data">
                                            <p style="color: #fff"><?php the_excerpt(); ?></p>
                                            <a href="<?php the_permalink(); ?>" style="color: #fff; font-size: 16px;">
                                            <?php esc_attr_e('Read More ','wp_theme_foss_4_g_dar'); ?>
                                            <i class="fa fa-long-arrow-right"></i></a>
                                       </div> 
                                       </div>
                                </div>
                                <?php endforeach; ?>
                              </div>
                                <div class="row">
                                  <div class="col-md-6">
   <div class="announce"><a href="https://2018.foss4g.or.tz/EventManagement/public/e/1/foss4g-2018-dar-es-salaam" class="">
      <strong>Book your tickets, don't miss the GIS event of the
      year!</strong><br>
      <u> Book your ticket here</u></a>
   </div>
</div>
  <div class="col-md-6">
                    <div class="announce">
                                          <a href="https://2018.foss4g.org/grants-programme-ii/" class="">
                                            <strong> Grants Program II</strong><br>
                                            The Grants Program for FOSS4G 2018 Dar es Salaam is open for applications.<u> Click here to apply</u></a></div>
                                    </div>
                                </div>
                                   
                                </div>
                            </div>
                </div>
                <div class="dark-bg"></div>
                <div class="green-bg"></div>
                </li>
                </ul>
            </div>
            <a href="#conference" class="next_section hide"></a>
            </div>

        <!--//Slider-->
    </section>

    <section class="page_section" id="about">
        <div class="inner">
            <div class="container">
                <div class="row" style="margin-top: 20px">
                  <div class="col-md-3 col-sm-6">
                     <h3 class="section-header">
            <p class="headlink">
              <a href="/attending/#location" class="speaker-modal-button">Venue<i class="fa fa-external-link" aria-hidden="true"></i></a></p>
                    </h3>
                        <p class="section-except">Is located as a branch of the Arusha International Conference Centre for the purpose of built Convention Centre in Dar es salaam City a major gateway to the world renowned “southern tourist circuit”, the “coastal tourist circuit” and Zanzibar in Tanzania, with sophisticated audio-video, communication and Information technology.</p>
                    </div>

                    <div class="col-md-3 col-sm-6">
                     <h3 class="section-header">
                        
           <p class="headlink"><a href="/programme" class="speaker-modal-button">Programe <i class="fa fa-external-link" aria-hidden="true"></i></a></p>
                    </h3>
                        <p class="section-except">FOSS4G 2018 has the compacted schedule with gives more opportunities to the FOSS community to interact with other community. With great keynote speakers, paper sessions, and talks, we believe this event has great opportunities for learning and networking but adding more FOSS communities in African countries.</p>
                    </div>
                     <div class="col-md-3 col-sm-6">
                     <h3 class="section-header">
                        
                  <p class="headlink"><a href="/programme/list-of-presentations" class="speaker-modal-button">Workshop<i class="fa fa-external-link" aria-hidden="true"></i></a></p>

                    </h3>
                        <p class="section-except">Two days of conference workshops will be held prior to the main conference at JNICC and State University of Zanzibar with hands on sessions for both new and experienced users.
                        </p>
                    </div>
                     <div class="col-md-3 col-sm-6">
                     <h3 class="section-header">
                  <p class="headlink"><a href="/social-events" class="speaker-modal-button">Social Events<i class="fa fa-external-link" aria-hidden="true"></i></a></p>
                    </h3>
                        <p class="section-except">Many evening events are planned, including a Icebreaker at National museum, a Social along the beach, and a Gala at the JNICC.</p>
                    </div>
            </div>
        </div>
    </section>
        <!-- conference content-->
        <section class="page_section triangle" id="vision" style="background-image: url(<?php echo get_bloginfo('template_directory'); ?>/img/backgrounds/vision.jpg)">
            <div class="inner">
                <div class="overlay-top" style="background-image: url(<?php echo get_bloginfo('template_directory'); ?>/img/bgs/tri-blue.svg)"></div>
                <div class="overlay-bot" style="background-image: url(<?php echo get_bloginfo('template_directory'); ?>/img/bgs/tri-white.svg)"></div>
            </div>
        </section>
        <section class="announcements">
            <div class="container-fluid">
                <div class="container pt110 pb52">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="row">
                                <div class="col-md-6 col-sm-12" ">
                     <span class="text-center "><i class="fa fa-group " style="font-size:32px " aria-hidden="true "></i></span>
                     <h4 class="tc-black mg-sm ">
                        <strong>Join the Announcement List</strong>
                     </h4>
                     <p class="section-excerpt ">
                        <a style="text-decoration:underline; " href="http://eepurl.com/cubwrT ">Join the FOSS4G 2018 Announcement List</a>
                        <br>
                        Miss any of our newsletters?<br>
                        <a href="http://us14.campaign-archive1.com/home/?u=b871212546ebe0a91f640e01f&amp;id=207ea034d8 " style="text-decoration:underline; ">Check out the archive</a>
                     </p>
                  </div>
                  <div class="col-md-6 col-sm-12 "">
                                    <span class="text-center"><i class="fa fa-handshake" style="font-size:32px" aria-hidden="true"></i></span>
                                    <h4 class="tc-black mg-sm">
                        <strong>Join the Discussion List</strong>
                     </h4>
                                    <p class="section-excerpt">
                                        <a style="text-decoration:underline;" href="https://lists.osgeo.org/mailman/listinfo/foss4g2018">Join the FOSS4G 2018 Discussion List</a>
                                    </p>
                                </div>
                            </div>
                            <div class="row" id="sponder_row">
                                <div class="col-md-6 col-sm-12" ">
                     <span class="text-center "><i class="fa fa-life-ring " style="font-size:32px " aria-hidden="true "></i></span>
                     <h4 class="tc-black mg-sm ">
                        <strong>Sponsorship Opportunities</strong>
                     </h4>
                     <p class="section-excerpt ">
                        This event is an amazing opportunity to play a vital role in the community around free and open source geospatial technology. To find out more please visit the sponsorship page
                     </p>
                  </div>
                  <div class="col-md-6 col-sm-12 "">
                                    <span class="text-center"><i class="fa fa-share-alt" style="font-size:32px" aria-hidden="true"></i></span>
                                    <h4 class="tc-black mg-sm"><strong>Share the Word with us on</strong></h4>
                                    <p>Follow on Twitter</p>
                                    <p class="section-excerpt"><i class="fa fa-twitter" aria-hidden="true"></i> <a href="https://twitter.com/foss4g" target="_blank">@foss4g</a></p>
                                    <p>Like on Facebook</p>
                                    <p class="section-excerpt"><i class="fa fa-facebook-official" aria-hidden="true"></i> <a href="https://www.facebook.com/foss4g2017" target="_blank">facebook.com/foss4g2018</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- <h3>FOSS4G Dar es Salaam 2018 Location(s) Map</h3> -->
                            <div id="mapid"><?php show_post('homepage-map'); ?></div>
                            <!-- <script type="text/javascript">
                                $(function() {
                                    console.log('showing map');
                                    var mymap = L.map('mapid').setView([-6.8110559, 39.289937], 16);
                                    var marker = L.marker([-6.8110509, 39.2220905]).addTo(mymap);
                                    L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
                                        attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
                                        maxZoom: 18,
                                        id: 'mapbox.streets',
                                        accessToken: 'pk.eyJ1IjoibWxvd2VlZGdhciIsImEiOiJjaWxqZXh4ZTAwMDl4dzhsend0a2cxY3JqIn0.KtlMeVuCRdoDod0giDBAdQ'
                                    }).addTo(mymap);
                                    L.marker([51.5, -0.09]).addTo(mymap);
                                    

                                });
                            </script> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
         <div class="gen-section" id="speaker-div">
                <div class="gen-section-title">
                    <h1 style="font-weight: 700;">Keynote Speakers</h1>
                </div>
                <div class="speaker-box">
                    <div class="speaker">
                        <img class="img-circle" src="<?php echo get_bloginfo('template_directory'); ?>/img/bgs/angela.jpg)" alt="angela" height="200" width="200">
                        <h2 class="speaker-name">Angela Oduor Lungati</h2>
                        <p class="speaker-excerpt">Director of Community Engagement</p>
                        <p class="speaker-org">Ushahidi</p>
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal-Angela">Click for details</button>
                      
                        <div class="modal fade" id="myModal-Angela" role="dialog">
                            <div class="modal-dialog">
                             
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h2>Angela Oduor Lungati</h2>
                                    </div>
                                    <div class="modal-body">
                                        <p style="text-align:left; line-height:165%"><strong>Angela Oduor Lungati</strong>
                                             who is a technologist, community builder and an open source software advocate who is passionate about building and using appropriate technology tools to create impact in lives of marginalised groups. With over 7 years experience, she currently serves as Director of Community Engagement at Ushahidi, providing support and building programs for Ushahidi’s diverse global community of users and contributors. She is also a co-founder at AkiraChix, a non-profit organisation that nurtures generations of women who use technology to develop innovations and solutions for Africa.
                                        </p>
                                        <br/>
                                        <p style="text-decoration: underline;text-align:left"> Abstract:</p>
                                        <p style="text-align:left; line-height:165%">There’s been an increased and valid spotlight on Diversity and Inclusion within the technology space, and more so, on the lack of diversity that prevails. It is no different in the Open Source space. In her talk, Angela will underscore the importance of paying attention to diversity and inclusion in the Open Source space, and things to keep in mind to foster stronger communities, and embrace our differences to build stronger products and do good in the world.
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="speaker">
                        <img class="img-circle" src="<?php echo get_bloginfo('template_directory'); ?>/img/bgs/neema.jpg)" alt="neema" height="200" width="200">
                        <h2 class="speaker-name">Neema Meremo</h2>
                        <p class="speaker-excerpt">Human Resource Manager</p>
                        <p class="speaker-org">Hope for girls and women Tanzania </p>
                        
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal-Neema">Click for details</button>
                      
                        <div class="modal fade" id="myModal-Neema" role="dialog">
                            <div class="modal-dialog">
                               
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h2>Neema Meremo</h2>
                                    </div>
                                    <div class="modal-body">
                                        <p style="text-align:left; line-height:165%"><strong>Neema Meremo</strong> who holds a Bachelor of Science in Human Resource Management from Moi University. Passionate about human rights, especially girls’ rights with a history of working with NGOs that work to eradicate #FGM & child marriage. Currently working with Hope for girls and women Tanzania an NGO that shelters girls who are being forced to undergo FGM and also a volunteer at Crowd2Map Tanzania as a lead community mapper(Mapping to end FGM). I am also passionate about economic empowerment of the youth who are the nation’s largest population through various economic activities.</p>
                                        <br/>
                                        <p style="text-decoration: underline;text-align:left"> Abstract:</p>
                                        <p style="text-align:left; line-height:165%">
                                            Crowd2Map Tanzania is a crowdsourced mapping project putting rural Tanzania on the map, concentrating first on those areas where girls are at risk of Female Genital Mutilation. Since 2015, we have been adding schools, clinics, roads, buildings and villages to OpenStreetMap, with the help of over 5000 remote volunteers worldwide and 600 on the ground in Tanzania. With minimal budget and no staff we have so far added over 2.1 million buildings and trained community mappers in 26 areas of Tanzania, We have been featured on Al Jazeera, The Guardian and Missing Maps, as well as 2 TV stations and 2 newspapers in Tanzania.
                                            <br/> We have also set up Youthmappers Chapters at the Institute of Rural Development and Planning in Mwanza and Dodoma and conducted mapathons in over 20 universities around the world.
                                            <br/> Our mapping is in two phases – firstly online volunteers trace roads and buildings from satellite images via the HOT tasking manager, then volunteers on the ground add names of villages, offices, churches, shops and other points of interest using a free smartphone app Maps.Me and printed fieldpapers. Community groups discuss the annotated fieldpapers with village leaders and then take a picture of them with their phone and email it to their paired volunteer - an advanced remote mapper from anywhere in the world. They then input this information into OpenStreetMap and produce a printable map of the village which they email back.
                                            <br/> We helped organise the first State of the Map Tanzania, a 3 day mapping training event in Dar es Salaam in December 2017, and a 3 day training event in Mwanza for Open Data Day in March 2018.
                                            <br/> Our talk will feature an overview of how we have mobilised such a large community of global mappers, the difficulties we have faced and the advice we have for other countries seeking to replicate this crowdsourced mapping model. We will also talk about the challenges faced by field mappers in remote Tanzania and what they can gain by working together with remote mappers from all around the globe to help map their communities and develop their GIS skills.
                                            <br/> We will also talk about 3 examples of the impact that maps are having on the remote rural communities where are groups are based, namely;
                                            <br> How maps can help protect girls at risk from FGM
                                            <br> How maps can help villages acquire Village Land Use Plans and mitigate local land disputes
                                            <br/> And how maps can show the extreme distances that students have to walk to school and thereby convince potential donors on the need for school hostels
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="speaker-box">
                    <div class="speaker">
                        <img class="img-circle" src="<?php echo get_bloginfo('template_directory'); ?>/img/bgs/maria.jpg)" alt="maria" height="200" width="200">
                        <h2 class="speaker-name">María Arias de Reyna</h2>
                        <p class="speaker-excerpt">software engineer</p>
                        <p class="speaker-org">GeoCat</p>
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal-María">Click for details</button>
                       
                        <div class="modal fade" id="myModal-María" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h2>María Arias de Reyna</h2>
                                    </div>
                                    <div class="modal-body">
                                        <p style="text-align:left; line-height:165%"><strong>María Arias de Reyna</strong> who is a software engineer working for GeoCat mostly on GeoNetwork Opensource project, where she is one of the main maintainers. María is a member of some Woman in Tech associations, the Local Spanish-Speaking Chapter and the President of OSGeo.</p>
                                        <br/>
                                        <p style="text-decoration: underline;text-align:left"> Abstract:</p>
                                        <p style="text-align:left; line-height:165%">OSGeo is the main organization of GeoSpatial Technologies in the world. We are a big family based on GeoSpatial open source software. But, do we fully understand our ecosystem and how each part interacts and benefits from the rest? Are we aware of all our ramifications? Do we know what OSGeo can do for us? And do we know what we can do for OSGeo? How can OSGeo help build a better world? Can OSGeo help me?
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="speaker">
                        <img class="img-circle" src="<?php echo get_bloginfo('template_directory'); ?>/img/bgs/daniela.jpg)" alt="Denise Photo" height="200" width="200">
                        <h2 class="speaker-name">Denise McKenzie</h2>
                        <p class="speaker-excerpt">Communication and Outreach program globally for the consortium</p>
                        <p class="speaker-org">OGC</p>
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Click for details</button>
                      
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">
                               
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h2>Denise McKenzie</h2>
                                    </div>
                                    <div class="modal-body">
                                        <p style="text-align:left; line-height:165%"><strong>Denise McKenzie </strong>who is an Aussie who lives in England in the historic town of Winchester. She joined OGC in 2012 and spends her time managing the Communication and Outreach program globally for the consortium. The program handles the planning and execution of marketing, communication and education to raise awareness and increase implementation of open geospatial and location standards by technology providers and users worldwide. Part of Denise's role is to oversee all OGC Alliance Partnerships including representation at the United Nations Global Geographic Information Management (UNGGIM) committee and recently she has joined the Board of the AGI in the UK. Prior to her role with OGC, she worked for over 12 years with the Victorian Government (Australia) in areas of strategic policy, collaboration and innovation</p>
                                        <br/>
                                        <p style="text-decoration: underline;text-align:left"> Abstract:</p>
                                        <p style="text-align:left; line-height:165%">For centuries we have been making maps to help us better understand the world in which we live. They are the tool by which we share knowledge and information about our amazing planet. Since the late 1960s our maps have been digital and with each passing year of innovation the amount of data about our world has continued to increase. But are we able to access it? Or understand it? Or most importantly share it. Join me to learn more about how OGC and the global open standards community is evolving and enables us to build a better collective understanding of our world and make better evidence based decisions so that we improve the planet for everyone and everything that lives here.
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--   <div class="speaker1-box">
         <div class="speaker1">
           <img class="img-circle" src="<?php echo get_bloginfo('template_directory'); ?>/img/bgs/january.jpeg)" alt="January Photo" height="200" width="200">
           <h2 class="speaker1-name">January Makamba</h2>
           <p class="speaker1-excerpt">Ministry of Environment Tanzania</p>
           <p class="speaker1-org">Tanzania </p>
          <div class="popup" onclick="speakerFive()">Click for details
           <div class="popuptext" id="myPopup4">
           <div class="modalDialog">
           <h2>Mar&#237;a Arias de Reyna</h2>
           <p style="text-align:left; line-height:125%"><strong>Spatial Data Infrastructures for everyone</strong><br /><br />Transfer protocol standards and data format standards are being put to work by many governments daily because these standards make data sharing easy. At the same time many data
             producers and users outside the government are using “wild open data formats” that do not follow any strict rules. These formats sometimes become the ”de facto” standard and evolve in parallel across the globe, making each one a new flavor of
             the original. How do we deal with this? Is there a way to have a spatial data infrastructure(SDI) that can reach all use cases and not fail in the attempt?</p>

           <p style="text-align:left; line-height:125%"><strong>Mar&#237;a Arias de Reyna</strong>, a Software Engineer at GeoCat, is one of the core developers of GeoNetwork, a free and open source catalog to manage spatially referenced resources under the OSGeo umbrella. María has been working with
             geospatial software for almost a decade: from fleet management to routing platforms and now metadata. She is a free (as in freedom) and open software evangelist and a very active member within several developer communities.

           </p>
          </div>
          </div>
         </div> 
         </div>

         </div> -->

            </div>
            </div>
        </section>
        <?php get_footer(); ?>