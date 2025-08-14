<?php

if(!defined('ABSPATH')){
	die('HACKING ATTEMPT!');
}

// Social Login Pro settings Actions
add_filter('loginizer_social_general_settings', 'loginizer_pro_social_save_settings', 10);

// Handles saving Social Login General settings.
function loginizer_pro_social_save_settings($social_settings){

	if(isset($_POST['general_settings'])){
		$social_settings['general']['register_new'] = !empty($_POST['register_new']) ? lz_optpost('register_new') : false;
		$social_settings['general']['default_role'] = !empty($_POST['default_role']) ? lz_optpost('default_role') : 'subscriber';
		$social_settings['general']['admin_bar'] = !empty($_POST['admin_bar']) ? lz_optpost('admin_bar') : false;
		$social_settings['general']['save_avatar'] = !empty($_POST['save_avatar']) ? lz_optpost('save_avatar') : false;
	}else if(isset($_POST['login_settings'])){
		$social_settings['login']['registration_form'] = lz_optpost('registration_form');
	}else if(isset($_POST['woocommerce_settings'])){
		$social_settings['woocommerce']['login_form'] = lz_optpost('login_form');
		$social_settings['woocommerce']['registration_form'] = lz_optpost('registration_form');
		$social_settings['woocommerce']['button_style'] = lz_optpost('button_style');
		$social_settings['woocommerce']['button_shape'] = lz_optpost('button_shape');
		$social_settings['woocommerce']['button_position'] = lz_optpost('button_position');
	} else if(isset($_POST['comment_settings'])){
		$social_settings['comment']['enable_buttons'] = lz_optpost('enable_buttons');
		$social_settings['comment']['button_style'] = lz_optpost('button_style');
		$social_settings['comment']['button_shape'] = lz_optpost('button_shape');
	}
	
	return $social_settings;
}

function loginizer_how_to_google(){
	
	// NOTE: update the date of last updated of this doc if you make any change.
	echo '<div>
		<h2>'.__('Create Google APP', 'loginizer').'</h2>
		<span><b>'.__('Last Updated','loginizer').':</b> 24th June 2024</span>
		<p>'.__('To allow your users to be able to login through their Google Account, you first need to create a Google App. For that follow the App creation steps below.', 'loginizer').'</p>
		<ol>
			<li>'.__('Go to Google Developer Console','loginizer').' <a href="https://console.developers.google.com/apis/" target="_blank">https://console.developers.google.com/apis/</a></li>
			<li>'.__('If you are not logged in then login, and create a project if you don\'t have that already', 'loginizer').'</li>
			<li>'.__('Once you have a project in the Console make sure you are on API and services page and then go to OAuth consent screen in the left navigation', 'loginizer').'</li>
			<li>'.__('Under the "Authorized domains" section press the "Add Domain" button and enter your domain name, without subdomains!', 'loginizer').'</li>
			<li>'.__('At the "Developer contact information" section, enter an email address that Google can use to notify you about any changes to your project.').'</li>
			<li>'.__('Press "Save and Continue" then press it again on the "Scopes", "Test users" pages, too!', 'loginizer').'
			<li>'.__('After that you will need to create the credentials. For that in the same left navigation click on Credentials.', 'loginizer').'</li>
			<li>'.__('On the credentials page, click on Create Credentials and then choose OAuth client ID', 'loginizer').'</li>
			<li>'.__('A select field which is Application Type will appear, in that select web appilication and then other fields will show up', 'loginizer').'</li>
			<li>'.__('Now set it\'s name to anything you like.', 'loginizer').'</li>
			<li>'.__('After that in Authorize redirect URIs Add URI', 'loginizer').'</li>
			<li>'.__('The URI you need to add is', 'loginizer').'<code>'.esc_url(wp_login_url()).'?lz_social_provider=Google</code></li>
			<li>'.__('Now click on create and you will get your Client ID and secret key', 'loginizer').'</li>
			<li>'.__('Copy those keys in the required field and save settings.', 'loginizer').'</li>
		</ol>
	</div>';
}

function loginizer_how_to_facebook(){
	
	// NOTE: update the date of last updated of this doc if you make any change.
	echo '<div>
		<h2>'.__('Create Facebook App', 'loginizer').'</h2>
		<span><b>'.__('Last Updated','loginizer').':</b> 24th June 2024</span>
		<p>'.__('To allow your users to be able to login through their facebook account, you first need to create a Facebook App. For that follow the App creation steps below.', 'loginizer').'</p>
		<ol>
			<li>'.__('Go to Facebook Developer Platform, make sure you are already logged-in to Facebook','loginizer').' <a href="https://developers.facebook.com/apps/" target="_blank">https://developers.facebook.com/apps/</a></li>
			<li>'.__('If you are not logged in then login, and click on Create App button and choose "Others" as use case and click Next', 'loginizer').'</li>
			<li>'.__('After selecting Others you will be asked to select App type there select Consumer and click next button', 'loginizer').'</li>
			<li>'.__('A form will appear which will ask for your Apps name fill it and other details on the form and then Create App', 'loginizer').'</li>
			<li>'.__('Your app will be created now on next page, you will get multiple options of Products you can add to your App, there setup Facebook Login', 'loginizer').'</li>
			<li>'.__('After clicking on Setup Facebook login, you will be asked which platform you want to use it on there select Web', 'loginizer').'</li>
			<li>'.__('Now you will need to fill up some details, first you will be asked about URL of the website after adding that in the field save and click on Continue', 'loginizer').'</li>
			<li>'.__('Thats all you need to do in this form, for other steps you can just click on next.', 'loginizer').'</li>
			<li>'.__('Once you are done with the steps in the Left Navigation go to Facebook Login then Settings.', 'loginizer').'</li>
			<li>'.__('The settings releated to OAuth will open there you will need to fill the Valid OAuth Redirect URIs field with this URL.', 'loginizer').'<code>'.esc_url(wp_login_url()).'?lz_social_provider=Facebook</code></li>
			<li>'.__('After adding the URL save changes and now from the Left Navigation go to App Settings the Basic.', 'loginizer').'</li>
			<li>'.__('On the Baisc page of App Settings you will find App ID and App Secret copy that as we need that to setup Facebook Login through Loginizer.', 'loginizer').'</li>
			<li>'.__('Now go to your WordPress admin then Loginizer then Social Login and then Facebook Settings', 'loginizer').'</li>
			<li>'.__('In the Facebook settings page add the App ID to client ID and App Secret to App Secret', 'loginizer').'</li>
			<li>'.__('Enable Facebook and save the settings, now a test info will show in there click on the Test button to verify that the setup went as expected.', 'loginizer').'</li>
		</ol>
	</div>';
}

function loginizer_how_to_github(){
	
	// NOTE: update the date of last updated of this doc if you make any change.
	echo '<div>
		<h2>'.__('Create Github App', 'loginizer').'</h2>
		<span><b>'.__('Last Updated','loginizer').':</b> 24th June 2024</span>
		<p>'.__('To allow your users to be able to login through their Github Account, you first need to create a Github App. For that follow the App creation steps below.', 'loginizer').'</p>
		<ol>
			<li>'.__('Go to Github developer settings page','loginizer').' <a href="https://github.com/settings/developers/" target="_blank">https://github.com/settings/developers/</a></li>
			<li>'.__('Make sure you are already logged in, if you are not then please login', 'loginizer').'</li>
			<li>'.__('Now you will be in Developer Settings page and make sure you are on the OAuth App tab.', 'loginizer').'</li>
			<li>'.__('There you will find a button to Register a New Application, Click on that button.', 'loginizer').'</li>
			<li>'.__('A form will appear, fill that form with the required details, and in Authorization Callback URL field enter this URL', 'loginizer').'<code>'.esc_url(wp_login_url()).'?lz_social_provider=GitHub</code></li>
			<li>'.__('Now save the details, and your client ID will be generated', 'loginizer').'</li>
			<li>'.__('Now in the Client Secret section, look for Generate a new client secret button and click it and it will generate the secret key', 'loginizer').'</li>
			<li>'.__('You have both keys with you now, so go to WordPress admin --> Loginizer --> Social Login --> in Provider tab go to Github and enter these keys in the respective fields and save it.', 'loginizer').'</li>
		</ol>
	</div>';
}

function loginizer_how_to_wordpress(){
	
	// NOTE: update the date of last updated of this doc if you make any change.
	echo '<div>
		<h2>'.__('Create WordPress App', 'loginizer').'</h2>
		<span><b>'.__('Last Updated','loginizer').':</b> 24th June 2024</span>
		<p>'.__('To allow your users to be able to login through their WordPress.com Account, you first need to create a WordPress.com Application. For that follow the Application creation steps below.', 'loginizer').'</p>
		<ol>
			<li>'.__('Go to WordPress.com developer App page.','loginizer').' <a href="https://developer.wordpress.com/apps/" target="_blank">https://developer.wordpress.com/apps/</a></li>
			<li>'.__('Make sure you are already logged in, if you are not then please login', 'loginizer').'</li>
			<li>'.__('Now you will be in WordPress.com Developer My Application page.', 'loginizer').'</li>
			<li>'.__('There you will find a link to Create new Application a New Application, Click on that link.', 'loginizer').'</li>
			<li>'.__('A form will appear, fill that form with the required details, and in Redirect URLS field enter this URL', 'loginizer').'<code>'.esc_url(wp_login_url()).'?lz_social_provider=WordPress</code></li>
			<li>'.__('Now click on Create button and the App will be created.', 'loginizer').'</li>
			<li>'.__('You will need to go back to the My Application page, and find the app you just created and click on it', 'loginizer').'</li>
			<li>'.__('On the app page, in the bottom you will find OAuth information, Copy the client ID and client secret.', 'loginizer').'</li>
			<li>'.__('You have both keys with you now, so go to WordPress admin --> Loginizer --> Social Login --> in Provider tab go to WordPress and enter these keys in the respective fields and save it.', 'loginizer').'</li>
		</ol>
	</div>';
}

function loginizer_how_to_discord(){
	
	// NOTE: update the date of last updated of this doc if you make any change.
	echo '<div>
		<h2>'.__('Create Discord App', 'loginizer').'</h2>
		<span><b>'.__('Last Updated','loginizer').':</b> 24th June 2024</span>
		<p>'.__('To allow your users to be able to login through their Discord Account, you first need to create a Discord Application. For that follow the Application creation steps below.', 'loginizer').'</p>
		<ol>
			<li>'.__('Go to Discord developer App page.','loginizer').' <a href="https://discord.com/developers/applications" target="_blank">https://discord.com/developers/applications</a></li>
			<li>'.__('Make sure you are already logged in, if you are not then please login', 'loginizer').'</li>
			<li>'.__('Now you will be in Discord Developer Portal on Applications page.', 'loginizer').'</li>
			<li>'.__('There you will find a button which says New Application on the top right, click on that button.', 'loginizer').'</li>
			<li>'.__('A poup will appear, fill the Application name and check the terms and condition checkbox, and then click create.', 'loginizer').'</li>
			<li>'.__('A form will appear with optional fields fill those as per your wish and save them.', 'loginizer').'</li>
			<li>'.__('Now in the left navigation click on OAuth, and you will find client ID and an option to generate Client Secret', 'loginizer').'</li>
			<li>'.__('And add the Redirect URL as without that Login won\'t work, the URL is ', 'loginizer').'<code>'.esc_url(wp_login_url()).'?lz_social_provider=Discord</code></li>
			<li>'.__('Copy both Client ID and Client Secret and go to WordPress Admin, Loginizer, Social Login, Discord and enter the copied keys in the respective field and save it.', 'loginizer').'</li>
		</ol>
	</div>';
}

function loginizer_how_to_twitchtv(){

	// NOTE: update the date of last updated of this doc if you make any change.
	echo '<div>
		<h2>'.__('Create Twitch App', 'loginizer').'</h2>
		<span><b>'.__('Last Updated','loginizer').':</b> 24th June 2024</span>
		<p>'.__('To allow your users to be able to login through their Twitch Account, you first need to create a Twitch Application. For that follow the Application creation steps below.', 'loginizer').'</p>
		<ol>
			<li>'.__('There is a pre-requisite in Twitch that the account you are using to create the keys should have 2FA enabled on it. You can do it from this page','loginizer').' <a href="https://www.twitch.tv/settings/security" target="_blank">Security and Privacy</a></li>
			<li>'.__('After you have enabled 2FA go to Twitch developer page.','loginizer').' <a href="https://dev.twitch.tv/console/" target="_blank">https://dev.twitch.tv/console/</a></li>
			<li>'.__('Now from the left navigation go to Applications.', 'loginizer').'</li>
			<li>'.__('On the applications page click on Register your application button.', 'loginizer').'</li>
			<li>'.__('A form will appear, fill the Application name, in Category select Website integration and client type as Confidential.', 'loginizer').'</li>
			<li>'.__('Now the last field we need to fill is OAuth Redirect URLs in there add this URL.', 'loginizer').'<code>'.esc_url(wp_login_url()).'?lz_social_provider=TwitchTV</code></li>
			<li>'.__('After all the fields are filled click on save and a App will be created and you will be redirected to the Application page with your App listed there, now click on the manage button of the listed app.', 'loginizer').'</li>
			<li>'.__('You will get the Client ID and Client Secret here so copy them as we need to use them in Loginizer', 'loginizer').'</li>
			<li>'.__('Now go to WordPress Admin, Loginizer, Social Login, Twitch and enter the copied keys in the respective field and save it.', 'loginizer').'</li>
		</ol>
	</div>';
}

function loginizer_how_to_twitter(){

	// NOTE: update the date of last updated of this doc if you make any change.
	echo '<div>
		<h2>'.__('Create X App(Formly Twitter)', 'loginizer').'</h2>
		<span><b>'.__('Last Updated','loginizer').':</b> 24th June 2024</span>
		<p>'.__('To allow your users to be able to login through their X Account, you first need to create a X Project. For that follow the Project creation steps below.', 'loginizer').'</p>
		<ol>
			<li>'.__('Go to X Project page for that','loginizer').' <a href="https://developer.twitter.com/en/portal/projects-and-apps" target="_blank">Navigate to https://developer.twitter.com/en/portal/projects-and-apps</a></li>
			<li>'.__('If you don\'t have a developer account then apply for it by filling required details. It is mandatory to fill this form to get access to the developer account.', 'loginizer').'</li>
			<li>'.__('Once you have the developer account and you are on the Project and App page click on Add Project.','loginizer').'</li>
			<li>'.__('You will have to fill a form with Project name, use case, project desccription and then App name.', 'loginizer').'</li>
			<li>'.__('Once you do that it will show the API Key and API secret, copy that and come to your WordPress dashboard.', 'loginizer').'</li>
			<li>'.__('On your WordPress admin go to Loginizer, Social Login and then X(formly Twitter) there place the API key in Client ID and API Secret in Client Secret and enable it and save it.', 'loginizer').'</li>
			<li>'.__('The setup is not done yet, Loginzer will show a notice to test your Integration, but dont do it now, as few more steps are yet to be done, go back to Twitter Developer Accound and go to Project and APP from the Left Navigation then Your Project and then your APP.', 'loginizer').'</li>
			<li>'.__('On the page of your APP there will be a section named User authentication settings in that section click on Set up button.', 'loginizer').'</li>
			<li>'.__('Set up setting will appear in that set App Permission to Read and enable Request email from user.', 'loginizer').'</li>
			<li>'.__('Next in the Type of App select Web App and then in the App Info section in the Callback URI/Redirect URL set this URL', 'loginizer').'<code>'.esc_url(wp_login_url()).'?lz_social_provider=Twitter</code></li>
			<li>'.__('Next fill your Websites URL in Website URL field, then Twitter requires you to give it a Privacy Policy and Terms and Conditions page because we are requesting for user email. Fill those details and hit save', 'loginizer').'</li>
			<li>'.__('Now you can test Twitter Login on Loginizer so it can start showing on the Login page.', 'loginizer').'</li>
		</ol>
	</div>';
}