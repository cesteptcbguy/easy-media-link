=== Easy Media Link ===
Contributors: tcbguys
Tags: admin bar, toolbar, media, media library, frontend
Requires at least: 6.0
Tested up to: 6.8
Requires PHP: 7.4
Stable tag: 1.0.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Adds a quick “Media Library” link to the WordPress admin bar when you’re logged in and viewing the front end.

== Description ==

**Easy Media Link** puts the Media Library right at your fingertips on the front end. When a logged-in user with the capability to upload files visits the site (not wp-admin), this plugin adds a handy “Media Library” link to the admin bar’s site menu.

**Key points:**
- Only shows to users who can `upload_files`.
- Only displays on the front end (not inside wp-admin).
- Uses `admin_url( 'upload.php' )` so it works with multisite and subdirectory installs.
- Zero configuration. No settings page. Activate and go.
- No tracking, no external calls, no ads.

**Privacy:** This plugin does not collect, store, or transmit any personal data.

== Installation ==

1. Upload the `easy-media-link` folder to `/wp-content/plugins/` (or install via **Plugins → Add New** by uploading the ZIP).
2. Activate the plugin through **Plugins** in WordPress.
3. While logged in, visit any front-end page. Open the admin bar and look under the site menu for **Media Library**.

== Frequently Asked Questions ==

= Who sees the link? =
Only logged-in users with the `upload_files` capability (e.g., Administrators, Editors with media permissions).

= Where does the link appear? =
In the admin bar on the front end, under the site menu section. Clicking it goes to your dashboard’s **Media → Library** (`/wp-admin/upload.php`).

= Are there any settings? =
No. It’s intentionally simple.

= Is it multisite compatible? =
Yes. The link is generated with `admin_url()`, which respects subdirectory and multisite setups.

== Screenshots ==

1. The “Media Library” link visible in the front-end admin bar when logged in.

== Changelog ==

= 1.0.0 =
* Initial release: adds a Media Library link to the admin bar on the front end for users who can upload files.

== Upgrade Notice ==

= 1.0.0 =
Initial release.
