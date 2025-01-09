console.log("Works!!");

document.addEventListener("DOMContentLoaded", () => {
  addInteractToBurgerMenu();
  addCopyLink();
});

function addInteractToBurgerMenu() {
  const header = document.getElementById("header-mobile");
  const burgerMenu = document.getElementById("mobile-menu-burger");

  burgerMenu.addEventListener("click", function () {
    header.classList.toggle("open");
    document.body.classList.toggle("overflow-y-hidden");
  });
}

function addCopyLink() {
  const copyLinkElement = document.getElementById("share-copy-link");

  if (!copyLinkElement) return;

  const postUrl = copyLinkElement.dataset.postUrl;

  copyLinkElement.addEventListener("click", () => {
    // Check if `navigator.clipboard` is available
    const notificationEl = copyLinkElement.querySelector(".share-notification");

    if (!notificationEl) return;

    function showNotification() {
      notificationEl.classList.add("show");
      setTimeout(() => {
        notificationEl.classList.remove("show");
      }, 2000);
    }
    if (navigator.clipboard && navigator.clipboard.writeText) {
      navigator.clipboard
        .writeText(decodeURIComponent(postUrl))
        .then(() => showNotification())
        .catch(() => alert("Failed to copy URL"));
    } else {
      // Fallback: Use a hidden textarea to copy the URL
      const textarea = document.createElement("textarea");
      textarea.value = decodeURIComponent(postUrl);
      document.body.appendChild(textarea);
      textarea.select();
      try {
        document.execCommand("copy");
        showNotification();
      } catch (err) {
        alert("Failed to copy URL");
      }
      document.body.removeChild(textarea);
    }
    return; // No redirection needed
  });
}
