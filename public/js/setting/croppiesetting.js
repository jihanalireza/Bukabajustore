$(document).ready(function () {
	var croppiewebsite = $('#cropimagewebsite').croppie({
		enableExif: true,
		viewport: {
			width: 400,
			height: 200,
			type: 'square'
		},
		boundary: {
			width: 400,
			height: 250
		},
		enableZoom: true,
		url:'../../image/chooseimage2.png'
	});

	$('.inputImagewebsite').change(function () {
		var reader = new FileReader();
		reader.onload = function (e) {
			$('#cropimagewebsite').croppie('bind', {
				url: e.target.result
			}).then(function () {
				$('.accepted').html('<button class="btn btn-large waves-effect pull-right waves-light green apply">Apply</button>');
			});
		};
		reader.readAsDataURL($(this).get(0).files[0]);
	});

	$(document).on('click','.apply',function (event) {
		event.preventDefault();
		croppiewebsite.croppie('result','base64').then(function (result) {
			$('#cropimagewebsite').hide();
			$('.accepted').html('<button class="btn btn-large waves-effect pull-right waves-light green cancel">Cancel</button>');
			$('#showimagewebsite').html('<img src="'+result+'">');
			$('input[name="imageWebsite"]').val(result);
		});
	});

	$(document).on('click','.cancel',function (event) {
		event.preventDefault();
			$('#cropimagewebsite').show();
			$('.accepted').html('<button class="btn btn-large waves-effect pull-right waves-light green apply">Apply</button>');
			$('#showimagewebsite').html('');
			$('input[name="imageWebsite"]').val('');
		});

});
