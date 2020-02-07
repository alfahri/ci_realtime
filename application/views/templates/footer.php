<footer class="footer" style="margin-top: 50px;" data-aos="fade-up">
    <div class="container">
        <div class="row">
            <div class="col-md-3" data-aos="fade-right">
                <h3 class="text-dark"><i class="icon-phone"></i> Contact Us</h3>
                <p>Bintaro.
                    (+62)812345678.</p>
            </div>
            <div class="col-md-3" data-aos="fade-right">
                <h3 class="text-dark"><i class="icon-building"></i> About Us</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamc. </p>
            </div>

            <div class="col-md-3 ml-auto" data-aos="fade-left">
                <h3 class="text-dark"><i class="icon-payment"></i> Payment</h3>
                <ul class="list-unstyled footer-links">
                    <li><a href="#"> BCA</a></li>
                    <li><a href="#"> BRI</a></li>
                    <li><a href="#"> Mandiri</a></li>
                    <li><a href="#"> BNI</a></li>
                </ul>
            </div>

            <div class="col-md-3" data-aos="fade-left">
                <h3 class="text-dark"><i class="icon-play"></i> Download Playstore</h3>
                <p><i class="icon-playstore"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et
                </p>

            </div>

        </div>
        <div class="col-md-12 text-center" data-aos="fade-up">
            <div class=" pt-5">
                <p class="copyright">

                    Copyright &copy; 2019 All rights reserved
                </p>
            </div>
        </div>

    </div>
    </div>
</footer>
<script src="<?= base_url('assets/'); ?>js/jquery-3.3.1.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/jquery-migrate-3.0.1.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/jquery-ui.js"></script>
<script src="<?= base_url('assets/'); ?>js/popper.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/owl.carousel.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/jquery.stellar.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/jquery.countdown.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/bootstrap-datepicker.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/jquery.easing.1.3.js"></script>
<script src="<?= base_url('assets/'); ?>js/aos.js"></script>
<script src="<?= base_url('assets/'); ?>js/jquery.fancybox.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/jquery.sticky.js"></script>
<script src="<?= base_url('assets/'); ?>js/jquery.mb.YTPlayer.min.js"></script>



<script src="https://kit.fontawesome.com/405cc35206.js" crossorigin="anonymous"></script>
<script src="<?= base_url('assets/'); ?>js/main.js"></script>

<script type="text/javascript">
    $('#formEdit').show();
    $('#detailData').hide();
    $('#masuk').click(function() {
        $('#loginModal').modal('show');
    })
    $('#daftar').click(function() {
        $('#daftarModal').modal('show');
    })
    $('#keluar').click(function() {
        $.ajax({
            url:'<?php echo base_url() ?>home/logout',
            dataType: 'json',
            type : 'post',
            // data : data,
            success : function(e)
            {
              location.href="";
            },
            error: function(e)
            {}
        })
    })
    $('#btnLogin').click(function() {
        data = $('#formLogin').serialize();
        $.ajax({
            url:'<?php echo base_url() ?>/home/login',
            dataType: 'json',
            type : 'post',
            data : data,
            success : function(e){
                location.href="";
            },
            error : function(e){
                // alert(e);
            }
        })
    })
    $('#btnUp').click(function(e) {
      console.log(e);
      data = $('#id_hewan').value();
        $.ajax({
            url:'<?php echo base_url() ?>/lelang/up',
            dataType:'json',
            type:'post',
            data : data,
            success : function(e)
            {
                alert('Anda telah berhasil menyimpan lelang ini');
            },
            error : function(e)
            {
                alert('Anda gagal menyimpan lelang ini');
            }
        })
    })
    $('#showAllBerlangsung').click(function() {
        window.location.href="home/list";
    })
    $('#btnCreateLelang').click(function(e) {
        // $('#detailData').toggle();
        // $('#formEdit').toggle();
        e.preventDefault();
        data = $('#formCreateLelang').serialize();
        $.ajax({
            url: '<?php echo base_url() ?>home/upload',
            data : data,
            type : 'post',
            dataType : 'json',
            success : function(res){
                if(res['status'] == 500)
                {
                    alert('Gagal menambah hewan');
                }
                else
                {
                    alert('Berhasil menambah hewan');
                }
            },
            error : function(e)
            {
                
            }
        })
    })
    $('#btnDaftar').click(function(e) {
      $.ajax({
        url:'<?php echo base_url() ?>/home/daftar',
        type : 'post',
        dataType: 'json',
        data : data,
        success: function(e)
        {},
        error: function(e)
        {}
      })
    })
</script>

</body>

</html>