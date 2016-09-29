    </div><!-- /.content -->


</div><!-- /wrapper -->

<footer role="contentinfo">
  <div class="inner">



  </div><!-- /.inner -->
  <div class="foot mt10 ">
      <div class="font2 area">
        <p>Адрес :410151，Чанша, Ваньцзяливэй 35,офис 311. &nbsp;&nbsp;&nbsp;&nbsp;Тел. +86 731 84028467&nbsp;&nbsp;&nbsp;&nbsp;РКБЦ：Российско-китайский бизнес-центр</p>

        <p class="copyright">
          &copy; <?php echo date("Y"); ?> Собственность <?php bloginfo('name'); ?>.
        </p><!-- /copyright -->
      </div>
      <div id="wbs">
        <p> Разработан компанией</p>
        <a href="http://wbsite.ru/" title="WBS" target="_blank">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo_wbs.png">
        </a>
      </div>
    </div>

<!-- SOCIAL NETWORKS -->

    <div id="leftsead">

      <ul>

        <li id="tel">
          <a href="javascript:void(0)">
            <div class="hides" style="width: 161px; display: none;" id="tels">
              <div class="hides" id="p1">
                <img src="<?php echo get_template_directory_uri(); ?>/img/ll05.png">
              </div>
              <div class="hides" id="p4">
                <span style="color: #FFF; font-size: 12px">
                  <?php the_field('tel_number', 15); ?>
                </span>
              </div>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/l05.png" width="47" height="49" class="shows">
          </a>
        </li>
        <?php if( have_rows('social_net', 15) ): ?>
          <?php while ( have_rows('social_net', 15) ) : the_row(); ?>
            <li>
              <a href="<?php the_sub_field('link'); ?>" target="_blank">
                  <div class="hides" style="width: 161px; display: none;" id="mails">
                    <div class="hides soc-p1">
                      <?php $image = get_sub_field('logo_2');
                      if( !empty($image) ): ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="47" height="49">
                      <?php endif; ?>
                    </div>
                    <?php the_sub_field('text'); ?>
                  </div>
                  <?php $image = get_sub_field('logo_1');
                  if( !empty($image) ): ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="47" height="49" class="shows">
                  <?php endif; ?>
                </a>
              </li>
          <?php  endwhile;
          else : ?>
        <?php endif; ?>
      </ul>
    </div> <!-- #leftsead -->



</footer><!-- /footer -->


  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.10.2.min.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.kinMaxShow-1.0.min.js" type="text/javascript">
  </script>

  <script type="text/javascript">
      $(function() {
        $("#kinMaxShow").kinMaxShow();
      });
  </script>



  <script type="text/javascript">
  $(function() {
    $("#AreaNav li:eq(9) a").addClass("cur");
  });
  </script>

  <script type="text/javascript">
    function ShearcKey() {
      var ShearText = $.trim($("#ShearText").val());
      if (ShearText != "" && ShearText != "请输入您要搜索的关键词") {
        location.href = "IntoRussia.aspx?str=" + ShearText;
      } else {
        alert("请输入关键字！");
      }
    }
    $(document).ready(function() {
      $("#leftsead a").hover(function() {
        if ($(this).prop("className") == "youhui") {
          $(this).children("img.hides").show();
        } else {
          $(this).children("div.hides").show();
          $(this).children("img.shows").hide();
          $(this).children("div.hides").animate({
            marginRight: '0px'
          }, '0');
        }
      }, function() {
        if ($(this).prop("className") == "youhui") {
          $(this).children("img.hides").hide();
        } else {
          $(this).children("div.hides").animate({
            marginRight: '-163px'
          }, 0, function() {
            $(this).hide();
            $(this).next("img.shows").show();
          });
        }
      });
      $("#top_btn").click(function() {
        if (scroll == "off") return;
        $("html,body").animate({
          scrollTop: 0
        }, 600);
      });
      //右侧导航 - 二维码
      $(".youhui").mouseover(function() {
        $(this).children(".2wm").show();
      })
      $(".youhui").mouseout(function() {
        $(this).children(".2wm").hide();
      });
    });
  </script>

  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.jcarousellite.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.mousewheel-3.1.12.js" type="text/javascript"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      $(function() {
          $(".carousel_lite").jCarouselLite({
              btnNext: "",
              btnPrev: "",
              //circular: false,
              vertical: true,
              mouseWheel: true,
              auto: 5000,
              scroll: 1,
              visible: 4,
              speed: 400,
          });

        $(function(){
            var countLi = $('.carusel1>ul>li').size();

            if (countLi >19) {

            $(".carusel1").jCarouselLite({
                btnNext: "",
                btnPrev: "",
                //circular: false,
                vertical: true,
                mouseWheel: true,
                auto: 5000,
                scroll: 1,
                visible: 10,
                speed: 400,
            });
          }
        });

        $(function(){
            var countLi = $('.carusel2>ul>li').size();

            if (countLi >10) {

            $(".carusel2").jCarouselLite({
                btnNext: "",
                btnPrev: "",
                //circular: false,
                vertical: true,
                mouseWheel: true,
                auto: 5000,
                scroll: 1,
                visible: 10,
                speed: 400,
            });
          }
        });


        $(function(){
            var countLi = $('.carusel3>ul>li').size();

            if (countLi >10) {

            $(".carusel3").jCarouselLite({
                btnNext: "",
                btnPrev: "",
                //circular: false,
                vertical: true,
                mouseWheel: true,
                auto: 5000,
                scroll: 1,
                visible: 10,
                speed: 400,
            });
          }
        });

        $(function(){
            var countLi = $('.carusel4>ul>li').size();

            if (countLi >10) {

            $(".carusel4").jCarouselLite({
                btnNext: "",
                btnPrev: "",
                //circular: false,
                vertical: true,
                mouseWheel: true,
                auto: 5000,
                scroll: 1,
                visible: 10,
                speed: 400,
            });
          }
        });

        $(function(){
            var countLi = $('.carusel5>ul>li').size();

            if (countLi >10) {

            $(".carusel5").jCarouselLite({
                btnNext: "",
                btnPrev: "",
                //circular: false,
                vertical: true,
                mouseWheel: true,
                auto: 5000,
                scroll: 1,
                visible: 10,
                speed: 400,
            });
          }
        });

        $(function(){
            var countLi = $('.carusel6>ul>li').size();

            if (countLi >10) {

            $(".carusel6").jCarouselLite({
                btnNext: "",
                btnPrev: "",
                //circular: false,
                vertical: true,
                mouseWheel: true,
                auto: 5000,
                scroll: 1,
                visible: 10,
                speed: 400,
            });
          }
        });


      });


      $(function() {

      var tabs = $('.shop2-product-tabs li'),
        btns = tabs.find('a'),
        texts = $('.shop2-product-desc > div');

      btns.on('click', function(e) {
        var $this = $(this),
          href = $this.attr('href');

        e.preventDefault();

        tabs.removeClass('active-tab');
        $this.parent().addClass('active-tab');

        texts.removeClass('active-area');
        $(href).addClass('active-area');
      });


      });
    });

  </script>



    <?php wp_footer(); ?>

</body>
</html>

