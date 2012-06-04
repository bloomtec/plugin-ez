$(function(){// CONFIGURACIONES JQUERYS PLUGINS
	$('textarea.ckeditor').ckeditor(function(){}, { 
		filebrowserUploadUrl : '/wysiwyg/upload.php',
		filebrowserBrowseUrl : '/admin/Ez/pages/fileBrowser',
	});

});