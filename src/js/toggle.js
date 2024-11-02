document.addEventListener("DOMContentLoaded", function () {
  let currentViewedMember = null;

  document.querySelectorAll(".view-details-button").forEach((button) => {
    button.addEventListener("click", function () {
      const index = this.getAttribute("data-index");
      const details = document.getElementById(`details-${index}`);

      document.querySelectorAll(".view-details-button").forEach((btn) => {
        btn.style.backgroundColor = "transparent";
      });

      if (currentViewedMember && currentViewedMember !== details) {
        currentViewedMember.hidden = true;
      }

      if (details) {
        details.hidden = !details.hidden;
        currentViewedMember = details.hidden ? null : details;
      }

      if (details.hidden === false) {
        this.style.backgroundColor = "#EDE236";
      }
    });
  });
});
