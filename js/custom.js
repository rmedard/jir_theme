$(document).ready(function(){
    
	var isMobile = {
		Android: function() {
			return navigator.userAgent.match(/Android/i);
		},
		BlackBerry: function() {
			return navigator.userAgent.match(/BlackBerry/i);
		},
		iOS: function() {
			return navigator.userAgent.match(/iPhone|iPad|iPod/i);
		},
		Opera: function() {
			return navigator.userAgent.match(/Opera Mini/i);
		},
		Windows: function() {
			return navigator.userAgent.match(/IEMobile/i);
		},
		any: function() {
			return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
		}
	};
	
	if ($(".featured-jobs-tab > div.attachment > div.super-featured-jobs").children().length == 0){
		$(".featured-jobs-tab > div.attachment").hide();
	}
	
	if($("a.apply-btn").length){
		$("div.warning-message").show();
	}else{
		$("div.warning-message").hide();
	}
	//Employer social media buttons
	$(".employer-fcbk").text("");
	$(".employer-twitter").text("");
	$(".employer-linkedin").text("");
	$("div.employer-social-media > div").addClass('col-lg-1 col-md-1 col-sm-1 col-xs-1');

	//Badges jobs count
	$(".view-all-jobs").parent(".content").parent(".block-system").parent(".region-content").addClass('jobs-tabs');
	
	var featured = '<span class="badge">' + $("#featuredid").text() + '</span>';
	var alljobs = '<span class="badge">' + $("#alljobsid").text() + '</span>';
	var publics = '<span class="badge">' + $("#publicid").text() + '</span>';
	var tenders = '<span class="badge">' + $("#tendersid").text() + '</span>';
	var interns = '<span class="badge">' + $("#internid").text() + '</span>';
	var others = '<span class="badge">' + $("#othersid").text() + '</span>';
	
	$(".jobs-tabs > div.tabs > ul.nav-tabs > li:nth-child(1) > a").append(featured);
	$(".jobs-tabs > div.tabs > ul.nav-tabs > li:nth-child(2) > a").append(alljobs);
	$(".jobs-tabs > div.tabs > ul.nav-tabs > li:nth-child(3) > a").append(tenders);
	$(".jobs-tabs > div.tabs > ul.nav-tabs > li:nth-child(4) > a").append(interns);
	$(".jobs-tabs > div.tabs > ul.nav-tabs > li:nth-child(5) > a").append(publics);
	$(".jobs-tabs > div.tabs > ul.nav-tabs > li:nth-child(6) > a").append(others);
	
	if($("#featuredid").text() == "0"){
		$(".jobs-tabs > div.tabs > ul.nav-tabs > li:nth-child(1)").css('display', 'none');
	}
	if($("#alljobsid").text() == "0"){
		$(".jobs-tabs > div.tabs > ul.nav-tabs > li:nth-child(2)").css('display', 'none');
	}
	if($("#tendersid").text() == "0"){
		$(".jobs-tabs > div.tabs > ul.nav-tabs > li:nth-child(3)").css('display', 'none');
	}
	if($("#internid").text() == "0"){
		$(".jobs-tabs > div.tabs > ul.nav-tabs > li:nth-child(4)").css('display', 'none');
	}
	if($("#publicid").text() == "0"){
		$(".jobs-tabs > div.tabs > ul.nav-tabs > li:nth-child(5)").css('display', 'none');
	}
	if($("#othersid").text() == "0"){
		$(".jobs-tabs > div.tabs > ul.nav-tabs > li:nth-child(6)").css('display', 'none');
	}
	//End
	$(".simplenews-subscribe > div > div.form-type-textfield > label").css('display', 'none');
	
	$(".news-view-page > div.view-content > div > ul.media-list > li.media > div.pull-left > a > img").addClass('img-thumbnail');
	$("#edit-realname").addClass('form-control');
	$("#edit-combine-wrapper").addClass('input-group');
	$("#edit-combine").addClass('form-control');
	$("#edit-submit-all-jobs").removeClass('btn-primary').addClass('btn-default');
	$("#edit-field-employer-und-add-more").removeClass('btn-info').addClass('btn-default');
	$("#edit-field-employer-und-add-more").text('Select employer');
	$(".custom-apply-btn > h3 > span > a").addClass('btn btn-link');
	$("#btn-block-afb-1 > button").addClass('btn-block').text("Add employer");
	$("#ajax-submit-random-1146499521").removeClass('ajax-processed');
	$("#edit-field-employer").append("<div><a href='/node/add/employer'>Can't find your company name? Click here.</a></div>");
	
	$(".captcha > .control-group > .control-label").html("Random question <span title='This field is required.' class='form-required'>*</span>");
	if(isMobile.any()){
		$("#back-top").css('bottom', '50px');
		$("#section-footer").css('padding-bottom', '60px');
		$("div.horizontal-banner").css('display', 'none');
		$("#section-tweets").css('display', 'none');
	}else{
		$("#edit-submit").removeClass('btn-primary').addClass('btn-default');
	}
	
	$(".simplenews-unsubscribe > div > .btn.form-submit, .simplenews-subscribe > div > .btn.form-submit").addClass('btn-default btn-block');	
	$("button[value='Upload']").parent('.form-managed-file').css('display', 'inline-flex');
    $("button[value='Upload']").text('Attach this file');
	$(".term-level-element-table > thead > tr > th:nth-child(2)").text("None");
	$(".term-level-element-table > tbody > tr.term-level-element-table-row > td:nth-child(1)").css('width', '25%');
	$(".term-level-element-table > tbody > tr.term-level-element-table-row > td:nth-child(2)").css('width', '15%');
	$(".term-level-element-table > tbody > tr.term-level-element-table-row > td:nth-child(3)").css('width', '15%');
	$(".term-level-element-table > tbody > tr.term-level-element-table-row > td:nth-child(4)").css('width', '15%');
	$(".term-level-element-table > tbody > tr.term-level-element-table-row > td:nth-child(5)").css('width', '15%');
	$(".term-level-element-table > tbody > tr.term-level-element-table-row > td:nth-child(6)").css('width', '15%');
	$(".term-level-element-table > tbody > tr.term-level-element-table-row > td:nth-child(7)").hide();
	$("#views-exposed-form-all-jobs-jobs-search-page > div > div.views-exposed-form > div.views-exposed-widgets > #edit-combine-wrapper > div.views-widget > div.form-item-combine > div.controls > #edit-combine").attr('placeholder', 'Job title or company name e.g. manager, tigo, ...');
	$("#edit-realname").attr('placeholder', 'Names');
	$("#edit-field-employer-und-0-target-id").attr('placeholder', 'Search company name');
	$(".simplenews-subscribe > div > div.form-item-mail > div.controls > input").attr('placeholder', 'Email');
	$("div.node-news.view-mode-full > div > div.field-name-field-news-photo > div.field-items > div.field-item > img").addClass('thumbnail');
	$("#job-node-form > div > div#edit-actions > #edit-submit").text("Submit");
});