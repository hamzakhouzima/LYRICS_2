<?php 
include '../controller/content.php';


    if(!isset($_SESSION['log'])){
        header("location:view_login.php");
    }


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Frontendfunn - Bootstrap 5 Admin Dashboard Template</title>

  </head>

  <body>




    <!-- top navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        
        <button   class="navbar-toggler" type="button"  data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="offcanvasExample">
          <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
        </button>
        <a class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold" href="#">e-lyrics</a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavBar" aria-controls="topNavBar"aria-expanded="false"
         aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button> 
  
       
        <div class="collapse navbar-collapse" id="topNavBar">
          <form class="d-flex ms-auto my-3 my-lg-0" method='post'>
            <div class="input-group">
              <input class="form-control" type="search" placeholder="Search" aria-label="Search"  id='live_search'  onkeyup="search()"  />
                
              <button class="btn btn-primary" type="submit">
                <i class="bi bi-search"></i>
              </button>
            </div>
          </form>
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle ms-2"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="bi bi-person-fill"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <a class="dropdown-item" href="#">Something else here</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- top navigation bar -->
    <!-- offcanvas -->
    <div
      class="offcanvas offcanvas-start sidebar-nav bg-dark"
      tabindex="-1"
      id="sidebar"
    >
      <div class="offcanvas-body p-0">
        <nav class="navbar-dark">
          <ul class="navbar-nav">
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3">
                CORE
              </div>
            </li>
          
            <li>
              <a href="#" class="nav-link px-3 active">
                <span class="me-2" id='add' data-target="#exampleModal"><i class="bx bx-plus"></i></span>
                <span>Add</span>
              </a>
            </li>
            <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                Interface
              </div>
            </li>
            <li>
              <a
                class="nav-link px-3 sidebar-link"
                data-bs-toggle="collapse"
                href="#layouts"
              >
                <span class="me-2"><i class="bi bi-layout-split"></i></span>
                <span>Layouts</span>
                <span class="ms-auto">
                  <span class="right-icon">
                    <i class="bi bi-chevron-down"></i>
                  </span>
                </span>
              </a>
              <div class="collapse" id="layouts">
                <ul class="navbar-nav ps-3">
                  <li>
                    <a href="#" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span>Dashboard</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li>
              <a href="#" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-book-fill"></i></span>
                <span>Pages</span>
              </a>
            </li>
            <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                Addons
              </div>
            </li>
            <li>
              <a href="#" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-graph-up"></i></span>
                <span>Charts</span>
              </a>
            </li>
            <li>
              <a href="#" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-table"></i></span>
                <span>Tables</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <!-- offcanvas -->
    <main class="mt-5 pt-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h4>Dashboard</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3">
            <div class="card bg-primary text-white h-100">
              <div class="card-body py-5">Primary Card</div>
              <div class="card-footer d-flex">
                View Details
                <span class="ms-auto">
                  <i class="bi bi-chevron-right"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card bg-warning text-white h-100">
              <div class="card-body py-5"><strong><?php $obj->statAlbums(); ?></strong> ALBUMS</div>
              <div class="card-footer d-flex">
                View Details
                <span class="ms-auto">
                  <i class="bi bi-chevron-right"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card bg-success text-white h-100">
              <div class="card-body py-5"><strong><?php $obj->statTracks();?></strong> TRACKS</div>
              <div class="card-footer d-flex">
                View Details
                <span class="ms-auto">
                  <i class="bi bi-chevron-right"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card bg-danger text-white h-100">
              <div class="card-body py-5"><strong><?php  $obj->statistics('heeamza');?></strong> ARTISTS</div>
              <i class="fa-regular fa-album-collection-circle-plus"></i>
              <div class="card-footer d-flex">
                View Details
                <span class="ms-auto">
                  <i class="bi bi-chevron-right"></i>
                </span>
              </div>
            </div>
          </div>
        </div>
       
        <div class="row">
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header">
                <span><i class="bi bi-table me-2"></i></span> Data Table
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table
                    id="example"
                    class="table table-striped data-table"
                    style="width: 100%"
                  >
                   
                      <tr>
                        <th>Artist Name</th>
                        <th>Album</th>
                        <th>Track</th>
                        <th>Lyrics</th>
                        <th>Modify</th>
                        
                      </tr>
                    

                    <?php 
                    $rows=$obj->getMusic();
                    foreach($rows as $row){
                     echo  "
                      <tbody>
                        <tr>
                          <th class='art1'>".$row['artist']."</th>
                          <th class='art2'>".$row['album']."</th>
                          <th class='art3'>".$row['track_title']."</th>
                          <th class='art4'>".$row['lyrics']."</th>
                          <th>
                         <form method='post'>
                          <input class='id_hidden' type='text' name='id' value=".$row['id']." >
                          <button type='submit'  class='btn btn-danger' name='delete'  >Delete</button>
                          <button type='button' id='update' onclick='resetForm();showDataInModal(event);setAtt();document.querySelector(".'".id_updated"'.").value=this.parentElement.querySelector(".'".id_hidden"'.").value;console.log(".'"tototot"'.");console.log(document.querySelector(".'".id_updated"'.").value)' class='btn btn-success'  name='update'>Update</button></th>
                          </form>
                        </tr>
                      </tbody>"
                      ;
                      }
              
                    ?>

                    
               
                   
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

<!----Reset the form to be empty after updating---->
<script>

function resetForm(){

let x = document.getElementById("my_form");
    x.reset();

}
</script>
<!-------->


      <button type="button" class="btn btn-primary"  onclick="resetAtt();resetForm();" data-bs-toggle="modal" data-bs-target="#exampleModal" >Launch demo modal</button>
  


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">



      <form method='post' id="my_form" >

  <div class="form-group">
    <input type="hidden" class="id_updated" name="u_id"/>
    <label for="exampleInputEmail1" >Artist Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name='artist'  placeholder="Artist">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Album</label>
    <input type="text" class="form-control"  id='exampleInputPassword1' name='album' placeholder="Album">
  </div>

  <div class="form-group ">
  <label class="form-check-label" for="exampleCheck1">Track Name</label>
  <input type="text" class="form-control"  id='exampleCheck1' name='track' placeholder="Track Name">
    
  </div>

  <div class="form-group ">
        <label class="form-check-label" for="exampleCheck1">lyrics</label>

    <textarea type="text" class="form-control" id='exampleCheck2' name='lyrics' placeholder="Track Name"></textarea>
  </div>
  <button type="submit" class="btn btn-primary" name="data_submit">Submit</button>
</form>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success"  id='add_new'>add</button>
        <button type="submit" class="btn btn-primary" >Save changes</button>
      </div>
    </div>
  </div>
</div>
<!----------------------------------------------------------->


    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<script src='main.js'></script>


<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}

function search(){
        var q = document.getElementById('live_search').value;
        if(q.length > 0){
            var xhr = new XMLHttpRequest();
            xhr.open('GET', '../controller/livesearch.php?q='+q, true);
            xhr.onload = function(){
                if(this.status == 200){
                    var data = JSON.parse(this.responseText);
                    var result = document.getElementById('result');
                    result.innerHTML = '';
                    for(var i in data){
                        result.innerHTML += '<p>'+data[i].name+'</p>';
                    }
                }
            }
            xhr.send();
        }
    }




</script>

  </body>
</html>