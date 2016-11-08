@if(Session::has('flash_success'))
    <div class="alert alert-success col-sm-3" id="alert">
        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
        {!! Session::get('flash_success') !!}
        <a href="#" id="alert-close" onclick="hide('alert')">
            <i class="fa fa-close" aria-hidden="true"></i>
        </a>
    </div>

    <script>function hide(target) {
            document.getElementById(target).style.display = 'none';}</script>
@endif

@if(Session::has('flash_info'))
    <div class="alert alert-info col-sm-3" id="alert">
        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
        {!! Session::get('flash_info') !!}
        <a href="#" id="alert-close" onclick="hide('alert')">
            <i class="fa fa-close" aria-hidden="true"></i>
        </a>
    </div>

    <script>function hide(target) {
            document.getElementById(target).style.display = 'none';}</script>
@endif

@if(Session::has('flash_error'))
    <div class="alert alert-danger col-sm-3" id="alert">
        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
        {!! Session::get('flash_error') !!}
        <a href="#" id="alert-close" onclick="hide('alert')">
            <i class="fa fa-close" aria-hidden="true"></i>
        </a>
    </div>

    <script>function hide(target) {
            document.getElementById(target).style.display = 'none';}</script>
@endif
