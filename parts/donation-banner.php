<?php
// parts/donation-banner.php
?>
<div id="donation-banner" style="
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    background: #0056b3;
    color: white;
    padding: 1rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 1000;
">
  <div>
    Support Roberts for St. Louis! Choose an amount:
    <a href="https://secure.actblue.com/donate/roberts-for-st--louis-2?amount=10"
      style="margin-left: 10px; color: white; text-decoration: underline;">$10</a>
    <a href="https://secure.actblue.com/donate/roberts-for-st--louis-2?amount=25"
      style="margin-left: 10px; color: white; text-decoration: underline;">$25</a>
    <a href="https://secure.actblue.com/donate/roberts-for-st--louis-2?amount=50"
      style="margin-left: 10px; color: white; text-decoration: underline;">$50</a>
    <a href="https://secure.actblue.com/donate/roberts-for-st--louis-2"
      style="margin-left: 10px; color: white; text-decoration: underline;">other amount</a>
  </div>
  <button id="donation-banner-close" style="
        background: none;
        border: none;
        color: white;
        font-size: 1.5rem;
        line-height: 1;
        cursor: pointer;
    ">&times;</button>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const banner = document.getElementById('donation-banner');
    const closeBtn = document.getElementById('donation-banner-close');

    const dismissalKey = 'donationBannerDismissedAt';
    const oneHour = 60 * 60 * 1000; // 1 hour in milliseconds

    function isDismissedRecently() {
      const dismissedAt = localStorage.getItem(dismissalKey);
      if (!dismissedAt) return false;

      const now = Date.now();
      return now - parseInt(dismissedAt, 10) < oneHour;
    }

    // Check if it should be hidden
    if (isDismissedRecently()) {
      banner.style.display = 'none';
    }

    // When the user clicks close
    closeBtn.addEventListener('click', function() {
      banner.style.display = 'none';
      localStorage.setItem(dismissalKey, Date.now().toString());
    });
  });
</script>
