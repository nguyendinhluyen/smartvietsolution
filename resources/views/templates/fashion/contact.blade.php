@extends('templates.fashion.master')
@section('title', 'Fashion: HTML5/CSS3 Template')
@section('content')
<section id="article-section" class="line">
        <div class="margin">
           <!-- ARTICLES -->
           <div class="s-12 m-7 l-9">
              <!-- ARTICLE 1 -->
              <article class="margin-bottom">
                 <!-- text -->
                 <div class="post-text">
                    <h1>Contact Me</h1>
                    <div class="line">
                       <div class="margin">
                          <div class="s-12 l-6">
                             <h4>Vision Design - graphic zoo</h4>
                             <address>
                                <p><i class="icon-home icon"></i> Gallayova 19, 841 02 Bratislava</p>
                                <p><i class="icon-globe_black icon"></i> Slovakia - Europe</p>
                                <p><i class="icon-mail icon"></i> info@visiondesign.sk</p>
                             </address>
                          </div>
                          <div class="s-12 l-6">
                             <h4>Example contact form (do not use)</h4>
                             <form class="customform" action="">
                                <div class="s-12"><input name="" placeholder="Your e-mail" title="Your e-mail" type="text" /></div>
                                <div class="s-12"><input name="" placeholder="Your name" title="Your name" type="text" /></div>
                                <div class="s-12"><textarea placeholder="Your massage" name="" rows="5"></textarea></div>
                                <button type="submit">Submit Button</button>
                             </form>
                          </div>
                       </div>
                    </div>
                 </div>
                 <!-- MAP -->
                 <div id="map-block">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d682251.1123056135!2d17.063451638281247!3d48.09010461740988!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476c8cbf758ecb9f%3A0xddeb1d26bce5eccf!2sGallayova+2150%2F19%2C+841+02+D%C3%BAbravka%2C+Slovensk%C3%A1+republika!5e0!3m2!1ssk!2s!4v1412519122400" width="100%" height="450" frameborder="0" style="border:0"></iframe>
                 </div>
              </article>              
           </div>          
        </div>
     </section>
@endsection