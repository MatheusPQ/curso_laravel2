
@if(session()->has('message'))

<span class="alert alert-success">{{session('message')}}</span>

@endif