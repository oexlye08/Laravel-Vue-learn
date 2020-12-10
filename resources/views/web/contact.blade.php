<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/css/website.css">

      
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


    <title>Hello, world!</title>
  </head>
  <body>
    
    <div id="app">

        <!-- A grey horizontal navbar that becomes vertical on small screens -->
      <nav class="navbar navbar-expand-sm bg-light">

        <!-- Links -->
        <ul class="navbar-nav">

            @foreach ($pages as $page)
              <li class="nav-item">
                  <a class="nav-link" href="/page/{{ $page->id }}">{{ $page->name }}</a>
              </li>
            @endforeach
              <li>
                <a class="nav-link" href="contact-us">Contact Us</a>
              </li>
            
        </ul>
    
      </nav>
      
      @if (isset($successMessages))
                
          <div class="alert alert-success">
          <p>
              {{ $successMessages }}  
          </p> 
          </div>
          
      @endif

      @csrf
      <contact-us-form>
      </contact-us-form>

      <!--
      <div class="container">
        <form method="POST" action="/contact-us/sendmessages" class="was-validated">

          @if (isset($successMessages))
            
            <div class="alert alert-success">
              <p>
                {{ $successMessages }}  
              </p> 
            </div>
              
          @endif
        
          @csrf
          <div class="form-group">
            <label for="uname">Username:</label>
            <input type="text" class="form-control | @error('uname') is-invalid @enderror" id="uname" placeholder="Enter username" name="uname">
            @error('uname')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="email">E mail:</label>
            <input type="email" class="form-control | @error('email') is-invalid @enderror" id="email" placeholder="Enter E mail" name="email">
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="messages">Message:</label>
            <textarea class="form-control | @error('messages') is-invalid @enderror" name="messages" id="messages" cols="30" rows="10" placeholder="Enter your messages!"></textarea>
            @error('messages')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      -->

    </div>

  
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
    <script src="/js/website.js"></script>


  </body>
</html>