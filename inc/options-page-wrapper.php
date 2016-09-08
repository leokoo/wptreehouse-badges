<div class="wrap">
	
	<div id="icon-options-general" class="icon32"></div>
	<h2>The Official Treehouse Badges Plugin</h2>
	
	<div id="poststuff">
	
		<div id="post-body" class="metabox-holder columns-2">
		
			<!-- main content -->
			<div id="post-body-content">
				
				<div class="meta-box-sortables ui-sortable">
					
					<div class="postbox">
					
						<h3><span>Let's Get Started!</span></h3>
						<div class="inside">
							
							<form method="post" action="">							

							<table class="form-table">
							<tbody>
								<tr valign="top">
									<th scope="row">
										<label for="treehouse_username">Treehouse username</label>
									</th>
									<td>
										<input type="text" name="wptreehouse_username" value="">
									</td>
								</tr>
							</tbody>
							</table>

								<p>
									<input type="submit" name="Submit" class="button-primary" value="Save" />										
								</p>

							</form>


						</div> <!-- .inside -->
					
					</div> <!-- .postbox -->
					
					<div class="postbox">
					
						<h3><span>Most Recent Badges</span></h3>							
						<div class="inside">
							
							<p>Below are your most 20 most recent badges.</p>
							
							<ul class="wptreehouse-badges">

								<?php for( $i = 0; $i < 20; $i++ ): ?>
								<li>
									<ul>
										<li>
											<img width="120px" src="<?php echo $plugin_url . '/images/wp-badge.png'; ?>">								
										</li>										
										<li class="wptreehouse-badges-badge-name">
											<a href="#">Badge Name</a>
										</li>
										<li class="wptreehouse-badges-project-name">
											<a href="#">Project Name</a>
										</li>
									</ul>									
								</li>								
								<?php endfor; ?>

							</ul>

						</div> <!-- .inside -->
					
					</div> <!-- .postbox -->

				</div> <!-- .meta-box-sortables .ui-sortable -->
				
			</div> <!-- post-body-content -->
			
			<!-- sidebar -->
			<div id="postbox-container-1" class="postbox-container">
				
				<div class="meta-box-sortables">
					
					<div class="postbox">
					
						<h3><span>Mike the Frog's Profile</span></h3>
						<div class="inside">
							
							<p><img width="100%" class="wptreehouse-gravatar" src="<?php echo $plugin_url . '/images/mike-the-frog.png'; ?>" alt="Mike the Frog Gravatar"></p>

							<ul class="wptreehouse-badges-and-points">							

								<li>Badges: <strong>200</strong></li>
								<li>Points: <strong>10000</strong></li>

							</ul>


						</div> <!-- .inside -->
						
						
					</div> <!-- .postbox -->
					
				</div> <!-- .meta-box-sortables -->
				
			</div> <!-- #postbox-container-1 .postbox-container -->
			
		</div> <!-- #post-body .metabox-holder .columns-2 -->
		
		<br class="clear">
	</div> <!-- #poststuff -->
	
</div> <!-- .wrap -->