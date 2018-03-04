<footer class="footer_section" id="contact">
    <div class="container">
        <section class="main-section contact" id="contact">
            <div class="contact_section">
                <h2>Liên hệ</h2>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="contact_block">
                            <img src="img/building.png" alt="địa chỉ công ty" style="width: 100px; padding-bottom: 20px">
                            <span>118 Đường số 5, Phường 9, <br>Quận Gò Vấp, Hồ Chí Minh</span>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="contact_block">
                            <img src="img/phone.png" alt="số điện thoại công ty" style="width: 100px; padding-bottom: 20px">
                            <span>0165 618 5047</span>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="contact_block">
                            <img src="img/mail.png" alt="email công ty" style="width: 100px; padding-bottom: 20px">
                            <span> <a href="mailto:hello@butterfly.com"> svs@gmail.com</a> </span> </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 wow fadeInLeft">
                    <div class="contact-info-box address clearfix">
                        <h3>Nhận báo giá thiết kế</h3>
                        <p>Hãy đăng ký thông tin để nhận báo giá thiết kế.
                            SVS tự tin là nhà cung cấp dịch vụ website an toàn, bảo mật.
                            SVS luôn đồng hành cùng sự thịnh vượng của doanh nghiệp</p>
                    </div>
                    <ul class="social-link">
                        <li class="twitter animated bounceIn wow delay-02s"><a href="javascript:void(0)"><i class="fa-twitter"></i></a></li>
                        <li class="facebook animated bounceIn wow delay-03s"><a href="javascript:void(0)"><i class="fa-facebook"></i></a></li>
                        <li class="pinterest animated bounceIn wow delay-04s"><a href="javascript:void(0)"><i class="fa-pinterest"></i></a></li>
                        <li class="gplus animated bounceIn wow delay-05s"><a href="javascript:void(0)"><i class="fa-google-plus"></i></a></li>
                        <li class="dribbble animated bounceIn wow delay-06s"><a href="javascript:void(0)"><i class="fa-dribbble"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-6 wow fadeInUp delay-06s">
                    <div class="form">
                        <div id="sendmessage">Chúng tôi đã nhận thông tin đăng ký. Cảm ơn!</div>
                        <div id="errormessage"></div>
                        <!--{!! Form::open(array('url' => route('server.contact.save'))) !!}-->
                        <div class="form-group">
                            <input type="text" name="name" class="form-control input-text" id="name" placeholder="Họ tên" data-rule="minlen:4" data-msg="Vui lòng nhập ho tên" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control input-text" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Vui lòng nhập đúng địa chỉ email" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control input-text" name="subject" id="subject" placeholder="Tiêu đề" data-rule="minlen:4" data-msg="Vui lòng nhập tiêu đề" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Vui lòng nhập nội dung" placeholder="Nội dung"></textarea>
                            <div class="validation"></div>
                        </div>
                        {!! Form::button('Gửi báo giá', array('type' => 'submit', 'class' => 'btn input-btn btnSave')) !!}
                        <!--{!! Form::close() !!}-->
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="container">
        <div class="footer_bottom">
            <span>© 2018 SmartVietSolution - Công ty TNHH Kỹ Thuật Số Giải Pháp Việt</span>
        </div>
    </div>
</footer>