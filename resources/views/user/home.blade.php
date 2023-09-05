
@include('user.layout.header')
@include('user.layout.slider')
@include('user.layout.banner')
@include('user.layout.products')
@include('user.layout.footer')
<script>
        document.addEventListener("DOMContentLoaded", function(event) { 
            var scrollpos = localStorage.getItem('scrollpos');
            if (scrollpos) window.scrollTo(0, scrollpos);
        });

        window.onbeforeunload = function(e) {
            localStorage.setItem('scrollpos', window.scrollY);
        };
</script>