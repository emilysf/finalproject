@include ('header')
@include ('nav')

<style>
  .overlay { 
    color:#000059;
    position:absolute;
    z-index:12;
    top:55%;
    right:0;
    width:35%;
    height:35%;
    margin-right:3%;
    text-align:center;
    border:2px solid #000059;
  }
  .box-body {
    background-color: #000059;
    margin-bottom:3%;
  }
  #carousel {
    margin-top: 1%;
    margin-bottom: 2%;
  }
  #logo {
    margin-top: 10px;
    width:300px;
    height:auto;
  }
  #news, #events {
    border:2px solid #000059;
    height:300px;
    margin-left: 11%;
    margin-bottom: 5%;
    background-color: #fff;
  }
  h2 {
    color:#000059;
    text-align: center;
  }
</style>

  <div class="col-md-12" id="carousel">
    <div class="box box-solid">
            
      <!-- /.box-header -->
      <div class="box-body">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <div class="overlay">
          <img src= {{ asset("/images/logo.png")}} id="logo">
          <h3>Your studio in one place</h3>
          <a href="/signup"><button type="button" class="btn btn-primary">Register Now!</button></a>
        </div>
          <ol class="carousel-indicators">
            <li data-target= "#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
            <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
          </ol>
          <div class="carousel-inner">
            <div class="item active">
              <img src= {{ asset ("/images/dance2.jpg")}} alt="First slide" style= "width:100%; height:500px">
            </div>
            <div class="item">
              <img src= {{ asset ("/images/dance5.jpg")}} alt="First slide" style= "width:100%; height:500px">
            </div>
            <div class="item">
              <img src= {{ asset ("/images/dance6.jpg")}} alt="First slide" style= "width:100%; height:500px">
            </div>
          </div>
          <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
            <span class="fa fa-angle-left"></span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
            <span class="fa fa-angle-right"></span>
          </a>
        </div>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div> 


  <div class="container" id="news-events">
    <div class="row">
      <div class="col-md-4" id="news">
        <h2>Studio News</h2>
      </div>
      <div class="col-md-4" id="events">
        <h2>Local Events</h2>
      </div>
    </div>
  </div>
   
@include ('footer')