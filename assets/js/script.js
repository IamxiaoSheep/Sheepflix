const volumeToggle = (button) => {
  var muted = $(".previewVideo").prop("muted");
  $(".previewVideo").prop("muted", !muted);

  $(button).find("i").toggleClass("fa-volume-xmark");
  $(button).find("i").toggleClass("fa-volume-high");
};

const previewEnded = () => {
  $(".previewVideo").toggle();
  $(".previewImage").toggle();
};
