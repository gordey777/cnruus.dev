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
    </div>


    <div id="leftsead">
      <ul>
        <li>
          <a href="javascript:void(0)" class="youhui">
            <img src="<?php echo get_template_directory_uri(); ?>/img/l02.png" width="47" height="49" class="shows">
            <img src="<?php echo get_template_directory_uri(); ?>/img/a.png" width="57" height="49" class="hides">
            <img src="<?php echo get_template_directory_uri(); ?>/img/weixin.jpg" width="145" class="2wm" style="display: none; margin: -100px 57px 0 0">
          </a>
        </li>
        <li>
          <a href="http://wpa.qq.com/msgrd?v=3&amp;uin=282794290&amp;site=qq&amp;menu=yes" target="_blank">
            <div class="hides" style="width: 161px; display: none;" id="qq">
              <div class="hides" id="p1">
                <img src="<?php echo get_template_directory_uri(); ?>/img/ll04.png">
              </div>
              <div class="hides" id="p2">
                <span style="color: #FFF; font-size: 13px">282794290</span>
              </div>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/l04.png" width="47" height="49" class="shows">
          </a>
        </li>
        <li id="tel">
          <a href="javascript:void(0)">
            <div class="hides" style="width: 161px; display: none;" id="tels">
              <div class="hides" id="p1">
                <img src="<?php echo get_template_directory_uri(); ?>/img/ll05.png">
              </div>
              <div class="hides" id="p4">
                <span style="color: #FFF; font-size: 12px">+86 15388055177</span>
              </div>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/l05.png" width="47" height="49" class="shows">
          </a>
        </li>
        <li id="mail">
          <a href="javascript:void(0)">
            <div class="hides" style="width: 161px; display: none;" id="mails">
              <div class="hides" id="p1">
                <img src="<?php echo get_template_directory_uri(); ?>/img/ll07.png" width="47" height="49">
              </div>
              <div class="hides" id="p3">
                <span style="color: #FFF; font-size: 12px">hunanrussia@163.com</span>
              </div>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/l07.png" width="47" height="49" class="shows">
          </a>
        </li>
        <li id="mail">
          <a href="https://vk.com/cnruss" target="_blank">
            <div class="hides" style="width: 161px; display: none;" id="mails">
              <div class="hides" id="p1">
                <img src="<?php echo get_template_directory_uri(); ?>/img/1109.png" width="47" height="49">
              </div>
              <div class="hides" id="p3" style=" background:#4f6f95;border-color:#4f6f95;">
                <span style="color: #FFF; font-size: 12px">ВКонтакте</span>
              </div>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/109.png" width="47" height="49" class="shows">
          </a>
        </li>
        <li id="btn">
          <a id="top_btn">
            <div class="hides" style="width: 161px; display: none">
              <img src="<?php echo get_template_directory_uri(); ?>/img/ll08.png" width="161" height="49">
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/l08.png" width="47" height="49" class="shows">
          </a>
        </li>
      </ul>
    </div>



</footer><!-- /footer -->


<!--     <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.10.2.min.js" type="text/javascript"> -->

    </script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.kinMaxShow-1.0.min.js" type="text/javascript">
    </script>
    <script type="text/javascript">
      $(function() {
        $("#kinMaxShow").kinMaxShow();
      });
    </script>

<!--     <script>
  var speed = 50
  demo2.innerHTML = demo1.innerHTML

  function Marquee() {
    if (demo2.offsetTop - demo.scrollTop <= 0)
      demo.scrollTop -= demo1.offsetHeight
    else {
      demo.scrollTop++
    }
  }
  var MyMar = setInterval(Marquee, speed)
  demo.onmouseover = function() {
    clearInterval(MyMar)
  }
  demo.onmouseout = function() {
    MyMar = setInterval(Marquee, speed)
  }
</script> -->
<!--     <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.litenav.js" type="text/javascript">
</script>
    <script type="text/javascript">
      $('#hotpic').liteNav(1000);
    </script>-->
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


    <?php wp_footer(); ?>

</body>
</html>
