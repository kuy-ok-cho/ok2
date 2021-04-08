/* Demo purposes only */
$(".hover").mouseleave(function () {
  $(this).removeClass("hover");
});

// fullpage js//

$(function () {
  $("#fullpage").fullpage({
    //options here
    anchors: ["section1", "section2", "section3", "section4", "section5"],
    navigation: true,
    navigationPosition: "right",
    sectionsColor: ["#824485", "#F5D8D5", "#CAC5D8", "#e37682", "#263238"],
    afterLoad: function (anchorLink, index) {
      if (anchorLink == "section1") {
        $("nav ul li a").removeClass("active");
        $("nav ul li:nth-child(1)").find("a").addClass("active");
      }

      if (anchorLink == "section2") {
        $("nav ul li a").removeClass("active");
        $("nav ul li:nth-child(2)").find("a").addClass("active");
      }

      if (anchorLink == "section3") {
        $("nav ul li a").removeClass("active");
        $("nav ul li:nth-child(3)").find("a").addClass("active");
      }

      if (anchorLink == "section4") {
        $("nav ul li a").removeClass("active");
        $("nav ul li:nth-child(4)").find("a").addClass("active");
      }

      if (anchorLink == "section5") {
        $("nav ul li a").removeClass("active");
        $("nav ul li:nth-child(5)").find("a").addClass("active");
      }

      console.log("현재 섹션 번호는  " + index);
    },

    afterSlideLoad: function (anchorLink, index, slideAnchor, slideIndex) {
      console.log("현재 슬라이드 번호는" + slideIndex);
    },
  });
});
