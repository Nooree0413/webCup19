<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN">
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />  
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Student Job Portal</title>
<meta name="description" content="Mauritiusjobs is the no1 job portal in Mauritius where jobseekers can search for vacancies/jobs in Mauritius or abroad posted by registered employers.">

<link media="all" rel="stylesheet" type="text/css" href="css/reset.css"/>
<link media="all" rel="stylesheet" type="text/css" href="css/page1d75.css?1548684256"/>
<link media="all" rel="stylesheet" type="text/css" href="css/menu1d75.css?1548684256"/>
<script src="../code.jquery.com/jquery-1.9.1.js"></script>
<script src="../code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script type="text/javascript" src="js/menu.js"></script>
<script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','../www.google-analytics.com/analytics.js','ga');ga('create','UA-50481647-1','');ga('send','pageview');</script>
<!-- <script language="JavaScript" type="text/javascript">if(navigator.appName=='Microsoft Internet Explorer'){function NOclickIE(e){if(event.button==2||event.button==3){return false;}return true;}document.onmousedown=NOclickIE;document.onmouseup=NOclickIE;window.onmousedown=NOclickIE;window.onmouseup=NOclickIE;} -->
</head>
<body>
<div id="header">
		<div id="banner">
			<<!-- img src="images/mauritius_flag.gif" id="mauritius_flag">
			<img src="images/govt.png">
			<img src="images/jobs_logo.png" id="jobs_logo"> -->
			<br>PLACEMENTS/JOBS IN MAURITIUS BY INDUSTRY SECTOR  
		</div>
	<div class="menu">
		<nav id="topNav">
			<ul>
				<li class="first"><a href="index.php" title="Home">Home</a></li>
				<li><a href="about/iom.html" title="About Us">About Us</a>
					  
				</li>
				
				<li>					<a href="jobseeker.php" title="Jobseeker">Jobseeker</a>
									        
				</li>
				<li>
									<a href="employer.html" title="Employer">Employer</a>
													</li>
				<li><a href="jobsearch.html" title="Jobs Search">Jobs Search</a></li>
				<li class="last"><a href="contact.html" title="Contact us ">Contact Us</a></li>
			</ul>
		</nav>
	</div>
</div>
<header>
	<link rel="stylesheet" href="../code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css"/>
	<script>$(document).ready(function(){$(this).scrollTop(0);$(".bxslider").find("img").load(function(){$(".bxslider").find("li").find("img").show();});});$(function(){$('#login').click(function(){$('#sidebar-login-box').show();$('#register-form').hide();});});$(function(){$('#register').click(function(){$('#register-form').show();$('#sidebar-login-box').hide();});});function jobdetails(val){$("#"+val).slideToggle();}
$(function(){$('.show_vote_form').click(function(){$('#site_poll').show();$('.vote_result').hide();});});$(function(){$('.show_vote_result').click(function(){$('.vote_result').show();$('#site_poll').hide();});});function vote_now(){var answer=$('input[name=vote_result]:checked').val();$.ajax({type:"POST",url:"vote_now",data:"answer="+answer,success:function(msg){document.getElementById("vote_status").innerHTML=msg;}});return false;}</script>
	<script>$(function(){var page=1;var pages=$("#pages").val();$(".load_more").click(function(){$('#loading_spinner').show();setTimeout(function(){$("#loading_spinner").hide();},750);var next=page+=1;$.get("?page="+next,function(data){if(next==pages){$(".load_more").remove();}
var res=data.replace("<head/>","");$(".latest-job").append(res);});});$('.latest-job tr').hover(function(){},function(){});});function applyjob(val){$(this).scrollTop(0);$('#popup').show();$('#popup_content').show();$.ajax({type:"POST",url:"studentjobportal/jobseeker/apply_for_job",data:"jobid="+val,success:function(msg){document.getElementById("popup_content").innerHTML=msg;}});}
function close_popup(){$('#popup').hide();$('#popup_content').hide();return false;}
function confirm_application(val){var let=$("#cover_letter").val();$.ajax({type:"POST",url:"studentjobportal/jobseeker/job_application",data:"job="+val+"&letter="+let,success:function(msg){if(msg=="applied"){window.location.href="index8b86.html?job=applied";}
else
{window.location.href="index7a18.html?job=error";}}});}</script>
</header>


<script src="../ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<link href="css/slidder.css" rel="stylesheet" type="text/css"/>
<script src="js/slidder.js" type="text/javascript"></script>

<div class="homepage_slidder">
	<div class="loading_slidder">
	</div>
	<ul class="bxslider">
		<li><img src="images/dreamJob.jpg"></li>
		<li><img src="images/banner2.jpg"></li>
		<li><img src="images/job2.jpg"></li>
		<li><img src="images/jobs1.jpg"></li>
		<li><img src="images/uploadResume.jpg"></li>
	</ul>
</div>

<div id="main-search">
	<form action="studentjobportal/jobsearch" name="search_job" method="post" accept-charset="utf-8">		<table>
		<tr>
		<td><h1>SEARCH FOR A <span class="green">JOB</span></h1></td>
		<td></td>
		<td><h2><i>More Than <span class="green">560</span> Jobs Available</i></h2></td>
		</tr>
		<tr>
		<td><h2>Keyword</h2></td><td><h2>Economic Sector</h2></td>
		</tr>
		<tr>
		<td><input type="text" class="search-box" name="search_by_keyword" placeholder="JOB TITLE/SKILLS" title="Enter Job Title/Skills" autofocus></td>
		<td>
			<select name="search_by_sector" class="select-box-search" title="Choose any Sector">
				<option value="">Please Choose a Sector</option>
								<option value="1">Administration</option>
								<option value="2">Advertising</option>
								<option value="3">Agriculture</option>
								<option value="39">Banking</option>
								<option value="4">Cleaning Services</option>
								<option value="5">Construction</option>
								<option value="6">Education</option>
								<option value="7">Electricity,Gas & Water supply</option>
								<option value="32">Events, Media and Communication</option>
								<option value="8">Financial Intermediation</option>
								<option value="38">Fisheries</option>
								<option value="31">Global Finance</option>
								<option value="9">Health and Medical</option>
								<option value="10">Hotel & Restaurant</option>
								<option value="11">ICT/BPO</option>
								<option value="35">Legal Services</option>
								<option value="12">Maintenance & Repairs</option>
								<option value="40">Manufacturing - Fibre Glass Products</option>
								<option value="13">Manufacturing - Food Products & Beverages</option>
								<option value="20">Manufacturing -Others</option>
								<option value="19">Manufacturing-Electronics & Electrical Products</option>
								<option value="16">Manufacturing-Furniture</option>
								<option value="17">Manufacturing-Jewellery</option>
								<option value="15">Manufacturing-Leather products</option>
								<option value="18">Manufacturing-Metal products</option>
								<option value="14">Manufacturing-Textiles &Wearing Apparel</option>
								<option value="33">Other services</option>
								<option value="22">Printing</option>
								<option value="23">Private Household</option>
								<option value="24">Real Estate</option>
								<option value="25">Sea Food Hub</option>
								<option value="26">Security services</option>
								<option value="27">Social Service</option>
								<option value="36">Telecommunications</option>
								<option value="37">Tourism</option>
								<option value="28">Trade</option>
								<option value="29">Transport, Storage and Communications</option>
								<option value="30">Travel & Tours</option>
								<option value="21">Wellness & Beauty Care</option>
							</select>
		</td>
		<td><input type="submit" value="Job Search" class="search-btn" title="Job Search"></td>
		</tr>
		<tr>
		
		<td><img src="images/local.png" class="map"><span class="show-local">Show local jobs only</span> <input type="checkbox" name="search_by_local" value="1"></td>
		<td height="50"><img src="images/world.png" class="map"><span class="show-international">Show International Jobs Only</span> <input type="checkbox" name="search_by_international" value="1"></td>
		
		<td><a href="jobsearch.html" title="Advance Job Search"><b>ADVANCED SEARCH +</b></a></td>
		</tr>
		</table>
		</form>	</div><div class="search-optimise">... promoting and sustaining decent work</div><div class="content">
	<h1>LATEST JOBS</h1>
	<hr id="latest-job-hr">
		<table class="latest-job">
	<tr class="header">
		<th class="first" width="25">#</th>
		<th width="150">Job title</th>
		<th width="150">Economic sector</th>
		<th width="100">Employer</th>
		<th width="75" id="country">Country</th>
		<th width="100">Closing Date</th>
		<th width="20" class="last" title="Job Details">+</th>
	</tr>
		
	<tr onclick="jobdetails('15493')" class="alternate-row">
		<td class="infos">1</td>
		<td>Assistant Accountant</td>
		<td class="infos">Other services</td>
		<td>GLASSLAM(MAURITIUS)LTD</td>
		<td class="infos" id="country">Mauritius</td>
		<td>08.02.2019</td>
		<td class="infos"><img src="images/icon_view.png" title="Show Job Details"></td>
	</tr>

	<tr class="hidden"><td colspan="7" class="hidden-td">
		<div class="show_details" id="15493">
		<b>Assistant Accountant</b>
			<table class="job_details" width="100%">
			<tr>
				<td width="300">Employer</td>
				<td>GLASSLAM(MAURITIUS)LTD</td>
			</tr>
			<tr>
				<td>Economic Sector</td>
				<td>Other services</td>
			</tr>
						<tr>
				<td>District in Mauritius</td>
				<td>PORT LOUIS</td>
			</tr>
						<tr>
				<td>State / Province</td>
				<td>mauritius</td>
			</tr>
						<tr>
				
			</tr>

						<tr>
				<td>Job Summary</td>
				<td><p>ACCOUNTING ENTRIES QUICK BOOK, RETURN ON MNS</p></td>
			</tr>
			
			<tr>
				<td>Duties of Job</td>
				<td><p>ACCOUNTING ENTRIES QUICK BOOK, RETURN ON MNS</p></td>
			</tr>
			
			
						<tr>
				<td>Qualifications Required</td>
				<td>ACCA/ICMA/ACA/ICAEW/CPA</td>
			</tr>
						<tr>
				<td>Experience Required</td>
				<td>1 year</td>
			</tr>
									<tr>
							<td>Age Range</td>
							<td>18 - 35							</td>
						</tr>
									<tr>
				<td>Salary Proposed</td>
				<td>10001 - 20000				 (Mauritian Rupees)				</td>
			</tr>
						<tr>
				<td>
											<input type="button" value="Login to Apply for this Job" onclick="window.location.href='authenticate.html'" class="authenticate-btn">
											
						
						
						
						
										</td>
				<td><a onclick="jobdetails('15493')" title="Close Job Details">Close <img src="images/close.png" width="25"></a></td>
			</tr>
			</table>
		</div>
	</td></tr>
		
	<tr onclick="jobdetails('15492')" class="row">
		<td class="infos">2</td>
		<td>Accounts clerk</td>
		<td class="infos">Other services</td>
		<td>GLASSLAM(MAURITIUS)LTD</td>
		<td class="infos" id="country">Mauritius</td>
		<td>08.02.2019</td>
		<td class="infos"><img src="images/icon_view.png" title="Show Job Details"></td>
	</tr>

	<tr class="hidden"><td colspan="7" class="hidden-td">
		<div class="show_details" id="15492">
		<b>Accounts clerk</b>
			<table class="job_details" width="100%">
			<tr>
				<td width="300">Employer</td>
				<td>GLASSLAM(MAURITIUS)LTD</td>
			</tr>
			<tr>
				<td>Economic Sector</td>
				<td>Other services</td>
			</tr>
						<tr>
				<td>District in Mauritius</td>
				<td>PORT LOUIS</td>
			</tr>
						<tr>
				<td>State / Province</td>
				<td>mauritius</td>
			</tr>
						<tr>
				
			</tr>

						<tr>
				<td>Job Summary</td>
				<td><p>ACCOUNTING ENTRIES QUICK BOOKS</p></td>
			</tr>
			
			<tr>
				<td>Duties of Job</td>
				<td><p>ACCOUNTING ENTRIES QUICK BOOK</p></td>
			</tr>
			
			
						<tr>
				<td>Qualifications Required</td>
				<td>HSC-GCE A L - IB</td>
			</tr>
						<tr>
				<td>Experience Required</td>
				<td>1 year</td>
			</tr>
						<tr>
				<td>Salary Proposed</td>
				<td>10001 - 20000				 (Mauritian Rupees)				</td>
			</tr>
						<tr>
				<td>
											<input type="button" value="Login to Apply for this Job" onclick="window.location.href='authenticate.html'" class="authenticate-btn">
											
						
						
						
						
										</td>
				<td><a onclick="jobdetails('15492')" title="Close Job Details">Close <img src="images/close.png" width="25"></a></td>
			</tr>
			</table>
		</div>
	</td></tr>
		
	<tr onclick="jobdetails('15491')" class="alternate-row">
		<td class="infos">3</td>
		<td>Cook, Chinese Cuisine</td>
		<td class="infos">Hotel & Restaurant</td>
		<td>SOCIETE  AZUR  PARADISE</td>
		<td class="infos" id="country">Mauritius</td>
		<td>08.02.2019</td>
		<td class="infos"><img src="images/icon_view.png" title="Show Job Details"></td>
	</tr>

	<tr class="hidden"><td colspan="7" class="hidden-td">
		<div class="show_details" id="15491">
		<b>Cook, Chinese Cuisine</b>
			<table class="job_details" width="100%">
			<tr>
				<td width="300">Employer</td>
				<td>SOCIETE  AZUR  PARADISE</td>
			</tr>
			<tr>
				<td>Economic Sector</td>
				<td>Hotel & Restaurant</td>
			</tr>
						<tr>
				<td>District in Mauritius</td>
				<td>RIVIERE DU REMPART</td>
			</tr>
						<tr>
				<td>State / Province</td>
				<td>riviere  du  rempart</td>
			</tr>
						<tr>
				
			</tr>

						<tr>
				<td>Job Summary</td>
				<td><p>Chinese cuisine</p></td>
			</tr>
			
			<tr>
				<td>Duties of Job</td>
				<td><p>cooking  Chinese food</p></td>
			</tr>
			
						<tr>
				<td>Skills/Competencies</td>
				<td><p>with experiences</p></td>
			</tr>
			
						<tr>
				<td>Qualifications Required</td>
				<td>FORM 4</td>
			</tr>
						<tr>
				<td>Experience Required</td>
				<td>3 - 5 years</td>
			</tr>
						<tr>
				<td>Salary Proposed</td>
				<td>10001 - 20000				 (Mauritian Rupees)				</td>
			</tr>
						<tr>
				<td>Youtube link of job</td>
				<td>
				<a href="http://www.azurparadise/" target="_blank">www.azurparadise</a></td>
			</tr>
						<tr>
				<td>
											<input type="button" value="Login to Apply for this Job" onclick="window.location.href='authenticate.html'" class="authenticate-btn">
											
						
						
						
						
										</td>
				<td><a onclick="jobdetails('15491')" title="Close Job Details">Close <img src="images/close.png" width="25"></a></td>
			</tr>
			</table>
		</div>
	</td></tr>
		
	<tr onclick="jobdetails('15490')" class="row">
		<td class="infos">4</td>
		<td>Cook, Indian Cuisine</td>
		<td class="infos">Hotel & Restaurant</td>
		<td>SOCIETE  AZUR  PARADISE</td>
		<td class="infos" id="country">Mauritius</td>
		<td>08.02.2019</td>
		<td class="infos"><img src="images/icon_view.png" title="Show Job Details"></td>
	</tr>

	<tr class="hidden"><td colspan="7" class="hidden-td">
		<div class="show_details" id="15490">
		<b>Cook, Indian Cuisine</b>
			<table class="job_details" width="100%">
			<tr>
				<td width="300">Employer</td>
				<td>SOCIETE  AZUR  PARADISE</td>
			</tr>
			<tr>
				<td>Economic Sector</td>
				<td>Hotel & Restaurant</td>
			</tr>
						<tr>
				<td>District in Mauritius</td>
				<td>RIVIERE DU REMPART</td>
			</tr>
						<tr>
				<td>State / Province</td>
				<td>riviere  du  rempart</td>
			</tr>
						<tr>
				
			</tr>

						<tr>
				<td>Job Summary</td>
				<td><p>cook  cuisine indian foods</p></td>
			</tr>
			
			<tr>
				<td>Duties of Job</td>
				<td><p>food indians</p></td>
			</tr>
			
						<tr>
				<td>Skills/Competencies</td>
				<td><p>wih experience</p></td>
			</tr>
			
						<tr>
				<td>Qualifications Required</td>
				<td>FORM 3</td>
			</tr>
						<tr>
				<td>Experience Required</td>
				<td>3 - 5 years</td>
			</tr>
						<tr>
				<td>Salary Proposed</td>
				<td>20001 - 40000				 (Mauritian Rupees)				</td>
			</tr>
						<tr>
				<td>Youtube link of job</td>
				<td>
				<a href="http://www.azurparadise.com/" target="_blank">www.azurparadise.com</a></td>
			</tr>
						<tr>
				<td>
											<input type="button" value="Login to Apply for this Job" onclick="window.location.href='authenticate.html'" class="authenticate-btn">
											
						
						
						
						
										</td>
				<td><a onclick="jobdetails('15490')" title="Close Job Details">Close <img src="images/close.png" width="25"></a></td>
			</tr>
			</table>
		</div>
	</td></tr>
		
	<tr onclick="jobdetails('15489')" class="alternate-row">
		<td class="infos">5</td>
		<td>Housekeeping Supervisor</td>
		<td class="infos">Hotel & Restaurant</td>
		<td>TRIAMAD CO. LTD / HENNESSY PARK HOTEL</td>
		<td class="infos" id="country">Mauritius</td>
		<td>28.02.2019</td>
		<td class="infos"><img src="images/icon_view.png" title="Show Job Details"></td>
	</tr>

	<tr class="hidden"><td colspan="7" class="hidden-td">
		<div class="show_details" id="15489">
		<b>Housekeeping Supervisor</b>
			<table class="job_details" width="100%">
			<tr>
				<td width="300">Employer</td>
				<td>TRIAMAD CO. LTD / HENNESSY PARK HOTEL</td>
			</tr>
			<tr>
				<td>Economic Sector</td>
				<td>Hotel & Restaurant</td>
			</tr>
						<tr>
				<td>District in Mauritius</td>
				<td>PLAINE WILHEMS</td>
			</tr>
						<tr>
				<td>State / Province</td>
				<td>MAURITIUS</td>
			</tr>
						<tr>
				
			</tr>

						<tr>
				<td>Job Summary</td>
				<td><p>Supervise Room Attendants</p>

<p>Responsible for supervision of Rooms as per SOP</p>

</td>
			</tr>
			
			<tr>
				<td>Duties of Job</td>
				<td><p>• Supervise the area under his/her control and efficiently maintain the highest possible standards of conduct, efficiency and appearance of his/her staff<br/>
• Reporting of issues as they arise<br/>
• Resolve guest complaints ensuring guest satisfaction <br/>
• Be aware of hotel standard and core values<br/>
• Attend department meetings</p></td>
			</tr>
			
						<tr>
				<td>Skills/Competencies</td>
				<td><p> Team player with leadership skills, interpersonal and analytical skills<br/>
• Details and Guests Oriented<br/>
• Strong communication skills<br/>
• Computer literate </p>

</td>
			</tr>
			
						<tr>
				<td>Qualifications Required</td>
				<td>HSC-GCE A L - IB</td>
			</tr>
						<tr>
				<td>Experience Required</td>
				<td>1 - 3 years</td>
			</tr>
						<tr>
				<td>Salary Proposed</td>
				<td>10001 - 20000				 (Mauritian Rupees)				</td>
			</tr>
						<tr>
				<td>
											<input type="button" value="Login to Apply for this Job" onclick="window.location.href='authenticate.html'" class="authenticate-btn">
											
						
						
						
						
										</td>
				<td><a onclick="jobdetails('15489')" title="Close Job Details">Close <img src="images/close.png" width="25"></a></td>
			</tr>
			</table>
		</div>
	</td></tr>
		
	<tr onclick="jobdetails('15488')" class="row">
		<td class="infos">6</td>
		<td>Sales Representative</td>
		<td class="infos">Trade</td>
		<td>PRICEGURU LTD</td>
		<td class="infos" id="country">Mauritius</td>
		<td>04.02.2019</td>
		<td class="infos"><img src="images/icon_view.png" title="Show Job Details"></td>
	</tr>

	<tr class="hidden"><td colspan="7" class="hidden-td">
		<div class="show_details" id="15488">
		<b>Sales Representative</b>
			<table class="job_details" width="100%">
			<tr>
				<td width="300">Employer</td>
				<td>PRICEGURU LTD</td>
			</tr>
			<tr>
				<td>Economic Sector</td>
				<td>Trade</td>
			</tr>
						<tr>
				<td>District in Mauritius</td>
				<td>PORT LOUIS</td>
			</tr>
						<tr>
				
			</tr>

						<tr>
				<td>Job Summary</td>
				<td><p>Advise customers, carry out and close sales<br/>
To ensure that sales target are met or exceeded<br/>
Maintain correct merchandising and display</p>

</td>
			</tr>
			
			<tr>
				<td>Duties of Job</td>
				<td><p>High School Certificate<br/>
Service-oriented attitude<br/>
Fluent in English &amp; French(written and spoken)<br/>
IT literate<br/>
Team Player<br/>
Able to work odd hours<br/>
Living in the vicinity of Trianon/Plaine Wilhems will be an advantage</p>

</td>
			</tr>
			
						<tr>
				<td>Skills/Competencies</td>
				<td><p>Candidate will have to provide original Identity Card and Certificate of Character document during the interview.</p>

<p>Send your CV to asha@priceguru.mu or call 263-7082.</p></td>
			</tr>
			
						<tr>
				<td>Qualifications Required</td>
				<td>HSC-GCE A L - IB</td>
			</tr>
						<tr>
				<td>Experience Required</td>
				<td>1 year</td>
			</tr>
						<tr>
				<td>
											<input type="button" value="Login to Apply for this Job" onclick="window.location.href='authenticate.html'" class="authenticate-btn">
											
						
						
						
						
										</td>
				<td><a onclick="jobdetails('15488')" title="Close Job Details">Close <img src="images/close.png" width="25"></a></td>
			</tr>
			</table>
		</div>
	</td></tr>
		
	<tr onclick="jobdetails('15487')" class="alternate-row">
		<td class="infos">7</td>
		<td>Lecturer </td>
		<td class="infos">Education</td>
		<td>AEA CO LTD</td>
		<td class="infos" id="country">Mauritius</td>
		<td>28.02.2019</td>
		<td class="infos"><img src="images/icon_view.png" title="Show Job Details"></td>
	</tr>

	<tr class="hidden"><td colspan="7" class="hidden-td">
		<div class="show_details" id="15487">
		<b>Lecturer </b>
			<table class="job_details" width="100%">
			<tr>
				<td width="300">Employer</td>
				<td>AEA CO LTD</td>
			</tr>
			<tr>
				<td>Economic Sector</td>
				<td>Education</td>
			</tr>
						<tr>
				<td>District in Mauritius</td>
				<td>PORT LOUIS</td>
			</tr>
						<tr>
				
			</tr>

						<tr>
				<td>Job Summary</td>
				<td><p>English/General Paper, French, Business Studies and Maths  lecturer for SC and HSC on FULL TIME basis.</p></td>
			</tr>
			
			<tr>
				<td>Duties of Job</td>
				<td><p>Teach English/General Paper, French, Business Studies and Maths to SC and HSC level students on full time basis.</p></td>
			</tr>
			
						<tr>
				<td>Skills/Competencies</td>
				<td><p>Deliver classes.<br/>
Help students.<br/>
Providing students with the information and resources to develop the study skills.<br/>
Good Communication Skills<br/>
Pleasant personality</p>

</td>
			</tr>
			
						<tr>
				<td>Qualifications Required</td>
				<td>BA</td>
			</tr>
									<tr>
							<td>Age Range</td>
							<td>25 - 35							</td>
						</tr>
									<tr>
				<td>
											<input type="button" value="Login to Apply for this Job" onclick="window.location.href='authenticate.html'" class="authenticate-btn">
											
						
						
						
						
										</td>
				<td><a onclick="jobdetails('15487')" title="Close Job Details">Close <img src="images/close.png" width="25"></a></td>
			</tr>
			</table>
		</div>
	</td></tr>
		
	<tr onclick="jobdetails('15486')" class="row">
		<td class="infos">8</td>
		<td>Storekeeper</td>
		<td class="infos">Construction</td>
		<td>SPREMA ENGINEERING WORKS LTD</td>
		<td class="infos" id="country">Mauritius</td>
		<td>28.02.2019</td>
		<td class="infos"><img src="images/icon_view.png" title="Show Job Details"></td>
	</tr>

	<tr class="hidden"><td colspan="7" class="hidden-td">
		<div class="show_details" id="15486">
		<b>Storekeeper</b>
			<table class="job_details" width="100%">
			<tr>
				<td width="300">Employer</td>
				<td>SPREMA ENGINEERING WORKS LTD</td>
			</tr>
			<tr>
				<td>Economic Sector</td>
				<td>Construction</td>
			</tr>
						<tr>
				<td>District in Mauritius</td>
				<td>PAMPLEMOUSSES</td>
			</tr>
						<tr>
				<td>State / Province</td>
				<td>PAMPLEMOUSSE</td>
			</tr>
						<tr>
				
			</tr>

						<tr>
				<td>Job Summary</td>
				<td><p>For MALE CANDIDATES ONLY-Storekeeper with valid driving licence</p></td>
			</tr>
			
			<tr>
				<td>Duties of Job</td>
				<td><p>For MALE CANDIDATES ONLY-Storekeeper with valid driving licence</p></td>
			</tr>
			
			
						<tr>
				<td>Qualifications Required</td>
				<td>HSC-GCE A L - IB</td>
			</tr>
									<tr>
							<td>Age Range</td>
							<td>20 - 35							</td>
						</tr>
									<tr>
				<td>
											<input type="button" value="Login to Apply for this Job" onclick="window.location.href='authenticate.html'" class="authenticate-btn">
											
						
						
						
						
										</td>
				<td><a onclick="jobdetails('15486')" title="Close Job Details">Close <img src="images/close.png" width="25"></a></td>
			</tr>
			</table>
		</div>
	</td></tr>
		
	<tr onclick="jobdetails('15485')" class="alternate-row">
		<td class="infos">9</td>
		<td>Accounts clerk</td>
		<td class="infos">Other services</td>
		<td>JHRMD (MAURITIUS) PTY LTD</td>
		<td class="infos" id="country">Mauritius</td>
		<td>08.02.2019</td>
		<td class="infos"><img src="images/icon_view.png" title="Show Job Details"></td>
	</tr>

	<tr class="hidden"><td colspan="7" class="hidden-td">
		<div class="show_details" id="15485">
		<b>Accounts clerk</b>
			<table class="job_details" width="100%">
			<tr>
				<td width="300">Employer</td>
				<td>JHRMD (MAURITIUS) PTY LTD</td>
			</tr>
			<tr>
				<td>Economic Sector</td>
				<td>Other services</td>
			</tr>
						<tr>
				<td>District in Mauritius</td>
				<td>PLAINE WILHEMS</td>
			</tr>
						<tr>
				
			</tr>

						<tr>
				<td>Job Summary</td>
				<td><p>We are looking for a potential candidate to complement our team as a bookkeeper.</p>

<p>We are a small firm which works exclusively with an Australian accounting firm based in Sydney.</p>

<p>The candidate will need to perform accounting duties  and must have a general knowledge of accounting, be very good with research and vigilant in their work.</p>

<p>Training will be provided and the candidate must be available for immediate start.</p></td>
			</tr>
			
			<tr>
				<td>Duties of Job</td>
				<td><p>- Recording Invoices<br/>
- Processing Payments<br/>
- Bank Reconciliations<br/>
- Processing Payroll<br/>
- Preparing Monthly Management Report <br/>
- Any other accounting duties as required</p>

</td>
			</tr>
			
						<tr>
				<td>Skills/Competencies</td>
				<td><p>Punctual<br/>
Quick learner<br/>
Good at research<br/>
Computer literate<br/>
Works well in a team environment<br/>
Great at time management<br/>
Works well without supervision</p></td>
			</tr>
			
						<tr>
				<td>Qualifications Required</td>
				<td>HSC-GCE A L - IB</td>
			</tr>
						<tr>
				<td>Experience Required</td>
				<td>1 - 3 years</td>
			</tr>
						<tr>
				<td>
											<input type="button" value="Login to Apply for this Job" onclick="window.location.href='authenticate.html'" class="authenticate-btn">
											
						
						
						
						
										</td>
				<td><a onclick="jobdetails('15485')" title="Close Job Details">Close <img src="images/close.png" width="25"></a></td>
			</tr>
			</table>
		</div>
	</td></tr>
		
	<tr onclick="jobdetails('15484')" class="row">
		<td class="infos">10</td>
		<td>Furniture Fitter Assembler</td>
		<td class="infos">Construction</td>
		<td>KUROS CONSTRUCTION SOLUTIONS</td>
		<td class="infos" id="country">Mauritius</td>
		<td>04.02.2019</td>
		<td class="infos"><img src="images/icon_view.png" title="Show Job Details"></td>
	</tr>

	<tr class="hidden"><td colspan="7" class="hidden-td">
		<div class="show_details" id="15484">
		<b>Furniture Fitter Assembler</b>
			<table class="job_details" width="100%">
			<tr>
				<td width="300">Employer</td>
				<td>KUROS CONSTRUCTION SOLUTIONS</td>
			</tr>
			<tr>
				<td>Economic Sector</td>
				<td>Construction</td>
			</tr>
						<tr>
				<td>District in Mauritius</td>
				<td>PORT LOUIS</td>
			</tr>
						<tr>
				
			</tr>

						<tr>
				<td>Job Summary</td>
				<td><p>Need 10 Furniture Fitter Assembler</p></td>
			</tr>
			
			<tr>
				<td>Duties of Job</td>
				<td><p>Need 10 Furniture Fitter Assembler</p></td>
			</tr>
			
			
						<tr>
				<td>Experience Required</td>
				<td>1 - 3 years</td>
			</tr>
									<tr>
							<td>Age Range</td>
							<td>20 - 40							</td>
						</tr>
									<tr>
				<td>Salary Proposed</td>
				<td>10001 - 20000				 (Mauritian Rupees)				</td>
			</tr>
						<tr>
				<td>
											<input type="button" value="Login to Apply for this Job" onclick="window.location.href='authenticate.html'" class="authenticate-btn">
											
						
						
						
						
										</td>
				<td><a onclick="jobdetails('15484')" title="Close Job Details">Close <img src="images/close.png" width="25"></a></td>
			</tr>
			</table>
		</div>
	</td></tr>
	
		</table>
	
</div>

<div id="popup_content" class="popup_content" style="-webkit-touch-callout: none;-webkit-user-select: none;-khtml-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;" unselectable="on"></div>
<div id="popup" class="show_popup" style="-webkit-touch-callout: none;-webkit-user-select: none;-khtml-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;" unselectable="on"></div>

<script>$(document).ready(function(){$('.bxslider').bxSlider();});</script>

<div class="sidebar">
<div id="login-form">
	<div class="sidebar-box">
		<div class="sidebar-box-top login">
			LOGIN
		</div>

		<div class="sidebar-box-bottom">
			<div class="sidebar-box-inner login-box">
			<!-- <img src="studentjobportal/images/iom_login.png" class="sideimage"> -->
			<?php 

			 if (isset($_SESSION['email'])){
			  echo "YOU ARE LOGGED IN";
			  echo '<br><a href="logOut.php">Log out</a>';
			}
			else {

			echo '<form action="processLogin.php" name="login_page" method="post" accept-charset="utf-8">			<div class="sidebar-login-text">
				<img src="images/right_arrow.png" width="12" class="no-boder">
				<a href="javascript:void(0);" id="login" title="Sign In">Login</a>
			</div>
			<div class="sidebar-registration-text">
				<img src="images/right_arrow.png" width="12" class="no-boder">
				<a href="javascript:void(0);" id="register" title="Sign Up">Register</a>
			</div>
			
			<div id="sidebar-login-box">
				<table class="sidebar_login">
				<tr>
					<td><label>USERNAME</label></td>
				</tr>
				<tr>
					<td><input type="text" name="login_username" class="sidebar-input-box" id="login_username" value="" title="Please enter your Username here">
					<div id="username-error"></div>
					</td>
				</tr>
				<tr>
					<td><label>PASSWORD</label></td>
				</tr>
				<tr>
					<td><input type="password" name="login_password" class="sidebar-input-box" id="login_password" value="" title="Please enter your Password here">
					<div id="password-error"></div>
					</td>
				</tr>
				<tr>
					<td><input type="checkbox" name="rememeber_me">Remember Me
					<br><span><a href="forget_password.html" title="Forget Password">Forget Password</a></span>
					<input type="submit" name="login" value="Log In" class="login-btn" title="Sign In"></td>
				</tr>
				</form>				</table>

				</div>
				
			<div id="register-form" style="display:none;">
				<a href="registration.html" title="Create Jobseeker Account">REGISTER AS JOBSEEKER</a><br><br>
				<a href="registration.html" title="Create Employer Account">REGISTER AS EMPLOYER</a>
			</div>
			</div';
		}
			?>
			<!-- <form action="processLogin.php" name="login_page" method="post" accept-charset="utf-8">			<div class="sidebar-login-text">
				<img src="images/right_arrow.png" width="12" class="no-boder">
				<a href="javascript:void(0);" id="login" title="Sign In">Login</a>
			</div>
			<div class="sidebar-registration-text">
				<img src="images/right_arrow.png" width="12" class="no-boder">
				<a href="javascript:void(0);" id="register" title="Sign Up">Register</a>
			</div>
			
			<div id="sidebar-login-box">
				<table class="sidebar_login">
				<tr>
					<td><label>USERNAME</label></td>
				</tr>
				<tr>
					<td><input type="text" name="login_username" class="sidebar-input-box" id="login_username" value="" title="Please enter your Username here">
					<div id="username-error"></div>
					</td>
				</tr>
				<tr>
					<td><label>PASSWORD</label></td>
				</tr>
				<tr>
					<td><input type="password" name="login_password" class="sidebar-input-box" id="login_password" value="" title="Please enter your Password here">
					<div id="password-error"></div>
					</td>
				</tr>
				<tr>
					<td><input type="checkbox" name="rememeber_me">Remember Me
					<br><span><a href="forget_password.html" title="Forget Password">Forget Password</a></span>
					<input type="submit" name="login" value="Log In" class="login-btn" title="Sign In"></td>
				</tr>
				</form>				</table> -->
			<!-- </div>
				
			<div id="register-form" style="display:none;">
				<a href="registration.html" title="Create Jobseeker Account">REGISTER AS JOBSEEKER</a><br><br>
				<a href="registration.html" title="Create Employer Account">REGISTER AS EMPLOYER</a>
			</div>
			</div> -->
						
			<div class="clear"></div>
		<!-- </div>	</div>
</div> -->

	<div class="sidebar-box">
		<div class="sidebar-box-top featured">
			FEATURED JOB
		</div>
		<div class="sidebar-box-bottom">
			<div class="sidebar-box-inner featured-box">
				<!-- <img src="studentjobportal/images/iom_featured.png" class="sideimage"> -->
								<div class="featured_list">
					<span class="news_title">Electrician</span>
					<span class="read_featured"><a href="view_job/VFZSVmVFNVVaejA9.html" title="VIEW JOB DETAILS">VIEW JOB</a></span>
				</div>
								<div class="featured_list">
					<span class="news_title">Sales  Clerk</span>
					<span class="read_featured"><a href="view_job/VFZSVmQwMUVZejA9.html" title="VIEW JOB DETAILS">VIEW JOB</a></span>
				</div>
								<div class="featured_list">
					<span class="news_title">Plumber and Pipe Fitter</span>
					<span class="read_featured"><a href="view_job/VFZSVmQwMUVUVDA9.html" title="VIEW JOB DETAILS">VIEW JOB</a></span>
				</div>
								<div class="featured_list">
					<span class="news_title">Waiter/Waitress</span>
					<span class="read_featured"><a href="view_job/VFZSUk1VNTZhejA9.html" title="VIEW JOB DETAILS">VIEW JOB</a></span>
				</div>
								<div class="featured_list">
					<span class="news_title">Aluminium Fabricator</span>
					<span class="read_featured"><a href="view_job/VFZSTk0wNVVSVDA9.html" title="VIEW JOB DETAILS">VIEW JOB</a></span>
				</div>
								<div class="featured_list">
					<span class="news_title">Mechanic, Motor Vehicle</span>
					<span class="read_featured"><a href="view_job/VFZSSmVrMUVWVDA9.html" title="VIEW JOB DETAILS">VIEW JOB</a></span>
				</div>
								<div class="featured_list">
					<span class="news_title">Cashier</span>
					<span class="read_featured"><a href="view_job/VFZSRmVVMUVaejA9.html" title="VIEW JOB DETAILS">VIEW JOB</a></span>
				</div>
								<div class="featured_list">
					<span class="news_title">Waiter/Waitress</span>
					<span class="read_featured"><a href="view_job/VGtSQk13PT0%3d.html" title="VIEW JOB DETAILS">VIEW JOB</a></span>
				</div>
							</div>
			<div class="clear"></div>
		</div>
	</div>

	<div class="sidebar-box">
		
	</div>

	<div class="sidebar-box">
		<div class="sidebar-box-top polls">
            Popularity of sectors
        </div>
        <div class="sidebar-box-bottom">
            <div class="sidebar-box-inner poll-box">
            <!-- <img src="studentjobportal/images/iom_poll.png" class="sideimage"> -->
                <div id='vote_status'></td></tr><tr><td colspan='2' class='no-border'><a class='show_vote_result' title='View Result'>View Result</a></td></tr></table></div><div class='vote_result'><table class='poll'><tr><td colspan='2' class='no-border'>Result for :</td></tr><tr></tr><tr><td align='left'>Informatics (1011 votes)</td><td>40.64 %<div class='show_percentage' style='width:40.64%;'>&nbsp;</div></td></tr><tr><td align='left'>Engineering (424 votes)</td><td>17.04 %<div class='show_percentage' style='width:17.04%;'>&nbsp;</div></td></tr><tr><td align='left'>Finance (581 votes)</td><td>23.35 %<div class='show_percentage' style='width:23.35%;'>&nbsp;</div></td></tr><tr><td align='left'>Management (472 votes)</td><td>18.97 %<div class='show_percentage' style='width:18.97%;'>&nbsp;</div></td></tr><tr><td colspan='2' class='no-border'></td></tr></table></div>           </div>
            <div class="clear"></div>
        </div>
    </div></div>
   
</div><!--</div></div>-->

<script>(function($){var nav=$("#topNav");nav.find("li").each(function(){if($(this).find("ul").length>0){$("<span>").text("^").appendTo($(this).children(":first"));$(this).mouseenter(function(){$(this).find("ul").stop(true,true).slideDown();});$(this).mouseleave(function(){$(this).find("ul").stop(true,true).slideUp();});}});})(jQuery);</script>

<div id="footer" style="height: 0%";>
	<div id="links">
		<a href="feedback.html" title="Feedback Form">Feedback Form</a>
		<a href="website_map.html" title="Website Map">Website Map</a>
		<a href="eic_locations.html" title="EIC Location">EIC Location</a>
		<a href="faq.html" title="FAQ">FAQ</a>
		<a href="legislations.html" title="Legislations">Legislations</a>
		<a href="downloads.html" title="Downloads">Downloads</a>
		<a href="publications.html" title="Publications">Publications</a>
		<a href="statistics.html" title="Statistics">Statistics</a>
		<a href="links.html" title="Links">Links</a>
		<a href="tips.html" title="Tips">Tips</a>
	</div>
	
	<div id="copyright">
		&copy; Copyright Student Job Portal. 2019. All rights reserved.
	</div>
	  
	<span id="browser">
		<span id="browser_txt">Compatible on latest </span>
		<img src="images/chrome.ico" width="20" style="width: 21px;position: relative;margin-top: 0px;height: 23px;top: 2px;" title="Google Chrome">
		<img src="images/firefox.ico" width="20" title="Mozilla Firefox"> 
		<img src="images/safari.ico" width="20" title="Safari">
	</span>
</div>

</body>

</html>