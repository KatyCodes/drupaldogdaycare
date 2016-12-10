<?php
/**
 * @file
 * Renders the Checkfront Setup page.
 *
 */
?> 

<script type="text/javascript">

jQuery(document).ready(function() {

	function clean(str) {
		return str.replace(/[^\d\w\-\_ , "]/ig,'');
	}

	jQuery('#shortcode_generator').click(function() {
		<?php if (variable_get('checkfront_url')) { ?>	
		height = 600;
		width = 1150;
		var href = 'https://<?php print variable_get('checkfront_url') ?>/manage/extend/integrate/widget/?provider=drupal';
		var cwidth=(window.screen.width-width)/2;
		var cheight=(window.screen.height-height)/2;var param="location=yes,status=yes,resizable=yes,scrollbars=yes,menubar=yes,toolbar=yes,width="+width+',height='+height+',left='+cwidth+',top='+cheight;
		var sw=window.open(href,'',param);sw.focus();
		return false;
		<?php } ?>	
	});
});

</script>
<div style="margin: 0 0 1em 2em; font: 12px sans-serif; float: right; width: 275px; box-shadow: 0 0 2px #ddd; border-radius: 6px; background-color: #fff; border: solid 1px #ddd; padding: 1em;">
	<div style="text-align: center">
		<a href="http://www.checkfront.com/"><img src="//www.checkfront.com/images/brand/Checkfront-Logo-45.png" height="40" alt="Checkfront" /></a><br />
		<strong>Smart, Simplified Online Bookings</strong><br /><br />
	</div>
	<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2Fcheckfront.bookings&amp;send=false&amp;layout=button_count&amp;width=250&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21&amp;appId=132896805841" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:275px; margin-bottom: 10px; height:21px;" allowTransparency="true"></iframe>
	<!-- Place this tag in your head or just before your close body tag -->
	<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
	<!-- Place this tag where you want the +1 button to render -->
	<div class="g-plusone" style="width:275px;" data-size="small" data-annotation="inline" data-href="http://www.checkfront.com/"></div>
	<br />
	<br />
	<a href="http://twitter.com/Checkfront" style="background: url('https://www.checkfront.com/images/twitter.png') left center no-repeat; padding: 5px 5px 5px 20px" target="_blank">Follow us on Twitter</a><br /><br />
	<a href="http://www.checkfront.com/support/" style="background: url('https://www.checkfront.com/images/brand/Checkfront-Icon-16.png') left center no-repeat; padding: 5px 5px 5px 20px;" target="_blank">Support Library</a><br /><br />
	<a href="https://github.com/Checkfront/Drupal-Module" style="background: url('https://github.com/favicon.ico') left center no-repeat; background-size: 16px; padding: 5px 5px 5px 20px;" target="_blank">Fork us on Github</a><br /><br />
	<a href="http://www.checkfront.com/drupal/" style="background: url('https://drupal.org/misc/favicon.ico') left center no-repeat; padding: 5px 5px 5px 20px;" target="_blank">Checkfront Drupal Setup Guide</a>

</div>
<div>
	<p>Checkfront is a powerful online booking system that allows businesses to manage their inventories, centralize reservations, and process payments. Checkfront integrates into popular payment systems including Paypal, Authorize.net, SagePay and integrates into Salesforce, Xero and Google Apps.  Transactions, Reporting and Bookings are securely stored in the Checkfront backoffice app, while providing a self service booking portal on your own website.</p>

	<h3>Quick Start</h3>
	<ul style="font-size: 16px;margin-left:0;list-style: none">
		<li style="padding: 5px 0; height: 25px; line-height: 25px;"><strong style="margin-right: 10px; background-color: #ccc; border-radius: 20px; clear: none; color: #000; display: inline-block; float: left; font-style: normal; height: 25px; font-weight: bold; line-height: 25px;font-size:14px; text-align: center; width: 25px;">1</strong> Create and configure <a href="https://www.checkfront.com/start/?src=wp-setup" target="_blank">your Checkfront account</a>.</li>
		<li style="padding: 5px 0; height: 25px; line-height: 25px;"><strong style="margin-right: 10px; background-color: #ccc; border-radius: 20px; clear: none; color: #000; display: inline-block; float: left; font-style: normal; height: 25px; font-weight: bold; line-height: 25px;font-size:14px; text-align: center; width: 25px;">2</strong> Supply your Checkfront URL in the <a href="#checkfront_setup">field below</a>.</li>
		<li style="padding: 5px 0; height: 25px; line-height: 25px;"><strong style="margin-right: 10px; background-color: #ccc; border-radius: 20px; clear: none; color: #000; display: inline-block; float: left; font-style: normal; height: 25px; font-weight: bold; line-height: 25px;font-size:14px; text-align: center; width: 25px;">3</strong> Enable the Checkfront shortcode in a <?php print l( "text format", "admin/config/content/formats" ); ?>.</li> 
		<li style="padding: 5px 0; height: 25px; line-height: 25px;"><strong style="margin-right: 10px; background-color: #ccc; border-radius: 20px; clear: none; color: #000; display: inline-block; float: left; font-style: normal; height: 25px; font-weight: bold; line-height: 25px;font-size:14px; text-align: center; width: 25px;">4</strong> Create a new page and supply the <a href="#shortcode">short code</a> you created.</li>
		<li style="padding: 5px 0; height: 25px; line-height: 25px;"><strong style="margin-right: 10px; background-color: #ccc; border-radius: 20px; clear: none; color: #000; display: inline-block; float: left; font-style: normal; height: 25px; font-weight: bold; line-height: 25px;font-size:14px; text-align: center; width: 25px;">5</strong> Start accepting online bookings.</li>
	</ul>
</div>

<br style="clear: both" />

<a name="checkfront_setup"></a>

<?php print $form_html ?>

<br />
<a name="shortcode"></a>

<fieldset>
	<legend><span class="fieldset-legend">Getting Started</span></legend>
	<div class="fieldset-wrapper">
		<div>
			<h2>How do I enable the shortcode?</h2>
			<p>In order to enable the shortcode, you'll need to go to <?php print l('admin/config/content/formats', 'admin/config/content/formats') ?> and find (or create) the text format you'll be using on pages, then click the "configure" link to the right.  Once on the configuration page, look under the filters heading and enable the checkbox titled "<strong>Checkfront Booking Shortcode</strong>".  Click save, and you'll be good to go!</p>
			<p>Keep in mind that you should only enable the shortcode on a format used by a <i>trusted</i> role, such as administrators, in order to prevent accidents and possible security implications.</p>
			
			<br />
			<h2>How do I make a booking page?</h2>			
			<span>Once you have set your Checkfront URL and enabled the shortcode, you can start booking right away by simply pasting this code where you'd like the panel to appear in any page: <strong style="font-size: 14px"> [checkfront] </strong> &nbsp; &nbsp; </span>

			<p>If you want to choose more options for your embedding shortcode, you can launch the "Shortcode Generator" below:</p>
			<input class="form-submit" value="Shortcode Generator" type="submit" target="_blank" id="shortcode_generator"/>
			
			<br /><br />
			<h2>It says "Searching" but never loads...</h2>
			<p>Check to make sure that your shortcode is correct, and exactly as was given by the generator.</p>
			<p>If you are trying to display the widget in an content that displays a summary instead of a page, you'll need to manually set the summary to prevent Drupal from trimming a necessary piece of the module.  We recommend you use the shortcode on a static page content type such as the "Basic page".</p>
			
			<br />
			<h2>It still shows the demo content after I change the URL</h2>
			<p>The system normally caches the page content after editing, so you may need to re-save your booking page in order to update the widget to the correct saved URL.</p>
			
			
			<br/>
			<p><strong>Require more help?</strong>  Please see our <a href="http://www.checkfront.com/support/drupal">drupal setup guide</a> in our  <a href="http://www.checkfront.com/support/">support library</a> or <a href="http://www.checkfront.com/contact/">contact us</a> and we'd be happy to assist.</p>
		</div>
	</div>
</fieldset>

<div>

<p style="float: left; color: #555">&copy; Checkfront Inc 2008 - <?php print date('Y') ?></p>

<p style="float: right; color: #999">
	<a style="color: #777;  font-size: 11px" href="http://www.checkfront.com/">Learn More</a>
	&nbsp;|&nbsp; 
	<a style="color: #777;  font-size: 11px" href="http://www.checkfront.com/updates">Recent Updates</a>
	&nbsp;|&nbsp; 
	<a style="color: #777;  font-size: 11px" href="http://www.checkfront.com/support">Support</a>
	&nbsp;|&nbsp; 
	<a style="color: #777;  font-size: 11px" href="http://www.checkfront.com/developers">Developers</a>
	&nbsp;|&nbsp; 
	<a style="color: #777;  font-size: 11px" href="http://www.checkfront.com/privacy">Privacy</a>
	&nbsp;|&nbsp; 
	<a style="color: #777; font-size: 11px" href="http://www.checkfront.com/terms">Terms of Service</a> 
</p>
</div>
