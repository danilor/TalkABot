<html>
@include('start.blocks.head')
<body>
<div class="row">
    <div class="col-xs-12 col-xs-offset-0 col-sm-12 col-sm-offset-0 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
        @yield("content")
    </div>
</div>

<!-- About Us End -->
</body>
@include("templates.blocks.footerJs")
</html>