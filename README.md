# SilverStripe-PageTypePreview
====================================

![Screenshot] (http://webbuildersgroup.com/assets/github-images/pagetypepreview/cmspagepreview.png)
![Screenshot] (http://webbuildersgroup.com/assets/github-images/pagetypepreview/cmspagepreview-dialog.png)

Allows CMS admins to view an image in a SilverStripe dialog popup from the "Add Page" screen.
Requires developer to make a screenshot of the page type but can be useful for sites that contain 
many different page types, or page types that are similar with slightly different layouts.

## Maintainer Contact

Ryan McLaren (Nickname: IOTI) <ryan (at) webbuildersgroup (dot) com>

## Requirements

 * SilverStripe 3.1 or higher

## Installation & Documentation

 * Download and extract folder to SilverStripe root directory.
 * Do a dev/build
 
## Usage

Add a new private static $preview_image to your class with the full relative link to your preview image.
 
    class Page Extends SiteTree { 
         private static $preview_image = 'themes/yourtheme/images/pagepreviews/page.jpg';
    }
     
Anytime you add or change the $preview_image static you will need to run a dev/build. If you want to hide the preview link on a particular page type 
use an empty string.
 
     private static $preview_image = '';