<h3>Kazoto Rebrand Plugin</h3>

<p>
  This plugin allows you to rebrand your wordpress blog to your own brand.
  <br>Options include (as of 1.0 Alpha)<br>
  <ol>
    <li>Remove WP Logo in admin bar.</li>
    <li>Remove Wordpress News in admin Dashboard</li>
    <li>Remove or Change the text of "Thank you for creating with wordpress" HTML allowed.</li>
    <li>Change default avatar</li>
    <li>Change Login Screen Logo</li>
    <li>Change outbound email FROM fields both email and name.</li>
    <li>Change Registration Email subject</li>
    <li>Change Registration Email Message</li>
    <li>Registration email options have {{CODES}} that are useable to replace with actual user data.</li>
  </ol>
</p>

<h3>For advanced users</h3>
<p>
  There are plenty of hooks and filters you can use to further customize the admin use experience.
</p>

<h3>Kazoto Rebrand Filters:</h3>
<ul>
  <li>Slugs:
    <ol>
      <li>kazoto_rebrand_plugin_slugs_kazoto-rebrand <br> The slug for the main page of the plugin UI.</li>
    </ol>
  </li>
  <li>kazoto_rebrand_plugin_title <br> Changes anything that says Kazoto Rebrand <br> This has a Admin UI field in master options.</li>
</ul>

<h3>Kazoto Rebrand Actions:</h3>

<ul>
  <li>update_kazoto_rebrand_main_options <br> Runs before updating main options. <br> Supplies options array after being processed from POST. </li>
  <li>update_kazoto_rebrand_email_options <br> Runs before updating email options <br> Supplies options array after being processed from POST. </li>
  <li>update_kazoto_rebrand_master_options <br> Runs before updating master options <br> Supplies master options array after being processed by post.</li>
</ul>

<h3>Kazoto Rebrand Master Options UI</h3>

<p>
  You can change alot of the ui features of the plugins interface through master options. By default the master options link is in the footer of the plugin, but you can add a tab menu in header to access master options easier.
  <br><br>
  Master options include:
</p>

<ol>
  <li>Remove Footer <br><span style="color: orange;">Turn on master options tab as you will not be able to visually access the master options menu after footer is hidden. You can still access master options anytime via addresss bar in your browser at admin.php?page=krbd-master-options</span></li>
  <li>Remove Header <br>Will not remove the master and main tab navigation, just the welcome and subheader text.</li>
  <li>Remove Subheader</li>
  <li>Include Master Options tab<br>Creates a tab menu for main and master optons. Recommended if you remove the footer.</li>
  <li>Header text <br> Can change header text </li>
  <li>Subheader Text<br> Change subheader text<li>
  <li>Plugin Name<br> This is a visual UI to add a filter to change plugin name. you can also change plugin name via the kazoto_rebrand_plugin_title filter.</li>
</ol>

<h3>Thanks for choosing Kazoto Rebrand.</h3>

<p>
  Dont forget if this helped you, or you enjoyed this plugin, make a donation at <a href="http://kazoto.com/donate">http://kazoto.com/donate/</a>. Thank you for choosing kazoto rebrand.
</p>
