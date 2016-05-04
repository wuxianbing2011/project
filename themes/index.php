<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package chuangye
 */

get_header(); ?>

	<!-- 下一页 -->
	<div class="b_a">
		<a href=""><img src="<?php bloginfo('template_directory'); ?>/images/a.png" alt=""></a>
	</div>
	<!--  -->
	<div id="fullpage">

		<!-- ******第一屏***** -->
		<div class="section " id="section0">
			<a href="<?php bloginfo('template_directory'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="" class="b_p1_png"></a>
			<div class="b_p1_d">
				<img src="<?php bloginfo('template_directory'); ?>/images/p1_g2.png" alt="">
				<ul class="clearfix">
					<?php print_r (get_pages()[2]->post_content);?>
				</ul>
			</div>
		</div>
		<!-- ******第二屏***** -->
		<div class="section " id="section1">
			<a href="index.html"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="" class="b_p1_png"></a>
			<div class="b_p2_d">
				<ul>
				
					<?php 
					
					for ($i = 0; $i < count(get_posts()); $i++){
						$j = $i + 1;
						//判断是否为第一个
						if($i == 1){
							echo "<li class=\"b_p2_li$j b_p2_li_checked\">";
						}else {
							echo "<li class=\"b_p2_li$j\">";
						}
						
						echo '<div class="b_p2_li_tit">';
						
						// title
						echo '<h2>';
						if(get_post_field('title',get_posts()[$i]->ID))
						{
							echo get_post_field('title',get_posts()[$i]->ID);
						}
						echo '</h2>';
						
						//thumb
						echo '<img src="';
						if(get_field('thumb',get_posts()[$i]->ID))
						{
							echo get_field('thumb',get_posts()[$i]->ID);
						}
						echo '" alt="这里是缩略图 ">';
						
						//description
						echo '<p class="b_p2_jiejian">';
						if(get_field('description',get_posts()[$i]->ID))
						{
							echo get_field('description',get_posts()[$i]->ID);
						}
						echo '</p>';
						
						//阅读全文
						echo '<div class="b_p2_li_link">阅读全文</div>';
						
						echo '</div>';
						
						// li 结束
						echo "</li>";
					}
					
					?>
				
				</ul>
				
			</div>

		</div>
		<!-- ******第三屏***** -->
		<div class="section " id="section2">
			<div class="b_p3_d">
					<?php print_r (get_pages()[0]->post_content);?>
				</div>
			</div>
			<!-- ******第四屏***** -->
			<div class="section " id="section3"> 
				<div class="b_p4_d">
					<?php print_r (get_pages()[1]->post_content);?>
				</div>
			</div>
		</div>
		<!-- *******第二屏内容********* -->
		<div id="p2_fixed">
			<a href="#"><i class="iconfont b_p2_li_icon">&#xe620;</i></a>
			<ul>
				<?php 
				
				for ($i = 0; $i < count(get_posts()); $i++){
					echo '<li><div class="b_p2_li_content">';
					
					//h2 title
					echo '<h2>';
					if(get_post_field('title',get_posts()[$i]->ID))
					{
						echo get_post_field('title',get_posts()[$i]->ID);
					}
					echo '</h2>';
						
					//content
					echo '<div class="b_p2_li_content">';
					if(get_posts()[$i]->post_content)
					{
						echo print_r (get_posts()[$i]->post_content);
					}
					echo '</div>';
					
					echo '</div></li>';
				}
				
				?>
				<!-- *****重复故事结束***** -->
			</ul>
		</div>
		


		<!-- ********fullpage分屏******* -->
		<script>
			$('#fullpage').fullpage({
				'verticalCentered': false,
				'css3': true,
				anchors: ['page1', 'page2', 'page3', 'page4'],
				'navigation': true,
				'navigationPosition': 'right',
				'navigationColor':'#333',
				afterLoad:function  (anchorLink ,index ) {
			 	// p1点击切换故事
			 	index=index>=4?0:index;
			 	$('.b_a a').attr('href','#page'+(index+1));
			 	// 导航滚动颜色
			 	if (!$('#p2_fixed').hasClass('b_p2_li_content_show')) {
			 		$('.b_nav ul li').eq(index-1).addClass('b_nav_checked').siblings().removeClass('b_nav_checked');
			 	}
			 	else{
			 		$('#fullpage').css({'transform':'translate3d(0px, -640px, 0px)'});
			 	}

			 	// 导航2跳转
			 	$('.b_p1_d ul li a,.b_nav .b_nav_2 div p a,#p2_fixed >a').attr('href','#page'+2);
			 	$('.b_nav ul li').each(function(){
			 		
			 		$(this).find('a').attr('href','#page'+($(this).index()+1));
			 		
			 		
			 	})

			 	$('.b_p1_d ul li,.b_nav .b_nav_2 div p').click(function(){
			 		$('.b_nav .b_nav_2 div p').eq($(this).index()).addClass('b_nav2_checked').siblings().removeClass('b_nav2_checked');
			 		$('.b_p2_d ul li').eq($(this).index()).addClass('b_p2_li_checked').siblings().removeClass('b_p2_li_checked');


			 	})

			 	// 判断故事菜单是否当前页
			 	if (index!=2) {
			 		$('.b_nav_2 div').slideUp();
			 	}
			 	

			 	
			 }



			})
		</script>

	</body>
	</html>