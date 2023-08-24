<h1>Welcome Admin</h1>

{{print_r($names)}}

{{"Peeyush" }}
@foreach($names as $name)
<h3>{{$name}}</h3>
@endforeach


<h3>Age: {{$age}}</h3>

@if($subject == 'Laravel')
<h4>subject: {{$subject}}</h4>
@else
<h4>subject: PHP</h4>
@endif


<?php echo $subject ?>

@include('contact')

<script>
    var user = @json($names);
    console.log(user);

</script>

