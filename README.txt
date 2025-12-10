=== Plugin Name ===
Contributors: MB
Donate link: https://data.chiptuningreseller.com
Tags: car, vehicle, database, api
Requires at least: 4.3.1
Tested up to: 5.5
Stable tag: 4.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Chiptuning Reseller Wordpress plugin to show vehicle tuning data on your website
Requires PHP 7+!

== Description ==

This API connector will connect to the ChiptuningReseller application.

With this plugin you're able to:

*   Show vehicle types
*   Show vehicle brands
*   Show vehicle models / series
*   Show vehicle builds (year and model type)
*   Show vehicle engine types
*		Show tuning options per engine
*		Show brand logo's
*		Show dyno charts
*		Show stage power charts
*		Show stage power charts
*		Customisation functionalities
* 	Advanced caching

Suggestions for new functionality can be sent to support[@]chiptuningreseller.com

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/plugin-name` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Use the Settings->Chiptuningreseller screen to configure the plugin
4. Make sure you enter the correct API Key you can acquire in the ChiptuningReseller Dashboard (https://data.chiptuningreseller.com)


== Frequently Asked Questions ==

= I don't see any data =

Make sure your API key is correct. If that is the case, check if you can connect to app.chiptuningreseller.com/api/v1. Contact support on our website if needed.

== Changelog ==

== 6.4.7 ==
Bugfixes
Colorpicker now automatically converts to rgba if needed
Updated translations

== 6.4.6 ==
Fixed various issues regarding error messages, loading footer and header in block themes
Added warning in main screen if permalink structure is set to none, which prevents loading via the start_url functionality

== 6.4.5 ==
Some small updates

== 6.4.4 ==
Bugfix translation in dropdown selector

== 6.4.3 ==
Bugfix 

== 6.4.2 ==
Optionally disable autoredirect in Dropdown Selector

== 6.4.1 ==
Bugfix in data response for selector (engines)

== 6.4.0 ==
VueJS now integrated in selector script

== 6.3.9 ==
Bugfix: load Selector JS deferred, to make sure VueJS is loaded first

== 6.3.8 ==
Bugfix: wp_is_block_theme for older WP installations now checked if exists
 
== 6.3.7 ==
Ability to show Engine Code in engine overview for better distinctive results

== 6.3.6 ==
Also flush the cache from API on ctr_flush
Show an error page instead of WP Error if engine is missing

== 6.3.5 ==
Fixed bug where WPB pages weren't correctly rendered anymore (due to fix for Oxygen)

== 6.3.4 ==
Translation updates

== 6.3.3 ==
Removed conflicting non-closed css
Do not reset settings on activating if plugin already installed before

== 6.3.2 ==
CSS updates (now allow 2 columns by default (mobile) mode)

== 6.3.1 ==
CSS updates (now allow 2 columns in XS mode)

== 6.3.0 ==
Bugfix in flushing cache

== 6.2.9 ==
Fixed translation of vehicle type in breadcrumbs

== 6.2.8 ==
Added German language
Oxygen template builder fix

== 6.2.7 ==
Updated uninstallation functionality

== 6.2.6 ==
Fixed footer inclusion 
Fixed link to theme editor in admin

== 6.2.5 ==
Fixed inverted values for linechart

== 6.2.4 ==
Updated default template (code fix media retrieval) of stages

== 6.2.3 ==
Fixed retrieval of larger media types (templates need some adjustment: replace ctr_get_image_by_url($serie['thumb'], 'medium') with ctr_get_image_by_id($serie['media'][0]['id'], 'medium') )

== 6.2.2 ==
Fixed charts (HP and Nm issues)
Removed 'In development' text showing up

== 6.2.1 ==
Added warning message for copying templates if they exist already
Fixed link to admin template editor

== 6.2.0 ==
Bugfix in selector when not authenticated (showed login page)

== 6.1.9 ==
Fixed not showing of increaser values
disable body class injection (not needed and only causes issues)

== 6.1.8 ==
bugfix

== 6.1.7 ==
- Allow the use of Gutenberg Headers and Footers
- Now respect disabling header / footer / sidebar
- No double get_header and get_footer anymore in default template files

== 6.1.6 ==
- Media copying functionality in Admin
- Updated translations

== 6.1.5 ==
- Also save unchecked boxes (turning stuff off)
- Passing those options to template elements

== 6.1.4 ==
- Also show seo description for series in model overview page
- Small bugfixes

== 6.1.3 ==
- bugfix: type selector contained semicolon

== 6.1.2 ==
- Add 'in development' text
- Show Brand SEO texts in Series

== 6.1.1 ==
- Added some CSS for animating selector JS control

== 6.1.0 ==
- Better instructions and selector JS control added

== 6.0.9 ==
- Allow to show specific vehicle types in dropdown selector (see admin help section for information)

== 6.0.8 ==
- Fixed SEO titles display

== 6.0.7 ==
- Fixed SEO titles

== 6.0.6 ==
- Fixed dynographs not showing correctly

== 6.0.5 ==
- Increased cache time
- Better caching for engine by tags

== 6.0.4 ==
- Added Oxygen plugin support

== 6.0.3 ==
- Further documentation on the help tab
- Enabled the show_barchart and show_dynosheet options
- Added custom header/footer template parts
- a:visited styling fixed

== 6.0.2 ==
- Added more translations, but need work due to PoEDIT errors
- Added fixed price functionalities
- Show vehicle brands immediately if only one vehicle type enabled

== 6.0.1 ==
- Added better translations, but need work due to PoEDIT errors
- Added show price functionality, including currency setting
- Small fixes (_esc_html_e shortcut)

== 6.0.0 ==
Initial release - this release can still contain some small minor bugs