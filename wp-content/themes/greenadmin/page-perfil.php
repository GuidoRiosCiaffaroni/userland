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



			<div class="row">
			<?php
				$current_user = wp_get_current_user();
  				$roles = ( array ) $current_user->roles;
			?>	
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <div class="normal-table-list">
                        <div class="basic-tb-hd">
                            <h2>Basic Table</h2>
                            <p>Basic example without any additional modification classes</p>
                        </div>
                        <div class="bsc-tbl">
                            <table class="table table-sc-ex">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>User ID :</td>
                                        <td><?php echo $current_user->ID; ?></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>User Login :</td>
                                        <td><?php echo $current_user->user_login; ?></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>User Display Name :</td>
                                        <td><?php echo $current_user->display_name; ?></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>User First Name: :</td>
                                        <td><?php echo $current_user->user_firstname; ?></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>User Last Name :</td>
                                        <td><?php echo $current_user->user_lastname; ?></td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>User NicName :</td>
                                        <td><?php echo $current_user->user_nicename ?></td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>User e-mail</td>
                                        <td><?php echo $current_user->user_email ?></td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>User URL :</td>
                                        <td><?php echo $current_user->user_url ?></td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>User Registered :</td>
                                        <td><?php echo $current_user->user_registered ?></td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>User Pass :</td>
                                        <td><?php echo $current_user->user_pass ?></td>
                                    </tr>  
                                    <tr>
                                        <td>11</td>
                                        <td>User Activation Key :</td>
                                        <td><?php echo $current_user->user_activation_key ?></td>
                                    </tr> 
                                    <tr>
                                        <td>12</td>
                                        <td>User Roles :</td>
                                        <td><?php echo $roles[0]; ?></td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>User Status :</td>
                                        <td><?php echo $current_user->user_status ?></td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>User level:</td>
                                        <td><?php echo $current_user->user_level ?></td>
                                    </tr>
                                  	<tr>
                                        <td>15</td>
                                        <td>User avatar por defecto :</td>
                                        <td><?php echo get_avatar( $current_user->ID, 64 ) ?></td>
                                    </tr>
                                  	<tr>
                                        <td>16</td>
                                        <td>User avatar original :</td>
                                        <td><?php echo get_wp_user_avatar($current_user->ID, 'original') ?></td>
                                    </tr>
                                  	<tr>
                                        <td>17</td>
                                        <td>User avatar large :</td>
                                        <td><?php echo get_wp_user_avatar($current_user->ID, 'large') ?></td>
                                    </tr>
                                    <tr>
                                        <td>18</td>
                                        <td>User avatar medium :</td>
                                        <td><?php echo get_wp_user_avatar($current_user->ID, 'medium') ?></td>
                                    </tr>
                                    <tr>
                                        <td>19</td>
                                        <td>User avatar thumbnail :</td>
                                        <td><?php echo get_wp_user_avatar($current_user->ID, 'thumbnail') ?></td>
                                    </tr>                                                         
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
















		</div>
	</div>
	<!-- Trabajo area End-->

<?php get_footer(); ?>

