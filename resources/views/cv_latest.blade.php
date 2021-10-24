<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Your Resume</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin"/>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Roboto:wght@300;400;500;700&amp;display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Roboto:wght@300;400;500;700&amp;display=swap" media="print" onload="this.media='all'"/>
    <noscript>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Roboto:wght@300;400;500;700&amp;display=swap"/>
    </noscript>
    <link href="/cv/css/font-awesome/css/all.min.css?ver=1.2.0" rel="stylesheet">
    <link href="/cv/css/bootstrap.min.css?ver=1.2.0" rel="stylesheet">
    <link href="/cv/css/aos.css?ver=1.2.0" rel="stylesheet">
    <link href="/cv/css/main.css?ver=1.2.0" rel="stylesheet">
    <noscript>
      <style type="text/css">
        [data-aos] {
            opacity: 1 !important;
            transform: translate(0) scale(1) !important;
        }
      </style>
    </noscript>
  </head>
  <body id="top">
    <header class="d-print-none">
      <div class="container text-center text-lg-left">
        <div class="py-3 clearfix">
          <h1 class="site-title mb-0">{{$person->name}}</h1>
          <a  href="/home" class="btn btn-light text-dark shadow-sm mt-1 me-1" >Back</a>
          <div class="site-nav">
            <nav role="navigation">
             
            </nav>
          </div>
        </div>
      </div>
    </header>
    <div class="page-content">
      <div class="container" id="container">
<div class="cover shadow-lg bg-white">
  <div class="cover-bg p-3 p-lg-4 text-white cv_cover" >
    <div class="row">
      <div class="col-lg-4 col-md-5">
        <div class="avatar hover-effect bg-white shadow-sm p-1"><img src="{{asset('cv/images/avatar.png')}}" width="200" height="200"/></div>
      </div>
      <div class="col-lg-8 col-md-7 text-center text-md-start">
        <h2 class="h1 mt-2" data-aos="fade-left" data-aos-delay="0">{{$person->name}}</h2>
        <p data-aos="fade-left" data-aos-delay="100">{{$person->title}}</p>
        <div class="d-print-none" data-aos="fade-left" data-aos-delay="200"><button  id="badgeSave2" class="btn btn-light text-dark shadow-sm mt-1 me-1" >Download CV</button></div>
      </div>
    </div>
  </div>
  <div class="about-section pt-4 px-3 px-lg-4 mt-1">
    <div class="row">
      <div class="col-md-6">
        <h2 class="h3 mb-3">About Me</h2>
        <p>{{$person->description}}</p>
      </div>
      <div class="col-md-5 offset-md-1">
        <div class="row mt-2">
          <div class="col-sm-4">
            <div class="pb-1">Age</div>
          </div>
          <div class="col-sm-8">
            <div class="pb-1 text-secondary">{{$person->age}}</div>
          </div>
          <div class="col-sm-4">
            <div class="pb-1">Email</div>
          </div>
          <div class="col-sm-8">
            <div class="pb-1 text-secondary">{{$person->contacts->email}}</div>
          </div>
          <div class="col-sm-4">
            <div class="pb-1">Phone</div>
          </div>
          <div class="col-sm-8">
            <div class="pb-1 text-secondary">{{$person->contacts->number}}</div>
          </div>
          <div class="col-sm-4">
            <div class="pb-1">Address</div>
          </div>
          <div class="col-sm-8">
            <div class="pb-1 text-secondary">{{$person->contacts->address}}</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <hr class="d-print-none"/>
  <div class="skills-section px-3 px-lg-4">
    <h2 class="h3 mb-3">Professional Skills</h2>
    <div class="row">
      
      @foreach($person->skills as $item)
      <div class="col-md-6">
        <div class="mb-2"><span>{{$item->skill}}</span>
          <div class="progress my-1">
            <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="100" data-aos-anchor=".skills-section" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
     </div>
     @endforeach
      
    </div>
  </div>
  <hr class="d-print-none"/>
  <div class="work-experience-section px-3 px-lg-4">
    <h2 class="h3 mb-4">Work Experience</h2>
    <div class="timeline">
      @foreach($person->experiences as $item)
      <div class="timeline-card timeline-card-primary card shadow-sm">
        <div class="card-body">
          <div class="h5 mb-1">{{$item->job_title}} <span class="text-muted h6">at {{$item->company_name}}</span></div>
          <div class="text-muted text-small mb-2">{{$item->start_date}} - {{$item->end_date}}</div>
          <div>{{$item->job_description}}</div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  <hr class="d-print-none"/>
  <div class="page-break"></div>
  <div class="education-section px-3 px-lg-4 pb-4">
    <h2 class="h3 mb-4">Education</h2>
    <div class="timeline">
    @foreach($person->educations as $item)
      <div class="timeline-card timeline-card-success card shadow-sm">
        <div class="card-body">
          <div class="h5 mb-1">{{$item->degree_title}} <span class="text-muted h6">from {{$item->institute}}</span></div>
          <div class="text-muted text-small mb-2">{{$item->passing_year}}</div>
          <div>{{$item->degree_description}}</div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  <hr class="d-print-none"/>
  <div class="contant-section px-3 px-lg-4 pb-4" id="contact">
    <h2 class="h3 text mb-3">Language</h2>
    <div class="row">
     <div class="col">
        <div class="mt-2">
          <ul>
            @foreach($person->languages as $item)
            <li>{{$item->language}}</li>
            @endforeach
          </ul>
        </div>
      </div>
 
    </div>
    <h2 class="h3 text mb-3">Hobbies</h2>
    <div class="row">
     <div class="col">
        <div class="mt-2">
          <ul>
            @foreach($person->hobbies as $item)
            <li>{{$item->hobbies}}</li>
            @endforeach
          </ul>
        </div>
      </div>
 
    </div>
  </div>
</div></div>
    </div>
    <footer class="pt-4 pb-4 text-muted text-center d-print-none">
      <div class="container">
        <div class="my-3">
          <div class="h4">{{$person->name}}</div>
      
        <div class="text-small">
          <div>Design for - <a href="#" target="_blank">DevBunch Technologies</a></div>
        </div>
      </div>
    </footer>
    <script src="/cv/scripts/bootstrap.bundle.min.js?ver=1.2.0"></script>
    <script src="/cv/scripts/aos.js?ver=1.2.0"></script>
    <script src="/cv/scripts/main.js?ver=1.2.0"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js" integrity="sha512-s/XK4vYVXTGeUSv4bRPOuxSDmDlTedEpMEcAQk0t/FMd9V6ft8iXdwSBxV0eD60c6w/tjotSlKu9J2AAW1ckTA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
$(function() {


$("#badgeSave2").click(function() {
  $("#badgeSave2").hide();
  html2canvas($("#container"), {
    onrendered: function(canvas) {
      saveAs(canvas.toDataURL(), 'CV.jpg');
    }
  });
});

function saveAs(uri, filename) {
  var link = document.createElement('a');
  if (typeof link.download === 'string') {
    link.href = uri;
    link.download = filename;

    //Firefox requires the link to be in the body
    document.body.appendChild(link);

    //simulate click
    link.click();

    //remove the link when done
    document.body.removeChild(link);
    $("#badgeSave2").show();
  } else {
    window.open(uri);
  }
}
});
</script>
  </body>
</html>