jQuery(document).ready(function($){

	var form = $('.header-form'),
		action = form.attr('action'),
		pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;

	form.find('.req-field').addClass('empty-field');
		$.ajax({
			type: 'POST',
			url: action,
			data: formData,
			beforeSend: function () {
				form.addClass('is-sending');
			},
			error: function (request, txtstatus, errorThrown) {
				console.log(request);
				console.log(txtstatus);
				console.log(errorThrown);
			},
			success: function () {
				alert('cheked mail')
			}
		});

		e.preventDefault();

	});

	$(document).on('click', '.form-send-mail button[type="submit"]', function (e) {

		checkInput();

		var errorNum = form.find('.empty-field').length;

		if (errorNum > 0) {
			lightEmpty();
			e.preventDefault();
		}

	});

	$(document).on('click', '.form-is-more button', function () {

		form.find('input').val('');

		form.find('textarea').val('');

		form.removeClass('is-sending-complete');

	});