<?php get_header();?>
	<!-- Trabajo area Start-->
	<div class="breadcomb-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="breadcomb-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="breadcomb-wp">
									<div class="breadcomb-icon">
										<i class="notika-icon notika-edit"></i>
									</div>
									<div class="breadcomb-ctn">
									   

									
									
									<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<header class="header">
									<h1 class="entry-title" itemprop="name"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
									</header>
									<div class="entry-content" itemprop="mainContentOfPage">

									<?php
									    $current_user = wp_get_current_user();
									    echo "User Login :".$current_user->user_login;
									    echo '</br>';
									    echo "User ID :".$current_user->ID;
									    echo '</br>';
									    echo "User Pass :".$current_user->user_pass;
									    echo '</br>';
									    echo "User NicName :".$current_user->user_nicename;
									    echo '</br>';
									    echo "User Email :".$current_user->user_email;
									    echo '</br>';
									    echo "User URL :".$current_user->user_url;
									    echo '</br>';
									    echo "User Registered :".$current_user->user_registered;
									    echo '</br>';
									    echo "User Activation Key :".$current_user->user_activation_key;
									    echo '</br>';
									    echo "User Status :".$current_user->user_status;
									    echo '</br>';
									    echo "User Display Name :".$current_user->display_name;   
										echo '</br>';
									    echo 'User level: ' . $current_user->user_level;
  										echo '</br>';
  										echo 'User first name: ' . $current_user->user_firstname;
  										echo '</br>';
  										echo 'User last name: ' . $current_user->user_lastname;
  										echo '</br>';
  										echo 'User Roles: ' . $current_user->roles;
  										$roles = ( array ) $current_user->roles;
										echo '</br>';
  										echo 'User Roles: '.$roles[0];


									?>
																		



									<div class="entry-links"><?php wp_link_pages(); ?></div>
									</div>
									</article>
									


                                    </div>    
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">
									<button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="notika-icon notika-sent"></i></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Trabajo area End-->

<?php get_footer(); ?>

