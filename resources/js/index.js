$(function () {
  $(".list-product").slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,
        }
      },
      {
        breakpoint: 769,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,
        }
      },
    ]
  });
});
//onlaod js
$(window).ready(()=>{
  console.log("id product = " + $(".btn_del")[0].attributes[2].value);
  
})
$(".btn_del").click((data)=>{
  $.get("/product/delete/" + $id, (data)=>{
    // xử lý product
    if(data == 1){
      //nếu xóa thành công
      $.get("admin/listmenu", (data)=>{
        $("#content").html(data);
      })
    }
  })
})





