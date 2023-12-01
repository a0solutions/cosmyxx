$(document).ready(function () {
  $("#submit2").on("click", function () {
    var count = 0;
    $("#contact_form input, #contact_form textarea").each(function () {
      if ($(this).val() == "" && $(this).hasClass("required")) {
        count = 1;
        $(this)
          .addClass("isinvalid")
          .next(".alert-error")
          .text("This field is required");
      }
    });
    if (count != 1) {
      if (!validateEmail($("input[name=email]").val())) {
        $("input[name=email]")
          .addClass("isinvalid")
          .next(".alert-error")
          .text("Please type a valid email");
      } else {
        if ($("input[name=miel]").val() == "") {
          let name = $("input[name=name]").val();
          let email = $("input[name=email]").val();
          let phone = $("input[name=phone]").val();
          let comments = $("textarea[name=comments]").val();
          let miel = $("textarea[name=miel]").val();
          $.ajax({
            url: "../assets/php/form.php",
            type: "POST",
            data:
              "name=" +
              name +
              "&email=" +
              email +
              "&phone=" +
              phone +
              "&comments=" +
              comments +
              "&miel=" +
              miel,
            success: function (res) {
              if ($.trim(res) == 200) {
                $("#alertmodal").modal("show");
                $("#modal--text").text(
                  "Your message has been sent successfully."
                );
                $("#contact_form")[0].reset();
              } else {
                console.log("KO");
              }
            },
            error: function (error) {
              $("#alertmodal").modal("show");
              $("#modal--text").text("Sorry, something went wrong." + error);
            },
          });
        }
      }
    }
  });

  $("#contact_form input, #contact_form textarea").on("change", function () {
    $(this).removeClass("isinvalid").next(".alert-error").text("");
  });
  const validateEmail = (email) => {
    let string = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    return string.test(email);
  };
});
