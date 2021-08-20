<?php
function current_page($uri = "/")
{
    $pos = strpos(request()->path(), $uri);

    if ($pos === 0 && (strlen(request()->path()) == strlen($uri)))
    {
        return true;
    } else
    {
        return false;
    }
}

?>

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

@include('admin.layouts.partials.head')
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    @include('admin.layouts.partials.header')
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    @include('admin.layouts.partials.sidebar')
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    @yield('content')
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

   
    @include('admin.layouts.partials.footer')
</body>
<!-- END: Body-->

</html>