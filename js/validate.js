function checkInput() {
  const ho = document.querySelector(".ho").value; // Lấy giá trị của input
  const ten = document.querySelector(".ten").value; // Lấy giá trị của input
  const phone_email = document.querySelector(".phone-email").value; // Lấy giá trị của input
  const password = document.querySelector(".password").value; // Lấy giá trị của input
  const mnv = document.querySelector(".mnv").value; // Lấy giá trị của input
  const ns = document.querySelector(".ns").value; // Lấy giá trị của input
  const submitButton = document.getElementById("btn"); // Lấy nút submit

  // Kiểm tra độ dài và bật/tắt nút submit
  if (
    ten.trim().length > 0 &&
    ho.trim().length > 0 &&
    phone_email.trim().length > 0 &&
    password.trim().length > 0 &&
    mnv.trim().length > 0 &&
    ns.trim().length > 0
  ) {
    submitButton.removeAttribute("disabled"); // Vô hiệu hóa nút submit
    // Bật nút submit
  } else {
    submitButton.setAttribute("disabled", "disabled");
  }
}
function checkUpdateInput() {
  const ho = document.querySelector(".ho").value; // Lấy giá trị của input
  const ten = document.querySelector(".ten").value; // Lấy giá trị của input
  const phone_email = document.querySelector(".phone-email").value; // Lấy giá trị của input
  const mnv = document.querySelector(".mnv").value; // Lấy giá trị của input
  const ns = document.querySelector(".ns").value; // Lấy giá trị của input
  const submitButton = document.getElementById("btn"); // Lấy nút submit
  console.log(">>>", ho);

  // Kiểm tra độ dài và bật/tắt nút submit
  if (
    ten.trim().length > 0 &&
    ho.trim().length > 0 &&
    phone_email.trim().length > 0 &&
    mnv.trim().length > 0 &&
    ns.trim().length > 0
  ) {
    submitButton.removeAttribute("disabled"); // Vô hiệu hóa nút submit
    // Bật nút submit
  } else {
    submitButton.setAttribute("disabled", "disabled");
  }
}
const CheckDelete = () => {
  const mnv = document.querySelector(".mnv").value; // Lấy giá trị của input
  const submitButton = document.getElementById("btn"); // Lấy nút submit
  if (mnv.trim().length > 0) {
    submitButton.removeAttribute("disabled"); // Vô hiệu hóa nút submit
    // Bật nút submit
  } else {
    submitButton.setAttribute("disabled", "disabled");
  }
};
