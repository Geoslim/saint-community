@component('mail::message')
# Introduction

<strong>Name: </strong> {{ Auth::user()->name}}<br>
<strong>E-mail: </strong> {{ Auth::user()->email }}<br>
<strong>Message: </strong> 

{!! $data['body']  !!}
@endcomponent
 