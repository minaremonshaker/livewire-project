<!DOCTYPE html>

<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>

  @include('components.admin.head')

  <body>
    <!-- Content -->
      @yield('content')
    <!-- / Content -->

    @include('components.admin.scripts')
  </body>
</html>