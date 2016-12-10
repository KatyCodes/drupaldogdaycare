![Checkfront](https://www.checkfront.com/images/logo/Checkfront-80.png)
Checkfront Drupal Booking Module
==========================

The [Checkfront Drupal Booking Module](http://www.checkfront.com/drupal/) seamlessly 
integrates Checkfront into your Drupal powered website.  This combines the robust publishing capabilities
of Drupal with the power of Checkfront.

This module is for Drupal 7.  

Except as otherwise noted, the Checkfront Drupal Module is licensed under the [GNU General Public License, Version 2]
(http://www.gnu.org/licenses/gpl-2.0.html)

Installation
-----

Use the package installer or copy the 'checkfront' module directory into your Drupal sites/all/modules directory.
Once you enable the module, click the link to the Checkfront setup page and follow the instructions listed.

Usage
-----

Once installed and configured, you can render a booking window anywhere in your site by creating a new article, and 
supplying the Checkfront shortcode: [checkfront]. 

```html
<h2>Booking Online!</h2>

[checkfront]
```

You can further customize how the booking portal renders by supplying options to the shortcode.

```html
<!-- Auto select a category -->
[checkfront category_id=1]

<!-- Filter a category-->
[checkfront category_id=1 options=filter]

<!-- Display the tabbed interface in a compact layout-->
[checkfront options=tabs,compact]

<!-- Use a custom background and font-->
[checkfront style='background-color:#000;color:#fff;font-family:Tahoma;width:800']
```
For a full list of available options, use the shortcode generator, or see the setup guide: [Online Bookings with Drupal and Checkfront](http://www.checkfront.com/drupal/);
