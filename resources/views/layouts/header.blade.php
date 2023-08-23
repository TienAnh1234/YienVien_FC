<div class="container">
    <br>
    <div class="row">
        <div class="col-sm-7">
            <ul class="nav ">
                <li class="nav-item btn btn-info" style="margin:1%"><a href="/address" class="nav-link">Address</a></li>
                <li class="nav-item btn btn-info" style="margin:1%"><a href="/position" class="nav-link">Position</a></li>
                <li class="nav-item btn btn-info" style="margin:1%"><a href="/footballer" class="nav-link">Footballer</a></li>

            </ul>
        </div>

        <div class="col-sm-5">
            
                <div class="input-group">
                    <div class="form-outline">
                        <form action="/search" method="get">
                            @csrf
                            <input type="search" class="form-control" name="keyword" placeholder="Search">
                            <input type="submit" class="btn btn-primary" value="Search"> 
                        </form>
                    </div>
                </div>
        
        </div>
    </div>
</div>