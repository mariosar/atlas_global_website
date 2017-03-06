		<script src="js/jquery-2.1.4.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/formsubmit.js"></script>
		<script src="js/faq.js"></script>
		<script src="js/parallax.js"></script>
		<script src="js/custom.js"></script>		
		<script type="text/javascript">
			$(document).ready(function(){
				function centerModals(){
				  $('.modal').each(function(i){
				    var $clone = $(this).clone().css('display', 'block').appendTo('body');
				    var top = Math.round(($clone.height() - $clone.find('.modal-content').height()) / 2);
				    top = top > 0 ? top : 0;
				    $clone.remove();
				    $(this).find('.modal-content').css("margin-top", top);
				  });
				}
				$('.modal').on('show.bs.modal', centerModals);
				$(window).on('resize', centerModals);
			});
		</script>
		<script>
		