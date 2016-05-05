<script type="text/javascript">
    var config = {};
    config.path = {};
    config.path.tpl = "{{ config('app.url') . config('view.custom.tpl') }}";
    config.path.ajax = "{{ config('app.url') }}";    
</script>

@yield('custom_top_script')