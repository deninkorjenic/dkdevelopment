<!doctype html>
<html @php(language_attributes())>
  @include('partials.head')
  <body @php(body_class())>
    @php(do_action('get_header'))
    <div role="document">
      @yield('content')
    </div>

    @php(do_action('get_footer'))
    @php(wp_footer())
    <script src="{!! get_template_directory_uri() !!}/assets/scripts/util/bg/three.min.js" />
    <script src="{!! get_template_directory_uri() !!}/assets/scripts/util/bg/projector.js"></script>
    <script src="{!! get_template_directory_uri() !!}/assets/scripts/util/bg/canvas-renderer.js"></script>
    <script src="{!! get_template_directory_uri() !!}/assets/scripts/util/bg/3d-lines-animation.js"></script>
    <script src="{!! get_template_directory_uri() !!}/assets/scripts/util/bg/color.js"></script>
  </body>
</html>
