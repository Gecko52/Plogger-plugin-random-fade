Plogger Random Image Fade
-----------------------

About
------

This script Displays a specified number of random thumbnails from your gallery Albums on your website. This Plugin can show any selected Album on any given page, using a java script image fade and replace effect.

Installation/Set-up
------------------
Save all files into a directory named "random-fade" (without the quotes).
Upload the /random-fade/ folder to your Plogger /plog-content/plugins/ folder. To include random fade images in your website page, click "Use this plugin" and copy the php code shown in the instructions section. Note the generated code from the plog-plugins.php file is incomplete for this plugin DO NOT USE IT!
There are two part to copy and paste into the page(s) that you want the Random Fade Images. The first part goes into the <head> section of the the page(s) where you would like the Random Fade Images. The second part goes into the <Body> section and placed where you want the images to show.

The default number of images to display is 5. If you need to change the number of images, edit random-fade.php and change the result for the variable $plog_random_images_amount to indicate the number of images you want displayed.

Album selection setup
-----------------
Random Fade Images for a Spacific Album is controled with the <?php $gal_id ='1'; ?> variable value, in this example the number 1 is the Album ID number. This Album ID number can be found from within the "Manage" tab by navigating to the desired Album listing and puting you mouse over the link to that Album. Your browser will display the link, the last number is the ID number for that Album. 

Using this method your can have a different selected Album display on each page for as many Albums as you have. By omitting the <?php $gal_id ='1'; ?> variable the random fade images will be pulled from all your Collections.

Additional notes
---------------
Styling
-------
The css class assigned to the thumbnails that is used to style the thumbs on the page is part of the "Code" to be copied when you click on the "Use This Plugin" link from within the admin pluging page.

Sample Below:
<style type="text/css">
.slideshow { height: 200px; width: 200px; margin: 10px 10px 0 0; }
.slideshow img { padding: 0px 0; border: 2px solid #505F70; background-color: transparent; box-shadow: 6px 6px 4px #888888; border-radius:8px; }
</style>

The height and width of the .slideshow should be set to the same size as your thumbnail size setting in the Admin "Options" tab. The .slideshow img is for styling the image itself.

License
-------

This plugin is released under the GNU General Public License (GPL) license.
