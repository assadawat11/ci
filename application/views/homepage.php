        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="https://placeholdit.co//i/555x150" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://placeholdit.co//i/555x150" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://placeholdit.co//i/555x150" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <hr>
        <button type="button" class="btn btn-primary">Primary</button>
        <button type="button" class="btn btn-secondary">Secondary</button>
        <button type="button" class="btn btn-success">Success</button>
        <button type="button" class="btn btn-danger">Danger</button>
        <button type="button" class="btn btn-warning">Warning</button>
        <button type="button" class="btn btn-info">Info</button>
        <button type="button" class="btn btn-light">Light</button>
        <button type="button" class="btn btn-dark">Dark</button>

        <button type="button" class="btn btn-link">Link</button>
        <hr>
        <div class="row">
           <div class="col-8"></div>
           <div class="col-4">
               <div class="card">
                   <div class="card-header">
                       เข้าสู่ระบบ
                   </div>
                   <div class="card-body">
                   <p>สวัสดี, บุคคลทั่วไป</p>
                       <form action="/auth/login" method="post">
                           <div class="form-group">
                               <input type="text" name="username" class="form-control" placeholder="username">
                           </div>
                           <div class="form-group">
                               <input type="password" name="password" class="form-control" placeholder="password">
                           </div>
                           <p><a href="#"><i class="fa fa-user"></i> สมัครสมาชิก</a></p>
                           <button type="submit" class="btn btn-primary">บันทึก</button>
                       </form>
                   </div>
               </div>
           </div>
       </div>
