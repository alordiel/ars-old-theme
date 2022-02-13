<script type="text/javascript">
	jQuery(document).ready(
		function () {
			jQuery("#paybutton").click(function () {
				jQuery("#ppGo").show();
			});
		});
<!--//--><![CDATA[//><!--
	jQuery(function () {
		jQuery("#columns h4.expand").toggler();
		jQuery("#columns div.shelter-faq").expandAll({trigger: "h3.expand", ref: "h3.expand"});
		jQuery("#columns div.other").expandAll({
			expTxt: "[Show]",
			cllpsTxt: "[Hide]",
			ref: "ul.collapse",
			showMethod: "show",
			hideMethod: "hide"
		});
		jQuery("#columns div.post").expandAll({
			expTxt: "[Read this entry]",
			cllpsTxt: "[Hide this entry]",
			ref: "div.collapse",
			localLinks: "p.top a"
		});
	});
	//--><!]]>
</script>
<script type="text/javascript">
	jQuery(document).ready(function () {
		jQuery('#amountDiv').hide();
		jQuery('input:radio[name=giftType]').click(function () {
			if (jQuery(this).attr("id") === 'chooseMonthly') {
				jQuery("#oneTimeGiftDiv").hide();
				jQuery("#amountDiv").show();
				jQuery("#extraDetails").html('<input type="hidden" name="cmd" value="_xclick-subscriptions"><input type="hidden" name="currency_code" value="EUR"><input type="hidden" name="src" value="1"><input type="hidden" name="p3" value="1"><input type="hidden" name="t3" value="M"><input type="hidden" name="sra" value="1">');
			} else {
				jQuery("#amountDiv").hide();
				jQuery("#oneTimeGiftDiv").show();
				jQuery("#extraDetails").html('<input type="hidden" name="cmd" value="_donations">');
			}
		});
		jQuery("#contactForm").validate({
			submitHandler: function (form) {
				$.post("paypal.php", jQuery("#contactForm").serialize(), function (data, textStatus) {
					if (data == true) {
						setTimeout(gogo, 1);
						form.submit();
					} else {
						jQuery("#statusMsg").html(data);
					}
				}, "json");
			},
			rules: {
				fname: "required",
				lname: "required",
				email: {
					required: true,
					email: true
				},
				email_confirm: {
					required: true,
					equalTo: "#email"
				}
			}
		});
		jQuery('#email_confirm').change(function () {
			jQuery("#contactForm").validate().element('#email_confirm');
		});
	});

	function gogo() {
		jQuery("#ppGo").show();
	}
</script>
<div id="left-box" class="fl">
	<div align="center">
		<a href="https://www.paypal.com/" target="_blank">
			<img width="110" height="30"
				 src="<?php echo bloginfo( 'template_url' );
				 _e( '/images/paypal_logo.gif', 'arsofia' ); ?>">
		</a>
	</div>
	<div id="donate-left">
		<form id="contactForm" action="https://www.paypal.com/cgi-bin/webscr" method="post">
			<div id="statusMsg"></div>
			<h3 style="float:none;border-top: none;margin-top: 0;padding-bottom: 0;"><?php _e( 'Your Donation', 'arsofia' ) ?></h3>
			<div class="formDiv">
				<input type="radio" name="giftType" value="One Time Gift" id="chooseOneTime"
					   checked="checked"/><?php _e( 'One Time Donation:', 'arsofia' ) ?>
				<input type="radio" name="giftType" value="Monthly Gift"
					   id="chooseMonthly"/><?php _e( 'Monthly Donation:', 'arsofia' ) ?>
			</div>
			<div class="formDiv" id="oneTimeGiftDiv">
				<select name="amount" id="amount" style="display:none">
					<input style="border:1px solid #999999;" type="text" id="amount" name="amount" size="10"
						   maxlength="5" class="textFields state_zip"/><span> <?php _e( 'Euro', 'arsofia' ) ?></span>
				</select>
			</div>
			<div class="formDiv" id="amountDiv">
				<input style="border:1px solid #999999;" type="text" id="a3" name="a3" size="10" maxlength="5"
					   class="textFields state_zip"/><span> <?php _e( 'Euro', 'arsofia' ) ?></span>
			</div>
			<input type="hidden" name="business" value="LMCMQQ93CSRZG">
			<input type="hidden" name="lc" value="EUR">
			<input type="hidden" name="item_name" value="Donation">
			<input type="hidden" name="item_number" value="donation">
			<input type="hidden" name="no_note" value="1">
			<input type="hidden" name="no_shipping" value="1">
			<input type="hidden" name="rm" value="1">
			<input type="hidden" name="return" value="<?php _e( 'https://arsofia.com/thank-you/' ) ?>">
			<input type="hidden" name="currency_code" value="EUR">
			<input type="hidden" name="submitted_btn" value="submit">
			<span id="extraDetails">
        <input type="hidden" name="cmd" value="_donations">
      </span>
			<input class="pay-button button_blue" type="submit" name="submitted_btn"
				   value="<?php _e( 'Donate', 'arsofia' ) ?>">
			<span id="ppGo" style="display:none;">
          <img src="<?php bloginfo( 'template_url' ); ?>/images/pay-loader.gif"
			   align="absmiddle"/> <?php _e( 'Please wait...', 'arsofia' ) ?></span>
		</form>
		<p>
			<small><?php _e( 'Info : once you click on \'Donate\', you will be transferred to PayPal where you can enter your payment information.', 'arsofia' ) ?></small>
		</p></div>
</div>
<div id="right-box" class="fl" style="margin-left: 25px;">
	<div align="center" style="padding-bottom: 25px;"><a href="https://www.epay.bg/" target="_blank"><img width="110"
																										  height="30"
																										  src="https://arsofia.com/wp-content/uploads/2013/09/epay-logo.png"></a>
	</div>
	<form action="https://www.epay.bg/" method="post">
		<table class="epay-view" style="width: 285px;" cellspacing="1" cellpadding="4">
			<tbody>
			<tr>
				<td class="epay-view-header" align="center">Описание</td>
				<td class="epay-view-header" align="center">Сума</td>
			</tr>
			<tr>
				<td class="epay-view-value"><strong>DONATION I ANIMAL RESCUE SOFIA</strong></td>
				<td class="epay-view-name"><input name="TOTAL" size="5" type="text"/> BGN</td>
			</tr>
			<tr>
				<td class="epay-view-name" colspan="2"><input class="epay-button" name="BUTTON:EPAYNOW" type="submit"
															  value=" ДАРИ "/></td>
			</tr>
			<tr>
				<td class="epay-view-name" style="white-space: normal; font-size: 10px;" colspan="2">Плащането се
					осъществява чрез <a class="epay" href="https://www.epay.bg/" target="_blank">ePay.bg</a> - Интернет
					системата за плащане с банкови карти и микросметки
				</td>
			</tr>
			</tbody>
		</table>
		<input name="PAGE" type="hidden" value="paylogin"/> <input name="MIN" type="hidden" value="2326683315"/> <input
			name="INVOICE" type="hidden"/> <input name="DESCR" type="hidden" value="ДАРИ ЖИВОТ I ANIMAL RESCUE SOFIA"/>
		<input name="URL_OK" type="hidden" value="https://arsofia.com/thank-you/?utm_nooverride=1"/> <input
			name="URL_CANCEL" type="hidden" value="https://www.epay.bg/?p=cancel"/> <input name="ENCODING" type="hidden"
																						   value="utf-8"/>
	</form>
</div>
<div class="banking-details fr">
	<div align="center">
		<a href="https://www.fibank.bg/" target="_blank">
			<img width="110" height="30"
				 src="https://arsofia.com/wp-content/uploads/2013/09/bgr-logo.png">
		</a>
	</div>
	<h3 style="margin-top: 18px;"><strong><?php _e( 'First Investment Bank', 'arsofia' ); ?></strong></h3>
	<p><strong><?php _e( '37 D.Tsankov blvd, Sofia 1797, BULGARIA', 'arsofia' ); ?></strong></p>
	<p><strong><?php _e( 'BIC: FINVBGSF', 'arsofia' ); ?></strong></p>
	<p><strong><?php _e( 'IN EURO (EUR), IBAN: BG50FINV91501215999956', 'arsofia' ); ?></strong></p>
	<p><strong><?php _e( 'IN LEVA (BGN), IBAN: BG07FINV91501215999954', 'arsofia' ); ?></strong></p>
	<p><strong><?php _e( 'Name: A R Sofia Foundation', 'arsofia' ); ?></strong></p>
</div>
<div class="fix"></div>
