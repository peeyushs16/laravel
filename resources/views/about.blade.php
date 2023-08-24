<x-header />

<h2>Hello vishal</h2>
<a href="{{URL::to('about')}}">About</a>
<a href="{{URL::to('contact')}}">Contact</a>
<br/>
Current URL : {{URL::current()}}


<br/>
Current FULL URL : {{URL::full()}}
<br/>
Previous URL : {{URL::previous()}}