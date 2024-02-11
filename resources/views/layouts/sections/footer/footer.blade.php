@php
$containerFooter = (isset($configData['contentLayout']) && $configData['contentLayout'] === 'compact') ? 'container-xxl' : 'container-fluid';
@endphp

<!-- Footer-->
<footer class="content-footer footer bg-footer-theme">
  <div class="{{ $containerFooter }}">
    <div class="footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column">
      <div>
        © BBox Company <script>document.write(new Date().getFullYear())
      </script>, </a>
      </div>
      <div class="d-none d-lg-inline-block">
        <a href="{{ config('variables.About') ? config('variables.About') : '#' }}" class="footer-link me-4" target="_blank">About</a>
        <a href="{{ config('variables.MessageUs') ? config('variables.MessageUs') : '#' }}" target="_blank" class="footer-link me-4">Message Us</a>
        <a href="{{ config('variables.FAQ') ? config('variables.FAQ').'/laravel-introduction.html' : '#' }}" target="_blank" class="footer-link me-4">FAQ</a>
        <a href="{{ config('variables.HelpSupport') ? config('variables.HelpSupport') : '#' }}" target="_blank" class="footer-link d-none d-sm-inline-block">Help Support</a>
      </div>
    </div>
  </div>
</footer>
<!--/ Footer-->
