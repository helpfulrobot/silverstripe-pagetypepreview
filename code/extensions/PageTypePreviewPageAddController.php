<?php
/**
 * extends the @see CMSPageAddController class
 * @package adminpagepreview
 * @subpackage code
 * @subpackage extensions
 */ 
class PageTypePreviewPageAddController extends DataExtension {
    
    /**
     * creates a list of page types, and adds
     * the preview link
     * @param FieldList
     */
    public function updatePageOptions($fields){
        //css requirements
        Requirements::css('pagetypepreview/css/page-type-preview.css');               
        
        $pageTypesField = $fields->fieldByName('PageType');
               
        $pageTypes = array();

        foreach($this->owner->PageTypes() as $type) {   
            $instance = singleton($type->getField('ClassName'));
            
            //add the preview link if this page type has a preview to show
            if($instance->stat('preview_image')){                                              
                $html = sprintf('<span class="page-icon class-%s"></span><strong class="title">%s</strong><span class="description">%s</span><a href="%s" class="ss-ui-dialog-link page-type-preview" title="Preview this page type"><img src="pagetypepreview/images/page-preview-magnifier.png" alt="preview this page type" /></a>',
                        $type->getField('ClassName'),
                        $type->getField('AddAction'),
                        $type->getField('Description'),
                        $instance->stat('preview_image')
                );
                $pageTypes[$type->getField('ClassName')] = $html;                            
            }else {
                $html = sprintf('<span class="page-icon class-%s"></span><strong class="title">%s</strong><span class="description">%s</span>',
                        $type->getField('ClassName'),
                        $type->getField('AddAction'),
                        $type->getField('Description')                      
                );
                $pageTypes[$type->getField('ClassName')] = $html;
            }                      				
		}

		//update the source array to the new one just created
        $pageTypesField->setSource($pageTypes);
                 
    }
}

?>