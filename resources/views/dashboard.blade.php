<!DOCTYPE html>
<html class="no-js" lang="en">

@include('include.head')

<body>
    <!-- Modal -->
 
    @include('include.quickview')

    @include('include.header')

    @include('include.mobileheader')
    
 
    <main class="main">
        @include('include.home-slider')
        @include('include.category-slider')
        @include('include.banner')
        @include('include.product-tab')
        @include('include.best-sale')
        @include('include.tv-category')
        @include('include.t-shirt')
        @include('include.comp-category')
        @include('include.col')
        @include('include.vendorlist')
        
    </main>


    @include('include.footer')
    @include('include.preloader')
    
    <!-- Vendor JS-->
    @include('include.js')
</body>

</html>