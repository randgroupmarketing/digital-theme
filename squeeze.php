<?php
/**
 * Template Name: Squeeze
 */
?>
<style>
/* This should be moved to a theme CSS file. */
.page-header { display:none; }
.navbar-inner-2 { display:none; }
.download-info-heading { padding-top: 25px; }
#menu-top { display:none; }
.banner {display:none;} 
/* change this later */
   .banner {    background-color: #00263D;
    min-height: 150px;
    margin-bottom: 150px; }
/* end change this later */

.top-nav {
display:none;
}

.primary-nav {
	display:none;	
}

body {
	margin-top:0;	
}


</style>


<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
 

  	
  	<div class="container">
		<form class="" action="https://go.pardot.com/l/20752/2016-12-28/52888k" method="post">
			<div class="arrow_line_solo"></div>			
			<!-- How Are You Generating Sales Today? --> 
			<div class="row ">			
				<div class="col-md-12" style="text-align: center;">
					<h4>How are you generating sales today?</h4>
					Select all that apply:
				</div>	
			</div>			
			<div class="row form-group-container">
				<div class="col-md-4 offset-md-3 col-xs-6  custom-controls-stacked">
					<label class="custom-control custom-checkbox">
						<input name="gs_how_are_you_generating_sales[]" type="checkbox" value="Tradeshows" class="custom-control-input">
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Tradeshows</span>
					</label>						
					<label class="custom-control custom-checkbox">
						<input name="gs_how_are_you_generating_sales[]" type="checkbox" value="Newspaper_Ads" class="custom-control-input">
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Newspaper Ads</span>
					</label>
					<label class="custom-control custom-checkbox">
						<input name="gs_how_are_you_generating_sales[]" type="checkbox" value="TV" class="custom-control-input">
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">TV</span>
					</label>					
					<label class="custom-control custom-checkbox">
						<input name="gs_how_are_you_generating_sales[]" type="checkbox" value="Email_Marketing" class="custom-control-input">
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Email Marketing</span>
					</label>	
				</div>
				
				<div class="col-md-5 col-xs-6  custom-controls-stacked">
					<label class="custom-control custom-checkbox">
						<input name="gs_how_are_you_generating_sales[]" type="checkbox" value="Cold_Calling" class="custom-control-input">
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Cold Calling</span>
					</label>	
					<label class="custom-control custom-checkbox">
						<input name="gs_how_are_you_generating_sales[]" type="checkbox" value="Radio" class="custom-control-input">
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Radio</span>
					</label>									
					<label class="custom-control custom-checkbox">
						<input name="gs_how_are_you_generating_sales[]" type="checkbox" value="Search_Engine_Marketing" class="custom-control-input">
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Search Engine Marketing</span>
					</label>						
					<label class="custom-control custom-checkbox">
						<input name="gs_how_are_you_generating_sales[]" type="checkbox" value="Other" class="custom-control-input">
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Other</span>
					</label>	
				</div>
			</div>			
			<!-- /How Are You Generating Sales Today? --> 		
			<div class="arrow_line"></div>					
			<!-- Why are you evaluating marketing agencies today? --> 
			<div class="row ">
				<div class="col-md-12"  style="text-align: center;padding-top:25px;">
					<h4>Why are you evaluating marketing agencies today?</h4>
					Select all that apply:
				</div>
			</div>	
			<div class="row form-group-container">				
				<div class="col-md-6 offset-md-5 col-xs-9 offset-xs-3 custom-controls-stacked">
					<label class="custom-control custom-checkbox">
						<input name="gs_evaluate_marketing_agencies[]" type="checkbox" value="I_need_more_sales" class="custom-control-input">
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">I need more sales</span>
					</label>
					<label class="custom-control custom-checkbox">
						<input name="gs_evaluate_marketing_agencies[]" type="checkbox" value="I_need_more_leads" class="custom-control-input">
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">I need more leads</span>
					</label>						
					<label class="custom-control custom-checkbox">
						<input name="gs_evaluate_marketing_agencies[]" type="checkbox" value="I_need_a_new_website" class="custom-control-input">
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">I need a new website </span>
					</label>
					<label class="custom-control custom-checkbox">
						<input name="gs_evaluate_marketing_agencies[]" type="checkbox" value="Other" class="custom-control-input">
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Other</span>
					</label>	
				</div>
			</div>
			<!-- /Why are you evaluating marketing agencies today? --> 	
			<div class="arrow_line"></div>				
			<!-- What is your monthly advertising budget? --> 
			<div class="row">
				<div class="col-md-12 col-md-auto"  style="text-align: center;padding-top:25px;">
					<h4>Why are you evaluating marketing agencies today?</h4>
				</div>
			</div>	
			<div class="row form-group-container">				
				<div class="col-md-6 offset-md-5 col-xs-9 offset-xs-3 custom-controls-stacked">
					<label class="custom-control custom-radio">
						<input name="gs_what_is_your_budget" type="radio" value="2K_10K" class="custom-control-input">
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">2K - 10K</span>
					</label>
					<label class="custom-control custom-radio">
						<input name="gs_what_is_your_budget" type="radio" value="10K_250K" class="custom-control-input">
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">10K - 250K</span>
					</label>						
					<label class="custom-control custom-radio">
						<input name="gs_what_is_your_budget" type="radio" value="250K_1M" class="custom-control-input">
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">250K - 1M </span>
					</label>
					<label class="custom-control custom-radio">
						<input name="gs_what_is_your_budget" type="radio" value="1M_" class="custom-control-input">
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">1M+</span>
					</label>	
				</div>
			</div>
			<!-- /What is your monthly advertising budget? --> 	
			<div class="arrow_line"></div>				
			<!-- How many employees? --> 
			<div class="row">
				<div class="col-md-12 col-md-auto"  style="text-align: center;padding-top:25px;">
					<h4>How many employees?</h4>
				</div>
			</div>	
			<div class="row form-group-container">				
				<div class="col-md-6 offset-md-5 col-xs-9 offset-xs-3 custom-controls-stacked">
					<label class="custom-control custom-radio">
						<input name="gs_how_many_employees" type="radio" value="1_50" class="custom-control-input">
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">1 - 50</span>
					</label>
					<label class="custom-control custom-radio">
						<input name="gs_how_many_employees" type="radio" value="51_250" class="custom-control-input">
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">51 - 250</span>
					</label>						
					<label class="custom-control custom-radio">
						<input name="gs_how_many_employees" type="radio" value="251_1000" class="custom-control-input">
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">251 - 1,000</span>
					</label>
					<label class="custom-control custom-radio">
						<input name="gs_how_many_employees" type="radio" value="1000" class="custom-control-input">
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">1,000</span>
					</label>	
				</div>
			</div>
			<!-- /How many employees? --> 
			<div class="arrow_line"></div>				
			<!-- Additional Information --> 

			<div class="row">
				<div class="col-md-12"  style="text-align: center;padding-top:25px;">
					<h4>Additional Information</h4>
				</div>
			</div>
			<div class="row form-group">
				<div class="col-sm-2">
					<label for="firstname">First Name</label>
				</div>	
				<div class="col-sm-4">
					<input type="text" name="firstname" required="" class="form-control">
				</div>
				<div class="col-sm-2">
					<label for="job_title">Job Title</label>
				</div>				
				<div class="col-sm-4">
					<select style="width: 100%; max-width: 359px;" name="job_title">
						<option value=""></option>
						<option value="385106">President</option>
						<option value="385108">Vice-President</option>
						<option value="385110">Partner</option>
						<option value="385112">Principal</option>
						<option value="385114">Owner</option>
						<option value="385116">Board of Directors</option>
						<option value="385118">CEO - Chief Executive Officer</option>
						<option value="385120">CFO - Chief Financial Officer</option>
						<option value="385122">COO - Chief Operating Officer</option>
						<option value="385124">CMO - Chief Marketing Officer</option>
						<option value="385126">CTO - Chief Technology Officer</option>
						<option value="385128">CAO - Chief Administrative Officer</option>
						<option value="385130">CBO - Chief Business Officer</option>
						<option value="385132">CIO - Chief Information Officer</option>
						<option value="385134">Chief Accounting Officer</option>
						<option value="385136">Chief Analytics Officer</option>
						<option value="385138">CPA - Certified Public Accountant</option>
						<option value="385140">Consultant</option>
						<option value="385142">Director</option>
						<option value="385144">Director Marketing</option>
						<option value="385146">Director Sales</option>
						<option value="385148">Director Business Development</option>
						<option value="385150">Director Information Technology</option>
						<option value="385152">Director Human Resources</option>
						<option value="385154">Controller</option>
						<option value="385156">Accountant / Accounting</option>
						<option value="385158">Accounts Payable</option>
						<option value="385160">Estimator</option>
						<option value="385162">Manager</option>
						<option value="385164">IT Manager</option>
						<option value="385166">Accounting Manager</option>
						<option value="385168">Project Manager</option>
						<option value="385170">General Manager</option>
						<option value="385172">Sales Manager</option>
						<option value="385174">Account Manager</option>
						<option value="385176">Program Manager</option>
						<option value="385178">Operations Manager</option>
						<option value="385180">Secretary</option>
						<option value="385182">Executive Assistant</option>
						<option value="385184">Receptionist</option>
						<option value="385186">Other</option>
					</select>
				</div>
			</div> 	    			
			<div class="row form-group">
				<div class="col-sm-2">
					<label for="lastname">Last Name</label>
				</div>	
				<div class="col-sm-4">
					<input type="text" name="lastname" required=""  class="form-control">
				</div>
				<div class="col-sm-2">
					<label for="business_email">Business Email</label>
				</div>				
				<div class="col-sm-4">
					<input type="text" name="business_email" required="" class="form-control" >
				</div>
			</div> 
			<div class="row form-group">
				<div class="col-sm-2">
					<label for="company">Company Name</label>
				</div>	
				<div class="col-sm-4">
					<input type="text" name="company" required="" class="form-control">
				</div>
				<div class="col-sm-2">
					<label for="telephone_number">Phone Number</label>
				</div>				
				<div class="col-sm-4">
					<input type="text" name="telephone_number" required="" class="form-control" >
				</div>
			</div> 			
			<div class="row form-group">
				<div class="col-sm-12">
					<label>Additional Comments</label>
				</div>	
				<div class="col-sm-12">
					<textarea  name="comments" required="" rows="4" wrap="soft" class="form-control"></textarea>
				</div>
			</div> 
			<!-- /Additional Information --> 
			<div class="row form-group">
				<div class="col-sm-12">
					<button type="submit" class="btn btn-primary pull-right">Submit</button>
				</div>
			</div>							
		</form>
  	</div>		


<?php endwhile; ?>




