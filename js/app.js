var videoWidth = $('iframe').width();
videoHeight = videoWidth * .61;
$('iframe').css('height', videoHeight);

var SingleRoomSliderdWidth = $('.simple-slider').width();
var SingleRoomSliderdHeight = SingleRoomSliderdWidth * .74;
$('.thumb-preview').css('height', SingleRoomSliderdHeight);
$('.imng-preview').css('height', SingleRoomSliderdHeight);

// flatpickr Calendar configuration
flatpickr(".flatpickr");