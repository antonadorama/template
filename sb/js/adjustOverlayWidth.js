window.onload = adjustSize;
window.addEventListener("resize", adjustSize);


function adjustSize(){
  var imageWidth = parseInt($('.professional-item-wrapper img').css('width'));
  var overlayWidth = (imageWidth * 0.96) + 'px';

  $('.professional-overlay').css('width', overlayWidth);
}
