<!-- Stored in resources/views/layouts/master.blade.php -->
<!doctype html>
<html class="no-js"  lang="en">
<html>
        @include('layouts.head', ['title' => 'work'])
    <body>
        @include('layouts.header')
        
        @section('main')
        
        @show

        @include('layouts.footer')
        @include('layouts.scripts')
    </body>
</html>