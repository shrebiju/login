@if (session()->has('success'))
<div class="alert alert-success" id="alert-message">
    @if(is_array(session('success')))
        <ul>
            @foreach (session('success') as $message)
                <li>{{ $message }}</li>
            @endforeach
        </ul>
    @else
        {{ session('success') }}
    @endif
</div>
@endif

<script type="text/javascript">
$(document).ready(function () {
    $('.alert alert-success').delay(1000).slideUp(300);
        });
</script>

