<?php
if($this->config->item('tinymce')){
					if($this->uri->segment(2)!='attempt'){
					if($this->uri->segment(2)!='view_result'){

					if($this->uri->segment(2)!='config'){
					if($this->uri->segment(2)!='css'){


	?>
	<script type="text/javascript" src="<?php echo base_url();?>editor/tiny_mce.js"></script>
	<script type="text/javascript">
 <?php
 if($this->uri->segment(2)=='edit_quiz' || $this->uri->segment(2)=='add_new' ){
?>
			tinyMCE.init({

    mode : "textareas",
	editor_selector : "tinymce_textarea",
	theme : "advanced",
		relative_urls:"false",
	 plugins: "jbimages",


  // ===========================================
  // PUT PLUGIN'S BUTTON on the toolbar
  // ===========================================



		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons4 : "jbimages,insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft,visualblocks",


	});

<?php
 }else{
?>

			tinyMCE.init({

    mode : "textareas",
		theme : "advanced",
		relative_urls:"false",
	 plugins: "jbimages",


  // ===========================================
  // PUT PLUGIN'S BUTTON on the toolbar
  // ===========================================



		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons4 : "jbimages,insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft,visualblocks",


	});

<?php
 }
 ?>

</script>


	<?php
						}
					}
			}
		}
	}
?>
<div class="row">

<div class="container" style="text-align:right;">
Bản quyền thuộc <a href="http://ttth.thuathienhue.edu.vn/">TRUNG TÂM TIN HỌC</a> SỞ GD&ĐT THỪA THIÊN HUẾ

</div>
	<div align="center">
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<!-- Footer -->
		<ins class="adsbygoogle"
			 style="display:inline-block;width:728px;height:90px"
			 data-ad-client="ca-pub-6768496471204095"
			 data-ad-slot="6503002561"></ins>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
	</div>
</div>
</body>
</html>
