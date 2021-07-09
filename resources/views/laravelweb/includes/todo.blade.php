<!-- @format -->

<section id="todo">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"
    />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
        
<link rel="stylesheet" href="{{asset('css/stylelaravel.css')}}"/ >
<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="{{asset('js/script.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<body style="background-color: lightblue">
      <div class="container">
        <div class="row">
          <div style="margin-top: 2rem;" class="col s12 m10 offset-m1 l8 offset-l2 xl6 offset-xl3 section">
            <div class="card" style="border-radius: 12px;">
              <div class="card-content" >
                <span class="card-title">Task List</span>
                <form id="task-form">
                  <div class="input-field">
                    <input type="text" name="task" id="task" />
                    <label for="task">New Task</label>
                  </div>
                  <button
                    class="btn waves-effect waves-light"
                    type="submit"
                    name="action"
                  >
                    Add Task <i class="material-icons right">send</i>
                  </button>
                </form>
              </div>
              <div class="card-action" style="border-bottom-left-radius: 12px;border-bottom-right-radius: 12px;">
                <h5>Tasks</h5>
                <div class="input-field col s12">
                  <input type="text" name="filter" id="filter" />
                  <label for="filter">Filter tasks</label>
                </div>
                <ul class="collection"></ul>
                <a href="#" class="clear-btn btn " style="background-color: #244054;">Clear Task</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  
      <!-- jQuery 3.5.1 uncompressed -->
      <script
        src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous"
      ></script>
      <!-- Compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      <script type="text/javascript" src="{{asset('js/apptodolist.js') }}"></script>
    </div>
  </body>

</section>