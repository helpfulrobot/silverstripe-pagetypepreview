<?php 
/**
 * extends the @see Page class
 * @package pagetypepreview
 * @subpackage code
 * @subpackage extensions
 */
class PageTypePreviewPageExtension extends DataExtension {
    
    /**
     * Preview image for use in CMS add page screen.
     * This should be the full filename, relative to the webroot
     * 
     * @config
     * @var string
     */
    private static $preview_image = '';
      
}

?>