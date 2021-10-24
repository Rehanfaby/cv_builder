<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Your Resume</title>
  

  </head>
  <body id="top">
  <div class="container">
<h1 style="text-align: center;"><strong>{{$person->name}}</strong></h1>
<p style="text-align: center;">{{$person->title}}</p>

<hr />
<p style="text-align: center;">{{$person->contacts->address}} | {{$person->contacts->number}} | <a href="mailto:{{$person->contacts->email}}">{{$person->contacts->email}}</a></p>
<h3><strong>Summary</strong></h3>
<p>{{$person->description}}</p>
<h3>Skills &amp; Abilities</h3>
<ul>
@foreach($person->skills as $item)
<li>{{$item->skill}}</li>
@endforeach

</ul>
<h3>Experience</h3>
@foreach($person->experiences as $item)
<h5>{{$item->job_title}} | {{$item->company_name}} | {{$item->start_date}} - {{$item->end_date}}</h5>
<p>{{$item->job_description}}</p>
@endforeach
<h3>Education</h3>
@foreach($person->educations as $item)
<h6>{{$item->degree_title}} | {{$item->passing_year}} | {{$item->institute}}</h6>
<p>{{$item->degree_description}}</p>
@endforeach
<h3>Language</h3>
<ul>
            @foreach($person->languages as $item)
            <li>{{$item->language}}</li>
            @endforeach
</ul>
<h3>Hobbies</h3>
<ul>
@foreach($person->hobbies as $item)
            <li>{{$item->hobbies}}</li>
            @endforeach
</ul>
</div>
  </body>
</html>