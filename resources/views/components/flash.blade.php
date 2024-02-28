<div>
    @if (session()->has('flash.message'))
        @include('flash::flash.success')

        @include('flash::flash.info')

        @include('flash::flash.error')
    @endif
    {{ session()->forget('flash.message') }}
</div>
<script>
    var flash = {
        timeout: "{{ config('flash.timeout') }}",
    }
</script>