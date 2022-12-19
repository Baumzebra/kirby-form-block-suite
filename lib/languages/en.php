<?php

return [
	'form.block.name' 						=> 'Form',
	'form.block.default.help'				=> 'Leave blank for default text',
	'form.block.inbox' 						=> 'Inbox',
	'form.block.inbox.empty' 				=> 'No emails to show',
	'form.block.inbox.asread' 				=> 'Mark as read',
	'form.block.inbox.asunread' 			=> 'Mark as unread',
	'form.block.inbox.delete' 				=> 'Delete',
	'form.block.inbox.new'	    			=> 'New',
	'form.block.inbox.loading'	    		=> 'Loading...',
	'form.block.inbox.show'	    			=> 'Show requests',
	'form.block.inbox.failed'    			=> 'failed',
	'form.block.inbox.error'    			=> 'Unable to get stats',
	'form.block.inbox' 						=> 'Inbox',
	'form.block.inbox.tooltip.read' 		=> 'This request has already been read',
	'form.block.inbox.tooltip.unread' 		=> 'This request has not been read yet',
	'form.block.inbox.notinblock'    		=> 'The mail view field can only used in form blocks',

	'form.block.fromfields' 							=> 'Form fields',
	'form.block.fromfields.label' 						=> 'Display name',
	'form.block.fromfields.width' 						=> 'Width',
	'form.block.fromfields.width1' 						=> 'Full width',
	'form.block.fromfields.width2' 						=> 'Half',
	'form.block.fromfields.width3' 						=> 'Third',
	'form.block.fromfields.width4' 						=> 'Quarter',
	'form.block.fromfields.slug' 						=> 'Unique identifier',
	'form.block.fromfields.autofill'	 				=> 'Context',
	'form.block.fromfields.required' 					=> 'Required',
	'form.block.fromfields.required_fail' 				=> 'Error text',
	'form.block.fromfields.display'						=> 'Display title',
	'form.block.fromfields.display.help'				=> 'Needed to display the emails in the panel. You can use the unique identifier of the fields as placeholder (e.g. \{\{name\}\})',

	'form.block.fromfields.input' 						=> 'Textfield',
	'form.block.fromfields.input.inputtype' 			=> 'Input type',
	'form.block.fromfields.input.inputtype.text' 		=> 'text',
	'form.block.fromfields.input.inputtype.number' 		=> 'Number',
	'form.block.fromfields.input.inputtype.email' 		=> 'Email',
	'form.block.fromfields.input.inputtype.tel' 		=> 'Phone',
	'form.block.fromfields.input.inputtype.url' 		=> 'Website',
	'form.block.fromfields.input.inputtype.password' 	=> 'Password',
	'form.block.fromfields.input.inputtype.hidden' 		=> 'Hidden',
	'form.block.fromfields.input.placeholder' 			=> 'Placeholder',
	'form.block.fromfields.input.default'				=> 'Default',
	'form.block.fromfields.input.validate' 				=> 'Validation',
	'form.block.fromfields.input.validate' 				=> 'Validation',
	'form.block.fromfields.input.validate.msg' 			=> 'Error message',
	'form.block.fromfields.input.fields' 				=> 'Validation type',
	'form.block.fromfields.input.fields.alpha' 			=> 'Text only',
	'form.block.fromfields.input.fields.num' 			=> 'Numbers only',
	'form.block.fromfields.input.fields.minLength' 		=> 'Min. number of characters',
	'form.block.fromfields.input.fields.maxLength' 		=> 'Max. Number of characters',
	'form.block.fromfields.input.fields.min' 			=> 'Minimum value',
	'form.block.fromfields.input.fields.max' 			=> 'Maximum value',
	'form.block.fromfields.input.fields.email' 			=> 'Email',
	'form.block.fromfields.input.fields.url' 			=> 'Website',
	'form.block.fromfields.input.fields.match' 			=> 'Regular expression',
	'form.block.fromfields.input.fields.match.help' 	=> "<a href='https://www.regextester.com/' target='_blank'>More Information</a>",
	'form.block.fromfields.input.fields.msg' 			=> "Error message",

	'form.block.fromfields.textarea' 					=> 'Textarea',
	'form.block.fromfields.textarea.placeholder' 		=> 'Placeholder',
	'form.block.fromfields.textarea.row' 				=> 'Number of rows',
	'form.block.fromfields.textarea.man' 				=> 'Max. Characters',

	'form.block.fromfields.checkbox' 					=> 'Multiple selection',
	'form.block.fromfields.checkbox.columns' 			=> 'Number of columns',
	'form.block.fromfields.checkbox.options' 			=> 'Selection',
	'form.block.fromfields.checkbox.options.label' 		=> 'Display name',
	'form.block.fromfields.checkbox.options.slug' 		=> 'Unique identifier',
	'form.block.fromfields.checkbox.options.selected' 	=> 'Selected',

	'form.block.fromfields.radio' 						=> 'Selection',
	'form.block.fromfields.radio.columns' 				=> 'Number of columns',
	'form.block.fromfields.radio.default' 				=> 'Selected',
	'form.block.fromfields.radio.default.help' 			=> 'Reopen dialog if not current.',
	'form.block.fromfields.radio.options' 				=> 'Selection',
	'form.block.fromfields.radio.options.label' 		=> 'Display name',
	'form.block.fromfields.radio.options.slug' 			=> 'Unique identifier',

	'form.block.fromfields.select' 						=> 'Dropdown',
	'form.block.fromfields.select.placeholder' 			=> 'Placeholder',
	'form.block.fromfields.select.default' 				=> 'Selected',
	'form.block.fromfields.select.default.help' 		=> 'Reopen dialog if not current.',
	'form.block.fromfields.select.options' 				=> 'Selection',
	'form.block.fromfields.select.options.label' 		=> 'Display name',
	'form.block.fromfields.select.options.slug' 		=> 'Unique identifier',

	'form.block.fromfields.file'  						=> 'Attachment',
	'form.block.fromfields.file.accept'  				=> 'Accepted MIME type',
	'form.block.fromfields.file.accept.help'  			=> 'You can also use placeholder (like image/* for any kind of images). <a href="https://developer.mozilla.org/en-US/docs/Web/HTTP/Basics_of_HTTP/MIME_types/Common_types" target="_blank">More Info</a>',
	'form.block.fromfields.file.accept.fail'  			=> 'Error message for wrong MIME types',
	'form.block.fromfields.file.maxsize'  				=> 'Max. filesize/file',
	'form.block.fromfields.file.maxsize.help'  			=> 'The maximum file size can be limited by the server.',
	'form.block.fromfields.file.maxnumber'  			=> 'Max. number of files',
	'form.block.fromfields.file.warning.label'  		=> 'Warning!',
	'form.block.fromfields.file.warning.text'  			=> 'Be careful with executable file types (e.g. application/zip, application/msword). These may contain malware.',

	'form.block.options' 						=> 'Options',
	'form.block.options.email.help'				=> 'Multiple recipients possible. Separated with `;`',
	'form.block.options.enable_notify' 			=> "Send notification",
	'form.block.options.notify_email' 			=> "Recipient address",
	'form.block.options.notify_subject' 		=> "Subject",
	'form.block.options.notify_body' 			=> "Message",
	'form.block.options.enable_confirm' 		=> "Send confirmation",
	'form.block.options.confirm_email' 			=> "From address",
	'form.block.options.confirm_subject' 		=> "Subject",
	'form.block.options.confirm_body' 			=> "Message",
	'form.block.options.redirect' 				=> "On success",
	'form.block.options.redirect.on' 			=> "Show text",
	'form.block.options.redirect.off'			=> "Redirect visitor",
	'form.block.options.success_text'			=> "Confirmation text",
	'form.block.options.success_url' 			=> "Redirect",
	'form.block.options.invalid_message'		=> "On validation error",
	'form.block.options.fatal_message'			=> "On fatal error ",
	'form.block.options.send_button' 			=> "Send button",

	'form.block.placeholdes.summary' 			=> "Summary",

];
