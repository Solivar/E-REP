@extends('layouts.app')

@section('content')
<script>
    const globalData = {};
    globalData.authUserId = {!! $authUserId !!};
    globalData.profileId = {!! $profileId !!};
</script>
<div id="root"></div>
@endsection
