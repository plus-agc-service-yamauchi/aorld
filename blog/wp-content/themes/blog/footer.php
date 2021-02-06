</div>
<p id="pageTop"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/oohashi.png" alt=""></a></p>
<footer id="footer" class="footer d-none d-md-block">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-4">
                <h4>社会福祉法人あーるど</h4>
                <p>〒037-0069 青森県五所川原市若葉3丁目4-3
                    <br>TEL/FAX <a href="tel:0173-33-0279">0173-33-0279</p>
                    </div>
                    <div class="col-4 text-center">
                        <a href="/web/aorld/contact.php"><i class="far fa-envelope fa-2x"></i></a>
                        <br> お問い合わせ
                    </div>
                    <div class="col-4 text-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/header_logo.png" alt="" class="w-50">
                        <br>
                        <small>Copyright&copy;2014 Aorld Inc. All rights reserved.</small>
                    </div>
                </div>
            </footer>
            <!-- /footer -->
            <footer id="footer" class="d-block d-md-none">
                <div class="row text-center">
                    <div class="col-12">
                        <h4>社会福祉法人あーるど</h4>
                        <p>〒037-0069 青森県五所川原市若葉3丁目4-3
                            <br>TEL/FAX <a href="tel:0173-33-0279" class="text-white">0173-33-0279</a></p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mt-4"><a href="http://aorld.jp/sp/participants.html#contact" class="text-white"><i class="far fa-envelope fa-2x"></i>
                                <br>お問い合わせ</a></p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mt-4"><img src="<?php bloginfo('template_directory'); ?>/img/header_logo.png" alt="" class="w-25">
                                    <br><small>Copyright&copy;2014 Aorld Inc. All rights reserved.</small></p>
                                </div>
                            </div>
                        </footer>
                        <!-- ./footer -->
                        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
                        <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
                        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
                        <script>

                            $(function(){
                                var topBtn=$('#pageTop');
                                topBtn.hide();


                                $(window).scroll(function(){
                                  if($(this).scrollTop()>80){


                                    topBtn.fadeIn();

                                }else{


                                    topBtn.fadeOut();

                                } 
                            });

                                topBtn.click(function(){
                                  $('body,html').animate({
                                      scrollTop: 0},500);
                                  return false;

                              });


                            });


                        </script>
                    </body>

                    </html>