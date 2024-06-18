<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

<script>
	/**Sidebar**/
	$('[open-sidebar]').on('click', function() {
		var id = $(this).attr('open-sidebar');
		$('.theme-sidebar#' + id).addClass('active');
		$('body').addClass('sidebar-active')
	});

	$('[close-sidebar]').on('click', function() {
		$(this).parents('.theme-sidebar').removeClass('active');
		$('body').removeClass('sidebar-active')
	});

	/**Menu Toggle**/
	document.addEventListener('DOMContentLoaded', function() {
		const toggleButton = document.querySelector('.theme-menu-toggle');
		const menuWrapper = document.querySelector('.theme-menu-wrapper');
		const body = document.body;

		toggleButton.addEventListener('click', function(event) {
			event.preventDefault();
			menuWrapper.classList.toggle('menu-active');
			body.classList.toggle('menu-active');
		});
	});
	/**End Menu Toggle**/
	/**Menu Accordion**/
	function menuAccordion(element) {
		const parent = element.parentElement;
		const subMenu = parent.querySelector('.menu-sub');

		if (parent.classList.contains('active')) {
			subMenu.style.maxHeight = null;
			parent.classList.remove('active');
		} else {
			const activeAccordions = document.querySelectorAll('.menu-accordion.active');
			activeAccordions.forEach(accordion => {
				accordion.classList.remove('active');
				accordion.querySelector('.menu-sub').style.maxHeight = null;
			});

			parent.classList.add('active');
			subMenu.style.maxHeight = subMenu.scrollHeight + 'px';
		}
	}
	/**End Menu Accordion**/
	// ----floatin input label in input and select
	$('.form-group').find('.form-control').each(function(index, ele) {
		var $ele = $(ele);
		if ($ele.val() != '' || $ele.is(':selected') === true) {
			$ele.parents('.form-group').addClass('focused');
		}
	})
	$('.form-control').on('focus', function(e) {
		$(this).parents('.form-group').addClass('focused');
	}).on('blur', function() {
		if ($(this).val().length > 0) {
			$(this).parents('.form-group').addClass('focused');
		} else {
			$(this).parents('.form-group').removeClass('focused');
		}
	});
	$('.form-control').on('change', function(e) {
		if ($(this).is('select')) {
			if ($(this).val() === $("option:first", $(this)).val()) {
				$(this).parents('.form-group').removeClass('focused');
			} else {
				$(this).parents('.form-group').addClass('focused');
			}
		}
	})


	$('.form-group').find('.form-control').each(function(index, ele) {
		var $ele = $(ele);
		if ($ele.val() != '' || $ele.is(':selected') === true) {
			$ele.parents('.form-group-combine').addClass('focused');
		}
	})
	$('.form-control').on('focus', function(e) {
		$(this).parents('.form-group-combine').addClass('focused');
	}).on('blur', function() {
		if ($(this).val().length > 0) {
			$(this).parents('.form-group-combine').addClass('focused');
		} else {
			$(this).parents('.form-group-combine').removeClass('focused');
		}
	});
	$('.form-control').on('change', function(e) {
		if ($(this).is('select')) {
			if ($(this).val() === $("option:first", $(this)).val()) {
				$(this).parents('.form-group-combine').removeClass('focused');
			} else {
				$(this).parents('.form-group-combine').addClass('focused');
			}
		}
	})


	// --------select2-------
	$(document).ready(function() {
		//---- select2 single----
		$('.select').each(function() {
			var dropdownParents = $(this).parents('.form-group')
			$(this).select2({
				dropdownParent: dropdownParents,
				minimumResultsForSearch: -1
			}).on("select2:open", function(e) {
				$(this).parents('.form-group').addClass('focused');
			}).on("select2:close", function(e) {
				if ($(this).find(':selected').val() === '') {
					$(this).parents('.form-group').removeClass('focused');
				}
			});
		});

		//---- select2 multiple----
		$('.select-multiple').each(function() {
			var dropdownParents = $(this).parents('.form-group');
			// var placehldrget = $(this).attr("data-placeholder");
			$(this).select2({
				dropdownParent: dropdownParents,
				// placeholder: placehldrget,
				// tags: true,
				// closeOnSelect: false,
			}).on("select2:open", function(e) {
				$(this).parents('.form-group').addClass('focused');
			}).on("select2:close", function(e) {
				if ($(this).val() != '') {
					$(this).parents('.form-group').addClass('focused');
				} else {
					$(this).parents('.form-group').removeClass('focused');
				}
			}).on("select2:select", function(e) {
				$(this).parents('.form-group').addClass('focused');
			}).on("select2:unselect", function(e) {
				$(this).parents('.form-group').addClass('focused');
			})
		});
	});

	//Custom file uploald
	$('#file-upload').change(function() {
		var i = $(this).prev('label').clone();
		var file = $('#file-upload')[0].files[0].name;
		$(this).prev('label').text(file);
	});
</script>