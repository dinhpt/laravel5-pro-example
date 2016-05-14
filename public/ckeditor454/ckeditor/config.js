/**
 * @license Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	  CKEDITOR.config.toolbar = 'Basic';
      CKEDITOR.config.toolbar_Basic =
     [
    
    
     { name: 'editing', items : [ 'Find','Replace','-','SelectAll','-','SpellChecker', 'Scayt' ] },
     { name: 'basicstyles', items : [ 'Bold','Italic','Underline','Strike','Subscript','Superscript','-','RemoveFormat' ] },
     '/',
     { name: 'paragraph', items : [ 'NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote','CreateDiv',
     '-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','-','BidiLtr','BidiRtl' ] },
     { name: 'links', items : [ 'Link','Unlink','Anchor' ] },
     { name: 'insert', items : [ 'Image','Table','HorizontalRule','Smiley','SpecialChar','PageBreak','Iframe' ] },
     '/',
    

    
    
     ];
      
      config.filebrowserBrowseUrl = '/kcfinder/browse.php?opener=ckeditor&type=files';
      config.filebrowserImageBrowseUrl = '/kcfinder/browse.php?opener=ckeditor&type=images';
      config.filebrowserFlashBrowseUrl = '/kcfinder/browse.php?opener=ckeditor&type=flash';
      config.filebrowserUploadUrl = '/kcfinder/upload.php?opener=ckeditor&type=files';
      config.filebrowserImageUploadUrl = '/kcfinder/upload.php?opener=ckeditor&type=images';
      config.filebrowserFlashUploadUrl = '/kcfinder/upload.php?opener=ckeditor&type=flash';
	
	
	
};
